<?php
   include_once("includes/logged.php");
   try{
     include_once("includes/conn.php");
     $sql = "SELECT * FROM `posts`";
     $stmt = $conn->prepare($sql);
     $stmt->execute();
   }catch(PDOException $e){
       echo "Connection failed: " . $e->getMessage();
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Posts</title>
    <link rel="stylesheet" href="css/posts.css">
    <link rel="stylesheet" href="css/style2.css">
</head>
<body>
  <!-- Start Navbar -->
  <?php
    include_once("includes/nav.php");
  ?>
  <!-- End Navbar -->

        <div id="wrapper">
         <h1>Posts</h1>
         
         <table id="keywords" cellspacing="0" cellpadding="0">
           <thead>
             <tr>
               <th><span>Title</span></th>
			         <th><span>Date Published</span></th>
               <th><span>Featured</span></th>
               <th><span>Visits</span></th>
               <th><span>Delete</span></th>
               <th><span>Update</span></th>
             </tr>
           </thead>
           <tbody>
           <?php
             foreach($stmt->fetchAll() as $row){
              $id = $row["id"];
              $title = $row["title"];
              $datePublished = $row["datePublished"];
              $featured = $row["featured"];
              $visits = $row["visits"];
           ?>
             <tr>
               <td class="lalign"><?php echo $title ?></td>
			         <td><?php echo $datePublished ?></td>
               <td><?php echo $featured ?></td>
               <td><?php echo $visits ?></td>
               <td><a href="deletePost.php?id=<?php echo $id ?>"  onclick="return confirm('Are you sure you want to delete?')"><img  src="../imgs/delete.jpg" alt="Delete"></a></td>
               <td><a href="updatePosts.php?id=<?php echo $id ?>"><img  src="../imgs/update.jpg" alt="Update"></a></td>
             </tr>
            <?php
              }
            ?>
           </tbody>
         </table>
        </div> 
</body>
</html>
