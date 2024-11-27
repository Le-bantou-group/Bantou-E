<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
    public function store(Request $request)
    {
         
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->role ='user';
        $user->password = Hash::make($request->password);
        //Gsetion de l'avatar
        if($request->hasFile('avatar')){
            $image_path = $request->file('avatar')->store('avatars', 'public');
            $user->avatar .= $image_path ;
       }
    $user->save();
    return view('Front.master');
    }

    
    public function update($id,Request $request){
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        //Gsetion de l'avatar
        if($request->hasFile('avatar')){
            $image_path = $request->file('avatar')->store('avatars', 'public');
            $user->avatar .= $image_path ;
       }
    $user->save();
    return view('Front.master');
    }
    public function role($id,Request $request){
        $user = User::find($id);
        $user->role = $request->role;

    $user->save();
    return back();
    }
    public function roleView($id){
        $user = User::find($id);
        
        return redirect('Back.pages.update_user',compact('user'));
    }
    
    public function delete($id)
    {
         $user = User::find($id);
         $user->delete();
         return back();  
    }
}