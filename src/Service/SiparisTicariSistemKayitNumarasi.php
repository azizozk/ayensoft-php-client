<?php

namespace AyensoftGenel\Service;

use AyensoftGenel\Entity\Request\SiparisTicariSistemKayitNumarasiGir;
use AyensoftGenel\Exception\MissingServiceParams;
use AyensoftGenel\Service\Concern\HasBasket;

/**
 * Class SiparisTicariSistemKayitNumarasi
 * @package AyensoftGenel\Service
 *
 * @property SiparisTicariSistemKayitNumarasiGir $request
 * @method \AyensoftGenel\Entity\Response\SiparisTicariSistemKayitNumarasiGirResponse getResponse()
 */
class SiparisTicariSistemKayitNumarasi extends AbstractService
{
    use HasBasket;

    protected function action(): string
    {
        return 'SiparisTicariSistemKayitNumarasiGir';
    }

    protected function setRequest(): void
    {
        $this->request = new SiparisTicariSistemKayitNumarasiGir();
    }

    protected function prepareRequest(): void
    {
        if ($this->request->request->TicariSistemKayitNumarasi === null) {
            MissingServiceParams::message(
                'TicariSistemKayitNumarasi can not be empty. add with commercialRegistrationNo() method.'
            );
        }
    }



    public function commercialRegistrationNo(string $commercialRegNo)
    {
        $this->request->request->TicariSistemKayitNumarasi = $commercialRegNo;
        return $this;
    }

    public function platformId(int $platformId)
    {
        $this->request->request->PlatformId = $platformId;
        return $this;
    }
}
