<?php
require_once __DIR__ . '/model.php';
require_once __DIR__ . '/shopitem.php';

class Cart extends Model{
    private $cart = array();

    public function getCart(): array {
        return $this->cart;
    }

    public function addToCart(ShopItem $item){
        array_push($this->cart, $item);
    }

    public function eraseFromCart(ShopItem $item){
        if (($key = array_search($item, $this->cart)) !== false) {
            unset($this->items[$key]);
        }
    }
}