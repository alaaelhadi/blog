<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with JoeBLog landing page.">
    <meta name="author" content="Devcrud">
    <title>JoeBLog | Free Bootstrap 4.3.x template</title>
    <!-- font icons -->
    <link rel="stylesheet" href="assets/vendors/themify-icons/css/themify-icons.css">
    <!-- Bootstrap + JoeBLog main styles -->
	<link rel="stylesheet" href="assets/css/joeblog.css">
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">
    
    <!-- page First Navigation -->
    <nav class="navbar navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="assets/imgs/logo.svg" alt="">
            </a>
            <div class="socials">
                <a href="javascript:void(0)"><i class="ti-facebook"></i></a>
                <a href="javascript:void(0)"><i class="ti-twitter"></i></a>
                <a href="javascript:void(0)"><i class="ti-pinterest-alt"></i></a>
                <a href="javascript:void(0)"><i class="ti-instagram"></i></a>
                <a href="javascript:void(0)"><i class="ti-youtube"></i></a>
            </div>
        </div>
    </nav>
    <!-- End Of First Navigation -->

    <!-- Page Second Navigation -->
    <?php
        include_once("includes/nav.php");
    ?>
    <!-- End Of Page Second Navigation -->
    
    <!-- page-header -->
    <header class="page-header"></header>
    <!-- end of page header -->

    <div class="container">
        <section>
            <div class="feature-posts">
                <a href="single-post.php" class="feature-post-item">                       
                    <span>Featured Posts</span>
                </a>
                <a href="single-post.php" class="feature-post-item">
                    <img src="imgs/img-1.jpg" class="w-100" alt="">
                    <div class="feature-post-caption">Incidunt Quaerat</div>
                </a>
                <a href="single-post.php" class="feature-post-item">
                    <img src="imgs/img-2.jpg" class="w-100" alt="">
                    <div class="feature-post-caption">Culpa Ducimus</div>
                </a>
                <a href="single-post.php" class="feature-post-item">
                    <img src="imgs/img-3.jpg" class="w-100" alt="">
                    <div class="feature-post-caption">Temporibus Simile</div>
                </a>
                <a href="single-post.php" class="feature-post-item">
                    <img src="imgs/img-4.jpg" class="w-100" alt="">
                    <div class="feature-post-caption">Adipisicing</div>
                </a>
            </div>
        </section>
        <hr>
        <div class="page-container">
            <?php
                include_once("includes/homePosts.php");
            ?>

            <!-- Sidebar -->
            <div class="page-sidebar text-center">
                <h6 class="sidebar-title section-title mb-4 mt-3">About</h6>
                <img src="assets/imgs/avatar.jpg" alt="" class="circle-100 mb-3">
                <div class="socials mb-3 mt-2">
                    <a href="javascript:void(0)"><i class="ti-facebook"></i></a>
                    <a href="javascript:void(0)"><i class="ti-twitter"></i></a>
                    <a href="javascript:void(0)"><i class="ti-pinterest-alt"></i></a>
                    <a href="javascript:void(0)"><i class="ti-instagram"></i></a>
                    <a href="javascript:void(0)"><i class="ti-youtube"></i></a>
                </div>
                <p>Consectetur adipisicing elit Possimus tempore facilis dolorum veniam impedit nobis. Quia, soluta incidunt nesciunt dolorem reiciendis iusto.</p>
                

                <h6 class="sidebar-title mt-5 mb-4">Newsletter</h6>
                <form action="">
                    <div class="subscribe-wrapper">
                        <input type="email" class="form-control" placeholder="Email Address">
                        <button type="submit" class="btn btn-primary"><i class="ti-location-arrow"></i></button>
                    </div>
                </form>

                <h6 class="sidebar-title mt-5 mb-4">Tags</h6>
                <a href="javascript:void(0)" class="badge badge-primary m-1">#iusto</a>
                <a href="javascript:void(0)" class="badge badge-primary m-1">#quibusdam</a>
                <a href="javascript:void(0)" class="badge badge-primary m-1">#officia</a>
                <a href="javascript:void(0)" class="badge badge-primary m-1">#animi</a>
                <a href="javascript:void(0)" class="badge badge-primary m-1">#mollitia</a>
                <a href="javascript:void(0)" class="badge badge-primary m-1">#quod</a>
                <a href="javascript:void(0)" class="badge badge-primary m-1">#ipsa at</a>
                <a href="javascript:void(0)" class="badge badge-primary m-1">#dolor</a>
                <a href="javascript:void(0)" class="badge badge-primary m-1">#incidunt</a>
                <a href="javascript:void(0)" class="badge badge-primary m-1">#possimus</a>

                <h6 class="sidebar-title mt-5 mb-4">Instagram</h6>
                <div class="row px-3">
                    <div class="col-4 p-1 figure">
                        <a href="#" class="figure-img">
                            <img src="assets/imgs/insta-1.jpg" alt="">
                        </a>
                    </div>
                    <div class="col-4 p-1 figure">
                        <a href="#" class="figure-img">
                            <img src="assets/imgs/insta-2.jpg" alt="" class="w-100 m-0">
                        </a>
                    </div>  
                    <div class="col-4 p-1 figure">
                        <a href="#" class="figure-img">
                            <img src="assets/imgs/insta-3.jpg" alt="" class="w-100">
                        </a>
                    </div>
                    <div class="col-4 p-1 figure">
                        <a href="#" class="figure-img">
                            <img src="assets/imgs/insta-4.jpg" alt="" class="w-100 m-0">
                        </a>
                    </div>  
                    <div class="col-4 p-1 figure">
                        <a href="#" class="figure-img">
                            <img src="assets/imgs/insta-5.jpg" alt="" class="w-100">
                        </a>
                    </div>
                    <div class="col-4 p-1 figure">
                        <a href="#" class="figure-img">
                            <img src="assets/imgs/insta-6.jpg" alt="" class="w-100 m-0">
                        </a>
                    </div>                          
                </div>  

                <figure class="figure mt-5">
                    <a href="single-post.html" class="figure-img">
                        <img src="assets/imgs/img-4.jpg" alt="" class="w-100">
                        <figcaption class="figcaption">Laboriosam</figcaption>
                    </a>
                </figure>

                <h6 class="sidebar-title mt-5 mb-4">Popular Posts</h6>
                <div class="card mb-4">
                    <a href="single-post.html" class="overlay-link"></a>
                    <div class="card-header p-0">                                   
                        <div class="blog-media">
                            <img src="assets/imgs/blog-6.jpg" alt="" class="w-100">
                            <a href="#" class="badge badge-primary">#Lorem</a>      
                        </div>  
                    </div>
                    <div class="card-body px-0">
                        <h5 class="card-title mb-2">Corporis Placeat</h5>   
                        <small class="small text-muted"><i class="ti-calendar pr-1"></i> January 24 2019
                        </small>
                        <p class="my-2">consectetur adipisicing Cum veritatis minus iustorpo cupiditate voluptas ...</p>
                    </div>      
                </div>

                <div class="media text-left mb-4">
                    <a href="single-post.html" class="overlay-link"></a>
                    <img class="mr-3" src="assets/imgs/blog-1.jpg" width="100px" alt="Generic placeholder image">
                    <div class="media-body">
                        <h6 class="mt-0">Nobis Mollitia</h6>
                        <p class="mb-2"> deserunt quisqua...</p>
                        <p class="text-muted small"><i class="ti-calendar pr-1"></i>  January 02 2019</p>
                    </div>
                </div>
                <div class="media text-left mb-4">
                    <a href="single-post.html" class="overlay-link"></a>
                    <img class="mr-3" src="assets/imgs/blog-2.jpg" width="100px" alt="Generic placeholder image">
                    <div class="media-body">
                        <h6 class="mt-0">Officiis Laborum</6>
                        <p class="mb-2"> deserunt quisqua...</p>                            
                        <p class="text-muted small"><i class="ti-calendar pr-1"></i>  January 10 2019</p>
                    </div>
                </div>
                <div class="media text-left mb-4">
                    <a href="single-post.html" class="overlay-link"></a>
                    <img class="mr-3" src="assets/imgs/blog-3.jpg" width="100px" alt="Generic placeholder image">
                    <div class="media-body">
                        <h6 class="mt-0">Sapiente fugit vero</h6>
                        <p class="mb-2"> deserunt ard quisqua...</p>                        
                        <p class="text-muted small"><i class="ti-calendar pr-1"></i>  January 04 2019</p>
                    </div>
                </div>  
                <div class="ad-card d-flex text-center align-items-center justify-content-center">
                    <span href="#" class="font-weight-bold">ADS</span>
                </div>
            </div>
        </div>
    </div>

    <div class="instagram-wrapper mt-5">
        <div class="ig-id">
            <a href="javascript:void(0)">Follow @joe_mitchell On Instagram</a>
        </div>
        <a href="javascript:void(0)" class="insta-item">
            <img src="assets/imgs/insta-1.jpg" alt="" class="w-100">
            <div class="overlay">
                <span>
                    <i class="ti-heart"></i> 23
                </span>
                <span>
                    <i class="ti-comment"></i> 12
                </span>
            </div>
        </a>
        <a href="javascript:void(0)" class="insta-item">
            <img src="assets/imgs/insta-2.jpg" alt="" class="w-100">
            <div class="overlay">
                <span>
                    <i class="ti-heart"></i> 23
                </span>
                <span>
                    <i class="ti-comment"></i> 12
                </span>
            </div>
        </a>
        <a href="javascript:void(0)" class="insta-item">
            <img src="assets/imgs/insta-3.jpg" alt="" class="w-100">
            <div class="overlay">
                <span>
                    <i class="ti-heart"></i> 23
                </span>
                <span>
                    <i class="ti-comment"></i> 12
                </span>
            </div>
        </a>
        <a href="javascript:void(0)" class="insta-item">
            <img src="assets/imgs/insta-4.jpg" alt="" class="w-100">
            <div class="overlay">
                <span>
                    <i class="ti-heart"></i> 23
                </span>
                <span>
                    <i class="ti-comment"></i> 12
                </span>
            </div>
        </a>
        <a href="javascript:void(0)" class="insta-item">
            <img src="assets/imgs/insta-5.jpg" alt="" class="w-100">
            <div class="overlay">
                <span>
                    <i class="ti-heart"></i> 23
                </span>
                <span>
                    <i class="ti-comment"></i> 12
                </span>
            </div>
        </a>
        <a href="javascript:void(0)" class="insta-item">
            <img src="assets/imgs/insta-6.jpg" alt="" class="w-100">
            <div class="overlay">
                <span>
                    <i class="ti-heart"></i> 23
                </span>
                <span>
                    <i class="ti-comment"></i> 12
                </span>
            </div>
        </a>
    </div>

    <!-- Page Footer -->
    <footer class="page-footer">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-md-3 text-center text-md-left mb-3 mb-md-0">
                    <img src="assets/imgs/logo.svg" alt="" class="logo">
                </div>
                <div class="col-md-9 text-center text-md-right">
                    <div class="socials">
                        <a href="javascript:void(0)" class="font-weight-bold text-muted mr-4"><i class="ti-facebook pr-1"></i> 123,345</a>
                        <a href="javascript:void(0)" class="font-weight-bold text-muted mr-4"><i class="ti-twitter pr-1"></i> 321,534</a>
                        <a href="javascript:void(0)" class="font-weight-bold text-muted mr-4"><i class="ti-pinterest-alt pr-1"></i> 543,312</a>
                        <a href="javascript:void(0)" class="font-weight-bold text-muted mr-4"><i class="ti-instagram pr-1"></i> 123,023</a>
                        <a href="javascript:void(0)" class="font-weight-bold text-muted mr-4"><i class="ti-youtube pr-1"></i> 231,043</a>
                    </div>
                </div>  
            </div>
            <p class="border-top mb-0 mt-4 pt-3 small">&copy; <script>document.write(new Date().getFullYear())</script>, JoeBlog Created By <a href="https://www.devcrud.com" class="text-muted font-weight-bold" target="_blank">DevCrud.</a>  All rights reserved </p> 
        </div>      
    </footer>
    <!-- End of Page Footer -->

	<!-- core  -->
    <script src="assets/vendors/jquery/jquery-3.4.1.js"></script>
    <script src="assets/vendors/bootstrap/bootstrap.bundle.js"></script>

    <!-- JoeBLog js -->
    <script src="assets/js/joeblog.js"></script>

</body>
</html>
