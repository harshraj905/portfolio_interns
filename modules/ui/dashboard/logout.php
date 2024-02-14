<?php 

unset($_SESSION['loggedInUser']);
session_destroy();


echo "<script>alert('User Logged Out Successfully')</script>";

echo "<script>window.location.href='index.php'</script>";


?>