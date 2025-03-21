<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />
	<link type="text/css" rel="stylesheet" href="bootstrap-icons.css" />
	<link type="text/css" rel="stylesheet" href="css/slick.css" />
	<link type="text/css" rel="stylesheet" href="css/slick-theme.css" />
	<link type="text/css" rel="stylesheet" href="css/nouislider.min.css" />
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link type="text/css" rel="stylesheet" href="css/style.css" />
	<link rel="icon" href="resources/logo.png" />
</head>

<body class="body">
	<div classs="vh-100 w-100 ">
		<div class="">
			<div class="col-12">
				<header>
					<div id="top-header">
						<div class="container">
							<ul class="header-links pull-left">
								<li><a href="tel:+94751441764"><i class="fa fa-phone"></i> 0751441764</a></li>
								<li><a href="mailto:deltacodexoftwares@gmail.com"><i class="fa fa-envelope-o"></i> deltacodexoftwares@gmail.com</a></li>
								<li><a href="#"><i class="fa fa-map-marker"></i>Visit Us</a></li>
							</ul>

							<ul class="header-links pull-right">
								<li><a href="#"><i class="fa fa-facebook-official"></i> facebook</a></li>
								<li><a href="#"><i class="fa fa-youtube"></i> youtube</a></li>
								<li><a href="userprofile.php"><i class="fa fa-user-o"></i> Your Profile</a></li>
								<li><a href=""><i class="fa fa-sign-out"></i> SignOut</a></li>

								<!-- <li><a href="index.php"><i class="fa fa-user-o"></i> Log In</a></li> -->
						</div>
					</div>
					</ul>
					<div id="header">
						<div class="container">
							<div class="row">
								<div class="col-md-3 clearfix">
									<div class="header-ctn">

										<!-- Purchasing History -->
										<div class="dropdown" style="cursor: pointer;">
											<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
												<i class="fa fa-credit-card"></i>
												<span>My Orders</span>
												<div class="qty">5</div>
											</a>

											<div class="cart-dropdown">
												<div class="cart-list">
													<div class="product-widget">
														<div class="product-img">
															<img src="category\Product\Sony PlayStation 5 Slim_1_667b14ed2705d.jpeg" />
														</div>
														<div class="product-body">
															<h3 class="product-name"><a href="#">Product Title Here</a></h3>
															<h4 class="product-price"><span class="qty">1x</span>Rs.00.00</h4>
														</div>
													</div>
												</div>
												<div class="cart-btns" style="display: flex; justify-content: center;">
													<a href="home.php">Home</a>
													<a href="purchasingHistory.php">View Purchasing History <i class="fa fa-arrow-circle-right"></i></a>
												</div>
											</div>
										</div>
										<!-- /Purchasing History -->

										<!-- Chat -->
										<div class="dropdown" style="cursor: pointer;">
											<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
												<i class="fa fa-comment"></i>
												<span>Chat Admin</span>
												<div class="qty">5</div>
											</a>
											<div class="cart-dropdown" style="background-image: url('resources/peakpx.jpg');">
												<div class="cart-list" style="overflow-x: hidden;">
													<div class="product-widget">
														<div class="product-body">
															<div class="col-12">
																<div class="row">
																	<div class="col-10 rounded-4" style="background-color: #075E54; width:90%;">
																		<div class="row">
																			<div class="col-10 offset-1 pt-3">
																				<span class="text-white fw-bold fs-5">Hello Admin</span>
																			</div>
																			<div class="col-10 offset-1 text-end pb-2">
																				<span class="text-light fs-6">2024.07.07 12.00.00</span>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="product-widget">
														<div class="product-body">
															<!-- received -->
															<div class="col-12">
																<div class="row">
																	<div class="col-10 rounded-4" style="background-color: #444444; width:90%; margin-left:-60px;">
																		<div class="row">
																			<div class="col-10 offset-1 pt-3">
																				<span class="text-white fw-bold fs-5">Hello User</span>
																			</div>
																			<div class="col-10 offset-1 text-start pb-2">
																				<span class="text-light fs-6">2024.07.07 12.00.00</span>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<!-- received -->
														</div>
													</div>
												</div>
												<div class="cart-btns" style="display: flex; justify-content: center;">
													<a href="home.php">Cancel</a>
													<a>Leave Quick Text<i class="fa fa-arrow-circle-right"></i></a>
												</div>
											</div>
										</div>
										<!-- /Chat -->
									</div>
								</div>

								<!-- msg modal -->
								<div class="modal" tabindex="-1" id="contactAdmin">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header" style="background-color: #075E54;">
												<h5 class="modal-title title1 text-uppercase fw-bold fs-4" style="color: #ffffff;">Administrator | </h5>
												<button type="button" class="btn-close text-light border border-2 border-warning" data-bs-dismiss="modal" aria-label="Close"></button>
											</div>
											<div class="modal-footer" style="background-image: url('resources/0a755a111030c39fca13d9fa38931f20.jpg');">
												<div class="col-12 ">
													<div class="row">
														<div class="col-10">
															<input type="text" class="form-control text-light border border-0 py-2" style="background-color: #444444;" id="msgtxt" placeholder="Chat with admin......" />
														</div>
														<div class="col-2 d-grid">
															<button type="button" class="btn"><i class="bi bi-send-fill fs-2" style="color: #075E54;"></i></button>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- msg modal -->

								<div class="col-md-6">
									<div class="header-search">

										<select class="input-select" id="basic_search_select" style="max-width: 150px;">
											<option value="0">All Categories</option>
											<option value="">Electronics Item</option>
											<option value="">Electrical Item</option>
											<option value="">Spare Parts Item</option>
										</select>
										<input class="input" type="text" aria-label="Text input with dropdown button" placeholder="Search here" id="basic_search_txt">
										<button class="search-btn">Search</button>
									</div>
								</div>


								<!-- ACCOUNT -->
								<div class="col-md-3 clearfix">
									<div class="header-ctn">

										<!-- Wishlist -->
										<div class="dropdown" style="cursor: pointer;">
											<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
												<i class="fa fa-heart"></i>
												<span>Your Wishlist</span>
												<div class="qty">5</div>
											</a>
											<div class="cart-dropdown">
												<div class="cart-list">
													<div class="product-widget">
														<div class="product-img"><img src="category\Product\rice1.jpg" /></div>
														<div class="product-body">
															<h3 class="product-name"><a href="#">Product Title Here</a></h3>
															<h4 class="product-price"><span class="qty">1x</span>Rs.00.00</h4>
														</div>
													</div>
												</div>
												<div class="cart-btns" style="display: flex; justify-content: center;">
													<a href="home.php">Home</a>
													<a href="wishlist.php">View Wishlist <i class="fa fa-arrow-circle-right"></i></a>
												</div>
											</div>
										</div>
										<!-- /Wishlist -->

										<!-- Cart -->
										<div class="dropdown" style="cursor: pointer;">
											<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
												<i class="fa fa-shopping-cart"></i>
												<span>Your Cart</span>
												<div class="qty">5</div>
											</a>
											<div class="cart-dropdown">
												<div class="cart-list">
													<div class="product-widget">
														<div class="product-img">
															<img src="category\Product\pigeon2.jpg" alt="">
														</div>
														<div class="product-body">
															<h3 class="product-name"><a href="#">Product Title Here</a></h3>
															<h4 class="product-price"><span class="qty">1x</span>Rs.00.00</h4>
														</div>
													</div>
												</div>
												<div class="cart-btns" style="display: flex; justify-content: center;">
													<a href="cart.php">View Cart</a>
													<a href="checkout.php">Checkout <i class="fa fa-arrow-circle-right"></i></a>
												</div>
											</div>
										</div>
										<!-- /Cart -->
									</div>
								</div>
							</div>
						</div>
					</div>
				</header>
			</div>
		</div>

	</div>
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/slick.min.js"></script>
	<script src="js/nouislider.min.js"></script>
	<script src="js/jquery.zoom.min.js"></script>
	<script src="js/main.js"></script>
	<Script src="script.js"></Script>
	<Script src="bootstrap.bundle.js"></Script>
</body>

</html>