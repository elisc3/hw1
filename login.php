<?php
    require_once 'db.php';
    require_once 'loggato.php';
   
    session_start();
    //print_r($_SESSION);
    // Verifica che l'utente sia già loggato, in caso positivo va direttamente alla home
    
    if (loggato()) {
        header('Location: index.php');
        exit;
    }

    if (!empty($_POST["username"]) && !empty($_POST["password"]) )
    {
        // Se username e password sono stati inviati connessione al DB
        $conn = mysqli_connect($db_mirador['host'], $db_mirador['user'], $db_mirador['password'], $db_mirador['name']) or die(mysqli_error($conn));

        $username = mysqli_real_escape_string($conn, $_POST['username']);
        // ID e Username per sessione, password per controllo
        $query = "SELECT * FROM utenti WHERE username = '".$username."'";
        // Esecuzione
        $res = mysqli_query($conn, $query) or die(mysqli_error($conn));
        
        if (mysqli_num_rows($res) > 0) {
            
            $entry = mysqli_fetch_assoc($res);
            
            if ($_POST['password'] == $entry['password']){
                // Imposto una sessione dell'utente
                $_SESSION["_mirador_username"] = $entry['username'];
                $_SESSION["_mirador_user"] = $entry['id'];
                mysqli_free_result($res);
                mysqli_close($conn);
                $args="";
                if ($_SESSION["page"]=="descrizione.php")
                    $args=$_SESSION["args"];
                header("Location: ".$_SESSION["page"].$args);
                exit;
            }
        }
        // Se l'utente non è stato trovato o la password non ha passato la verifica
        $error = "Username e/o password errati.";
    }
    else if (isset($_POST["username"]) || isset($_POST["password"])) {
        // Se solo uno dei due è impostato
        $error = "Inserisci username e password.";
    }

?>

<html>
    <head>
        <link rel='stylesheet' href='login.css'>

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Accedi</title>
    </head>
    <body>
        <div id="logo">
            <img src="https://www.villamirador.it/wp-content/uploads/2021/09/logo.png" />
        </div>
        <main class="login">
        <section class="main">
            <?php
                // Verifica la presenza di errori
                if (isset($error)) {
                    echo "<p class='error'>$error</p>";
                }
            ?>
            <form name='login' method='post'>
                <!-- Seleziono il valore di ogni campo sulla base dei valori inviati al server via POST -->
                <div class="username">
                    <label for='username'>Username</label>
                    <input type='text' name='username' 
                        <?php if(isset($_POST["username"])){echo "value=".$_POST["username"];} ?>
                    >
                </div>
                <div class="password">
                    <label for='password'>Password</label>
                    <input type='password' name='password' 
                        <?php if(isset($_POST["password"])){echo "value=".$_POST["password"];} ?>
                    >
                </div>
                <div class="submit-container">
                    <div class="login-btn">
                        <input type='submit' value="ACCEDI">
                    </div>
                </div>
            </form>
            <div class="signup"><h4>Oppure</h4></div>
            <div class="signup-btn-container"><a class="signup-btn" href="signup.php">ISCRIVITI</a></div>
        </section>
        </main>
    </body>
</html>