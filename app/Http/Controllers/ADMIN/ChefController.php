<?php

namespace App\Http\Controllers\ADMIN;

use App\Http\Controllers\Controller;
use App\Models\Chef;
use Illuminate\Http\Request;

class ChefController extends Controller
{
    //
    public function showChef(){
        $data['chefs'] = Chef::get();
        return view('ADMIN.chefList',$data);
    }

    public function addChef(){
        return view('ADMIN.addChef');
    }

    public function uploadChef(Request $request){
        $validchef = $request->validate([
            /*form name here--*/ 'chef_name' => 'required',
                        
                                 'speciality' => 'required', 
                                 'image' => 'required',
                                 
                    ]);

                    $image = $request->image;//<form name
                    $imagename = time().'.'.$image->getClientOriginalExtension();
                    $request->image->move('chefImage',$imagename);

                    $instr_data = array(
                        /*database colom name here--*/ 'chef_name' =>$request->chef_name,/*form name here*/
                                                       'speciality' => $request->speciality,
                                                        'image' => $imagename,
                                                        
                                                    

                                );
                                $resp =Chef::insert($instr_data);     

                                if($resp){
                                    $request->session()->flash('message', 'Your date has been successfully inserted!');
                                }else{
                                    $request->session()->flash('message', 'Something went wrong!');
                                }
                                return redirect('showChef');
                              // return redirect()->back(); 


    }

    public function editChef(Request $request){
        $data['chefs'] = Chef::where('id', $request->id)->first();
        return view('ADMIN.editChef', $data);
    }

    public function updateChef(Request $request){
        $validchrf = $request->validate([
            /*form name here--*/ 'chef_name' => 'required',
                        
            'speciality' => 'required', 
            'image' => 'required',
                    ]);

                    $image = $request->image;//<form name
                    $imagename = time().'.'.$image->getClientOriginalExtension();
                    $request->image->move('chefImage',$imagename);

                    $instr_data = array(
                         /*database colom name here--*/ 'chef_name' =>$request->chef_name,/*form name here*/
                         'speciality' => $request->speciality,
                         'image' => $imagename,

                                );
                               
                                $resp =Chef::where('id', $request->id)->update($instr_data);
                                if($resp){
                                    $request->session()->flash('message', 'Your date has been successfully updated!');
                                }else{
                                    $request->session()->flash('message', 'Something went wrong!');
                                }
                                return redirect('showChef');               


    }

    public function deleteChef(Request $request,$id)
    {
        // if( Chef::where('id',$request->deleteChef)->delete()){
        //     $request->session()->flash('message', 'your data has been deleted');
        // }else{
        //     $request->session()->flash('message', 'your data has not been deleted');
        // }
        
        // return redirect('/showChef'); 

        $delete_chef = Chef::findorfail($id);
        $delete_chef->delete();
        return response()->json([
            'status'=> 'deleted successfully'
        ]);
    }
}

