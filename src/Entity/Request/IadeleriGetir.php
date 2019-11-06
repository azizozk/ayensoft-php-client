<?php

namespace AyensoftGenel\Entity\Request;

class IadeleriGetir implements RequestInterface
{
    /**
     * @var IadeGetirRequest $request
     */
    public $request;

    public function __construct()
    {
        $this->request = new IadeGetirRequest();
    }
}
