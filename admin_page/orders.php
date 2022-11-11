<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Accounts - Product Admin Template</title>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Roboto:400,700"
    />
    <!-- https://fonts.google.com/specimen/Roboto -->
    <link rel="stylesheet" href="css/fontawesome.min.css" />
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="css/templatemo-style.css">
    <!--
	Product Admin CSS Template
	https://templatemo.com/tm-524-product-admin
	-->
  </head>

  <body id="reportsPage">
    <div class="" id="home">
      <!-- navigation bar -->
      <?php
          require("Views/header.php");
      ?>
      <!-- navigation bar -->
      <div class="tm-block-col">
        <div class="tm-bg-primary-dark tm-block tm-block-taller tm-block-scroll">
            <h2 class="tm-block-title">Orders List</h2>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ORDER NO.</th>
                            <th scope="col">STATUS</th>
                            <th scope="col">OPERATORS</th>
                            <th scope="col">LOCATION</th>
                            <th scope="col">DISTANCE</th>
                            <th scope="col">START DATE</th>
                            <th scope="col">EST DELIVERY DUE</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row"><b>#122349</b></th>
                            <td>
                                <div class="tm-status-circle moving">
                                </div>Moving
                            </td>
                            <td><b>Oliver Trag</b></td>
                            <td><b>London, UK</b></td>
                            <td><b>485 km</b></td>
                            <td>16:00, 12 NOV 2018</td>
                            <td>08:00, 18 NOV 2018</td>
                        </tr>
                        <tr>
                            <th scope="row"><b>#122348</b></th>
                            <td>
                                <div class="tm-status-circle pending">
                                </div>Pending
                            </td>
                            <td><b>Jacob Miller</b></td>
                            <td><b>London, UK</b></td>
                            <td><b>360 km</b></td>
                            <td>11:00, 10 NOV 2018</td>
                            <td>04:00, 14 NOV 2018</td>
                        </tr>
                        <tr>
                            <th scope="row"><b>#122347</b></th>
                            <td>
                                <div class="tm-status-circle cancelled">
                                </div>Cancelled
                            </td>
                            <td><b>George Wilson</b></td>
                            <td><b>London, UK</b></td>
                            <td><b>340 km</b></td>
                            <td>12:00, 22 NOV 2018</td>
                            <td>06:00, 28 NOV 2018</td>
                        </tr>
                        <tr>
                            <th scope="row"><b>#122346</b></th>
                            <td>
                                <div class="tm-status-circle moving">
                                </div>Moving
                            </td>
                            <td><b>William Aung</b></td>
                            <td><b>London, UK</b></td>
                            <td><b>218 km</b></td>
                            <td>15:00, 10 NOV 2018</td>
                            <td>09:00, 14 NOV 2018</td>
                        </tr>
                        <tr>
                            <th scope="row"><b>#122345</b></th>
                            <td>
                                <div class="tm-status-circle pending">
                                </div>Pending
                            </td>
                            <td><b>Harry Ryan</b></td>
                            <td><b>London, UK</b></td>
                            <td><b>280 km</b></td>
                            <td>15:00, 11 NOV 2018</td>
                            <td>09:00, 17 NOV 2018</td>
                        </tr>
                        <tr>
                            <th scope="row"><b>#122344</b></th>
                            <td>
                                <div class="tm-status-circle pending">
                                </div>Pending
                            </td>
                            <td><b>Michael Jones</b></td>
                            <td><b>London, UK</b></td>
                            <td><b>218 km</b></td>
                            <td>18:00, 12 OCT 2018</td>
                            <td>06:00, 18 OCT 2018</td>
                        </tr>
                        <tr>
                            <th scope="row"><b>#122343</b></th>
                            <td>
                                <div class="tm-status-circle moving">
                                </div>Moving
                            </td>
                            <td><b>Timmy Davis</b></td>
                            <td><b>London, UK</b></td>
                            <td><b>218 km</b></td>
                            <td>12:00, 10 OCT 2018</td>
                            <td>08:00, 18 OCT 2018</td>
                        </tr>
                        <tr>
                            <th scope="row"><b>#122344</b></th>
                            <td>
                                <div class="tm-status-circle pending">
                                </div>Pending
                            </td>
                            <td><b>Michael Jones</b></td>
                            <td><b>London, UK</b></td>
                            <td><b>218 km</b></td>
                            <td>18:00, 12 OCT 2018</td>
                            <td>06:00, 18 OCT 2018</td>
                        </tr>
                        <tr>
                            <th scope="row"><b>#122344</b></th>
                            <td>
                                <div class="tm-status-circle pending">
                                </div>Pending
                            </td>
                            <td><b>Michael Jones</b></td>
                            <td><b>London, UK</b></td>
                            <td><b>218 km</b></td>
                            <td>18:00, 12 OCT 2018</td>
                            <td>06:00, 18 OCT 2018</td>
                        </tr>
                        <tr>
                            <th scope="row"><b>#122344</b></th>
                            <td>
                                <div class="tm-status-circle pending">
                                </div>Pending
                            </td>
                            <td><b>Michael Jones</b></td>
                            <td><b>London, UK</b></td>
                            <td><b>218 km</b></td>
                            <td>18:00, 12 OCT 2018</td>
                            <td>06:00, 18 OCT 2018</td>
                        </tr>
                        <tr>
                            <th scope="row"><b>#122344</b></th>
                            <td>
                                <div class="tm-status-circle pending">
                                </div>Pending
                            </td>
                            <td><b>Michael Jones</b></td>
                            <td><b>London, UK</b></td>
                            <td><b>218 km</b></td>
                            <td>18:00, 12 OCT 2018</td>
                            <td>06:00, 18 OCT 2018</td>
                        </tr>
                        <tr>
                            <th scope="row"><b>#122344</b></th>
                            <td>
                                <div class="tm-status-circle pending">
                                </div>Pending
                            </td>
                            <td><b>Michael Jones</b></td>
                            <td><b>London, UK</b></td>
                            <td><b>218 km</b></td>
                            <td>18:00, 12 OCT 2018</td>
                            <td>06:00, 18 OCT 2018</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
    </div>
      <!-- Footer -->
      <?php
        require("Views/footer.php");
      ?>
      <!-- Footer -->
    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
  </body>
</html>
