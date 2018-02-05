<?php

namespace Sfadless\Payment\Transaction;

use Sfadless\Payment\Bank\BankInterface;
use Sfadless\Payment\Card;

/**
 * Transaction
 *
 * @author Pavel Golikov <pgolikov327@gmail.com>
 */
interface TransactionInterface
{
    /**
     * @return string
     */
    public function getTransactionId();

    /**
     * @return TransactionResult
     */
    public function getResult();

    /**
     * @return \DateTimeInterface
     */
    public function getCreatedDatetime();

    /**
     * @return string
     */
    public function getUrl();

    /**
     * @return int
     */
    public function getCost();

    /**
     * @return string
     */
    public function getDescription();

    /**
     * @return string
     */
    public function getOrderNumber();

    /**
     * @return Card
     */
    public function getCard();

    /**
     * @return BankInterface
     */
    public function getBank();

    /**
     * @return mixed
     */
    public function update();
}