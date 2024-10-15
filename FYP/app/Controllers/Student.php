<?php

namespace App\Controllers;

use Config\App;
use phpDocumentor\Reflection\PseudoTypes\True_;

class Student extends BaseController
{
    private $model_TP;
    private $db;


    public function __construct()
    {
        $this->model_TP = new \App\Models\TermprojectModel;
        $this->db = \Config\Database::connect();
        helper(['auth', 'validationError', 'text']);
    }

    public function dashboard()
    {
        if (isStudent())
            return view('Student/dashboard', ['AdminName' => getUserName()]);
        else
            return redirect()->to('Home/login')
                ->with('errors', 'Please Login First');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/');
    }

    private function correctYoutubeLink($var)
    {
        $res = str_replace('watch?v=', 'embed/', $var);
        if ($res == $var) {

            return str_replace('youtu.be', 'youtube.com/embed/', $var);
        }
        return $res;
    }

    public function addTermProject()
    {
        helper('validationError');
        if (isStudent()) {
            if ($this->request->getPost()) {


                $d = $this->request->getPost();



                $data = [
                    'St_Id' => session("user")["Student_Id"],
                    'TP_Title' => $d['title'],
                    'TP_Year' => $d['year'],
                    'TP_Sem' => $d['semester'],
                    'TP_Domain' => $d['category'],
                    'TP_Desc' => $d['desc'],
                    'TP_Github' => $d['github'],
                    'TP_Youtube' => $this->correctYoutubeLink($d['youtube']),
                    'TP_Lang' => $d['lang'],
                    'TPC_Id' => $d['type'],
                ];

                $res =  $this->model_TP->insert($data);
                // dd($res);
                if ($res == false) {

                    return redirect()->back()
                        ->with('errors', $this->model_TP->errors())
                        ->withInput();
                } else {

                    return $this->stdTermProjects();
                }
            } else
                return view("Student/Add_Term_Project", ['url' => "Student/addTermProject"]);
        } else
            return view('errors/html/error_401');
    }

    public function updateTermProject($var = null)
    {
        if (isStudent()) {
            if ($var != null && !$this->request->getPost()) {
                $data = $this->model_TP->find($var);
                if ($data != null) {
                    if (session("user")["Student_Id"] == $data["St_Id"]) {

                        return view("Student/Add_Term_Project", ['data' => $data, 'isUpd' => true,  'url' => "Student/updateTermProject/$var"]);
                    } else
                        return $this->stdTermProjects();
                } else
                    return $this->stdTermProjects();
            } else if ($this->request->getPost()) {


                $d = $this->request->getPost();

                $data = [
                    'TP_Id' => $d['TP_Id'],
                    'St_Id' => session("user")["Student_Id"],
                    'TP_Title' => $d['title'],
                    'TP_Year' => $d['year'],
                    'TP_Sem' => $d['semester'],
                    'TP_Domain' => $d['category'],
                    'TP_Desc' => $d['desc'],
                    'TP_Github' => $d['github'],
                    'TP_Youtube' => $this->correctYoutubeLink($d['youtube']),
                    'TP_Lang' => $d['lang'],
                    'TPC_Id' => $d['type'],
                ];

                // dd($data);
                $res =  $this->model_TP->update($d['TP_Id'], $data);
                // dd($res);
                if ($res == false) {

                    return redirect()->back()
                        ->with('errors', $this->model_TP->errors())
                        ->withInput();
                } else {

                    return redirect()->to('Student/stdTermProjects');
                }
            } else
                return view("Student/Add_Term_Project", ['url' => "Student/addTermProject"]);
        } else
            return view('errors/html/error_401');
    }

    public function stdTermProjects()
    {

        if (isStudent()) {

            $query_1   = $this->db->query('SELECT tp.*, tc.TPC_Title FROM termproject AS tp INNER JOIN termprojectcategory as tc ON tp.TPC_Id=tc.TPC_Id Where TP_isApprove = 0 And tp.St_Id = ' . session("user")["Student_Id"] . ';');
            $query_2   = $this->db->query('SELECT tp.*, tc.TPC_Title FROM termproject AS tp INNER JOIN termprojectcategory as tc ON tp.TPC_Id=tc.TPC_Id Where TP_isApprove = 1 And tp.St_Id = ' . session("user")["Student_Id"] . ';');
            // dd($query);
            // dd("asasdasdd");
            return view('Student/stdTermProject', [
                'data' => $query_1->getResultArray(),
                'approved' => $query_2->getResultArray(),
            ]);
        } else {
            return view('errors/html/error_401');
        }
    }

