<?php
  session_start();
  include('C:\wamp64\www\codecolinephp\bdd.php');
  include('C:\wamp64\www\codecolinephp\outils.php');

  $lien=mysqli_connect(SERVEUR,LOGIN,MDP,BASE);
  $email=$_SESSION['adressemail_membre'];
  $req="DELETE FROM membre WHERE adressemail_membre='$email'";
  if(!$lien->query($req) === TRUE)
  {
      echo "Erreur SQL: $req<br>".mysqli_error($lien);
  }
  else
  {
	Session_destroy();
	$lien->close();
	header("Location: ../accueil/index.php");
  }
?>