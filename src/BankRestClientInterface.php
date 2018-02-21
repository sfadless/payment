<?php

namespace Sfadless\Payment;

use Sfadless\Payment\Exception\BankAccessException;
use Sfadless\Payment\Exception\BankRequestException;
use Sfadless\Payment\Transaction\Arguments\CheckTransactionArguments;
use Sfadless\Payment\Transaction\Arguments\CreateTransactionArguments;

/**
 * Interface BankRestClientInterface
 *
 * Интерфейс для обращения к банку по api.
 * Задача данного класса - отправить запрос в банк, и вернуть ответ в нужном формате, из которого объект TransactionResolver
 * создаст экземпляр транзакции.
 */
interface BankRestClientInterface
{
    /**
     * @param CreateTransactionArguments $args
     * @return mixed
     * @throws BankAccessException
     * @throws BankRequestException
     */
    public function createRequest(CreateTransactionArguments $args);

    /**
     * @param CheckTransactionArguments $args
     * @return mixed
     * @throws BankAccessException
     * @throws BankRequestException
     */
    public function checkRequest(CheckTransactionArguments $args);
}