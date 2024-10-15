<?php 

namespace App\Models;

class FacultyModel extends \CodeIgniter\Model
{
    protected $table = 'faculty';
    protected $primaryKey  = 'FC_Id';
    


    
    protected $allowedFields = [
        'FC_Id', 'FC_Name', 'FC_Photo', 'FC_Password', 'FC_Email', 'FC_AvailableHour', 'FC_Office', 'FC_Phone', 'FC_Domain', 'FR_Id'
    ];

    
    protected $validationRules = [
        
        'FC_Name' => 'required|alpha_space',
        'FC_Email' => 'required|valid_email',
        'FC_Phone'=> 'permit_empty|regex_match[/^(\+{0,1}?[\d -()]+)$/is]|min_length[6]',
        'FC_Photo' => 'permit_empty',
        'FC_AvailableHour' => 'permit_empty|regex_match[/^[A-Za-z0-9-:,_ ]+$/is]',
        'FC_Office'=> 'permit_empty|regex_match[/^[A-Za-z0-9-_ ]+$/is]',
        'FR_Id' => 'required|is_natural_no_zero'

    ];

    protected $validationMessages = [

        'FC_Name' => [
            'required' => 'Please Provide Name',
            'alpha_space' => 'The Name may only contain alphabets and space characters.'
        ],

        'FC_Email' => [
            'required' => 'Email is required',
            'valid_email' => 'Please enter correct email id'
        ],

        'FC_Phone' => [
           
            'regex_match' => 'Allowed Formats either +923110099988 or 03110099988',
            'min_length' => 'Phone Number length is not correct'
        ],

        'FC_AvailableHour' => [
            'regex_match' => 'Please enter correct format e.g Mon: 10Am - 12PM, Thus: 2PM-3PM'
        ],

        'FC_Office' => [
              
            'regex_match' => 'The Office address may only contain alphanumeric _ - and space characters.'
        ],
        'FR_Id' => [
            'required' => 'Rank is required',
            'is_natural_no_zero' => 'Rank not found'
        ]
        

    ];


}