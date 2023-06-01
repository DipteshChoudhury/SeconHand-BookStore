function login_validate(){
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;

    var error = false;

    //alert("login alert");

    var dotpos = email.lastIndexOf('.');
    var atpos = email.indexOf('@');
    if(email == '' || email==null){
        document.getElementById('email_error').innerHTML = 'Email is required';
        error = true;
    } else if(atpos <= 1 || dotpos<=4 || dotpos - atpos < 3){
        document.getElementById('email_error').innerHTML = 'Please enter a valid email address';
        error = true;
    } else {
        document.getElementById('email_error').innerHTML = '';
        error = false;
    }

    if(password == '' || password==null){
        document.getElementById('password_error').innerHTML = 'Password is required';
        error = true;
    } else if(password.length <6 || password.length >15){
        document.getElementById('password_error').innerHTML = 'Password shoud be 6 - 15 character long';
        error = true;
    }else {
        document.getElementById('password_error').innerHTML = '';
        error = false;
    }
    
    if(error)
        return false;
    else
        return true;
}

function validateProduct(){
    var image = document.getElementById("image");
    var size = image.files[0].size / 1024;
    // alert(size);
    if(size < 3 || size >500){
        alert("Image size shoud be between 50 - 500 KB")
        return false;
    } else {
        return true;
    }
}