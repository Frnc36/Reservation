<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request; //ezt mindeegyik Controllerbe csak akkor a függvények paraméterben csak a Request legyen

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return User::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $record = new User();
        $record->fill($request->all())->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return User::find($user);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $user->fill($request->all())->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        User::find()->delete();
    }
}
