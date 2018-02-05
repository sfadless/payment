<?php

namespace Sfadless\Payment;

/**
 * Card
 *
 * @author Pavel Golikov <pgolikov327@gmail.com>
 */
class Card
{
    /**
     * @var string
     */
    private $number;

    /**
     * @var string
     */
    private $holder;

    /**
     * @var string
     */
    private $expiration;

    /**
     * @return string
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @param string $number
     * @return Card
     */
    public function setNumber($number)
    {
        $this->number = $number;
        return $this;
    }

    /**
     * @return string
     */
    public function getHolder()
    {
        return $this->holder;
    }

    /**
     * @param string $holder
     * @return Card
     */
    public function setHolder($holder)
    {
        $this->holder = $holder;
        return $this;
    }

    /**
     * @return string
     */
    public function getExpiration()
    {
        return $this->expiration;
    }

    /**
     * @param string $expiration
     * @return Card
     */
    public function setExpiration($expiration)
    {
        $this->expiration = $expiration;
        return $this;
    }
}