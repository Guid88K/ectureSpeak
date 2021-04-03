<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class ForEditUserController extends Controller
{
    public function index()
    {
        $user = User::find(Auth::user()->id);

        return view('osob_cab', ['user' => $user]);
    }

    public function update(Request $request, $id)
    {
        if (isset($request->password)) {
            $validator = Validator::make($request->all(), [
                'password' => ['required', 'string', 'min:8', ],
            ]);
        }

        $user = User::find($id);

        $user->name = $request->name;
        $user->surname = $request->surname;
        $user->category = $request->category;
        $user->work_place = $request->work_place;
        $user->town = $request->town;
        $user->country = $request->country;
        $user->email = $request->email;

        if ($files = $request->file('file')) {
            $destinationPath = 'uploads'; // upload path
            $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $profileImage);
            $user->avatar = $profileImage;
        }

        if (isset($request->password))
            $user->password = Hash::make($request->password);


        if (isset($request->password)) {
            if ($validator->fails()) {
                return redirect('osob')
                    ->withErrors($validator)
                    ->withInput();
            }
        }
        if (isset($request->password)) 
            $user->send_password($request->name,$request->email,$request->password);
        
        
        $user->save();
        return redirect('/post');
    }
}
