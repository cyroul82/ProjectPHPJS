function newClient() {

  var xhr = new XMLHttpRequest();
  try {
    xhr = new XMLHttpRequest();
  } catch (e) {
    xhr = null;
    return;
  }
  var nature;
  var natures = document.getElementsByName('nature');
  for (var i = 0; i < natures.length; i++) {
    if (natures[i].checked) {
      nature = natures[i].value;
    }
  }

  var type;
  var types = document.getElementsByName('type');
  for (var i = 0; i < types.length; i++) {
    if (types[i].checked) {
      type = types[i].value;
    }
  }
  var raisonSociale = document.getElementById('raisonSociale').value;
  var adresse = document.getElementById('adresse').value;
  var ville = document.getElementById('ville').value;
  var codePostal = document.getElementById('codePostal').value;
  var telephone = document.getElementById('telephone').value;
  var ca = document.getElementById('ca').value;
  var effectif = document.getElementById('effectif').value;
  var commentaire = document.getElementById('commentaire').value;

  xhr.open("POST", "newClientControl.php", true);
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  xhr.send("raisonSociale=" + raisonSociale +
    "&nature=" + nature +
    "&type=" + type +
    "&adresse=" + adressee +
    "&ville=" + ville +
    "&codePostal=" + codePostal +
    "&telephone=" + telephone +
    "&ca=" + ca +
    "&effectif=" + effectif +
    "&commentaire=" + commentaire);


  xhr.onreadystatechange = function() {

    if (xhr.readyState === 4 && xhr.status === 200) {
      console.log(xhr.responseText);
      if (xhr.responseText === "OK") {
        window.location.href = "profilClient.php";
      }
      if (xhr.responseText === "NOK") {
        document.getElementById('error').innerHTML = "<br><div class=\"alert alert-danger\" role=\"alert\"><strong>Error destroy everything</strong></div>";

      }
      if (xhr.responseText === "NNOK") {
        document.getElementById('error').innerHTML = "<br><div class=\"alert alert-danger\" role=\"alert\"><strong>Error destroy everything</strong></div>";

      }
    }
  }
  return false;
}
