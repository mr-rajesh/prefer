<?php

namespace App\Http\Controllers\Frontend\Preferfirst;

use App\Models\Access\User\User;
use App\Models\Preferfirst\Category;
use App\Models\Preferfirst\Advertisement;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use View;
use App;
class AdvertisementController extends Controller
{

    /**
     * Associated Repository Model.
     */
    const MODEL = User::class;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $category_detail = Category::all()->pluck('name','name');
        //dd($category_detail);   
        return View::make('frontend.preferfirst.postadd',compact('category_detail'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $max_file_size = config('prefer-first.max_img_upload');
        $this->validate($request, [
        'img1' => "required|max:$max_file_size|image",
        'img2' => "max:$max_file_size|image",
        'img3' => "max:$max_file_size|image",
        'img4' => "max:$max_file_size|image",
        ]);
        $add_title = $request->title;
        $add_category = $request->category;
        $add_identity = $request->identity;
        $add_name = $request->name;
        $add_phone = $request->phone;
        $add_city = $request->city;
        $img_1_name = str_random(15).'_'.time().'.'.$request->img1->getClientOriginalExtension();
        $request->img1->move(public_path('prefer').'/'.$add_category, $img_1_name);
        $img_2_name = '';
        $img_3_name = '';
        $img_4_name = '';

        if($request->img2 != '' || $request->img2 != NULL) {
        $img_2_name = str_random(15).'_'.time().'.'.$request->img2->getClientOriginalExtension();
        $request->img2->move(public_path('prefer').'/'.$add_category, $img_2_name);
        }
        if($request->img3 != '' || $request->img3 != NULL) {
        $img_3_name = str_random(15).'_'.time().'.'.$request->img3->getClientOriginalExtension();
        $request->img3->move(public_path('prefer').'/'.$add_category, $img_3_name);
        }
        if($request->img4 != '' || $request->img4 != NULL) {
        $img_4_name = str_random(15).'_'.time().'.'.$request->img4->getClientOriginalExtension();
        $request->img4->move(public_path('prefer').'/'.$add_category, $img_4_name);
        }
        $add_detail = new Advertisement();
        $add_detail->title = $add_title;
        $add_detail->category = $add_category;
        $add_detail->identity = $add_identity;
        $add_detail->name = $add_name;
        $add_detail->phone = $add_phone;
        $add_detail->city = $add_city;
        $add_detail->img1 = $img_1_name;
        $add_detail->img2 = $img_2_name;
        $add_detail->img3 = $img_3_name;
        $add_detail->img4 = $img_4_name;
        $add_detail->save();
        return redirect()->route('preferfirst.home')->withFlashSuccess("successfully added");
        dd($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function categoryDetail($id)
    {   
        dd($id);
    }
    
}
