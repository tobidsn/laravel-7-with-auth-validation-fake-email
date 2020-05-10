<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UrlController extends Controller
{
    public function route()
    {

        $route = route('post.show', ['post' => 1]);

        echo 'URL dari nama Route : '.$route;
        echo '<br>';

        exit();
    }
}
