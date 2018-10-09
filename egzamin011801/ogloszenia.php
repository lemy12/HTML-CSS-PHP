<html>
	<head>
		<meta charset="utf-8"></meta>
		<title>Portal ogłoszeniowy</title>
		<link rel="stylesheet" type="text/css" href="styl1.css"></link>
	</head>
	<body>
		<div id="baner">
			<h1>Portal Ogłoszeniowy</h1>
		</div>
		<div id="panel_l">
			<h2>Kategorie ogłoszeń</h2>
			<ol>
				<li>Książki</li>
				<li>Muzyka</li>
				<li>Filmy</li>
			</ol>
			<img src="ksiazki.jpg" alt="Kupię / sprzedam książkę"></img>
			<table>
				<tr>
					<td>Liczba ogłoszeń</td>
					<td>Cena ogłoszenia</td>
					<td>Bonus</td>
				</tr>
				<tr>
					<td>1 - 10</td>
					<td>1 PLN</td>
					<td rowspan=3>Subskrypcja newslettera to upust 0,20 PLN na ogłoszenie</td>
				</tr>
				<tr>
					<td>11 - 50</td>
					<td>0,80 PLN</td>
				</tr>
				<tr>
					<td>51 i więcej</td>
					<td>0,60 PLN</td>
				</tr>
			</table>
		</div>
		<div id="panel_p">
			<h2>Ogłoszenia kategorii książki</h2>
			<?php
				$polaczenie = mysqli_connect("localhost","root","","ogloszenia");
				$zapytanie1 = mysqli_query($polaczenie,"SELECT id, tytul, tresc FROM ogloszenie WHERE kategoria=1");
				$zapytanie2 = mysqli_query($polaczenie,"SELECT telefon FROM uzytkownik JOIN ogloszenie ON uzytkownik.id=ogloszenie.uzytkownik_id WHERE ogloszenie.kategoria=1");
				for($i=0;$i<mysqli_num_rows($zapytanie1);$i++){
					$info = mysqli_fetch_array($zapytanie1);
					echo "<h2>".$info[0].". ".$info[1]."</h2>";
					echo "<p>".$info[2]."</p>";
					$numer = mysqli_fetch_array($zapytanie2);
					echo "<p>telefon kontaktowy: ".$numer[0]."</p><br>";
				}
				mysqli_close($polaczenie);
			?>
		</div>
		<div id="stopka">
			Portal ogłoszeniowy opracował: 11223344556
		</div>
	</body>
</html>