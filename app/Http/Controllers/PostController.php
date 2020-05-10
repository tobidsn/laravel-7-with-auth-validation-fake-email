<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {

        $data = ['Tegal Kota Bahari', 'Jakarta Panas', 'Mulai bosen WFH'];

        return view('posts', compact('data'));
    }

    public function update(Request $request)
    {
        if (Gate::allows('isAdmin')) {
         // akses logic untuk user dengan role admin
        } else {
         // akses logic untuk user selain role admin
        }
    }

    public function store(Request $request)
    {
        if (Gate::allows('isAuthor')) {
         // akses logic untuk user dengan role author
        } else {
         // akses logic untuk user selain role author
        }
    }

    public function delete(Request $request)
    {
        if (Gate::denies('isAdmin')) {
            // akses logic untuk user selain role admin
        } else {
            // akses logic untuk user dengan role admin
        }
    }

    public function updatePost()
    {
        if (Gate::forUser($user)->allows('update-post', $post)) {
            // user dapat mengedit post
        }

        if (Gate::forUser($user)->denies('update-post', $post)) {
            // user tidak dapat mengedit
        }
    }
}