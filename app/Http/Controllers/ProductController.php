<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    function index(Request $request)
    {
        return 'All Product';
    }
}
