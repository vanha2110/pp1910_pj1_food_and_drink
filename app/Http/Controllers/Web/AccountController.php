<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserFormRequest;

class AccountController extends Controller
{
    public function index()
    {
        return view('web.user.account');
    }
    

    public function editProfile()
    {
        return view('web.user.profile.index');
    }

    public function updateProfile(UserFormRequest $request)
    {
        $user = auth()->user();
        $data = [
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
            'address'=> $request->get('address'),
        ];

        if($request->hasFile('avatar')){
            $file = $request->file('avatar')->getClientOriginalName();
            $filename = pathinfo($file, PATHINFO_FILENAME);
            $extension = $request->file('avatar')->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            $request->file('avatar')->storeAs('public/img', $fileNameToStore);

            $data['avatar'] = $fileNameToStore;
        }

        $user->update($data);

        return redirect('/account')->with('success', 'Profile Updated');
    }
}
