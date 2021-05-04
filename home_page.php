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
		<div data-position="fixed">
			<ul>
				<li><a href="index.php">Admin page</a></li>
				<li><a href="home_page.php">Home page</a></li>
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
				<div class="col-xs-6 col-sm-3">
					<img class="image" src="img/530.jpg" alt="530 m sport">
					<h5>BMW 530i M Sport</h5>
				</div>
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
</body>
</html>