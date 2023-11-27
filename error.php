<!-- 

Aquesta és la plana per a la gestió dels errors. 

Ho farem via variables de SESSIÓ que inclouran un número i una descripció

-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error</title>
</head>
<body>

<h1>Error</h1>

<?php
// Iniciem / Creem sessió
session_start();

// Si hi ha una variable de sessió amb el nom errorNumber, significa que hi ha error
if (isset($_SESSION['errorNumber']))
{
 // Visualitzem error
 echo "Error número " . $_SESSION["errorNumber"] .": " . $_SESSION["errorMsg"];
 
 // Eliminem les variables de sessió ja que ja les hem "consumit"
 unset($_SESSION['errorNumber']);
 unset($_SESSION["errorMsg"]);
}
else{
 echo "No hi ha cap error";
}

?>

<!-- Mostrem link per tornar a plana principal -->

<p>
    <a href="index.php"> Tornar </a>
</p>

</body>
</html>