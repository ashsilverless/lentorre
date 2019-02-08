<?php
/**
 * The header for our theme
 *
 * @package Lentorre Lodge
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<link rel="stylesheet" href="https://use.typekit.net/rtu7icy.css"><!-- loaded first to avoid FOUT-->
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" type="image/x-icon" />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="trans">
<?php get_template_part( 'template-parts/loader');?>
</div>

    <div id="page" class="site-wrapper">

    <header class="<?php if ( is_page_template ('page-templates/home.php')) { echo 'transparent'; echo ' home';}?>">

        <div class="header-inner">

            <div class="container">

            <div class="row no-gutters">



                    <div class="header-inner__contact">

                            <p><?php the_field('telephone_number', 'option');?></p>

                            <p><?php the_field('email_address', 'option');?></p>

                    </div>

                    <div class="header-inner__brand">

                        <?php $brandImg = get_field('logo', 'option');?>

                        <a href="<?php echo get_site_url(); ?>">

                            <img src="<?php echo $brandImg['url']; ?>"/>

                        </a>

                    </div>

                    <div class="header-inner__trigger hamburger hamburger--collapse">

                        <div class="hamburger-box">

                            <div class="hamburger-inner"></div>

                        </div>

                    </div>

                </div>

            </div><!--r-->

        </div>

        <div class="navigation">

            <div class="container">

          <div class="roww">

    <?php
    wp_nav_menu( array(
    'theme_location' => 'main-menu',
    'container_class' => 'main-menu' ) );
    ?>

          </div><!--row-->

        </div><!--container-->

        </div><!--navigation-->

</header>

  <main>
