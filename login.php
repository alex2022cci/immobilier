<?php 

include("./include/head.php");

 $error ='';
 $msg='';
 ?>

<div id="page-wrapper">
    <div class="row"> 
        <!--	Header start  -->
		<?php include("./include/header.php");?>
        <!--	Header end  -->
        
        <!--	Banner   --->
        <div class="banner-full-row page-banner" style="background-image:url('images/breadcromb.jpg');">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="page-name float-left text-white text-uppercase mt-1 mb-0"><b>Login</b></h2>
                    </div>
                    <div class="col-md-6">
                        <nav aria-label="breadcrumb" class="float-left float-md-right">
                            <ol class="breadcrumb bg-transparent m-0 p-0">
                                <li class="breadcrumb-item text-white"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Login</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
         <!--	Banner   --->
		 
		 
		 
        <div class="page-wrappers login-body full-row bg-gray">
            <div class="login-wrapper">
            	<div class="container">
                	<div class="loginbox">
                        <div class="login-right">
							<div class="login-right-wrap">
								<h1>Login</h1>
								<p class="account-subtitle">Access to our dashboard</p>
								<?= $error; ?>
								<?= $msg; ?>
								<!-- Form -->
								<form method="post">
									<div class="form-group">
										<input type="email"  name="email" class="form-control" placeholder="Your Email*">
									</div>
									<div class="form-group">
										<input type="password" name="pass"  class="form-control" placeholder="Your Password">
									</div>
									
										<button class="btn btn-primary" name="login" value="Login" type="submit">Login</button>
									
								</form>
								
								<div class="login-or">
									<span class="or-line"></span>
									<span class="span-or">or</span>
								</div>
								
								<!-- Social Login -->
								<div class="social-login">
									<span>Login with</span>
									<a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a>
									<a href="#" class="google"><i class="fab fa-google"></i></a>
									<a href="#" class="facebook"><i class="fab fa-twitter"></i></a>
									<a href="#" class="google"><i class="fab fa-instagram"></i></a>
								</div>
								<!-- /Social Login -->
								
								<div class="text-center dont-have">Don't have an account? <a href="register.php">Register</a></div>
								
							</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	<!--	login  -->