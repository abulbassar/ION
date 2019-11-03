<?php
// for icon Theme
?>

<?php

function sec_one_iconbox($sec_one_iconbox){
	$atts=shortcode_atts(
		array(
			'sec_one_heading'=>'',
			'sec_one_head_desc'=>'',
			'sec_one_group'	=> '',
		'sec_one_icon'	=>'',
		'sec_one_box_head' 	=>'',
		'sec_one_box_desc'	=>'',
		),$sec_one_iconbox
	);
	ob_start();
	
?>
	
				<section id="one" class="wrapper style1">
				<header class="major">
					<h2><?php echo esc_attr($atts['sec_one_heading']);?></h2>
					<p><?php echo esc_attr($atts['sec_one_head_desc']);?></p>
				</header>
				
				
				<div class="container">
					<div class="row">
					<?php $sec_one_group_keys = vc_param_group_parse_atts( $atts['sec_one_group'] );
					//echo '<pre>';
					//print_r($sec_one_group_keys);
					//echo '</pre>';
				if(is_array($sec_one_group_keys)):
				foreach($sec_one_group_keys as $sec_one_group_key){ ?>
					
						<div class="4u">
							<section class="special box">
								<i class="<?php echo esc_attr($sec_one_group_key['sec_one_icon']);?>" style="font-size:60px"></i>
								<h3><?php echo esc_attr($sec_one_group_key['sec_one_box_head']);?></h3>
								<p><?php echo esc_attr($sec_one_group_key['sec_one_box_desc']);?></p>
							</section>
						</div>
				<?php }
					endif;
				?>	
					
					</div>
				</div>
			</section>
			
	

<?php 
return ob_get_clean();
	
	
}
add_shortcode('sec_one','sec_one_iconbox');

// services

function our_service($our_service){
	$atts=shortcode_atts(
		array(
		'sec_two_heading'			=>'',
		'sec_two_desc'			=>'',
		'section_two_postqty'	=>'',
		
		),$our_service
	);
	ob_start();
	
?>
	<?php 
		$args = array(
			'post_type'	=> 'our_service',
			'posts_per_page'	=> $atts['section_two_postqty'],
		);
		$service_query = new WP_Query( $args );

	?>
	
			<section id="two" class="wrapper style2">
				<header class="major">
					<h2><?php echo esc_attr($atts['sec_two_heading']);?></h2>
					<p><?php echo esc_attr($atts['sec_two_desc']);?></p>
				</header>
				<div class="container">
					<div class="row">
						<?php while( $service_query->have_posts()):
					$service_query->the_post();
				?>
					
						<div class="6u">
							<section class="special">
								<a href="#" class="image fit">
								<?php the_post_thumbnail(array(680,308));?>
								</a>
								<h3><?php the_title();?></h3>
								<p><?php the_content();?></p>
								<ul class="actions">
									<li><a href="#" class="button alt">Learn More</a></li>
								</ul>
							</section>
						</div>
						<?php endwhile;?>
						<?php wp_reset_postdata(); ?>
					</div>
				</div>
			</section>

<?php 
return ob_get_clean();
	
	
}

add_shortcode('section_two','our_service');

// feature

function our_feature($our_feature){
	$atts=shortcode_atts(
		array(
		'sec_three_heading'			=>'',
		'sec_three_desc'			=>'',
		'section_three_postqty'	=>'',
		'sec_three_side_post_head'	=>'',
		
		),$our_feature
	);
	ob_start();
	
?>
	<?php 
		$args = array(
			'post_type'	=> 'post',
			'posts_per_page'	=> $atts['section_three_postqty'],
		);
		$feat_query = new WP_Query( $args );

	?>
		<section id="three" class="wrapper style1">
				<div class="container">
					<div class="row">
						<div class="8u">
							<section>
								<?php while( $feat_query->have_posts()):
								$feat_query->the_post();
								?>
								<h2><?php the_title();?></h2>
								<a href="#" class="image fit">
								<?php the_post_thumbnail();?>
								</a>
								<p><?php the_content();?></p>
								<?php endwhile;?>
								<?php wp_reset_postdata(); ?>
							</section>
						</div>
						<div class="4u">
							<section>
								<h3><?php echo esc_attr($atts['sec_three_heading']);?></h3>
								<p><?php echo esc_attr($atts['sec_three_desc']);?></p>
								<ul class="actions">
									<li><a href="#" class="button alt">Learn More</a></li>
								</ul>
							</section>
							<hr />
							<section>
								<h3><?php echo esc_attr($atts['sec_three_side_post_head']);?></h3>
								<ul class="alt">
								<?php $args = array(
									'post_type'	=> 'our_service',
									'posts_per_page'	=> 4,
								);
								$service_query = new WP_Query( $args );
								?>
								<?php while( $service_query->have_posts()):
									$service_query->the_post();
								?>	
									<li><a href="#"><?php the_title();?></a></li>
									<?php endwhile;?>
									<?php wp_reset_postdata(); ?>
								</ul>
							</section>
						</div>
					</div>
				</div>
			</section>			
			
<?php 
return ob_get_clean();
	
	
}

add_shortcode('section_three','our_feature');




?>