<?php

namespace AyensoftGenel\Entity\Response;

class SiparisErpDurumGuncelleResponse implements ResponseInterface
{
    /**
     * @var ResponseOfString $SiparisErpDurumGuncelleResult
     */
    public $SiparisErpDurumGuncelleResult;

    public function getResponse(): AbstractResponse
    {
        return $this->SiparisErpDurumGuncelleResult;
    }
}
