<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<title>Maziara</title>
<meta name="description" content="">
<meta name="author" content="">
<!--// Mobile Metas //-->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<!--// Stylesheets //-->
<link rel="stylesheet" href="css/base.css" />
<link rel="stylesheet" href="css/skeleton.css" />
<link rel="stylesheet" href="css/layout.css" />
<link rel="stylesheet" href="css/style.css" />
<link rel="stylesheet" href="css/player.css" />
<link rel="stylesheet" href="css/fancybox.css" />

<link rel="stylesheet" type="text/css" href="css/color.css" title="styles7" media="screen" />
<link rel="alternate stylesheet" type="text/css" href="css/red.css" title="styles1" media="screen" />
<link rel="alternate stylesheet" type="text/css" href="css/blue.css" title="styles2" media="screen" />
<link rel="alternate stylesheet" type="text/css" href="css/gray.css" title="styles3" media="screen" />
<link rel="alternate stylesheet" type="text/css" href="css/orange.css" title="styles4" media="screen" />
<link rel="alternate stylesheet" type="text/css" href="css/green.css" title="styles5" media="screen" />
<link rel="alternate stylesheet" type="text/css" href="css/orange-red.css" title="styles6" media="screen" />
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<!--// Favicons //-->
<link rel="shortcut icon" href="images/favicon.png" />
<link rel="rockit-touch-icon" href="images/rockit-touch-icon.png" />
<link rel="rockit-touch-icon" sizes="72x72" href="images/rockit-touch-icon-72x72.png" />
<link rel="rockit-touch-icon" sizes="114x114" href="images/rockit-touch-icon-114x114.png" />
<!--// Javascript //-->
<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="js/styleswitch.js"></script>
<script type="text/javascript" src="js/jquery.infinite-carousel.js"></script>
<script type="text/javascript" src="js/animatedcollapse.js"></script>
<script type="text/javascript" src="js/ddsmoothmenu.js"></script>
<script type="text/javascript" src="js/jquery.nivo.slider.js"></script>
<script type="text/javascript" src="js/scrolltopcontrol.js"></script>
<script type="text/javascript" src="js/jquery.countdown.js"></script>
<script type="text/javascript" src="js/jquery.jplayer.min.js"></script>
<script type="text/javascript" src="js/jplayer.playlist.min.js"></script>
<script type="text/javascript" src="js/player.js"></script>
<script type="text/javascript" src="js/jquery.fancybox-1.3.1.js"></script>
<script type="text/javascript" src="js/lightbox.js"></script>
<script type="text/javascript" src="js/jquery-ui.min.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>

<script type="text/javascript" src="js/jquery.mCustomScrollbar.js"></script>

 <script src="js/jquery.modal.js" type="text/javascript" charset="utf-8"></script>
 <link rel="stylesheet" href="css/jquery.modal.css" type="text/css" media="screen" />


</head>
<body >

