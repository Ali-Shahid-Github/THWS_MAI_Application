<?php

namespace App\Models;

class SuggesstionModel extends \CodeIgniter\Model
{
    protected $table = 'suggestion';
    protected $primaryKey  = 'SG_Id';

    protected $allowedFields = [
        'SG_Id', 'SG_Title', 'SG_Desc', 'Std_Id', 'SG_Remark', 'SG_isDone', 'SG_DoneAt', 'SG_Severity', 'SG_Type'
    ];


    protected $validationRules = [

        'SG_Title' => 'required|alpha_numeric_space',
        'SG_Remark' => 'alpha_numeric_space',
        'SG_Desc' => 'required|is_description',


    ];

    protected $validationMessages = [

        'SG_Title' => [
            'required' => 'Please Enter Title',
            'alpha_numeric_space' => 'The Title field may only contain alphanumeric and space characters.'

        ],
        
        'SG_Remark' => [
            'required' => 'Please Enter Remark',
            'alpha_numeric_space' => 'The Remarks can only contain alphanumeric and space characters.'

        ],

        'SG_Desc' => [
            'required' => 'The Description field is required',
            'is_description' => 'The Description field may contain only alphanumeric characters, spaces, and  \' " . # & - _ + = : . ; @ characters.'
        ],

    ];
}
