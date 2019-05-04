<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="bootstrap.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <!-- Style -->
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Login</title>
</head>
<body>

        <nav class="navbar navbar-light bg-light justify-content-between">
                <a class="navbar-brand">LOG IN</a>
        </nav>

        <br>

    <div class="container">
        
        <?php
            $connect = mysqli_connect("localhost", "root", "", "store");
            $sql = "SELECT Name, Password, Position FROM employee";
            $result = mysqli_query($connect, $sql);

            session_start();
            
            while($row = mysqli_fetch_assoc($result)){
                if (isset($_POST['Login']) && ($_POST['login-id'] == $row['Name']) && ($_POST['login-password'] == $row['Password'])) {
                    $_SESSION['Name'] = $_POST['login-id'];
                    header("location:check-login.php");
                } else if (isset($_POST['Login']) && ($_POST['login-id'] != $row['Name']  || $_POST['login-password'] != $row['Password'])){
                    echo '<script>alert("Wrong USERNAME or PASSWORD!!");</script>';
                }
            }
            
        ?>

        <div class="container-form">
        

            <form class="login" method="POST">

                <div class="form-group">
                    
                        <label class="label">Username&nbsp:</label>
                        <input type="text" name="login-id" class="form-control border border-secondary rounded" placeholder="Input your Username" required>

                        <br>
                  
                        <label class="label">Password&nbsp:</label>
                        <input type="password" name="login-password" class="form-control border border-secondary rounded" placeholder="Password" required>
                        <small id="emailHelp" class="form-text text-muted">Please don't share the password to the other.</small>

                </div>
                
                <div class="form-button">
                    
                    <button class="btn btn-outline-success" name="Login">Login</button>
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