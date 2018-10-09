<?php
	$polaczenie = mysqli_connect("localhost","root","","ogloszenia");
	
	$kat = $_POST["kat"];
	$podkat = $_POST["podkat"];
	$tytul = $_POST["tytul"];
	$tresc = $_POST["tresc"];
	
	mysqli_query($polaczenie, "INSERT INTO ogloszenie (uzytkownik_id, kategoria, podkategoria, tytul, tresc) VALUES ('1','$kat','$podkat','$tytul','$tresc')");
	
	mysqli_close($polaczenie);
	
	header("Location: formularz.html");
?>