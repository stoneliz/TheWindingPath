<!doctype html>
<html>
<head>
<meta charset="UTF-8">

<!-- Start Title Tag -->
<title><?php get_my_title_tag(); ?></title>
<!-- End Title Tag -->

<!-- Begin Meta -->
<meta name="description" content="<?php echo strip_tags(get_the_excerpt()); ?>" />
<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0" />
<!-- End Meta -->

<!-- Begin Styles -->
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>" />
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/flexslider.css" type="text/css">
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/menu.css" type="text/css">
<!-- End Styles -->

<!-- Begin Scripts -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/scripts/jquery.flexslider.js"></script>
<!-- <script src="<?php bloginfo('template_directory'); ?>/scripts/navigation.js"></script> -->
<!-- End Scripts -->

<!-- Begin Flex Slider -->
<script type="text/javascript" charset="utf-8">
  $(window).load(function() { // enable function upon window load
    $('.flexslider').flexslider(); // call flexslider function
  });
</script>
<!-- End Flex Slider -->
    


<!-- Begin Toggle Menu -->
<script type="text/javascript" charset="utf-8">
  $(window).load(function() { // enable function upon window load
	$("#toggle").click(function() { // when toggle is clicked...
		$("#navigation").toggle(); // ... open or close the navigation
	});
  });
</script>
<!-- End Toggle Menu -->

<!-- Start WP Head -->
<?php wp_head(); ?>
<!-- End WP Head -->

</head>
<body <?php body_class();?>>

<!-- Begin Header -->
<div id="header">
<div class="headerlinks">   
 
<ul class="headerli">    
<li class="login"><?php wp_loginout(); ?></li>
<li class="faq"><a href="#">FAQ</a></li>     
</ul>   
 
      <a href="#"> 
<img id="button" class="donate" src="http://phagens.com/images/donateButton.png" alt="donate">   
  </a>      
</div>
    
<div class="logo">    
    <a href="https://www.phagens.com/web210/">
        <img id="logo" src="https://www.phagens.com/web210/wp-content/uploads/2017/07/logo-green.png" alt="logo">        
    </a>
    </div>
    
<img id="toggle" src="http://phagens.com/images/img-toggle.png" width="25" height="25" alt="Toggle Menu">
</div>
<!-- End Header -->

<!-- Begin Navigation -->
<?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'container' => 'div','container_id' => 'navigation', 'items_wrap' => '<ul id="navigation-items" class="%2$s">%3$s</ul>', ) ); ?>
<!-- End Navigation -->

<!-- Begin Content -->
<div id="middle">