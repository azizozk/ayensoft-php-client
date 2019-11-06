<?php

namespace Tests\Service;

use AyensoftGenel\Entity\Response\ResponseOfString;
use AyensoftGenel\Entity\Response\SiparisErpDurumGuncelleResponse;
use AyensoftGenel\Entity\TypeErpDurum;
use AyensoftGenel\Entity\TypePlatform;
use PHPUnit\Framework\TestCase;
use Tests\WithServiceFactory;

class SiparisErpDurumTest extends TestCase
{
    use WithServiceFactory;

    public function testSuccess()
    {
        $service = $this->factory()->orderErpStatusUpdate()
            ->platform(TypePlatform::TrendyolMp)
            ->basket('1231231')
            ->erpStatus(TypeErpDurum::Aktarildi)
        ;

        $response = $service->getResponse();


        $this->assertInstanceOf(SiparisErpDurumGuncelleResponse::class, $response);
        $this->assertInstanceOf(ResponseOfString::class, $response->getResponse());
        $this->assertTrue($response->getResponse()->Success);
        $this->assertNull($response->getResponse()->ErrorCode);
        $this->assertNull($response->getResponse()->Message);

        # dd($service->getLog(), $response);
    }
}
