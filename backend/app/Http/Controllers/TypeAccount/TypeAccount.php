<?php

namespace App\Http\Controllers\TypeAccount;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TypeAccountModel;
use Illuminate\Support\Facades\Validator;

class TypeAccount extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(TypeAccountModel::get(), 200);
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
            'name' => 'required|min:3|max:5',
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails())
        {
            return response()->json($validator->errors(), 400);
        }
        $type_account = TypeAccountModel::create($request->all());
        return response()->json($type_account, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $type_account = TypeAccountModel::find($id);
        if (is_null($type_account))
        {
            return response()->json(["message" => "ID Not Found"], 404);
        }
        return response()->json($type_account, 200);
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
        $type_account = TypeAccountModel::find($id);
        if (is_null($type_account))
        {
            return response()->json(["message" => "ID Not Found"], 404);
        }
        $type_accounts->update($request->all());
        return response()->json($type_accounts, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $type_account = TypeAccountModel::find($id);
        if (is_null($type_account))
        {
            return response()->json(["message" => "ID Not Found"], 404);
        }
        $type_account->delete();
        return response()->json(null, 204);
    }
}
