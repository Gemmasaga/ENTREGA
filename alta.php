<?php
require_once ("BL/UsuarisBL.php");

//AGEFIR DADES

if ($_POST)
{
    $usuari = new UsuarisBL ();
    $resultat = $usuari->altaUsuari($_POST["nombre"],$_POST["apellidos"],$_POST["email"],$_POST["alias"],$_POST["password"]);

    // Si el resultat és diferent de 0, hi ha hagut un error
    if ( $resultat ){
        header('Location: error.php');
    }
    // Si no, retornem a index.html
    else{
        header('Location: index.html');
    }
    

}

?>