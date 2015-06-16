<?php
// prÃ©paration des constantes de connexion Ã  mysql
define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_MDP", "");
define("DB_NAME", "prepatestjuin");


// constant contenant la racine 

define("CHEMIN_RACINE", "http://localhost/php/prepa-test-juin");




// nom des dossier de destination par rapport à la racine de destination  des images 

$dossier_ori = CHEMIN_RACINE."images/originales/";  //dossier de l'image originale 
$dossier_gd =  CHEMIN_RACINE."images/affichees/";  //dossier de l'image pour l'affichage
$dossier_mini = CHEMIN_RACINE. "images/miniatures/";  //dossier des miniatures 


//tailles des images d'affichage proportionnelle en pixels 

$grande_large = 850; //taille maximale en largeur 
$grande_haute = 700;  //taille maximale en hauteur 

// qualité de l'image d'affichage  (jpg de 0 à 100)
$grande_qualite = 80; 

// qualité d'affichage de la miniature (jpg de 0 à 100)
$mini_qualite = 10; 






// Taille des miniatures coupées et centrées  en pixels 

$mini_large= 100;   //taille maximale en largeur 
$mini_haute= 120;  //taille maximale en hauteur 