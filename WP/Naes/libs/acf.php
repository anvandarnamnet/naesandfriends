<?php
//Register ACF options pages and import default acf fields (navs and such)
function register_acf_options(){

	foreach(constant('THEME_LANGUAGES') as $languague){
		if( function_exists('acf_add_options_page') ) {
			$parent = acf_add_options_page(array(
				'page_title' 	=> "Settings $languague",
				'menu_title'	=> "Options $languague",
				'menu_slug' 	=> "$languague-theme-general-settings",
				'capability'	=> 'edit_posts',
				'redirect'		=> false,
				'post_id' => "option-$languague",
			));


			acf_add_options_sub_page(array(
				'page_title' 	=> 'Menyer ' . $languague,
				'menu_title'	=> 'Navs ' . $languague,
				'parent_slug' 	=> $parent['menu_slug'],
				'post_id' => "navs-$languague",

			));

			acf_add_options_sub_page(array(
				'page_title' 	=> '404 ' . $languague,
				'menu_title'	=> '404 ' . $languague,
				'parent_slug' 	=> $parent['menu_slug'],
				'post_id' => "404-$languague",

			));

		}
	}
}
add_action('acf/init', 'register_acf_options');

function register_navs(){
  foreach(constant('THEME_LANGUAGES') as $languague){
    $register_navs = constant('REGISTER_NAVS');
    if( function_exists('acf_add_local_field_group') ):
      $count = 0;
    foreach($register_navs as $nav){
      acf_add_local_field_group(array(
        'key' => "nav_$nav-$languague",
        'title' => "$nav nav",
        'fields' => array(
          array(
            'key' => "repeater_$nav",
            'label' => "$nav Navigation",
            'name' => "nav_$nav",
            'type' => 'repeater',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
              'width' => '',
              'class' => '',
              'id' => '',
            ),
            'collapsed' => '',
            'min' => 0,
            'max' => 0,
            'layout' => 'block',
            'button_label' => 'Lägg till sida',
            'sub_fields' => array(
              array(
                'key' => "sidnavigation_$nav",
                'label' => 'Sidnavigation',
                'name' => 'nav_group',
                'type' => 'group',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                  'width' => '100',
                  'class' => '',
                  'id' => '',
                ),
                'layout' => 'block',
                'sub_fields' => array(
                  array(
                    'key' => "sida_$nav",
                    'label' => 'Sida',
                    'name' => 'href',
                    'type' => 'link',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => array(
                      array(
                        array(
                          'field' => '',
                          'operator' => '!=',
                        ),
                      ),
                    ),
                    'wrapper' => array(
                      'width' => '',
                      'class' => '',
                      'id' => '',
                    ),
                    'return_format' => 'array',
                  ),
                ),
              ),
              array(
                'key' => "undersidor_$nav",
                'label' => 'Undersidor',
                'name' => 'nav_sub',
                'type' => 'repeater',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                  'width' => '100',
                  'class' => '',
                  'id' => '',
                ),
                'collapsed' => '',
                'min' => 0,
                'max' => 0,
                'layout' => 'block',
                'button_label' => 'Lägg till undersida',
                'sub_fields' => array(
                  array(
                    'key' => "undersida_$nav",
                    'label' => 'Undersida',
                    'name' => 'sub_nav_group',
                    'type' => 'group',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                      'width' => '',
                      'class' => '',
                      'id' => '',
                    ),
                    'layout' => 'block',
                    'sub_fields' => array(
                      array(
                        'key' => "undersida_link_$nav",
                        'label' => 'Sida',
                        'name' => 'href',
                        'type' => 'link',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                          'width' => '',
                          'class' => '',
                          'id' => '',
                        ),
                        'return_format' => 'array',
                      ),
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
        'location' => array(
          array(
            array(
              'param' => 'options_page',
              'operator' => '==',
              'value' => "acf-options-navs-$languague",
            ),
          ),
        ),
        'menu_order' => $count,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => 1,
        'description' => '',
      ));
      $count = $count + 1;
    }

    endif;
  }

}
add_action('acf/init', 'register_navs');

 ?>
