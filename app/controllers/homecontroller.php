<?php
require __DIR__ . '/controller.php';
require_once __DIR__ . '/../models/user.php';
require_once __DIR__ . '/../models/cart.php';
require_once __DIR__ . '/../services/consoleservice.php';

class HomeController extends Controller
{

    private $consoleService;

    // initialize services
    function __construct() {
        $this->consoleService = new ConsoleService();
    }

    public function index()
    {
        $consoles = $this->consoleService->getAll();
        session_start();

        if (!isset($_SESSION["cart"])) {
            $_SESSION["cart"] = new Cart();
        }

        if (isset($_POST["logout"])) {
            $_SESSION["loggedin"] = false;
            header("location: home");
        }

        if (!isset($_SESSION["loggedin"])) {
            $_SESSION["loggedin"] = false;
        }

        if (isset($_SESSION["user"])) {
            $user = $_SESSION["user"];
        }

        $this->displayView($consoles);
    }
}
