<!DOCTYPE html> <?php include('includes/eventsdata.php'); ?> <html lang="en"><head> <?php include('includes/head.php'); ?> <title>Barry Tourist Railway</title><script type="text/javascript" src="js/jquery-1.11.1.min.js"></script></head><body> <?php
          switch($_SERVER['SERVER_NAME'])
          {
              case 'barrytouristrailway.co.uk':
              case 'www.barrytouristrailway.co.uk':
                include('includes/google-tag.php');
              break;
          }
        ?> <div id="headerHome"> <?php include('includes/header.php'); ?> </div><div class="content" id="homePage"><div class="container"><div class="homeLinks"><a href="about.php"><img src="images/about-the-railway.jpg" alt=""></a><a href="http://www.flickr.com/photos/barrytouristrailway/" target="_blank"><img src="images/view-the-gallery.jpg" alt=""></a><a href="news.php"><img src="images/read-the-news.jpg" alt=""></a><a href="train-services.php"><img src="images/take-the-train.jpg" alt="" id="end"></a></div></div><div class="hrr" style="margin-top:30px;margin-bottom:30px"></div><div class="container" style="padding-top: 60px"><h1>Coming Up for <?= date("Y"); ?>...</h1> <?php
                  $itemCounter = 0;
                  foreach ($events as $key => $value) {
                    $eventend = strtotime($key)+86399; 
                    if (($now <= $eventend) && ($itemCounter < 3)) { 
                      $itemCounter++;
                      $eventid = 'event'.$itemCounter; ?> <div id="<?= htmlentities($eventid) ?>"><div class="home_event"><div class="grid_4_r"><div class="on_now_img"><img src="images/<?= htmlentities($value['eventimage']) ?>" alt=""></div></div><div class="grid_8"><h3><?= htmlentities($value['eventtitle']) ?></h3><br style="clear:left"><div class="eventDate"><img src="images/clock.png" alt=""><p><?= htmlentities($value['eventdate']) ?></p><br style="clear:left"></div><br style="clear:left"><p><?= nl2br(htmlentities($value['eventcontent'])) ?></p></div><br style="clear:left">&nbsp;</div></div> <?php } } while ($itemCounter < 3) {
                    $itemCounter++;
                    $eventid = 'event'.$itemCounter; ?> <div id="<?= htmlentities($eventid) ?>"><div class="home_event"><p>There are no more events scheduled.</p><br><br><br><br><br><br><br><br><br><br style="clear:left">&nbsp;</div></div> <?php } ?> <div class="right"><div id="tab1" class="event_nav_1_active"><a href="Javascript:void(0);" onclick="one()">&nbsp;</a></div><div id="tab2" class="event_nav_2"><a href="Javascript:void(0);" onclick="two()">&nbsp;</a></div><div id="tab3" class="event_nav_3"><a href="Javascript:void(0);" onclick="three()">&nbsp;</a></div><br style="clear:left"><div class="viewAllEvents"><a href="events.php">VIEW ALL EVENTS</a></div></div><br style="clear:right"> <?php foreach ($news as $key => $value) {
                  $releasedate = strtotime($key);
                  if (($now >= $releasedate) && ($now < $releasedate+604800)) {  ?> <h1>Latest News</h1><div class="news-item-row"><div class="newsimg"><div class="newsDate"><p> <?= htmlentities($value['newsday']) ?> <span><?= htmlentities($value['newsmonth']) ?></span></p></div><img src="images/<?= htmlentities($value['newsimage']) ?>" alt=""></div><div class="grid_8"><h2><?= htmlentities($value['newstitle']) ?></h2><p><?= nl2br(htmlentities($value['newscontent'])) ?></p></div><br style="clear:left">&nbsp;</div> <?php break; } } ?> </div></div><div id="footer"> <?php include('includes/footer.php'); ?> </div><script type="text/javascript">function one() {
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
}</script></body></html>