<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use App\Models\HotelCategory;
use Illuminate\Http\Request;

class HotelCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $categories = HotelCategory::all();

            if ($categories->isEmpty()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Danh sách loại chỗ nghỉ trống.',
                ], 404);
            }

            return response()->json([
                'success' => true,
                'data' => $categories,
                'message' => 'Lấy danh sách loại chỗ nghỉ thành công.'
            ]);
        }catch (\Exception $e){
            return response()->json([
                'success' => false,
                'message' => $e->getMessage(),
            ], 500);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
//        try {
//            $data = $request->all();
//            $initials = collect(explode(' ', $data['name']))->filter()->map(fn($word) => strtoupper($word[0]))->implode('');
//            $code = 'UT' . rand(1000, 9999) . '-' . $initials . '-' . rand(1000, 9999);
//
//            $hotelUtility = new HotelUtility();
//            $hotelUtility->code = $code;
//            $hotelUtility->name = $data['name'];
//            $hotelUtility->icon = $data['icon'];
//
//            $hotelUtility->save();
//
//            return response()->json([
//                'success' => true,
//                'data' => $hotelUtility,
//                'message' => 'Tạo tiện nghi thành công.'
//            ], 201);
//        }catch (\Exception $e){
//            return response()->json([
//                'success' => false,
//                'message' => $e->getMessage(),
//            ], 500);
//        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try {
            $category = HotelCategory::find($id);

            if(empty($category)){
                return response()->json([
                    'success' => false,
                    'message' => 'Không tìm thấy loại chỗ nghỉ.'
                ], 404);
            }

            return response()->json([
                'success' => true,
                'data' => $category,
                'message' => 'Lấy loại chỗ nghỉ thành công.'
            ]);
        }catch (\Exception $e){
            return response()->json([
                'success' => false,
                'message' => $e->getMessage(),
            ], 500);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
