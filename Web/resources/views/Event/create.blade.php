@extends('admin')
@section('content')
<form method="POST" action="/event">
    @csrf
    <div class="mb-3">
      <label for="name" class="form-label">Name</label>
      <input type="text" class="form-control" id="exampleInputEmail1" name="name">
    </div>
    <div class="mb-3">
      <label for="uraian" class="form-label">Uraian</label>
      <input type="text" class="form-control" id="exampleInputEmail1" name="uraian">
    </div>
    <div class="mb-3">
      <label for="tujuan" class="form-label">Tujuan</label>
      <input type="text" class="form-control" id="exampleInputEmail1" name="tujuan">
    </div>
    <div class="mb-3">
      <label for="tanggal" class="form-label">Tanggal</label>
      <input type="date" class="form-control" id="exampleInputEmail1" name="tanggal">
    </div>
    <div class="mb-3">
      <label for="waktu" class="form-label">Waktu</label>
      <input type="time" class="form-control" id="exampleInputEmail1" name="waktu">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection