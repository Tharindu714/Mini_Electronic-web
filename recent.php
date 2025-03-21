<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Recent Customer Preferances</title>


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


    <div class="container-fluid vh-100">
        <div class="row">
            <div class="col-12  d-flex justify-content-center vh-100">
                <!-- BREADCRUMB -->
                <div id="breadcrumb" class="section" style="height:80px; background-color: rgba(43, 45, 66, 0.91);">
                    <!-- container -->
                    <div class="container">
                        <!-- row -->
                        <div class="row bread">
                            <div class="col-md-3 breadcrumb-resp" style="margin-top: 20px;">
                                <ul class="breadcrumb-tree">
                                    <li><a href="html\index.php">Dashboard</a></li>
                                    <li><a href="recent.php">Recent</a></li>
                                </ul>

                            </div>

                            <div class="col-md-6 col-sm-6 col-xs-6 wishlist" style="display: flex; justify-content: center; margin-top: 18px;">
                                <h2 class="f3" style="font-weight:normal; color: white;">Recent Products</h2>
                                <a href="#" style="font-size: 24px; margin-left: 5px; color: #0073e6;"><i class="fa fa-product-hunt" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <!-- /row -->
                    </div>
                    <!-- /container -->
                </div>
                <!-- /BREADCRUMB -->

            </div>

        </div>
        <?php

        // $watch_rs = Database::search("SELECT * FROM `recent`
        // INNER JOIN `product` ON `recent`.`product_id` = `product`.`id`
        // INNER JOIN `user` ON `recent`.`user_email` = `user`.`email`
        // WHERE `recent_status` = '1'");
        // $watch_num = $watch_rs->num_rows;
        ?>

        <!-- empty view -->
        <!-- <div class="col-12 ">
                    <div class="row">
                        <div class="col-12 emptyView"></div><br>
                        <div class="col-12 text-center">
                            <label class="form-label f" style="font-size: 22px; font-weight: normal;">No Recent Preferances</label>
                        </div><br>
                    </div>
                </div> -->
        <!-- empty view -->

        <!-- <responsive-Large-screen> -->
        <div class="col-12">
            <div class="row " style="display: flex; justify-content: center;">
                <div class="wishlist-box1 col-lg-12" style="height:200px; width:70%; margin-bottom: 45px;">
                    <div class="product-wishlist" style="display:flex; flex-direction:row; display: flex; align-items: start; display: flex; justify-content: start;">
                        <div class="product-image" style="height: 200px; width: 200px;">
                            <img src="category\Product\Sony PlayStation 5 Slim_1_667b14ed2705d.jpeg" alt="" class="img">
                        </div>
                        <div class="product-details" style="margin-left: 15px;">
                            <span class="product-name"><a href="#">Product Title Here</a></span><br />
                            <div class="product-rating">

                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <br> <br>
                            <span>Added On: <b>2024.07.07 12:00:00</b></span><br>
                            <span>Added By: <b>deltacodexsoftwares@gmail.com</b></span><br>
                            <span>Removed On: <b>2024.07.07 12:00:00</b></span><br>
                            <span>Removed By: <b>test@gmail.com</b></span><br />
                            <h4 class="product-price">Rs.00.00 <del class="product-old-price">Rs.00.00</del></h4>
                            <div class="product-label1" style="margin-bottom: 6px;">
                                <span class="new">Watched</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <responsive-Large-screen> -->

        <!-- <responsive-medium-screen> -->
        <div class="col-12" id="searchresult">
            <div class="row " style="display: flex; justify-content: center;">
                <div class="wishlist-box2 d-lg-none" style="height:200px; width: 70%; margin-bottom: 120px;">
                    <div class="product-wishlist" style="display:flex; flex-direction:row; display: flex; align-items: start; display: flex; justify-content: start;">
                        <div class="product-image">

                            <img src="category\Product\Sony PlayStation 5 Slim_1_667b14ed2705d.jpeg" alt="" class="img">

                        </div>
                        <div class="product-details" style="margin-left: 15px;">
                            <span class="product-name"><a href="#">Product Title Here</a></span><br />
                            <div class="product-rating">

                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <br> <br>
                            <span>Added On: <b>2024.07.07 12:00:00</b></span><br>
                            <span>Added By: <b>deltacodexsoftwares@gmail.com</b></span><br>
                            <span>Removed On: <b>2024.07.07 12:00:00</b></span><br>
                            <span>Removed By: <b>test@gmail.com</b></span><br />
                            <h4 class="product-price">Rs.00.00 <del class="product-old-price">Rs.00.00</del></h4>
                            <div class="product-label1" style="margin-bottom: 6px;">
                                <span class="new">Watched</span>
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
                <div class="wishlist-box3" style="height:520px; width:70%; margin-bottom: 15px;">
                    <div class="product-wishlist" style="display:flex; flex-direction:column; display: flex; align-items: center; display: flex; justify-content: center;">
                        <div class="product-image" style="width: 80%; height: 275px;">
                            <img src="category\Product\Sony PlayStation 5 Slim_1_667b14ed2705d.jpeg" alt="" class="img">
                        </div>
                        <div class="product-details" style="margin-left: 12px;">
                            <span class="product-name"><a href="#">Product Title Here</a></span><br />
                            <div class="product-rating">

                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <br> <br>
                            <span>Added On: <b>2024.07.07 12:00:00</b></span><br>
                            <span>Added By: <b>deltacodexsoftwares@gmail.com</b></span><br>
                            <span>Removed On: <b>2024.07.07 12:00:00</b></span><br>
                            <span>Removed By: <b>test@gmail.com</b></span><br />
                            <h4 class="product-price">Rs.00.00 <del class="product-old-price">Rs.00.00</del></h4>
                            <div class="product-label1" style="margin-bottom: 6px;">
                                <span class="new">Watched</span>
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