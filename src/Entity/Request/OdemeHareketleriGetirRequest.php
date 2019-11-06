<?php

namespace AyensoftGenel\Entity\Request;

class OdemeHareketleriGetirRequest extends AbstractRequest
{
    /** @var int $MusteriId  */
    public $MusteriId;

    /** @var int $DukkanId  */
    public $DukkanId;

    /**@var string $Platform  */
    public $Platform;

    /**@var string $BaslangicTarihi  */
    public $BaslangicTarihi;

    /**@var string $BitisTarihi  */
    public $BitisTarihi;
}
