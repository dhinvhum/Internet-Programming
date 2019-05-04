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
            <form class="form-inline" action="login.php">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <button class="btn btn-outline-danger" type="submit">logout</button>
                    </div>
                </div>
            </form>
    </nav>
    
    <div class="container">

        <div class="container-form">

            <form class="Update Employee" method="POST">

                <div class="form-row">

                    <div class="form-group col-md-10">
                        <input type="text" name="selectposition" class="form-control border border-secondary rounded" require>
                    </div>
                    <div class="form-group col-md-2">
                        <button class="btn btn-outline-secondary" type="submit" name="type">Search</button>
                    </div>
                </div>
            </form>

        </div>

        <?php

        $connect = mysqli_connect("localhost", "root", "", "store");

        if (isset($_POST['type'])){
                $sweater = $_POST['selectposition'];
                $sql = "SELECT * FROM product WHERE Sweater LIKE '%$sweater%' ORDER BY ID ";
                $result = mysqli_query($connect, $sql);
        } else {
            $sql = 'SELECT * FROM product ORDER BY ID';
            $result = mysqli_query($connect, $sql);
        }

        $numrows = mysqli_num_rows($result);
        $numfields = mysqli_num_fields($result);

        if (!$result) {
            echo '<b>Error </b>'.mysqli_errno().':'.mysqli_error().'<by>';
        } else if ($numrows == 0) {
            echo '<b>Not have product! </b>';
        } else {
            echo '<div class="table">';
            echo '<table class="table">';
            echo '<thead><tr>';
            echo '<th scope="col">#</th>';
            echo '<th scope="col">Product</th>';
            echo '<th scope="col">Price</th>';
            echo '<th scope="col">Enough</th>';
            echo '<th scope="col">Quantity</th>';
            echo '</thead></tr>';

            echo '<form name="order" method="POST" action="order-product-set.php">';
            while ($row = mysqli_fetch_array($result)) {
                
                echo '<tbody><tr>';
                    for ($i=0; $i<$numfields; $i++) {
                        echo '<td>'.$row[$i].'&nbsp;</td>'."\n";
                    }

                    echo '<td><input type="number" value=0 name="price'.$row['ID'].'"min=0 max='.$row['Quantity'].' style="width:60px;" class="form-control border border-secondary rounded"></td>';
                    echo '</tr>';
                    
            }
        
            echo '</table>';
            echo '<div class="form-button">';
            echo '<input class="btn btn-outline-primary" name="update" type="submit" value="Order">'."\n";
            echo '<input class="btn btn-outline-warning" type="button" value="Clear" onclick="reset()">';
            echo '</div>';
            echo '</form>';
        
        }   

        

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