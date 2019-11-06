<?php

namespace AyensoftGenel\Service;

use AyensoftGenel\Entity\Request\PlatformKargoBilgisiniGir;
use AyensoftGenel\Exception\MissingServiceParams;
use AyensoftGenel\Service\Concern\HasBasket;
use AyensoftGenel\Service\Concern\HasPlatform;

/**
 * Class PlatformKargoBilgisi
 * @package AyensoftGenel\Service
 *
 * @property PlatformKargoBilgisiniGir $request
 * @method \AyensoftGenel\Entity\Response\PlatformKargoBilgisiniGirResponse getResponse()
 *
 */
class PlatformKargoBilgisi extends AbstractService
{
    use HasPlatform, HasBasket;

    protected function action(): string
    {
        return 'PlatformKargoBilgisiniGir';
    }

    protected function setRequest(): void
    {
        $this->request = new PlatformKargoBilgisiniGir();
    }

    protected function prepareRequest(): void
    {
        if ($this->request->request->Platform === null) {
            MissingServiceParams::message('Platform can not be empty. set with platform() method.');
        }

        if ($this->request->request->SiparisKodu === null) {
            MissingServiceParams::message('SiparisKodu can not be empty. set with orderCode() method.');
        }
    }



    public function orderCode(string $orderCode): self
    {
        $this->request->request->SiparisKodu = $orderCode;
        return $this;
    }

    public function shipmentCompany(string $typeKargoSirketi): self
    {
        $this->request->request->KargoSirketi = $typeKargoSirketi;
        return $this;
    }

    public function traceNumber(string $traceNumber): self
    {
        $this->request->request->TakipNumarasi = $traceNumber;
        return $this;
    }

    public function sube(string $sube): self
    {
        $this->request->request->Sube = $sube;
        return $this;
    }

    public function traceUrl(string $traceUrl): self
    {
        $this->request->request->KargoTakipUrl = $traceUrl;
        return $this;
    }

    public function invoiceNo(string $invoiceNo): self
    {
        $this->request->request->FaturaNo = $invoiceNo;
        return $this;
    }
}
