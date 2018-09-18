<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">

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

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Immuno Pharma video stranica. Emisije i prilozi vezani za imunitet, holesterol i zdravlje uopste. Gostovanja dr Snežane Bašić.">

    <title>Immuno Pharma : video, emisije i prilozi o zdravlju.</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato|Roboto" rel="stylesheet">
    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Custom styles for this template -->
    <link href="css/scrolling-nav.css" rel="stylesheet">

    <link href="css/popup.css" rel="stylesheet">
    <script type="text/javascript" src="js/popup.js"></script>

    <script type="text/javascript" src="js/shop.js"></script>

    <style type="text/css">
      
      .emisija{
        margin-bottom: 50px;
      }

      .video_desc{
        color: #127E91;

      }

      header{
        background-color: #FFFBFA;
        /*font-family: 'Lato', sans-serif;
        font-family: 'Roboto', sans-serif;*/
      }

      nav{

        /*border: 1px solid #0093A9;*/
      }

      hr{
        border: 1px solid #FF1083;
        margin-bottom: 50px;
        margin-top: -5px;
        width: 320px;
        float: left;
      }

      .colored-button{
        border: 2px solid #1590A5FF;
        color: #1590A5FF;
        font-weight: 700;
        background: none;
        padding: 6px 18px;
        border-radius: 6px;
      }

      #info{
        float: right;
        margin-top: -120px;
        color: white;
        width: 300px;
      }

      .colored-button:hover, .colored-button:focus, .colored-button:active{
          background: #1590A5FF;
          color: white;
          border: 2px solid #1590A5FF;
      }
       
      .colored-button:active{
          background: #1590A5FF;
          box-shadow: none;
          border: 2px solid #1590A5FF;
          color: white;
      }

      .colored-button:focus, .colored-button:active:focus{
          background: #1590A5FF;
          box-shadow: none;
          border: 2px solid #1590A5FF;
      }

      .segment1{
        background-image: 
        linear-gradient(
          rgba(0, 0, 0, 0.4),
          rgba(0, 0, 0, 0.4)
        ),
        url(images/porodica4.png);
        font-family: 'Lato', sans-serif;
        font-size: 30px;
        height: 750px;
        color:white;
        /*background-image: url("images/family2.jpg");*/
        background-repeat:no-repeat;
        background-size:cover;
      }

      .segment2{
        background-color: white;
        color: gray;
        padding-top: 80px;
        padding-bottom: 80px;
        /*border: 1px solid black;*/
        margin-bottom: 0px;
        font-family: 'Roboto', sans-serif;
      }

      .segment3{
        background-color: #cc3971;
        color: white;
        font-family: 'Roboto', sans-serif;
      }

      .image-text{
        margin-top: 20px;
        margin-bottom: 20px;
        font-family: 'Roboto', sans-serif;
      }

      .btn-outline-primary{
        background-color: white;
      }

      #about{
        /*border:1px solid pink;*/
        margin-left: 0px;
        margin-top: -50px;
        margin-right: 0px;
        padding-right: 0px;
        width: 100%;
      }

      
      .text{
        font-family: 'Roboto', sans-serif;
        color:#505050;
      }

      h1{
        color: #505050;
      }


      @media only screen and (min-width: 10px) and (max-width: 320px) {
        .image-text{
          margin-top: 20px;
          margin-bottom: 80px;
          /*border: 1px solid black;*/
        }



        #info{
          visibility: hidden;
        }

        .read-more{
          visibility: hidden;
        }

        .read-more-small{
          visibility: visible;
        }

        .big-margin{
          margin-top: 80px;
        }

        .poruci-button{
          /*width: 50%;
          display: inline-block;*/
          margin-left: 0px;
        }

        .card{
          max-width: 20rem;
        }

        .card-special{
          min-width: 15rem;
          max-width: 15rem;
        }

        .container2{
          /*padding: 30px;*/
        }

        #cart-dropdown{
          visibility: hidden;
        }

        #about-us-left{
          display: none;
        }

        #about-us-right{
          display: none;
        }

      }

      /*MEDIA QUERIES*/
      @media only screen and (min-width: 320px) and (max-width: 768px) {
        .image-text{
          margin-top: 20px;
          margin-bottom: 80px;
          /*border: 1px solid black;*/
        }

        #info{
          visibility: hidden;
        }

        .first{
          margin-bottom: 50px;
        }

        .read-more{
          visibility: hidden;
        }

        .read-more-small{
          visibility: visible;

        }

        .big-margin{
          margin-top: 80px;
        }

        .poruci-button{
          /*width: 50%;
          display: inline-block;*/
          margin-left: 0px;
        }

        .card{
          max-width: 20rem;
        }

        .card-special{
          min-width: 15rem;
          max-width: 15rem;
        }

        .container2{
          padding: 30px;
        }

        #cart-dropdown{
          visibility: hidden;
        }

        #about-us-left{
          display: none;
        }

        #about-us-right{
          display: none;
        }

      }
  
      #ask{
        background-color: #F2F4FAFF;

        padding: 50px;
      }

      @media only screen and (min-width: 768px) and (max-width: 992px){
        .image-text{
          margin-top: 20px;
          margin-bottom: 80px;
          /*border: 1px solid black;*/
        }

        #cart-dropdown{
          visibility: hidden;
        }
        
        .card{
          margin-right: 20px;
        }

        #about-us-left{
          display: none;
        }

        #about-us-right{
          display: none;
        }
      } 

      @media only screen and (min-width: 992px) {
        .card{
          margin-right: 20px;
        }

        
      } 

    </style>

  </head>

  <body id="page-top">
    <script type="text/javascript" src="js/fb.js"></script>

    <!-- Navigation -->
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
              <a class="nav-link js-scroll-trigger" href="http://immunopharma.rs#about">O nama</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="http://immunopharma.rs#products">Proizvodi</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="http://immunopharma.rs#ask">Pitajte doktora</a>
            </li>

            <!-- <li class="nav-item">
              <a class="nav-link js-scroll-trigger" style="color:white;" href="video.php">Emisije</a>
            </li> -->

            <li class="nav-item">
              <a href="cart.php" id="cart" class="nav-link js-scroll-trigger"><i class="fa fa-shopping-cart" id="cart-icon"></i> Korpa</a>
            </li>
          </ul>

          
        </div>
      </div>
    </nav>

    <section class="segment4" id="about">
      <div class="container" id="about-container">
        <h1> Emisije o zdravlju</h1>
        <hr/>
      <!-- EMISIJA -->
        <div class="row emisija">
          
          <div class="col-lg-6 col-md-6 col-sm-12 mx-auto first">

              <h3 class="text">Imunitetom do zdravlja - emisija 1</h3>
              <p class="video_desc">dr Snežana Bašić priča o imunitetu u emisiji "Imunitetom do zdravlja.", emitovanoj na RTS 1.</p>
              <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/NpPbWmYV5Y8" allowfullscreen></iframe>
              </div>

          </div>

          <div class="col-lg-6 col-md-6 col-sm-12 mx-auto">

              <h3 class="text">Imunitetom do zdravlja - emisija 2</h3>
              <p class="video_desc">dr Snežana Bašić priča o imunitetu u emisiji "Imunitetom do zdravlja.", emitovanoj na RTS 1.</p>
              <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/0DNFSVt_PW4" allowfullscreen></iframe>
              </div>

          </div>


        </div>

          <!-- EMISIJA -->
        <div class="row emisija">
          <div class="col-lg-6 col-md-6 col-sm-12 mx-auto first">

              <h3 class="text">Imunitetom do zdravlja - emisija 3</h3>
              <p class="video_desc">dr Snežana Bašić priča o imunitetu u emisiji "Imunitetom do zdravlja.", emitovanoj na RTS 1.</p>
              <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/vfhdQohtwbE" allowfullscreen></iframe>
              </div>

          </div>

          <div class="col-lg-6 col-md-6 col-sm-12 mx-auto">

              <h3 class="text">Imunitetom do zdravlja - emisija 4</h3>
              <p class="video_desc">dr Snežana Bašić priča o imunitetu u emisiji "Imunitetom do zdravlja.", emitovanoj na RTS 1.</p>

              <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/YC-4XzHO48w" allowfullscreen></iframe>
              </div>

          </div>

          
        </div> 


        <div class="row emisija">
          
          <div class="col-lg-6 col-md-6 col-sm-12 mx-auto first">

              <h3 class="text">Imunitetom do zdravlja - emisija 1</h3>
              <p class="video_desc">dr Snežana Bašić priča o imunitetu u emisiji "Imunitetom do zdravlja.", emitovanoj na RTS 1.</p>
              <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/XhMFEh1o1a8" allowfullscreen></iframe>
              </div>

          </div>

          <div class="col-lg-6 col-md-6 col-sm-12 mx-auto">

              <h3 class="text">Imunitetom do zdravlja - emisija 1</h3>
              <p class="video_desc">dr Snežana Bašić priča o imunitetu u emisiji "Imunitetom do zdravlja.", emitovanoj na RTS 1.</p>
              <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/jW8t-bjHqcg" allowfullscreen></iframe>
              </div>

          </div>
          
        </div>


        <div class="row emisija">
          
          <div class="col-lg-6 col-md-6 col-sm-12 mx-auto first">

              <h3 class="text">Imunitetom do zdravlja - emisija 1</h3>
              <p class="video_desc">dr Snežana Bašić priča o imunitetu u emisiji "Imunitetom do zdravlja.", emitovanoj na RTS 1.</p>
              <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/5iBPlkpkUQo" allowfullscreen></iframe>
              </div>

          </div>

          <div class="col-lg-6 col-md-6 col-sm-12 mx-auto">

              <h3 class="text">Imunitetom do zdravlja - emisija 1</h3>
              <p class="video_desc">dr Snežana Bašić priča o imunitetu u emisiji "Imunitetom do zdravlja.", emitovanoj na RTS 1.</p>
              <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/uaqwk6bBDsw" allowfullscreen></iframe>
              </div>

          </div>
          
        </div>


      </div>
    </section>



    <footer class="py-5" style="padding: 30px; background-color: #1590A5FF;">
      <div class="container">

        <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FImmuno-Pharma-233817897179199%2F&tabs=timeline&width=300&height=70&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=209720689783767" width="100%" height="130" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>

        <!-- <p class="m-0 text-center text-white">Copyright &copy; Shlijani 2018</p> -->
      </div>

      <div id="info">
        Immuno Pharma D.O.O.</br>
        Beograd</br>

        Broj telefona besplatnog savetovališta:
        +381 11 3987747
      </div>
      <!-- /.container -->
    </footer>

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

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom JavaScript for this theme -->
    <script src="js/scrolling-nav.js"></script>

  </body>

</html>
