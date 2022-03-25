<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        return Service::all();
    }
    public function store(Request $request)
    {
        Service::create($request->all());
    }

    public function show($id)
    {
        return Service::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
       $user = Service::findOrFail($id);
       $user->update($request->all());
    }

    public function destroy($id)
    {
        $user = Service::findOrFail($id);
        $user->delete();
    }
}
