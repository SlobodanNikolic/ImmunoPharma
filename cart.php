<!DOCTYPE html>
<html>

<head>

  <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-123764379-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-123764379-1');
    </script>

    <!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '2146199148745001');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=2146199148745001&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->


  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Korpa, Immuno Pharma D.O.O. Beograd">

  <title>Potrošačka korpa, Immuno Pharma</title>

    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- <link href="https://fonts.googleapis.com/css?family=Lato|Roboto" rel="stylesheet"> -->
    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Custom styles for this template -->
    <link href="css/scrolling-nav.css" rel="stylesheet">
    <link href="css/popup.css" rel="stylesheet">
    <script type="text/javascript" src="js/popup.js"></script>

    <script type="text/javascript" src="js/index.js"></script>

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom JavaScript for this theme -->
    <script src="js/scrolling-nav.js"></script>

    <script type="text/javascript">
      

    $( document ).ready(function() {
      var itm = document.getElementById("product-acidex");
      var parent = document.getElementById("shop-container");
      var cln = itm.cloneNode(true);
      itm.outerHTML = "";
      delete itm;


      if(localStorage.getItem("immunoG500")!=null){
        var cln2 = cln.cloneNode(true);

        cln2.setAttribute("name", "immunoG500");
        cln2.getElementsByClassName("image")[0].src="images/immunoG.jpg";
        cln2.getElementsByClassName("product-title")[0].innerHTML="Immuno G + 500";
        cln2.getElementsByClassName("product-description")[0].innerHTML="Prirodni"+
        " imuno-modulator";
        cln2.getElementsByClassName("product-price")[0].innerHTML="1980 din";
        cln2.getElementsByClassName("quantity")[0].value=localStorage.getItem("immunoG500");


        cln2.style.visibility = "visible";
        parent.appendChild(cln2);
      }
      if(localStorage.getItem("immunoG100")!=null){
        var cln2 = cln.cloneNode(true);

        cln2.setAttribute("name", "immunoG100");
        cln2.getElementsByClassName("image")[0].src="images/immunoG.jpg";
        cln2.getElementsByClassName("product-title")[0].innerHTML="Immuno G + 100";
        cln2.getElementsByClassName("product-description")[0].innerHTML="Prirodni"+
        " imuno-modulator";
        cln2.getElementsByClassName("product-price")[0].innerHTML="1980 din";
        cln2.getElementsByClassName("quantity")[0].value=localStorage.getItem("immunoG100");


        cln2.style.visibility = "visible";
        parent.appendChild(cln2);
      }
      if(localStorage.getItem("holex")!=null){
        var cln2 = cln.cloneNode(true);

        cln2.setAttribute("name", "holex");
        cln2.getElementsByClassName("image")[0].src="images/holex2.png";
        cln2.getElementsByClassName("product-title")[0].innerHTML="Holesterol-Ex Complex";
        cln2.getElementsByClassName("product-description")[0].innerHTML="Prirodni"+
        " način za obaranje holesterola";
        cln2.getElementsByClassName("product-price")[0].innerHTML="1550 din";
        cln2.getElementsByClassName("quantity")[0].value=localStorage.getItem("holex");


        cln2.style.visibility = "visible";
        parent.appendChild(cln2);
      }
      if(localStorage.getItem("acidex")!=null){
        var cln2 = cln.cloneNode(true);

        cln2.setAttribute("name", "acidex");
        cln2.getElementsByClassName("image")[0].src="images/acidex2.png";
        cln2.getElementsByClassName("product-title")[0].innerHTML="Acid-Ex";
        cln2.getElementsByClassName("product-description")[0].innerHTML="Antacid";
        cln2.getElementsByClassName("product-price")[0].innerHTML="800 din";
        cln2.getElementsByClassName("quantity")[0].value=localStorage.getItem("acidex");


        cln2.style.visibility = "visible";
        parent.appendChild(cln2);
      }
      if(localStorage.getItem("q10")!=null){
        var cln2 = cln.cloneNode(true);

        cln2.setAttribute("name", "q10");
        cln2.getElementsByClassName("image")[0].src="images/naturalq2.png";
        cln2.getElementsByClassName("product-title")[0].innerHTML="Natural Q10";
        cln2.getElementsByClassName("product-description")[0].innerHTML="Prirodni vodotopivi koenzim Q10";
        cln2.getElementsByClassName("product-price")[0].innerHTML="900 din";
        cln2.getElementsByClassName("quantity")[0].value=localStorage.getItem("q10");


        cln2.style.visibility = "visible";
        parent.appendChild(cln2);
      }


      $('.product-quantity input').change( function() {
        updateQuantity(this);
      });

      $('.product-removal button').click( function() {
        removeItem(this);
      });

      recalculateCart();
    });


    /* Recalculate cart */
    function recalculateCart()
    {
      var subtotal = 0;
      
      /* Sum up row totals */
      $('.product').each(function () {
        var singlePrice = parseFloat($(this).children('.product-price').text());
        var quantity = parseFloat($(this)[0].getElementsByClassName("quantity")[0].value);
        var sum = singlePrice * quantity;
        $(this).children('.product-line-price').text(sum + " din");
        subtotal += parseFloat($(this).children('.product-line-price').text());
      });
      
      /* Calculate totals */
      //var shipping = (subtotal > 0 ? shippingRate : 0);
      var total = subtotal;
      
      var fadeTime = 1;
      /* Update totals display */
      $('.totals-value').fadeOut(fadeTime, function() {
        $('#cart-subtotal').html(subtotal.toFixed(2) + " din");
        // $('#cart-shipping').html(shipping.toFixed(2) + " din");
        $('#cart-total').html(total.toFixed(2) + " din");
        if(total == 0){
          $('.checkout').fadeOut(fadeTime);
        }else{
          $('.checkout').fadeIn(fadeTime);
        }
        $('.totals-value').fadeIn(fadeTime);
      });
    }


    /* Update quantity */
    function updateQuantity(quantityInput)
    {
      /* Calculate line price */
      var productRow = $(quantityInput).parent().parent();
      var price = parseFloat(productRow.children('.product-price').text());
      var quantity = $(quantityInput).val();

      var reNum2 = /^([0-9]+)+$/;
      if(!reNum2.test(quantity)){
        alert("Pogrešno unešena vrednost u polje za količinu proizvoda.");
        
        return;
      }

      var name = productRow[0].getAttribute("name");
      localStorage.setItem(name, quantity);
      var linePrice = price * quantity;
      
      /* Update line price display and recalc cart totals */
      productRow.children('.product-line-price').each(function () {
        $(this).fadeOut(fadeTime, function() {
          $(this).text(linePrice.toFixed(2));
          recalculateCart();
          $(this).fadeIn(fadeTime);
        });
      });  
    }


    /* Remove item from cart */
    function removeItem(removeButton)
    {
      /* Remove row from DOM and recalc cart total */
      var productRow = $(removeButton).parent().parent();
      var name = productRow[0].getAttribute("name");
      localStorage.removeItem(name);
      productRow.slideUp(fadeTime, function() {
        productRow.remove();
        recalculateCart();
      });
    }

    </script>

    <style type="text/css">
      
      #cart-main{
        margin-top: 100px;
      }

      h2{
        margin-bottom: 20px;
      }

    </style>
