@extends('layout.this')
@section('fillable')



<form action='{{ url('event') }}' method="post">
    @csrf
    <div class="mb-3">
      <label for="name" class="form-label">Name</label>
      <input type="text" class="form-control" value="{{ Session::get('name') }}" id="name" name="name">
    </div>
    <div class="mb-3">
      <label for="uraian" class="form-label">Uraian</label>
      <input type="text" class="form-control" value="{{ Session::get('uraian') }}" id="uraian" name="uraian">
    </div>
    <div class="mb-3">
      <label for="tujuan" class="form-label">Tujuan</label>
      <input type="text" class="form-control" value="{{ Session::get('tujuan') }}" id="tujuan" name="tujuan">
    </div>
    <div class="mb-3">
      <label for="tanggal" class="form-label">Tanggal</label>
      <input type="date" class="form-control" value="{{ Session::get('tanggal') }}" id="tanggal" name="tanggal">
    </div>
    <div class="mb-3">
      <label for="waktu" class="form-label">Waktu</label>
      <input type="time" class="form-control" value="{{ Session::get('waktu') }}" id="waktu" name="waktu">
    </div>
    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
  </form>
@endsection



