<?php
require __DIR__ . '/../../services/userservice.php';
$userService = new UserService();

$errormsg = "";

if (isset($_POST["register"])) {
    if ($_POST["username"] && $_POST["password"] != "") {
        $user = new User();
        $user->setUsername($_POST["username"]);
        $user->setEmail($_POST["email"]);;
        $user->setPassword($_POST["password"]);
        
        if ($userService->getByUserName($user->getUserName()) != null) {
            $errormsg = "This username is already in use, choose another one.";
        } else {
            $userService->insert($user);
            header("location: login");
        }
    }
    else{
        $errormsg = "Fill in all fields before submitting.";
    }
}

include __DIR__ . '/../navbar.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Homepage</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="UTF-8">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="http://localhost/css/style.css">
</head>

<body>
    <div class="container">
        <main>
            <form action="register" method="post">
                <h1 class="login-title">Register</h1>
                <div class="form-floating">
                    <label for="username">Username</label>
                    <input type="username" class="form-control" id="username" name="username" placeholder="Username">
                </div>
                <div class="form-floating">
                    <label for="email">E-mail</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                </div>
                <div class="form-floating">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                </div>
                <label class="error_msg">
                    <?php echo $errormsg ?>
                </label>
                <button class="w-100 btn btn-lg btn-primary" type="submit" name="register" id="submit">Register</button>
                <label><a href="login">Already an account? Login here</a></label>
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