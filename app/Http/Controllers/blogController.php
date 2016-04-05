<?php

namespace App\Http\Controllers;


use App\Post;
use DB;

//use Carbon\Carbon;

use Illuminate\Http\Request;

use App\Http\Requests;

class blogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

	    $blog_posts = Post::orderBy('created_at', 'desc')->get();
	    return view('blogHomePage', ['blog_posts' => $blog_posts]);

    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

	    $post = Post::findOrFail($id);
	    return view('singleBlogPost', compact('post'));

    }

}
