<?php
require __DIR__ . '/controller.php';

class CartController extends Controller
{
    public function index()
    {
        require __DIR__ . '/../views/cart/index.php';
    }
}