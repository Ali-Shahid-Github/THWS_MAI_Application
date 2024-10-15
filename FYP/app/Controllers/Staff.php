<?php

namespace App\Controllers;

class Staff extends BaseController
{
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

        if (isStaff())
            return view('Staff/dashboard', ['AdminName' => session('user')['SF_Name']]);
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
        if (isStaff()|| isAdmin()) {

            $query_1   = $this->db->query('SELECT nb.*, nbc.NBC_Title FROM notices AS nb INNER JOIN noticebardcategory as nbc ON nb.NB_CatID=nbc.NBC_ID');

            return view('Staff/notices', [
                'data' => $query_1->getResultArray(),

            ]);
        } else {
            return view('errors/html/error_401');
        }
    }

    public function addNotice()
    {
        if (isStaff() || isAdmin()) {
            if ($this->request->getPost()) {


                $d = $this->request->getPost();


                // dd($d);
                $file = $this->request->getFile("photo");
                $finaldata = "";
                if ($file->getSizeByUnit('mb') > 5.0) {
                    return redirect()->back()
                        ->with('errors', ['NB_Attachemnt' => 'File size must be in in range of 5MB'])
                        ->withInput();
                } else {

                    $filExt = explode('.', $file->getName());
                    $allowed = array("png", "jpg", "jpeg");
                    $t = time();
                    if (end($filExt) == 'pdf') {
                        $file->move('uploads/notices');

                        $finaldata = 'uploads/notices/' . $t . '_' . $file->getName();
                    } else if (in_array(end($filExt), $allowed)) {
                        $imageService = service('image');

                        $imageService->withFile($file->getRealPath())->save('uploads/notices/' . $t . '_'  . $file->getName());

                        $finaldata = 'uploads/notices/' . $t . '_' . $file->getName();
                    } else {
                        return redirect()->back()
                            ->with('errors', ['NB_Attachemnt' => 'PDF, PNG, JPG files are allowed only'])
                            ->withInput();
                    }
                }


                $data = [
                    'NB_Title' => $d['title'],
                    'NB_Description' => $d['desc'],
                    'NB_CatID' => $d['category'],
                    'NB_Attachment' => $finaldata,
                    'NB_IsFaculty' => array_key_exists('isRem', $d) ? 1 : 0

                ];

                $model = new \App\Models\NoticesModel;
                $res =  $model->insert($data);
                //  dd($res);
                if (!$res) {

                    return redirect()->back()
                        ->with('errors', $model->errors())
                        ->withInput();
                } else {

                    // $this->sendMail();
                    return redirect()->to('Staff/notices');
                }
            } else {
                $nbCategory = $this->db->query(' SELECT * from noticebardcategory')->getResultArray();
                return view('Staff/AddNotice', ['cat' => $nbCategory]);
            }
        } else {
            return view('errors/html/error_401');
        }
    }

    public function deleteNotice($id)
    {

        if (isStaff()|| isAdmin()) {

            // $res = $this->db->query("DELETE FROM `notices` WHERE `notices`.`NB_ID` = " . $id . ";");
            $model = new \App\Models\NoticesModel;
            if ($model->find($id)) {
                $model->delete($id);
                return redirect()->to('Staff/notices')->with('message', 'Deleted Successfuly');
            }
            return redirect()->to('Staff/notices')->with('error', 'Something went wrong');
        } else
            return view('errors/html/error_401');
    }

    public function fyp()
    {

        if (isStaff()|| isAdmin()) {

            $ses = session();
            $fyp   = $this->db->query('SELECT * from fyp order by FYP_ID Desc')->getResultArray();

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

            return view('Staff/fyp', [
                'data' => $fyp,

            ]);
        } else {
            return view('errors/html/error_401');
        }
    }

    public function addFyp()
    {
        if (isStaff()|| isAdmin()) {
            if ($this->request->getPost()) {
                $d = $this->request->getPost();
                //  dd($d);
                if ($d['sup'] == $d['coSup']) {
                    return redirect()->back()
                        ->with('error', 'Supervisor and Co-Supervisor must be different')
                        ->withInput();
                }

                $data = [
                    'FYP_Title' => $d['title'],
                    'FYP_Description' => $d['desc'],
                    'FYP_Suprvisor' => $d['sup'],
                    'FYP_CoSupervisor' => $d['coSup'],
                    'FYP_Session' => $d['session'],
                    'FYP_ProjectId' => $d['category'],
                    'FYP_Type' => $d['type'],


                ];

                $model = new \App\Models\FypModel();
                $res =  $model->insert($data);
                //  dd($res);
                if (!$res) {

                    return redirect()->back()
                        ->with('errors', $model->errors())
                        ->withInput();
                } else {


                    return redirect()->to('Staff/fyp');
                }
            } else {




                $ranks = [];
                $faculties = [];
                $categories = [];

                // dd(session('fyp'));

                foreach (session('s_rank') as $r)
                    $ranks[$r["FR_Id"]] = ['id' => $r["FR_Id"], 'value' => $r["FR_Title"]];


                foreach (session('s_faculty') as $r)
                    $faculties[$r["FC_Id"]] = ['id' => $r["FC_Id"], 'rank' => $ranks[$r["FR_Id"]], 'name' => $r["FC_Name"]];


                foreach (session('s_category') as $r)
                    $categories[$r["PD_Id"]] = ['id' => $r["PD_Id"], 'value' => $r["PD_Title"]];



                return view('Staff/AddFyp', [
                    'cat' => $categories,
                    'rank' => $ranks,
                    'faculty' => $faculties
                ]);
            }
        } else {
            return view('errors/html/error_401');
        }
    }

    public function deleteFyp($id)
    {

        if (isStaff()|| isAdmin()) {

            $model = new \App\Models\FypModel();
            if ($model->find($id)) {
                $model->delete($id);
                return redirect()->to('Staff/fyp')->with('message', 'Deleted Successfuly');
            }
            return redirect()->to('Staff/fyp')->with('error', 'Something went wrong');
        } else
            return view('errors/html/error_401');
    }

    public function faculty()
    {

        if (isStaff() || isAdmin()) {
            $faculties   = $this->db->query('SELECT * FROM `faculty` as fa INNER join facultyrank as fr on fa.FR_Id = fr.FR_Id;')->getResultArray();
            return view('Staff/faculty', [
                'data' => $faculties,
            ]);
        } else {
            return view('errors/html/error_401');
        }
    }

    public function addFaculty()
    {
        if (isStaff() || isAdmin()) {


            if ($this->request->getPost()) {


                $d = $this->request->getPost();
                //dd($d);
                $finalImg = "/assets/images/noPhotoUser.jpg";
                if ($this->request->getFile("photo")->getError() == 0) {
                    $img = $this->request->getFile("photo");

                    if ($img->getSizeByUnit($unit = 'mb') > 5.0) {
                        return redirect()->back()
                            ->with('errors', ['FC_Photo' => 'Image size must be in in range of 5MB'])
                            ->withInput();
                    } else {

                        $filExt = explode('.', $img->getName());
                        $allowed = array("png", "jpg", "jpeg");

                        if (in_array(end($filExt), $allowed)) {

                            $imageService = service('image');
                            //mkdir('/uploads', 0777);
                            $t = time();
                            if (preg_match('/^[a-zA-Za-zA-Z0-9._ ]+$/', $d['fc_name'])) {
                                $path = 'uploads/images/' . $t . '_'  . str_replace(' ', '_', $d['fc_name'])  . '_' . $img->getName();

                                // dd($path);
                                $imageService->withFile($img->getRealPath())
                                    ->fit(600, 600, 'center')
                                    ->save($path);

                                $finalImg = $path;
                            } else {
                                return redirect()->back()
                                    ->with('errors', ['FC_Name' => 'Please enter correct name'])
                                    ->withInput();
                            }
                        } else {
                            return redirect()->back()
                                ->with('errors', ['FC_Photo' => 'PNG, JPG, JPEG files are allowed only'])
                                ->withInput();
                        }
                    }
                }



                $data = [
                    'FC_Name' => $d['fc_name'],
                    'FC_Photo' => $finalImg,
                    'FC_Password' => random_string('alnum', 8),
                    'FC_Email' => $d['email'],
                    'FC_AvailableHour' => !empty($d['aHours']) ? $d['aHours'] : 'N-A',
                    'FC_Office' => !empty($d['office']) ? $d['office'] : 'N-A',
                    'FC_Phone' => !empty($d['contact']) ? $d['contact'] : '0000 0000',
                    'FC_Domain' => $d['domain'],
                    'FR_Id' => $d['rank'],
                ];

                $model = new \App\Models\FacultyModel();
                $res =  $model->insert($data);
                //  dd($res);
                if (!$res) {

                    return redirect()->back()
                        ->with('errors', $model->errors())
                        ->withInput();
                } else {

                    return redirect()->to('Staff/faculty')->with('message', 'Added Sucessfully');
                }
            } else {

                $ranks = [];

                $ranks = $this->db->query("SELECT * FROM facultyrank")->getResultArray();

                //dd($ranks);

                return view('Staff/AddFaculty', [
                    'ranks' => $ranks,

                ]);
            }
        } else {
            return view('errors/html/error_401');
        }
    }

    public function deleteFaculty($id)
    {

        if (isStaff() || isAdmin()) {

            $model = new \App\Models\FacultyModel();
            if ($model->find($id)) {
                $model->delete($id);
                return redirect()->to('Staff/faculty')->with('message', 'Deleted Successfuly');
            }
            return redirect()->to('Staff/faculty')->with('error', 'Something went wrong');
        } else
            return view('errors/html/error_401');
    }

    public function slider()
    {
        if (isStaff()) {

            $query_1   = $this->db->query('SELECT * FROM slider order by SL_Id DESC');

            return view('Staff/slider', [
                'data' => $query_1->getResultArray(),

            ]);
        } else {
            return view('errors/html/error_401');
        }
    }

    public function addSlider()
    {
        if (isStaff()) {

            if ($this->request->getPost()) {


                $d = $this->request->getPost();
                // dd($d);
                $file = $this->request->getFile("thumbnail");

                $finaldata = "";

                if ($file->isValid()) {
                    if ($file->getSizeByUnit('mb') > 5.0) {
                        return redirect()->back()
                            ->with('errors', ['SL_Image' => 'File size must be in in range of 5MB'])
                            ->withInput();
                    } else {

                        $filExt = explode('.', $file->getName());
                        $allowed = array("png", "jpg", "jpeg");
                        $t = time();

                        if (in_array(end($filExt), $allowed)) {
                            $imageService = service('image');

                            $path = 'uploads/slider/' . $t . '_' . $file->getName();

                            $imageService->withFile($file->getRealPath())
                                ->fit(1280, 720, 'center')
                                ->save($path);
                            $finaldata = $path;
                        } else {
                            return redirect()->back()
                                ->with('errors', ['SL_Image' => 'PNG, JPG files are allowed only'])
                                ->withInput();
                        }
                    }
                }

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
                            'SL_Title' => $d['title'],
                            'SL_Desc' => $d['desc'],
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
            } else {

                return view('Staff/AddSlider');
            }
        } else {
            return view('errors/html/error_401');
        }
    }

    public function deleteSlider($id)
    {

        if (isStaff()) {


            $model = new \App\Models\SliderModel();
            if ($model->find($id)) {
                $model->delete($id);
                return redirect()->to('Staff/slider')->with('message', 'Deleted Successfuly');
            }
            return redirect()->to('Staff/slider')->with('error', 'Something went wrong');
        } else
            return view('errors/html/error_401');
    }

    public function events()
    {
        if (isStaff()) {

            $data   = $this->db->query('SELECT e.*, ec.EVC_Title FROM `events` as e INNER JOIN event_categories as ec on ec.EVC_Id = e.EV_Category ORDER by e.EV_Id DESC;');

            return view('Staff/events', ["data" => $data->getResultArray()]);
        } else {
            return view('errors/html/error_401');
        }
    }

    public function addEvent()
    {
        if (isStaff()) {

            if ($this->request->getPost()) {

                $d = $this->request->getPost();
                $a = strtotime($d['date']) - strtotime("now");
                if ($a > 0) {
                    $file = $this->request->getFile("thumbnail");

                    $finaldata = "/assets/images/DefaultImage.jpg";

                    if ($file->isValid()) {
                        if ($file->getSizeByUnit('mb') > 5.0) {
                            return redirect()->back()
                                ->with('errors', ['EV_Image' => 'File size must be in in range of 5MB'])
                                ->withInput();
                        } else {

                            $filExt = explode('.', $file->getName());
                            $allowed = array("png", "jpg", "jpeg");
                            $t = time();

                            if (in_array(end($filExt), $allowed)) {
                                $imageService = service('image');

                                $path = 'uploads/events/' . $t . '_' . $file->getName();

                                $imageService->withFile($file->getRealPath())
                                    // ->fit(1280, 720, 'center')
                                    ->save($path);
                                $finaldata = $path;
                            } else {
                                return redirect()->back()
                                    ->with('errors', ['EV_Image' => 'PNG, JPG files are allowed only'])
                                    ->withInput();
                            }
                        }
                    }

                    if (isset($d["EV_Id"])) {
                        $data = [
                            'EV_Id' => $d["EV_Id"],
                            'EV_Title' => $d['title'],
                            'EV_Desc' => $d['desc'],
                            'EV_Category' => $d['category'],
                            'EV_Date' => $d['date'],
                            'EV_Venue' => $d['venue'],
                            'EV_TimeStart' => $d['time_S'],
                            'EV_TimeEnd' => $d['time_E'],
                        ];
                        if ($file->isValid())
                            $data['EV_Image'] = $finaldata;
                        else {
                            return redirect()->back()
                                ->with('errors', ['EV_Image' => 'Image not found'])
                                ->withInput();
                        }
                    } else {
                        if ($file->isValid()) {
                            $data = [
                                'EV_Id' => $d["EV_Id"],
                                'EV_Title' => $d['title'],
                                'EV_Desc' => $d['desc'],
                                'EV_Category' => $d['category'],
                                'EV_Date' => $d['date'],
                                'EV_Venue' => $d['venue'],
                                'EV_TimeStart' => $d['time_S'],
                                'EV_TimeEnd' => $d['time_E'],
                                'EV_Image' => $finaldata,
                            ];
                        } else {
                            return redirect()->back()
                                ->with('errors', ['EV_Image' => 'Image not found'])
                                ->withInput();
                        }
                    }

                    $model = new \App\Models\EventsModel();
                    $res =  $model->save($data);
                    //  dd($res);
                    if (!$res) {

                        return redirect()->back()
                            ->with('errors', $model->errors())
                            ->withInput();
                    } else {
                        return redirect()->to('Staff/events')->with('message', 'Added sucessful');
                    }
                } else {
                    return redirect()->back()
                        ->with('errors', ['EV_Date' => 'Date must be in Future'])
                        ->withInput();
                }
            } else {

                $cat   = $this->db->query('SELECT * FROM event_categories')->getResultArray();
                return view('Staff/AddEvent', ["cats" => $cat]);
            }
        } else {
            return view('errors/html/error_401');
        }
    }

    public function deleteEvent($id)
    {

        if (isStaff()) {

            $model = new \App\Models\EventsModel();
            if ($model->find($id)) {
                $model->delete($id);
                return redirect()->to('Staff/events')->with('message', 'Deleted Successfuly');
            }
            return redirect()->to('Staff/events')->with('error', 'Something went wrong');
        } else
            return view('errors/html/error_401');
    }

    public function alumni()
    {
        if (isStaff()) {

            return redirect()->to('/dept/alumni');
        } else {
            return view('errors/html/error_401');
        }
    }
}
