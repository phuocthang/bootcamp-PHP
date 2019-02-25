<?php

namespace Model;

class Product
{
    public $Nameproduct;
    public $Priceproduct;
    public $Desproduct;
    public $Spproducer;

    public function __construct($Nameproduct, $Priceproduct, $Desproduct,$Spproducer)
    {
        $this->Nameproduct = $Nameproduct;
        $this->Priceproduct = $Priceproduct;
        $this->Desproduct = $Desproduct;
        $this->Spproducer = $Spproducer;
    }
}