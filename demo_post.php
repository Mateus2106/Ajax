<?php

if(isset($_POST["ano"])){
	
	if($_POST["ano"]==date('Y')){
		echo "<p>Confirmado!</p>
		<p>Este é o ano de ".$_POST["ano"]."</p>";
	}else{
		echo "<p>Este não é o ano de ".$_POST["ano"]."</p>";
	}
}else{
	echo "<p>Estamos no ano de ".date('Y')."</p>";
}