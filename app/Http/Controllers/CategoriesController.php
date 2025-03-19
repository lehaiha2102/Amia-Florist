<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class CategoriesController extends Controller
{
    public function index(Request $request)
    {
        // Nhận giá trị từ request, nếu không có thì đặt mặc định
        $perPage = $request->input('per_page', 10); // Số lượng item trên mỗi trang (default: 10)
        $sortBy = $request->input('sort_by', 'id'); // Trường sắp xếp (default: id)
        $sortOrder = $request->input('sort_order', 'asc'); // Hướng sắp xếp (default: asc)
        $page = $request->input('page', 1); // Trang hiện tại (default: 1)

        // Truy vấn dữ liệu với phân trang và sắp xếp
        $categories = DB::table('categories')
            ->orderBy($sortBy, $sortOrder)
            ->paginate($perPage, ['*'], 'page', $page);

        // Tính tổng số trang
        $totalPages = $categories->lastPage();

        // Trả về view với dữ liệu
        return view('admin.categories.index', compact('categories', 'perPage', 'sortBy', 'sortOrder', 'page', 'totalPages'));
    }

    public function create() {
        return view('admin.categories.create');
    }

    public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'icon' => 'required|string', // Dữ liệu Base64
        'status' => 'nullable',
    ]);

    $slug = Str::slug($request->name); // Tạo slug từ tên danh mục

    // Kiểm tra xem slug đã tồn tại chưa, nếu có thì thêm số vào cuối để tránh trùng
    $count = DB::table('categories')->where('slug', $slug)->count();
    if ($count > 0) {
        $slug .= '-' . ($count + 1);
    }

    DB::table('categories')->insert([
        'name' => $request->name,
        'slug' => $slug,
        'icon' => $request->icon,
        'status' => $request->has('status'),
        'created_at' => Carbon::now(), // Thêm timestamp
        'updated_at' => Carbon::now(), // Thêm timestamp
    ]);

    return redirect()->route('categories.index')->with('success', 'Danh mục đã được thêm thành công.');
}

public function edit($slug)
{
    $category = DB::table('categories')->where('slug', $slug)->first();
    return view('admin.categories.create', compact('category')); // Chỉnh sửa
}

public function update(Request $request, $slug)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'icon' => 'nullable|string', // Base64
        'status' => 'nullable',
    ]);

    // Lấy dữ liệu cũ
    $category = DB::table('categories')->where('slug', $slug)->first();

    // Nếu không tìm thấy danh mục, trả về lỗi
    if (!$category) {
        return redirect()->route('categories.index')->with('error', 'Danh mục không tồn tại.');
    }

    // Cập nhật dữ liệu
    DB::table('categories')
        ->where('slug', $slug)
        ->update([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'icon' => $request->icon ?? $category->icon, // Giữ nguyên icon nếu không có giá trị mới
            'status' => $request->has('status'),
            'updated_at' => now(),
        ]);

    return redirect()->route('categories.index')->with('success', 'Danh mục đã được cập nhật.');
}
}
