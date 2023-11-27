<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('User.create', []);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserRequest $request)
    {
        User::create($request->all());
        return redirect('/productDashboard');
    }

    /**
     * Display the specified resource.
     */
    public function show($email)
    {
        $User = User::where('email', $email)->firstOrFail();
        return view('User.show', compact('User'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $User)
    {
        return view('Product.edit', [
            'User' => $User
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UserRequest $request, User $User)
    {
        $User->update($request->all());

        return redirect()->route('userDashboard')->with('success', 'Usuario actualizado con éxito.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $User = User::find($id);
        $User->delete();

        return redirect()->route('userDashboard')->with('success', 'Usuario eliminado con éxito.');
    }
}
