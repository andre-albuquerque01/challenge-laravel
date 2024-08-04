<?php

namespace App\Service;

use App\Exceptions\AuthException;
use App\Exceptions\GeneralExceptionCatch;
use App\Http\Resources\GeneralResource;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserService
{

    public function login(array $data)
    {
        try {
            if (!$token = auth()->attempt($data)) {
                throw new AuthException("Email or password incorrect");
            }

            return ['token' => $token];
        } catch (\Exception $e) {
            throw new GeneralExceptionCatch($e->getMessage());
        }
    }

    public function store(array $data)
    {
        try {
            $data['password'] = Hash::make($data['password']);
            User::create($data);

            return new GeneralResource(['message' => 'success']);
        } catch (\Exception $e) {
            throw new GeneralExceptionCatch($e->getMessage());
        }
    }

    public function show()
    {
        try {
            $user = User::find(auth()->user()->idUser)->first;
            return new UserResource($user);
        } catch (\Exception $e) {
            throw new GeneralExceptionCatch($e->getMessage());
        }
    }

    public function update(array $data)
    {
        try {
            $user = auth()->user();
            if (Hash::check($data['password'], $user->password)) {
                $data['password'] = $user->password;
                User::where('idUser', $user->idUser)->update($data);
                return new GeneralResource(['message' => 'success']);
            }
        } catch (\Exception $e) {
            throw new GeneralExceptionCatch($e->getMessage());
        }
    }
}
