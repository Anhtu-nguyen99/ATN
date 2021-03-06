function customer() {

	var title = document.getElementsByTagName("title");
	title[0].innerHTML = "CUSTOMER-ATN";

	var h2 = document.getElementsByTagName("h2");
	h2[0].innerHTML = "Customer";

	var label = document.getElementsByTagName("label");
	label[0].innerHTML = 'Customer ID<sup>*</sub>'; 
	label[1].innerHTML = 'Customer Name<sup>*</sup>';
	label[2].innerHTML = 'Phone Number<sup>*</sup>';
	label[3].innerHTML = 'Email';
	label[4].innerHTML = 'Address';

	var input = document.getElementsByTagName("input");
	input[2].setAttribute("name", "phone_number");
	input[3].setAttribute("name", "email");
	input[3].setAttribute("type", "email");

	var textarea = document.getElementsByTagName("textarea");
	textarea[0].setAttribute("name", "address");

	var add = document.getElementById("add");
	add.firstChild.remove();

	$("#nav").children().remove();

	var form = document.getElementsByTagName("form");
	form[0].setAttribute("action", "customer_create.php");
}

function product() {

	var title = document.getElementsByTagName("title");
	title[0].innerHTML = "PRODUCT-ATN";

	var h2 = document.getElementsByTagName("h2");
	h2[0].innerHTML = "Product";

	var label = document.getElementsByTagName("label");
	label[0].innerHTML = 'Product ID<sup>*</sup>'; 
	label[1].innerHTML = 'Product Name<sup>*</sup>';
	label[2].innerHTML = 'Category';
	label[3].innerHTML = 'Description<sup>*</sup>';
	label[4].innerHTML = 'Price';

	var input = document.getElementsByTagName("input");
	input[2].setAttribute("name", "cat");
	input[3].setAttribute("name", "price");
	input[3].setAttribute("type", "number");

	var textarea = document.getElementsByTagName("textarea");
	textarea[0].setAttribute("name", "desc");
	
	var add = document.getElementById("add");
	add.firstChild.remove();

	$("#nav").children().remove();

	var form = document.getElementsByTagName("form");
	form[0].setAttribute("action", "product_create.php");
}

function bill() {

	var title = document.getElementsByTagName("title");
	title[0].innerHTML = "INVOICE-ATN";

	var h2 = document.getElementsByTagName("h2");
	h2[0].innerHTML = "INVOICE";

	var label = document.getElementsByTagName("label");
	label[0].innerHTML = 'Customer ID<sup>*</sup>'; 
	label[1].innerHTML = 'Customer Name<sup>*</sup>';
	label[2].innerHTML = 'Invoice ID<sup>*</sup>';
	label[3].innerHTML = 'Invoice Day';
	label[4].innerHTML = 'Description';

	var input = document.getElementsByTagName("input");
	input[2].setAttribute("name", "invoiceId");
	input[3].setAttribute("name", "invoiceDate");
	input[3].setAttribute("type", "date");

	var textarea = document.getElementById("description");
	textarea.setAttribute("name", "desc");

	var add = document.getElementById("add");
	add.innerHTML = '<a onclick="addProductItem()" href="#" class="ui-btn ui-btn-b ui-corner-all ui-btn-icon-left ui-icon-plus">Add products</a>';

	var form = document.getElementsByTagName("form");
	form[0].setAttribute("action", "invoice_create.php");
}

var i = 0;
function addProductItem() {
    var n = i;
    var newli = '<li id=\"' + n +
    '\">Product ID: <input name="invoice_productId[]" type="text" onfocusout="getName(this.value)"> <span></span> Quantity: <input name="invoice_product_quantity[]" type="text">'+
    '<a id=\"cancle' + n + '\" href="#">Delete</a></li>';
    $("ul.content-list").append(newli);
    i++;

	$("#cancle" + n).click(function(){
		var item = document.getElementById(n);
		item.remove();
	});	
    $("ul.content-list").listview("refresh");
}

function getName(value) {
	var xhttp;
	event.target.nextElementSibling.setAttribute("id", value);
	if (value == "") {
		document.getElementById(value).innerHTML = "";
		return;
	}
	xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			document.getElementById(value).innerHTML = this.responseText;
		}
	};
	xhttp.open("GET", "product_get_name.php?id=" + value, true);
	xhttp.send();
};



