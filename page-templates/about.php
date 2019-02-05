<?php
/**
 * ============== Template Name: About Page
 *
 * @package Lentorre Lodge
 */
get_header();?>

<?php
    $headerImg = get_field('banner_image');
?>   

<div class="container">

    <div class="header-image" style="background-image: url(<?php echo $headerImg['url']; ?>);">
        
        <h1 class="header-image__heading heading-primary heading-primary__xl"><?php the_title();?></h1>      

    </div><!--header-image-->         

    <div class="content-block">

        <div class="row mb3"> 
    
        <div class="col-3 offset-1">
            
        <?php wp_nav_menu( array( 
        'theme_location' => 'about-menu', 
        'container_class' => 'side-menu',
        'before'            => '<h3 class="heading-primary heading-primary__xs heading-primary__caps"><i class="fas fa-angle-right"></i>',
        'after' => '</h3>'
         ) ); 	
        ?>		     
        
        </div>
    
        <div class="col-7">

<!--TEXT CONTENT-->

            <div class="body-copy">   
              
                <?php the_field('body_copy');  ?>
            
            </div>

<!--FAQ CONTENT-->

            <div class="toggleWrapper">
        
            <?php if( have_rows('faq') ): 	
                $i = 0; 
            		while ( have_rows('faq') ) : the_row(); 
                $i++;?>

                <div class="toggle mb2">

                    <div class="toggle__question" role="tab">
                            
                        <p class="heading-primary heading-primary__sm heading-primary__bold">
                        
                            <span>Q<?php echo $i; ?></span>
                            
                            <?php the_sub_field('question'); ?>
                            
                            <i class="fas fa-times close-toggle"></i>
                        
                        </p>
                    
                    </div>
    
                    <div class="toggle__answer" role="tabpanel">
                        
                        <p><?php the_sub_field('answer'); ?></p>
                    
                    </div>

                </div>
	
                <?php 
                  $tCount = $i;
                  endwhile; 
                  endif;
                ?>
        
            </div><!--togglewrapper-->
  
        </div><!--col7-->
    
<!--TEAM CONTENT-->

        <?php 
          if( have_rows('team') ): ?>
        
        <div class="col-10 offset-1">
            
            <div class="team-wrapper content-block">
              
            <?php while ( have_rows('team') ) : the_row(); 
            $teamImg = get_sub_field('image'); ?>
            
                <div class="team-wrapper__person" style="background-image: url(<?php echo $teamImg['url']; ?>);">
            		
            	    <h3 class="name heading-primary heading-primary__sm"><?php the_sub_field('name'); ?></h3>
            
                </div>
        			
                <?php endwhile;?>
            
            </div><!--team-wrapper-->
        
        </div><!--col12-->
        
        <?php endif;?>    

    </div><!--row-->    

    </div><!--content-block-->
 
</div><!--c-->

<?php get_footer();?>
