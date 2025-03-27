<?php
require_once __DIR__ . '/model.php';
require_once __DIR__ . '/console.php';

class Cart extends Model {
    private $cart = [];

    public function __construct() {
        // Load cart from session if available
        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = [];
        }
        $this->cart = $_SESSION['cart'];
    }
?>
