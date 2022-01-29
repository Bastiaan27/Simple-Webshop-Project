<?php
require __DIR__ . '/../../services/userservice.php';
$userService = new UserService();

session_start();

if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    header("location: home");
    exit;
}

$errormsg = "";

if (isset($_POST["sign-in"])) {
    if ($_POST["username"] && $_POST["password"] != "") {

        $username = $_POST["username"];
        $password = $_POST["password"];

        $user = $userService->getByUserName($username);

        if (password_verify($password, $user->getPassword())) {

            $_SESSION["loggedin"] = true;
            $_SESSION["user"] = $user;
            header("location: home");
        } else {
            $errormsg = "Password or username incorrect, please try again.";
        }
    } else {
        $error = "Fill in all fields before submitting.";
    }
}

include __DIR__ . '/../navbar.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="UTF-8">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="http://localhost/css/style.css">
</head>

<body>
    <div class="container">
        <main class="form-signin">
            <form function="login" method="post">
                <h1 class="login-title">Log in</h1>
                <div class="form-floating">
                    <label for="username">Username</label>
                    <input type="username" class="form-control" id="username" name="username" placeholder="Username">
                </div>
                <div class="form-floating">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                </div>

                <div class="checkbox mb-3">
                    <label>
                        <input type="checkbox" value="remember-me"> Remember me
                    </label>
                    <label class="error_msg">
                        <?php echo $errormsg ?>
                    </label>
                </div>
                <button class="w-100 btn btn-lg btn-primary" type="submit" name="sign-in">Sign in</button>
                <label class="register"><a href="register">Register here</a></label>
            </form>
        </main>
    </div>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>

<?php
include __DIR__ . '/../footer.php';
?>