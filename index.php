<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
         integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <title>SIH</title>

</head>

<body>

    <!-- navigation bar -->

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">SaTurck!</a>
            <h2 class="navbar-brand mt-2">Coal India Limited</h2>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav  ms-auto">

                    <li class="nav-item">
                        <a class="nav-link active ms-4" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active ms-4" aria-current="page" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active ms-4" aria-current="page" href="#">Contact</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link ms-2" href="logout.php">Logout</a>
                    </li>
                    <li class="nav-item">

                        <button class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal"><svg
                                xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                                class="bi bi-truck" viewBox="0 0 16 16">
                                <path
                                    d="M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-3.998-.085A1.5 1.5 0 0 1 0 10.5v-7zm1.294 7.456A1.999 1.999 0 0 1 4.732 11h5.536a2.01 2.01 0 0 1 .732-.732V3.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .294.456zM12 10a2 2 0 0 1 1.732 1h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12v4zm-9 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                            </svg></button>
                    </li>



            </div>
        </div>
    </nav>

    <!-- carousel slider -->

    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://source.unsplash.com/random/2400x800/?truck,overloading" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://source.unsplash.com/random/2400x800/?coalmining,truck" class="d-block w-100"
                    alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://source.unsplash.com/random/2400x800/?coalindialimited,truck" class="d-block w-100"
                    alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
   

    <!-- New truck Registration -->

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">New Truck Registration</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="Truck number" class="form-label">Truck Number</label>
                            <input type="text" class="form-control" id="Truck Number" name="truck_no"
                                aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text"></div>
                        </div>
                        <div class="mb-3">
                            <label for="driver name" class="form-label">Driver Name</label>
                            <input type="text" class="form-control" name="driver_name" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="Driver phoneno." class="form-label">Driver Contact No.</label>
                            <input type="text" class="form-control" name="d_phoneno." id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="maximum payload" class="form-label">Maximum payload</label>
                            <input type="text" class="form-control" name="payload" id="exampleInputPassword1">
                        </div>

                        <button type="submit" class="btn btn-primary">Register</button>
                    </form>
                </div>

            </div>
        </div>
    </div>


    <!-- <a href="logout.php">Logout</a> -->

   
    
    Hello, <?php echo $user_data['user_name']; ?>

    <div class="container mt-5 my-4">

        <table class="table mt-3 " id="myTable">
            <thead>
                <tr>
                    <th scope="col">S.No</th>
                    <th scope="col">Truck No.</th>
                    <th scope="col">Driver Name</th>
                    <th scope="col">Driver phone no.</th>
                    <th scope="col">Maximum Payload</th>
                    <th scope="col">Live Payload</th>

                </tr>
            </thead>
            <tbody>

                <!--    showing data -->
                <?php
   
   
  $sql ="SELECT * FROM `truckdetails`";

  $result =mysqli_query($con,$sql);
  $serialno =0;
	while($row = mysqli_fetch_assoc($result))
	{
	  $serialno++;
	  echo " <tr>
	  <th scope='row'>". $serialno. "</th>
	  <td>" . $row['truck_no'] ."</td>
	  <td>" .$row['driver_name']. "</td>
	  <td>" .$row['d_phoneno.']. "</td>
	  <td>" .$row['maximu payload']. "</td>
       <td><a  class='btn btn-dark' href='data.php'>View iive data</a>
	 
	</tr>";

	}
	

   ?>



            </tbody>

        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>

    <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

    <script>
    $(document).ready(function() {
        $('#myTable').DataTable();

    });
    </script>

</body>

</html>