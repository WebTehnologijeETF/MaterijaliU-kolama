var m = ["podmeni1","podmeni2","podmeni3"];
function podmeni(x){
	misPreko(x);
	for(var y in m)
	{
		if(m[y] != x)
		{
			document.getElementById(m[y]).style.display = "none";
			misVani(m[y]);
		}
	}
	for(y in m)
	{
		if(m[y] == x)
		{
		if(document.getElementById(x).style.display == 'block')
		{
			document.getElementById(x).style.display = "none";
		}
		else
		{
			document.getElementById(x).style.display = "block";
		}
		}
	}
}

function misPreko(x)
{
	switch(x)
		{
			case "PocetnaLink":
			document.getElementById("PocetnaLink").style.color = "white";
			break;
			case "podmeni1": 
			document.getElementById("KontaktLink").style.color = "white";
			break;
			case "podmeni2": 
			document.getElementById("LinkoviLink").style.color = "white";
			break;
			case "podmeni3": 
			document.getElementById("MaterijaliLink").style.color = "white";
			break;
		}
}

function misVani(x)
{
	switch(x)
		{
			case "PocetnaLink":
			document.getElementById("PocetnaLink").style.color = "black";
			break;
			case "podmeni1": 
			document.getElementById("KontaktLink").style.color = "black";
			break;
			case "podmeni2": 
			document.getElementById("LinkoviLink").style.color = "black";
			break;
			case "podmeni3": 
			document.getElementById("MaterijaliLink").style.color = "black";
			break;
		}
	
}

var m = ["podmeni1","podmeni2","podmeni3"];
function ocisti(x)
{
	for(var y in m)
	{
			document.getElementById(m[y]).style.display = "none";
			misVani(m[y]);
	}
}
