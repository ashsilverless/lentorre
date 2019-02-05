<?php
/**
 * ============== Template Name: Gallery Page
 *
 * @package Lentorre Lodge
 */
get_header();?>

    <?php
        $headerImg = get_field('header_image');
    ?>   

<div class="container">

    <div class="header-image" style="background-image: url(<?php echo $headerImg['url']; ?>);">
        
        <h1 class="header-image__heading heading-primary heading-primary__xl"><?php the_title();?></h1>      

    </div><!--header-image-->         

    <div class="content-block"><!--Gallery Block -->
        
        <?php 
        $images = get_field('gallery');
        if( $images ): ?>

        <div class="large-gallery">
        
          <?php foreach( $images as $image ): ?>
          
            <a href="<?php echo $image['url']; ?>" class="camp-gallery"  alt="<?php echo $image['alt']; ?>" style="background-image: url(<?php echo $image['url']; ?>);"></a>
        
            <?php endforeach; ?>
            
        </div> 

        <?php endif; ?>

    </div>
    
    <?php get_template_part( 'template-parts/signpost');?> 
              
</div><!--c-->                  

<?php get_footer();?>