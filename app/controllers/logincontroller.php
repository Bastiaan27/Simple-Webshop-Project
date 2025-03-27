<?php
require __DIR__ . '/controller.php';
require_once __DIR__ . '/../models/user.php';
require_once __DIR__ . '/../services/userservice.php';

class LoginController extends Controller
{
    private UserService $userService;

    public function __construct()
    {
        $this->userService = new UserService();
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
    }

    public function index()
    {
        if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
            header("Location: home");
            exit();
        }

        $errormsg = "";

        if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["sign-in"])) {
            $this->handleLogin($errormsg);
        }

        include '../views/login/index.php';
    }

    private function handleLogin(&$errormsg)
    {
        $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
        $password = filter_input(INPUT_POST, 'password', FILTER_DEFAULT);

        if (!$username || !$password) {
            $errormsg = "Fill in all fields before submitting.";
            return;
        }

        $user = $this->userService->getByUserName($username);

        if (password_verify($password, $user->getPassword())) {
            $_SESSION["loggedin"] = true;
            $_SESSION["user"] = $user;
            header("Location: home");
            exit();
        } else {
            $errormsg = "Password or username incorrect, please try again.";
        }
    }
}
