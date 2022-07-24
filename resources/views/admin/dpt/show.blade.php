<x-app-layout>
    <x-slot name="header">
        {{ __('Generate Password DPT') }}
    </x-slot> 

    <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
        @if (session()->has('success'))
            <div class="alert alert-success rounded-lg mb-3 shadow-lg">
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                    <span class="text-sm text-white">{{ session('success') }}</span>
                </div>
            </div>
            @endif
        <div class="grid gap-4 mb-6 lg:grid-cols-1">
            <div class="mb-4">
                <label for="formNik" class="block text-gray-700 text-sm font-bold mb-2">NIK: </label>
                <input type="text" name="nik" value="{{ $dpt->nik }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-24 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" readonly id="formNik">
            </div>
            <div class="mb-4">
            <form action="{{ route('input.password', $dpt->id) }}" method="POST">
                @csrf
                {{-- @method('POST') --}}
                    <label for="formPassword" class="text-gray-700 text-sm font-bold mb-2">Password: </label>
                    <div class="flex flex-row">
                        <input type="text" name="password" value="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 w-24 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" 
                               id="password" readonly>  
                    </div>
                </div>
                <div class ="px-4 py-3 sm:px-6 sm:flex">
                    <span class="flex w-full rounded-md shadow-sm sm:w-auto">
                        <button type="submit" name="submit" class="inline-flex justify-center w-full rounded-md border border-green-500 px-4 py-2 bg-green-500 text-base leading-6 font-medium text-white shadow-sm hover:bg-green-700 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                            Simpan
                        </button>
                    </span>
                </div>
            </form>
            <div class="flex flex-row">
                <button onclick="generatePassword();" 
                        class="inline-flex items-center rounded-md border border-purple-600 px-4 py-2 bg-purple-600 text-base leading-6 font-medium text-white shadow-sm hover:bg-purple-800 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue transition ease-in-out duration-150 sm:text-sm sm:leading-5"> 
                    Generate
                </button>
            </div>  
        </div>
    </div>
    
    {{-- src="https://code.jquery.com/jquery-3.6.0.js"integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous" --}}
    <script type="text/javascript">
        var password = document.getElementById("password");
        function generatePassword() { 
            var password = ""; 
            var passwordLength = 8;
            var chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789'; 
            // var charactersLength = characters.length; 
                for ( var i = 0; i < passwordLength; i++ ) {
                     var randomNumber = Math.floor(Math.random() * chars.length);
                     password += chars.substring(randomNumber,randomNumber+1);
                    } 
                    document.getElementById("password").value = password;
                }
    </script>
</x-app-layout>