<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        return Client::all();
    }
    public function store(Request $request)
    {
        Client::create($request->all());
    }

    public function show($id)
    {
        return Client::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
       $user = Client::findOrFail($id);
       $user->update($request->all());
    }

    public function destroy($id)
    {
        $user = Client::findOrFail($id);
        $user->delete();
    }
}
