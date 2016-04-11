<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Heros</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css"/>
</head>
<body>
<div class="container top">
    <nav class="row">
        <ul class="nav nav-pills nav-justified">
            <li class=""><a href="insertsuper.php">Insert Super Hero</a></li>
            <li class=""><a href="displaysuper.php">Display Super Hero</a></li>
            <li class=""><a href="insertbattle.php">Insert Battle</a> </li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button">Display Battle <span class="caret "></span></a>

                <ul class="dropdown-menu">
                    <li><a href="allbattle.php">All Battles</a></li>
                    <li><a href="supermanbattle.php">Superman Battles</a></li>
                    <li><a href="spidermanbattle.php">Spiderman Battles</a></li>
                    <li><a href="antmanbattle.php">Antman Battles</a></li>
                </ul>
            </li>
        </ul>
    </nav>
</div>

<?php
/**
 * Created by PhpStorm.
 * User: offormachukwunonso
 * Date: 02/04/2016
 * Time: 17:47
 */
include ('server.php');

$sql = 'SELECT superHeroID, Name FROM hero';
$result = mysqli_query($conn,$sql);
if (!$result){
    die("query failed: ".$sql." ".mysqli_error($conn));
}?>
<div class = "container displaysuper">
    <div class="row">
        <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3">
            <form action = "insertbattle.php" method="post">
                <div class= "form-group">
                    <p>Select Super Hero to be fought </p>
                    <select class="form-control" name="superhero">
                        <option value="">Select a Super Hero</option>
                        <?php
                            while($row = mysqli_fetch_assoc($result)) {
                                $name = $row['Name'];
                                $id = $row['superHeroID'];
                                echo "<option value = '{$id}'>";

                                echo $name;
                            }
                            echo "</option>"
                        ?>
                        </select>
                </div>

                <div class= "form-group">
                    <label for="villan">Villan </label>
                    <input type="text" class="form-control" name="villan" placeholder="Villan to be fought">
                </div>
                <div class= "form-group">

                    <input class="btn btn-primary form-control" type="submit" name="submit" value="Submit">
                </div>

            </form>
        </div>

    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"  crossorigin="anonymous"></script>
</body>
</html>

<?php
/**
 * Created by PhpStorm.
 * User: offormachukwunonso
 * Date: 02/04/2016
 * Time: 17:46
 */

if (isset($_POST['submit'])) {
    if ((empty($_POST['superhero']))  || (empty($_POST['villan']))) {

        echo "all inputs are required";
    }
    else {
        $superhero = $_POST['superhero'];
        $villan = $_POST['villan'];


        $sql = "INSERT INTO battles (superheroID,Villan) VALUES ('$superhero','$villan') ";

        if (mysqli_query($conn, $sql)) {
            header('Location: index.html');
            echo "battle sucessfully created";

        } else {
            echo "Error" . " " . $sql . " " . mysqli_error($conn);
            echo "Error {$sql} " . mysqli_error($conn);
        }
    }
}