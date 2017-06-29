function newClient() {

  var xhr = new XMLHttpRequest();
  try {
    xhr = new XMLHttpRequest();
  } catch (e) {
    xhr = null;
    return;
  }
  var nature='';
  var natures = document.getElementsByName('nature');
  for (var i = 0; i < natures.length; i++) {
    if (natures[i].checked) {
      nature = natures[i].value;
    }
  }

  var type='';
  var types = document.getElementsByName('type');
  for (var i = 0; i < types.length; i++) {
    if (types[i].checked) {
      type = types[i].value;
    }
  }
  var raisonSociale = encodeURIComponent(document.getElementById('raisonSociale').value);
  var adresse = encodeURIComponent(document.getElementById('adresse').value);
  var ville = encodeURIComponent(document.getElementById('ville').value);
  var codePostal = encodeURIComponent(document.getElementById('codePostal').value);
  var telephone = encodeURIComponent(document.getElementById('telephone').value);
  var ca = encodeURIComponent(document.getElementById('ca').value);
  var effectif = encodeURIComponent(document.getElementById('effectif').value);
  var commentaire = encodeURIComponent(document.getElementById('commentaire').value);

  xhr.open("POST", "newClientControl.php", true);
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  xhr.send("raisonSociale=" + raisonSociale + "&nature=" + nature  +
  "&type=" + type +
  "&adresse=" + adresse +
  "&ville=" + ville +
  "&codePostal=" + codePostal +
  "&telephone=" + telephone +
  "&ca=" + ca +
  "&effectif=" + effectif +
  "&commentaire=" + commentaire);

  xhr.onreadystatechange = function() {
    if (xhr.readyState === 4 && xhr.status === 200) {
      var response = JSON.parse(xhr.responseText);
      console.log(response);
      if(response["message"]==="ok"){
        window.location.href = "profilClient.php?raisonSociale=";
      }
      if(response["message"]==="nok"){
        document.getElementById('error').innerHTML = "<br><div class=\"alert alert-danger\" role=\"alert\"><strong>Error destroy everything</strong></div>";
      }
      if(response["message"]==="nnok"){
        document.getElementById('error').innerHTML = "<br><div class=\"alert alert-danger\" role=\"alert\"><strong>Error destroy everything</strong></div>";
      }
      if(response["message"]==="bad"){
        document.getElementById('error').innerHTML = "<br><div class=\"alert alert-danger\" role=\"alert\"><strong>Error saving into DB</strong></div>";
      }
    }
  }
  return false;
}