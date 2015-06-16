<!DOCTYPE html>

<html lang="en">

    <head>
        <?php include('includes/head.php'); ?>

        <title>Contact Form Success</title>

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

        <div class="contentSub" id="cf-success">
            <div class="container">
                <h1>Thanks for your message!</h1>
                <p>Thank you for getting in touch with Barry Tourist Railway, we’ll respond to your query as soon as possible.</p>
                <div id="home">
                    <a href="index.php">&nbsp;</a>
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
