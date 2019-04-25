
function check_login() {
    //mysqls request
    var id = document.getElementById("login-id").value;
    var pass = document.getElementById("login-password").value;

    console.log(id);
    console.log(pass);

    for (i=1; i<2; i++ ) {

        if ((id=="A")&&(pass=="B")) {
            window.location.href = "manager.html"
            
        } else if (id=="") {
            alert("Please filled ID");
        } else if (pass=="") {
            alert("Please filled PASSWORD");
        }else {
            console.log("false");
            alert("Wrong ID or PASSWORD, Please try again BABY!");
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
    window.location.href = "table-employee.html" ;
}

function product_table() {
    window.location.href = "table-product.html";
}

function gift_table() {
    window.location.href = "table-gift.html";
}