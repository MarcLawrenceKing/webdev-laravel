<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use PhpParser\Node\Stmt\TryCatch;

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
        Log::info("ENTER retrieve blogs ===");
        try {
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
            Log::debug("Blogs: " . json_encode($blogs));
        } catch (\Exception $e) {
            Log::error("MAY ERROR!! ==========");
        }

        return view('admin.home1', compact('blogs'));
    }

    public function retrieveActivity4()
    {
        $guitars = [
            [
                'title' => 'PRS SE Custom',
                'body' => 'Smooth tones, versatile for multiple genres.',
                'img' => 'https://astrings.co.uk/cdn/shop/files/24t1.jpg?v=1727859572'
            ],
            [
                'title' => 'Fender Stratocaster',
                'body' => 'Versatile, bright tones, popular for rock and blues.',
                'img' => 'https://media.npr.org/assets/img/2015/01/02/fender-custom-shop-john-mayer-stratocaster-v2_wide-afd388b2d1dc88ac7debc448f5fe9b76245cccad.jpg?s=1100&c=85&f=jpeg'
            ],
            [
                'title' => 'Ibanez RG',
                'body' => 'Fast neck, ideal for shredding and metal.',
                'img' => 'https://willcuttguitars.com/cdn/shop/products/211P01I180113684-1_1200x.jpg?v=1616602907',
            ],
            [
                'title' => 'Gibson Les Paul',
                'body' => 'Rich, warm sound, known for heavy rock',
                'img' => 'https://www.coda-music.com/media/catalog/product/cache/2ef9704120ddb26286e9628d966dedc5/0/2/027ed70c-5656-457c-ba62-5d586151889a.jpeg',
            ],
            [
                'title' => 'Gibson SG',
                'body' => 'Distinct, aggressive sound, preferred in hard rock.',
                'img' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQLI_JqDJqRaRQKGxUPq5RcqBYRyn5TYpPHAA&s',
            ],
            [
                'title' => 'Fender Telecaster',
                'body' => 'Crisp, cutting tone, great for country and rock',
                'img' => 'https://images.equipboard.com/uploads/article/image/138/l_fender-jimmy-page-mirror-telecaster-review.jpg',
            ],
        ];

        $plans = [
            [
                'type' => 'Public',
                'free' => true,
                'pro' => true,
                'enterprise' => true,
            ],
            [
                'type' => 'Private',
                'free' => true,
                'pro' => true,
                'enterprise' => null,
            ],
            [
                'type' => 'Permission',
                'free' => null,
                'pro' => true,
                'enterprise' => true,
            ],
        ];
        return view('admin.activity4', compact('guitars', 'plans'));
    }
}
