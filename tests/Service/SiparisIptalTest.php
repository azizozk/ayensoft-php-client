<?php

namespace Tests\Service;

use AyensoftGenel\Entity\Response\ResponseOfListOfSiparisIptalResponse;
use AyensoftGenel\Entity\Response\SiparisIptalEtResponse;
use AyensoftGenel\Entity\TypePlatform;
use PHPUnit\Framework\TestCase;
use Tests\WithServiceFactory;

class SiparisIptalTest extends TestCase
{

    use WithServiceFactory;

    public function testSuccess()
    {
        $service = $this->factory()->orderCancel()
            ->platform(TypePlatform::GittiGidiyor)
            ->basket('11209257')
            ->order('todo', 'todo', 'todo')
        ;

        $response = $service->getResponse();


        $this->assertInstanceOf(SiparisIptalEtResponse::class, $response);
        $this->assertInstanceOf(ResponseOfListOfSiparisIptalResponse::class, $response->getResponse());
        $this->assertTrue($response->getResponse()->Success);
        $this->assertNull($response->getResponse()->ErrorCode);
        $this->assertNull($response->getResponse()->Message);

        # dd($service->getLog(), $response);
    }


    public function testcancelBasket()
    {
        #todo try if it works
        $service = $this->factory()->orderCancel()
            ->platform(TypePlatform::GittiGidiyor)
            ->basket('11209257')
        ;
        $this->assertTrue($service->getResponse()->getResponse()->Success);
    }
}
