<?php

namespace Tests\Service;

use AyensoftGenel\Entity\Request\IadeleriOnayla;
use AyensoftGenel\Entity\Response\IadeleriOnaylaResponse;
use AyensoftGenel\Entity\TypePlatform;
use PHPUnit\Framework\TestCase;
use Tests\WithServiceFactory;

class IadeOnayTest extends TestCase
{
    use WithServiceFactory;


    /**
     * @group iade
     */
    public function testSuccess()
    {
        $service = $this->factory()->returnConfirmation()
            ->orderCode('xxxx')
            ->amount(1)
            ->platform(TypePlatform::TrendyolMp)
            ->reasonId(1)
            ->reasonText('xxxx xxxx');

        $response  = $service->getResponse();

        $this->assertInstanceOf(IadeleriOnayla::class, $response);
        $this->assertInstanceOf(IadeleriOnaylaResponse::class, $response->getResponse());
        $this->assertTrue($response->getResponse()->Success);
        $this->assertNull($response->getResponse()->ErrorCode);
        $this->assertNull($response->getResponse()->Message);


        # dd($service->getLog(), $response);
    }
}
