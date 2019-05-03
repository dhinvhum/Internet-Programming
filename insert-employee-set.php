
<?php

    //Set Variable of information
    $name = $_POST['RegisterEmployee-Name'];
    $surn = $_POST['RegisterEmployee-Surname'];
    $pass = $_POST['RegisterEmployee-Password'];
    $post = $_POST['RegisterEmployee-position'];
    $pict = $_POST['RegisterEmployee-Picture'];

    //Insert information to database
    $connect = mysqli_connect("localhost", "root", "", "store");
    $sql = 'INSERT INTO employee VALUES ("","'.$name.'", "'.$surn.'", "'.$pass.'", "'.$post.'", "'.$pict.'");';
    $result = mysqli_query($connect, $sql);

    if(!$result) {
        echo mysqli_error().'<br>';
        die('Can not access database!');
    } else {
        header("location:table-employee.php");
    }

    
?>