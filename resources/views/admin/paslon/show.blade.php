<x-app-layout>
    <x-slot name="header">
        {{ __('KANDIDAT CALON KADES') }}
    </x-slot>         

    <div class="p-4 bg-white rounded-lg shadow-xs">
        <div class="max-w-sm w-full lg:max-w-full lg:flex">
        <div class="h-48 lg:h-auto lg:w-60 flex-none bg-cover rounded-lg lg:rounded-t-none lg:rounded-l text-center overflow-hidden" title="Woman holding a mug">
          <img src="{{ asset('/storage/' .$kandidat->foto) }}" alt="">
        </div>
        <div class="bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
          <div class="mb-8">
            <div class="text-gray-900 font-bold text-xl mb-2">{{ $kandidat->nama }}</div>
            <p class="text-gray-700 text-base">{!! $kandidat->deskripsi !!}</p>
          </div>
          {{-- style="background-image: url(https://api.lorem.space/image/movie?w=260&h=400)" --}}
        </div>
      </div>
    </div>
</x-app-layout>