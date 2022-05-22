<?php
$stringa = 'Benvenuto developers affrontiamo il back-end, ma non scordiamoci il front-end';
// $parola_censurata = $_GET = ['censured'];   

if(isset($_GET['censured'])){
    $parola_censurata = $_GET['censured'];
}else {
    $parola_censurata = '';
    $stringa = 'inserisci una parola che sia contenuta nel testo';
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-badwords</title>
</head>
<body>
    <h1>Full Stack Developers</h1>
    <h2><?php echo $stringa ?></h2>
    <p><?php echo strlen($stringa) ?></p>

    <h3>titolo modificato</h3>
    <p><?php echo $stringa_modificata = str_replace($parola_censurata, '***', $stringa) ?></p>
    <p><?php echo strlen($stringa_modificata) ?></p>
    
</body>
</html>