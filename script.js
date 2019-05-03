
function check_login() {

    //mysqls request
    var id = document.getElementById("login-id").value;
    var pass = document.getElementById("login-password").value;

    console.log(id);
    console.log(pass);
     
        if (id=="") {
            alert("Please filled ID");
        } else if (pass=="") {
            alert("Please filled PASSWORD");
        }
}

//confirm box
function confirmbox() {
    window.confirm("Confirm!!");
}

//reset
function reset() {
    document.reset();
}

//Link
function check_value() {
    console.log(document.getElementById("AddingGift-Point").value)
}

function employee_table() {
    window.location.href = "table-employee.php" ;
}

function product_table() {
    window.location.href = "table-product.php";
}

function insert_emp() {
    window.location.href = "insert-employee.php";
}
