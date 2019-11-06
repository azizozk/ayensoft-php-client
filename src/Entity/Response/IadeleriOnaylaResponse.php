<?php

namespace AyensoftGenel\Entity\Response;

class IadeleriOnaylaResponse implements ResponseInterface
{
    /**
     * @var Response $IadeleriOnaylaResult
     */
    public $IadeleriOnaylaResult;

    public function getResponse(): AbstractResponse
    {
        return $this->IadeleriOnaylaResult;
    }
}
