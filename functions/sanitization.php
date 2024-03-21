<?php 


function cleanData($value){

$res = trim( htmlentities( htmlspecialchars($value) ) );

return $res;
}