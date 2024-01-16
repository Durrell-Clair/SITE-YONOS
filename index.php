<?php
session_start();
if (isset($_SESSION["notif"])) {
    ?><script>alert("<?= $_SESSION["notif"]; ?>")</script><?php
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="ressources/css/style1.css">
    <title>GYM YONOS</title>
</head>
<body>
    <!-- Debut header -->
    <header>
        <!-- Debut barre de navigation -->
        <nav id="nav">
            <ul id="scroll-container">
                <li><a href="#home">ACCUEIL</a></li>
                <li><a href="#tools">MATÉRIEL</a></li>
                <li><a href="#tarif">TARIFS</a></li>
                <li><a href="#contact">CONTACT</a></li>
            </ul>
        </nav>
        <!-- Fin barre de navigation -->

        <!-- Debut banniere -->
        <section class="banner">
            <h1>GYM YONOS</h1>
            <p>Dépassez vos limites.</p>
            <p>Entrainez-vous.</p>
            <p>Progressez</p>
            <a href="#tools"><button>Équipement</button></a><a href="#contact"><button>Contact</button></a>
        </section>
        <!-- Fin banniere -->
    </header>
    <!-- Fin header -->

    <!-- Debut section se prendre en main -->
    <section class="home" id="home">
        <h2>SE (RE)PRENDRE EN MAIN</h2>

        <!-- Debut section proposition -->
        <section class="proposition">
            <div class="propo">
                <div class="img-1">&nbsp;</div>
                <div class="presentation">
                    <h4>Faire parti d'un groupe</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat odit, adipisci officia dolore ad ex.</p>
                </div>
            </div>
            <div class="propo">
                <div class="img-2">&nbsp;</div>
                <div class="presentation">
                    <h4>Atteindre ses objectifs</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat odit, adipisci officia dolore ad ex.</p>
                </div>
            </div>
            <div class="propo">
                <div class="img-3">&nbsp;</div>
                <div class="presentation">
                    <h4>Exploser ses limites</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat odit, adipisci officia dolore ad ex.</p>
                </div>
            </div>
        </section>
        <!-- Fin section proposition -->

        <!-- Debut section lieux -->
        <section class="lieux">
            <div class="lieu">
                <h3>Salle de sport</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore ipsum corporis corrupti?</p>
                <a href="#tarif"><button>Voir les prix</button></a>
            </div>
            <div class="lieu">
                <h3>Cross Fit</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore ipsum corporis corrupti?</p>
                <a href="#tarif"><button>Voir les prix</button></a>
            </div>
        </section>
        <!-- Fin section lieux -->
    </section>
    <!-- Fin section se prendre en main -->

    <!-- Debut section Equipements -->
    <section class="tools" id="tools">
        <h1>LES ÉQUIPEMENTS</h1>
        <div class="line-tools-1">
            <aside class="img-tools-1 btn-modale" data-index="1">&nbsp;</aside>
            <aside class="img-tools-2 btn-modale" data-index="2">&nbsp;</aside>
            <aside class="img-tools-3 btn-modale" data-index="3">&nbsp;</aside>
        </div>
        <div class="line-tools-2">
            <aside class="img-tools-4 btn-modale" data-index="4">&nbsp;</aside>
            <aside class="img-tools-5 btn-modale" data-index="5">&nbsp;</aside>
            <aside class="img-tools-6 btn-modale" data-index="6">&nbsp;</aside>
        </div>
        <div class="line-tools-3">
            <aside class="img-tools-7 btn-modale" data-index="7">&nbsp;</aside>
            <aside class="img-tools-8 btn-modale" data-index="8">&nbsp;</aside>
            <aside class="img-tools-9 btn-modale" data-index="9">&nbsp;</aside>
        </div>
    </section>
    <!-- Fin Equipements -->

    <!-- Debut modal -->

    <section class="bloc-modale">
        <div class="bloc-img">
            <img src="ressources/images/img9-equip.jpg" alt="matériel de la salle de sport">
            <aside class="fermeture-modale">X</aside>
        </div>
    </section>

    <!-- Fin modal -->

    <!-- Debut section des tarifs -->
    <section class="courage-box">
        <h1>COURAGE.</h1>
    </section>
    <section class="tarif" id="tarif">
        <h1>TARIFS</h1>
        <div class="tarif-basic">
            <aside class="basic">
                <h3>BASIQUE</h3>
                <div class="container">
                    <div class="chiffre">20</div>
                    <div class="gauche">
                       <div class="unite">XAF</div>
                       <div class="duree">/mois</div>
                    </div>
                </div>
                <div class="options">
                    <span><label><img class="icon" src="ressources/images/check.svg"> </label>Salle libre</span>
                    <span><label><img class="icon" src="ressources/images/check.svg"> </label>24h/24</span>
                    <span><label><img class="icon" src="ressources/images/cross.svg"> </label>Coach</span>
                    <span><label><img class="icon" src="ressources/images/cross.svg"> </label>CrossFit</span>
                    <span><label><img class="icon" src="ressources/images/cross.svg"> </label>Massage</span>
                </div>
            </aside>
            <aside class="complet">
                <h3>COMPLET</h3>
                <div class="container">
                    <div class="chiffre">40</div>
                    <div class="gauche">
                       <div class="unite">XAF</div>
                       <div class="duree">/mois</div>
                    </div>
                </div>
                <div class="options">
                    <span><label><img class="icon" src="ressources/images/check.svg"> </label>Salle libre</span>
                    <span><label><img class="icon" src="ressources/images/check.svg"> </label>24h/24</span>
                    <span><label><img class="icon" src="ressources/images/check.svg"> </label>Coach</span>
                    <span><label><img class="icon" src="ressources/images/check.svg"> </label>CrossFit</span>
                    <span><label><img class="icon" src="ressources/images/cross.svg"> </label>Massage</span>
                </div>
            </aside>
        </div>
        <div class="tarif-pro">
            <aside class="complet">
                <h3>PRO</h3>
                <div class="container">
                    <div class="chiffre">60</div>
                    <div class="gauche">
                       <div class="unite">XAF</div>
                       <div class="duree">/mois</div>
                    </div>
                </div>
                <div class="options">
                    <span><label><img class="icon" src="ressources/images/check.svg"> </label>Salle libre</span>
                    <span><label><img class="icon" src="ressources/images/check.svg"> </label>24h/24</span>
                    <span><label><img class="icon" src="ressources/images/check.svg"> </label>Coach</span>
                    <span><label><img class="icon" src="ressources/images/check.svg"> </label>CrossFit</span>
                    <span><label><img class="icon" src="ressources/images/check.svg"> </label>Massage</span>
                </div>
            </aside>
        </div>
    </section>
    <!-- Fin section des tarifs -->

    <!-- Debut section contact -->
    <section class="contact" id="contact">
        <h2>Section Contact</h2>
        
        <!-- Debut formulaire -->
        <form method="GET" action="form.php">
            <p id="results" class="tooltip incorrect"></p>
            <p>PRENOM</p>
            <span id="lb_prenom" class="tooltip incorrect"></span>
            <input type="text" id="prenom" name="prenom">
            <p>NOM</p>
            <span id="lb_nom" class="tooltip incorrect"></span>
            <input type="text" id="nom" name="nom">
            <p>E-MAIL</p>
            <span id="lb_email" class="tooltip incorrect"></span>
            <input type="mail" id="email" name="email">
            <p>TELEPHONE</p>
            <span id="lb_tel" class="tooltip incorrect"></span>
            <input type="tel" id="tel" name="tel">
            <p>MESSAGE</p>
            <span id="lb_message" class="tooltip incorrect"></span>
            <textarea name="message" id="message" cols="30" rows="15"></textarea><br>
            <button type="submit" id="send">Envoyer</button>
        </form>
        <!-- Fin formulaire -->
    </section>
    <!-- Fin section contact -->

    <!-- Debut footer -->
    <footer>
        <p>Tous droits réservés ©</p>
    </footer>
    <!-- Fin footer -->

    <!------------------------------- On importe nos différents scripts ---------------------------------------------------------->
    <script src="ressources/javascript/navscript.js"></script>     <!-- script lié à la barre de bnavigation -->
    <!-- <script src="ressources/javascript/form.js"></script>          script de vérification et de soumission du formulaire -->
    <script src="ressources/javascript/app.js"></script>
</body>
</html>