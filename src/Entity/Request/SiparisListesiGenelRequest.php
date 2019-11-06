<?php

namespace AyensoftGenel\Entity\Request;

class SiparisListesiGenelRequest extends AbstractRequest
{
    /** @var int $DukkanId */
    public $DukkanId;

    /** @var string $Platform */
    public $Platform;

    /** @var \AyensoftGenel\Entity\TypeErpDurum $ErpDurumu */
    public $ErpDurumu;

    /** @var string $SiparisTuru */
    public $SiparisTuru;

    /** @var String[] $SiparisTurleri */
    public $SiparisTurleri;

    /** @var string $BaslangicTarihi */
    public $BaslangicTarihi;

    /** @var string $BitisTarihi */
    public $BitisTarihi;

    /** @var string $SepetId */
    public $SepetId;

    /** @var boolean $SadeceDurumuDegisenler */
    public $SadeceDurumuDegisenler;

    /** @var boolean $OdemeBilgileriniGetir */
    public $OdemeBilgileriniGetir;

    /** @var int $Limit */
    public $Limit;
}
