<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="resources/logo.png" />
	<title>Product Title Here</title>


	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />
	<link type="text/css" rel="stylesheet" href="css/slick.css" />
	<link type="text/css" rel="stylesheet" href="css/slick-theme.css" />
	<link type="text/css" rel="stylesheet" href="css/nouislider.min.css" />
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link type="text/css" rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
	<link rel="stylesheet" href="bootstrap.css" />

</head>

<body style="overflow-x: hidden;">

	<div class="section">
		<div class="container">
			<div class="row">
				<div class="col-md-5 col-md-push-2">
					<div id="product-main-img">
						<div class="product-preview">
							<img src="category\Product\Asus Prime A520M-E MICRO ATX Motherboard_0_6675d5718f645.jpeg" />
						</div>
					</div>
				</div>

				<div class="col-md-2  col-md-pull-5">
					<div id="product-imgs">
						<div class="product-preview">
							<img src="category\Product\Asus Prime A520M-E MICRO ATX Motherboard_0_6675c4602cc1e.jpeg" />
						</div>
						<div class="product-preview">
							<img src="category\Product\Asus Prime A520M-E MICRO ATX Motherboard_5_6675d5719b152.jpeg" />
						</div>
						<div class="product-preview">
							<img src="category\Product\Asus Prime A520M-E MICRO ATX Motherboard_2_6675c4602e98d.jpeg" />
						</div>
						<div class="product-preview">
							<img src="category\Product\Asus Prime A520M-E MICRO ATX Motherboard_4_6675d5afbebae.jpeg" />
						</div>
						<div class="product-preview">
							<img src="category\Product\Asus Prime A520M-E MICRO ATX Motherboard_2_6675c4602e98d.jpeg" />
						</div>
					</div>
				</div>

				<div class="col-md-5">
					<div class="product-details">
						<?php

						?>
						<h2 class="product-name" style="color: black;">Product Title Here</h2>
						<div>
							<div class="product-rating">
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
							</div>

						</div>
						<div>
							<h3 class="product-price">Rs.00.00 <del class="product-old-price">Rs.00.00</del></h3>
							<div><span class="product-available"> 10 In Stock</span>
							</div>
						</div>
						<div class="">
							<div class="qty-label" style="width: 275px; margin-top: 10px;">
								<div class="input-number">
									<input type="number" style="outline: none;" value="1" pattern="[0-9]" id="qty_input" onkeyup='checkValue();'>
									<span class="qty-up" onclick='qty_inc();'>+</span>
									<span class="qty-down" onclick='qty_dec();'>-</span>
								</div>
							</div>

						</div>
						<div class="add-to-cart" style="display: flex; flex-direction: column;">
							<button class="add-to-cart-btn" style="margin-top: 10px; width: 275px;" ; type="submit" id="payhere-payment"><i class="fa fa-usd"></i>buy now</button>
						</div>

						<ul class="product-btns">
							<li><a href="#">
									<i class="fa fa-heart-o text-dark"></i> Add to wishlist</a></li>
						</ul>
						<ul class="product-links">
							<li>Share:</li>
							<li><a href="#"><i class="fa fa-facebook-official"></i></a></li>
							<li><a href="#"><i class="fa fa-whatsapp"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram"></i></a></li>
							<li><a href="#"><i class="fa fa-youtube"></i></a></li>
						</ul>
					</div>

				</div>
				<!-- /Product details -->

				<!-- Product tab -->
				<div class="col-md-12">

					<div id="product-tab">
						<!-- product tab nav -->
						<ul class="tab-nav">
							<li class="active"><a data-toggle="tab" href="#tab1">Description</a></li>

							<li><a data-toggle="tab" href="#tab3">Reviews (2)</a></li>
						</ul>
						<!-- /product tab nav -->

						<!-- product tab content -->
						<div class="tab-content">
							<!-- tab1  -->
							<div id="tab1" class="tab-pane fade in active">
								<div class="row">
									<div class="col-md-12">
										<p>Your Description Here</p>
									</div>
								</div>
							</div>
							<!-- /tab1  -->

							<!-- tab3  -->
							<div id="tab3" class="tab-pane fade in">
								<div class="row">
									<div class="col-md-3 d-none">
										<div class="col-md-3 d-sm-block d-lg-none">
											<div id="rating">
												<div class="rating-avg">
													<span>5.0</span>
													<div class="rating-stars">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
													</div>
												</div>
											</div>
										</div>
										<!-- /Rating -->

										<!-- Reviews -->
										<div class="col-md-7">
											<div id="reviews">
												<ul class="reviews" id="view_area">
														<li>
															<div class="review-heading">
																<h5 class="name text-dark">User Name</h5>

																<p class="date">2024.07.07 12:00:00</p>
																<div class="review-rating">
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																		<i class="fa fa-star"></i>
																</div>
															</div>
															<div class="review-body">
																<p>Feedback Shows on here</p>
															</div>
														</li>
												</ul>
											</div>
										</div>
										<!-- /Reviews -->

										<!-- Review Form -->
										<div class="col-md-5">
											<div id="review-form">
												<div class="review-form">
													<textarea class="input" placeholder="Your Review" id="feed"></textarea>
													<div class="input-rating">
														<span>Your Rating: </span>
														<div class="stars">
															<input id="type5" name="rating" value="5" type="radio" /><label for="type5" checked></label>
															<input id="type4" name="rating" value="4" type="radio"><label for="type4" checked></label>
															<input id="type3" name="rating" value="3" type="radio" /><label for="type3" checked></label>
															<input id="type2" name="rating" value="2" type="radio" /><label for="type2" checked></label>
															<input id="type1" name="rating" value="1" type="radio" /><label for="type1" checked></label>
														</div>
													</div>
													<button class="primary-btn">Submit</button>
												</div>
											</div>
											<br>
											<div class="col-12 d-none" id="addmsgdiv">
												<div class="alert alert-success" role="alert" id="addalertdiv">
													<i class="bi bi-check2-circle fs-5" id="addmsg">
													</i>
												</div>
											</div>
										</div>
										<!-- Review Form -->

									</div>
								</div>
							</div>
						</div>
					</div>

				</div>

			</div>
		</div>

		<!-- jQuery Plugins -->
		<!-- <script src="js/jquery.min.js"></script> -->
		<script src="js/bootstrap.min.js"></script>
		<script src="js/slick.min.js"></script>
		<script src="js/nouislider.min.js"></script>
		<script src="js/jquery.zoom.min.js"></script>
		<script src="js/main.js"></script>
		<script src="bootstrap.bundle.js"></script>
		<script src="script.js"></script>
		<script type="text/javascript" src="https://www.payhere.lk/lib/payhere.js"></script>
</body>
<?php require "footer.php" ?>

</html>