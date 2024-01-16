<?php
require_once("config.php");

if (!empty(isset($_GET["prenom"]))){
    if (!empty(isset($_GET["nom"]))) {
        if (!empty(isset($_GET["email"]))){
            $_GET['email'] = htmlspecialchars($_GET['email']);
            if (preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $_GET['email'])){
                if (!empty(isset($_GET["tel"]))) {
                    if (!empty(isset($_GET['message']))) {
                        # Preparation des données envoyé
                        $nom = htmlspecialchars($_GET["nom"]);
                        $prenom = htmlspecialchars($_GET["prenom"]);
                        $email = htmlspecialchars($_GET["email"]);
                        $tel = htmlspecialchars($_GET["tel"]);
                        $message = htmlspecialchars($_GET["message"]);
                                                                    
                        # Requete d'insersion des données dans la base de données
                        $req = $bdd->prepare("INSERT INTO `contact`(`nom`, `prenom`, `email`, `telephone`, `message`) VALUES(?, ?, ?, ?, ?)");
                        $req->execute(array($nom, $prenom, $email, $tel, $message));
                        if ($req == TRUE) {
                            $resultat = "Nous avons bien reçu votre message.\nNous vous répondrons très bientôt !"; 
                        }
                        else{
                            $resultat = "Une erreur innatendue est survenue lors de l'envoi de votre message. Veullez-rééssayer plus tard !";
                            #echo $resultat;
                        }
                    }
                    else{
                        $resultat = "Veuillez saisir votre message !";
                        #echo $resultat;
                    }  
                }
                else {

                    $resultat = "Veuillez renseigner votre numéro de téléphone";
                }
                                                   
            }
            else{
                $resultat = "L'adresse E-mail que vous avez renseigné n'est pas valide !";
                #echo $resultat;
            }
        }
        else{
            $message = "Veuillez renseigner votre adresse E-mail !";
            #echo $resultat;
        }
    }
    else{
            $resultat = "Veuillez renseigner votre nom !";
            #echo $resultat;
    }
}
else{
    $resultat = "Veuillez renseigner votre prénom !";
    #echo $resultat;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>notification</title>
</head>
<body>
    <style>
        body{
            background-image: url("ressources/images/img-paral.jpg");
            align-items: center;
            padding: 5%;
            font-size: 1.3em;
        }
        div{
            background-color: rgba(0, 0, 255, 0.63);;
            color: white;
            padding: 12%;
            text-align: center;
        }
        a{
            color: yellow;
        }
    </style>
    <div>
        <h1>GYM YONOS</h1>
        <?php 
            if (!empty(isset($resultat))) {
                echo $resultat;
                ?><script>alert("<?= $resultat; ?>")</script><?php
            }
        ?>
        <p>Cliquer <a href="index.php">ici</a> pour retourner à la page d'accueil</p>
    </div>
</body>
</html>