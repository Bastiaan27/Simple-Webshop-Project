<?php
require __DIR__ . '/controller.php';
require_once __DIR__ . '/../services/consoleservice.php';

class ConsoleCrudController extends Controller
{

    private $consoleService;

    // initialize services
    function __construct() {
        $this->consoleService = new ConsoleService();
    }

    public function index()
    {
        require_once __DIR__ . '/../models/user.php';
        $consoles = $this->consoleService->getAll();
        session_start();
        $user = null;

        $error = "";
        $confirmation = "";

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

        // Refresh btn
        if (isset($_POST["refresh-page"])) {
            header("location: consolecrud");
        }

        // Save btn
        if (isset($_POST["save-console"])) {

            $_POST = filter_input_array(INPUT_POST, FILTER_UNSAFE_RAW);

            $selectedConsole = $this->consoleService->getById($_POST["id-console"]);

            $name = $selectedConsole->getName();
            $description = $selectedConsole->getDescription();
            $price = $selectedConsole->getPrice();
            $amount = $selectedConsole->getAmount();
            $photos = $selectedConsole->getPhotos();
            $region = $selectedConsole->getRegion();

            //Check if any fields are filled in
            if ($_POST["name-console"] != "" && $_POST["description-console"] != "" && $_POST["price-console"] != "" && $_POST["amount-console"] != "" && $_POST["photos-console"] != "" && $_POST["region-console"] != "") {

                $name = $_POST["name-console"];
                $description = $_POST["description-console"];
                $price = $_POST["price-console"];
                $amount = $_POST["amount-console"];
                $photos = $_POST["photos-console"];
                $region = $_POST["region-console"];

                try {
                    $selectedConsole->setName($name);
                    $selectedConsole->setDescription($description);
                    $selectedConsole->setPrice($price);
                    $selectedConsole->setAmount($amount);
                    $selectedConsole->setPhotos($photos);
                    $selectedConsole->setRegion($region);

                    $this->consoleService->updateConsole($selectedConsole);
                } catch (Exception $e) {
                    echo $e->getMessage();
                }

                header("location: consolecrud");
            } else {
                $error = "Fill in all fields before submitting";
            }
        }

        // Delete btn
        if (isset($_POST["del-console"])) {

            $_POST = filter_input_array(INPUT_POST, FILTER_UNSAFE_RAW);

            $this->consoleService->deleteConsole($_POST["id-console"]);

            $confirmation = "Console has been deleted";

            header("location: consolecrud");
        }

        include '../views/consolecrud/index.php';
    }
}