<?php
require __DIR__ . '/controller.php';
require_once __DIR__ . '/../services/consoleservice.php';

class NewConsoleController extends Controller
{

    private ConsoleService $consoleService;

    // initialize services
    function __construct() {
        $this->consoleService = new ConsoleService();
    }

    public function index()
    {
        require_once __DIR__ . '/../models/user.php';
        session_start();
        $user = null;

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

        // Add btn
        if (isset($_POST["add-console"])) {

            $_POST = filter_input_array(INPUT_POST, FILTER_UNSAFE_RAW);

            try {
                $console = new Console();
                $console->setName($_POST["consoleName"]);
                $console->setDescription($_POST["consoleDescription"]);
                $console->setPrice($_POST["consolePrice"]);
                $console->setAmount($_POST["consoleAmount"]);
                $console->setPhotos($_POST["consolePhotos"]);
                $console->setRegion($_POST["consoleRegion"]);

                $this->consoleService->insertConsole($console);
                header("location: consolecrud");
            } catch (Exception $e) {
                echo $e->getMessage();
            }
        }
        include '../views/newconsole/index.php';
    }
}