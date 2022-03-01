@extends('main_template')
@section('container')
<section class="mt-32 mb-32">
  <div class="container mx-auto px-6">

    {{-- <div class="rounded-lg bg-slate-100 p-5"> --}}
      <h1 class="text-5xl  mb-5 font-bold">Table</h1>
      <table class="table-auto w-full ">
        <thead class="animate-fade-in-down">
          <tr class="top-[-400px] transition-all ease-in duration-500 rounded-lg">
            <th class="px-3 py-3 bg-gray-800 text-white font-bold text-md ">No</th>
            <th class="px-3 py-3 bg-gray-800 text-white font-bold text-md ">Logo</th>
            <th class="px-3 py-3 bg-gray-800 text-white font-bold text-md ">Name</th>
            <th class="px-3 py-3 bg-gray-800 text-white font-bold text-md ">MP</th>
            <th class="px-3 py-3 bg-gray-800 text-white font-bold text-md ">W</th>
            <th class="px-3 py-3 bg-gray-800 text-white font-bold text-md ">D</th>
            <th class="px-3 py-3 bg-gray-800 text-white font-bold text-md ">L</th>
            <th class="px-3 py-3 bg-gray-800 text-white font-bold text-md ">GF</th>
            <th class="px-3 py-3 bg-gray-800 text-white font-bold text-md ">GA</th>
            <th class="px-3 py-3 bg-gray-800 text-white font-bold text-md ">GD</th>
            <th class="px-3 py-3 bg-gray-800 text-white font-bold text-md ">Pts</th>
            <th class="px-3 py-3 bg-gray-800 text-white font-bold text-md ">Last</th>
          </tr>
        </thead>
        <tbody class="animate-fade-in-up">
          <?php for ($i=0; $i < 20; $i++) { ?>
          <tr class="bg-gray-200">
            <td class="px-3 py-3 text-center text-sm"><?= $i+1; ?></td>
            <td class="px-3 py-3 text-center text-sm">x</td>
            <td class="px-3 py-3 text-center text-sm">Manchester City</td>
            <td class="px-3 py-3 text-center text-sm">21</td>
            <td class="px-3 py-3 text-center text-sm">12</td>
            <td class="px-3 py-3 text-center text-sm">42</td>
            <td class="px-3 py-3 text-center text-sm">1</td>
            <td class="px-3 py-3 text-center text-sm">33</td>
            <td class="px-3 py-3 text-center text-sm">4</td>
            <td class="px-3 py-3 text-center text-sm">31</td>
            <td class="px-3 py-3 text-center text-sm">23</td>
            <td class="px-3 py-3 text-center text-sm">--------</td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    {{-- </div> --}}
  </div>
</section>
@endsection