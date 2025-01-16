<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    public static $subCategory, $image, $directory, $imageURL, $imageName;

    public static function getImageURL($request)
    {
        self::$image = $request->file('image');
        self::$imageName = self::$image->getClientOriginalName();
        self::$directory = 'upload/sub-category-images/';
        self::$image->move(self::$directory, self::$imageName);
        self::$imageURL = self::$directory.self::$imageName;
        return self::$imageURL;
    }

    public static function newSubCategory($request)
    {
        self::$subCategory = new SubCategory();
        self::$subCategory->category_id = $request->category_id;
        self::$subCategory->name        = $request->name;
        self::$subCategory->status      = $request->status;
        self::$subCategory->image       = self::getImageURL($request);
        self::$subCategory->description = $request->description;
        self::$subCategory->save();
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public static function updateSubCategory($request, $id)
    {
        self::$subCategory = SubCategory::find($id);
        if ($request->file('image'))
        {
            self::$imageURL = self::getImageURL($request);
        }
        else
        {
            self::$imageURL = self::$subCategory->image;
        }
        self::$subCategory->category_id = $request->category_id;
        self::$subCategory->name        = $request->name;
        self::$subCategory->status      = $request->status;
        self::$subCategory->image       = self::$imageURL;
        self::$subCategory5s ->description = $request->description;
        self::$subCategory->save();
    }

    public static function deleteSubCategory($id)
    {
        self::$subCategory = SubCategory::find($id);
        if (file_exists(self::$subCategory->image))
        {
            unlink(self::$subCategory->image);
        }
        self::$subCategory->delete();
    }
}
