<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Checkout</title>

	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />
	<link type="text/css" rel="stylesheet" href="css/slick.css" />
	<link type="text/css" rel="stylesheet" href="css/slick-theme.css" />
	<link type="text/css" rel="stylesheet" href="css/nouislider.min.css" />
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link type="text/css" rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="style.css" />
	<link rel="stylesheet" href="bootstrap-icons.css" />
</head>

<body>
		<div id="breadcrumb" class="section">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h3 class="breadcrumb-header text-primary">Checkout</h3>
						<ul class="breadcrumb-tree">
							<li><a href="cart.php">Cart</a></li>
							<li class="active">Checkout</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="section">
			<div class="container">
				<div class="row">
					<div class=" col-12 col-lg-7">
						<div class="billing-details">
							<div class="section-title">
								<h3 class="title text-primary">Shipping address</h3>
							</div>

							<div class="form-group">
								<input class="input" type="text" name="first-name" value="Your First Name Here" readonly>
							</div>
							<div class="form-group">
								<input class="input" type="text" name="last-name" value="Your Last Name Here" readonly>
							</div>
							<div class="form-group">
								<input class="input" type="email" name="email" value="Your Email Address Here" readonly>
							</div>
							<div class="form-group">
								<input class="input" type="text" name="address" value=" Address Line 01 Here" readonly>
							</div>
							<div class="form-group">
								<input class="input" type="text" name="city" value="City Name" readonly>
							</div>
							<div class="form-group">
								<input class="input" type="text" name="zip-code" value="Postal Code Here" readonly>
							</div>
							<div class="form-group">
								<input class="input" type="tel" name="tel" value="Mobile Number Here" readonly>
							</div>

						</div>


						<!-- Shiping Details -->
						<div class="shiping-details">
							<div class="section-title">
								<h3 class="title text-primary">Billing address</h3>
							</div>
							<div class="form-group">
								<input class="input" type="email" name="email" value="Delta Codex Software Solutions" readonly>
							</div>
							<div class="form-group">
								<input class="input" type="email" name="email" value="deltacodexsoftwares@gmail.com" readonly>
							</div>
							<div class="form-group">
								<input class="input" type="text" name="address" value="No. 50, Independent Trade Center," readonly>
							</div>
							<div class="form-group">
								<input class="input" type="text" name="city" value="Bandarawela" readonly>
							</div>
							<div class="form-group">
								<input class="input" type="text" name="country" value="Sri Lanka" readonly>
							</div>
							<div class="form-group">
								<input class="input" type="text" name="zip-code" value="90100" readonly>
							</div>
							<div class="form-group">
								<input class="input" type="tel" name="tel" value="+94 75 144 1764" readonly>
							</div>

						</div>
					</div>

					<!-- Order Details -->
					<div class="col-md-5 order-details">
						<div class="section-title text-center">
							<h2 class="title text-primary">Checkout Process</h2>
						</div>
						<div class="order-summary">
							<div class="order-col"></div>
							<div class="order-products">
								<div class="order-col">
									<div>Product Title Here</div>
									<div>10 items</div>
									<div>Rs.00.00</div>
								</div>
							</div>

							<div class="order-col">
								<div><strong class="text-danger">0</strong> Products Selected</div>
								<div><strong>Rs.00 .00</strong></div>
							</div>
							<div class="order-col">
								<div id="qty_input">Shipping</div>
								<div><strong>Rs.00.00</strong></div>
							</div>
							<div class="order-col">
								<div><strong>Sub Total</strong></div>
								<div><strong class="text-primary">Rs.00.00</strong></div>
							</div>
						</div>
						<div class="payment-method">
							<div class="input-radio">
								<input type="radio" name="payment" id="payment-1">
								<label for="payment-1">
									<span></span>
									Direct Bank Transfer
								</label>
								<div class="caption">
									<p>Account Number :- 000000000</p>
									<p>Account Type :- Savings Account</p>
									<p>Bank Name :- Bank Bank</p>
									<p>Branch Name :- Bandarawela</p>
									<p>Account Holder Name :- ABCD</p>
									<p>Country:- Sri Lanka</p><br>
								</div>
							</div>

							<div class="input-radio">
								<input type="radio" name="payment" id="payment-3">
								<label for="payment-3">
									<span></span>
									Paypal System
								</label>
								<div class="caption">
									<p>Paypal systems are accepted</p>
								</div>
							</div>
						</div>
						<div class="input-checkbox">
							<input type="checkbox" id="terms">
							<label for="terms">
								<span></span>
								I've read and accept the <a href="#">terms & conditions</a>
							</label>
						</div>
						<button type="submit" id="payhere-payment" class="primary-btn order-submit">Place order</button>
					</div>
				</div>
			</div>
		</div>
		<!-- jQuery Plugins -->
		<script src="bootstrap.bundle.js"></script>
		<script src="script.js"></script>
		<!-- <script type="text/javascript" src="https://www.payhere.lk/lib/payhere.js"></script> -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/slick.min.js"></script>
		<script src="js/nouislider.min.js"></script>
		<script src="js/jquery.zoom.min.js"></script>
		<script src="js/main.js"></script>

</body>
</html>