<?php

namespace AyensoftGenel\Service;

use AyensoftGenel\Entity\PlatformBazliMusteriUrunModel;
use AyensoftGenel\Entity\Request\AnlikStokFiyatGuncelle;
use AyensoftGenel\Exception\MissingServiceParams;

/**
 * Class AnlikStokFiyat
 * @package AyensoftGenel\Service
 *
 * @property AnlikStokFiyatGuncelle $request
 * @method \AyensoftGenel\Entity\Response\AnlikStokFiyatGuncelleResponse getResponse()
 */
class AnlikStokFiyat extends AbstractService
{
    /**
     * @var string|null
     */
    private $platform;
    /**
     * @var string|null
     */
    private $shopId;

    /**
     * @var PlatformBazliMusteriUrunModel[]
     */
    private $productModels = [];

    protected function action(): string
    {
        return 'AnlikStokFiyatGuncelle';
    }

    protected function setRequest(): void
    {
        $this->request = new AnlikStokFiyatGuncelle();
    }

    protected function prepareRequest(): void
    {
        foreach ($this->productModels as $productModel) {
            $productModel->platform = $this->platform;
            $productModel->DukkanId = $this->shopId;
            $this->request->request->Urunler[] = $productModel;
        }

        if (\count($this->request->request->Urunler) < 1) {
            MissingServiceParams::message('Urunler can not be empty. Add with AnlikStokFiyat::add() method.');
        }
    }



    public function platform(string $typePlatform): self
    {
        $this->platform = $typePlatform;
        return $this;
    }

    public function shopId(string $shopId): self
    {
        $this->shopId = $shopId;
        return $this;
    }

    /**
     * @param string $urunKodu
     * @param int|null $stok
     * @param float|null $price
     * @param float|null $specialPrice
     * @return self
     */
    public function add(string $urunKodu, int $stok = null, float $price = null, float $specialPrice = null): self
    {
        $productModel = new PlatformBazliMusteriUrunModel();
        $productModel->MusteriUrunKodu = $urunKodu;
        $productModel->Stok = $stok;
        $productModel->StokKodu = $urunKodu;
        $productModel->Fiyat = $price;
        $productModel->PsfFiyat = $specialPrice;
        $this->productModels[] = $productModel;

        return $this;
    }
}
