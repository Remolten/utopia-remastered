<?php
    define('WP_USE_THEMES', false);
    require('blog/wp-blog-header.php');
    query_posts('showposts=11');
?>

<!DOCTYPE HTML>

<!--
    Copyright 2015-2016 Remington Thurber
    Created for New Life Assembly of God in Ellendale, ND
-->

<html>
	<head>
        <base href="https://ellendaleag.org">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="New Life Assembly of God, a Pentecostal Church in Ellendale, North Dakota. We Live, We Learn, We Experience—Together!">
        <meta name="author" content="Remington Thurber">
        <meta name="robots" content="index, follow">
        <link href="favicon.ico" rel="shortcut icon" />
        
		<title>New Life Assembly of God</title>
		
		<link href="//ellendaleag.org/css/bootstrap.min.css" rel="stylesheet" />
        <link href="//ellendaleag.org/fonts/font-awesome-4.5.0/css/font-awesome.min.css" rel="stylesheet" />
        <link href="//ellendaleag.org/css/main.css" rel="stylesheet" />
        
		<!--[if lte IE 9]>
            <script src="/assets/js/ie/html5shiv.min.js></script>
            <script src="/assets/js/ie/respond.min.js></script>
        <![endif]-->
	</head>
	<body>

		<!-- Wrapper-->
			<div id="wrapper">

				<!-- Nav -->
                    <nav class="navbar navbar-default navbar-static-top" role="navigation">
                        <div class="container-fluid">
                            <ul class="nav navbar-nav">
                                <li id="home-nav"><a href="#home" class="plink" data-toggle="tooltip" data-placement="bottom" title="Home" onclick=""><span class="icon fa-home fa-lg"></span></a></li>
                                <li id="info-nav"><a href="#info" class="plink" data-toggle="tooltip" data-placement="bottom" title="About Us" onclick=""><span class="icon fa-info fa-lg"></span></a></li>
                                <li id="calendar-nav"><a href="#calendar" class="plink" data-toggle="tooltip" data-placement="bottom" title="Calendar"><span class="icon fa-calendar fa-lg"></span></a></li>
                                <li id="announcements-nav"><a href="#announcements" class="plink" data-toggle="tooltip" data-placement="bottom" title="Announcements"><span class="icon fa-bullhorn fa-lg"></span></a></li>
