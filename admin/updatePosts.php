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
		$title = $_POST["title"];
		$content = $_POST["content"];
		if(isset($_POST["featured"])){
			$featured = 1;
		}else{
			$featured = 0;
		}
		if(isset($_POST["published"])){
			$published = 1;
		}else{
			$published = 0;
		}
		$oldImage = $_POST["oldImage"];
		include_once("includes/updateImage.php");	
		//Update user info
		$sql = "UPDATE `posts` SET `title`=?,`content`=?,`featured`=?,`published`=?,`image`=? WHERE id=?";
		$stmt = $conn->prepare($sql);
		$stmt->execute([$title, $content, $featured, $published, $image_name, $id]);
		echo "<script>alert('Updated successfully')</script>";
	}
	if($status){
		try{
			$sql = "SELECT * FROM `posts` WHERE id=?";
			$stmt = $conn->prepare($sql);
			$stmt->execute([$id]);
			$result = $stmt->fetch();
			$title = $result["title"];
			$content = $result["content"];
			$featured = $result["featured"];
			if($featured){
				$featuredPost = "checked";
			}else{
				$featuredPost ="";
			}
			$published = $result["published"];
			if($published){
				$publishedPost = "checked";
			}else{
				$publishedPost ="";
			}
			$image = $result["image"];
		}catch(PDOException $e){
			echo "Can't get post data:  " . $e->getMessage();
		}
	}
?>

<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Update Post</title>
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
				<h3 class="my-4">Update Post</h3>
				<hr class="my-4" />
				<div class="form-group mb-3 row"><label for="title2" class="col-md-5 col-form-label">Post Title</label>
					<div class="col-md-7"><input type="text"  class="form-control form-control-lg" id="title2" name="title" required placeholder="Enter Post Title" value="<?php echo $title ?>"></div>
				</div>
                
				<hr class="bg-transparent border-0 py-1" />
				<div class="form-group mb-3 row"><label for="content4" class="col-md-5 col-form-label">Content</label>
					<div class="col-md-7"><textarea   class="form-control form-control-lg" id="content4" name="content" required placeholder="Enter Content"><?php echo $content ?></textarea></div>
				</div>
                
                <hr class="my-4" />
				<div class="form-group mb-3 row"><label for="featured" class="col-md-5 col-form-label">Featured</label>
					<div class="col-md-7"><input type="checkbox"  id="featured" name="featured" <?php echo $featuredPost ?>></div>
				</div>
				
				<hr class="my-4" />
				<div class="form-group mb-3 row"><label for="published" class="col-md-5 col-form-label">Published</label>
					<div class="col-md-7"><input type="checkbox"  id="published" name="published" <?php echo $publishedPost ?>></div>
				</div>

				<hr class="my-4" />
				<!-- <img src="../assets/imgs/insta-6.jpg" alt="" style="width:100px; height:100px;"> -->
				<div>
				<label for="image" class="col-md-5 col-form-label">Select Image</label>
					<input type="file" id="image" name="image" accept="image/*">
					<img src="../imgs/<?php echo $image ?>" alt="<?php echo $title ?>" style="width:300px;">
				</div>

				<input type="hidden" name="id" value="<?php echo $id ?>">
				<input type="hidden" name="oldImage" value="<?php echo $image ?>">

				<hr class="my-4" />
				<div class="form-group mb-3 row"><label for="insert10" class="col-md-5 col-form-label"></label>
					<div class="col-md-7"><button class="btn btn-primary btn-lg" type="submit">Update</button></div>
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

