@extends('main_template')
@section('container')
    <section class="mt-32 mb-32">
        <div class="container mx-auto px-6">

            <div class="bg-gray-800 p-3 mb-3 animate-fade-in-down rounded-lg h-64">
                <div class="grid grid-cols-5 gap-2 h-full">
                    <div class="col-span-1 flex flex-col justify-center mx-auto">
                        <img src="{{ $club['team']['logo'] }}" alt="" class="object-cover w-32">
                    </div>
                    <div class="col-span-3 flex flex-col justify-center gap-2">
                        <h2 class="text-white text-2xl font-bold">{{ $club['team']['name'] }}</h2>
                        <h2 class="text-slate-200">Emirates Stadium</h2>
                        <img src="https://media.api-sports.io/flags/gb.svg" alt="" class="w-5">
                    </div>
                    <div class="col-span-1 flex items-end py-10  mx-auto">

                        <?php $str = $club['form']; ?>
                        <td class="px-3 py-3 text-center text-sm">
                            <?php foreach( str_split(substr($str,strlen($str)-5,strlen($str))) as $splt) : ?>
                            <?php if ($splt == 'W') { ?>
                            <ion-icon name="checkmark-circle-outline" class="text-slate-100" size="small"></ion-icon>
                            <?php } elseif ($splt == 'D') { ?>
                            <ion-icon name="remove-circle-outline" class="text-slate-100" size="small"></ion-icon>
                            <?php } else { ?>
                            <ion-icon name="close-circle-outline" class="text-slate-100" size="small"></ion-icon>
                            <?php } ?>
                            <?php endforeach ?>
                        </td>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-6 gap-4">
                <div class="col-span-2 bg-slate-100 shadow-sm rounded-lg p-5">
                    <h2 class="text-lg font-bold mb-3">Card</h2>
                    <div class="grid grid-cols-2 gap-3 mb-5">
                        <div class="bg-red-500 h-10 text-center flex flex-col justify-center">{{ count($club['cards']['red']) }}</div>
                        <div class="bg-yellow-500 h-10 text-center flex flex-col justify-center">{{ count($club['cards']['yellow']) }}</div>
                    </div>
                    <h2 class="text-lg font-bold mb-3">Lineups</h2>
                    <div class="">
                        <table class="table-auto w-full">
                            <thead class="py-5 bg-gray-800 text-slate-100">
                                <tr>
                                    <th class="text-center py-3">Formation</th>
                                    <th class="text-center py-3">Played</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($club['lineups'] as $clubs) : ?>
                                <tr>
                                    <td class="text-center bg-gray-200 py-3 ">{{$clubs['formation']}}</td>
                                    <td class="text-center bg-gray-200 py-3 ">{{$clubs['played']}}</td>
                                </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="bg-slate-100 shadow-sm rounded-lg overflow-hidden p-5 col-start-3 col-end-7">
                    <h2 class="text-lg font-bold mb-3">Statistics</h2>
                    <table class="table-auto w-full">
                        <thead class="py-5 bg-gray-800 text-slate-100">
                            <tr>
                                <th class="text-center py-3"></th>
                                <th class="text-center py-3">Home</th>
                                <th class="text-center py-3">Away</th>
                                <th class="text-center py-3">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center bg-gray-200 py-3 font-bold">Played</td>
                                <td class="text-center bg-gray-200 py-3 ">{{ $club['fixtures']['played']['home'] }}</td>
                                <td class="text-center bg-gray-200 py-3 ">{{ $club['fixtures']['played']['away'] }}</td>
                                <td class="text-center bg-gray-200 py-3 ">{{ $club['fixtures']['played']['home'] }}</td>
                            </tr>
                            <tr>
                                <td class="text-center bg-gray-200 py-3 font-bold">Wins</td>
                                <td class="text-center bg-gray-200 py-3 ">{{ $club['fixtures']['wins']['home'] }}</td>
                                <td class="text-center bg-gray-200 py-3 ">{{ $club['fixtures']['wins']['away'] }}</td>
                                <td class="text-center bg-gray-200 py-3 ">{{ $club['fixtures']['wins']['total'] }}</td>
                            </tr>
                            <tr>
                                <td class="text-center bg-gray-200 py-3 font-bold">Draws</td>
                                <td class="text-center bg-gray-200 py-3 ">{{ $club['fixtures']['draws']['home'] }}</td>
                                <td class="text-center bg-gray-200 py-3 ">{{ $club['fixtures']['draws']['away'] }}</td>
                                <td class="text-center bg-gray-200 py-3 ">{{ $club['fixtures']['draws']['total'] }}</td>
                            </tr>
                            <tr>
                                <td class="text-center bg-gray-200 py-3 font-bold">Loses</td>
                                <td class="text-center bg-gray-200 py-3 ">{{ $club['fixtures']['loses']['home'] }}</td>
                                <td class="text-center bg-gray-200 py-3 ">{{ $club['fixtures']['loses']['away'] }}</td>
                                <td class="text-center bg-gray-200 py-3 ">{{ $club['fixtures']['loses']['total'] }}</td>
                            </tr>
                            <tr>
                                <td class="text-center bg-gray-200 py-3 font-bold">Goals For</td>
                                <td class="text-center bg-gray-200 py-3 ">{{ $club['goals']['for']['total']['home'] }}</td>
                                <td class="text-center bg-gray-200 py-3 ">{{ $club['goals']['for']['total']['away'] }}</td>
                                <td class="text-center bg-gray-200 py-3 ">{{ $club['goals']['for']['total']['total'] }}</td>
                            </tr>
                            <tr>
                                <td class="text-center bg-gray-200 py-3 font-bold">Goals Against</td>
                                <td class="text-center bg-gray-200 py-3 ">{{ $club['goals']['against']['total']['home'] }}</td>
                                <td class="text-center bg-gray-200 py-3 ">{{ $club['goals']['against']['total']['away'] }}</td>
                                <td class="text-center bg-gray-200 py-3 ">{{ $club['goals']['against']['total']['total'] }}</td>
                            </tr>
                            <tr>
                                <td class="text-center bg-gray-200 py-3 font-bold">Clean Sheet</td>
                                <td class="text-center bg-gray-200 py-3 ">{{ $club['clean_sheet']['home'] }}</td>
                                <td class="text-center bg-gray-200 py-3 ">{{ $club['clean_sheet']['away'] }}</td>
                                <td class="text-center bg-gray-200 py-3 ">{{ $club['clean_sheet']['total'] }}</td>
                            </tr>
                        </tbody>
                    </table>


                </div>
            </div>

            {{-- </div> --}}
        </div>
        </div>
    </section>
@endsection
