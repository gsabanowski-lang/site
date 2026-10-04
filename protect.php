<?php
session_start(); 
if (isset($_SESSION['count']) && ($_SESSION['count'] > 4)) {
	header('Location: http://www.google.com/');
} else {
?> 
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<title>Texte</title>
<style>
</style>
</head>
<body>
	<?php
	$password = 'motdepasse';
	if ((isset($_POST['password']) && ($_POST['password'])) != $password) {
		if (!isset($_SESSION['count'])) {
			$_SESSION['count'] = 0;
		} else {
			$_SESSION['count']++;
		}
	?> 
<h1>Connexion</h1>
<form name="form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>"> 
<p><label for="password">Mot de passe</label> <input type="password" title="Saisissez le mot de passe" name="password" /></p> 
<p><input type="submit" name="submit" value="Connexion" /></p> 
</form>
	<?php
	} else { ?> 
<p>Voici le texte.</p>
<?php 
	}
} 
?>
</body>
</html>