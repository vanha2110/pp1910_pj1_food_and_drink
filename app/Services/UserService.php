<?php

namespace App\Services;

use Illuminate\Http\Request;
use App\Repositories\Contracts\UserInterface;
use Illuminate\Support\Facades\Hash;
use App\Helpers\Helper;

class UserService
{
    protected $helper;

    public function __construct(UserInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function create(Request $request)
    {
        $data = $request->all();
        $data['password'] = Hash::make($request->get('password'));
        $data['role_id'] = '2';
        $data['avatar'] =  Helper::uploadImage($request, 'avatar');

        $this->userRepository->create($data);
    }

    public function update(Request $id, $request)
    {
        $data = $request->all();
        $data['password'] = Hash::make($request->get('password'));
        $data['avatar'] =  Helper::uploadImage($request, 'avatar');
        
        $this->userRepository->update($id, $data);
    }

    public function updateProfile(Request $request)
    {
        $user = auth()->user();
        $data = $request->all();
        $data['avatar'] =  Helper::uploadImage($request, 'avatar');
        $user->update($data);
    }
}