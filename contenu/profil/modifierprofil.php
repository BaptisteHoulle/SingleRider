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
                <h2 id="titre_sexe">Sexe</h2>
                <div class="radiobutton">
                    <input type="radio" id="choix1_sexe" name="genre" value="homme">
                    <label for="choix1">Homme</label>
                </div>
                <div class="radiobutton">
                    <input type="radio" id="choix2_sexe" name="genre" value="femme">
                    <label for="choix2">Femme</label> 
                </div>
            </div>
            <div id="localisation_modif">
                <h2 class="titre_localisation">Localisation</h2>
                <div class="radiobutton">
                    <input type="radio" id="choix_1" name="localiser" value="oui">
                    <label for="choix1">Oui</label>
                </div>
                <div class="radiobutton">
                    <input type="radio" id="choix_2" name="localiser" value="non">
                    <label for="choix2">Non</label> 
                </div>
            </div>
            <div id="titrePreferences">
                Mes préférences
            </div>
            <div id="preferences">
                <div id="titre_discussion">
                    <h2>Discussion :</h2>
                </div>
                <div id="icon1_pref">
                    <i class="fab fa-discourse"></i>
                </div>
                <div id="discussion_modif">
                    <input type="radio" id="choix1" name="discussion" value="discret">
                    <label for="choix1">Discrète(e)</label>
                    <input type="radio" id="choix2" name="discussion" value="alaise">
                    <label for="choix2">Plutôt à l'aise</label>
                    <input type="radio" id="choix3" name="discussion" value="parlebeaucoup">
                    <label for="choix2">Parle beaucoup</label>
                </div>
                <div id="titre_preference">
                    <h2>Préférences :</h2>
                </div>
                <div id="icon2_pref">
                    <i class="fas fa-heart"></i>
                </div>
                <div id="preferences_modif">
                    <input type="checkbox" id="genrepref1" name="genrepref1" value="Homme">
                    <label for="vehicle1"> Homme</label>
                    <input type="checkbox" id="genrepref2" name="genrepref2" value="Femme">
                    <label for="vehicle2"> Femme</label>
                    <input type="checkbox" id="genrepref3" name="genrepref3" value="LesDeux">
                    <label for="vehicle3"> Les deux</label>
                </div>
                <div id="titre_typerecherche">
                    <h2>Types de recherches :</h2>
                </div>
                <div id="icon3_pref">
                    <i class="fas fa-search"></i>
                </div>
                <div id="recherche_modif">
                    <input type="checkbox" id="type1" name="type1" value="samuser">
                    <label for="vehicle1">S'amuser</label>
                    <input type="checkbox" id="type2" name="type2" value="amour">
                    <label for="vehicle2">Rencontre amoureuse</label>
                    <input type="checkbox" id="type3" name="type3" value="amis">
                    <label for="vehicle3">Se faire des amis</label>
                </div>
                <div id="titre_typeparc">
                    <h2>Types de parcs :</h2>
                </div>
                <div id="icon4_pref">
                    <i class="fab fa-fort-awesome-alt"></i>
                </div>
                <div id="parc_modif">
                <input type="checkbox" id="typeparc6" name="typeparc6" value="gsensation">
                    <label for="vehicle3">Grosse sensation</label> 
                    <input type="checkbox" id="typeparc5" name="typeparc5" value="sensation">
                    <label for="vehicle3">Sensation</label> 
                    <input type="checkbox" id="typeparc2" name="typeparc2" value="proche">
                    <label for="vehicle2">Proche</label>
                    <input type="checkbox" id="typeparc3" name="typeparc3" value="aquatique">
                    <label for="vehicle3">Aquatique</label>
                    <input type="checkbox" id="typeparc4" name="typeparc4" value="thematise">
                    <label for="vehicle3">Thématisé</label> 
                    <input type="checkbox" id="typeparc1" name="typeparc1" value="familiale">
                    <label for="vehicle1">Familiale</label>
                </div>
                <div id="titre_loisir">
                    <h2>Loisirs :</h2>
                </div>
                <div id="icon5_pref">
                    <i class="fas fa-running"></i>
                </div>
                <div id="texte_loisir">
                    <textarea placeholder="Pêcher, faire du sport, écouter de la musique,voyager.."></textarea>
                </div>
                <div id="btn_enregistrer_modif">
                    <input type="submit" name="enregistrer_modif" value="Enregistrer">
                </div>
            </div>
        </div>
        </form>
        <hr>
        <form id="formulaire2" method="post" action="#">
            <div id="contenu_modif2">
                <div id="titremodifiermdp">
                    Modifier son mot de passe
                </div>
                <div id="ancienmdp_modif">
                    Ancien mot de passe<input type="text" name="modifancienmdp" id="modifancienmdp">
                </div>
                <div id="newmdp_modif">
                    Nouveau mot de passe<input type="text" name="modifnewmdp" id="modifnewmdp">
                </div>
                <div id="confirmnewnmdp_modif">
                    Confirmation du nouveau mot de passe<input type="text" name="modifconfirmmdp" id="modifconfirmmdp">
                </div>
                <div id="btn_mdp_modif">
                    <input type="submit" name="mdp_modif" value="Modifier le mot de passe">
                </div>
            </div>
        </form>
        <hr>
        <div id="deco_supp">
            <div id="deconnexion_modif">
                <a id="deco_modif" href="../deconnexion/deconnexion.php">
                    Déconnexion
                </a>
            </div>
            <div id="supprimer_modif">
                <button onclick="confirmDelete()" id="supprcompte_modif">
                    Supprimer le compte
                </button> 
            </div>
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
    </body>
</html>