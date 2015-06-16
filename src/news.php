<!DOCTYPE html>

<html lang="en">

    <head>
        <?php include('includes/head.php'); ?>

        <title>News</title>
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

        <div class="contentSub" id="newsPage">
            <div class="container">
                <h1>News &amp; Updates</h1>

<!-- ******************************** -->

                <?php
                $i = 0;
                foreach ($news as $key => $value) {
                  $releasedate = strtotime($key);
                  if ($now >= $releasedate) {
                    for (; $i === 0; $i++) { ?>

                    <h4>News for 2015</h4>

<div class="news-item-row">
    <div class="newsimg">
        <div class="newsDate">
            <p> <?= $value['newsdate'] ?></p>
        </div>
        <img src="images/<?= $value['newsimage'] ?>" alt="News Image" />
    </div>

    <div class="grid_8">
        <h2><?= $value['newstitle'] ?></h2>

        <div class="container img-center">
            <img src="images/<?= $value['newsimage'] ?>" alt="The Red Arrows">
        </div>

        <?= $value['newscontent'] ?>
    </div>

    <br style="clear:left;"/>&nbsp;
</div>
<?php } } } ?>

<!-- ******************************** -->

<h4>News for 2014</h4>

<div class="news-item-row">
    <div class="newsimg">
        <div class="newsDate">
            <p> 18 <span>AUG</span></p>
        </div>
        <img src="images/red_arrows.jpg" alt=""/>
    </div>

    <div class="grid_8">
        <h2>RAIL FAN BRINGS RED ARROWS TO BARRY ISLAND</h2>

        <div class="container img-center">
            <img src="images/red_arrows.jpg" alt="The Red Arrows">
        </div>

        <p>John Buxton, the man who has brought life back to the Tourist Railway in Barry, has been a big fan of the Red Arrows since childhood. When planning this years &#39;Barry at War&#39; weekend, he was determined to make the event the biggest and best so far, so he made an early application to the RAF Display Team to secure the Red Arrows for Barry Island.</p>
        <br>
        <p>Early application is essential, so John filled out and sent off all the necessary documentation eighteen months in advance. He also realized that he would need to put a good case forward as competition from other venues in the UK is extremely strong. The application built not only on the success of previous &#8216;Barry at War&#8217; events, but also the programme planned for 2014, which commemorates the centenary of the First World War. In addition, John garnered the support of local MP, Alun Cairns, AM Jane Hutt and Councillor Lis Burnett who wrote letters of support in respect of the application. &#8216;I&#39;m very thankful for the backing given by Alun, Jane, Lis and the Vale of Glamorgan Council in this regard and I&#39;m also grateful to Ade Pitman and the Barry Town Council, without whom the event would not have been possible&#8217;, said John.</p>
        <br>
        <p>&#8220;I was so excited when early in 2014 I heard that our request had been successful subject to addressing a number of key operational issues, the most significant being arranging the display without conflicting with the flight path of the nearby busy, Cardiff Airport&#8217;, added John.</p>
        <br>
        <p>&#8216;We kept the event fairly low-key until we were recently advised that all operational issues had been addressed. In addition, we&#39;re also hoping to get a fly-past of the Battle of Britain Memorial flight Dakota aircraft on Sunday 31st August.  Now we are promoting the display but frankly the fact that the Red Arrows are coming is the greatest promotion you could ever wish for&#8217;, said John. &#8216;This is the biggest event I&#39;ve ever been involved with. As sponsor of the Red Arrows display, this is a substantial investment on my part, but its something I&#39;ve wanted to do for Barry for a long time!&#8217;</p>

        <div class="container img-center">
            <img src="images/jb_valleylines_cab.jpg" alt="John Buxton in the Cab of a Pacer train"><br>
            <p>John Buxton – always in the driving seat – here as Managing Director of Valley Lines during the late 1990&#39;s in the cab of a Pacer Train</p>
        </div>

        <p>John has been fascinated with every aspect of transport and engineering since the age of 3. Achieving Chartered Engineering Status in his early twenties, John went on to a successful engineering career in construction and railways becoming the youngest ever British Railway Divisional Engineer for South Wales in 1988. A move into railway operating saw him become the Managing Director of Valley Lines in 1993. John later set up his own company, which has grown to become a substantial Barry-based engineering and operations company. John also runs the Barry Tourist Railway that aims to provide an interesting visitor experience. &#8216;We are keen to tell people about the history of Barry, particularly, the docks, the railway and the key role Barry played in the two World Wars&#8217;, said John. I am particularly proud of the Glamorgan Wartime Heritage Museum that we have developed at Barry Island Station in partnership with Ade Pitman and his team&#8217;.</p>
        <br>
        <p>&#8220;Barry is a great place and we&#39;re so pleased that we have secured the Red Arrows for our &#8216;Barry at War&#8217; event to help people understand more about the town&#39;s wartime history. This year, the Barry Tourist Railway will bring an additional 40,000 visitors to Barry to see and hear that story&#8217;, John concluded.</p>
    </div>
    <br style="clear:left;"/>&nbsp;
