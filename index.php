<html>
<head>
	<title>home</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style1.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<script src="project1.js"></script>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">OUR-KART</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="kart.php">e-kart</a>
      </li>
	   <li class="nav-item">
        <a class="nav-link" href="wish.php">WISH-LIST</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search for products,brands and more" aria-label="Search" style="font-family:Josefin Sans">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
	<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner" id="front">
    <div class="carousel-item active">
      <img src="project images/poster2.jpg" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="project images/poster1.jpg" width="1100" height="500">  
    </div>
    <div class="carousel-item">
      <img src="project images/poster3.jpg" width="1100" height="500">
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<section class=" project1 my-5">
	<center><u><h2 class="py-5 ml-5" style="font-family:arial black">😉Deal of the Day😉</h2></u></center>
	<div class="container-fluid">
		<div class="row" id="common">
			<div class="col-lg-4 col-mid-4 col-12  ml-5 pb-4 py-5">
				<div class="card">
		<img class="card-img-top pb-3" src="project images/clothes.jpg">
						<div class="card-body">
							<h3 class="card-title" style="font-family:algerian">Clothes you would love</h3>
							<a href="clothes.php">Check more</a>
						</div>
				</div>

			</div>
			<div class="col-lg-4 col-mid-4 col-12 ml-5 pb-4 py-5">
				<div class="card">
		<img class="card-img-top pb-3" src="project images/shoes.jpg">
						<div class="card-body">
							<h3 class="card-title" style="font-family:algerian">Shoes</h3>
							<a href="shoes.php" >Check more</a>
						</div>
				</div>

			</div>
			<div class="col-lg-4 col-mid-4 col-12 ml-5 pb-4 py-5">
				<div class="card">
		<img class="card-img-top pb-3" src="project images/electronics.jpg">
						<div class="card-body">
							<h3 class="card-title" style="font-family:algerian">Electronic Gadgets</h3>
							<a href="electronic.php">Check more</a>
						</div>
				</div>

			</div>
			<div class="col-lg-4 col-mid-4 col-12 ml-5 pb-4 py-5">
				<div class="card">
		<img class="card-img-top pb-3" src="project images/medicines.jpg">
						<div class="card-body">
							<h3 class="card-title" style="font-family:algerian">Medicines</h3>
							<a href="medicine.php">Check more</a>
						</div>
				</div>

			</div>
		</div>
	</div>
