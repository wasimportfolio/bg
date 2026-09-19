<?php

if (!function_exists('upload_path')) {
    function upload_path($folder)
    {
        $basePath = env('UPLOAD_PATH');

        if ($basePath) {
            return rtrim($basePath, DIRECTORY_SEPARATOR) . DIRECTORY_SEPARATOR . $folder;
        }

        return public_path('uploads/' . $folder);
    }
}