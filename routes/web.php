<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// admin
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\admin\LoginController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\CommentController;
use App\Http\Controllers\admin\PostController;
use App\Http\Controllers\admin\RoleController;
use App\Http\Middleware\CheckLoginAdminMiddleware;
use App\Http\Middleware\AuthMiddleware;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Middleware\PermissionMiddleware;
use Spatie\Permission\Models\Role;
use App\Models\User;
use Spatie\Permission\Models\Permission;
// client
use App\Http\Controllers\client\ClientController;

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/admin', [LoginController::class, 'index'])
//     ->name('admin.login.index')->middleware('checkLoginAdmin');
// Route::get('/admin/login', [LoginController::class, 'index'])
//     ->name('admin.login.index')->middleware('checkLoginAdmin');
// Route::post('/admin/doLogin', [LoginController::class, 'doLogin'])->name('admin.login.doLogin');
// Route::get('/admin/doLogout', [LoginController::class, 'doLogout'])->name('admin.doLogout');



Route::get('/create_role', function(){
    $role = Role::create(['name' => 'Admin']); //Tạo role
    return 'Create role success';
});
Route::get('/add_permission_to_role/{id}', function($id){
    $role = Role::findById(1); // Lấy role theo id
    $permission = Permission::find($id); // Lấy quyền theo id
    $role->givePermissionTo($permission);// Gán quyền cho role
    return "Add permission has name = $permission->name to role success";
});

Route::get('/add_role_to_user/{id}', function($id){
    $user = User::find($id); // Lấy user theo id
    $user->assignRole('Ban biên tập'); // Gán role cho user
    return "Add permission has to role success";
});

Route::get('/check_role_user/{id}', function($id){
    $user = User::find($id); // Lấy user theo id
    // Gán role cho user
    return $user->roles;
});

Route::get('/create_permission', function(){
    $permission = Permission::create([
        'name' => 'view role',
        'guard_name' => 'web'
    ]); // Tạo quyền

    $permission = Permission::create([
        'name' => 'create role',
        'guard_name' => 'web'
    ]); // Tạo quyền

    $permission = Permission::create([
        'name' => 'delete role',
        'guard_name' => 'web'
    ]); // Tạo quyền

    $permission = Permission::create([
        'name' => 'edit role',
        'guard_name' => 'web'
    ]); // Tạo quyền 
    return 'Create success';
});

// // auth admin
Route::get('/admin/login', [loginController::class, 'index'])->name('admin.login.index')->middleware(CheckLoginAdminMiddleware::class);
Route::post('/admin/doLogin', [loginController::class, 'login'])->name('admin.login.doLogin');
Route::get('/admin/doLogout', [loginController::class, 'doLogout'])->name('admin.doLogout');

Route::get('/admin/dashboard', [DashboardController::class, 'index'])
    ->name('admin.dashboard')->middleware(AuthMiddleware::class);


Route::get('/', [AuthenticatedSessionController::class, 'create'])
    ->name('login');
Route::get('logout', [AuthenticatedSessionController::class, 'destroy'])
    ->name('logout');
// Route::get('/dang-ky', [RegisteredUserController::class, 'create'])
//     ->name('register');






Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// dashboard
Route::get('/admin/dashboard', [DashboardController::class, 'index'])
    ->name('admin.dashboard')->middleware(['AuthVip']);

// QL user
Route::prefix('/admin/user')->middleware(['AuthVip'])->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('admin.user')->middleware('Permission:view user'); // URL = /admin/user
    Route::get('/create', [UserController::class, 'create'])->name('admin.user.create')->middleware('Permission:create user'); // URL = /admin/user/create
    Route::post('/store', [UserController::class, 'store'])->name('admin.user.store')->middleware('Permission:create user'); // URL = /admin/user/store
    Route::get('/edit/{id}', [UserController::class, 'edit'])->name('admin.user.edit')->middleware('Permission:edit user'); // URL = /admin/user/get
    Route::post('/update/{id}', [UserController::class, 'update'])->name('admin.user.update')->middleware('Permission:edit user');
    Route::get('/delete/{id}', [UserController::class, 'delete'])->name('admin.user.delete')->middleware('Permission:delete user'); // URL = /admin/user/delete/{id}
});

