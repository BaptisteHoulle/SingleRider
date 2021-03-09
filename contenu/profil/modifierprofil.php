<?php
//Start session
session_start();
include('C:\wamp64\www\codecolinephp\bdd.php');
include('C:\wamp64\www\codecolinephp\outils.php');

//Retrieve user ID
$id = $_SESSION['id_membre'];

//Create SQL Link
$lien=mysqli_connect(SERVEUR,LOGIN,MDP,BASE);

//Get user preference info
$req2="SELECT * FROM preference WHERE id_membre='$id'";
$res2=mysqli_query($lien,$req2);

//If no info
if(!$res2){
    echo "Erreur SQL: $req<br>".mysqli_error($lien);
    $_SESSION['discussion']="";
    $_SESSION['sexPref']="";
    $_SESSION['researchType']="";
    $_SESSION['parkType']=array("");
    $_SESSION['hobbies']="";
}
//If Info
else{
    $tableau=mysqli_fetch_array($res2);

    //Push to session param
    $_SESSION['discussion']=$tableau['discussion_preference'];
    $_SESSION['sexPref']=$tableau['preferencesexe_preference'];
    $_SESSION['researchType']=$tableau['typerecherche_preference'];
    $parkT = "bonjour".$tableau['typeparc_preference'];
    $park = array("");
    if(strpos($parkT,'grosses')){
        array_push($park, "grosses");
    }
    if(strpos($parkT,'sensation')){
        array_push($park, "sensation");
    }
    if(strpos($parkT,'thematise')){
        array_push($park, "thematise");
    }
    if(strpos($parkT,'proche')){
        array_push($park, "proche");
    }
    if(strpos($parkT,'aquatique')){
        array_push($park, "aquatique");
    }
    if(strpos($parkT,'familiale')){
        array_push($park, "familiale");
    }
    $_SESSION['parkType']=$park;
    $_SESSION['hobbies']=$tableau['loisir_preference'];
}

//Modify profil when post is called
function modifyProfile($id, $lien, $nom, $prenom, $bio, $adressemail, $datenaissance, $genre, $discussion, $sexPref, $researchType, $parkType, $hobbies){

    
    if($genre =="homme"){
        $sexe = 0;
    }
    else{
        $sexe = 1;
    }
    if(!empty($parkType)){
        $N = count($parkType);
        $parktype='';
        for($i=0; $i < $N; $i++)
        {
          $parktype .= $parkType[$i];
        }
    }
    else{
        $parktype='';
        $parkType= array("");
    }
    //Update member info
    $req="UPDATE membre SET nom_membre= '$nom', prenom_membre='$prenom', bio_membre='$bio', datenaissance_membre='$datenaissance', adressemail_membre='$adressemail', sexe_membre='$sexe' WHERE id_membre='$id'";
    $res=mysqli_query($lien,$req);

    //Check if a preference is set for this user
    $req2="SELECT * FROM preference WHERE id_membre='$id'";
    $res2=mysqli_query($lien,$req2);
    if(!$res){
        echo "Erreur SQL: $req<br>".mysqli_error($lien);
    }
    else{
        $nb=mysqli_num_rows($res2);
        //If preference is not set
        if($nb != 1){
            //Insert info
            $req3="INSERT INTO preference VALUES(NULL,'$discussion','$sexPref','$researchType','$parktype','$hobbies',0,0,0,0,0, '$id')";
            $res3=mysqli_query($lien,$req3);

            //Set session param
            $_SESSION['nom_membre']=$nom;
            $_SESSION['prenom_membre']=$prenom;
            $_SESSION['adressemail_membre']=$adressemail;
            $_SESSION['bio_membre']=$bio;
            $_SESSION['datenaissance_membre']=$datenaissance;
            if($sexe == 0){
                $_SESSION['sexe_membre']= "Homme";
            }
            else{
                $_SESSION['sexe_membre']= "Femme";
            }
            $_SESSION['discussion']=$discussion;
            $_SESSION['sexPref']=$sexPref;
            $_SESSION['researchType']=$researchType;
            $_SESSION['parkType']=$parkType;
            $_SESSION['hobbies']=$hobbies;
            
            //Close sql link
            mysqli_close($lien);
        }
        //If preference is set
        else{
            //Update info
            $req3="UPDATE preference SET discussion_preference='$discussion', preferencesexe_preference='$sexPref',typerecherche_preference='$researchType',typeparc_preference='$parktype',loisir_preference='$hobbies' WHERE id_membre='$id'";
            $res3=mysqli_query($lien,$req3);

            //Set session param
            $_SESSION['nom_membre']=$nom;
            $_SESSION['prenom_membre']=$prenom;
            $_SESSION['adressemail_membre']=$adressemail;
            $_SESSION['bio_membre']=$bio;
            $_SESSION['datenaissance_membre']=$datenaissance;
            if($sexe == 0){
                $_SESSION['sexe_membre']= "Homme";
            }
            else{
                $_SESSION['sexe_membre']= "Femme";
            }

            $_SESSION['discussion']=$discussion;
            $_SESSION['sexPref']=$sexPref;
            $_SESSION['researchType']=$researchType;
            $_SESSION['parkType']=$parkType;
            $_SESSION['hobbies']=$hobbies;
            
             //Close sql link
            mysqli_close($lien);
        }                   
    }       
}

