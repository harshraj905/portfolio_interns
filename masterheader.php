<?php 
session_start();
include('config.php');

$fetchSession = mysqli_query($config,"SELECT * FROM login WHERE email='{$_SESSION['loggedinUser']}'");

while ($row = mysqli_fetch_assoc($fetchSession)) {
    $activeusername = $row['username'];
}

?>



<?php include('config.php'); ?>
<!DOCTYPE html>
<html lang="en">
    
    <head>
        

        <meta charset="utf-8" />
                <title>Admin's Dashboard </title>
                <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
                <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
                <meta content="" name="author" />
                <meta http-equiv="X-UA-Compatible" content="IE=edge" />

                <!-- App favicon -->
                <link rel="shortcut icon" href="modules/dashboard/assets/images/favicon.ico">
                <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
                
        <link href="modules/dashboard/assets/plugins/datatables/datatable.css" rel="stylesheet" type="text/css" />
         <!-- App css -->
         <link href="modules/dashboard/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
         <link href="modules/dashboard/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
         <link href="modules/dashboard/assets/css/app.min.css" rel="stylesheet" type="text/css" />

    </head>