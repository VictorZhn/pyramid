<?php

/**
* \HomeController
*/
class TestController extends Controller
{

  public function home()
  {
    $article =  Article::first();

    require dirname(__FILE__).'/../views/home.php';
  }
}

?>
