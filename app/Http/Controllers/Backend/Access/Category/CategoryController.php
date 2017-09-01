<?php

namespace App\Http\Controllers\Backend\Access\Category;

use App\Models\Access\User\User;
use App\Models\Preferfirst\Category;
use App\Http\Controllers\Controller;
use App\Repositories\Backend\Access\Role\RoleRepository;
use App\Repositories\Backend\Access\User\UserRepository;
use App\Http\Requests\Backend\Access\User\StoreUserRequest;
use App\Http\Requests\Backend\Access\User\ManageUserRequest;
use App\Http\Requests\Backend\Access\User\UpdateUserRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use View;
use App;
/**
 * Class UserController.
 */
class CategoryController extends Controller
{
    /**
     * @var UserRepository
     */
    protected $users;

    /**
     * @var RoleRepository
     */
    protected $roles;

    /**
     * @param UserRepository $users
     * @param RoleRepository $roles
     */
    public function __construct(UserRepository $users, RoleRepository $roles)
    {
        $this->users = $users;
        $this->roles = $roles;
    }

    /**
     * @param ManageUserRequest $request
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(ManageUserRequest $request)
    {
    	$category_detail = Category::all()->toArray();
    	return View::make('backend.access.category.category',compact('category_detail'));
    }

    /**
     * @param ManageUserRequest $request
     *
     * @return mixed
     */
    public function create(ManageUserRequest $request)
    {
    	$category_parent_detail = Category::all()->pluck('name','name');
    	return View::make('backend.access.category.create',compact('category_parent_detail'));
        
    }

    /**
     * @param StoreUserRequest $request
     *
     * @return mixed
     */
    public function store(Request $request)
    {
        $add_category = new Category();
        $add_category->name = $request->category_name;
        $add_category->parent = $request->parent_name;        
        $add_category->save();
        return redirect()->route('admin.access.category.index')->withFlashSuccess('Category Added Successfully');
    }

    /**
     * @param User              $user
     * @param ManageUserRequest $request
     *
     * @return mixed
     */
    public function show(User $user, ManageUserRequest $request)
    {
        return view('backend.access.show')
            ->withUser($user);
    }

    /**
     * @param User              $user
     * @param ManageUserRequest $request
     *
     * @return mixed
     */
    public function edit($id)
    { 
    	$category_detail = Category::where('_id',$id)->get()->toArray();
    	$category_parent_detail = Category::all()->pluck('name','name');
    	return View::make('backend.access.category.edit',compact('category_detail','category_parent_detail'));
        
    }

    /**
     * @param User              $user
     * @param UpdateUserRequest $request
     *
     * @return mixed
     */
    public function update(Request $request)
    {
        $user = Category::where('_id',$request->id)->update(['name'=> $request->category_name,'parent'=>$request->parent_name]);
        return redirect()->route('admin.access.category.index')->withFlashSuccess(trans('alerts.backend.users.updated'));
    }

    /**
     * @param User              $user
     * @param ManageUserRequest $request
     *
     * @return mixed
     */
    public function destroy(User $user, ManageUserRequest $request)
    {
        $this->users->delete($user);

        return redirect()->route('admin.access.user.deleted')->withFlashSuccess(trans('alerts.backend.users.deleted'));
    }
}
