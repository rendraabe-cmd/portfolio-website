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

    <!-- SKILLS / TECH STACK SECTION -->
<section id="skills" class="py-20 md:py-32 bg-gray-50 dark:bg-gray-950/50">
    <div class="max-w-6xl mx-auto px-6">

        <!-- Section Header -->
        <div class="text-center mb-16">
            <p class="text-indigo-600 dark:text-indigo-400 font-semibold mb-2 tracking-widest text-sm">
                TECHNOLOGIES I WORK WITH
            </p>
            <h2 class="text-4xl md:text-5xl font-bold mb-4">
                Tech <span class="bg-gradient-to-r from-indigo-600 to-purple-600 dark:from-indigo-400 dark:to-purple-400 bg-clip-text text-transparent">Stack</span>
            </h2>
            <div class="w-20 h-1 bg-gradient-to-r from-indigo-600 to-purple-600 mx-auto rounded-full"></div>
            <p class="mt-6 text-gray-600 dark:text-gray-400 max-w-2xl mx-auto">
                A curated set of tools and technologies I use to build production-ready applications.
            </p>
        </div>

        <!-- Skills Grid -->
        <div class="grid md:grid-cols-2 gap-8">

            <!-- BACKEND -->
            <div class="bg-white dark:bg-gray-800 p-8 rounded-2xl shadow-lg border border-gray-100 dark:border-gray-700 hover:shadow-xl transition-all">
                <div class="flex items-center gap-3 mb-6">
                    <div class="w-12 h-12 bg-gradient-to-br from-indigo-500 to-purple-600 rounded-xl flex items-center justify-center text-2xl">
                        ⚙️
                    </div>
                    <h3 class="text-2xl font-bold">Backend</h3>
                </div>
                <div class="flex flex-wrap gap-3">
                    <span class="px-4 py-2 bg-indigo-50 dark:bg-indigo-900/30 text-indigo-700 dark:text-indigo-300 rounded-lg font-medium text-sm hover:scale-105 transition-transform">PHP 8.4</span>
                    <span class="px-4 py-2 bg-red-50 dark:bg-red-900/30 text-red-700 dark:text-red-300 rounded-lg font-medium text-sm hover:scale-105 transition-transform">Laravel 11</span>
                    <span class="px-4 py-2 bg-orange-50 dark:bg-orange-900/30 text-orange-700 dark:text-orange-300 rounded-lg font-medium text-sm hover:scale-105 transition-transform">CodeIgniter</span>
                    <span class="px-4 py-2 bg-purple-50 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded-lg font-medium text-sm hover:scale-105 transition-transform">REST API</span>
                    <span class="px-4 py-2 bg-pink-50 dark:bg-pink-900/30 text-pink-700 dark:text-pink-300 rounded-lg font-medium text-sm hover:scale-105 transition-transform">Sanctum Auth</span>
                </div>
            </div>

            <!-- FRONTEND -->
            <div class="bg-white dark:bg-gray-800 p-8 rounded-2xl shadow-lg border border-gray-100 dark:border-gray-700 hover:shadow-xl transition-all">
                <div class="flex items-center gap-3 mb-6">
                    <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-cyan-500 rounded-xl flex items-center justify-center text-2xl">
                        🎨
                    </div>
                    <h3 class="text-2xl font-bold">Frontend</h3>
                </div>
                <div class="flex flex-wrap gap-3">
                    <span class="px-4 py-2 bg-yellow-50 dark:bg-yellow-900/30 text-yellow-700 dark:text-yellow-300 rounded-lg font-medium text-sm hover:scale-105 transition-transform">JavaScript</span>
                    <span class="px-4 py-2 bg-green-50 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-lg font-medium text-sm hover:scale-105 transition-transform">Vue.js</span>
                    <span class="px-4 py-2 bg-cyan-50 dark:bg-cyan-900/30 text-cyan-700 dark:text-cyan-300 rounded-lg font-medium text-sm hover:scale-105 transition-transform">React</span>
                    <span class="px-4 py-2 bg-sky-50 dark:bg-sky-900/30 text-sky-700 dark:text-sky-300 rounded-lg font-medium text-sm hover:scale-105 transition-transform">Tailwind CSS</span>
                    <span class="px-4 py-2 bg-purple-50 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded-lg font-medium text-sm hover:scale-105 transition-transform">Alpine.js</span>
                    <span class="px-4 py-2 bg-indigo-50 dark:bg-indigo-900/30 text-indigo-700 dark:text-indigo-300 rounded-lg font-medium text-sm hover:scale-105 transition-transform">Bootstrap</span>
                </div>
            </div>

            <!-- DATABASE -->
            <div class="bg-white dark:bg-gray-800 p-8 rounded-2xl shadow-lg border border-gray-100 dark:border-gray-700 hover:shadow-xl transition-all">
                <div class="flex items-center gap-3 mb-6">
                    <div class="w-12 h-12 bg-gradient-to-br from-emerald-500 to-teal-600 rounded-xl flex items-center justify-center text-2xl">
                        🗄️
                    </div>
                    <h3 class="text-2xl font-bold">Database</h3>
                </div>
                <div class="flex flex-wrap gap-3">
                    <span class="px-4 py-2 bg-blue-50 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-lg font-medium text-sm hover:scale-105 transition-transform">MySQL</span>
                    <span class="px-4 py-2 bg-indigo-50 dark:bg-indigo-900/30 text-indigo-700 dark:text-indigo-300 rounded-lg font-medium text-sm hover:scale-105 transition-transform">PostgreSQL</span>
                    <span class="px-4 py-2 bg-teal-50 dark:bg-teal-900/30 text-teal-700 dark:text-teal-300 rounded-lg font-medium text-sm hover:scale-105 transition-transform">Eloquent ORM</span>
                    <span class="px-4 py-2 bg-green-50 dark:bg-green-900/30 text-green-700 dark:text-green-300 rounded-lg font-medium text-sm hover:scale-105 transition-transform">Migrations</span>
                </div>
            </div>

            <!-- DEVOPS & TOOLS -->
            <div class="bg-white dark:bg-gray-800 p-8 rounded-2xl shadow-lg border border-gray-100 dark:border-gray-700 hover:shadow-xl transition-all">
                <div class="flex items-center gap-3 mb-6">
                    <div class="w-12 h-12 bg-gradient-to-br from-orange-500 to-red-600 rounded-xl flex items-center justify-center text-2xl">
                        🚀
                    </div>
                    <h3 class="text-2xl font-bold">DevOps & Tools</h3>
                </div>
                <div class="flex flex-wrap gap-3">
                    <span class="px-4 py-2 bg-blue-50 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 rounded-lg font-medium text-sm hover:scale-105 transition-transform">Docker</span>
                    <span class="px-4 py-2 bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-300 rounded-lg font-medium text-sm hover:scale-105 transition-transform">Git & GitHub</span>
                    <span class="px-4 py-2 bg-purple-50 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 rounded-lg font-medium text-sm hover:scale-105 transition-transform">Render.com</span>
                    <span class="px-4 py-2 bg-orange-50 dark:bg-orange-900/30 text-orange-700 dark:text-orange-300 rounded-lg font-medium text-sm hover:scale-105 transition-transform">Aiven Cloud</span>
                    <span class="px-4 py-2 bg-pink-50 dark:bg-pink-900/30 text-pink-700 dark:text-pink-300 rounded-lg font-medium text-sm hover:scale-105 transition-transform">Bruno API</span>
                    <span class="px-4 py-2 bg-cyan-50 dark:bg-cyan-900/30 text-cyan-700 dark:text-cyan-300 rounded-lg font-medium text-sm hover:scale-105 transition-transform">VS Code</span>
                </div>
            </div>

        </div>

        <!-- Bottom Quote -->
        <div class="mt-16 text-center">
            <p class="text-gray-600 dark:text-gray-400 italic text-lg">
                "I focus on <span class="text-indigo-600 dark:text-indigo-400 font-semibold not-italic">writing code that ships</span> — not just code that works on my machine."
            </p>
        </div>

    </div>
