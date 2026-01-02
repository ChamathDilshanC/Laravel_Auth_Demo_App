<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TodoController extends Controller
{
    /**
     * Get the authenticated user using Eloquent
     */
    private function getAuthenticatedUser()
    {
        return User::findOrFail(Session::get('user_id'));
    }

    // Display all todos for the authenticated user
    public function index()
    {
        if (!Session::has('user_id')) {
            return redirect('/signin')->with('error', 'Please sign in first.');
        }

        $user = $this->getAuthenticatedUser();

        // Using Eloquent relationship - cleaner and more efficient
        $todos = $user->todos;

        return view('todos.index', compact('todos'));
    }

    // Show create form
    public function create()
    {
        if (!Session::has('user_id')) {
            return redirect('/signin')->with('error', 'Please sign in first.');
        }

        return view('todos.create');
    }

    // Store new todo
    public function store(Request $request)
    {
        if (!Session::has('user_id')) {
            return redirect('/signin')->with('error', 'Please sign in first.');
        }

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'priority' => 'required|in:Low,Medium,High',
            'status' => 'required|in:Pending,In Progress,Completed',
            'due_date' => 'nullable|date',
        ]);

        $user = $this->getAuthenticatedUser();

        // Using Eloquent relationship method - automatically sets user_id
        $user->todos()->create($validated);

        return redirect('/todos')->with('success', 'Todo created successfully!');
    }

    // Show edit form
    public function edit($id)
    {
        if (!Session::has('user_id')) {
            return redirect('/signin')->with('error', 'Please sign in first.');
        }

        $user = $this->getAuthenticatedUser();

        // Using Eloquent relationship with whereBelongsTo - more semantic
        $todo = Todo::whereBelongsTo($user)->findOrFail($id);

        return view('todos.edit', compact('todo'));
    }

    // Update todo
    public function update(Request $request, $id)
    {
        if (!Session::has('user_id')) {
            return redirect('/signin')->with('error', 'Please sign in first.');
        }

        $user = $this->getAuthenticatedUser();

        // Using Eloquent relationship method - ensures user owns the todo
        $todo = $user->todos()->findOrFail($id);

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'priority' => 'required|in:Low,Medium,High',
            'status' => 'required|in:Pending,In Progress,Completed',
            'due_date' => 'nullable|date',
        ]);

        // Using Eloquent update method
        $todo->update($validated);

        return redirect('/todos')->with('success', 'Todo updated successfully!');
    }

    // Delete todo
    public function destroy($id)
    {
        if (!Session::has('user_id')) {
            return redirect('/signin')->with('error', 'Please sign in first.');
        }

        $user = $this->getAuthenticatedUser();

        // Using Eloquent relationship method - ensures user owns the todo
        $todo = $user->todos()->findOrFail($id);

        // Using Eloquent delete method
        $todo->delete();

        return redirect('/todos')->with('success', 'Todo deleted successfully!');
    }
}
