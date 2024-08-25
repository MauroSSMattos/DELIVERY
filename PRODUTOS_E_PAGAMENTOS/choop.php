<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Menu de Pedidos</title>
<link rel="stylesheet" href="styles.css">
<link rel="stylesheet" href="voltar.css">
</head>
<body>

  <body class="body">

    <header>
        <strong><a href="../MENURESTANTE/menu.php" class="voltar">&#10094;</a></strong>
    </header>
</head>
<body>

  <div class="container">
    <h1>PEDIDOS</h1>.;,~ç
    
    <!-- Produtos -->
    <div class="products-carousel">
      <div class="carousel-inner">

        <div class="product">
        <img src="provincia.jpg" alt="product">
        <h3>PROVINCIA - 1,5L</h3>
        <p class="price">R$ 9,90</p>
        <button class="add-to-cart" data-product="PROVINCIA" data-price="9.90">+</button>
        <button class="remove-from-cart" data-product="PROVINCIA="9.90">-</button>
        <div class="counter"></div>
        </div>     
        <div class="product">
          <img src="stier.jpg" alt="product">
          <h3>STIER - 1L</h3>
          <p class="price">R$ 6,80</p>
          <button class="add-to-cart" data-product="STIER" data-price="6.80">+</button>
          <button class="remove-from-cart" data-product="STIER" data-price="6.80">-</button>
          <div class="counter"></div>
      </div>
        <div class="product">
          <img src="provincia.jpg" alt="product">
          <h3>PROVINCIA - 1L</h3>
          <p class="price">R$ 8,60</p>
          <button class="add-to-cart" data-product="CORONA" data-price="8.60">+</button>
          <button class="remove-from-cart" data-product="CORONA" data-price="8.60">-</button>
          <div class="counter"></div>       
          </div>
      <div class="product">
        <img src="coruja.jpg" alt="product">
        <h3>CORUJA - 1L</h3>
        <p class="price">R$ 10,89</p>
        <button class="add-to-cart" data-product="CORUJA" data-price="10.89">+</button>
        <button class="remove-from-cart" data-product="CORUJA" data-price="10.89">-</button>
        <div class="counter"></div>
      </div>
        <div class="product">
          <img src="dalla.jpg" alt="product">
          <h3>DALLA - 1L</h3>
          <p class="price">R$6,98</p>
          <button class="add-to-cart" data-product="DALLA" data-price="6.98">+</button>
          <button class="remove-from-cart" data-product="DALLA" data-price="6.98">-</button>
          <div class="counter"></div>
          </div>
          <div class="product">
            <img src="provincia.jpg" alt="product">
            <h3>PROVINCIA - 1L</h3>
            <p class="price">R$ 8,60</p>
            <button class="add-to-cart" data-product="PROVINCIA " data-price="8.60">+</button>
            <button class="remove-from-cart" data-product="PROVINCIA " data-price="8.60">-</button>
            <div class="counter"></div>
            </div>     
            <div class="product">
              <img src="stier.jpg" alt="product">
              <h3>STIER - 1L</h3>
              <p class="price">R$ 6,80</p>
              <button class="add-to-cart" data-product="STIER" data-price="6.80">+</button>
              <button class="remove-from-cart" data-product="STIER" data-price="6.80">-</button>
              <div class="counter"></div>


          <div class="counter"><br><br></div>
        
          
      </div>
      

          <button>+</button>

            
      <!-- Adicione mais produtos aqui -->
    </div>
    <div class=borda>   
    <button class="prev">&#10094;</button>
    <button class="next">&#10095;</button>
  </div>
  </div>
  <!-- Carrinho de Compras -->
  <div class="cart">
    <h2>PRODUTOS E QUANTIDADES</h2>
    <ul class="cart-items"></ul>
    <h3>TOTAL: <span class="total">R$0,00</span></h3>
  <a href="../PRODUTOS_E_PAGAMENTOS/pagamento.php">
    <button class="payment-button">FORMA DE PAGAMENTO</button>
  </a>

  <!-- Mensagens de Status -->
  

<script src="script.js"></script>




</body>
</html>

