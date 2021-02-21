<!doctype html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title>Connexion - Single Rider</title>
		<link rel="stylesheet" href="css/styleConnexion.css">
		<script src=""></script>
	</head>
	<body>
    <div id="page">
        <h1 id="titre">Connexion utilisateur</h1>
        <div id="form">
        <form method="post">
            Email <br><input type="email" name="email"><br>
            Mot de passe <br><input type="password" name="mdp"><br>
            <input type="submit" name="connexion" value="Connexion"><br>
        </form>
        </div>
        <?php
          if(isset($_REQUEST['connexion']))
          {
              include('C:\wamp64\www\GitSingleRider\SingleRider\bdd.php');
              include('C:\wamp64\www\GitSingleRider\SingleRider\outils.php');

              $lien=mysqli_connect(SERVEUR,LOGIN,MDP,BASE);
              $email=nettoyage($lien,$_REQUEST['email']);
              $mdp=md5($_REQUEST['mdp']);

              $req="SELECT * FROM membre WHERE email='$email' AND mdp='$mdp'";
              $res=mysqli_query($lien,$req);
              if(!$res)
              {
                  echo "Erreur SQL: $req<br>".mysqli_error($lien);
              }
              else
              {
                  $nb=mysqli_num_rows($res);
                  $tableau=mysqli_fetch_array($res);

                  if(($nb==1)and($tableau['actif']==1))
                  {
                    session_start();
                    $_SESSION['id_membre']=$tableau['id_membre'];
                    $_SESSION['nom_membre']=$tableau['nom_membre'];
                    $_SESSION['prenom_membre']=$tableau['prenom_membre'];
                    $_SESSION['adressemail_membre']=$tableau['adressemail_membre'];
                    $_SESSION['admin_membre']=$tableau['admin_membre'];

                    mysqli_close($lien);
                    header("Location: C:\wamp64\www\GitSingleRider\SingleRider\contenu\accueil\index.php");
                  }
                  else
                  {
                    echo "Informations incorrectes ou compte non activé<br>";
                  }
              }
              mysqli_close($lien);
          }
        ?>
		<div id="retour">
			<a href="../accueil/index.php">Retour à l'accueil</a>
		</div>
          </div>
    </body>
</html>