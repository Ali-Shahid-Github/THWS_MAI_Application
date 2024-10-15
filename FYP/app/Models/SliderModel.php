<?php

namespace App\Models;

class SliderModel extends \CodeIgniter\Model
{
    protected $table = 'slider';
    protected $primaryKey  = 'SL_Id';

    protected $allowedFields = [
        'SL_Id', 'SL_Title','SL_Desc', 'SL_Image'
    ];


    protected $validationRules = [

        'SL_Title' => 'required|alpha_numeric_space',
        'SL_Desc' => 'required|is_description',


    ];

    protected $validationMessages = [

        'SL_Title' => [
            'required' => 'Please Enter Title',
            'alpha_numeric_space' => 'The Title field may only contain alphanumeric and space characters.'

        ],

        'SL_Desc' => [
            'required' => 'The Description field is required',
            'is_description' => 'The Description field may contain only alphanumeric characters, spaces, and  \' " . # & - _ + = : . ; @ characters.'
        ],

    ];
}
