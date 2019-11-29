<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
        return response()->json(User::all());
    }

    public function store(UserRequest $request){
        $data = $request->all();
        $data['password'] = Hash::make($request->password);
        User::create($data);
        return response()->json(['message' =>'created successfully!']);
    }
}
