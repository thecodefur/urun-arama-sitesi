<?php

class ProductController {
    public function index($products) {
        // Arama sayfasını görüntüle
        include_once 'app/views/search.php';
        }
      

  

  public function search() {
    // Arama formundan gelen verileri al
    $keyword = $_POST['keyword'];

    // Model sınıfını oluştur
    $model = new ProductModel();

    // Ürünleri ara
    $products = $model->searchProducts($keyword);

    // Sonuçları view'e gönder
    include_once 'app/views/search.php';
  }
}
