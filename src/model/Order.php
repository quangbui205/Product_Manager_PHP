<?php


namespace File\model;


class Order
{
    protected $orderNumber;
    protected $orderDate;
    protected $shippedDate;
    protected $requiredDate;
    protected $status;
    protected $comment;
    protected $id;

    public function __construct($orderNumber, $orderDate, $shippedDate, $requiredDate, $status, $comment, $id)
    {
        $this->orderNumber = $orderNumber;
        $this->orderDate = $orderDate;
        $this->shippedDate = $shippedDate;
        $this->requiredDate = $requiredDate;
        $this->status = $status;
        $this->comment = $comment;
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * @return mixed
     */
    public function getOrderDate()
    {
        return $this->orderDate;
    }

    /**
     * @return mixed
     */
    public function getOrderNumber()
    {
        return $this->orderNumber;
    }

    /**
     * @return mixed
     */
    public function getRequiredDate()
    {
        return $this->requiredDate;
    }

    /**
     * @return mixed
     */
    public function getShippedDate()
    {
        return $this->shippedDate;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }


}