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
                <select name="selectposition" class="form-control border border-secondary rounded" require>
                    <option value="">All Product</option>
                    <option value="Manager">Sweater</option>
                    <option value="Cashier">Pattern Sweater</option>
                    <option value="Cashier">Cashier</option>
                    <option value="Cashier">Cashier</option>
                </select>
            </div>
            <div class="form-group col-md-2">
                <button class="btn btn-outline-secondary" type="submit">Search</button>
            </div>
        </div>
    </form>

        </div>

        <div class="container-form">

        
                <?php

                    $connect = mysqli_connect("localhost", "root", "", "store");
                    $sql = 'SELECT * FROM product';

                    
                    
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