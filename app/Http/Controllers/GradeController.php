<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use Illuminate\Http\Request;

class GradeController extends Controller
{
    public function index()
    {
        return Grade::all();
    }
    public function store(Request $request)
    {
        Grade::create($request->all());
    }

    public function show($id)
    {
        return Grade::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
       $user = Grade::findOrFail($id);
       $user->update($request->all());
    }

    public function destroy($id)
    {
        $user = Grade::findOrFail($id);
        $user->delete();
    }
}
