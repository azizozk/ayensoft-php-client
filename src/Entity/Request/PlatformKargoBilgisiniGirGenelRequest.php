<?php

namespace AyensoftGenel\Entity\Request;

class PlatformKargoBilgisiniGirGenelRequest extends AbstractRequest
{
    /** @var string $Platform */
    public $Platform;

    /** @var string $SiparisKodu */
    public $SiparisKodu;

    /** @var string $SepetId */
    public $SepetId;

    /** @var \AyensoftGenel\Entity\TypeKargoSirketi $KargoSirketi */
    public $KargoSirketi;

    /** @var string $TakipNumarasi */
    public $TakipNumarasi;

    /** @var string $Sube */
    public $Sube;

    /** @var string $KargoTakipUrl */
    public $KargoTakipUrl;

    /** @var string $FaturaNo */
    public $FaturaNo;
}
