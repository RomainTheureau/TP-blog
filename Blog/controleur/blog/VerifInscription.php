<?php
include_once('../../modele/connexion_sql.php');


//Vérification des infos pour l'inscription
//Vérification du pseudo
function verifPseudo()
{
	global $bdd;
	$req=$bdd->prepare('SELECT pseudo FROM membres');
	$req->execute(array(
		'pseudo' => isset($pseudo)));
	$pseudo=$req->fetch();
	
	if(isset($pseudo)==!empty($_POST['pseudo']))
	{
		echo '<div class="infosNonValide">' . 'Le pseudonyme ' . isset($pseudo) . 'est déjà utilisé. Veuillez en choisir un autre' . '</div>';
	}
	else 
	{
		echo '<div class="infosValide">' . 'Vous pouvez utilisé(e)s ce pseudo' . '</div>';
	}
}

//validité du mot de passe
function verifMdp()
{
	if(!empty($_POST['pass']) == !empty($_POST['confirmpass']))
	{
	echo '<div class="infosValide">' . 'Le mot de passe est correct' . '</div>';
	}
	else
	{
	echo '<div class="infosNonValide">' . 'Les mots de passe saisit sont différents' . '</div>';
	}
}

//validité de l'email
function verifEmail()
{
	if(preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}.#",isset($_POST['email'])))
	{
	echo '<div="infosValide">' . 'L\'adresse mail saisit est valide' . '</div>';
	}
	else
	{
	echo '<div="infosnonValide">' . 'Veuillez saisir une adresse mail valide' . '</div>';
	}
}

//On hache le mdp de nouveau
$pass_hache=sha1(isset($_POST['pass']));

//Si toutes les infos sont vérifier on les insères dans la base
	$requete=$bdd->prepare('INSERT INTO membres(pseudo,pass,email,date_inscription) VALUES (:pseudo,:pass,:email,CURDATE())');
	$requete->execute(array(
	'pseudo'=>isset($pseudo),
	'pass'=>isset($pass_hache),
	'email'=>isset($email)));

//CONNEXION DU MEMBRE
	$req=$bdd->prepare('SELECT id FROM membres WHERE pseudo= :pseudo AND pass= :pass');
	$req->execute(array(
		'pseudo' => isset($pseudo),
		'pass' => $pass_hache
	));
	$resultat = $req -> fetch();

	if (!$resultat)
		{
			echo '<div class="infosNonValide>"' . 'Mauvais identifiant ou mot de passe !' . '</div>';
		}
		else
		{
			session_start();
			$_SESSION['id'] = $resultat['id'];
			$_SESSION['pseudo'] = $pseudo;
			echo 'Vous êtes connecté ' . $pseudo . '!';
		}
					
//CONNEXION AUTO
if(!empty($_POST['connexion_auto']))
{
	setcookie('login',isset($_SESSION['pseudo']),300,null,null,false,true);
	setcookie('pass_hache',isset($_SESSION['pass_hache']),300,null,null,false,true);
}


include_once('../../vue/blog/inscription.php');
?>