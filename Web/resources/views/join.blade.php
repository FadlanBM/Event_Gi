@extends('layouts.join')

@section('content')
    <div class="flex justify-center items-center">
        <div>
            <div>
                <form action="">
                    <label for="">Nama</label><br>
                    <input class="mt-2 rounded-lg" type="text" name="" id=""><br><br>
                    <label for="">Agenda</label><br>
                    <select class="mt-2 rounded-lg" name="" id="">
                        <option value="">Meeting</option>
                        <option value="">Seminar</option>
                    </select><br><br>
                    <label for="">Uraian</label><br>
                    <input class="mt-2 rounded-lg" type="text" name="" id=""><br><br>
                    <label for="">Tujuan</label><br>
                    <input class="mt-2 rounded-lg" type="text" name="" id=""><br><br>
                    <label for="">Tanggal</label><br>
                    <input class="mt-2 w-[20rem] rounded-lg" type="date" name="" id=""><br><br>
                    <label for="">Waktu</label><br>
                    <input class="mt-2 w-[20rem] rounded-lg" type="time" name="" id=""><br>
                    <input class="mt-7" type="submit" value="Submit">
                </form>
            </div>
        </div>

    </div>
@endsection
