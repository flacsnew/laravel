<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::where('is_published', 1)->get();
        foreach ($posts as $post)
        {
            dump($post->title);
        }
        dd('end.');
    }

    public function create()
    {
        $postArr = [
            [
                'title' => "title of post",
                'content' => "some content",
                'image' => "image4.jpg",
                'likes' => 20,
                'is_published' => 1
            ],
            [
                'title' => "another title of post",
                'content' => "some content post",
                'image' => "image5.jpg",
                'likes' => 30,
                'is_published' => 1
            ]
        ];

        foreach ($postArr as $post)
        {
            Post::create($post);
        }
        dd('created.');
    }
}
