
<?php

    //Set Index of update form
    session_start();
    $index = $_SESSION['index'];
    echo $index;

    $connect = mysqli_connect("localhost", "root", "", "store");
    $sql = 'DELETE FROM employee WHERE ID = "'.$index.'"';
    $result = mysqli_query($connect, $sql);

    session_destroy();
    header("location:table-employee.php");
    
?>