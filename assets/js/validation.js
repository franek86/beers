function validate(){

    var error = 0;


    var name = document.getElementById('name');
    if (name.value === "") {
      name.style.background = "#B52626";
      name.style.color = "white";
      error = 1;
    } else {
      name.style.background = "white";
      name.style.color = "#030303";
      error = 0;
    }

    var email = document.getElementById('email');
    if (email.value === "") {
      email.style.background = "#B52626";
      email.style.color = "#fff";
      error = 1;
    } else {
      email.style.background = "#fff";
      email.style.color = "#030303";
      error = 0;
    }

    var msg = document.getElementById('msg');
    if (msg.value === "") {
      msg.style.background = "#B52626";
      msg.style.color = "#fff";
      error = 1;
    } else {
      msg.style.background = "#fff";
      msg.style.color = "#030303";
      error = 0;
    }

    if(error == 0) {
  		return true;
  	}
  	else {
  		return false;
  	}

}
