<?php
require __DIR__ . '/controller.php';

class LoginController extends Controller
{
    public function index()
    {
        require_once __DIR__ . '/../models/user.php';
        require_once __DIR__ . '/../services/userservice.php';
        $userService = new UserService();

        session_start();

        if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
            header("location: home");
            exit;
        }

        $errormsg = "";

        if (isset($_POST["sign-in"])) {

            $_POST = filter_input_array(INPUT_POST, FILTER_UNSAFE_RAW);

            if ($_POST["username"] != "" && $_POST["password"] != "") {

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

        include '../views/login/index.php';
    }
}
