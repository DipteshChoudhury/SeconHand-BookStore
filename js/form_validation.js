function validate_user(){
    var name = document.getElementById('name').value;
    var mobile = document.getElementById('mobile').value;
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;
    var password2 = document.getElementById('password2').value;

    var error = false;

    //alert(name+' '+mobile+' '+email+' '+password+' '+password2);

    if(name == '' || name==null){
        document.getElementById('name_error').innerHTML = 'Name is required';
        // alert('name is required');
        error = true;
    } else {
        document.getElementById('name_error').innerHTML = '';
        error = false;
    }

    if(mobile == '' || mobile==null){
        document.getElementById('mobile_error').innerHTML = 'Mobile is required';
        error = true;
    } else if(mobile.length != 10 || isNaN(mobile)){
        document.getElementById('mobile_error').innerHTML = 'Please enter a 10 digit valid mobile number';
        error = true;
    }else {
        document.getElementById('mobile_error').innerHTML = '';
        error = false;
    }

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

    if(password2 == '' || password2==null){
        document.getElementById('password2_error').innerHTML = 'Confirm Password is required';
        error = true;
    } else if(password != password2){
        document.getElementById('password2_error').innerHTML = 'Password and Confirm Password must be same';
        error = true;
    } else {
        document.getElementById('password2_error').innerHTML = '';
        error = false;
    }

    if(error)
        return false;
    else
        return true;
}

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