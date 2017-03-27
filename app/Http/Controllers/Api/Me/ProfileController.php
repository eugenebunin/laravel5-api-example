<?php

namespace App\Http\Controllers\Api\Me;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Http\Requests\Me\UpdateRequest;
use Illuminate\Support\Arr;

class ProfileController extends Controller
{
    public function show(Request $request)
    {
        return $request->user();
    }

    public function update(UpdateRequest $request)
    {
        $user = $request->user();

        $input = $request->all();

        $password = Arr::get($input, 'password') ? bcrypt($input['password']) : $user->password;

        $request->user()->update(array_merge($input, ['password' => $password]));
        return $request->user();
    }
}
