<?php

namespace AyensoftGenel\Entity\Request;

class AnlikStokFiyatGuncelle implements RequestInterface
{
    /** @var \AyensoftGenel\Entity\Request\AnlikStokFiyatGuncelleRequest */
    public $request;

    public function __construct()
    {
        $this->request = new AnlikStokFiyatGuncelleRequest();
    }
}
