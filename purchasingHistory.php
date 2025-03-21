<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title> Orders</title>
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

<body style="background-size: cover;">
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
                                    <li><a href="purchasingHistory.php">Purchasing History</a></li>
                                </ul>
                            </div>

                            <div class="col-md-6 col-sm-6 col-xs-6 wishlist" style="display: flex; justify-content: center; margin-top: 18px;">
                                <h2 class="f3" style="font-weight:normal; color: white;">Purchasing History</h2>
                                <a href="#" style="font-size: 24px; margin-left: 5px; color: #0073e6;"><i class="fa fa-shopping-bag" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- empty view -->
        <!-- <div class="col-12 ">
                    <div class="row">
                        <div class="col-12 text-center">
                            <label class="form-label f" style="font-size: 22px; font-weight:normal;">You have not purchased any item yet.
                        </div>
                        <div class="col-12 text-center">
                            <label class="form-label f" style="font-size: 18px; font-weight: lighter;">Check back after your next shopping trip!
                        </div><br>
                        <div class="offset-4 col-12 d-grid mb-3" style="display: flex; justify-content: center;">
                            <a class="primary-shop-btn cta-btn" href="home.php">Shop now</a>
                        </div><br>
                    </div>
                </div> -->
        <!-- empty view -->

        <!-- product view -->
        <div class="col-12 col-mb-12  product">
            <div class="row">
                <div class="col-12 purchasing-top-bar" style="display: flex; justify-content: center; align-items: center; flex-direction: column;">
                    <div class="row" style="display: flex; flex-direction: row; width: 95%; height: 15%; background-color: #0073e6; margin-bottom: 20px; border-radius: 10px;">
                        <div class="col-1" style="width: 5%; display: flex; justify-content: center; align-items: center; color: white;">
                            <label class="form-label f4">#</label>
                        </div>
                        <div class="col-3" style="width: 50%; display: flex; justify-content: center; align-items: center; color: white; ">
                            <label class="form-label f4"> Order Details</label>
                        </div>
                        <div class="col-3" style="width: 30%; display: flex; justify-content: center; align-items: center; color: white;">
                            <label class="form-label f4">Shipping Details</label>
                        </div>
                        <div class="col-3" style="width: 15%; display: flex; justify-content: center; align-items: center;">
                            <label class="form-label f4"></label>
                        </div>
                    </div>
                </div>

                <div class="col-12 purchase-large" style="display: flex; justify-content: center; align-items: center; flex-direction: column;">
                    <div class="row purchasing-table" style="display: flex; flex-direction: row; width: 95%; height: 275px; background-color: #2B2D42; margin-bottom: 20px; border-radius: 10px;">
                        <div class="col-12" style="width: 5%; display: flex; justify-content: center; align-items: center; background-color: #0073e6; border-top-left-radius: 10px; border-bottom-left-radius: 10px;">
                            <label class="form-label f4" style="color: #ffffff;"></label>
                        </div>
                        <div class="col-3" style="width: 55%; ">
                            <div class="" style=" display: flex; justify-content: start; align-items: start; ">
                                <div class="product-purchase" style="display:flex; flex-direction:row; align-items: start; ">
                                    <div class="product-image" style="width: 270px; height: 275px;">
                                        <img src="category\Product\rice2.jpg" alt="" class="img">
                                    </div>
                                    <div class="product-details" style="background-color: #ffffff; height: 275px; width: 320px;">
                                        <div class="product-body">
                                            <p class="product-category f5" style="color: #0073e6;"><b>Seller : </b>Delata Codex Software Solution</p>
                                            <h4 class="product-name-purchase f5"><a href="#">Product title Here</a></h4>
                                            <div class="product-label1">
                                                <span class="sale f5">Completed</span>
                                                <span class="new f5">Paid</span>
                                            </div>
                                            <span>Purchased Price: <span class="product-price"><b>Rs.00 .00</b></span></span><br>

                                            <div class="product-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div><br>
                                            <time class="product-name-purchase f5"><a href="#">2024.07.07 12:00:00</a></time>
                                            <p class="product-category f5" style="color: #0073e6;">10 Items</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3" style="width: 30%; display: flex; justify-content: center; align-items: center;">
                            <li>
                                <h3 class="product-category f5" style="color: white;">User User</h3>
                                <p class="product-category f5" style="color: white;">address line 01, line 02</p>
                                <p class="product-category f5" style="color: white;">City Name | Postal Code</p>
                                <p class="product-category f5" style="color: white;">District | Province</p>
                            </li>
                        </div>
                        <div class="product-body" style="background-color:transparent; border-radius: 400px; justify-content: center; align-items: center; display: flex;">
                            <div class="product-btns" style="background-color:white; border-radius: 20px;">
                                <button class="quick-view"><i class="fa fa-trash"></i><span class="tooltipp">Remove Item</span></button>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-12 purchase-medium" style="margin-left: 35px; display: flex; justify-content:center; align-items: center; flex-direction: column;">
                    <div class="row purchasing-table" style="display: flex; flex-direction: row; width: 95%; height: 275px; background-color: #2B2D42; margin-bottom: 20px; border-radius: 10px;">
                        <div class="col-12" style="width: 5%; display: flex; justify-content: center; align-items: center; background-color: #0073e6; border-top-left-radius: 10px; border-bottom-left-radius: 10px;">
                            <label class="form-label f4" style="color: #ffffff;"></label>
                        </div>
                        <div class="col-3" style="width: 55%; ">
                            <div class="" style=" display: flex; justify-content: start; align-items: start; ">
                                <div class="product-purchase" style="display:flex; flex-direction:row; align-items: start; ">
                                    <div class="product-image" style="width: 270px; height: 275px;">
                                        <img src="category\Product\rice2.jpg" alt="" class="img">

                                    </div>
                                    <div class="product-details" style="background-color: #ffffff; height: 275px; width: 320px;">
                                        <div class="product-body">
                                            <p class="product-category f5" style="color: #0073e6;"><b>Seller : </b>Delata Codex Software Solution</p>
                                            <h4 class="product-name-purchase f5"><a href="#">Product Title Here</a></h4>
                                            <div class="product-label1">
                                                <span class="sale f5">Completed</span>
                                                <span class="new f5">Paid</span>
                                            </div>
                                            <span>Purchased Price: <span class="product-price"><b>Rs.00.00</b></span></span><br>
                                            <div class="product-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div><br>
                                            <time class="product-name-purchase f5"><a href="#">2024.07.07 12:00:00</a></time>
                                            <p class="product-category f5" style="color: #0073e6;">10 Items</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3" style="width: 30%; display: flex; justify-content: center; align-items: center;">
                            <li>
                                <h3 class="product-category f5" style="color: white;">User User</h3>
                                <p class="product-category f5" style="color: white;">address line 01, line 02</p>
                                <p class="product-category f5" style="color: white;">City Name | Postal Code</p>
                                <p class="product-category f5" style="color: white;">District | Province</p>
                            </li>
                        </div>
                        <div class="product-body" style="background-color:transparent; border-radius: 400px; justify-content: center; align-items: center; display: flex;">
                            <div class="product-btns" style="background-color:white; border-radius: 20px;">
                                <button class="quick-view"><i class="fa fa-trash"></i><span class="tooltipp">Remove Item</span></button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 purchase-small" style="display: flex; justify-content: center; align-items: center; flex-direction: column;">
                    <div class="row" style="display: flex; flex-direction: column; width: 90%; height: 900px; background-color: #2B2D42; margin-bottom: 20px; border-radius: 10px;">
                        <div class="col-12 " style=" display: flex; justify-content: center; align-items: center; background-color: #0073e6; border-top-left-radius: 10px; border-bottom-left-radius: 10px; border-top-right-radius: 10px; border-bottom-right-radius: 10px;">
                            <label class="form-label f4" style="color: #ffffff;"></label>
                        </div>

                        <div class="col-12 product-purchase" style="display:flex; flex-direction:column; align-items: center; margin-top: 15px;">
                            <div class="product-image" style=" width:75%;">
                                <img src="category\Product\pigeon5.jpg" alt="" class="img">
                            </div>
                            <div class="product-details" style=" width:75%; margin-top: 15px; margin-left: 3px;">
                                <div class="product-body">
                                    <p class="product-category f5" style="color: #0073e6;"><b>Seller : </b>Delta Codex Software Solutions</p>
                                    <h3 class="product-name-purchase f5"><a href="#">Product Title Here</a></h3>
                                    <div class="product-label1">
                                            <span class="sale f5">Completed</span>
                                        <span class="new f5">Paid</span>
                                    </div>
                                    <span>Purchased Price: <span class="product-price"><b>Rs. 00 .00</b></span></span><br>
                                    <div class="product-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div><br>

                                    <time class="product-name-purchase f5"><a href="#">2024.07.07 12:00:00</a></time>
                                    <p class="product-category f5" style="color: #D10024;">10 Items</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-12" style=" margin-left: 50px;">
                        <li>
                                <h3 class="product-category f5" style="color: white;">User User</h3>
                                <p class="product-category f5" style="color: white;">address line 01, line 02</p>
                                <p class="product-category f5" style="color: white;">City Name | Postal Code</p>
                                <p class="product-category f5" style="color: white;">District | Province</p>
                            </li>
                        </div>
                            <div class="product-body" style="background-color:transparent; border-radius: 400px; justify-content: center; align-items: center; display: flex;">
                                <div class="product-btns" style="background-color:white; border-radius: 20px;">
                                    <button class="quick-view"><i class="fa fa-trash"></i><span class="tooltipp">Remove Item</span></button>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12">
            <hr />
        </div>
        <?php require "footer.php"; ?>
    </div>
    <!-- produc view -->
    <script src="bootstrap.bundle.js"></script>
    <script src="script.js"></script>
</body>