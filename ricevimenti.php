
<!DOCTYPE html>

<?php
  include_once "loggato.php";
  session_start();
  $_SESSION["page"]="ricevimenti.php";
  // print_r($_SESSION);
?>

<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Villa Mirador Ricevimenti</title>
    
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="ricevimenti.css">

    <script src="index.js" defer></script>
   
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
        <a href="index.php"> <img src="https://www.villamirador.it/wp-content/uploads/2021/09/logo.png" /></a>
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
    
    <header>
      <div id="intestazione2">
        <h1>Magica location per</br>ricevimenti</h1>
        <p>L’esperienza e la professionalità dei maestri del banqueting al tuo servizio<br></p>
      </div>
    </header>

    <div id="utente">
      <?php 
        // session_start();
        // if(isset($_SESSION['_mirador_user'])){
        if (loggato()) {
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

    <section id="paragrafo3">
      
      <div id="par3blockt">
        <h1>La location</h1>
        <p >
          Villa Mirador è il luogo ideale per festeggiare matrimoni, compleanni, battesimi, cresime e qualsiasi altro evento meriti una celebrazione speciale. I verdi vialetti vi guideranno fra i giardini della villa e le sue splendide fontane, scenario ideale per eventi all’aperto e romantiche passeggiate.
        </p>
        <p >
            Lo spazioso bordo piscina renderà indimenticabili alcuni dei vostri momenti più importanti, grazie ai suoi arredamenti ricercati e agli scorci panoramici.        
        </p>
        <p >
          Le sale, ampie e raffinate, stupiranno i vostri ospiti con un concerto di luci, colori e stili differenti, dal moderno al più classico.            
        </p>
      </div>

      <div id="par3block">
        <img src="img/mirador1.png"/>
      </div>

    </section>
    
    <section id="paragrafo3">
      <div id="par3block">
        <img src="img/mirador11.jpg"/>
      </div>

      <div id="par3blockt">
        <h1>Lo staff</h1>
        <p >
          Villa Mirador vanta uno staff altamente preparato e cortese, che contribuirà alla perfetta riuscita del vostro ricevimento.
        </p>
        <p >
          Le nostre hostess e i nostri steward vi assisteranno durante tutta la durata del ricevimento, agevolando il sereno svolgimento dell’evento.
        </p>
        <p >
          Grazie alla loro maestria, i nostri chef sedurranno i palati più raffinati con ricette uniche, realizzate solo con prodotti di stagione accuratamente selezionati. I piatti proposti dai nostri chef sono un mix perfetto di tradizione e creatività, garanzia del sapore e della ricchezza della prelibata gastronomia siciliana.
        </p>
      </div>
    </section>

    <section id="paragrafo2">
      <div id="testo">
        <div class="par2block">
          <h1>Una raffinata sala ricevimenti a </br>pochi passi dall'Etna</h1>
        </div>
        <div class="par2block">
          <p>
            Ampie e luminose, le sale ricevimento di Villa Mirador daranno un tocco romantico
            e sofisticato ai vostri eventi grazie ai loro arredi ricercati.
            Approfitta dei nostri virtual tour per scoprire i giochi di luci, 
            colori e stili che contraddistinguono ogni sala.
          </p>
        </div>
      </div>

      <div id="galleria">
        <div class="galleria-box" id="g1" data-pos="0">
          <img id="par2g" src="img/mirador5.jpg">
          <div class="center">Sala Antares</div>
        </div>
      </div>
    </section>

    

    <section id="tripadvisor">
      <img src="img/TripAdvisor_Logo.svg">
    </section>

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
