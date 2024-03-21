<?php 

// This is to sanitize the input data 
/*
we will apply in in the input of :
    - Add Admin
    - Add City
    - Add Service

This to insure data cleanleness.

*/
function cleanData($value){

$res = trim( htmlentities( htmlspecialchars($value) ) );

return $res;
}