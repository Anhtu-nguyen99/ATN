<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ATN Company</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="jqueryMobile/jquery.mobile-1.4.5.min.css">
	<link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">

    <script src="jqueryMobile/jquery-1.11.1.min.js"></script>
    <script src="jqueryMobile/jquery.mobile-1.4.5.min.js"></script>
</head>
<body>
	<header>
		<div data-role="navbar">
			<ul>
				<li><a href="index.php" data-role="button">Admin page</a></li>
				<li><a href="home_page.php" data-role="button">Home page</a></li>
			</ul>
		</div>
		<div>
			<img src="img/head.jpg" alt="head car">
		</div>
	</header>
	<main>
		<h3>ALL Car</h3>
		<div class="row">
			<div class="col-xs-12">
				<?php foreach ($products as $product) { ?>
				<div class="col-xs-6 col-sm-3">
					<img class="image" src="img/530.jpg" alt="530 m sport">
					<h5><?=$product->getName();?></h5>
					<p><?=$product->getPrice();?></p>
				</div>
				<?php } ?>
			</div>
		</div>
	</main>
	<footer>
		<div data-role="footer" data-position="fixed">
        <h4>Navigation</h4>
        <div data-role="navbar">
            <ul>
                <li><a href="home_page.php" data-role="button">Home</a></li>
                <li><a href="#invoice" onclick="bill()" data-role="button">Invoice</a></li>
            </ul>
        </div>
    </div>
	</footer>
	<?php
	$host = "ec2-54-167-152-185.compute-1.amazonaws.com";
	$database = "d7rjokn0julj07";
	$user = "gqkbiudkurbksn";
	$password = "b0f9ad0d6bc76622ca310653f9129f2cab440d8e23e3061ef22d3b1934906c01";
	$port = "5432";
	$connection = pg_connect("host=".$host." dbname=".$database." user=".$user." port=".$port." password=".$password." sslmode=require");
	$products = [];
	$pg = 'SELECT * FROM public."Product"';
	$result = pg_query($connection,$pg);
	if ($result->num_rows > 0) 
		{
			while ($row = pg_fetch_assoc($result))
			{
				$product = new Product(
					$row["id"], $row["name"], $row["price"], $row["image"], $row["category"], $row["description"]);
				$products[] = $product;
			}
		}

class Product {
	protected $id;
	protected $name;
	protected $price;
	protected $image;
	protected $category;
	protected $description;	
	function __construct($id, $name, $price, $image, $category, $description){
		$this->productId = $id;
		$this->productName = $name;
		$this->productPrice = $price;
		$this->image = $image;
		$this->category = $category;
		$this->description = $description;
	}

	function getId() {
		return $this->productId;
	}

	function getName() {
		return $this->productName;
	}

	function getPrice() {
		return $this->productPrice;
	}

	function getImage() {
		return $this->image;
	}
}
	?>
</body>
</html>