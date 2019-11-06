<?php

namespace Tests\Service;

use AyensoftGenel\Entity\TypePlatform;
use PHPUnit\Framework\TestCase;
use Tests\WithServiceFactory;

class OdemeHareketleriTest extends TestCase
{
    use WithServiceFactory;

    /**
     * @group payment
     */
    public function testList()
    {
        $service = $this->factory()
            ->paymentTransactions()
            ->platform(TypePlatform::TrendyolMp)
//            ->customerId('1106')
//            ->shopId('1140')
            ->dateFrom(new \DateTime('2019-10-04'))
            ->dateTo(new \DateTime('2019-11-05'))
        ;


        $response = $service->getResponse();

        # dd($response, $service->getLog());
    }


    /**
     * @group payment
     */
    public function testAll()
    {
        $service = $this->factory()
            ->paymentTransactions()
            ->platform(TypePlatform::TrendyolMp)
        ;


        $response = $service->getResponse();

        # dd($response, $service->getLog());
    }
}
