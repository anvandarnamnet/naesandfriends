<?php
class NAES_REST_Controller extends WP_REST_Controller {
 
 //The namespace and version for the REST SERVER
 var $my_namespace = 'naes/v';
 var $my_version   = '1';

 public function register_routes() {
   $namespace = $this->my_namespace . $this->my_version;
   $base      = 'blog-posts';
   register_rest_route( $namespace, '/' . $base, array(
            array(
                'methods'         => 'GET',
                'callback'        => array( $this, 'get_blog_posts' ),
            )
        )   
    );
 }

 // Register our REST Server
 public function hook_rest_server(){
   add_action( 'rest_api_init', array( $this, 'register_routes' ) );
 }

    public function get_blog_posts( WP_REST_Request $request ){
        $params = $request->get_params();

        $args = array(
            'post_type' => 'blog-post',
            'posts_per_page' => 20,
            'order_by' => 'date',
            'order' => 'DESC',
        ); 
        
        
        if(!empty($params['blog-cat'])){
            $args['tax_query'][] = array(
                'taxonomy' => 'blog-cat',
                'field' => 'term_id',
                'terms' => $params['blog-cat']
            );
        }

        $blog_query = new WP_Query($args);


        while($blog_query->have_posts()){
            $blog_query->the_post();
            $html .= get_component("templates/components/post-grid-item");         
        }   
        wp_reset_query();

        return array('data' => $html);
    }
}