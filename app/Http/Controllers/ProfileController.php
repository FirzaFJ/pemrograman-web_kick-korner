<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(User $user)
    {
        // return $user;
        return view('user.profile.index', [
            'user' => $user
        ]);
    }

    public function updateProfile(Request $request, User $user)
    {
        // return request();
        $rules= [
            'name' => 'required',
            'no_hp' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required'
        ];

        $validatedData = $request->validate($rules);
        User::where('id', $user->id)->update($validatedData);

        return redirect()->route('profile', [
            'user' => $user->id
        ])->with('success', 'Profile has been updated!');
    }
}
