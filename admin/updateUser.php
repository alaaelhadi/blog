<?php
	include_once("includes/logged.php");
	include_once("includes/conn.php");
	$status = false;
	if(isset($_GET["id"])){
		$id = $_GET["id"];
		$status = true;
	}elseif($_SERVER["REQUEST_METHOD"] === "POST"){
		$status = true;
		$id = $_POST["id"];
		$firstname = $_POST["firstname"];
		$secondname = $_POST["secondname"];
		$phone = $_POST["phone"];
		$email = $_POST["email"];
		$password = password_hash($_POST["password"], PASSWORD_DEFAULT);
		$gender = $_POST["gender"];
		if($gender){
			$male = "selected";
			$female = "";
		}else{
			$male = "";
			$female = "selected";
		}
		// $active = $_POST["active"];
		if(isset($_POST["active"])){
			$active = 1;
		}else{
			$active = 0;
		}
		//Update user info
		$sql = "UPDATE `users` SET `firstname`=?,`secondname`=?,`phone`=?,`email`=?,`password`=?,`gender`=?,`active`=? WHERE id=?";
		$stmt = $conn->prepare($sql);
		$stmt->execute([$firstname, $secondname, $phone, $email, $password, $gender, $active, $id]);
		echo "<script>alert('Updated successfully')</script>";
	}
	if($status){
		try{
			$sql = "SELECT * FROM `users` WHERE id=?";
			$stmt = $conn->prepare($sql);
			$stmt->execute([$id]);
			$result = $stmt->fetch();
			$firstname = $result["firstname"];
			$secondname = $result["secondname"];
			$phone = $result["phone"];
			$email = $result["email"];
			$password = $result["password"];
			$gender = $result["gender"];
			if($gender == 1){
				$male = "selected";
				$female = "";
			}else{
				$male = "";
				$female = "selected";
			}
			$active = $result["active"];
			if($active){
				$activeUser = "checked";
			}else{
				$activeUser = "";
			}
		}catch(PDOException $e){
			echo "Can't get user data:  " . $e->getMessage();
		}
	}
?>

<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Update User</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
		<link rel="stylesheet" href="css/style1.css">
		<link rel="stylesheet" href="css/style2.css">
	</head>
<?php
	if($status){
?>
	<body>
		<!-- Start Navbar -->
		<?php
    		include_once("includes/nav.php");
  		?>
		<!-- End Navbar -->

		<div class="container">
			<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="m-auto" style="max-width:600px" enctype="multipart/form-data">
				<h3 class="my-4">Update User</h3>
				<hr class="my-4" />
				<div class="form-group mb-3 row"><label for="firstName" class="col-md-5 col-form-label">First Name</label>
					<div class="col-md-7"><input type="text"  class="form-control form-control-lg" id="firstName" name="firstname" value="<?php echo $firstname ?>" required></div>
				</div>
                
				<hr class="my-4" />
				<div class="form-group mb-3 row"><label for="lastName" class="col-md-5 col-form-label">Last Name</label>
					<div class="col-md-7"><input type="text"  class="form-control form-control-lg" id="lastName" name="secondname" value="<?php echo $secondname ?>" required></div>
				</div>
                
				<hr class="my-4" />
				<div class="form-group mb-3 row"><label for="phone" class="col-md-5 col-form-label">Phone</label>
					<div class="col-md-7"><input type="text"  class="form-control form-control-lg" id="phone" name="phone" value="<?php echo $phone ?>" required></div>
				</div>

				<hr class="my-4" />
				<div class="form-group mb-3 row"><label for="email" class="col-md-5 col-form-label">Email</label>
					<div class="col-md-7"><input type="text"  class="form-control form-control-lg" id="email" name="email" value="<?php echo $email ?>" required></div>
				</div>

				<hr class="my-4" />
				<div class="form-group mb-3 row"><label for="password" class="col-md-5 col-form-label">Password</label>
					<div class="col-md-7"><input type="password"  class="form-control form-control-lg" id="password" name="password" value="<?php echo $password ?>" required></div>
				</div>

                <hr class="my-4" />
				<div class="form-group mb-3 row"><label for="gender" class="col-md-5 col-form-label">Gender</label>
					<select  class="form-select custom-select custom-select-lg" id="gender" name="gender">
						<option <?php echo $male?>>Male</option>
						<option <?php echo $female?>>Female</option>
					</select>
				</div>

				<hr class="my-4" />
				<div class="form-group mb-3 row"><label for="active" class="col-md-5 col-form-label">Active</label>
					<div class="col-md-7"><input type="checkbox"  id="active" name="active" <?php echo $activeUser?>></div>
				</div>
				<input type="hidden" name="id" value="<?php echo $id ?>">
				<hr class="my-4" />
				<div class="form-group mb-3 row"><label for="insert10" class="col-md-5 col-form-label"></label>
					<div class="col-md-7"><button class="btn btn-primary btn-lg" name="sub" type="submit">Update</button></div>
               </div>
			</form>
		</div>
	</body>
	<?php
		}else{
			echo "Invalid request";
		}
	?>
</html>