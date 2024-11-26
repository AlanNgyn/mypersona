<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('pages/register');
    }

    public function register(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:users,email',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()->first('email')]);
        }

        User::create([
            'email' => $request->email,
            'name' => $request->first_name . ' ' .$request->last_name,
            'password' => Hash::make($request->password),
            'discount' => $request->discount ?? null,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name
        ]);
        session()->flash('registration_success', true);
        return response()->json(['success' => true]);
    }
}