</section>
<section class="project2 ml-5">
	<u><center><h2 class="py-5 ml-5" style="font-family:Berlin Sans FB Demi">😄Fashion Wear😄</h2></u>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-12">
				<img src="project images/mencloth.jpg" class="img-fluid">
			</div>
			<div class="col-lg-6 col-md-6 col-12">
				<div class="bg-dark">
					<h5 class="container-fluid" style="font-family:arial black; color:white">BLISSTONE Men Cotton Blend Colorblocked Mustard & Black Casual Shirt by Aarav Sales Corporation</h5>
				</div>
					<h5 class="ml-3 py-5" id="shop" style="font-family:josefin sans; color:black;font-size:30px">
																								Price Details</br>
																							Maximum Retail PriceRs. 1799</br>
																							(Incl. of all taxes)</br>
																						Discount54% OFF
																								Selling PriceRs. 827</br>
																								(Incl. of all taxes)</br>
					<ul class="pt-5" id="shop" style="font-family:verdana; color:black"><li style="font-family:verdana; color:black ;font-size:15px">100% Original Products</li>
																						<li style="font-family:verdana; color:black ;font-size:15px">Free Delivery on order above Rs. 799</li>
																						<li style="font-family:verdana; color:black ;font-size:15px">Pay on delivery might be available</li>
																						<li style="font-family:verdana; color:black ;font-size:15px">Easy 30 days returns and exchanges</li>
																						<li style="font-family:verdana; color:black ;font-size:15px">Try & Buy might be available</li>

					</ul>
					<form action="kart.php" method="POST">
						<div class="form-group">
							<button type="submit" class="btn btn-success" name="kart1">Add to Kart</button>
						</div>
					</form>
					<form action="wish.php" method="POST">
						<div class="form-group">
							<button type="submit" class="btn btn-warning" name="wish1">Add to WISHLIST</button>
						</div>
					</form>
			</div>
			<div class="col-lg-6 col-md-6 col-12">
				<img src="project images/womencloth.jpg" class="img-fluid">
			</div>
			<div class="col-lg-6 col-md-6 col-12">
				<div class="bg-dark">
					<h5 class="container-fluid" style="font-family:arial black; color:white">Inddus Women Green Yoke Design Anarkali Kurta with Dupttta</h5>
				</div>
					<h5 class="ml-3 py-5" id="shop" style="font-family:josefin sans; color:black;font-size:30px">
																								Price Details</br>
																							Maximum Retail PriceRs. 4213</br>
																							(Incl. of all taxes)</br>
																						Discount54% OFF
																								Selling PriceRs. 8500</br>
																								(Incl. of all taxes)</br>
					<ul class="pt-5" id="shop" style="font-family:verdana; color:black"><li style="font-family:verdana; color:black ;font-size:15px">100% Original Products</li>
																						<li style="font-family:verdana; color:black ;font-size:15px">Free Delivery on order above Rs. 799</li>
																						<li style="font-family:verdana; color:black ;font-size:15px">Pay on delivery might be available</li>
																						<li style="font-family:verdana; color:black ;font-size:15px">Easy 30 days returns and exchanges</li>
																						<li style="font-family:verdana; color:black ;font-size:15px">Try & Buy might be available</li>

					</ul>
					<?php
							$_SEESION['name']='Inddus Women Green Yoke Design Anarkali Kurta';
							$_SESSION['price']=4213;
					?>
					<form action="kart.php" method="POST">
						<div class="form-group">
							<button type="submit" class="btn btn-success" name="kart2">Add to Kart</button>
						</div>
					</form>
					<form action="wish.php" method="POST">
						<div class="form-group">
							<button type="submit" class="btn btn-warning" name="wish2">Add to WISHLIST</button>
						</div>
					</form>
			</div>
			<div class="col-lg-6 col-md-6 col-12">
				<img src="project images/kidcloth.jpg" class="img-fluid">
			</div>
			<div class="col-lg-6 col-md-6 col-12">
				<div class="bg-dark">
					<h5 class="container-fluid" style="font-family:arial black; color:white">Bitiya by Bhama</h5>
				</div>
					<h5 class="ml-3 py-5" id="shop" style="font-family:josefin sans; color:black;font-size:30px">
																								Price Details</br>
																							Maximum Retail PriceRs. 1377</br>
																							(Incl. of all taxes)</br>
																						Discount 47% OFF
																								Selling PriceRs. 2599</br>
																								(Incl. of all taxes)</br>
					<ul class="pt-5" id="shop" style="font-family:verdana; color:black"><li style="font-family:verdana; color:black ;font-size:15px">100% Original Products</li>
																						<li style="font-family:verdana; color:black ;font-size:15px">Free Delivery on order above Rs. 799</li>
																						<li style="font-family:verdana; color:black ;font-size:15px">Pay on delivery might be available</li>
																						<li style="font-family:verdana; color:black ;font-size:15px">Easy 30 days returns and exchanges</li>
																						<li style="font-family:verdana; color:black ;font-size:15px">Try & Buy might be available</li>

					</ul>
					<?php
							$_SESSION['name']="Bitiya by Bhama";
							$_SESSION['price']=1377;
					?>
					<form action="kart.php" method="POST">
						<div class="form-group">
							<button type="submit" class="btn btn-success" name="kart3">Add to Kart</button>
						</div>
					</form>
					<form action="wish.php" method="POST">
						<div class="form-group">
							<button type="submit" class="btn btn-warning" name="wish3">Add to WISHLIST</button>
						</div>
					</form>
			</div>
		</div>
	</div>
</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <footer>
	<h6 class="p-3 bg-dark text-white text-center" style="font-size:15px">@amrit-corporation</h6>
  </footer>
</body>
</html>