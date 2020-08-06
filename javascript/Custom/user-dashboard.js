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
    resetAddHouseForm();
    setAddHouseFormCardheading();
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
function setAddHouseFormCardheading(){
    $('#addHouseBoxHeading').html('Add New House');
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
            if(confirm('Are you sure?You want to add this house?')){
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
            }else{
                resetAddHouseForm();
            }
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
//to delete a house
function deleteHouse(id){
    if(confirm('Are you sure?you want to delete this house?')){
        $.ajax({
            url:"house/delete-house.function.php",
            type:"post",
            data: {
                id: id
            },
            success: function(response){
                if(response==true){
                    alert('Succesfully deleted!');
                    getHouseList();
                }
            
            }
        })
    }
}
//to edit a house
function getHouse(id){
    $.ajax({
        url:"house/get-single-house.function.php",
        type:"post",
        data: {
            id: id
        },
        success: function(response){
            var houseObj = JSON.parse(response);
            // console.log(houseObj);
            showAddHouseCard();
            setEditValues(houseObj[0]);
            changeAddHouseFormCardHeading();
        }
    })
}
//method to give recived values to house form
function setEditValues(house){
    //console.log(house.address);
    $('#house_address').val(house.address);
    $('#house_location').val(house.area);
    $('#bed_room').val(house.bedroom);
    $('#bath_room').val(house.bathroom);
    $('#house_amount').val(house.amount);
    $('#house_type').val(house.type);
    $('#house_description').val(house.description);
}
//to change heading of add new house to edit house
function changeAddHouseFormCardHeading(){
    document.getElementById('addHouseBoxHeading').innerHTML='Edit House';

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
