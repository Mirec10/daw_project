<?php

namespace App\Http\Controllers\Admin;

use App\Image;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ImageController extends Controller
{
    public function delete($id){
        $image = Image::findOrFail($id);

        $image->delete();

        return back();
    }
}
