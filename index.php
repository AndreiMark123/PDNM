<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="image/logo1.png" type="image/png">
        <title>PDNP</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="vendors/linericon/style.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.css">
        <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
        <!-- main css -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">


    </head>
    <body>
        <!--================Header Area =================-->
        <header class="header_area">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" href="index.php"><img src="image/logo1.png" length=700px; height=100px alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto">
                            <li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li> 
                            <li class="nav-item"><a class="nav-link" href="meal.php">Meal Plan</a></li>
                            <li class="nav-item"><a class="nav-link" href="profile.php">Profile</a></li>
                            <li class="nav-item"><a class="nav-link" href="#" class="btn theme_btn button_hover" data-toggle="modal" data-target="#logoutModal">Logout</a></li>
              
                            
                        </ul>
                    </div> 
                </nav>  
            </div>
        </header>
        <!--================Header Area =================-->


        <!--================Modal for Logout =================-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Logout Confirmation</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="logout.php" method="POST" enctype="multipart/form-data">     
        <label>Do you want to logout?</label>                       
      </div>
      <div class="modal-footer">
        <input type="reset" class="btn btn-primary" value="CANCEL">
        <input type="submit" class="btn btn-danger" name="LOGOUT" value="LOGOUT"> 
      </div>
        </form>
    </div>
  </div>
</div>



        
        <!--================Banner Area =================-->
        <section class="banner_area">
            <div class="booking_table d_flex align-items-center">
            	<div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
              <div class="container">
                <div class="banner_content text-center">
                  
                  <h2>A Personalized Nutrition Planner for a Heathier You!</h2></p>
                  <a href="#" class="btn theme_btn button_hover" data-toggle="modal" data-target="#exampleModal">Generate my Meal Plan Now!</a>
                </div>
              </div>
            </div>
            
            
        </section> 
        <!--================Banner Area =================-->
        



        <!-- Modal for generating-->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Meal Plan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form action="process.php" method="POST" enctype="multipart/form-data">
        <div class="modal-body">
          
          <div class="form-group">
            <label for="weight">Weight (kg)</label>
            <input type="number_format" class="form-control" name="weight" id="weight" required>
          </div>

          <div class="form-group">
            <label for="height">Height (m)</label>
            <input types="number_format" class="form-control" name="height" id="height" required>
          </div>

          <div class="form-group">
            <label for="age">Age</label>
            <input type="number" class="form-control" name="age" id="age" required>
          </div>

          <div class="form-group">
            <label for="target">Target Weight</label>
            <input type="number_format" class="form-control" name="target_weight" id="target" required>
          </div>

          <div class="form-group">
            <select class="form-control" name="activity" id="activity" required>
              <option value="" disabled selected>Activity Level</option>
              <option value="sedentary">Sedentary (little or no exercise)</option>
              <option value="lightly_active">Lightly Active (light exercise/sports 1-3 days/week)</option>
              <option value="moderately_active">Moderately Active (moderate exercise/sports 3-5 days/week)</option>
              <option value="very_active">Very Active (hard exercise/sports 6-7 days a week)</option>
              <option value="super_active">Super Active (very hard exercise/sports & a physical job)</option>
            </select>
          </div>
        <br></br>

          <div class="form-group">
            <select class="form-control" name="sex" id="sex" required>
              <option value="" disabled selected>Sex</option>
              <option value="Male">Male</option>
              <option value="Female">Female</option>
            </select>
          </div>
          <br></br>

          <!-- <div class="form-group">
            <label>Allergies (Select all that apply)</label>
            <div class="checkbox-group">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="allergies[]" id="dairy" value="dairy">
                <label class="form-check-label" for="dairy">Dairy</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="allergies[]" id="eggs" value="eggs">
                <label class="form-check-label" for="eggs">Eggs</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="allergies[]" id="peanuts" value="peanuts">
                <label class="form-check-label" for="peanuts">Peanuts</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="allergies[]" id="tree_nuts" value="tree_nuts">
                <label class="form-check-label" for="tree_nuts">Tree Nuts</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="allergies[]" id="soy" value="soy">
                <label class="form-check-label" for="soy">Soy</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="allergies[]" id="wheat" value="wheat">
                <label class="form-check-label" for="wheat">Wheat/Gluten</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="allergies[]" id="fish" value="fish">
                <label class="form-check-label" for="fish">Fish</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="allergies[]" id="shellfish" value="shellfish">
                <label class="form-check-label" for="shellfish">Shellfish</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="allergies[]" id="sesame" value="sesame">
                <label class="form-check-label" for="sesame">Sesame</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="allergies[]" id="none_allergies" value="none">
                <label class="form-check-label" for="none_allergies">No allergies</label>
              </div>
            </div>
          </div>
          <br>

          <-- Comorbidities Checkboxes ->
          <div class="form-group">
            <label>Diet-Related Health Conditions (Select all that apply)</label>
            <div class="checkbox-group">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="comorbidities[]" id="diabetes" value="diabetes">
                <label class="form-check-label" for="diabetes">Diabetes</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="comorbidities[]" id="hypertension" value="hypertension">
                <label class="form-check-label" for="hypertension">Hypertension</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="comorbidities[]" id="heart_disease" value="heart_disease">
                <label class="form-check-label" for="heart_disease">Cardiovascular Disease</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="comorbidities[]" id="kidney_disease" value="kidney_disease">
                <label class="form-check-label" for="kidney_disease">Kidney Disease</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="comorbidities[]" id="gout" value="gout">
                <label class="form-check-label" for="gout">Gout</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="comorbidities[]" id="celiac" value="celiac">
                <label class="form-check-label" for="celiac">Celiac Disease</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="comorbidities[]" id="ibs" value="ibs">
                <label class="form-check-label" for="ibs">Irritable Bowel Syndrome (IBS)</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="comorbidities[]" id="gerd" value="gerd">
                <label class="form-check-label" for="gerd">Acid Reflux/GERD</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="comorbidities[]" id="fatty_liver" value="fatty_liver">
                <label class="form-check-label" for="fatty_liver">Fatty Liver Disease</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="comorbidities[]" id="pcos" value="pcos">
                <label class="form-check-label" for="pcos">PCOS</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" name="comorbidities[]" id="none_comorbidities" value="none">
                <label class="form-check-label" for="none_comorbidities">None of these conditions</label>
              </div>
            </div>
          </div> -->

          

        </div>

        <div class="modal-footer">
          <button type="reset" class="btn btn-primary">CLEAR</button>
          <button type="submit" class="btn btn-success" name="generate">GENERATE</button>
        </div>

      </form>

    </div>
  </div>
