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
                <li><a href="#atn_home" data-role="button">Home</a></li>
                <li><a href="#invoice" onclick="bill()" data-role="button">Invoice</a></li>
            </ul>
        </div>
    </div>
    <?php
    $id = $_REQUEST["id"];
    $name = $_REQUEST["name"];
    $invoice_id = $_REQUEST["invoiceId"];
    $date = $_REQUEST["invoiceDate"];
    $desc = $_REQUEST["desc"];
    $proId = $_REQUEST["invoice_productId"];
    $proQty = $_REQUEST["invoice_product_quantity"];

    $productId = "";
    for ($i = 0; $i < count($proId); $i++) {
        $productId .= $proId[$i].",";
    }

    $product_qty = "";
    for ($i = 0; $i < count($proQty); $i++) {
        $product_qty .= $proQty[$i].",";
    }

    $host = "ec2-54-167-152-185.compute-1.amazonaws.com";
    $database = "d7rjokn0julj07";
    $user = "gqkbiudkurbksn";
    $password = "b0f9ad0d6bc76622ca310653f9129f2cab440d8e23e3061ef22d3b1934906c01";
    $port = "5432";

    $connection = pg_connect("host=".$host." dbname=".$database." user=".$user." port=".$port." password=".$password." sslmode=require");

    if ($connection === false)
        die("ERROR: could not connect to database");

    $invoice_query = 'INSERT INTO public."Invoice"("invoiceId","invoiceDate","desc","customerId","customerName","invoice_productId","invoice_product_quantity") VALUES (\''.$invoice_id.'\',\''.$date.'\',\''.$desc.'\',\''.$id.'\',\''.$name.'\',\''.$productId.'\',\''.$product_qty.'\')';

    if (pg_query($connection,$invoice_query)) {
            // echo '<p> SUCCESS: Record is added succesfully. A new product is created</p>';
        }
        else {
            // echo '<p> ERROR: Could not Execute query</p>';
        }
    $pg = 'SELECT id FROM public."Product"';
    $result = pg_query($connection,$pg);
    while (pg_fetch_row($result)) {
        $a = pg_fetch_row($result);
        // echo "<p>".$a[0]."</p>";
        // for ($b = 0; $b < count($a); $b++) {
        //  echo "<p>".$a[$b]."</p>";
        // }
    }
    ?>
</body>
</html>