    public function deleteProject($id)
    {

        if (isStudent()) {
            $this->db->query("DELETE FROM `termproject` WHERE `termproject`.`TP_Id` = " . $id . " and St_Id =" . session("user")["Student_Id"] . ";");

            return redirect()->to('Student/stdTermProjects')->with('message', 'Deleted Successfuly');
        } else
            return view('errors/html/error_401');
    }

    public function notices()
    {
        if (isStudent()) {


            $data = $this->db->query('SELECT nb.*, nbc.NBC_Title FROM notices AS nb INNER JOIN noticebardcategory as nbc ON nb.NB_CatID=nbc.NBC_ID WHERE nb.NB_IsFaculty=0');
            //dd($data);

            return view("Student/notices", ['data' => $data->getResultArray()]);
        } else
            return view('errors/html/error_401');
    }

    public function downloadAttachment()
    {

        if (isStudent() || isFaculty()) {
            $data = $this->request->getGet('file');
            return $this->response->download($data, null);
        } else
            return view('errors/html/error_401');
    }

    public function fyp()
    {
        if (isStudent()) {

           
            $fyp   = $this->db->query('SELECT * from fyp where FYP_IsSelected = 0 and FYP_Session = ?', [session('user')['St_Session']])->getResultArray();

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

            // dd($fyp);

            return view('Student/fyp', [
                'data' => $fyp,

            ]);
        } else {
            return view('errors/html/error_401');
        }
    }


    public function fypSelect($id)
    {
        if (isStudent()) {


            $data = $this->db->query("SELECT * FROM fyp WHERE FYP_Id = " . $id . " AND FYP_IsSelected = 0 ")->getResultArray();
            if (count($data) == 1) {
                return view('Student/fypMember', [
                    "id" => $data[0]["FYP_Id"],
                    "title" => $data[0]["FYP_Title"]

                ]);
            }
            return redirect()->to("Student/fyp")->with("error", "Invalid Operation");
        } else
            return view('errors/html/error_401');
    }

    public function saveFypMember($id)
    {
        if (isStudent()) {
            $data = $this->db->query("SELECT * FROM fyp WHERE FYP_Id = " . $id . " AND FYP_IsSelected = 0 ")->getResultArray();
            if (count($data) == 1) {  //checking thus Project is available or not

                if ($this->request->getPost()) {
                   
                    $d = $this->request->getPost();
                    $data = $this->db->query("SELECT * FROM student WHERE Student_Id = " .
                        session("user")["Student_Id"] . " AND St_RegNo = \"" . $d["Reg_1"] . "\";")->getResultArray();


                    if (count($data) == 1) {
                        //fyp_selected

                        if (
                            ($this->isNotIn($d['Reg_1']) == true) &&
                            ($this->isNotIn($d['Reg_2']) == true) &&
                            ($this->isNotIn($d['Reg_3']) == true) &&
                            ($this->isNotIn($d['Reg_4']) == true) &&
                            (isset($d['Reg_5']) ? $this->isNotIn($d['Reg_4']) == true : true) == true
                        ) {
                            $pass = random_string('alnum', 8);
                            $data = [
                                'FYP_Id' => $id,
                                'FYPS_M1' => $d['Reg_1'],
                                'FYPS_M2' => $d['Reg_2'],
                                'FYPS_M3' => $d['Reg_3'],
                                'FYPS_M4' => $d['Reg_4'],
                                'FYPS_Password' => $pass
                            ];

                            if (isset($d['Reg_5']))
                                $data["FYPS_M5"] = $d['Reg_5'];

                            $model = new \App\Models\FypselectedModel;
                            try {
                                $res =  $model->insert($data);

                                $fypId = $this->db->insertID();

                                if ($res == false) {

                                    return redirect()->back()
                                        ->with('errors', $model->errors())
                                        ->withInput();
                                } else {
                                    $this->db->query("UPDATE `fyp` SET `FYP_IsSelected` = '1' WHERE `fyp`.`FYP_Id` = " . $id . ";");
                                    $msg = 'Your FYP ID is: ' . $fypId . ' and Password is: ' . $pass;
                                    $this->sendMail(session("user")["St_Email"], session("user")["St_Name"], 'FYP Registration Successfull', $msg);
                                    return redirect()->to("Student/fyp")->with('message', $msg . '<br>' . session("user")["St_Name"] . ', Please Save it and check Your email: ' . session("user")["St_Email"]);
                                }
                            } catch (\Throwable $th) {
                                dd($th);
                                return redirect()->back()
                                    ->with('error', "Invalid Operation")
                                    ->withInput();
                            }
                        } else {
                            return redirect()->back()
                                ->with('error', "Members are already registered")
                                ->withInput();
                        }
                    } else
                        return redirect()->to("Student/fyp")->with("error", "Leader Id not matched with Current user");
                } else
                    return view('errors/html/error_401');
            }
            return redirect()->to("Student/fyp")->with("error", "Invalid Project");
        } else
            return view('errors/html/error_401');
    }

