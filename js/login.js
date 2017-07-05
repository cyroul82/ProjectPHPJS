function login() {

  var xhr;
  try {
    xhr = new XMLHttpRequest();
  } catch (e) {
    xhr = null;
    return;
  }

  xhr.open("POST", "loginControl.php", true);
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  xhr.send("email=" + document.getElementById('email').value + "&password=" + document.getElementById('password').value);

  xhr.onreadystatechange = function() {
    if (xhr.readyState === 4 && xhr.status === 200) {
      if (xhr.responseText === "OK") {
        window.location.href = "index.php";
      }
      if (xhr.responseText !== "OK") {
        document.getElementById('error').innerHTML = "<br><div class=\"alert alert-danger\" role=\"alert\"><strong>Echec lors de la connexion</strong></div>";
      }
    }
  }
  return false;
}
