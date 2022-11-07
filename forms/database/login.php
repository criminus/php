<?php
//Check form basic stuff
function formProcess() {
    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        //if username and passwords are set
        if ($username && $password) {
            echo '<div class="alert alert-success" role="alert">Your details are correct. You will be redirected in 3 seconds.</div>';
        } else {
            echo '<div class="alert alert-danger" role="alert">Your inputs are empty!</div>';
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
 <div class="container">
    <div class="col-sm-6">
        <form action="login.php" method="post">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" class="form-control">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control">
            </div>
            <input class="btd btn-primary" type="submit" name="submit" value="Submit">
        </form>
        <br />
        <?php formProcess(); ?>
    </div>
 </div>
</body>
</html>