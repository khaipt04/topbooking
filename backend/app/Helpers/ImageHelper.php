<?php

namespace App\Helpers;

use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Imagick\Driver;

class ImageHelper
{
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
}
