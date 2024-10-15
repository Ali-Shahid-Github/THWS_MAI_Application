<?php

namespace App\Models;

class AlumniModel extends \CodeIgniter\Model
{
    protected $table = 'alumni';
    protected $primaryKey  = 'AL_Id';
    
    
    protected $allowedFields = [
        'AL_Id', 'AL_Name', 'AL_RegNo', 'AL_Desgnation', 'AL_Company', 'AL_Session', 'AL_WhatsApp', 'AL_FB', 'AL_LinkedIn', 'AL_Info', 'AL_Photo', 'AL_Email', 'AL_IsApprove'
    ];
    
    
    
       
       
    protected $validationRules = [
        
        'AL_Name' => 'required|alpha_space|',
        'AL_RegNo' => 'required',
        'AL_Desgnation'=> 'permit_empty|regex_match[/^[a-zA-Z.\s]+$/i]',
        'AL_Company' => 'permit_empty|regex_match[/^[a-zA-Z.\s]+$/i]',
        'AL_Session'=> 'required|is_natural_no_zero',
        'AL_WhatsApp' => 'required|regex_match[/^(\+{0,1}?\d+)$/is]|min_length[11]|max_length[13]',
        'AL_FB' => 'required|valid_url_strict',
        'AL_LinkedIn' => 'required|valid_url_strict',
        'AL_Info' => 'required|regex_match[/^[a-z\d\-_\'\".#,$@+=:;\s]+$/i]',
        'AL_Email' => 'required|valid_email',
        'AL_Photo' => 'required'

    ];

    protected $validationMessages = [

        'AL_Name' => [
            'required' => 'Please Enter Name',
            'alpha_space' => 'Only alphabets and space characters are allowed.',
        ],

        'AL_RegNo' => [
            'required' => 'Your Registration Number is required'
        ],

        'AL_Desgnation' => [
            'regex_match' => 'A-Z space and . is allowed',
        ],

        'AL_Company' => [
            'regex_match' => 'A-Z space . - is allowed',
        ],

        'AL_Session' => [
            'required' => 'Session is Required',
            'is_natural_no_zero' => 'InValid Session, please input like 2018'
        ],

        'AL_WhatsApp' => [
            'required' => 'WhatsApp number is Required',
            'regex_match' => 'Allowed Formats either +923110099988 or 03110099988',
            'min_length' => 'Incorrect Number',
            'max_length' => 'Incorrect Number'
        ],

        'AL_FB' => [
            'required' => 'Facebook ID is Required',
            'valid_url_strict' => 'Link must start from https://'
        ],
        
        'AL_LinkedIn' => [
            'required' => 'LinkdIn ID is Required',
            'valid_url_strict' => 'Link must start from https://'
        ],
        
        'AL_Info' => [
            'required' => 'About is Required',
            'regex_match' => 'The Description field may contain only alphanumeric characters, spaces, and  \' " . # & - _ + = : . ; @ characters.'
        ],
        
        'AL_Photo' => [
            'required' => 'Image is required',
            'valid_base64' => 'Unable to process Image'
            
        ],
        
        'AL_Email' => [ 
            'required' => 'Email is required',
            'valid_email' => 'Please enter correct email id'
        ],
        

    ];
}
