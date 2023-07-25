<?php

namespace App\Http\Controllers;

use App\Models\event;
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
        return view('event_admin');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreeventRequest $request)
    {
        Session::flash('name',$request->name);
        Session::flash('uraian',$request->uraian);
        Session::flash('tujuan',$request->tujuan);
        Session::flash('tanggal',$request->tanggal);
        Session::flash('waktu',$request->waktu);
        $request->validate(
            [
                'name'=>'required',
                'uraian'=>'required',
                'tujuan'=>'required',
                'tanggal'=>'reqired',
                'waktu'=>'required'
            ],[
               'name.required'=>'From Nama Harus di isi', 
               'uraian.required'=>'From Nama Harus di isi', 
               'tujuan.required'=>'From Nama Harus di isi', 
               'tanggal.required'=>'From Nama Harus di isi', 
               'waktu.required'=>'From Nama Harus di isi', 
            ]
            );

            $data=[
                'users_id'=>auth()->user()->id,
                'name'=>$request->name,
                'uraian'=>$request->uraian,
                'tujuan'=>$request->tujuan,
                'tanggal'=>$request->tanggal,
                'waktu'=>$request->waktu,
                'link_meet'=>$request->link_meet,
                'IsActive'=>1,
                'verified'=>0,
            ];

            event::create($data);
            return redirect()->route('event.index')->with('success','Berhasil Menyimpan data');
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
