<?php

namespace Tests\Service;

use AyensoftGenel\Entity\Response\OdemeHareketleriniGetirResponse;
use AyensoftGenel\Entity\Response\ResponseOfListOfMusteriDukkanOdemeHareketiModel;
use AyensoftGenel\Entity\TypePlatform;
use PHPUnit\Framework\TestCase;
use Tests\WithServiceFactory;

class OdemeHareketleriniGetirTest extends TestCase
{
    use WithServiceFactory;

    public function testSuccess()
    {
        $service = $this->factory()->paymentTransactions()
            ->platform(TypePlatform::TrendyolMp)
            ->dateFrom(new \DateTime('-30 day'))
            ->dateTo(new \DateTime('now'));

        $response = $service->getResponse();


        $this->assertInstanceOf(OdemeHareketleriniGetirResponse::class, $response);
        $this->assertInstanceOf(
            ResponseOfListOfMusteriDukkanOdemeHareketiModel::class,
            $response->OdemeHareketleriniGetirResult
        );

        $this->assertTrue($response->getResponse()->Success);
        $this->assertNull($response->getResponse()->ErrorCode);
        $this->assertNull($response->getResponse()->Message);
//        $this->assertIsArray($response->OdemeHareketleriniGetirResult->Data);
    }
}
