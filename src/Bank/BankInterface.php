<?php

namespace Sfadless\Payment\Bank;

use Sfadless\Payment\Transaction\TransactionInterface;

/**
 * Interface BankInterface
 * @package Sfadless\Payment\Bank
 */
interface BankInterface
{
    /**
     * @param $orderNumber string
     * @param $description string
     * @param $cost integer
     *
     * @return TransactionInterface
     */
    public function createTransaction($orderNumber, $description, $cost);

    /**
     * @param $transactionId string
     *
     * @return TransactionInterface
     */
    public function getTransactionById($transactionId);

    /**
     * @param TransactionInterface $transaction
     */
    public function updateTransaction(TransactionInterface $transaction);
}