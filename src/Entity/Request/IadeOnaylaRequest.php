<?php

namespace AyensoftGenel\Entity\Request;

class IadeOnaylaRequest extends AbstractRequest
{
    /** @var string $SepetId */
    public $SepetId;

    /** @var string $SiparisKodu */
    public $SiparisKodu;

    /** @var int $Miktar */
    public $Miktar;

    /** @var string $Platform */
    public $Platform;

    /** @var int $IadeNedeniId */
    public $IadeNedeniId;

    /** @var string $IadeNedeniAciklama */
    public $IadeNedeniAciklama;
}
