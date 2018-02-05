<?php

namespace Sfadless\Payment\Exception;

/**
 * TransactionNotFoundException
 *
 * @author Pavel Golikov <pgolikov327@gmail.com>
 */
class TransactionNotFoundException extends PaymentException
{
    public function __construct($transactionId)
    {
        parent::__construct("Транзакция {$transactionId} не найдена");
    }
}