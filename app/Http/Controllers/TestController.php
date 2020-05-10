<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
  public function index(Request $request) {

    // method path()
    $path = $request->path();
    echo 'Method path: '.$path;
    echo '<br>';

    // method is()
    $pattern = $request->is('admin/*');
    echo 'Method is: '.$pattern;
    echo '<br>';

    // method url()
    $url = $request->url();
    echo 'Method url : '.$url;
    echo '<br>';

    // method fullUrl()
    $fullUrl = $request->fullUrl();
    echo 'Method fullUrl : '.$fullUrl;
    echo '<br>';
    echo '<br>';

    $method = $request->method();
    echo 'Method method : '.$method;
    echo '<br>';

    if ($request->isMethod('post')) {
        echo 'method post';
        echo '<br>';
    }

    if ($request->isMethod('get')) {
        echo 'method get';
        echo '<br>';
    }

    exit();
  }
}