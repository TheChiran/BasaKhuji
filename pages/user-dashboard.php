<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/bootstrap.min.css">
    <link rel="stylesheet" href="../style/mdb.min.css">
    <link rel="stylesheet" href="../style/custom/user-dashboard.css">
    <script src="../javascript/jquery.min.js"></script>
    <script src="../javascript/bootstrap.min.js"></script>
    <script src="../javascript/mdb.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <title>User Dashboard</title>
</head>

<body onload="callMethodOnLoad()" id="user-dashboard-body">
    <section class="header">
        <div class="head-contents">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar-expand-lg navbar-dark custom-navbar">
                        <a class="navbar-brand" href="../index.php">
                            <img src="../images/logo/logo.png" alt="" id="logo">
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav ml-auto" id="user-navbar">
                                <li class="nav-item">
                                    <button class="nav-link btn btn-md btn-default-outline" onclick="logout()"
                                        style="color: rgba(0,0,0,0.7) !important">Sign-Out
                                        <span><i class="fa fa-sign-in" aria-hidden="true"></i></span></button>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link btn btn-md btn-default-outline" href="pages/register.php"
                                        style="color: rgba(0,0,0,0.7) !important">Profile <span><i
                                                class="fa fa-user-plus" aria-hidden="true"></i></span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link btn btn-md btn-default-outline" href="../index.php"
                                        style="color: rgba(0,0,0,0.7) !important">Home <span><i class="fa fa-home"
                                                aria-hidden="true"></i></span></a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
            <div class="col-md-4">

            </div>
        </div>
        </div>

    </section>

    <section id="house-list" class="mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="action-buttons" style="display: flex">
                        <button class="btn btn-sm btn-block btn-outline-success mb-3" style="width: 20%"
                            onclick="showAddHouseCard()">Add New <span><i class="fa fa-plus"
                                    aria-hidden="true"></i></span></button>
                        <button class="btn btn-sm btn-block btn-outline-warning mb-3" style="width: 20%"
                            onclick="hideAddHouseCard()" id="addHouseCardBtn" style="display: none">
                            <span>Close</span>
                        </button>
                    </div>

                    <!-- house form input -->
                    <div class="row">
                        <div class="col-md-5">
                            <div class="card" id="add_house_card" style="display: none">
                                <div class="card-header">
                                    <h4 id="addHouseBoxHeading"></h4>
                                    <div class="alert alert-warning" id="emptyFieldErrorBox" style="display: none">
                                        <h3 id="emptyFieldErrorMsg"></h3>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <form action="">
                                        <div class="form-row">
                                            <label for="">House Address</label>
                                            <input type="text" class="form-control" id="house_address"
                                                placeholder="Enter House Address;e.g. ka-22/2/A,Kalachandpur"
                                                onchange="setHouseAddress(event.target.value)">
                                        </div>
                                        <div class="form-row mt-3">
                                            <label for="">Location</label>
                                            <input type="text" class="form-control" id="house_location"
                                                placeholder="e.g. Baridhara"
                                                onchange="setHouseLocation(event.target.value)">
                                        </div>
                                        <div class="form-row mt-3">
                                            <label for="">Bedroom</label>
                                            <input type="number" class="form-control" id="bed_room" placeholder="e.g. 2"
                                                onchange="setHouseBedroom(event.target.value)">
                                        </div>
                                        <div class="form-row mt-3">
                                            <label for="">Bath Room</label>
                                            <input type="number" class="form-control" id="bath_room"
                                                placeholder="e.g. 3" onchange="setHouseBathroom(event.target.value)">
                                        </div>
                                        <div class="form-row mt-3">
                                            <label for="">Amount(BDT)</label>
                                            <input type="number" class="form-control" id="house_amount"
                                                placeholder="e.g. 12,500" onchange="setHouseAmount(event.target.value)">
                                        </div>
                                        <div class="form-row mt-3">
                                            <label for="">Type</label>
                                            <select name="" id="house_type" class="form-control"
                                                onchange="setHouseType(event.target.value)">
                                                <option value="">Choose House Type</option>
                                                <option value="Rent">Rent</option>
                                                <option value="Sell">Sell</option>
                                            </select>
                                        </div>
                                        <div class="form-row mt-3">
                                            <label for="">Description</label>
                                            <textarea class="form-control" name="" id="house_description" cols="30"
                                                rows="5" onchange="setHouseDescription(event.target.value)"></textarea>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer">
                                    <div class="action-button" style="display:flex">
                                        <button class="btn btn-sm btn-block btn-outline-success" onclick="save()">
                                            <span>Save</span>
                                        </button>

                                        <span id="actionType"></span>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7"></div>
                    </div>
                </div>
            </div>

            <!-- house list -->
            <div class="row mt-5">
                <div class="col-md-12">
                    <!-- to show list of houses -->
                    <div id="houseList"></div>
                </div>
            </div>
        </div>
    </section>
     

    <!-- modal -->
    <div class="modal fade" id="houseImageModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">House images</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- house-image-form -->
     <div class="container">
                <div class="row">
                            <div class="col-md-12">
                                <div class="house-images">
                                    <!--Carousel Wrapper-->
                                    <div id="image-carousel"></div>
                                    <!--/.Carousel Wrapper-->
                                    <!-- <button class="btn btn-sm btn-outline-success">Add new image</button> -->

                                    <div class="house-image-upload mt-5 mb-5">
                                        <div class="alert alert-warning">
                                            <h2>Max file size 2MB</h2>
                                        </div>
                                        <div id="fileTooLargeerrorMsg"></div>
                                        <div class="form-row">
                                            <label for="">Add New Image</label>
                                            <input type="file" class="form-control" id="house_image">
                                        </div>
                                        <div class="form-row">
                                            <button class="btn btn-sm btn-outline-success"
                                                onclick="uploadImage()">Upload</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Close</button>
                    <!-- <button type="button" class="btn btn-sm btn-primary" onclick="uploadImage()">Save</button> -->
                </div>
            </div>
        </div>
    </div>

               







    <script src="../javascript/Custom/user-dashboard.js"></script>
</body>

</html>