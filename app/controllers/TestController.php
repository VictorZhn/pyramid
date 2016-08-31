<?php

/**
* \HomeController
*/
class TestController extends Controller
{

  public function index()
  {
    $article =  Article::first();

    require dirname(__FILE__).'/../views/test.php';
  }
}
