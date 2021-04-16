<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Journal;
use Illuminate\Support\Facades\Gate;

class EntryController extends Controller
{
    public function create(Journal $journal)
    {
        if (Gate::denies('create-entry', $journal)) {
            abort(403);
        }
        return view('entry.create', [
            'journal' => $journal
        ]);
    }

    public function store(Journal $journal, Request $request)
    {
        if (Gate::denies('create-entry', $journal)) {
            abort(403);
        }
        
        $journal->entries()->create($request->validate([
            "content" => "required"
        ]));

        return redirect()->route('journals.show', $journal);
    }
}
