<?php
/**
 * ============== Template Name: Testimonial Page
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

        <div class="row">

    <div class="col-lg-3 offset-lg-1 col-md-4 offset-md-0">
	<?php wp_nav_menu( array(
	'theme_location' => 'about-menu',
	'container_class' => 'side-menu',
	'before'            => '<h3 class="heading-primary heading-primary__xs heading-primary__caps"><i class="fas fa-angle-right"></i>',
	'after' => '</h3>'
	 ) );
 ?>
    </div>

    <div class="col-sm-7">

    <!--TESTIMONIAL CONTENT-->

        <?php if (have_rows('testimonial', 'option')):
        while (have_rows('testimonial', 'option')) : the_row();
        ?>
        <div class="testimonial-item">

            <p><?php the_sub_field('content', 'option');?>

                <span><?php the_sub_field('attributed_to', 'option');?></span>

            </p>

        </div>

        <?php endwhile;  endif; ?>

        </div>

</div>

    </div>

</div><!--c-->

<?php get_footer();?>
