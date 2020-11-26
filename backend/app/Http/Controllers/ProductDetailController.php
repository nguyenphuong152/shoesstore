<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ProductDetailModel;
use Illuminate\Support\Facades\Validator;

class ProductDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(ProductDetailModel::get(), 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->authorize('admin');
        $rules = [
            'product_id' => 'required',
            'cost' => 'required',
            'price' => 'required',
            'color_id' => 'required',
            'size_id' => 'required',
            'product_cata_id' => 'required',
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails())
        {
            return response()->json($validator->errors(), 400);
        }
        $product_detail = ProductDetailModel::create($request->all());
        return response()->json($product_detail, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product_detail = ProductDetailModel::find($id);
        if (is_null($product_detail))
        {
            return response()->json(["message" => "ID Not Found"], 404);
        }
        return response()->json($product_detail, 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->authorize('admin');
        $product_detail = ProductDetailModel::find($id);
        if (is_null($product_detail))
        {
            return response()->json(["message" => "ID Not Found"], 404);
        }
        $product_detail->update($request->all());
        return response()->json($product_detail, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->authorize('admin');
        $product_detail = ProductDetailModel::find($id);
        if (is_null($product_detail))
        {
            return response()->json(["message" => "ID Not Found"], 404);
        }
        $product_detail->delete();
        return response()->json(null, 204);
    }
}
