<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ModelModel;
use Illuminate\Support\Facades\Validator;

class ModelController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(ModelModel::get(), 200);
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
            'name' => 'required',
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails())
        {
            return response()->json($validator->errors(), 400);
        }
        $model = ModelModel::create($request->all());
        return response()->json($model, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $model = ModelModel::find($id);
        if (is_null($model))
        {
            return response()->json(["message" => "ID Not Found"], 404);
        }
        return response()->json($model, 200);
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
        $model = ModelModel::find($id);
        if (is_null($model))
        {
            return response()->json(["message" => "ID Not Found"], 404);
        }
        $model->update($request->all());
        return response()->json($model, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = ModelModel::find($id);
        if (is_null($model))
        {
            return response()->json(["message" => "ID Not Found"], 404);
        }
        $model->delete();
        return response()->json(null, 204);
    }
}
