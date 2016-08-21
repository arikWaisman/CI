<?php

$config = array(
        array(
                'field' => 'first_name',
                'label' => 'First Name',
                'rules' => 'required'
        ),
        array(
                'field' => 'last_name',
                'label' => 'Last Name',
                'rules' => 'required'
        ),
        array(
                'field' => 'address_1',
                'label' => 'Address 1',
                'rules' => 'required'
        ),
        array(
                'field' => 'city',
                'label' => 'City',
                'rules' => 'required'
        ),
        array(
                'field' => 'state',
                'label' => 'State',
                'rules' => 'required'
        ),
        array(
                'field' => 'zipcode',
                'label' => 'Zipcode',
                'rules' => 'required|numeric',     
        ),
        array(
                'field' => 'phone',
                'label' => 'Phone',
                'rules' => 'required|numeric',     
        ),
        array(
                'field' => 'email',
                'label' => 'E-mail',
                'rules' => 'required|valid_email',     
        ),
        array(
                'field' => 'company_name',
                'label' => 'Company Name',
                'rules' => 'required',     
        ),
        array(
                'field' => 'company_address',
                'label' => 'Company Address',
                'rules' => 'required',     
        ),
        array(
                'field' => 'company_city',
                'label' => 'Company City',
                'rules' => 'required',     
        ),
        array(
                'field' => 'company_state',
                'label' => 'Company State',
                'rules' => 'required',     
        ),
        array(
                'field' => 'company_zipcode',
                'label' => 'Company Zipcode',
                'rules' => 'required|numeric',     
        ),
        array(
                'field' => 'company_phone',
                'label' => 'Company Phone',
                'rules' => 'required|numeric',     
        )
);