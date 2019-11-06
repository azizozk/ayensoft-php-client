<?php

namespace Tests\Service;

use AyensoftGenel\Entity\Response\PlatformKargoBilgisiniGirResponse;
use AyensoftGenel\Entity\Response\ResponseOfListOfString;
use AyensoftGenel\Entity\TypePlatform;
use PHPUnit\Framework\TestCase;
use Tests\WithServiceFactory;

class IadeNedenleriTest extends TestCase
{
    use WithServiceFactory;


    /**
     * @group iade
     */
    public function testSucccess()
    {
        $service = $this->factory()->returnReasons()->platform(TypePlatform::TrendyolMp);
        $response = $service->getResponse();

        $this->assertInstanceOf(PlatformKargoBilgisiniGirResponse::class, $response);
        $this->assertInstanceOf(ResponseOfListOfString::class, $response->getResponse());
        $this->assertTrue($response->getResponse()->Success);
        $this->assertNull($response->getResponse()->ErrorCode);
        $this->assertNull($response->getResponse()->Message);

        # dd($response, $service->getLog());
    }
}
