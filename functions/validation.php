<?php


// check empty index or not
function checkEmpty($value)
{

    if (empty($value)) {
        return true;
    }
    return false;
}

// Check valid email or not
function checkEmail($value)
{

    if (filter_var($value, FILTER_VALIDATE_EMAIL)) {
        return true;
    }
    return false;
}


// password limitation from 6 chars to 18 chars
function passCheckLength($value)
{

    if ((strlen($value) < 6)  or (strlen($value) > 18)) {
        return false;
    }
    return True;
}


// Check minuim length 
function CheckMinuim($value, $length)
{

    if (trim(strlen($value) < $length)) {
        return false;
    }
    return true;
}
