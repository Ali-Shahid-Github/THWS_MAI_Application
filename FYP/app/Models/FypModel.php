<?php 

namespace App\Models;

class FypModel extends \CodeIgniter\Model
{
    protected $table = 'fyp';
    protected $primaryKey  = 'FYP_Id';
    


    
    protected $allowedFields = [
        'FYP_Id', 'FYP_Title', 'FYP_Description', 'FYP_Suprvisor', 'FYP_CoSupervisor', 
        'FYP_CreatedAt', 'FYP_Session', 'FYP_ProjectId', 'FYP_Type', 'FYP_IsSelected'
    ];

    
    protected $validationRules = [
        
        'FYP_Title' => 'required|alpha_numeric_space|is_unique[fyp.FYP_Title,FYP_Id,{FYP_Id}]',
        'FYP_Description' => 'required|is_description'

    ];

    protected $validationMessages = [

        'FYP_Title' => [
            'required' => 'Please Enter Title',
            'alpha_numeric_space' => 'The Title field may only contain alphanumeric and space characters.',
            'is_unique'=> 'Already Registered FYP'

        ],

    

        'FYP_Description' => [
            'required' => 'The Description field is required',
            'is_description' => 'The Description field may contain only alphanumeric characters, spaces, and  \' " . # & - _ + = : . ; @ characters.'
        ],

    ];

    

}