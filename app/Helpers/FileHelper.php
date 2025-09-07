<?php

namespace App\Helpers;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class FileHelper
{
    /**
     * Upload file baru
     */
    public static function upload(UploadedFile $file, string $folder): string
    {
        $filename = time() . '_' . uniqid() . '_' . $file->getClientOriginalName();
        return $file->storeAs($folder, $filename, 'public');
    }

    /**
     * Update file lama dengan yang baru
     */
    public static function update(?string $oldPath, UploadedFile $file, string $folder): string
    {
        // Hapus file lama jika ada
        if ($oldPath && Storage::disk('public')->exists($oldPath)) {
            Storage::disk('public')->delete($oldPath);
        }

        // Upload file baru
        return self::upload($file, $folder);
    }

    /**
     * Hapus file
     */
    public static function delete(?string $path): void
    {
        if ($path && Storage::disk('public')->exists($path)) {
            Storage::disk('public')->delete($path);
        }
    }
}
