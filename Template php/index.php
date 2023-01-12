<?php

include 'db.php';

error_reporting(0);
session_start();

    if(isset($_POST['Ajouter'])) {
      $prenom = $_POST['prenom'];
      $nom = $_POST['nom'];
      $age = $_POST['age'];

      $sql = "SELECT * FROM partiel WHERE nom = ?";
      $stmt = mysqli_prepare($conn, $sql);
      mysqli_stmt_bind_param($stmt, "s", $nom);
      mysqli_stmt_execute($stmt);
      $result = mysqli_stmt_get_result($stmt);


    if (!$result->num_rows > 0) {
      $sql = "INSERT INTO partiel (prenom, nom, age)
      VALUES('$prenom', '$nom', '$age')";
      $result = mysqli_query($conn, $sql);
    }

    echo "<center> Votre inscription à bien été pris en compte ! </center>";

   }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion Utilisateurs</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <a href="ajouter.php" class="Btn_add"> <img src="images/plus.png"> Ajouter</a>

        <table>
            <tr id="items">
                <th>Nom</th>
                <th>Prénom</th>
                <th>Age</th>
                <th>Modifier</th>
                <th>Supprimer</th>
            </tr>
        </table>




    </div>
</body>

</html>