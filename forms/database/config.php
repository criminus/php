<?php
//Basic connection to the database.
$connection = mysqli_connect('localhost', 'root', '', 'login_project');
if ($connection) {
    
} else {
    die("Can't connect to the database...");
}