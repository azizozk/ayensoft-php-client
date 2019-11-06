<?php

namespace AyensoftGenel\Entity\Response;

class AnlikStokFiyatGuncelleResponse implements ResponseInterface
{
    /**
     * @var ResponseOfListOfPlatformBazliMusteriUrunModel $AnlikStokFiyatGuncelleResult
     */
    public $AnlikStokFiyatGuncelleResult;

    public function getResponse(): AbstractResponse
    {
        return $this->AnlikStokFiyatGuncelleResult;
    }
}