// QL danh mục
Route::prefix('/admin/category')->middleware('AuthVip')->group(function () {
    Route::get('/', [CategoryController::class, 'index'])->name('admin.category')->middleware('Permission:view category');
    Route::get('/create', [CategoryController::class, 'create'])->name('admin.category.create')->middleware('Permission:create category');
    Route::post('/store', [CategoryController::class, 'store'])->name('admin.category.store')->middleware('Permission:create category');
    Route::get('/edit/{id}', [CategoryController::class, 'edit'])->name('admin.category.edit')->middleware('Permission:edit category');
    Route::post('/update/{id}', [CategoryController::class, 'update'])->name('admin.category.update')->middleware('Permission:edit category');
    Route::get('/delete/{id}', [CategoryController::class, 'delete'])->name('admin.category.delete')->middleware('Permission:delete category');
});

// QL bài viết
Route::prefix('/admin/post')->middleware(['AuthVip'])->group(function () {
    Route::get('/', [PostController::class, 'index'])->name('admin.post')->middleware('Permission:view post');
    Route::get('/create', [PostController::class, 'create'])->name('admin.post.create')->middleware('Permission:create post');
    Route::post('/store', [PostController::class, 'store'])->name('admin.post.store')->middleware('Permission:create post');
    Route::get('/edit/{id}', [PostController::class, 'edit'])->name('admin.post.edit')->middleware('Permission:edit post');
    Route::post('/update/{id}', [PostController::class, 'update'])->name('admin.post.update')->middleware('Permission:edit post');
    Route::get('/delete/{id}', [PostController::class, 'delete'])->name('admin.post.delete')->middleware('Permission:delete post');
});

// QL quyền
Route::prefix('/admin/role')->middleware(['AuthVip'])->group(function () {
    Route::get('/', [RoleController::class, 'index'])->name('admin.role')->middleware('Permission:view role');
    Route::get('/create', [RoleController::class, 'create'])->name('admin.role.create')->middleware('Permission:create role');
    Route::post('/store', [RoleController::class, 'store'])->name('admin.role.store')->middleware('Permission:create role');
    Route::get('/edit/{id}', [RoleController::class, 'edit'])->name('admin.role.edit')->middleware('Permission:edit role');
    Route::post('/update/{id}', [RoleController::class, 'update'])->name('admin.role.update')->middleware('Permission:edit role');
    Route::get('/delete/{id}', [RoleController::class, 'delete'])->name('admin.role.delete')->middleware('Permission:delete role');
});

Route::prefix('/admin/role')->middleware(['AuthVip'])->group(function () {
    Route::get('/', [RoleController::class, 'index'])->name('admin.role');
    Route::get('/create', [RoleController::class, 'create'])->name('admin.role.create');
    Route::post('/store', [RoleController::class, 'store'])->name('admin.role.store');
    Route::get('/edit/{id}', [RoleController::class, 'edit'])->name('admin.role.edit');
    Route::post('/update/{id}', [RoleController::class, 'update'])->name('admin.role.update');
    Route::get('/delete/{id}', [RoleController::class, 'delete'])->name('admin.role.delete');
});

//QL Duyệt bài viết
Route::prefix('/admin/approve-post')->middleware(['AuthVip'])->group(function () {
    Route::get('/', [PostController::class, 'indexApprove'])->name('admin.approve-post');
    Route::get('/view/{slug}', [PostController::class, 'viewApprove'])->name('admin.approve-post.view');
    Route::get('/status/{id}/{status}', [PostController::class, 'statusApprove'])->name('admin.approve-post.status');
});


Route::get('/trangchu', [ClientController::class, 'index'])->name('client.pages.home');
Route::get('/gioithieu', [ClientController::class, 'gioithieu'])->name('client.pages.gioithieu');
Route::get('/lienhe', [ClientController::class, 'lienhe'])->name('client.pages.lienhe');
Route::get('/tin', [ClientController::class, 'tin'])->name('client.pages.allnews');
Route::get('/test/tin-moi', [ClientController::class, 'tinmoi'])->name('tinmoi');
Route::get('/tin-xem-nhieu', [ClientController::class, 'tinxemnhieu'])->name('tinxemnhieu');
Route::get('/the-loai/{slug}', [ClientController::class, 'loaitin'])->name('loaitin');
Route::get('/tin/{slug}', [ClientController::class, 'tinchitiet'])->name('tinchitiet');
Route::post('/comment', [CommentController::class, 'store'])->name('comment');
Route::post('/commentUpdate', [CommentController::class, 'update'])->name('comment.update');
Route::get('comment/{id}', [CommentController::class, 'destroy'])->name('comment.destroy');
Route::post('/comment/reply', [CommentController::class, 'reply'])->name('comment.reply');
Route::get('/tim-kiem', [ClientController::class, 'timkiem'])->name('timkiem');



require __DIR__ . '/auth.php';
