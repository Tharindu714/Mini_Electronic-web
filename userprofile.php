<!DOCTYPE html>

    <html>

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title>Your Profile</title>

        <link rel="stylesheet" href="bootstrap.css" />
        <link rel="stylesheet" href="bootstrap-icons.css" />
        <link rel="stylesheet" href="style.css" />

        <link rel="icon" href="resources/logo.png" />
    </head>

    <body class="body3">
        <?php require "header.php"; ?>

        <div class="container-fluid vh-100 mt-5 mb-5">

            <div class="row">
                <div class="col-12 d-flex justify-content-center vh-100 mt-5">
                    <div class="row d-flex align-content-center justify-content-center border-bottom-danger border-5">
                        <div class="col-9 d-flex justify-content-center align-content-center rounded-5 resp" style="background-color: rgba(43, 45, 66, 0.93); ">
                            <div class="d-flex flex-column align-items-center text-center justify-content-center mt-3">
                                    <img src="resources/user.png" id="viewimg" class="rounded-circle mt-5" style="width:150px ;" />

                                <span class="fw-bold text-white f1">Your Email Here</span>
                                <span class=" text-white f1" style="font-size: 14px;">Your Full Name Here</span>

                                <input type="file" class="d-none" id="profileimg" accept="image/*" />
                                <label for="profileimg" class="btn mt-5 text-white f3" style="background-color: rgba(18, 64, 118, 0.83); box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25) inset; " onclick="changeimg();">Update Profile Image</label>
                            </div>
                            <div class="col-9 d-flex justify-content-center resp-box" id="updateProfile">
                                <div class="row d-flex justify-content-center  ">

                                    <div class="col-10 d-flex justify-content-center mt-3">
                                        <p class="title02">My Profile</p>
                                    </div>


                                    <div class="col-5">
                                        <label class="form-label f1 text-white">First Name</label>
                                        <input type="text" class="form-control f1 text-black" value="First Name " id="fname" style="box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25) inset;" />
                                    </div>

                                    <div class="col-5">
                                        <label class="form-label f1 text-white">Last Name</label>
                                        <input type="text" class="form-control f1 text-black" value="Last Name" id="lname" style="box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25) inset;" />
                                    </div>

                                    <div class="col-10 ">
                                        <label class="form-label f1 text-white">Mobile</label>
                                        <input type="text" class="form-control f1 text-black" value="T.P No" id="mob" style="box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25) inset;" />
                                    </div>

                                    <div class="col-10">
                                        <label class="form-label f1 text-white">Email</label>
                                        <input type="email" class="form-control f1 text-black" readonly value="Your Email Address" style="box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25) inset;" />
                                    </div>

                                    <div class="col-10">
                                        <label class="form-label f1 text-white">Password</label>

                                        <input type="password" class="form-control f1 text-black" readonly value="Your password" style="box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25) inset;" />

                                    </div>

                                    <div class="col-10">
                                        <label class="form-label f1 text-white">Registered Date</label>
                                        <input type="email" class="form-control f1 text-black" readonly value="Registered Date" style="box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25) inset;" />
                                    </div>
                                        <div class="col-10">
                                            <label class="form-label f1 text-white">Address Line 01</label>
                                            <input id="add01" type="text" class="form-control f1 text-black" style="box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25) inset;" />
                                        </div>

                                        <div class="col-10">
                                            <label class="form-label f1 text-white">Address Line 02</label>
                                            <input id="add02" type="text" class="form-control f1 text-black" style="box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25) inset;" />
                                        </div>

                                    <div class="col-5">
                                        <label class="form-label f1 text-white">Province</label>
                                        <select class="form-select f1 text-black" id="province" style="box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25) inset;">
                                            <option value="0">Select Province</option>
                                                <option value="">Uva</option>
                                                <option value="">Western</option>
                                                <option value="">Southern</option>
                                                <option value="">Eastern</option>
                                        </select>
                                    </div>

                                    <div class="col-5">
                                        <label class="form-label f1 ">District</label>
                                        <select class="form-select f1 text-black" id="district" style="box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25) inset;">
                                            <option value="0">Select District</option>
                                                <option value="">Badulla</option>
                                                <option value="">Colombo</option>
                                                <option value="">Gampaha</option>
                                        </select>
                                    </div>

                                    <div class="col-5">
                                        <label class="form-label f1 text-white">City</label>
                                        <select class="form-select f1 text-black" id="city" style="box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25) inset;">
                                            <option value="0">Select City</option>
                                                <option value="">Bandarawela</option>
                                                <option value="">Nugegoda</option>
                                                <option value="">Kotte</option>
                                        </select>
                                    </div>
                                        <div class="col-5">
                                            <label class="form-label f1 text-white">Postal Code</label>
                                            <input id="postal" type="text" class="form-control f1 text-black" style="box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25) inset;" />
                                        </div> 

                                        <div class="col-10 ">
                                            <label class="form-label f1 text-white">Gender</label>
                                            <input class="form-control f1" style="box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25) inset;" />
                                        </div>

                                    <div class="col-10 d-grid mt-2 mb-4">
                                        <button class="btn f2" style="background-color: #0073e6; box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25) inset;">Update My Profile</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    <script src="bootstrap.bundle.js"></script>
    <script src="script.js"></script>
    </body>

    </html>