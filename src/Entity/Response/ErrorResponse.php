<?php

namespace AyensoftGenel\Entity\Response;

class ErrorResponse extends AbstractResponse implements ResponseInterface
{
    public function __construct(string $message, string $code = null)
    {
        $this->Message = $message;
        $this->ErrorCode = $code;
        $this->Success = false;
    }

    public function getResponse(): AbstractResponse
    {
        return $this;
    }
}
