<!--

Aquesta serà la plana que mostrarà tots els registres amb tots els camps de la BBDD 

Per mostrar tots els camps:
1) Instanciem un objecte de la classe UsuarisBL
2) Cridem al mètode llistaUsuaris que em retorna el resultat de la consulta

-->

<?php
// Requerim l'arxiu de classe per si no està ja carregat
require_once ("BL/UsuarisBL.php");

// Instanciem objecte
$usuaris = new UsuarisBL ();

// Cridem al mètode i agafem resultats
$result = $usuaris->llistaUsuaris();  

// Si hi ha alguna cosa a mostrar, fem el recorregut un a un de tots els registres
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      echo "id: " . $row["id"]. " - DNI: " . $row["dni"] . "<br>";
    }
  } else {
    echo "No hi ha usuaris";
  }

?>   

<!--  Mostrem link cap a la plana d'inici -->

<a href="index.html"> Tornar a l'inici </a>

</body>
</html>





