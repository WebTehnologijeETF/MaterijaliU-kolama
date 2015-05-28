<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<HTML>
<HEAD>
<TITLE>
Materijali
</TITLE> 
<META http-equiv="Content-Type" Content="text/html charset=utf-8">
<link rel="stylesheet" type="text/css" href="cssPocetna.css">
<script type="text/javascript" src="seferJava.js"></script>
</HEAD>
<BODY>

<div id="stranica"> <!-- Pocetak stranice -->



<div id="okvir"> <!-- Okvir cijele stranice -->


<div id="naslovnica">
<img id="logoNaslovnica" src="logo.jpg" alt="logoFirme"> <!-- Logo u gornjem desnom uglu -->

<div class="meni"> <!-- Glavni meni -->
<ul>
<li id="izbor1"><a href="Pocetna.php">Pocetna</a></li>

<li id="izbor2"><a href="#" onclick="ucitaj('Linkovi.html'); return false;">Linkovi</a></li>

<li id="izbor3" onmouseover="podmeni('podmeni1','izbor3')" onmouseout="zatvori('podmeni1','izbor3')"><a href="#" onclick="ucitaj('Materijali.html'); return false;">Materijali</a>
<div class="podmeni" id="podmeni1">
<ul>
<li><a href="#" onclick="ucitaj('Materijali.html'); return false;">I godina</a></li>
<li><a href="#" onclick="ucitaj('Materijali.html'); return false;">II godina</a></li>
<li><a href="#" onclick="ucitaj('Materijali.html'); return false;">III godina</a></li>
<li><a href="#" onclick="ucitaj('Materijali.html'); return false;">IV godina</a></li>
</ul>
</div>
</li>

<li id="izbor4"><a href="Kontakt.php">Kontakt</a></li>

</ul>
</div>
</div>

<div id="login" onmouseover="promjenaBoje('login')" onmouseout="vratiBoju('login')"><a id="linkPrijava" href="#">Prijavi se</a></div> <!-- Dugme za prijavu -->
<div id="register" onmouseover="promjenaBoje('register')" onmouseout="vratiBoju('register')"><a id="linkRegistracija" href="#">Registruj se</a></div> <!-- Dugme za registraciju -->
<!-- Naslov stranice -->

<div id="wrapper">
<div class="container">

<div class="novostiOkvir">Novosti:

<?php
if(isset($_POST['submit']))
{
	$veza = new PDO("mysql:dbname=materijali;host=127.4.204.130;charset=utf8", "AlenSefer", "pass");
	$rezultatVij = $veza->query("INSERT INTO `materijali`.`komentari` (`id`, `vijest`, `tekst`, `autor`, `vrijeme`) VALUES (NULL, '".$_GET['vijest']."', '".htmlentities($_POST['com'] , ENT_QUOTES)."', '".htmlentities($_POST['aut'] , ENT_QUOTES)."', NOW());");
}
if(isset($_GET['vijest']))
{
	$veza = new PDO("mysql:dbname=materijali;host=127.4.204.130;charset=utf8", "AlenSefer", "pass");
	$rezultatVij = $veza->query("select id, naslov, tekst, slika, UNIX_TIMESTAMP(vrijeme) vrijeme2, autor from vijesti where id=".$_GET['vijest']);
	$rezultatKom = $veza->query("select id, tekst, vijest, UNIX_TIMESTAMP(vrijeme) vrijeme2, autor from komentari where vijest=".$_GET['vijest']);
	foreach($rezultatVij as $vijest)
	{
		echo "<div class=novostiSlika><img src=".$vijest['slika']." alt=slikaUzVijest>".$vijest['naslov']."<br>".$vijest['tekst']."<br>".$vijest['autor']."-".date("d.m.Y. (h:i)", $vijest['vrijeme2'])."<br></div>";
	}
	foreach($rezultatKom as $komentar)
	{
		echo "<div class=komentar>".$komentar['autor']."<br>".$komentar['tekst']."  ".date("d.m.Y. (h:i)", $komentar['vrijeme2'])."</div>";
	}
	echo "<form action='' method=post><input type='text' name='com' value='komentar'><input type='text' name='aut' value='autor'><input type='submit' value='Ostavi koment' name='submit'></form>";
}
else
{
$veza = new PDO("mysql:dbname=materijali;host=127.4.204.130;charset=utf8", "AlenSefer", "pass");
$rezultat = $veza->query("select id, naslov, tekst, slika, UNIX_TIMESTAMP(vrijeme) vrijeme2, autor from vijesti order by vrijeme desc");
if (!$rezultat) 
{
          $greska = $veza->errorInfo();
          print "SQL greška: " . $greska[2];
          exit();
}
else
{
foreach ($rezultat as $vijest) 
{
		$brojKomSQL = $veza->query("select count(*) from komentari where vijest=".$vijest['id']);
		$brojKom = $brojKomSQL->fetchColumn();
        echo "<div class=novostiSlika><img src=".$vijest['slika']." alt=slikaUzVijest>".$vijest['naslov']."<br>".$vijest['tekst']."<br>".$vijest['autor']."-".date("d.m.Y. (h:i)", $vijest['vrijeme2'])."<br><a href='Pocetna.php?vijest=".$vijest['id']."&komentari=".$brojKom."'>komentari<a></div>";  	 
}
}
}
?>

</div>
<div class ="tabela">
<div id="naslovTabele">Trenutno dostupni materijali
</div>
<table border="1" width="100%">
<tr>
<td>
Godina
</td>
<td>
Prirodne nauke
</td>
<td>
Umjetnost
</td>
<td>
Sport i tjelesni odgoj
</td>
<td>
Drustvene nauke
</td>
<td>
Ostalo
</td>
</tr>
<tr>
<td>
I godina
</td>
<td>
0
</td>
<td>
0
</td>
<td>
0
</td>
<td>
0
</td>
<td>
0
</td>
</tr>
<tr>
<td>
II godina
</td>
<td>
0
</td>
<td>
0
</td>
<td>
0
</td>
<td>
0
</td>
<td>
0
</td>
</tr>
<tr>
<td>
III godina
</td>
<td>
0
</td>
<td>
0
</td>
<td>
0
</td>
<td>
0
</td>
<td>
0
</td>
</tr>
<tr>
<td>
IV godina
</td>
<td>
0
</td>
<td>
0
</td>
<td>
0
</td>
<td>
0
</td>
<td>
0
</td>
</tr>
</table>

</div> <!-- Kraj okvira stranice -->
</div>

</div> <!-- Kraj stranice -->

</div>

</div>
</BODY>
</HTML>