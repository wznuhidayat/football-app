<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600;700&display=swap" rel="stylesheet">
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</head>

<body class="font-poppins">
  <nav class="bg-gray-800 fixed inset-x-0" id="navbar">
    <div class="container flex justify-between items-center mx-auto px-6 py-4 md:py-6">
      <div>
        <!-- <img src="{{ asset('images/pl-logo.png') }}" alt="" class="inline object-cover w-10 h-10 mr-3"> -->
        <a href="" class="text-md md:text-lg font-bold text-white">Premier League</a>
      </div>
      <!-- <div class="hidden md:flex space-x-8 items-center">
        <a href="" class="">Home</a>
        <a href="">Matches</a>
        <a href="">Standing</a>
        <a href="">Top Scorers</a>
        <a href="">Team</a>
      </div>
      <div class="md:hidden">
      </div> -->
      <span class="text-3xl text-white cursor-pointer mx-2 md:hidden block">
        <ion-icon name="menu" onclick="Menu(this)"></ion-icon>
      </span>
      <ul class="md:flex md:items-center z-[-1] md:z-auto md:static absolute bg-gray-800 md:bg-transparent w-full left-0 md:w-auto md:py-0 py-4 md:pl-0 pl-7 md:opacity-100 opacity-0 top-[-400px] transition-all ease-in duration-500">
        <li class="mx-4 my-6 md:my-0">
          <a href="#" class="text-xl hover:text-gray-500 duration-500 text-white ">Home</a>
        </li>
        <li class="mx-4 my-6 md:my-0">
          <a href="#" class="text-xl hover:text-gray-500 duration-500 text-white ">Matches</a>
        </li>
        <li class="mx-4 my-6 md:my-0">
          <a href="#" class="text-xl hover:text-gray-500 duration-500 text-white ">Standing</a>
        </li>
        <li class="mx-4 my-6 md:my-0">
          <a href="#" class="text-xl hover:text-gray-500 duration-500 text-white ">Top Scorers</a>
        </li>
        <li class="mx-4 my-6 md:my-0">
          <a href="#" class="text-xl hover:text-gray-500 duration-500 text-white ">Team</a>
        </li>
      </ul>
    </div>
  </nav>
  <section class="h-[400px] md:h-[700px] bg-gradient-to-b from-gray-700 to-gray-900 py-32 md:py-64">
    <div class="container mx-auto px-6 ">
      <h1 class="text-3xl md:text-5xl font-bold text-white text-center">Best League In The World</h1>
      <h2 class="text-lg md:text-2xl  font-medium text-white text-center mt-4">the most intense competition in which there are the best clubs in the world</h2>
      <div class="flex justify-center mt-4">
        <button class="px-10 py-2 bg-transparent border-solid border border-white text-white rounded-lg text-sm hover:bg-slate-100 hover:text-gray-900">Join Us</button>
      </div>
    </div>
  </section>

  <section class="py-4">
    <div class="container mx-auto px-6">
      <div class="flex justify-between">
        <h2 class="text-xl mb-4">Last Match</h2>
        <a href="" class="">View More</a>
      </div>
      <div class="md:flex sm:flex-wrap justify-between md:gap-6">
        <div class="bg-slate-100 z-[-1] sm:w-full md:w-80 lg:96 xl:w-128 2xl:w-80 h-24 rounded-xl md:drop-shadow-md flex flex-col justify-center px-5 mb-4">
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
        <div class="bg-slate-100 z-[-1] sm:w-full md:w-80 lg:96 xl:w-128 2xl:w-80 h-24 rounded-xl md:drop-shadow-md flex flex-col justify-center px-5 mb-4">
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
        <div class="bg-slate-100 z-[-1] sm:w-full md:w-80 lg:96 xl:w-128 2xl:w-80 h-24 rounded-xl md:drop-shadow-md flex flex-col justify-center px-5 mb-4">
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
        <div class="bg-slate-100 z-[-1] sm:w-full md:w-80 lg:96 xl:w-128 2xl:w-80 h-24 rounded-xl md:drop-shadow-md flex flex-col justify-center px-5 mb-4">
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
    <div class="container mx-auto px-6">
      <div class="mb-8">
        <h1 class="text-center text-2xl md:text-3xl font-bold ">Last Premier League Winner</h1>
      </div>
      <div class="xl:flex justify-between gap-8">
        <div class="bg-slate-100 z-[-1] xl:w-1/2 rounded-xl md:drop-shadow-md p-8 mb-4 ">
          <img src="{{ asset('images/winner.jpg') }}" alt="" class="object-cover w-full">
          <div class="flex justify-between">
            <div class="flex items-center">
              <div class="logo px-5 py-10">
                <img src="{{ asset('images/mc-logo.png') }}" alt="" class="inline object-cover w-20 h-20 ">
              </div>
              <div>
                <h1 class="text-xl mt-4">Manchester City </h1>
                <h2 class="text-xl mt-2 text-slate-500">Coach : Pep Guardiola</h2>
              </div>
            </div>
            <div class="flex items-center">
              <h1 class="text-xl mt-4">2020/2021</h1>
            </div>
          </div>
        </div>
        <div class="bg-slate-100 z-[-1] xl:w-1/2 rounded-xl md:drop-shadow-md p-8 mb-4 w-full">
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
  <section class="h-[450px] md:h-[600px] bg-gradient-to-b from-gray-700 to-gray-900 py-10 lg:py-24">
    <div class="container mx-auto px-10 py-5 lg:px-48 lg:py-10">
      <h1 class="text-2xl md:text-3xl font-bold mb-4 text-white text-center md:text-left">No Room For Racism</h1>
      <p class="tracking-wide text-md md:text-lg text-white">There is No Room For Racism. Anywhere. <br>
        Not online, not in the stands, not at home and not on the streets. <br>
        We all must come together as fans, as players and as clubs to combat discrimination wherever it exists in society.</p>
      <p class="tracking-wide text-md md:text-lg text-white">Through No Room For Racism, the Premier League and its clubs work with fans, the FA, EFL, PFA, Kick It Out and the police to tackle racism on and off the pitch, promoting equality, diversity and inclusion across all areas of football.
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
        <h1 class="text-2xl md:text-3xl font-bold">Promotion Team</h1>
      </div>
      <div class="flex justify-around w-full bg-slate-100 rounded-xl p-5">
        <div class="px-5 py-4">
          <img src="{{ asset('images/norwich.png') }}" alt="" class="w-16 md:w-24 object-cover mx-auto">
          <h1 class="text-center text-lg md:text-xl mt-2">Norwich City</h1>
          <h2 class="text-center text-md md:text-lg text-slate-500">(Champion EFL Championship)</h2>
        </div>
        <div class="px-5 py-4">
          <img src="{{ asset('images/watford.png') }}" alt="" class="w-16 md:w-24 object-cover mx-auto">
          <h1 class="text-center text-lg md:text-xl mt-2">Watford</h1>
          <h2 class="text-center text-md md:text-lg text-slate-500">(Runner-up EFL Championship)</h2>
        </div>
        <div class="px-5 py-4">
          <img src="{{ asset('images/brentford.png') }}" alt="" class="w-16 md:w-24 object-cover mx-auto">
          <h1 class="text-center text-lg md:text-xl mt-2">Norwich City</h1>
          <h2 class="text-center text-md md:text-lg text-slate-500">(Play-off EFL Championship)</h2>
        </div>
      </div>
      <div class="mb-8 mt-10">
        <h1 class="text-2xl md:text-3xl font-bold text-right">Relegation Team Last Season</h1>
      </div>
      <div class="flex justify-around w-full bg-slate-100 rounded-xl p-5">
        <div class="px-5 py-4">
          <img src="{{ asset('images/fullham.png') }}" alt="" class="w-16 md:w-24 object-cover mx-auto">
          <h1 class="text-center text-lg md:text-xl mt-2">Fullham</h1>
          <h2 class="text-center text-md md:text-lg text-slate-500">(28 Pts - Rank 18)</h2>
        </div>
        <div class="px-5 py-4">
          <img src="{{ asset('images/wba-logo.png') }}" alt="" class="w-16 md:w-24 object-cover mx-auto">
          <h1 class="text-center text-lg md:text-xl mt-2">West Bromwich Albion</h1>
          <h2 class="text-center text-md md:text-lg text-slate-500">(26 Pts - Rank 19)</h2>
        </div>
        <div class="px-5 py-4">
          <img src="{{ asset('images/sheffield.png') }}" alt="" class="w-16 md:w-24 object-cover mx-auto">
          <h1 class="text-center text-lg md:text-xl mt-2">Sheffield United</h1>
          <h2 class="text-center text-md md:text-lg text-slate-500">(23 Pts - Rank 20)</h2>
        </div>
      </div>
    </div>
  </section>
  <footer class="bg-gradient-to-b from-gray-700 to-gray-900 py-5 px-16">
    <div class="container mx-auto px-6">
      <div class="lg:flex lg:justify-around py-5">
        <div class="text-white text-center mb-5 ">
          <h2 class="text-2xl mb-4">Thank To</h2>
          <ul class="text-md">
            <li>Pinterest</li>
            <li>Youtube</li>
            <li>Google</li>
            <li>Google Font</li>
          </ul>
        </div>
        <div class="text-white text-center mb-5">
          <h2 class="text-2xl mb-4">Technology</h2>
          <ul class="text-md">
            <li>Laravel 9</li>
            <li>Tailwindcss</li>
            <li>Rapid API</li>
          </ul>
        </div>
        <div class="text-white text-center mb-5">
          <h2 class="text-2xl mb-4">Contact Creator</h2>
          <ul class="text-md">
            <li>Website</li>
            <li>Instagram</li>
            <li>Facebook</li>
            <li>muhwisnuhidayat@gmail.com</li>
            <li>Github</li>
          </ul>
        </div>
      </div>
      <div class="mx-auto text-center text-white mt-4">
        Copyright &copy; 2021 Design By <a href="#">Muhammad Wisnu Hidayat</a> - v1.0.0
      </div>
    </div>

  </footer>

</body>
<script>
  function Menu(e) {
    let list = document.querySelector('ul');
    e.name === 'menu' ? (e.name = "close", list.classList.add('top-[80px]'), list.classList.add('opacity-100')) : (e.name = "menu", list.classList.remove('top-[80px]'), list.classList.remove('opacity-100'))
  }
  // var lastScrollTop = 0;
  // navbar = document.getElementById("#navbar");
  // window.addEventListener("scroll",function(){
  //   var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
  //   if(scrollTop > lastScrollTop){
  //       navbar.style.top = "-80px";
  //   }else{
  //       navbar.style.top = "0";
  //   }
  //   lastScrollTop = scrollTop;
  // });
  // const callback = function(entries) {
  //   entries.forEach((entry) => {
  //     console.log(entry);

  //     if (entry.isIntersecting) {
  //       entry.target.classList.add("animate-fadeIn");
  //     } else {
  //       entry.target.classList.remove("animate-fadeIn");
  //     }
  //   });
  // };

  // const observer = new IntersectionObserver(callback);

  // const targets = document.querySelectorAll(".js-show-on-scroll");
  // targets.forEach(function(target) {
  //   target.classList.add("opacity-0");
  //   observer.observe(target);
  // });
</script>

</html>