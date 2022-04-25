<?php
session_start();

// initializing variables
$username = "";
$email    = "";

$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'ams');
if (mysqli_connect_errno())
    {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }



// LOGIN USER
if(isset($_POST['submit']))
{
  
  //mysql_select_db($dbDatabase, $db)or die("Couldn't select the database."); 
  
    $user_email = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
  
    if (empty($username)) {
      array_push($errors, "Username is required");
    }
    if (empty($password)) {
      array_push($errors, "Password is required");
    }
    
    if (count($errors) == 0) 
    {
      $password = md5($password);
      if (md5($_POST['password']) !== $password)
{
    echo "Password is invalid";
}
      $query = "SELECT * FROM user WHERE username='$user_email' AND password ='$password'";
		
		
		
		
		$sql="SELECT full_name FROM user WHERE username='$username' AND password ='$password'";
		$result=mysqli_query($db,$sql);  
		$row=mysqli_fetch_assoc($result);
	 
	 
	 
      $results = mysqli_query($db, $query);
      $res=mysqli_num_rows($results);
      if ($res) 
      {
        $_SESSION['username'] = $username;
        $_SESSION['fullname'] =$row["fullname"];
		
		$_SESSION['last_name'] =$row["last_name"];
        header('location: index.php');
      }
      else 
      {
        array_push($errors, "Wrong usernamex/password combination");
      }
    }

    

   
  }
  
  ?>
  