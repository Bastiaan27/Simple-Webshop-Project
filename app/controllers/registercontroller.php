<?php
require __DIR__ . '/controller.php';
require_once __DIR__ . '/../services/userservice.php';
require_once __DIR__ . '/../models/user.php';
require_once __DIR__ . '/../models/role.php';

class RegisterController extends Controller
{
    private UserService $userService;

    public function __construct()
    {
        $this->userService = new UserService();
    }

    public function index()
    {
        $errormsg = "";

        if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["register"])) {
            $this->handleRegistration($errormsg);
        }

        include '../views/register/index.php';
    }

    private function handleRegistration(&$errormsg)
    {
        $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        $password = filter_input(INPUT_POST, 'password', FILTER_DEFAULT);
        $address = filter_input(INPUT_POST, 'address', FILTER_SANITIZE_SPECIAL_CHARS);

        if (!$username || !$email || !$password || !$address) {
            $errormsg = "Fill in all fields before submitting.";
            return;
        }

        // Hash password before storing
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

        $user = new User();
        $user->setUsername($username);
        $user->setEmail($email);
        $user->setPassword($hashedPassword);
        $user->setAddress($address);
        $user->setRole(Role::USER);

        $this->userService->insertUser($user);

        header("Location: login");
        exit();
    }
}
