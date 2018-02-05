<?php

namespace Sfadless\Payment\Transaction;

use Sfadless\Payment\Bank\BankInterface;
use Sfadless\Payment\Card;

/**
 * AbstractTransaction
 *
 * @author Pavel Golikov <pgolikov327@gmail.com>
 */
class AbstractTransaction implements TransactionInterface
{
    /**
     * @var string
     */
    private $url;

    /**
     * @var integer
     */
    private $cost;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $orderNumber;

    /**
     * @var Card
     */
    private $card;

    /**
     * @var string
     */
    private $transactionId;

    /**
     * @var string
     */
    private $ip;

    /**
     * @var \DateTimeInterface
     */
    private $createdDatetime;

    /**
     * @var TransactionResult
     */
    private $result;

    /**
     * @var BankInterface
     */
    private $bank;

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param string $url
     * @return static
     */
    public function setUrl($url)
    {
        $this->url = $url;
        return $this;
    }

    /**
     * @return integer
     */
    public function getCost()
    {
        return $this->cost;
    }

    /**
     * @param integer $cost
     * @return static
     */
    public function setCost($cost)
    {
        $this->cost = $cost;
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
     * @return static
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return string
     */
    public function getOrderNumber()
    {
        return $this->orderNumber;
    }

    /**
     * @param string $orderNumber
     * @return static
     */
    public function setOrderNumber($orderNumber)
    {
        $this->orderNumber = $orderNumber;
        return $this;
    }

    /**
     * @return Card
     */
    public function getCard()
    {
        return $this->card;
    }

    /**
     * @param Card $card
     * @return static
     */
    public function setCard(Card $card)
    {
        $this->card = $card;
        return $this;
    }

    /**
     * @return string
     */
    public function getTransactionId()
    {
        return $this->transactionId;
    }

    /**
     * @param string $transactionId
     * @return static
     */
    public function setTransactionId($transactionId)
    {
        $this->transactionId = $transactionId;
        return $this;
    }

    /**
     * @return string
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * @param string $ip
     * @return static
     */
    public function setIp($ip)
    {
        $this->ip = $ip;
        return $this;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getCreatedDatetime()
    {
        return $this->createdDatetime;
    }

    /**
     * @param \DateTimeInterface $datetime
     * @return static
     */
    public function setCreatedDatetime(\DateTimeInterface $datetime)
    {
        $this->createdDatetime = $datetime;
        return $this;
    }

    /**
     * @return TransactionResult
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * @param TransactionResult $result
     * @return TransactionInterface
     */
    public function setResult(TransactionResult $result)
    {
        $this->result = $result;
        return $this;
    }

    /**
     * @return mixed|void
     */
    public function update()
    {
        $this->bank->updateTransaction($this);
    }

    /**
     * @return BankInterface
     */
    public function getBank()
    {
        return $this->bank;
    }

    /**
     * @param BankInterface $bank
     * @return static
     */
    public function setBank(BankInterface $bank)
    {
        $this->bank = $bank;
        return $this;
    }

}