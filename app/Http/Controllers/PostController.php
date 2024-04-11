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

    public function update()
    {
        $post = Post::find(5);
        $post->update([
            'title' => "update",
            'content' => "update"
        ]);
        dd('updated.');
    }

    public function delete()
    {
        Post::find(2)->delete();
        //Post::withTrashed()->find(2)->restore();
        dd('delete.');
    }

    public function firstOrCreate()
    {
        $expPost = [
            'title' => "some title of post",
            'content' => "some content new",
            'image' => "image6.jpg",
            'likes' => 400,
            'is_published' => 1
        ];
        $post = Post::firstOrCreate([
            'title' => 'some title of post'
        ], $expPost);
        dump($post->content);
        dd('up.');
    }

    public function updateOrCreate()
    {
        $expPost = [
            'title' => "some NEW title of post",
            'content' => "its not update some content new",
            'image' => "image7.jpg",
            'likes' => 800,
            'is_published' => 1
        ];
        $post = Post::updateOrCreate([
            'title' => 'some title'
        ], $expPost);
        dump($post->content);
        dd('upd.');
    }
}
