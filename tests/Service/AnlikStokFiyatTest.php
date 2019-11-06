<?php

namespace Tests\Service;

use AyensoftGenel\Entity\Response\AnlikStokFiyatGuncelleResponse;
use AyensoftGenel\Entity\Response\ResponseOfListOfPlatformBazliMusteriUrunModel;
use PHPUnit\Framework\TestCase;
use Tests\WithServiceFactory;

class AnlikStokFiyatTest extends TestCase
{
    use WithServiceFactory;

    public function testSuccess()
    {
        $service = $this->factory()
            ->stokPriceUpdate()
//            ->platform(TypePlatform::TrendyolMp)
                ->shopId('12345')
            ->add('', 0, 100, 99.99);
        $response = $service->getResponse();


//        $this->assertInstanceOf(AnlikStokFiyatGuncelleResponse::class, $response);
//        $this->assertInstanceOf(ResponseOfListOfPlatformBazliMusteriUrunModel::class, $response->getResponse());
//        $this->assertTrue($response->getResponse()->Success);
//        $this->assertNull($response->getResponse()->ErrorCode);
//        $this->assertNull($response->getResponse()->Message);

        dd($service->getLog(), $response);
    }
}
