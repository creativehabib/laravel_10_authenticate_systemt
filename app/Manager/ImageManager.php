<?php
namespace App\Manager;

use Intervention\Image\Facades\Image;

class ImageManager
{
    public const DEFAULT_IMG = 'storage/profile/demo.png';


    /**
     * @param string $name
     * @param int $width
     * @param int $height
     * @param string $path
     * @param string $file
     * @return string
     */
    final public static function uploadImage(string $name, int $width, int $height, string $path, string $file): string
    {
        $image_file_name = $name . '.webp';
        Image::make($file)->fit($width, $height)->save(public_path($path) . $image_file_name, 50, 'webp');
        return $image_file_name;
    }

    /**
     * @param $path
     * @param $img
     * @return void
     */
    final public static function deleteImage($path, $img): void
    {
        $path = public_path($path) . $img;
        if ($img != '' && file_exists($path)) {
            unlink($path);
        }
    }

    /**
     * @param string $path
     * @param string|null $image
     * @return string
     */
    final public static function prepareImageUrl(string $path, string|null $image): string
    {
        $url = url($path . $image);
        if (empty($image)) {
            $url = url(self::DEFAULT_IMG);
        }
        return $url;
    }

    public static function processImageUpload(
        string      $file,
        string      $name,
        string      $path,
        int         $width,
        int         $height,
        string      $path_thumb = null,
        int         $width_thumb = 0,
        int         $height_thumb = 0,
        string|null $existing_photo = ''
    ): string
    {
        if (!empty($existing_photo)) {
            self::deleteImage($path, $existing_photo);
            if (!empty($path_thumb)) {
                self::deleteImage($path_thumb, $existing_photo);
            }
        }
        $photo_name = self::uploadImage($name, $width, $height, $path, $file);
        if (!empty($path_thumb)) {
            self::uploadImage($name, $width_thumb, $height_thumb, $path_thumb, $file);
        }
        return $photo_name;


    }
}
