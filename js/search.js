function search()
{
	var searchValue = document.getElementById("select").value;

// création de la variable	
var xhr;

try
	{	
		xhr = new XMLHttpRequest();	
	}
catch(e)
	{	
	xhr = null; // gestion de l'erreur	
	return;
}

xhr.onreadystatechange = function() {
	if (xhr.readyState == 4 && (xhr.status == 200 || xhr.status == 0)) {
		console.log("hello");
		console.log(xhr.responseText);
		var clients = JSON.parse(xhr.responseText);
		console.log(clients);
	}
};

xhr.open("GET", "searchControl.php?searchValue=" + searchValue, true);
xhr.send(null);

return false;
}