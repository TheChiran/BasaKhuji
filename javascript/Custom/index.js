
var houseId;

//to set house id to get single page
function setHouseId(id){
    houseId = id;
}

//to get house id
function getHouseId(){
    return houseId;
}

//house type list
function houseTypeList() {
    var houseTypeList = [{
            "name": "Choose House Type"
        },
        {
            "name": "Rent"
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

//function to display room number
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
    getHouseList();
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
    return (house_type === undefined) ? undefined : house_type;
}

//global variable to store total room numbers
var room_num;
//to set room number
function setRoomNumber(roomNum) {
    room_num = roomNum;
}
//to get/return room number
function getRoomNumber() {
    return (room_num === undefined) ? undefined : room_num;
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
    return (min_rent_amount === undefined) ? undefined : min_rent_amount;
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
    return (max_rent_amount === undefined) ? undefined : max_rent_amount;
}

//variable to store location
var home_area;
//function to store location
function setHomeArea(area) {
    home_area = area;
}
//to get location/area
function getHomeArea() {
    return (home_area === undefined) ? undefined : home_area;
}


//to get access
function getAccess(){
    var access = localStorage.getItem('access');
    return access != undefined ? access: undefined;
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
//to reset search fields
function resetSearchFields(){
    $('#houseArea').val('');
    $('#houseType').val('');
    $('#minimumAmount').val('');
    $('#maximumAmount').val('');
    $('#roomList').val('');
}
//to check is all search fields are empty
//if all fields are empty then error message will show

function isSearchFieldEmpty() {
    if (getHouseType() ===undefined && getHomeArea() == undefined && getRoomNumber() == undefined &
        getMinimumAmount() == undefined && getMaximumAmount() == undefined) {
        return true;
    } else {
        return false;
    }
}
//to search according to user requirement
function search() {
    if(isSearchFieldEmpty() === true){
        alert("At least one field is required!");
        resetSearchFields();
    }else{
        var houseType,houseArea,maxAmount,minAmount,roomNumber;
         (getHouseType()==undefined)?houseType ='': houseType=getHouseType();
         (getHomeArea()==undefined)? houseArea = '': houseArea = getHomeArea();
         (getMaximumAmount()==undefined) ? maxAmount = '' : maxAmount = getMaximumAmount();
         (getMinimumAmount()==undefined) ? minAmount = '' : minAmount = getMinimumAmount();
         (getRoomNumber()==undefined) ? roomNumber = '' : roomNumber = getRoomNumber();
         $.ajax({
            url:'pages/house/get-filtered-house.function.php',
            type: 'post',
            data:{
                type: houseType,
                area: houseArea,
                max: maxAmount,
                min: minAmount,
                room: roomNumber
            },
            success: function(response){
                changeResponseData(response);
                resetSearchFields();
            }
         });
    }
    // console.log(getMaximumAmount());
    // console.log(getMinimumAmount());
    // console.log(getHouseType());
    // console.log(getRoomNumber());
    // console.log(getHomeArea());

}
//to change values on search and on click
function changeResponseData(data){
    $('#house_list').html(data);
}
//
function addFooter(){
    // $('#footer').load('../../pages/footer.php');
}
//to get all house list
function getHouseList(){
    $.ajax({
        url: 'pages/house/get-all-house-info.function.php',
        type: 'get',
        success: function(response){
            // console.log(response);
            changeResponseData(response);
        }
    })
}
//to get single house list
function getSingleHouse(id){
    $.ajax({
        url: 'pages/house/get-single-house.function.php',
        type: 'post',
        data:{
            id: id
        },
        success: function(response){
            // console.log(response);
            changeResponseData(response);
        }
    })
}