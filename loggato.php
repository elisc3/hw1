<?php
    function loggato() {
        // Se esiste già una sessione, la ritorno, altrimenti ritorno 0
        if(isset($_SESSION['_mirador_user'])) {
            return $_SESSION['_mirador_user'];
        } else 
            return 0;
    }

?>