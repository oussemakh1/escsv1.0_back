<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationsController extends Controller
{

          public function store(Request $request)        
        {
                   
        return Reservation::create($request->all());
        }
    

        public function show($id)
    {

        return Reservation::find($id);
    }
        public function update(Request $request,$id)
    {
        $Reservations = Reservation::find($id);
        return $Reservations->update($request->All());
           
    }
    public function delete($id)
    {
        $Reservations = Reservation::find($id);
        return $Reservations->delete();
           
    }
    

    //
}
