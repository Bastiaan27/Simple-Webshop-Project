<?php
require_once __DIR__ . '/repository.php';
require_once __DIR__ . '/../model/order.php';

class OrderRepository extends Repository {
    
    function getOrderByTime($posted_at){
        try {
            $stmt = $this->connection->prepare("SELECT `id`, `user_id`, `subtotal`, `posted_at`, `payment_method`, `items` FROM `orders` WHERE posted_at=STR_TO_DATE(?,'%d-%m-%Y %H:%i:%s')");
            $stmt->execute([$posted_at]);

            $stmt->setFetchMode(PDO::FETCH_CLASS, 'Order');
            $order = $stmt->fetch();
            return $order;
        } catch (PDOException $e)
        {
            echo $e;
        }
    }

    function insert($order) {
        try {
            $stmt = $this->connection->prepare("INSERT INTO `orders`(`user_id`, `subtotal`, `posted_at`, `payment_method`, `items`) VALUES (?,?,?,STR_TO_DATE(?,'%d-%m-%Y %H:%i:%s'),?)");            
            $stmt->execute([$order->getUserId(), $order->getSubtotal(), $order->getPostedAt(), $order->getPaymentMethod(), $order->getItems()]);

        } catch (PDOException $e) {
            echo $e;
        }
    }
}