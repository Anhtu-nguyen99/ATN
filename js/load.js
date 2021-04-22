function customer() {
	var label = document.getElementsByTagName("label");
	label[0].outerHTML = '<label for="productid">Customer ID<sup>*</sup></label>'; 
	label[1].outerHTML = '<label for="productname">Customer Name<sup>*</sup></label>';
	label[2].outerHTML = '<label for="productcat">Phone Number<sup>*</sup></label>';
	label[3].outerHTML = '<label for="email">Email</label>';
	label[4].outerHTML = '<label for="pice">Address</label>';

	var input = document.getElementsByTagName("input");
	input[2].setAttribute("name", "phone_number");
	input[3].setAttribute("name", "address");

	var textarea = document.getElementsByTagName("textarea");
	textarea[0].outerHTML = '<input type="text" name="email" id="email">';

	var form = document.getElementsByTagName("form");
	form[0].setAttribute("action", "customer_create.php");
}

function product() {
	var label = document.getElementsByTagName("label");
	label[0].outerHTML = '<label for="productid">Product ID<sup>*</sup></label>'; 
	label[1].outerHTML = '<label for="productname">Product Name<sup>*</sup></label>';
	label[2].outerHTML = '<label for="productcat">Category</label>';
	label[3].outerHTML = '<label for="description">Description<sup>*</sup></label>';
	label[4].outerHTML = '<label for="pice">Price</label>';

	var input = document.getElementsByTagName("input");
	input[2].setAttribute("name", "cat");
	input[3].setAttribute("name", "price");

	var textarea = document.getElementsByTagName("textarea");
	textarea[0].outerHTML = '<textarea name="desc" id="description" rows="5" cols="30"></textarea>';

	var form = document.getElementsByTagName("form");
	form[0].setAttribute("action", "product_create.php");
}

function bill() {
	alert("not yet");
}
