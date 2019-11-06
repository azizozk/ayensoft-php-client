<?php

namespace AyensoftGenel\Entity\Response;

class OdemeHareketleriniGetirResponse implements ResponseInterface
{
    /**
     * @var ResponseOfListOfMusteriDukkanOdemeHareketiModel $OdemeHareketleriniGetirResult
     * @access public
     */
    public $OdemeHareketleriniGetirResult;

    public function getResponse(): AbstractResponse
    {
        return $this->OdemeHareketleriniGetirResult;
    }
}
