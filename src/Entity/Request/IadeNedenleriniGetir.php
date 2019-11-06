<?php

namespace AyensoftGenel\Entity\Request;

class IadeNedenleriniGetir implements RequestInterface
{
    /**
     * @var IadeNedenleriniGetirRequest $request
     */
    public $request;

    public function __construct()
    {
        $this->request = new IadeNedenleriniGetirRequest();
    }
}
