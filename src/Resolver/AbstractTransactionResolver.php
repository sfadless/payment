<?php

namespace Sfadless\Payment\Resolver;

/**
 * AbstractTransactionResolver
 *
 * @author Pavel Golikov <pgolikov327@gmail.com>
 */
abstract class AbstractTransactionResolver implements TransactionResolverInterface
{
    /**
     * @var CardResolverInterface
     */
    protected $cardResolver;

    /**
     * @var ResultResolverInterface
     */
    protected $resultResolver;

    /**
     * AbstractTransactionResolver constructor.
     * @param ResultResolverInterface $resultResolver
     * @param CardResolverInterface $cardResolver
     */
    public function __construct(ResultResolverInterface $resultResolver, CardResolverInterface $cardResolver)
    {
        $this->cardResolver = $cardResolver;
        $this->resultResolver = $resultResolver;
    }
}