<?php get_header(); ?>

    <!-- Begin Content -->
    <div class="post">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); // start the loop ?>
        <div class="leftColumn">                                        
            <div class="postParagraph">
            <h2><?php the_title(); // the posting title ?></h2>
            <?php the_content(''); // posting written content ?>        
            </div>    
        </div>
    <?php endwhile; endif; // end the loop ?>    
    </div>
    <!-- End Content -->

    <style>    
		.post {
			width:95%;
			height:100%;
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
			padding:10px
		}

        .item {
             padding-left:10%;
             list-style-type:none;
        }
		
     	@media (max-width: 1000px) {			        			
			.leftColumn {				
				width:100%;
				float:none;
			}	

            
			#middle {
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