<?php

namespace Sfadless\Payment\Transaction\Arguments;

/**
 * CheckTransactionArguments
 *
 * @author Pavel Golikov <pgolikov327@gmail.com>
 */
class CheckTransactionArguments
{
    /**
     * @var string
     */
    private $transactionId;

    /**
     * @var array
     */
    private $options;

    /**
     * CheckTransactionArguments constructor.
     * @param $transactionId string
     * @param array $options
     */
    public function __construct($transactionId, array $options = [])
    {
        $this->transactionId = $transactionId;
        $this->options = $options;
    }

    /**
     * @return string
     */
    public function getTransactionId()
    {
        return $this->transactionId;
    }

    /**
     * @return array
     */
    public function getOptions()
    {
        return $this->options;
    }
}