<?php
//General layout function, allows for component nesting and checking for returns
function get_component($route){ ob_start();
  get_template_part($route);

  $component = ob_get_clean();
  if($component !== "" && !is_null($component)){
    echo $component;
  }else{
    $_SESSION['error'][] = "Component $route returned no content";
  }
  return;
}
function get_components($routes){
  if(!empty($routes)){
    foreach($routes as $route){
      get_component($route);
    }
  }else{
    $_SESSION['error'][] = "Routes empty for function get_components()";
  }
  return;
}
 ?>