<!--                                <li id="blog-nav"><a href="#blog" class="plink" data-toggle="tooltip" data-placement="bottom" title="Blog"><span class="icon fa-comment fa-lg"</span></a></li>-->
                                <li id="sermons-nav"><a href="#sermons" class="plink" data-toggle="tooltip" data-placement="bottom" title="Sermons"><span class="icon fa-volume-up fa-lg"></span></a></li>
                                <li id="pushpay-nav"><a href="https://pushpay.com/pay/ellendaleag" target="_blank" data-toggle="tooltip" data-placement="bottom" title="PushPay"><span class="icon fa-usd fa-lg"></span> <span class="icon fa-external-link"></span></a></li>
                                <li id="facebook-nav"><a href="https://facebook.com/ellendaleag" target="_blank" data-toggle="tooltip" data-placement="bottom" title="Facebook"><span class="icon fa-facebook fa-lg"></span> <span class="icon fa-external-link"></span></a></li>
                            </ul>
                        </div>
                    </nav>

                <!-- Panels -->
                    <div class="panel-wrapper">
                        <div id="home" class="jumbotron apanel">
                                <h1>Welcome to<br>New Life Assembly of God</h1>
                                    <p>a Pentecostal church in Ellendale, North Dakota.</p>
                                <h3>We Live, We Learn, We Experience—Together!</h3><br>
                                    <p><a href="#info" class="btn btn-primary btn-lg plink" role="button">Learn More <span class="icon fa-chevron-right"></span></a></p>
                        </div>
                        <div id="info" class="panel apanel panel-default">
                            <div class="panel-body">
                                <h2>About Us</h2>
                                    <p>New Life Assembly of God is all about Living the Way, Learning the Truth and Experiencing the Life of Jesus together. It is our hope that together—in our expressions of love for one another—we will Live the Way, in our study and preaching of the Word of God we will Learn the Truth, and through our communion with God in prayer and worship we will Experience the Life of Jesus so that we all together will be built up in the love and unity of the faith to present everyone mature in Christ.</p><br>
                                <div id="schedule">
                                    <h2>Weekly Service Schedule</h2>
                                        <h4>Sunday</h4>
                                            <p>8:30 AM</p>
                                                <ul><li>Prayer in the Youth Room</li></ul>
                                            <p>9:30 AM</p>
                                                <ul><li>Sunday School for all ages</li></ul>
                                            <p>10:30 AM</p>
                                                <ul><li>Morning Worship</li><li>Children's Church</li><li>Tot's Church</li><li>Nursery</li></ul>
                                        <h4>Wednesday</h4>
                                            <p>7:00 PM</p>
                                                <ul><!--<li>Adult Bible Study</li>--><li>Youth Group</li><!--<li>Royal Rangers (Boys K-6)</li><li>MPact (Girls K-6)</li><li>Rainbows (Tots)</li>--></ul>
                                        <h4>Thursday</h4>
                                            <p>7:00 PM</p>
                                                <ul><li>Adult Bible Study</li></ul>
                                        <!--<h4>Women's Bible Study</h4>
                                            <p>Monday, 7:00 PM at 505 5th Street South<br>
                                    Tuesday, 10:00 AM at New Life (Childcare provided)</p>-->
                                        <h4>Men's Breakfast</h4>
                                            <p>8:00 AM, First Saturday of each month</p>
                                </div>
                                <br><h2>Contact Us</h2>
                                    <p>720 3rd Avenue North
                                    <br>701-349-5449
                                    <br>newlife@ellendaleag.org</p>
                            </div>
                        </div>
                        <div id="calendar" class="panel apanel panel-default">
                            <div class="panel-body">
                                <iframe src="https://calendar.google.com/calendar/embed?src=6i6ughccjn4jllnm6eoq3l9ulo%40group.calendar.google.com&amp;title=New%20Life%20Assembly%20of%20God&amp;showPrint=0&amp;showCalendars=0&amp;showTz=0&amp;height=600&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;ctz=America%2FChicago" style="border: 0" width="100%" height="600" frameborder="0" scrolling="no"></iframe>
                            </div>
                        </div>
                        <div id="announcements" class="panel apanel panel-default">
                            <div class="panel-body">
                                <embed src="https://ellendaleag.org/user/bulletin/bulletin.pdf" type="application/pdf" width="100%" height="600"></embed>
                            </div>
                        </div>
<!--
                        <div id="blog" class="panel apanel panel-default">
                            <div class="panel-body">
                                <?php while (have_posts()): the_post(); ?>
                                <h3><?php the_title(); ?></h3>
                                <p style="font-size: 1.1em">Posted on <?php the_date('F j, Y'); ?> at <?php the_time('g:i A'); ?> by <?php the_author() ?></p>
                                <p><?php the_content(); ?></p>
                                <?php endwhile; ?>
                                <a href="https://ellendaleag.org/blog" class="btn btn-success btn-lg" role="button">Go to the Blog <span class="icon fa-external-link"></span></a>
                            </div>
                        </div>
-->
                        <div id="sermons" class="panel apanel panel-default">
                            <div class="panel-body">
                                <!--<h3>Sermon Recordings</h3>
                                <audio controls>
                                    <source src="https://ellendaleag.org/user/sermons/sermon.mp3" type="audio/mpeg">
                                    Your browser does not support the audio element.
                                </audio>-->
                                <iframe src="https://ellendaleag.org/sermons" style="border: 0" width="100%" height="600" frameborder="0" scrolling="yes"></iframe>

                            </div>
                        </div>
                    </div>
                
                <!-- Footer -->
                    <br><div id="footer">
                        <h4>Get the New Life AG app!</h4>
                        <a href="https://itunes.apple.com/us/app/new-life-assembly-nd/id1074484531" target="_blank"><img src="//ellendaleag.org/appStoreBadge.svg"></img></a>
                        <a href="https://play.google.com/store/apps/details?id=com.echurchapps.ellendaleag" target="_blank"><img alt="Get it on Google Play" src="https://play.google.com/intl/en_us/badges/images/generic/en-play-badge.png"></img></a><br><br>
                        &copy; 2015-2016 Remington Thurber
                    </div>
                
			</div>

		<!-- Scripts -->
			<script src="//ellendaleag.org/js/jquery.min.js"></script>
            <script src="//ellendaleag.org/js/bootstrap.min.js"></script>
			<script src="//ellendaleag.org/js/main.js"></script>

	</body>
</html>