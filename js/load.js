function customer() {

	var title = document.getElementsByTagName("title");
	title[0].innerHTML = "CUSTOMER-ATN";

	var h2 = document.getElementsByTagName("h2");
	h2[0].innerHTML = "Customer";

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
	textarea[0].setAttribute("name", "email");

	var form = document.getElementsByTagName("form");
	form[0].setAttribute("action", "customer_create.php");
};

function product() {

	var title = document.getElementsByTagName("title");
	title[0].innerHTML = "PRODUCT-ATN";

	var h2 = document.getElementsByTagName("h2");
	h2[0].innerHTML = "Product";

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
	textarea[0].setAttribute("name", "desc");
	

	var form = document.getElementsByTagName("form");
	form[0].setAttribute("action", "product_create.php");
};
var i = 0;
function addProductItem() {
			alert("run");
            var n = i;
            var newli = '<li class="'+ n +'" >Product ID: <input name="invoice_productid[]" type="text"> Quantity: <input name="invoice_product_quantity[]" type="text"> </li>'+
            '<a id="cancle" class="'+ n +'" href="#" onclick="deleteProductItem('+ n +')">Delete </a>';
            $("ul.content-list").append(newli);

            function deleteProductItem(n) {
				$("a#cancle").click(function()){
				var item = document.getElementsByClassName(n);
				item.remove();
				};
			};
            $("ul.content-list").listview("refresh");
            i++;
};


function bill() {
	alert("not yet");
}

// $(ducument).ready(function() {
	
// });
