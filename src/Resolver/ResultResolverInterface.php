<?php

namespace Sfadless\Payment\Resolver;

use Sfadless\Payment\Transaction\TransactionResult;

/**
 * ResultResolverInterface
 *
 * @author Pavel Golikov <pgolikov327@gmail.com>
 */
interface ResultResolverInterface
{
    /**
     * @param $data
     * @return TransactionResult
     */
    public function getResult($data);
}