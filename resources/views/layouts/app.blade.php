<!DOCTYPE html>
<html lang="en" x-data="{ darkMode: localStorage.getItem('darkMode') === 'true' }"
    x-init="$watch('darkMode', val => localStorage.setItem('darkMode', val))"
    :class="{ 'dark': darkMode }"
    class="scroll-smooth">
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
    <!-- FOOTER -->
<footer class="bg-gray-900 dark:bg-gray-950 text-white">
    <div class="max-w-6xl mx-auto px-6 py-12">

        <!-- Top: Brand + Quick Links -->
        <div class="grid md:grid-cols-3 gap-8 mb-8">

            <!-- Brand -->
            <div>
                <a href="#hero" class="text-2xl font-bold text-indigo-400 mb-3 inline-block">
                    Rendra<span class="text-white">.dev</span>
                </a>
                <p class="text-gray-400 text-sm leading-relaxed">
                    Fullstack Web Developer specializing in PHP & Laravel. Building production-ready applications, one commit at a time.
                </p>
            </div>

            <!-- Quick Links -->
            <div>
                <h4 class="font-bold mb-4 text-white">Quick Links</h4>
                <ul class="space-y-2 text-sm">
                    <li><a href="#about" class="text-gray-400 hover:text-indigo-400 transition">About</a></li>
                    <li><a href="#skills" class="text-gray-400 hover:text-indigo-400 transition">Skills</a></li>
                    <li><a href="#projects" class="text-gray-400 hover:text-indigo-400 transition">Projects</a></li>
                    <li><a href="#contact" class="text-gray-400 hover:text-indigo-400 transition">Contact</a></li>
                </ul>
            </div>

            <!-- Connect -->
            <div>
                <h4 class="font-bold mb-4 text-white">Connect</h4>
                <div class="flex gap-3 mb-4">
                    <!-- GitHub -->
                    <a href="https://github.com/rendraabe-cmd" target="_blank"
                        class="w-10 h-10 bg-gray-800 hover:bg-indigo-600 rounded-lg flex items-center justify-center transition-all hover:-translate-y-1"
                        title="GitHub">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                        </svg>
                    </a>
                    <!-- Email -->
                    <a href="mailto:rendra.abe@gmail.com"
                        class="w-10 h-10 bg-gray-800 hover:bg-indigo-600 rounded-lg flex items-center justify-center transition-all hover:-translate-y-1"
                        title="Email">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                    </a>
                </div>
                <p class="text-xs text-gray-500">
                    🟢 Open to remote opportunities
                </p>
            </div>

        </div>

        <!-- Divider -->
        <div class="border-t border-gray-800 pt-6">
            <div class="flex flex-col md:flex-row justify-between items-center gap-3 text-sm text-gray-400">
                <p>&copy; {{ date('Y') }} <span class="text-white font-semibold">Achmad Rendra Mustofa</span>. All rights reserved.</p>
                <p class="text-xs">
                    Built with ❤️ using <span class="text-indigo-400">Laravel</span> & <span class="text-cyan-400">Tailwind CSS</span>
                </p>
            </div>
        </div>

    </div>
</footer>

</body>
</html>
