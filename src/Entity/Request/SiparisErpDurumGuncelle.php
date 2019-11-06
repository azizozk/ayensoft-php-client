<?php

namespace AyensoftGenel\Entity\Request;

class SiparisErpDurumGuncelle implements RequestInterface
{

    /**
     * @var SiparisErpDurumGuncelleGenelRequest $request
     */
    public $request;

    public function __construct()
    {
        $this->request = new SiparisErpDurumGuncelleGenelRequest();
    }
}
