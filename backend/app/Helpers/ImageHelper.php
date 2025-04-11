<?php

namespace App\Helpers;

use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Imagick\Driver;
use Illuminate\Support\Facades\Storage;

class ImageHelper
{
    public static function handleUpload($file, $folder, $prefix, $resizeType)
    {
        $image = null;

        if ($resizeType === 'square'){
            $image = ImageHelper::resizeToSquare($file);
        } elseif ($resizeType === 'rectangle'){
            $image = ImageHelper::resizeToRectangle($file);
        }

        $extension = $file->getClientOriginalExtension();
        $imageName = $prefix . now()->format('Ymd_His') . '_' . uniqid() . '.' . $extension;

        $relativePath = 'uploads/' . $folder . '/' . $imageName;
        $fullPath = storage_path('app/public/' . $relativePath);

        $image->save($fullPath);

        return [
            'image_path' => $relativePath,
            'image_url' => asset('storage/' . $relativePath)
        ];
    }

    public static function deleteImage($path)
    {
        $isExist = Storage::disk('public')->exists($path);

        if ($isExist) {
            Storage::disk('public')->delete($path);
        }
    }

    public static function resizeToSquare($file)
    {
        $manager = new ImageManager(new Driver());

        $image = $manager->read($file);

        $size = min($image->width(), $image->height());

        $image->cover($size, $size);

        $width = 1200; $height = 1200;

        if ($image->width() > $width || $image->height() > $height) {
            $image->resize($width, $height);
        }

        return $image;
    }

    public static function resizeToRectangle($file)
    {
        $manager = new ImageManager(new Driver());

        $image = $manager->read($file);

        $targetWidth = 1920;
        $targetHeight = intval($targetWidth * 9 / 16);

        $image->cover($targetWidth, $targetHeight);

        if ($image->width() > $targetWidth || $image->height() > $targetHeight) {
            $image->resize($targetWidth, $targetHeight);
        }

        return $image;
    }
}
