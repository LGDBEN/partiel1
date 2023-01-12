<?php
 
$sql = "DELETE FROM partiel WHERE id=?";

if ($conn->query($sql) === TRUE) {
  echo "Enregistrement supprimé avec succés";
} else {
  echo "Erreur lors de la suppression : " . $conn->error;
}

$conn->close();
?>
