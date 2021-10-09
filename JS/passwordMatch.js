function checkPassword() {
    if(password == ''){
      alert("Por favor, digite uma senha!");

  } else if (retype_password ==''){
      alert("Por favor, digite uma senha!");
    } else if (password == retype_password) {
      return true;
    }     
    else {
      alert("Senhas não compativeis");
      return false;
    }
  }