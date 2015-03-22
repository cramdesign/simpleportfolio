<figure class="post"><a href="<?php the_permalink(); ?>" class="ajax-popup-link">
	
	<div class="poster">

		<?php 
			// grab the image set in the "Featured Image" control on the post editor
			// this capability has to be enabled first in functions.php
			the_post_thumbnail( 'medium' ); 
		?>

	</div>
	
	<figcaption>
		
		<?php 
			// print the title
			the_title( '<figcaption class="title">', '</figcaption>' );
		?>
				
	</figcaption>
	
</a></figure><!-- post -->

