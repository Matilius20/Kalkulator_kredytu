<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
    <meta charset="utf-8" />
    <title>Kalkulator kredytu</title>
    <link rel="stylesheet" href="https://unpkg.com/purecss@2.0.5/build/pure-min.css">
</head>
<body>

     
<div style="width:98%; margin: 1em auto;">
    
<form action="<?php print(_APP_ROOT);?>/app/calc_credit.php" method="post" class="pure-form pure-form-stacked"> 
    <legend>Kalkulator kredytu</legend>
    <fieldset>
        <label for = "id_Loan"> Kwota kredytu <br> <label>
        <input id = "id_Loan" type = "text" name = "Loan" value="<?php out($Loan) ?>" />
        <br />
        <label for = "id_Years"> Ilość lat <br> <label>
        <input id = "id_Years" type = "text" name = "Years" value="<?php out($Years) ?>" />
        <br />       
        <label for = "id_Interest"> Oprocentowanie <br> <label>
        <input id = "id_Interest" type = "text" name = "Interest" value="<?php out($Interest) ?>" />
        <br />       
    </fieldset>
    
    <input type="submit" value="Oblicz miesięczną ratę kredytu" class = "pure-button pure-button-primary" /> 
    <div style="width:100%; margin: 2em auto;">
    <a href="<?php print(_APP_ROOT); ?>/app/security/logout.php" class="pure-button pure-button-active">Wyloguj</a>
    
</div>
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


<?php if (isset($rate)){ ?>
<div style=" margin: 10px; padding: 25px; border-radius: 22px; background-color: green; width:205px;">
<?php echo 'Rata miesięczna wynosi: '.round($rate,2); ?>
</div>
<?php } ?>

</body>
</html>



 