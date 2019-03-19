<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<link href="https://fonts.googleapis.com/css?family=Titillium+Web:700,600,400" rel="stylesheet">
	<?php wp_head(); ?>
	<?php get_template_part('template-parts/partials/analytics'); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="site">
		<?php get_template_part('template-parts/core/header'); ?>
	<div id="content" class="site-content">
