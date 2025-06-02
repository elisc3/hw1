
<!DOCTYPE html> 

<?php
  include_once "loggato.php";
  session_start();
  $_SESSION["page"]="blog.php";
  // print_r($_SESSION);
?>

<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Villa Mirador Blog</title>
    
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="blog.css">

    <script src="index.js" defer></script>
    <script src="blog.js" defer></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300..700&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
        
  </head>
  
  <body>
  
    <div id="info">
      <div  class="info-item-sx perc50">
        <a><img src="img/facebook.png"/></a>
        <a><img src="img/instagram.png"/></a>
        <a><img src="img/youtube.png"/></a>
        <a><img src="img/twitter.png"/></a>
        <a><img src="img/tripadvisor.png"/></a>
      </div>
      <!-- <div class="info-item-c"></div>-->
      <div class="info-item-dx perc50">
        <a class="info-item">info@villamrador.it</a>
        <a class="info-item">+39 0957082890</a>
      </div>
    </div>

    <nav id="links">
      <div  class="info-item-sx perc30">
        <a href="ricevimenti.php"><strong>Ricevimenti</strong></a>
        <a href="sale.php"><strong>Le Sale</strong></a>
        <a href="menu.php"><strong>Menù</strong></a>
      </div>
      <div class="info-item-c perc30">
        <a href="index.php"> <img src="https://www.villamirador.it/wp-content/uploads/2021/09/logo.png" /> </a>
      </div>
      <div class="info-item-dx perc30">
        <a><strong>Eventi</strong></a>
        <a href="blog.php"><strong>Blog</strong></a>
        <a><strong>Contatti</strong></a>
      </div>
        
      <div id="menu_button">
        <div class="linea"></div>
        <div class="linea"></div>
        <div class="linea"></div>
        <div class="chiusura nascosto">X</div>
      </div>

      <div class="menu-content nascosto ">
        <a href="ricevimenti.php"><strong>Ricevimenti</strong></a>
        <a href="sale.php"><strong>Le Sale</strong></a>
        <a href="menu.php"><strong>Menù</strong></a>
        <a><strong>Eventi</strong></a>
        <a href="blog.php"><strong>Blog</strong></a>
        <a><strong>Contatti</strong></a>
      </div>

    </nav>
    

    <div id="utente">
      <?php 
        if(loggato()){
          $utente="img/esci.jpg";
          $file="logout.php";
        }
        else{
          $utente="img/utente.jpg";
          $file="login.php";
        } 
      ?>
      <a href=<?php echo($file) ?> ><img src=<?php echo($utente) ?> ></a>
    </div>

    <header>
        <h1>Il Blog di Villa Mirador <button id=
          <?php if (!empty($_SESSION["_mirador_username"]))
                  echo("form-btn");
                else
                  echo("add_blog_button_off");
          ?> >Inserisci Articolo</button></h1>
    </header>
    
    <form id="article-form" class="form-box" name='blog' action='add_post.php' method='post'>
      <h3>Crea un nuovo articolo</h3>
      <input type="text" id="title" name="title" placeholder="Titolo"><br><br>
      <input id="content" type="text" name="content" placeholder="Contenuto..."><br><br>
      <input id="submit-btn" type='submit' value="Pubblica">
     <!-- <p id="form-message"></p> -->
    </form>

    <div id="blog-container">
        <p>Caricamento articoli...</p>
    </div>


    <div id="box">
      <section id="infofine">

        <div class="info-box">
          <h1>Contatti</h1>
          <p>info@villamirador.it</p>
          <p>+39 095 7082890</p>
        </div>

        <div class="info-box">
          <h1>Dove siamo</h1>
          <p>Strada Provinciale,<br/>
            Zafferana Milo 23,<br/>
            95019 Zafferana Etnea CT</p>
          <h1>Orari di ricevimento</h1>
          <p>Martedì-Domenica<br/>
            09:30 – 13:00 / 14:30 – 19:30,<br/>
            Lunedì chiusi</p>
        </div>

        <div class="info-box">
          <h1>Menu principale</h1>
          <a>Ricevimenti<br/></a>
          <a>Le Sale<br/></a>
          <a>Virtual Tour<br/></a>
          <a>Eventi<br/></a>
          <a>Blog<br/></a>
          <a>Contatti<br/></a>
        </div>

        <div class="info-box">
          <h1>Informazioni legali</h1>
          <a>Privacy Policy<br/></a>
          <a>Cookie policy<br/></a>
        </div>

      </section>
    </div>

    <footer>
      <p>© 2021 Villa Mirador tutti i diritti riservati – P.iva 03890900875</p>
    </footer>
    
  </body>
</html>
