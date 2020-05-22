<?php

namespace App\Services;

use Illuminate\Http\Request;
use App\Repositories\Contracts\UserInterface;
use Illuminate\Support\Facades\Hash;

class UserService
{
    public function __construct(UserInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function create(Request $request)
    {
        $data = [
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
            'password' => Hash::make($request->get('password')),
            'avatar' => 'image.jpg',
            'role_id' => '2',
        ];

        $this->userRepository->create($data);
    }

    public function update(Request $request, $id)
    {
        $data = [
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
            'password' => Hash::make($request->get('password')),
        ];

        $this->userRepository->update($id, $data);
    }

    public function updateProfile(Request $request)
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
    }
}
