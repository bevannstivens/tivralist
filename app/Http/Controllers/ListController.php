<?php

namespace App\Http\Controllers;

use App\Models\ListModel;
use Illuminate\Http\Request;

class ListController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = auth()->user();
        $lists = ListModel::where('user_id', $user->id)
            ->orderByRaw("FIELD(status, 'in_progress', 'done')")
            ->orderByRaw("FIELD(priority, 'high', 'medium', 'low')")
            ->orderBy('created_at')
            ->get();

        return view('lists.index', compact('lists'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $priorities = ListModel::PRIORITY;
        return view('lists.create', compact('priorities'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable',
            'priority' => 'required|in:low,medium,high'
        ]);

        auth()->user()->lists()->create($validated);

        return redirect()->route('lists.index')->with('success', 'List created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $list = ListModel::findOrFail($id);
        return view('lists.show', compact('list'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $list = ListModel::findOrFail($id);
        $priorities = ListModel::PRIORITY;
        return view('lists.edit', compact('list', 'priorities'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable',
            'priority' => 'required|in:low,medium,high'
        ]);
        $list = ListModel::findOrFail($id);

        $list->update($validated);

        return redirect()->route('lists.index')->with('success', 'List updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = auth()->user();
        $list = ListModel::where('user_id', $user->id)->findOrFail($id);

        $list->delete();

        return redirect()->route('lists.index')->with('success', 'List deleted successfully!');
    }
}
