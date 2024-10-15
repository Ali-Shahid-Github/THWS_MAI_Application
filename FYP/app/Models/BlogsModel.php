<?php

namespace App\Models;

class BlogsModel extends \CodeIgniter\Model
{
    protected $table = 'blogs';
    protected $primaryKey  = 'BL_Id';

    protected $allowedFields = [
        'BL_Id', 'BL_Title', 'BL_Content', 'BLC_Id', 'Std_Id', 'BL_Description', 'BL_Thumbnail', 'BL_isPDF', 'BL_isApproved'
    ];


    protected $validationRules = [

        'BL_Title' => 'required|alpha_numeric_space',
        'BL_Description' => 'required|is_description',
        'BL_Content' => 'required',
        'BL_Thumbnail' => 'required',


    ];

    protected $validationMessages = [

        'BL_Title' => [
            'required' => 'Please Enter Title',
            'alpha_numeric_space' => 'The Title field may only contain alphanumeric and space characters.'

        ],

        'BL_Description' => [
            'required' => 'The Description field is required',
            'is_description' => 'The Description field may contain only alphanumeric characters, spaces, and  \' " . # & - _ + = : . ; @ characters.'
        ],

        'BL_Content' => [
            'required' => 'This field is required'
        ],
        
        'BL_Thumbnail' => [
            'required' => 'Thumbnail is required'
        ],

    ];
}
