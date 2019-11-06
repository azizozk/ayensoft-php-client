<?php

namespace AyensoftGenel\Entity\Request;

class SiparisIptalGenelRequest extends AbstractRequest
{
    /**
     * @var int $DukkanId
     */
    public $DukkanId;

    /**
     * @var SiparisIptalDetay[] $SiparisIptalDetaylari
     */
    public $SiparisIptalDetaylari = [];
}
