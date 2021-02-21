<?php
    session_start();
    session_unset();
    session_destroy();
    header("Location: C:\wamp64\www\GitSingleRider\SingleRider\contenu\accueil\index.php");
?>