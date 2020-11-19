<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TypeAccountModel;

class TypeAccountController extends Controller
{
    public function type_accounts(){
        return response()->json(TypeAccountModel::get(), 200);
    }
}
