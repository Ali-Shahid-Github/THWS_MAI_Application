<?php 

namespace App\Models;

class StaffModel extends \CodeIgniter\Model
{
    protected $table = 'staff';
    protected $primaryKey  = 'SF_Id';
    


    
    protected $allowedFields = [
        'SF_Name', 'SF_Email', 'SF_Phone', 'SF_Password', 'SF_Office', 'SR_ID' 
    ];

    
    protected $validationRules = [
        
        'SF_Name' => 'required|alpha_space',
        'SF_Email' => 'required|valid_email',
        'SF_Phone'=> 'required|regex_match[/^(\+{0,1}?\d+)$/is]|min_length[6]',
        'SF_Password' => 'required',
        'SF_Office'=> 'permit_empty|regex_match[/^[A-Za-z0-9-_ ]+$/is]',
        'SR_ID' => 'required|is_natural_no_zero'

    ];

    protected $validationMessages = [

        'SF_Name' => [
            'required' => 'Please Provide Name',
            'alpha_space' => 'The Name may only contain alphabets and space characters.'
        ],

        'SF_Email' => [
            'required' => 'Email is required',
            'valid_email' => 'Please enter correct email id'
        ],

        'SF_Phone' => [
            'required' => 'Phone Number is required',
            'regex_match' => 'Allowed Formats either +923110099988 or 03110099988',
            'min_length' => 'Phone Number length is not correct'
        ],

        'SF_Password' => [
            'required' => 'Password is required'
        ],

        'SF_Office' => [
            'regex_match' => 'The Office address may only contain alphanumeric _ - and space characters.'
        ],
        'SR_ID' => [
            'required' => 'Rank is required',
            'is_natural_no_zero' => 'Rank not found'
        ]
        

    ];
}