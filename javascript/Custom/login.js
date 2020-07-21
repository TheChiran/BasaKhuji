function validateForm(){
    var username = document.getElementById('username').value;
    var password = document.getElementById('userPassword').value;
    //console.log('Username: '+username);
    if(!username || username.length==0 && !password || password.length==0){
        document.getElementById('errorMsgBox').style="display:block";
    }else{
        document.getElementById('errorMsgBox').style="display:none";
        document.getElementById('successMsgBox').style="display:block";
        resetForm();
        setTimeout(function(){
            window.location.href = "../index.html";
        },2000);
        
        //alert('Thank you!');
    }
}

function loginUser(){
    validateForm();
    //console.log('hello world!');
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