</div>

<!-- ******************************** -->

<h4>News for 2013</h4>

<div class="news-item-row">
    <div class="newsimg">
        <div class="newsDate">
            <p> 10 <span>MAR</span></p>
        </div>
        <img src="images/uk_us_flags.jpg" alt=""/>
    </div>

    <div class="grid_8">
        <h2>Today, March 10th, the Glamorgan Wartime Heritage Centre was opened for the 2013 season.</h2>
        <p>The Glamorgan Wartime Heritage Centre was officially opened for the 2013 season. The museum, now completed, was available for the public to inspect and 10 stalls selling collectable militaria did a brisk business. The centre will be open every second Sunday of each month throughout the year and also on the dates shown on our events page when the Barry Tourist Railway will also be operating.<br />
        <br />
        For more information about the Glamorgan Wartime Heritage Centre, phone Ade Pitman on 07930 874161 or visit the website at <a href="http://www.barryatwar.info">www.barryatwar.info</a>.</p>
    </div>
    <br style="clear:left;"/>&nbsp;
</div>

<!-- ******************************** -->

<h4>News of 2012</h4>

<div class="news-item-row">
    <div class="newsimg">
        <div class="newsDate">
            <p> 6 <span>Oct</span></p>
        </div>
        <img src="images/barry_at_war.jpg" alt=""/>
    </div>

    <div class="grid_8">
        <h2>Barry at War names Heritage Facility</h2>
        <p>The &#39;Glamorgan Wartime Heritage Centre&#39; has been chosen as the name for the Barry at War run facility located at the Barry Tourist Railway Station, Barry Island.<br />
        <br />
        Group Chairman, Ade Pitman explained the name, saying, &#34;Although our group name suggests that we are only interested in the history of Barry town, our research actually spans the entire length of South Wales.<br />
        <br />
        Popular with people on our Facebook page, the name &#39;Glamorgan Wartime Heritage Centre&#39; helps to portray the inclusive nature of the facility.<br />
        <br />
        Not only will it be used to gather and share the wartime memories of local people, but it will also signpost heritage tourists and interested people, to the region&#39;s other military history locations such as the many rare Second World War bunkers dotted along the Glamorgan coastline, the Island Farm prisoner of war camp near Bridgend, Llandow Airfield and other museums.<br />
        <br />
        Ultimately we aim to create a facility that can provide support to the many groups and individuals who have an interest in this area of history, and one that will provide an easily accessible learning facility for local schools.&#34;<br />
        <br />
        Ade continued, &#34;Following the success of this summer&#39;s Wartime Weekend, planning has already begun for next year&#39;s event, and the Glamorgan Wartime Heritage Centre will be a key part.&#34;<br />
        <br />
        The Glamorgan Wartime Heritage Centre will be holding an Open Day on Sunday November 4th, at the Barry Tourist Railway Station, Barry Island.<br />
        <br />
        The event will feature a military bazaar, radio-controlled tanks, lectures and displays. Admission is free, and the doors open at 10 am.<br />
        <br />
        Call Ade Pitman on 07930 874161 or see the Barry at War website at <a href="www.barryatwar.info">www.barryatwar.info</a> for more information.
        </p>
    </div>
    <br style="clear:left;"/>&nbsp;
</div>

<!-- ******************************** -->

<div class="news-item-row">
    <div class="newsimg">
        <div class="newsDate">
            <p> 17 <span>JUN</span></p>
        </div>
        <img src="images/uk_us_flags.jpg" alt=""/>
    </div>

    <div class="grid_8">
        <h2>Wartime Weekend Victory at Barry Tourist Railway</h2>
        <p>Barry Tourist Railway, supporting the Barry Wartime Weekend, is celebrating a successful 1940s wartime weekend, which saw GWR Steam Locomotive 9466 in action alongside 1940s re-enactors from across the Country.<br />
        <br />
        John Buxton, Managing Director of Barry Tourist Railway, said "The weekend is a real cause for celebration for us at Barry Tourist Railway, and we were delighted to have worked so closely with the Barry Wartime Weekend organisers in bringing forward this very special event."<br />
        <br />
        The weekend brought history to life, with both military and civilian re-enactors, as well as period army vehicles, and historical exhibitions, alongside the GWR steam locomotive 9466. Vale of Glamorgan Assembly Member Jane Hutt was amongst the many dignitaries that visited the event.<br />
        <br />
        Mr Buxton added, "These are the kind of events that we at Barry Tourist Railway will continue to bring to Barry, and, judging by the fantastic reaction that the people of Barry and the many visitors to the Town gave this event, we know that the Town will continue to support us."<br />
        <br />
        Barry Tourist Railway runs a mixture of steam and diesel services throughout the year.
        </p>
    </div>
    <br style="clear:left;"/>&nbsp;
