<?php

if(isset($_GET["ano"])){
	
	if($_GET["ano"]==date('Y')){
		echo "<p>Confirmado!</p>
		<p>Este é o ano de ".$_GET["ano"]."</p>";
	}else{
		echo "<p>Este não é o ano de ".$_GET["ano"]."</p>";
	}
}else{
	echo "<p>Estamos no ano de ".date('Y')."</p>";
}
