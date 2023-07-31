<?php

namespace App\Http\Controllers;

use App\Models\event;
use Illuminate\Http\Request;
use App\User;
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
        return view('event.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreeventRequest $request)
    {
        Session::flash('name', $request->name);
        Session::flash('uraian', $request->uraian);
        Session::flash('tujuan', $request->tujuan);
        Session::flash('tanggar', $request->tanggar);
        Session::flash('waktu', $request->waktu);



        $request->validate([
            'name'=>'required',
            'uraian'=>'required',
            'tujuan'=>'required',
            'tanggal'=>'required',
            'waktu'=>'required',
        ]);
        $data = [
            'name' =>$request->name,
            'uraian' =>$request->uraian,
            'tujuan' =>$request->tujuan,
            'tanggal' =>$request->tanggal,
            'waktu' =>$request->waktu,
        ];
        // dd($data);
        event::create($data);
        return redirect()->to('event')->with('success','New event added successfully');


       
    }

    /**
     * Display the specified resource.
     */
    public function show(event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(event $id)
    {
        $data = event::where('id',$id)->first();
        return view('event.edit')->with('data',$data);
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
