var hasError=false;
function get(id) {
return document.getElementById(id);
}

function validate() {
  refresh();
  if (get("username").value == "") {
    hasError = true;
    get("dlnameErr").innerHTML = "* username Required";
}

if (get("password").selectedIndex == 0) {
  hasError = true;
  get("dlpassErr").innerHTML = "*Password required";
  }



if (get("gender").value == "") {
  hasError = true;
  get("dlgenderErr").innerHTML = "*Gender Required";
}





if (get("email").value == "") {
  hasError = true;
  get("dlemailErr").innerHTML = "*email required ";
}
//
//


if (get("address").value == "") {
  hasError = true;
  get("dladdressErr").innerHTML = "*Address Required";
}


if (get("usertype").value == "") {
    hasError = true;
    get("dlusertypeErr").innerHTML = "*UserType Required";
  }
  


return !hasError;
}

function refresh() {
hasError = false;
get("username").innerHTML = "";
get("password").innerHTML = "";
get("gender").innerHTML = "";
get("email").innerHTML = "";

get("address").innerHTML = "";
get("usertype").innerHTML = "";
}