</div>

<!-- ******************************** -->

<div class="news-item-row">
    <div class="newsimg">
        <div class="newsDate">
            <p> 10 <span>MAY</span></p>
        </div>
        <img src="images/black_5s_at_barry.jpg" alt=""/>
    </div>

    <div class="grid_8">
        <h2>Two Black 5s Arrive at Barry Rail Centre</h2>
        <p>Two Black 5s arrived at the Barry Rail Centre via its mainline connection this week.  The steam locomotives, numbers 44871 and 45407 &#39;The Lancashire Fusilier&#39;, are mainline certified and brought passengers from Crewe via the Central Wales Line to South Wales in a charter service.<br />
        <br />
        The locomotives arrived at Barry Rail Centre for servicing and storage on Sunday night, and will spend the week at Barry before leaving to haul further passenger charter services. This is the first time that steam locomotives have used the mainline connection to access Barry Rail Centre Main Depot from the National Rail Network lines since 1965, and is the first use of the connection by preserved steam.<br />
        <br />
        John Buxton, Managing Director of Barry Rail Centre, said "These are the first mainline steam hauled passenger trains to arrive at Barry Rail Centre via our mainline connection, and they are a recognition of our excellent facilities in this part of the country. At Barry we have plenty of covered accommodation and are able to keep the two locos and support coach under cover in our Main Depot Shed."<br />
        <br />
        Barry Rail Centre is a professionally run railway engineering, maintenance, storage and training facility in South Wales, and is mainline connected.<br />
        <br />
        Mr Buxton added, "At Barry Rail Centre we have a programme of investment to continually improve our facilities to clients, and we are for example about to begin work on installing a turntable on the site. We are confident that more passenger tour operators will avail themselves of this unique facility at Barry and use our excellent facilities at our Main Depot in the future. At Barry we can offer full servicing of steam locomotive and passenger train facilities."
        The Centre is on a long term lease to Cambrian Transport, who are developing a site with a mixture of commercial rail services and tourist railway operations, which is a little over 100 acres in size.<br />
        <br />
        John Buxton added, "Our business plan for Barry will develop employment and skills training for local people, increased tourism though our tourist railway operations, and help further the regeneration of the Town through our investment in the site."<br />
        <br />
        On the site, leased from the local authority The Vale of Glamorgan Council, Cambrian Transport has developed a commercial facility known as Barry Rail Centre, and a tourist focused operation known as Barry Tourist Railway.</p>
    </div>
    <br style="clear:left;"/>&nbsp;
</div>

<!-- ******************************** -->

<div class="news-item-row">
<div class="newsimg">
    <div class="newsDate">
        <p> 09 <span>MAY</span></p>
    </div>
    <img src="images/class_26_26038.jpg" alt=""/>
</div>

<div class="grid_8">
    <h2>Bank Holiday Weekend First Running Success for Class 26 Locomotive</h2>

    <p>The first successful passenger services to be hauled by refurbished Class 26 Locomotive 26038 were a success during the bank holiday weekend 6th and 7th May at the Barry Tourist Railway.<br />
    <br />
    Operating together with Class 73 Locomotive 73118, and Mk 2f passenger coaches from the former Gatwick Express, the Class 26 provided a major draw for families and train enthusiasts from across the UK.<br />
    <br />
    Barry Tourist Railway Chairman, John Buxton, said "We were delighted with the response from the public and pleased to welcome so many passengers to the railway. This was a highly successful weekend, and we were pleased that Tom Clift was able to bring his locomotive to Barry for its first passenger hauled services since he and his team refurbished it."<br />
    <br />
    The Class 26 was withdrawn from service in 1992, and has now been refurbished. Locomotive owner Tom Clift, said "We were pleased to bring the locomotive to Barry Tourist Railway, where the locomotive has been undergoing final testing and commissioning work over the last couple of months prior to the bank holiday services. I am pleased that it operated so well and that there was so much interest in it from train enthusiasts and members of the public."</p>
</div>
<br style="clear:left;"/>&nbsp;
</div>

<!-- ******************************** -->

            <div class="news-item-row">
                <div class="newsimg">
                    <div class="newsDate">
                        <p> 29 <span>APR</span></p>
                    </div>
                    <img src="images/news_img_1.jpg" alt=""/>
                </div>
                <div class="grid_8">
                    <h2>Portillo Visits the Barry Tourist Railway!</h2>
                    <p>We operate services for passengers on dates throughout the year, using either our own trains, or one of our regular visiting steam locomotives.  At Barry we have a heritage 1957 Diesel Multiple Unit (DMU Class 101), called Iris II that we have refurbished and turned into a comfortable passenger environment.  We also have a Class 73 diesel locomotive, which can typically be seen hauling Mk 2f passenger coaches.</p>
                </div>
                <br style="clear:left;"/>&nbsp;
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
