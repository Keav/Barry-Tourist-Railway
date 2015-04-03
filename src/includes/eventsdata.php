<?php
    $now = strtotime('now');

    $events = array(
        '04-04-2015' => array(
            'eventtitle' => 'Easter Bunny Trains',
            'eventdate' => 'Good Friday April 3rd &amp; Easter Saturday April 4th',
            'eventimage' => 'easter_bunnies.jpg',
            'eventcontent' => 'Come along to another great Easter weekend at Barry Tourist Railway. Trains will be running each day and our Caf&#233; will be open for all.'
        ),
        '05-04-2015' => array(
            'eventtitle' => 'Easter Bunny Trains &amp; Vintage Fair',
            'eventdate' => 'Easter Sunday April 5th',
            'eventimage' => 'easter_bunnies.jpg',
            'eventcontent' => 'Come along to another great Easter weekend at Barry Tourist Railway. Trains will be running each day and our Caf&#233; will be open for all.</p><br><p>There will also be a Vintage Fair at Barry Island Station, so do come along and have a look!'
        ),
        '06-04-2015' => array(
            'eventtitle' => 'Easter Bunny Trains',
            'eventdate' => 'Easter Monday April 6th',
            'eventimage' => 'easter_bunnies.jpg',
            'eventcontent' => 'Come along to another great Easter weekend at Barry Tourist Railway. Trains will be running each day and our Caf&#233; will be open for all.'
        ),
        '18-04-2015' => array(
            'eventtitle' => 'Normal Operating Day',
            'eventdate' => 'Saturday April 18th',
            'eventimage' => 'summer-holiday-fun.jpg',
            'eventcontent' => ''
        ),
        '02-05-2015' => array(
            'eventtitle' => 'Normal Operating Day',
            'eventdate' => 'Saturday May 2nd',
            'eventimage' => 'summer-holiday-fun.jpg',
            'eventcontent' => ''
        ),
        '03-05-2015' => array(
            'eventtitle' => 'Normal Operating Day &amp; Vintage Fair',
            'eventdate' => 'Sunday May 3rd',
            'eventimage' => 'barry_at_war.jpg',
            'eventcontent' => ''
        ),
        '04-05-2015' => array(
            'eventtitle' => 'Normal Operating Day',
            'eventdate' => 'Monday May 4th',
            'eventimage' => 'summer-holiday-fun.jpg',
            'eventcontent' => ''
        ),
        '09-05-2015' => array(
            'eventtitle' => 'Normal Operating Day &amp; VE Day 70th Anniversary Event',
            'eventdate' => 'Saturday May 9th',
            'eventimage' => 'barry_at_war_2012_tn.jpg',
            'eventcontent' => ''
        ),
        '23-05-2015' => array(
            'eventtitle' => 'Normal Operating Day',
            'eventdate' => 'Saturday May 23rd',
            'eventimage' => 'summer-holiday-fun.jpg',
            'eventcontent' => ''
        ),
        '24-05-2015' => array(
            'eventtitle' => 'Normal Operating Day &amp Vintage Fair',
            'eventdate' => 'Sunday May 24th',
            'eventimage' => 'barry_at_war.jpg',
            'eventcontent' => ''
        ),
        '25-05-2015' => array(
            'eventtitle' => 'Normal Operating Day',
            'eventdate' => 'Spring Bank Holiday Monday May 25th',
            'eventimage' => 'summer-holiday-fun.jpg',
            'eventcontent' => ''
        ),
        '14-06-2015' => array(
            'eventtitle' => 'Barry Festival of Transport &amp; Vintage Fair',
            'eventdate' => 'TBA',
            'eventimage' => 'barry_at_war.jpg',
            'eventcontent' => ''
        ),
        '20-06-2015' => array(
            'eventtitle' => 'Barry at War Weekend - Red Arrows Display',
            'eventdate' => 'Saturday June 20th',
            'eventimage' => 'red_arrows_tn.jpg',
            'eventcontent' => ''
        ),
        '21-06-2015' => array(
            'eventtitle' => 'Barry at War Weekend - Battle of Britain Memorial Fly-Past',
            'eventdate' => 'Sunday June 21st',
            'eventimage' => 'barry_at_war_2012_tn.jpg',
            'eventcontent' => ''
        ),
        '25-07-2015' => array(
            'eventtitle' => 'Normal Operating Day &amp Hornby O-Gauge Show in Main Hall',
            'eventdate' => 'Saturday July 25th',
            'eventimage' => 'toy_faire_s.jpg',
            'eventcontent' => ''
        ),
        '26-07-2015' => array(
            'eventtitle' => 'Normal Operating Day - Hornby O-Gauge Show in Main Hall &amp; Vintage Fair',
            'eventdate' => 'Sunday July 26th',
            'eventimage' => 'toy_faire_s.jpg',
            'eventcontent' => ''
        ),
        '01-08-2015' => array(
            'eventtitle' => 'Normal Operating Day',
            'eventdate' => 'Saturday August 1st',
            'eventimage' => 'summer-holiday-fun.jpg',
            'eventcontent' => ''
        ),
        '02-08-2015' => array(
            'eventtitle' => 'Normal Operating Day &amp Toy and Train Fair',
            'eventdate' => 'Sunday August 2nd',
            'eventimage' => 'toy_faire_s.jpg',
            'eventcontent' => ''
        ),
        '09-08-2015' => array(
            'eventtitle' => 'Normal Operating Day',
            'eventdate' => 'Saturday August 8th &amp Sunday August 9th',
            'eventimage' => 'summer-holiday-fun.jpg',
            'eventcontent' => ''
        ),
        '16-08-2015' => array(
            'eventtitle' => 'Normal Operating Day',
            'eventdate' => 'Saturday August 15th &amp; Sunday August 16th',
            'eventimage' => 'summer-holiday-fun.jpg',
            'eventcontent' => ''
        ),
        '23-08-2015' => array(
            'eventtitle' => 'Mini Diesel Gala',
            'eventdate' => 'Saturday August 22nd &amp; Sunday August 23rd',
            'eventimage' => 'class_26_26038.jpg',
            'eventcontent' => ''
        ),
        '29-08-2015' => array(
            'eventtitle' => 'Normal Operating Day',
            'eventdate' => 'Saturday August 29th',
            'eventimage' => 'summer-holiday-fun.jpg',
            'eventcontent' => ''
        ),
        '30-08-2015' => array(
            'eventtitle' => 'Normal Operating Day &amp; Vintage Fair',
            'eventdate' => 'Sunday August 30th',
            'eventimage' => 'barry_at_war.jpg',
            'eventcontent' => ''
        ),
        '31-08-2015' => array(
            'eventtitle' => 'August Bank Holiday - Normal Operating Day',
            'eventdate' => 'Monday August 31st',
            'eventimage' => 'summer-holiday-fun.jpg',
            'eventcontent' => ''
        ),
        '05-11-2015' => array(
            'eventtitle' => 'Bonfire Night Trains',
            'eventdate' => 'Thursday November 5th',
            'eventimage' => 'bonfire_night.jpg',
            'eventcontent' => ''
        ),
        '13-12-2015' => array(
            'eventtitle' => 'Santa Special',
            'eventdate' => 'Saturday December 12th &amp; Sunday December 13th',
            'eventimage' => 'santa_special_s.jpg',
            'eventcontent' => ''
        ),
        '20-12-2015' => array(
            'eventtitle' => 'Santa Special',
            'eventdate' => 'Saturday December 19th &amp; Sunday December 20th',
            'eventimage' => 'santa_special_s.jpg',
            'eventcontent' => ''
        ),
    );
?>