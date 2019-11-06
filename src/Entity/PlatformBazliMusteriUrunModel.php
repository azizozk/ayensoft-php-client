<?php

namespace AyensoftGenel\Entity;

class PlatformBazliMusteriUrunModel
{
    /** @var string */
    public $MusteriUrunKodu;

    /** @var string */
    public $StokKodu;

    /** @var float */
    public $Fiyat;

    /** @var float */
    public $PsfFiyat;

    /** @var int $Stok */
    public $Stok;


    /** @var boolean $Success */
    public $Success = true;
    /** @var string */
    public $MusteriTedarikciId;
    /** @var string */
    public $DukkanId;
    /** @var string */
    public $platform;
    /** @var string */
    public $KuyrukTipi;
}
