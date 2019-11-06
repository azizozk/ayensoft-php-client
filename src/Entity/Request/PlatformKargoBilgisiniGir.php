<?php

namespace AyensoftGenel\Entity\Request;

class PlatformKargoBilgisiniGir implements RequestInterface
{
    /**
     * @var PlatformKargoBilgisiniGirGenelRequest $request
     */
    public $request;

    public function __construct()
    {
        $this->request = new PlatformKargoBilgisiniGirGenelRequest();
    }
}
