var hasError=false;
function get(id) {
return document.getElementById(id);
}

function validate() {
  refresh();
  if (get("email").value == "") {
    hasError = true;
    get("emailErr").innerHTML = "*Email  Required";
}

if (get("text").value == "") {
  hasError = true;
  get("textErr").innerHTML = "*Text required";
  }




//
//







return !hasError;
}

function refresh() {
hasError = false;
get("emailErr").innerHTML = "";
get("textErr").innerHTML = "";

}
