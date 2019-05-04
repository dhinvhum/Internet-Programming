

    <?php
            
            session_start();
            echo $id = $_SESSION['id'];

            if(isset($_POST['updatei'])){
            
            $price = $_POST['price'];
            $quan = $_POST['quan'];
            echo $price, $quan;

                $connect = mysqli_connect("localhost", "root", "", "store");
                $sql = 'UPDATE product SET Quantity=Quantity+"'.$quan.'", Price=Price+"'.$price.'" WHERE ID = "'.$id.'" ';
                $result = mysqli_query($connect, $sql);
            }

            if($result){
                header("location:table-product.php");
            }

            mysqli_close($connect);
    ?>