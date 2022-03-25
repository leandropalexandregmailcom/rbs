<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return Category::all();
    }
    public function store(Request $request)
    {
        Category::create($request->all());
    }

    public function show($id)
    {
        return Category::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
       $user = Category::findOrFail($id);
       $user->update($request->all());
    }

    public function destroy($id)
    {
        $user = Category::findOrFail($id);
        $user->delete();
    }
}
