<?php
    //require_once 'auth.php';
    require_once 'db.php';

    $PASSWORD_MIN = 4;

    session_start();

    // Verifica l'esistenza di dati POST
    if (!empty($_POST["username"]) && !empty($_POST["password"]) && !empty($_POST["email"]) && 
        !empty($_POST["nome"]) && !empty($_POST["cognome"]) && !empty($_POST["conferma"]))
    {
        $error = array();
        $conn = mysqli_connect($db_mirador['host'], $db_mirador['user'], $db_mirador['password'], $db_mirador['name']) or die(mysqli_error($conn));

        
        // USERNAME
        // Controlla che l'username rispetti il pattern specificato
        if(!preg_match('/^[a-zA-Z0-9_]{1,10}$/', $_POST['username'])) {
            $error[] = "Non sono ammessi caratteri differenti da lettere maiuscole e minuscole, numeri e _";
        } else {
            $username = mysqli_real_escape_string($conn, $_POST['username']);
            // Cerco se username esiste già 
            $query = "SELECT username FROM utenti WHERE username = '$username'";
            $res = mysqli_query($conn, $query);
            if (mysqli_num_rows($res) > 0) {
                $error[] = "Username non disponibile";
            }
        }
        // PASSWORD
        if (strlen($_POST["password"]) < $PASSWORD_MIN) {
            $error[] = "Caratteri insufficienti";
        } 
        
        // EMAIL
        if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $error[] = "Email non valida";
        } else {
            $email = mysqli_real_escape_string($conn, strtolower($_POST['email']));
            $res = mysqli_query($conn, "SELECT email FROM utenti WHERE email = '$email'");
            if (mysqli_num_rows($res) > 0) {
                $error[] = "Email utilizzata da un altro utente";
            }
        }


        // REGISTRAZIONE NEL DATABASE
        if (count($error) == 0) { //non c'è errore
            $nome = mysqli_real_escape_string($conn, $_POST['nome']);
            $cognome = mysqli_real_escape_string($conn, $_POST['cognome']);
            $password = mysqli_real_escape_string($conn, $_POST['password']);


            $query = "INSERT INTO utenti(username, password, name, surname, email) VALUES('$username', '$password', '$nome', '$cognome', '$email')";
            
            if (mysqli_query($conn, $query)) {
                $_SESSION["_mirador_username"] = $_POST["username"];
                $_SESSION["_mirador_user"] = mysqli_insert_id($conn);
                mysqli_close($conn);
                header("Location: index.php");
                exit;
            } else {
                $error[] = "Errore di connessione al Database";
            }
        }

        mysqli_close($conn);
    }
    else if (isset($_POST["username"])) {
        $error = array("Riempi tutti i campi");
    }

?>


<html>
    <head>
        <link rel='stylesheet' href='signup.css'>
        <script src='signup.js' defer></script>

        <meta nome="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">

        <title>Iscriviti</title>
    </head>
    <body>
        <div id="logo">
            <img src="https://www.villamirador.it/wp-content/uploads/2021/09/logo.png" />
        </div>
        <main>
        <section class="main_left">
        </section>
        <section class="main_right">
            <form nome='signup' method='post' enctype="multipart/form-data" autocomplete="off">
               
                    <div class="nome"> 
                        <label for='nome'>Nome</label>
                        <!-- Se il submit non va a buon fine, il server reindirizza su questa stessa pagina, quindi va ricaricata con 
                            i valori precedentemente inseriti -->
                        <input type='text' name='nome' 
                            <?php if(isset($_POST["nome"])){echo "value=".$_POST["nome"];} ?> 
                        >
                        <div> <img src="./img/x.svg"/> <span>Inserisci il tuo nome</span></div>
                    </div>
                    <div class="cognome">
                        <label for='cognome'>Cognome</label>
                        <input type='text' name='cognome' 
                            <?php if(isset($_POST["cognome"])){echo "value=".$_POST["cognome"];} ?> 
                        >
                        <div> <img src="./img/x.svg"/> <span>Inserisci il tuo cognome</span></div>
                    </div>
              
                <div class="username">
                    <label for='username'>Nome utente</label>
                    <input type='text' name='username' 
                        <?php if(isset($_POST["username"])){echo "value=".$_POST["username"];} ?>
                    >
                    <div> <img src="./img/x.svg"/> <span>Nome utente non disponibile</span></div>
                </div>
                <div class="email">
                    <label for='email'>Email</label>
                    <input type='text' name='email' 
                        <?php if(isset($_POST["email"])){echo "value=".$_POST["email"];} ?>
                    >
                    <div> <img src="./img/x.svg"/> <span>Indirizzo email non valido</span></div>
                </div>
                <div class="password">
                    <label for='password'>Password</label>
                    <input type='password' name='password' 
                        <?php if(isset($_POST["password"])){echo "value=".$_POST["password"];} ?>
                    >
                    <div> <img src="./img/x.svg"/> <span>Numero di caratteri non sufficiente</span></div>
                </div>
                <div class="conferma"> 
                    <input type='checkbox' name='conferma' value="1" 
                        <?php if(isset($_POST["conferma"])){echo $_POST["conferma"] ? "checked" : "";} ?>
                    >
                    <label for='conferma'>Accetto termini e condizioni</label>
                </div>
                <?php if(isset($error)) {
                    foreach($error as $err) {
                        echo "<div class='errore'><img src='./img/x.svg'/><span>".$err."</span></div>";
                    }
                } ?>
                <div class="submit">
                    <input type='submit' value="Registrati" id="submit">
                </div>
            </form>
            <div class="signup">Hai un account? <a href="login.php">Accedi</a>
        </section>
        </main>
    </body>
</html>