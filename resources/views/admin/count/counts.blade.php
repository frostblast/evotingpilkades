<x-app-layout>
    <x-slot name="header">
        {{ __('Rekap') }}
    </x-slot> 

<!DOCTYPE html>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Charts - Windmill Dashboard</title>
        <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
        rel="stylesheet"
        />
        <link rel="stylesheet" href="./assets/css/tailwind.output.css" />
        <script
        src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"
        defer
        ></script>
        <script src="./assets/js/init-alpine.js"></script>
        <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css"
        />
        <script
        src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"
        defer
        ></script>
        <script src="./assets/js/charts-lines.js" defer></script>
        <script src="./assets/js/charts-pie.js" defer></script>
        <script src="./assets/js/charts-bars.js" defer></script>
   </head>
   <body>
        <p class="mb-8 text-gray-600 dark:text-gray-400">
        Charts are provided by
        <a
        class="text-purple-600 dark:text-purple-400 hover:underline"
        href="https://www.chartjs.org/"
        >
        Chart.js
        </a>
        . Ini nanti isinya rekapitulasi pemilihan kepala desa
        </p>

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
    </body>
</html>
</x-app-layout>