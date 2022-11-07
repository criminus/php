<?php
//Basic connection to the database.
$connection = mysqli_connect('localhost', 'root', '', 'login_project');
if ($connection) {
    echo "Connection successfully!";
} else {
    echo "Can't connect to the database...";
}