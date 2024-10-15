<?php 

namespace App\Models;

class FacultyinterrestModel extends \CodeIgniter\Model
{
    protected $table = 'faculty_area_interest';
    protected $primaryKey  = 'FAI_Id';
    

    protected $allowedFields = [
        'FAI_Id', 'AI_Item', 'FC_Id'
    ];

    
    protected $validationRules = [
        
        'AI_Item' => 'required|regex_match[/^[A-Za-z0-9-\\.\/_,:\(\) ]+$/is]',
        'FC_Id' => 'required|is_natural_no_zero',

    ];

    protected $validationMessages = [

        'AI_Item' => [
            'required' => 'Please Provide Title',
            'regex_match' => 'Only A-Z space a-z 0-9 - _ . , : ( ) / are allowed'
        ],      
    ];


}