    private function isNotIn($data)
    {
        $res = $this->db->query("SELECT * FROM `fyp_selected` WHERE '$data' in (`FYPS_M1`, `FYPS_M2`, `FYPS_M3`, `FYPS_M4`, `FYPS_M5`);")->getResultArray();

        if (count($res) == 0)
            return true;
        else {
            return false;
        }
    }

    public function fypLogin()
    {
        if (isStudent()) {
            $d = $this->request->getPost();

            $id = esc($d["fypId"]);
            $pass = esc($d["fypPass"]);

            $stdReg = getStudentReg(session("user")["Student_Id"]);
            if ($stdReg != null) {
                try {
                    $res = $this->db->query("SELECT * FROM `fyp_selected` WHERE FYPS_Id = $id AND FYPS_Password = \"$pass\" AND FYPS_M1= \"$stdReg\"")->getResultArray();
                    if (count($res) == 1) {

                        session()->set('fypLogin', 1);
                        session()->set('fypDetails', $res[0]);

                        return redirect()->to("Student/fypHome");
                    } else {
                        return redirect()->to("Student/fyp")->with("error", "Invalid Credentials");
                    }
                } catch (\Throwable $th) {
                    return redirect()->to("Student/fyp")->with("error", "Unable to Login");
                }
            } else {
                return redirect()->to("Student/fyp")->with("error", "User Does not exist");
            }
        } else {
            return view('errors/html/error_401');
        }
    }

    public function fypHome()
    {
        if (isStudent() && session()->has('fypLogin') ? session('fypLogin') : false) {

            $sql = "SELECT fr.*, fa.FC_Name, fa.FC_Photo, ffr.FR_Title FROM `fyp_remarks` as fr INNER JOIN faculty as fa ON fa.FC_Id = fr.Faculty_Id INNER JOIN facultyrank as ffr ON ffr.FR_Id = fa.FR_Id WHERE fr.FYP_Id = ?;";
            $data = $this->db->query($sql, [session("fypDetails")["FYPS_Id"]])->getResultArray();

            // dd($data);

            return view("Student/fypHome", ["rem" => $data]);
        } else {
            return view('errors/html/error_401');
        }
    }

    public function blogs()
    {

        if (isStudent()) {

            $query_1   = $this->db->query('SELECT * from blogs as b INNER JOIN blog_categories as blc on  blc.BLC_Id = b.BLC_Id WHERE b.Std_Id = ' . session("user")["Student_Id"] . ' ORDER BY BL_Id DESC ;');
            // dd($query_1->getResultArray());
            return view('Student/blogs', [
                'data' => $query_1->getResultArray(),

            ]);
        } else {
            return view('errors/html/error_401');
        }
    }

    public function deleteblog($id)
    {

        if (isStudent()) {
            $sql = "DELETE FROM blogs WHERE blogs.BL_Id = ? and blogs.Std_Id = ?";
            $this->db->query($sql, [$id, session("user")["Student_Id"]]);
            if ($this->db->affectedRows())
                return redirect()->to('Student/blogs')->with('message', 'Deleted Successfuly');
            else
                return redirect()->to('Student/blogs')->with('error', 'Unable to delete');
        } else
            return view('errors/html/error_401');
    }

