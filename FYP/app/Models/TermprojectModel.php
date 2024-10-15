<?php

namespace App\Models;

class TermprojectModel extends \CodeIgniter\Model
{
    protected $table = 'termproject';
    protected $primaryKey  = 'TP_Id';
    
    protected $allowedFields = [
        'St_Id', 'TP_Id', 'TP_Title', 'TP_Year', 'TP_Sem', 'TP_Domain', 'TP_Desc', 'TP_Github', 'TP_Youtube', 'TP_Lang', 'TPC_Id'
    ];

    
    protected $validationRules = [
        
        'St_Id' => 'required|is_natural_no_zero|',
        'TP_Title' => 'required|alpha_numeric_space|is_unique[termproject.TP_Title,TP_Id,{TP_Id} ]',
        'TP_Year' => 'required|greater_than[2018]|less_than[2023] ',
        'TP_Domain'=> 'required',
        'TP_Desc' => 'required|is_description',
        'TP_Github'=> 'required|valid_url_strict',
        'TP_Youtube' => 'required|valid_url_strict',
        'TP_Lang' => 'required|alpha_numeric_punct',
        'TPC_Id' => 'required|is_natural_no_zero',
        'TP_Sem' => 'required|integer|greater_than[0]|less_than[9]'

    ];

    protected $validationMessages = [

        'TP_Title' => [
            'required' => 'Please Enter Title',
            'alpha_numeric_space' => 'The Title field may only contain alphanumeric and space characters.',
            'is_unique'=> 'Title is already in used'
        ],

        'TP_Sem' => [
            'required' => 'Semester is required',
            'integer' => 'Input semester in range 1-8',
            'greater_than' => 'Semester must contain a number greater than 1',
            'less_than' => 'Semester must contain a number less than 8',
        ],

        'TP_Year' => [
            'required' => 'Year is not correct must between 2018-2022',
            'greater_than' => 'Year must contain a number greater than 2018',
            'less_than' => 'Year must contain a number less than 2023',
        ],

        'TP_Github' => [
            'required' => 'Github Link is Required',
            'valid_url_strict' => 'Link must start from https://'
        ],

        'TP_Youtube' => [
            'required' => 'Youtube Link is Required',
            'valid_url_strict' => 'Link must start from https://'
        ],
        'TP_Lang' => [
            'alpha_numeric_punct' => 'The Language field may contain only alphanumeric characters, spaces, and  \' " . # & - _ + = : . characters.',
            
        ],
        
        'TP_Desc' => [
            'required' => 'The Description field is required',
            'is_description' => 'The Description field may contain only alphanumeric characters, spaces, and  \' " . # & - _ + = : . ; @ characters.'
        ],
        

    ];
}
