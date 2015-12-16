<!DOCTYPE html>

<?php include('includes/eventsdata.php'); ?>

<html lang="en">

    <head>
        <?php include('includes/head.php'); ?>

        <title>Events</title>
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
        <div id="header">
            <?php include('includes/header.php'); ?>
        </div>
        <!--HEADER-->

        <div class="contentSub" id="eventsPage">
            <div class="container">

            <h1>2015 Events &amp; Operating Days</h1>

                <h1>Next Event</h1>

                <!-- Single next event block -->
                <?php
                $eventsRemaining = 0;
                foreach ($events as $key => $value) {
                  $eventend = strtotime($key)+86399; //Last date of event (which is 1 second into that date i.e. on the MORNING of the date) plus 23 hours 59 minutes to make it the end of that day
                  if ($now <= $eventend) {
                    $eventsRemaining++
                    ?>
                      <div class="on_now_event">
                          <div class="grid_4_r">
                              <div class="on_now_img">
                                  <div class="on_now">&nbsp;</div>
                                    <img src="images/<?= htmlentities($value['eventimage']) ?>" alt=""/>
                              </div>
                          </div>

                          <div class="grid_8">
                              <h3><?= htmlentities($value['eventtitle']) ?></h3>
                              <br style="clear:left;"/>
                              <div class="eventDate">
                                  <img src="images/clock.png" alt=""/>
                                  <p><?= htmlentities($value['eventdate']); ?></p>
                                  <br style="clear:left;"/>
                              </div>
                              <br style="clear:left;"/>
                              <p><?= nl2br(htmlentities($value['eventcontent'])) ?></p>
                          </div>
                          <br style="clear:left;"/>&nbsp;
                      </div>
                  <?php break; } }
                  if ($eventsRemaining < 1) { echo "<p>There are no events scheduled.</p><br><br>"; } ?>
                  <!-- End Single next event block -->

                  <h4>Upcoming Events</h4>

                  <!-- All remaining events block -->
                  <?php
                  $firstItem = true;
                  foreach ($events as $key => $value) {
                    $eventend = strtotime($key)+86399; //Last date of event (which is 1 second into that date i.e. on the MORNING of the date) plus 23 hours 59 minutes to make it the end of that day
                    if ($now <= $eventend) {
                      $eventsRemaining++;
                      if($firstItem) { // Skip the first next event as it's already displayed in 'Next Event'.
                        $firstItem = false;
                      } else { ?>
                        <div class="upcoming_event">
                             <div class="grid_3">
                                <div class="backimg">
                                  <img src="images/<?= htmlentities($value['eventimage']) ?>" alt=""/>
                                </div>
                            </div>
                            <div class="grid_8">
                                <h3><?= htmlentities($value['eventtitle']) ?></h3>
                                <br style="clear:left;"/>
                                <div class="eventDate">
                                    <img src="images/clock.png" alt=""/>
                                    <p><?= htmlentities($value['eventdate']) ?></p>
                                    <br style="clear:left;"/>
                                </div>
                                <br style="clear:left;"/>
                                <p><?= nl2br(htmlentities($value['eventcontent'])) ?></p>
                            </div>

                            <br style="clear:left;"/>&nbsp;
                        </div>
                      <?php } } }
                    if ($eventsRemaining < 3) {
                      echo "<p>There are no more events scheduled.</p>";
                    } ?>
                  <!-- End All remaining events block -->
            </div>
        </div>

        <!--FOOTER-->
        <div id="footer">
            <?php include('includes/footer.php'); ?>
        </div>
        <!--FOOTER-->

    </body>
</html>
