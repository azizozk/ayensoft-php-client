<?php

namespace AyensoftGenel\Service;

use AyensoftGenel\Entity\Request\SiparisOnayla;
use AyensoftGenel\Exception\MissingServiceParams;
use AyensoftGenel\Service\Concern\HasPlatform;
use AyensoftGenel\Service\Concern\HasShopId;

/**
 * Class SiparisOnay
 * @package AyensoftGenel\Service
 *
 * @property SiparisOnayla $request
 * @method getResponse()
 */
class SiparisOnay extends AbstractService
{
    use HasPlatform, HasShopId;

    protected function action(): string
    {
        return 'SiparisOnayla';
    }

    protected function setRequest(): void
    {
        $this->request = new SiparisOnayla();
    }

    protected function prepareRequest(): void
    {
        if ($this->request->request->OrderId === null || \count($this->request->request->OrderItemIds) < 0) {
            MissingServiceParams::message('Platform can not be empty. add with orderId() or addOrderId() method.');
        }
    }


    public function orderId(string $orderId): self
    {
        $this->request->request->OrderId = $orderId;
        return $this;
    }

    public function addOrderId(string $orderId): self
    {
        if ($this->request->request->OrderId !== null) {
            $this->request->request->OrderItemIds[] = $this->request->request->OrderId;
            $this->request->request->OrderId = null;
        }

        $this->request->request->OrderItemIds[] = $orderId;

        return $this;
    }

    public function invoiceNo(string $faturaNo): self
    {
        $this->request->request->FaturaNo = $faturaNo;

        return $this;
    }

    public function ticariKayitNo(string $kayitNo): self
    {
        $this->request->request->TicariSistemKayitNo = $kayitNo;

        return $this;
    }

    public function ticariCariKod(string $cariKod): self
    {
        $this->request->request->TicariSistemCariKod = $cariKod;

        return $this;
    }

    public function invoied(bool $faturalandi): self
    {
        $this->request->request->Faturalandi = $faturalandi;

        return $this;
    }
}
