<?php

namespace App\Models;

class NoticesModel extends \CodeIgniter\Model
{
    protected $table = 'notices';
    protected $primaryKey  = 'NB_ID';


    protected $allowedFields = [
        'NB_ID', 'NB_Title', 'NB_Description', 'NB_CatID', 'NB_Attachment', 'NB_IsFaculty'
    ];


    protected $validationRules = [

        'NB_Title' => 'required|alpha_numeric_space|',
        'NB_Description' => 'required|regex_match[/^[a-z\d\-_\'\".#,$@+=:;\s]+$/i]',
    ];

    protected $validationMessages = [

        'NB_Title' => [
            'required' => 'Please Enter Name',
            'alpha_numeric_space' => 'Only alphabets numbers space characters are allowed.',
        ],

        'NB_Description' => [
            'required' => 'Description is Required',
            'regex_match' => 'The Description field may contain only alphanumeric characters, spaces, and  \' " . # & - _ + = : . ; @ characters.'
        ],



    ];
}
