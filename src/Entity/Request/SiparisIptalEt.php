<?php

namespace AyensoftGenel\Entity\Request;

class SiparisIptalEt implements RequestInterface
{
    /**
     * @var SiparisIptalGenelRequest $request
     */
    public $request;

    public function __construct()
    {
        $this->request = new SiparisIptalGenelRequest();
    }
}
