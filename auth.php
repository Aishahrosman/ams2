<?php include_once('includes/load.php'); ?>
<?php
$req_fields = array('username','password' );
validate_fields($req_fields);
$username = remove_junk($_POST['username']);
$password = remove_junk($_POST['password']);

  if(empty($errors)){

    $user = authenticate_v2($username, $password);

        if($user):
           //create session with id
           $session->login($user['id']);
           //Update Sign in time
           updateLastLogIn($user['id']);
           // redirect user to group home page by user level
           if($user['role'] === 'admin'):
             $session->msg("s", "Hello ".$user['username'].", Welcome.");
             redirect('dashboard.php',false);
           elseif ($user['role'] === 'user'):
              $session->msg("s", "Hello ".$user['username'].", Welcome .");
             redirect('dashboard2.php',false);
           
           endif;

        else:
          $session->msg("d", "Sorry Username/Password incorrect.");
          redirect('index.php',false);
        endif;

  } else {

     $session->msg("d", $errors);
     redirect('index.php',false);
  }

?>