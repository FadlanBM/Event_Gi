@extends('layout.this')

@section('fillable')
    <h1>Event</h1>
    <div class="table-responsive">
      <a href="/event/create" class="btn btn-primary mb-3">Create new+</a>
      <table class="table table-striped table-sm">
        <thead>
          <tr>
            <th>#</th>
            <th>Name</th>
            <th>Uraian</th>
            <th>Tujuan</th>
            <th>Tanggal</th>
            <th>Waktu</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($event as $item)
          <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->uraian}}</td>
            <td>{{$item->tujuan}}</td>
            <td>{{$item->tanggal}}</td>
            <td>{{$item->waktu}}</td>
            <td>
              <a href='{{url('event/'.$item->id.'/edit')}}' class="badge bg-warning">Edit</a>
              <a href="" class="badge bg-danger">Del</a>
            </td>
          </tr>
         @endforeach
        </tbody>
      </table>
    </div>
@endsection