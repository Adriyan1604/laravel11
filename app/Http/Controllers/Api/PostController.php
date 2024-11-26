<?php

namespace App\Http\Controllers\Api;

use App\Models\Post;
use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;

class PostController extends Controller
{
    public function index()
    {
        // Ambil semua data posts dengan paginasi
        $posts = Post::latest()->paginate(5);

        // Return data menggunakan PostResource
        return new PostResource(true, 'List Data Posts', $posts);
    }
}
