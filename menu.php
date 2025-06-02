
<!DOCTYPE html>  <!-- serve? -->

<?php
  include_once "loggato.php";
  session_start();
  $_SESSION["page"]="menu.php";
  //print_r($_SESSION);
?>

<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Villa Mirador Menù</title>
    
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="menu.css">

    <script src="index.js" defer></script>
    <script src="menu.js" defer></script>

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
        //session_start();
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
        <h1>I Menù di Villa Mirador </h1>
    </header>
    
    <div id="menu">
    <div id="singolo_menu">
        <div><h2>Menù di Carne</h3></div>
        <div class="sottotitolo"><h3>Aperitivo di Benvenuto</h3></div>
        <div class="piatti">
            <div>• Taglieri di salumi</div>
            <div>• Mini tartare di manzo con crema di senape e crostino</div>
            <div>• Polpettine di vitello al limone</div>
            <div>• Arrosticini di agnello mignon</div>
            <div>• Calici di prosecco, cocktail analcolici, vini bianchi freschi</div>
        </div>
        <div class="sottotitolo"><h3>Antipasti</h3></div>
        <div class="piatti">
            <div>• Carpaccio di manzo con rucola, scaglie di Parmigiano e riduzione di balsamico</div>
            <div>• Flan di verdure con fonduta al formaggio e crumble croccante</div>
        </div>
        <div class="sottotitolo"><h3>Primi Piatti</h3></div>
        <div class="piatti">
            <div>• Ravioli di brasato al Barolo con burro e salvia</div>
            <div>• Risotto al tartufo e salsiccia mantecato al Castelmagno</div>
        </div>
        <div class="sottotitolo"><h3>Secondo Piatto</h3></div>
        <div class="piatti">
            <div>• Filetto di manzo in crosta con patate duchessa e carciofi trifolati</div>
        </div>
        <div class="sottotitolo"><h3>Dessert</h3></div>
        <div class="piatti">
            <div>• Torta</div>
            <div>• Buffet di dolci: mousse al cioccolato, mini cheesecake, panna cotta ai frutti di bosco</div>
            <div>• Frutta fresca e fontana di cioccolato</div>
        </div>
    </div>

    <div id="singolo_menu">
        <div><h2>Menù di Pesce</h3></div>
        <div class="sottotitolo"><h3>Aperitivo di Benvenuto</h3></div>
        <div class="piatti">
            <div>• Ostriche fresche con limone e pepe rosa</div>
            <div>• Tartare di tonno rosso con avocado e lime</div>
            <div>• Gamberi in tempura con salsa agrodolce</div>
            <div>• Insalata di mare tiepida con sedano e agrumi</div>
            <div>• Mini spiedini di polpo e patate</div>
            <div>• Bollicine di benvenuto, cocktail analcolici, vini bianchi aromatici</div>
        </div>
        <div class="sottotitolo"><h3>Antipasti</h3></div>
        <div class="piatti">
            <div>• Carpaccio di branzino con zeste di limone, pepe rosa e olio al basilico</div>
            <div>• Mazzancolle su crema di piselli e menta</div>
        </div>
        <div class="sottotitolo"><h3>Primi Piatti</h3></div>
        <div class="piatti">
            <div>• Risotto al profumo di mare con scampi e zafferano</div>
            <div>• Paccheri con ragù bianco di pescatrice e zucchine, profumo di limone</div>
        </div>
        <div class="sottotitolo"><h3>Secondo Piatto</h3></div>
        <div class="piatti">
            <div>• Filetto di rombo in crosta di patate con salsa al prosecco e asparagi</div>
        </div>
        <div class="sottotitolo"><h3>Dessert</h3></div>
        <div class="piatti">
            <div>• Torta</div>
            <div>• Buffet di dolci: babà al limoncello, tartellette alla crema e frutta, mousse al cocco</div>
            <div>• Frutta esotica fresca e piccola pasticceria</div>
        </div>
    </div>
    </div>

    <div id=
      <?php if (loggato())
                  echo("preferiti");
                else
                  echo("preferiti_off");
      ?>  >
        <div id=titolo>Vuoi personalizzare la tua carta del menù? <br> Proponi degli sfondi
          <button id="aggiungi">Aggiungi Sfondo</button>
          <button id="l_preferiti">Sfondi Preferiti</button>
        </div>
    </div>

    <div id="finestra_ricerca">
        <div class="contenuto">
            <button class="chiudi">X</button>
            <form id="ricerca">
                <input type="text" class="search-bar" name="s-bar" placeholder="Cerca sfondo...">
                <input id="submit-btn" type='submit' value="Cerca">    
            </form>
            <div class="show-img">
             
            </div>
        </div>
    </div>

    <div id="finestra_preferiti">
        <div class="contenuto">
            <button class="chiudi">X</button>
            <div class="show-img">
            </div>
            <div id="msg_pref">
              Non sono stati salvati sfondi
            </div>
        </div>
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
