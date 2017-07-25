<!DOCTYPE html>

<?php include('includes/eventsdata.php'); ?>

<html lang="en">

    <head>
        <?php include('includes/head.php'); ?>

        <title>Barry Tourist Railway</title>

        <!-- FOR OWL CAROUSEL -->
        <!--
        <link rel="stylesheet" href="owl-carousel/owl.carousel.css">
        <link rel="stylesheet" href="owl-carousel/owl.theme.css">
        <link rel="stylesheet" href="owl-carousel/owl.transitions.css">
        -->

        <script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
        <!-- <script type="text/javascript" src="js/modernizr-2.8.3.min.js"></script> -->
    </head>

    <body>
        <?php
          switch($_SERVER['SERVER_NAME'])
          {
              case 'barrytouristrailway.co.uk':
              case 'www.barrytouristrailway.co.uk':
                include('includes/google-tag.php');
              break;
          }
        ?>

        <!--HEADER-->
        <div id="headerHome">
            <?php include('includes/header.php'); ?>
        </div>
        <!--HEADER-->

        <!--MAIN CONTENT-->
        <div class="content" id="homePage">

            <div class="container">
                <div class="homeLinks">
                    <a href="about.php"><img src="images/about-the-railway.jpg" alt=""/></a>
                    <a href="http://www.flickr.com/photos/barrytouristrailway/" target="_blank"><img src="images/view-the-gallery.jpg" alt=""/></a>
                    <a href="news.php"><img src="images/read-the-news.jpg" alt=""/></a>
                    <a href="train-services.php"><img src="images/take-the-train.jpg" alt="" id="end"/></a>
                </div>
            </div>

       <div class="hrr" style="margin-top:30px;margin-bottom:30px;"></div>
<!--
            <div class="container">
            <h1>What&#39;s On?</h1>

                <h4 style="border:none;margin-bottom:0;">June 20<sup>th</sup> &amp; 21<sup>st</sup> - Barry Wartime Weekend</h4>

                <p>Over the weekend of June 20<sup>th</sup> &amp; 21<sup>st</sup>, we at the Barry Tourist Railway have our biggest event of the year.</p>

                <p>We have booked the <b>Red Arrows</b> on the Saturday (at 12:00) and a Battle of Britain Memorial fly-past on the Sunday.</p>

               <p>We will be running Class 73 electro-diesel, 73118, with our Gatwick Express push pull set, with an extra coach this year! There will be a continuous shuttle service from the Waterfront Station at Hood Road Barry to Barry Island Station departing every 15 minutes from 09:15hrs until 12:00hrs (this being the last train to get you to Barry Island in time to see the <b>Red Arrows</b> whose display starts <b>12:00hrs</b>).</p> -->

                <!-- <div id="owl-demo" class="owl-carousel owl-theme"> -->
<!--                     <div class="item flow">
                        <img src="images/red_arrows.jpg" alt="">
                    </div> -->
<!--                     <div class="item">
                        <img src="images/met_1_tank_loco.jpg" alt="">
                    </div> -->
                <!-- </div> -->

