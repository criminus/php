<?php

include('functions.php');

function welcomeMessage() {
    echo '<div class="alert alert-primary" role="alert">
    Welcome to the registration page! Please enter your details below.
  </div>';
}

function formProcess() {
    return;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update records</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style>
html,
body {
  height: 100%;
}

body {
    display: -ms-flexbox;
    display: -webkit-box;
    display: flex;
    -ms-flex-align: center;
    -ms-flex-pack: center;
    -webkit-box-align: center;
    align-items: center;
    -webkit-box-pack: center;
    justify-content: center;
    -webkit-background-size: cover;
    background-size: cover;
}

.form-signin {
  width: 100%;
  max-width: 330px;
  padding: 15px;
  margin: auto;
}
.form-wwh {
  width: 100%;
  max-width: 500px;
  padding: 15px;
  margin: auto;
}
.form-signin .checkbox, .form-wwh .checkbox {
  font-weight: 400;
}
.form-signin .form-control, .form-wwh .form-control {
  position: relative;
  box-sizing: border-box;
  height: auto;
  padding: 10px;
  font-size: 0.875rem;
}
.form-signin .form-control:focus, .form-wwh .form-control:focus {
  z-index: 2;
}
.form-signin input[type="text"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
</style>
</head>
<body>
<body class="text-center bg-dark">
        <form class="bg-light p-5 shadow rounded form-signin" role="form" action="update_db_records.php" method="post">
        <?php welcomeMessage(); ?>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" class="form-control">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control">
            </div>
            <div class="form-group">
            <select name="id" id="id">
                <?php getUserIds(); ?>
            </select>
            </div>
            <input class="btd btn-primary" type="submit" name="submit" value="Submit">
            <br />
            <br />
        <?php formProcess(); ?>
        </form>
</body> 
</body>
</html>