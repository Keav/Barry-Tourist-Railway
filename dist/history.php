<!DOCTYPE html>

<html lang="en">

    <head>
        <?php include('includes/head.php'); ?>

        <title>History</title>
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

        <div class="historyContent">
            <div class="container">
                <h1>History</h1>
                <div class="historyDetails">
                    <p id="history_1">
                        Barry is Wales’ largest town, and it became so largely because of the Barry Railway Company.  Established in 1884 by David Davies, the Company created a dock in Barry and a railway linking the dock to the South Wales coalfields.
                    </p>

                    <p id="history_3">
                        From the late 1950s steam locomotives were gradually replaced by diesel engines, and many decommissioned locomotives made their way to Dai Woodham’s Barry Scrapyard.  Most of the steam engines surviving today owe their existence to the Barry scrapyard, from where they were rescued.
                    </p>

                    <p id="history_5">
                        Today the Barry Tourist Railway is part of the Barry Rail Centre, and since taking control of the site in late 2009, Cambrian Transport have begun the process of bringing the Centre back into full operational condition.
                    </p>

                    <p id="history_2">
                        By 1913 Barry had become the largest coal exporting port in the world, and the Barry Railway, which also operated passenger services, had a crucial role in bringing that coal to the docks.  The Barry Railway Company became part of the Great Western Railway in 1923.
                    </p>

                    <p id="history_4">
                        In 1994 the Welsh Development Agency and the Vale of Glamorgan Council began a process of developing a tourist railway in Barry.  By this time only fragments of the old Barry Railway Company infrastructure remained, but what did remain was saved and elements of what was missing were put back.
                    </p>
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
