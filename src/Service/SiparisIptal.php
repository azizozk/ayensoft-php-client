<?php

namespace AyensoftGenel\Service;

use AyensoftGenel\Entity\Request\SiparisIptalDetay;
use AyensoftGenel\Entity\Request\SiparisIptalEt;
use AyensoftGenel\Exception\MissingServiceParams;
use AyensoftGenel\Service\Concern\HasShopId;

/**
 * Class SiparisIptal
 * @package AyensoftGenel\Service
 *
 * @property SiparisIptalEt $request
 * @method \AyensoftGenel\Entity\Response\SiparisIptalEtResponse getResponse()
 *
 */
class SiparisIptal extends AbstractService
{
    use HasShopId;

    /** @var string|null */
    private $basketId;

    /** @var string|null */
    private $platform;


    protected function action(): string
    {
        return 'SiparisIptalEt';
    }

    protected function setRequest(): void
    {
        $this->request = new SiparisIptalEt();
    }

    protected function prepareRequest(): void
    {

        if (\count($this->request->request->SiparisIptalDetaylari) < 1) {
            MissingServiceParams::message(
                'SiparisIptalDetaylari can not be empty. set with SiparisIptal::order() method.'
            );
        }
    }


    public function basket(string $basket): self
    {
        $this->basketId = $basket;
        return $this;
    }

    public function platform(string $typePlatform): self
    {
        $this->platform = $typePlatform;
        return $this;
    }

    public function order(
        string $oderCode,
        string $stockCode,
        string $reasonTxt,
        int $amount = null,
        string $basketId = null,
        string $platform = null
    ): self {
        $obj = new SiparisIptalDetay();
        $obj->SiparisKodu = $oderCode;
        $obj->StokKodu = $stockCode;
        $obj->IptalNedeni = $reasonTxt;
        $obj->Miktar = $amount;
        $obj->SepetId = $basketId ?? $this->basketId;
        $obj->Platform = $platform ?? $this->platform;

        $this->request->request->SiparisIptalDetaylari[] = $obj;

        return $this;
    }
}
