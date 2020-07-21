function houseTypeList(){
    var houseTypeList = [
        {
            "name":"Choose House Type"
        },
        {
            "name": "Rental"
        },
        {
            "name": "Sell"
        }
    ];
    var optionValues = '';
    

    for(var i in houseTypeList){
        // var optionNode = document.createElement("SELECT");     
        // var div = document.createElement("houseType");
        if(i==0){
            optionValues+= '<option value="" selected>'+houseTypeList[i].name+'</option>';
        }else{
            optionValues+= '<option value="'+houseTypeList[i].name+'" onchange="setHouseType('+houseTypeList[i].name+')">'+houseTypeList[i].name+'</option>';
        }
        
        //document.getElementById('houseType').append(optionValues);
        //optionNode.appendChild(optionValue);
    }
    //console.log(optionValues);
    document.getElementById('houseType').innerHTML=optionValues;
    //console.log(optionValues);

}

function roomNoList(){
    var roomList = [
        {"roomNum":""},{"roomNum": "1"},{"roomNum": "2"},{"roomNum": "3"},
        {"roomNum": "4"},{"roomNum": "5"},{"roomNum": "6"}
    ];
    var roomValues = '';
    

    for(var i in roomList){
        if(i==0){
            roomValues+= '<option value="" selected>Room numbers</option>';
        }else{
            roomValues+= '<option value="'+roomList[i].roomNum+'">'+roomList[i].roomNum+'</option>';
        }
        
    }
    //console.log(optionValues);
    document.getElementById('roomList').innerHTML=roomValues;
}

function callJsonValues(){
    houseTypeList();
    roomNoList();
}

//to set house type for search purpose
var house_type; // house type global variable to access across all function
function setHouseType(type){
    house_type=type;
    //console.log('selected house type: '+house_type);
}
//to get or return house type value
function getHouseType(){
    return house_type;
}

//global variable to store total room numbers
var room_num;
//to set room number
function setRoomNumber(roomNum){
    room_num=roomNum;
}
//to get/return room number
function getRoomNumber(){
    return room_num;
}

//global variable to set minimum amount for rent
var min_amount=0;
//function to set minimum amount
function setMinimumAmount(min_amount){
    min_amount=min_amount;
}
//function to get minimum amount
function getMinimumAmount(){
    return min_amount;
}

//global variable to set Maximum amount for rent
var max_amount=0;
//function to set Maximum amount
function setMaximumAmount(max_amount){
    max_amount=max_amount;
}
//function to get Maximum amount
function getMaximumAmount(){
    return max_amount;
}


//to search according 
function search(){
    //console.log(getHouseType());
}
