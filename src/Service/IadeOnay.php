<?php

namespace AyensoftGenel\Service;

use AyensoftGenel\Entity\Request\IadeleriOnayla;
use AyensoftGenel\Exception\MissingServiceParams;
use AyensoftGenel\Service\Concern\HasBasket;
use AyensoftGenel\Service\Concern\HasPlatform;

/**
 * Class IadeOnay
 * @package AyensoftGenel\Service
 *
 * @property IadeleriOnayla $request
 * @method \AyensoftGenel\Entity\Response\IadeleriOnaylaResponse getResponse()
 */
class IadeOnay extends AbstractService
{
    use HasBasket, HasPlatform;

    protected function action(): string
    {
        return 'IadeleriOnayla';
    }

    protected function setRequest(): void
    {
        $this->request = new IadeleriOnayla();
    }

    protected function prepareRequest(): void
    {
        if ($this->request->request->SiparisKodu === null) {
            MissingServiceParams::message('SiparisKodu can not be empty. set with IadeOnay::orderCode() method.');
        }
    }



    public function orderCode(string $orderCode): self
    {
        $this->request->request->SiparisKodu = $orderCode;
        return $this;
    }

    public function amount(int $amount): self
    {
        $this->request->request->Miktar = $amount;
        return $this;
    }

    public function reasonId(int $reasonId): self
    {
        $this->request->request->IadeNedeniId = $reasonId;
        return $this;
    }

    public function reasonText(string $reasonText): self
    {
        $this->request->request->IadeNedeniAciklama = $reasonText;
        return $this;
    }
}
