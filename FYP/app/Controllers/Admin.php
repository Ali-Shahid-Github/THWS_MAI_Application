<?php

namespace App\Controllers;

class Admin extends BaseController
{
    private $model_SF;
    private $db;
    private $stafRanks = null;

    public function __construct()
    {
        $this->model = new \App\Models\UserModel();
        $this->model_SF = new \App\Models\StaffModel();
        $this->db = \Config\Database::connect();
        helper(['auth', 'validationError', 'text']);
    }

    public function dashboard()
    {
        // dd($name); 
        if (isAdmin())
            return view('Admin/dashboard', ['AdminName' => getUserName()]);
        else
            return redirect()->to('Home/login')
                ->with('errors', 'Please Login First');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/');
    }

    public function termProject()
    {


        if (isAdmin()) {

            $query_1   = $this->db->query('SELECT tp.*, tc.TPC_Title FROM termproject AS tp INNER JOIN termprojectcategory as tc ON tp.TPC_Id=tc.TPC_Id Where TP_isApprove = 0 ');
            $query_2   = $this->db->query('SELECT tp.*, tc.TPC_Title FROM termproject AS tp INNER JOIN termprojectcategory as tc ON tp.TPC_Id=tc.TPC_Id Where TP_isApprove = 1 ');
            // dd($query);

            return view('Admin/adminTermProject', [
                'data' => $query_1->getResultArray(),
                'approved' => $query_2->getResultArray(),
            ]);
        } else {
            return view('errors/html/error_401');
        }
    }

