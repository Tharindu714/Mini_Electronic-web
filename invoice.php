<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="bootstrap.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />

  <title>E - Invoice | </title>

  <link rel="icon" href="resources/logo.png" />

</head>

<body class="container-fluid" style="overflow-x: hidden;">
    <div class="container-fluid">
      <div class="row">

        <div class="col-12">
          <hr />
        </div>

        <div class="col-12 btn-toolbar justify-content-end">
          <button class="btn btn-dark me-2" onclick="printInvoice();"><i class="bi bi-printer-fill"></i> Print</button>
          <button class="btn btn-danger me-2"><i class="bi bi-filetype-pdf"></i> Export as a PDF</button>
        </div>

        <div class="col-12">
          <hr />
        </div>

        <div class="col-12" id="page">
          <div class="row">
            <div class="col-6">
              <div class="ms-5 invoiceheader-IMG"></div>
            </div>

            <div class="col-6">
              <div class="row">
                <div class="col-12 text-primary text-decoration-underline text-end">
                  <h2 class="text-primary">Shop Name</h2>
                </div>
                <div class="col-12 fw-bold text-end">
                  <span>Address Here</span><br />
                  <span>+94 75 144 1764</span><br />
                  <span>Gmail Here</span><br />
                </div>
              </div>
            </div>

            <div class="col-12">
              <hr class="border border-1 border-primary" />
            </div>

            <div class="col-12 mb-4">
              <div class="row">
                <div class="col-6">
                  <h5 class="fw-bold text-dark">INVOICE TO : </h5>

                  <h2 class="text-primary">User Name</h2>
                  <span>Address Line 01, line 02</span><br />
                  <span><b>deltacodexsoftwares@gmail.com</b></span>
                </div>

                <div class="col-6 text-end mt-4">
                  <h1 class="text-primary">INVOICE 01</h1>
                  <span class="fw-bold">Date & Time of Invoice :</span><br />
                  <span>2024.07.07 12:00:00</span>
                </div>
              </div>
            </div>
            <div class="col-12">
              <table class="table">
                <thead>
                  <tr class="border border-1 border-secondary">
                    <th>#</th>
                    <th>Order Id & Product</th>
                    <th class="text-end">Unit Price</th>
                    <th class="text-end">QTY</th>
                    <th class="text-end">Price</th>
                  </tr>
                </thead>
                <tbody>
                  <tr style="height:72px;">
                    <td class="bg-primary text-white fs-3 fw-bold">01</td>
                    <td>
                      <span class="fw-bold text-primary text-decoration-underline p-2">01</span><br />

                      <span class="fw-bold text-primary fs-4 p-2">Product Title Here</span>
                    </td>
                    <td class="fw-bold fs-3 text-end pt-4 bg-secondary text-white">Rs.00 .00</td>
                    <td class="fw-bold fs-3 text-end pt-4">10 items</td>
                    <td class="fw-bold fs-3 text-end pt-4 bg-secondary text-white">Rs.00 .00</td>
                  </tr>
                </tbody>
                <tfoot>

                  <tr>
                    <td colspan="3" class="border-0"></td>
                    <td class="fs-3 text-start fw-bold">SUBTOTAL <b class="text-primary">(ඔබ මෙම මුදල දැනටමත් ගෙවා අවසන්)</b></td>
                    <td class="fs-3 text-end text-primary">Rs. <b>00.00</b></td>
                  </tr>
                  <tr>
                    <td colspan="3" class="border-0"></td>
                    <td class="fs-3 text-start fw-bold ">Delivery fee <b class="text-danger">(ඔබ මෙම ගාස්තුව කූරියර් සේවාව සදහා ගෙවිය යුතුයි)</b></td>
                    <td class="fs-3 text-end text-danger">Rs. <b>00 .00</b></td>
                  </tr>
                  <tr>
                    <td colspan="3" class="border-0"></td>
                    <td class="fs-3 text-start fw-bold">GRANDTOTAL <b class="text-success">(එවිට මේ භාණ්ඩය මිලදී ගැනීම සදහා මුළු වියදම වන්නේ.. )</b></td>
                    <td class="fs-3 text-end text-success">Rs. <b>00 .00</b></td>
                  </tr>
                </tfoot>
              </table>
            </div>

            <div class="col-4 text-center">
              <h2 class="fs1 fw-bold text-primary">Thank you!</h2>
            </div>

            <div class="col-12 border-start border-5 border-primary mt-3 mb-3 rounded" style="background-color: #e7f2ff;">
              <div class="row">
                <div class="col-12 mt-3 mb-3">
                  <span class="form-label fw-bold fs-2 text-primary">  NOTICE :</span><br />
                  <span class="form-label fs-3 fw-bold">  මේ භාණ්ඩය සදහා අදාල කූරියර් ගාස්තුව නිසි පරිදි ගෙවා ලබා ගන්න.</span>
                </div>
              </div>
            </div>

            <div class="col-12">
              <hr class="border border-1 border-primary" />
            </div>

            <div class="col-12 text-center mb-1">
              <label class="form-label fs-5 text-black-50 fw-bold">
                Invoice was created on a computer and is Valid without the signature and seal.
              </label>
            </div>

          </div>
        </div>
      </div>
    </div>
    <script src="bootstrap.bundle.js"></script>
    <script src="script.js"></script>
  </body>

</html>