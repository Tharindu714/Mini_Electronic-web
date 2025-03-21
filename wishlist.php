<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title>Your Wishlist</title>
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
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
        <?php require "header.php";
        ?>

        <div class="container-fluid vh-100">
            <div class="row">
                <div class="col-12  d-flex justify-content-center vh-100">
                    <div id="breadcrumb" class="section" style="height:80px; background-color: rgba(43, 45, 66, 0.91);">
                        <div class="container">
                            <div class="row bread">
                                <div class="col-md-3 breadcrumb-resp" style="margin-top: 20px;">
                                    <ul class="breadcrumb-tree">
                                        <li><a href="home.php">Home</a></li>
                                        <li><a href="wishlist.php">Wishlist</a></li>
                                    </ul>

                                </div>

                                <div class="col-md-6 col-sm-6 col-xs-6 wishlist" style="display: flex; justify-content: center; margin-top: 18px;">
                                    <h2 class="f3" style="font-weight:normal; color: white;">My Wishlist</h2>
                                    <a href="#" style="font-size: 24px; margin-left: 5px; color: #0073e6;"><i class="fa fa-heart" aria-hidden="true"></i></a>


                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-6 search-bar">
                                    <div class="header-search">

                                        <input class="input-search" placeholder="Search here" id="s">
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
                        <div class="col-12 emptyView"></div><br>
                        <div class="col-12 text-center">
                            <label class="form-label f" style="font-size: 22px; font-weight: normal;">You have no items in your Watchlist
                                yet.</label>
                        </div><br>
                        <div class="offset-4 col-12 d-grid mb-3" style="display: flex; justify-content: center;">
                            <a class="primary-shop-btn cta-btn" href="home.php">Shop now</a>
                        </div><br>
                    </div>
                </div> -->
                <!-- empty view -->

                <!-- <responsive-Large-screen> -->
                <div class="col-12">
                    <div class="row " style="display: flex; justify-content: center;">
                            <div class="wishlist-box1 col-lg-6" style="height:325px; width:75%; margin-bottom: 20px;">
                                <div class="product-wishlist" style="display:flex; flex-direction:row; display: flex; align-items: center; display: flex; justify-content: center;">
                                    <div class="product-image"><img src="category\Product\Sony PlayStation 5 Slim_1_667b14ed2705d.jpeg" alt="" class="img"></div>
                                    <div class="product-details" style="margin-left: 15px;">
                                        <div class="product-body">
                                            <h3 class="product-name" id="t"><a href="#">Product Title Here</a></h3>
                                            <h4 class="product-price">Rs.00.00 <del class="product-old-price">Rs.00.00</del></h4><br>
                                            <div class="product-rating">
                                                
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                        </div>
                                        <div class="product-body">
                                            <div class="product-btns">
                                                <a href="SingleProductView.php"><i class="fa fa-hand-o-right" style="margin-top: 15px;"></i>&nbsp;See More...</a>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                                <div class="product-details" style="margin-right: 8px;">

                                    <div class="add-to-cart" style="display: flex; flex-direction: column; ">
                                        <button class="add-to-cart-btn" style="margin-top: 10px; width: 250px;"><i class="fa fa-shopping-cart"></i> add to cart</button>
                                        <button class="add-to-cart-btn" style="margin-top: 10px; width: 250px;"><i class="fa fa-trash"></i>remove</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <responsive-medium-screen> -->
                <div class="col-12">
                    <div class="row " style="display: flex; justify-content: center;">
                        <div class="wishlist-box2 d-lg-none" style="height:325px; width: 80%;">
                            <div class="product-wishlist" style="display:flex; flex-direction:row; display: flex; align-items: center; display: flex; justify-content: center;">
                                <div class="product-image">

                                    <img src="category\Product\Sony PlayStation 5 Slim_0_667b14ed25f93.jpeg" alt="" class="img">

                                </div>
                                <div class="product-details" style="margin-left: 20px;">
                                    <div class="product-body">
                                        <h3 class="product-name"><a href="#">Product Title Here</a></h3>
                                        <h4 class="product-price">Rs.00.00 <del class="product-old-price">Rs.00.00 </del></h4><br>
                                        <div class="product-rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                        </div>
                                        <div class="product-body">
                                            <div class="product-btns">
                                                <a href="SingleProductView.php"><i class="fa fa-hand-o-right" style="margin-top: 15px;"></i>&nbsp;See More...</a>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                                <div class="product-details" style="margin-right: 8px;">
                                    <div class="add-to-cart" style="display: flex; flex-direction: column; ">
                                        <button class="add-to-cart-btn" style="margin-top: 10px; width: 250px;"><i class="fa fa-shopping-cart"></i> add to cart</button>
                                        <button class="add-to-cart-btn" style="margin-top: 10px; width: 250px;"><i class="fa fa-trash"></i>remove</button>
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
                        <div class="wishlist-box3" style="height:520px; width:60%; margin-bottom: 90px;">
                            <div class="product-wishlist" style="display:flex; flex-direction:column; display: flex; align-items: center; display: flex; justify-content: center;">
                                <div class="product-image" style="width: 70%; height: 275px;">

                                    <img src="category\Product\Sony PlayStation 5 Slim_1_667b14ed2705d.jpeg" alt="" class="img">

                                </div>
                                <div class="product-details" style="margin-left: 20px;">
                                    <div class="product-body">
                                        <h3 class="product-name"><a href="#">Product Title Here</a></h3>
                                        <h4 class="product-price">Rs.00.00 <del class="product-old-price">Rs.00.00 </del></h4><br>
                                        <div class="product-rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                        </div>
                                        <div class="product-body">
                                            <div class="product-btns">
                                                <a href="SingleProductView.php"><i class="fa fa-hand-o-right" style="margin-top: 15px;"></i>&nbsp;See More...</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-details">
                                    <div class="add-to-cart" style="display: flex; flex-direction: column; ">
                                        <button class="add-to-cart-btn" style="margin-top: 10px; width: 250px;"><i class="fa fa-shopping-cart"></i> add to cart</button>
                                        <button class="add-to-cart-btn" style="margin-top: 10px; width: 250px;"><i class="fa fa-trash"></i>remove</button>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
                <!-- <responsive-small-screen> -->

                <?php require "footer.php"; ?>
        <script src="bootstrap.bundle.js"></script>
        <script src="script.js"></script>

    </body>

</html>