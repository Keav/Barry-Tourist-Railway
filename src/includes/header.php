<?php include('includes/newsdata.php'); ?>
<div class="sitelink">
    <p><a href="http://www.barryrailcentre.co.uk" title="Barry Rail Centre" target="_blank">BARRY RAIL CENTRE &gt;</a></p>
</div>

<div class="HeaderContainer">
    <div class="container">
        <a href="index.php"><img src="images/logo.png" alt="" class="logo"/></a>
        <ul class="tabs">
            <li id="tabStart"><a href="index.php">HOME</a></li>
            <li><a href="train-services.php">TRAIN SERVICES</a></li>
            <li><a href="events.php">EVENTS</a></li>
            <li><a href="history.php">HISTORY</a></li>
            <li><a href="about.php">ABOUT</a></li>
            <li><a href="news.php">NEWS</a>

<?php
                $i = 0;
                foreach ($news as $key => $value) {
                  $releasedate = strtotime($key);
                  if (($now >= $releasedate) && ($now < $releasedate+1209600)) { //1209600 = 14 days
                    for (; $i === 0; $i++) { ?>

            <sup style="color:#f00;font-weight:bold;">NEW</sup>
<?php } } } ?>

            </li>
            <li id="tabEnd"><a href="contact.php">CONTACT</a></li>
        </ul>
        <br style="clear:both"/>



    </div>
</div>