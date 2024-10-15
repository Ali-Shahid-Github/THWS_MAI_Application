<?php

namespace App\Models;

class FypselectedModel extends \CodeIgniter\Model
{
    protected $table = 'fyp_selected';
    protected $primaryKey  = 'FYPS_Id';





    protected $allowedFields = [
        'FYPS_Id', 'FYPS_M1', 'FYPS_M2', 'FYPS_M3', 'FYPS_M4', 'FYPS_M5', 'FYPS_Password', 'FYP_Id', 'FYPS_CurrentPhase'
    ];


    protected $validationRules = [

        // 'FYPS_M1' => 'required|regex_match[/^[A-Za-z0-9 -]+$/is]|differs[FYPS_M2,FYPS_M3,FYPS_M4,FYPS_M5]',
        // 'FYPS_M2' => 'required|regex_match[/^[A-Za-z0-9 -]+$/is]|differs[FYPS_M1,FYPS_M3,FYPS_M4,FYPS_M5]',
        // 'FYPS_M3' => 'required|regex_match[/^[A-Za-z0-9 -]+$/is]|differs[FYPS_M1,FYPS_M2,FYPS_M4,FYPS_M5]',
        // 'FYPS_M4' => 'required|regex_match[/^[A-Za-z0-9 -]+$/is]|differs[FYPS_M1,FYPS_M2,FYPS_M3,FYPS_M5]',
        // 'FYPS_M5' => 'permit_empty|regex_match[/^[A-Za-z0-9 -]+$/is]|differs[FYPS_M1,FYPS_M2,FYPS_M3,FYPS_M4]',

        'FYPS_M1' => 'required|regex_match[/^[A-Za-z0-9 -]+$/is]',
        'FYPS_M2' => 'required|regex_match[/^[A-Za-z0-9 -]+$/is]',
        'FYPS_M3' => 'required|regex_match[/^[A-Za-z0-9 -]+$/is]',
        'FYPS_M4' => 'required|regex_match[/^[A-Za-z0-9 -]+$/is]',
        'FYPS_M5' => 'permit_empty|regex_match[/^[A-Za-z0-9 -]+$/is]',


    ];

    protected $validationMessages = [

        'FYPS_M1' => [
            'required' => 'Please Provide Registration No of leader',
            'regex_match' => 'Registraion number must be like 2018-CS-###',
            'differs'=> 'Duplicate Number'
        ],
        'FYPS_M2' => [
            'required' => 'Please Provide Registration No',
            'regex_match' => 'Registraion number must be like 2018-CS-###',
            'differs'=> 'Duplicate Number'
        ],
        'FYPS_M3' => [
            'required' => 'Please Provide Registration No',
            'regex_match' => 'Registraion number must be like 2018-CS-###',
            'differs'=> 'Duplicate Number'
        ],
        'FYPS_M4' => [
            'required' => 'Please Provide Registration No',
            'regex_match' => 'Registraion number must be like 2018-CS-###',
            'differs'=> 'Duplicate Number'
        ],
        'FYPS_M5' => [
            'required' => 'Please Provide Registration No',
            'regex_match' => 'Registraion number must be like 2018-CS-###',
            'differs'=> 'Duplicate Number'
        ]
        



    ];

}
