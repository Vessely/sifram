<?php 

include("app/class/router_class.php");
include("app/class/connection_class.php");
include("app/class/read_class.php");
include("config/paths/paths.php");


$url       = new Router;
$view      = $url->full_data();


$render    = new render($view);
$name_view = $render->return_view();


include("layout/component/head_component.php");
$render_view = $render->render_now();
include("layout/component/footer_component.php");



 ?>