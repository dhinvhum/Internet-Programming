
function check_login() {

    var id = document.getElementById("login-id").value;
    var pass = document.getElementById("login-password").value;

    console.log(id);
    console.log(pass);

    for (i=1; i<2; i++ ) {

        if ((id=="")&&(pass=="")) {
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

function check_value() {
    console.log(document.getElementById("AddingGift-Point").value)
}

function wrongID() {
    
}

function employee_table() {
    console.log("true");
    window.location.href = "employee_table.html" ;
}