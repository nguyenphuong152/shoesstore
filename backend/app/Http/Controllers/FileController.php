<?php

namespace App\Http\Controllers;

use App\Models\ImageModel;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class FileController extends Controller
{
    public function getImgByName($fileName)
    {
        return response()->download(public_path('img/'.$fileName));
    }

    public function getImgByProductDetailId($product_detail_id)
    {
        //can get only 1 image with 1 product_detail_id
        $list_image = ImageModel::where('product_detail_id', $product_detail_id)->get();
        return response()->download(public_path('img/'.$list_image->first()->name));
    }

    public function uploadImg(Request $request)
    {
        $fileName = Str::random(10).'.png';

        //save link image in database
        $image = new ImageModel();
        $image->name = $fileName;
        $image->product_detail_id = $request->product_detail_id;
        $image->save();

        //storage image in file system public/img/..
        $path = $request->file('photo')->move(public_path('/img'), $fileName);
        $photoURL = url('/'.$fileName);

        return response()->json(['url: ', $photoURL], 200);
    }
}