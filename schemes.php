<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/js/all.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="dashboard.css" rel="stylesheet">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="schemes.css">
</head>
<body>

<nav class="navbar navbar-expand navbar-light bg-primary topbar mb-4 static-top shadow">


    <ul class="navbar-nav mr-auto">
        <img src="img/money.png" height="73px" width="80px" style="padding:10px;margin-top:5px;background-color: white" >
        <li><h1 style="color: black;font-size: 50px; background-color: white;height: 78px;width: 220px;padding-top: 15px">deFraud</h1></li>
    </ul>
    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto" style="font-size: 17px">
        <li class="nav-item no-arrow">
            <a class="nav-link" href="dashboard.php" id="messagesDropdown" role="button"  aria-haspopup="true" aria-expanded="false" style="color: white">
                Dashboard</a></li>
        <li class="nav-item no-arrow" style="font-size: 17px;">
            <a class="nav-link" href="#" id="messagesDropdown" role="button"  aria-haspopup="true" aria-expanded="false" style=" background-color:white; color: black">
                Schemes</a></li>

        <!-- Nav Item - Messages -->
        <li class="nav-item dropdown no-arrow mx-1" style="font-size: 17px">
            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" style="color: white" aria-haspopup="true" aria-expanded="false">
                Notifications
                <!-- Counter - Messages -->
                <span class="badge badge-danger badge-counter">7</span>
            </a>
            <!-- Dropdown - Messages -->
            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                <h6 class="dropdown-header">
                    Notifs
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                    <div class="dropdown-list-image mr-3">
                        <img class="rounded-circle" src="https://source.unsplash.com/fn_BT9fwg_E/60x60" alt="">
                        <div class="status-indicator bg-success"></div>
                    </div>
                    <div class="font-weight-bold">
                        <div class="text-truncate">Fund successfully transferred to States for Pradhan Mantri Bima Yojana Scheme</div>
                        <div class="small text-gray-500">· 58m</div>
                    </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                    <div class="dropdown-list-image mr-3">
                        <img class="rounded-circle" src="https://source.unsplash.com/AU4VPcFN4LE/60x60" alt="">
                        <div class="status-indicator"></div>
                    </div>
                    <div>
                        <div class="text-truncate">Funds disbursed for Health For All Scheme successfully</div>
                        <div class="small text-gray-500">· 1d</div>
                    </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                    <div class="dropdown-list-image mr-3">
                        <img class="rounded-circle" src="https://source.unsplash.com/CS2uCrpNzJY/60x60" alt="">
                        <div class="status-indicator bg-warning"></div>
                    </div>
                    <div>
                        <div class="text-truncate">Transfer unsuccessful for Rashtriya Madhyamik Shiksha Abhiyan Scheme</div>
                        <div class="small text-gray-500">· 2d</div>
                    </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
            </div>
        </li>

        <li class="nav-item no-arrow" style="font-size: 17px">
            <a class="nav-link" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white">
                Generate Report</a></li>

        <div class="topbar-divider d-none d-sm-block"></div>

        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-white-600 medium">Nidhi Dedhia</span>
            </a>
            <!-- Dropdown - User Information -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                    Profile
                </a>
                <a class="dropdown-item" href="#">
                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                    Settings
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Logout
                </a>
            </div>
        </li>

    </ul>

</nav>

<div class="container" style="width: 950px;">
    <input class="form-control" id="myInput" type="text" placeholder="Search for schemes..." ></input>
    <br> 
</div>
  


<div class="container-fluid" style="margin:0 50px;" id="mylist">
    <br>

    <div>
        <h4>Department of Railway Affairs</h4>
        <div class="row" style="padding: 10px">
            <div class="col-md-3" style="padding-left: 50px;margin-left: -45px">
                <div class="card" style="margin: 0">
                    <img src="images/rail1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title" style="cursor: pointer" onclick="location.replace('specificschemes.php')">Welfare Scheme For Railway Officers</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's content.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3" style="padding-left:50px;margin-left: -20px">
                <div class="card" style="margin:0">
                    <img src="images/rail2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's content.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3" style="padding-left:50px;margin-left: -20px">
                <div class="card" style="margin:0">
                    <img src="images/rail4.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's content.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-3" style="padding-left:50px;margin-left: -20px">
                <div class="card" style="margin:0">
                    <img src="images/rail3.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's content.</p>
                    </div>
                </div>
            </div>
        </div></div>


