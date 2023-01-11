<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\UpdateUserRequest;

class UserController extends Controller
{
    public function index()
    {
        $users = User::where('role', 'Client')->get();

        return view('users.index', compact('users'));
    }   

    public function create()
    {
        $user = new User;

        return view('users.create', compact('user'));
    }

    public function store(UserRequest $request)
    {
        $password = Hash::make($request->password);

        $request->merge(['password' => $password]);

        User::create($request->all());

        return redirect()->route('users.index')->with('message', 'User has been added successfully!');
    }

    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('users.index')->with('message', 'User has been deleted successfully!');
    }

    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    public function update(UpdateUserRequest $request, User $user)
    {
        $data = $request->validated();

        if($request->new_password == null)
        {
            $password = auth()->user()->password;
            $request->merge(['password' => $password]);
        }
        else
        {
            $password = Hash::make($request->new_password);
            $request->merge(['password' => $password]);
        }

        $user->update($request->all());

        return redirect()->back()->with('message', 'Data has been updated successfully!');

        // dump($request->all());
    }
}
