{{-- @extends('layouts.voting')

@section('content')

<!-- component -->
<div class="px-3 h-screen md:lg:xl:px-40 border-t border-b py-20 bg-opacity-10" style="background-image: url('https://www.toptal.com/designers/subtlepatterns/uploads/dot-grid.png') ;">
  <h1 class="text-gray-900 font-bold text-xl mb-2">
    Pilih Kandidat Anda
</h1>

  <div class="grid mt-10 grid-cols-1 md:lg:xl:grid-cols-2 group bg-white shadow-xl shadow-neutral-100">
    <div class="max-w-sm rounded-lg shadow-md shadow-sky-600 delay-200 saturate-50 bg-slate-100 hover:bg-slate-50 hover:filter-none brightness-90 hover:brightness-110 hover:translate-y-1 hover:scale-105 transition ease-in-out duration-300 cursor-pointer">
      <img
        class="object-cover w-full h-48"
        src="https://cdn.pixabay.com/photo/2016/12/19/18/21/snowflake-1918794__340.jpg"
        alt="image"
      />
      <div class="px-6 py-4">
        <h4 class="mb-3 text-xl font-semibold tracking-tight text-sky-600">
          Christmas Tree Decoration
        </h4>
        <p class="mb-2 leading-normal text-sky-900">
          Lorem ipsum dolor, sit amet cons ectetur adipis icing elit. Praesen tium,
          quibusdam facere quo laborum maiores sequi nam tenetur laud.
        </p>  
      </div>
    </div>
    
    <div class="max-w-sm ml-6 rounded-lg shadow-md shadow-sky-600 bg-slate-100 saturate-50 hover:filter-none delay-200 brightness-90 hover:brightness-110 hover:bg-slate-50 hover:translate-y-1 hover:scale-105 transition ease-in-out duration-300 cursor-pointer">
      <img
        class="object-cover w-full h-48"
        src="https://cdn.pixabay.com/photo/2016/12/19/18/21/snowflake-1918794__340.jpg"
        alt="image"
      />
      <div class="px-6 py-4">
        <h4 class="mb-3 text-xl font-semibold tracking-tight text-sky-600">
          Christmas Tree Decoration
        </h4>
        <p class="mb-2 leading-normal text-sky-900">
          Lorem ipsum dolor, sit amet cons ectetur adipis icing elit. Praesen tium,
          quibusdam facere quo laborum maiores sequi nam tenetur laud.
        </p>
      </div>
    </div>
  </div>
  <button class="mt-32 rounded-md px-5 py-3 transition ease-in-out delay-150 bg-blue-500 hover:-translate-y-1 hover:scale-110 hover:bg-indigo-500 duration-300 text-white">
    Save Changes
  </button>
  
</div>


@endsection('content') --}}

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'E-Voting Pilkades') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        
        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
        <script src="https://cdn.tailwindcss.com"></script>

        <style>
            .gradient {
                background: linear-gradient(90deg, #0d0c94 0%, #007aa5 100%);
            }
            input::-webkit-outer-spin-button,
            input::-webkit-inner-spin-button {
             -webkit-appearance: none;
              margin: 0;  
            }
        </style>
    </head>
    <body class="leading-normal tracking-normal text-white gradient" style="font-family: 'Source Sans Pro', sans-serif;">
    <!--Nav-->
    <nav id="header" class="fixed w-full z-30 top-0 text-white">
      <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 py-2">
        <div class="pl-4 flex items-center">
          <a class="toggleColour text-white flex no-underline hover:no-underline font-bold text-2xl lg:text-2xl" href="#">
            <img src="{{asset('/images/kukar.png')}}" class="h-16 inline" alt="">
            <p class="ml-6">Pemerintah Desa <br>Bunga Jadi</p>
          </a>
        </div>
        <div class="block lg:hidden pr-4">
          <button id="nav-toggle" class="flex items-center p-1 text-pink-800 hover:text-gray-900 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
            <svg class="fill-current h-6 w-6" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <title>Menu</title>
              <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
            </svg>
          </button>
        </div>
        <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden mt-2 lg:mt-0 bg-white lg:bg-transparent text-black p-4 lg:p-0 z-20" id="nav-content">
          {{-- <ul class="list-reset lg:flex justify-end flex-1 items-center">
            <li class="mr-3">
              <a id="menuAction" class="inline-block py-2 px-4 text-white font-semibold no-underline" href="#">Home</a>
            </li>
            <li class="mr-3">
              <a id="menuAction1" class="inline-block text-white no-underline font-semibold py-2 px-4" href="#">Intro</a>
            </li>
            <li class="mr-3">
              <a id="menuAction2" class="inline-block text-white no-underline font-semibold py-2 px-4" href="#">Cara Voting</a>
            </li>
          </ul> --}}
        </div>
      </div>
      <hr class="border-b border-gray-100 opacity-25 my-0 py-0" />
    </nav>
    <!--Hero-->
    
    <div class="pt-24">
      <div class="container px-3 mx-auto flex flex-wrap flex-col md:flex-row items-center">
        
        <!--Left Col-->
        <div class="flex flex-col w-full md:w-2/5 justify-center items-start text-center md:text-left">
          <h1 class="my-4 text-5xl font-bold leading-tight">
            Registrasi E-voting
          </h1>
          @if (session()->has('error'))
            <div class="alert alert-warning rounded-lg mb-3 shadow-lg">
                <div>
                  <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" /></svg>
                    <span class="text-sm">{{ session('error') }}</span>
                </div>
            </div>
            @endif
          <form action="{{ route('voter.login') }}" method="POST" class="mt-6">
            @csrf
            <div>
                <label for="nik" class="block text-xl text-white">NIK</label>
                <input type="text" name="nik" id="nik" class="block w-full appearance-none px-4 py-2 mt-2 text-black bg-white border rounded-md focus:border-yellow-400 focus:ring-yellow-300 focus:outline-none focus:ring focus:ring-opacity-40" autocomplete="none">
            </div>
            <div class="mt-4">
                <div>
                    <label for="text" class="block text-xl text-white">Password</label>
                    <input type="password" name="password" id="password" class="block w-full px-4 py-2 mt-2 text-black   bg-white border rounded-md focus:border-blue-400 focus:ring-blue-300 focus:outline-none focus:ring focus:ring-opacity-40">
                </div>
                <div class="mt-6">
                    <button type="submit" class="px-4 py-2 tracking-wide text-white transition-colors duration-200 transform bg-emerald-600 rounded-md hover:bg-green-600 focus:outline-none focus:bg-green-600">
                        Masuk
                    </button>
                </div>
            </div>
        </form>
        </div>
        <!--Right Col-->
        <div class="w-full md:w-3/5 py-6 text-center">
          <svg id="Layer_2" class="w-full ml-12 md:w-4/5 z-50" data-name="Layer 2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="40 25 320 300" width="506" height="406" class="illustration styles_illustrationTablet__1DWOa"><defs><linearGradient id="linear-gradient" x1="155.18" y1="252.8" x2="172.66" y2="221.32" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#acf4e6"></stop><stop offset="1" stop-color="#8ecdc6"></stop></linearGradient><linearGradient id="linear-gradient-2" x1="66.94" y1="177.27" x2="84.84" y2="163.65" xlink:href="#linear-gradient"></linearGradient></defs><path d="M192.34,285.47l-165.77-98c-5.28-3-9.8-7.83-4.66-11L188.28,80.6c2.5-1.55,6.29-2.56,8.82-1.09l174,101c5.28,3.06,6.22,11.63.94,14.69L214.19,285.31A22,22,0,0,1,192.34,285.47Z" fill="#acf4e6"></path><path d="M134.22,209.14,96.41,228.78s68.12,40.19,90.42,53.44l37.39-23.91" fill="url(#linear-gradient)"></path><path d="M224.22,258.31V155l92.5-51.67v102.5Z" fill="#eca016"></path><path d="M224.22,155l-90-51.67s-2.5,104.17,0,105.84,90,49.17,90,49.17Z" fill="#ffb72f"></path><polygon points="134.22 103.31 224.22 48.3 316.73 103.31 224.22 154.97 134.22 103.31" fill="#ffc863"></polygon><polygon points="179.27 85.04 253.16 125.57 253.16 125.57 274.4 113.7 274.4 113.7 200.53 72.05 179.27 85.04" fill="#fdedcb"></polygon><path d="M195.89,79.83h0a3.89,3.89,0,0,0,.27,6.65L253.53,118a3.89,3.89,0,0,0,3.92-.11l.05,0a3.89,3.89,0,0,0-.18-6.71L199.91,79.66A3.89,3.89,0,0,0,195.89,79.83Z" fill="#34323d"></path><path d="M203.08,47.82s38.08,8.5,45.66,67.54L200.46,88.83s-8.39-41.69-42.49-41C158,47.82,192.54,46.18,203.08,47.82Z" fill="#68e1fd"></path><path d="M203.08,47.82s38.08,8.5,45.66,67.54L200.46,88.83s-8.39-41.69-42.49-41C158,47.82,192.54,46.18,203.08,47.82Z" fill="#311e69" opacity="0.19"></path><path d="M146.36,49.47l45.12,15.42s-3.35-19.68,11.6-17.06l-41.82-9.49a3.6,3.6,0,0,0-1.29-.06C157.11,38.67,146.25,40.74,146.36,49.47Z" fill="#68e1fd"></path><path d="M157.59,118,130.95,230.56c-.64,2.71,3.53,3.86,4.17,1.15l26.64-112.56c.64-2.71-3.53-3.86-4.17-1.15Z" fill="#9e4c36"></path><path d="M182.59,131.32,156,243.88c-.64,2.71,3.53,3.86,4.17,1.15l26.64-112.56c.64-2.71-3.53-3.86-4.17-1.15Z" fill="#9e4c36"></path><path d="M154.82,135.75l25,14c2.43,1.36,4.62-2.38,2.18-3.74l-25-14c-2.43-1.36-4.62,2.38-2.18,3.74Z" fill="#9e4c36"></path><path d="M152.21,151.39l24,13.39c2.43,1.36,4.62-2.38,2.18-3.74l-24-13.39c-2.43-1.36-4.62,2.38-2.18,3.74Z" fill="#9e4c36"></path><path d="M149.31,164.07l23.94,13.38c2.43,1.36,4.62-2.38,2.18-3.74l-23.94-13.38c-2.43-1.36-4.62,2.38-2.18,3.74Z" fill="#9e4c36"></path><path d="M145.54,177.7,169.27,191c2.43,1.36,4.62-2.38,2.18-3.74L147.73,174c-2.43-1.36-4.62,2.38-2.18,3.74Z" fill="#9e4c36"></path><path d="M142.28,190.18l23.77,13.28c2.43,1.36,4.62-2.38,2.18-3.74l-23.77-13.28c-2.43-1.36-4.62,2.38-2.18,3.74Z" fill="#9e4c36"></path><path d="M138.65,204.68l25,14c2.43,1.36,4.62-2.38,2.18-3.74l-25-14c-2.43-1.36-4.62,2.38-2.18,3.74Z" fill="#9e4c36"></path><path d="M185.48,66.63s2.76-3.36,3-4.49.38-5.7,1.19-5.8,1.26.83,1.75.73a10,10,0,0,1,2.13-.39c.18.12,2.93,3,2.59,4.17s-4.65,4-4.65,4l-5.23,5.73" fill="#fcbf81"></path><path d="M159.18,60.57s-.44-4.33,0-5.39,2.84-5,2.22-5.49-1.51,0-1.86-.35-1.35-1.51-1.56-1.51-4.11.89-4.46,2,1.64,5.94,1.64,5.94l1.19,7.67" fill="#fcbf81"></path><path d="M164.81,81.92s-5.24-23.36-6-23.5a8.58,8.58,0,0,0-5.08,1.18c-1.82,1.18,2.13,27.62,2.13,27.62" fill="#aa2b2b"></path><path d="M162.18,178.54l3.48,1.57a2,2,0,0,0,1.34,1.44.8.8,0,0,0,.48.32,9.42,9.42,0,0,0,4.31-.35c1.76-.4,8.66-2.43,6.42,2.24-1.29.76-2.72,1.39-4,2.05-.74.37-1.48.74-2.23,1.08a4.25,4.25,0,0,1-1.3.48c-1,.07-3.25-.84-3.33-.6s-.44,2.07-.44,2.07-6.29,1.84-6.22-2.27C160.66,186,162.18,178.54,162.18,178.54Z" fill="#34323d"></path><path d="M159,172.7s6.25-2.2,7.71-2.19,3.85.7,1.51,3.2c0,0-6.68,3.64-7.53,3.7s-2.83-.73-2.9-.52-.39,1.8-.39,1.8-5.47,1.6-5.41-2c0-.47,1.33-7,1.33-7" fill="#34323d"></path><path d="M160.09,141.47c.22-12.11.78-24.27-.81-36.32.14-3.09-2-1.28-1.78-2.49,1.88-9.83,15.38,3.13,15.38,3.13.55.52.37,3.57.43,4.27q.52,5.79.76,11.6c.83,19.55-1.6,38.74-4.13,58.08-3.32,2.89-5.4,3.66-10.19,1.24,0-12.79.12-25.58.33-38.36Q160.08,142,160.09,141.47Z" fill="#68e1fd"></path><path d="M152.07,162.79c.31-4.81.9-9.61,1.31-14.37.63-7.3.45-14.61.54-21.92.91-9.06,1.83-20.58,1.83-20.58l7.5,2.09s4.87,63.16-2.61,65.84-8.63-2.19-8.63-2.19S152,168,152.07,162.79Z" fill="#68e1fd"></path><path d="M155.14,105.5a20.15,20.15,0,0,1,.48-3.77,44.91,44.91,0,0,0,0-12.1c-.46-3.88-.49-7.89,1.9-11.2,3.45-2,8.25-.21,11.16,1.93,3.93,2.9,5.25,22.59,5.2,28.68,0,.86-5.22,1.3-5.8,1.34a24.53,24.53,0,0,1-8.08-.6c-1.88-.51-4.22-1.44-4.75-3.54A3.92,3.92,0,0,1,155.14,105.5Z" fill="#ea4949"></path><path d="M160,111.17a.55.55,0,0,1,1,.34c-3.56,10.9,2.34,22.17,1.2,33.28-.6,5.85-1.64,11.62-2,17.51a140.44,140.44,0,0,0,.19,18.77c.05.7-1,.64-1.09-.05a140.44,140.44,0,0,1-.19-18.77c.36-6.21,1.57-12.3,2.07-18.48C162.13,132.84,156.49,122,160,111.17Z" fill="#34323d"></path><path d="M164.24,67.27c.33.07,3.32,6.26,2.4,10.13s-7.58.2-9.33-2.65S158,65.93,164.24,67.27Z" fill="#fcbf81"></path><path d="M164.19,68.16A3,3,0,0,1,162.48,71c-1.8.74-3.29,1.26-3.15,2.1s3.29-.25,3.37,1.67a14.37,14.37,0,0,1-.36,3.86c-.16,1-5.74-1.72-7.74-6.58s2.45-6.35,2.67-6.4a4.58,4.58,0,0,1,2.76-2c2.19-.57,2.85.26,2.85.26a2.68,2.68,0,0,1,3.24.22,3.41,3.41,0,0,1-.55,5.8Z" fill="#34323d"></path><path d="M165.29,78.81s6.73.06,9.78-2.27,11.76-14.09,11.76-14.09,6.36,4.4,6.37,5.83-10.8,16.42-13.77,18.11-9.21,5.41-9.21,5.41" fill="#ea4949"></path><path d="M172.21,90.47s-2.26-.06-3.36,0,4.73,10.86,4.73,10.86Z" fill="#aa2b2b"></path><polygon points="257.67 173.02 251.71 200.2 248.27 202.22 242 182.23 245.75 180.02 249.95 195.07 253.92 175.22 257.67 173.02" fill="#fff"></polygon><path d="M274.52,168.19a11.84,11.84,0,0,1,1.28,6,22,22,0,0,1-4.25,13.36,15.15,15.15,0,0,1-4.27,3.78c-3.15,1.85-5.75,1.78-7.42-1a12.32,12.32,0,0,1-1.24-6.05A21.71,21.71,0,0,1,262.87,171a15.63,15.63,0,0,1,4.25-3.79C270.29,165.33,272.92,165.38,274.52,168.19Zm-3.61,14.91a14.75,14.75,0,0,0,1.44-6.89c0-2.65-.52-4.34-1.52-5.12s-2.2-.74-3.69.14a9.87,9.87,0,0,0-3.68,4.19,15,15,0,0,0-1.41,6.84c0,2.68.52,4.37,1.49,5.17s2.22.73,3.71-.15a9.68,9.68,0,0,0,3.66-4.18" fill="#fff"></path><polygon points="290.34 153.82 290.36 157.87 285.32 160.83 285.45 180.38 282.05 182.37 281.92 162.83 276.88 165.79 276.85 161.75 290.34 153.82" fill="#fff"></polygon><polygon points="304.54 145.48 304.57 149.52 296.67 154.16 296.71 159.12 303.04 155.4 303.06 159.44 296.73 163.16 296.78 169.66 304.92 164.87 304.95 168.92 293.42 175.69 293.27 152.1 304.54 145.48" fill="#fff"></polygon><path d="M88.85,161.16,44.52,177s-3.93,7.44,18.37,20.69L98.37,165" fill="url(#linear-gradient-2)"></path><path d="M76.44,112.45a8.72,8.72,0,0,1,4.24.83,6.9,6.9,0,0,1,3,3.41c.65,1.37.94,3.33,2.3,4.21a4,4,0,0,1,1.34,1.17,3.5,3.5,0,0,1,.42,3.26c-.6,1.2-3.11,1.95-4.26,1.72" fill="#8fdb5e"></path><path d="M75.33,112.6a8.19,8.19,0,0,0-7.23,6.2,10.82,10.82,0,0,0-.05,5.11c.33,1.36,1.13,3.71,2.78,3.81,2.24.14,3-2,3.67-3.67s1.44-3.61,3.24-4.29a4.82,4.82,0,0,1,5.16,1.16Z" fill="#1e8c0e"></path><path d="M85.55,121.68c-1.35-1.75-2.47-3.66-3.78-5.44a16.18,16.18,0,0,0-2.62-3.17c-3.11-1.51-7-.13-9.32,2.52.32.1.75.11,1,.2a8.85,8.85,0,0,1,3.56,2.52c1.38,1.52,2.45,3.39,3.66,5,2,2.63,4.6,4.79,8,3.22C88.2,125.53,86.51,122.92,85.55,121.68Z" fill="#8fdb5e"></path><path d="M96.52,99.19s7-.55,6.87,10.53-10.6,3.79-8.3-2.89" fill="#1e8c0e"></path><path d="M95.51,110.09c-.08-3.37,3.71-5.83,6.91-6.27a6.48,6.48,0,0,0-6.33-5c-4.8.12-8.39,5-9.2,10.74A11,11,0,0,0,90.42,119l2.32,2C97,119.31,95.41,113.17,95.51,110.09Z" fill="#8fdb5e"></path><path d="M114.6,118a14.63,14.63,0,0,0-1.62-6,6.63,6.63,0,0,0-4.56-3.53l-3.95,7.6s5.88-10.28,3.48-2.36,5.52,16.79,6.6,5C114.57,118.46,114.58,118.25,114.6,118Z" fill="#1e8c0e"></path><path d="M86.72,137.8s-5.27,3.43-3.81,11.45a44,44,0,0,0,2.34,8.14c1,2.61,1.77,6,4.4,7.45,2.45,1.37,6.24,1.62,8.71.11,2.26-1.38,3.07-4.52,3.9-6.85a42.52,42.52,0,0,0,2-8.85C106.78,129.86,86.72,137.8,86.72,137.8Z" fill="#68e1fd"></path><ellipse cx="93.82" cy="138.97" rx="7.69" ry="2.78" fill="#68e1fd"></ellipse><path d="M94.44,124.16c-1.07-2.59-3.08-4.77-3.71-7.55a9.88,9.88,0,0,1,3.93-10.08c.59-.43,0-1.41-.57-1-4.92,3.57-5.87,9.67-3,14.86a27,27,0,0,1,2.59,4.93c.71,2.32-.08,4-1.17,5.72a6.59,6.59,0,0,0-1.71-4.66c-1.28-1.19-3.16-1.38-4.74-1.92-3.06-1-5.76-2.78-6.28-6.2-.11-.72-1.21-.41-1.1.3a8.2,8.2,0,0,0,4.73,6.05A32.93,32.93,0,0,0,88,126.22a5.31,5.31,0,0,1,3,2.94c.73,1.67.23,2.82-.18,4.44-.53,2.11-1.37,3.92.08,5.91.43.59,1.41,0,1-.57-2.31-3.18,1.38-6.2,2.62-8.93A7,7,0,0,0,94.44,124.16Z" fill="#1e8c0e"></path><path d="M108.63,117.19c-4.86-.86-8.17,2.91-7.88,7.61a17.84,17.84,0,0,0,.65,3.48,9.11,9.11,0,0,1,.64,3,4.59,4.59,0,0,1-2.78,3.25,6.62,6.62,0,0,0-4.1,4.5.57.57,0,0,0,1.1.3c1.12-4.12,6.87-3.52,6.92-8.05,0-2.21-1.16-4.29-1.29-6.51-.24-3.87,2.29-7.25,6.44-6.51C109,118.41,109.35,117.31,108.63,117.19Z" fill="#1e8c0e"></path><path d="M113,112c-1.88-3.47-5.3-4.29-8.66-3.25a11,11,0,0,0-1.35.66c-8.44,6.25-2.45,20.36-1.15,20.26,4.3-.35,3.86-2.88,5.29-10a6.68,6.68,0,0,1,6.72-5.66A12.5,12.5,0,0,0,113,112Z" fill="#8fdb5e"></path><path d="M111.12,109.7a7,7,0,0,0-7.19,3.45c-3.08,5.16-2.37,11.17-2,16.86.05.73,1.19.73,1.14,0-.3-4.11-.88-8.19.24-12.23.55-2,1.21-4.19,2.79-5.6a5.83,5.83,0,0,1,6.35-.91l-.43-.58C111.74,110.36,111.43,110,111.12,109.7Z" fill="#1e8c0e"></path></svg>
        </div>
      </div>
    </div>
    <div class="relative -mt-14 lg:-mt-22">
      <svg viewBox="0 0 1428 174" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
          <g transform="translate(-2.000000, 44.000000)" fill="#FFFFFF" fill-rule="nonzero">
            <path d="M0,0 C90.7283404,0.927527913 147.912752,27.187927 291.910178,59.9119003 C387.908462,81.7278826 543.605069,89.334785 759,82.7326078 C469.336065,156.254352 216.336065,153.6679 0,74.9732496" opacity="0.100000001"></path>
            <path
              d="M100,104.708498 C277.413333,72.2345949 426.147877,52.5246657 546.203633,45.5787101 C666.259389,38.6327546 810.524845,41.7979068 979,55.0741668 C931.069965,56.122511 810.303266,74.8455141 616.699903,111.243176 C423.096539,147.640838 250.863238,145.462612 100,104.708498 Z"
              opacity="0.100000001"
            ></path>
            <path d="M1046,51.6521276 C1130.83045,29.328812 1279.08318,17.607883 1439,40.1656806 L1439,120 C1271.17211,77.9435312 1140.17211,55.1609071 1046,51.6521276 Z" id="Path-4" opacity="0.200000003"></path>
          </g>
          <g transform="translate(-4.000000, 76.000000)" fill="#FFFFFF" fill-rule="nonzero">
            <path
              d="M0.457,34.035 C57.086,53.198 98.208,65.809 123.822,71.865 C181.454,85.495 234.295,90.29 272.033,93.459 C311.355,96.759 396.635,95.801 461.025,91.663 C486.76,90.01 518.727,86.372 556.926,80.752 C595.747,74.596 622.372,70.008 636.799,66.991 C663.913,61.324 712.501,49.503 727.605,46.128 C780.47,34.317 818.839,22.532 856.324,15.904 C922.689,4.169 955.676,2.522 1011.185,0.432 C1060.705,1.477 1097.39,3.129 1121.236,5.387 C1161.703,9.219 1208.621,17.821 1235.4,22.304 C1285.855,30.748 1354.351,47.432 1440.886,72.354 L1441.191,104.352 L1.121,104.031 L0.457,34.035 Z"
            ></path>
          </g>
        </g>
      </svg>
    </div>
    <!-- jQuery if you need it
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  -->
    <script>
      var scrollpos = window.scrollY;
      var header = document.getElementById("header");
      var navcontent = document.getElementById("nav-content");
      var navaction = document.getElementById("navAction");
      var menuaction = document.getElementById("menuAction"); //menu 
      var menuaction1 = document.getElementById("menuAction1"); //menu 
      var menuaction2 = document.getElementById("menuAction2"); //menu 
      var brandname = document.getElementById("brandname");
      var toToggle = document.querySelectorAll(".toggleColour");

      document.addEventListener("scroll", function () {
        /*Apply classes for slide in bar*/
        scrollpos = window.scrollY;

        if (scrollpos > 10) {
          header.classList.add("bg-white");
          menuaction.classList.remove("text-white");
          menuaction.classList.add("text-black");
          menuaction1.classList.remove("text-white");
          menuaction1.classList.add("text-black");
          menuaction2.classList.remove("text-white");
          menuaction2.classList.add("text-black");
          navaction.classList.remove("bg-white");
          navaction.classList.add("gradient");
          navaction.classList.remove("text-gray-800");
          navaction.classList.add("text-white");
          //Use to switch toggleColour colours
          for (var i = 0; i < toToggle.length; i++) {
            toToggle[i].classList.add("text-gray-800");
            toToggle[i].classList.remove("text-white");
          }
          header.classList.add("shadow");
          navcontent.classList.remove("bg-gray-100");
          navcontent.classList.add("bg-white");
        } else {
          header.classList.remove("bg-white");
          menuaction.classList.remove("text-black");
          menuaction.classList.add("text-white");
          menuaction1.classList.remove("text-black");
          menuaction1.classList.add("text-white");
          menuaction2.classList.remove("text-black");
          menuaction2.classList.add("text-white");
          navaction.classList.remove("gradient");
          navaction.classList.add("bg-white");
          navaction.classList.remove("text-white");
          navaction.classList.add("text-gray-800");
          //Use to switch toggleColour colours
          for (var i = 0; i < toToggle.length; i++) {
            toToggle[i].classList.add("text-white");
            toToggle[i].classList.remove("text-gray-800");
          }

          header.classList.remove("shadow");
          navcontent.classList.remove("bg-white");
          navcontent.classList.add("bg-gray-100");
        }
      });
    </script>
    <script>
      /*Toggle dropdown list*/
      /*https://gist.github.com/slavapas/593e8e50cf4cc16ac972afcbad4f70c8*/

      var navMenuDiv = document.getElementById("nav-content");
      var navMenu = document.getElementById("nav-toggle");

      document.onclick = check;
      function check(e) {
        var target = (e && e.target) || (event && event.srcElement);

        //Nav Menu
        if (!checkParent(target, navMenuDiv)) {
          // click NOT on the menu
          if (checkParent(target, navMenu)) {
            // click on the link
            if (navMenuDiv.classList.contains("hidden")) {
              navMenuDiv.classList.remove("hidden");
            } else {
              navMenuDiv.classList.add("hidden");
            }
          } else {
            // click both outside link and outside menu, hide menu
            navMenuDiv.classList.add("hidden");
          }
        }
      }
      function checkParent(t, elm) {
        while (t.parentNode) {
          if (t == elm) {
            return true;
          }
          t = t.parentNode;
        }
        return false;
      }
    </script>
  
        
    </body>
</html>
