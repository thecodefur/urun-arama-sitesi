<!DOCTYPE html>
<html>
<head>
  <title>Ürün Arama</title>
  <link rel="stylesheet" href="assets/css/style.css">
  
   
  </head>
<body>
  <div class="container">
    <h1>Ürün Arama</h1>

    <form class="search-form" method="POST" action="">
      <input class="search-input" type="text" name="keyword" placeholder="Ürün ara...">
      <button class="search-button" type="submit">Ara</button>
    </form>

    <?php if (!empty($products)): ?>
      <h2>Arama Sonuçları:</h2>
      <ul class="product-list">
        <?php foreach ($products as $product): ?>
          <li class="product-item">
            <h3 class="product-title"><?php echo $product['title']; ?></h3>
            <p class="product-description"><?php echo $product['description']; ?></p>
          </li>
        <?php endforeach; ?>
      </ul>
    <?php endif; ?>
  </div>
</body>
</html>
