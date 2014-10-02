<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href='http://fonts.googleapis.com/css?family=Gentium+Basic:400,400italic,700,700italic|PT+Sans:400,400italic,700,700italic' rel='stylesheet' type='text/css'/> 
        <link rel="stylesheet" type="text/css" href="css/grid.css" />
        <link rel="stylesheet" type="text/css" href="css/main.css" />
        <!--<link href="css/style.css" rel="stylesheet" type="text/css" />-->
        <link href="css/glyphicon.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="owl-carousel/owl.theme.min.css">
        <link rel="stylesheet" href="owl-carousel/owl.transitions.min.css">
        <link rel="stylesheet" href="font-awesome-4.2.0/css/font-awesome.min.css">
        <!--<script type="text/javascript" src="js/jquery.js"></script>-->
        <script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
        <script type="text/javascript" src="js/modernizr-2.8.3.min.js"></script>
        <title>Barry Tourist Railway</title> 
        <script type="text/javascript">
            <!--

            function one(){ 
                $('#event2').hide();
                $('#event1').show();
                $('#event3').hide();
                $("#tab1").removeClass("event_nav_1"); 
                $("#tab1").addClass("event_nav_1_active"); 
                $("#tab2").removeClass("event_nav_2_active"); 
                $("#tab2").addClass("event_nav_2"); 
                $("#tab3").removeClass("event_nav_3_active"); 
                $("#tab3").addClass("event_nav_3");
                
            } 
            function two(){ 
                $("#tab2").removeClass("event_nav_2"); 
                $("#tab2").addClass("event_nav_2_active"); 
                $("#tab1").removeClass("event_nav_1_active"); 
                $("#tab1").addClass("event_nav_1"); 
                $("#tab3").removeClass("event_nav_3_active"); 
                $("#tab3").addClass("event_nav_3");                 
                $('#event1').hide();
                $('#event2').show();
                $('#event3').hide();
            } 
            function three(){
                $("#tab3").removeClass("event_nav_3"); 
                $("#tab3").addClass("event_nav_3_active");                
                $("#tab1").removeClass("event_nav_1_active"); 
                $("#tab1").addClass("event_nav_1");                      
                $("#tab2").removeClass("event_nav_2_active"); 
                $("#tab2").addClass("event_nav_2");                
                $('#event1').hide();
                $('#event3').show();
                $('#event2').hide();
            } 
            //-->

        </script>
    </head>
    <body>
        <!--HEADER-->
        <div id="headerHome">
            <?php include('includes/header-home.php'); ?>
        </div>
        <!--HEADER-->

        <!--MAIN CONTENT-->
        <div class="content" id="homePage">

            <div class="container">
            <h1>What's On?</h1>

                <!--START EVENT 1-->
                <div id="event1">
                    <div class="home_event">
                        <div class="grid_4_r">
                            <div class="on_now_img">
                                <!--Event Image--> <img src="images/bonfire_night.jpg" alt=""/>
                            </div>
                        </div>
                        <div class="grid_8">
                            <!-- EVENT TITLE--> <h3>Bonfire Night</h3>
                            <br style="clear:left;"/>
                            <div class="eventDate">
                                <img src="images/clock.png" alt=""/>
                                 <!-- EVENT DATE--> <p>November 5th</p>
                                <br style="clear:left;"/>
                            </div>
                            <br style="clear:left;"/>
                            <!-- EVENT CONTENT--> <p>Join us to travel from Barry Waterfront to Barry Island for the annual fireworks display and avoid the hassle of taking your car across the busy causeway road.<br>
                            <br>
                            We will be running evening trains from The Waterfront Station to Barry Island for the Firework exhibition and return afterwards.</p>
                        </div>
                        <br style="clear:left;"/>&nbsp;
                    </div>
                </div>
                <!--END EVENT 1-->

                <!--START EVENT 2-->
                <div id="event2">
                    <div class="home_event">
                        <div class="grid_4_r">
                            <div class="on_now_img">
                                <!--Event Image--> <img src="images/santa_special_s.jpg" alt=""/>
                            </div>
                        </div>
                        <div class="grid_8">
                            <!-- EVENT TITLE--> <h3>Santa Special Trains</h3>
                            <br style="clear:left;"/>
                            <div class="eventDate">
                                <img src="images/clock.png" alt=""/>
                                 <!-- EVENT DATE--> <p>December 13th, 14th &amp; 20th, 21st</p>
                                <br style="clear:left;"/>
                            </div>
                            <br style="clear:left;"/>
                            <!-- EVENT CONTENT--> <p>Join Santa as we steam from Barry Island to the Waterfront.<br>
                            <br>
                            Every child receives a quality gift and adults are given a glass of hot mulled wine and a mince pie.<br>
                            <br>
                            Get into the traditional spirit of Christmas at the Barry Tourist Railway.</p>
                        </div>
                        <br style="clear:left;"/>&nbsp;
                    </div>
                </div>
                <!--END EVENT 2-->

               <!--EVENT NAVIGATION-->

                <div class="right">
                    <div   id="tab1" class="event_nav_1_active">
                       <a href="Javascript:void(0);" onclick="one()">&nbsp;</a>
                    </div>
                    <div  id="tab2" class="event_nav_2">
                        <a href="Javascript:void(0);" onclick="two();">&nbsp;</a>
                    </div>
                    <!-- <div  id="tab3" class="event_nav_3">
                        <a href="Javascript:void(0);" onclick="three();">&nbsp;</a>
                    </div> -->

                    <br style="clear:left;"/>
                    <div class="viewAllEvents">
                        <a href="events.php">VIEW ALL EVENTS</a>
                    </div>
                </div>
                <br style="clear:right;"/>

                <!--END EVENT NAVIGATION-->


                <div class="homeLinks">
                    <a href="about.php"><img src="images/about-the-railway.jpg" alt=""/></a>
                    <a href="http://www.flickr.com/photos/barrytouristrailway/" target="_blank"><img src="images/view-the-gallery.jpg" alt=""/></a>
                    <a href="news.php"><img src="images/read-the-news.jpg" alt=""/></a>
                    <a href="train-services.php"><img src="images/take-the-train.jpg" alt="" id="end"/></a>
                </div>
            </div>
        </div>


        <!--END MAIN CONTENT-->


        <!--FOOTER-->
        <div id="footer">
            <?php include('includes/footer.php'); ?>
        </div> 
        <!--FOOTER-->

        <script src="owl-carousel/owl.carousel.js"></script>

        <script>
        // Initialize and setup Owl Image Carousel 
        $(document).ready(function() {
        var owl = $("#owl-demo");

        owl.owlCarousel({
            autoPlay: 10000,
            navigation : false,
            pagination:true,
            singleItem : true,
            transitionStyle : "fade",
            });
        });
        </script>
    </body>
</html>
