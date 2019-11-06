<?php

namespace AyensoftGenel\Service\Concern;

trait HasPlatform
{
    public function platform(string $platform): self
    {
        $this->request->request->Platform = $platform;

        return $this;
    }
}
