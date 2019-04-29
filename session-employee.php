<?php

    $index = $_POST['index'];
    session_start();
    $_SESSION['index']=''.$index.'';
    echo $_SESSION['index'];

    $update=$_POST['update'];
    
    if ($update=="update") {
        header("location:update-employee.php");
    } else if ($update=="delete") {
        header("location:delete-employee.php");
    } else {
        header("location:insert-employee.php");
    }
    
    
?>