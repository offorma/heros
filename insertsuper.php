<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Heros</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet"href="css/style.css"/>
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

    <div class = "container displaysuper">
        <div class="row">
            <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-6 col-xs-6 col-xs-offset-3">
                <form action = "process.php" method="post">
                    <div class= "form-group">
                        <label for="personalName">Personal Name</label>
                        <input type="text" class="form-control" name="personalName" placeholder="Enter Personal Name">
                    </div>
                    <div class= "form-group">
                        <label for="gender">Male</label>
                        <input type="radio" class="form-control"name="gender" value="Male">

                        <label for="gender">Female</label>
                        <input type="radio" class="form-control" name="gender" value="Female">
                    </div>
                    <div class= "form-group">
                        <label for="power">SuperHero Power </label>
                        <input type="text" class="form-control" name="power" placeholder="Enter Super Hero Power">
                    </div>
                    <div class= "form-group">

                        <input class="btn btn-primary form-control" type="submit" name="submit" value="Submit">
                    </div>

                </form>
            </div>

        </div>
    </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>
</html>

<?php
/**
 * Created by PhpStorm.
 * User: offormachukwunonso
 * Date: 02/04/2016
 * Time: 17:46
 */