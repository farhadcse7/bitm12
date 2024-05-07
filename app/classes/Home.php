<?php


namespace App\classes;

use App\classes\Blog;

class Home
{
    public $blog, $blogs;

    public function index()
    {
        $this->blog = new Blog();
        $this->blogs = $this->blog->getAllBlog();
        return view('home', ['blogs' => $this->blogs]);
    }

}