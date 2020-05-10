<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function store(Request $request)
    {

      //method all()
      $input = $request->all();
      echo 'Semua data : ';
      print_r($input);
      echo '<br>';
      echo '<br>';
      echo '<br>';

      // method input()
      $name = $request->input('name');
      echo 'Name: '.$name;
      echo '<br>';

      // method get()
      $email = $request->get('email');
      echo 'email: '.$email;
      echo '<br>';

      // mengambil value field message
      $message = $request->message;
      echo 'message: '.$message;
      echo '<br>';

      // mengambil value field message
      $message = $request->message;
      echo 'message: '.$message;
      echo '<br>';

      exit;
    }
}