<div><br><br><br><br><br><br><br><br><br><br><br><hr><br>

    <h4>Department of Agriculture</h4>
    <div class="row" style="padding: 10px">
        <div class="col-md-3" style="padding-left: 50px;margin-left: -45px">
            <div class="card" style="margin: 0">
                <img src="images/agri1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"> Pradhan Mantri Krishi Sinchayee Yojana </h5>
                    <p class="card-text">PMKSY has been formulated with the vision of extending the coverage of irrigation 'Har Khet ko pani' and improving water use efficiency. </p>
                </div>
            </div>
        </div>

        <div class="col-md-3" style="padding-left:50px;margin-left: -20px">
            <div class="card" style="margin:0">
                <img src="images/agri2.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"  >Soil Health Management</h5>
                    <p class="card-text">SHC is a Government of India’s scheme promoted by the Dept. of Agriculture under the Ministry of Agriculture and Farmers’ Welfare.</p>
                </div>
            </div>
        </div>

        <div class="col-md-3" style="padding-left:50px;margin-left: -20px">
            <div class="card" style="margin:0">
                <img src="images/agri3.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Paramparagat Krishi Vikas Yojana</h5>
                    <p class="card-text">an initiative to promote organic farming in the country, was launched by the NDA government in 2015.</p>
                </div>
            </div>
        </div>

        <div class="col-md-3" style="padding-left:50px;margin-left: -20px">
            <div class="card" style="margin:0">
                <img src="images/agri4.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">National Centre of Organic Farming</h5>
                    <p class="card-text">National Project on Organic Farming (NPOF) is a continuing central sector scheme since 10th Five Year Plan. </p>
                </div>
            </div>
        </div>
    </div></div>


    <br><br><br><br><br><br><br><br><br><br><br><hr><br>
    <div>
    <h4>Department of Education</h4>
    <div class="row" style="padding: 10px">
        <div class="col-md-3" style="padding-left: 50px;margin-left: -45px">
            <div class="card" style="margin: 0">
                <img src="images/edu1.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                </div>
            </div>
        </div>

        <div class="col-md-3" style="padding-left:50px;margin-left: -20px">
            <div class="card" style="margin:0">
                <img src="images/edu2.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                </div>
            </div>
        </div>

        <div class="col-md-3" style="padding-left:50px;margin-left: -20px">
            <div class="card" style="margin:0">
                <img src="images/edu3.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                </div>
            </div>
        </div>

        <div class="col-md-3" style="padding-left:50px;margin-left: -20px">
            <div class="card" style="margin:0">
                <img src="images/edu4.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                </div>
            </div>
        </div>
    </div></div>


    <br><br><br><br><br><br><br><br><br><br><hr><br>
    <div>
    <h4>Department of Defence</h4>
    <div class="row" style="padding: 10px">
        <div class="col-md-3" style="padding-left: 50px;margin-left: -45px">
            <div class="card" style="margin: 0">
                <img src="images/def1.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                </div>
            </div>
        </div>

        <div class="col-md-3" style="padding-left:50px;margin-left: -20px">
            <div class="card" style="margin:0">
                <img src="images/def2.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                </div>
            </div>
        </div>

        <div class="col-md-3" style="padding-left:50px;margin-left: -20px">
            <div class="card" style="margin:0">
                <img src="images/def3.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                </div>
            </div>
        </div>

        <div class="col-md-3" style="padding-left:50px;margin-left: -20px">
            <div class="card" style="margin:0">
                <img src="images/def4.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                </div>
            </div>
        </div>
    </div></div>


    <br><br><br><br><br><br>


</div>
<br><br>
<script>
    $(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myList div").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
    </script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>
