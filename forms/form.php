<?php

function errorMessage($errorMsg) {
    echo "<p style='color:red;'>$errorMsg</p>";
    return $errorMsg;
}

function successMessage($success) {
    echo "<p style='color:green;'>$success</p>";
    return $success;
}

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $repassword = $_POST['repassword'];

    //form min value config
    $minUsernameChars = 5;
    $minPassowrdChars = 10;

    //Censored words are not allowed in the username
    $censored = ['idiot', 'papito'];

    if (strlen($username) < $minUsernameChars) {
        errorMessage("Your username is too short! Must be longer than $minUsernameChars characters.");
    } elseif (strlen($password) < $minPassowrdChars) {
        errorMessage("Your password is too short! Must be longer than $minPassowrdChars characters.");
    } elseif (in_array($username, $censored)) {
        errorMessage("Looks like you entered a censored word as a username.");
    } elseif ($username === $password || $username === $repassword) {
        errorMessage("Your password can't be the same as your username!");
    } elseif ($password !== $repassword) {
        errorMessage("Your passwords don't match!");
    } else {
        successMessage("Form sent. Your username is <strong>$username</strong> with the password <strong>$password</strong>.");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
<form action="form.php" method="post">
    <input type="username" name="username" placeholder="">
    <input type="password" name="password" placeholder="">
    <input type="password" name="repassword" placeholder="">
    <input type="submit" name="submit">
</form>  
</body>
</html>
