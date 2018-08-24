<!DOCTYPE html>
<html>
<head>
  <meta name="title" content="Nigeria Christian Corpers' Fellowship Cross River State Chapter">
  <meta name="author" content="The Holy Ghost">
  <meta name="description" content="Nigeria Christian Corpers' Fellowship (NCCF), Cross River state Chapter was established after the National Youth Service Corps, and the State Secretariat is located in Calabar, the state's capital.">
  <title>Zones — Nigeria Christian Corpers' Fellowship Cross River State Chapter</title>
   <link rel = "stylesheet"
         href = "https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/css/materialize.min.css">
         <link rel="stylesheet" type="text/css" href="_css/main.css">
      <script type = "text/javascript"
         src = "https://code.jquery.com/jquery-2.1.1.min.js"></script>           
      <script src = "https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js">
      </script>
      <script>
         $(document).ready(function() {
            $('select').material_select();
         });
      </script>
  <link rel="stylesheet" type="text/css" href="_css/main.css">
  <style>
    nav ul {
      margin: 1em 0;
    }

    nav ul a {
      display: inline;
    }
    nav ul a:hover {
      background: none;
    }
    header {
      padding-top: 25em ;
    }

    h3.subSection-header:after {
      position: absolute;
      bottom: 0;
      left: 0;
      right: 0;
      width: .7em;
      content: '.';
      color: transparent;
      background: var(--primary);
      height: .15em;
    }

    .container p {
      font-size: 2em;
      line-height: 2;
      text-align: center;
    }

    .collapsible-header {
      display: flex;
    }

    .collapsible-header object {
      margin-left: auto;
        margin-right: 1em;
        height: 3em;
        color: #17326E;
    }

    .image-wrapper {
      display: flex;
      margin-top: 3em;
      justify-content: center;
    }

    .image-block img {
      height: 15em;
    }

    @media only screen and (max-width: 599px) {
      header {
        padding-top: 15em !important;
      }
      nav ul li {
        margin: 0;
      }
      nav ul li a {
        font-size: 1.2em;
      }

      .container {
        width: 85%;
      }

      .image-wrapper {
        flex-direction: column;
      }

      h3.subSection-header {
        font-size: 2em;
      }
    }

    @media only screen and (min-width: 600px) and (max-width: 991px) {
      nav ul li a {
        font-size: 1.2em;
      }

      h3.subSection-header {
        font-size: 2em;
      }

      .container {
        width: 85%;
      }
    }
  </style>
</head>
<body>
  <header class="subHeading reg">
    <!-- Navigation Bar -->
    <nav id="pageNav">
      <section class="siteLogo">
        <a href="index.php"><img src="_css/_images/logo.jpg"></a>
      </section>

      <section id="hamBurger">
          <span></span>
          <span></span>
          <span></span>
      </section>
      
      <section id="navMenu">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="register.php">Register</a></li>
          <li><a href="gallery.php">Gallery</a></li>
          <li><a class="current" href="zones.php">Zones</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="forum.php">Forum</a></li>
        </ul>
      </section> 
    </nav>
    
    <!-- Slider Wrapper -->
    <article class="subSlider-wrapper">
      <h2 class="section-header">Our Zones</h2>
    </article>
  </header>
  <main>

    <article class="container" >
      <br /><br />
  <a class="waves-effect waves-light btn" onClick="expandAll();"><i class="material-icons left">Expand All</i>fullscreen</a>
  <a class="waves-effect waves-light btn" onClick="collapseAll();"><i class="material-icons left">Collapse All</i>fullscreen_exit</a>
<br /><br />
      
      <ul class="collapsible popout" data-collapsible="expandable">
        <?php
          include 'process.php';
          $stmt = $connect->prepare('select * from zones order by id ASC');
          $stmt -> execute();
          if($stmt->rowCount()>0){
          while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
          extract($row);
          ?>
          
          <li>
            <div class="collapsible-header">
              <h3 class="subSection-header"><?php echo $name ?></h3>
            <object type="image/svg+xml" data="_css/_images/down-arrow-circle.svg">View More</object>
            </div>
            <div class="collapsible-body">
            <p>
              <b>Address:</b><?php echo $address ?><br>
              <b>Official Line:</b><?php echo $phone ?>
            </p>
            <section class="image-wrapper">
              <section class="image-block">
                <img src="_css/_images/zone/<?php echo $imgCOR ?>" alt="">
                <h4><?php echo $nameCOR ?></h4>
                <h6>Co-Ordinator</h6>
              </section>
              <section class="image-block">
                <img src="_css/_images/zone/<?php echo $imgSEC ?>" alt="">
                <h4><?php echo $nameSEC ?></h4>
                <h6>Secretary</h6>
              </section>
            </section>
            </div>
          </li>
          <?php

            }
          }
    

        ?> 
        </ul>
    </article>
  </main>

    <footer id="page-footer">
      <article id="footer-top">
          <section id="footer-social">
            <a href="#"><object type="image/svg+xml" data="_css/_images/facebook.svg">Facebook</object></a>
            <a href="#"><object type="image/svg+xml" data="_css/_images/twitter.svg">Twitter</object></a>
            <a href="#"><object type="image/svg+xml" data="_css/_images/instagram.svg">Instagram</object></a>
          </section>
          <h4 >Nigeria Christian Corpers' Fellowship Cross River State Chapter</h4>
          <p>23 Akiba Street, Off Old Odukpani Road Ikot Ansa, Calabar</p>
          <p>+234 </p>
          <p>nccfcrossriver@yahoo.com</p>
      </article>
      <article id="footer-bottom">
        <p>© 2018 NCCF CROSS RIVER STATE. ALL RIGHTS RESERVED.</p>
      </article>
    </footer>

<script src="_scripts/nav.js"></script>
<script src="_scripts/script.js"></script>
<script>
      function expandAll(){
  $(".collapsible-header").addClass("active");
  $(".collapsible").collapsible({accordion: false});
}

function collapseAll(){
  $(".collapsible-header").removeClass(function(){
    return "active";
  });
  $(".collapsible").collapsible({accordion: true});
  $(".collapsible").collapsible({accordion: false});
}
</script>
</body>
</html>