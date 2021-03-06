<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <script src="load.js"></script>
    <title>PRODUCT-ATN</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="jqueryMobile/jquery.mobile-1.4.5.min.css">

    <script src="jqueryMobile/jquery-1.11.1.min.js"></script>
    <script src="jqueryMobile/jquery.mobile-1.4.5.min.js"></script> 
</head>
<body>
    &emsp;<a href="#" onclick="customer()">Customer</a> &emsp;
    <a href="#" onclick="product()">Product</a> &emsp;
    <a href="#" onclick="bill()">Bill</a>

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
            <label for="pice">price</label>
            <input type="number" name="price" id="price">
            <br>
            <label for="description">Descriptions<sup>*</sup></label>
            <textarea name="desc" id="description" rows="5" cols="30"></textarea> 
            <div>
                <ul id="nav" class="content-list" data-role="list-view"></ul>
            </div>
            <label id="add"></label>
        <input type="submit" value="Submit">
        <input type="reset" value="Reset">
        </form>    
    </div>

    <div data-role="footer" data-position="fixed">
        <h4>Navigation</h4>
        <div data-role="navbar">
            <ul>
                <li><a href="home_page.php" data-role="button">Home</a></li>
                <li><a href="#invoice" onclick="bill()" data-role="button">Invoice</a></li>
            </ul>
        </div>
    </div>
</body>
</html>