</section>

    <!-- PROJECTS SHOWCASE SECTION -->
<section id="projects" class="py-20 md:py-32">
    <div class="max-w-6xl mx-auto px-6">

        <!-- Section Header -->
        <div class="text-center mb-16">
            <p class="text-indigo-600 dark:text-indigo-400 font-semibold mb-2 tracking-widest text-sm">
                MY RECENT WORK
            </p>
            <h2 class="text-4xl md:text-5xl font-bold mb-4">
                Featured <span class="bg-gradient-to-r from-indigo-600 to-purple-600 dark:from-indigo-400 dark:to-purple-400 bg-clip-text text-transparent">Projects</span>
            </h2>
            <div class="w-20 h-1 bg-gradient-to-r from-indigo-600 to-purple-600 mx-auto rounded-full"></div>
            <p class="mt-6 text-gray-600 dark:text-gray-400 max-w-2xl mx-auto">
                Real projects built with production deployment, cloud database, and comprehensive testing.
            </p>
        </div>

        <!-- Projects Grid -->
        <div class="space-y-12">

            <!-- PROJECT 1: TASK MANAGEMENT API -->
            <div class="group bg-white dark:bg-gray-800 rounded-3xl overflow-hidden shadow-xl border border-gray-100 dark:border-gray-700 hover:shadow-2xl transition-all">
                <div class="grid md:grid-cols-2 gap-0">

                    <!-- Left: Visual / Mockup -->
                    <div class="relative bg-gradient-to-br from-indigo-500 via-purple-600 to-pink-600 p-8 md:p-12 flex items-center justify-center overflow-hidden">
                        <!-- Decorative -->
                        <div class="absolute top-0 right-0 w-64 h-64 bg-white/10 rounded-full blur-3xl"></div>
                        <div class="absolute bottom-0 left-0 w-64 h-64 bg-black/20 rounded-full blur-3xl"></div>

                        <!-- Mock API Code -->
                        <div class="relative z-10 w-full max-w-md bg-gray-900 rounded-xl shadow-2xl overflow-hidden">
                            <!-- Code Header -->
                            <div class="flex items-center gap-2 px-4 py-3 bg-gray-800 border-b border-gray-700">
                                <div class="w-3 h-3 bg-red-500 rounded-full"></div>
                                <div class="w-3 h-3 bg-yellow-500 rounded-full"></div>
                                <div class="w-3 h-3 bg-green-500 rounded-full"></div>
                                <span class="ml-2 text-gray-400 text-xs font-mono">api/tasks</span>
                            </div>
                            <!-- Code Body -->
                            <div class="p-4 font-mono text-xs space-y-1">
                                <div class="text-purple-400">POST <span class="text-gray-300">/api/login</span></div>
                                <div class="text-green-400">GET <span class="text-gray-300">/api/tasks</span></div>
                                <div class="text-yellow-400">PUT <span class="text-gray-300">/api/tasks/{id}</span></div>
                                <div class="text-red-400">DELETE <span class="text-gray-300">/api/tasks/{id}</span></div>
                                <div class="text-gray-500 mt-3">// 9 endpoints live ✨</div>
                                <div class="text-cyan-400">Bearer <span class="text-gray-300">{{ '{token}' }}</span></div>
                            </div>
                        </div>
                    </div>

                    <!-- Right: Content -->
                    <div class="p-8 md:p-12 flex flex-col justify-center">
                        <!-- Status Badge -->
                        <div class="flex items-center gap-2 mb-4">
                            <span class="inline-flex items-center gap-2 px-3 py-1 bg-green-100 dark:bg-green-900/30 text-green-700 dark:text-green-400 rounded-full text-xs font-semibold">
                                <span class="w-2 h-2 bg-green-500 rounded-full animate-pulse"></span>
                                LIVE
                            </span>
                            <span class="px-3 py-1 bg-indigo-100 dark:bg-indigo-900/30 text-indigo-700 dark:text-indigo-400 rounded-full text-xs font-semibold">
                                FEATURED
                            </span>
                        </div>

                        <!-- Title -->
                        <h3 class="text-2xl md:text-3xl font-bold mb-3">
                            Task Management REST API
                        </h3>

                        <!-- Description -->
                        <p class="text-gray-600 dark:text-gray-300 mb-6 leading-relaxed">
                            A production-ready RESTful API for task management with token-based authentication,
                            full CRUD operations, advanced filtering, pagination, and cloud deployment via Docker.
                        </p>

                        <!-- Tech Stack -->
                        <div class="flex flex-wrap gap-2 mb-6">
                            <span class="px-3 py-1 bg-red-50 dark:bg-red-900/30 text-red-700 dark:text-red-300 text-xs font-semibold rounded">Laravel 11</span>
                            <span class="px-3 py-1 bg-blue-50 dark:bg-blue-900/30 text-blue-700 dark:text-blue-300 text-xs font-semibold rounded">MySQL</span>
                            <span class="px-3 py-1 bg-pink-50 dark:bg-pink-900/30 text-pink-700 dark:text-pink-300 text-xs font-semibold rounded">Sanctum</span>
                            <span class="px-3 py-1 bg-cyan-50 dark:bg-cyan-900/30 text-cyan-700 dark:text-cyan-300 text-xs font-semibold rounded">Docker</span>
                            <span class="px-3 py-1 bg-purple-50 dark:bg-purple-900/30 text-purple-700 dark:text-purple-300 text-xs font-semibold rounded">Render.com</span>
                            <span class="px-3 py-1 bg-orange-50 dark:bg-orange-900/30 text-orange-700 dark:text-orange-300 text-xs font-semibold rounded">Aiven Cloud</span>
                        </div>

                        <!-- Key Features -->
                        <ul class="space-y-2 mb-6 text-sm text-gray-700 dark:text-gray-300">
                            <li class="flex items-start gap-2">
                                <svg class="w-5 h-5 text-green-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                </svg>
                                Token-based auth with Laravel Sanctum
                            </li>
                            <li class="flex items-start gap-2">
                                <svg class="w-5 h-5 text-green-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                </svg>
                                Filter, search & pagination
                            </li>
                            <li class="flex items-start gap-2">
                                <svg class="w-5 h-5 text-green-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                </svg>
                                SSL-secured cloud database
                            </li>
                            <li class="flex items-start gap-2">
                                <svg class="w-5 h-5 text-green-500 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                </svg>
                                Auto-deploy via GitHub → Render
                            </li>
                        </ul>

                        <!-- Action Buttons -->
                        <div class="flex flex-wrap gap-3">
                            <a href="https://task-management-api-6390.onrender.com/api/me" target="_blank"
                                class="inline-flex items-center gap-2 px-5 py-2.5 bg-indigo-600 hover:bg-indigo-700 text-white font-semibold rounded-lg shadow-md hover:shadow-lg transition-all">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                                </svg>
                                Live Demo
                            </a>
                            <a href="https://github.com/rendraabe-cmd/task-management-api" target="_blank"
                                class="inline-flex items-center gap-2 px-5 py-2.5 bg-gray-900 dark:bg-gray-700 hover:bg-gray-800 dark:hover:bg-gray-600 text-white font-semibold rounded-lg shadow-md hover:shadow-lg transition-all">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                                </svg>
                                Source Code
                            </a>
                        </div>
                    </div>

                </div>
            </div>

            <!-- PROJECT 2: COMING SOON CARD -->
            <div class="bg-gradient-to-br from-gray-50 to-gray-100 dark:from-gray-800 dark:to-gray-900 rounded-3xl p-12 text-center border-2 border-dashed border-gray-300 dark:border-gray-700">
                <div class="text-6xl mb-4">🚧</div>
                <h3 class="text-2xl font-bold mb-3">More Projects Coming Soon</h3>
                <p class="text-gray-600 dark:text-gray-400 max-w-md mx-auto">
                    Currently working on <span class="font-semibold text-indigo-600 dark:text-indigo-400">Mini POS Fullstack</span>
                    with Laravel + Vue.js. Stay tuned!
                </p>
            </div>

        </div>

    </div>
