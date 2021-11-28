<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="asset/css/style.css">
    <link rel="stylesheet" href="asset/fontawesome-free-6.0.0-beta3-web/css/all.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form action="" method="post">
            <div class="container__secondaire">
                
                <p class="titre">
                    INSCRIVEZ-VOUS 
                </p>
                <div class="bar-progression">
                    <p class="page1">1</p>
                    <p class="bar"></p>
                    <p class="page2">2</p>
                </div>
                <div class="inner">
                    <div class="inner-1">
                        <p class="input nom">
                            <label for="nom">Nom</label>
                            <input class="champ" type="text" name="nom" id="nom">
                        </p>
                        <p class="input prenom">
                            <label for="prenom">Prenom</label>
                            <input class="champ" type="text" name="prenom" id="prenom">
                        </p>
                        <div class="sexe">
                            <label for="sexe">Sexe</label>
                            <p>Homme</p>
                            <p class="bar-sexe"><span class="point"></span></p>
                            <p>Femme</p>
                        </div>
                        <div class="btn-suivant">
                            <button>Suivant</button>
                        </div>
                        
                    </div>
                    <div class="inner-2">
                        <p class="input tel">
                            <label for="tel">Telephone</label>
                            <input class="champ" type="tel" name="tel" id="tel">
                        </p>
                        <p class="input mail">
                            <label for="tel">Email</label>
                            <input class="champ" type="mail" name="tel" id="tel">
                        </p>
                        <p class="input matriculeLoko">
                            <label for="matricule">Matricule Loko</label>
                            <input class="champ" type="text" name="matricule" id="matricule">
                            <input type="checkbox" name="condition" id="condition"><a href="">J'ai lu et j'accepte les règles</a>
                        </p>
                        
                        <div class="valide">
                            <p><button class="retour"><i class="fas fa-arrow-left"></i></button></p>
                            <p><input class="envoyer" type="submit" value="Envoyer"></p>
                        </div>
                    </div>
                </div>
                
            </div>
        </form>
    </div>
    <footer>
        <p class="fabrique ">Droit d'auteur ©2021 By Gninmin</p>
    </footer>
    <script src="asset/js/shadow.js"></script>
    <script src="asset/js/nex-page.js"></script>
    <script src="asset/js/toogle.js"></script>
</body>
</html>