<?php

namespace App\Controllers;

use Hamcrest\Text\IsEmptyString;

class Faculty extends BaseController
{
    private $model;
    private $db;

    public function __construct()
    {
        $this->model = new \App\Models\UserModel;
        $this->db = \Config\Database::connect();

        helper(['auth', 'validationError', 'text']);
    }

    public function dashboard()
    {
        // dd($name); 

        if (isFaculty())
            return view('Faculty/dashboard', ['AdminName' => session('user')['FC_Name']]);
        else
            return redirect()->to('Home/login')
                ->with('errors', 'Please Login First');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/');
    }

    public function notices()
    {
        if (isFaculty()) {


            $data = $this->db->query('SELECT nb.*, nbc.NBC_Title FROM notices AS nb INNER JOIN noticebardcategory as nbc ON nb.NB_CatID=nbc.NBC_ID WHERE nb.NB_IsFaculty=1');
            //dd($data);

            return view("Faculty/notices", ['data' => $data->getResultArray()]);
        } else
            return view('errors/html/error_401');
    }
    
    
    public function fyp()
    {
        if (isFaculty()) {


            $data = $this->db->query('SELECT * FROM `fyp_selected` as fs INNER JOIN fyp on fyp.FYP_Id = fs.FYP_Id;')->getResultArray();
            //dd($data);


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




            for ($i = 0; $i < count($data); $i++) {
                $data[$i]["FYP_Suprvisor"] = $faculties[$data[$i]["FYP_Suprvisor"]];
                $data[$i]["FYP_CoSupervisor"] = $faculties[$data[$i]["FYP_CoSupervisor"]];
                $data[$i]["FYP_ProjectId"] = $categories[$data[$i]["FYP_ProjectId"]];
            }

            // dd($data);

            return view("Faculty/fyp", ['data' => $data]);
        } else
            return view('errors/html/error_401');
    }

    public function fypDetails($var)
    {
        if (isFaculty()) {

            if (isExistFYPProject($var)) {
                $data = $this->db->query('SELECT * FROM (SELECT * FROM `fyp_selected` Where FYPS_Id = ' . $var . ') as fs INNER JOIN fyp on fyp.FYP_Id = fs.FYP_Id;')->getResultArray();

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

                for ($i = 0; $i < count($data); $i++) {
                    $data[$i]["FYP_Suprvisor"] = $faculties[$data[$i]["FYP_Suprvisor"]];
                    $data[$i]["FYP_CoSupervisor"] = $faculties[$data[$i]["FYP_CoSupervisor"]];
                    $data[$i]["FYP_ProjectId"] = $categories[$data[$i]["FYP_ProjectId"]];
                }

                // dd($data[0]);

                $res = $this->db->query('SELECT fr.*, f.FC_Id, f.FC_Name, f.FC_Photo, f.FR_Id FROM `fyp_remarks` as fr INNER JOIN faculty as f ON f.FC_Id = fr.Faculty_Id WHERE fr.FYP_Id = ' . $var . ' ORDER BY fr.RM_Id DESC;');
                $res = $res->getResultArray();

                return view("Faculty/fypSingle", ['data' => $data[0], 'rem' => $res]);
            } else {
                return redirect()->to('Faculty/fyp')->with('error', 'Something went wrong');
            }
        } else
            return view('errors/html/error_401');
    }

    public function add_remarks()
    {
        if (isFaculty()) {

            if ($this->request->getPost()) {


                $d = $this->request->getPost();
                //  dd($d);
                // dd(session('user')["FC_Id"]);
                $data = [];
                $model = new \App\Models\RemarksModel();

                $isEdit = "Edited";

                if ($d['rm_id'] == "") {
                    $data = [
                        'RM_Title' => $d['rm_title'],
                        'RM_Detail' => $d['rm_desc'],
                        'FYP_Id' => $d['rm_fyp'],
                        'Faculty_Id' => session('user')["FC_Id"],
                        'RM_Phase' => $d['remark_phase']
                    ];

                    $isEdit = "Added";
                } else {
                    $data = [
                        'RM_Title' => $d['rm_title'],
                        'RM_Detail' => $d['rm_desc'],
                        'RM_Id' => $d['rm_id'],
                        'FYP_Id' => $d['rm_fyp'],
                        'Faculty_Id' => session('user')["FC_Id"],
                        'RM_Phase' => $d['remark_phase']
                    ];
                }
                if (!$model->save($data)) {

                    return redirect()->back()
                        ->with('error', 'Unable to perfrom action')
                        ->withInput();
                } else {

                    return redirect()->to('Faculty/fypDetails/' . $d["rm_fyp"])->with('message', 'Remark ' . $isEdit . ' Sucessfully');
                }
            }
        } else
            return view('errors/html/error_401');
    }

