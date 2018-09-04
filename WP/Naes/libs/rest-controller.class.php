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
            'post_type' => 'blog-post'
        ); 

        return $params;
    }
}