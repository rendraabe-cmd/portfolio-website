<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rendra Portfolio - Test</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">
    <div x-data="{ count: 0 }" class="bg-white p-8 rounded-2xl shadow-2xl text-center max-w-md">
        <h1 class="text-4xl font-bold text-indigo-600 mb-4">
            Tailwind Works! 🎉
        </h1>
        <p class="text-gray-600 mb-6">
            If you see this styled nicely, Tailwind CSS is active.
        </p>

        <div class="bg-indigo-50 p-4 rounded-lg mb-4">
            <p class="text-2xl font-bold text-indigo-700">
                Count: <span x-text="count"></span>
            </p>
        </div>

        <button
            @click="count++"
            class="bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-3 px-6 rounded-lg transition">
            Click Me (Alpine.js Test)
        </button>
    </div>
</body>
</html>
