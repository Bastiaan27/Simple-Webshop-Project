<?php
require __DIR__ . '/controller.php';

class RegisterController extends Controller
{
    public function index()
    {
        require_once __DIR__ . '/../services/userservice.php';
        $userService = new UserService();

        $errormsg = "";

        if (isset($_POST["register"])) {

            $_POST = filter_input_array(INPUT_POST, FILTER_UNSAFE_RAW);

            if ($_POST["username"] && $_POST["password"] != "") {
                $user = new User();
                $user->setUsername($_POST["username"]);
                $user->setEmail($_POST["email"]);
                $user->setPassword($_POST["password"]);
                $user->setAddress($_POST["address"]);

                $userService->insert($user);
                header("location: login");
            } else {
                $errormsg = "Fill in all fields before submitting.";
            }
        }

        include '../views/register/index.php';
    }
}
