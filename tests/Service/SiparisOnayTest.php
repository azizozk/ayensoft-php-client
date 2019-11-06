<?php

namespace Tests\Service;

use PHPUnit\Framework\TestCase;
use Tests\WithServiceFactory;

class SiparisOnayTest extends TestCase
{
    use WithServiceFactory;


    public function testSingle()
    {
        $service = $this->factory()->orderConfirm()
            ->orderId('123123');

        $response = $service->getResponse();

        $this->assertTrue($response->Success);
    }


    public function testMulti()
    {
        $service = $this->factory()->orderConfirm()
            ->orderId('123123')
            ->addOrderId('1231212')
            ->addOrderId('1231231231')
        ;

        $response = $service->getResponse();

        $this->assertTrue($response->Success);
    }
}
