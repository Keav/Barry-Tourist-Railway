<!DOCTYPE html>
<?php include('includes/contact-form.php'); ?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href='http://fonts.googleapis.com/css?family=Gentium+Basic:400,400italic,700,700italic|PT+Sans:400,400italic,700,700italic' rel='stylesheet' type='text/css'/>
        <link rel="stylesheet" type="text/css" href="css/grid.min.css" />
        <link rel="stylesheet" type="text/css" href="css/main.min.901039c0.css" />
        <title>Contact</title>
        <!-- <meta name="viewport" content="initial-scale=1.0, user-scalable=no" /> -->
        <!-- <meta http-equiv="content-type" content="text/html; charset=UTF-8"/> -->
        <script type="text/javascript"  src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>

<script type="text/javascript">
function initialize() {
    "use strict";
    var myLatlng = new google.maps.LatLng(51.3925, -3.27294),
        myOptions = {
            zoom: 16,
            center: myLatlng,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        },
        map = new google.maps.Map(document.getElementById("map_canvas"), myOptions),
        marker = new google.maps.Marker({
            position: myLatlng,
            map: map
        });
}
</script>
    </head>

    <body onload="initialize()">

        <?php
          switch($_SERVER['SERVER_NAME'])
          {
              case 'barrytouristrailway.co.uk':
                include('includes/google-tag.php');
              break;
          }
        ?>

        <!--HEADER-->
        <div id="header">
            <?php include('includes/header.php'); ?>
        </div>
        <!--HEADER-->

        <div class="contentSub">
            <div class="container">
                <h1>Contact Us</h1>

                <p class="grid_8">If you have any questions regarding Barry Tourist Railway, its trains, events or anything else then please get in touch.</p>
                <br style="clear:left;"/>

                <form class="contact-form" action="contact.php?send=1" method="post">
                    <label>FORENAME</label>
                    <input type="text" name="cf_first_name" value="<?php if (isset($cf_first_name)) { echo $cf_first_name; } ?>" class="contact-form-input"  />
                    <br style="clear:left;"/>
                    <?php
                    if (isset($cf_first_name_error)) {
                        echo "<p class=\"form-field-error\">";
                        echo strtoupper($cf_first_name_error);
                        echo "</p>";
                    }
                    ?>

                    <label>SURNAME</label>
                    <input type="text" name="cf_last_name" value="<?php if (isset($cf_last_name)) { echo $cf_last_name; } ?>" class="contact-form-input" />
                    <br style="clear:left;"/>
                    <?php
                    if (isset($cf_last_name_error)) {
                        echo "<p class=\"form-field-error\">";
                        echo strtoupper($cf_last_name_error);
                        echo "</p>";
                    }
                    ?>

                    <label>EMAIL</label>
                    <input type="text" name="cf_email" value="<?php if (isset($cf_email)) { echo $cf_email; } ?>" class="contact-form-input"/>
                    <br style="clear:left;"/>
                    <?php
                    if (isset($cf_email_error)) {
                        echo "<p class=\"form-field-error\">";
                        echo strtoupper($cf_email_error);
                        echo "</p>";
                    }
                    ?>

                    <label>TELEPHONE</label>
                    <input type="text" name="cf_phone" value="<?php if (isset($cf_phone)) { echo $cf_phone; } ?>" class="contact-form-input" />
                    <br style="clear:left;"/>
                    <?php
                    if (isset($cf_phone_error)) {
                        echo "<p class=\"form-field-error\">";
                        echo strtoupper($cf_phone_error);
                        echo "</p>";
                    }
                    ?>

                    <label>MESSAGE</label>
                    <textarea rows="0" cols="0" class="contact-form-textbox"  name="cf_comments"><?php if (isset($cf_comments)) { echo $cf_comments; } ?></textarea>
                    <br style="clear:left;"/>
                    <?php
                    if (isset($cf_comments_error)) {
                        echo "<p class=\"form-field-error\">";
                        echo strtoupper($cf_comments_error);
                        echo "</p>";
                    }
                    ?>

                    <input type="submit" class="contact-form-submit" value="" />
                </form>

                <div class="cf-right">
                    <h4>How to Find Us
                    </h4>
                    <div class="mapHolder">
                        <div id="map_canvas" style="width: 380px; height: 380px"></div>
                    </div>

                    <h4>Connect with Us</h4>
                    <div id="fbBig">
                        <a href="http://www.facebook.com/pages/Barry-Tourist-Railway/196540117115590" target="_blank">&nbsp;</a>
                    </div>
                    <div id="twitterBig">
                        <a href="https://twitter.com/#!/BarryRailway" target="_blank">&nbsp;</a>
                    </div>
                    <div id="flickrBig">
                        <a href="#">&nbsp;</a>
                    </div>
                </div>

                <br style="clear:right;"/>
                <br style="clear:left;"/>
            </div>
        </div>

        <!--FOOTER-->
        <div id="footer">
            <?php include('includes/footer.php'); ?>
        </div>
        <!--FOOTER-->
    </body>
</html>
