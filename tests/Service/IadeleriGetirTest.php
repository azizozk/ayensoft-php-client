<?php

namespace Tests\Service;

use AyensoftGenel\Entity\Response\IadeleriGetirResponse;
use AyensoftGenel\Entity\Response\ResponseOfListOfSiparisIadeModel;
use AyensoftGenel\Entity\TypePlatform;
use PHPUnit\Framework\TestCase;
use Tests\WithServiceFactory;

class IadeleriGetirTest extends TestCase
{
    use WithServiceFactory;


    /**
     * @group iade
     */
    public function testSuccess()
    {
        $service = $this->factory()->returnsList()->platform(TypePlatform::TrendyolMp);
        $response = $service->getResponse();

        $this->assertInstanceOf(IadeleriGetirResponse::class, $response);
        $this->assertInstanceOf(ResponseOfListOfSiparisIadeModel::class, $response->getResponse());
        $this->assertTrue($response->getResponse()->Success);
        $this->assertNull($response->getResponse()->ErrorCode);
        $this->assertNull($response->getResponse()->Message);

        # dd($response, $service->getLog());
    }
}
