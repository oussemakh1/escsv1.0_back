<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

          public function store(Request $request )
        {
            $request['password'] = Hash::make($request['password']);
            return User::create($request->All());
        }
    

        public function show($id)
    {

        return User::find($id);
    }
        public function update(Request $request,$id)
    {
        $user = User::find($id);
        return $user->update($request->All());
           
    }
    public function delete($id)
    {
        $user = User::find($id);
        return $user->delete();
           
    }
    

    //
}
