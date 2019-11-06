<?php

namespace AyensoftGenel\Entity\Response;

class SepetOdemeBilgisi
{
    /** @var int $Id*/
    public $Id;

    /** @var string $SepetId*/
    public $SepetId;

    /** @var \AyensoftGenel\Entity\TypeSiparisOdemeTipi $OdemeTipi*/
    public $OdemeTipi;

    /** @var string $OdemeReferansNo*/
    public $OdemeReferansNo;

    /** @var float $Tutar*/
    public $Tutar;

    /** @var string $BankaAdi*/
    public $BankaAdi;

    /** @var string $BankaPos*/
    public $BankaPos;

    /** @var string $Taksit*/
    public $Taksit;

    /** @var int $MusteriId*/
    public $MusteriId;

    /** @var int $DukkanId*/
    public $DukkanId;

    /** @var \AyensoftGenel\Entity\TypePlatform $Platform*/
    public $Platform;

    /** @var string $Aciklama*/
    public $Aciklama;
}
