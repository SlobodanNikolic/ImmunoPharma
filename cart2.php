<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Scrolling Nav - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato|Roboto" rel="stylesheet">
    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Custom styles for this template -->
    <link href="css/scrolling-nav.css" rel="stylesheet">
      
      <!-- // function updateCartDimensions(){
      //   var cartDiv = document.getElementById("cart-dropdown");
      //   while (cartDiv.firstChild) {
      //       cartDiv.removeChild(cartDiv.firstChild);
      //   }
      // }
      
      // window.onload = updateCartDimensions(); -->


    <script type="text/javascript" src="js/shop.js"></script>

    <style type="text/css">
      
      header{
        background-color: #FFFBFA;
        /*font-family: 'Lato', sans-serif;
        font-family: 'Roboto', sans-serif;*/
      }

      nav{

        /*border: 1px solid #0093A9;*/
      }

      
    </style>

  </head>

  <body id="page-top">

    <!-- Navigation -->
   <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav" style="background-color: #1590A5FF;
        color: white;">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Immuno Pharma</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">O nama</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#products">Proizvodi</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#ask">Pitajte doktora</a>
            </li>

            <li class="nav-item">
              <a href="cart.php" id="cart" class="nav-link js-scroll-trigger"><i class="fa fa-shopping-cart" id="cart-icon"></i> Korpa</a>
            </li>
          </ul>

          
        </div>
      </div>
    </nav>


    

    
    <!-- Footer -->

    <!-- PITAJTE LEKARA -->
    


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom JavaScript for this theme -->
    <script src="js/scrolling-nav.js"></script>

  </body>

</html>
