<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <title>PRODUCT-ATN</title>
    <link rel="stylesheet" href="jqueryMobile/jquery.mobile-1.4.5.min.css">
    <script src="jqueryMobile/jquery-1.11.1.min.js"></script>
    <script src="jqueryMobile/jquery.mobile-1.4.5.min.js"></script>
</head>
<body>
    <div data-role="header">
        
    </div>

    <div data-role="main" class="ui-content">
        <form action="product_create.php.php" method="post">
            <label for="productid">Product ID<sup>*</sup></label>
            <input type="text" name="id" id="productid">
            <br>
            <label for="productname">Product Name<sup>*</sup></label>
            <input type="text" name="name" id="productname">
            <br>
            <label for="productcat">Category</label>
            <input type="text" name="cat" id="productcat"> 
            <br>
            <label for="date">Date</label>
            <input type="date" name="date" id="date"> 
            <br>
            <label for="description">Descriptions<sup>*</sup></label>
            <textarea name="desc" id="description" rows="5" cols="30"></textarea> 
            <br>
        <input type="submit" value="Submit">
        <input type="reset" value="Reset">
    </form>
    </div>
    
</body>
</html>