    public function displayBlog($id)
    {
        if(isStudent())
        {
            $res = $this->db->query("SELECT *, blc.BLC_Title, s.Student_Id, s.St_Name, s.St_Program FROM blogs INNER JOIN blog_categories as blc ON blc.BLC_Id = blogs.BLC_Id
            INNER JOIN student as s ON blogs.Std_Id = s.Student_Id where blogs.BL_Id = ?",$id);
            $res = $res->getResultArray();
            // dd($res);
            if(count($res)==1 && $res[0]['Std_Id']==session('user')['Student_Id']){
                //  dd($res);
                return view('Student/showBlog', ["data"=>$res[0]]);
            }
            else {
                return redirect()->to('Student/blogs' )->with('error', 'Action Not allowed');
            }
            
        }
        else {
            return view('errors/html/error_401');
        }
    }

    public function writeBlog()
    {
        if (isStudent()) {
            $blc   = $this->db->query('SELECT * from blog_categories as blc;');
            // dd($blc->getResultArray());
            return view("Student/writeBlog", ['blc' => $blc->getResultArray()]);
        }
        else {
            return view('errors/html/error_401');
        }
    }

    public function uploadPdfBlog()
    {
        if (isStudent()) {
            $blc   = $this->db->query('SELECT * from blog_categories as blc;');
            // dd($blc->getResultArray());
            return view("Student/addBlogPDF", ['blc' => $blc->getResultArray()]);
        }
        else {
            return view('errors/html/error_401');
        }
    }

    public function savePdfBlog()
    {
        if (isStudent()) {


            if ($this->request->getPost()) {

                $d = $this->request->getPost();
                //dd($d);
                $finalthumnail = "/assets/images/blog3.jpg";
                $finalPdfBlog = "";
                
                if ($this->request->getFile("thumbnail")->getError() == 0) {
                    $img = $this->request->getFile("thumbnail");

                    if ($img->getSizeByUnit($unit = 'mb') > 5.0) {
                        return redirect()->back()
                            ->with('errors', ['BL_Thumbnail' => 'Thubnail size must be in in <= 5.0 MB'])
                            ->withInput();
                    } else {

                        $filExt = explode('.', $img->getName());
                        $allowed = array("png", "jpg", "jpeg");

                        if (in_array(end($filExt), $allowed)) {

                            $imageService = service('image');
                            $t = time();
                            $path = 'uploads/images/BlogThumbnail_'. $t. '_'  .  session("user")["Student_Id"]  . '_' . $img->getName();
                            // dd($path);
                            $imageService->withFile($img->getRealPath())
                                ->fit(400, 400, 'center')
                                ->save($path);

                            $finalthumnail = $path;
                        } else {
                            return redirect()->back()
                                ->with('errors', ['BL_Thumbnail' => 'PNG, JPG, JPEG files are allowed only'])
                                ->withInput();
                        }
                    }
                }

                if ($this->request->getFile("blog")->getError() == 0) {
                    $blogFile = $this->request->getFile("blog");

                    if ($blogFile->getSizeByUnit('mb') > 15.0) {
                        return redirect()->back()
                            ->with('errors', ['BL_Content' => 'Blog File size must be in in <= 15.0 MB'])
                            ->withInput();
                    } else {

                        $filExt = explode('.', $blogFile->getName());
                        $allowed = array("pdf");

                        if (in_array(end($filExt), $allowed)) {

                          
                            $t = time();
                            $name =  $blogFile->getName();
                            $path = 'uploads/blogs/BlogFile_'. $t. '_'  .  session("user")["Student_Id"]  . '_' . $name;
                            $blogFile->move("uploads/blogs", 'BlogFile_'. $t. '_'  .  session("user")["Student_Id"]  . '_' . $name , true);
                            // dd($path);
                            

                            $finalPdfBlog = $path;
                        } else {
                            return redirect()->back()
                                ->with('errors', ['BL_Content' => 'Only PDF file is allowed'])
                                ->withInput();
                        }
                    }
                }

                $data = [
                    'BL_Title' => $d['title'],
                    'BL_Thumbnail' => $finalthumnail,
                    'BL_Content' => $finalPdfBlog,
                    'Std_Id' => session("user")["Student_Id"],
                    'BLC_Id' => $d['category'],
                    'BL_Description' => $d['desc'],
                    'BL_isPDF' => 1,
                ];

                $model = new \App\Models\BlogsModel();
                $res =  $model->insert($data);
                //  dd($res);
                if (!$res) {

                    return redirect()->back()
                        ->with('errors', $model->errors())
                        ->withInput();
                } else {

                    return redirect()->to('Student/blogs')->with('message', 'Added Sucessfully');
                }
            } 
            else
                return view('errors/html/error_401');
        } else {
            return view('errors/html/error_401');
        }
    }
    
    public function saveBlog()
    {
        if (isStudent()) {
            if ($this->request->getPost()) {

                $d = $this->request->getPost();
                // dd($d);
                $finalthumnail = "/assets/images/blog3.jpg"; 
                
                if ($this->request->getFile("thumbnail")->getError() == 0) {
                    $img = $this->request->getFile("thumbnail");

                    if ($img->getSizeByUnit($unit = 'mb') > 5.0) {
                        return redirect()->back()
                            ->with('errors', ['BL_Thumbnail' => 'Thubnail size must be in in <= 5.0 MB'])
                            ->withInput();
                    } else {

                        $filExt = explode('.', $img->getName());
                        $allowed = array("png", "jpg", "jpeg");

                        if (in_array(end($filExt), $allowed)) {

                            $imageService = service('image');
                            $t = time();
                            $path = 'uploads/images/BlogThumbnail_'. $t. '_'  .  session("user")["Student_Id"]  . '_' . $img->getName();
                            // dd($path);
                            $imageService->withFile($img->getRealPath())
                                ->fit(400, 400, 'center')
                                ->save($path);

                            $finalthumnail = $path;
                        } else {
                            return redirect()->back()
                                ->with('errors', ['BL_Thumbnail' => 'PNG, JPG, JPEG files are allowed only'])
                                ->withInput();
                        }
                    }
                }
                
                $data = [
                    'BL_Title' => $d['title'],
                    'BL_Thumbnail' => $finalthumnail,
                    'BL_Content' => $d["content"],
                    'Std_Id' => session("user")["Student_Id"],
                    'BLC_Id' => $d['category'],
                    'BL_Description' => $d['desc'],
                    'BL_isPDF' => 0,
                ];

                $model = new \App\Models\BlogsModel();
                $res =  $model->insert($data);
                //  dd($res);
                if (!$res) {

                    return redirect()->back()
                        ->with('errors', $model->errors())
                        ->withInput();
                } else {

                    return redirect()->to('Student/blogs')->with('message', 'Added Sucessfully');
                }
            } 
            else
                return view('errors/html/error_401');
        } else {
            return view('errors/html/error_401');
        }
    }
    
    public function suggestion()
    {

        if (isStudent()) {

            $query_1   = $this->db->query('SELECT s.*, st.SGT_Title FROM `suggestion` as s INNER JOIN suggestion_types as st on st.SGT_Id = s.SG_Type WHERE s.Std_Id = ' . session("user")["Student_Id"] . ' ORDER BY SG_Id DESC ;');
            $query_1 = $query_1->getResultArray();

            $done = $this->db->query('SELECT s.*, st.SGT_Title FROM `suggestion` as s INNER JOIN suggestion_types as st on st.SGT_Id = s.SG_Type WHERE s.SG_isDone = 1 AND s.Std_Id = ' . session("user")["Student_Id"] . ' ORDER BY SG_DoneAt DESC ;')->getResultArray();

            $sgt   = $this->db->query('SELECT * from suggestion_types')->getResultArray();
            // dd($done->getResultArray());
            return view('Student/suggestion', [
                                                'data'=>$query_1, 
                                                'sgt' => $sgt, 
                                                'done' => $done]);
        } else {
            return view('errors/html/error_401');
        }
    }

    public function addSuggestion()
    {
        if (isStudent()) {

              if ($this->request->getPost()) {

                $d = $this->request->getPost();
                // dd($d);
              
                if (isset($d["sg_id"])) {
                    $data = [
                        'SG_Id' => $d["sg_id"],
                        'SG_Title' => $d['title'],
                        'Std_Id' => session("user")["Student_Id"],
                        'SG_Desc' => $d['desc'],
                        'SG_Severity' => $d['severity'],
                        'SG_Type' => $d['type'],
                        'SG_Remark' => 'No Remark'
                    ];
                    
                } else {
                    
                    // dd($d);
                    $data = [
                        'SG_Title' => $d['title'],
                        'Std_Id' => session("user")["Student_Id"],
                        'SG_Desc' => $d['desc'],
                        'SG_Severity' => $d['severity'],
                        'SG_Type' => $d['type'],
                        'SG_isDone' => 0,
                        'SG_Remark' => 'No Remark'
                    ];
                    
                }
              
                $model = new \App\Models\SuggesstionModel();
                $res =  $model->save($data);
                //  dd($data);
                if (!$res) {
                    // print_r($model->errors());
                    return redirect()->back()
                        ->with('errors', $model->errors())
                        ->withInput();
                } else {

                    return redirect()->to('Student/suggestion')->with('message', 'Added Sucessfully');
                }
            } 
            else {
                $sgt   = $this->db->query('SELECT * from suggestion_types');
                return view('Student/AddSuggestion', ['sgt' => $sgt->getResultArray()]);
            }
        } else {
            return view('errors/html/error_401');
        }
    }

    public function deleteSuggestion($id)
    {

        if (isStudent()) {
            $sql = "DELETE FROM suggestion WHERE SG_Id  = ? and Std_Id = ?";

            $this->db->query($sql, [$id, session("user")["Student_Id"]]);

            if ($this->db->affectedRows())
                return redirect()->to('Student/suggestion')->with('message', 'Deleted Successfuly');
            else
                return redirect()->to('Student/suggestion')->with('error', 'Unable to delete');
        } else
            return view('errors/html/error_401');
    }

    public function saveSubmission($id)
    {
        if (isStudent()) {

            
            if ($this->request->getFile("phase-".$id)) {

            
                $file = $this->request->getFile("phase-".$id);
                // dd($);
                $finaldata = "";

                if ($file->isValid()) {
                    if ($file->getSizeByUnit('mb') > 10.0) {
                        return redirect()->back()
                            ->with('errors', ['phase1' => 'File size must be in in range of 10 MB'])
                            ->withInput();
                    } else {

                        $filExt = explode('.', $file->getName());
                        $allowed = array("zip", "pdf");
                        $t = time();

                        if (in_array(end($filExt), $allowed)) {
                           
                            // $name =  $file->getName();
                            $name = "FYP_". session('fypDetails')['FYPS_Id']. "_Phase_"  .  $id;
                           
                            $path = 'uploads/FYP_'. session('fypDetails')['FYPS_Id']. '_Phase_'  .  $id;
                            $file->move("uploads/" , $name  ,true);
                            // dd($path);


                          
                            $finaldata = 'uploads/'. $path;
                        } else {
                            return redirect()->back()
                                ->with('errors', ['phase1' => '.pdf or zip are allowed only'])
                                ->withInput();
                        }
                    }
                }

                dd($finaldata);

                if (isset($d["sl_id"])) {
                    $data = [
                        'SL_Id' => $d["sl_id"],
                        'SL_Title' => $d['title'],
                        'SL_Desc' => $d['desc'],
                    ];
                    if ($file->isValid())
                        $data['SL_Image'] = $finaldata;
                } else {
                    if ($file->isValid()) {
                        $data = [
                            'SL_Title' => 123,
                            'SL_Desc' => 23,
                            'SL_Image' => $finaldata,
                        ];
                    } else {
                        return redirect()->back()
                            ->with('errors', ['SL_Image' => 'Image not found'])
                            ->withInput();
                    }
                }

                $model = new \App\Models\SliderModel();
                $res =  $model->save($data);
                //  dd($res);
                if (!$res) {

                    return redirect()->back()
                        ->with('errors', $model->errors())
                        ->withInput();
                } else {
                    return redirect()->to('Staff/slider')->with('message', 'Added sucessful');
                }
            } 
        } else {
            return view('errors/html/error_401');
        }
    }


}
