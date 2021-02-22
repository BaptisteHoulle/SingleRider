<?php

?>


<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Profil</title>
    <link rel="stylesheet" href="../../css/main.css">
    <script src="https://kit.fontawesome.com/531f7c49c9.js"></script> 
    <link rel="stylesheet" href="file:///E:/fontawesome/css/all.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="file:///E:/jquery.js"></script>
</head>

<body>
    <nav>
        <div class="logo">
            <a href="../accueil/index.php"><img src="../../images/logo_menu.png"
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
                    <li><a href="../profil/profil.html">Profil</a></li>
                    <li><a href="#">Connexion</a></li>
                    <li><a href="#">Inscription</a></li>
                </ul>
            </li>
            <li>
                <label for="btn-2" class="show">Les parcs<i class="fas fa-sort-down"></i></label>
                <a href="#">Les parcs</a>
                <input type="checkbox" id="btn-2">
                <ul>
                    <li><a href="#">Présentation des parcs</a></li>
                    <li><a href="#">Actualités</a></li>
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
        <form id="formulaire" method="post" action="#">
        <div id="contenu_modif1">
            <div id="modif_imagePDP">
                <img src="../../images/Baptiste.jpg">
            </div>
            <div id="modif_imgbanniere">
                <img src="../../images/banner.jpg">
            </div>
            <div id="modif_pdp">
                <label for="modifpdp">Modifier ma photo de profil</label><input type="file" name="image" id="modifpdp">
            </div>
            <div id="modif_banniere">
                <label for="modifbanniere">Modifier ma bannière</label><input type="file" name="image2" id="modifbanniere">
            </div>
            <div id="modif_nom">
                <label for="modifnom">Modifier mon nom</label><input type="text" name="modifnom" id="modifnom">
            </div>
            <div id="modif_prenom">
            <label for="modifpnom">Modifier mon prénom</label><input type="text" name="modifpnom" id="modifpnom">
            </div>
            <div id="modif_bio">
                <label for="modifbio">Modifier ma bio</label><input type="text" name="modifbio" id="modifbio" maxlength="60">
            </div>
            <div id="titreInformations">
                Mes informations
            </div>
            <div id="adressemail_modif">
                <label for="adressemail">Adresse mail</label><input type="email" name="adressemail" id="adressemail">
            </div>
            <div id="datenaissance_modif">
                <label for="datenaissance">Date de naissance</label><input type="date" name="datenaissance" id="datenaissance">
            </div>
            <div id="sexe_modif">
                <label id="titre_sexe">Sexe</label>
                <input type="radio" id="choix1" name="genre" value="homme">
                <label for="choix1">Homme</label>
                <input type="radio" id="choix2" name="genre" value="femme">
                <label for="choix2">Femme</label>
            </div>
            <div id="localisation_modif">
                <label id="titre_localisation">Localisation</label>
                <input type="radio" id="choix1" name="localiser" value="oui">
                <label for="choix1">Oui</label>
                <input type="radio" id="choix2" name="localiser" value="non">
                <label for="choix2">Non</label>
            </div>
            <div id="titrePreferences">
                Mes préférences
            </div>
            <div id="preferences">
                
            </div>
            </form>
            <!--<div id="titre_mdp">
                Modifier son mot de passe
            </div>
            <div id="ancienmdp_modif">
                Ancien mot de passe :
            </div>
            <div id="newmdp_modif">
                Nouveau mot de passe :
            </div>
            <div id="confirmnewnmdp_modif">
                Confirmation du nouveau mot de passe :
            </div>
            <a id="deco_modif" href="../deconnexion/deconnexion.php">
                Déconnexion
            </a>
            <button onclick="confirmDelete()" id="supprcompte_modif">Supprimer le compte
            </button>

            <script type="text/javascript">
                function confirmDelete(){
                    var answer = window.confirm("Voulez-vous vraiment supprimer le compte ?");
                    if(answer){
                        event.preventDefault();
                        document.location.href="../supprimer/supprimer.php";
                    }
                    return false;
                }
            </script>
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
                <h3>Profil</h3>
            </div>
            <div id="page2">
                <h3>Inscription</h3>
            </div>
            <div id="page3">
                <h3>Connexion</h3>
            </div>
            <div id="page4">
                <h3>Présentation des parcs</h3>
            </div>
            <div id="page5">
                <h3>Actualités</h3>
            </div>
            <div id="page6">
                <h3>Annonces</h3>
            </div>
            <div id="page7">
                <h3>Contact</h3>
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
            <h3>Mentions légales</h3>
        </div>
        <div id="politique">
            <h3>Politique de confidentialité</h3>
        </div>
        <div id="plansite">
            <h3>Plan du site</h3>
        </div>
        <div id="cookies">
            <h3>Protection sur la vie privée et cookies</h3>
        </div>
    </footer>            -->

</body>
</html>