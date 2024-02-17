<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Age Calculator in PHP</title>
</head>
<body>
    <h1>Age Calculator</h1>
    <div class="container">
        <div class="card">
            <div class="card-header">
                Age Calculator in PHP
            </div>
            <div class="card-body">
                <form action="calculator.php" method="post" class="form-group">
                    <div class="row-mb-3">
                        <div class="col-md-4">
                            <select name="day" class="form-control">
                                <?php
                                    for ($i = 1; $i<=31; $i++){
                                        echo "<option value='$i'>$i</option> ";
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <select name="month" class="form-control">
                                <?php
                                for ($i = 1; $i <= 12; $i++){
                                    echo "<option value='$i'>$i</option> ";
                                }
                                ?>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <select name="year" class="form-control">
                                <?php
                                $year = date('Y ');
                                for ($i = 1900; $i <= $year; $i++){
                                    echo "<option value='$i'>$i</option> ";
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <input type="submit" name="Submit" class="btn-primary" value="Check the age">
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
    <?php
        if (isset($_POST['submit'])){
            $day = $_POST['day'];
            $month = $_POST['month'];
            $year = $_POST['year'];
            $DOB = $day.'-'.$month.'-'.$year;
            $days =new DateTime($DOB);
            $age = $days -> diff(new DateTime);
            $today = date('d-m-y');
            echo '<br>';
            echo "Your Date of birth is ";
            echo $DOB;
            echo "<br>";
            echo 'Your age is ';
            echo $age -> y;
            echo 'year';
            echo $age -> m;
            echo 'month';
            echo $age -> m;
            echo 'day';
        }
    ?>


<style></style>
</body>
</html>