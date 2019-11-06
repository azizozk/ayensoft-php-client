<?php

namespace Tests\Service;

use AyensoftGenel\Entity\Response\ListResponseOfSepet;
use AyensoftGenel\Entity\Response\SiparisleriGetirResponse;
use AyensoftGenel\Entity\TypePlatform;
use PHPUnit\Framework\TestCase;
use Tests\WithServiceFactory;

class SiparisListesiTest extends TestCase
{
    use WithServiceFactory;

    public function testSuccess()
    {
        $service = $this->factory()->orderList()
            ->platform(TypePlatform::TrendyolMp)
            ->fromDate(new \DateTime('2018-11-04 12:00:00'))
            ->toDate(new \DateTime('2019-11-04 18:00:00'));

        $response = $service->getResponse();

        $this->assertInstanceOf(SiparisleriGetirResponse::class, $response);
        $this->assertInstanceOf(ListResponseOfSepet::class, $response->getResponse());
        $this->assertTrue($response->getResponse()->Success);
        $this->assertNull($response->getResponse()->ErrorCode);
        $this->assertNull($response->getResponse()->Message);
//        $this->assertIsArray($response->SiparisleriGetirResult->Data); #check this


        echo "\n", json_encode($response), "\n";

//        dd($response, $response->SiparisleriGetirResult->Data, $service->getLog());
    }
}
