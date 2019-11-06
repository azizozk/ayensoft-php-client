<?php

namespace AyensoftGenel\Service;

use AyensoftGenel\Entity\Request\SiparisleriGetirRequest;
use AyensoftGenel\Service\Concern\HasBasket;
use AyensoftGenel\Service\Concern\HasPlatform;
use AyensoftGenel\Service\Concern\HasShopId;

/**
 * Class SiparisListesi
 * @package AyensoftGenel\Service
 *
 * @property SiparisleriGetirRequest $request
 * @method \AyensoftGenel\Entity\Response\SiparisleriGetirResponse getResponse()
 */
class SiparisListesi extends AbstractService
{
    use HasShopId, HasPlatform, HasBasket;

    protected function action(): string
    {
        return 'SiparisleriGetir';
    }

    protected function setRequest(): void
    {
        $this->request = new SiparisleriGetirRequest();
    }

    protected function prepareRequest(): void
    {
        # what can i do sometimes?
    }


    protected function erpStatus(string $typeErpStatus): self
    {
        $this->request->request->ErpDurumu = $typeErpStatus;
        return $this;
    }

    protected function orderType(string $orderType): self
    {
        $this->request->request->SiparisTuru = $orderType;
        return $this;
    }

    public function fromDate(\DateTime $from): self
    {
        $this->request->request->BaslangicTarihi = $from->format(\DateTime::ATOM);
        return $this;
    }

    public function toDate(\DateTime $toDate): self
    {
        $this->request->request->BitisTarihi = $toDate->format(\DateTime::ATOM);
        return $this;
    }

    public function limit(int $count): self
    {
        $this->request->request->Limit = $count;
        return $this;
    }

    public function onlyWithChangedStatus(bool $hasChange = true): self
    {
        $this->request->request->SadeceDurumuDegisenler = $hasChange;
        return $this;
    }

    public function withPaymentInfo(bool $withPayment): self
    {
        $this->request->request->OdemeBilgileriniGetir = $withPayment;
        return $this;
    }
}
