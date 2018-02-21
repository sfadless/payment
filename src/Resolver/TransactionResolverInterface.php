<?php

namespace Sfadless\Payment\Resolver;

use Sfadless\Payment\Transaction\TransactionInterface;

/**
 * Interface TransactionResolverInterface
 */
interface TransactionResolverInterface
{
    /**
     * @param $data mixed
     * @return TransactionInterface
     *
     * @throws \InvalidArgumentException
     */
    public function getTransaction($data);

    /**
     * @param TransactionInterface $transaction
     * @param $data
     * @return bool
     */
    public function synchronize(TransactionInterface $transaction, $data);
}