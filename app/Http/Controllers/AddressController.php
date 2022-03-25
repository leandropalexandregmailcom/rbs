<?php

namespace App\Http\Controllers;

use App\Models\Address;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    public function index()
    {
        return Address::all();
    }
    public function store(Request $request)
    {
        Address::create($request->all());
    }

    public function show($id)
    {
        return Address::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
       $user = Address::findOrFail($id);
       $user->update($request->all());
    }

    public function destroy($id)
    {
        $user = Address::findOrFail($id);
        $user->delete();
    }
}
