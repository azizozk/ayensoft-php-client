<?php

namespace AyensoftGenel\Entity\Request;

class SiparisTicariSistemKayitNumarasiGir implements RequestInterface
{
    /**
     * @var SiparisTicariSistemKayitNumarasGirRequest $request
     */
    public $request;

    public function __construct()
    {
        $this->request = new SiparisTicariSistemKayitNumarasGirRequest();
    }
}
