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
            <div class="flex flex-wrap justify-between mt-3">
                <?php for ($i=0; $i < 20; $i++) {  ?>
                <div class="w-full md:w-72 h-72 bg-slate-100  py-8 flex flex-col justify-between rounded-lg shadow-md animate-fade-in-up mb-5">
                    <img src="https://upload.wikimedia.org/wikipedia/id/0/0c/Liverpool_FC.svg" alt=""
                        class="inline object-cover w-20 h-20 mx-auto mb-5 border-2 border-gray-800 rounded-full">
                    <a href="" class="text-center"> Liverpool</a>
                    <a href="" class="text-gray-600 text-center">Anfiled Stadium</a>
                    <a href="" class="text-gray-600 text-center mt-5">
                        <ion-icon name="arrow-forward-circle-outline" size="large"></ion-icon>
                    </a>

                </div>
                <?php } ?>
            </div>
            {{-- </div> --}}
        </div>
        </div>
    </section>
@endsection
