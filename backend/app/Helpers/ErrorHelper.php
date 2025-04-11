<?php
namespace App\Helpers;

use Illuminate\Support\Facades\App;

class ErrorHelper
{
    public static function handle(\Throwable $e): string
    {
        if (App::environment('production')) {
            return 'Lỗi không xác định. Vui lòng thử lại sau!';
        }

        return $e->getMessage();
    }
}
