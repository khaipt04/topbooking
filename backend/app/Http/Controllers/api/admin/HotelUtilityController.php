<?php

namespace App\Http\Controllers\api\admin;

use App\Http\Controllers\Controller;
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

            if (empty($utilities)) {
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
                'message' => $e->getMessage(),
            ], 500);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
