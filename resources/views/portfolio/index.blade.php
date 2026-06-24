@extends('layouts.app')

@section('title', 'Rendra - Fullstack Web Developer')

@section('content')

    <!-- HERO SECTION -->
    <section id="hero" class="relative min-h-screen flex items-center justify-center overflow-hidden">

        <!-- Background Gradient -->
        <div class="absolute inset-0 bg-gradient-to-br from-indigo-50 via-white to-purple-50 dark:from-gray-900 dark:via-gray-900 dark:to-indigo-950"></div>

        <!-- Decorative Blobs -->
        <div class="absolute top-20 left-10 w-72 h-72 bg-indigo-300 dark:bg-indigo-600 rounded-full mix-blend-multiply dark:mix-blend-soft-light filter blur-3xl opacity-30 animate-pulse"></div>
        <div class="absolute bottom-20 right-10 w-72 h-72 bg-purple-300 dark:bg-purple-600 rounded-full mix-blend-multiply dark:mix-blend-soft-light filter blur-3xl opacity-30 animate-pulse"></div>

        <!-- Content -->
        <div class="relative z-10 max-w-6xl mx-auto px-6 py-20 grid md:grid-cols-2 gap-12 items-center">

            <!-- Left: Text -->
            <div class="text-center md:text-left order-2 md:order-1">
                <!-- Badge "Available" -->
                <div class="inline-flex items-center gap-2 px-4 py-2 mb-6 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-400 rounded-full text-sm font-medium">
                    <span class="relative flex h-2 w-2">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-green-400 opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2 w-2 bg-green-500"></span>
                    </span>
                    Available for Remote Work
                </div>

                <!-- Greeting -->
                <p class="text-lg text-gray-600 dark:text-gray-400 mb-2">
                    👋 Hi there, I'm
                </p>

                <!-- Name -->
                <h1 class="text-5xl md:text-6xl lg:text-7xl font-bold mb-4 leading-tight">
                    <span class="bg-gradient-to-r from-indigo-600 to-purple-600 dark:from-indigo-400 dark:to-purple-400 bg-clip-text text-transparent">
                        Rendra
                    </span>
                </h1>

                <!-- Title -->
                <h2 class="text-2xl md:text-3xl font-semibold text-gray-800 dark:text-gray-200 mb-6">
                    Fullstack Web Developer
                </h2>

                <!-- Bio -->
                <p class="text-lg text-gray-600 dark:text-gray-300 mb-8 leading-relaxed max-w-xl mx-auto md:mx-0">
                    I build production-ready web applications with
                    <span class="font-semibold text-indigo-600 dark:text-indigo-400">PHP & Laravel</span>.
                    Specialized in REST APIs, cloud deployment, and modern frontend stacks.
                </p>

                <!-- CTA Buttons -->
                <div class="flex flex-col sm:flex-row gap-4 justify-center md:justify-start mb-8">
                    <a href="#contact"
                        class="inline-flex items-center justify-center gap-2 px-8 py-3 bg-indigo-600 hover:bg-indigo-700 text-white font-semibold rounded-xl shadow-lg shadow-indigo-500/30 hover:shadow-xl hover:shadow-indigo-500/40 transition-all hover:-translate-y-0.5">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                        Contact Me
                    </a>
                    <a href="#projects"
                        class="inline-flex items-center justify-center gap-2 px-8 py-3 bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-700 text-gray-900 dark:text-white font-semibold rounded-xl border-2 border-gray-200 dark:border-gray-700 transition-all hover:-translate-y-0.5">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                        </svg>
                        View Projects
                    </a>
                </div>

                <!-- Social Links -->
                <div class="flex gap-4 justify-center md:justify-start">
                    <a href="https://github.com/rendraabe-cmd" target="_blank"
                        class="p-3 bg-white dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-700 rounded-lg shadow-md transition-all hover:-translate-y-0.5"
                        title="GitHub">
                        <svg class="w-6 h-6 text-gray-700 dark:text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                        </svg>
                    </a>
                    <a href="mailto:rendra.abe@gmail.com"
                        class="p-3 bg-white dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-700 rounded-lg shadow-md transition-all hover:-translate-y-0.5"
                        title="Email">
                        <svg class="w-6 h-6 text-gray-700 dark:text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                    </a>
                    <a href="https://github.com/rendraabe-cmd/task-management-api" target="_blank"
                        class="p-3 bg-white dark:bg-gray-800 hover:bg-gray-100 dark:hover:bg-gray-700 rounded-lg shadow-md transition-all hover:-translate-y-0.5"
                        title="Live Project">
                        <svg class="w-6 h-6 text-gray-700 dark:text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"/>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Right: Profile Image -->
            <div class="flex justify-center order-1 md:order-2">
                <div class="relative">
                    <!-- Glow Effect -->
                    <div class="absolute inset-0 bg-gradient-to-br from-indigo-500 to-purple-600 rounded-full blur-2xl opacity-30 dark:opacity-50 scale-110"></div>

                    <!-- Image Container -->
                    <div class="relative w-64 h-64 md:w-80 md:h-80 rounded-full overflow-hidden border-4 border-white dark:border-gray-800 shadow-2xl">
                        <img src="{{ asset('images/profile.jpg') }}"
                            alt="Rendra Profile"
                            class="w-full h-full object-cover">
                    </div>

                    <!-- Floating Badge "Laravel" -->
                    <div class="absolute -bottom-2 -right-2 bg-white dark:bg-gray-800 px-4 py-2 rounded-full shadow-lg flex items-center gap-2 border border-gray-200 dark:border-gray-700">
                        <span class="text-2xl">⚡</span>
                        <span class="font-bold text-sm">Laravel Dev</span>
                    </div>
                </div>
            </div>

        </div>

        <!-- Scroll Indicator -->
        <div class="absolute bottom-8 left-1/2 -translate-x-1/2 animate-bounce">
            <svg class="w-6 h-6 text-gray-400 dark:text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/>
            </svg>
        </div>

    </section>

    <!-- ABOUT ME SECTION -->
