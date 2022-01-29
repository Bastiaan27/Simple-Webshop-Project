<?php
require_once __DIR__ . '/model.php';

class Order extends Model{
    private int $id;
    private int $user_id;
    private float $subtotal;
    private string $posted_at;
    private string $payment_method;
    private string $items;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getUserId(): int
    {
        return $this->user_id;
    }

    public function setUserId(int $user_id): self
    {
        $this->user_id = $user_id;

        return $this;
    }

    public function getSubtotal(): float
    {
        return $this->subtotal;
    }

    public function setSubtotal(float $subtotal): self
    {
        $this->subtotal = $subtotal;

        return $this;
    }

    public function getPostedAt(): string
    {
        return $this->posted_at;
    }

    public function setPostedAt(string $posted_at): self
    {
        $this->posted_at = $posted_at;

        return $this;
    }

    public function getPaymentMethod(): string
    {
        return $this->payment_method;
    }

    public function setPaymentMethod(string $payment_method): self
    {
        $this->payment_method = $payment_method;

        return $this;
    }

    public function getItems(): string
    {
        return $this->items;
    }

    public function setItems(string $items): self
    {
        $this->items = $items;

        return $this;
    }
}