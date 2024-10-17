<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryResource;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function categories()
    {
        return CategoryResource::collection(Category::all());
    }
    public function category($id)
    {
        $category = Category::find($id);
        // nếu danh mục không tồn tại
        if (!$category) {
            return response()->json(['errors' => 'Danh mục không tồn tại']);
        }

        return response()->json(['data' => $category]);
    }

}
