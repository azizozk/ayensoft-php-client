<?php

namespace AyensoftGenel\Entity\Request;

class IadeleriOnayla implements RequestInterface
{
    /**
     * @var IadeOnaylaRequest $request
     */
    public $request;

    public function __construct()
    {
        $this->request = new IadeOnaylaRequest();
    }
}
