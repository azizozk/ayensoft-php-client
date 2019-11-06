<?php

namespace AyensoftGenel\Exception;

class InvalidConfiguration extends \InvalidArgumentException implements AyensoftException
{
    use ThrowsMessage;
}
