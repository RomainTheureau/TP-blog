<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
    <head>
        <title>Mon blog - Connexion</title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <link href="Blog/vue/blog/style.css" rel="stylesheet" type="text/css" /> 
    </head>
        
    <body>
		<h1> Connectez-vous </h1>
		
		<form action="../../blog.php" method="post">
			<label for ="pseudo"><strong>Pseudo </strong></label><input type="text" id="pseudo" name="pseudo"/><br/><br/>
			<label for ="password"><strong>Mot de passe </strong></label><input type="password" id="password" name="pass"/><br/><br/>
			<label for ="connexion_auto">Connexion automatique </label><input type="checkbox" id="connexion_auto" name="connexion_auto" /><br/><br/>
			
			<input type="submit" value="Se connecter"/>
			
		
		</form>
		