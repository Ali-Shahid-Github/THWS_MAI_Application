<?php 

namespace App\Models;

class RemarksModel extends \CodeIgniter\Model
{
    protected $table = 'fyp_remarks';
    protected $primaryKey  = 'RM_Id';
    


    
    protected $allowedFields = [
        'RM_Id', 'RM_Title', 'RM_Detail', 'FYP_Id', 'Faculty_Id', 'RM_Phase'
    ];

    
    protected $validationRules = [
        
        'RM_Title' => 'required|alpha_numeric_space',
        'RM_Detail' => 'permit_empty|regex_match[/^[A-Za-z0-9-_?@,;\"\":\{\} ]+$/is]',
        'FYP_Id' => 'required|is_natural_no_zero',
        'Faculty_Id' => 'required|is_natural_no_zero',
        'RM_Phase' => 'required|is_natural_no_zero',

    ];

    protected $validationMessages = [

        'RM_Title' => [
            'required' => 'Please Provide Title',
            'alpha_numeric_space' => 'The Title may only contain alphabets, numbers and space characters.'
        ],

   
        'RM_Detail' => [
            'regex_match' => 'Only A-Z space a-z 0-9 - _ ? @ , ; " " : { } are allowed'
        ],
        
        'RM_Phase' => [
            'required' => 'Phase is required',
            'is_natural_no_zero' => 'Rank not found'
        ]
        

    ];


}