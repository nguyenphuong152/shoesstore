<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AccountModel;

class AccountController extends Controller
{
    public function accounts(){
        return response()->json(AccountModel::get(), 200);
    }
}
