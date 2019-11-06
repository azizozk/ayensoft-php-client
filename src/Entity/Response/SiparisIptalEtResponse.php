<?php

namespace AyensoftGenel\Entity\Response;

class SiparisIptalEtResponse implements ResponseInterface
{
    /**
     * @var ResponseOfListOfSiparisIptalResponse $SiparisIptalEtResult
     */
    public $SiparisIptalEtResult;

    public function getResponse(): AbstractResponse
    {
        return $this->SiparisIptalEtResult;
    }
}
