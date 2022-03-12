@extends('main_template')
@section('container')
    <section class="mt-32 mb-32">
        <div class="container mx-auto px-6">
            <h1 class="text-5xl mb-5 font-bold">Top Scorers</h1>
            <hr>
            <div class="bg-gray-800 p-3 mb-3 animate-fade-in-down rounded-lg">
                <h2 class="text-slate-100 text-sm md:text-md lg:text-lg text-right">Season 2021/2022</h2>
            </div>
            <?php $i = 1 ?>
            <?php foreach ($players as $player) : ?>
            <div class="w-full h-32 mt-3 bg-slate-100 grid grid-cols-8 animate-fade-in-up">
                <div class="col-span-1 px-4 lg:px-8 flex flex-col justify-center text-sm md:text-md lg:text-lg">{{$i}}</div>
                <div class="col-span-2 lg:col-span-1 px-4 lg:px-8 flex flex-col justify-center">
                    <img src="{{ $player['player']['photo'] }}" alt="" class="object-cover w-13 lg:w-15 xl:w-20">
                </div>
                <div class="col-span-3 lg:col-span-4 px-4 lg:px-8 flex flex-col justify-center gap-2">
                    <div class="text-sm lg:text-lg">{{ $player['player']['name'] }} </div>
                    <div class="text-gray-600 flex">
                        <div><img src="{{ $player['statistics'][0]['team']['logo'] }}" alt="" class="object-cover w-5 lg:w-6"></div>
                        <div class="ml-3 text-sm lg:text-lg">{{ $player['statistics'][0]['team']['name'] }}</div>
                    </div>
                </div>
                <div class="col-span-2  px-4 lg:px-8 flex flex-col justify-center md:text-xl text-center">{{ $player['statistics'][0]['goals']['total'] }}</div>
            </div>
            <?php $i++ ?>
            <?php endforeach ?>
        </div>
    </section>
@endsection
