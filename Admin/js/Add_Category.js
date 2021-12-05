function isvalid() {
	//get error message from span
	var flag = true;
	var catnameErr = document.getElementById("catnameErr");
	

	//get value from input
	var name = document.forms["addcategoryForm"]["name"].value;


	//clear error message
	catnameErr.innerHTML = "";

	//value is empty or not
	if (name === "") {
		catnameErr.innerHTML = "* Name required.";
		flag = false;
	}

	//clear error message
	

	return flag;
}
