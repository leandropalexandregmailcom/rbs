<?php

namespace App\Http\Controllers;

use App\Models\Incidents;
use App\Http\Requests\UserStoreRequest;
use Illuminate\Http\Request;

class IncidentsController extends Controller
{
    public function index()
    {
        return Incidents::all();
    }
    public function store(UserStoreRequest $request)
    {
        Incidents::create($request->all());
    }

    public function show($id)
    {
        return Incidents::findOrFail($id);
    }

    public function update(Request $request)
    {
      $incident = Incidents::findOrFail($request->id);
      $incident->update($request->all());
    }

    public function destroy($id)
    {
       $incident = Incidents::findOrFail($id);
       $incident->delete();
    }
}
