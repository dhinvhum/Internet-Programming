
<?php

    //SET VARIABLE
    $type = $_POST['shirt'];
    $color = $_POST['color'];
    $size = $_POST['size'];
    $quan = $_POST['quan'];

    echo $type,$color,$size,$quan;

    $connect = mysqli_connect("localhost", "root", "", "store");
    $sqlck = "SELECT Quantity FROM product WHERE Product='$type' AND Color='$color' AND Size='$size'";
    $resultck = mysqli_query($connect, $sqlck);
    $row = mysqli_fetch_assoc($resultck);

    echo $row['Quantity'];

    if ($quan>$row['Quantity']) {
        echo 'Can not order';
    } else {

        $sql = "UPDATE product SET Quantity=Quantity-'$quan' WHERE Product='$type' AND Color='$color' AND Size='$size' ";
        $result = mysqli_query($connect, $sql);

        if(!$result) {
            echo mysqli_error().'<br>';
            die('Can not access database!');
        } else {
            header("location:order-product.php");
        }

        

    }

    

    mysqli_close($connect);
?>