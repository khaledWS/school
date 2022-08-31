<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Storage;

function uploadImage($folder, $image, $optional = null)
{
    if ($optional === "test") {
        $filename = $image->hashName();
        return $filename;
    }

    $x = $image->Store('/', $folder);
    $filename = $image->hashName();
    return $filename;
}


function uploadFile($folder, $image, $optional = null)
{
    if ($optional === "test") {
        $filename = $image->hashName();
        return $filename;
    }

    $x = $image->Store('/', $folder);
    $filename = $image->hashName();
    return $filename;
}


/**
 * Returns the Full path of a Picture
 * @param string $name The Name of the file with its extension at the end
 * @param string $path The Path to the file ex. Image/Vendor
 * @return string full Uri
 */
function getPhotoPath($name, $path)
{
    return ($name !== null) ? asset("storage/" . $path . '/' . $name)  : "";
}


/**
 * Returns the Full path of a file
 * @param string $name The Name of the file with its extension at the end
 * @param string $path The Path to the file ex. Image/Vendor
 * @return string full Uri
 */
function getFilePath($name, $path)
{
    return ($name !== null) ? asset("storage/" . $path . '/' . $name)  : "";
}



function downloadFile($request, $filename)
{
    $x = explode('.', $filename);
    $extension = end($x);
    return Storage::disk($request->disk)->download($filename, $request->name . '.' . $extension);
}


/**
 * get the column names for display based on the current locale
 *
 * @param  string $model the name of the model
 * @param  string $column the name of the column
 * @return array
 */
function getFieldNameFromModel(string $model, string $column): string
{
    //add the proper namespace before the  class name
    $class = '\App\Models\\' . $model;
    return $class::$attr_multi[App::getLocale()][$column];
}
