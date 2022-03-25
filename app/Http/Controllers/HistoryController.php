<?php

namespace App\Http\Controllers;

use App\Models\History;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public function index()
    {
        return History::all();
    }
    public function store(Request $request)
    {
        History::create($request->all());
    }

    public function show($id)
    {
        return History::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
       $user = History::findOrFail($id);
       $user->update($request->all());
    }

    public function destroy($id)
    {
        $user = History::findOrFail($id);
        $user->delete();
    }
}
