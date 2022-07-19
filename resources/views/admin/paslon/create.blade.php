<!-- The button to open modal -->

<!-- Put this part before </body> tag -->
<x-app-layout>
    <x-slot name="header">
        {{ __('KANDIDAT CALON KADES') }}
    </x-slot>

    <form action="{{ route('kandidat.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
            <div class="">
                <div class="mb-4">
                    <label for="formnoUrut" class="block text-gray-700 text-sm font-bold mb-2">Nomor Urut: </label>
                    <input type="text" name="no_urut" value="{{ old('no_urut') }}" class="shadow appereance-none border rounded w-full py-2 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('no_urut') input-error @enderror" id="formnoUrut">
                    @error('no_urut')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="formNama" class="block text-gray-700 text-sm font-bold mb-2">Nama: </label>
                    <input type="text" name="nama" value="{{ old('nama') }}" class="shadow appereance-none border rounded w-full py-2 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('nama') input-error @enderror" id="formNama">
                    @error('nama')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-4">    
                    <label class="block text-gray-700 text-sm font-bold" for="image">Upload Foto</label>
                    @error('foto')
                        <span class="text-red-500 mb-2">{{ $message }}</span>
                    @enderror
                    <input name="foto" class="shadow block w-full text-sm text-gray-900 bg-gray-50 rounded border cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 @error('foto') input-error @enderror" aria-describedby="file_input_help" id="image" type="file">
                    <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="image">SVG, PNG, JPG atau JPEG(Max. 1Mb, Aspect Ratio: Square).</p>
                </div>
                <div class="mb-4">
                    <label for="formDeskripsi" class="block text-gray-700 text-sm font-bold mb-2">Deskripsi: </label>
                    <input id="formDeskripsi" value="{{ old('deskripsi') }}" type="hidden" name="deskripsi">
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

    <script>
        document.addEventListener('trix-file-accept', function(e) {
            e.preventDefault();
        })
    </script>
</x-app-layout>