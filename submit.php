<?php

session_start();

//se accediamo al file senza fare submit della form
if (!isset($_POST['submit'])) {
    die('I dati non sono validi');
}

if ($_POST['captcha'] != $_SESSION['captcha']) {
    die('Codice captcha non valido');
}

echo 'Codice captcha valido. Procedi con l\'invio della mail';
