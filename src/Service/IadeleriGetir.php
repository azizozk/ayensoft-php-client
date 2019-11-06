<?php

namespace AyensoftGenel\Service;

use AyensoftGenel\Exception\MissingServiceParams;
use AyensoftGenel\Service\Concern\HasPlatform;

/**
 * Class IadeleriGetir
 * @package AyensoftGenel\Service
 *
 * @property \AyensoftGenel\Entity\Request\IadeleriGetir $request
 * @method \AyensoftGenel\Entity\Response\IadeleriGetirResponse getResponse()
 */
class IadeleriGetir extends AbstractService
{
    use HasPlatform;

    protected function action(): string
    {
        return 'IadeleriGetir';
    }

    protected function setRequest(): void
    {
        $this->request = new \AyensoftGenel\Entity\Request\IadeleriGetir();
    }

    protected function prepareRequest(): void
    {
        if ($this->request->request->Platform === null) {
            MissingServiceParams::message('Platform can not be empty. set with IadeleriGetir::platform() method.');
        }
    }
}
