<!-- The button to open modal -->

<!-- Put this part before </body> tag -->
<x-app-layout>
    <x-slot name="header">
        {{ __('Daftar Pemilih Tetap') }}
    </x-slot>

    <form action="{{ route('dpt.update',$dpt->id) }}" method="POST">
        @method('put')
        @csrf
        <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
            <div class="grid gap-6 mb-6 lg:grid-cols-2">
                <div class="mb-4">
                    <label for="formNik" class="block text-gray-700 text-sm font-bold mb-2">NIK: </label>
                    <input type="text" name="nik" value="{{$dpt->nik}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" id="formNik">
                    @error('nik')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="formJk" class="block text-gray-700 text-sm font-bold mb-2">Jenis Kelamin</label>
                    <input type="radio" name="jk" value="Laki-Laki" class="text-purple-600 form-radio focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray" id="formJk" @if ($dpt->jk == 'Laki-Laki') checked @endif>
                        <span class="mr-3">Laki-laki</span>
                    </input>
                    <input type="radio" name="jk" value="Perempuan" class="text-purple-600 form-radio focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray" id="formJk" @if ($dpt->jk == 'Perempuan') checked @endif>
                        <span class="mr-3">Perempuan</span>
                    </input>
                    @error('jk')
                        <br><span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="formNama" class="block text-gray-700 text-sm font-bold mb-2">Nama: </label>
                    <input type="text" name="nama" value="{{$dpt->nama}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" id="formNama">
                    @error('nama')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>         
                <div class="mb-4">
                    <label for="formtglLahir" class="block text-gray-700 text-sm font-bold mb-2">Tanggal Lahir: </label>
                    <input type="date" name="tgllahir" value="{{$dpt->tgllahir}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" id="formtglLahir">
                    @error('tgl_lahir')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>       
                <div class="mb-4">
                    <label for="formAlamat" class="block text-gray-700 text-sm font-bold mb-2">Alamat: </label>
                    <textarea rows="4" name="alamat" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" id="formAlamat">
                        {{$dpt->alamat}}
                    </textarea>
                    @error('alamat')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="formStatus" class="block text-gray-700 text-sm font-bold mb-2">Status: </label>
                    <select name="status" id="formStatus" value="{{$dpt->status}}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option value="">-- Pilih --</option>
                        <option value="0" @if($dpt->status == 0) selected @endif >Belum Memilih</option>
                        <option value="1" @if($dpt->status == 1) selected @endif >Sudah Memilih</option>
                    </select>
                    @error('status')
                        <span class="text-red-500">{{ $message }}</span>
                    @enderror
                </div>
            </div>
        </div>
        <div class ="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
            <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                <input type="submit" name="submit" class="inline-flex justify-center w-full rounded-md border border-green-500 px-4 py-2 bg-green-500 text-base leading-6 font-medium text-white shadow-sm hover:bg-green-700 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                </input>
            </span>
            <span class="mt-3 flex w-full rounded-md shadow-sm sm:mt-0 sm:w-auto">
                {{-- <input type="submit" name="submit" class="inline-flex justify-center w-full rounded-md border border-gray-300 px-4 py-2 bg-white text-base leading-6 font-medium text-gray-700 shadow-sm hover:bg-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                    Batal
                </input> --}}
            </span>
        </div>
    </form>
</x-app-layout>