<x-app-layout>
    <x-slot name="header">
        {{ __('Dashboard') }}
    </x-slot>

<div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">
    <!-- Card -->
    <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
      <div class="p-3 mr-4 text-blue-500 bg-blue-100 rounded-full dark:text-blue-100 dark:bg-blue-500">
        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
          <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"
            ></path>
        </svg>
      </div>
      <div>
        <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
          Jumlah DPT</p>
        <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
          {{ $dpt }}</p>
      </div>
    </div>
  <!-- Card -->
  <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
    <div class="p-3 mr-4 text-green-500 bg-green-100 rounded-full dark:text-green-100 dark:bg-green-500">
      <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 576 512">
        <path d="M480 80C480 53.49 458.5 32 432 32h-288C117.5 32 96 53.49 96 80V384h384V80zM378.9 166.8l-88 112c-4.031 5.156-10 8.438-16.53 9.062C273.6 287.1 272.7 287.1 271.1 287.1c-5.719 0-11.21-2.019-15.58-5.769l-56-48C190.3 225.6 189.2 210.4 197.8 200.4c8.656-10.06 23.81-11.19 33.84-2.594l36.97 31.69l72.53-92.28c8.188-10.41 23.31-12.22 33.69-4.062C385.3 141.3 387.1 156.4 378.9 166.8zM528 288H512v112c0 8.836-7.164 16-16 16h-416C71.16 416 64 408.8 64 400V288H48C21.49 288 0 309.5 0 336v96C0 458.5 21.49 480 48 480h480c26.51 0 48-21.49 48-48v-96C576 309.5 554.5 288 528 288z"/>
      </svg>
    </div>
    <div>
      <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
        Sudah Memilih 
      </p>
      <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
        {{ $sudah }}
      </p>
    </div>
  </div>
  <!-- Card -->
  <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
    <div class="p-3 mr-4 text-orange-500 bg-orange-100 rounded-full dark:text-orange-100 dark:bg-orange-500">
      <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 384 512">
        <path d="M352 0C369.7 0 384 14.33 384 32C384 49.67 369.7 64 352 64V74.98C352 117.4 335.1 158.1 305.1 188.1L237.3 256L305.1 323.9C335.1 353.9 352 394.6 352 437V448C369.7 448 384 462.3 384 480C384 497.7 369.7 512 352 512H32C14.33 512 0 497.7 0 480C0 462.3 14.33 448 32 448V437C32 394.6 48.86 353.9 78.86 323.9L146.7 256L78.86 188.1C48.86 158.1 32 117.4 32 74.98V64C14.33 64 0 49.67 0 32C0 14.33 14.33 0 32 0H352zM111.1 128H272C282.4 112.4 288 93.98 288 74.98V64H96V74.98C96 93.98 101.6 112.4 111.1 128zM111.1 384H272C268.5 378.7 264.5 373.7 259.9 369.1L192 301.3L124.1 369.1C119.5 373.7 115.5 378.7 111.1 384V384z">
        </path>
      </svg>
    </div>
    <div>
      <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
        Belum Memilih
      </p>
      <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
        {{ $belum }}
      </p>
    </div>
  </div>
  <!-- Card -->
  <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
    <div class="p-3 mr-4 text-teal-500 bg-teal-100 rounded-full dark:text-teal-100 dark:bg-teal-500">
      <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 448 512">
        <path d="M352 128C352 198.7 294.7 256 224 256C153.3 256 96 198.7 96 128C96 57.31 153.3 0 224 0C294.7 0 352 57.31 352 128zM209.1 359.2L176 304H272L238.9 359.2L272.2 483.1L311.7 321.9C388.9 333.9 448 400.7 448 481.3C448 498.2 434.2 512 417.3 512H30.72C13.75 512 0 498.2 0 481.3C0 400.7 59.09 333.9 136.3 321.9L175.8 483.1L209.1 359.2z"/>
      </svg>
    </div>
    <div>
      <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">
        Jumlah Kandidat
      </p>
      <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">
        {{ $paslon }}
      </p>
    </div>
  </div>
</div>

<h2 class="my-6 text-2xl font-semibold text-gray-700">
  Rekapitulasi
</h2>

<div class="p-4 bg-white rounded-lg shadow-xs">
  <div class="grid gap-6 mb-8 md:grid-cols-2">
      <!-- Doughnut/Pie chart -->
      <div
      class="min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800"
      >
      <h4 class="mb-4 font-semibold text-gray-800 dark:text-gray-300">
          Doughnut/Pie
      </h4>
      <canvas id="pie"></canvas>
      <div
          class="flex justify-center mt-4 space-x-3 text-sm text-gray-600 dark:text-gray-400"
      >
          <!-- Chart legend -->
          <div class="flex items-center">
          <span
              class="inline-block w-3 h-3 mr-1 bg-blue-600 rounded-full"
          ></span>
          <span>Shirts</span>
          </div>
          <div class="flex items-center">
          <span
              class="inline-block w-3 h-3 mr-1 bg-teal-500 rounded-full"
          ></span>
          <span>Shoes</span>
          </div>
          <div class="flex items-center">
          <span
              class="inline-block w-3 h-3 mr-1 bg-purple-600 rounded-full"
          ></span>
          <span>Bags</span>
          </div>
      </div>
      </div>
      <!-- Lines chart -->
      <div
      class="min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800"
      >
      <h4 class="mb-4 font-semibold text-gray-800 dark:text-gray-300">
          Lines
      </h4>
      <canvas id="line"></canvas>
      <div
          class="flex justify-center mt-4 space-x-3 text-sm text-gray-600 dark:text-gray-400"
      >
          <!-- Chart legend -->
          <div class="flex items-center">
          <span
              class="inline-block w-3 h-3 mr-1 bg-teal-500 rounded-full"
          ></span>
          <span>Organic</span>
          </div>
          <div class="flex items-center">
          <span
              class="inline-block w-3 h-3 mr-1 bg-purple-600 rounded-full"
          ></span>
          <span>Paid</span>
          </div>
      </div>
      </div>
      <!-- Bars chart -->
      <div
      class="min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800"
      >
      <h4 class="mb-4 font-semibold text-gray-800 dark:text-gray-300">
          Bars
      </h4>
      <canvas id="bars"></canvas>
      <div
          class="flex justify-center mt-4 space-x-3 text-sm text-gray-600 dark:text-gray-400"
      >
          <!-- Chart legend -->
          <div class="flex items-center">
          <span
              class="inline-block w-3 h-3 mr-1 bg-teal-500 rounded-full"
          ></span>
          <span>Shoes</span>
          </div>
          <div class="flex items-center">
          <span
              class="inline-block w-3 h-3 mr-1 bg-purple-600 rounded-full"
          ></span>
          <span>Bags</span>
          </div>
      </div>
      </div>
  </div>
</div>
</x-app-layout>
