var hasError=false;
function get(id) {
return document.getElementById(id);
}

function validate() {
  refresh();
  if (get("rating").value == "") {
    hasError = true;
    get("pdctratingErr").innerHTML = "*Rating Required";
}

if (get("comments").selectedIndex == 0) {
  hasError = true;
  get("pdctcommentsErr").innerHTML = "*Comments required";
  }



if (get("cust_name").value == "") {
  hasError = true;
  get("custnameErr").innerHTML = "*Customer Name Required";
}





if (get("food_name").value == "") {
  hasError = true;
  get("foodnameErr").innerHTML = "*Food Name Required";
}
//
//







return !hasError;
}

function refresh() {
hasError = false;
get("pdctratingErr").innerHTML = "";
get("pdctcommentsErr").innerHTML = "";
get("custnameErr").innerHTML = "";
get("foodnameErr").innerHTML = "";

}
