<?php
/**
 * Created by PhpStorm.
 * User: offormachukwunonso
 * Date: 02/04/2016
 * Time: 12:12
 */
define("SERVER","localhost");
//define("PORT","3306");
define("USERNAME","Root");
define("PASSWORD","nonso");
define("DB","hero");

$conn = mysqli_connect(SERVER, USERNAME, PASSWORD,DB);

if (!$conn){
    die("connection failed:". mysqli_connect_error());

}
else{

}