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
                if(response == 1 || response == true){
                    validationSuccess();
                    resetForm();
                    console.log(response);
                    // setTimeout(function(){
                    //     window.location.href = "../index.php";
                    // },2000);
                }
                else{
                    loginFailed();
                }
                
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
    console.log('Something went wrong!');
}
function resetForm(){
    document.getElementById('username').value = '';
    document.getElementById('userPassword').value = '';
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