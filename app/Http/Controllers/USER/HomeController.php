<?php

namespace App\Http\Controllers\USER;

use App\Http\Controllers\Controller;
use App\Models\AddCart;
use App\Models\Chef;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Food;
use App\Models\Order;
use App\Models\User;

class HomeController extends Controller
{
    //

    public function userHome(){
        $data['data']= Food::all();
        $data['chefs']= Chef::all();
        $data['food1s'] = Food::get();
        $user_id = Auth::id();
            $data['count'] = AddCart::where('user_id',$user_id)->count();


        return view('USER.home',$data);

    }
    public function home(){
        $data['data']= Food::all();
        $data['chefs']= Chef::all();
        $data['food1s'] = Food::get();
         $user_id = Auth::id();
            $data['count'] = AddCart::where('user_id',$user_id)->count();
        


        return view('USER.home',$data);
    }

    public function redirects(){
        $data['data'] = Food::get();
        $data['users'] = User::get()->where('usertype', 0);
        $data['food1s'] = Food::get();
        $data['chefs']= Chef::all();
        
        $fetch_user_type = Auth::user()->usertype;
        if($fetch_user_type == 1){
            return view('ADMIN.user',$data);
        }else{
            // to show the cart when user login
            $user_id = Auth::id();
            $data['count'] = AddCart::where('user_id',$user_id)->count();


            return view('USER.home',$data,);
        }
    }


    public function addCart(Request $request, $id){


        if(Auth::id()){
            
            $user_id = Auth::id();
           // $food_id = Food::where('id', $request->id)->pluck('id');    it will save data in array format in db, so, we'll use the next line
           $food_id = $id;
           //dd($food_id);
            // $food_id = Food::where('id',$food_id1)->get();
            //$tasks = Task::where('p_id',$projectID)->get();
            //$projectID = Project::where('p_id',$project->p_id)->pluck('p_id');
            //$food_id = Food::get(['id']);
            //

            $validaddCart = $request->validate([
                /*form name here--*/ 'quantity' => 'required'
                              ]);

             $instr_data = array(
                /*database colom name here--*/ 'user_id' => $user_id,/*form name here*/
                                               'food_id' =>$food_id,
                                                'quantity' =>$request->quantity,

                    ); 
                    
                    $resp =AddCart::insert($instr_data); 
                     return redirect()->back();
        
        
        }else{
            return redirect('login');
        }
    }

   public function showCart(Request $request,$id){
    $data['count'] = AddCart::where('user_id',$id)->count();
    //$data['get_cart_userid'] = AddCart::select('*')->where('user_id', '=', $id)->get();//to get the cart id for deleting
    $data['Cartitems'] = AddCart::where('user_id',$id)->join('food', 'add_carts.food_id', '=', 'food.id' )->get();//here we r getting only food id & to get the cart id the previous line

       return view('USER.showcartUser', $data);

   }

   //delete isn't working
   public function removecart(Request $request)
   {
       
       if( AddCart::where('id',$request->removefromcart)->delete()){
           $request->session()->flash('message', 'your data has been deleted');
       }else{
           $request->session()->flash('message', 'your data has not been deleted');                                                 
       }
       
       return redirect()->back();
   }


   public function orderConfirm(Request $request){
      // $validorder = $request->validate([
        /*form name here--*/ //'name' => 'required',
        /*form name here--*/ //'number' => 'required',
        /*form name here--*/ //'Address' => 'required',
                      //]);

           //if($validorder){

            //$instr_data = array(
                /*database colom name here--*/ //'foodname' => $request->fodname,/*form name here*/
                                              /* 'price' =>$request->price,
                                                'quantity' =>$request->quantity,
                                                'name' => $request->name,
                                                'address' => $request->number,
                                                'Phone_number' => $request->Address,

                    ); 
                    
                    $resp =Order::insert($instr_data); 
                     return redirect()->back();



           }   else{
            $request->session()->flash('message', 'your data has not been ordered');
           }  */  

           /*foreach($request->foodname as $key =>$foodname)
           {

            $data = new Order;
            $data->foodname = $foodname;
            $data->price = $request->price[$key];
            $data->quantity = $request->quantity[$key];
            $data->name = $request->name;
            $data->address = $request->Address;
            $data->Phone_number = $request->number;
            $data->save();



           }
           return redirect()->back();*/
           
           

   }

}
