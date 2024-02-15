<?php 
include('config.php');
?>

            <form method="POST">

            <div class="loginbox" style="width:500px;">
              
            <!-- <label for="username" class="form-label">Username: </label> -->
            <input type="text" class="form-control" id="username" placeholder="Username" name="loginUser" aria-describedby="emailHelp"></div>

            <div class="loginbox">
            <!-- <label for="password" class="form-label">Password: </label> -->
            <input type="text" class="form-control" id="email" placeholder="Email" name="loginEmail" aria-describedby="emailHelp">
            </div>
            <div class="loginbox">
            <!-- <label for="password" class="form-label">Password: </label> -->
            <input type="password" class="form-control" id="password" placeholder="Password" name="loginPassword">
            </div>

            <button type="submit" class="btn btn-primary" name="login">Login</button><br><br><br><br>
            <a href="forgot.php" style="text-decoration: none; color: lightgray;">Forgotten your password?</a>
            </form>
  
  </div>
    </section>
  
<?php

$username = $_POST['loginUser'];
$eml = $_POST['loginEmail'];
$password = $_POST['loginPassword'];

if(isset($_POST['login']))
{
    $matchCredentials = mysqli_query($config,"SELECT * FROM login WHERE username='$username' AND password='$password'");

    if(mysqli_num_rows($matchCredentials)>0)
    {
        session_start();

        $_SESSION['loggedInUser'] = $username;
       echo "<script>window.location.href='dashboard/dashboard.php'</script>";
    }
    else
    {
        echo "<script>alert('Login Failed')</script>";
    }
}

?>
