<?php

namespace AyensoftGenel\Entity\Response;

abstract class AbstractResponse
{
    /** @var boolean $Success */
    public $Success;

    /** @var string $Message */
    public $Message;

    /** @var string $ErrorCode */
    public $ErrorCode;
}
