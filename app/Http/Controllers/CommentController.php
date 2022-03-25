<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index()
    {
        return Comment::all();
    }
    public function store(Request $request)
    {
        Comment::create($request->all());
    }

    public function show($id)
    {
        return Comment::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
       $user = Comment::findOrFail($id);
       $user->update($request->all());
    }

    public function destroy($id)
    {
        $user = Comment::findOrFail($id);
        $user->delete();
    }
}
