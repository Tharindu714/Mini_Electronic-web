<!DOCTYPE html>
<html lang="en">


    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Line Chart | Business Charts</title>
        <!-- Google font -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">
        <!-- Bootstrap -->
        <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />
        <!-- Slick -->
        <link type="text/css" rel="stylesheet" href="css/slick.css" />
        <link type="text/css" rel="stylesheet" href="css/slick-theme.css" />

        <!-- nouislider -->
        <link type="text/css" rel="stylesheet" href="css/nouislider.min.css" />

        <!-- Font Awesome Icon -->
        <link rel="stylesheet" href="css/font-awesome.min.css">

        <!-- Custom stlylesheet -->
        <link type="text/css" rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="../bootstrap.css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
        <link rel="stylesheet" href="../style.css" />
        <link rel="icon" href="../resources/logo.png" />
    </head>

    <body onload="loadDChart();" class="body2">
        <!-- empty view -->
        <div class="col-12 d-flex justify-content-center align-items-center" style="margin-top: 20px;">
            <div class="row table-responsive">
                <div class="col-12" style="width: 900px;">
                    <h2 class="text-center text-dark fw-bold">Most Reviewed Product (Line Chart)</h2>
                    <canvas id="myChart"></canvas>
                </div>
            </div>
        </div>

        <!-- empty view -->
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <!-- <script src="script.js"></script> -->
        <script>
            function loadDChart() {
                var ctx = document.getElementById("myChart");
                var request = new XMLHttpRequest();
                request.onreadystatechange = function() {
                    if ((request.readyState == 4) & (request.status == 200)) {
                        var response = request.responseText;

                        var data = JSON.parse(response);
                        new Chart(ctx, {
                            type: 'line',
                            data: {
                                labels: data.labels,
                                datasets: [{
                                    labels: data,
                                    data: data.data,
                                    borderWidth: 1
                                }]
                            },
                            options: {
                                scales: {
                                    y: {
                                        beginAtZero: true
                                    }
                                }
                            }
                        });
                    }
                };
                request.open("POST", "../chartProcess/loadMostReviewed.php", true);
                request.send();
            }
        </script>
        <script src="../bootstrap.bundle.js"></script>

    </body>

</html>
