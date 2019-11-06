<?php

namespace AyensoftGenel\Service;

use AyensoftGenel\Entity\Request\OdemeHareketleriniGetir;
use AyensoftGenel\Exception\MissingServiceParams;
use AyensoftGenel\Service\Concern\HasPlatform;
use AyensoftGenel\Service\Concern\HasShopId;

/**
 * Class OdemeHareketleri
 * @package AyensoftGenel\Service
 *
 * @property OdemeHareketleriniGetir $request
 * @method \AyensoftGenel\Entity\Response\OdemeHareketleriniGetirResponse getResponse()
 */
class OdemeHareketleri extends AbstractService
{
    use HasPlatform, HasShopId;

    protected function action(): string
    {
        return 'OdemeHareketleriniGetir';
    }

    protected function setRequest(): void
    {
        $this->request = new OdemeHareketleriniGetir();
    }

    protected function prepareRequest(): void
    {
        if ($this->request->request->Platform === null) {
            MissingServiceParams::message('Platform can not be empty. set with OdemeHareketleri::platform() method.');
        }
    }


    public function customerId(string $customerId): self
    {
        $this->request->request->MusteriId = $customerId;
        return $this;
    }

    public function dateFrom(\DateTime $dateFrom): self
    {
        $this->request->request->BaslangicTarihi = $dateFrom->format(\DATE_ATOM);
        return $this;
    }

    public function dateTo(\DateTime $dateTo): self
    {
        $this->request->request->BitisTarihi = $dateTo->format(\DATE_ATOM);
        return $this;
    }
}
