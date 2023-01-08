<?php
    // message d'erreurs dans les sessions
ini_set('session.cache_limiter', 'public');
session_cache_limiter(false);
session_start();
include('config.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
            <title>Real Estate</title>
            <?php 
            include('./include/head.php');
            ?>
</head>

<body>

    <div id="page-wrapper">
        <div class="row">
            <!-- HEADER START -->
            <?php 
            include('./include/header.php');
            ?>
            <!-- HEADER END   -->

            <!--	Banner Start   -->
            <div class="overlay-black w-100 slider-banner1 position-relative"
                style="background-image: url('images/banner/04.jpg'); background-size: cover; background-position: center center; background-repeat: no-repeat;">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-lg-12">
                            <div class="text-white">
                                <h1 class="mb-4"><span class="text-primary">Find</span><br>
                                    Your dream house</h1>
                                <form method="post" action="propertygrid.php">
                                    <div class="row">
                                        <div class="col-md-6 col-lg-2">
                                            <div class="form-group">
                                                <select class="form-control" name="type">
                                                    <option value="">Select Type</option>
                                                    <option value="appartment">Appartment</option>
                                                    <option value="flat">Flat</option>
                                                    <option value="bunglow">Bunglow</option>
                                                    <option value="house">House</option>
                                                    <option value="villa">Villa</option>
                                                    <option value="office">Office</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-2">
                                            <div class="form-group">
                                                <select class="form-control" name="stype">
                                                    <option value="">Select Status</option>
                                                    <option value="rent">Rent</option>
                                                    <option value="sale">Sale</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-8 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="city"
                                                    placeholder="Enter City or Enter State" required>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-lg-2">
                                            <div class="form-group">
                                                <button type="submit" name="filter" class="btn btn-primary w-100">Search
                                                    Property</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--	Banner End  -->

            <!--	Text Block One
        ======================================================-->
            <div class="full-row bg-gray">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h2 class="text-secondary double-down-line text-center mb-5">What We Do</h2>
                        </div>
                    </div>
                    <div class="text-box-one">
                        <div class="row">
                            <div class="col-lg-3 col-md-6">
                                <div class="p-4 text-center hover-bg-white hover-shadow rounded mb-4 transation-3s">
                                    <i class="flaticon-rent text-primary flat-medium" aria-hidden="true"></i>
                                    <h5 class="text-secondary hover-text-primary py-3 m-0"><a href="#">Selling
                                            Service</a></h5>
                                    <p>Lacinia tempor tortor nibh. Et mattis cubilia suspendisse cras justo potenti.</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="p-4 text-center hover-bg-white hover-shadow rounded mb-4 transation-3s">
                                    <i class="flaticon-for-rent text-primary flat-medium" aria-hidden="true"></i>
                                    <h5 class="text-secondary hover-text-primary py-3 m-0"><a href="#">Rental
                                            Service</a></h5>
                                    <p>Lacinia tempor tortor nibh. Et mattis cubilia suspendisse cras justo potenti.</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="p-4 text-center hover-bg-white hover-shadow rounded mb-4 transation-3s">
                                    <i class="flaticon-list text-primary flat-medium" aria-hidden="true"></i>
                                    <h5 class="text-secondary hover-text-primary py-3 m-0"><a href="#">Property
                                            Listing</a></h5>
                                    <p>Lacinia tempor tortor nibh. Et mattis cubilia suspendisse cras justo potenti.</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="p-4 text-center hover-bg-white hover-shadow rounded mb-4 transation-3s">
                                    <i class="flaticon-diagram text-primary flat-medium" aria-hidden="true"></i>
                                    <h5 class="text-secondary hover-text-primary py-3 m-0"><a href="#">Legal
                                            Investment</a></h5>
                                    <p>Lacinia tempor tortor nibh. Et mattis cubilia suspendisse cras justo potenti.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-----  Our Services  ---->
            <!--RECENT properties-->
            <div class="full-row">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="text-secondary double-down-line text-center mb-4">Recent property</h2>
                        </div>
                        <div class="col-md-12">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                aria-labelledby="pills-home">
                                <div class="row">
                                    <!--on va afficher nos propriétés-->
                                    <?php
                                    $sql = "SELECT property.*, user.uname, user.utype, user.uimage 
                                                FROM `property`, `user`
                                                    WHERE property.uid = user.uid 
                                                    ORDER BY date DESC
                                                    LIMIT 9" ;

                                    $query = mysqli_query($con, $sql);

                                    /*on va lire notre tableau*/
                                    while($row = mysqli_fetch_array($query)){
                                       ?>
                                       <!---->
                                       <div class="col-md-6 col-lg-4">
                                        <div class="featured-thumb hover-zoomer mb-4">
                                            <div class="overlay-black overflow-hidden position-relative"> 
                                                <img src="admin/property/<?php echo $row['18'];?>" alt="pimage">
                                                <div class="featured bg-primary text-white">New</div>
                                                <div class="sale bg-secondary text-white text-capitalize">For <?php echo $row['5'];?></div>
                                                <div class="price text-primary"><b>$<?php echo $row['13'];?> </b><span class="text-white"><?php echo $row['12'];?> Sqft</span></div>
                                            </div>
                                            <div class="featured-thumb-data shadow-one">
                                                <div class="p-3">
                                                    <h5 class="text-secondary hover-text-primary mb-2 text-capitalize"><a href="propertydetail.php?pid=<?php echo $row['0'];?>"><?php echo $row['1'];?></a></h5>
                                                    <span class="location text-capitalize"><i class="fas fa-map-marker-alt text-primary"></i> <?php echo $row['14'];?></span> </div>
                                                <div class="bg-gray quantity px-4 pt-4">
                                                    <ul>
                                                        <li><span><?php echo $row['12'];?></span> Sqft</li>
                                                        <li><span><?php echo $row['6'];?></span> Beds</li>
                                                        <li><span><?php echo $row['7'];?></span> Baths</li>
                                                        <li><span><?php echo $row['9'];?></span> Kitchen</li>
                                                        <li><span><?php echo $row['8'];?></span> Balcony</li>
                                                        
                                                    </ul>
                                                </div>
                                                <div class="p-4 d-inline-block w-100">
                                                    <div class="float-left text-capitalize"><i class="fas fa-user text-primary mr-1"></i>By : <?php echo $row['uname'];?></div>
                                                    <div class="float-right"><i class="far fa-calendar-alt text-primary mr-1"></i> 6 Months Ago</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>     
                                       <?php 
                                    };
                                    ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                        

                <!--END RECENT properties-->

                <!--	Why Choose Us -->
        <div class="full-row living bg-one overlay-secondary-half" style="background-image: url('images/haddyliving.jpg'); background-size: cover; background-position: center center; background-repeat: no-repeat;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-6">
                        <div class="living-list pr-4">
                            <h3 class="pb-4 mb-3 text-white">Why Choose Us</h3>
                            <ul>
                                <li class="mb-4 text-white d-flex"> 
									<i class="flaticon-reward flat-medium float-left d-table mr-4 text-primary" aria-hidden="true"></i>
									<div class="pl-2">
										<h5 class="mb-3">Experience Quality</h5>
										<p>Ad non vivamus Elementum eget fringilla venenatis quisque, maecenas adipiscing aliquet justo. Libero. Gravida. Sapien, dolor nostra sem. Rutrum conubia inceptos egestas dolor class.</p>
									</div>
                                </li>
                                <li class="mb-4 text-white d-flex"> 
									<i class="flaticon-real-estate flat-medium float-left d-table mr-4 text-primary" aria-hidden="true"></i>
									<div class="pl-2">
										<h5 class="mb-3">Experience Quality</h5>
										<p>Ad non vivamus Elementum eget fringilla venenatis quisque, maecenas adipiscing aliquet justo. Libero. Gravida. Sapien, dolor nostra sem. Rutrum conubia inceptos egestas dolor class.</p>
									</div>
                                </li>
                                <li class="mb-4 text-white d-flex"> 
									<i class="flaticon-seller flat-medium float-left d-table mr-4 text-primary" aria-hidden="true"></i>
									<div class="pl-2">
										<h5 class="mb-3">Experience Quality</h5>
										<p>Ad non vivamus Elementum eget fringilla venenatis quisque, maecenas adipiscing aliquet justo. Libero. Gravida. Sapien, dolor nostra sem. Rutrum conubia inceptos egestas dolor class.</p>
									</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<!--	why choose us -->
		
		<!--	How it work -->
        <div class="full-row">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="text-secondary double-down-line text-center mb-5">How It Work</h2>
                        </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="icon-thumb-one text-center mb-5">
                            <div class="bg-primary text-white rounded-circle position-absolute z-index-9">1</div>
                            <div class="left-arrow"><i class="flaticon-investor flat-medium icon-primary" aria-hidden="true"></i></div>
                            <h5 class="text-secondary mt-5 mb-4">Discussion</h5>
                            <p>Nascetur cubilia sociosqu aliquet ut elit nascetur nullam duis tincidunt nisl non quisque vestibulum platea ornare ridiculus.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="icon-thumb-one text-center mb-5">
                            <div class="bg-primary text-white rounded-circle position-absolute z-index-9">2</div>
                            <div class="left-arrow"><i class="flaticon-search flat-medium icon-primary" aria-hidden="true"></i></div>
                            <h5 class="text-secondary mt-5 mb-4">Files Review</h5>
                            <p>Nascetur cubilia sociosqu aliquet ut elit nascetur nullam duis tincidunt nisl non quisque vestibulum platea ornare ridiculus.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="icon-thumb-one text-center mb-5">
                            <div class="bg-primary text-white rounded-circle position-absolute z-index-9">3</div>
                            <div><i class="flaticon-handshake flat-medium icon-primary" aria-hidden="true"></i></div>
                            <h5 class="text-secondary mt-5 mb-4">Acquire</h5>
                            <p>Nascetur cubilia sociosqu aliquet ut elit nascetur nullam duis tincidunt nisl non quisque vestibulum platea ornare ridiculus.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!--	How It Work -->
        <div class="full-row overlay-secondary" style="background-image: url(images/counterbg.jpg); background-position: center center; background-repeat: no-repeat;">
           
            <div class="container">
                <div class="flat-container">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="count-wow text-center mb-sm-50" data-wow-duration="300">
                                <i class="flaticon-house flat-large text-white" aria-hidden="true"></i>
                                <?php
                                $query = mysqli_query($con, "SELECT count(pid) 
                                                        FROM property");
                                                        while($row = mysqli_fetch_array($query)){
                                                            echo '<div class="count-num text-primary my-4 data-speed="300" data-stop'.$row[0].' ">0</div> ';
                                                        }
                                ?>
                                <div class="text-white h5">Properties available</div>
                            </div>
                        </div>
                        <div class="col-md-3">
                        <div class="count-wow text-center mb-sm-50" data-wow-duration="300">
                                <i class="flaticon-house flat-large text-white" aria-hidden="true"></i>
                                <?php
                                $query = mysqli_query($con, "SELECT count(pid) 
                                                        FROM property
                                                        WHERE stype='sale'");
                                                        while($row = mysqli_fetch_array($query)){
                                                            echo '<div class="count-num text-primary my-4 data-speed="300" data-stop'.$row[0].' ">0</div> ';
                                                        }
                                ?>
                                <div class="text-white h5">Properties sold</div>
                            </div>
                        </div>
                        <div class="col-md-3">
                        <div class="count-wow text-center mb-sm-50" data-wow-duration="300">
                                <i class="flaticon-house flat-large text-white" aria-hidden="true"></i>
                                <?php
                                $query = mysqli_query($con, "SELECT count(pid) 
                                                        FROM property
                                                        WHERE stype='rent'");
                                                        while($row = mysqli_fetch_array($query)){
                                                            echo '<div class="count-num text-primary my-4 data-speed="300" data-stop'.$row[0].' ">0</div> ';
                                                        }
                                ?>
                                <div class="text-white h5">Properties rented</div>
                            </div>
                        </div>
                        <div class="col-md-3">
                        <div class="count-wow text-center mb-sm-50" data-wow-duration="300">
                                <i class="flaticon-man flat-large text-white" aria-hidden="true"></i>
                                <?php
                                $query = mysqli_query($con, "SELECT count(uid) 
                                                        FROM property
                                                        WHERE 'user'");
                                                        while($row = mysqli_fetch_array($query)){
                                                            echo '<div class="count-num text-primary my-4 data-speed="300" data-stop'.$row[0].' ">0</div> ';
                                                        }
                                ?>
                                <div class="text-white h5">Register users</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!---->
    <div>Développement ultérieur</div>
    <!---->
    <!--Testimonial Start-->
    <div class="full-row">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="content-sidebar p-4">
                        <div class="mb-3 col-lg-12">
                            <h4 class="double-down-line-left text-secondary position-relative pb-4 mb-4">
                                Testimonial
                            </h4>
                            <div class="recent-review owl-carousel owl-dots-gray owl-dots-hover-primary">
                                <?php 
                                /*feedback validé par l'utilisateur du site*/
                                $query = mysqli_query($con, "SELECT feedback.*, user.*
                                                            FROM `feedback`,`user`
                                                            WHERE feedback.uid = user.uid
                                                            AND feedback.status = 1 ");
                                                            
                                                            while($row = mysqli_fetch_array($query)){
                                ?>
                                <div class="item">
                                    <div class="p-4 bg-primary down-angle-white position-relative">
                                        <p class="text-white">
                                                                <i class="fas fa-quote-left mrr-2 text-white"></i>
                                                                <?php echo $row['2'];?>
                                                                <i class="fas fa-quote-right mrr-2 text-white"></i>
                                        </p>
                                    </div>
                                    <div class="p-2 mt-4"><span class="text-primary table text-capitalize"></span>
                                    <?php echo $row['uname']?>
                                    <span class="text-capitalize"></span>
                                    <?php echo $row['utype']?>
                                                                
                                </div>
                                </div>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Testimonial End-->


 </div>

        <!--	Footer   start-->
        
        <?php 
        //include("./include/footer");
            include('./include/footer.php');

        echo 'footer-test '; ?>
        <!--	Footer   start-->


        <!-- Scroll to top -->
        <a href="#" class="bg-primary text-white hover-text-secondary" id="scroll"><i class="fas fa-angle-up"></i></a>
        <!-- End Scroll To top -->
    </div>
</div>
<!-- Wrapper End -->
            <?php include('./include/js.php');?>

</body>

</html>