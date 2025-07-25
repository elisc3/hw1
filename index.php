
<!DOCTYPE html>

<?php
  include_once "loggato.php";
  if (!isset($_SESSION["page"]))
    session_start();
  $_SESSION["page"]="index.php";
  // print_r($_SESSION);
?>

<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Villa Mirador</title>
    
    <link rel="stylesheet" href="index.css">

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
      <div id="intestazione">
        <h1>Romantica e</br>Suggestiva</h1>
        <p>Per vivere ogni momento come in una favola<br></p>
      </div>
    </header>

    <div id="utente">
      <?php 
        // session_start();
        // if(isset($_SESSION['_mirador_user'])){
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

    <div id="meteo">
      <img src="img/meteo.png">
    </div>

    <div id="mappa">
      <img src="img/mappa.jpg">
    </div>
    
    <section id="paragrafo1">
        <div id="par1block1">
          <img src="https://www.villamirador.it/wp-content/uploads/sala-aurora-villa-mirador-ricevimenti-catania.jpeg" />
        </div>
        <div id="par1blockt">
          <h1>Ricevimenti Catania</br>Villa matrimoni Catania</br>Villa Mirador</h1>
          <p>
            Villa Mirador è un’oasi di bellezza e fascino nel cuore 
            dell’entroterra etneo, terrazza panoramica sopra la splendida costa jonica. 
            Romantica e sofisticata, la location vi avvolgerà in un’atmosfera magica,
            dove ogni particolare sarà personalizzato per diventare il riflesso 
            dei vostri sogni e desideri.</p>
          <p>
            La residenza è circondata da un giardino che ospita un’artistica piscina, 
            magico sfondo per i vostri eventi serali, grazie ai suggestivi giochi
            di luci e di melodie. 
            Il nostro personale altamente qualificato sarà lieto di consigliarvi 
            lungo tutto il percorso che vi condurrà alla realizzazione del vostro ricevimento.
            </p>
        </div> 
        <div id="par1block">
          <img src="https://www.villamirador.it/wp-content/uploads/villa-mirador-zafferana-etnea.jpg" />
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

    <section id="paragrafo3">
      <div id="par3block">
        <img src="img/mirador1.png"/>
      </div>

      <div id="par3blockt">
        <p >
          Situata ai piedi dell’Etna, a pochi km da Catania, Villa Mirador sarà la cornice ideale per decorare i giorni più belli della vostra vita. Gli ambienti interni della lussuosa residenza antica che ospita la villa sono il connubio perfetto tra tradizione e innovazione.
        </p>
        <p >
          Dal menù agli allestimenti, ogni particolare sarà curato e personalizzato per dare a ogni evento uno stile irripetibile. Gli arredi raffinati creano ambienti intimi e accoglienti, a cui fanno da sfondo gli incantevoli scorci siciliani dell’Etna e dello Jonio.
        </p>
        <p >
          Le sale vi affascineranno grazie alla loro eleganza e ai giochi di luci e di acqua. L’alta professionalità del suo staff e la continua ricerca di soluzioni originali e creative contraddistinguono da sempre Villa Mirador nell’arte del ricevimento e del banqueting etneo.            
        </p>
      </div>
    </section>

    <section id="paragrafo4">
      <h1>Rendi unici e indimenticabili i </br>giorni più belli della tua vita.</h1>
      <p>Scopri i nostri servizi e scegli la soluzione migliore per coronare il tuo ricevimento</p>
      <a class="button">Richiedi un appuntamento</a>
    </section>

    <section id="tripadvisor">
      <img src="img/TripAdvisor_Logo.svg">
    </section>

    <div id="box">
      <section  id="newsletter">
        <div class="newsletter-box">
          <h1>Iscriviti alla newsletter</h1>
          <p>Iscriviti alla newsletter di Villa Mirador e resta sempre aggiornato sugli eventi,
             tendenze, curiosità e promozioni.</p>
        </div>

        <div class="newsletter-box" >
          <div>
            <input type="text" placeholder="Nome" >
            <input type="text" placeholder="Cognome">
          </div>

          <div>
            <input type="text" placeholder="Inserisci il tuo indirizzo email">
            <input type="button" value="Iscriviti" />
          </div>
          <div>
            <input type="checkbox" />
              Presa visione della privacy policy, acconsento al trattamento dei dati personali per l'iscrizione alla newsletter e l'invio di comunicazioni commerciali e promozionali.
          </div>
        </div>
      </section>

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
