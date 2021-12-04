<?php 
use Autoloade\Autoload;
use Database\DBConnection;

$erreur = '';
if(isset($_POST['envoyer'])){
    if(!empty($_POST['nom']) AND !empty($_POST['prenom'])){
        require "./asset/Database/DBConnection.php";
    require "./asset/Database/Autoload.php";
    Autoload::register();
    $connect = new DBConnection();
    $connect->insert($_POST['nom'] , $_POST['prenom'] ,$_POST['tel'] ,$_POST['email'] ,$_POST['matricule']);
    }else{
        $erreur = "
            <div style= 'color:white;
                background-color:red;
                text-align:center;
                padding:10px;
                border-radius:8px;
                position:absolute;
                top:5%;
                left:50%;
                transform:translate(-50%,-5%);
                transition: all ease-in-out;'>Veuillez rempli tout les champs</div>";
    }
    
}
    
?>

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
    <di class="container">
            <?php
              echo $erreur;
            ?>
        <form action="" method="POST">
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
                            <label for="email">Email</label>
                            <input class="champ" type="email" name="email" id="email">
                        </p>
                        <p class="input matriculeLoko">
                            <label for="matricule">Matricule Loko</label>
                            <input class="champ" type="text" name="matricule" id="matricule">
                            <input type="checkbox" name="condition" id="condition"><a href="">J'ai lu et j'accepte les règles</a>
                        </p>
                        
                        <div class="valide">
                            <p><button class="retour"><i class="fas fa-arrow-left"></i></button></p>
                            <p><input class="envoyer" type="submit" value="Valider" name="envoyer"></p>
                        </div>
                    </div>
                    
                
            </div>
            
        </form>
    </div>
    <script src="asset/js/shadow.js"></script>
    <script src="asset/js/nex-page.js"></script>
    <script src="asset/js/toogle.js"></script>
</body>
</html>