<?php

namespace App\Http\Controllers;

use App\Classes\Post;

class HomepageController extends Controller
{
    public function index()
    {
        $postClass = new Post;

        $posts = $postClass->getLatest(5)->all();

        return view('homepage', ['posts' => $posts]);
    }

    public function show()
    {
        $postClass = new Post;

        $post = $postClass->getLatest(5)->first();

        return view('pages', ['post' => $post]);
    }

    public function showPostFromFile($page = 'home') {
        $postClass = new Post;

        $filename = $page.".md";

        $post = $postClass->getPostData($filename);

        return view('pages', ['post' => $post]);
    }
}