    public function delete_remarks($id)
    {

        if (isFaculty()) {


            $model = new \App\Models\RemarksModel;
            $res = $model->where("RM_Id", $id)->first();
            if ($res && $res["Faculty_Id"] == session("user")["FC_Id"]) {
                // dd($res);

                $model->delete($id);
                return redirect()->back()->with('message', 'Deleted Successfuly');
            }
            return redirect()->back()->with('error', 'Something went wrong');
        } else
            return view('errors/html/error_401');
    }
   
    public function research()
    {
        if (isFaculty()) {


            $data = $this->db->query('SELECT * FROM research WHERE FC_Id = ?', session('user')['FC_Id'])->getResultArray();
            // dd($data);

            return view("Faculty/research", ['data' => $data]);
        } else
            return view('errors/html/error_401');
    }

    public function addResearch($isEdit = null)
    {
        if (isFaculty()) {

            if ($this->request->getPost()) {

                $d = $this->request->getPost();
                // dd($d);

                $model = new \App\Models\ResearchModel();
                $res =  null;
                if (($d["RS_Id"])!="") {
                  
                    $data = [
                        'RS_Title' => $d['title'],
                        'FC_Id' => session("user")["FC_Id"],
                        'RS_Desc' => $d['desc'],
                        'RS_Authors' => $d['author'],
                        'RS_Category' => $d['category'],
                        'RS_Year' => $d['year'],
                        'RS_Journal' => $d['journal'],
                        'RS_DOI' => $d['doi'],
                    ];
                    $res =  $model->update($d['RS_Id'],$data);
                } else {
                    // dd("asd");
                    $data = [
                        'RS_Title' => $d['title'],
                        'FC_Id' => session("user")["FC_Id"],
                        'RS_Desc' => $d['desc'],
                        'RS_Authors' => $d['author'],
                        'RS_Category' => $d['category'],
                        'RS_Year' => $d['year'],
                        'RS_Journal' => $d['journal'],
                        'RS_DOI' => $d['doi'],
                    ];
                    $res =  $model->insert($data);
                }
                //  dd($res);
                if (!$res) {

                    return redirect()->back()
                        ->with('errors', $model->errors())
                        ->withInput();
                } else {

                    return redirect()->to('Faculty/research')->with('message', 'Action perfromed Sucessfully');
                }
            } else {
                if (isset($isEdit)) {
                    $model = new \App\Models\ResearchModel();
                    $res =  $model->where('RS_Id', $isEdit)->first();
                    // dd($res);
                    if ($res != null) {
                        return view('Faculty/AddResearch', ['data'=> $res]);
                    } else
                        return redirect()->to('Faculty/research')->with('error', 'Invalid Operation');
                    
                } else
                    return view('Faculty/AddResearch');
            }
        } else {
            return view('errors/html/error_401');
        }
    }

    public function deleteResearch($id)
    {

        if (isFaculty()) {


            $model = new \App\Models\ResearchModel();
            $res = $model->where("RS_Id", $id)->first();
            if ($res && $res["FC_Id"] == session("user")["FC_Id"]) {

                $model->delete($id);
                return redirect()->back()->with('message', 'Deleted Successfuly');
            }
            return redirect()->back()->with('error', 'Something went wrong');
        } else
            return view('errors/html/error_401');
    }

