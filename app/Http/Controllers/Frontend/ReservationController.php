<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Rules\DateBetween;
use App\Rules\TimeBetween;
use App\Models\Reservation;

class ReservationController extends Controller
{
    public function pageone(Request $request){
        
        $reservation = $request->session()->get('reservation');
        return view('reservations.pageone', compact('reservation'));
    }

  //store method 
    public function storePageone(Request $request)
    {
        // validation 
        
        $validated = $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email'],
            'date' => ['required', 'date', new DateBetween, new TimeBetween],
            'phone' => ['required'],
            'guest_number' => ['required'],
            'table_id' => ['required'],
        ]);
            $reservation = new Reservation();
            $reservation->fill($validated);
            $request->session()->put('reservation', $reservation);
            $reservation->save();
            return to_route('reservations.pagetwo');

    }

    public function pagetwo(Request $request)
    {  
        $reservation = $request->session()->get('reservation');

        return view('reservations.step-two', compact('reservation', 'tables'));
    }

    public function storePagetwo(Request $request)
    {  
        $validated = $request->validate([
            'table_id' => ['required']
        ]);
        $reservation = $request->session()->get('reservation');
        $reservation->fill($validated);
        $reservation->save();
        $request->session()->forget('reservation');

        return to_route('thankyou');
    }
}
