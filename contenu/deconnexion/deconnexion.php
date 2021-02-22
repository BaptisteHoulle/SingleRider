<?php
Session_start();
Session_destroy();
header("Location: ../accueil/index.php");

?>