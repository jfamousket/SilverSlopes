<?php
if(!$_GET["p"]){
    header("location: index.html");
}else{
    $plan = $_GET["p"];
}
?>
    <!DOCTYPE html>
    <html lang="en" class="no-js">

    <head>
        <!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Favicon-->
        <link rel="shortcut icon" href="/favicon.png" type="image/x-icon" />
        <!-- Author Meta -->
        <meta name="author" content="SilverSlopes">
        <!-- Meta Description -->
        <meta name="description" content="Hire Us and now and team would focus on delivering your the best of what you can get with a simple click">
        <!-- Meta Keyword -->
        <meta name="keywords" content="Hire cameroon,Hire web developer,Create website,build website in cameroon">
        <!--  alternate link      -->
        <link rel="alternate" href="https://silverslopecm.ml/fr/hire.php" hreflang="en" />
        <!-- meta character set -->
        <meta charset="UTF-8">
        <!-- Site Title -->
        <title>Hire | SilverSlopes</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
        <!--
            CSS
            ============================================= -->
        <link rel="stylesheet" href="css/linearicons.css">
        <link rel="stylesheet" href="css/owl.carousel.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/nice-select.css">
        <link rel="stylesheet" href="css/magnific-popup.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/default.css">
        <link rel="stylesheet" href="css/loading.anim.css">
        <link rel="stylesheet" type="text/css" href="css/fonts.css">
        <link rel="stylesheet" href="css/hbmodal.css">
        <link rel="stylesheet" media="print" href="css/printer.css">
        <script src="js/angular.min.js"></script>
        <script src="js/vendor/jquery-2.2.4.min.js"></script>
        <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-114313567-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-114313567-2');
</script>

    </head>

<body ng-app="hireBody">
<!--loading animation div-->
<section id="ajax_modal" class="hb-modal">
   <div class="centered">
<!--       <div class="lds-css ng-scope"><div style="width:100%;height:100%" class="lds-eclipse"><div></div></div></div>-->
<!--
  <section id="hire_ajax" class="centered_box">
      <div class="row">
         <div class="hb-modal-head col-sm-12">
             <h3 align="center" class="kaushan-lg" style="color:#f50044;">Silverslopes</h3>
             <hr>
         </div>
          <div class="col-sm-4">
              <h2 style="color:#f50044;">Order Complete!</h2>
          </div>
          <div class="col-sm-8">
             <div class="row">
                 <div class="col-sm-6">
              <h4><span class="lnr lnr-license"></span> Invoice Num:</h4>
              <p>456987123</p>
              <h4><span class="lnr lnr-calendar-full"></span> Date</h4>
              <p>Wednesday | 26/12/2018</p>
              <h4><span class="lnr lnr-enter"></span> Payement status:</h4>
              <p>Not payed</p>
                 </div>
                 <div class="col-sm-6">
              <h4><span class="lnr lnr-user"></span> Name</h4>
              <p>Hubert Formin</p>
              <h4><span class="lnr lnr-envelope"></span> Email</h4>
              <p>hformin@gmail.com</p>
              <h4><span class="lnr lnr-phone"></span> Phone Number</h4>
              <p>681376338</p>
                 </div>
             </div>
          </div>
         end of modal body
         <div class="hb-modal-foot col-sm-12">
             <div class="clearfix">
                 <button id="printBtn" onclick="PrintContent()" class="btn float-right"><span class="lnr lnr-printer"></span> Print</button>
                 <button class="btn float-right"><span class="lnr lnr-checkmark-circle"></span> Done</button>
             </div>
         </div>
      </div>
  </section>
-->
   </div>
</section>
<!--        -->

        <!-- Start banner Area -->
        <section class="generic-banner relative">
            <!-- Start Header Area -->
            <header class="default-header">
                <nav class="navbar navbar-expand-lg  navbar-light">
                    <div class="container">
                        <a class="navbar-brand kaushan-lg" href="index.html" style="color:#fff;">
                              SilverSlopes
                          </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="text-white lnr lnr-menu"></span>
                          </button>

                        <div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li><a href="index.html#home">Home</a></li>
                                <li><a href="index.html#service">Service</a></li>
                                <li><a href="index.html#team">team</a></li>
                                <li><a href="index.html#price">price</a></li>
                                <li><a href="index.html#contact">Contact</a></li>
                                <li><a href="join.html">Join us</a></li>
                                <!-- Dropdown -->
<!--
                                <li class="dropdown">
                                    <a class="dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                    Styles
                                  </a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="elements.html">Styles</a>
                                    </div>
                                </li>
