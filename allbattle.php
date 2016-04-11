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


$sql = 'SELECT hero.Name,battles.villan FROM hero INNER JOIN battles WHERE battles.superheroID = hero.superHeroID';
$result = mysqli_query($conn,$sql);
if (!$result){
    die("query failed: ".$sql." ".mysqli_error($conn));
}
else{
    echo "<div class='container displaysuper'>";
    echo "<div class = 'row col-lg-6 col-lg-offset-3'>";
    echo "<div class = 'tabe-responsive'>";
    echo "<table class='table table-bordered table-hover'>";
    echo "<tr class = ''>";
    echo "<th class=''>Name</th>";
    echo "<th class=''>Villan</th>";
    echo "</tr>";
    while($row = mysqli_fetch_assoc($result)){


        $name = $row['Name'];
        $gender = $row['villan'];


        echo "<tr class = ''>";
        echo "<td class=''>{$name}</td>";
        echo "<td class=''>{$gender}</td>";

        echo "</tr>";

    }
    echo "</table>";
    echo "</div>";
    echo "</div>";
    echo "</div>";

}
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>
</html>
