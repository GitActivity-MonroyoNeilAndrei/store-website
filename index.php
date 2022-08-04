<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Store Website</title>
	<link rel="stylesheet" type="text/css" href="css/style.css?v=<?php echo time(); ?>">
	<script src="myScript.js"></script>
</head>
<body>
	<!-- This is the Website's Header -->
	<section id="header" class="header" style="border: 1px solid black;">
		<div class="header-name">
			<h2>My Sari Sary Store</h2>
		</div>
		<label>Choose a Product</label>
		<div class="btn" style="border: 1px solid black">

		<input class="product-input" type="text" list="products" name="myProducts" placeholder="Search Product...">

		<a href="" id="example"><i class="search-button"><button type="button" onclick="search()"><div class="search-image"><img src="images/search-button.png"></div></button></i></a>

		</div>

		<datalist id="products">
			<option value="Piatos-Cheese-40g" href="#sample">
		</datalist>
	</section>

	<!-- This is the Website's Body -->
	<section class="body">
		<ol>
			<li>
				<div class="div-body">
					<!-- This is the boxes -->

					<div class="products-container">
						<div class="images" link="#sample"><img src="images/piatos-small.png"></div>
						<div class="product-detail">
							<p>Piatos Cheese</p>
							<p>40g</p>
						</div>
					</div>
					
				</div>
			</li>
		</ol>
	</section>

	<!-- This is the Website's Footer -->
	<section class="footer">

	</section>

</body>
</html>
















