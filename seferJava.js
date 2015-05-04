var m = ["podmeni1"];
var i = ["izbor1","izbor2","izbor3","izbor4"];
function podmeni(x,z){
	for(var y in m)
	{
		if(m[y] != x)
		{
			document.getElementById(m[y]).style.display = "none";
		}
	}
	for(var g in i)
	{
		if(i[g] != z)
		{
			document.getElementById(i[g]).style.background = "white";
		}
	}
	
	if(document.getElementById(x).style.display == 'block')
	{
		document.getElementById(x).style.display = "none";	
        document.getElementById(z).style.background = "white";		
	}
	else
	{
		document.getElementById(x).style.display = "block";
		document.getElementById(z).style.background = "white";
	}

}

function promjeniBoju(x)
{
	document.getElementById(x).style.background = "white";
}

function zatvori(x,z)
{
	document.getElementById(x).style.display = "none";
	document.getElementById(z).style.background = "white";
}

function promjenaBoje(x)
{
	switch(x)
	{
		case 'login':
		document.getElementById(x).style.background = "yellow";
		break;
		case 'register':
		document.getElementById(x).style.background = "#FF9C9C";
		break;	
	}
}

function vratiBoju(x)
{
	switch(x)
	{
		case 'login':
		document.getElementById(x).style.background = "white";
		break;
		case 'register':
		document.getElementById(x).style.background = "white";
		break;	
	}
	
}

function validirajFormu(){

var opcina = document.getElementById("opcina").value;
var broj = document.getElementById("postBroj").value;
console.log(opcina);
console.log(broj);
var ajax = new XMLHttpRequest();
	ajax.onreadystatechange = function() {// Anonimna funkcija
		if (ajax.readyState == 4 && ajax.status == 200)
		{
			if (ajax.responseText[2] == "o") 
			{
				document.getElementById("greskaOpcina1").style.display = "none";
				document.getElementById("greskaBroj1").style.display = "none";
				document.getElementById("greskaOpcina2").style.display = "none";
				document.getElementById("greskaBroj2").style.display = "none";
			}
			else 
			{
				document.getElementById("greskaOpcina1").style.display = "block";
				document.getElementById("greskaBroj1").style.display = "block";
				document.getElementById("greskaOpcina2").style.display = "block";
				document.getElementById("greskaBroj2").style.display = "block";
			}
		}
		if (ajax.readyState == 4 && ajax.status == 404) document.getElementById("polje").innerHTML = "Greska: nepoznat URL";
	}
	ajax.open("GET", "http://zamger.etf.unsa.ba/wt/postanskiBroj.php?mjesto="+opcina+"&postanskiBroj="+broj, true);
	ajax.send();
};

function ucitaj(stranica){
	
	var ajax = new XMLHttpRequest();
	ajax.onreadystatechange = function() {
		if (ajax.readyState == 4 && ajax.status == 200)
			document.getElementById("wrapper").innerHTML = ajax.responseText;
		if (ajax.readyState == 4 && ajax.status == 404)
			document.getElementById("wrapper").innerHTML = "Greska: nepoznat URL";
	}
	ajax.open("GET", stranica, true);
	ajax.send();

}


