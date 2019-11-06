<?php

namespace AyensoftGenel\Service;

use AyensoftGenel\Client;

/**
 * Class ServiceAbtract
 * @package Ayensoft\Service
 */
abstract class AbstractService
{
    /** @var Client */
    protected $client;

    /** @var \AyensoftGenel\Entity\Request\RequestInterface */
    protected $request;

    /** @var bool */
    protected $isValid = false;

    /**
     * ServiceAbtract constructor.
     *
     * @param Client $client
     * @param string $username
     * @param string $password
     */
    public function __construct(Client $client, string $username, string $password)
    {
        $this->client = $client;
        $this->setRequest();
        $this->setRequestUsername($username);
        $this->setRequestPassword($password);
    }


    /**
     * return soap action string
     *
     * @return string
     */
    abstract protected function action(): string;

    /**
     * set request property RequestInterface
     */
    abstract protected function setRequest(): void;

    /**
     * prepare request object set if its valid throw exeption if its not
     *
     * @throws \AyensoftGenel\Exception\MissingServiceParams
     */
    abstract protected function prepareRequest(): void;



    protected function setRequestUsername(string $username): void
    {
        $this->request->request->KullaniciAdi = $username;
    }

    protected function setRequestPassword(string $password): void
    {
        $this->request->request->Sifre = $password;
    }

    public function getResponse()
    {
        $this->prepareRequest();
        return $this->client->execute($this->action(), $this->request);
    }

    public function getLog(): array
    {
        return [
            'duration' => $this->client->getDuration(),
            'request'  => $this->client->getRequestLog(),
            'response' => $this->client->getResponseLog()
        ];
    }
}
