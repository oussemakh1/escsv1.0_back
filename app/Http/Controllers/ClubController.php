<?php

namespace App\Http\Controllers;
use App\Models\Club;
use Illuminate\Http\Request;

class ClubController extends Controller
{
   public function store (Request $request) 
   {
       return Club::create($request->all());
   }

   public function find ($id) {
       return Club::find($id);
   }

   public function update(Request $request, $id) {
       $club = Club::find($id);
        return $club->update($request->all());
   }

   public function delete($id) {
       $club = Club::find($id);
       return $club->delete();
   }
}
