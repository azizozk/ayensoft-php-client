<?php

namespace AyensoftGenel;

use AyensoftGenel\Entity\Request\RequestInterface;
use AyensoftGenel\Entity\Response\ErrorResponse;
use AyensoftGenel\Entity\Response\ResponseInterface;
use AyensoftGenel\Exception\InvalidConfiguration;

class Client
{
    /** @var string */
    private $wsdl;

    /**
     * @var array
     */
    private $options = [
        'trace' => 1,
        'cache_wsdl' => WSDL_CACHE_NONE,
        'exceptions' => true,
        'soap_version' => SOAP_1_2,
        'features' => SOAP_SINGLE_ELEMENT_ARRAYS,
        'classmap' => [
            'SiparisleriGetir' => '\AyensoftGenel\Entity\Request\SiparisleriGetirRequest',
            'SiparisListesiGenelRequest' => '\AyensoftGenel\Entity\Request\SiparisListesiGenelRequest',
            'SiparisleriGetirResponse' => '\AyensoftGenel\Entity\Response\SiparisleriGetirResponse',
            'ListResponseOfSepet' => '\AyensoftGenel\Entity\Response\ListResponseOfSepet',
            'Sepet' => '\AyensoftGenel\Entity\Response\Sepet',
            'SepetDetay' => '\AyensoftGenel\Entity\Response\SepetDetay',
            'SepetOdemeBilgisi' => '\AyensoftGenel\Entity\Response\SepetOdemeBilgisi',

            'SiparisErpDurumGuncelle' => '\AyensoftGenel\Entity\Request\SiparisErpDurumGuncelle',
            'SiparisErpDurumGuncelleGenelRequest'
            => '\AyensoftGenel\Entity\Request\SiparisErpDurumGuncelleGenelRequest',
            'SiparisErpDurumGuncelleResponse' => '\AyensoftGenel\Entity\Response\SiparisErpDurumGuncelleResponse',
            'ResponseOfString' => '\AyensoftGenel\Entity\Response\ResponseOfString',

            'SiparisIptalEt' => '\AyensoftGenel\Entity\Request\SiparisIptalEt',
            'SiparisIptalGenelRequest' => 'AyensoftGenel\Entity\Request\SiparisIptalGenelRequest',
            'SiparisIptalDetay' => 'SiparisIptalDetay\SiparisIptalDetay',
            'SiparisIptalEtResponse' => '\AyensoftGenel\Entity\Response\SiparisIptalEtResponse',
            'ResponseOfListOfSiparisIptalResponse'
            => '\AyensoftGenel\Entity\Response\ResponseOfListOfSiparisIptalResponse',
            'SiparisIptalResponse' => 'AyensoftGenel\Entity\Response\SiparisIptalResponse',

            'SiparisOnayla' => '\AyensoftGenel\Entity\Request\SiparisOnayla',
            'SiparisOnaylaRequest' => '\AyensoftGenel\Entity\Request\SiparisOnaylaRequest',
            'SiparisOnaylaResponse' => '\AyensoftGenel\Entity\Response\SiparisOnaylaResponse',

            'AnlikStokFiyatGuncelle' => '\AyensoftGenel\Entity\Request\AnlikStokFiyatGuncelle',
            'AnlikStokFiyatGuncelleRequest' => '\AyensoftGenel\Entity\Request\AnlikStokFiyatGuncelleRequest',
            'PlatformBazliMusteriUrunModel' => '\AyensoftGenel\Entity\PlatformBazliMusteriUrunModel',
            'AnlikStokFiyatGuncelleResponse' => '\AyensoftGenel\Entity\Response\AnlikStokFiyatGuncelleResponse',
            'ResponseOfListOfPlatformBazliMusteriUrunModel'
            => '\AyensoftGenel\Entity\Response\ResponseOfListOfPlatformBazliMusteriUrunModel',

            'IadeleriGetir' => '\AyensoftGenel\Entity\Request\IadeleriGetir',
            'IadeGetirRequest' => '\AyensoftGenel\Entity\Request\IadeGetirRequest',
            'IadeleriGetirResponse' => '\AyensoftGenel\Entity\Response\IadeleriGetirResponse',
            'ResponseOfListOfSiparisIadeModel' => '\AyensoftGenel\Entity\Response\ResponseOfListOfSiparisIadeModel',
            'SiparisIadeModel' => '\AyensoftGenel\Entity\Response\SiparisIadeModel',

            'OdemeHareketleriniGetir' => '\AyensoftGenel\Entity\Request\OdemeHareketleriniGetir',
            'OdemeHareketleriGetirRequest' => '\AyensoftGenel\Entity\Request\OdemeHareketleriGetirRequest',
            'OdemeHareketleriniGetirResponse' => '\AyensoftGenel\Entity\Response\OdemeHareketleriniGetirResponse',
            'ResponseOfListOfMusteriDukkanOdemeHareketiModel'
            => '\AyensoftGenel\Entity\Response\ResponseOfListOfMusteriDukkanOdemeHareketiModel',
            'MusteriDukkanOdemeHareketiModel' => '\AyensoftGenel\Entity\Response\MusteriDukkanOdemeHareketiModel',

            'IadeleriOnayla' => '\AyensoftGenel\Entity\Request\IadeleriOnayla',
            'IadeOnaylaRequest' => '\AyensoftGenel\Entity\Request\IadeOnaylaRequest',
            'IadeleriOnaylaResponse' => '\AyensoftGenel\Entity\Response\IadeleriOnaylaResponse',
            'Response' => '\AyensoftGenel\Entity\Response\Response',

            'PlatformKargoBilgisiniGir' => '\AyensoftGenel\Entity\Request\PlatformKargoBilgisiniGir',
            'PlatformKargoBilgisiniGirGenelRequest'
            => '\AyensoftGenel\Entity\Request\PlatformKargoBilgisiniGirGenelRequest',
            'PlatformKargoBilgisiniGirResponse' => '\AyensoftGenel\Entity\Response\PlatformKargoBilgisiniGirResponse',
            'ResponseOfListOfString' => '\AyensoftGenel\Entity\Response\ResponseOfListOfString',

            'SiparisTicariSistemKayitNumarasiGir'
            => '\AyensoftGenel\Entity\Request\SiparisTicariSistemKayitNumarasiGir',
            'SiparisTicariSistemKayitNumarasıGirRequest'
            => '\AyensoftGenel\Entity\Request\SiparisTicariSistemKayitNumarasGirRequest',
            'SiparisTicariSistemKayitNumarasiGirResponse'
            => '\AyensoftGenel\Entity\Response\SiparisTicariSistemKayitNumarasiGirResponse',

            'IadeNedenleriniGetir' => '\AyensoftGenel\Entity\Request\IadeNedenleriniGetir',
            'IadeNedenleriniGetirRequest' => '\AyensoftGenel\Entity\Request\IadeNedenleriniGetirRequest',
            'IadeNedenleriniGetirResponse' => '\AyensoftGenel\Entity\Response\IadeNedenleriniGetirResponse',
            'ResponseOfListOfIadeNedeni' => '\AyensoftGenel\Entity\Response\ResponseOfListOfIadeNedeni',
            'IadeNedeni' => '\AyensoftGenel\Entity\Response\IadeNedeni',



        ]
    ];

