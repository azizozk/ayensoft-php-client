<?php

namespace AyensoftGenel\Entity\Response;

class SiparisTicariSistemKayitNumarasiGirResponse implements ResponseInterface
{
    /**
     * @var Response $SiparisTicariSistemKayitNumarasiGirResult
     */
    public $SiparisTicariSistemKayitNumarasiGirResult;

    public function getResponse(): AbstractResponse
    {
        return $this->SiparisTicariSistemKayitNumarasiGirResult;
    }
}
