<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the products.
     */
    public function index()
    {
        return view('products.index'); // Returns the index.blade.php view
    }

    /**
     * Show the form for creating a new product.
     */
    public function create()
    {
        return view('products.create'); // Returns the create.blade.php view
    }

    /**
     * Show the form for editing the specified product.
     */
    public function edit($id)
    {
        return view('products.edit'); // Returns the edit.blade.php view
    }
}