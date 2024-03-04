<?php

session_start();

// Define constants that we will use most
// BURL => Base URL
define("BURL", "http://localhost/PHP/Mediacal-Project/");
define("BURLA", "http://localhost/PHP/Mediacal-Project/admin/");
// define("ASSETS", "http://localhost/PHP/Mediacal-Project/assets/");   Cause we use BootStrap Online...

// BL => Base Link &  BLA => Base Link Admin
define("BL", __DIR__ . '/');
define("BLA", __DIR__ . '/admin/');

// Connect to DataBase
require_once(BL . 'functions/db.php');
