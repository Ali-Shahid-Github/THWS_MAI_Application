<?php



if (!function_exists('getUserId')) {
    function getUserId()
    {
        return session('user')['user_id'];
    }
}

if (!function_exists('getUserName')) {
    function getUserName()
    {
        if(session()->has('user'))
            if (array_key_exists('name', session('user')))
                return session('user')['name'];
            else
                return '';
        else
            return '';
       
    }
}



if (!function_exists('isAdmin')) {
    function isAdmin()
    {
        if(session()->has('user'))
        {
            if (array_key_exists('user_type', session('user')))
                return session()->has('user') && session('user')['user_type'] == 0;
            else
                return false;
        }
        else
            return false;
        
    }
}

if (!function_exists('isStudent')) {
    function isStudent()
    {

        if(session()->has('user'))
        {
            if (array_key_exists('Student_Id', session('user')))
                return session()->has('user') && session('user')['Student_Id'] != null;
            else
                return false;
        }
        else
            return false;
        
    }
}

if (!function_exists('isStaff')) {
    function isStaff()
    {
        if(session()->has('user'))
        {
            if (array_key_exists('SF_Email', session('user')))
                return session()->has('user') && session('user')['SF_Email'] != null;
            else
                return false;
        }
        else
            return false;
        
    }
}


if (!function_exists('isFaculty')) {
    function isFaculty()
    {
        if(session()->has('user'))
        {
            if (array_key_exists('FC_Name', session('user')))
                return session()->has('user') && session('user')['FC_Name'] != null;
            else
                return false;
        }
        else
            return false;
        
    }
}


if (!function_exists('isExistTermProject')) {
    function isExistTermProject($var)
    {
        $tp_model = new \App\Models\TermprojectModel;
        if ($tp_model->find($var) != null)
            return true;
        else
            return false;
    }
}

if (!function_exists('isExistFYPProject')) {
    function isExistFYPProject($var)
    {
        $model = new \App\Models\FypselectedModel;
        if ($model->find($var) != null)
            return true;
        else
            return false;
    }
}


if (!function_exists('getStudentReg')) {
    function getStudentReg($var)
    {
        $db = \Config\Database::connect();
        $res = $db->query("SELECT * FROM student WHERE Student_Id = $var" )->getResultArray();
        if (count($res)==1)
            return $res[0]["St_RegNo"];
        else
            return null;
    }
}

if (!function_exists('getFypDetails')) {
    function getFypDetails()
    {
        $ses = session();
        $db = \Config\Database::connect();
        if (!$ses->has('s_category')) {

            $_category   = $db->query('SELECT * from projectsdomain');
            $_rank   = $db->query('SELECT * from facultyrank');
            $_faculty   = $db->query('SELECT f.FC_Id, f.FC_Name, f.FR_Id FROM `faculty` as f');
            // dd($_fyp->getResultArray());

            $ses->set('s_category', $_category->getResultArray());
            $ses->set('s_rank', $_rank->getResultArray());
            $ses->set('s_faculty', $_faculty->getResultArray());
        }
    }
}