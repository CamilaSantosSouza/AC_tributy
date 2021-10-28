function checkPassword() {

let password = document.getElementById("password").value;
let retype_password = document.getElementById("retype_password").value;
let match = true;

  if (password != retype_password) {
    document.getElementById("password").style.borderColor = "#ff0000";
    document.getElementById("retype_password").style.borderColor = "#ff0000";
    match = false;
    alert("Senhas não são compativeis");

  } else {
      document.getElementById("password").style.borderColor = "#00FF38";
      document.getElementById("retype_password").style.borderColor = "#00FF38";
      return true;
  }
  return match;
}