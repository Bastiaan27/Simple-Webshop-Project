<?php
require __DIR__ . '/controller.php';

class CartController extends Controller
{
    public function index()
    {
        require_once __DIR__ . '/../models/cart.php';
        require_once __DIR__ . '/../models/user.php';
        require_once __DIR__ . '/../services/orderservice.php';
        $orderService = new OrderService();

        session_start();
        $user;
        $cart;

        if (isset($_POST["logout"])) {
            $_SESSION["loggedin"] = false;
            header("location: home");
        }

        if (isset($_SESSION["user"])) {
            $user = $_SESSION["user"];
        }

        if (isset($_SESSION["cart"])) {
            $cart = $_SESSION["cart"];
        }

        include '../views/cart/index.php';
    }
}