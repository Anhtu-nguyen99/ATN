<?php
class getProducts {
	function fetchAll() {
		$host = "ec2-54-167-152-185.compute-1.amazonaws.com";
		$database = "d7rjokn0julj07";
		$user = "gqkbiudkurbksn";
		$password = "b0f9ad0d6bc76622ca310653f9129f2cab440d8e23e3061ef22d3b1934906c01";
		$port = "5432";
		$connection = pg_connect("host=".$host." dbname=".$database." user=".$user." port=".$port." password=".$password." sslmode=require");
		$products = [];
		$pg = 'SELECT * FROM public."Product"';
		$result = pg_query($connection,$pg);
		if (count($resoult) > 0) 
		{
			while ($row = pg_fetch_row($result))
			{
				$product = new Product(
					$row["id"], $row["name"], $row["price"], $row["image"], $row["category"], $row["description"]);
				$products[] = $product;
			}
		}
		return $products;
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
<!-- <?php $getProducts = new getProducts();
$products = $getProducts->fetchAll();
?>	 -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ATN Company</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
</head>
<body>
	<header>
		<div class="head">
			<a href="index.php" data-role="button"><div class="head-btn">Admin page</div></a>
			<a href="home_page.php" data-role="button"><div class="head-btn">Home page</div></a>
			<img src="img/logo.jpg" alt="head car">
		</div>
	</header>
	<main>
		<div id="search">
			Search: <input type="search">
		</div>
		<h3>ALL Cars</h3>
		<div class="row">
			<div class="col-xs-12 main">
			<?php foreach ($products as $product) {?>		
				<div class="col-xs-6 col-sm-3">
					<a href="#"><img class="image" src="img/<?=$product->getImage()?>" alt="<?=$product->getName()?>"></a>
					<h5><a href="#"><?=$product->getName()?></a></h5>
					<p><?=$product->getPrice()?></p>
				</div>
			<?php } ?>
				<!-- <div class="col-xs-6 col-sm-3">
					<img class="image" src="img/320.jpg" alt="530 m sport">
					<h5>bmw</h5>
					<p>50000000</p>
				</div>
				<div class="col-xs-6 col-sm-3">
					<img class="image" src="img/x5.jpg" alt="530 m sport">
					<h5>bmw</h5>
					<p>50000000</p>
				</div>
				<div class="col-xs-6 col-sm-3">
					<img class="image" src="img/m4.jpg" alt="530 m sport">
					<h5>bmw</h5>
					<p>50000000</p>
				</div>
				<div class="col-xs-6 col-sm-3">
					<img class="image" src="img/z4.jpg" alt="530 m sport">
					<h5>bmw</h5>
					<p>50000000</p>
				</div> -->
			</div>
		</div>
	</main>
	<footer>
		<div class="foot">
			<h2>Contact</h2>
			<p>Hotline: 0772513431 / Nguyen Anh Tu</p>
			<p>Gmail: Tunagcs190482@fpt.edu.vn</p>
			<p>ATN Company 2021</p>
		</div>
	</footer>
</body>
</html>
