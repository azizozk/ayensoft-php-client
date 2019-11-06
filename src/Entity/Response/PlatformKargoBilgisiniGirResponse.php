<?php

namespace AyensoftGenel\Entity\Response;

class PlatformKargoBilgisiniGirResponse implements ResponseInterface
{
    /**
     * @var ResponseOfListOfString $PlatformKargoBilgisiniGirResult
     */
    public $PlatformKargoBilgisiniGirResult;

    public function getResponse(): AbstractResponse
    {
        return $this->PlatformKargoBilgisiniGirResult;
    }
}
