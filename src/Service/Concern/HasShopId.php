<?php

namespace AyensoftGenel\Service\Concern;

trait HasShopId
{
    public function shopId(int $shopId): self
    {
        $this->request->request->DukkanId = $shopId;

        return $this;
    }
}
