<?php
/**
 * The template for displaying the footer
 * Contains the closing of the #content div and all content after.
 * @package Lentorre Lodge
 */
?>

</main>
<footer class="footer"> 

    <div class="container">
        
        <?php $footerImg = get_field('background_image', 'option');?>
        
        <div class="footer-cta" style="background-image: url(<?php echo $footerImg['url']; ?>);">
        
            <h2 class="heading-primary heading-primary__md heading-primary__light"><?php the_field('text', 'option');?></h2>
            
            <a href="/contact" class="button">
                <span><?php the_field('button_text', 'option');?></span>
            </a>  
                    
        </div>
    
        <div class="socket">
            
            <div class="row">
            
                <div class="col-3 socials">
                    
                    <?php if( have_rows('social_links', 'option') ): while( have_rows('social_links', 'option') ): the_row(); ?>
                    
                    <a href="<?php the_sub_field('page_link'); ?>"><i class="fab fa-<?php the_sub_field('name'); ?>"></i></a>
                    
                    <?php endwhile; endif; ?>  
                    
                </div> 		
                    
                <div class="col-9 socket__colophon">	
                    
                    &copy; Lentorre Lodge <?php echo date ('Y');?>
                    
                    <a href="">Terms</a>
                    
                    <a href="">Privacy</a> 
                    
                    <a href="">Created by Silverless</a>
                    
                </div> 		
            
            </div><!--row-->
            
        </div><!--socket-->
    
    </div><!--container-->    	

</footer>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>