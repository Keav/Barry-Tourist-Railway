<?php
    $now = strtotime('now');

    $events = array(
        '04-04-2015' => array(
            'eventtitle' => 'Easter Bunny Trains',
            'eventdate' => 'Good Friday April 3rd & Easter Saturday April 4th',
            'eventimage' => 'easter_bunnies.jpg',
            'eventcontent' => 'Come along to another great Easter weekend at Barry Tourist Railway. Trains will be running each day and our Caf&#233; will be open for all.'
        ),
        '05-04-2015' => array(
            'eventtitle' => 'Easter Bunny Trains & Vintage Fair',
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
            'eventtitle' => 'Normal Operating Day & Vintage Fair',
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
            'eventtitle' => 'Normal Operating Day & VE Day 70th Anniversary Event',
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
            'eventtitle' => 'Normal Operating Day & Vintage Fair',
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
            'eventtitle' => 'Barry Festival of Transport & Vintage Fair',
            'eventdate' => 'Sunday June 14th',
            'eventimage' => 'barry_at_war.jpg',
            'eventcontent' => ''
        ),
        '19-06-2015' => array(
            'eventtitle' => 'Barry at War Weekend - Red Arrows Display',
            'eventdate' => 'Saturday June 20th',
            'eventimage' => 'red_arrows_tn.jpg',
            'eventcontent' => ''
        ),
        '21-06-2015' => array(
            'eventtitle' => 'Barry at War Weekend',
            'eventdate' => 'Sunday June 21st',
            'eventimage' => 'barry_at_war_2012_tn.jpg',
            'eventcontent' => ''
        ),
        '25-07-2015' => array(
            'eventtitle' => 'Normal Operating Day & Hornby O-Gauge Show in Main Hall',
            'eventdate' => 'Saturday July 25th',
            'eventimage' => 'toy_faire_s.jpg',
            'eventcontent' => ''
        ),
        '26-07-2015' => array(
            'eventtitle' => 'Normal Operating Day - Hornby O-Gauge Show in Main Hall & Vintage Fair',
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
            'eventtitle' => 'Normal Operating Day & Toy and Train Fair',
            'eventdate' => 'Sunday August 2nd',
            'eventimage' => 'toy_faire_s.jpg',
            'eventcontent' => ''
        ),
        '09-08-2015' => array(
            'eventtitle' => 'Normal Operating Day',
            'eventdate' => 'Saturday August 8th & Sunday August 9th',
            'eventimage' => 'summer-holiday-fun.jpg',
            'eventcontent' => ''
        ),
        '16-08-2015' => array(
            'eventtitle' => 'Normal Operating Day',
            'eventdate' => 'Saturday August 15th & Sunday August 16th',
            'eventimage' => 'summer-holiday-fun.jpg',
            'eventcontent' => ''
        ),
        '22-08-2015' => array(
            'eventtitle' => 'Partial Opening',
            'eventdate' => 'Saturday August 22nd',
            'eventimage' => 'class_26_26038.jpg',
            'eventcontent' => 'The railway is receiving a UK Railtours excursion train which is to traverse all the running lines on the Barry Tourist Railway. As a result, there is no opportunity to run any other Services until the 15.10 service from Barry Island. Platform tickets will be available for a nominal sum for those wishing to access the platform at Barry Island to see and photograph the railway excursion train.'
        ),
        '23-08-2015' => array(
            'eventtitle' => 'Mini Diesel Gala',
            'eventdate' => 'Sunday August 23rd',
            'eventimage' => 'class_26_26038.jpg',
            'eventcontent' => 'On Sunday 23rd August, we are holding a mini diesel gala at the Barry Tourist Railway. Our class 73 loco 73118 (with GATEX set) and our 101 diesel railcars will be in operation. The class 08 based at the railway will also be on display along with a Colas Class 60 loco. In addition, it will be possible to view our newly acquired Sentinel steam loco, \'Susan\'.'
        ),
        '29-08-2015' => array(
            'eventtitle' => 'Normal Operating Day',
            'eventdate' => 'Saturday August 29th',
            'eventimage' => 'summer-holiday-fun.jpg',
            'eventcontent' => ''
        ),
        '30-08-2015' => array(
            'eventtitle' => 'Normal Operating Day & Vintage Fair',
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
            'eventdate' => 'Saturday December 12th & Sunday December 13th',
            'eventimage' => 'santa_special_s.jpg',
            'eventcontent' => ''
        ),
        '20-12-2015' => array(
            'eventtitle' => 'Santa Special',
            'eventdate' => 'Saturday December 19th & Sunday December 20th',
            'eventimage' => 'santa_special_s.jpg',
            'eventcontent' => ''
        ),
    );
?>