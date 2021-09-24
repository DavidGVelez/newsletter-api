<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Repositories\PostRepository;
use Illuminate\Routing\Controller as BaseController;

class PostController extends BaseController
{
  protected $post;

  public function __construct(Post $post)
  {
    $this->post = new PostRepository($post);
  }

  public function index()
  {
    return json_encode($this->post->all());
  }
}
