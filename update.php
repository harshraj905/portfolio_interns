<?php 
include('masterheader.php');
include('masterleftbar.php');
include('mastertopbar.php');
include('config.php');
session_start();

if(!isset($_SESSION['loggedinUser']))
{
unset($_SESSION['loggedinUser']);
session_destroy();

header('location:dashboard.php');
}
?>

<h1 style="text-align: center; margin-top: 100px;">Hii <span><?php echo $_SESSION['loggedinUser']; ?></span>,Now You Can Edit Your Details Here!</h1>

<?php 
  
$fetchData = mysqli_query($config,"SELECT * FROM user_detail WHERE email = '{$_SESSION['loggedinUser']}' ");

while($row = mysqli_fetch_assoc($fetchData)) 
{
  $uname = $row['fullname'];
}

  ?>

        <form method="POST" class="container" style="width: 500px; margin-top: 50px;">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Full Name:</label>
    <input type="text" class="form-control" id="fullname"  name="setFullName" value="<?php echo $uname; ?>">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address:</label>
    <input type="email" class="form-control" id="email" name="setEmail" aria-describedby="emailHelp" value="<?php echo $row['email']; ?>">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password:</label>
    <input type="password" class="form-control" name="setPassword" id="password" value="<?php echo $row['password']; ?>">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Description:</label>
    <input type="text" class="form-control" id="description"  name="setDiscription" value="<?php echo $row['discription']; ?>">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Phone:</label>
    <input type="tel" class="form-control" id="phone"  name="setPhone" value="<?php echo $row['phone']; ?>">
  </div>
  <button type="submit" class="btn btn-primary" name="update">Update</button>
</form>

<?php 
$fullname = $_POST['setFullName'];
$email = $_POST['setEmail'];
$password = $_POST['setPassword'];
$discription = $_POST['setDiscription'];
$phone = $_POST['setPhone'];

 
if(isset($_POST['update']))
{
	$updateName = mysqli_query($config,"UPDATE user_detail SET fullname='$fullname'");
  $updateEmail = mysqli_query($config,"UPDATE user_detail SET email='$email'");
  $updatePassword = mysqli_query($config,"UPDATE user_detail SET password='$password'");
  $updateDiscription = mysqli_query($config,"UPDATE user_detail SET discription='$discription'");
  $updatePhone = mysqli_query($config,"UPDATE user_detail SET phone='$phone'");



 	if($updateName)	
 	{
 		echo "<script>alert('Data Updated Successfully')</script>";
 		echo "<script>window.location.href='dashboard.php'</script>";
 	}

 	else
 	{
 		echo "<script>alert('Nothing Updated')</script>";
 		echo "<script>window.location.href='dashboard.php'</script>";
 	}
  
  if($updateEmail) 
  {
    echo "<script>alert('Email Updated Successfully')</script>";
    echo "<script>window.location.href='dashboard.php'</script>";
  }

  else
  {
    echo "<script>alert('Nothing Updated')</script>";
    echo "<script>window.location.href='dashboard.php'</script>";
  }
  
  if($updatePassword) 
  {
    echo "<script>alert('Password Updated Successfully')</script>";
    echo "<script>window.location.href='dashboard.php'</script>";
  }

  else
  {
    echo "<script>alert('Nothing Updated')</script>";
    echo "<script>window.location.href='dashboard.php'</script>";
  }
  
  if($updateDiscription) 
  {
   
      echo "<script>alert('Description Updated Successfully')</script>";
    echo "<script>window.location.href='dashboard.php'</script>";
  }

  else
  {
    echo "<script>alert('Nothing Updated')</script>";
    echo "<script>window.location.href='dashboard.php'</script>";
  }
  
  if($updatePhone) 
  {
   
      echo "<script>alert('Phone Number Updated Successfully')</script>";
    echo "<script>window.location.href='dashboard.php'</script>";
  }

  else
  {
    echo "<script>alert('Nothing Updated')</script>";
    echo "<script>window.location.href='dashboard.php'</script>";
  }

 	

}


?>
