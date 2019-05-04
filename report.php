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
    <title>REPORT</title>
</head>
<body>

    <nav class="navbar navbar-light bg-light justify-content-between">
                <a class="navbar-brand">TABLE PRODUCT</a>
                <form class="form-inline" action="login.php">
                  <div class="form-row">
                     <div class="form-group col-md-6">
                     <input type="button" class="btn btn-outline-warning" onclick="manager()" value="back">
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
        
            <div class="form-row">
                <div class="form-group col-md-4">
                    <form class="Daily Report" method="POST">
                        <button class="btn btn-primary" name="daily" type="submit">Daily</button>
                    </form>
                </div>
                <div class="form-group col-md-4">
                    <form class="Mountly Report" method="POST">
                        <button class="btn btn-warning" name="mountly" type="submit">Mounly</button>
                    </form>
                </div>
                <div class="form-group col-md-4">
                    <form class="Yearly Report" method="POST">
                        <button class="btn btn-danger" name="yearly" type="submit">Yearly</button>
                    </form>
                </div>
            </div>

        </div>

        <?php

            $year = date("Y");
            $month = date("Y-m");
            $day = date("Y-m-d");

            $connect = mysqli_connect("localhost", "root", "", "store");

                if (isset($_POST['daily'])) {
                    $sql = 'SELECT * FROM report WHERE Date LIKE "'.$day.'" ';
                    $result = mysqli_query($connect, $sql);
                    echo $day;
                } else if (isset($_POST['mountly'])){
                    $sql = 'SELECT * FROM report WHERE Date LIKE "'.$month.'%" ';
                    echo $month;
                    $result = mysqli_query($connect, $sql);
                }else if (isset($_POST['yearly'])){
                    $sql = 'SELECT * FROM report WHERE Date LIKE "'.$year.'%" ';
                    $result = mysqli_query($connect, $sql);
                    echo $year;
                }else {
                    $sql = 'SELECT * FROM report WHERE Date LIKE "'.$day.'" ';
                    $result = mysqli_query($connect, $sql);
                    echo $day;
                }

                    $numrows = mysqli_num_rows($result);
                    $numfields = mysqli_num_fields($result);

                    if (!$result) {
                        echo '<b>Error </b>'.mysqli_errno().':'.mysqli_error().'<by>';
                    } else if ($numrows == 0) {
                        echo '<b> Not have Data! </b>';
                    } else {
                        echo '<div class="table">';
                        echo '<table class="table">';
                        echo '<thead><tr>';
                        echo '<th scope="col">Date</th>';
                        echo '<th scope="col">Product</th>';
                        echo '<th scope="col">Price</th>';
                        echo '<th scope="col">Quantity</th>';
                        echo '<th scope="col">Total Price</th>';
                        echo '</thead></tr>';

                        while ($row = mysqli_fetch_array($result)) {
                            
                            echo '<tbody><tr>';
                                for ($i=0; $i<$numfields; $i++) {
                                    echo '<td>'.$row[$i].'&nbsp;</td>'."\n";
                                }
                                echo '</tr>';
                        }
                        echo '</table>';
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