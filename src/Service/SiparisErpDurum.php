<?php

namespace AyensoftGenel\Service;

use AyensoftGenel\Entity\Request\SiparisErpDurumGuncelle;
use AyensoftGenel\Exception\MissingServiceParams;
use AyensoftGenel\Service\Concern\HasBasket;
use AyensoftGenel\Service\Concern\HasPlatform;
use AyensoftGenel\Service\Concern\HasShopId;

/**
 * Class SiparisErpDurum
 * @package AyensoftGenel\Service
 *
 * @property SiparisErpDurumGuncelle $request
 * @method \AyensoftGenel\Entity\Response\SiparisErpDurumGuncelleResponse getResponse()
 */
class SiparisErpDurum extends AbstractService
{
    use HasPlatform, HasShopId, HasBasket;

    protected function action(): string
    {
        return 'SiparisErpDurumGuncelle';
    }

    protected function setRequest(): void
    {
        $this->request = new SiparisErpDurumGuncelle();
    }

    protected function prepareRequest(): void
    {
        if ($this->request->request->SepetId === null) {
            MissingServiceParams::message('SepetId can not be empty. set with SiparisErpDurum::basket() method.');
        }

        if ($this->request->request->ErpDurumu === null) {
            MissingServiceParams::message('ErpDurumu can not be empty. set with SiparisErpDurum::erpStatus() method.');
        }
    }



    public function erpStatus(string $typeErpStatus): self
    {
        $this->request->request->ErpDurumu = $typeErpStatus;

        return $this;
    }
}
