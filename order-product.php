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
    <title>Login</title>
</head>
<body>

            <nav class="navbar navbar-light bg-light justify-content-between">
                <a class="navbar-brand">ORDER PRODUCT</a>
                <form class="form-inline" action="login.html">
                  <button class="btn btn-outline-danger" type="submit">logout</button>
                </form>
            </nav>

            <br>

    <div class="container">

        <div class="container-form">

        
                <?php
                    $connect = mysqli_connect("localhost", "root", "", "store");
                    $sql = 'SELECT * FROM type';
                    $result = mysqli_query($connect, $sql);
                    $sql2 = 'SELECT * FROM size';
                    $result2 = mysqli_query($connect, $sql2);
                    $sql3 = 'SELECT * FROM color';
                    $result3 = mysqli_query($connect, $sql3);

                    if(!$result) {
                        echo mysqli_error.'<br>';
                        die('Can not access database!');
                    } else {
                        echo '<form class="Register Employee" action="order-product-set.php" method="POST">';

                            echo '<div class="form-group">';
                            //SHIRT
                            echo '<label class="label">Shirt&nbsp:</label>';
                                echo '<select name="shirt" class="form-control border border-secondary rounded" required>';
                                    while($row = mysqli_fetch_assoc($result)) {
                                        echo '<div class="form-group">
                                            <option value="'.$row['Type'].'">'.$row['Type'].'</option>
                                        ';
                                    }
                                echo '</select>';
                            echo '</div>';

                            echo '<div class="form-row">';

                            //Size
                            echo '<div class="form-group col-md-4">';
                            echo '<label class="label">Size&nbsp:</label>';
                                echo '<select name="size" class="form-control border border-secondary rounded" required>';

                                    while($row = mysqli_fetch_assoc($result2)) {
                                        echo '<div class="form-group">
                                            <option value="'.$row['Size'].'">'.$row['Size'].'</option>
                                        ';
                                    }
                        
                                echo '</select>';
                            echo '</div>';
                            
                            //Color
                            echo '<div class="form-group col-md-4">';
                            echo '<label class="label">Color&nbsp:</label>';
                                echo '<select name="color" class="form-control border border-secondary rounded" required>';

                                    while($row = mysqli_fetch_assoc($result3)) {
                                        echo '<div class="form-group">
                                            <option value="'.$row['Color'].'">'.$row['Color'].'</option>
                                        ';
                                    }
                        
                                echo '</select>';
                            echo '</div>';

                            //Quantity
                            echo '<div class="form-group col-md-4">';
                            echo '<label class="label">Quantity&nbsp:</label>';
                                echo '<input type="number" name="quan"  value=1 min=1  class="form-control border border-secondary rounded" required>';
                            echo '</div>';

                            echo '</div>';

                            echo '<div class="form-button">';
                                echo '<button class="btn btn-outline-success" type="submit">Register</button>';
                                echo '.&nbsp.';
                                echo '<input class="btn btn-outline-warning" type="button" value="Clear" onclick="reset()">';
                            echo '</div>';

                        echo '</form>';
                    }

                    mysqli_close($connect);
                ?>
            
                </div>                   
                
                

    </div>

    <!-- Function -->
    <script src="script.js"></script>
    <!-- Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>