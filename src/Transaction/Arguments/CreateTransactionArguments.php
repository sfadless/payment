<?php

namespace Sfadless\Payment\Transaction\Arguments;

/**
 * CreateTransacrionArguments
 *
 * @author Pavel Golikov <pgolikov327@gmail.com>
 */
class CreateTransactionArguments
{
    /**
     * @var int
     */
    private $cost;

    /**
     * @var string
     */
    private $orderNumber;

    /**
     * @var string
     */
    private $description;

    /**
     * @var array
     */
    private $options;

    /**
     * CreateTransactionArguments constructor.
     * @param $orderNumber string
     * @param $description string
     * @param $cost int
     * @param array $options
     */
    public function __construct($orderNumber, $description, $cost, array $options = [])
    {
        $this->cost = $cost;
        $this->orderNumber = $orderNumber;
        $this->description = $description;
        $this->options = $options;
    }

    /**
     * @return int
     */
    public function getCost()
    {
        return $this->cost;
    }

    /**
     * @return string
     */
    public function getOrderNumber()
    {
        return $this->orderNumber;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return array
     */
    public function getOptions()
    {
        return $this->options;
    }
}