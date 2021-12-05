var hasError=false;
function get(id) {
return document.getElementById(id);
}

function validate() {
  refresh();
  if (get("uid").value == "") {
    hasError = true;
    get("uidErr").innerHTML = "*User ID  Required";
}

if (get("username").value == "") {
  hasError = true;
  get("usernameErr").innerHTML = "*Username required";
  }



  if (get("password").value == "") {
    hasError = true;
    get("passErr").innerHTML = "*Password required";
    }

    
if (get("email").value == "") {
    hasError = true;
    get("emailErr").innerHTML = "*email required";
    }

    
if (get("address").value == "") {
    hasError = true;
    get("addressErr").innerHTML = "*Address required";
    }
  

        
if (get("gender").value == "") {
    hasError = true;
    get("genderErr").innerHTML = "*Gender required";
    }
  

        
if (get("usertype").value == "") {
    hasError = true;
    get("typeErr").innerHTML = "*UserType required";
    }
  

//
//







return !hasError;
}

function refresh() {
hasError = false;
get("uidErr").innerHTML = "";
get("usernameErr").innerHTML = "";
get("passErr").innerHTML = "";
get("emailErr").innerHTML = "";
get("addressErr").innerHTML = "";
get("genderErr").innerHTML = "";
get("typeErr").innerHTML = "";
}
