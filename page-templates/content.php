<?php
/**
 * ============== Template Name: Contact Page
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

            <p><?php the_field('telephone_number', 'option');?></p>

            <p><a href=""><?php the_field('email_address', 'option');?></a></p>

        </div>

        <div class="col-7">

            <?php echo do_shortcode('[contact-form-7 id="537" title="Main Contact Form"]');?>

        </div><!--col7-->

    </div><!--row-->

    </div><!--content-block-->

    <?php get_template_part( 'template-parts/signpost');?> 

<?php get_footer();?>