<!--                 <p>If you&#39;re planning to come to our event and to see the Red Arrows, we recommend that you come to the Waterfront site and park at the car park there or the overflow car park at the nearby Innovation Quarter and catch the shuttle train. The only road to the Island, Harbour Road is likely to be jammed. <b>Park and Ride on the train costs &#163;5 for a car with up to 5 passengers and &#163;10 for a car &#47; MPV with 6 - 10 passengers</b>... not much more than the car parking charge at the car parks on the Island.</p>

                <p>The next service after the Red Arrows display from Barry Island will depart at 12:50hrs and arrive at the Waterfront at 12:55hrs. The shuttle service will then recommence from the Waterfront to Barry Island at 13:00hrs with a 15 minute shuttle service to&#47;from the Island, which will operate until the last train - the 16:15hrs departure from Barry Island to the Waterfront.</p>

                <p>For more information, you can also visit the <b>Barry at War Group</b>&#39;s website <a href="http://www.barryatwar.info/wartime-weekend">www.barryatwar.info/wartime-weekend</a> and of course, our <a href="train-services.php">TRAIN SERVICES</a> and <a href="events.php">EVENTS</a> pages.</p>
            </div> -->

            <!-- <div class="hrr" style="margin-top:40px;margin-bottom:40px;"></div> -->

            <div class="container" style="padding-top: 60px;">
            <h1>Coming Up for <?= date("Y"); ?>...</h1>

                <?php
                  $itemCounter = 0;
                  foreach ($events as $key => $value) {
                    $eventend = strtotime($key)+86399; /* Last date of event (which is 1 second into that date i.e. on the MORNING of the date) plus 23 hours 59 minutes to make it the end of that day */
                    if (($now <= $eventend) && ($itemCounter < 3)) { /* Limit to only next 3 events */
                      $itemCounter++;
                      $eventid = 'event'.$itemCounter; ?>

                        <!--START EVENT -->
                        <div id="<?= htmlentities($eventid) ?>">
                            <div class="home_event">
                                <div class="grid_4_r">
                                    <div class="on_now_img">
                                        <!-- EVENT IMAGE --> <img src="images/<?= htmlentities($value['eventimage']) ?>" alt=""/>
                                    </div>
                                </div>
                                <div class="grid_8">
                                    <!-- EVENT TITLE --> <h3><?= htmlentities($value['eventtitle']) ?></h3>
                                    <br style="clear:left;"/>
                                    <div class="eventDate">
                                        <img src="images/clock.png" alt=""/>
                                         <!-- EVENT DATE --> <p><?= htmlentities($value['eventdate']) ?></p>
                                        <br style="clear:left;"/>
                                    </div>
                                    <br style="clear:left;"/>
                                    <!-- EVENT CONTENT --> <p><?= nl2br(htmlentities($value['eventcontent'])) ?></p>
                                </div>
                                <br style="clear:left;"/>&nbsp;
                            </div>
                        </div>
                        <!--END EVENT -->

                  <?php } } while ($itemCounter < 3) {
                    $itemCounter++;
                    $eventid = 'event'.$itemCounter; ?>

                      <!--START EVENT -->
                      <div id="<?= htmlentities($eventid) ?>">
                          <div class="home_event">
                              <p>There are no more events scheduled.</p>
                              <br>
                              <br>
                              <br>
                              <br>
                              <br>
                              <br>
                              <br>
                              <br>
                              <br>
                              <br style="clear:left;"/>&nbsp;
                          </div>
                      </div>
                      <!--END EVENT -->
                  <?php } ?>

               <!--EVENT NAVIGATION-->
                <div class="right">
                    <div   id="tab1" class="event_nav_1_active">
                       <a href="Javascript:void(0);" onclick="one()">&nbsp;</a>
                    </div>
                    <div  id="tab2" class="event_nav_2">
                        <a href="Javascript:void(0);" onclick="two();">&nbsp;</a>
                    </div>
                    <div  id="tab3" class="event_nav_3">
                        <a href="Javascript:void(0);" onclick="three();">&nbsp;</a>
                    </div>

                    <br style="clear:left;"/>
                    <div class="viewAllEvents">
                        <a href="events.php">VIEW ALL EVENTS</a>
                    </div>
                </div>
                <br style="clear:right;"/>
                <!--END EVENT NAVIGATION-->

            <!-- <div class="hrr" style="margin-top:40px;margin-bottom:40px;"></div> -->


                <!-- LATEST NEWS ITEM -->
                <?php foreach ($news as $key => $value) {
                  $releasedate = strtotime($key);
                  if (($now >= $releasedate) && ($now < $releasedate+1209600)) { /* Release date plus 2 weeks 60*60*24*14 */ ?>

                    <h1>Latest News</h1>

                    <div class="news-item-row">
                        <div class="newsimg">
                            <div class="newsDate">
                                <p> <?= htmlentities($value['newsday']) ?> <span><?= htmlentities($value['newsmonth']) ?></span></p>
                            </div>
                            <img src="images/<?= htmlentities($value['newsimage']) ?>" alt=""/>
                        </div>
                        <div class="grid_8">
                            <h2><?= htmlentities($value['newstitle']) ?></h2>

                            <div class="container img-center">
                                <img src="images/<?= htmlentities($value['newsimage']) ?>" alt="The Red Arrows">
                            </div>

                            <p><?= nl2br(htmlentities($value['newscontent'])) ?></p>
                        </div>

                        <br style="clear:left;"/>&nbsp;
                    </div>
                <?php break; } } ?>
                <!-- END LATEST NEWS ITEM -->

<!--                 <div class="homeLinks">
                    <a href="about.php"><img src="images/about-the-railway.jpg" alt=""/></a>
                    <a href="http://www.flickr.com/photos/barrytouristrailway/" target="_blank"><img src="images/view-the-gallery.jpg" alt=""/></a>
                    <a href="news.php"><img src="images/read-the-news.jpg" alt=""/></a>
                    <a href="train-services.php"><img src="images/take-the-train.jpg" alt="" id="end"/></a>
                </div> -->
            </div>
        </div>
        <!--END MAIN CONTENT-->

        <!--FOOTER-->
        <div id="footer">
            <?php include('includes/footer.php'); ?>
        </div>
        <!--FOOTER-->


<!-- NON-BLOCKING RESOURCES -->

<script type="text/javascript">
function one() {
    "use strict";
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

function two() {
    "use strict";
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

function three() {
    "use strict";
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
</script>

<!-- <script src="owl-carousel/owl.carousel.js"></script>

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
</script> -->

    </body>
</html>
