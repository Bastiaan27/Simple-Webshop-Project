<?php
require_once __DIR__ . '/../repository/orderrepository.php';

class OrderService {
    private $repository;

    function __construct()
    {
        $this->repository = new OrderRepository();
    }

    function getOrderByTime($posted_at){
        return $this->repository->getOrderByTime($posted_at);
    }
    
    public function insert($order) {
        return $this->repository->insert($order);
    }
}