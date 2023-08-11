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
            <button class="bg-[#E14817] h-[50px] w-[150px] text-white rounded-lg mt-8 hover:bg-[#b33910]" onclick="my_modal_3.showModal()">Join Meeting</button>
            <dialog id="my_modal_3" class="modal">
                <form method="dialog" class="modal-box">
                    <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
                    <h3 class="font-bold text-black text-lg">Hello!</h3>
                    <div class="flex">
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
                        
                        <div class="flex items-center justify-center">
                            <img class="w-[30rem]" src="/assets/form.png" alt="">
                        </div>
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
        <div class="flex justify-center flex-col py-[100px] gap-y-4">
            <h1 class="text-black text-[40px] font-semibold text-center leading-snug">Powerful virtual conferencing<br>platform solution</h1>
            <p class="text-[20px] text-center text-[#57585D]">Dedicated spaces that make it easy to come together.</p>
        </div>
        <div class="flex gap-x-4 justify-center">
            @include('components.natasha-sunny')
            <div class="flex flex-col gap-y-4">
                @include('components.sunny-marwah')
                @include('components.syarifah-hinata')
                @include('components.helen-mentari')
            </div>
            @include('components.chat-box')
        </div>
    </div>

    <div>

    </div>
@endsection
