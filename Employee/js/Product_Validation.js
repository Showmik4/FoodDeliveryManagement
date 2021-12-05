var hasError=false;
function get(id) {
return document.getElementById(id);
}

function validate() {
  refresh();
  if (get("product_name").value == "") {
    hasError = true;
    get("pdctnameErr").innerHTML = "*Product name Required";
}

if (get("c_id").selectedIndex == 0) {
  hasError = true;
  get("catnameErr").innerHTML = "*Category required";
  }



if (get("product_price").value == "") {
  hasError = true;
  get("pdctpriceErr").innerHTML = "*Price Required";
}





if (get("product_code").value == "") {
  hasError = true;
  get("pdctcodeErr").innerHTML = "*Product Code Required";
}
//
//


if (get("img").value == "") {
  hasError = true;
  get("err_p_image").innerHTML = "*Image Required";
}




return !hasError;
}

function refresh() {
hasError = false;
get("pdctnameErr").innerHTML = "";
get("pdctpriceErr").innerHTML = "";
get("err_c_name").innerHTML = "";
get("pdctcodeErr").innerHTML = "";

get("err_p_image").innerHTML = "";
}
