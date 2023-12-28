<?php
	include_once("includes/logged.php");
	include_once("includes/conn.php");
	if($_SERVER["REQUEST_METHOD"] === "POST"){
		try{
			$sql = "INSERT INTO `posts`(`title`, `content`, `featured`, `published`, `image`) VALUES (?, ?, ?, ?, ?)";
			$title = $_POST["title"];
			$content = $_POST["content"];
			if(isset($_POST["featured"])){
				$featured = 1;
			}else{
				$featured = 0;
			}
			if(isset($published)){
				$published = 1;
			}else{
				$published = 0;
			}
			// read image
			include_once("includes/addimage.php");
			$stmt = $conn->prepare($sql);
			$stmt->execute([$title, $content, $featured, $published, $image_name]);
			echo "<script>alert('Inserted successfully')</script>";
		}catch(PDOException $e){
			echo "Connection failed: " . $e->getMessage();
		}
	}
?>

<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Insert Post</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
		<link rel="stylesheet" href="css/style1.css">
		<link rel="stylesheet" href="css/style2.css">
	</head>

	<body>
		<!-- Start Navbar -->
		<?php
    		include_once("includes/nav.php");
  		?>
		<!-- End Navbar -->

		<div class="container">
			<form action="" method="POST" class="m-auto" style="max-width:600px" enctype="multipart/form-data">
				<h3 class="my-4">Insert Post</h3>
				<hr class="my-4" />
				<div class="form-group mb-3 row"><label for="title2" class="col-md-5 col-form-label">Post Title</label>
					<div class="col-md-7"><input type="text"  class="form-control form-control-lg" id="title2" name="title" required placeholder="Enter Post Title"></div>
				</div>
                
				<hr class="bg-transparent border-0 py-1" />
				<div class="form-group mb-3 row"><label for="content4" class="col-md-5 col-form-label">Content</label>
					<div class="col-md-7"><textarea   class="form-control form-control-lg" id="content4" name="content" required placeholder="Enter Content"></textarea></div>
				</div>
                
                <hr class="my-4" />
				<div class="form-group mb-3 row"><label for="featured" class="col-md-5 col-form-label">Featured</label>
					<div class="col-md-7"><input type="checkbox"  id="featured" name="featured"></div>
				</div>

				<hr class="my-4" />
				<div class="form-group mb-3 row"><label for="published" class="col-md-5 col-form-label">Published</label>
					<div class="col-md-7"><input type="checkbox"  id="published" name="published"></div>
				</div>
				
				<hr class="my-4" />
				<div>
				<label for="image" class="col-md-5 col-form-label">Select Image</label>
					<input type="file" id="image" name="image" accept="image/*">
				</div>

				<hr class="my-4" />
				<div class="form-group mb-3 row"><label for="insert10" class="col-md-5 col-form-label"></label>
					<div class="col-md-7"><button class="btn btn-primary btn-lg" type="submit">Insert</button></div>
               </div>
			</form>
		</div>
	</body>

</html>

