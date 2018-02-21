<?php

namespace Sfadless\Payment\Resolver;

use Sfadless\Payment\Card;

/**
 * CardResolverInterface
 *
 * @author Pavel Golikov <pgolikov327@gmail.com>
 */
interface CardResolverInterface
{
    /**
     * @param $data
     * @return Card
     */
    public function getCard($data);
}