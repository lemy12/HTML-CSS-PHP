<?php
	$imie = $_POST['imie'];
	$nazwisko = $_POST['nazwisko'];
	$telefon = $_POST['telefon'];
	$email = $_POST['email'];
	
	$polaczenie = mysqli_connect("localhost","root","","ogloszenia");
	mysqli_query($polaczenie,"INSERT INTO uzytkownik (imie,nazwisko,telefon,email) VALUES ('$imie','$nazwisko','$telefon','$email')");
	mysqli_close($polaczenie);
?>