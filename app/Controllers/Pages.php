<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function home()
    {
        echo view('home');
    }

    public function about()
    {
        echo view('about');
    }

    public function products()
    {
        echo view('products');
    }

    public function articles()
    {
        echo view('articles');
    }

    public function testimonial()
    {
        echo view('testimonial');
    }

    public function contact()
    {
        echo view('contact');
    }
}