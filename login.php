<?php
   session_id("mainID");
   session_start();
?>

<html>
   
   <head>
      <title>Login</title>    
   </head>
	
   <body>
      
      <h2>Login form</h2> 
         
         <?php
			$conn=mysqli_connect("localhost", "root", "") or die(mysqli_error());
			mysqli_select_db($conn, "users");
			$sql_read = "SELECT * FROM users";
			$result = mysqli_query($conn, $sql_read);
			if(! $result )
			{
			  die('Could not read data: ' . mysqli_error());
			}
            $msg = '';
     
            if (isset($_POST['login']) && !empty($_POST['username']) 
               && !empty($_POST['password'])) {
				while($row = mysqli_fetch_array($result)) {
					$use = $row['user'];
					$parola = $row['parola'];
				
					if ($_POST['username'] == $user && 
						$_POST['password'] == $parola) {
						$_SESSION['valid'] = true;
						$_SESSION['timeout'] = time();
						$_SESSION['username'] = $user;
						header('Location: home.php');
					}else {
						echo 'Wrong username or password';
					}
				}
            }
         ?>
      </div>
      
      <div>
      
         <form  method = "post">
            <input type = "text" name = "username"> </br>
            <input type = "password" name = "password" required> <br>
            <button type = "submit" name = "login">Login</button>
         </form>
         
      </div> 
      
   </body>
</html>