    public function profile()
    {
        if (isFaculty()) {


            $data = $this->db->query('SELECT FR_Title FROM faculty INNER JOIN facultyrank as fr on fr.FR_Id = faculty.FR_Id where faculty.FC_Id = ? ', session('user')['FC_Id'])->getResultArray();
            $dataEdu = $this->db->query('SELECT * FROM faculy_edu WHERE FC_Id = ? ORDER BY FE_Id DESC', session('user')['FC_Id'])->getResultArray();
            $dataAI = $this->db->query('SELECT * FROM faculty_area_interest WHERE FC_Id = ? ORDER BY FAI_Id DESC', session('user')['FC_Id'])->getResultArray();
            // dd($data);

            return view("Faculty/profile", ['facRank' => $data[0]['FR_Title'], 'edu' =>$dataEdu, 'fai'=>$dataAI]);
        } else
            return view('errors/html/error_401');
    }

    public function add_education()
    {
        if (isFaculty()) {

            if ($this->request->getPost()) {


                $d = $this->request->getPost();
                //  dd($d);
                // dd(session('user')["FC_Id"]);
                $data = [];
                $model = new \App\Models\FacultyeduModel();

                $isEdit = "Edited";
                
                if ($d['fe_id'] == "") {
                    $data = [
                        'FE_Title' => $d['fe_title'],
                        'FE_Uni' => $d['fe_uni'],
                        'FE_Loc' => $d['fe_loc'],
                        'FC_Id' => session('user')["FC_Id"],
                        'FE_Year' => $d['year']
                    ];

                    $isEdit = "Added";
                } else {
                    $data = [
                        'FE_Id' => $d['fe_id'],
                        'FE_Title' => $d['fe_title'],
                        'FE_Uni' => $d['fe_uni'],
                        'FE_Loc' => $d['fe_loc'],
                        'FC_Id' => session('user')["FC_Id"],
                        'FE_Year' => $d['year']
                    ];
                }
                if (!$model->save($data)) {

                    return redirect()->back()
                        ->with('errors', $model->errors())
                        ->withInput();
                } else {

                    return redirect()->to('Faculty/profile')->with('message', 'Education Record ' . $isEdit . ' Sucessfully');
                }
            }
        } else
            return view('errors/html/error_401');
    }

    public function delete_education($id)
    {

        if (isFaculty()) {
            $model = new \App\Models\FacultyeduModel();
            $res = $model->where("FE_Id", $id)->first();
            if ($res && $res["FC_Id"] == session("user")["FC_Id"]) {
                // dd($res);

                $model->delete($id);
                return redirect()->back()->with('message', 'Deleted Successfuly');
            }
            return redirect()->back()->with('error', 'Something went wrong');
        } else
            return view('errors/html/error_401');
    }


    public function add_interest()
    {
        if (isFaculty()) {

            if ($this->request->getPost()) {


                $d = $this->request->getPost();
                //  dd($d);
                // dd(session('user')["FC_Id"]);
                $data = [];
                $model = new \App\Models\FacultyinterrestModel();

                $isEdit = "Edited";
                
                if ($d['fai_id'] == "") {
                    $data = [
                        'AI_Item' => $d['ai_item'],
                        'FC_Id' => session('user')["FC_Id"]
                        
                    ];

                    $isEdit = "Added";
                } else {
                    $data = [
                        'FAI_Id' => $d['fai_id'],
                        'AI_Item' => $d['ai_item'],
                        'FC_Id' => session('user')["FC_Id"]
                       
                    ];
                }
                if (!$model->save($data)) {

                    return redirect()->back()
                        ->with('errors', $model->errors())
                        ->withInput();
                } else {

                    return redirect()->to('Faculty/profile')->with('message', 'Area of Interest ' . $isEdit . ' Sucessfully');
                }
            }
        } else
            return view('errors/html/error_401');
    }

    public function delete_interest($id)
    {
        if (isFaculty()) {
            $model = new \App\Models\FacultyinterrestModel();
            $res = $model->where("FAI_Id", $id)->first();
            if ($res && $res["FC_Id"] == session("user")["FC_Id"]) {
                // dd($res);

                $model->delete($id);
                return redirect()->back()->with('message', 'Deleted Successfuly');
            }
            return redirect()->back()->with('error', 'Something went wrong');
        } else
            return view('errors/html/error_401');
    }

    
}
