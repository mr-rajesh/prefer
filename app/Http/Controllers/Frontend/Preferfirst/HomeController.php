<?php

namespace App\Http\Controllers\Frontend\Preferfirst;

use App\Http\Controllers\Controller;

/**
 * Class FrontendController.
 */
class HomeController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('frontend.preferfirst.home');
    }

    /**
     * @return \Illuminate\View\View
     */
    public function macros()
    {
        return view('frontend.macros');
    }
}
