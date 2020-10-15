<?php
/**
 * The template for displaying full width pages.
 *
 * Template Name: Full width
 *
 * @package storefront
 */

get_header(); ?>
<style type="text/css">
	.sub-menu {
		z-index: 999;
	}
	.bg-sec2 {
		background: #DDD;
	}
	.col-full {
		
	}
	.cf7sr-g-recaptcha {
		width: 304px;
		margin: 0 auto;
	}
</style>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main" style="z-index: 0;position: relative;">

			<!--h1>Preços & Planos</h1>

			<p>Soluções completas para projetos.</p-->

			<?php 
			#<div class="row">
			#var_dump($wp_query);die;
			#force_database_aditional_tables_share($wp_query);
			global $please_dont_change_wpdb_woo_separated_tables;
			$please_dont_change_wpdb_woo_separated_tables = true;
			?>

			<div id="produtos" class="col-12" style="padding: 20px 40px;">
				<?php echo do_shortcode('[insert page="3898" display="all"]'); ?>
			</div>
			<div id="clientes" class="col-12 bg-sec2" style="padding: 20px 40px;">
				<?php echo do_shortcode('[insert page="2701" display="all"]'); ?>
			</div>
			<div id="quem-somos" class="col-12" style="padding: 20px 40px;">
				<?php echo do_shortcode('[insert page="452" display="all"]'); ?>
			</div>
			<div id="contato" class="col-12 bg-sec2 text-center" style="padding: 20px 40px;">
				<?php echo do_shortcode('[insert page="24" display="all"]'); ?>
			</div>
			<?php
			/* #echo do_shortcode('[products ids="3316,3542,3286"]'); ?>

			<div class="col-3">
				<?php echo do_shortcode('[product id="3286" columns="1"]'); ?>
			</div>

			<div class="col-3">
				<?php echo do_shortcode('[product id="3316" columns="1"]'); ?>
			</div>

			<div class="col-3">
				<?php echo do_shortcode('[product id="3313" columns="1"]'); ?>
			</div>
			<?php /* echo do_shortcode('[product id="3313" columns="1"]'); ?>
			<?php echo do_shortcode('[product id="3542" columns="1"]'); ?>
			<?php echo do_shortcode('[product id="3403" columns="1"]'); ?>
			</div>
			<?php echo do_shortcode('[product id="3917" columns="1"]'); */ ?>
			<?php #die(); ?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
