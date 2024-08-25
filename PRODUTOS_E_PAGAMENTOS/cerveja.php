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
    

  <div class="container">
    <h1>PEDIDOS</h1>
    
    <!-- Produtos -->
    <div class="products-carousel">
      <div class="carousel-inner">

        <div class="product">
        <img src="product1.jpg" alt="product">
        <h3>ORIGINAL - 473</h3>
        <p class="price">R$ 5,30</p>
        <button class="add-to-cart" data-product="ORIGINAL" data-price="5.30">+</button>
        <button class="remove-from-cart" data-product="ORIGINAL" data-price="5.30">-</button>
        <div class="counter"></div>
        </div>     
        <div class="product">
          <img src="product3.jpg" alt="product">
          <h3>HEINEKEN</h3>
          <p class="price">R$ 6,80</p>
          <button class="add-to-cart" data-product="HEINEKEN" data-price="6.80">+</button>
          <button class="remove-from-cart" data-product="HEINEKEN" data-price="6.80">-</button>
          <div class="counter"></div>
      </div>
        <div class="product">
          <img src="product3.jpg" alt="product">
          <h3>CORONA - 473</h3>
          <p class="price">R$ 6,60</p>
          <button class="add-to-cart" data-product="CORONA" data-price="6.60">+</button>
          <button class="remove-from-cart" data-product="CORONA" data-price="6.60">-</button>
          <div class="counter"></div>       
          </div>
      <div class="product">
        <img src="product4.jpg" alt="product">
        <h3>BUDWEISER - 473</h3>
        <p class="price">R$ 4,89</p>
        <button class="add-to-cart" data-product="BUDWEISER" data-price="4.89">+</button>
        <button class="remove-from-cart" data-product="BUDWEISER" data-price="4.89">-</button>
        <div class="counter"></div>
      </div>
        <div class="product">
          <img src="product5.jpg" alt="product">
          <h3>BRAHMA - 473</h3>
          <p class="price">R$4,10</p>
          <button class="add-to-cart" data-product="BRAHMA" data-price="4.10">+</button>
          <button class="remove-from-cart" data-product="BRAHMA" data-price="4.10">-</button>
          <div class="counter"></div>
          </div>
          <div class="product">
            <img src="product1.jpg" alt="product">
            <h3>ORIGINAL - 473</h3>
            <p class="price">R$ 5,20</p>
            <button class="add-to-cart" data-product="ORIGINAL " data-price="5.20">+</button>
            <button class="remove-from-cart" data-product="ORIGINAL " data-price="5.20">-</button>
            <div class="counter"></div>
            </div>     
            <div class="product">
              <img src="product3.jpg" alt="product">
          <h3>CORONA - 473</h3>
          <p class="price">R$ 6,60</p>
          <button class="add-to-cart" data-product="CORONA" data-price="6.60">+</button>
          <button class="remove-from-cart" data-product="CORONA" data-price="6.60">-</button>
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