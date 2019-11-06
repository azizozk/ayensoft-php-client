<?php

namespace AyensoftGenel\Entity\Response;

class SiparisOnaylaResponse implements ResponseInterface
{
    /**
     * @var ResponseOfString $SiparisOnaylaResult
     */
    public $SiparisOnaylaResult;

    public function getResponse(): AbstractResponse
    {
        return $this->SiparisOnaylaResult;
    }
}
