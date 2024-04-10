<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index()
    {
        // Единичный запрос
//        $posts = Post::where('status', '1')->orderBy('created_at', 'desc')->take(2)->get();
//        foreach ($posts as $post) {
//            dump($post->id);
//        }

        $posts = DB::select('select * from posts where status = :status', ['status' => 1]);
        dump($posts);
        dump($posts[0]->id);
    }
}
