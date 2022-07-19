<!-- The button to open modal -->

<!-- Put this part before </body> tag -->
<x-app-layout>
    <x-slot name="header">
        {{ __('KANDIDAT CALON KADES') }}
    </x-slot>

    <form action="{{ route('kandidat.update', $paslon->id)}}" method="POST" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
            <div class="">
                <div class="mb-4">
                    <label for="formnoUrut" class="block text-gray-700 text-sm font-bold mb-2">Nomor Urut: </label>
                    <input type="text" name="no_urut" value="{{$paslon->no_urut}}" class="shadow appereance-none border rounded w-full py-2 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="formnoUrut">
                    @error('no_urut')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="formNama" class="block text-gray-700 text-sm font-bold mb-2">Nama: </label>
                    <input type="text" name="nama" value="{{$paslon->nama}}" class="shadow appereance-none border rounded w-full py-2 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="formNama">
                    @error('nama')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>              
                <div class="mb-4">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300" for="file_input">Upload file</label>
                    <input name="foto" value="{{$paslon->foto}}" class="block w-full text-sm text-gray-900 bg-gray-50 rounded border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="file_input_help" id="file_input" type="file">
                    <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">SVG, PNG, JPG, JPEG or GIF (MAX. 1Mb).</p>
                </div>
                <div class="mb-4">
                    <label for="formDeskripsi" class="block text-gray-700 text-sm font-bold mb-2">Deskripsi: </label>
                    <input id="formDeskripsi" value="{{$paslon->deskripsi}}" type="hidden" name="deskripsi">
                    <trix-editor input="formDeskripsi"></trix-editor>
                </div>
            </div>
        </div>
        <div class ="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
            <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                <input type="submit" name="submit" class="inline-flex justify-center w-full rounded-md border border-green-500 px-4 py-2 bg-green-500 text-base leading-6 font-medium text-white shadow-sm hover:bg-green-700 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                </input>
            </span>
        </div>
    </form>
</x-app-layout>