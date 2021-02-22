
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Single Rider - Présentation des parcs</title>
    <link rel="stylesheet" href="../../css/main.css">
    <script src="https://kit.fontawesome.com/531f7c49c9.js"></script>
    <link rel="stylesheet" href="file:///E:/fontawesome/css/all.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="file:///E:/jquery.js"></script>
</head>

<body>
    <nav>
        <div class="logo"><img src="../../images/logo_menu.png"
                alt="Logo de Single Rider avec un S jaune resprésentant les rails d'un coaster un un R bleu qui représente un train d'un coaster">
        </div>
        <label for="btn" class="icon">
            <span class="fa fa-bars"></span>
        </label>
        <input type="checkbox" id="btn" class="navinput">
        <ul>
            <li>
                <label for="btn-1" class="show">Mon compte<i class="fas fa-sort-down"></i></label>
                <a href="#">Mon compte</a>
                <input type="checkbox" id="btn-1" class="navinput">
                <ul>
                    <li><a href="#">Profil</a></li>
                    <li><a href="#">Connexion</a></li>
                    <li><a href="#">inscription</a></li>
                </ul>
            </li>
            <li>
                <label for="btn-2" class="show">Les parcs<i class="fas fa-sort-down"></i></label>
                <a href="#">Les parcs</a>
                <input type="checkbox" id="btn-2" class="navinput">
                <ul>
                    <li><a href="#">Présentation des parcs</a></li>
                    <li><a href="#">Actualités</a></li>
                </ul>
            </li>
            <li><a href="#" class="an">Annonces</a></li>
        </ul>
    </nav>
    <main>

        <header id="headerannonce">
            <h1>Annonces</h1>
        </header>

        <div class="contentannonce">
            <div class="annonce">
                <div class="annoncepresent">
                    <img src="image" alt="Photo de profil">
                    <p>Prénom nom</p>
                </div>
                <div class="annoncedescri">
                   <p>Description de l'annonce</p>
                        <div class="imgdescri"
                            style="background-image:url(image_de_l_annonce)" ;>             
                </div>
                <div class="likecom">   
                </div>
            </div>
        </div>
        <script src="main.js"></script>
</body>
</html>