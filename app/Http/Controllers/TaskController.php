<?php

namespace App\Http\Controllers;

use App\Models\ListModel;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function store(Request $request, ListModel $list)
    {
        $request->validate([
            'title' => 'required|string|max:255'
        ]);

        $list->tasks()->create([
            'title' => $request->title
        ]);

        return redirect()->route('lists.show', $list->id);
    }

    public function update(Request $request, ListModel $list, Task $task)
    {
        $request->validate([
            'title' => 'required|string|max:255'
        ]);

        $task->update([
            'title' => $request->title
        ]);

        return redirect()->route('lists.show', $list->id);
    }

    public function destroy(ListModel $list, Task $task)
    {
        $task->delete();
        return redirect()->route('lists.show', $list->id);
    }

    public function toggle(ListModel $list, Task $task)
    {
        $task->update([
            'status' => $task->status === 'done' ? 'in_progress' : 'done'
        ]);

        return back();
    }
}
