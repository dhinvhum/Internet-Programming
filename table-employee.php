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
    <title>Employee Table</title>
</head>
<body>

    <nav class="navbar navbar-light bg-light justify-content-between">
        <a class="navbar-brand">EMPLOYEE TABLE</a>
            <form class="form-inline" action="manager.html">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <button class="btn btn-outline-warning" onclick="goBack()">back</button>
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

            <form class="Update Employee" method="POST">

                <div class="form-row">

                    <div class="form-group col-md-10">
                        <select name="selectposition" class="form-control border border-secondary rounded" require>
                            <option value="">All Position</option>
                            <option value="Manager">Manager</option>
                            <option value="Cashier">Cashier</option>
                        </select>
                    </div>
                    <div class="form-group col-md-2">
                        <button class="btn btn-outline-secondary" type="submit">Search</button>
                    </div>
                </div>
            </form>

        </div>

        <?php

            $connect = mysqli_connect("localhost", "root", "", "store");

                if (!isset($update)) {

                    if ($_POST['selectposition']=="") {
                        $sql = 'SELECT * FROM employee';
                        $result = mysqli_query($connect, $sql);
                    } else if ($_POST['selectposition']=="Manager") {
                        $sql = 'SELECT * FROM employee WHERE Position="Manager" ORDER BY ID';
                        $result = mysqli_query($connect, $sql);
                    } else {
                        $sql = 'SELECT * FROM employee WHERE Position="Cashier" ORDER BY ID';
                        $result = mysqli_query($connect, $sql);
                    }

                    $numrows = mysqli_num_rows($result);
                    $numfields = mysqli_num_fields($result);

                    if (!$result) {
                        echo '<b>Error </b>'.mysqli_errno().':'.mysqli_error().'<by>';
                    } else if ($numrows == 0) {
                        echo '<b>Not have employee! </b>';
                        echo '<input class="btn btn-outline-success" name="update" type="button" value="insert" onclick="insert_emp()">'."\n";
                    } else {
                        echo '<div class="table">';
                        echo '<table class="table">';
                        echo '<thead><tr>';
                        echo '<th scope="col">#</th>';
                        echo '<th scope="col">Name</th>';
                        echo '<th scope="col">Surname</th>';
                        echo '<th scope="col">Position</th>';
                        echo '<th scope="col">Password</th>';
                        echo '<th scope="col">Picture</th>';
                        echo '<th scope="col">Update</th>';
                        echo '<th scope="col">Delete</th>';
                        echo '</thead></tr>';

                        while ($row = mysqli_fetch_array($result)) {
                            echo '<form name="update_customer'.$row['ID'].'" method="POST" action="session-employee.php">'."\n";
                            echo '<tbody><tr>';
                                for ($i=0; $i<$numfields; $i++) {
                                    echo '<td>'.$row[$i].'&nbsp;</td>'."\n";
                                }
                                echo '<input type="hidden" name="index" value="'.$row['ID'].'">';
                                echo '<td><input  class="btn btn-outline-primary" name="update" type="submit" value="update"></td>'."\n";
                                echo '<td><input  class="btn btn-outline-warning" name="update" type="submit" value="delete"></td>'."\n";
                                echo '</tr>';
                                echo '</form>';
                        }
                        echo '<td><input name="update" class="btn btn-outline-success" type="button" value="insert" onclick="insert_emp()"></td>'."\n";
                        echo '</table>';
                    }   
            
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