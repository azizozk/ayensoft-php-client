<?php

namespace AyensoftGenel;

use AyensoftGenel\Exception\InvalidConfiguration;
use AyensoftGenel\Service\AnlikStokFiyat;
use AyensoftGenel\Service\IadeleriGetir;
use AyensoftGenel\Service\IadeNedenleri;
use AyensoftGenel\Service\IadeOnay;
use AyensoftGenel\Service\OdemeHareketleri;
use AyensoftGenel\Service\PlatformKargoBilgisi;
use AyensoftGenel\Service\SiparisErpDurum;
use AyensoftGenel\Service\SiparisIptal;
use AyensoftGenel\Service\SiparisListesi;
use AyensoftGenel\Service\SiparisOnay;
use AyensoftGenel\Service\SiparisTicariSistemKayitNumarasi;

class ServiceFactory
{
    /** @var string */
    private $wsdl;
    /** @var string */
    private $username;
    /** @var string */
    private $password;
    /** @var int */
    private $wsdlCache;


    /**
     * ServiceFactory constructor.
     * @param array $config
     */
    public function __construct(array $config)
    {
        $this->wsdl = $config['wsdl'] ?? InvalidConfiguration::message('Missing wsdl in config.');
        $this->username = $config['username'] ?? InvalidConfiguration::message('Missing username in config.');
        $this->password = $config['password']?? InvalidConfiguration::message('Missing password in config.');
        $this->wsdlCache = $config['wsdl_cache'] ?? WSDL_CACHE_NONE;
    }


    public function stokPriceUpdate(): AnlikStokFiyat
    {
        return new AnlikStokFiyat($this->client(), $this->username, $this->password);
    }

    public function paymentTransactions(): OdemeHareketleri
    {
        return new OdemeHareketleri($this->client(), $this->username, $this->password);
    }

    public function platformShippingInfo(): PlatformKargoBilgisi
    {
        return new PlatformKargoBilgisi($this->client(), $this->username, $this->password);
    }

    public function orderCommercialRegistration(): SiparisTicariSistemKayitNumarasi
    {
        return new SiparisTicariSistemKayitNumarasi($this->client(), $this->username, $this->password);
    }




    /*
    |--------------------------------------------------------------------------
    | return
    |--------------------------------------------------------------------------
    |
    | services related to returns
    |
    */
    public function returnsList(): IadeleriGetir
    {
        return new IadeleriGetir($this->client(), $this->username, $this->password);
    }

    public function returnReasons(): IadeNedenleri
    {
        return new IadeNedenleri($this->client(), $this->username, $this->password);
    }

    public function returnConfirmation(): IadeOnay
    {
        return new IadeOnay($this->client(), $this->username, $this->password);
    }


    /*
    |--------------------------------------------------------------------------
    | order
    |--------------------------------------------------------------------------
    |
    | services related to orders
    |
    */
    public function orderList(): SiparisListesi
    {
        return new SiparisListesi($this->client(), $this->username, $this->password);
    }

    public function orderErpStatusUpdate(): SiparisErpDurum
    {
        return new SiparisErpDurum($this->client(), $this->username, $this->password);
    }

    public function orderCancel(): SiparisIptal
    {
        return new SiparisIptal($this->client(), $this->username, $this->password);
    }

    public function orderConfirm(): SiparisOnay
    {
        return new SiparisOnay($this->client(), $this->username, $this->password);
    }







    private function client(): Client
    {
        return new Client(
            $this->wsdl,
            [
                'cache_wsdl' => $this->wsdlCache
            ]
        );
    }
}
