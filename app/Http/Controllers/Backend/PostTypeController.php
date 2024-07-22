<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\PostType;

class PostTypeController extends Controller
{
   public function AllPosts()
   {
    $posts = PostType::latest()->get();
    return view('backend.posts.all_posts', compact('posts'));
   }

   public function AddPost(){
    return view('backend.posts.add_post');
   }
}
