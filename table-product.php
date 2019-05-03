<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <!-- Style -->
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Product Table</title>
</head>
<body>

   <nav class="navbar navbar-light bg-light justify-content-between">
                <a class="navbar-brand">TABLE PRODUCT</a>
                <form class="form-inline" action="login.html">
                  <button class="btn btn-outline-danger" type="submit">logout</button>
                </form>
    </nav>


    <br>

    <div class="container">

        <?php
            
            $connect = mysqli_connect("localhost", "root", "", "store");

                if (!isset($update)) {

                    $sql = 'SELECT * FROM product';
                    $result = mysqli_query($connect, $sql);
                    $numrows = mysqli_num_rows($result);
                    $numfields = mysqli_num_fields($result);

                    if (!$result) {
                        echo '<b>Error </b>'.mysqli_errno().':'.mysqli_error().'<by>';
                    } else if ($numrows == 0) {
                        echo '<b>Query executed successfully bot no row returns!</b>';
                    } else {
                        echo '<div class="table-responsive">';
                        echo '<table class="table">';
                        echo '<thead><tr>';
                        echo '<th scope="col">#</th>';
                        echo '<th scope="col">Product</th>';
                        echo '<th scope="col">Size</th>';
                        echo '<th scope="col">Color</th>';
                        echo '<th scope="col">Price</th>';
                        echo '<th scope="col">Quantity</th>';
                        echo '<th scope="col">Update</th>';
                        echo '</thead></tr>';

                        while($row = mysqli_fetch_array($result)){
                            echo '<form name="update_product'.$row['ID'].'" method="post" action="update-product">'."\n";
                        
                            echo '<tbody><tr>';
                                for($i=0;$i<$numfields;$i++){
                                echo '<td>'.$row[$i].'&nbsp;</td>'."\n";									
                            }
                            echo '<input type="hidden" name="id" value="'.$row['ID'].'">'."\n";
                
                            echo '<td><input class="btn btn-outline-primary" name="update" type="submit" value="update" onClick="returnconfirmUpdate();"></td>'."\n";
                                        echo '</tr></tbody>'."\n";
                                        echo '</form>'."\n";
                                }
                                echo '</table>';
                            }
                }
                        
                
                    mysqli_close($connect);

                    ?>
  

    </div>

    <!-- Function -->
    <script src="script.js"></script>
    <!-- Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>