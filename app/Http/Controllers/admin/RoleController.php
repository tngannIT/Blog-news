<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    public function index()
    {
        $title = 'Quản Lý Vai Trò';
        $roles = Role::all();
        return view("admin.pages.role.index ", compact(
            'title',
            'roles',
        ));
    }

    public function create()
    {
        $title = 'Thêm vai trò';
        $permissions = Permission::all();
        return view('admin.pages.role.create', compact(
            'title',
            'permissions',
        ));
    }
    public function store(Request $request)
    {
        $request->validate([
            'role_name' => 'required|unique:roles,name',
        ], [
            'role_name.required' => 'Tên vai trò không được để trống',
            'role_name.unique' => 'Tên vai trò đã tồn tại'
        ]);

        $role = Role::create(['name' => $request->role_name]);

        if ($request->has('permissions')) {
            $role->syncPermissions($request->permissions);
        }
        toastr()->success('Thêm vai trò thành công');
        return redirect()->route('admin.role');
    }

    public function edit($id)
    {
        $title = 'Cập nhật vai trò';
        $role = Role::findOrFail($id);
        $permissions = Permission::all();
        return view('admin.pages.role.edit', compact(
            'role',
            'permissions',
            'title'
        ));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'role_name' => 'required|unique:roles,name,' . $id,
            'permissions' => 'array'
        ]);

        $role = Role::findOrFail($id);
        $role->update([
            'name' => $request->role_name
        ]);
        if ($request->has('permissions')) {
            $role->syncPermissions($request->permissions);
        }

        toastr()->success('Cập nhật vai trò thành công');
        return redirect()->route('admin.role');
    }

    public function delete($id)
    {
        $role = Role::findOrFail($id);
        $role->delete();
        toastr()->success('Xóa vai trò thành công');
        return redirect()->route('admin.role');
    }
}
