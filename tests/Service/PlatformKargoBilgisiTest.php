<?php

namespace Tests\Service;

use AyensoftGenel\Entity\Response\PlatformKargoBilgisiniGirResponse;
use AyensoftGenel\Entity\Response\ResponseOfListOfString;
use AyensoftGenel\Entity\TypeKargoSirketi;
use PHPUnit\Framework\TestCase;
use Tests\WithServiceFactory;

class PlatformKargoBilgisiTest extends TestCase
{
    use WithServiceFactory;

    private $orderCode = '';
    private $invoice = '';
    private $traeNo = '';
    private $traceUrl = '';

    public function testSuccess()
    {
        $service = $this->factory()->platformShippingInfo()
            ->orderCode($this->orderCode)
            ->invoiceNo($this->invoice)
            ->shipmentCompany(TypeKargoSirketi::Ptt)
            ->traceNumber($this->traeNo)
            ->traceUrl($this->traceUrl)
            ->sube('1234')
        ;

        $response = $service->getResponse();

        $this->assertInstanceOf(PlatformKargoBilgisiniGirResponse::class, $response);
        $this->assertInstanceOf(ResponseOfListOfString::class, $response->getResponse());
        $this->assertTrue($response->getResponse()->Success);
        $this->assertNull($response->getResponse()->ErrorCode);
        $this->assertNull($response->getResponse()->Message);

        # dd($service->getLog(), $response);
    }
}
