<?php

namespace Sfadless\Payment\Transaction;

/**
 * TransactionResult
 *
 * @author Pavel Golikov <pgolikov327@gmail.com>
 */
class TransactionResult
{
    const CREATED = 'created';
    const PAYED = 'payed';
    const ERROR = 'error';

    /**
     * @var int
     */
    private $status;

    /**
     * @var string
     */
    private $code;

    /**
     * @var string
     */
    private $description;

    /**
     * @var int
     */
    private $payedAmount;

    /**
     * @var \DateTimeInterface
     */
    private $payedDate;

    /**
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param int $status
     * @return TransactionResult
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param string $code
     * @return TransactionResult
     */
    public function setCode($code)
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return TransactionResult
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    public function __construct()
    {
        $this->payedAmount = 0;
    }

    /**
     * @return int
     */
    public function getPayedAmount()
    {
        return $this->payedAmount;
    }

    /**
     * @param int $payedAmount
     * @return TransactionResult
     */
    public function setPayedAmount($payedAmount)
    {
        $this->payedAmount = $payedAmount;
        return $this;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getPayedDate()
    {
        return $this->payedDate;
    }

    /**
     * @param \DateTimeInterface $payedDate
     * @return TransactionResult
     */
    public function setPayedDate($payedDate)
    {
        $this->payedDate = $payedDate;
        return $this;
    }
}