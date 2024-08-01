<?php
namespace App\Http\Controllers\Admin;

use App\Models\Promotion;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PromotionController extends Controller
{
    const PATH_VIEW = 'admin.promotions.';

    /**
     * Hiển thị danh sách các khuyến mãi.
     */
    public function index()
    {
        $promotions = Promotion::all();
        return view(self::PATH_VIEW . 'index', compact('promotions'));
    }

    /**
     * Hiển thị form tạo khuyến mãi mới.
     */
    public function create()
    {
        return view(self::PATH_VIEW . 'create');
    }

    /**
     * Lưu khuyến mãi mới vào cơ sở dữ liệu.
     */
    public function store(Request $request)
{
    // dd($request->all());
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'required|string|max:255',
        'discount_type' => 'required|in:amount,percentage',
        'discount_value' => 'required|numeric|min:0',
        'start_date' => 'required|date',
        'end_date' => 'required|date|after:start_date',
    ]);
    
    Promotion::create($validated);

    return redirect()->route('admin.promotions.index')->with('success', 'Khuyến mãi đã được tạo thành công.');
}


    /**
     * Hiển thị chi tiết khuyến mãi.
     */
    public function show(Promotion $promotion)
    {
        return view(self::PATH_VIEW . 'show', compact('promotion'));
    }

    /**
     * Hiển thị form chỉnh sửa khuyến mãi.
     */
    public function edit(Promotion $promotion)
    {
        return view(self::PATH_VIEW . 'edit', compact('promotion'));
    }

    /**
     * Cập nhật khuyến mãi trong cơ sở dữ liệu.
     */
    public function update(Request $request, Promotion $promotion)
    {
        // dd($request->all());
        $validated = $request->validate([
            'name'              => 'required|string|max:255',
            'description'       => 'required|string|max:255',
            'discount_type'     => 'required|in:amount,percentage',
            'discount_value'    => 'required|numeric|min:0',
            'start_date'        => 'required|date',
            'end_date'          => 'required|date|after:start_date',
        ]);


        $promotion->update($validated);

        return redirect()->route('admin.promotions.index')->with('success', 'Khuyến mãi đã được cập nhật thành công.');
    }

    /**
     * Xóa khuyến mãi khỏi cơ sở dữ liệu.
     */
    public function destroy(Promotion $promotion)
    {
        $promotion->delete();
        return redirect()->route('admin.promotions.index')->with('success', 'Khuyến mãi đã được xóa thành công.');
    }
}
