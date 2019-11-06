<?php

namespace AyensoftGenel\Exception;

class MissingServiceParams extends \BadMethodCallException implements AyensoftException
{
    use ThrowsMessage;
}
