<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
    <head>
        <title>Mon blog - Inscription</title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <link href="Blog/vue/blog/style.css" rel="stylesheet" type="text/css" /> 
    </head>
        
    <body>
		<h1> Inscription </h1>
		<p>Veuillez remplir ce formulaire pour vous inscrire.</p><br/>
		<?php
			include_once('../../controleur/blog/VerifInscription.php');
		?>
		<form action="../../blog.php" method="post">
			<div class="inscription">
				<label for="pseudo"><strong>Pseudo </strong></label><input type="text" id="pseudo" name="pseudo"/><?php //verifPseudo(); ?><br/><br/>
				<label for="pass"><strong>Mot de passe </strong></label><input type="password" id="pass" name="pass"/><br/><br/>
				<label for="confimpass"><strong>Confirmation du mot de passe </strong></label><input type="password" id="confimpass" name="confirmpass"/><br/><br/>
				<label for="email"><strong>E-mail </strong></label><input type="email" id="email" name="email"/><br/><br/>
				
				<input type="submit" value="S'inscrire"/>
				
			</div>	
		
		</form>
	</body>
</html>