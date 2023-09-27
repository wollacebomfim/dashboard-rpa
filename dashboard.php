<?php
if($_SERVER["HTTP"] == "on")
{
    header("Location: http://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]);
    exit();
}
//includes
//include_once './includes/seguranca.php';
?>
<!DOCTYPE html>
<html lang="en">

  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google. ">
    <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template,">
    <title>Painel de Monitoramento</title>
    <!-- Favicons-->
    <link rel="icon" href="images/favicon/favicon-32x32.png" sizes="32x32">
    <!-- Favicons-->
    <link rel="apple-touch-icon-precomposed" href="images/favicon/apple-touch-icon-152x152.png">
    <!-- For iPhone -->
    <meta name="msapplication-TileColor" content="#00bcd4">
    <meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png">
    <!-- For Windows Phone -->
    <!-- CORE CSS-->
    <link href="css//materialize.css" type="text/css" rel="stylesheet">
    <link href="css//style.css" type="text/css" rel="stylesheet">
    <!-- Custome CSS-->
    <link href="css/custom/custom.css" type="text/css" rel="stylesheet">
    <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
    <link href="vendors/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet">
    <link href="vendors/flag-icon/css/flag-icon.min.css" type="text/css" rel="stylesheet">
  </head>
  <body>
    <!-- Start Page Loading -->
    <div id="loader-wrapper">
      <div id="loader"></div>
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
    </div>
    <!-- End Page Loading -->
    <!-- //////////////////////////////////////////////////////////////////////////// -->
    <!-- START HEADER -->
    <header id="header" class="page-topbar">
      <!-- start header nav-->
      <div class="navbar-fixed">
        <nav class="navbar-color gradient-45deg-light-blue-cyan">
          <div class="nav-wrapper container center brand-logo light">
            <ul class="center">
              <li>
                <h1 class="logo-wrapper">
                  <a href="index.html" class="brand-logo darken-1">
                    <img src="" height="" width="auto" alt="">
                    <span class="logo-text hide-on-med-and-down"></span>
                  </a>
                </h1>
              </li>
            </ul>
      </div>
     
      <!-- end header nav-->
    </header>
    <!-- END HEADER -->
    <!-- //////////////////////////////////////////////////////////////////////////// -->
    <!-- START MAIN -->
    <div id="main">
      <!-- START WRAPPER -->
      <div class="wrapper">
        <!-- START LEFT SIDEBAR NAV-->
        <aside id="left-sidebar-nav">
          <ul id="slide-out" class="side-nav fixed leftside-navigation">
            <li class="user-details cyan darken-2">
              <div class="row">
                <div class="col col s4 m4 l4">
                  <img src="images/avatar/avatar-7.png" alt="" class="circle responsive-img valign profile-image cyan">
                </div>

<!-- Dashboard -->
<?php include_once './includes/menu.php';?>
        <!-- END LEFT SIDEBAR NAV-->
        <!-- //////////////////////////////////////////////////////////////////////////// -->
        <!-- START CONTENT -->
        <section id="content">
          <!--start container-->
          <div class="container">
            <!--card stats start-->
            <div id="card-stats">
              <div class="row mt-1">
                <div class="col s12 m6 l3">
                  <div class="card gradient-45deg-light-blue-cyan gradient-shadow min-height-100 white-text">
                    <div class="padding-4">
                      <div class="col s7 m7">
                        <i class="material-icons background-round mt-5">timeline</i>
                       
                        <p>Total de NFE</p>
                      </div>
                      <?php include_once './read/contadorAutomacoesGeral.php';?>
                      <div class="col s5 m5 right-align">
                        <h5 class="mb-0"><?php echo $contadorAuto ?></h5>
                        <p class="no-margin">NFE</p>
                       
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col s12 m6 l3">
                  <div class="card green gradient-shadow min-height-100 white-text">
                    <div class="padding-4">
                      <div class="col s7 m7">
                        <i class="material-icons background-round mt-5">supervisor_account</i>
                        <p>Total de Sucessos</p>
                      </div>
                      <?php include_once './read/contAcertos.php' ;?>
                      <div class="col s5 m5 right-align">
                        <h5 class="mb-0"><?php echo $contAcertos ;?></h5>
                        <p class="no-margin">Sucessos</p>
                        <p></p>
                      </div>
                    </div>
                  </div>
                </div>


                <div class="col s12 m6 l3">
                  <div class="card red gradient-shadow min-height-100 white-text">
                    <div class="padding-4">
                      <div class="col s7 m7">
                        <i class="material-icons background-round mt-5">assignment</i>
                        <p>Total de Falhas</p>
                      </div>
                      <?php include_once './read/contFalhas.php' ;?>
                      <div class="col s5 m5 right-align">
                        <h5 class="mb-0"><?php echo $contFalha ;?></h5>
                        <p class="no-margin">Falhas</p>
                      
                     
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col s12 m6 l3">
                  <div class="card orange white-text">
                    <div class="padding-4">
                      <div class="col s7 m7">
                        <i class="material-icons background-round mt-5">assignment</i>
                        <p>Total de Execuções</p>
                      </div>
                      <?php include_once './read/contIniciou.php' ;?>
                      <div class="col s5 m5 right-align">
                        <h5 class="mb-0"><?php echo $contIniciou ;?></h5>
                        <p class="no-margin">Execuções</p>
                      
                     
                      </div>
                    </div>
                  </div>
                </div>
               

                 


    


            <table class="responsive-table">
            <thead>
                <tr>
                    <th> id</th>
                    <th>EMITENTE</th>
                    <th>NOME/RZ</th>
                    <th>Nº NFE</th>
                    <th>DT EMISSÃO</th>
                    <th>CNPJ/CPF PRESTADOR</th>
                    <th>CNPJ/CPF TOMADOR</th>
                    <th>VALOR TOTAL</th>
                    <th>% ICMS</th>
                    <th>ICMS</th>
                    <th>% COFINS</th>
                    <th>COFINS</th>
                    <th>% PIS</th>
                    <th>PIS</th>
                    <th>Data de lançamento</th>

               
</tr>
</thead>
<tbody><?php  include_once './read/NFE_Danfe.php';?></tbody>
</table>
</body>     

    <footer class="page-footer gradient-45deg-light-blue-cyan">
        <div class="footer-copyright">
          <div class="container">
            <span>Copyright ©
              <script type="text/javascript">
                document.write(new Date().getFullYear());
              </script> <a class="grey-text text-lighten-2" href="http://themeforest.net/user/pixinvent/portfolio?ref=pixinvent" target="_blank">NeutralCode</a> All rights reserved.</span>
            <span class="right hide-on-small-only">Developed by <a class="grey-text text-lighten-2" href="https://neutralcode.com.br">NeutralCode</a></span>
          </div>
        </div>
    </footer>




    <!-- END FOOTER -->
    <!-- ================================================
    Scripts
    ================================================ -->
    <!-- jQuery Library -->
    <script type="text/javascript" src="vendors/jquery-3.2.1.min.js"></script>
    <!--materialize js-->
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <!--scrollbar-->
    <script type="text/javascript" src="vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="js/plugins.js"></script>
    <!--custom-script.js - Add your own theme custom JS-->
    <script type="text/javascript" src="js/custom-script.js"></script>
  </body>
</html>