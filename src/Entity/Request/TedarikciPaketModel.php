<?php

namespace AyensoftGenel\Entity\Request;

class TedarikciPaketModel
{

    /**
     * @var int $TedarikciPaketNo
     */
    public $TedarikciPaketNo;

    /**
     * @var boolean $Canceled
     * @access public
     */
    public $Canceled;

    /**
     * @var PaketBigisiProductModel[] $Products
     * @access public
     */
    public $Products;

    /**
     * @param int $TedarikciPaketNo
     * @param boolean $Canceled
     * @param PaketBigisiProductModel[] $Products
     * @access public
     */
    public function __construct($TedarikciPaketNo, $Canceled, $Products)
    {
      $this->TedarikciPaketNo = $TedarikciPaketNo;
      $this->Canceled = $Canceled;
      $this->Products = $Products;
    }

}
