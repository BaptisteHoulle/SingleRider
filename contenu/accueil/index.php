<?php
	session_start();
	if(!isset($_SESSION['id_membre']) or !isset($_SESSION['nom_membre']) or !isset($_SESSION['prenom_membre']) or !isset($_SESSION['adressemail_membre']))
	{
		$connecte=false;
	}
	else
	{
		$connecte=true;
	}
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Accueil</title>
    <link rel="stylesheet" href="../../css/main.css">
    <script src="https://kit.fontawesome.com/531f7c49c9.js"></script>     
    <link rel="stylesheet" href="file:///E:/fontawesome/css/all.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="file:///E:/jquery.js"></script>
</head>

<body>
    <nav>
        <div class="logo">
            <a href="index.php"><img src="../../images/logo_menu.png"
            alt="Logo de Single Rider avec un S jaune resprésentant les rails d'un coaster un un R bleu qui représente un train d'un coaster"></a>
        </div>
        <label for="btn" class="icon">
            <span class="fa fa-bars"></span>
        </label>
        <input type="checkbox" id="btn">
        <ul>
            <li>
                <label for="btn-1" class="show">Mon compte<i class="fas fa-sort-down"></i></label>
                <a href="#">Mon compte</a>
                <input type="checkbox" id="btn-1">
                <ul>
                    <li><a href="../profil/profil.php">Profil</a></li>
                    <li><a href="../connexion/connexion.php">Connexion</a></li>
                    <li><a href="../inscription/inscription.php">Inscription</a></li>
                </ul>
            </li>
            <li>
                <label for="btn-2" class="show">Les parcs<i class="fas fa-sort-down"></i></label>
                <a href="#">Les parcs</a>
                <input type="checkbox" id="btn-2">
                <ul>
                    <li><a href="#">Présentation des parcs</a></li>
                    <li><a href="../actualites/actualites.php">Actualités</a></li>
                </ul>
            </li>
            <li><a href="#" class="an">Annonces</a></li>
        </ul>
    </nav>
    <script>
        $('.icon').click(function () {
            $('span').toggleClass("cancel");
        });
    </script>
        <header id="header_accueil">
            <center><div id="titre">Single Rider</div></center>
        </header>
        <div id="contenu_accueil">
            <div id="information">
                <h3><bold>Single Rider</bold> est un site de rencontre qui permet de réunir
                    des personnes passionnées par les parcs d'attractions !
                </h3>
                <br>
                <h3>Vous y trouverez des annonces de membres, mais aussi <br>
                des informations sur tous les parcs d'attractions !</h3>
            </div>
            <div id="titre2">
                <h2>Quelques annonces</h2>
            </div>
            <div id="btn">
                <button onclick="window.location.href='../annonces/annonces.php'">Voir d'autres annonces</button>        
            </div>
        </div>
        <footer>
            <div id="colonne1">
                <h2>Réseaux Sociaux</h2>
                <div id="reseaux1">
                    <h3>Single Rider</h3>
                </div>
                <div id="icon1">
                    <i class="fab fa-facebook-square"></i>
                </div>

                <div id="reseaux2">
                    <h3>@SingleRider</h3>
                </div>
                <div id="icon2">
                    <i class="fab fa-twitter"></i>
                </div>
                <div id="reseaux3">
                    <h3>@SingleRider</h3>
                </div>
                <div id="icon3">
                    <i class="fab fa-instagram"></i>
                </div>
                <div id="reseaux4">
                    <h3>Single Rider</h3>
                </div>
                <div id="icon4">
                    <i class="fab fa-youtube"></i>
                </div>
                <div id="texteReseaux">
                    <h3>Pour nous contacter rapidement ou pour voir les différentes actualités sur les rencontres de Single Rider,
                        les réseaux sociaux sont un atout car nous répondons rapidement !
                    </h3>
                </div>
            </div>
            <div id="colonne2">
                <h2>Explorer Single Rider</h2>
                <div id="page1">
                    <a href="../profil/profil.php"><h3>Profil</h3></a>
                </div>
                <div id="page2">
                    <a href="../inscription/inscription.php"><h3>Inscription</h3></a>
                </div>
                <div id="page3">
                    <a href="../connexion/connexion.php"><h3>Connexion</h3></a>
                </div>
                <div id="page4">
                    <a href="../presentation/presentation.php"><h3>Présentation des parcs</h3></a>
                </div>
                <div id="page5">
                    <a href="../actualites/actualites.php"><h3>Actualités</h3></a>
                </div>
                <div id="page6">
                    <a href="../annonces/annonces.php"><h3>Annonces</h3></a>
                </div>
                <div id="page7">
                    <a href="../contact/contact.php"><h3>Contact</h3></a>
                </div>
            </div>
            <div id="colonne3">
                <h2>Contacter Single Rider</h2>
                <div id="infos_tel">
                    <h3>Pour toutes informations concernant le site internet où en cas de problème vous pouvez
                        nous contacter au : 03 24 59 64 70.
                    </h3>
                </div>
                <div id="infos_telTab">
                    <h3>03 24 59 64 70</h3>
                </div>
                <div id="icon1">
                    <i class="fas fa-phone-alt"></i>                
                </div>
                <div id="infos_adresse">
                    <h3>Pour pouvoir nous retrouver :<br>
                    Campus Sup Ardennes, <br>9A Rue Claude Chrétien,<br>08000 Charleville-Mézières</h3>
                </div>
                <div id="infos_adresseTab">
                    <h3>Campus Sup Ardennes BP,<br>9A Rue Claude Chrétien,<br>08000 Charleville-Mézières</h3>
                </div>
                <div id="icon2">
                    <i class="fas fa-map-marker-alt"></i>
                </div>
                <div id="infos_site">
                    <h3>Pour vous rendre chez Single Rider, il suffit de longer la rue perpendiculaire de la 
                        pataterie en sortie d'autoroute puis de tourner à gauche au bout de la rue !
                    </h3>
                </div>
                <div id="icon3">
                    <i class="fas fa-route"></i>
                </div>
            </div>
            <div id="mentionslegales">
                <a href="../mention/mention.html"><h3>Mentions légales</h3></a>
            </div>
            <div id="politique">
                <a href="../politique/politique.html"><h3>Politique de confidentialité</h3></a>
            </div>
            <div id="plansite">
                <a href="../plan/plan.html"><h3>Plan du site</h3></a>
            </div>
            <div id="cookies">
                <a href="../cookies/cookies.html"><h3>Protection sur la vie privée et cookies</h3></a>
            </div>
        </footer>
</body>
</html>