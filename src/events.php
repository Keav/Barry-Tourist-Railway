<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <link href='http://fonts.googleapis.com/css?family=Gentium+Basic:400,400italic,700,700italic|PT+Sans:400,400italic,700,700italic' rel='stylesheet' type='text/css'/>
        <link rel="stylesheet" href="font-awesome-4.2.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="css/grid.css" />
        <link rel="stylesheet" type="text/css" href="css/main.css" />
        <title>Events</title>
    </head>
    <body>

        <div id="header">
            <?php include('includes/header.php'); ?>
        </div>
        <div class="contentSub" id="eventsPage">
            <div class="container">

                <?php
                $now = strtotime('now');

                $events = array(
                    '28-03-2015' => array(
                        'eventtitle' => 'One',
                        'eventdate' => 'December 13th, 14th &amp; 20th, 21st',
                        'eventimage' => 'santa_special_s',
                        'eventcontent' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis ipsa fuga itaque voluptas at id eligendi, quo soluta, harum, officia et magnam iure commodi distinctio dolore alias delectus natus iste?'
                    ),
                    '01-04-2015' => array(
                        'eventtitle' => 'Two',
                        'eventdate' => 'December 13th, 14th &amp; 20th, 21st',
                        'eventimage' => 'santa_special_s',
                        'eventcontent' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis ipsa fuga itaque voluptas at id eligendi, quo soluta, harum, officia et magnam iure commodi distinctio dolore alias delectus natus iste?'
                    ),
                    '01-05-2015' => array(
                        'eventtitle' => 'Three',
                        'eventdate' => 'December 13th, 14th &amp; 20th, 21st',
                        'eventimage' => 'santa_special_s',
                        'eventcontent' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis ipsa fuga itaque voluptas at id eligendi, quo soluta, harum, officia et magnam iure commodi distinctio dolore alias delectus natus iste?'
                    ),
                );
                ?>

                <h1>Next Event</h1>

                <?php
                $i = 0;
                foreach ($events as $key => $value) {
                  $event = strtotime($key);
                  if ($now <= $event) {
                    for (; $i == 0; $i++) { ?>
                      <div class="on_now_event">
                          <div class="grid_4_r">
                              <div class="on_now_img">
                                  <div class="on_now">&nbsp;</div>
                                    <img src="images/<?= $value['eventimage'] ?>.jpg" alt=""/>
                              </div>
                          </div>
                          <div class="grid_8">
                              <h3><?= $value['eventtitle'] ?></h3>
                              <br style="clear:left;"/>
                              <div class="eventDate">
                                  <img src="images/clock.png" alt=""/>
                                  <p><?= $value['eventdate'] ?></p>
                                  <br style="clear:left;"/>
                              </div>
                              <br style="clear:left;"/>
                              <p><?= $value['eventcontent'] ?></p>
                          </div>

                          <br style="clear:left;"/>&nbsp;
                      </div>
                  <?php } } } ?>

<!--                  <h4>Upcoming Events</h4>

                <div class="upcoming_event">
                     <div class="grid_3">
                        <div class="backimg">
                          <img src="images/<?= $value['eventimage'] ?>.jpg" alt=""/>
                        </div>
                    </div>
                    <div class="grid_8">
                        <h3><?= $value['eventtitle'] ?></h3>
                        <br style="clear:left;"/>
                        <div class="eventDate">
                            <img src="images/clock.png" alt=""/>
                            <p><?= $value['eventdate'] ?></p>
                            <br style="clear:left;"/>
                        </div>
                        <br style="clear:left;"/>
                        <p><?= $value['eventcontent'] ?></p>
                    </div>

                    <br style="clear:left;"/>&nbsp;
                </div> -->
            </div>
        </div>
        <!--FOOTER-->
        <div id="footer">
            <?php include('includes/footer.php'); ?>
        </div>
        <!--FOOTER-->
    </body>
</html>
