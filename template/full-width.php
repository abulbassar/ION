<?php
/*
	Template name: Full width
*/
get_header();
?>


<!-- Content
================================================== -->


			<!-- Post -->
			<?php while(have_posts()): the_post();?>
				<?php the_content();?>
			<?php endwhile;?>


		



<?php

get_footer();
?>