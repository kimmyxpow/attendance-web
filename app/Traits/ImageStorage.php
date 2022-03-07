<?php

namespace App\Traits;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

/**
 * Upload Image for Profile
 * And Attendance
 */
trait ImageStorage
{
    /**
     * For Upload Photo
     * @param mixed $photo
     * @param mixed $name
     * @param mixed $path
     * @param bool $update
     * @param mixed|null $old_photo
     * @return void
     */
    public function uploadImage($photo, $name, $path, $update = false, $old_photo = null)
    {
        if ($update) {
            Storage::delete("/public/{$path}/" . $old_photo);
        }

        $name = Str::slug($name) . '-' . time();
        $extension = $photo->getClientOriginalExtension();
        $newName = $name . '.' . $extension;
        Storage::putFileAs("/public/{$path}", $photo, $newName);
        return $newName;
    }

    /**
     *
     * @param mixed $old_photo
     * @param mixed $path
     * @return void
     */
    public function deleteImage($old_photo, $path)
    {
        Storage::delete("/public/{$path}" . $old_photo);
    }
}
