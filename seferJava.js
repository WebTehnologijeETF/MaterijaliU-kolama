
var m = ["podmeni1","podmeni2","podmeni3"];
function podmeni(x){
	for(var y in m)
	{
		if(m[y] != x)
		{
			document.getElementById(m[y]).style.display = "none";
		}
	}
	if(document.getElementById(x).style.display == 'block')
	{
		document.getElementById(x).style.display = "none";
	}
	else
	{
		document.getElementById(x).style.display = "block";
	}
}
