function customer() {
	var label = document.getElementsByTagName("label");
	label[0].outerHTML = '<label for="productid">Customer ID<sup>*</sup></label>'; 
	label[1].outerHTML = '<label for="productname">Customer Name<sup>*</sup></label>';
	label[2].outerHTML = '<label for="productcat">Phone Number</label>';
	label[3].outerHTML = '<label for="email">Eamil</label>';
	label[4].outerHTML = '<label for="pice">Address</label>';

	var input = document.getElementsByTagName("input");
	input[2].setAttribute("name", "phone_number");
	input[3].setAttribute("name", "address");

	var textarea = document.getElementsByTagName("textarea");
	textarea.outerHTML = '<input type="text" name="email" id="email">';

	var form = document.getElementsByTagName("form");
	form.setAttribute("action", "customer_create.php");


	
}

alert("anh tu");