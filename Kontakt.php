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
<li id="izbor1"><a href="#" onclick="ucitaj('Pocetna.php'); return false">Pocetna</a></li>

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

<div ID="wrapper"><!-- Sadrzaj stranice-->

<div class="container">

<?php include 'validacija.php'; ?>

<form class="kontakt" action="Kontakt.php" method="post">
<table border="0" cellspacing="0" cellpadding="2">
<tr>
<td>
  Ime:
</td>
<td>
  <input type="text" name="ime">
</td>
<td>
<span class="error">* <?php echo $imeError;?></span>
</td>
</tr>
<tr>
<td>
  Prezme:
</td>
<td>
  <input type="text" name="prezime">
</td>
<td>
<span class="error">* <?php echo $prezimeError;?></span>
</td>
</tr>
<tr>
  <td>
  Email:
  </td>
  <td>
  <input type="text" name="email">
  </td>
  <td>
  <span class="error">* <?php echo $emailError;?></span>
  </td>
</tr>
<tr>
  <td>
  Ponovite Email:
  </td>
  <td>
  <input type="text" name="email2" onblur="validirajFormu()">
  </td>
  <td>
  <span class="error">* <?php echo $emailError2;?></span>
  </td>
</tr>
<tr>
   <td>
   Opcina:
   </td>
   <td>
   <input type="text" id="opcina" onblur="validirajFormu()">
   </td>
   <td>
   <div id="greskaOpcina1"><img src="error.png" alt="greska"></div>
   </td>
   <td>
   <div id="greskaOpcina2">Ne slazu se</div>
   </td>
</tr>
<tr>
	<td>
	Postanski broj:
	</td>
	<td>
	<input type="text" id="postBroj" onblur="validirajFormu()">
	</td>
	<td>
	<div id="greskaBroj1"><img src="error.png" alt="greska"></div>
	</td>
	<td>
	<div id="greskaBroj2">Ne slazu se</div>
	</td>
</tr>
<tr>
<td>
  <input name="submit" type="submit" value="Pošalji">;
</td>
</tr>
 </table>
</form>

</div>

</div><!-- Kraj sadrzaja stranice-->

</BODY>
</HTML>