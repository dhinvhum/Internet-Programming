
<?php

    //SET VARIABLE
    $I1 = $_POST['ID1'];
    $I2 = $_POST['ID2'];
    $I3 = $_POST['ID3'];
    $I4 = $_POST['ID4'];
    $I5 = $_POST['ID5'];
    $I6 = $_POST['ID6'];
    $I7 = $_POST['ID7'];
    $I8 = $_POST['ID8'];
    $I9 = $_POST['ID9'];
    $I10 = $_POST['ID10'];

        $connect = mysqli_connect("localhost", "root", "", "store");
        $sql = "SELECT * FROM product";
        $result = mysqli_query($connect, $sql);

        while($row = mysqli_fetch_assoc($result)) {
            if($row['ID']=='1') {
                $sql1 = 'UPDATE product SET Quantity=Quantity-"'.$I1.'" WHERE ID = "'.$row['ID'].'" ';
                $result1 = mysqli_query($connect, $sql1);
                if($I1>0) {
                    $price = $row['Price']*$I1;
                    $date = date("Y-m-d");
                    $sqli = 'INSERT INTO report VALUES ("'.$date.'","'.$row['Sweater'].'", "'.$row['Price'].'", "'.$I1.'", "'.$price.'")';
                    $resultii = mysqli_query($connect, $sqli);
                }
            }
            if($row['ID']=='2') {
                $sql1 = 'UPDATE product SET Quantity=Quantity-"'.$I2.'" WHERE ID = "'.$row['ID'].'" ';
                $result1 = mysqli_query($connect, $sql1);
                if($I2>0) {
                    $price = $row['Price']*$I2;
                    $date = date("Y-m-d");
                    $sqli = 'INSERT INTO report VALUES ("'.$date.'","'.$row['Sweater'].'", "'.$row['Price'].'", "'.$I2.'", "'.$price.'")';
                    $resultii = mysqli_query($connect, $sqli);
                }
            }
            if($row['ID']=='3') {
                $sql1 = 'UPDATE product SET Quantity=Quantity-"'.$I3.'" WHERE ID = "'.$row['ID'].'" ';
                $result1 = mysqli_query($connect, $sql1);
                if($I3>0) {
                    $price = $row['Price']*$I3;
                    $date = date("Y-m-d");
                    $sqli = 'INSERT INTO report VALUES ("'.$date.'","'.$row['Sweater'].'", "'.$row['Price'].'", "'.$I3.'", "'.$price.'")';
                    $resultii = mysqli_query($connect, $sqli);
                }
            }
            if($row['ID']=='4') {
                $sql1 = 'UPDATE product SET Quantity=Quantity-"'.$I4.'" WHERE ID = "'.$row['ID'].'" ';
                $result1 = mysqli_query($connect, $sql1);
                if($I4>0) {
                    $price = $row['Price']*$I4;
                    $date = date("Y-m-d");
                    $sqli = 'INSERT INTO report VALUES ("'.$date.'","'.$row['Sweater'].'", "'.$row['Price'].'", "'.$I4.'", "'.$price.'")';
                    $resultii = mysqli_query($connect, $sqli);
                }
            }
            if($row['ID']=='5') {
                $sql1 = 'UPDATE product SET Quantity=Quantity-"'.$I5.'" WHERE ID = "'.$row['ID'].'" ';
                $result1 = mysqli_query($connect, $sql1);
                if($I5>0) {
                    $price = $row['Price']*$I5;
                    $date = date("Y-m-d");
                    $sqli = 'INSERT INTO report VALUES ("'.$date.'","'.$row['Sweater'].'", "'.$row['Price'].'", "'.$I5.'", "'.$price.'")';
                    $resultii = mysqli_query($connect, $sqli);
                }
            }
            if($row['ID']=='6') {
                $sql1 = 'UPDATE product SET Quantity=Quantity-"'.$I6.'" WHERE ID = "'.$row['ID'].'" ';
                $result1 = mysqli_query($connect, $sql1);
                if($I6>0) {
                    $price = $row['Price']*$I6;
                    $date = date("Y-m-d");
                    $sqli = 'INSERT INTO report VALUES ("'.$date.'","'.$row['Sweater'].'", "'.$row['Price'].'", "'.$I6.'", "'.$price.'")';
                    $resultii = mysqli_query($connect, $sqli);
                }
            }
            if($row['ID']=='7') {
                $sql1 = 'UPDATE product SET Quantity=Quantity-"'.$I7.'" WHERE ID = "'.$row['ID'].'" ';
                $result1 = mysqli_query($connect, $sql1);
                if($I7>0) {
                    $price = $row['Price']*$I7;
                    $date = date("Y-m-d");
                    $sqli = 'INSERT INTO report VALUES ("'.$date.'","'.$row['Sweater'].'", "'.$row['Price'].'", "'.$I7.'", "'.$price.'")';
                    $resultii = mysqli_query($connect, $sqli);
                }
            }
            if($row['ID']=='8') {
                $sql1 = 'UPDATE product SET Quantity=Quantity-"'.$I8.'" WHERE ID = "'.$row['ID'].'" ';
                $result1 = mysqli_query($connect, $sql1);
                if($I8>0) {
                    $price = $row['Price']*$I8;
                    $date = date("Y-m-d");
                    $sqli = 'INSERT INTO report VALUES ("'.$date.'","'.$row['Sweater'].'", "'.$row['Price'].'", "'.$I8.'", "'.$price.'")';
                    $resultii = mysqli_query($connect, $sqli);
                }
            }
            if($row['ID']=='9') {
                $sql1 = 'UPDATE product SET Quantity=Quantity-"'.$I9.'" WHERE ID = "'.$row['ID'].'" ';
                $result1 = mysqli_query($connect, $sql1);
                if($I9>0) {
                    $price = $row['Price']*$I9;
                    $date = date("Y-m-d");
                    $sqli = 'INSERT INTO report VALUES ("'.$date.'","'.$row['Sweater'].'", "'.$row['Price'].'", "'.$I9.'", "'.$price.'")';
                    $resultii = mysqli_query($connect, $sqli);
                }
            }
            if($row['ID']=='10') {
                $sql1 = 'UPDATE product SET Quantity=Quantity-"'.$I10.'" WHERE ID = "'.$row['ID'].'" ';
                $result1 = mysqli_query($connect, $sql1);
                if($I10>0) {
                    $price = $row['Price']*$I10;
                    $date = date("Y-m-d");
                    $sqli = 'INSERT INTO report VALUES ("'.$date.'","'.$row['Sweater'].'", "'.$row['Price'].'", "'.$I10.'", "'.$price.'")';
                    $resultii = mysqli_query($connect, $sqli);
                }
            }
            
        }

            header("location:order-product.php"); 
    
    mysqli_close($connect);

    
?>