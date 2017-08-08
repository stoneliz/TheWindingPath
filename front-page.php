<?php get_header(); ?>

<!-- Begin Flex Slider -->
    <div class="flexslider">
        <div class="slides">
        <li><img src="http://phagens.com/images/banner.png" alt="Image One"></li>
        <li><img src="http://phagens.com/images/banner1.png" alt="Image Two"></li>
        <li><img src="http://phagens.com/images/banner2.PNG" alt="Image Three"></li>
        </div>
        
        <a href="#">     
<img id="button" class="middledonate" src="http://phagens.com/images/middonateButton.png" alt="logo">   
  </a>
    </div>
    <!-- End Flex Slider -->
    
    <!-- Begin Widgets -->
    <div id="widgets">
        <section class="widget-item">
         <h2>ABOUT</h2>
        <?php if ( have_posts() ) : while( have_posts() ) : the_post(); // start loop one ?>
        <?php the_content(''); // get the home page's content ?>
        <?php endwhile; endif; // end loop one ?>
        </section>
        <section class="widget-item">
        <h2>EVENTS</h2>
        <ul>
		<?php rewind_posts(); // stop loop one ?>
        <?php query_posts('showposts=4'); // give directions to loop two ?>
        <?php while (have_posts()) : the_post(); // start loop two ?>
        <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
        <?php endwhile; // end loop two ?>
        </ul>
        </section>
        <section class="widget-item">
        <h2>NEWS</h2>
        <img src="  
http://fpoimg.com/300x300?text=CALENDAR&bg_color=777777&text_color=000000
 " width="300" height="300" />
        </section>
    </div>
    <!-- End Widgets -->

<?php get_footer(); ?>