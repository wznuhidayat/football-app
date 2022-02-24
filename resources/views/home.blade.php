<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600;700&display=swap" rel="stylesheet">
</head>

<body class="font-poppins">
  <nav class="bg-transparent">
    <div class="container flex justify-between items-center mx-auto px-8 py-4">
      <div>
        <img src="{{ asset('images/pl-logo.png') }}" alt="" class="inline object-cover w-10 h-10 mr-3">
        <a href="" class="text-lg font-bold">Premier League</a>
      </div>
      <div class="hidden md:flex space-x-8 items-center">
        <a href="" class="">Home</a>
        <a href="">Matches</a>
        <a href="">Standing</a>
        <a href="">Top Scorers</a>
        <a href="">Team</a>
      </div>
      <div class="md:hidden">
      </div>
    </div>
  </nav>
  <section class="h-[600px] bg-gradient-to-b from-gray-700 to-gray-900 py-48">
    <div class="container mx-auto px-8 ">
      <h1 class="text-5xl font-bold text-white text-center">Best League In The World</h1>
      <h2 class="text-2xl font-medium text-white text-center mt-4">the most intense competition in which there are the best clubs in the world</h2>
      <div class="flex justify-center mt-4">
        <button class="px-10 py-2 bg-transparent border-solid border border-white text-white rounded-lg text-sm hover:bg-slate-100 hover:text-gray-900">Join Us</button>
      </div>
    </div>
  </section>
  <section class="py-4">
    <div class="container mx-auto px-8">
      <div class="flex justify-between">
        <h2 class="text-xl pb-4">Last Match</h2>
        <a href="" class="">View More</a>
      </div>
      <div class="flex justify-between space-x-5">
        <div class="bg-slate-100 w-1/4 h-24 rounded-xl drop-shadow-md flex flex-col justify-center px-5">
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
        <div class="bg-slate-100 w-1/4 h-24 rounded-xl drop-shadow-md flex flex-col justify-center px-5">
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
        <div class="bg-slate-100 w-1/4 h-24 rounded-xl drop-shadow-md flex flex-col justify-center px-5">
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
        <div class="bg-slate-100 w-1/4 h-24 rounded-xl drop-shadow-md flex flex-col justify-center px-5">
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
      </div>
    </div>

  </section>
  <section class="my-10">
    <div class="container mx-auto">
      <div class="mb-8">
        <h1 class="text-center text-3xl font-bold">Last Premier League Winner</h1>
      </div>
      <div class="flex justify-between space-x-10">
        <div class="bg-slate-100 w-1/2 rounded-xl drop-shadow-sm p-8">
          <img src="{{ asset('images/winner.jpg') }}" alt="" class="w-full">
          <div class="flex justify-between">
            <div class="flex items-center">
              <div class="logo px-5 py-10">
                <img src="{{ asset('images/mc-logo.png') }}" alt="" class="inline object-cover w-20 h-20 ">
              </div>
              <div>
                <h1 class="text-xl mt-4">Manchester City </h1>
                <h2 class="text-lg mt-2 text-slate-500">Coach : Pep Guardiola</h2>
              </div>
            </div>
            <div class="flex items-center">
              <h1 class="text-xl mt-4">2020/2021</h1>
            </div>
          </div>
        </div>
        <div class="bg-slate-100 w-1/2 rounded-xl drop-shadow-sm p-8">
          <h1 class="text-xl">Last Record Winner </h1>
          <table class="table-auto w-full mt-5">
            <thead>
              <tr>
                <th class="p-3 bg-gray-300">Season</th>
                <th class="p-3 bg-gray-300">Logo</th>
                <th class="p-3 bg-gray-300">Name</th>
                <th class="p-3 bg-gray-300">Coach</th>
              </tr>
            </thead>
            <tbody class="">
              <tr class="bg-gray-200">
                <td class="p-3 text-center text-slate-600">2020/2021</td>
                <td class="p-3 "><img src="{{ asset('images/mc-logo.png') }}" alt="" class="inline object-cover w-8 h-8 ml-8"></td>
                <td class="p-3 text-center text-slate-600">Manchester City</td>
                <td class="p-3 text-center text-slate-600">Pep Guardiola</td>
              </tr>
              <tr class="bg-gray-200">
                <td class="p-3 text-center text-slate-600">2019/2020</td>
                <td class="p-3 "><img src="{{ asset('images/lvp-logo.png') }}" alt="" class="inline object-cover w-8 h-8 ml-8"></td>
                <td class="p-3 text-center text-slate-600">Liverpool FC</td>
                <td class="p-3 text-center text-slate-600">Jurgen Klopp</td>
              </tr>
              <tr class="bg-gray-200">
                <td class="p-3 text-center text-slate-600">2018/2019</td>
                <td class="p-3 "><img src="{{ asset('images/mc-logo.png') }}" alt="" class="inline object-cover w-8 h-8 ml-8"></td>
                <td class="p-3 text-center text-slate-600">Manchester City</td>
                <td class="p-3 text-center text-slate-600">Pep Guardiola</td>
              </tr>
              <tr class="bg-gray-200">
                <td class="p-3 text-center text-slate-600">2017/2018</td>
                <td class="p-3 "><img src="{{ asset('images/mc-logo.png') }}" alt="" class="inline object-cover w-8 h-8 ml-8"></td>
                <td class="p-3 text-center text-slate-600">Manchester City</td>
                <td class="p-3 text-center text-slate-600">Pep Guardiola</td>
              </tr>
              <tr class="bg-gray-200">
                <td class="p-3 text-center text-slate-600">2016/2017</td>
                <td class="p-3 "><img src="{{ asset('images/cfc-logo.png') }}" alt="" class="inline object-cover w-8 h-8 ml-8"></td>
                <td class="p-3 text-center text-slate-600">Chelsea FC</td>
                <td class="p-3 text-center text-slate-600">Antonio Conte</td>
              </tr>
              <tr class="bg-gray-200">
                <td class="p-3 text-center text-slate-600">2015/2016</td>
                <td class="p-3 "><img src="{{ asset('images/lc-logo.png') }}" alt="" class="inline object-cover w-8 h-8 ml-8"></td>
                <td class="p-3 text-center text-slate-600">Licester City</td>
                <td class="p-3 text-center text-slate-600">Claudio Ranieri</td>
              </tr>
              <tr class="bg-gray-200">
                <td class="p-3 text-center text-slate-600">2014/2015</td>
                <td class="p-3 "><img src="{{ asset('images/cfc-logo.png') }}" alt="" class="inline object-cover w-8 h-8 ml-8"></td>
                <td class="p-3 text-center text-slate-600">Chelsea FC</td>
                <td class="p-3 text-center text-slate-600">Jose Mourinho</td>
              </tr>
              <tr class="bg-gray-200">
                <td class="p-3 text-center text-slate-600">2013/2014</td>
                <td class="p-3 "><img src="{{ asset('images/mc-logo.png') }}" alt="" class="inline object-cover w-8 h-8 ml-8"></td>
                <td class="p-3 text-center text-slate-600">Manchester City</td>
                <td class="p-3 text-center text-slate-600">Manuel Pallegrini</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </section>
  <section >
    <div class="container mx-auto">
      <div class="mb-8">
        <h1 class="text-3xl font-bold">Promotion Team</h1>
      </div>
      <div class="flex justify-around w-full bg-slate-100 rounded-sm p-5">
        <div class="px-5 py-4">
          <img src="{{ asset('images/norwich.png') }}" alt="" class="w-24 object-cover mx-auto">
          <h1 class="text-center text-xl mt-2">Norwich City</h1>
          <h2 class="text-center text-lg text-slate-500">(Champion EFL Championship)</h2>
        </div>
        <div class="px-5 py-4">
          <img src="{{ asset('images/watford.png') }}" alt="" class="w-24 object-cover mx-auto">
          <h1 class="text-center text-xl mt-2">Watford</h1>
          <h2 class="text-center text-lg text-slate-500">(Runner-up EFL Championship)</h2>
        </div>
        <div class="px-5 py-4">
          <img src="{{ asset('images/brentford.png') }}" alt="" class="w-24 object-cover mx-auto">
          <h1 class="text-center text-xl mt-2">Norwich City</h1>
          <h2 class="text-center text-lg text-slate-500">(Play-off EFL Championship)</h2>
        </div>
      </div>
      <div class="mb-8 mt-10">
        <h1 class="text-3xl font-bold text-right">Relegation Team Last Season</h1>
      </div>
      <div class="flex justify-around w-full bg-slate-100 rounded-sm p-5">
        <div class="px-5 py-4">
          <img src="{{ asset('images/fullham.png') }}" alt="" class="w-24 object-cover mx-auto">
          <h1 class="text-center text-xl mt-2">Fullham</h1>
          <h2 class="text-center text-lg text-slate-500">(28 Pts - Rank 18)</h2>
        </div>
        <div class="px-5 py-4">
          <img src="{{ asset('images/wba-logo.png') }}" alt="" class="w-24 object-cover mx-auto">
          <h1 class="text-center text-xl mt-2">West Bromwich Albion</h1>
          <h2 class="text-center text-lg text-slate-500">(26 Pts - Rank 19)</h2>
        </div>
        <div class="px-5 py-4">
          <img src="{{ asset('images/sheffield.png') }}" alt="" class="w-24 object-cover mx-auto">
          <h1 class="text-center text-xl mt-2">Sheffield United</h1>
          <h2 class="text-center text-lg text-slate-500">(23 Pts - Rank 20)</h2>
        </div>
      </div>
    </div>
  </section>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
</body>

</html>