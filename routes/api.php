<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

Route::middleware('api')->group(function () {
    // Get all todos
    Route::get('/todos', [TodoController::class, 'index']);

    // Create a new todo
    Route::post('/todos', [TodoController::class, 'store']);

    // Toggle a todo's completed status
    Route::patch('/todos/{id}', [TodoController::class, 'toggle']);

    // Delete a specific todo
    Route::delete('/todos/{id}', [TodoController::class, 'destroy']);

    // Delete all completed todos
    Route::delete('/todos', [TodoController::class, 'clearCompleted']);
});
