<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=gym_yonos', 'root', '');
} 
catch (Exception $e) {
    die('Erreur : '.$e->getMessage());
}
?>