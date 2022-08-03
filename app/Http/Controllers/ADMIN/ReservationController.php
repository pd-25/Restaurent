<?php

namespace App\Http\Controllers\ADMIN;

use App\Http\Controllers\Controller;
use App\Models\Food;
use Illuminate\Http\Request;
use App\Models\Reservation;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{
    //
    public function reservation(Request $request){

        if(Auth::id()){

        $validfood = $request->validate([
            /*form name here--*/ 'name' => 'required',
                        
                                 'phone' => 'required', 
                                 'guest_number' => 'required',
                                 'date' => 'required',
                                 'time' => 'required',
                                 'message' => 'required'
                    ]);

                  

                    $instr_data = array(
                        /*database colom name here--*/ 'name' =>$request->name,/*form name here*/
                        /*database colom name here--*/ 'email' =>$request->email,/*form name here*/
                        /*database colom name here--*/ 'phone' =>$request->phone,/*form name here*/
                        /*database colom name here--*/ 'guest' =>$request->guest_number,/*form name here*/
                                                       'date' => $request->date,
                                                        'time' => $request->time,
                                                        'message' => $request->message
                                                    

                                );
                                $resp =Reservation::insert($instr_data);     

                                if($resp){
                                    $request->session()->flash('message', 'Your order successfully placed!');
                                }else{
                                    $request->session()->flash('message', 'Something went wrong!');
                                }
                                return redirect()->back(); 
        }else{
            return redirect('login');
        }                        

    }


    public function showReservation(){
        $data['reservations'] = Reservation::get();
       
        return view('ADMIN.ShowReservation',$data);
    }


    
}
