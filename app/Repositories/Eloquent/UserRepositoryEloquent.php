<?php

namespace App\Repositories\Eloquent;

use App\Repositories\Contracts\UserInterface as UserInterface;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserRepositoryEloquent implements UserInterface
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
            'avatar' => 'avatar.png',
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