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
    <title>Update Product</title>
</head>
<body>

    <?php
        session_start();
        $_SESSION['id'] = $_POST['id'];

        $connect = mysqli_connect("localhost", "root", "", "store");
        $sql = 'SELECT Sweater,Price,Quantity FROM product WHERE ID = "'.$_SESSION['id'].'"';
        $result = mysqli_query($connect, $sql);
        $row = mysqli_fetch_assoc($result);

        $minprice = ($row['Price']*(-2))+$row['Price'];
        $minquan = ($row['Quantity']*(-2))+$row['Quantity'];

    ?>

        <nav class="navbar navbar-light bg-light justify-content-between">
                <a class="navbar-brand">UPDATE PRODUCT</a>
                <form class="form-inline" action="login.php">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <input type="button" class="btn btn-outline-warning" onclick="product_table()" value="back">
                    </div>
                    <div class="form-group col-md-6">
                        <button class="btn btn-outline-danger" type="submit">logout</button>
                    </div>
                </div>
            </form>
        </nav>

        <br>

    <div class="container">

        <div class="container-form">

            <?php
                echo '<p>Update ';
                echo  $row['Sweater'].'</p>';
            ?>

            <form class="update-product" action="update-product-set.php" method="POST">
            <div class="form-group">
            <div class="form-row">

                <div class="form-group col-md-6">
                        <label class="label">Price&nbsp:</label>
                        <?php
                        echo '<input type="number" name="price" min="'.$minprice.'" value=0 class="form-control border border-secondary rounded">';
                        ?>

                </div>     
                <div class="form-group col-md-6"> 
                        <label class="label">Quantity&nbsp:</label>
                        <?php
                        echo '<input type="number" name="quan" min="'.$minquan.'" value=0 class="form-control border border-secondary rounded">';
                        ?>php
                </div>

                <small id="emailHelp" class="form-text text-muted">*If you want to minus input in negative number.</small>
            </div>
            </div>

                <div class="form-button">
                    
                    <button class="btn btn-outline-primary" name="updatei">Update</button>
                    <input class="btn btn-outline-warning" type="button" value="Clear" onclick="reset()">  
                    
                </div>
                

            </form>
                            
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