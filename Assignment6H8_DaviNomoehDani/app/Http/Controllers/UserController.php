<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request){
        $users = User::orderBy('created_at', 'desc')->get();
        return view('users.index', compact('users'));
    }
    public function create(Request $request){
        return view('users.create');
    }
    public function show(Request $request, User $user)
    {
        return view('users.show', compact('user'));
    }
    public function edit(Request $request, User $user)
    {
        return view('users.edit', compact('user'));
    }
    

    public function store(Request $request)
    {
        $validated = $this->formValidate($request);
        $newUser = User::create($validated);
        return redirect()
            ->route('users.show', $newUser)
            ->with('success', 'Successfully created user!');
    }
    public function update(Request $request, User $user){
        $validated = $this->formValidate($request, $user);
        $user->update($validated);
        return redirect()
            ->route('users.index')
            ->with('success', 'Successfully updated user!');
    }
    public function destroy(Request $request, User $user){
        $user->delete();
        return redirect()
            ->route('users.index')
            ->with('success', 'Successfully deleted user!');
    }
    private function formValidate(Request $request, User $exceptUser = null){
        $uniqueValidate = 'unique:users,email';
        if ($exceptUser){
            $uniqueValidate .= ",{$exceptUser->id}";
        }
        return $request->validate([
            'name' => 'required|string|max:191',
            'email' => "required|string|max:191|{$uniqueValidate}"
        ]);
    }
}
