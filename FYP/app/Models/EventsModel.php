<?php

namespace App\Models;

class EventsModel extends \CodeIgniter\Model
{
    protected $table = 'events';
    protected $primaryKey  = 'EV_Id';

    protected $allowedFields = [
        'EV_Id', 'EV_Title', 'EV_Desc', 'EV_Category', 'EV_Date', 'EV_Venue', 'EV_TimeStart', 'EV_TimeEnd', 'EV_Image'
    ];


    protected $validationRules = [

        'EV_Title' => 'required|alpha_numeric_space',
        'EV_Desc' => 'required|is_description',
        'EV_Venue' => 'required|alpha_numeric_space'


    ];

    protected $validationMessages = [

        'EV_Title' => [
            'required' => 'Please Enter Title',
            'alpha_numeric_space' => 'The Title field may only contain alphanumeric and space characters.'

        ],

        'EV_Venue' => [
            'required' => 'Please Enter Title',
            'alpha_numeric_space' => 'The Venue field may only contain alphanumeric and space characters.'

        ],

        'EV_Desc' => [
            'required' => 'The Description field is required',
            'is_description' => 'The Description field may contain only alphanumeric characters, spaces, and  \' " . # & - _ + = : . ; @ characters.'
        ],

    ];
}