-->
                            </ul>
                        </div>
                    </div>
                </nav>
            </header>
            <!-- End Header Area -->
            <div class="container">
                <div class="row height align-items-center justify-content-center">
                    <div class="col-lg-10">
                        <div class="generic-banner-content">
                            <h2 class="text-white kaushan-lg" style="font-size: 4em;">Hire Us</h2>
                            <h3 class="text-white">
                                <?php echo($plan); ?>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End banner Area -->

        <!-- About Generic Start -->
        <div class="main-wrapper">

            <!-- Start feature Area -->
            <section class="feature-area section-gap" id="feature">

                <div class="container">
                    <div class="row d-flex justify-content-center">
                        <div class="row form_row">
                            <form action="core/order.php" id="hireForm" method="post" name="Form" novalidate>
                            <input type="hidden" value="<?php echo($plan); ?>" name="plan">
                               <div class="tab">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h5>Full Name</h5>
                                        <input class="single-input" type="text" name="name" placeholder="Your Name" ng-model="name" required>
                                        <p class="error" ng-show="Form.name.$dirty && Form.name.$invalid">Name is required</p>
                                        <!-- -->
                                        <h5>Email</h5>
                                        <input class="single-input no-validate" type="email" ng-model="email" name="email" placeholder="Your Email" required>
                                        <p class="error" ng-show="Form.email.$dirty && Form.email.$invalid">
                                          <span ng-show="Form.email.$error.required">Email is required.</span>
                                          <span ng-show="Form.email.$error.email">Invalid email address.</span>
                                        </p>
<!--                                          femail-->
                                           <h5>what's your role?</h5>
                                            <div class="form-select" id="default-select">
                                            <select id="role" class="form-control nice-select" name="role">
                                            <option value="No record" data-display="Select Role"  selected disabled>Select Role</option>
                                            <option value="marketing coordinator">marketing coordinator</option>
                                            <option value="ceo/executive management">ceo/executive management</option>
                                            <option value="sales">sales</option>
                                            <option value="IT">IT</option>
                                            <option value="Business ownner/partner">Business ownner/partner</option>
                                            <option value="other">Other</option>
                                        </select>
                                        </div>
                                      <h5>Select Method(s) of delivery:</h5>
                                       <div class="switch-wrap d-flex justify-content-left">
                                        <div class="primary-checkbox">
                                            <input name="del_by_email" id="primary-checkbox" type="checkbox">
                                            <label for="primary-checkbox"></label>
                                        </div>
                                        <p>Get zip file by email (email required)</p>
                                    </div>
                                       <div class="switch-wrap d-flex justify-content-left">
                                        <div class="primary-checkbox">
                                            <input name="del_by_server_yes" id="yes_server" type="checkbox">
                                            <label for="yes_server"></label>
                                        </div>
                                        <p>I want it uploaded to my server, directly </p>
                                    </div>
                                       <div class="switch-wrap d-flex justify-content-left">
                                        <div class="primary-checkbox">
                                            <input name="del_by_server_no" id="no_server" type="checkbox">
                                            <label for="no_server"></label>
                                        </div>
                                        <p>I want a server and files to be uploaded directly to the server</p>
                                    </div>
<!--                                    next nice checkbox-->
                                        <h5>Additional Services:</h5>
                                       <div class="switch-wrap d-flex justify-content-left">
                                        <div class="primary-checkbox">
                                            <input name="add_serv_analy" id="nav_analy" type="checkbox">
                                            <label for="nav_analy"></label>
                                        </div>
                                        <p>Analytics</p>
                                    </div>
                                       <div class="switch-wrap d-flex justify-content-left">
                                        <div class="primary-checkbox">
                                            <input name="add_serv_seo" id="nav_SEO" type="checkbox">
                                            <label for="nav_SEO"></label>
                                        </div>
                                        <p>SEO</p>
                                    </div>
                                       <div class="switch-wrap d-flex justify-content-left">
                                        <div class="primary-checkbox">
                                            <input name="add_serv_video" id="nav_video" type="checkbox">
                                            <label for="nav_video"></label>
                                        </div>
                                        <p>Video</p>
                                    </div>
                                    </div>
