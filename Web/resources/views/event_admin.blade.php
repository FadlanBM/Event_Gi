<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Event') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <button class="btn" onclick="my_modal_1.showModal()">open modal</button>
            <dialog id="my_modal_1" class="modal">
              <form action="/event/post"  method="POST" enctype="multipart/form-data" class="modal-box text-white">
                @csrf
            <div class="form-control w-full">
              <label class="label">
                <span class="label-text">Name Event</span>
              </label>
              <input type="text" id="name" name="name" placeholder="Masukkan Name Event" class="input input-bordered w-full" />
            </div>   
            <div class="form-control w-full">
              <label class="label">
                <span class="label-text">Uraian</span>
              </label>
              <input type="text" id="uraian" placeholder="Type here" class="input input-bordered w-full" />
            </div>   
            <div class="form-control w-full">
              <label class="label">
                <span class="label-text">Tujuan</span>
              </label>
              <input type="text" placeholder="Type here" class="input input-bordered w-full" />
            </div>   
            <div class="form-control w-full">
              <label class="label">
                <span class="label-text">Link Google</span>
              </label>
              <input type="text" placeholder="Type here" class="input input-bordered w-full" />
            </div>   
            <div class="form-control w-full">
              <label class="label">
                <span class="label-text">Tanggal Pelaksanaan</span>
              </label>
              <input type="date" placeholder="Type here" class="input input-bordered w-full" />
            </div>   
            <div class="form-control w-full">
              <label class="label">
                <span class="label-text">Waktu Pelaksanaan</span>
              </label>
              <input type="time" placeholder="Type here" class="input input-bordered w-full" />
            </div>   
             <div class="modal-action">
                  <button class="btn">Close</button>
                  <button type="submit" name="simpan" class="btn">Submit</button>
                </div>
              </form>
            </dialog>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mt-5">
                <div class="p-6 text-gray-900">
<div class="overflow-x-auto">
  <table class="table">
    <!-- head -->
    <thead>
      <tr>
        <th></th>
        <th>Name</th>
        <th>Job</th>
        <th>Favorite Color</th>
      </tr>
    </thead>
    <tbody>
      <!-- row 1 -->
      <tr>
        <th>1</th>
        <td>Cy Ganderton</td>
        <td>Quality Control Specialist</td>
        <td>Blue</td>
      </tr>
      <!-- row 2 -->
      <tr>
        <th>2</th>
        <td>Hart Hagerty</td>
        <td>Desktop Support Technician</td>
        <td>Purple</td>
      </tr>
      <!-- row 3 -->
      <tr>
        <th>3</th>
        <td>Brice Swyre</td>
        <td>Tax Accountant</td>
        <td>Red</td>
      </tr>
    </tbody>
  </table>
</div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
