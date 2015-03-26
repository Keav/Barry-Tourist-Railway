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

                <h1>Next Event</h1>

                <!-- Set up array -->
                <?php

                $now = strtotime('now');

                $events = array(
                    '01-03-2014' => array(
                        'name' => 'John Doe',
                        'email' => 'john@example.com'
                    ),
                    '01-04-2015' => array(
                        'name' => 'Jane Doe',
                        'email' => 'jane@example.com'
                    ),
                );

                foreach ($events as $key => $value) {
                  $event = strtotime($key);
                  if ($now <= $event) { ?>
                     <p>The key is <?= ($key) ?></p>
                     <p>The name is <?= $value['name'] ?></p>
                     <p>The email is <?= $value['email'] ?></p>
                     <br>
                <?php } } ?>

                <p>Now is <?= $now ?></p>
                <p>Now is <?= $event ?></p>

                <br>

                <?php if (date('mY')>="032015") { ?>
                  <h3>There are no more events scheduled.</h3>
                <?php } ?>

            </div>

        </div>
        <!--FOOTER-->
        <div id="footer">
            <?php include('includes/footer.php'); ?>
        </div>
        <!--FOOTER-->

    </body>
</html>
