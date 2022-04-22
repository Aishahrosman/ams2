<?php include_once('includes/load.php'); 
include('includes/database.php');

$req_fields = array('username','password');
validate_fields($req_fields);
$username = remove_junk($_POST['username']);
$password = remove_junk($_POST['password']);

  if(empty($errors)){

    // $user = authenticate_v2($username, $password);

    global $db;
     $useremail = $db->escape($username);
     $password = $db->escape($password);
     $sql  = sprintf("SELECT id,username,password,email,role FROM `user` WHERE username='$useremail' AND password='$password'");
     $result = $db->query($sql);
     if($db->num_rows($result)){
       $user = $db->fetch_assoc($result);
       $password_request = sha1($password);
       if($password_request === $user['password'] ){
         return $user;
       }
     }
    return false;

        if($user) 
        {
           //create session with id
           $session->login($user['id']);
           //Update Sign in time
           updateLastLogIn($user['id']);
           // redirect user to group home page by user level
           if($user['role'] === 'admin')
           {
            //  $session->msg("s", "Hello ".$user['username'].", Welcome to OSWA-INV.");
             redirect('dashboard.php',false);
           }
           else if ($user['role'] === 'user')
           {
              // $session->msg("s", "Hello ".$user['username'].", Welcome to OSWA-INV.");
             redirect('dashboard2.php',false);
          //  else:
          //     $session->msg("s", "Hello ".$user['username'].", Welcome to OSWA-INV.");
          //    redirect('home.php',false);
          }
        }

        else
        {
          $session->msg("d", "Sorry Username/Password incorrect. '$username'");
          redirect('dashboard.php',false);
        }

  } else {

     $session->msg("d", $errors);
     redirect('index.php',false);
  }

?>
