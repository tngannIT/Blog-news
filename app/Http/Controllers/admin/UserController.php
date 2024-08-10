<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use Flasher\Toastr\Laravel\Facade\Toastr;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateUserRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;



class UserController extends Controller
{
    public function index(){
        $users = User::all();
        $title = "Quản Lý Thành Viên";
        return view("admin.pages.user.index", compact(
            "users",
            'title'
        ));
    }

    public function delete($id){
        $user = User::findOrFail($id);
        $user->delete();
        
        toastr()->success('Xóa thành công!');
        return redirect()->back();
    }
    public function create(){
        $roles = Role::all();
        $title = "Thêm mới thành viên";
        return view("admin.pages.user.create_edit", compact(
            'title',
            'roles'
        ));

    }
    public function edit($id){
        $roles = Role::all();
        $title = 'Chỉnh sửa thành viên';
        $user = User::find($id);

        return view('admin.pages.user.edit', compact(
            'title',
            'user',
            'roles'
        ));
    }

    public function update(UpdateUserRequest $request, $id){
        $userUpdate = User::find($id);
        $userUpdate -> name = $request->name;
        // $userUpdate -> role = $request->role;
        $userUpdate -> status = $request->status;

        $userUpdate -> save();

        $userUpdate->syncRoles($request->role); //Thêm quyền cho user


        toastr()->success('Cập nhật thành công');
        return redirect()->back();

        // dd($request->all());
    }


    public function store(StoreUserRequest $request){
        // dd($request->all());

        

        // $insert = DB::table('users')->insert([
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'password' => Hash::make($request->password),
        //     'status' => $request->status,
        //     'role' => $request->role,
        // ]);

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->status = $request->status;
        $user->save();

        $user->assignRole($request->role); //Thêm quyền cho user
        

        if($user){
            toastr()->success('Thêm thành viên thành công');
            return redirect()->route('admin.user');
        }else{
            toastr()->error('Thêm thành viên thất bại');
            return redirect()->back();
        }
    }
}
