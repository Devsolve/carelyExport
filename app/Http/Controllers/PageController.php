<?php

namespace App\Http\Controllers;

use Exception;

/**
 *
 */
class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(string $page_name)
    {
        try {
            return view('pages/' . $page_name);
        } catch (Exception $e) {
            abort(404, $e->getMessage());
        }
    }

    /*
     *
     */
    public function product(string $page_name = '')
    {
        try {
            if ($page_name) {
                return view('pages/products/' . $page_name);
            } else {
                abort(404, 'Page not exist');
            }


        } catch (Exception $e) {
            abort(404, $e->getMessage());
        }
    }
}
