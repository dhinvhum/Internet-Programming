
function check_login() {

    var id = document.getElementById("login-id").value;
    var pass = document.getElementById("login-password").value;

    console.log(id);
    console.log(pass);

    for (i=1; i<2; i++ ) {

        if ((id=="Poom")&&(pass=="Pang")) {
            console.log("true");
        } else {
            console.log("false");
            alert("Wrong ID or Password");
        }
    }
    
}

function reset() {
    document.getElementsByClassName("login").reset();
}