<?php

include_once('./modele/connexion_sql.php');


if (!isset($_GET['section']) OR $_GET['section'] == 'index')
{
    include_once('./controleur/blog/index.php');
}

if (isset($_SESSION['id']) AND isset($_SESSION['pseudo']))
{
    echo 'Bonjour ' . $_SESSION['pseudo'];
}
else
{
	echo '<div class="connexion">Bonjour Visiteur !' . '<a href="./vue/blog/inscription.php"> Inscrivez-vous ! </a>' . 'ou <a href="./vue/blog/connexion.php">connectez-vous ici</div>' ;
}