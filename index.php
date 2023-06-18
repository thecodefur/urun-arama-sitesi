<?php

// Gerekli dosyaları dahil et
include_once 'app/controllers/ProductController.php';
include_once 'app/models/ProductModel.php';


// İstek yönlendirme
$controller = new ProductController();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $controller->search();
} else {
  // 100 tane örnek ürün oluştur
  $products = [];

  for ($i = 1; $i <= 100; $i++) {
    $product = [
      'title' => 'ürün ' . $i,
      'description' => $i . '. ürün hakkında açıklama.'
    ];

    $products[] = $product;
  }

  $controller->index($products);
}
