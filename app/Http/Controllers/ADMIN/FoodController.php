<?php

namespace App\Http\Controllers\ADMIN;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Food;

class FoodController extends Controller
{
    //
    public function foodMenu(){
        $data['foods'] = Food::get();
        return view('ADMIN.FoodMenu', $data);
    }

    public function Add_foodMenu(){
        return view('ADMIN.Add_foodMenu');
    }

    public function upload_foodMenu(Request $request){

        $validfood = $request->validate([
            /*form name here--*/ 'food_title' => 'required',
                        
                                 'price' => 'required', 
                                 'image' => 'required',
                                 'description' => 'required'
                    ]);

                    $image = $request->image;//<form name
                    $imagename = time().'.'.$image->getClientOriginalExtension();
                    $request->image->move('foodimage',$imagename);
                    if($validfood){
                    $instr_data = array(
                        /*database colom name here--*/ 'title' =>$request->food_title,/*form name here*/
                                                       'price' => $request->price,
                                                        'image' => $imagename,
                                                        'description' => $request->description
                                                    

                                );
                                $resp =Food::insert($instr_data);     

                                if($resp){
                                    $request->session()->flash('message', 'Your date has been successfully inserted!');
                                }else{
                                    $request->session()->flash('message', 'Something went wrong!');
                                }
                                return redirect('foodMenu');   
                            }else{
                                $request->session()->flash('message', 'validation error!');
                                return redirect('foodMenu');
                            }

    }

    public function edit_foodMenu(Request $request){
        
       $data['foods'] = Food::where('id', $request->id)->first();
        return view('ADMIN.editFood', $data);
    }

    public function update_foodMenu(Request $request){
        $validfood = $request->validate([
            /*form name here--*/ 'title' => 'required',
                        
                                 'price' => 'required', 
                                 'image' => 'required',
                                 'description' => 'required'
                    ]);

                    $image = $request->image;//<form name
                    $imagename = time().'.'.$image->getClientOriginalExtension();
                    $request->image->move('foodimage',$imagename);

                    $instr_data = array(
                        /*database colom name here--*/ 'title' =>$request->title,/*form name here*/
                                                       'price' => $request->price,
                                                        'image' => $imagename,
                                                        'description' => $request->description
                                                    

                                );
                               
                                $resp =Food::where('id', $request->id)->update($instr_data);
                                if($resp){
                                    $request->session()->flash('message', 'Your date has been successfully updated!');
                                }else{
                                    $request->session()->flash('message', 'Something went wrong!');
                                }
                                return redirect('foodMenu');               


    }

    public function delete_food(Request $request)
    {
        if( Food::where('id',$request->delete_food)->delete()){
            $request->session()->flash('message', 'your data has been deleted');
        }else{
            $request->session()->flash('message', 'your data has not been deleted');
        }
        
        return redirect('/foodMenu');
    }
}
