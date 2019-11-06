<?php

namespace AyensoftGenel\Entity\Response;

class IadeleriGetirResponse implements ResponseInterface
{
    /**
     * @var ResponseOfListOfSiparisIadeModel $IadeleriGetirResult
     */
    public $IadeleriGetirResult;

    public function getResponse(): AbstractResponse
    {
        return $this->IadeleriGetirResult;
    }
}
