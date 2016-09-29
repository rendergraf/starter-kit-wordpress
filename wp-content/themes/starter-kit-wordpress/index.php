<?php get_header();?>

<!-- Start load block carousel -->
<?php get_template_part( 'blocks/carousel/carousel' ); ?>

<!-- Start load block Marketing Cards -->
<?php get_template_part( 'blocks/marketingcards/marketingcards' ); ?>

<!-- Start load block Article -->
<div class="article">
	<?php get_template_part( 'blocks/article/article' ); ?>
</div>
<!-- Start load block Form -->
<div class="container">
	<div class="row">
		<h2 class="paddin-form">Contac us</h2>
		<?php get_template_part( 'blocks/form/form' ); ?>
	</div>
</div>

<?php get_footer();?>