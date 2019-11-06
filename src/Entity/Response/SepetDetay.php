<?php

namespace AyensoftGenel\Entity\Response;

class SepetDetay
{
    /** @var int $Id */
    public $Id;

    /** @var string $SepetId */
    public $SepetId;

    /** @var string $SiparisKodu */
    public $SiparisKodu;

    /** @var int $MusteriId */
    public $MusteriId;

    /** @var int $DukkanId */
    public $DukkanId;

    /** @var \AyensoftGenel\Entity\TypePlatform $PlatformId */
    public $PlatformId;

    /** @var string $Platform */
    public $Platform;

    /** @var string $KullaniciAdi */
    public $KullaniciAdi;

    /** @var string $IlanNo */
    public $IlanNo;

    /** @var string $UrunKodu */
    public $UrunKodu;

    /** @var string $StokKodu */
    public $StokKodu;

    /** @var string $UrunAdi */
    public $UrunAdi;

    /** @var int $Miktar */
    public $Miktar;

    /** @var float $Fiyat */
    public $Fiyat;

    /** @var string $KargoNo */
    public $KargoNo;

    /** @var string $KargoEtiketi */
    public $KargoEtiketi;

    /** @var string $KargoOdeme */
    public $KargoOdeme;

    /** @var string $KargoSirketi */
    public $KargoSirketi;

    /** @var string $SiparisTarihi */
    public $SiparisTarihi;

    /** @var string $Durum */
    public $Durum;

    /** @var string $SiparisTuru */
    public $SiparisTuru;

    /** @var int $SiparisGenelTur */
    public $SiparisGenelTur;

    /** @var string $SiparisTuruAd */
    public $SiparisTuruAd;

    /** @var boolean $ErpAktarildi */
    public $ErpAktarildi;

    /** @var string $KampanyaKodu */
    public $KampanyaKodu;

    /** @var boolean $DurumDegisti */
    public $DurumDegisti;

    /** @var \AyensoftGenel\Entity\TypeFaturaDetayTipi $FaturaDetayTipi */
    public $FaturaDetayTipi;

    /** @var int $KdvOrani */
    public $KdvOrani;

    /** @var \AyensoftGenel\Entity\TypeSiparisOdemeTipi $OdemeTipi */
    public $OdemeTipi;

    /** @var \AyensoftGenel\Entity\TypeSiparisDurumu $IslemDurumu */
    public $IslemDurumu;

    /** @var string $Banka */
    public $Banka;

    /** @var string $BankaTaksit */
    public $BankaTaksit;

    /** @var string $BankaPos */
    public $BankaPos;

    /** @var string $TicariSistemKayitNo */
    public $TicariSistemKayitNo;

    /** @var string $TicariSistemCariKod */
    public $TicariSistemCariKod;

    /** @var string $TicariSistemFaturaNo */
    public $TicariSistemFaturaNo;

    /** @var float $Kupon */
    public $Kupon;

    /** @var \AyensoftGenel\Entity\TypeParaBirimi $ParaBirimi */
    public $ParaBirimi;

    /** @var string $EskiPaketNo */
    public $EskiPaketNo;

    /** @var string $VaryantSpecValue1 */
    public $VaryantSpecValue1;

    /** @var string $VaryantSpecValue2 */
    public $VaryantSpecValue2;
}
