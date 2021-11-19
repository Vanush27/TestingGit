<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $post = Post::where("is_published", 0)->first();
        dump($post->title);
    }

    public function create()
    {
        $postsArr = [
            [
                'title' => 'title of post from phpstorm',
                'content' => 'some interesting content',
                'image' => 'imageblable.jpg',
                'likes' => 20,
                'is_published' => 0,
            ],
            [
                'title' => 'another of post from phpstorm',
                'content' => 'another some interesting content',
                'image' => 'another imageblable.jpg',
                'likes' => 50,
                'is_published' => 1,
            ]
        ];

        foreach ($postsArr as $item){
          Post::create($item);

        }
        dd('created');
    }

    public function update(){

        $post = Post::find(1);
        dd($post->title);

        $post->update(
            [
                'title' => 'up',
                'content' => 'some interesting content',
                'image' => 'imageblable.jpg',
                'likes' => 120,
                'is_published' => 0,

            ]
        );
    }

    public function delete(){
        $post = Post::find(10);
//        dd($post->title);
        $post->delete();
    }
}

