</head>

<body id="page-top">
  <script type="text/javascript" src="js/fb.js"></script>

  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav" style="background-color: #1590A5FF;
        color: white;">
      <div class="container">
        <img class="navbar-brand js-scroll-trigger" style="width: 40px; height: 45px;" src="images/logo6.png"/>

        <a class="navbar-brand js-scroll-trigger" href="#page-top">Immuno Pharma</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="index.php#about">O nama</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="index.php#products">Proizvodi</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="index.php#ask">Pitajte doktora</a>
            </li>

            <!-- <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="video.php">Emisije</a>
            </li> -->

            <li class="nav-item">
              <a href="cart.php" style="color:white;" id="cart" class="nav-link js-scroll-trigger"><i class="fa fa-shopping-cart" id="cart-icon"></i> Korpa</a>
            </li>
          </ul>

          
        </div>
      </div>
    </nav>

<div id="cart-main">
  <h2>Korpa za kupovinu</h2>

  <div class="shopping-cart">

    <div class="column-labels">
      <label class="product-image">Slika</label>
      <label class="product-details">Proizvod</label>
      <label class="product-price">Cena</label>
      <label class="product-quantity">Količina</label>
      <label class="product-removal">Ukloni</label>
      <label class="product-line-price">Ukupno</label>
    </div>

    <div id = "shop-container">
    </div>

    <div class="product" id="product-acidex" style="visibility: hidden">
      <div class="product-image">
        <img src="images/acidex2.png" class="image">
      </div>
      <div class="product-details">
        <div class="product-title">Dingo Dog Bones</div>
        <p class="product-description">The best dog bones of all time. Holy crap. Your dog will be begging for these things! I got curious once and ate one myself. I'm a fan.</p>
      </div>
      <div class="product-price">12.99</div>
      <div class="product-quantity">
        <input type="number" value="2" min="1" class="quantity">
      </div>
      <div class="product-removal">
        <button class="remove-product">
          Ukloni sa liste
        </button>
      </div>
      <div class="product-line-price">25.98</div>
    </div>


    <div class="totals">

      <div id = "choose-payment">
          <!-- <input type="radio" name="payment-type" id = "card">Online plaćanje</input> -->
          <input type="radio" name="payment-type" id="courier" checked="checked">Plaćanje pouzećem</input>
      </div>

      <div class="totals-item">
        <label>Cena proizvoda</label>
        <div class="totals-value" id="cart-subtotal"></div>
      </div>
      
      <div class="totals-item">
        <label>Procena cene slanja</label>
        <div class="totals-value" id="cart-shipping"></div>
      </div>
      <div class="totals-item totals-item-total">
        <label>Ukupno</label>
        <div class="totals-value" id="cart-total"></div>
      </div>
    </div>
        
        <button class="checkout" onclick="continueShopping()">Nastavi</button>

  </div>
</div>

<div id="myModal" class="modal">

      <!-- Modal content -->
      <div class="modal-content">
        <div class="modal-header">
          <h2 class="text">Besplatno savetovalište</h2>
          <span class="close">&times;</span>
        </div>
        <div class="modal-body">
          <p class="text">U Beogradu postoji besplatno savetovalište, u kome rade stručnjaci iz oblasti medicine i farmacije, sa kojima možete razgovarati i dobiti savete vezane za zdravlje. Savetovalište funkcioniše po principu kol centra, radnim danima od 9h - 17h. Pozivi se ne naplaćuju dodatno.</p>
          <p class="text">Broj telefona savetovališta: <b>011 398 77 47</b></p>
        </div>
        
      </div>

    </div>

</body>

</html>
