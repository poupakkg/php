<?php 

session_start(); 
if ( !isset( $_SESSION['programming languages'] ) )
{ 
  $_SESSION['programming languages'] = array();
}
$_SESSION['programming languages'] = array_values( $_SESSION['programming languages'] );

    $message = ' Please Log In ';

    if  (isset ( $_POST ) && !empty ($_POST))
    {
        $submittedUsername = $_POST ['username'];
        $submittedPassword = $_POST ['password'];

        $username = 'poupak';
        $password = '123';

        if ( ($username === $submittedUsername ) && ( $password === $submittedPassword) )
        {
            $message = 'Welcoem Poupak to your To Do List page!';
        }
        else
        {
            $message = ' username or password does not match please try again!';
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WOW! PHP starts</title>
</head>
<body>
   <!-- <h1>WOW! PHP starts</h1> -->
    <?php echo  $message; ?>

   <h1> To Do List With PHP </h1>

   <form action = "", Method = "POST">
   <lablel type = " username ">
     Username
     <input type = " test " name= " username " id= " username ">
    </lable>
    <lablel type = " password ">
      Password
     <input type = " password " name= " password " id =" password ">
    </lable>
    <label for="language">
      Add an interest:
      <input type="text" name="language" id="language">
    </label>
     <input type="submit" value="Log In">
    
    </form>
    <?php if ( !empty( $_SESSION['programming languages'] ) ) : 
    <?php foreach ( $_SESSION['programming languages'] as $language ) :
          <?php echo $language; ?>
        </li>
      <?php endforeach; ?>

    <strong>$_SESSION contents:</strong>
    <?php var_dump( $_SESSION ); ?>
  </pre>
        
    
</body>
</html>