<?php
global $post, $wp_banner;
$header_banner= $wp_banner['header_banner_image'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Home</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- <link rel="stylesheet" href="<?php //bloginfo('template_url'); ?>/assets/css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="<?php //bloginfo('template_url');?>/assets/css/style.css" type="text/css" media="all">
<link rel="stylesheet" href="<?php //bloginfo('template_url');?>/assets/css/zerogrid.css" type="text/css" media="all">
<link rel="stylesheet" href="<?php //bloginfo('template_url');?>/assets/css/responsive.css" type="text/css" media="all"> 
<script type="text/javascript" src="<?php //bloginfo('template_url');?>/assets/js/jquery-1.4.2.js" ></script>
<script type="text/javascript" src="<?php //bloginfo('template_url');?>/assets/js/cufon-yui.js"></script>
<script type="text/javascript" src="<?php //bloginfo('template_url');?>/assets/js/cufon-replace.js"></script>  
<script type="text/javascript" src="<?php //bloginfo('template_url');?>/assets/js/Myriad_Pro_600.font.js"></script>
<script type="text/javascript" src="<?php //bloginfo('template_url');?>/assets/js/css3-mediaqueries.js"></script> -->
	<!--[if lt IE 9]>
	<script type="text/javascript" src="http://info.template-help.com/files/ie6_warning/ie6_script_other.js"></script>
	<script type="text/javascript" src="js/html5.js"></script>
<![endif]-->
	<?php wp_head(); ?>
</head>

<body id="page1">
	<div class="extra">
		<div class="main zerogrid">
			<!-- header -->
			<header> 
				<div class="row">
				<h1><a href="<?php echo home_url(); ?>" id="logo">Around the World</a></h1>
				<div class="right">
					<div class="wrapper">
						<form id="search" action="" method="post">
							<div class="bg">
								<input type="submit" class="submit" value="">
								<input type="text" class="input">
							</div>
						</form>
					</div>
					<div class="wrapper">
						<nav>
							<ul id="top_nav">
								<?php
									wp_nav_menu( array( 
									'theme_location' => 'top' ,
									'items_wrap' => '<li>%3$s</li>'
								)); ?>
								<!-- <li><a href="#">Register</a></li>
								<li><a href="#">Log In</a></li>
								<li><a href="#">Help</a></li> -->
							</ul>
						</nav>
					</div>
				</div>
		</div>
		<nav class="row">
			<ul id="menu">
			<?php
              wp_nav_menu( array( 
                'theme_location' => 'top-menu' ,
                'items_wrap' => '<li>%3$s</li>'
              )); ?>
				<!-- <li><a href="index.html" class="nav1">Home</a></li>
				<li><a href="About.html" class="nav2">About Us </a></li>
				<li><a href="Tours.html" class="nav3">Our Tours</a></li>
				<li><a href="Destinations.html" class="nav4">Destinations</a></li>
				<li class="end"><a href="contact.html" class="nav5">Contacts</a></li> -->
			</ul>
		</nav>
		<div class="row headerextra">
			<article class="col-1-3">
				<div class="wrap-col">
					<div class="text">
						<img src="<?php bloginfo('template_url');?>/assets/images/text1.jpg" alt="">

						<h2>The Best Offers</h2>
						<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
							laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore.</p>
						<a href="#" class="button">Read More</a>
					</div>
				</div>
			</article>
			<div class="col-1-3 col-extra">
				<div class="wrap-col">
				<?php bloginfo('template_url');?>/assets/images/img.jpg" alt=""> 
					<!-- <img src="<?php //echo $header_banner['url']; ?>" alt="Around The World">
					<?php //get_template_part( 'template-parts/header/header', 'image' ); ?> -->
					
			</div>
			</div>
			<article class="col-1-3">
				<div class="wrap-col">
					<ul class="tabs">
						<li><a href="#" class="active">Flight</a></li>
						<li><a href="#">Hotel</a></li>
						<li><a href="#">Car</a></li>
						<li class="end"><a href="#">Cruise</a></li>
					</ul>
					<div class="tabs_cont">
						<form id="form_1" action="" method="post">
							<div class="bg">
								<div class="wrapper">
									<div class="radio">
										<input type="radio" name="name1" checked>Round trip
									</div>
									<div class="radio"><input type="radio" name="name1">One way</div>
								</div>
								<a href="#">Multiple destinations</a>
								<div class="wrapper"><input type="text" class="input">From</div>
								<div class="wrapper"><input type="text" class="input">To</div>
								<div class="wrapper check_box"><input type="checkbox" checked><a href="#">Search nearby
										airports</a></div>
								<div class="wrapper"><input type="text" class="input input2" value="04/11/2010"
										onblur="if(this.value=='') this.value='04/11/2010'"
										onfocus="if(this.value =='04/11/2010' ) this.value=''">Depart (mm/dd/yy)</div>
								<div class="wrapper pad_bot1"><input type="text" class="input input2" value="04/11/2010"
										onblur="if(this.value=='') this.value='04/11/2010'"
										onfocus="if(this.value =='04/11/2010' ) this.value=''">Return (mm/dd/yy)</div>
								<div class="wrapper">
									<div class="radio"><input type="radio" name="name2" checked>Economy cabin</div>
									<div class="radio end"><input type="radio" name="name2">Business</div>
								</div>
								<div class="wrapper pad_bot1">
									<a href="#" class="button"
										onclick="document.getElementById('form_1').submit()">Search</a>
									Audlts <select>
										<option>1</option>
									</select>
								</div>
							</div>
						</form>
					</div>
				</div>
			</article>
		</div>
		</header>
		<!-- / header -->>