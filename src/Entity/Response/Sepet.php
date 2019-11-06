<?php

namespace AyensoftGenel\Entity\Response;

class Sepet
{
    /** @var int $Id */
    public $Id;

    /** @var string $SepetId */
    public $SepetId;

    /** @var string $SepetId2 */
    public $SepetId2;

    /** @var string $KullaniciAdi */
    public $KullaniciAdi;

    /** @var int $MusteriId */
    public $MusteriId;

    /** @var int $DukkanId */
    public $DukkanId;

    /** @var int $PlatformId */
    public $PlatformId;

    /** @var string $Platform */
    public $Platform;

    /** @var string $SiparisTarihi */
    public $SiparisTarihi;

    /** @var string $AliciAdi */
    public $AliciAdi;

    /** @var string $AliciSoyadi */
    public $AliciSoyadi;

    /** @var string $Adres */
    public $Adres;

    /** @var string $Ilce */
    public $Ilce;

    /** @var string $Il */
    public $Il;

    /** @var \AyensoftGenel\Entity\TypeUlkeKodu $UlkeKodu */
    public $UlkeKodu;

    /** @var string $Postakodu */
    public $Postakodu;

    /** @var string $Telefon */
    public $Telefon;

    /** @var string $FaturaAd */
    public $FaturaAd;

    /** @var string $FaturaSoyad */
    public $FaturaSoyad;

    /** @var string $FaturaFirmaAdi */
    public $FaturaFirmaAdi;

    /** @var string $FaturaAdres */
    public $FaturaAdres;

    /** @var string $FaturaIlce */
    public $FaturaIlce;

    /** @var string $FaturaIl */
    public $FaturaIl;

    /** @var \AyensoftGenel\Entity\TypeUlkeKodu $FaturaUlkeKodu */
    public $FaturaUlkeKodu;

    /** @var string $FaturaPostaKodu */
    public $FaturaPostaKodu;

    /** @var string $FaturaTelefon */
    public $FaturaTelefon;

    /** @var string $Vd */
    public $Vd;

    /** @var string $Vn */
    public $Vn;

    /** @var string $EPosta */
    public $EPosta;

    /** @var SepetDetay[] $Detaylar */
    public $Detaylar;

    /** @var string $Banka */
    public $Banka;

    /** @var string $BankaPos */
    public $BankaPos;

    /** @var string $BankaTaksit */
    public $BankaTaksit;

    /** @var string $KampanyaKodu */
    public $KampanyaKodu;

    /** @var SepetOdemeBilgisi[] $OdemeBilgileri */
    public $OdemeBilgileri;
}
