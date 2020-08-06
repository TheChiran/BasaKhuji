let house_address,house_location,house_bedroom,
    house_bathroom,house_amount,house_type,
    house_description; //global variable for house information
function setHouseAddress(address){
    house_address = address;
}
function getHouseAddress(){
    return house_address;
}
function setHouseLocation(location){
    house_location = location;
}
function getHouseLocation(){
    return house_location;
}
function setHouseBedroom(bedroom){
    house_bedroom = bedroom;
}
function getHouseBedroom(){
    return house_bedroom;
}
function setHouseBathroom(bathroom){
    house_bathroom = bathroom;
}
function getHouseBathroom(){
    return house_bathroom;
}
function setHouseAmount(amount){
    house_amount = amount;
}
function getHouseAmount(){
    return house_amount;
}
function setHouseType(type){
    house_type = type;
}
function getHouseType(){
    return house_type;
}
function setHouseDescription(description){
    house_description = description;
}
function getHouseDescription(){
    return house_description;
}

function showAddHouseCard(){
    $('#add_house_card').show(500);
    showAddHouseCardCloseButton();
}
function hideAddHouseCard(){
    $('#add_house_card').hide(500);
    hideAddHouseCardCloseButton();
}
function showAddHouseCardCloseButton(){
    $('#addHouseCardBtn').show();
}
function hideAddHouseCardCloseButton(){
    $('#addHouseCardBtn').hide();
}
function callMethodOnLoad(){
    hideAddHouseCard();
    getHouseList();
}

function addHouse(){
    if(isHouseFormUndefined() == true){
        displayEmptyError();
    }else{
        if(isHouseFormEmpty() == true){
            displayEmptyError();
        }else{
            $.ajax({
                url:"house/add-house.function.php",
                type:"post",
                data:{
                    address: getHouseAddress(),
                    area: getHouseLocation(),
                    type: getHouseType(),
                    amount: getHouseAmount(),
                    bath: getHouseBathroom(),
                    bed: getHouseBedroom(),
                    description: getHouseDescription()
                },
                success: function(response){
                    if(response==false){

                    }else{
                        resetAddHouseForm();
                        getHouseList();
                    }
                }
            })
        }
    }
}
//function to reset form data after success
function resetAddHouseForm(){
    $('#house_address').val('');
    $('#house_location').val('');
    $('#bed_room').val('');
    $('#bath_room').val('');
    $('#house_amount').val('');
    $('#house_type').val('');
    $('#house_description').val('');
}
//function to get house list
function getHouseList(){
    $.ajax({
        url:"house/get-house.function.php",
        type:"get",
        success: function(response){
            if(response.length>0){
                $('#houseList').html(response);
            }else{
                $('#houseList').html('There is no data available!');
            }
            
        }
    })
}

//method to check if all fields are undefined or not
function isHouseFormUndefined(){
    if( getHouseAddress() == undefined || getHouseLocation() == undefined || getHouseAmount() == undefined ||
    getHouseBathroom() == undefined || getHouseBedroom() == undefined || getHouseDescription() == undefined){
        return true;
    }else{
        return false;
    }
}
//method to check if fields are empty
function isHouseFormEmpty(){
    if( getHouseAddress() == '' || getHouseLocation() == '' || getHouseAmount() == '' ||
    getHouseBathroom() == '' || getHouseBedroom() == '' || getHouseDescription() == ''){
        return true;
    }else{
        return false;
    }
}

//method to display error on empty field
function displayEmptyError(){
    $('#emptyFieldErrorBox').css("display","block");
    $('#emptyFieldErrorMsg').html('Please fill all the fields');
    setTimeout(function(){
        $('#emptyFieldErrorBox').css("display","none");
    },2000);
}
