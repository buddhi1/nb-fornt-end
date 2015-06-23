<html>
<head>
	
	<title>Home</title>

	<link rel="stylesheet" href="js/woothemes-FlexSlider-8ed61ac/flexslider.css" type="text/css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
	<script src="js/woothemes-FlexSlider-8ed61ac/jquery.flexslider.js"></script>

	<script type="text/javascript" charset="utf-8">
	  $(window).load(function() {
	    $('#flexslider-carousel').flexslider({
	    	animation: "slide",
	    	animationLoop: true,
	    	slideshow: true,
	    	controlNav: false,
	    	itemWidth: 800,
	    	itemMargin: 0,
	    	minItems: 5,
	    	move: 1
	    });
	   
	    $('#flexslider-main').flexslider({
		    animation: "slide",
		    smoothHeight: false, 
		    controlNav: false,
		  });

	  });
	</script>

	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="CSS/style.css">
</head>
<body>
	<header class="header">
		<div class="logo">
			<a href="#">
				<img src="photos/logo/logo.jpg">n00b Alliance
			</a>
		</div>
		<div class="leaderboard">
			<a href="#">
				<div class="abc"></div>
				<img src="photos/logo/leaderboard.jpg">
			</a>
		</div>
	</header>
	<nav class="navigation">
		<ul class="">
			<a href=""><li>Home</li></a>
			<a href=""><li>Players</li></a>
			<a href=""><li>News</li></a>
			<a href=""><li>Blogs</li></a>
			<a href=""><li>Guides</li></a>
			<a href=""><li>Shop</li></a>
			<a href=""><li>Videos</li></a>
			<a href=""><li>Streams</li></a>
			<a href=""><li>Matches</li></a>
			<a href=""><li>Galleries</li></a>
			<a href=""><li>Forums</li></a>
			<a href=""><li>Downloads</li></a>
			<a href=""><li>About</li></a>
		</ul>
		<ul class="social">
			<li class="anim-01 twitch"><a href="http://www.twitch.tv/team/dignitas">
				<i class="fa fa-twitch"></i> 
			</a></li>
			<li class="anim-01 twitter"><a href="http://www.twitter.com">
				<i class="fa fa-twitter"></i> 
			</a></li>
			<li class="anim-01 facebook"><a href="http://www.facebook.com">
				<i class="fa fa-facebook"></i> 
			</a></li>
			<li class="anim-01 youtube"><a href="http://www.youtube.com">
				<i class="fa fa-youtube"></i> 
			</a></li>
			<li class="anim-01 steam"><a href="http://www.steam.com">
				<i class="fa fa-steam"></i> 
			</a></li>
			<li class="anim-01 google-plus"><a href="https://plus.google.com">
				<i class="fa fa-google-plus"></i> 
			</a></li>
		</ul>
	</nav>
	<div class="sponsors">
		<div class="flexslider" id="flexslider-carousel">
		  <ul class="slides">
		    <li>
		    	<a href=""><img src="photos/sponsors/caltex.jpg" /></a>
		    </li>
		    <li>
		    	<a href=""><img src="photos/sponsors/filmax.jpg" /></a>
		    </li>
		    <li>
		    	<a href=""><img src="photos/sponsors/image_round.jpg" /></a>
		    </li>
		    <li>
		      	<a href=""><img src="photos/sponsors/images.jpg" /></a>
		    </li>
		    <li>
		      	<a href=""><img src="photos/sponsors/mer.jpg" /></a>
		    </li>
		    <li>
		      	<a href=""><img src="photos/sponsors/mer.jpg" /></a>
		    </li>
		    <li>
		    	<a href=""><img src="photos/sponsors/images.jpg" /></a>
		    </li>
		    <li>
		      	<a href=""><img src="photos/sponsors/mer.jpg" /></a>
		    </li>
		    <li>
		      	<a href=""><img src="photos/sponsors/image_round.jpg" /></a>
		    </li>
		    <li>
		      	<a href=""><img src="photos/sponsors/image_round.jpg" /></a>
		    </li>
		  </ul>

		</div>
	</div>	
	<div class="wrapper-content">
		<div class="slider">
			<div class="flexslider" id="flexslider-main">
			  <ul class="slides">
			    <li>			      
			      <img src="photos//main-slider/slide1.JPG" />
			      <p class="flex-slide-caption">Caption 1</p>
			    </li>
			    <li>
			      <img src="photos//main-slider/slide2.JPG" />
			      <p class="flex-slide-caption">Caption 1</p>
			    </li>
			    <li>
			      <img src="photos//main-slider/slide3.JPG" />
			      <p class="flex-slide-caption">Caption 1</p>
			    </li>
			  </ul>
			</div>			
			<div class="news">
				<ul>
					<li class="news-item">
						<div class="news-image"></div>
						<h2>Win a team Dignitas LCS player jersey</h2>
					</li>
					<li class="news-item">
						<div class="news-image"><h2 class="head" styles="font-size: 10px">Win a team Dignitas LCS player jersey</h2></div>
						<h2 class="head" styles="font-size: 10px">Win a team Dignitas LCS player jersey</h2>
					</li>
				</ul>
			</div>
		</div>
		<div class="side-bar">
			<div class="vidcarousel">
				<ul class="streams-list">
					<li class="lead">
						<i class="fa fa-twitch"> Live Streams</i>
					</li>
					<li class="is-stream">
						<iframe width="250" height="195" src="https://www.youtube.com/watch?v=QcIy9NiNbmo">
						</iframe>
						<span class="is-live"><a href="#">Live</a></span>
						<a href="#">
							<img src="photos/is-live/image-slider-2.jpg" alt="image">
						</a>
						<h2>Person Name</h2>
						<p>
							<i class="fa fa-eye"># Views</i>
						</p>
						<a id="take_look" href="#" class="fa fa-twitch">
							<i>Take a Look</i>
						</a>
					</li>
				</ul>
				<ul class="widget-list">
					<li class="lead">
						<i class="fa fa-play-circle"> Other Media</i>
					</li>
					<li class="photo-content">
						<img src="photos/is-live/image-slider-2.jpg" width="80px" height="80px">
						<h2><a href="https://www.youtube.com/watch?v=fa_58nN_yPM">Heading 1!!!</a></h2>
						<p>We're back!!!</p>
						<div class="photo-des">
							<a href="#" class="fa fa-play-circle">
								<i>Take a Look</i>
							</a>
						</div>
					</li>
				</ul>
			</div>
		</div>
		fdgfdg
	</div>
	<h2 class="head" styles="font-size: 10px">Win a team Dignitas LCS player jersey</h2>
</body>
</html>