<?php
include('config.php');

$myQuery = "SELECT * FROM users";
$result = mysqli_query($connection, $myQuery);

while($row = mysqli_fetch_assoc($result)) {
    ?>
    <pre>
    <?php
    echo "usr: " . $row['username'] . " pwd: " . $row['password'];
    ?>
    </pre>
    <?php
}