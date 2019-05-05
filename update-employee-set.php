
<?php

    //Set Index of update form
    session_start();
    $index = $_SESSION['index'];
    echo $index;
    //Set Variable of information
        $name = $_POST['UpdateEmployee-Name'];
        $sur = $_POST['UpdateEmployee-Surname'];
        $pass = $_POST['UpdateEmployee-Password'];
        $post = $_POST['UpdateEmployee-position'];
        $pic = $_POST['UpdateEmployee-Picture'];

    //Set information will have value
    $connect = mysqli_connect("localhost", "root", "", "store");
    $sql = 'SELECT * FROM employee WHERE ID = "'.$index.'"';
    $result = mysqli_query($connect, $sql);
  
    while ($row = mysqli_fetch_assoc($result)) {
        if($name==""){
            $name = $row['Name'];
        } 
        if ($sur=="") {
            $sur = $row['Surname'];
        }
        if ($post=="") {
            $post = $row['Position'];
        }
        if ($pass=="") {
            $pass = $row['Password'];
        }
    }
 
    //Update information to database
    $sqli = "UPDATE employee 
            SET Name='".$name."', Surname='".$sur."', Position='".$post."', Password='".$pass."'
            WHERE ID ='".$index."'";
    $result = mysqli_query($connect, $sqli);

    // session_destroy();
    
    if(!$result) {
        echo mysqli_error().'<br>';
        die('Can not access database!');
    } else {
        header("location:table-employee.php");
    }

    mysqli_close($connect);
    
?>