<?php

namespace App\Http\Controllers;

use App\Models\Carts;
use Illuminate\Http\Request;

class CartsController extends Controller
{
    public function addToCart(Request $request)
    {
        $productId = $request->input('product_id');

        // Kiểm tra xem sản phẩm đã tồn tại trong giỏ hàng hay chưa
        $existingItem = Carts::where('product_id', $productId)->first();

        if ($existingItem) {
            // Nếu sản phẩm đã tồn tại, tăng số lượng lên 1
            $existingItem->quantity += 1;
            $existingItem->save();
        } else {
            // Nếu sản phẩm chưa tồn tại, thêm mới vào giỏ hàng
            $newItem = new Carts();
            $newItem->product_id = $productId;
            // Thêm các trường dữ liệu khác từ request vào đây
            $newItem->product_name = $request->input('product_name');
            $newItem->product_color = $request->input('product_color');
            $newItem->product_image = $request->input('product_image');
            $newItem->product_price = $request->input('product_price');
            $newItem->quantity = 1; // Số lượng ban đầu là 1
            $newItem->save();
        }

        return response()->json(['message' => 'Product added to cart successfully!']);
    }
}

