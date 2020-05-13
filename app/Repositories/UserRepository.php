<?php

namespace App\Repositories;

use App\Models\User;
use Illuminate\Support\Facades\Hash;


class UserRepository
{
    public function getAll()
    {
        return User::get();
    }

    public function find($id)
    {
        return User::whereId($id)->firstOrFail();
    }

    public function create($request)
    {
        return User::create([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
            'password' => Hash::make($request->get('password')),
            'avatar' => 'image.jpg',
            'role_id' => '2',
        ]);
    }

    public function update($request, $id)
    {
        return User::whereId($id)->update([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone'),
            'password' => Hash::make($request->get('password')),
        ]);
    }

    public function delete($id)
    {
        return User::whereId($id)->delete();
    }
}