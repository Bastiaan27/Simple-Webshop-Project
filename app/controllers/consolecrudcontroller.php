<?php
require __DIR__ . '/controller.php';
require_once __DIR__ . '/../services/consoleservice.php';

class ConsoleCrudController extends Controller
{
    private $consoleService;

    function __construct() {
        $this->consoleService = new ConsoleService();
    }

    public function index()
    {
        require_once __DIR__ . '/../models/user.php';
        session_start();

        $consoles = [];
        $error = "";
        $confirmation = "";

        if (!isset($_SESSION["loggedin"])) {
            $_SESSION["loggedin"] = false;
        }

        if (isset($_SESSION["user"])) {
            $user = $_SESSION["user"];
        }

        try {
            $consoles = $this->consoleService->getAll();
        } catch (Exception $e) {
            $error = "Failed to retrieve consoles: " . $e->getMessage();
        }

        if (isset($_POST["logout"])) {
            $_SESSION["loggedin"] = false;
            header("location: home");
            exit();
        }

        if (isset($_POST["refresh-page"])) {
            header("location: consolecrud");
            exit();
        }

        if (isset($_POST["save-console"])) {
            $this->saveConsole();
        }

        if (isset($_POST["del-console"])) {
            
        }

        include '../views/consolecrud/index.php';
    }

    public function saveConsole()
    {
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_SPECIAL_CHARS);

            $id = $_POST["id-console"] ?? null;
            $name = $_POST["name-console"] ?? "";
            $description = $_POST["description-console"] ?? "";
            $price = $_POST["price-console"] ?? "";
            $amount = $_POST["amount-console"] ?? "";
            $photos = $_POST["photos-console"] ?? "";
            $region = $_POST["region-console"] ?? "";

            try {
                $selectedConsole = $this->consoleService->getById($id);

                if (!$selectedConsole) {
                    throw new Exception("Console not found.");
                }

                $selectedConsole->setName($name);
                $selectedConsole->setDescription($description);
                $selectedConsole->setPrice($price);
                $selectedConsole->setAmount($amount);
                $selectedConsole->setPhotos($photos);
                $selectedConsole->setRegion($region);

                $this->consoleService->updateConsole($selectedConsole);
                $confirmation = "Console updated successfully.";

                header("location: consolecrud");
            } catch (Exception $e) {
                $error = "Error updating console: " . $e->getMessage();
            }
    }

    public function deleteConsole() {
        $_POST = filter_input_array(INPUT_POST, INPUT_POST, FILTER_SANITIZE_SPECIAL_CHARS);

            try {
                if (empty($_POST["id-console"])) {
                    throw new Exception("Invalid console ID.");
                }

                $this->consoleService->deleteConsole($_POST["id-console"]);
                $confirmation = "Console has been deleted successfully.";
            } catch (Exception $e) {
                $error = "Error deleting console: " . $e->getMessage();
            }

            header("location: consolecrud");
            exit();
    }
}
