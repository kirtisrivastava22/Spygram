<?php
/*
This file contains database configuration assuming you are running mysql using user "root" and password ""
*/

define('DB_SERVER', 'localhost');
define('DB_EMAIL', 'root');
define('DB_PASSWORD', '');
define('DB_USERNAME', 'login');

// Try connecting to the Database
$conn = mysqli_connect(DB_SERVER, DB_EMAIL, DB_PASSWORD, DB_USERNAME);

//Check the connection
if($conn == false){
    dir('Error: Cannot connect');
}