<!--                                    second tab-->
                                    <div class="col-sm-6">
                                        <h5>Mobile Number ( ONLY CAMEROONIAN )</h5>
                                        <input class="single-input" type="text" name="num" placeholder="Your Number (237 6 .. )" ng-model="num" required num-valid>
                                        <p class="error" ng-show="Form.num.$dirty && Form.num.$invalid">Invalid Phone Number</p>
                                        <h5>Type of Website</h5>
                                        <div class="form-select" id="default-select">
                                            <select class="nice-select" id="type" class="form-control" name="type" required="">
                                             <option value="No record" data-display="Select type of website" selected disabled>Type of Website you need</option>
                                             <option value="Personal">Personal</option>
                                             <option value="Review">Review</option>
                                             <option value="Educational">Educational</option>
                                             <option value="Resturant">Restaurant</option>
                                             <option value="sports">Sports</option>
                                             <option value="other">Other</option>
                                            </select>
                                        </div>
                                        <h5>Location</h5>
                                        <div class="form-select" id="default-select">
                                            <select name="location" class="nice-select" required>
                                                <option value="No record" data-display="Select Region" selected="selected" disabled="disabled">Region</option>
                                                <option>Adamawa</option>
                                                <option>Far North</option>
                                                <option>North</option>
                                                <option>East</option>
                                                <option>West</option>
                                                <option>Centre</option>
                                                <option>South West</option>
                                                <option>North West</option>
                                                <option>South</option>
                                                <option>Littoral</option>
                                            </select>
                                        </div>
                                        <h5>Select Items for Navigation Bar:</h5>
                                       <div class="switch-wrap d-flex justify-content-left">
                                        <div class="primary-checkbox">
                                            <input name="nav_items_about" id="nav_about" type="checkbox">
                                            <label for="nav_about"></label>
                                        </div>
                                        <p>About</p>
                                    </div>
                                       <div class="switch-wrap d-flex justify-content-left">
                                        <div class="primary-checkbox">
                                            <input name="nav_items_faq" id="nav_FAQ" type="checkbox">
                                            <label for="nav_FAQ"></label>
                                        </div>
                                        <p>FAQ</p>
                                    </div>
                                       <div class="switch-wrap d-flex justify-content-left">
                                        <div class="primary-checkbox">
                                            <input  name="nav_items_forum" id="nav_forum" type="checkbox">
                                            <label for="nav_forum"></label>
                                        </div>
                                        <p>Forum</p>
                                    </div>
                                    <div class="switch-wrap d-flex justify-content-left">
                                        <div class="primary-checkbox">
                                            <input name="nav_items_blog" id="nav_blog" type="checkbox">
                                            <label for="nav_blog"></label>
                                        </div>
                                        <p>Blog</p>
                                    </div>
                                    <div class="switch-wrap d-flex justify-content-left">
                                        <div class="primary-checkbox">
                                            <input  name="nav_items_pricing" id="nav_pricing" type="checkbox">
                                            <label for="nav_pricing"></label>
                                        </div>
                                        <p>Pricing</p>
                                    </div>
                                    <h5>More Items</h5>
                                        <textarea  name="nav_items_more" class="single-textarea" placeholder="Add more items to Navbar."></textarea>
                                    </div>
                                </div>

<!--                                       -->
                                        <h5>Little Description of what you want</h5>
                                        <textarea required name="desc" class="single-textarea" cols="40" rows="4" ng-model="desc" placeholder="Little Description.."></textarea>
                                        <p class="error" ng-show="Form.desc.$dirty && Form.desc.$invalid">A little description please</p>

                                </div> <!--end of first tab -->
                                <div class="clearfix">
                                    <button id="nextBtn" type="submit" class="float-right primary-btn mt-20 text-uppercase" style="width:auto;" ng-disabled="!Form.$dirty && Form.name.$invalid || Form.email.$invalid || Form.num.$invalid || Form.desc.$invalid">Hire<span class="lnr lnr-arrow-right"></span></button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </section>
        </div>
            <!-- End feature Area -->

            <!-- start footer Area -->
            <footer class="footer-area section-gap">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4  col-md-6 col-sm-6">
                            <div class="single-footer-widget">
                                <h6>About Us</h6>
                                <p>
                                    SilverSlopes is a web design organisation, created by Formin Hubert and Jingo Famous to help most Cameroonians setup websites for themselves and their businessess, at very cheap rates.
                                </p>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                <p class="footer-text">Copyright &copy;
                                    <script>
                                        document.write(new Date().getFullYear());

                                    </script> All rights reserved SilverSlopes</p>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </div>
                        </div>
                        <div class="col-lg-5  col-md-6 col-sm-6">
                            <div class="single-footer-widget">
                                <h6>Newsletter</h6>
                                <p>Stay update with our latest</p>
                                <div class="" id="mc_embed_signup">

                                    <form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="form-inline">

                                        <div class="d-flex flex-row">

                                            <input class="form-control" name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '" required="" type="email">


                                            <button class="click-btn btn btn-default"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
                                            <div style="position: absolute; left: -5000px;">
                                                <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="No record" type="text">
                                            </div>

                                            <!-- <div class="col-lg-4 col-md-4">
                                                <button class="bb-btn btn"><span class="lnr lnr-arrow-right"></span></button>
                                            </div>  -->
                                        </div>
                                        <div class="info"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="single-footer-widget">
                                <h6>Follow Us</h6>
                                <p>Let us be social</p>
                                <div class="footer-social d-flex align-items-center">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-dribbble"></i></a>
                                    <a href="#"><i class="fa fa-behance"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- End footer Area -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
            <script src="js/vendor/bootstrap.min.js"></script>
            <script src="js/jquery.ajaxchimp.min.js"></script>
            <script src="js/jquery.sticky.js"></script>
            <script src="js/owl.carousel.min.js"></script>
            <script src="js/jquery.nice-select.min.js"></script>
            <script src="js/jquery.magnific-popup.min.js"></script>
            <script src="js/jquery.DonutWidget.min.js"></script>
            <script src="js/hire.js"></script>
            <script src="js/main.js"></script>
    </body>

    </html>
