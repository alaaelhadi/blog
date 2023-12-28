<?php
	session_start();
	if(isset($_SESSION["logged"]) and $_SESSION["logged"]){
		header("Location: users.php");
        die();
	}
	if($_SERVER["REQUEST_METHOD"] === "POST"){
		include_once("includes/conn.php");
		try{
            $sql = "SELECT `password`, `active` FROM `users` WHERE email=?";
			$email = $_POST["email"];
			$password = $_POST["password"];
            $stmt = $conn->prepare($sql);
            $stmt->execute([$email]);
			if($stmt->rowcount() > 0){
				$result = $stmt->fetch();
				$hash = $result["password"];
				$active = $result["active"];
				$verify = password_verify($password, $hash);
				if($verify){
					if($active){
						$_SESSION["logged"] = true;
						header("Location: users.php");
						die();
					}else{
						echo '<div class="alert alert-danger">You are not allowed to enter</div>';
					}
				}else{
					echo '<div class="alert alert-danger">Incorrect password!</div>';
				}	
			}else{
				echo '<div class="alert alert-danger">Incorrect email!</div>';
			}	
        }catch(PDOException $e){
            echo "Connection failed: " . $e->getMessage();
        }
	}
?>

<html>
  <head>
    <meta charset="utf-8">
    <title>Form</title>
    <link href="css/style.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
    <!-- Body of Form starts -->
  	<div class="container">
      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" autocomplete="on">
    		<!---Email ID---->
    		<div class="box">
          <label for="email" class="fl fontLabel"> Email ID: </label>
    			<div class="fl iconBox"><i class="fa fa-envelope" aria-hidden="true"></i></div>
    			<div class="fr">
    					<input type="email" required name="email" placeholder="Email Id" class="textBox">
    			</div>
    			<div class="clr"></div>
    		</div>
    		<!--Email ID----->

    		<!---Password------>
    		<div class="box">
          <label for="password" class="fl fontLabel"> Password </label>
    			<div class="fl iconBox"><i class="fa fa-key" aria-hidden="true"></i></div>
    			<div class="fr">
    					<input type="Password" required name="password" placeholder="Password" class="textBox">
    			</div>
    			<div class="clr"></div>
    		</div>
    		<!---Password---->

    		<!---Submit Button------>
    		<div class="box" style="background: #2d3e3f">
    				<input type="Submit" name="Submit" class="submit" value="Login">
    		</div>
    		<!---Submit Button----->
      </form>
  </div>
  <!--Body of Form ends--->
  </body>
</html>