</section>

    <!-- CONTACT SECTION -->
    <!-- CONTACT SECTION -->
<section id="contact" class="py-20 md:py-32 bg-gray-50 dark:bg-gray-950/50">
    <div class="max-w-6xl mx-auto px-6">

        <!-- Section Header -->
        <div class="text-center mb-16">
            <p class="text-indigo-600 dark:text-indigo-400 font-semibold mb-2 tracking-widest text-sm">
                LET'S WORK TOGETHER
            </p>
            <h2 class="text-4xl md:text-5xl font-bold mb-4">
                Get In <span class="bg-gradient-to-r from-indigo-600 to-purple-600 dark:from-indigo-400 dark:to-purple-400 bg-clip-text text-transparent">Touch</span>
            </h2>
            <div class="w-20 h-1 bg-gradient-to-r from-indigo-600 to-purple-600 mx-auto rounded-full"></div>
            <p class="mt-6 text-gray-600 dark:text-gray-400 max-w-2xl mx-auto">
                Have a project in mind or just want to say hi? Feel free to reach out — I'd love to hear from you!
            </p>
        </div>

        <!-- Content Grid -->
        <div class="grid md:grid-cols-5 gap-8">

            <!-- LEFT: Contact Info Cards (2 cols) -->
            <div class="md:col-span-2 space-y-4">

                <!-- Email Card -->
                <a href="mailto:rendra.abe@gmail.com"
                    class="block bg-white dark:bg-gray-800 p-6 rounded-2xl shadow-lg border border-gray-100 dark:border-gray-700 hover:shadow-xl hover:-translate-y-1 transition-all group">
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 bg-gradient-to-br from-indigo-500 to-purple-600 rounded-xl flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-bold text-lg">Email</h3>
                            <p class="text-gray-600 dark:text-gray-400 text-sm mt-1">rendra.abe@gmail.com</p>
                            <p class="text-indigo-600 dark:text-indigo-400 text-xs mt-2 font-medium">Click to send →</p>
                        </div>
                    </div>
                </a>

                <!-- GitHub Card -->
                <a href="https://github.com/rendraabe-cmd" target="_blank"
                    class="block bg-white dark:bg-gray-800 p-6 rounded-2xl shadow-lg border border-gray-100 dark:border-gray-700 hover:shadow-xl hover:-translate-y-1 transition-all group">
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 bg-gradient-to-br from-gray-700 to-gray-900 rounded-xl flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform">
                            <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-bold text-lg">GitHub</h3>
                            <p class="text-gray-600 dark:text-gray-400 text-sm mt-1">@rendraabe-cmd</p>
                            <p class="text-indigo-600 dark:text-indigo-400 text-xs mt-2 font-medium">View profile →</p>
                        </div>
                    </div>
                </a>

                <!-- Location Card -->
                <div class="bg-white dark:bg-gray-800 p-6 rounded-2xl shadow-lg border border-gray-100 dark:border-gray-700">
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 bg-gradient-to-br from-green-500 to-teal-600 rounded-xl flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-bold text-lg">Location</h3>
                            <p class="text-gray-600 dark:text-gray-400 text-sm mt-1">Indonesia 🇮🇩</p>
                            <p class="text-xs text-gray-500 dark:text-gray-500 mt-2">GMT+7 (UTC+7)</p>
                        </div>
                    </div>
                </div>

                <!-- Availability Card -->
                <div class="bg-gradient-to-br from-green-500 to-emerald-600 p-6 rounded-2xl shadow-lg text-white">
                    <div class="flex items-center gap-3 mb-2">
                        <span class="relative flex h-3 w-3">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-white opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-3 w-3 bg-white"></span>
                        </span>
                        <h3 class="font-bold text-lg">Currently Available</h3>
                    </div>
                    <p class="text-green-50 text-sm">
                        Open for remote opportunities, freelance projects, and collaborations worldwide.
                    </p>
                </div>

            </div>

            <!-- RIGHT: Contact Form (3 cols) -->
            <div class="md:col-span-3">
                <div class="bg-white dark:bg-gray-800 p-8 md:p-10 rounded-2xl shadow-xl border border-gray-100 dark:border-gray-700">
                    <h3 class="text-2xl font-bold mb-2">Send Me a Message</h3>
                    <p class="text-gray-600 dark:text-gray-400 mb-6 text-sm">
                        Fill out the form below and I'll get back to you within 24 hours.
                    </p>

                    <!-- Flash Messages -->
                    @if(session('success'))
                        <div class="mb-6 p-4 bg-green-50 dark:bg-green-900/30 border border-green-200 dark:border-green-800 rounded-lg flex items-start gap-3">
                            <svg class="w-6 h-6 text-green-600 dark:text-green-400 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <p class="text-green-800 dark:text-green-300 font-medium text-sm">{{ session('success') }}</p>
                        </div>
                    @endif

                    @if(session('error'))
                        <div class="mb-6 p-4 bg-red-50 dark:bg-red-900/30 border border-red-200 dark:border-red-800 rounded-lg flex items-start gap-3">
                            <svg class="w-6 h-6 text-red-600 dark:text-red-400 flex-shrink-0 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"/>
                            </svg>
                            <p class="text-red-800 dark:text-red-300 font-medium text-sm">{{ session('error') }}</p>
                        </div>
                    @endif

                    @if($errors->any())
                        <div class="mb-6 p-4 bg-red-50 dark:bg-red-900/30 border border-red-200 dark:border-red-800 rounded-lg">
                            <p class="font-semibold text-red-800 dark:text-red-300 text-sm mb-2">Please fix these errors:</p>
                            <ul class="list-disc list-inside text-red-700 dark:text-red-400 text-sm space-y-1">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('contact.send') }}" method="POST" class="space-y-5">
                        @csrf

                        <!-- Name + Email Row -->
                        <div class="grid md:grid-cols-2 gap-5">
                            <!-- Name -->
                            <div>
                                <label for="name" class="block text-sm font-semibold text-gray-700 dark:text-gray-300 mb-2">
                                    Your Name <span class="text-red-500">*</span>
                                </label>
                                <input type="text" id="name" name="name" required
                                    value="{{ old('name') }}"
                                    placeholder="John Doe"
                                    class="w-full px-4 py-3 bg-gray-50 dark:bg-gray-900 border border-gray-200 dark:border-gray-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition text-gray-900 dark:text-white">
                            </div>

                            <!-- Email -->
                            <div>
                                <label for="email" class="block text-sm font-semibold text-gray-700 dark:text-gray-300 mb-2">
                                    Your Email <span class="text-red-500">*</span>
                                </label>
                                <input type="email" id="email" name="email" required
                                    value="{{ old('email') }}"
                                    placeholder="john@example.com"
                                    class="w-full px-4 py-3 bg-gray-50 dark:bg-gray-900 border border-gray-200 dark:border-gray-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition text-gray-900 dark:text-white">
                            </div>
                        </div>

                        <!-- Subject -->
                        <div>
                            <label for="subject" class="block text-sm font-semibold text-gray-700 dark:text-gray-300 mb-2">
                                Subject <span class="text-red-500">*</span>
                            </label>
                            <input type="text" id="subject" name="subject" required
                                value="{{ old('subject') }}"
                                placeholder="Project inquiry, job opportunity, etc."
                                class="w-full px-4 py-3 bg-gray-50 dark:bg-gray-900 border border-gray-200 dark:border-gray-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition text-gray-900 dark:text-white">
                        </div>

                        <!-- Message -->
                        <div>
                            <label for="message" class="block text-sm font-semibold text-gray-700 dark:text-gray-300 mb-2">
                                Message <span class="text-red-500">*</span>
                            </label>
                            <textarea id="message" name="message" rows="5" required
                                placeholder="Tell me about your project or opportunity..."
                                class="w-full px-4 py-3 bg-gray-50 dark:bg-gray-900 border border-gray-200 dark:border-gray-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition text-gray-900 dark:text-white resize-none">{{ old('message') }}</textarea>
                        </div>

                        <!-- Submit Button -->
                        <button type="submit"
                            class="w-full flex items-center justify-center gap-2 px-6 py-4 bg-gradient-to-r from-indigo-600 to-purple-600 hover:from-indigo-700 hover:to-purple-700 text-white font-semibold rounded-lg shadow-lg shadow-indigo-500/30 hover:shadow-xl hover:shadow-indigo-500/40 transition-all hover:-translate-y-0.5">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/>
                            </svg>
                            Send Message
                        </button>
                    </form>
                </div>
            </div>

        </div>

    </div>
