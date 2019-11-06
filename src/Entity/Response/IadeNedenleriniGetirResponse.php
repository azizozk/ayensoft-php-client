<?php

namespace AyensoftGenel\Entity\Response;

class IadeNedenleriniGetirResponse implements ResponseInterface
{
    /**
     * @var ResponseOfListOfIadeNedeni $IadeNedenleriniGetirResult
     */
    public $IadeNedenleriniGetirResult;

    public function getResponse(): AbstractResponse
    {
        return $this->IadeNedenleriniGetirResult;
    }
}
