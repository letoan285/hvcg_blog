<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;

class ClientController extends Controller
{
    public function login()
    {
    	return view('layouts.login');
    }
    public function index()
    {
    	$posts = Post::paginate(9);

    	return view('web.index', compact('posts'));
    }
    public function show($id)
    {
    	$post = Post::findOrFail($id);
    	return view('web.show', compact('post'));
    }
}
