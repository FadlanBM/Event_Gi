@extends('admin')

@section('content')
    <h1>Event</h1>
    <div class="table-responsive">
      <a href="event/create" class="btn btn-primary mb-3">Create new+</a>
      <table class="table table-striped table-sm">
        <thead>
          <tr>
            <th>#</th>
            <th>Name</th>
            <th>Tujuan</th>
            <th>Tanggal</th>
            <th>Waktu</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($event as $event)
          <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$event->name}}</td>
            <td>{{$event->tujuan}}</td>
            <td>{{$event->tanggal}}</td>
            <td>{{$event->waktu}}</td>
            <td>
              <a href="/event/{{$event->id}}" class="badge bg-info"><i class="bi bi-eye"></i></a>
              <a href="" class="badge bg-warning"><<i class="bi bi-pencil-square"></i></a>
              <a href="" class="badge bg-danger"><i class="bi bi-x-circle"></i></a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
@endsection