<?php

namespace App\Models;

class ResearchModel extends \CodeIgniter\Model
{
    protected $table = 'research';
    protected $primaryKey  = 'RS_Id';

    protected $allowedFields = [
        'RS_Id', 'RS_Title', 'RS_Year', 'RS_Journal', 'RS_Authors', 'RS_DOI', 'RS_Category', 'RS_Desc', 'FC_Id'
    ];


    protected $validationRules = [

        'RS_Title' => 'required|alpha_numeric_space',
        'RS_Desc' => 'required|is_description|min_length[300]',
        'RS_Authors' => 'required|regex_match[/^[A-Za-z0-9 \,]+$/is]',
        'RS_Journal' => 'required|alpha_numeric_space',
        'RS_DOI' => 'required|regex_match[/^10.\d{4,9}\/[-._;()\/:A-Z0-9]+$/i]',
        'RS_Year' => 'required|integer|greater_than[1949]|current_Year_below'


    ];

    protected $validationMessages = [

        'RS_Title' => [
            'required' => 'Please Enter Title',
            'alpha_numeric_space' => 'The Title field may only contain alphanumeric and space characters.'

        ],

        'RS_Desc' => [
            'required' => 'The field is required',
            'is_description' => 'The Description field may contain only alphanumeric characters, spaces, and  \' " . # & - _ + = : . ; @ characters.',
            'min_length' => 'Min. length is 300 words for description'
        ],

        'RS_DOI' => [
            'required' => 'The field is required',
            'regex_match' => 'Enter Valid DOI, e.g 10.1016/j.xpro.2022.101272'
        ],



        'RS_Year' => [
            'required' => 'The field is required',
            'integer' => 'Input must be four digit number e.g., 2018',
            'greater_than' => 'Year must be greater than 1949',
            'current_Year_below' => 'Invalid Year'
        ],
        
        'RS_Authors' => [
            'required' => 'Please Enter comma seperated Author names',
            'regex_match' => 'Please enter comma seperated Author names'
        ],

        'RS_Journal' => [
            'required' => 'Field is required',
            'alpha_numeric_space' => 'This field may only contain alphanumeric and space characters.'
        ],
    ];
}
