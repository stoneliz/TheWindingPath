<?php get_header(); ?>

    <!-- Begin Content -->
    <div class="post">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); // start the loop ?>
        <div class="leftColumn">
        
            <!-- <?php the_post_thumbnail( 'large' ); // the featured image ?> -->
                    
            <div class="postParagraph">
            <h3><?php the_title(); // the posting title ?></h3>
            <?php the_content(''); // posting written content ?>        
            </div>    
        </div>
    <?php endwhile; endif; // end the loop ?>    
    </div>
    <!-- <small>single.php</small> -->
    <!-- End Content -->
    
    <style>    
		.post {
			width:95%;
			height:auto;
			float:center;
			margin:0 auto;
		}
		
		.leftColumn {
			width:60%;
			float:left;
		}
		
		.postParagraph {
			width:90%;
			margin:0 auto;
		}
		
		.sidebar {
			width:35%;
			float:right;
			border:1px solid #000;
			background:#E0E0E0;
			padding:10px"
		}
		
     	@media (max-width: 768px) {			        			
			.leftColumn {				
				width:100%;
				float:none;
			}	
			
	        .sidebar {											
				width:50%;	
				float:none;
				margin:0 auto;
			}	 
			.post {margin: 0;}
         }      
    </style>
    
<?php get_sidebar(); ?>
<?php get_footer(); ?>