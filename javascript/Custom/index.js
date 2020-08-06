function houseTypeList() {
    var houseTypeList = [{
            "name": "Choose House Type"
        },
        {
            "name": "Rental"
        },
        {
            "name": "Sell"
        }
    ];
    var optionValues = '';


    for (var i in houseTypeList) {
        // var optionNode = document.createElement("SELECT");     
        // var div = document.createElement("houseType");
        if (i == 0) {
            optionValues += '<option value="" selected>' + houseTypeList[i].name + '</option>';
        } else {
            optionValues += '<option value="' + houseTypeList[i].name + '" onchange="setHouseType(' + houseTypeList[i].name + ')">' + houseTypeList[i].name + '</option>';
        }

        //document.getElementById('houseType').append(optionValues);
        //optionNode.appendChild(optionValue);
    }
    //console.log(optionValues);
    document.getElementById('houseType').innerHTML = optionValues;
    //console.log(optionValues);

}

function roomNoList() {
    var roomList = [{"roomNum": ""}, {"roomNum": "1"}, {"roomNum": "2"}, 
        {"roomNum": "3"},{"roomNum": "4"}, {"roomNum": "5"}, {"roomNum": "6"}
    ];
    var roomValues = '';


    for (var i in roomList) {
        if (i == 0) {
            roomValues += '<option value="" selected>Room numbers</option>';
        } else {
            roomValues += '<option value="' + roomList[i].roomNum + '">' + roomList[i].roomNum + '</option>';
        }

    }
    //console.log(optionValues);
    document.getElementById('roomList').innerHTML = roomValues;
}

function startFunctionOnPageLoad() {
    houseTypeList();
    roomNoList();
    addFooter();
    checkAccess();
    //console.log(checkAccess());
}

//to set house type for search purpose
var house_type; // house type global variable to access across all function
function setHouseType(type) {
    house_type = type;
    //console.log('selected house type: '+house_type);
}
//to get or return house type value
function getHouseType() {
    return house_type;
}

//global variable to store total room numbers
var room_num;
//to set room number
function setRoomNumber(roomNum) {
    room_num = roomNum;
}
//to get/return room number
function getRoomNumber() {
    return room_num;
}

//global variable to set minimum amount for rent
var min_rent_amount;
//function to set minimum amount
function setMinimumAmount(min_amount) {
    min_rent_amount = min_amount;
    //-console.log(min_amount);
}
//function to get minimum amount
function getMinimumAmount() {
    return min_rent_amount;
}

//global variable to set Maximum amount for rent
var max_rent_amount;
//function to set Maximum amount
function setMaximumAmount(max_amount) {
    max_rent_amount = max_amount;
    //console.log(max_rent_amount);
}
//function to get Maximum amount
function getMaximumAmount() {
    return max_rent_amount;
}

//variable to store location
var home_area;
//function to store location
function setHomeArea(area) {
    home_area = area;
}
//to get location/area
function getHomeArea() {
    return home_area;
}


function isEmpty() {
    if (getHouseType() & getHomeArea() == undefined & getRoomNumber() == undefined &
        getMinimumAmount() == undefined & getMaximumAmount() == undefined) {
        return true;
    } else {
        return false;
    }
}
//to get access
function getAccess(){
    var access = localStorage.getItem('access');
    return access!=undefined?access: undefined;
}

//to checl if user is logged in or not
function checkAccess(){
    if(getAccess()==undefined){
        loggedOutNavbar();
    }else{
        loggedInNavbar();
    }
}

var navItems = '';
//to set logged in user nav items
function loggedInNavbar(){
    navItems='';
    navItems+='<li class="nav-item">';
    navItems+='<a class="nav-link btn btn-md btn-default-outline" onclick="sign_out()"><span><i class="fa fa-arrow-left" aria-hidden="true"></i></span>';
    navItems+='Sign-out </a>';
    navItems+='</li>';
    navItems+='<li class="nav-item">';
    navItems+='<a class="nav-link btn btn-md btn-default-outline" href="pages/user-dashboard.php">User Dashboard ';
    navItems+='<span><i class="fa fa-home" aria-hidden="true"></i></span>';
    navItems+='</a>';
    navItems+='</li>';
    document.getElementById('user-navbar').innerHTML = navItems;
}
//to set nav items for logged-out navbar
function loggedOutNavbar(){
    navItems='';
    navItems+='<li class="nav-item">';
    navItems+='<a class="nav-link btn btn-md btn-default-outline" href="pages/login.php">Sign-In ';
    navItems+='<span><i class="fa fa-sign-in" aria-hidden="true"></i></span></a>';
    navItems+='</li>';
    navItems+='<li class="nav-item">';
    navItems+='<a class="nav-link btn btn-md btn-default-outline" href="pages/register.php">Sign-up ';
    navItems+='<span><i class="fa fa-user-plus" aria-hidden="true"></i></span></a>';
    navItems+='</li>';
    document.getElementById('user-navbar').innerHTML = navItems;
}

//to sign-out
function sign_out(){
    localStorage.removeItem('access');
    loggedOutNavbar();
}
//to search according 
function search() {
    // console.log(getMaximumAmount());
    // console.log(getMinimumAmount());
    // console.log(getHouseType());
    // console.log(getRoomNumber());
    // console.log(getHomeArea());

}

function addFooter(){
    // $('#footer').load('../../pages/footer.php');
}