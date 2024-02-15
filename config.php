<?php 

$hostname = 'localhost';
$username = 'root';
$password = 'Admin1234#@';
$dbname = 'intern';

$config = mysqli_connect($hostname,$username,$password,$dbname);

$base_address = "http://localhost/portfolio_interns/";

// if($config)
// {
//     echo "Database Connection Successful";
// }
// else{
//     echo "Database Failed with Error:".mysqli_connect_error();
// }
 
?>