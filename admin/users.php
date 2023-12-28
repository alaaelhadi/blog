<?php
    include_once("includes/logged.php");
    try{
      include_once("includes/conn.php");
      $sql = "SELECT * FROM `users`";
      $stmt = $conn->prepare($sql);
      $stmt->execute();
    }catch(PDOException $e){
        echo "Connection failed: " . $e->getMessage();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Users</title>
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
         <h1>Users</h1>
         
         <table id="keywords" cellspacing="0" cellpadding="0">
           <thead>
             <tr>
               <th><span>First Name</span></th>
			         <th><span>Last Name</span></th>
               <th><span>Email</span></th>
               <th><span>Active</span></th>
               <th><span>Delete</span></th>
               <th><span>Update</span></th>
             </tr>
           </thead>
           <tbody>
           <?php
             foreach($stmt->fetchAll() as $row){
              $id = $row["id"];
              $firstname = $row["firstname"];
              $secondname = $row["secondname"];
              $email = $row["email"];
              $active = $row["active"];
           ?>
             <tr>
               <td class="lalign"><?php echo $firstname ?></td>
			         <td><?php echo $secondname ?></td>
               <td><?php echo $email ?></td>
               <td><?php echo $active ?></td>
               <td><a href="deleteUser.php?id=<?php echo $id ?>" onclick="return confirm('Are you sure you want to delete?')"><img  src="../imgs/delete.jpg" alt="Delete"></a></td>
               <td><a href="updateUser.php?id=<?php echo $id ?>"><img  src="../imgs/update.jpg" alt="Update"></a></td>
             </tr>
            <?php
              }
            ?> 
           </tbody>
         </table>
        </div> 
</body>
</html>
