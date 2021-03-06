<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
    <meta charset="utf-8" />
    <title>Logowanie do kalkulatora kredytu</title>
    <link rel="stylesheet" href="https://unpkg.com/purecss@2.0.5/build/pure-min.css">
<body>

    
<div style="width:90%; margin: 2em auto;">
    
    
<form action="<?php print(_APP_ROOT); ?>/app/security/login.php" method="post" class="pure-form pure-form-stacked"> 
    <legend>Logowanie do kalkulatora kredytu</legend>
    <fieldset>
        <label for="id_Login">Nazwa użytkownika: </label> 
        <input id="id_Login" type="text" name="Login" value="<?php out($Login); ?>" />
        <br/>
        <label for="id_Password">Hasło: </label>
        <input id="id_Password" type="password" name="Password" />
        <br/>
    </fieldset>
    <input type="submit" value="Zaloguj" class="pure-button pure-button-primary"/>
</form>	

<?php
if (isset($messages)) {
	if (count ( $messages ) > 0) {
		echo '<ol style="margin: 10px; padding: 25px; border-radius: 22px; background-color: red; width:205px;">';
		foreach ( $messages as $key => $msg ) {
			echo '<li>'.$msg.'</li>';
		}
		echo '</ol>';
	}
}
?>

</div>

</body>
</html>