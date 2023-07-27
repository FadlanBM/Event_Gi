@extends('layouts.main')

@section('content')
    <div class="flex py-[5rem] px-[5rem] bg-[#0F1017] justify-center">
        <div class="pt-[3rem]">
            <h1 class="xl:text-[4rem] xl:leading-[4.9rem] text-white font-semibold">
                Reliable, secure
                <img class="inline align-top" src="{{asset('assets/Ornament.svg')}}"/>
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
            <button class="w-[198px] h-[50px] mt-9 text-white font-medium rounded-md bg-[#E14817]">
                Join A Meeting
            </button>
        </div>

        <div>
            <img class="ml-[6.9rem]" src="{{asset('assets/home.png')}}" />
        </div>
    </div>

    <div class="bg-[#F8F8F8] h-[589px] flex justify-center items-center">
        <div class="flex items-center gap-x-[3.8rem]">
            <div>
                <img src="{{asset('assets/Assets.png')}}" />
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
@endsection
