<!DOCTYPE html> 
<?php
    require_once('function/db_connect.php');
    $parameter = $db->getOne('parameter');
    $db->disconnect();
    $db->where ('isDeleted', '0');
    $teams = $db->get('team');
    $db->disconnect();
    $db->where ('isDeleted', '0');
    $carousel = $db->get('carousel');
    $db->disconnect();
    
?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>WASTETIZEN</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta content="" name="description">
        <meta content="" name="author">
        <link rel="shortcut icon" href="images/favicon.png">
        <!-- START CSS STYLE  -->
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Quattrocento" />
        <link href="css/bootstrap.min.css" rel="stylesheet">
        
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="css/animate.css" rel="stylesheet">
        <link rel="stylesheet" href="css/popup.css" media="screen">
        <link href="css/style.css" rel="stylesheet">
        <link href="css/color/default.css" id="theme" rel="stylesheet">
        <link href="css/style-responsive.css" rel="stylesheet">
        <!--  END CSS STYLE  -->
    </head>
    <body data-spy="scroll" data-target="#header-navbar" data-offset="51">
        <!-- start main-container -->
        <div id="main-container" class="fade">
            <!-- start header -->
            <div id="header" class="header navbar navbar-fixed-top">
                <!-- start container -->
                <div class="container">
                    <!-- start navbar-header -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#header-navbar">
                            <i class="fa fa-bars"></i>
                            <i class="fa fa-close"></i>
                        </button>
                        <a href="index.php" class="navbar-brand"><img src="<?php echo $parameter['logo']; ?>" alt="logo_wastetizen"></a>
                    </div>
                    <!-- end navbar-header -->
                    <!-- start navbar-collapse -->
                    <div class="collapse navbar-collapse" id="header-navbar">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="active"><a href="#home" data-click="scroll-to-target">HOME</a></li>
                            <li><a data-toggle="collapse" href="#aboutus" data-click="scroll-to-target">ABOUT</a></li>
                            <li><a href="#services" data-click="scroll-to-target">PRODUCT</a></li>
                            <li><a href="#ourteam" data-click="scroll-to-target">TEAM</a></li>
                            <li><a href="#blog" data-click="scroll-to-target">OUR ACTIVITIES</a></li>
                            <li><a href="#contactus" data-click="scroll-to-target">CONTACT</a></li>
                             <li><a href="https://member.wastetizen.com/index.php">LOGIN</a></li>
                             <li><a href="https://member.wastetizen.com/register.php">REGISTER</a></li>
                        </ul>
                    </div>
                    <!-- end navbar-collapse -->
                </div>
                <!-- end container -->
            </div>
            <!-- end header -->
            <!-- start home -->
            <div  class="content bg home parallax1" style="height:0;padding-bottom:0">
                <!-- start container -->
            <!--    <div class="container banner-content">-->
            <!--        <h1>NEMA</h1>-->
            <!--        <h3>Responsive <span class="text-color">One Page</span> HTML Template</h3>-->
            <!--        <a href="#aboutus" data-click="scroll-to-target" class="btn btn-theme">Learn more</a>-->
            <!--        <a href="#contactus" data-click="scroll-to-target" class="btn btn-outline">Contact Us</a><br>-->
            <!--    </div>-->
                <!-- end container -->
            <!--    <a href="#aboutus" data-click="scroll-to-target">-->
            <!--        <div class="button-scroll" data-scroll-nav="1"><span><i class="fa fa-angle-down"></i></span></div>-->
            <!--    </a>-->
            </div>
            <!-- end home -->
              <!-- start services -->
            <div id="home" class="content" data-scrollview="true">
                <div class="light-wrapper">
                    <div class="container" data-animation="true" data-animation-type="fadeInDown">
                        <h2 class="content-heading" data-animation="true" data-animation-type="fadeInDown"><span class="title-color">WASTETIZEN</h2>
                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
       <?php
       $x=0;
          foreach ($carousel as $slide) { 
      ?>
    <li data-target="#myCarousel" data-slide-to="<?php echo $x ?>" 
    <?php if($x==0){
     echo 'class="active"';
}
?>></li>
    <?php
    $x++;
          }
    ?>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
      <?php
          foreach ($carousel as $slide) { 
      ?>
    <div class="<?php echo $slide['class'] ?>">
      <img src="<?php echo $slide['image'] ?>" alt="<?php echo $slide['alt'] ?>">
    </div>
    <?php
          }
    ?>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
                        <!--end row --> 
                    </div>
                    <!-- enf container --> 
                </div>
                <!-- end light-wrapper -->
            </div>
            <!-- end services -->
            <!-- start aboutus -->
            <div id="aboutus" class="about" data-scrollview="true">
                <!-- start container -->
                <div class="container content" data-animation="true" data-animation-type="fadeInDown">
                    <h2 class="content-heading" data-animation="true" data-animation-type="fadeInDown"><span class="title-color">ABOUT</span> US</h2>
                    <div class="divider text-center">
                        <span class="outer-line"></span>
                        <span class="fa fa-user" aria-hidden="true"></span>
                        <span class="outer-line"></span>
                    </div>
                </div>
                <div class="about-bg content bg parallax2">
                    <div class="white_overlay_right"></div>
                    <div class="container">
                        <!-- start row -->
                        <div class="row no-padding">
                            <!-- strart col-6 -->
                            <div class="col-md-6 col-sm-6 col-md-offset-6 col-sm-offset-6 no-padding" data-animation="true" data-animation-type="fadeInLeft">
                                <!-- start about -->
                                <div class="aboutus">
                                   <?php
                                    echo $parameter['about'];
                                   ?>
                                </div>
                                <!-- end about -->
                            </div>
                            <!-- end col-6 -->
                        </div>
                        <!-- end row -->
                    </div>
                </div>
            </div>
            <!-- end about -->
            <!-- start services -->
            <div id="services" class="content" data-scrollview="true">
                <div class="light-wrapper">
                    <div class="container" data-animation="true" data-animation-type="fadeInDown">
                        <h2 class="content-heading" data-animation="true" data-animation-type="fadeInDown"><span class="title-color">PRODUCT</span> KNOWLEDGE</h2>
                        <div class="divider text-center">
                            <span class="outer-line"></span>
                            <span class="fa fa-cogs" aria-hidden="true"></span>
                            <span class="outer-line"></span>
                        </div>
                        <p class="content-desc" data-animation="true" data-animation-type="fadeInDown">
                           <?php 
                            echo $parameter['product_knowledge'];
                           ?>
                        </p>
                        <div class="row">
                            <!-- start service item -->
                            <div class="col-md-6 col-sm-6 space-20" >
                                <div class="service-item-box text-center">
                                    <?php echo $parameter['daily'];?>
                                </div>						
                            </div> 
                            <!-- end service item -->
                            <!-- start service item -->
                            <div class="col-md-6 col-sm-6 space-20" >
                                <div class="service-item-box text-center">
                                   <?php echo $parameter['monthly'];?>			
                                </div>						
                            </div> 
                            <!-- end service item -->
                          
                        </div>
                        <!--end row --> 
                    </div>
                    <!-- enf container --> 
                </div>
                <!-- end light-wrapper -->
            </div>
            <!-- end services -->
          
            <!-- start our team -->
            <div id="ourteam" class="content" data-scrollview="true">
                <!-- start container -->
                <div class="container">
                    <h2 class="content-heading" data-animation="true" data-animation-type="fadeInDown"><span class="title-color">OUR</span> TEAM</h2>
                    <div class="divider text-center">
                        <span class="outer-line"></span>
                        <span class="fa fa-users" aria-hidden="true"></span>
                        <span class="outer-line"></span>
                    </div>
                    <p class="content-desc" data-animation="true" data-animation-type="fadeInDown">
                        <?php
                        echo $parameter['our_team'];
                        ?>
                    </p>
                    <!-- start row -->
                    <div class="row">
                        <?php
                            foreach($teams as $team){
                        ?>
                        <!-- start col-4 -->
                        <div class="col-md-4 col-sm-4">
                            <!-- start team -->
                            <div class="ourteam">
                                <div class="image" data-animation="true" data-animation-type="rotateIn">
                                    <img src="images/team/user1.jpg" alt="John Doe">
                                </div>
                                <div class="info">
                                    <h3 class="name"><?php echo $team['name'];?></h3>
                                    <div class="title text-theme"><?php echo $team['job'];?></div>
                                    <p>
                                       <?php echo $team['description'];?>
                                    </p>
                                    <div class="social">
                                        <a class="facebook" href="<?php echo $team['fb'];?>"><i class="fa fa-facebook fa-lg fa-fw"></i></a>
                                        <a class="twitter" href="<?php echo $team['twitter'];?>"><i class="fa fa-twitter fa-lg fa-fw"></i></a>
                                        <a class="googleplus" href="<?php echo $team['gplus'];?>"><i class="fa fa-google-plus fa-lg fa-fw"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- end team -->
                        </div>
                        <!-- end col-4 -->
                       
                            <?php
                                }   
                            ?>
                       
                    </div>
                    <!-- end row -->
                </div>
                <!-- end container -->
            </div>
            <!-- end our team -->
            <!-- start counters -->
            <div id="counters" class="content bg parallax5" data-scrollview="true">
                <!-- start container -->
                <div class="container">
                    <!-- start row -->
                    <div class="row">
                        <!-- start col-3 -->
                        <div class="col-md-4 col-sm-3 counters-col">
                            <div class="counters">
                                <div class="icons"><i class="fa fa-user"></i></div>
                                <div class="number" data-animation="true" data-animation-type="number" data-final-number="550" >550</div>
                                <div class="title">Carbon Footage</div>
                            </div>
                        </div>
                        <!-- end col-3 -->
                        <!-- start col-3 -->
                        <div class="col-md-4 col-sm-3 counters-col">
                            <div class="counters">
                                <div class="icons"><i class="fa fa-shopping-bag"></i></div>
                                <div class="number" data-animation="true" data-animation-type="number" data-final-number="850">850</div>
                                <div class="title">Orang Bergabung</div>
                            </div>
                        </div>
                        <!-- end col-3 -->
                        <!-- start col-3 -->
                        <div class="col-md-4 col-sm-3 counters-col">
                            <div class="counters">
                                <div class="icons"><i class="fa fa-clock-o"></i></div>
                                <div class="number" data-animation="true" data-animation-type="number" data-final-number="1605">1605</div>
                                <div class="title">Manggrove ditanam</div>
                            </div>
                        </div>
                        <!-- end col-3 -->
                    </div>
                    <!-- end row -->
                </div>
                <!-- end container -->
            </div>
            <!-- end counters -->
          
            <!-- start blogs -->
            <div id="blog" class="content" data-scrollview="true">
                <!-- start container -->
                <div class="container" data-animation="true" data-animation-type="fadeInUp">
                    <h2 class="content-heading" data-animation="true" data-animation-type="fadeInDown"><span class="title-color">Our</span> Activity</h2>
                    <div class="divider text-center">
                        <span class="outer-line"></span>
                        <span class="fa fa-comment" aria-hidden="true"></span>
                        <span class="outer-line"></span>
                    </div>
                    <p class="content-desc" data-animation="true" data-animation-type="fadeInDown">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum consectetur eros dolor,<br>
                        sed bibendum turpis luctus eget
                    </p>
                    <!-- start row -->
                    <div class="row">
                        <div id="blog_posts" class="blog_posts carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="item active">
                                    <div class="col-md-4 col-sm-4">
                                        <a href="blog.html" class="thumbnail">
                                            <img src="images/blog/blog1.jpg" alt="">
                                            <div class="caption">
                                                <h3>Post title</h3>
                                                <div class="date-rating">
                                                    <i class="fa fa-calendar"></i> &nbsp; 18/01/2017
                                                    <span><i class="fa fa-heart"></i> &nbsp; 53</span>
                                                </div>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti,
                                                    illum voluptates
                                                    consectetur consequatur ducimus. Necessitatibus, nobis consequatur hic
                                                    eaque laborum
                                                    laudantium. Adipisci, explicabo, asperiores molestias deleniti unde
                                                    dolore enim
                                                    quas.
                                                </p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4 col-sm-4">
                                        <a href="blog.html" class="thumbnail">
                                            <img src="images/blog/blog2.jpg" alt="">
                                            <div class="caption">
                                                <h3>Post title</h3>
                                                <div class="date-rating">
                                                    <i class="fa fa-calendar"></i> &nbsp; 18/01/2017
                                                    <span><i class="fa fa-heart"></i> &nbsp; 53</span>
                                                </div>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti,
                                                    illum voluptates
                                                    consectetur consequatur ducimus. Necessitatibus, nobis consequatur hic
                                                    eaque laborum
                                                    laudantium. Adipisci, explicabo, asperiores molestias deleniti unde
                                                    dolore enim
                                                    quas.
                                                </p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4 col-sm-4">
                                        <a href="blog.html" class="thumbnail">
                                            <img src="images/blog/blog3.jpg" alt="">
                                            <div class="caption">
                                                <h3>Post title</h3>
                                                <div class="date-rating">
                                                    <i class="fa fa-calendar"></i> &nbsp; 18/01/2017
                                                    <span><i class="fa fa-heart"></i> &nbsp; 53</span>
                                                </div>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti,
                                                    illum voluptates
                                                    consectetur consequatur ducimus. Necessitatibus, nobis consequatur hic
                                                    eaque laborum
                                                    laudantium. Adipisci, explicabo, asperiores molestias deleniti unde
                                                    dolore enim
                                                    quas.
                                                </p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="col-md-4 col-sm-4">
                                        <a href="blog.html" class="thumbnail">
                                            <img src="images/blog/blog4.jpg" alt="">
                                            <div class="caption">
                                                <h3>Post title</h3>
                                                <div class="date-rating">
                                                    <i class="fa fa-calendar"></i> &nbsp; 18/01/2017
                                                    <span><i class="fa fa-heart"></i> &nbsp; 53</span>
                                                </div>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti,
                                                    illum voluptates
                                                    consectetur consequatur ducimus. Necessitatibus, nobis consequatur hic
                                                    eaque laborum
                                                    laudantium. Adipisci, explicabo, asperiores molestias deleniti unde
                                                    dolore enim
                                                    quas.
                                                </p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4 col-sm-4">
                                        <a href="blog.html" class="thumbnail">
                                            <img src="images/blog/blog5.jpg" alt="">
                                            <div class="caption">
                                                <h3>Post title</h3>
                                                <div class="date-rating">
                                                    <i class="fa fa-calendar"></i> &nbsp; 18/01/2017
                                                    <span><i class="fa fa-heart"></i> &nbsp; 53</span>
                                                </div>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti,
                                                    illum voluptates
                                                    consectetur consequatur ducimus. Necessitatibus, nobis consequatur hic
                                                    eaque laborum
                                                    laudantium. Adipisci, explicabo, asperiores molestias deleniti unde
                                                    dolore enim
                                                    quas.
                                                </p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4 col-sm-4">
                                        <a href="blog.html" class="thumbnail">
                                            <img src="images/blog/blog6.jpg" alt="">
                                            <div class="caption">
                                                <h3>Post title</h3>
                                                <div class="date-rating">
                                                    <i class="fa fa-calendar"></i> &nbsp; 18/01/2017
                                                    <span><i class="fa fa-heart"></i> &nbsp; 53</span>
                                                </div>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti,
                                                    illum voluptates
                                                    consectetur consequatur ducimus. Necessitatibus, nobis consequatur hic
                                                    eaque laborum
                                                    laudantium. Adipisci, explicabo, asperiores molestias deleniti unde
                                                    dolore enim
                                                    quas.
                                                </p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="col-md-4 col-sm-4">
                                        <a href="blog.html" class="thumbnail">
                                            <img src="images/blog/blog7.jpg" alt="">
                                            <div class="caption">
                                                <h3>Post title</h3>
                                                <div class="date-rating">
                                                    <i class="fa fa-calendar"></i> &nbsp; 18/01/2017
                                                    <span><i class="fa fa-heart"></i> &nbsp; 53</span>
                                                </div>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti,
                                                    illum voluptates
                                                    consectetur consequatur ducimus. Necessitatibus, nobis consequatur hic
                                                    eaque laborum
                                                    laudantium. Adipisci, explicabo, asperiores molestias deleniti unde
                                                    dolore enim
                                                    quas.
                                                </p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4 col-sm-4">
                                        <a href="blog.html" class="thumbnail">
                                            <img src="images/blog/blog8.jpg" alt="">
                                            <div class="caption">
                                                <h3>Post title</h3>
                                                <div class="date-rating">
                                                    <i class="fa fa-calendar"></i> &nbsp; 18/01/2017
                                                    <span><i class="fa fa-heart"></i> &nbsp; 53</span>
                                                </div>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti,
                                                    illum voluptates
                                                    consectetur consequatur ducimus. Necessitatibus, nobis consequatur hic
                                                    eaque laborum
                                                    laudantium. Adipisci, explicabo, asperiores molestias deleniti unde
                                                    dolore enim
                                                    quas.
                                                </p>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4 col-sm-4">
                                        <a href="blog.html" class="thumbnail">
                                            <img src="images/blog/blog9.jpg" alt="">
                                            <div class="caption">
                                                <h3>Post title</h3>
                                                <div class="date-rating">
                                                    <i class="fa fa-calendar"></i> &nbsp; 18/01/2017
                                                    <span><i class="fa fa-heart"></i> &nbsp; 53</span>
                                                </div>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti,
                                                    illum voluptates
                                                    consectetur consequatur ducimus. Necessitatibus, nobis consequatur hic
                                                    eaque laborum
                                                    laudantium. Adipisci, explicabo, asperiores molestias deleniti unde
                                                    dolore enim
                                                    quas.
                                                </p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- start carousel-indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#blog_posts" data-slide-to="0" class="active"></li>
                                <li data-target="#blog_posts" data-slide-to="1" class=""></li>
                                <li data-target="#blog_posts" data-slide-to="2" class=""></li>
                            </ol>
                            <!-- end carousel-indicators -->
                        </div>
                    </div>
                    <!-- end row -->
                </div>
                <!-- end container -->
            </div>
            <!-- end blogs -->
            <!-- start contact -->
            <div id="contactus" class="contactus content" data-scrollview="true">
                <div class="container" data-animation="true" data-animation-type="fadeInUp">
                    <h2 class="content-heading" data-animation="true" data-animation-type="fadeInDown"><span class="title-color">CONTACT</span> US</h2>
                    <div class="divider text-center">
                        <span class="outer-line"></span>
                        <span class="fa fa-envelope" aria-hidden="true"></span>
                        <span class="outer-line"></span>
                    </div>
                    <p class="content-desc" data-animation="true" data-animation-type="fadeInDown">
                        <?php echo $parameter['contact_us'];?>
                    </p>
                </div>
                <div id="contactmap" style="width: 100%; height: 400px;"></div>
                <!-- start container -->
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <ul class="contact-info list-inline text-center">
                                <li>
                                    <i class="fa fa-map-marker"></i>
                                    <p>
                                       <?php echo $parameter['address'] ?>
                                    </p>
                                </li>
                                <li>
                                    <i class="fa fa-envelope"></i>
                                    <p>
                                        <a href="mailto:<?php echo $parameter['email'] ?>" class="nocolor"><?php echo $parameter['email'] ?></a>
                                    </p>
                                </li>
                                <li>
                                    <i class="fa fa-phone"></i>
                                    <p>
                                        <?php echo $parameter['phone'] ?>
                                    </p>
                                </li>
                            </ul>
                            <div class="form-container">
                                <form name="contact-form" id="contact-form" action="javascript:void(0);" method="post">
                                    <div class="row">

                                        <div class="col-sm-12 text-center">
                                            <p class="successmsg">
                                                Mail sent successfully.
                                            </p>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-field">
                                                <label>Your name*
                                                    <input type="text" name="name" id="name" required="required">
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-field">
                                                <label>Your e-mail*
                                                    <input type="email" name="email" id="email" required="required">
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-field">
                                                <label>Subject
                                                    <input type="text" name="subject" id="subject">
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-field">
                                                <label>Your Phone
                                                    <input type="tel" name="tel" id="tel" onkeypress="return KeycheckOnlyNumeric(event);" maxlength="13" required="required">
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-field">
                                                <label>Your Message*
                                                    <textarea name="message" id="message" required></textarea>
                                                </label>
                                                <div class="text-center">
                                                    <input type="submit" name="submit_contact" id="submit_contact" class="btn" value="Send Message">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- container --> 
            </div>
            <!-- end contact -->
            <!-- start footer -->
            <div id="footer" class="footer">
                <div class="container">
                    <p class="social-list">
                        <a href="#"><i class="fa fa-facebook fa-fw"></i></a>
                        <a href="#"><i class="fa fa-instagram fa-fw"></i></a>
                        <a href="#"><i class="fa fa-twitter fa-fw"></i></a>
                        <a href="#"><i class="fa fa-google-plus fa-fw"></i></a>
                        <a href="#"><i class="fa fa-dribbble fa-fw"></i></a>
                    </p>
                    <br>
                    <p>
                        &copy; 2019 COPYRIGHT WASTETIZEN . ALL RIGHTS RESERVED
                    </p>
                </div>
            </div>
            <!-- end footer -->
            <!-- start theme-settings -->
            <div class="theme-settings">
                <a href="javascript:;" data-click="theme-settings-expand" class="theme-collapse-btn"><i class="fa fa-cog fa-spin"></i></a>
                <div class="theme-settings-content">
                    <ul class="theme-list clearfix">
                        <li><a href="javascript:void(0);" class="bg-purple" data-theme="purple"></a></li>
                        <li><a href="javascript:void(0);" class="bg-blue" data-theme="blue"></a></li>
                        <li><a href="javascript:void(0);" class="bg-orange" data-theme="orange"></a></li>
                        <li><a href="javascript:void(0);" class="bg-green" data-theme="green"></a></li>
                        <li class="active"><a href="javascript:void(0);" class="bg-pink" data-theme="default"></a></li>
                    </ul>
                </div>
            </div>
            <!-- end theme-settings -->
            <a href="javascript:void(0);" id="scroll-to-top"><i class="fa fa-arrow-up"></i></a>
        </div>
        <!-- end main-container -->
        <!-- START JS  -->
        <script src="js/jquery-1.12.4.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCZEvpuCCcKno-6SK9VektANgv4Q-3ckuA&libraries=places"></script>
        <script src="js/bootstrap.min.js"></script>
        <!--[if lt IE 9]>
        <script src="assets/crossbrowserjs/html5shiv.js"></script>
        <script src="assets/crossbrowserjs/respond.min.js"></script>
        <script src="assets/crossbrowserjs/excanvas.min.js"></script>
        <![endif]-->
        <script src="js/scroll.js"></script>
        <script src="js/popup.js"></script>
        <script src="js/map.min.js"></script>
        <script src="js/scripts.js"></script>
        <!--  END JS  -->
    </body>
</html>