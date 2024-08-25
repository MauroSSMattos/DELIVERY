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
    <strong><a href="../MENURESTANTE/menu.php"  class="voltar">&#10094;</a></strong>
    </header>
</head>
<body>

  <div class="container">
    <h1>PEDIDOS</h1>
    
    <!-- Produtos -->
    <div class="products-carousel">
      <div class="carousel-inner">

        <div class="product">
        <img src="sprite.jpg" alt="product">
        <h3>SPRITE - 2L</h3>
        <p class="price">R$ 9,30</p>
        <button class="add-to-cart" data-product="SPRITE" data-price="9.30">+</button>
        <button class="remove-from-cart" data-product="SPRITE" data-price="9.30">-</button>
        <div class="counter"></div>
        </div>     
        <div class="product">
          <img src="kuat.jpg" alt="product">
          <h3>KUAT - 2L</h3>
          <p class="price">R$ 7,80</p>
          <button class="add-to-cart" data-product="KUAT" data-price="7.80">+</button>
          <button class="remove-from-cart" data-product="KUAT" data-price="7.80">-</button>
          <div class="counter"></div>
      </div>
        <div class="product">
          <img src="fanta laranja.jpg" alt="product">
          <h3>FANTA - 2L</h3>
          <p class="price">R$ 8,90</p>
          <button class="add-to-cart" data-product="FANTA" data-price="8.90">+</button>
          <button class="remove-from-cart" data-product="FANTA" data-price="8.90">-</button>
          <div class="counter"></div>       
          </div>
      <div class="product">
        <img src="sprite.jpg" alt="product">
        <h3>SPRITE - 2L</h3>
        <p class="price">R$ 4,89</p>
        <button class="add-to-cart" data-product="SPRITE" data-price="9.20">+</button>
        <button class="remove-from-cart" data-product="SPRITE" data-price="9.20">-</button>
        <div class="counter"></div>
      </div>
        <div class="product">
          <img src="PEPSI.webp" alt="product">
          <h3>PEPSI- 2L</h3>
          <p class="price">R$10,70</p>
          <button class="add-to-cart" data-product="PEPSI" data-price="10.70">+</button>
          <button class="remove-from-cart" data-product="PEPSI" data-price="10.70">-</button>
          <div class="counter"></div>
          </div>
          <div class="product">
            <img src="guarana.jpg" alt="product">
            <h3>GUARANA- 2L</h3>
            <p class="price">R$ 9,90</p>
            <button class="add-to-cart" data-product="GUARANA " data-price="9.90">+</button>
            <button class="remove-from-cart" data-product="GUARANA" data-price="9.90">-</button>
            <div class="counter"></div>
            </div>     
            <div class="product">
              <img src="fanta laranja.jpg" alt="product">
          <h3>FANTA - 2L</h3>
          <p class="price">R$ 9,90</p>
          <button class="add-to-cart" data-product="FANTA" data-price="9.90">+</button>
          <button class="remove-from-cart" data-product="FANTA" data-price="9.90">-</button>
          <div class="counter"><br></div>
        
          
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