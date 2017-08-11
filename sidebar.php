<!-- Begin Sidebar -->
<div id="sidebar">
   
    <!-- Begin Sub-Navigation -->
    <div id="sub-navigation" class="widget">
    <?php if (is_page()) : // if we are in "pages"... ?>
    <div class="sidebar">
    <h2 class="sub-navigation-title">
    <!-- <?php echo get_the_title($post->post_parent); // ...get the gateway page title ?> -->
    CATEGORIES</h2>

    <ul class="item"><?php     
    if ($post->post_parent) { // if the page has a parent...        
        wp_list_pages(array('child_of' => $post->post_parent, 'title_li' => __(''))); // ...list the sub-pages with no title        
    } else { // if the page does not have a parent...    
        wp_list_pages(array('child_of' => $post->ID, 'title_li' => __(''))); // ...list the sub-pages with no title     
    }    
    ?></ul>
    </div>
    <?php endif; // end if we are in "pages" ?>

    <?php if (!(is_page())) : // if we are not in "pages"... ?>
    <div class="sidebar">
    <h2 class="sub-navigation-title">CATEGORIES</h2>
    <ul class="sub-navigation-items" > 
    <?php wp_list_categories(array('title_li' => '')); // ...list the categories with no title 		?>
    </ul> 
    </div>
    <?php endif; ?>
    </div>
    <!-- End Sub-Navigation -->
    
    <!-- Begin Quotes -->
    <?php if (get_post_meta($post->ID, 'Quote', true)) : // check to see if there is a quote ?>
    <blockquote><?php echo get_post_meta($post->ID, 'Quote', true); // write out the quote ?></blockquote>
    <?php endif; ?>
    <!-- End Quotes -->
    
    <!-- Begin Dynamic Sidebar -->
    <div class="sidebar">
    <?php dynamic_sidebar(1); // call our widgets ?>
    </div>
    <!-- End Dynamic Sidebar -->

</div>

    <!-- single.php has the same style code below -->
    <style>    
		.post {
			width:95%;
			height:auto;
			float:center;
			margin:0 auto;
		}
		
		.leftColumn {
			width:70%;
			float:left;
		}
		
		.postParagraph {
			width:90%;
			margin:0 auto;
		}
		
		.sidebar {
			width:25%;
			float:right;
			border:1px solid #000;
            text-align:left;
			background:#E0E0E0;
		}
   
        .item {
             padding-left:10%;
             list-style-type:none;
        }
		
     	@media (max-width: 100px) {			        			
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
<!-- End Sidebar -->