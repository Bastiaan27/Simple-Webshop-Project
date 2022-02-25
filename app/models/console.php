<?php 

class Console {
    private int $id;
    private string $name;
    private string $description;
    private float $price;
    private int $amount;
    private string $photos;
    private string $region;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id)
    {
        $this->id = $id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function getPrice(): string
    {
        return $this->price;
    }

    public function setPrice(float $price)
    {
        $this->price = $price;
    }

    public function getAmount(): string
    {
        return $this->amount;
    }

    public function setAmount(int $amount)
    {
        $this->amount = $amount;
    }

    public function getPhotos(): string
    {
        return $this->photos;
    }

    public function setPhotos(string $photos)
    {
        $this->photos = $photos;
    }

    public function getRegion(): string
    {
        return $this->region;
    }

    public function setRegion(string $region)
    {
        $this->region = $region;
    }
}