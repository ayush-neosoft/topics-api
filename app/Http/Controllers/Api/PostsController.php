<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

class PostsController extends Controller
{
  public function index() {
    return \Canvas\Post::published()->orderByDesc('published_at')->simplePaginate(10);
  }
}