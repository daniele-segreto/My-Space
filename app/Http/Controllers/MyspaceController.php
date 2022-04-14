<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MyspaceController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function myspace()
    {
        return view("myspace");
    }

    public function postStore(Request $request)
    {
        // dd($request->all());

        // METODO MASS ASSIGNMENT
        $post = Post::create([
            "title" => $request->input("title"),
            "body" => $request->input("body"),
            "img" => $request->file("img")->store("public/img"),
            'user_id' => Auth::id()  //Auth::user()->id //forma originale
        ]);

        return redirect(route("myspace"));
    }

    public function posts()
    {
        $posts = Post::all(); // prendimi all (tutti) i record che stanno della tabella Article
        return view("myspace", compact("posts"));
    }

    public function postUpdate(Post $post)
    {
        // dd($post);
        return view("post.update", compact("post"));
    }

    public function postEdit(Post $post, Request $request) {

        if ($post->user->id === Auth::id()) {

            if ($request->file('img')) {
                $post->update([
                    'title' => $request->input('title'),
                    'body' => $request->input('body'),
                    'img' => $request->file('img')->store('public/img'),
                ]);
            } else {
                $post->update([
                    'title' => $request->input('title'),
                    'body' => $request->input('body'),
                ]);
            }
        }

        return redirect(route('myspace'));
    }


    public function postDelete(Post $post) {

        if ($post->user->id === Auth::id()) {
            // dd($post);
            $post->delete();
        }

        return redirect(route('myspace'));
    }
}
