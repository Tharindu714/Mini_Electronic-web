<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>your Cart page</title>

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />
    <link type="text/css" rel="stylesheet" href="css/slick.css" />
    <link type="text/css" rel="stylesheet" href="css/slick-theme.css" />
    <link type="text/css" rel="stylesheet" href="css/nouislider.min.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="bootstrap-icons.css" />
    <link rel="icon" href="resources/logo.png" />
</head>

<body>
    <?php require "header.php"; ?>

    <div class="container-fluid vh-100">
        <div class="row">
            <div class="col-12  d-flex justify-content-center vh-100">
                <div id="breadcrumb" class="section" style="height:80px; background-color: rgba(43, 45, 66, 0.91);">
                    <div class="container">
                        <div class="row  bread">
                            <div class="col-md-3 breadcrumb-resp" style="margin-top: 20px;">
                                <ul class="breadcrumb-tree">
                                    <li><a href="home.php">Home</a></li>
                                    <li><a href="cart.php">cart</a></li>
                                </ul>
                            </div>

                            <div class="col-md-6 col-sm-5 col-xs-5 wishlist" style="display: flex; justify-content: center; margin-top: 18px;">
                                <h2 class="f3" style="font-weight:normal; color: white;">My Cart</h2>
                                <a href="#" style="font-size: 24px; margin-left: 5px; color: #0073e6;"><i class="fa fa-cart-plus" aria-hidden="true"></i></a>
                            </div>
                            <div class="col-md-3 col-sm-5 col-xs-5 search-bar">
                                <div class="header-search">
                                    <input class="input-search" placeholder="Search here" id="c">
                                    <button class="search-icon" style="font-size: 14px;"><i class="fa fa-search" aria-hidden="true"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- empty view -->
        <!-- <div class="col-12 ">
            <div class="row">
                <div class="col-12 empty-cart"></div><br>
                <div class="col-12 text-center">
                    <label class="form-label f" style="font-size: 22px; font-weight: normal;">You have no items in your Cart yet.</label>
                </div>
                <br>
                <div class="offset-4 col-12 d-grid mb-3" style="display: flex; justify-content: center;">
                    <a class="primary-shop-btn cta-btn" href="home.php">Shop now</a>
                </div><br>
            </div>
        </div> -->
        <!-- empty view -->

        <div class="col-12 col-lg-9">

            <div class="row" style="display: flex; justify-content: center;">
                <div class="wishlist-box1 col-lg-8" style="height:325px; width:80%; margin-bottom: 20px;">
                    <div class="product-wishlist" style="display:flex; flex-direction:row; display: flex; align-items: center; display: flex; justify-content: center;">
                        <div class="product-image"><img src="category\Product\_0_6675d3012e0ce.jpeg" alt="" class="img"></div>
                        <div class="product-details" style="margin-left: 15px;">
                            <div class="product-body">
                                <p class="product-category">Seller: Delta Codex software Solutions</p>
                                <h3 class="product-name"><a href="#">Product Title Here</a></h3>
                                <div class="product-label1">
                                    <span class="new">NEW</span>
                                </div>
                                <h4 class="product-price">Rs.00.00</h4><br>

                                <div class="product-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div>
                                    <span class="product-available">10 In Stock</span>
                                </div>
                            </div>
                        </div>
                        <div class="product-details" style="margin-left: 10px; margin-right: 10px;">
                            <div class="">
                                <div class="qty-label" style="width: 200px; margin-top: 30px;">

                                    <div class="input-number">
                                        <input type="number" style="outline: none;" value="1" pattern="[0-9]" id="qty_input" onkeyup='checkValue();'>
                                        <span class="qty-up" onkeyup='qty_inc();'>+</span>
                                        <span class="qty-down" onkeyup='qty_dec();'>-</span>
                                    </div>
                                </div>

                            </div>

                            <div class="add-to-cart" style="display: flex; flex-direction: column; ">
                                <button class="add-to-cart-btn1" style="margin-top: 10px; width: 200px; font-weight: bold;" type="submit" id="payhere-payment"><i class="fa fa-usd"></i> &nbsp; BUY NOW</button>
                                <button class="add-to-cart-btn" style="margin-top: 10px; width: 200px;"><i class="fa fa-trash"></i>remove</button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="row" style="display: flex; justify-content: center;">
                <div class="wishlist-box1 col-lg-8" style="height:325px; width:80%; margin-bottom: 20px;">
                    <div class="product-wishlist" style="display:flex; flex-direction:row; display: flex; align-items: center; display: flex; justify-content: center;">
                        <div class="product-image"><img src="category\Product\nintendo4.png" alt="" class="img"></div>
                        <div class="product-details" style="margin-left: 15px;">
                            <div class="product-body">
                                <p class="product-category">Seller: Delta Codex software Solutions</p>
                                <h3 class="product-name"><a href="#">Product Title Here</a></h3>
                                <div class="product-label1">
                                    <span class="new">NEW</span>
                                </div>
                                <h4 class="product-price">Rs.00.00</h4><br>

                                <div class="product-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div>
                                    <span class="product-available">10 In Stock</span>
                                </div>
                            </div>
                        </div>
                        <div class="product-details" style="margin-left: 10px; margin-right: 10px;">
                            <div class="">
                                <div class="qty-label" style="width: 200px; margin-top: 30px;">

                                    <div class="input-number">
                                        <input type="number" style="outline: none;" value="1" pattern="[0-9]" id="qty_input" onkeyup='checkValue();'>
                                        <span class="qty-up" onkeyup='qty_inc();'>+</span>
                                        <span class="qty-down" onkeyup='qty_dec();'>-</span>
                                    </div>
                                </div>

                            </div>

                            <div class="add-to-cart" style="display: flex; flex-direction: column; ">
                                <button class="add-to-cart-btn1" style="margin-top: 10px; width: 200px; font-weight: bold;" type="submit" id="payhere-payment"><i class="fa fa-usd"></i> &nbsp; BUY NOW</button>
                                <button class="add-to-cart-btn" style="margin-top: 10px; width: 200px;"><i class="fa fa-trash"></i>remove</button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row" style="display: flex; justify-content: center;">
                <div class="wishlist-box1 col-lg-8" style="height:325px; width:80%; margin-bottom: 20px;">
                    <div class="product-wishlist" style="display:flex; flex-direction:row; display: flex; align-items: center; display: flex; justify-content: center;">
                        <div class="product-image"><img src="category\Product\pigeon3.png" alt="" class="img"></div>
                        <div class="product-details" style="margin-left: 15px;">
                            <div class="product-body">
                                <p class="product-category">Seller: Delta Codex software Solutions</p>
                                <h3 class="product-name"><a href="#">Product Title Here</a></h3>
                                <div class="product-label1">
                                    <span class="new">NEW</span>
                                </div>
                                <h4 class="product-price">Rs.00.00</h4><br>

                                <div class="product-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div>
                                    <span class="product-available">10 In Stock</span>
                                </div>
                            </div>
                        </div>
                        <div class="product-details" style="margin-left: 10px; margin-right: 10px;">
                            <div class="">
                                <div class="qty-label" style="width: 200px; margin-top: 30px;">

                                    <div class="input-number">
                                        <input type="number" style="outline: none;" value="1" pattern="[0-9]" id="qty_input" onkeyup='checkValue();'>
                                        <span class="qty-up" onkeyup='qty_inc();'>+</span>
                                        <span class="qty-down" onkeyup='qty_dec();'>-</span>
                                    </div>
                                </div>

                            </div>

                            <div class="add-to-cart" style="display: flex; flex-direction: column; ">
                                <button class="add-to-cart-btn1" style="margin-top: 10px; width: 200px; font-weight: bold;" type="submit" id="payhere-payment"><i class="fa fa-usd"></i> &nbsp; BUY NOW</button>
                                <button class="add-to-cart-btn" style="margin-top: 10px; width: 200px;"><i class="fa fa-trash"></i>remove</button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- summary -->
        <div class="col-12 col-lg-3">
            <div class="row product-wishlist">

                <div class="col-12" style="display:flex; justify-content: center; align-content: center;">
                    <label class="form-label f1" style="color:rgba(43, 45, 66, 0.91); font-size: 20px; margin-top: 10px;">Total Cost of Product</label>
                </div>

                <div class="col-12">
                    <hr class="hr" />
                </div>
                <div class="col-12" style="display: flex; flex-direction: row; justify-content: center;">
                    <div class="col-6 text-start mb-3">
                        <span class="fs-6 f1" style="color: #0073e6; margin-right: 90px; font-size: 16px;">Cost for Product</span>

                    </div>

                    <div class="col-6 mb-3 text-end">
                        <span class="fs-5 f1" style="color: black; align-items:end; font-size: 16px;">Rs.00.00</span>
                    </div>
                </div>

                <div class="col-12" style="display: flex; flex-direction: row; margin-top: 10px; justify-content: center;">
                    <div class="col-6 text-start mb-3">
                        <span class="fs-6 f1" style="color: #0073e6; margin-right: 90px; font-size: 16px;">Shipping (Badulla)</span>

                    </div>

                    <div class="col-6 mb-3 text-end">
                        <span class="fs-6 f1" style="color: black; align-items:end; font-size: 16px;">Rs.00.00</span>
                    </div>
                </div>

                <div class="col-12" style="display: flex; flex-direction: row; margin-top: 10px; justify-content: center;">
                    <div class="col-6 text-start mb-3">
                        <span class="fs-6 f1" style="color: #0073e6; margin-right: 90px; font-size: 16px;">Shipping (Other)</span>

                    </div>

                    <div class="col-6 mb-3 text-end">
                        <span class="fs-6 f1" style="color: black; align-items:end; font-size: 16px;">Rs.00.00</span>
                    </div>
                </div>

                <div class="col-12 mt-3">
                    <hr class="hr" />
                </div>
                <div class="col-12 mt-3">
                    <hr class="hr" />
                </div>
            </div>
        </div>
        <!-- summary -->

        <!-- <responsive-medium-screen> -->
        <div class="col-12">
            <div class="row " style="display: flex; justify-content: center;">
                <div class="wishlist-box2 d-lg-none" style="height:325px; width: 80%;">
                    <div class="product-wishlist" style="display:flex; flex-direction:row; display: flex; align-items: center; display: flex; justify-content: center;">
                        <div class="product-image"><img src="category\Product\hikvisionCamera3.jpg" alt="" class="img"></div>
                        <div class="product-details" style="margin-left: 15px;">
                            <div class="product-body">
                                <p class="product-category">Seller: Delta Codex Software Solution</p>
                                <h3 class="product-name"><a href="#">Product Details Here</a></h3>
                                <div class="product-label1">
                                    <span class="new">NEW</span>
                                </div>
                                <h4 class="product-price">Rs.000.00</h4><br>
                                <div class="product-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div>
                                    <span class="product-available">100 In Stock</span>
                                </div>
                            </div>
                        </div>
                        <div class="product-details" style="margin-right: 5px; margin-left: 5px;">
                            <div class="">
                                <div class="qty-label" style="width: 190px; margin-top: 30px;">

                                    <div class="input-number">
                                        <input type="number" style="outline: none;" value="1" pattern="[0-9]" id="qty_input" onkeyup='checkValue();'>
                                        <span class="qty-up" onkeyup='qty_inc();'>+</span>
                                        <span class="qty-down" onkeyup='qty_dec();'>-</span>
                                    </div>
                                </div>
                            </div>
                            <div class="add-to-cart" style="display: flex; flex-direction: column; ">
                                <button class="add-to-cart-btn1" style="margin-top: 10px; width: 200px; font-weight: bold;" type="submit" id="payhere-payment"><i class="fa fa-usd"></i> &nbsp; BUY NOW</button>
                                <button class="add-to-cart-btn" style="margin-top: 10px; width: 200px;"><i class="fa fa-trash"></i>remove</button>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="wishlist-box2 d-lg-none" style="height:325px; width: 80%;">
                    <div class="product-wishlist" style="display:flex; flex-direction:row; display: flex; align-items: center; display: flex; justify-content: center;">
                        <div class="product-image"><img src="category\Product\Asus Prime A520M-E MICRO ATX Motherboard_1_6675c4602de9c.png" alt="" class="img"></div>
                        <div class="product-details" style="margin-left: 15px;">
                            <div class="product-body">
                                <p class="product-category">Seller: Delta Codex Software Solution</p>
                                <h3 class="product-name"><a href="#">Product Details Here</a></h3>
                                <div class="product-label1">
                                    <span class="new">NEW</span>
                                </div>
                                <h4 class="product-price">Rs.000.00</h4><br>
                                <div class="product-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div>
                                    <span class="product-available">100 In Stock</span>
                                </div>
                            </div>
                        </div>
                        <div class="product-details" style="margin-right: 5px; margin-left: 5px;">
                            <div class="">
                                <div class="qty-label" style="width: 190px; margin-top: 30px;">

                                    <div class="input-number">
                                        <input type="number" style="outline: none;" value="1" pattern="[0-9]" id="qty_input" onkeyup='checkValue();'>
                                        <span class="qty-up" onkeyup='qty_inc();'>+</span>
                                        <span class="qty-down" onkeyup='qty_dec();'>-</span>
                                    </div>
                                </div>
                            </div>
                            <div class="add-to-cart" style="display: flex; flex-direction: column; ">
                                <button class="add-to-cart-btn1" style="margin-top: 10px; width: 200px; font-weight: bold;" type="submit" id="payhere-payment"><i class="fa fa-usd"></i> &nbsp; BUY NOW</button>
                                <button class="add-to-cart-btn" style="margin-top: 10px; width: 200px;"><i class="fa fa-trash"></i>remove</button>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="wishlist-box2 d-lg-none" style="height:325px; width: 80%;">
                    <div class="product-wishlist" style="display:flex; flex-direction:row; display: flex; align-items: center; display: flex; justify-content: center;">
                        <div class="product-image"><img src="category\Product\DJI Avata 2 FPV Drone _1_667e60e05faef.jpeg" alt="" class="img"></div>
                        <div class="product-details" style="margin-left: 15px;">
                            <div class="product-body">
                                <p class="product-category">Seller: Delta Codex Software Solution</p>
                                <h3 class="product-name"><a href="#">Product Details Here</a></h3>
                                <div class="product-label1">
                                    <span class="new">NEW</span>
                                </div>
                                <h4 class="product-price">Rs.000.00</h4><br>
                                <div class="product-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div>
                                    <span class="product-available">100 In Stock</span>
                                </div>
                            </div>
                        </div>
                        <div class="product-details" style="margin-right: 5px; margin-left: 5px;">
                            <div class="">
                                <div class="qty-label" style="width: 190px; margin-top: 30px;">

                                    <div class="input-number">
                                        <input type="number" style="outline: none;" value="1" pattern="[0-9]" id="qty_input" onkeyup='checkValue();'>
                                        <span class="qty-up" onkeyup='qty_inc();'>+</span>
                                        <span class="qty-down" onkeyup='qty_dec();'>-</span>
                                    </div>
                                </div>
                            </div>
                            <div class="add-to-cart" style="display: flex; flex-direction: column; ">
                                <button class="add-to-cart-btn1" style="margin-top: 10px; width: 200px; font-weight: bold;" type="submit" id="payhere-payment"><i class="fa fa-usd"></i> &nbsp; BUY NOW</button>
                                <button class="add-to-cart-btn" style="margin-top: 10px; width: 200px;"><i class="fa fa-trash"></i>remove</button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- <responsive-medium-screen> -->

        <!-- <responsive-small-screen> -->
        <div class="col-12">
            <div class="row " style="display: flex; justify-content: center;">

                <div class="wishlist-box3" style="height:520px; width:60%; margin-top: 150px;">
                    <div class="product-wishlist" style="display:flex; flex-direction:column; display: flex; align-items: center; display: flex; justify-content: center;">
                        <div class="product-image" style="width: 70%; height: 275px;"><img src="category\Product\nintendo2.jpg" alt="" class="img"></div>
                        <div class="product-details" style="margin-left: 15px;">
                            <div class="product-body">
                                <p class="product-category">Seller: Delta codex Software Solutions</p>
                                <h3 class="product-name"><a href="#">Product Title Here</a></h3>
                                <div class="product-label1">
                                    <span class="new">NEW</span>
                                </div>
                                <h4 class="product-price">Rs.00.00</h4><br>
                                <div class="product-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div>
                                    <span class="product-available">10 In Stock</span>
                                </div>
                            </div>
                        </div>
                        <div class="product-details">
                            <div class="">
                                <div class="qty-label" style="width: 225px; margin-top: 30px;">

                                    <div class="input-number">
                                        <input type="number" style="outline: none;" value="1" pattern="[0-9]" id="qty_input" onkeyup='checkValue();'>
                                        <span class="qty-up" onkeyup='qty_inc();'>+</span>
                                        <span class="qty-down" onkeyup='qty_dec();'>-</span>
                                    </div>
                                </div>
                            </div>
                            <div class="add-to-cart" style="display: flex; flex-direction: column; ">
                                <!-- <button class="add-to-cart-btn" style="margin-top: 10px; width: 250px;"><i class="fa fa-shopping-cart"></i> add to cart</button> -->
                                <button class="add-to-cart-btn1" style="margin-top: 10px; width: 200px; font-weight: bold;" type="submit" id="payhere-payment"><i class="fa fa-usd"></i> &nbsp; BUY NOW</button>
                                <button class="add-to-cart-btn" style="margin-top: 10px; width: 200px;"><i class="fa fa-trash"></i>remove</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="wishlist-box3" style="height:520px; width:60%; margin-top: 150px;">
                    <div class="product-wishlist" style="display:flex; flex-direction:column; display: flex; align-items: center; display: flex; justify-content: center;">
                        <div class="product-image" style="width: 70%; height: 275px;"><img src="category\Product\LA7840 NPN ( Bulk - 50)_3_6675d937395c5.png" alt="" class="img"></div>
                        <div class="product-details" style="margin-left: 15px;">
                            <div class="product-body">
                                <p class="product-category">Seller: Delta codex Software Solutions</p>
                                <h3 class="product-name"><a href="#">Product Title Here</a></h3>
                                <div class="product-label1">
                                    <span class="new">NEW</span>
                                </div>
                                <h4 class="product-price">Rs.00.00</h4><br>
                                <div class="product-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div>
                                    <span class="product-available">10 In Stock</span>
                                </div>
                            </div>
                        </div>
                        <div class="product-details">
                            <div class="">
                                <div class="qty-label" style="width: 225px; margin-top: 30px;">

                                    <div class="input-number">
                                        <input type="number" style="outline: none;" value="1" pattern="[0-9]" id="qty_input" onkeyup='checkValue();'>
                                        <span class="qty-up" onkeyup='qty_inc();'>+</span>
                                        <span class="qty-down" onkeyup='qty_dec();'>-</span>
                                    </div>
                                </div>
                            </div>
                            <div class="add-to-cart" style="display: flex; flex-direction: column; ">
                                <!-- <button class="add-to-cart-btn" style="margin-top: 10px; width: 250px;"><i class="fa fa-shopping-cart"></i> add to cart</button> -->
                                <button class="add-to-cart-btn1" style="margin-top: 10px; width: 200px; font-weight: bold;" type="submit" id="payhere-payment"><i class="fa fa-usd"></i> &nbsp; BUY NOW</button>
                                <button class="add-to-cart-btn" style="margin-top: 10px; width: 200px;"><i class="fa fa-trash"></i>remove</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="wishlist-box3" style="height:520px; width:60%; margin-top: 150px;">
                    <div class="product-wishlist" style="display:flex; flex-direction:column; display: flex; align-items: center; display: flex; justify-content: center;">
                        <div class="product-image" style="width: 70%; height: 275px;"><img src="category\Product\hikvisionCamera5.jpg" alt="" class="img"></div>
                        <div class="product-details" style="margin-left: 15px;">
                            <div class="product-body">
                                <p class="product-category">Seller: Delta codex Software Solutions</p>
                                <h3 class="product-name"><a href="#">Product Title Here</a></h3>
                                <div class="product-label1">
                                    <span class="new">NEW</span>
                                </div>
                                <h4 class="product-price">Rs.00.00</h4><br>
                                <div class="product-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div>
                                    <span class="product-available">10 In Stock</span>
                                </div>
                            </div>
                        </div>
                        <div class="product-details">
                            <div class="">
                                <div class="qty-label" style="width: 225px; margin-top: 30px;">

                                    <div class="input-number">
                                        <input type="number" style="outline: none;" value="1" pattern="[0-9]" id="qty_input" onkeyup='checkValue();'>
                                        <span class="qty-up" onkeyup='qty_inc();'>+</span>
                                        <span class="qty-down" onkeyup='qty_dec();'>-</span>
                                    </div>
                                </div>
                            </div>
                            <div class="add-to-cart" style="display: flex; flex-direction: column; ">
                                <!-- <button class="add-to-cart-btn" style="margin-top: 10px; width: 250px;"><i class="fa fa-shopping-cart"></i> add to cart</button> -->
                                <button class="add-to-cart-btn1" style="margin-top: 10px; width: 200px; font-weight: bold;" type="submit" id="payhere-payment"><i class="fa fa-usd"></i> &nbsp; BUY NOW</button>
                                <button class="add-to-cart-btn" style="margin-top: 10px; width: 200px;"><i class="fa fa-trash"></i>remove</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <responsive-small-screen> -->
    </div>


    <script src="bootstrap.bundle.js"></script>
    <script src="script.js"></script>
    <!-- <script type="text/javascript" src="https://www.payhere.lk/lib/payhere.js"></script> -->
</body>
<?php require "footer.php"; ?>

<!-- <Empty Profile> -->
<!-- <div class="col-12 ">
    <div class="row">
        <div class="col-12 empty-profile"></div><br>
        <div class="col-12 text-center">
            <label class="form-label f" style="font-size: 22px; font-weight: normal;">Hey <b class="text-primary">User</b>! Please Update your Profile </label>
        </div><br>
        <div class="offset-4 col-12 d-grid mb-3" style="display: flex; justify-content: center;">
            <a class="primary-shop-btn cta-btn" href="userprofile.php">Update now</a>
        </div><br>
    </div>
</div> -->
<!-- <Empty Profile> -->

</html>