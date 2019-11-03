<?php 

 // widget
 Class Simple_widget extends WP_Widget{
	function __construct(){
		parent::__construct(
			'Simple_widgettset',
			__('My Simple Widget','icon'),
			array('description' => __( 'This is Simple widget', 'icon' ),)
		
		);
	}
	
	public function widget($args,$instance){
		
		//$title = apply_filters( 'widget_title', $instance[ 'title' ] );
		//$args['before_widget'].$args['before_title'].$title.$args['after_title'].$args['after_widget'];
		
		// echo $args['before_widget'];
		// echo $args['before_title'];
		// echo $title;
		//echo $instance['title'];
		// echo $args['after_title'];
		// echo $args['after_widget'];
		?>
		<h3><?php echo esc_attr($instance['title']);?></h3>
		<ul class="alt">
			<li><a href="#"><?php echo esc_attr($instance['post_one']);?></a></li>
			<li><a href="#"><?php echo esc_attr($instance['post_two']);?></a></li>
			<li><a href="#"><?php echo esc_attr($instance['post_three']);?></a></li>
			<li><a href="#"><?php echo esc_attr($instance['post_four']);?></a></li>
		</ul>
	<?php 	
	}
	
	public function form($instance){
		$title = !empty($instance['title'])?$instance['title']:'';
		$post_one = !empty($instance['post_one'])?$instance['post_one']:'';
		$post_two = !empty($instance['post_two'])?$instance['post_two']:'';
		$post_three = !empty($instance['post_three'])?$instance['post_three']:'';
		$post_four = !empty($instance['post_four'])?$instance['post_four']:'';
		
// Widget admin form
		?>
		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php echo esc_attr_e('Title:')?></label>
			<input type="text" name="<?php echo $this->get_field_name('title' ); ?>" id="<?php echo $this->get_field_id( 'title' ); ?>" value="<?php echo esc_attr($title);?>"/>
		</p>
		<p>
			<label for="<?php echo $this->get_field_id( 'post_one' ); ?>"><?php echo esc_attr_e('Recent post Tilte')?></label>
		</p>	
		<p>
			<input type="text" name="<?php echo $this->get_field_name('post_one' ); ?>" id="<?php echo $this->get_field_id( 'post_one' ); ?>" value="<?php echo esc_attr($post_one);?>"/>
		</p>
		<p>
		<input type="text" name="<?php echo $this->get_field_name('post_two' ); ?>" id="<?php echo $this->get_field_id( 'post_two' ); ?>" value="<?php echo esc_attr($post_two);?>"/>
		</p>
		<p>
		<input type="text" name="<?php echo $this->get_field_name('post_three' ); ?>" id="<?php echo $this->get_field_id( 'post_three' ); ?>" value="<?php echo esc_attr($post_three);?>"/>
		</p>
		<p>
		<input type="text" name="<?php echo $this->get_field_name('post_four' ); ?>" id="<?php echo $this->get_field_id( 'post_four' ); ?>" value="<?php echo esc_attr($post_four);?>"/>
		</p>
		
	<?php }
	public function update($new_instance, $old_instance){
		$instance=array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
		
		$instance['post_one'] = ( ! empty( $new_instance['post_one'] ) ) ? strip_tags( $new_instance['post_one'] ) : '';
		
		$instance['post_two'] = ( ! empty( $new_instance['post_two'] ) ) ? strip_tags( $new_instance['post_two'] ) : '';
		
		$instance['post_three'] = ( ! empty( $new_instance['post_three'] ) ) ? strip_tags( $new_instance['post_three'] ) : '';
		$instance['post_four'] = ( ! empty( $new_instance['post_four'] ) ) ? strip_tags( $new_instance['post_four'] ) : '';
		
		return $instance;
	}
	
} 

function wp_load_widget(){
	register_widget('Simple_widget');
}
add_action('widgets_init','wp_load_widget');
?>