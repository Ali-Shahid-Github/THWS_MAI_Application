<?php

namespace App\Controllers;

// require '../vendor/autoload.php';



class Home extends BaseController
{
    private $model;
    private $db;


    public function __construct()
    {
        $this->model = new \App\Models\UserModel;
        $this->db = \Config\Database::connect();
        helper(['auth','validationError','text']);
    }




    public function index()
    {
        $dataSlider = $this->db->query("SELECT * FROM slider order by SL_Id Desc ")->getResultArray();

        $dataBlog = $this->db->query("SELECT * FROM `blogs`INNER JOIN blog_categories as blc ON blc.BLC_Id = blogs.BLC_Id where blogs.BL_isApproved = 1 order by blogs.BL_Id Desc limit 6;")->getResultArray();
        
        $dataEvents   = $this->db->query('SELECT e.*, ec.EVC_Title FROM `events` as e INNER JOIN event_categories as ec on ec.EVC_Id = e.EV_Category ORDER by e.EV_Id DESC limit 6;')->getResultArray();
        
        // dd($dataEvents);

        return view('Home/index.php', ["dataSlider" => $dataSlider, 'dataBlog' => $dataBlog, 'dataEvents' => $dataEvents]);
    }

    public function login()
    {
        if (session()->has('user')) {
            if (isAdmin())
                return redirect()->to('Admin/dashboard/');
            if (isStudent())
                return redirect()->to('Student/dashboard/');
            if (isStaff())
                return redirect()->to('Staff/dashboard/');
            if (isFaculty())
                return redirect()->to('Faculty/dashboard/');
        }


        return view('Home/login');
    }

    public function makeLogin()
    {
        if ($this->request->getPost()) {
            $e = $this->request->getPost('email');
            $p = $this->request->getPost('password');

            $where = array(
                'user_email' => $e,
                'user_password' => $p,
            );

            $data = $this->model->where($where)->findAll();


            if (count($data) == 1 && $data[0]['user_password'] == $p) {
                $ses = session();
                $ses->regenerate();
                $data[0]['name'] = $data[0]['user_name'];
                $ses->set('user', $data[0]);
                return $this->login();
            } else {
                $model = new \App\Models\StaffModel;

                $where = array(
                    'SF_Email' => $e,
                    'SF_Password' => $p,
                );

                $data = $model->where($where)->findAll();
                if (count($data) == 1 && $data[0]['SF_Password'] == $p) { {
                        $ses = session();
                        $ses->regenerate();

                        $data[0]['name'] = $data[0]['SF_Name'];
                        $ses->set('user', $data[0]);
                        // dd($data[0]);
                        return $this->login();
                    }
                } else {
                    $model = new \App\Models\FacultyModel;

                    $where = array(
                        'FC_Email' => strip_tags($e),
                        'FC_Password' => strip_tags($p),
                    );

                    $data = $model->where($where)->findAll();
                    if (count($data) == 1 && $data[0]['FC_Password'] == $p) { {
                            $ses = session();
                            $ses->regenerate();

                            $data[0]['name'] = $data[0]['FC_Name'];
                            $ses->set('user', $data[0]);
                            // dd($data[0]);
                            return $this->login();
                        }
                    } else {
                        $model = new \App\Models\StudentModel;

                        $where = array(
                            'St_Email' => strip_tags($e),
                            'St_Password' => strip_tags($p),
                        );

                        $data = $model->where($where)->findAll();
                        if (count($data) == 1 && $data[0]['St_Password'] == $p) { {
                                $ses = session();
                                $ses->regenerate();

                                $data[0]['name'] = $data[0]['St_Name'];
                                $ses->set('user', $data[0]);
                                // dd($data[0]);
                                return $this->login();
                            }
                        } else
                            return redirect()->back()->with('errors', 'User Not Found');
                    }
                }
            }
            return redirect()->back()
                ->with('errors', 'User Not Found');
        }
    }


