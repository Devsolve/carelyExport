<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(string $page_name)
    {
        try {
            return view('pages/'.$page_name);
        } catch (\Exception $e) {
            abort(404, 'This page is not exist');
        }
    }

    public function product(string $page_name)
    {
        try {
            return view('pages/products/'.$page_name);
        } catch (\Exception $e) {
            abort(404, 'This page is not exist');
        }
    }
}
