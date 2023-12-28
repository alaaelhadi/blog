<?php
	include_once("admin/includes/conn.php");
    try{
        $sql = "SELECT * FROM posts";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
    }catch(PDOException $e){
        echo "Connection failed: " . $e->getMessage();
    }
?>

<div class="page-content">
    <div class="card">
        <div class="card-header text-center">
            <h5 class="card-title">Voluptates Corporis Placeat</h5> 
            <small class="small text-muted">January 24 2019 
                <span class="px-2">-</span>
                <a href="#" class="text-muted">32 Comments</a>
            </small>
        </div>
        <div class="card-body">
            <div class="blog-media">
                <img src="assets/imgs/blog-6.jpg" alt="" class="w-100">
                <a href="#" class="badge badge-primary">#Salupt</a>     
            </div>  
            <p class="my-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos saepe dolores et nostrum porro odit reprehenderit animi, est ratione fugit aspernatur ipsum. Nostrum placeat hic saepe voluptatum dicta ipsum beatae.</p>
        </div>
        
        <div class="card-footer d-flex justify-content-between align-items-center flex-basis-0">
            <button class="btn btn-primary circle-35 mr-4"><i class="ti-back-right"></i></button>
            <a href="single-post.html" class="btn btn-outline-dark btn-sm">READ MORE</a>
            <a href="#" class="text-dark small text-muted">By : Joe Mitchell</a>
        </div>                  
    </div>
    <hr>
    <div class="row">     
        <?php
            foreach($stmt->fetchAll() as $row){
                $datePublished = $row["datePublished"];
                $title = $row["title"];
                $content = $row["content"];
                $image = $row["image"];
                $id = $row["id"];
        ?>                  
        <div class="col-lg-6">
            <div class="card text-center mb-5">
                <div class="card-header p-0">                                   
                    <div class="blog-media">
                        <img src="imgs/<?php echo $image ?>" alt="" class="w-100">
                        <a href="#" class="badge badge-primary">#Placeat</a>        
                    </div>  
                </div>
                <div class="card-body px-0">
                    <h5 class="card-title mb-2"><?php echo $title ?></h5>    
                    <small class="small text-muted"><?php echo $datePublished ?> 
                        <span class="px-2">-</span>
                        <a href="#" class="text-muted">34 Comments</a>
                    </small>
                    <p class="my-2"><?php echo $content ?></p>
                </div>
                
                <div class="card-footer p-0 text-center">
                    <a href="single-post.php?id=<?php echo $id ?>" class="btn btn-outline-dark btn-sm">READ MORE</a>
                </div>                  
            </div>
        </div>
        <?php
            }
        ?> 
    </div>
    
    <button class="btn btn-primary btn-block my-4">Load More Posts</button>
</div>