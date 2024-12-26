<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = [
            [
                'title' => 'Title one',
                'body' => 'this is body 1',
                'status' => '1',
                'img' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR7x2AcEbYN-8aRfJ7KQVWFUf1OAObGwCUBSg&s',
            ],
            [
                'title' => 'Title two',
                'body' => 'this is body 2',
                'status' => '0',
                'img' => 'https://i.pinimg.com/564x/b3/c3/ef/b3c3ef9b7bea3a3ae1c2315d0602ecf6.jpg',
            ],
            [
                'title' => 'Title three',
                'body' => 'this is body 3',
                'status' => '0',
                'img' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTKjEYw0t87WVAOOptv7aTaD-0iojLThc_WpA&s',
            ],
            [
                'title' => 'Title four',
                'body' => 'this is body 4',
                'img' => 'https://i.pinimg.com/736x/ee/a4/f4/eea4f4412153825cfa66a3a25fafcf49.jpg',
                'status' => '1',
            ],
        ];

        return $blogs;
    }

    public function retrieveBlogs()
    {
        $blogs = [
            [
                'title' => 'Title one',
                'body' => 'this is body 11',
                'status' => '1',
                'img' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR7x2AcEbYN-8aRfJ7KQVWFUf1OAObGwCUBSg&s'
            ],
            [
                'title' => 'Title two',
                'body' => 'this is body 2',
                'status' => '0',
                'img' => 'https://i.pinimg.com/564x/b3/c3/ef/b3c3ef9b7bea3a3ae1c2315d0602ecf6.jpg'
            ],
            [
                'title' => 'Title three',
                'body' => 'this is body 3',
                'status' => '0',
                'img' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTKjEYw0t87WVAOOptv7aTaD-0iojLThc_WpA&s',
            ],
            [
                'title' => 'Title four',
                'body' => 'this is body 4',
                'img' => 'https://i.pinimg.com/736x/ee/a4/f4/eea4f4412153825cfa66a3a25fafcf49.jpg',
                'status' => '1',
            ],
        ];

        return view('admin.activity4', compact('blogs'));
    }
}
