@extends('main_template')
@section('container')
    <section class="mt-32 mb-32">
        <div class="container mx-auto px-6">
            {{-- <div class="rounded-lg bg-slate-100 p-5"> --}}
            <h1 class="text-5xl mb-5 font-bold">Matches</h1>
            

            <div class="matches flex flex-wrap gap-4">
            </div>
            
            <div class="loader opacity-0">
                <img src="{{ asset('images/loading-load.gif') }}" alt="" srcset="" class="animate-bounce w-24 h-w-24 mx-auto" id="loadMatches">
            </div>
            {{-- <div class="flex flex-wrap gap-2 justify-between ">
                <div class="w-96 h-36 bg-slate-100 p-5 flex justify-between rounded-lg shadow-md animate-fade-in-up">
                    <div class="w-8/12 flex flex-col justify-center px-3 gap-3">
                        <div class="">
                            <img src="https://upload.wikimedia.org/wikipedia/id/0/0c/Liverpool_FC.svg" alt=""
                                class="inline object-cover w-5 h-5 mr-2">
                            <a href=""> Liverpool</a>
                        </div>
                        <div class="">
                            <img src="https://upload.wikimedia.org/wikipedia/id/0/0c/Liverpool_FC.svg" alt=""
                                class="inline object-cover w-5 h-5 mr-2">
                            <a href=""> Liverpool</a>
                        </div>
                    </div>
                    <div class="w-4/12 flex flex-col justify-center">
                        <div class="text-center ">
                            22:00
                        </div>
                    </div>
                </div>
            </div> --}}
            {{-- </div> --}}
        </div>
        </div>
    </section>
@endsection
