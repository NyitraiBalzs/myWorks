<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Zsivány | Home </title>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link
    href="https://fonts.googleapis.com/css2?family=Archivo:wght@700&family=Karla:ital@0;1&family=Work+Sans:wght@400;700&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="CSS/utilityes.css">
  <link rel="stylesheet" href="CSS/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
    integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w=="
    crossorigin="anonymous" />
    <link rel="stylesheet" href="CSS\tablet_mobile.css" media="(max-width: 820px)" />
    <script src="JS/jquery-3.5.1.min.js"></script>
    
    
</head>
<!-- HEADER -->

<body>
  <div class="root-container">
  <header id="main-header">
<!-- NAVBAR -->
<?php
include('navbar.php');
?>

    <div class="header-logo">
      <img src="hasznalhato_img/logo-1.png" alt="logo">

    </div>
    <div class="arrow-btn">
      <a href="#bemutat"><img src="hasznalhato_img/arrow.png" alt=""></a>
    </div>
  </header>
  <!--  Section BEMUTATKOZÓ -->
  <section id="bemutat" class=" bm-main container">
    
    <div class="bm-text">
      <h2>Bisztró szívvel, lélekkel</h2>
      <p>Felis venenatis aenean facilisi accumsan vel auctor accumsan. Mi rhoncus justo vitae dictum ut faucibus est. Eget elit iaculis eget sed sed. Pellentesque turpis scelerisque suspendisse integer senectus in sed erat pharetra. Donec odio eu odio pretium nisi.</p>
    </div>

    <?php
    include('Slide_gallery.php');
    ?>

  </section>
  <!-- Section Választék  -->

  <section id="valasztek" >
   <div class="container">
  
    <div class="valasztek-container ">
      <div>
        <h2>Kínálatunk</h2>
        <p>Nézd meg reggeli és egyéb étel és italkínálatunkat!</p>
        
          <a class="btn btn-transp" href="etlap_sql.php">Megnézem 
             <span class=" icon fas fa-arrow-right"></span>
          </a>
        
        
      </div>
    </div>
    </div>
   
  </section>
  <!-- Section Bérelj ki minket -->

  <section id="Berelj" class="container">
    <h2>Bérelj ki minket</h2>
    <div class="berelj-main ">
      <div class="berelj-card pd-40">

        <i class="fas fa-birthday-cake fa-2x"></i>
        <h3>Szülinapp <div class="line"></div></h3>
        <p>Scelerisque lacus semper non adipiscing egestas.
          Pellentesque dapibus eget turpis sagittis.
        </p>

      </div>

      <div class="berelj-card pd-40">

        <i class="fas fa-suitcase fa-2x"></i>
        <h3>Csapatépítő<div class="line"></div></h3> 
        <p>Scelerisque lacus semper non adipiscing egestas.
          Pellentesque dapibus eget turpis sagittis.
        </p>

      </div>

      <div class="berelj-card pd-40">

        <i class="far fa-heart fa-2x"></i>
        <h3>Esküvő<div class="line"></div></h3>
        <p>Scelerisque lacus semper non adipiscing egestas.
          Pellentesque dapibus eget turpis sagittis.
        </p>

      </div>
    
  </div>
  </section>
  <!-- Email form-->
  <?php include('EMAIL/send_mail.php');
  ?>
  <section id="email-container" class="container">
    <div class="email-uzenet">
      <p>Add meg neved, e-mail címed és<br> 
        vedd fel velünk a kapcsolatot, vagy <br>
        keress minket az alábbi <br>
        telefonszámon: +3630 123 12 12</p>
    </div>
    
  <form id="main-form" class="main-form">
    <div class="form-group name">
      <label for="name">Teljes neved</label> <br>
      <input type="text" id="name" name="name" placeholder="John Doe" >
    </div>

    <div class="form-group email">
      <label for="email">E-mail címed</label> <br>
      <input type="email" id="email" name="email" placeholder="John.Doe@something.com" >
    </div>

    <div class="form-group message">
      <textarea id="message" name="message"  placeholder="Üzeneted"></textarea>
    </div>
    
    <button class="btn btn-light button" id="submit" type="button" onclick="sendMail()" >
      Elküldöm <i class="fas fa-arrow-right"></i>
    </button>
    
  </form>

  

  </section>
  <!-- ÜZENŐFAL -->
  <section id="tiMondtatok" class="container">
    <div>
      <h2>Ti mondtátok</h2>
    </div>
  <div class="uzenofal">
    <div class="uzenofal-card ">
      <p> "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam, error."</p>
      <p>-john doe</p>
    </div>

    <div class="uzenofal-card  ">
      <p> "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam, error."</p>
      <p>-john doe</p>
    </div>

    <div class="uzenofal-card  ">
      <p> "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam, error."</p>
      <p>-john doe</p>
    </div>
  </div>
  </section>
  <!-- FOOTER -->
  <?php
  include('footer.php');
  ?>
  </div>
  <script src="JS/app.js"></script>
</body>

</html>