<div class="content mr7">
			<?php if(have_posts()){ while(have_posts()){the_post(); ?>
			<div class="post">
				<h2><?php echo the_title(); ?></h2>
				<p><?php the_time(); ?></p>
				<p><?php echo the_content(); ?></p>
			</div>
			<?php }} else {
				echo "noting";
			}?>
		</div>
	<!--
    <pre><?php 	
      print_r($post);
   	?>
   	</pre>	
   !-->