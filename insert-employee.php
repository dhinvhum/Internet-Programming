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
    <title>Register Employee</title>
</head>
<body>

    <nav class="navbar navbar-light bg-light justify-content-between">
        <a class="navbar-brand">INSERT EMPLOYEE</a>
            <form class="form-inline" action="login.php">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <input type="button" class="btn btn-outline-warning" onclick="employee_table()" value="back">
                    </div>
                    <div class="form-group col-md-6">
                        <button class="btn btn-outline-danger" type="submit">logout</button>
                    </div>
                </div>
            </form>
    </nav>

    <div class="container">

        <div class="container-form">
            
            

            <form class="Register Employee" action="insert-employee-set.php" method="POST">

                <div class="form-group">
                              
                        <label class="label">Name&nbsp:</label>
                        <input type="text" name="RegisterEmployee-Name" class="form-control border border-secondary rounded" placeholder="Input your name" required>
                        
                        <label class="label">Surname&nbsp:</label>
                        <input type="text" name="RegisterEmployee-Surname" class="form-control border border-secondary rounded" placeholder="Input your surname" required>
                
                        <label class="label">Password&nbsp:</label>
                        <input type="text" name="RegisterEmployee-Password" class="form-control border border-secondary rounded" placeholder="Password" required>
                        <small id="emailHelp" class="form-text text-muted">Please share the password only this employee.</small>

                        <label class="label">Postition&nbsp:</label>
                        <select name="RegisterEmployee-position" class="form-control border border-secondary rounded" required>
                            <option value="null">Please select</option>
                            <option value="Manager">Manager</option>
                            <option value="Cashier">Cashier</option>
                        </select>
                </div>                   
                
                <div class="form-button">       

                    <button class="btn btn-outline-success" type="submit">Register</button>
                    <input  class="btn btn-outline-warning" type="button" value="Clear" onclick="reset()">  
                                  
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