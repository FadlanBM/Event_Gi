<?php

namespace App\Http\Controllers;

use App\Models\event;
use Illuminate\Http\Request;
// use App\User;
use App\Http\Requests\StoreeventRequest;
use App\Http\Requests\UpdateeventRequest;
use Illuminate\Support\Facades\Session;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('event.index',[
            'event'=>Event::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('event.create',[
            
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreeventRequest $request)
    {
        $request->validate([
            'name' => 'required',
            'uraian' => 'required',
            'tujuan' => 'required',
            'tanggal' => 'required|date',
            'waktu' => 'required|date_format:H:i',
        ]);

        Event::create($request->all());

        return redirect()->route('event.index')
        ->with('success', 'Event created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(event $event)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(event $event)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateeventRequest $request, event $event)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(event $event)
    {
        //
    }
}
