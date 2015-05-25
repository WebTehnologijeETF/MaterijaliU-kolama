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
<div class="container">

<div class="novostiOkvir">Novosti:

<?php
$veza = new PDO("mysql:dbname=materijali;host=localhost;charset=utf8", "Alen", "pass");
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
        echo "<div class=novostiSlika><img src=".$vijest['slika']." alt=slikaUzVijest>".$vijest['naslov']."<br>".$vijest['tekst']."<br>".$vijest['autor']."-".date("d.m.Y. (h:i)", $vijest['vrijeme2'])."<br></div>";  	 
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

</div>

</div>
</BODY>
</HTML>