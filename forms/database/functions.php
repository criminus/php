<?php
include('config.php');

function getUserIds() {
    global $connection;

    $myQuery = "SELECT * FROM users";
    $result = mysqli_query($connection, $myQuery);
    
    while($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        echo "<option value='$id'>$id</option>";
    }
}