<section id="about" class="py-20 md:py-32">
    <div class="max-w-6xl mx-auto px-6">

        <!-- Section Header -->
        <div class="text-center mb-16">
            <p class="text-indigo-600 dark:text-indigo-400 font-semibold mb-2 tracking-widest text-sm">
                GET TO KNOW ME
            </p>
            <h2 class="text-4xl md:text-5xl font-bold mb-4">
                About <span class="bg-gradient-to-r from-indigo-600 to-purple-600 dark:from-indigo-400 dark:to-purple-400 bg-clip-text text-transparent">Me</span>
            </h2>
            <div class="w-20 h-1 bg-gradient-to-r from-indigo-600 to-purple-600 mx-auto rounded-full"></div>
        </div>

        <!-- Content Grid -->
        <div class="grid md:grid-cols-5 gap-12 items-center">

            <!-- Left: Story (3 cols) -->
            <div class="md:col-span-3 space-y-5">
                <h3 class="text-2xl md:text-3xl font-bold">
                    Backend Developer who ships to production 🚀
                </h3>

                <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed">
                    I'm a self-driven Fullstack Web Developer based in
                    <span class="font-semibold text-indigo-600 dark:text-indigo-400">Indonesia</span>,
                    passionate about building scalable web applications with PHP and Laravel ecosystem.
                </p>

                <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed">
                    My focus is on creating <span class="font-semibold">clean, maintainable code</span>
                    that works reliably in production — not just on localhost. I've deployed REST APIs to cloud platforms
                    with Docker, configured SSL databases, and built end-to-end authentication systems.
                </p>

                <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed">
                    Currently looking for <span class="font-semibold text-indigo-600 dark:text-indigo-400">remote opportunities</span>
                    where I can contribute to meaningful projects and grow as a developer alongside talented teams worldwide.
                </p>

                <!-- Quick Info Tags -->
                <div class="flex flex-wrap gap-3 pt-4">
                    <span class="px-4 py-2 bg-indigo-100 dark:bg-indigo-900/30 text-indigo-700 dark:text-indigo-300 rounded-lg text-sm font-medium flex items-center gap-2">
                        📍 Indonesia (GMT+7)
                    </span>
                    <span class="px-4 py-2 bg-purple-100 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded-lg text-sm font-medium flex items-center gap-2">
                        🌐 English & Bahasa
                    </span>
                    <span class="px-4 py-2 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-lg text-sm font-medium flex items-center gap-2">
                        💼 Open to Remote
                    </span>
                </div>
            </div>

            <!-- Right: Stats Cards (2 cols) -->
            <div class="md:col-span-2 grid grid-cols-2 gap-4">

                <!-- Stat 1 -->
                <div class="bg-white dark:bg-gray-800 p-6 rounded-2xl shadow-lg border border-gray-100 dark:border-gray-700 hover:shadow-xl hover:-translate-y-1 transition-all">
                    <div class="text-4xl mb-2">💻</div>
                    <div class="text-3xl font-bold text-indigo-600 dark:text-indigo-400">3+</div>
                    <div class="text-sm text-gray-600 dark:text-gray-400 mt-1">Years Coding</div>
                </div>

                <!-- Stat 2 -->
                <div class="bg-white dark:bg-gray-800 p-6 rounded-2xl shadow-lg border border-gray-100 dark:border-gray-700 hover:shadow-xl hover:-translate-y-1 transition-all">
                    <div class="text-4xl mb-2">🚀</div>
                    <div class="text-3xl font-bold text-purple-600 dark:text-purple-400">5+</div>
                    <div class="text-sm text-gray-600 dark:text-gray-400 mt-1">Projects Built</div>
                </div>

                <!-- Stat 3 -->
                <div class="bg-white dark:bg-gray-800 p-6 rounded-2xl shadow-lg border border-gray-100 dark:border-gray-700 hover:shadow-xl hover:-translate-y-1 transition-all">
                    <div class="text-4xl mb-2">⚡</div>
                    <div class="text-3xl font-bold text-pink-600 dark:text-pink-400">9+</div>
                    <div class="text-sm text-gray-600 dark:text-gray-400 mt-1">API Endpoints Live</div>
                </div>

                <!-- Stat 4 -->
                <div class="bg-white dark:bg-gray-800 p-6 rounded-2xl shadow-lg border border-gray-100 dark:border-gray-700 hover:shadow-xl hover:-translate-y-1 transition-all">
                    <div class="text-4xl mb-2">☁️</div>
                    <div class="text-3xl font-bold text-blue-600 dark:text-blue-400">100%</div>
                    <div class="text-sm text-gray-600 dark:text-gray-400 mt-1">Cloud Deployed</div>
                </div>

            </div>
        </div>

    </div>
</section>

    <section id="skills" class="py-20 bg-gray-50 dark:bg-gray-800">
        <div class="max-w-4xl mx-auto px-6 text-center">
            <h2 class="text-3xl font-bold mb-4">Skills Section Coming Soon...</h2>
        </div>
    </section>

    <section id="projects" class="py-20">
        <div class="max-w-4xl mx-auto px-6 text-center">
            <h2 class="text-3xl font-bold mb-4">Projects Coming Soon...</h2>
        </div>
    </section>

    <section id="contact" class="py-20 bg-gray-50 dark:bg-gray-800">
        <div class="max-w-4xl mx-auto px-6 text-center">
            <h2 class="text-3xl font-bold mb-4">Contact Section Coming Soon...</h2>
        </div>
    </section>

@endsection
