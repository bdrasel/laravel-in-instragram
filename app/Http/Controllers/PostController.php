<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;
use App\Post;
use App\User;

class PostController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }

    public function index()
    {
        $users = auth()->user()->following()->pluck('profiles.user_id');
        $posts = Post::whereIn('user_id', $users)->with('user')->latest()->paginate(4);

        return view('Posts.index', compact('posts'));
    }

    public function create()
    {
        return view('Posts.create');
    }

    public function store()
    {
       $data = request()->validate([
           'caption' => 'required',
           'image' => 'required',
       ]);

       $imagePath = request('image')->store('uploads','public');

        $image = Image::make(public_path('storage/'.$imagePath))->fit(1000, 1000);
        $image->save();

       auth()->user()->posts()->create([
           'caption' => $data['caption'],
           'image' => $imagePath
       ]);

       return redirect('profile/'. auth()->user()->id);
        
    }

    public function show(Post $post)
    {
        return view('Posts.show', compact('post'));
    }
}
