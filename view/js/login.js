function login() {
  var xhr = new XMLHttpRequest();
  try {
    xhr = new XMLHttpRequest();
  } catch (e) {
    xhr = null;
    return;
  }



  xhr.open("POST", "LoginAjax.php", true);
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  xhr.send("email=" + document.getElementById('email').value + "&password=" + document.getElementById('password').value);

  xhr.onreadystatechange = function() {
    if (xhr.readyState === 4 && xhr.status === 200) {
      if (xhr.responseText === "OK") {
        window.location.href = "index.php";
      }

    } else if (xhr.readyState !== 4) {
      document.getElementById('test').innerHTML = xhr.responseText;
    }
  }
  return false;
}
