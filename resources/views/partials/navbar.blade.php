<nav class="bg-gray-800 fixed inset-x-0 top-0 transition-all duration-500" id="navbar">
    <div class="container flex justify-between items-center mx-auto px-6 py-2 md:py-4">
      <div>
        <!-- <img src="{{ asset('images/pl-logo.png') }}" alt="" class="inline object-cover w-10 h-10 mr-3"> -->
        <a href="" class="text-md md:text-md font-bold text-white">Premier League</a>
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
          <a href="/main" class="text-md hover:text-gray-500 duration-500 text-white ">Home</a>
        </li>
        <li class="mx-4 my-6 md:my-0">
          <a href="/main/matches" class="text-md hover:text-gray-500 duration-500 text-white ">Matches</a>
        </li>
        <li class="mx-4 my-6 md:my-0">
          <a href="/main/standigs" class="text-md hover:text-gray-500 duration-500 text-white ">Standing</a>
        </li>
        <li class="mx-4 my-6 md:my-0">
          <a href="#" class="text-md hover:text-gray-500 duration-500 text-white ">Top Scorers</a>
        </li>
        <li class="mx-4 my-6 md:my-0">
          <a href="/main/clubs" class="text-md hover:text-gray-500 duration-500 text-white ">Clubs</a>
        </li>
      </ul>
    </div>
  </nav>