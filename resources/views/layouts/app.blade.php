<!DOCTYPE html>
<html lang="en" x-data="{ darkMode: localStorage.getItem('darkMode') === 'true' }"
    x-init="$watch('darkMode', val => localStorage.setItem('darkMode', val))"
    :class="{ 'dark': darkMode }">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Rendra - Fullstack Web Developer')</title>
    <meta name="description" content="@yield('description', 'Fullstack Web Developer specializing in PHP & Laravel. Available for remote work worldwide.')">

    <!-- Google Fonts: Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-white dark:bg-gray-900 text-gray-900 dark:text-gray-100 transition-colors duration-300 font-sans">

    <!-- NAVBAR -->
    <nav class="fixed top-0 left-0 right-0 z-50 bg-white/80 dark:bg-gray-900/80 backdrop-blur-md border-b border-gray-200 dark:border-gray-800">
        <div class="max-w-6xl mx-auto px-6 py-4 flex justify-between items-center">
            <!-- Logo -->
            <a href="#hero" class="text-xl font-bold text-indigo-600 dark:text-indigo-400">
                Rendra<span class="text-gray-900 dark:text-white">.dev</span>
            </a>

            <!-- Menu Desktop -->
            <div class="hidden md:flex items-center space-x-8">
                <a href="#about" class="hover:text-indigo-600 dark:hover:text-indigo-400 transition">About</a>
                <a href="#skills" class="hover:text-indigo-600 dark:hover:text-indigo-400 transition">Skills</a>
                <a href="#projects" class="hover:text-indigo-600 dark:hover:text-indigo-400 transition">Projects</a>
                <a href="#contact" class="hover:text-indigo-600 dark:hover:text-indigo-400 transition">Contact</a>

                <!-- Dark Mode Toggle -->
                <button @click="darkMode = !darkMode"
                    class="p-2 rounded-lg bg-gray-100 dark:bg-gray-800 hover:bg-gray-200 dark:hover:bg-gray-700 transition">
                    <!-- Sun Icon (Light Mode) -->
                    <svg x-show="darkMode" class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" clip-rule="evenodd"/>
                    </svg>
                    <!-- Moon Icon (Dark Mode) -->
                    <svg x-show="!darkMode" class="w-5 h-5 text-gray-700" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"/>
                    </svg>
                </button>
            </div>

            <!-- Hamburger Mobile -->
            <button @click="$dispatch('toggle-menu')" class="md:hidden p-2">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>
        </div>
    </nav>

    <!-- MAIN CONTENT -->
    <main class="pt-20">
        @yield('content')
    </main>

    <!-- FOOTER -->
    <footer class="bg-gray-50 dark:bg-gray-950 border-t border-gray-200 dark:border-gray-800 py-8 mt-20">
        <div class="max-w-6xl mx-auto px-6 text-center text-gray-600 dark:text-gray-400">
            <p>&copy; {{ date('Y') }} Achmad Rendra Mustofa. Built with Laravel & Tailwind CSS.</p>
        </div>
    </footer>

</body>
</html>
