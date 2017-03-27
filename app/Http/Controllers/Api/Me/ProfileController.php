<?php

namespace App\Http\Controllers\Api\Me;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Http\Requests\Me\UpdateRequest;

class ProfileController extends Controller
{
    public function show(Request $request)
    {
        return $request->user();
    }

    public function update(UpdateRequest $request)
    {
        $request->user()->update($request->all());
        return $request->user();
    }
}
