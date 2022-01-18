<?php

class Product {
  private $id;
  private $name;
  private $price;
  protected $discount = 0;

  function __construct($_id) {
    $this->id = $_id;
  }

  public function setName($_name) {
    $this->name = $_name;
  }

  public function setPrice($_price) {
    $this->price = $_price;
  }

  public function getID() {
    return $this->id;
  }

  public function getName() {
    return $this->name;
  }

  public function getPrice() {
    return $this->price;
  }

  public function getFinalPrice() {
    if($this->price > 500) {
      return number_format($finalPrice = $this->price - (($this->price * 10)/100), 2, ",", "");
    }
  }
}