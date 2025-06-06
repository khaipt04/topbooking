<?php

namespace App\Http\Controllers\Api\Admin;

use App\Helpers\CodeHelper;
use App\Helpers\ErrorHelper;
use App\Helpers\ImageHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreHotelCategory;
use App\Http\Requests\UpdateHotelCategory;
use App\Models\HotelCategory;
use Illuminate\Http\Request;
use League\CommonMark\Extension\CommonMark\Node\Inline\Code;

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
                'message' => ErrorHelper::handle($e)
            ], 500);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreHotelCategory $request)
    {
        try {
            $dataImage = null;

            if ($request->hasFile('image')) {
                try {
                    $file = $request->file('image');
                    $dataImage = ImageHelper::handleUpload($file, 'hotelcategoryimages', 'HCIMG_', 'square');
                } catch (\Exception $e) {
                    return response()->json([
                        'success' => false,
                        'message' => ErrorHelper::handle($e)
                    ], 500);
                }
            }

            $data = $request->only('name');

            $code = CodeHelper::createCode('HC', $data['name']);

            $hotelCategory = new HotelCategory();
            $hotelCategory->code = $code;
            $hotelCategory->name = $data['name'];
            $hotelCategory->image_path = $dataImage['image_path'];
            $hotelCategory->image_url = $dataImage['image_url'];

            $hotelCategory->save();

            return response()->json([
                'success' => true,
                'data' => $hotelCategory,
                'message' => 'Tạo loại chỗ nghỉ thành công.'
            ], 201);
        }catch (\Exception $e){
            return response()->json([
                'success' => false,
                'message' => ErrorHelper::handle($e)
            ], 500);
        }
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
                'message' => ErrorHelper::handle($e)
            ], 500);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateHotelCategory $request, string $id)
    {
        try {
            $category = HotelCategory::find($id);

            if(empty($category)){
                return response()->json([
                    'success' => false,
                    'message' => 'Loại chỗ nghỉ không tồn tại.'
                ], 404);
            }

            $dataImage = null;

            if ($request->hasFile('image')) {
                try {
                    $file = $request->file('image');
                    $dataImage = ImageHelper::handleUpload($file, 'hotelcategoryimages', 'HCIMG_', 'square');
                    ImageHelper::deleteImage($category->image_path);
                } catch (\Exception $e) {
                    return response()->json([
                        'success' => false,
                        'message' => ErrorHelper::handle($e)
                    ], 500);
                }
            }

            $data = $request->only('name');

            $category->name = $data['name'];

            if ($dataImage) {
                $category->image_path = $dataImage['image_path'];
                $category->image_url = $dataImage['image_url'];
            }

            $category->update();

            return response()->json([
                'success' => true,
                'data' => $category,
                'message' => 'Cập nhật thông tin loại chỗ nghỉ thành công.'
            ]);
        }catch (\Exception $e){
            return response()->json([
                'success' => false,
                'message' => ErrorHelper::handle($e)
            ], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
