<?php

namespace App\Http\Controllers\backend;
use App\Models\User;

use App\Models\Role;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
        $users = User::with('role')->latest()->paginate(15);
        return view('backend.user.index', compact('users'));
    }


    public function show( $user)
    {

       // dd($user);
        $user = User::find($user);

        return view('backend.user.show', compact('user'));
    }



    public function changeRole( $user)
    {
        $user = User::find($user);

        $this->authorize('update-role');

        $roles = Role::pluck('name', 'id')->toArray();
        return view('backend.user.change_role', compact('roles', 'user'));
    }

    public function updateRole(Request $request, User $user)
    {
        $user->update([
            'role_id' => $request->role_id
        ]);
        return redirect()
                ->route('users.index')
                ->withMessage('Successfully updated role!');
    }


}
