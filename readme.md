# Ayensoft Siparis Service Genel

- created from documentation http://89.107.226.190:1602/AyenSiparisServiceGenel.asmx

- works on wsdl http://89.107.226.190:1602/AyenSiparisServiceGenel.asmx?WSDL

- __Service Usage__ 
~~~
<?php

namespace AyensoftGenel;

$service = new Service\AnlikStokFiyat(new Client($wsdl, []), $username, $password);
~~~
- Factory Usage
~~~
<?php

namespace AyensoftGenel;

$config = [
        'wsdl' => 'http://89.107.226.190:1602/AyenSiparisServiceGenel.asmx?WSDL',
        'username' => 'ayensoft_username',
        'password' => '*******',
        'wsdl_cache' => WSDL_CACHE_NONE,
    ];

$service = (new ServiceFactory($config))->stokPriceUpdate();
~~~

- ServiceLog
~~~
$service = (new ServiceFactory($config))->stokPriceUpdate():
$response = $service->getResponse();

var_dump($service->getLog()); 
[
  'duration' => 0.123, // seconds
  'request'  => '<soap-env ...', // soap request xml string 
  'response' => '<soap-env ...'  // soap response xml string
]

~~~

## Services

AnlikStokFiyatGuncelle
--
- methods
    - platform: string value from `AyensoftGenel\Entity\TypePlatform`
    - shopId: string dukkan id 
    - add: product related values
~~~
$response = (new ServiceFactory($config))
    ->stokPriceUpdate()
    ->platform(TypePlatform::TrendyolMp)
    ->shopId('12345')
    ->add('urun_kodu', 0, 100, 99.99)
    ->getResponse();

echo get_class($response); \\ "\AyensoftGenel\Entity\Response\AnlikStokFiyatGuncelleResponse"
~~~


## Todo 
- Add logging, psr/log
- Add PlatformKargoBilgisiniGir as service
- Add SiparisIhracatBilgileriKaydet as service
- Add SiparisIhracatKargoTakibiKaydet as service
- Add SiparisPaketBigisiGonder as service
- Add StokKartiEslesmeGetir as service