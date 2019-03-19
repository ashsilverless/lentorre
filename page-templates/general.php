<?php
/**
 * ============== Template Name: General Page
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

    <div class="content-block">

        <div class="row">

        <?php if ( get_field( 'call_out_text' ) ): ?>

        <div class="col-sm-5 offset-sm-1">

            <div class="callout">

                <p><span>"</span><?php the_field('call_out_text');?><span>"</span></p>

            </div>

        </div>

        <div class="col-sm-5 body-copy">

        <?php the_field('text_content');?>

        </div>

        <?php else: ?>

        <div class="col-10 offset-1 multi-col mb2">

        <?php the_field('text_content');?>

        </div>

        <?php endif; // end of if field_name logic ?>

        <div class="text-center">

        <a href="/contact" class="button button__prompt button__dark-hover mt1 mb1">
            <span>Get In Touch</span>
        </a>

        </div>

    </div><!--r-->

    </div>

    <div class="row"><!--Gallery Block -->
<div class="col-lg-12">
<?php
$images = get_field('gallery');
if( $images ): ?>


<div class="gallery">

  <?php foreach( $images as $image ): ?>
  <a href="<?php echo $image['url']; ?>" class="camp-gallery gallery__item darkPanel desat__item"  alt="<?php echo $image['alt']; ?>" style="background-image: url(<?php echo $image['url']; ?>);">

  </a>

<?php endforeach; ?>
</div>
<?php endif; ?>

</div><!--row-->
</div>

    <?php get_template_part( 'template-parts/signpost');?>

</div><!--c-->

<?php get_footer();?>
