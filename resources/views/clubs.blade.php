@extends('main_template')
@section('container')
    <section class="mt-32 mb-32">
        <div class="container mx-auto px-6">
            {{-- <div class="rounded-lg bg-slate-100 p-5"> --}}
            <h1 class="text-5xl mb-3 font-bold">Clubs</h1>
            {{-- <div class="bg-gray-800 p-3 mb-3 animate-fade-in-down rounded-lg flex justify-between">
                <h2 class="text-slate-100 text-lg ">Saturday</h2>
                <h2 class="text-slate-100 text-lg ">29 Des 2021</h2>
            </div> --}}
            <hr>
            <div class="bg-gray-800 p-3 mb-3 animate-fade-in-down rounded-lg">
                <h2 class="text-slate-100 text-lg text-right">Season 2021/2022</h2>
                </div>
            <div class="flex flex-wrap justify-between mt-3">
                <?php foreach ($data as $club) : ?>
                    <div class="w-full md:w-72 h-72 bg-slate-100  py-8 px-8 flex flex-col justify-between rounded-lg shadow-md animate-fade-in-up mb-5">
                        <img src="{{ $club['team']['logo'] }}" alt=""
                            class="inline object-cover w-20 h-20 mx-auto mb-5">
                        <a href="" class="text-center"> {{ $club['team']['name'] }}</a>
                        <a href="" class="text-gray-600 text-center">{{ $club['venue']['name'] }}</a>
                        <a href="/main/clubinfo/{{ $club['team']['id'] }}" class="text-gray-600 text-center mt-5 hover:text-black">
                            <ion-icon name="arrow-forward-circle-outline" size="large"></ion-icon>
                        </a>

                    </div>
                <?php endforeach ?>
            </div>
            {{-- </div> --}}
        </div>
        </div>
    </section>
@endsection
