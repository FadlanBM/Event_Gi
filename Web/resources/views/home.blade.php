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
            <button class="bg-[#E14817] h-[50px] w-[150px] text-white rounded-lg mt-8 hover:bg-[#b33910]" onclick="join()">Join Meeting</button>
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

    <div class="bg-[#0F1017] w-full h-screen">
        <div class="flex justify-between gap-6 px-[5rem] py-[5rem]">
            <div>
                <h1 class="font-semibold text-white text-[3rem] tracking-wide">Experience<br>you can trust</h1>
            </div>
            <div class="w-1/2">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
            </div>
        </div>

    </div>

    <script>
        function join() {
            window.location.href="/join";
        }
    </script>

@endsection
