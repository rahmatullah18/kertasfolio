<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function category_source_code()
    {
        return view('category.category_source_code');
    }

    public function category_ebook()
    {
        return view('category.category_ebook');
    }

}
