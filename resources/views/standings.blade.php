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
                    <?php foreach ($standings as $standing) : ?>
                    <tr>
                        <th>{{ $standing['rank'] }}</th>
                        <td class="px-3 py-3 text-center text-sm"><img src="{{ $standing['team']['logo'] }}" alt=""
                                class="w-8 h-w-8 object-cover"></td>
                        <td class="px-3 py-3 text-center text-sm">{{ $standing['team']['name'] }}</td>
                        <td class="px-3 py-3 text-center text-sm">{{ $standing['all']['played'] }}</td>
                        <td class="px-3 py-3 text-center text-sm">{{ $standing['all']['win'] }}</td>
                        <td class="px-3 py-3 text-center text-sm">{{ $standing['all']['draw'] }}</td>
                        <td class="px-3 py-3 text-center text-sm">{{ $standing['all']['lose'] }}</td>
                        <td class="px-3 py-3 text-center text-sm">{{ $standing['all']['goals']['for'] }}</td>
                        <td class="px-3 py-3 text-center text-sm">{{ $standing['all']['goals']['against'] }}</td>
                        <td class="px-3 py-3 text-center text-sm">
                            {{ $st = $standing['all']['goals']['for'] - $standing['all']['goals']['against'] }}</td>
                        <td class="px-3 py-3 text-center text-sm">{{ $standing['points'] }}</td>
                        <?php $splts = str_split($standing['form']); ?>
                        <td class="px-3 py-3 text-center text-sm">
                            <?php foreach ($splts as $splt) : ?>
                            <?php if ($splt == 'W') { ?>
                            <ion-icon name="checkmark-circle-outline" class="text-green-600" size="small"></ion-icon>
                            <?php } elseif ($splt == 'D') { ?>
                            <ion-icon name="remove-circle-outline" class="text-yellow-600" size="small"></ion-icon>
                            <?php } else { ?>
                            <ion-icon name="close-circle-outline" class="text-red-600" size="small"></ion-icon>
                            <?php } ?>
                            <?php endforeach ?>
                        </td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
            {{-- </div> --}}
        </div>
    </section>
@endsection
