<?php

namespace AyensoftGenel\Service;

use AyensoftGenel\Entity\Request\IadeNedenleriniGetir;
use AyensoftGenel\Exception\MissingServiceParams;
use AyensoftGenel\Service\Concern\HasPlatform;

/**
 * Class IadeNedenleri
 * @package AyensoftGenel\Service
 *
 * @property IadeNedenleriniGetir $request
 * @method \AyensoftGenel\Entity\Response\IadeNedenleriniGetirResponse getResponse()
 */
class IadeNedenleri extends AbstractService
{
    use HasPlatform;

    protected function action(): string
    {
        return 'IadeNedenleriniGetir';
    }

    protected function setRequest(): void
    {
        $this->request = new IadeNedenleriniGetir();
    }

    protected function prepareRequest(): void
    {
        if ($this->request->request->Platform === null) {
            MissingServiceParams::message('Platform can not be empty. set with IadeNedenleri::platform() method.');
        }
    }
}
