<?php 
	get_header(); 
	get_template_part('menu','top');
?>
	
	<div class="container-content">
		<?php 
			get_template_part('sidebar','right');
			get_template_part('content','page');
		?>
		
		<div class="clear"></div>
	</div>
<?php get_footer();  ?>