<!-- Outer Wrapper Start -->
<div id="outer-wrapper">
	<div class="inner">
    	<!-- Header Start -->
    	<div id="header">
        	<span class="topbar">&nbsp;</span>
        	<!-- Container Start -->
            <div class="container">
            	<!-- Logo Start -->
            	<div class="five columns left" >
				<div  class="logo">
                	<a href="index.php"><img src="images/logo.png" alt="" /></a>&nbsp
					<img id="menulock" src="images/menunav3.png"/>
				</div>
                </div>
                <!-- Logo End -->
                <div class="eleven columns right">
                	<!-- Top Links Start -->
                    <ul class="top-links">
                    	<li>
                        	<a href="javascript:animatedcollapse.toggle('login-box')">LOG IN</a>
                            <div id="login-box">
                            	<ul>
                                	<li><h4 class="white">User Login</h4></li>
                                    <li>
                                    	<input name="" value="yourname@email.com"
                                        onfocus="if(this.value=='yourname@email.com') {this.value='';}"
                                        onblur="if(this.value=='') {this.value='yourname@email.com';}"   type="text" class="bar" />
                                    </li>
                                    <li>
                                    	<input name="" value="password"
                                        onfocus="if(this.value=='password') {this.value='';}"
                                        onblur="if(this.value=='') {this.value='password';}"   type="password" class="bar" />
                                    </li>
                                    <li>
                                    	<input type="checkbox" class="left" />
                                        <p>Remember me</p>
                                    </li>
                                    <li>
                                    	<button class="backcolr">Login</button>
                                    </li>
                                </ul>
                                <div class="forgot">
                                	<a href="index.php#">Forget Password?</a>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </li>
                        <li><a href="index.php#">Signup</a></li>
                        <li>
                        	<a href="javascript:animatedcollapse.toggle('search-box')">Search</a>
                            <div id="search-box">
                            	<input name="" value="Enter any keyword"
                                onfocus="if(this.value=='Enter any keyword') {this.value='';}"
                                onblur="if(this.value=='') {this.value='Enter any keyword';}" type="text" class="bar" />
                                <button class="backcolr">Search</button>
                            </div>
                        </li>
                    </ul>
                    <!-- Top Links End -->
                    <!-- Navigation Start -->
                    <div id="menunav" class="navigation">
                    	
                        <div id="smoothmenu1" class="ddsmoothmenu ">
                            <ul>
                                <li><a href="index.php">Home</a></li>
                                <li><a href="about-us.html">About Us</a></li>
                                <li><a href="news.html">News</a></li>
                                <li><a href="index.php#">Events</a>
                                    <ul>
                                        <li><a href="entertainment.html">Entertainment</a></li>
										<li><a href="technology.html">Technlogy</a></li>
										<li><a href="sports.html">Sports</a></li>
										<li><a href="academics.html">Academics</a></li>
										<li><a href="business.html">Business</a></li>
                                        
                                    </ul>
                                </li>
                                <li><a href="index.php#">GIGS</a>
                                    <ul>
                                        <li><a href="timeline.html">Timeline</a></li>
                                        <li><a href="calendar.html">Calendar</a></li>
                                        <li><a href="map.html">Map</a></li>
                                    </ul>
                                </li>
                                <li><a href="index.php#">Blog</a>
                                	<ul>
                                    	<li><a href="blog.html">Blog</a></li>
                                        <li><a href="blog-detail.php">Three Column</a></li>
                                    </ul>
                                </li>
                                <li><a href="index.php#">Gallery</a>
                                    <ul>
                                        <li><a href="gallery-two-col.html">Two Column</a></li>
                                        <li><a href="gallery-three-col.html">Three Column</a></li>
                                        <li><a href="gallery-four-col.html">Four Column</a></li>
                                    </ul>
                                </li>
                                <li class="current-menu-item"><a href="contact-us.html">Contact</a></li>
                            </ul>
                            <div class="clear"></div>
                        </div>
                    </div>
                    <!-- Navigation End -->
                    <div class="clear"></div>
                </div>
            </div>
            <!-- Container End -->
        </div>
        <!-- Header End -->
        <div class="clear"></div>
        <div class="inner shadow">
        	<!-- Second Level Navigation Start -->
            <div class="second-nav">
            	<ul>
                	<li><a href="about-us.html">About Us</a></li>
                    <li><a href="news.html">Latest NEWS</a></li>
                    <li><a href="contact-us.html" class="active">Contact Us</a></li>
                </ul>
            </div>
            <!-- Second Level Navigation End -->
            <div class="clear"></div>
            <!-- Sub Page Banner Start -->
            <div id="sub-banner" class="row">
            	<iframe width="100%" height="228" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/?ie=UTF8&amp;ll=51.504375,-0.215671&amp;spn=0.00947,0.026157&amp;t=m&amp;z=16&amp;output=embed"></iframe>
            </div>
            <!-- Sub Page Banner End -->
            <div class="clear"></div>
        	<!-- Container Start -->
            <div class="container row">
            	<div class="two-thirds column left">
                	<h1 class="heading">From our blogs</h1>
                    <!-- Contact Us Start -->
                    <div class="in-sec">
                        <div class="contact-us">
                        	<h2>ROCK IT BAND</h2>
                            <p>
                            	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum in magna ipsum. Nunc euismod, nisi ac pretium lobortis, felis mauris aliquam neque, et pulvinar tortor diam sed magna. In fringilla eleifend sapien vitae sagittis. Sed porta bibendum rhoncus. Nulla dui nisl, iaculis sit amet vestibulum a, sollicitudin et lorem. Sed eget orci sed mi consequat elementum. Nunc elementum vestibulum pretium. Vestibulum hendrerit ante mollis eros tempus vitae ultrices neque fringilla.
                            </p>
                            <div class="clear"></div>
                            <!-- Quick Inquary Start -->
                            <div class="quickinquiry">
                            	<h2>Quick Inquary</h2>
                            	<form class="forms">
                                    <ul>
                                        <li>
                                            <input name="" value="Enter Name"
                                            onfocus="if(this.value=='Enter Name') {this.value='';}"
                                            onblur="if(this.value=='') {this.value='Enter Name';}" type="text" />
                                        </li>
                                        <li>
                                            <input name="" value="Enter Email"
                                            onfocus="if(this.value=='Enter Email') {this.value='';}"
                                            onblur="if(this.value=='') {this.value='Enter Email';}" type="text" />
                                        </li>
                                        <li>
                                            <input name="" value="Enter Company Name"
                                            onfocus="if(this.value=='Enter Company Name') {this.value='';}"
                                            onblur="if(this.value=='') {this.value='Enter Company Name';}" type="text" />
                                        </li>
                                        <li>
                                            <textarea rows="" cols=""
                                            onfocus="if(this.value=='Enter Massage') {this.value='';}"
                                            onblur="if(this.value=='') {this.value='Enter Massage';}" />Enter Massage</textarea>
                                        </li>
                                        <li>
                                            <button>Submit Comment</button>
                                        </li>
                                    </ul>
                                </form>
                            </div>
                            <!-- Quick Inquary End -->
                            <div class="clear"></div>
                        </div>
                    </div>
                    <!-- Contact Us End -->
                </div>
                <div class="one-third column left">
                	<div class="box-small">
                    	<h1 class="heading">Contact Info</h1>
                        <div class="box-in">
                        	<!-- Now Playing Start -->
                        	<div class="contact-widget">
                            	<p>
                                	1234 Saint-Ambroise, Suite 000<br />
                                    Montreal, Otawa, Canada<br />
                                    ABC 123<br />
                                </p>
                                <p>
                                	Call: 1.123.456.7891<br />
									Email: <a href="mailto:hello@theband.com">hello@theband.com</a><br />
                                </p>
                                <h4>Aditional info</h4>
                                <p>
                                	Sales: 1.866.924.1420<br />
									Concerts: <a href="mailto:hello@theband.com">hello@theband.com</a><br />
                                </p>
                            </div>
                            <!-- Now Playing End -->
                            <div class="clear"></div>
                        </div>
                    </div>
                    <div class="box-small">
                        <div class="box-in">
                        	<!-- Now Playing Start -->
                        	<a href="contact-us.html#"><img src="images/facebook.jpg" alt="" /></a>
                            <!-- Now Playing End -->
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clear"></div>
            <!-- Footer Start -->
            <div id="footer">
            	<div class="foot-top">
                	<!-- Footer Logo Start -->
                    <div class="logo-foot">
                    	<a href="contact-us.html#"><img src="images/logo-foot.png" alt="" /></a>
                    </div>
                    <!-- Footer Logo End -->
                    <!-- Footer Navigation Start -->
                    <div class="links-foot">
                    	<ul>
                        	<li><a href="contact-us.html#">Home</a></li>
                            <li><a href="contact-us.html#">News</a></li>
                            <li><a href="contact-us.html#">Tour Dates</a></li>
                            <li><a href="contact-us.html#">Audio</a></li>
                            <li><a href="contact-us.html#">Videos</a></li>
                            <li><a href="contact-us.html#">Gallery</a></li>
                            <li><a href="contact-us.html#">Contact</a></li>
                        </ul>
                    </div>
                    <!-- Footer Navigation End -->
                    <!-- Newsletter Start -->
                    <div class="newsletter">
                    	<h5 class="white">NEWSLETTER</h5>
                        <ul>
                        	<li class="left">
                            	<input name="" value="Enter Email Address"
                                onfocus="if(this.value=='Enter Email Address') {this.value='';}"
                                onblur="if(this.value=='') {this.value='Enter Email Address';}" type="text" class="bar" />    
                            </li>
                            <li class="right"><button class="backcolr">Submit</button></li>
                        </ul>
                    </div>
                    <!-- Newsletter End -->
                </div>
                <div class="foot-bottom">
                	<!-- Copyrights Start -->
                    <div class="copyrights">
                    	<p>Copyright <a href="contact-us.html#">Maziara</a> 2016</p>
                    </div>
                    <!-- Copyrights End -->
                    <!-- Follow Us and Top Start -->
                    <div class="followus-top">
                    	<a href="contact-us.html#top" class="top">TOP</a>
                        <!-- Follow Us Start -->
                    	<ul>
                        	<li><h6 class="white">Follow Us</h6></li>
                        	<li><a href="contact-us.html#" class="facebook">&nbsp;</a></li>
                            <li><a href="contact-us.html#" class="twitter">&nbsp;</a></li>
                            <li><a href="contact-us.html#" class="vimeo">&nbsp;</a></li>
                            <li><a href="contact-us.html#" class="amazon">&nbsp;</a></li>
                            <li><a href="contact-us.html#" class="apple">&nbsp;</a></li>
                            <li><a href="contact-us.html#" class="grooveshark">&nbsp;</a></li>
                            <li><a href="contact-us.html#" class="soundcloud">&nbsp;</a></li>
                        </ul>
                        <!-- Follow Us End -->
                    </div>
                    <!-- Follow Us and Top End -->
                </div>
            </div>
            <!-- Footer End -->
        </div>
        <div class="clear"></div>
    </div>
</div>
<!-- Outer Wrapper End -->
<script>
$('#menulock').click(function(){
	    
		$('#menunav').toggle();
	});
	if($(window).width()>767){
		   $('#menulock').hide();
		   $('#menunav').show();
		}else{
		   $('#menulock').show();
		   $('#menunav').hide();
		}
	$(window).resize(function(){
		if($(this).width()>767){
		   $('#menulock').hide();
		   $('#menunav').show();
		}else{
		   $('#menulock').show();
		   $('#menunav').hide();
		}
	});
    var nav = $('#header');
    var navHomeY = nav.offset().top;
    var isFixed = false;
    var $w = $(window);
    $w.scroll(function() {
        var scrollTop = $w.scrollTop();
        var shouldBeFixed = scrollTop > navHomeY;
        if (shouldBeFixed && !isFixed) {
            nav.css({
                position: 'fixed',
                top: 0,
                left: nav.offset().left,
                width: nav.width()
            });
            isFixed = true;
        }
        else if (!shouldBeFixed && isFixed)
        {
            nav.css({
                position: 'static'
            });
            isFixed = false;
        }
    });
</script>
</body>
</html>