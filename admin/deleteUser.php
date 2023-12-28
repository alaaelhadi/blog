<?php
    include_once("includes/logged.php");
    if(isset($_GET["id"])){
        try{
            include_once("includes/conn.php");
            $id = $_GET["id"];
            $sql = "DELETE FROM `users` WHERE id=?";
            $stmt = $conn->prepare($sql);
            $stmt->execute([$id]);
            header("Location: users.php");
            die();
          }catch(PDOException $e){
              echo "Connection failed: " . $e->getMessage();
          }
    }else{
        echo "Invalid request";
    }
?>