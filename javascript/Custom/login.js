var username;
var password;
function validateForm(){
    username = document.getElementById('username').value;
    password = document.getElementById('userPassword').value;
    //console.log('Username: '+username);
    if(!username || username.length==0 && !password || password.length==0){
        return false;
    }else{
        return true;
    }
}

function validationSuccess(){
    document.getElementById('errorMsgBox').style="display:none";
    document.getElementById('successMsgBox').style="display:block";
}
function validationFailed(){
    document.getElementById('errorMsgBox').style="display:block";
    setTimeout(function(){
        closeValidationErrorBox();
    },2000);
}
function closeValidationErrorBox(){
    document.getElementById('errorMsgBox').style="display:none";
}

function login(){
    var isValidate = validateForm();
    if(isValidate==true){
        $.ajax({
            url: 'user/sign-in.function.php',
            type: 'POST',
            data:{
                username: getUsername(),
                password: getUserPassword()
            },
            success: function(response){
                if(response == false){
                    loginFailed();
                }else{
                    response = JSON.parse(response);
                    if(response.id && response.access_token){
                        localStorage.setItem('userID',response.id);
                        setAccess(response.access_token);
                        validationSuccess();
                        resetForm();
                        setAccess(response);
                        setTimeout(function(){
                            window.location.href = "../index.php";
                        },2000);
                    }else{
                        loginFailed();
                    }
                }
                
                // if(response != false){
                //     validationSuccess();
                //     resetForm();
                //     setAccess(response);
                //     setTimeout(function(){
                //         window.location.href = "../index.php";
                //     },2000);
                // }
                // else{
                //     loginFailed();
                // }
                
            },
            error: function(error){
                // console.log(error);
                loginFailed();
            }
        });
        
    }
    else if(isValidate==false){
        validationFailed();
    }
    
    //console.log('hello world!');
}
function getUsername(){
    return username;
}

function getUserPassword(){
    return password;
}

function loginFailed(){
    validationFailed();
    document.getElementById('errorMessage').innerHTML="Invalid user or password! Please try again";
    resetForm();
    //console.log('Something went wrong!');
}
function resetForm(){
    document.getElementById('username').value = '';
    document.getElementById('userPassword').value = '';
}

function setAccess(access){
    localStorage.setItem('access',access);
    //console.log(localStorage.getItem('access'));
}



// function ajaxCall(){ // ajax request
//     $.ajax({
//         url: "https://chiran-tonmoy-api.herokuapp.com/skill",
//         type: 'get',
//         success: function(res){
//             console.log(res);
//           //$(this).addClass("done");
//         }
//     });
// }