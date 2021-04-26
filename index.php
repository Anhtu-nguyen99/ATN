<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <script src="js/load.js"></script>
    <title>PRODUCT-ATN</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="jqueryMobile/jquery.mobile-1.4.5.min.css">

    <script src="jqueryMobile/jquery-1.11.1.min.js"></script>
    <script src="jqueryMobile/jquery.mobile-1.4.5.min.js"></script>
</head>
<body>
    <ul>
        <li><a href="#" onclick="customer()">Customer</a></li>
        <li><a href="#" onclick="product()">Product</a></li>
        <li><a href="#" onclick="bill()">Bill</a></li>
    </ul>

    <h2 style="text-align: center;">Product</h2>

    <div data-role="main" class="ui-content">
        <form action="product_create.php" method="GET">
            <label for="productid">Product ID<sup>*</sup></label>
            <input type="text" name="id" id="productid">
            <br>
            <label for="productname">Product Name<sup>*</sup></label>
            <input type="text" name="name" id="productname">
            <br>
            <label for="productcat">Category</label>
            <input type="text" name="cat" id="productcat"> 
            <br>
            <label for="description">Descriptions<sup>*</sup></label>
            <textarea name="desc" id="description" rows="5" cols="30"></textarea> 
            <br>
            <label for="pice">price</label>
            <input type="text" name="price" id="price">
            <ul class="content-list"></ul>
            <a onclick="addproduct()" href="#" class="ui-btn ui-btn-b ui-corner-all ui-btn-icon-left ui-icon-plus">Add products</a>
        <input type="submit" value="Submit">
        <input type="reset" value="Reset">
        </form>    
    </div>

    <div data-role="footer" data-position="fixed">
        <h4>Navigation</h4>
        <div data-role="navbar">
            <ul>
                <li><a href="#atn_home" data-role="button">Home</a></li>
                <li><a href="#invoice" data-role="button">Invoice</a></li>
            </ul>
        </div>
    </div>
    
    <script>
        function addProductItem() {
            var newli = '<li>Product ID: <input name="invoice_productid[]" type="text"> Quantity: <input name="invoice_product_quantity[]" type="text"> </li>';
            $("ul.content-list").apptend(newli);
            $("ul.content-list").listview("refresh");
        };
    </script>
</body>
</html>