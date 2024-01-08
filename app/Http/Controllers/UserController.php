<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //
    public function create(){
        return view('create_user');
    }
    public function store(Request $request){
        $firstname = $request->input('firstname');
        $lastname = $request->input('lastname');
        $email = $request->input('email');
        $password = bcrypt($request->input('password'));
        $gender = $request->input('gender');
        $skills = $request->input('skills');
        $location = $request->input('location');
        if (is_array($skills)) {                                                                                                          
            $skills = implode(',', $skills);
        }
        $location1 = implode(',', $location);
        $native = $request->input('native');
       
        $user = new User;
        $user->firstname = $firstname;
        $user->lastname = $lastname;
        $user->email = $email;
        $user->password = $password;
        $user->gender = $gender;
        $user->skills = $skills; 
        $user->location = $location1;
        $user->native = $native;
        $user->save();

        return 'Created Successfully';


    }

    public function list(){
        $users = User::all();
        return view('list_user',['users'=>$users]);
    }
    public function edit($id){
        $user = User::find($id);
        return view('edit_user',['user'=>$user,
        'skills'=> explode(',',$user->skills),
        'location'=>explode(',',$user->location)
    ]);
    }
    public function update(Request $request,$id){
        $user = User::find($id);
        $user->firstname = $request->input('firstname');                                                                                    
        $user->lastname = $request->input('lastname');
        $user->email = $request->input('email');
        $user->password = $request->filled('password') ? bcrypt($request->input('password')) : $user->password;
        $user->gender = $request->input('gender');
       // $user->skills = explode(',', $request->input('skills', []));
       
       // $user->location = explode(',', $request->input('location', []));
        $user->native = $request->input('native');
        $user->save();
        return 'Updated Successfully <a href="'.url('list').'">See list</a>' ;
    }

    public function delete($id)
    {
        $user = User::find($id);
        $user->delete();
        return 'Deleted <a href="'.url('list').'">See list</a>';
    }
}



//skills and location is not updating
//no existing location