<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/bootstrap.min.css">
    <link rel="stylesheet" href="style/mdb.min.css">
    <link rel="stylesheet" href="style/custom/index.css">
    <script src="javascript/jquery.min.js"></script>
    <script src="javascript/bootstrap.min.js"></script>
    <script src="javascript/mdb.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <title>Home</title>
</head>

<body onload="startFunctionOnPageLoad()">
    <section class="header">
        <div class="head-contents">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar-expand-lg navbar-dark custom-navbar">
                        <a class="navbar-brand" href="">
                            <img src="images/logo/logo.png" alt="" id="logo">
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav ml-auto" id="user-navbar">
                                <!-- <li class="nav-item">
                                    <a class="nav-link" href="pages/login.php">Sign-In 
                                        <span><i class="fa fa-sign-in" aria-hidden="true"></i></span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="pages/register.php">Sign-up <span><i class="fa fa-user-plus" aria-hidden="true"></i></span></a>
                                </li> -->
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
            <div class="row contents">
                <div class="col-md-4"></div>
                <div class="col-md-4 mt-5 home-search-section">
                    <center>
                        <h2>Search Your Desired Home</h2>
                    </center>
                    <div class="search">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" oninput="setHomeArea(event.target.value)"
                                placeholder="Search House With Your Desired Location" aria-label="Recipient's username"
                                aria-describedby="button-addon2" id="houseArea">
                            <div class="input-group-append">
                                <button class="btn btn-md btn-default m-0 px-3 py-2 z-depth-0 waves-effect" type="button"
                                    onclick="search()"><i class="fa fa-search" aria-hidden="true"></i></button>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="input-group col-md-3">
                                <select class="browser-default custom-select" onchange="setHouseType(event.target.value)"
                                    id="houseType">
                                    <option selected>Choose House Type</option>
                                </select>
                            </div>
                            <div class="input-group col-md-6">
                                <div class="form-row">
                                    <div class="input-group col-md-6">
                                        <input type="text" class="form-control" id="minimumAmount"
                                            oninput="setMinimumAmount(event.target.value)" 
                                            placeholder="Min">
                                    </div>
                                    <div class="input-group col-md-6">
                                        <input type="text" class="form-control" id="maximumAmount"
                                            oninput="setMaximumAmount(event.target.value)" placeholder="Max">
                                    </div>
                                </div>
                            </div>
                            <div class="input-group col-md-3">
                                <select class="browser-default custom-select" id="roomList"
                                    onchange="setRoomNumber(event.target.value)">
    
                                </select>
                            </div>
                        </div>
    
                    </div>
                </div>
                <div class="col-md-4">
    
                </div>
            </div>
        </div>
        
    </section>
    <section id="houseList">
        <div class="container">
            <div class="row mt-5" id="house_list">
            </div>
            <!-- <div class="row mt-5">
                <div class="pagination">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination pg-blue">
                            <li class="page-item ">
                                <a class="page-link" tabindex="-1">Previous</a>
                            </li>
                            <li class="page-item"><a class="page-link">1</a></li>
                            <li class="page-item active">
                                <a class="page-link">2 <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="page-item"><a class="page-link">3</a></li>
                            <li class="page-item ">
                                <a class="page-link">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div> -->
        </div>
    </section>




    <div id="footer">
        <?php 
            include "pages/footer.php";
        ?>
    </div>
    <div id="restart-icon" onclick="refreshPage()">
        <span><i class="fa fa-refresh" aria-hidden="true"></i></span>
    </div>

    <script src="javascript/Custom/index.js"></script>
</body>

</html>