//Launch post action
if ((isset($_POST['modifnom']) && isset($_POST['modifpnom']) && isset($_POST['modifbio']) && isset($_POST['adressemail']) && isset($_POST['datenaissance']) && isset($_POST['genre']))){
    if(empty($_POST['parkType'])){
        modifyProfile($id, $lien, $_POST['modifnom'], $_POST['modifpnom'],$_POST['modifbio'],$_POST['adressemail'],$_POST['datenaissance'],$_POST['genre'],$_POST['discussion'],$_POST['genrepref'],$_POST['researchType'],'',$_POST['hobbies']);
    }
    else{
        modifyProfile($id, $lien, $_POST['modifnom'], $_POST['modifpnom'],$_POST['modifbio'],$_POST['adressemail'],$_POST['datenaissance'],$_POST['genre'],$_POST['discussion'],$_POST['genrepref'],$_POST['researchType'],$_POST['parkType'],$_POST['hobbies']);
    }
}
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
                    <?php if(isset($_SESSION['id_membre'])): ?>
                        <li><a href="../profil/profil.php">Profil</a></li>
                        <li><a href="../deconnexion/deconnexion.php">Déconnexion</a></li>
                    <?php else: ?>
                        <li><a href="../connexion/connexion.php">Connexion</a></li>
                        <li><a href="../inscription/inscription.php">Inscription</a></li>
                    <?php endif; ?>
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
                <label for="modifnom">Modifier mon nom</label><input type="text" value="<?php echo $_SESSION['nom_membre']?>" name="modifnom" id="modifnom">
            </div>
            <div id="modif_prenom">
            <label for="modifpnom">Modifier mon prénom</label><input type="text" value="<?php echo $_SESSION['prenom_membre']?>" name="modifpnom" id="modifpnom">
            </div>
            <div id="modif_bio">
                <label for="modifbio">Modifier ma bio</label><input type="text" name="modifbio" value="<?php echo $_SESSION['bio_membre']?>" id="modifbio" maxlength="60">
            </div>
            <div id="titreInformations">
                Mes informations
            </div>
            <div id="adressemail_modif">
                <label for="adressemail">Adresse mail</label><input type="email" value="<?php echo $_SESSION['adressemail_membre']?>" name="adressemail" id="adressemail">
            </div>
            <div id="datenaissance_modif">
                <label for="datenaissance">Date de naissance</label><input type="date" value="<?php echo $_SESSION['datenaissance_membre']?>" name="datenaissance" id="datenaissance">
            </div>
            <div id="sexe_modif">
                <h2 id="titre_sexe">Sexe</h2>
                <div class="radiobutton">
                    <input type="radio" id="choix1_sexe" name="genre" value="homme" <?php echo ($_SESSION['sexe_membre']=='Homme')?'checked':'' ?>>
                    <label for="choix1">Homme</label>
                </div>
                <div class="radiobutton">
                    <input type="radio" id="choix2_sexe" name="genre" value="femme" <?php echo ($_SESSION['sexe_membre']=='Femme')?'checked':'' ?>>
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
                    <input type="radio" id="choix1" name="discussion" value="discret" <?php echo ($_SESSION['discussion']=='discret')?'checked':'' ?>>
                    <label for="choix1">Discrète(e)</label>
                    <input type="radio" id="choix2" name="discussion" value="alaise" <?php echo ($_SESSION['discussion']=='alaise')?'checked':'' ?>>
                    <label for="choix2">Plutôt à l'aise</label>
                    <input type="radio" id="choix3" name="discussion" value="parlebeaucoup" <?php echo ($_SESSION['discussion']=='parlebeaucoup')?'checked':'' ?>>
                    <label for="choix2">Parle beaucoup</label>
                </div>
                <div id="titre_preference">
                    <h2>Préférences :</h2>
                </div>
                <div id="icon2_pref">
                    <i class="fas fa-heart"></i>
                </div>
                <div id="preferences_modif">
                    <input type="radio" id="genrepref1" name="genrepref" value="Homme" <?php echo ($_SESSION['sexPref']=='Homme')?'checked':'' ?>>
                    <label for="vehicle1"> Homme</label>
                    <input type="radio" id="genrepref2" name="genrepref" value="Femme" <?php echo ($_SESSION['sexPref']=='Femme')?'checked':'' ?>>
                    <label for="vehicle2"> Femme</label>
                    <input type="radio" id="genrepref3" name="genrepref" value="LesDeux" <?php echo ($_SESSION['sexPref']=='LesDeux')?'checked':'' ?>>
                    <label for="vehicle3"> Les deux</label>
                </div>
                <div id="titre_typerecherche">
                    <h2>Types de recherches :</h2>
                </div>
                <div id="icon3_pref">
                    <i class="fas fa-search"></i>
                </div>
                <div id="recherche_modif">
                    <input type="checkbox" id="type1" name="researchType" value="samuser" <?php echo ($_SESSION['researchType']=='samuser')?'checked':'' ?>>
                    <label for="vehicle1">S'amuser</label>
                    <input type="checkbox" id="type2" name="researchType" value="amour" <?php echo ($_SESSION['researchType']=='amour')?'checked':'' ?> >
                    <label for="vehicle2">Rencontre amoureuse</label>
                    <input type="checkbox" id="type3" name="researchType" value="amis" <?php echo ($_SESSION['researchType']=='amis')?'checked':'' ?>>
                    <label for="vehicle3">Se faire des amis</label>
                </div>
                <div id="titre_typeparc">
                    <h2>Types de parcs :</h2>
                </div>
                <div id="icon4_pref">
                    <i class="fab fa-fort-awesome-alt"></i>
                </div>
                <div id="parc_modif">
                    <input type="checkbox" id="typeparc6" name="parkType[]" value="grosses" <?php echo (in_array('grosses', $_SESSION['parkType']))?'checked':'' ?>>
                    <label for="vehicle3">Grosse sensation</label> 
                    <input type="checkbox" id="typeparc5" name="parkType[]" value="sensation" <?php echo (in_array('sensation', $_SESSION['parkType']))?'checked':'' ?>>
                    <label for="vehicle3">Sensation</label> 
                    <input type="checkbox" id="typeparc2" name="parkType[]" value="proche" <?php echo (in_array('proche', $_SESSION['parkType']))?'checked':'' ?>>
                    <label for="vehicle2">Proche</label>
                    <input type="checkbox" id="typeparc3" name="parkType[]" value="aquatique" <?php echo (in_array('aquatique', $_SESSION['parkType']))?'checked':'' ?>>
                    <label for="vehicle3">Aquatique</label>
                    <input type="checkbox" id="typeparc4" name="parkType[]" value="thematise" <?php echo (in_array('thematise', $_SESSION['parkType']))?'checked':'' ?>>
                    <label for="vehicle3">Thématisé</label> 
                    <input type="checkbox" id="typeparc1" name="parkType[]" value="familiale" <?php echo (in_array('familiale', $_SESSION['parkType']))?'checked':'' ?>>
                    <label for="vehicle1">Familiale</label>
                </div>
                <div id="titre_loisir">
                    <h2>Loisirs :</h2>
                </div>
                <div id="icon5_pref">
                    <i class="fas fa-running"></i>
                </div>
                <div id="texte_loisir">
                    <input type="textarea" name="hobbies" placeholder="Pêcher, faire du sport, écouter de la musique,voyager.." value="<?php echo $_SESSION['hobbies'] ?>"></input>
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