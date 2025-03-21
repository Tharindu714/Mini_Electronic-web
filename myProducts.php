<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>My Product</title>
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">
		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />
		<link type="text/css" rel="stylesheet" href="css/slick.css" />
		<link type="text/css" rel="stylesheet" href="css/slick-theme.css" />
		<link type="text/css" rel="stylesheet" href="css/nouislider.min.css" />
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link type="text/css" rel="stylesheet" href="css/style.css" />
		<link rel="stylesheet" href="style.css" />
		<link rel="icon" href="resources/logo.png" />
	</head>

	<body class="body">

		<div class="container-fluid vh-100">
			<div class="row">
				<div class="col-12  d-flex justify-content-center vh-100">

					<div id="breadcrumb" class="section" style="height:80px; background-color: rgba(43, 45, 66, 0.91);">

						<div class="container">

							<div class="row bread">
								<div class="col-md-3 breadcrumb-resp" style="margin-top: 22px;">
									<ul class="breadcrumb-tree">
										<li><a href="html/index.php">Dashboard</a></li>
										<li><a href="myProducts.php">My Product</a></li>
									</ul>
								</div>
								<div class="col-md-6 col-sm-6 col-xs-6 wishlist" style="display: flex; justify-content: center; margin-top: 16px;">
									<h2 class="f3" style="font-weight:normal; color: white;">My Products</h2>
									<a href="#" style="font-size: 24px; margin-left: 5px; color: #0073e6;"><i class="fa fa-shopping-basket" aria-hidden="true"></i></a>


								</div>
								<div class="col-md-3 col-sm-6 col-xs-6">

									<ul class="add-product-btns d-block justify-content-center align-content-center" style="margin-top: 20px;">
										<li style="font-size: 13px; background-color: #0073e6; width:130px; height: 20px; border-radius: 10px;"><a href="addProduct.php" style="margin-left: 16px; color: white; align-items: center;">ADD PRODUCTS</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>


				<div class="section">
					<div class="container">
						<div class="row">
							<div id="aside" class="col-12 col-sm-12 col-md-3 text-center">
								
									<!-- aside Widget -->
									<div class="aside">
										<h3 class="aside-title text-primary">Categories</h3>
										<div class="checkbox-filter">
											<div class="input-checkbox">
												<input type="radio" id="Electronic" name="r1">
												<label for="Electronic">
													<span></span>
													Sort By - Electronics
												</label>
											</div>

											<div class="input-checkbox">
												<input type="radio" id="Electricals" name="r1">
												<label for="Electricals">
													<span></span>
													Sort By - Electricals
												</label>
											</div>

											<div class="input-checkbox">
												<input type="radio" id="spares" name="r1">
												<label for="spares">
													<span></span>
													Sort By - SpareParts
												</label>
											</div>
										</div>
									</div>
									<!-- /aside Widget -->

									<!-- aside Widget -->
									<div class="aside">
										<h3 class="aside-title text-primary">Active Time</h3>
										<div class="checkbox-filter">
											<div class="input-checkbox">
												<input type="radio" id="new" name="r2">
												<label for="new">
													<span></span>
													Latest Products
												</label>
											</div>

											<div class="input-checkbox">
												<input type="radio" id="old" name="r2">
												<label for="old">
													<span></span>
													Oldest Products
												</label>
											</div>

										</div>
									</div>
									<!-- /aside Widget -->

									<!-- aside Widget -->
									<div class="aside">
										<h3 class="aside-title text-primary">By Quantity</h3>
										<div class="checkbox-filter">
											<div class="input-checkbox">
												<input type="radio" id="high" name="r5">
												<label for="high">
													<span></span>
													QTY - High to Low
												</label>
											</div>

											<div class="input-checkbox">
												<input type="radio" id="low" name="r5">
												<label for="low">
													<span></span>
													QTY - Low to High
												</label>
											</div>

										</div>
									</div>
									<!-- /aside Widget -->

									<!-- aside Widget -->
									<div class="aside">
										<h3 class="aside-title text-primary">By Price</h3>
										<div class="checkbox-filter">
											<div class="input-checkbox">
												<input type="radio" id="hprice" name="r5">
												<label for="hprice">
													<span></span>
													Price - High to Low
												</label>
											</div>

											<div class="input-checkbox">
												<input type="radio" id="lprice" name="r5">
												<label for="lprice">
													<span></span>
													Price - Low to High
												</label>
											</div>

										</div>
									</div>
									<!-- /aside Widget -->

									<!-- aside Widget -->
									<div class="aside">
										<div class="product">
											<div class="product product-body">
												<div class="product-btns">
													<button class="add-to-wishlist">
														<i class="fa fa-dropbox text-dark"></i>
														<span class="tooltipp">Sort Product</span>
													</button>
													<button class="add-to-wishlist">
														<i class="fa fa-refresh text-dark"></i>
														<span class="tooltipp">Clear Sort</span>
													</button>
												</div>
											</div>
										</div>
									</div>
									<!-- /aside Widget -->
			
									<!-- aside Widget -->
									<div class="aside">
										<h3 class="aside-title text-primary">Most Recent Products</h3>
											<div class="product-widget">
												<div class="product-img">
													<img src="category\Product\hikvisionCamera2.jpg" alt="">
												</div>
												<div class="product-body">
													<p class="product-category">Electronic Items</p>

													<h3 class="product-name"><a href="#">Product Title Here</a></h3>
													<h4 class="product-price">Rs. 000.00 </h4>
												</div>
											</div>

											<div class="product-widget">
												<div class="product-img">
													<img src="category\Product\pigeon4.jpg" alt="">
												</div>
												<div class="product-body">
													<p class="product-category">Electrical Items</p>

													<h3 class="product-name"><a href="#">Product Title Here</a></h3>
													<h4 class="product-price">Rs. 000.00 </h4>
												</div>
											</div>

											<div class="product-widget">
												<div class="product-img">
													<img src="category\Product\Abans 32D52 TV Backlight Strips_3_667bcb21cb702.jpeg" alt="">
												</div>
												<div class="product-body">
													<p class="product-category">Spare Parts</p>

													<h3 class="product-name"><a href="#">Product Title Here</a></h3>
													<h4 class="product-price">Rs. 000.00 </h4>
												</div>
											</div>>
									</div>
									<!-- /aside Widget -->

							</div>
							<!-- /ASIDE -->

							<!-- STORE -->
							<div id="store" class="col-12 col-md-9">

								<!-- store products -->
								<div class="row" id="sort">
										<!-- product -->
										<div class="col-12 col-md-4">
											<div class="product">
												<div class="product-img">
													<img src="category\Product\nintendo1.jpg" alt="">
													<div class="product-label">
														<span class="new">01</span>
													</div>
												</div>
												<div class="product-body">
													<h3 class="product-name"><a href="#">Product Title Here</a></h3>

													<h4 class="product-price">Rs.00.00 <del class="product-old-price">Rs.00.00</del></h4>
													<div class="product-rating">
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
																<i class="fa fa-star"></i>
													</div>
													<div class="product-btns">
															<button class="add-to-wishlist">
																<i class="fa fa-toggle-on text-primary"></i><span class="tooltipp">Deactivate</span></button>

														<button class="quick-view"  onclick="window.location='updateProduct.php'"><i class="fa fa-upload"></i><span class="tooltipp">Update Product</span></button>
													</div>

												</div>
											</div>
											<div class="col-12" style="display: none;" id="activemsgdiv">
												<div class="alert alert-danger" role="alert" id="activealertdiv">
													<i class="bi bi-x-octagon-fill fs-5" id="activemsg">

													</i>
												</div>
											</div>
										</div>
										<!-- /product -->

										<div class="clearfix visible-sm visible-xs"></div>
								</div>
								<!-- /store products -->

								<!-- store bottom filter -->
								<div class="store-filter clearfix">
									<ul class="store-pagination">
												<li class="active"><a href="" class="text-light"><?php echo 1; ?></a></li>

												<li><a href=""><?php echo 2; ?></a></li>

									</ul>
								</div>
								<!-- /store bottom filter -->

							</div>
							<!-- /STORE -->
						</div>
						<!-- /row -->
					</div>
					<!-- /container -->
				</div>
				<!-- /SECTION -->
			</div>
		</div>

		<?php require "footer.php" ?>

		<!-- jQuery Plugins -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/slick.min.js"></script>
		<script src="js/nouislider.min.js"></script>
		<script src="js/jquery.zoom.min.js"></script>
		<script src="js/main.js"></script>
		<script src="script.js"></script>
		<script src="bootstrap.bundle.js"></script>

	</body>

</html>