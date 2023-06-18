<?php

class ProductModel {
  private $products;

  public function __construct() {
    $this->products = [];
  
    for ($i = 1; $i <= 100; $i++) {
      $product = [
        'title' => 'ürün ' . $i,
        'description' => $i . '. ürün hakkında açıklama.'
      ];
  
      $this->products[] = $product;
    }
  }
  

  public function searchProducts($keyword) {
    $filteredProducts = array_filter($this->products, function ($product) use ($keyword) {
      $lowercaseKeyword = strtolower($keyword);
      $lowercaseTitle = strtolower($product['title']);
      return strpos($lowercaseTitle, $lowercaseKeyword) !== false;
    });
  
    return $filteredProducts;
  }
  
  
}
