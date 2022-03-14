@extends('main_template')
@section('container')
    <section class="h-[400px] md:h-[700px] bg-gradient-to-b from-gray-700 to-gray-900 py-32 md:py-64">
        <div class="container mx-auto px-6 ">
            <h1 class="text-2xl md:text-5xl font-bold text-white text-center duration-300 animate-fade-in-up">Best League In
                The World</h1>
            <h2 class="text-lg md:text-2xl  font-medium text-white text-center mt-4 duration-300 animate-fade-in-up-1">the
                most intense competition in which there are the best clubs in the world</h2>
            <div class="flex justify-center mt-4">
                <button
                    class="px-10 py-2 bg-transparent border-solid border border-white text-white rounded-lg text-sm hover:bg-slate-100 hover:text-gray-900 animate__bounceIn">Join
                    Us</button>
            </div>
        </div>
    </section>

    <section class="py-4">
        <div class="container mx-auto px-6">
            <div class="flex justify-between">
                <h2 class="text-md md:text-xl mb-4 js-scroll opacity-0 duration-300">Last Match</h2>
                <a href="" class="js-scroll opacity-0 duration-300 text-md md:text-xl ">View More</a>
            </div>
            <div class="slideControls absolute w-full left-0 top-[795px] js-scroll opacity-0 duration-400">
                <a class="slidePrev left-2 md:left-9 lg:left-9 xl:left-9 2xl:left-9  cursor-pointer absolute">
                  <ion-icon name="chevron-back-circle"></ion-icon>
                </a>
                <a class="slideNext right-2 md:right-9 lg:right-9 xl:right-9 2xl:right-9 cursor-pointer absolute">
                  <ion-icon name="chevron-forward-circle"></ion-icon>
                </a>
            </div>
            <ul id="light-slider">
                <?php foreach ($data as $fixture) : ?>
                <li>
                    <div
                        class="bg-slate-100 z-[-1] w-40 md:w-80 lg:96 xl:w-72 h-24 rounded-xl md:drop-shadow-md flex flex-col justify-center px-5 mb-4 js-scroll opacity-0 duration-500 ">
                        <div class="pb-1 flex justify-between">
                            <div>
                                <img src="{{ $fixture['teams']['home']['logo'] }}" alt=""
                                    class="inline object-cover w-5 h-5 mr-2">
                                <a href="" class="text-sm md:text-lg"> {{ $fixture['teams']['home']['name'] }}</a>
                            </div>
                            <div>
                                <p class="text-sm md:text-lg align-middle">{{ $fixture['goals']['home'] }}</p>
                            </div>
                        </div>
                        <div class="flex justify-between">
                            <div>
                                <img src="{{ $fixture['teams']['away']['logo'] }}" alt=""
                                    class="inline object-cover w-5 h-5 mr-2">
                                <a href="" class="text-sm md:text-lg"> {{ $fixture['teams']['away']['name'] }}</a>
                            </div>
                            <div>
                                <p class="text-sm md:text-lg align-middle">{{ $fixture['goals']['away'] }}</p>
                            </div>
                        </div>
                    </div>
                </li>
                <?php endforeach ?>

            </ul>
            {{-- <div class="md:flex sm:flex-wrap justify-between md:gap-4">
        <div class="bg-slate-100 z-[-1] sm:w-full md:w-80 lg:96 xl:w-72 h-24 rounded-xl md:drop-shadow-md flex flex-col justify-center px-5 mb-4 js-scroll opacity-0 duration-500 ">
          <div class="pb-1 flex justify-between">
            <div>
              <img src="https://upload.wikimedia.org/wikipedia/id/0/0c/Liverpool_FC.svg" alt="" class="inline object-cover w-5 h-5 mr-2">
              <a href=""> Liverpool</a>
            </div>
            <div>
              2
            </div>
          </div>
          <div class="flex justify-between">
            <div>
              <img src="https://upload.wikimedia.org/wikipedia/id/0/0c/Liverpool_FC.svg" alt="" class="inline object-cover w-5 h-5 mr-2">
              <a href=""> Chelsea</a>
            </div>
            <div>0</div>
          </div>
        </div>
        <div class="bg-slate-100 z-[-1] sm:w-full md:w-80 lg:96 xl:w-72 h-24 rounded-xl md:drop-shadow-md flex flex-col justify-center px-5 mb-4 js-scroll opacity-0 duration-500 ">
          <div class="pb-1 flex justify-between">
            <div>
              <img src="https://upload.wikimedia.org/wikipedia/id/0/0c/Liverpool_FC.svg" alt="" class="inline object-cover w-5 h-5 mr-2">
              <a href=""> Liverpool</a>
            </div>
            <div>
              2
            </div>
          </div>
          <div class="flex justify-between">
            <div>
              <img src="https://upload.wikimedia.org/wikipedia/id/0/0c/Liverpool_FC.svg" alt="" class="inline object-cover w-5 h-5 mr-2">
              <a href=""> Chelsea</a>
            </div>
            <div>0</div>
          </div>
        </div>
        <div class="bg-slate-100 z-[-1] sm:w-full md:w-80 lg:96 xl:w-72 h-24 rounded-xl md:drop-shadow-md flex flex-col justify-center px-5 mb-4 js-scroll opacity-0 duration-500">
          <div class="pb-1 flex justify-between">
            <div>
              <img src="https://upload.wikimedia.org/wikipedia/id/0/0c/Liverpool_FC.svg" alt="" class="inline object-cover w-5 h-5 mr-2">
              <a href=""> Liverpool</a>
            </div>
            <div>
              2
            </div>
          </div>
          <div class="flex justify-between">
            <div>
              <img src="https://upload.wikimedia.org/wikipedia/id/0/0c/Liverpool_FC.svg" alt="" class="inline object-cover w-5 h-5 mr-2">
              <a href=""> Chelsea</a>
            </div>
            <div>0</div>
          </div>
        </div>
        <div class="bg-slate-100 z-[-1] sm:w-full md:w-80 lg:96 xl:w-72 h-24 rounded-xl md:drop-shadow-md flex flex-col justify-center px-5 mb-4 js-scroll opacity-0 duration-500">
          <div class="pb-1 flex justify-between">
            <div>
              <img src="https://upload.wikimedia.org/wikipedia/id/0/0c/Liverpool_FC.svg" alt="" class="inline object-cover w-5 h-5 mr-2">
              <a href=""> Liverpool</a>
            </div>
            <div>
              2
            </div>
          </div>
          <div class="flex justify-between">
            <div>
              <img src="https://upload.wikimedia.org/wikipedia/id/0/0c/Liverpool_FC.svg" alt="" class="inline object-cover w-5 h-5 mr-2">
              <a href=""> Chelsea</a>
            </div>
            <div>0</div>
          </div>
        </div>
      </div> --}}
        </div>

    </section>
    <section class="my-10">
        <div class="container mx-auto px-6">
            <div class="mb-8">
                <h1 class="text-center text-lg md:text-2xl font-bold  js-scroll opacity-0 duration-500">Last Premier League
                    Winner</h1>
            </div>
            <div class="xl:flex justify-between gap-8">
                <div
                    class="bg-slate-100 z-[-1] xl:w-1/2 rounded-xl md:drop-shadow-md p-8 mb-4 js-scroll opacity-0 transition-all ease-in duration-500 ">
                    <img src="{{ asset('images/winner.jpg') }}" alt="" class="object-cover w-full">
                    <div class="flex justify-between">
                        <div class="flex items-center">
                            <div class="logo px-5 py-10">
                                <img src="{{ asset('images/mc-logo.png') }}" alt=""
                                    class="inline object-cover w-16 h-16 ">
                            </div>
                            <div>
                                <h1 class="text-md mt-4">Manchester City </h1>
                                <h2 class="text-md mt-2 text-slate-500">Coach : Pep Guardiola</h2>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <h1 class="text-md mt-4">2020/2021</h1>
                        </div>
                    </div>
                </div>
                <div
                    class="bg-slate-100 z-[-1] xl:w-1/2 rounded-xl md:drop-shadow-md p-8 mb-4 js-scroll opacity-0 transition-all ease-in duration-500">
                    <h1 class="text-lg">Last Record Winner </h1>
                    <table class="table-auto w-full mt-5">
                        <thead>
                            <tr>
                                <th class="p-3 text-sm md:text-md bg-gray-800 text-slate-100">Season</th>
                                <th class="p-3 text-sm md:text-md bg-gray-800 text-slate-100">Logo</th>
                                <th class="p-3 text-sm md:text-md bg-gray-800 text-slate-100">Name</th>
                                <th class="p-3 text-sm md:text-md bg-gray-800 text-slate-100">Coach</th>
                            </tr>
                        </thead>
                        <tbody class="">
                            <tr class="bg-gray-200">
                                <td class="p-3 text-sm md:text-md text-center text-slate-600">2020/2021</td>
                                <td class="p-3 text-sm md:text-md "><img src="{{ asset('images/mc-logo.png') }}" alt=""
                                        class="inline object-cover w-8 h-8 ml-8"></td>
                                <td class="p-3 text-sm md:text-md text-center text-slate-600">Manchester City</td>
                                <td class="p-3 text-sm md:text-md text-center text-slate-600">Pep Guardiola</td>
                            </tr>
                            <tr class="bg-gray-200">
                                <td class="p-3 text-sm md:text-md text-center text-slate-600">2019/2020</td>
                                <td class="p-3 text-sm md:text-md "><img src="{{ asset('images/lvp-logo.png') }}" alt=""
                                        class="inline object-cover w-8 h-8 ml-8"></td>
                                <td class="p-3 text-sm md:text-md text-center text-slate-600">Liverpool FC</td>
                                <td class="p-3 text-sm md:text-md text-center text-slate-600">Jurgen Klopp</td>
                            </tr>
                            <tr class="bg-gray-200">
                                <td class="p-3 text-sm md:text-md text-center text-slate-600">2018/2019</td>
                                <td class="p-3 text-sm md:text-md "><img src="{{ asset('images/mc-logo.png') }}" alt=""
                                        class="inline object-cover w-8 h-8 ml-8"></td>
                                <td class="p-3 text-sm md:text-md text-center text-slate-600">Manchester City</td>
                                <td class="p-3 text-sm md:text-md text-center text-slate-600">Pep Guardiola</td>
                            </tr>
                            <tr class="bg-gray-200">
                                <td class="p-3 text-sm md:text-md text-center text-slate-600">2017/2018</td>
                                <td class="p-3 text-sm md:text-md "><img src="{{ asset('images/mc-logo.png') }}" alt=""
                                        class="inline object-cover w-8 h-8 ml-8"></td>
                                <td class="p-3 text-sm md:text-md text-center text-slate-600">Manchester City</td>
                                <td class="p-3 text-sm md:text-md text-center text-slate-600">Pep Guardiola</td>
                            </tr>
                            <tr class="bg-gray-200">
                                <td class="p-3 text-sm md:text-md text-center text-slate-600">2016/2017</td>
                                <td class="p-3 text-sm md:text-md "><img src="{{ asset('images/cfc-logo.png') }}" alt=""
                                        class="inline object-cover w-8 h-8 ml-8"></td>
                                <td class="p-3 text-sm md:text-md text-center text-slate-600">Chelsea FC</td>
                                <td class="p-3 text-sm md:text-md text-center text-slate-600">Antonio Conte</td>
                            </tr>
                            <tr class="bg-gray-200">
                                <td class="p-3 text-sm md:text-md text-center text-slate-600">2015/2016</td>
                                <td class="p-3 text-sm md:text-md "><img src="{{ asset('images/lc-logo.png') }}" alt=""
                                        class="inline object-cover w-8 h-8 ml-8"></td>
                                <td class="p-3 text-sm md:text-md text-center text-slate-600">Licester City</td>
                                <td class="p-3 text-sm md:text-md text-center text-slate-600">Claudio Ranieri</td>
                            </tr>
                            <tr class="bg-gray-200">
                                <td class="p-3 text-sm md:text-md text-center text-slate-600">2014/2015</td>
                                <td class="p-3 text-sm md:text-md "><img src="{{ asset('images/cfc-logo.png') }}" alt=""
                                        class="inline object-cover w-8 h-8 ml-8"></td>
                                <td class="p-3 text-sm md:text-md text-center text-slate-600">Chelsea FC</td>
                                <td class="p-3 text-sm md:text-md text-center text-slate-600">Jose Mourinho</td>
                            </tr>
                            <tr class="bg-gray-200">
                                <td class="p-3 text-sm md:text-md text-center text-slate-600">2013/2014</td>
                                <td class="p-3 text-sm md:text-md "><img src="{{ asset('images/mc-logo.png') }}" alt=""
                                        class="inline object-cover w-8 h-8 ml-8"></td>
                                <td class="p-3 text-sm md:text-md text-center text-slate-600">Manchester City</td>
                                <td class="p-3 text-sm md:text-md text-center text-slate-600">Manuel Pallegrini</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <section class="h-[450px] md:h-[600px] bg-gradient-to-b from-gray-700 to-gray-900 py-10 lg:py-24">
        <div class="container mx-auto px-10 py-5 lg:px-48 lg:py-10">
            <h1
                class="text-xl md:text-2xl font-bold mb-4 text-white text-center md:text-left js-scroll opacity-0 duration-500">
                No Room For Racism</h1>
            <p class="tracking-wide text-sm md:text-md text-white js-scroll opacity-0 duration-500">There is No Room For
                Racism. Anywhere. <br>
                Not online, not in the stands, not at home and not on the streets. <br>
                We all must come together as fans, as players and as clubs to combat discrimination wherever it exists in
                society.</p>
            <p class="tracking-wide text-sm md:text-md text-white js-scroll opacity-0 duration-500">Through No Room For
                Racism, the Premier League and its clubs work with fans, the FA, EFL, PFA, Kick It Out and the police to
                tackle racism on and off the pitch, promoting equality, diversity and inclusion across all areas of
                football.
                <br>
                Together we can all do more to make a positive impact.
                <br>
                So, if you see discrimination, challenge it, report it, change it.
            </p>
        </div>
    </section>
    <section>
        <div class="container mx-auto px-6 py-10">
            <div class="mb-8">
                <h1 class="text-lg md:text-2xl font-bold js-scroll opacity-0 duration-500">Promotion Team</h1>
            </div>
            <div class="flex justify-around w-full bg-slate-100 rounded-xl p-5 js-scroll opacity-0 duration-500">
                <div class="px-5 py-4">
                    <img src="{{ asset('images/norwich.png') }}" alt="" class="w-14 md:w-20 object-cover mx-auto">
                    <h1 class="text-center text-md md:text-xl mt-2">Norwich City</h1>
                    <h2 class="text-center text-sm md:text-md text-slate-500">(Champion EFL Championship)</h2>
                </div>
                <div class="px-5 py-4">
                    <img src="{{ asset('images/watford.png') }}" alt="" class="w-14 md:w-20 object-cover mx-auto">
                    <h1 class="text-center text-md md:text-xl mt-2">Watford</h1>
                    <h2 class="text-center text-sm md:text-md text-slate-500">(Runner-up EFL Championship)</h2>
                </div>
                <div class="px-5 py-4">
                    <img src="{{ asset('images/brentford.png') }}" alt="" class="w-14 md:w-20 object-cover mx-auto">
                    <h1 class="text-center text-md md:text-xl mt-2">Norwich City</h1>
                    <h2 class="text-center text-sm md:text-md text-slate-500">(Play-off EFL Championship)</h2>
                </div>
            </div>
            <div class="mb-8 mt-10">
                <h1 class="text-lg md:text-2xl font-bold text-right js-scroll opacity-0 duration-500">Relegation Team Last
                    Season</h1>
            </div>
            <div class="flex justify-around w-full bg-slate-100 rounded-xl p-5 js-scroll opacity-0 duration-500">
                <div class="px-5 py-4">
                    <img src="{{ asset('images/fullham.png') }}" alt="" class="w-14 md:w-20 object-cover mx-auto">
                    <h1 class="text-center text-md md:text-xl mt-2">Fullham</h1>
                    <h2 class="text-center text-sm md:text-md text-slate-500">(28 Pts - Rank 18)</h2>
                </div>
                <div class="px-5 py-4">
                    <img src="{{ asset('images/wba-logo.png') }}" alt="" class="w-14 md:w-20 object-cover mx-auto">
                    <h1 class="text-center text-md md:text-xl mt-2">West Bromwich Albion</h1>
                    <h2 class="text-center text-sm md:text-md text-slate-500">(26 Pts - Rank 19)</h2>
                </div>
                <div class="px-5 py-4">
                    <img src="{{ asset('images/sheffield.png') }}" alt="" class="w-14 md:w-20 object-cover mx-auto">
                    <h1 class="text-center text-md md:text-xl mt-2">Sheffield United</h1>
                    <h2 class="text-center text-sm md:text-md text-slate-500">(23 Pts - Rank 20)</h2>
                </div>
            </div>
        </div>
    </section>
@endsection
