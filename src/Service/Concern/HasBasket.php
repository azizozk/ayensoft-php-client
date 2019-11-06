<?php

namespace AyensoftGenel\Service\Concern;

trait HasBasket
{
    public function basket(string $basket): self
    {
        $this->request->request->SepetId = $basket;

        return $this;
    }
}