    /**
     * @var \SoapClient
     */
    private $client;

    /**
     * @var string|float|null
     */
    private $duration;

    /**
     * Client constructor.
     *
     * @param string $wsdl
     * @param array|null $options
     */
    public function __construct(string $wsdl, array $options = null)
    {
        $this->wsdl = $wsdl;
        $this->options = \array_merge($this->options, $options ?? []);
    }


    /**
     * @param string $action
     * @param RequestInterface $request
     * @return ResponseInterface
     * @throws Exception\AyensoftException
     */
    public function execute(string $action, RequestInterface $request): ResponseInterface
    {
        try {
            $this->setDuration();
            $response = $this->client()->__soapCall($action, [$request]);
        } catch (\Exception $e) {
            #catch (\Exception $e|\SoapFault $sf) {
            $response = new ErrorResponse($e->getMessage(), $e->getCode());
        } finally {
            $this->setDuration();
        }

        return $response;
    }



    public function getRequestLog(): string
    {
        return (string) $this->client->__getLastRequest();
    }

    public function getResponseLog(): string
    {
        return (string) $this->client->__getLastResponse();
    }

    public function getDuration(): string
    {
        return $this->duration ?? '0';
    }


    /**
     * @return \Soapclient
     * @throws \AyensoftGenel\Exception\AyensoftException
     */
    protected function client(): \Soapclient
    {
        if (! $this->client instanceof \SoapClient) {
            try {
                $this->client = new \SoapClient($this->wsdl, $this->options);
            } catch (\SoapFault $e) {
                InvalidConfiguration::message("Wsdl ($this->wsdl) can not be loaded.");
            }
        }

        return $this->client;
    }


    /**
     * use twice 1st set initial time, second calculate time diff
     */
    private function setDuration(): void
    {
        if (\is_float($this->duration)) {
            $this->duration = \number_format(
                \microtime(true) - $this->duration,
                3,
                '.',
                ''
            );
        } elseif ($this->duration === null) {
            $this->duration = \microtime(true);
        }
    }
}
