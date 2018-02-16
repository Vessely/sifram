<?php 

include("app/class/router_class.php");

$url    = new router;
$view   = $url->full_data();


$render = new render($view);
$render_view = $render->render_now();


 ?>