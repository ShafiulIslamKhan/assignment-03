<?php
//local timezone set
date_default_timezone_set('Asia/Dhaka');

/**
 * Set Alert 
 */
function setAlert($msg, $type = 'danger'){
    return "<p class=\"alert alert-{$type} d-flex justify-content-between\"> {$msg} <button class=\"btn-close\" data-bs-dismiss=\"alert\"></button></p>"; 
}

/**
 * Marriage Age Checker
 */

function marriageAgeCal($name, $year, $gender ){
    $age = date('Y') - $year;
    $marriage_age = '';
    switch($gender){
        case 'Male' :
            $marriage_age = 21;
            break;
        case 'Female' :
            $marriage_age = 18;
            break;
        default :
            $marriage_age = 21;
            break;    
    }
    if($age >= $marriage_age){
        return "<p class=\"alert alert-success d-flex justify-content-between\">Hi {$name}, you are ready for marriage<button class=\"btn-close\" data-bs-dismiss=\"alert\"></button></p>";    
    }else{
        $wait = $marriage_age - $age;
        return "<p class=\"alert alert-success d-flex justify-content-between\">Hi {$name}, We are sorry, You are {$age} years old,  You have to wait {$wait} year for your marriage <button class=\"btn-close\" data-bs-dismiss=\"alert\"></button></p>";
    } 

    
}