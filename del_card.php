<?php
include('config.php');
echo $ID = $_GET['id'];
mysqli_query($conn, "DELETE FROM addcard WHERE id='$ID'");
header('location: card.php');
?>