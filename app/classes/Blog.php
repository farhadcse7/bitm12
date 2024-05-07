<?php


namespace App\classes;


class Blog
{
    public $blogs = [];

    public function __construct()
    {
        $this->blogs = [
            "farhad",
            "totan",
            100,

//            0 => [
//                'id' => 1,
//                'title' => "this is title 1",
//                'description' => "this is description 1",
//                'image' => 'assets/img/1.jpg'
//            ],
//            1 => [
//                'id' => 2,
//                'title' => "this is title 2",
//                'description' => "this is description 2",
//                'image' => 'assets/img/2.jpg'
//            ],
//            2 => [
//                'id' => 3,
//                'title' => "this is title 3",
//                'description' => "this is description 3",
//                'image' => 'assets/img/3.jpg'
//            ],


        ];
    }

    public function getAllBlog(){
        return $this->blogs;
    }

}