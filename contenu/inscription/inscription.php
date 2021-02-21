<!doctype html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title>Inscription - Single Rider</title>
		<link rel="stylesheet" href="../css/styleConnexion.css">
		<script src=""></script>
	</head>
	<body>
        <div id="page">
        <h1 id="titre">Inscription utilisateur</h1>
        <div id="form">
        <form method="post">
            Nom : <input type="text" name="nom"><br>
            Prénom : <input type="text" name="prenom"><br>
            Date de naissance : <input type="date" name="date"><br>
            Email : <input type="email" name="email"><br>
            Mot de passe :<input type="password" name="mdp1"><br>
            Confirmation :<input type="password" name="mdp2"><br>
            <input type="submit" name="inscription" value="Inscription"><br>
        </form>
        </div>
        <?php
            if(isset($_REQUEST['inscription']))
            {
                include('C:\wamp64\www\GitSingleRider\SingleRider\bdd.php');
                include('C:\wamp64\www\GitSingleRider\SingleRider\outils.php');

                $lien=mysqli_connect(SERVEUR,LOGIN,MDP,BASE);
                $nom=nettoyage($lien,$_REQUEST['nom']);
                $prenom=nettoyage($lien,$_REQUEST['prenom']);
                $date=nettoyage($lien,$_REQUEST['date']);
                $email=nettoyage($lien,$_REQUEST['email']);
                $mdp1=md5($_REQUEST['mdp1']);
                $mdp2=md5($_REQUEST['mdp2']);

                if($mdp1==$mdp2)
                {
                    $req="SELECT * FROM membre WHERE adressemail_membre='$email'";
                    $res=mysqli_query($lien,$req);
                    if(!$res)
                    {
                        echo "Erreur SQL: $req<br>".mysqli_error($lien);
                    }
                    else
                    {
                        $nb=mysqli_num_rows($res);
                        if($nb==0)
                        {
                            $req="INSERT INTO membre VALUES(NULL,'$nom','$prenom','','','','$date','$email','$mdp1',0,'',0,0,0)";
                            $res=mysqli_query($lien,$req);
                            if(!$res)
                            {
                                echo "Erreur SQL: $req<br>".mysqli_error($lien);
                            }
                            else
                            {
                                echo "Inscription réussie<br>";
                            }
                        }
                        else
                        {
                            echo "Adresse email déjà utilisée<br>";
                        }
                    }
                }
                else
                {
                    echo "Mot de passe différents<br>";
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