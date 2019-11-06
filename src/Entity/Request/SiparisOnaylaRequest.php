<?php

namespace AyensoftGenel\Entity\Request;

class SiparisOnaylaRequest extends AbstractRequest
{
    /** @var int $DukkanId */
    public $DukkanId;

    /** @var \AyensoftGenel\Entity\TypePlatform $Platform */
    public $Platform;

    /** @var string $TicariSistemKayitNo */
    public $TicariSistemKayitNo;

    /** @var string $TicariSistemCariKod */
    public $TicariSistemCariKod;

    /** @var string $OrderId */
    public $OrderId;

    /** @var string[] $OrderItemIds */
    public $OrderItemIds;

    /** @var string $FaturaNo */
    public $FaturaNo;

    /** @var boolean $Faturalandi */
    public $Faturalandi;
}
