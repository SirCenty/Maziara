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
                                <li class="current-menu-item"><a href="index.php">Home</a></li>
                                <li><a href="about-us.html">About Us</a></li>
                                <li><a href="news.html">News</a></li>
                                <li><a href="index.php#">Events</a>
                                    
                                </li>
                                <li><a href="index.php#">GIGS</a>
                                    <ul>
                                        <li><a href="timeline.html">Timeline</a></li>
                                        <li><a href="calendar.html">Calendar</a></li>
                                        <li><a href="map.html">Map</a></li>
                                    </ul>
                                </li>
                                <li><a href="blog.html">Blog</a>
                                    
                                </li>
                                <li><a href="index.php#">Gallery</a>
                                    <ul>
                                        <li><a href="gallery-two-col.html">Two Column</a></li>
                                        <li><a href="gallery-three-col.html">Three Column</a></li>
                                        <li><a href="gallery-four-col.html">Four Column</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact-us.html">Contact</a></li>
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
                	<li><a href="about-us.html" class="active">About Us</a></li>
                    <li><a href="news.html">Latest NEWS</a></li>
                    <li><a href="contact-us.html">Contact Us</a></li>
                </ul>
            </div>
            <!-- Second Level Navigation End -->
            <div class="clear"></div>
            <!-- Sub Page Banner Start -->
            <div id="sub-banner" class="row">
            	<a href="about-us.html#"><img src="images/sub-banner2.jpg" alt="" /></a>
                <div class="sub-caption">
                	<h1></h1>
                    <h1>OUR <span class="colr">BAND</span></h1>
                </div>
            </div>
            <!-- Sub Page Banner End -->
            <div class="clear"></div>
        	<!-- Container Start -->
            <div class="container row">
            	<div class="sixteen columns left">
                	<h1 class="heading">about us</h1>
                    <!-- Static Page Start -->
                    <div class="in-sec nopad-bot">
                    	<div class="static">
                            <h4>Lorem ipsum dolor sit amet consectetur adipiscing elit Integer adipiscing erat eget risus.</h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer adipiscing erat eget risus sollicitudin pellentesque et non erat. Maecenas nibh dolor, malesuada et bibendum a, sagittis accumsan ipsum. Pellentesque ultrices ultrices sapien, nec tincidunt nunc posuere ut. Cras dui nulla, tincidunt et hendrerit vitae, aliquet non urna. Vestibulum et erat metus, in rhoncus ante. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In sed turpis egestas risus rutrum aliquet at eget nisi. Quisque mauris mi, venenatis eget rutrum sit amet, pulvinar vel est. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tortor urna, tempus ac convallis ac, lobortis eget ligula.
                            </p>
                            <p>
                                Vestibulum scelerisque fringilla ullamcorper. Fusce et arcu justo. Suspendisse potenti. Nunc rutrum dui ut sapien sodales aliquet. Fusce gravida tristique dui, sit amet auctor diam aliquet sit amet. Maecenas ornare pulvinar aliquet. Nunc laoreet ante massa, vel dictum augue. Nullam quis nibh ipsum. Cras sit amet purus at urna porttitor vestibulum. Duis molestie vestibulum rhoncus. Etiam interdum consequat faucibus. Suspendisse potenti. Nunc nec turpis ligula, ut lobortis nisl.
                            </p>
                            <p>
                                Curabitur quis sapien lectus, sed hendrerit felis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. In vitae elit ac risus hendrerit dapibus. Ut consequat, massa porttitor viverra pretium, libero velit viverra lectus, et pretium augue orci a nulla. Phasellus pharetra massa non odio dapibus sollicitudin. Sed ut euismod mauris. Mauris fringilla, ligula non iaculis tincidunt, felis felis blandit ante, vitae sagittis lacus magna non mi. Ut hendrerit justo lectus. Suspendisse ac dolor sed lacus malesuada placerat id eu eros. Praesent non congue sem. Donec vulputate tincidunt felis vitae convallisCurabitur quis sapien lectus, sed hendrerit felis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. In vitae elit ac risus hendrerit dapibus. Ut consequat, massa porttitor viverra pretium, libero velit viverra lectus, et pretium augue orci a nulla. Phasellus pharetra massa non odio dapibus sollicitudin. Sed ut euismod mauris. Mauris fringilla, ligula non iaculis tincidunt, felis felis blandit ante, vitae sagittis lacus magna non mi. Ut hendrerit justo lectus. Suspendisse ac dolor sed lacus malesuada placerat id eu eros. Praesent non congue sem. Donec vulputate tincidunt felis vitae convallis Curabitur quis sapien lectus, sed hendrerit felis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. In vitae elit ac risus hendrerit dapibus. Ut consequat, massa porttitor viverra pretium, libero velit viverra lectus.
                            </p>
                        </div>
                        <br />
                        <h3 class="hidemobile">Our Group member</h3>
                        <br />
                        <ul class="prod-list hidemobile">
                        	<li>
                            	<a href="album-detail.html" class="thumb"><img src="images/album5.jpg" alt="" /><span>&nbsp;</span></a>
                                <h4 class="title"><a href="album-detail.html">THE FLOOR IN SOUTH</a></h4>
                                <p>MP3 CD Library Binding</p>
                                <div class="prod-opts">
                                	<h6>BUY NOW</h6>
                                    <a href="about-us.html#" class="amazon">&nbsp;<span>Amazon</span></a>
                                    <a href="about-us.html#" class="apple">&nbsp;<span>ITUNES</span></a>
                                    <a href="about-us.html#" class="grooveshark">&nbsp;<span>GrooveShark</span></a>
                                    <a href="about-us.html#" class="soundcloud">&nbsp;<span>SoundCloud</span></a>
                                </div>
                            </li>
                            <li>
                            	<a href="album-detail.html" class="thumb"><img src="images/album6.jpg" alt="" /><span>&nbsp;</span></a>
                                <h4 class="title"><a href="album-detail.html">date and line-up</a></h4>
                                <p>MP3 CD Library Binding</p>
                                <div class="prod-opts">
                                	<h6>BUY NOW</h6>
                                    <a href="about-us.html#" class="amazon">&nbsp;<span>Amazon</span></a>
                                    <a href="about-us.html#" class="apple">&nbsp;<span>ITUNES</span></a>
                                    <a href="about-us.html#" class="grooveshark">&nbsp;<span>GrooveShark</span></a>
                                    <a href="about-us.html#" class="soundcloud">&nbsp;<span>SoundCloud</span></a>
                                </div>
                            </li>
                            <li>
                            	<a href="album-detail.html" class="thumb"><img src="images/album7.jpg" alt="" /><span>&nbsp;</span></a>
                                <h4 class="title"><a href="album-detail.html">Spanish iTunes</a></h4>
                                <p>MP3 CD Library Binding</p>
                                <div class="prod-opts">
                                	<h6>BUY NOW</h6>
                                    <a href="about-us.html#" class="amazon">&nbsp;<span>Amazon</span></a>
                                    <a href="about-us.html#" class="apple">&nbsp;<span>ITUNES</span></a>
                                    <a href="about-us.html#" class="grooveshark">&nbsp;<span>GrooveShark</span></a>
                                    <a href="about-us.html#" class="soundcloud">&nbsp;<span>SoundCloud</span></a>
                                </div>
                            </li>
                            <li>
                            	<a href="album-detail.html" class="thumb"><img src="images/album8.jpg" alt="" /><span>&nbsp;</span></a>
                                <h4 class="title"><a href="album-detail.html">Planet FM</a></h4>
                                <p>MP3 CD Library Binding</p>
                                <div class="prod-opts">
                                	<h6>BUY NOW</h6>
                                    <a href="about-us.html#" class="amazon">&nbsp;<span>Amazon</span></a>
                                    <a href="about-us.html#" class="apple">&nbsp;<span>ITUNES</span></a>
                                    <a href="about-us.html#" class="grooveshark">&nbsp;<span>GrooveShark</span></a>
                                    <a href="about-us.html#" class="soundcloud">&nbsp;<span>SoundCloud</span></a>
                                </div>
                            </li>
                        </ul>
                        <div class="clear"></div>
                    </div>
                    <!-- Static Page End -->
                </div>
            </div>
            <div class="clear"></div>
            <!-- Footer Start -->
            <div id="footer">
            	<div class="foot-top">
                	<!-- Footer Logo Start -->
                    <div class="logo-foot">
                    	<a href="about-us.html#"><img src="images/logo-foot.png" alt="" /></a>
                    </div>
                    <!-- Footer Logo End -->
                    <!-- Footer Navigation Start -->
                    <div class="links-foot">
                    	<ul>
                        	<li><a href="about-us.html#">Home</a></li>
                            <li><a href="about-us.html#">News</a></li>
                            <li><a href="about-us.html#">Tour Dates</a></li>
                            <li><a href="about-us.html#">Audio</a></li>
                            <li><a href="about-us.html#">Videos</a></li>
                            <li><a href="about-us.html#">Gallery</a></li>
                            <li><a href="about-us.html#">Contact</a></li>
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
                    	<p>Copyright <a href="about-us.html#">Maziara</a> 2016</p>
                    </div>
                    <!-- Copyrights End -->
                    <!-- Follow Us and Top Start -->
                    <div class="followus-top">
                    	<a href="about-us.html#top" class="top">TOP</a>
                        <!-- Follow Us Start -->
                    	<ul>
                        	<li><h6 class="white">Follow Us</h6></li>
                        	<li><a href="about-us.html#" class="facebook">&nbsp;</a></li>
                            <li><a href="about-us.html#" class="twitter">&nbsp;</a></li>
                            <li><a href="about-us.html#" class="vimeo">&nbsp;</a></li>
                            <li><a href="about-us.html#" class="amazon">&nbsp;</a></li>
                            <li><a href="about-us.html#" class="apple">&nbsp;</a></li>
                            <li><a href="about-us.html#" class="grooveshark">&nbsp;</a></li>
                            <li><a href="about-us.html#" class="soundcloud">&nbsp;</a></li>
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