<?php

namespace AyensoftGenel\Entity\Request;

class OdemeHareketleriniGetir implements RequestInterface
{
    /**
     * @var OdemeHareketleriGetirRequest $request
     */
    public $request;

    public function __construct()
    {
        $this->request = new OdemeHareketleriGetirRequest();
    }
}
