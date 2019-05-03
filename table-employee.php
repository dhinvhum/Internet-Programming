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
    <title>Employee Table</title>
</head>
<body>

    <nav class="navbar navbar-light bg-light justify-content-between">
                <a class="navbar-brand">CLOTHES SHOP</a>
                <form class="form-inline">
                  <button class="btn btn-outline-danger" type="submit">logout</button>
                </form>
    </nav>

    <div class="container">

        <h5>--- Employee table ---</h5><br>

        <?php

            $connect = mysqli_connect("localhost", "root", "", "store");

                if (!isset($update)) {

                    $sql = 'SELECT * FROM employee';
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
                        echo '<thead class="thead-dark"><tr>';
                        echo '<th scope="col">ID</th>';
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
                                echo '<td><input  name="update" type="submit" value="update"></td>'."\n";
                                echo '<td><input  name="update" type="submit" value="delete"></td>'."\n";
                                echo '</tr>';
                                echo '</form>';
                        }
                        echo '<td><input name="update" type="button" value="insert" onclick="insert_emp()"></td>'."\n";
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