var hasError=false;
function get(id) {
return document.getElementById(id);
}

function validate() {
    refresh();
  if (get("day").selectedIndex == 0) {
  hasError = true;
  get("err_day").innerHTML = "*Day required";
  }

  if (get("month").selectedIndex == 0) {
  hasError = true;
  get("err_month").innerHTML = "*Month required";
  }

  if (get("year").selectedIndex == 0) {
  hasError = true;
  get("err_year").innerHTML = "*Year required";
  }

  if (get("amount").value == "") {
  hasError = true;
  get("err_amount").innerHTML = "*Amount Required";
  }

return !hasError;
}

function refresh() {
hasError = false;
get("err_day").innerHTML = "";
get("err_month").innerHTML = "";
get("err_year").innerHTML = "";
get("err_amount").innerHTML = "";

}
