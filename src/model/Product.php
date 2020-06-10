<?php


namespace File\model;


class Product
{
    protected $productCode;
    protected $productName;
    protected $producer;
    protected $description;
    protected $price;
    protected $image;
    protected $quantityInStock;

    public function __construct($productCode, $productName, $producer, $description, $price, $image, $quantityInStock)
    {
        $this->productCode = $productCode;
        $this->productName = $productName;
        $this->producer = $producer;
        $this->description = $description;
        $this->price = $price;
        $this->image = $image;
        $this->quantityInStock = $quantityInStock;

    }

    /**
     * @return mixed
     */
    public function getProducer()
    {
        return $this->producer;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @return mixed
     */
    public function getProductCode()
    {
        return $this->productCode;
    }

    /**
     * @return mixed
     */
    public function getProductName()
    {
        return $this->productName;
    }

    /**
     * @return mixed
     */
    public function getQuantityInStock()
    {
        return $this->quantityInStock;
    }


}