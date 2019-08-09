<?php


defined("DB_HOST") ? null : define("DB_HOST", "localhost");

defined("DB_USER") ? null : define("DB_USER","root");

defined("DB_PASS") ? null : define("DB_PASS", "");

defined("DB_NAME") ? null : define("DB_NAME",  "sms");


$con = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);



return $config = [

    'account_sid'=> 'ACec1dd46bf4bc841f9c3e0942922d89d5',
    'auth_token' => '264d0dbc1f05f982e28830343b2ad2e7',
    'phone_number' => '+1 213 444 2576'
];