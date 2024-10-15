<?php 

namespace App\Models;

class FacultyeduModel extends \CodeIgniter\Model
{
    protected $table = 'faculy_edu';
    protected $primaryKey  = 'FE_Id';
    


    
    protected $allowedFields = [
        'FE_Id', 'FE_Year', 'FE_Uni', 'FE_Loc', 'FE_Title', 'FC_Id'
    ];

    
    protected $validationRules = [
        
        'FE_Title' => 'required|regex_match[/^[A-Za-z0-9-_.,:\(\) ]+$/is]',
        'FE_Loc' => 'required|regex_match[/^[A-Za-z0-9-_.,:\(\) ]+$/is]',
        'FE_Uni' => 'required|regex_match[/^[A-Za-z0-9-_., ]+$/is]',
        'FC_Id' => 'required|is_natural_no_zero',
        'FE_Year' => 'required|integer|greater_than[1949]|current_Year_below',

    ];

    protected $validationMessages = [

        'FE_Title' => [
            'required' => 'Please Provide Title',
            'regex_match' => 'Only A-Z space a-z 0-9 - _ . , : ( ) are allowed'
        ],

        'FE_Loc' => [
            'required' => 'Please Provide Title',
            'regex_match' => 'Only A-Z space a-z 0-9 - _ . , : ( ) are allowed'
        ],

        'FE_Uni' => [
            'required' => 'Please Provide Title',
            'regex_match' => 'Only A-Z space a-z 0-9 - _ . , are allowed'
        ],

        
        'FE_Year' => [
            'required' => 'Year is required',
            'integer' => 'Input must be four digit number e.g., 2018',
            'greater_than' => 'Year must be greater than 1949',
            'current_Year_below' => 'Invalid Year'
        ]
        

    ];


}