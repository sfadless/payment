<?php

namespace Sfadless\Payment\Bank;

use Sfadless\Payment\BankRestClientInterface;
use Sfadless\Payment\Resolver\TransactionResolverInterface;
use Sfadless\Payment\Transaction\Arguments\CheckTransactionArguments;
use Sfadless\Payment\Transaction\Arguments\CreateTransactionArguments;
use Sfadless\Payment\Transaction\TransactionInterface;

/**
 * AbstractBank
 *
 * @author Pavel Golikov <pgolikov327@gmail.com>
 */
abstract class AbstractBank implements BankInterface
{
    /**
     * @var BankRestClientInterface
     */
    protected $restClient;

    /**
     * @var TransactionResolverInterface
     */
    protected $transactionResolver;

    /**
     * @var array
     */
    protected $options;

    /**
     * AbstractBank constructor.
     * @param BankRestClientInterface $restClient
     * @param TransactionResolverInterface $transactionResolver
     * @param array $options
     */
    public function __construct(
        BankRestClientInterface $restClient,
        TransactionResolverInterface $transactionResolver,
        array $options = []
    ) {
        $this->restClient = $restClient;
        $this->transactionResolver = $transactionResolver;
        $this->options = $options;
    }

    /**
     * @param string $orderNumber
     * @param string $description
     * @param int $cost
     *
     * @return \Sfadless\Payment\Transaction\TransactionInterface
     *
     * @throws \Sfadless\Payment\Exception\BankAccessException
     * @throws \Sfadless\Payment\Exception\BankRequestException
     */
    public function createTransaction($orderNumber, $description, $cost)
    {
        $args = $this->getArgumentsForCreateTransaction($orderNumber, $description, $cost);

        $data = $this->restClient->createRequest($args);

        return $this->transactionResolver->getTransaction($data);
    }

    /**
     * @param string $transactionId
     * @return TransactionInterface
     *
     * @throws \Sfadless\Payment\Exception\BankAccessException
     * @throws \Sfadless\Payment\Exception\BankRequestException
     */
    public function getTransactionById($transactionId)
    {
        $args = $this->getArgumentsForCheckTransaction($transactionId);

        $data = $this->restClient->checkRequest($args);

        return $this->transactionResolver->getTransaction($data);
    }

    /**
     * @param TransactionInterface $transaction
     * @return mixed
     * @throws \Sfadless\Payment\Exception\BankAccessException
     * @throws \Sfadless\Payment\Exception\BankRequestException
     */
    public function updateTransaction(TransactionInterface $transaction)
    {
        $args = $this->getArgumentsForCheckTransaction($transaction->getTransactionId());

        $data = $this->restClient->checkRequest($args);

        return $this->transactionResolver->synchronize($transaction, $data);
    }

    /**
     * В этом методе проверяются и подготавливаются данные для запроса в банк на создание транзакции. Обязательные поля - номер заказа, сумма и
     * описание заказа. Все остальные (например, логин и пароль) можно задать отдельно при создании экземпляра CreateTransactionArguments
     *
     * @param $orderNumber string
     * @param $description string
     * @param $cost int
     *
     * @return CreateTransactionArguments
     *
     * @throws \InvalidArgumentException
     */
    abstract protected function getArgumentsForCreateTransaction($orderNumber, $description, $cost);

    /**
     * В этом методе подготавливаются и проверяются данные для запроса в банк на проверку транзакции. Обязательное поле - id транзакции,
     * остальные можно передать в параметре options экземпляра CheckTransactionArguments
     *
     * @param $transactionId string
     *
     * @return CheckTransactionArguments
     *
     * @throws \InvalidArgumentException
     */
    abstract protected function getArgumentsForCheckTransaction ($transactionId);
}