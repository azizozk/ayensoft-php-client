<?php

namespace Tests;

use AyensoftGenel\ServiceFactory;

trait WithServiceFactory
{
    /**
     * @var ServiceFactory
     */
    public $serviceManager;

    public $config = [
        'wsdl' => 'http://89.107.226.190:1602/AyenSiparisServiceGenel.asmx?WSDL',
        'username' => 'atasay_service',
        'password' => 'A+aS@y19',
        'wsdl_cache' => WSDL_CACHE_NONE,

        'wsdl' => 'http://89.107.226.190:1602/AyenSiparisService.asmx?WSDL',
//        'username' => 'dalkilicspor',
//        'password' => 'Dalkilic123',

//        'username' => 'chakra_service',
//        'password' => 'c1h2a3k4r5a6serv',

    ];


    public function factory(): ServiceFactory
    {
        if ($this->serviceManager === null) {
            $this->serviceManager = new ServiceFactory($this->config);
        }

        return $this->serviceManager;
    }
}
