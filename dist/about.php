<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href='http://fonts.googleapis.com/css?family=Gentium+Basic:400,400italic,700,700italic|PT+Sans:400,400italic,700,700italic' rel='stylesheet' type='text/css'/>
        <link rel="stylesheet" type="text/css" href="css/grid.min.css" />
        <link rel="stylesheet" type="text/css" href="css/main.min.901039c0.css" />
        <title>About</title>


    </head>
    <body>
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

        <div class="contentSub" >
            <div class="container" id="aboutPage">
                <h1>About</h1>
                    <div class="grid_4_r">
                        <div class="on_now_img">
                                <img src="images/about.jpg" alt=""/>
                        </div>
                    </div>
                    <div class="grid_8">

       <p>At the Barry Tourist Railway we have a welcoming approach to all our visitors, and we are always happy to talk about the railway and our plans and vision for the future.  Over the coming months and years we will be improving the Railway and enhancing visitor facilities, and we invite you to journey with us as we do so.</p>
       <br />
   <p class="indent">We have a new Station Café at the Barry Island Station Buildings, which is open throughout the year from Easter onwards, and our passengers are welcomed to join the Railway at the café where you can purchase tickets for our services.</p>



                    </div>

                    <br style="clear:left;"/>

                    <div class="visitToday">
                    <img src="images/visitToday.jpg" alt=""/>
                    </div>

            </div>

        </div>
        <!--FOOTER-->
        <div id="footer">
            <?php include('includes/footer.php'); ?>
        </div>
        <!--FOOTER-->

    </body>
</html>
