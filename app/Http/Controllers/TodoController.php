<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    public function index()
    {
        return Todo::orderBy('id', 'desc')->get();
        // return Todo::all();
    }

    public function store(Request $request)
    {
        $request->validate(['text' => 'required|string']);
        return Todo::create(['title' => $request->text, 'completed' => false]);
    }

    public function toggle($id)
    {
        $todo = Todo::findOrFail($id);
        $todo->completed = !$todo->completed;
        $todo->save();
        return response()->json($todo);
    }

    public function destroy($id)
    {
        $todo = Todo::findOrFail($id);
        $todo->delete();
        return response()->noContent();
    }

    public function clearCompleted()
    {
        Todo::where('completed', true)->delete();
        return response()->noContent();
    }
}
