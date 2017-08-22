<?php

namespace App\Http\Controllers\Frontend\Preferfirst;

use App\Http\Controllers\Controller;
use App\Models\Preferfirst\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use View;
use App;

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
        $category_detail = Category::all();        
        return View::make('frontend.preferfirst.home',compact('category_detail'));
    }

    /**
     * @return \Illuminate\View\View
     */
    public function macros()
    {
        return view('frontend.macros');
    }
}
