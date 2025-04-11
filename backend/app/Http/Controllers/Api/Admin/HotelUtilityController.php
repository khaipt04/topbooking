<?php

namespace App\Http\Controllers\Api\Admin;

use App\Helpers\CodeHelper;
use App\Helpers\ErrorHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreHotelUtility;
use App\Http\Requests\UpdateHotelUtility;
use App\Models\HotelUtility;
use Illuminate\Http\Request;

class HotelUtilityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $utilities = HotelUtility::all();

            if ($utilities->isEmpty()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Danh sách tiện nghi trống.',
                ], 404);
            }

            return response()->json([
                'success' => true,
                'data' => $utilities,
                'message' => 'Lấy danh sách tiện nghi thành công.'
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
    public function store(StoreHotelUtility $request)
    {
        try {
            $data = $request->all();

            $code = CodeHelper::createCode('HU', $data['name']);

            $hotelUtility = new HotelUtility();
            $hotelUtility->code = $code;
            $hotelUtility->name = $data['name'];
            $hotelUtility->icon = $data['icon'];

            $hotelUtility->save();

            return response()->json([
                'success' => true,
                'data' => $hotelUtility,
                'message' => 'Tạo tiện nghi thành công.'
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
            $utility = HotelUtility::find($id);

            if(empty($utility)){
                return response()->json([
                    'success' => false,
                    'message' => 'Không tìm thấy tiện nghi.'
                ], 404);
            }

            return response()->json([
                'success' => true,
                'data' => $utility,
                'message' => 'Lấy tiện nghi thành công.'
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
    public function update(UpdateHotelUtility $request, string $id)
    {
        try {
            $utility = HotelUtility::find($id);

            if(empty($utility)){
                return response()->json([
                    'success' => false,
                    'message' => 'Tiện nghi không tồn tại.'
                ], 404);
            }

            $utility->fill($request->all());
            $utility->update();

            return response()->json([
                'success' => true,
                'data' => $utility,
                'message' => 'Cập nhật thông tin tiện nghi thành công.'
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
        try {
            $utility = HotelUtility::find($id);

            if(empty($utility)){
                return response()->json([
                    'success' => false,
                    'message' => 'Tiện nghi không tồn tại.'
                ], 404);
            }

            $utility->delete();

            return response()->json([
                'success' => true,
                'message' => 'Xóa tiện nghi thành công.'
            ]);
        }catch (\Exception $e){
            return response()->json([
                'success' => false,
                'message' => ErrorHelper::handle($e)
            ], 500);
        }
    }
}