</div>




        
        <!--================ About History Area  =================-->
        <section class="about_history_area section_gap">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 d_flex align-items-center">
                        <div class="about_content ">
                            <h2 class="title title_color">About Us <br>Our History<br>Mission & Vision</h2>
                            <p>Our mission is to provide personalized diet and nutrition plans that make healthy living easier and more achievable for everyone. We aim to help people live healthier lives by offering customized solutions tailored to their unique needs and goals. </p>
                            
                        </div>
                    </div>
                    <div class="col-md-6">
                        <img class="img-fluid" src="image/hisimg.jpg" length="1000px"; height="1000px" alt="img">
                    </div>
                </div>
            </div>
        </section>
        <!--================ About History Area  =================-->
        
        <!--================ Testimonial Area  =================-->
        <section class="testimonial_area section_gap">
            <div class="container">
                <div class="section_title text-center">
                    <h2 class="title_color">Customer's Feedback</h2>
                    <p>Here are some of our customer's feedback </p>
                </div>
                <div class="testimonial_slider owl-carousel">
                    <div class="media testimonial_item">
                        <img class="rounded-circle" src="image/testtimonial-1.jpg" length="100px"; height="140px"  alt="">
                        <div class="media-body">
                            <p> "The website is easy to use, and the personalized plans are great. It helped me find a diet that suits my lifestyle. " </p>
                            <h4 class="sec_h4">Loreine Jamero</h4></a>
                            <div class="star">
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star-half-o"></i></a>
                            </div>
                        </div>
                    </div>    
                    <div class="media testimonial_item">
                        <img class="rounded-circle" src="image/nammy.jpg" length="100px"; height="140px" alt="">
                        <div class="media-body">
                            <p>"The personalized recommendation really work for me.Its like having my own nutritionist"</p>
                            <h4 class="sec_h4">Nammy Jardiolin</h4></a>
                            <div class="star">
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="media testimonial_item">
                        <img class="rounded-circle" src="image/beah.jpg" length="100px"; height="140px" alt="">
                        <div class="media-body">
                            <p>"Very useful for planning meals."</p>
                            <h4 class="sec_h4">Beah Marie Francine Barja</h4></a>
                            <div class="star">
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star-half-o"></i></a>
                            </div>
                        </div>
                    </div>    
                    <div class="media testimonial_item">
                        <img class="rounded-circle" src="image/shila.jpg" length="100px"; height="140px" alt="">
                        <div class="media-body">
                            <p>"Helps me stay on track with my diet." </p>
                            <h4 class="sec_h4">Sheila Mae Taladua</h4></a>
                            <div class="star">
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================ Testimonial Area  =================-->
      
        
        <!--================ start footer Area  =================-->	
        <footer class="footer-area section_gap">
            <div class="container">
  
                <div class="border_line"></div>
                <div class="row footer-bottom d-flex justify-content-between align-items-center">
                    <p class="col-lg-8 col-sm-12 footer-text m-0">Copyright ©2025 All rights reserved </p>
                    <div class="col-lg-4 col-sm-12 footer-social">
                        <a href="https://web.facebook.com/personalizeddietandnutritionplanner"><i class="fa-brands fa-facebook"></i></a>
                        <a href="https://x.com/pdnp_2025"><i class="fa-brands fa-twitter"></i></a>
                        <a href="https://www.instagram.com/pdnp_2025/"><i class="fa-brands fa-instagram"></i></a>
                        
                        
                    </div>
                </div>
            </div>
        </footer>
		<!--================ End footer Area  =================-->
        
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/popper.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="js/jquery.ajaxchimp.min.js"></script>
        <script src="js/mail-script.js"></script>
        <script src="vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.js"></script>
        <script src="vendors/nice-select/js/jquery.nice-select.js"></script>
        <script src="js/mail-script.js"></script>
        <script src="js/stellar.js"></script>
        <script src="vendors/lightbox/simpleLightbox.min.js"></script>
        <script src="js/custom.js"></script>
    </body>
</html>