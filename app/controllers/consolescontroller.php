<?php
require __DIR__ . '/controller.php';
require_once __DIR__ . '/../services/consoleservice.php';

class ConsolesController extends Controller
{

    private $consoleService;

    // initialize services
    function __construct() {
        $this->consoleService = new ConsoleService();
    }

    public function index()
    {
        require_once __DIR__ . '/../models/user.php';
        require_once __DIR__ . '/../models/cart.php';
        $consoles = $this->consoleService->getAll();
        session_start();
        $user;

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

        include '../views/consoles/index.php';
    }
}