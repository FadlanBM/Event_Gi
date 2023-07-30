@extends('layouts.main')

@section('content')
    <div class="flex py-[5rem] px-[5rem] bg-[#0F1017] justify-center">
        <div class="pt-[3rem]">
            <h1 class="xl:text-[4rem] xl:leading-[4.9rem] text-white font-semibold">
                Reliable, secure
                <img class="inline align-top" src="{{ asset('assets/Ornament.svg') }}" />
                <br />
                conference to get
                <br />
                the best events
            </h1>
            <p class="text-[#CFCFD1] mt-[2rem] text-[17px]">
                Hold incredible events, share knowledge, build and grow
                your
                <br />
                product , create opportunity
            </p>
            <!-- You can open the modal using ID.showModal() method -->
            <button class="mt-8 text-white w-[170px] rounded-lg h-[50px] bg-[#E14817]" onclick="my_modal_4.showModal()">Join A Meeting</button>
            <dialog id="my_modal_4" class="modal">
                <form method="dialog" class="modal-box bg-white h-screen max-w-5xl">
                    <h3 class="font-bold text-lg">Hello!</h3>
                    <p class="py-4">Click the button below to close</p>
                    <form action="">
                        <label for="">Nama</label><br>
                        <input type="text" name="" id=""><br>
                        <label for="">Uraian</label><br>
                        <input type="text" name="" id=""><br>
                        <label for="">Tujuan</label><br>
                        <input type="text" name="" id=""><br>
                        <label for="">Tanggal</label><br>
                        <input type="date" name="" id=""><br>
                        <label for="">Waktu</label><br>
                        <input type="text" name="" id="">
                    </form>
                    <div class="modal-action">
                        <!-- if there is a button, it will close the modal -->
                        <button class="btn">Close</button>
                    </div>
                </form>
            </dialog>
        </div>

        <div>
            <img class="ml-[6.9rem]" src="{{ asset('assets/home.png') }}" />
        </div>
    </div>

    <div class="bg-[#F8F8F8] h-[589px] flex justify-center items-center">
        <div class="flex items-center gap-x-[3.8rem]">
            <div>
                <img src="{{ asset('assets/Assets.png') }}" />
            </div>

            <div>
                <h1 class="text-[2.7rem] text-black font-semibold leading-[58px]">
                    Everyone on their
                    <br />
                    own device.
                </h1>
                <p class="text-[#57585D] mt-[15px] leading-8 tracking-wider text-[17px]">
                    <span class="font-semibold">EventUp</span> is
                    designed to be inclusive, by being
                    <br />
                    able to use your own device to help hybrid-
                    <br />
                    conference teams create, collaborate and
                    <br />
                    celebrate together.
                </p>
            </div>
        </div>
    </div>

    <div class="bg-white w-full h-[1066px]">
        <div class="flex gap-x-4">
            @include('components.natasha-sunny')
            <div class="flex flex-col gap-y-4">
                @include('components.sunny-marwah')
                @include('components.syarifah-hinata')
                @include('components.helen-mentari')
            </div>
            @include('components.chat-box')
        </div>
    </div>
@endsection
