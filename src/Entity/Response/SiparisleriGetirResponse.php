<?php

namespace AyensoftGenel\Entity\Response;

class SiparisleriGetirResponse implements ResponseInterface
{
    /**
     * @var ListResponseOfSepet $SiparisleriGetirResult
     */
    public $SiparisleriGetirResult;

    public function getResponse(): AbstractResponse
    {
        return $this->SiparisleriGetirResult;
    }
}
