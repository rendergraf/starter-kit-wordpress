<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, maximum-scale=1.0, minimum-scale=1.0, initial-scale=1.0">
	<title><?php wp_title('-', true, 'right'); ?></title>
	<meta name="Keywords" content="">
	<meta name="format-detection" content="telephone=yes">
	<!-- FIX HTML STYLES IE9 -->
    <!--[if gte IE 9]>
        <style type="text/css">
            .gradient {
                filter: none;
            }
        </style>
        <![endif]-->
        <!-- FIX HTML JS-->
    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <?php wp_head(); ?>

    <!-- W3TC-include-js-head -->
</head>
<!-- Start load block navbar -->
<?php get_template_part( 'blocks/navbar/navbar' ); ?>