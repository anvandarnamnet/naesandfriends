<?php
//Theme specific Helper functions
function cc_mime_types($mimes)
{
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');


function generate_sharelink($type)
{
  $post_url = get_the_permalink();
  switch ($type) {
    case 'facebook':
      $url = add_query_arg(array(
        'u' => $post_url,
      ), "https://www.facebook.com/sharer/sharer.php");
      return $url;
      break;
    case 'twitter':
      $url = add_query_arg(array(
        'status' => $post_url,
      ), "https://twitter.com/home");
      return $url;
      break;
    case 'linkedin':
      $url = add_query_arg(array(
        'mini' => true,
        'url' => $post_url,
        'title' => get_the_title(),
      ), "https://www.linkedin.com/shareArticle");
      return $url;
      break;
    case 'mail':
      $url = add_query_arg(array(
        'body' => $post_url,
        'subject' => get_the_title(),
      ), "mailto:");
      return $url;
      break;

  }


}


?>
