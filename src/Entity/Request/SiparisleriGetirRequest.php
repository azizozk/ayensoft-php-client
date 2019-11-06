<?php

namespace AyensoftGenel\Entity\Request;

class SiparisleriGetirRequest implements RequestInterface
{
    /**
     * @var SiparisListesiGenelRequest $request
     */
    public $request;

    public function __construct()
    {
        $this->request = new SiparisListesiGenelRequest();
    }
}
