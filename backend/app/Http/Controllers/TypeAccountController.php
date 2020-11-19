<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TypeAccountModel;
use Illuminate\Support\Facades\Validator;

class TypeAccountController extends Controller
{
    public function typeAccounts(){
        return response()->json(TypeAccountModel::get(), 200);
    }

    public function typeAccountById($id){
        $type_account = TypeAccountModel::find($id);
        if (is_null($type_account))
        {
            return response()->json(["message" => "ID Not Found"], 404);
        }
        return response()->json($type_account, 200);
    }

    public function addTypeAccount(Request $req){
        $rules = [
            'name' => 'required|min:3|max:5',
        ];
        $validator = Validator::make($req->all(), $rules);
        if ($validator->fails())
        {
            return response()->json($validator->errors(), 400);
        }
        $type_account = TypeAccountModel::create($req->all());
        return response()->json($type_account, 201);
    }

    public function updateTypeAccount(Request $req, $id){
        $type_account = TypeAccountModel::find($id);
        if (is_null($type_account))
        {
            return response()->json(["message" => "ID Not Found"], 404);
        }
        $type_accounts->update($req->all());
        return response()->json($type_accounts, 200);
    }

    public function deleteTypeAccount(Request $req, $id){
        $type_account = TypeAccountModel::find($id);
        if (is_null($type_account))
        {
            return response()->json(["message" => "ID Not Found"], 404);
        }
        $type_account->delete();
        return response()->json(["message" => "Delete success"], 204);
    }
}