    public function studentsTermProjects()
    {
        $query   = $this->db->query('SELECT tp.*, tc.TPC_Title FROM termproject AS tp
        
                                     INNER JOIN termprojectcategory as tc ON tp.TPC_Id=tc.TPC_Id Where TP_isApprove = 1 ');

        return view('Home/projectsAll', ['data' => $query->getResultArray()]);
    }

    public function projectSingle($var)
    {
       
        if (isStudent()) {
            $query   = $this->db->query('
                SELECT tp.*, tc.TPC_Title, st.* FROM termproject AS tp 
                INNER JOIN termprojectcategory as tc ON tp.TPC_Id=tc.TPC_Id 
                INNER join student as st on tp.St_Id = st.Student_Id 
                where tp.TP_Id =' . $var . ';');
            //dd($query->getResultArray()[0] );
            // dd($var);
            $res = $query->getResultArray();

            if (count($res) == 1 ) {
                if($res[0]['St_Id'] == session("user")["Student_Id"])
                {
                    return view('Home/projectSingle', ['data' => $res[0]]);
                }
                else
                {
                    $res = $res[0];
                    $this->db->query("UPDATE `termproject` SET `TP_Views` = " . strval(intval($res['TP_Views']) + 1) . " WHERE `termproject`.`TP_Id` = " . $var . ";");
    
                    $res['TP_Views'] = intval($res['TP_Views']) + 1;
                    return view('Home/projectSingle', ['data' => $res]);

                }
                    
            } else
                return view('errors/html/error_401');
        } else {

            
            $query   = $this->db->query('
                SELECT tp.*, tc.TPC_Title, st.* FROM termproject AS tp 
                INNER JOIN termprojectcategory as tc ON tp.TPC_Id=tc.TPC_Id 
                INNER join student as st on tp.St_Id = st.Student_Id 
                where tp.TP_Id =' . $var . ' AND tp.TP_isApprove = 1;');
            //dd($query->getResultArray()[0] );

            $res = $query->getResultArray();

            if (count($res) == 1) {
                $res = $res[0];
                $this->db->query("UPDATE `termproject` SET `TP_Views` = " . strval(intval($res['TP_Views']) + 1) . " WHERE `termproject`.`TP_Id` = " . $var . ";");

                $res['TP_Views'] = intval($res['TP_Views']) + 1;
                return view('Home/projectSingle', ['data' => $res]);
            } else
                return view('errors/html/error_401');
        }
    }

    public function alumni()
    {


        $model = new \App\Models\AlumniModel;
        $data = $model->where('AL_IsApprove', 1)->findAll();

        return view('Home/alumni', ['data' => $data]);
    }

    public function addAlumni()
    {
        if ($this->request->getPost()) {


            $d = $this->request->getPost();

            $img = $this->request->getFile("photo");
            $finalImg = "";
            if ($img->getSizeByUnit($unit = 'mb') > 5.0) {
                return redirect()->back()
                    ->with('errors', ['AL_Photo' => 'Image size must be in in range of 5MB'])
                    ->withInput();
            } else {

                $filExt = explode('.', $img->getName());
                $allowed = array("png", "jpg", "jpeg");
                $t = time();
                if (in_array(end($filExt), $allowed)) {

                    $imageService = service('image');
                    $path = 'uploads/alumni/' . $t . '_'  .  $img->getName();
                    $imageService->withFile($img->getRealPath())
                        ->fit(600, 600, 'center')
                        ->save($path);

                    $finalImg = $path;
                } else {
                    return redirect()->back()
                        ->with('errors', ['AL_Photo' => 'PNG, JPG, JPEG files are allowed only'])
                        ->withInput();
                }
            }


            $data = [
                'AL_Name' => $d['name'],
                'AL_Email' => $d['email'],
                'AL_RegNo' => $d['reg_no'],
                'AL_Desgnation' => $d['designation'],
                'AL_Company' => $d['company'],
                'AL_WhatsApp' => $d['wb'],
                'AL_Info' => $d['info'],
                'AL_Session' => $d['session'],
                'AL_FB' => $d['fb_id'],
                'AL_LinkedIn' => $d['ln'],
                'AL_Photo' => $finalImg
            ];

            $model = new \App\Models\AlumniModel;
            $res =  $model->insert($data);
            // dd($res);
            if (!$res) {

                return redirect()->back()
                    ->with('errors', $model->errors())
                    ->withInput();
            } else {

                return redirect()->to('Home/alumni');
            }
        }
        return view('Home/AddAlumni');
    }

    public function faculty()
    {
        $data = $this->db->query("SELECT * FROM `faculty` as fc INNER JOIN facultyrank as fr on fc.FR_Id = fr.FR_Id;");
        $data = $data->getResultArray();
        // dd($data);
        return view("Home/faculty", ['data' => $data]);
    }

    public function research()
    {
        $res = $this->db->query("SELECT * FROM research order by RS_Id DESC")->getResultArray();
            
        return view('Home/research', ["data"=>$res]);
    }

    public function researchDetail($id)
    {
           
            $res = $this->db->query("SELECT * FROM research WHERE RS_Id = ?", $id)->getResultArray();
            
            if(count($res)==1){
                //  dd($res);
                return view('Home/researchDetail', ["data"=>$res[0]]);
            }
            else {
                return redirect()->to('Home/research');
            }
            
    }

    public function blogs()
    {
        $data = $this->db->query("SELECT * FROM `blogs`INNER JOIN blog_categories as blc ON blc.BLC_Id = blogs.BLC_Id where blogs.BL_isApproved = 1;");
        return view('Home/blogs', ["data" => $data->getResultArray()]);
    }


    public function events()
    {

        $Upcoming   = $this->db->query('SELECT e.*, ec.EVC_Title FROM `events` as e INNER JOIN event_categories as ec on ec.EVC_Id = e.EV_Category where e.EV_Date > CURRENT_DATE() ORDER by e.EV_Id DESC ;');
        $Past   = $this->db->query('SELECT e.*, ec.EVC_Title FROM `events` as e INNER JOIN event_categories as ec on ec.EVC_Id = e.EV_Category where e.EV_Date <= CURRENT_DATE() ORDER by e.EV_Id DESC ;');


        return view('Home/events', [
            'Upcoming' => $Upcoming->getResultArray(),
            'Past' => $Past->getResultArray()
        ]);
    }

    public function eventDetail($var)
    {
        $query   = $this->db->query('SELECT e.*, ec.EVC_Title FROM `events` as e INNER JOIN event_categories as ec on ec.EVC_Id = e.EV_Category where e.EV_Id = ?;', $var);
        // print_r($query->getResultArray());
        // dd($query->getResultArray());

        $res = $query->getResultArray();

        if (count($res) == 1) {
            return view('Home/eventSingle', ['data' => $res[0]]);
        } else
            return view('errors/html/error_401');
    }

    public function showBlog($id)
    {
           
            $res = $this->db->query("SELECT *, blc.BLC_Title, s.Student_Id, s.St_Name, s.St_Program FROM blogs INNER JOIN blog_categories as blc ON blc.BLC_Id = blogs.BLC_Id
            INNER JOIN student as s ON blogs.Std_Id = s.Student_Id where blogs.BL_ID = ? and blogs.BL_isApproved = 1",$id);
            
            $res = $res->getResultArray();
            // dd($res)
            
            if(count($res)==1){
                //  dd($res);
                return view('Student/showBlog', ["data"=>$res[0]]);
            }
            else {
                return redirect()->to('Home/blogs');
            }
            
    }


    public function showProfile($id)
    {
           
        $model = new \App\Models\FacultyModel();
        $res = $model->where("FC_Id", $id)->first();
        if ($res) {
            // dd($res);

            $data = $this->db->query('SELECT FR_Title FROM faculty INNER JOIN facultyrank as fr on fr.FR_Id = faculty.FR_Id where faculty.FC_Id = ? ', $id)->getResultArray();
            $dataFC = $this->db->query('SELECT * from faculty WHERE FC_Id = ? ', $id)->getResultArray();
            $dataEdu = $this->db->query('SELECT * FROM faculy_edu WHERE FC_Id = ? ORDER BY FE_Id DESC', $id)->getResultArray();
            $dataAI = $this->db->query('SELECT * FROM faculty_area_interest WHERE FC_Id = ? ORDER BY FAI_Id DESC', $id)->getResultArray();
            $dataRes = $this->db->query("SELECT * FROM research WHERE FC_ID = ? order by RS_Id DESC", $id)->getResultArray();
        
            // dd($data);
    
            return view("Home/facultySingle", ['facRank' => $data[0]['FR_Title'], 
                                                'edu' =>$dataEdu, 
                                                'fai'=>$dataAI, 
                                                'res'=>$dataRes,
                                                'fac'=>$dataFC[0]]);
           
        }
        else
            return redirect()->to('Home/faculty')->with('error', 'Something went wrong');
    
            
    }

    
    public function policies()
    {
       
            if (!empty($_SERVER['HTTP_CLIENT_IP'])) {   //check ip from share internet
                $ip = $_SERVER['HTTP_CLIENT_IP'];
            } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {   //to check ip is pass from proxy
                $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
            } else {
                $ip = $_SERVER['REMOTE_ADDR'];
            }
            // echo $ip ;
       
        return view('Home/policies');
    }

    public function academics()
    {
        return view('Home/academics');
    }

    public function fyp()
    {

        
        $fyp   = $this->db->query('SELECT * from fyp')->getResultArray();

        getFypDetails();

        $ranks = [];
        $faculties = [];
        $categories = [];

        // dd(session('fyp'));

        foreach (session('s_rank') as $r) {
            // dd($r["FR_Id"]);
            $ranks[$r["FR_Id"]] = $r["FR_Title"];
        }

        foreach (session('s_faculty') as $r) {
            // dd($r["FR_Id"]);
            $faculties[$r["FC_Id"]] = $ranks[$r["FR_Id"]] . " " . $r["FC_Name"];
        }

        foreach (session('s_category') as $r) {
            // dd($r["FR_Id"]);
            $categories[$r["PD_Id"]] = $r["PD_Title"];
        }


        for ($i = 0; $i < count($fyp); $i++) {
            $fyp[$i]["FYP_Suprvisor"] = $faculties[$fyp[$i]["FYP_Suprvisor"]];
            $fyp[$i]["FYP_CoSupervisor"] = $faculties[$fyp[$i]["FYP_CoSupervisor"]];
            $fyp[$i]["FYP_ProjectId"] = $categories[$fyp[$i]["FYP_ProjectId"]];
        }

        return view('Home/fyp', ['data' =>$fyp]);
    }

}
