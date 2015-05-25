<?php

$imeError ="";
$prezimeError ="";
$emailError ="";
$emailError2 ="";
$websiteError ="";
// On submitting form below function will execute.
if(isset($_POST['submit'])){
if (empty($_POST["ime"])) {
$imeError = "Unesite ime";
} else {
$ime = test_input($_POST["ime"]);
// check name only contains letters and whitespace
if (!preg_match("/^[a-zA-Z ]*$/",$ime)) {
$imeError = "Greska";
}
}
if (empty($_POST["prezime"])) {
$prezimeError = "Unesite prezime";
} else {
$prezime = test_input($_POST["prezime"]);
// check if e-mail address syntax is valid or not
if (!preg_match("/^[a-zA-Z ]*$/",$prezime)) {
$prezimeError = "Greska";
}
}
if (empty($_POST["email"])) {
$emailError = "Unesite email";
} else {
$email = test_input($_POST["email"]);
// check if e-mail address syntax is valid or not
if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email)) {
$emailError = "Pogresan format emaila";
}
}

if ($_POST["email"]!=$_POST["email2"]) {
$emailError2 = "Unesite isti email";
} 

}
function test_input($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}
?>