</section>

        <!-- Content Grid -->
        <div class="grid md:grid-cols-5 gap-8">

            <!-- LEFT: Contact Info Cards (2 cols) -->
            <div class="md:col-span-2 space-y-4">

                <!-- Email Card -->
                <a href="mailto:rendra.abe@gmail.com"
                    class="block bg-white dark:bg-gray-800 p-6 rounded-2xl shadow-lg border border-gray-100 dark:border-gray-700 hover:shadow-xl hover:-translate-y-1 transition-all group">
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 bg-gradient-to-br from-indigo-500 to-purple-600 rounded-xl flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-bold text-lg">Email</h3>
                            <p class="text-gray-600 dark:text-gray-400 text-sm mt-1">rendra.abe@gmail.com</p>
                            <p class="text-indigo-600 dark:text-indigo-400 text-xs mt-2 font-medium">Click to send →</p>
                        </div>
                    </div>
                </a>

                <!-- GitHub Card -->
                <a href="https://github.com/rendraabe-cmd" target="_blank"
                    class="block bg-white dark:bg-gray-800 p-6 rounded-2xl shadow-lg border border-gray-100 dark:border-gray-700 hover:shadow-xl hover:-translate-y-1 transition-all group">
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 bg-gradient-to-br from-gray-700 to-gray-900 rounded-xl flex items-center justify-center flex-shrink-0 group-hover:scale-110 transition-transform">
                            <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-bold text-lg">GitHub</h3>
                            <p class="text-gray-600 dark:text-gray-400 text-sm mt-1">@rendraabe-cmd</p>
                            <p class="text-indigo-600 dark:text-indigo-400 text-xs mt-2 font-medium">View profile →</p>
                        </div>
                    </div>
                </a>

                <!-- Location Card -->
                <div class="bg-white dark:bg-gray-800 p-6 rounded-2xl shadow-lg border border-gray-100 dark:border-gray-700">
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 bg-gradient-to-br from-green-500 to-teal-600 rounded-xl flex items-center justify-center flex-shrink-0">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-bold text-lg">Location</h3>
                            <p class="text-gray-600 dark:text-gray-400 text-sm mt-1">Indonesia 🇮🇩</p>
                            <p class="text-xs text-gray-500 dark:text-gray-500 mt-2">GMT+7 (UTC+7)</p>
                        </div>
                    </div>
                </div>

                <!-- Availability Card -->
                <div class="bg-gradient-to-br from-green-500 to-emerald-600 p-6 rounded-2xl shadow-lg text-white">
                    <div class="flex items-center gap-3 mb-2">
                        <span class="relative flex h-3 w-3">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-white opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-3 w-3 bg-white"></span>
                        </span>
                        <h3 class="font-bold text-lg">Currently Available</h3>
                    </div>
                    <p class="text-green-50 text-sm">
                        Open for remote opportunities, freelance projects, and collaborations worldwide.
                    </p>
                </div>

            </div>

            <!-- RIGHT: Contact Form (3 cols) -->
            <div class="md:col-span-3">
                <div class="bg-white dark:bg-gray-800 p-8 md:p-10 rounded-2xl shadow-xl border border-gray-100 dark:border-gray-700">
                    <h3 class="text-2xl font-bold mb-2">Send Me a Message</h3>
                    <p class="text-gray-600 dark:text-gray-400 mb-6 text-sm">
                        Fill out the form below and I'll get back to you within 24 hours.
                    </p>

                    <form action="{{ route('contact.send') }}" method="POST" class="space-y-5">
                        @csrf

                        <!-- Name + Email Row -->
                        <div class="grid md:grid-cols-2 gap-5">
                            <!-- Name -->
                            <div>
                                <label for="name" class="block text-sm font-semibold text-gray-700 dark:text-gray-300 mb-2">
                                    Your Name <span class="text-red-500">*</span>
                                </label>
                                <input type="text" id="name" name="name" required
                                    placeholder="John Doe"
                                    class="w-full px-4 py-3 bg-gray-50 dark:bg-gray-900 border border-gray-200 dark:border-gray-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition text-gray-900 dark:text-white">
                            </div>

                            <!-- Email -->
                            <div>
                                <label for="email" class="block text-sm font-semibold text-gray-700 dark:text-gray-300 mb-2">
                                    Your Email <span class="text-red-500">*</span>
                                </label>
                                <input type="email" id="email" name="email" required
                                    placeholder="john@example.com"
                                    class="w-full px-4 py-3 bg-gray-50 dark:bg-gray-900 border border-gray-200 dark:border-gray-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition text-gray-900 dark:text-white">
                            </div>
                        </div>

                        <!-- Subject -->
                        <div>
                            <label for="subject" class="block text-sm font-semibold text-gray-700 dark:text-gray-300 mb-2">
                                Subject <span class="text-red-500">*</span>
                            </label>
                            <input type="text" id="subject" name="subject" required
                                placeholder="Project inquiry, job opportunity, etc."
                                class="w-full px-4 py-3 bg-gray-50 dark:bg-gray-900 border border-gray-200 dark:border-gray-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition text-gray-900 dark:text-white">
                        </div>

                        <!-- Message -->
                        <div>
                            <label for="message" class="block text-sm font-semibold text-gray-700 dark:text-gray-300 mb-2">
                                Message <span class="text-red-500">*</span>
                            </label>
                            <textarea id="message" name="message" rows="5" required
                                placeholder="Tell me about your project or opportunity..."
                                class="w-full px-4 py-3 bg-gray-50 dark:bg-gray-900 border border-gray-200 dark:border-gray-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition text-gray-900 dark:text-white resize-none"></textarea>
                        </div>

                        <!-- Submit Button -->
                        <button type="submit"
                            class="w-full flex items-center justify-center gap-2 px-6 py-4 bg-gradient-to-r from-indigo-600 to-purple-600 hover:from-indigo-700 hover:to-purple-700 text-white font-semibold rounded-lg shadow-lg shadow-indigo-500/30 hover:shadow-xl hover:shadow-indigo-500/40 transition-all hover:-translate-y-0.5">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/>
                            </svg>
                            Send Message
                        </button>

                        <!-- Note -->
                        <p class="text-xs text-gray-500 dark:text-gray-400 text-center">
                            ⚡ Form will be functional in next update. For now, please use email directly.
                        </p>
                    </form>
                </div>
            </div>

        </div>

    </div>
</section>

@endsection