    public function adminTermProjectView($id)
    {
        if (isAdmin()) {
            $query   = $this->db->query('
        SELECT tp.*, tc.TPC_Title, st.* FROM termproject AS tp 
        INNER JOIN termprojectcategory as tc ON tp.TPC_Id=tc.TPC_Id 
        INNER join student as st on tp.St_Id = st.Student_Id 
        where tp.TP_Id =' . $id . ';');
            //dd($query->getResultArray()[0] );

            $res = $query->getResultArray();


            $res = $res[0];
            $this->db->query("UPDATE `termproject` SET `TP_Views` = " . strval(intval($res['TP_Views']) + 1) . " WHERE `termproject`.`TP_Id` = " . $id . ";");

            $res['TP_Views'] = intval($res['TP_Views']) + 1;
            return view('Admin/adminProjectSingle', ['data' => $res]);
        } else {
            return view('errors/html/error_401');
        }
    }

    public function approveProject($id)
    {
        if (isAdmin()) {


            if (isExistTermProject($id)) {
                $q1 = "UPDATE `termproject` SET `TP_isApprove` = 1 WHERE `termproject`.`TP_Id` = " . $id . ";";
                $q2 = "UPDATE `termproject` SET `TP_DOA` = '" . date("Y-d-m") . "' WHERE `termproject`.`TP_Id` = " . $id . ";";

                $this->db->query($q1);
                $this->db->query($q2);
                return redirect()->to('Admin/termProject')->with('message', 'Approved Successfuly');
            } else {
                return redirect()->to('Admin/termProject')->with('error', 'Something went wrong');
            }
        } else
            return view('errors/html/error_401');
    }

    public function deleteProject($id)
    {

        if (isAdmin()) {
            if (isExistTermProject($id)) {
                $this->db->query("DELETE FROM `termproject` WHERE `termproject`.`TP_Id` = " . $id . ";");

                return redirect()->to('Admin/termProject')->with('message', 'Deleted Successfuly');
            } else {
                return redirect()->to('Admin/termProject')->with('error', 'Something went wrong');
            }
        } else
            return view('errors/html/error_401');
    }

    public function staff()
    {

        if (isAdmin()) {

            $query_1   = $this->db->query('SELECT sf.*, sr.SR_Title FROM staff AS sf INNER JOIN staffrank as sr ON sf.SR_Id=sr.SR_Id');

            return view('Admin/staff', [
                'data' => $query_1->getResultArray(),

            ]);
        } else {
            return view('errors/html/error_401');
        }
    }

    public function addStaff()
    {
       
        if (isAdmin()) {
            if ($this->request->getPost()) {
                $d = $this->request->getPost();
                $data = [

                    'SF_Name' => $d['name'],
                    'SF_Email' => $d['email'],
                    'SF_Phone' => $d['phone'],
                    'SF_Password' => random_string('alnum', 8),
                    'SF_Office' => $d['office'],
                    'SR_ID' => $d['rank'],
                ];

                $res =  $this->model_SF->insert($data);
               echo($res);
                if ($res == false) {

                    return redirect()->back()
                        ->with('errors', $this->model_SF->errors())
                        ->withInput();
                } else {

                    return redirect()->to('Admin/staff');
                }
            } else {

                if ($this->stafRanks == null)
                    $this->stafRanks = $this->db->query(' SELECT * from staffrank ')->getResultArray();

                return view("Admin/addStaff", [
                    'url' => "Admin/addStaff",
                    'ranks' => $this->stafRanks
                ]);
            }
        } else
            return view('errors/html/error_401');
    }

    public function deleteStaff($id)
    {

        if (isAdmin()) {
            $this->db->query("DELETE FROM `staff` WHERE `staff`.`SF_Id` = " . $id . ";");

            return redirect()->to('Admin/staff')->with('message', 'Deleted Successfuly');
        } else
            return view('errors/html/error_401');
    }

    public function updateStaff($id = null)
    {
        if (isAdmin()) {
            if ($this->stafRanks == null)
                $this->stafRanks = $this->db->query(' SELECT * from staffrank ')->getResultArray();

            if ($id != null && !$this->request->getPost()) { //Admin wants to edit specific record, so we get data and then get data and passes to edit it
                $data = $this->model_SF->find($id);
                return view(
                    "Admin/addStaff",
                    ['data' => $data, 'url' => "Admin/updateStaff/$id", 'ranks' => $this->stafRanks]
                );
            } else if ($this->request->getPost()) {

                $d = $this->request->getPost();
                $data = [

                    'SF_Name' => $d['name'],
                    'SF_Email' => $d['email'],
                    'SF_Phone' => $d['phone'],
                    'SF_Office' => $d['office'],
                    'SR_ID' => $d['rank'],
                ];

                // dd($data);
                $res =  $this->model_SF->update($d['SF_Id'], $data);
                // dd($res);
                if ($res == false) {

                    return redirect()->back()
                        ->with('errors', $this->model_SF->errors())
                        ->withInput();
                } else {

                    return redirect()->to('Admin/staff');
                }
            } else {


                return view("Admin/addStaff", [
                    'url' => "Admin/addStaff",
                    'ranks' => $this->stafRanks
                ]);
            }
        } else
            return view('errors/html/error_401');
    }

    public function alumni()
    {
        if (isAdmin() || isStaff()) {

            $query_1   = $this->db->query('SELECT * From alumni Where AL_isApprove = 0 ');
            $query_2   = $this->db->query('SELECT * From alumni Where AL_isApprove = 1 ');
            // dd($query);

            return view('Admin/adminAlumni', [
                'data' => $query_1->getResultArray(),
                'approved' => $query_2->getResultArray(),
            ]);
        } else {
            return view('errors/html/error_401');
        }
    }

    public function deleteAlumni($id)
    {

        if (isAdmin() || isStaff()) {
            $this->db->query("DELETE FROM `alumni` WHERE `alumni`.`AL_Id` = " . $id . ";");

            return redirect()->to('dept/alumni')->with('message', 'Deleted Successfuly');
        } else
            return view('errors/html/error_401');
    }

    public function approveAlumni($id)
    {
        if (isAdmin()||isStaff()) {


            $model = new \App\Models\AlumniModel();
            $data = $model->where('AL_Id', $id)->findAll();
            if ($data != null) {

                $q1 = "UPDATE `alumni` SET `AL_IsApprove` = 1 WHERE `alumni`.`AL_Id` = " . $id . ";";


                $this->db->query($q1);

                return redirect()->to('dept/alumni')->with('message', 'Approved Successfuly');
            } else {
                return redirect()->to('dept/alumni')->with('error', 'Something went wrong');
            }
        } else
            return view('errors/html/error_401');
    }

    public function blogs()
    {
        if (isAdmin()) {

            $query_1   = $this->db->query('SELECT b.*, blc.BLC_Title, s.St_Name, s.St_RegNo FROM blogs as b INNER JOIN blog_categories as blc ON blc.BLC_Id = b.BLC_Id INNER JOIN student as s on b.Std_Id = s.Student_Id  WHERE b.BL_isApproved=0 ORDER BY b.BL_CreatedAt DESC;');
            // $query_2   = $this->db->query('SELECT * From alumni Where AL_isApprove = 1 ');
            return view('Admin/adminBlogs', ['data' => $query_1->getResultArray()]);
        } else {
            return view('errors/html/error_401');
        }
    }

    public function deleteBlog($id)
    {

        if (isAdmin()) {
            $this->db->query("DELETE FROM `blogs` WHERE `BL_Id` = ?", [$id]);

            return redirect()->to('Admin/blogs')->with('message', 'Deleted Successfuly');
        } else
            return view('errors/html/error_401');
    }

    public function approveBlog($id)
    {
        if (isAdmin()) {


            $model = new \App\Models\BlogsModel;
            $data = $model->where('BL_Id', $id)->findAll();
            if ($data != null) {

                $q1 = "UPDATE `blogs` SET `BL_isApproved` = 1 WHERE `blogs`.`BL_Id` = ?;";


                $this->db->query($q1, $id);

                return redirect()->to('Admin/blogs')->with('message', 'Approved Successfuly');
            } else {
                return redirect()->to('Admin/blogs')->with('error', 'Something went wrong');
            }
        } else
            return view('errors/html/error_401');
    }

    public function suggestion()
    {

        if (isAdmin()) {

            $sug   = $this->db->query('SELECT s.*, st.SGT_Title FROM `suggestion` as s INNER JOIN suggestion_types as st on st.SGT_Id = s.SG_Type WHERE s.SG_isDone = 0 ORDER BY SG_Id DESC ;')->getResultArray();

            $completed = $this->db->query('SELECT s.*, st.SGT_Title FROM `suggestion` as s INNER JOIN suggestion_types as st on st.SGT_Id = s.SG_Type WHERE s.SG_isDone = 1 ORDER BY SG_DoneAt DESC ;')->getResultArray();

            $sgt   = $this->db->query('SELECT * from suggestion_types')->getResultArray();
            // dd($done->getResultArray());
            return view('Admin/suggestion', [
                'data' => $sug,
                'sgt' => $sgt,
                'done' => $completed
            ]);
        } else {
            return view('errors/html/error_401');
        }
    }

    public function addSuggestion()
    {
        if (isAdmin()) {

            if ($this->request->getPost()) {

                $d = $this->request->getPost();
                // dd($d);

                $data = [

                    'SG_Id' => $d["sg_Id"],
                    'SG_Remark' => $d['desc'],
                    'SG_isDone' => 1,
                    'SG_DoneAt' => date('Y-m-d H:i:s')
                ];

                $model = new \App\Models\SuggesstionModel();
                $res =  $model->save($data);
                //  dd($res);
                if (!$res) {

                    return redirect()->to('Admin/suggestion')
                        ->with('error', $model->errors()['SG_Remark'])
                        ->withInput();
                } else {

                    return redirect()->to('Admin/suggestion')->with('message', 'Added Sucessfully');
                }
            } else {

                return redirect()->to('Admin/suggestion')->with('error', 'Something wentWrong');
            }
        } else {
            return view('errors/html/error_401');
        }
    }

    public function deleteSuggestion($id)
    {
        if (isAdmin()) {

            $data = [

                'SG_Id' => $id,
                'SG_Remark' => 'No Remarks',
                'SG_isDone' => 0,
                'SG_DoneAt' => NULL
            ];
            
            $model = new \App\Models\SuggesstionModel();
            $res =  $model->save($data);
            //  dd($res);
            if (!$res) {

                return redirect()->back()
                    ->with('errors', $model->errors())
                    ->withInput();
            } else {

                return redirect()->to('Admin/suggestion')->with('message', 'Deleted Sucessfully');
            }
        } else {
            return view('errors/html/error_401');
        }
    }
}
