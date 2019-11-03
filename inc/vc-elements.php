<?php 
	/* for icon theme */

?>

<?php
	vc_map(array(
		'name'						=>__('First Section','icon'),
		'description'				=>__('This is for First Section','icon'),
		'base'						=>'sec_one',
		'icon'						=>'fa fa-map' ,
		'show_settings_on_create'	=>true,
		'category'					=>__('icon_theme','icon'),
		'params'					=>array(
			array(
			  'type' => 'textfield',
			  'value' => '',
			  'heading' => 'Heading Title',
			  'param_name' => 'sec_one_heading',
			  ),
			  array(
			  'type' => 'textarea',
			  'value' => '',
			  'heading' => 'Description',
			  'param_name' => 'sec_one_head_desc',
			  ),
		
				array(
					'type' => 'param_group',
					'heading'=> 'Skill Heading',
					'param_name' => 'sec_one_group',
					'params'	=> array(
							array(
							  'type' => "iconpicker",
							  "admin_label" => true,
							  "heading" => __( "Icon name", "icon" ),
							  "param_name" => "sec_one_icon"
							),
							array(
							  'type' => "textfield",
							  'admin_label' => true,
							  'heading' => __( 'heading', 'icon' ),
							  'param_name' => 'sec_one_box_head'
							),
							array(
							  'type' => "textarea",
							  'admin_label' => true,
							  'heading' => __( 'Description', 'icon' ),
							  'param_name' => 'sec_one_box_desc'
							),
							
					),	
				),
		),
	));
	
	// our service
	vc_map(array(
		'name'						=>__('2nd section','icon'),
		'description'				=>__('This is for services','icon'),
		'base'						=>'section_two',
		'icon'						=>'fa fa-map' ,
		'show_settings_on_create'	=>true,
		'category'					=>__('icon_theme','icon'),
		'params'					=>array(
					array(
					  'type' => "textfield",
					  "admin_label" => true,
					  "heading" => __( "Section heading", "icon" ),
					  "param_name" => "sec_two_heading"
					),
					array(
					  'type' => "textarea",
					  "admin_label" => true,
					  "heading" => __( "Section description", "icon" ),
					  "param_name" => "sec_two_desc"
					),
					array(
					  'type' => "textfield",
					  "admin_label" => true,
					  "heading" => __( "Post per page", "astrum" ),
					  "param_name" => "section_two_postqty"
					),
					
		),
		
	));
	
	// feature
	
	vc_map(array(
		'name'						=>__('3rd Section','icon'),
		'description'				=>__('This is for feature post','icon'),
		'base'						=>'section_three',
		'icon'						=>'fa fa-map' ,
		'show_settings_on_create'	=>true,
		'category'					=>__('icon_theme','icon'),
		'params'					=>array(
					array(
					  'type' => "textfield",
					  "admin_label" => true,
					  "heading" => __( "Right sidebar top heading", "icon" ),
					  "param_name" => "sec_three_heading"
					),
					array(
					  'type' => "textarea",
					  "admin_label" => true,
					  "heading" => __( "Right sidebar Desc", "icon" ),
					  "param_name" => "sec_three_desc"
					),
					array(
					  'type' => "textfield",
					  "admin_label" => true,
					  "heading" => __( "Post per page", "astrum" ),
					  "param_name" => "section_three_postqty"
					),
					array(
					  'type' => "textfield",
					  "admin_label" => true,
					  "heading" => __( "Right sidebar Bottom heading", "icon" ),
					  "param_name" => "sec_three_side_post_head"
					),
					
		),
		
	));
	


?>