<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\OrderDetailModel;
use Illuminate\Support\Facades\Validator;

class OrderDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(OrderDetailModel::get(), 200);
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
        $rules = [
            'order_id' => 'required',
            'product_id' => 'required',
            'number' => 'required',
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails())
        {
            return response()->json($validator->errors(), 400);
        }
        $order_detail = OrderDetailModel::create($request->all());
        return response()->json($order_detail, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $order_detail = OrderDetailModel::find($id);
        if (is_null($order_detail))
        {
            return response()->json(["message" => "ID Not Found"], 404);
        }
        return response()->json($order_detail, 200);
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
        $order_detail = OrderDetailModel::find($id);
        if (is_null($order_detail))
        {
            return response()->json(["message" => "ID Not Found"], 404);
        }
        $order_detail->update($request->all());
        return response()->json($order_detail, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $order_detail = OrderDetailModel::find($id);
        if (is_null($order_detail))
        {
            return response()->json(["message" => "ID Not Found"], 404);
        }
        $order_detail->delete();
        return response()->json(null, 204);
    }

    public function detailByOrder($order_id)
    {
        $order_detail = OrderDetailModel::where('order_id', $order_id)->get();
        return response()->json($order_detail, 200);
    }
}
