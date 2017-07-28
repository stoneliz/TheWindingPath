<?php get_header(); ?>

    <!-- Begin Content -->
    <div class="post" style="width:940px;float:center;margin: 0 auto;">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); // start the loop ?>
        <div class="leftColumn" style="width:600px;float:left;">
        
            <?php the_post_thumbnail( 'large' ); // the featured image ?>
        
            <div class="postContent" style="width:540px;margin:0 auto;">
            <h3><?php the_title(); // the posting title ?></h3>
            <?php the_content(''); // posting written content ?>        
            </div>    
        </div>
    <?php endwhile; endif; // end the loop ?>    
    </div>
    <small>single.php</small>
    <!-- End Content -->
    
<?php get_sidebar(); ?>
<?php get_footer(); ?>