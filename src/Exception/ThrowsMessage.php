<?php

namespace AyensoftGenel\Exception;

trait ThrowsMessage
{
    /**
     * @param string $message
     * @throws \Ayensoft\Exception\AyensoftException
     */
    public static function message(string $message)
    {
        throw new static($message);
    }
}
