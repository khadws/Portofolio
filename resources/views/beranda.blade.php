<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Khaidirud Dawwas | Portofolio</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800;900&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=Fira+Code:wght@400;500&display=swap"
        rel="stylesheet">

    <!-- Tailwind CSS & JS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Alpine.js CDN for interactive elements -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body class="bg-slate-50 text-slate-800 antialiased font-sans overflow-x-hidden" x-data="{ activeSection: 'home' }">

    <!-- Background Decorative Glows -->
    <div
        class="fixed top-[-10%] left-[-10%] w-[50%] h-[50%] bg-blue-200/40 rounded-full blur-[120px] pointer-events-none z-0">
    </div>
    <div
        class="fixed bottom-[-10%] right-[-10%] w-[50%] h-[50%] bg-indigo-200/30 rounded-full blur-[120px] pointer-events-none z-0">
    </div>
    <div
        class="fixed top-[40%] right-[15%] w-[300px] h-[300px] bg-cyan-200/20 rounded-full blur-[100px] pointer-events-none z-0">
    </div>

    <!-- Sticky Header / Navbar -->
    <header
        class="w-full fixed top-0 left-0 z-50 bg-white/80 backdrop-blur-md border-b border-slate-200/80 transition-all duration-300">
        <nav class="max-w-7xl mx-auto flex items-center justify-between px-6 py-4 md:px-12">
            <!-- Logo -->
            <a href="#home" class="text-xl font-bold tracking-tight text-slate-900 flex items-center gap-2 group">
                <span
                    class="text-blue-600 group-hover:from-cyan-600 group-hover:to-blue-600 transition-all">Khdws.</span>
                <span class="text-blue-600 font-mono text-sm">&lt;/&gt;</span>
            </a>

            <!-- Desktop Menu -->
            <div class="hidden md:flex items-center gap-8">
                <a href="#home" class="text-sm font-medium tracking-wide transition-colors duration-200"
                    :class="activeSection === 'home' ? 'text-blue-600 font-semibold' : 'text-slate-600 hover:text-slate-955'"
                    @click="activeSection = 'home'">Beranda</a>
                <a href="#about" class="text-sm font-medium tracking-wide transition-colors duration-200"
                    :class="activeSection === 'about' ? 'text-blue-600 font-semibold' : 'text-slate-600 hover:text-slate-955'"
                    @click="activeSection = 'about'">Tentang Saya</a>
                <a href="#projects" class="text-sm font-medium tracking-wide transition-colors duration-200"
                    :class="activeSection === 'projects' ? 'text-blue-600 font-semibold' : 'text-slate-600 hover:text-slate-955'"
                    @click="activeSection = 'projects'">Karya</a>
                <a href="#contact" class="text-sm font-medium tracking-wide transition-colors duration-200"
                    :class="activeSection === 'contact' ? 'text-blue-600 font-semibold' : 'text-slate-600 hover:text-slate-955'"
                    @click="activeSection = 'contact'">Kontak</a>
            </div>

            <!-- Call to Action Button in Nav -->
            <div class="hidden md:block">
                <a href="#contact"
                    class="px-5 py-2 rounded-full border border-blue-200 text-sm font-medium text-blue-600 hover:bg-blue-50 hover:border-blue-400 transition-all duration-300">
                    Hubungi Saya
                </a>
            </div>

            <!-- Mobile Menu Button -->
            <div class="md:hidden" x-data="{ open: false }">
                <button @click="open = !open" class="text-slate-600 hover:text-slate-900 focus:outline-none"
                    aria-label="Toggle menu">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path x-show="!open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16m-7 6h7" />
                        <path x-show="open" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" style="display: none;" />
                    </svg>
                </button>

                <!-- Mobile Menu Panel -->
                <div x-show="open" @click.away="open = false" x-transition:enter="transition ease-out duration-150"
                    x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
                    x-transition:leave="transition ease-in duration-100"
                    x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95"
                    class="absolute top-16 right-6 w-56 rounded-2xl bg-white/95 border border-slate-200 backdrop-blur-lg p-4 shadow-xl z-50 flex flex-col gap-4"
                    style="display: none;">
                    <a href="#home" @click="open = false; activeSection = 'home'"
                        class="px-3 py-2 text-sm text-slate-600 hover:text-blue-600 hover:bg-blue-50/50 rounded-lg transition-all">Beranda</a>
                    <a href="#about" @click="open = false; activeSection = 'about'"
                        class="px-3 py-2 text-sm text-slate-600 hover:text-blue-600 hover:bg-blue-50/50 rounded-lg transition-all">Tentang
                        Saya</a>
                    <a href="#projects" @click="open = false; activeSection = 'projects'"
                        class="px-3 py-2 text-sm text-slate-600 hover:text-blue-600 hover:bg-blue-50/50 rounded-lg transition-all">Karya</a>
                    <a href="#contact" @click="open = false; activeSection = 'contact'"
                        class="px-3 py-2 text-sm text-slate-600 hover:text-blue-600 hover:bg-blue-50/50 rounded-lg transition-all">Kontak</a>
                </div>
            </div>
        </nav>
    </header>

    <!-- Main Wrapper -->
    <main class="relative z-10">

        <!-- Hero Section -->
        <section id="home" class="min-h-screen flex items-center px-6 md:px-12 pt-20"
            @intersect="activeSection = 'home'">
            <div class="max-w-7xl mx-auto w-full grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                <!-- Text Content -->
                <div class="lg:col-span-7 flex flex-col space-y-6">

                    <h1 class="text-4xl sm:text-6xl font-extrabold tracking-tight leading-none text-slate-900">
                        Membangun pengalaman web lewat desain modern dan kode berkualitas.
                    </h1>

                    <p class="text-lg text-slate-600 max-w-xl">
                        Halo, saya <span class="text-blue-600 font-semibold">Khaidirud Dawwas</span>, seorang Front-End
                        Web Developer yang fokus menciptakan pengalaman pengguna digital yang intuitif, cepat, dan
                        responsif.
                    </p>

                    <!-- Buttons CTA -->
                    <div class="flex flex-col sm:flex-row gap-4 pt-4">
                        <a href="#projects"
                            class="px-8 py-4 rounded-xl bg-gradient-to-r from-blue-600 to-blue-500 text-white font-semibold shadow-lg shadow-blue-200/50 hover:shadow-blue-300/40 hover:from-blue-700 hover:to-blue-600 hover:scale-[1.02] active:scale-[0.98] transition-all text-center">
                            Lihat Karya Saya
                        </a>
                        <a href="#contact"
                            class="px-8 py-4 rounded-xl border border-slate-200 bg-white text-slate-700 font-semibold hover:bg-slate-50 hover:text-blue-600 hover:border-blue-200 active:scale-[0.98] transition-all text-center shadow-sm shadow-slate-100">
                            Hubungi Saya
                        </a>
                    </div>

                    <!-- Tech Badges -->
                    <div class="flex flex-wrap items-center gap-3 pt-8 text-xs text-slate-400">
                        <span class="font-mono text-slate-500">Familiar Dengan:</span>
                        <span
                            class="px-3 py-1 bg-white rounded-md border border-slate-200 text-slate-600 shadow-sm">HTML</span>
                        <span
                            class="px-3 py-1 bg-white rounded-md border border-slate-200 text-slate-600 shadow-sm">CSS</span>
                        <span
                            class="px-3 py-1 bg-white rounded-md border border-slate-200 text-slate-600 shadow-sm">JavaScript
                            ES6+</span>
                        <span
                            class="px-3 py-1 bg-white rounded-md border border-slate-200 text-slate-600 shadow-sm">Tailwind
                            CSS</span>
                        <span
                            class="px-3 py-1 bg-white rounded-md border border-slate-200 text-slate-600 shadow-sm">Laravel</span>
                    </div>
                </div>

                <!-- Right Column: Visual Dashboard Mockup (Front-end theme) -->
                <div class="lg:col-span-5 flex justify-center">
                    <div class="relative w-full max-w-md group">
                        <!-- Glow background -->
                        <div
                            class="absolute -inset-0.5 bg-gradient-to-r from-blue-500 to-cyan-500 rounded-2xl blur-xl opacity-20 group-hover:opacity-30 transition duration-1000 group-hover:duration-200">
                        </div>

                        <!-- Main Visual -->
                        <div
                            class="relative bg-white border border-slate-200 rounded-2xl p-6 shadow-xl shadow-slate-100/50">
                            <!-- Top Bar (Window controls) -->
                            <div class="flex items-center justify-between pb-4 border-b border-slate-100 mb-6">
                                <div class="flex gap-1.5">
                                    <span class="w-3 h-3 rounded-full bg-red-400"></span>
                                    <span class="w-3 h-3 rounded-full bg-yellow-400"></span>
                                    <span class="w-3 h-3 rounded-full bg-green-400"></span>
                                </div>
                                <div class="w-4"></div>
                            </div>

                            <!-- UI Element mockup inside -->
                            <div class="space-y-4 font-mono text-sm text-slate-600">
                                <img src="assets/images/foto.png" alt="Khaidirud Dawwas"
                                    class="w-full h-auto rounded-lg mx-auto border border-slate-200 shadow-lg shadow-blue-100/30">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- About Section -->
        <section id="about" class="py-24 px-6 md:px-12 bg-slate-950/20 border-y border-slate-900"
            @intersect="activeSection = 'about'">
            <div class="max-w-7xl mx-auto">
                <div class="text-center max-w-3xl mx-auto mb-16 space-y-4">
                    <h2 class="text-xs font-semibold text-blue-600 uppercase tracking-widest">Tentang Saya</h2>
                    <p class="text-3xl sm:text-4xl font-extrabold tracking-tight text-slate-900">Siapakah Saya?</p>
                    <div class="w-20 h-1 bg-gradient-to-r from-blue-500 to-cyan-500 mx-auto rounded-full"></div>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                    <!-- Left Column: Visual Code Mockup -->
                    <div class="lg:col-span-5 order-2 lg:order-1">
                        <div
                            class="w-full bg-[#0d1117] rounded-xl border border-slate-800 overflow-hidden shadow-2xl font-mono text-xs">
                            <!-- VS Code Title Bar -->
                            <div
                                class="flex items-center justify-between px-4 py-3 bg-[#161b22] border-b border-slate-900">
                                <div class="flex gap-1.5">
                                    <span class="w-3 h-3 rounded-full bg-[#ff5f56]"></span>
                                    <span class="w-3 h-3 rounded-full bg-[#ffbd2e]"></span>
                                    <span class="w-3 h-3 rounded-full bg-[#27c93f]"></span>
                                </div>
                                <span class="text-[11px] text-slate-500">profile.json</span>
                                <div class="w-4"></div>
                            </div>
                            <!-- VS Code Code Editor -->
                            <div class="p-6 overflow-x-auto space-y-1 text-slate-300 leading-relaxed">
                                <div><span class="text-[#f9758b]">1</span> <span class="text-[#e1e4e8]">{</span></div>
                                <div><span class="text-[#f9758b]">2</span> &nbsp;&nbsp;<span
                                        class="text-[#79b8ff]">"nama"</span><span class="text-[#e1e4e8]">:</span>
                                    <span class="text-[#9ecbff]">"Khaidirud Dawwas"</span><span
                                        class="text-[#e1e4e8]">,</span></div>
                                <div><span class="text-[#f9758b]">3</span> &nbsp;&nbsp;<span
                                        class="text-[#79b8ff]">"peran"</span><span class="text-[#e1e4e8]">:</span>
                                    <span class="text-[#9ecbff]">"Front-end Web Developer"</span><span
                                        class="text-[#e1e4e8]">,</span></div>
                                <div><span class="text-[#f9758b]">4</span> &nbsp;&nbsp;<span
                                        class="text-[#79b8ff]">"lokasi"</span><span class="text-[#e1e4e8]">:</span>
                                    <span class="text-[#9ecbff]">"Surabaya Barat, Indonesia"</span><span
                                        class="text-[#e1e4e8]">,</span></div>
                                <div><span class="text-[#f9758b]">5</span> &nbsp;&nbsp;<span
                                        class="text-[#79b8ff]">"minat"</span><span class="text-[#e1e4e8]">:</span>
                                    <span class="text-[#e1e4e8]">[</span></div>
                                <div><span class="text-[#f9758b]">6</span> &nbsp;&nbsp;&nbsp;&nbsp;<span
                                        class="text-[#9ecbff]">"Interaksi UI"</span><span
                                        class="text-[#e1e4e8]">,</span></div>
                                <div><span class="text-[#f9758b]">7</span> &nbsp;&nbsp;<span
                                        class="text-[#e1e4e8]">]</span><span class="text-[#e1e4e8]">,</span></div>
                                <div><span class="text-[#f9758b]">8</span> &nbsp;&nbsp;<span class="text-[#79b8ff]">"pendidikan"</span>
                                    <span class="text-[#e1e4e8]">:</span> <span class="text-[#e1e4e8]">{</span></div>
                                        <div><span class="text-[#f9758b]">9</span>&nbsp;&nbsp;&nbsp;&nbsp;<span class="text-[#79b8ff]">"SMK Negeri 2 Surabaya"</span><span class="text-[#e1e4e8]">:</span> <span class="text-[#9ecbff]">"Rekayasa Prangkat Lunak"</span></div>
                                <div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="text-[#79b8ff]">"Universitas Dr. Soetomo"</span><span class="text-[#e1e4e8]">:</span>
                                    <span class="text-[#9ecbff]">"S1 Teknik Informatika"</span></div>
                                <div><span class="text-[#f9758b]">10</span> &nbsp;&nbsp;<span
                                        class="text-[#e1e4e8]">}</span></div>
                                <div><span class="text-[#f9758b]">11</span> <span class="text-[#e1e4e8]">}</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Right Column: Biography & Skills -->
                    <div class="lg:col-span-7 order-1 lg:order-2 space-y-6">
                        <h3 class="text-2xl font-bold text-slate-900">Membangun Pengalaman Pengguna yang Menyenangkan
                        </h3>
                        <p class="text-slate-600 leading-relaxed">
                            Saya adalah developer front-end yang memiliki hasrat kuat untuk memadukan sisi estetika
                            desain grafis dan logika penulisan kode. Saya senang mengubah layout statis dari desainer
                            menjadi website interaktif yang dapat diakses secara dinamis dan responsif di berbagai
                            perangkat.
                        </p>
                        <p class="text-slate-600 leading-relaxed">
                            Melalui struktur kode yang rapi, modular, dan teratur menggunakan kaidah CSS modern serta
                            performa JavaScript yang teroptimasi, saya berupaya memastikan performa website berada di
                            tingkat tertinggi.
                        </p>

                        <!-- Skills Progress / Skill Badges -->
                        <div class="space-y-4 pt-4">
                            <h4 class="text-sm font-semibold text-slate-900 uppercase tracking-wider">Keahlian & Teknologi</h4>
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <!-- Skill item 1 -->
                                <div class="p-4 bg-slate-900 border border-slate-800 rounded-xl">
                                    <div class="flex items-center justify-between mb-2">
                                        <span class="text-sm font-medium text-white">HTML5 & CSS3 / Styling</span>
                                        <span class="text-xs text-blue-400 font-semibold">Expert</span>
                                    </div>
                                    <div class="text-xs text-slate-500">Semantik, Flexbox, CSS Grid, Responsive Layouts
                                    </div>
                                </div>
                                <!-- Skill item 2 -->
                                <div class="p-4 bg-slate-900 border border-slate-800 rounded-xl">
                                    <div class="flex items-center justify-between mb-2">
                                        <span class="text-sm font-medium text-white">JavaScript (ES6+)</span>
                                        <span class="text-xs text-blue-400 font-semibold">Biginer</span>
                                    </div>
                                    <div class="text-xs text-slate-500">DOM Manipulation, Fetch API, Async/Await, Array
                                        Methods</div>
                                </div>
                                <!-- Skill item 3 -->
                                <div class="p-4 bg-slate-900 border border-slate-800 rounded-xl">
                                    <div class="flex items-center justify-between mb-2">
                                        <span class="text-sm font-medium text-white">Tailwind CSS v4</span>
                                        <span class="text-xs text-blue-400 font-semibold">Expert</span>
                                    </div>
                                    <div class="text-xs text-slate-500">Utility-first design, State management,
                                        Micro-interactions</div>
                                </div>
                                <!-- Skill item 4 -->
                                <div class="p-4 bg-slate-900 border border-slate-800 rounded-xl">
                                    <div class="flex items-center justify-between mb-2">
                                        <span class="text-sm font-medium text-white">Framework Laravel</span>
                                        <span class="text-xs text-blue-400 font-semibold">Expert</span>
                                    </div>
                                    <div class="text-xs text-slate-500">Blade Templating, Component structure, Router &
                                        Controllers</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Projects Section -->
        <section id="projects" class="py-24 px-6 md:px-12" @intersect="activeSection = 'projects'"
            x-data="{ activeFilter: 'all' }">
            <div class="max-w-7xl mx-auto">
                <div class="text-center max-w-3xl mx-auto mb-12 space-y-4">
                    <h2 class="text-xs font-semibold text-blue-600 uppercase tracking-widest">Portofolio</h2>
                    <p class="text-3xl sm:text-4xl font-extrabold tracking-tight text-slate-900">Karya Terpilih</p>
                    <div class="w-20 h-1 bg-gradient-to-r from-blue-500 to-cyan-500 mx-auto rounded-full"></div>
                </div>

                <!-- Category Filters -->
                <div class="flex justify-center items-center gap-3 flex-wrap mb-12">
                    <button @click="activeFilter = 'all'"
                        class="px-5 py-2 rounded-full text-sm font-medium transition-all"
                        :class="activeFilter === 'all' ? 'bg-blue-600 text-white font-semibold' :
                            'bg-slate-900 text-slate-400 border border-slate-800 hover:text-white'">
                        Semua
                    </button>
                    <button @click="activeFilter = 'Laravel'"
                        class="px-5 py-2 rounded-full text-sm font-medium transition-all"
                        :class="activeFilter === 'Laravel' ? 'bg-blue-600 text-white font-semibold' :
                            'bg-slate-900 text-slate-400 border border-slate-800 hover:text-white'">
                        Laravel
                    </button>
                    <button @click="activeFilter = 'Tailwind CSS'"
                        class="px-5 py-2 rounded-full text-sm font-medium transition-all"
                        :class="activeFilter === 'Tailwind CSS' ? 'bg-blue-600 text-white font-semibold' :
                            'bg-slate-900 text-slate-400 border border-slate-800 hover:text-white'">
                        Tailwind CSS
                    </button>
                    </button>
                    <button @click="activeFilter = 'Static HTML'"
                        class="px-5 py-2 rounded-full text-sm font-medium transition-all"
                        :class="activeFilter === 'Static HTML' ? 'bg-blue-600 text-white font-semibold' :
                            'bg-slate-900 text-slate-400 border border-slate-800 hover:text-white'">
                        Static HTML
                    </button>
                </div>

                <!-- Projects Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @forelse ($projects as $project)
                        <div class="bg-slate-950/20 border border-slate-800/80 rounded-2xl overflow-hidden backdrop-blur-sm group hover:border-slate-700/80 hover:scale-[1.01] transition-all duration-300 flex flex-col justify-between"
                            x-show="activeFilter === 'all' || @js($project->tech_stack).includes(activeFilter)">

                            <div>
                                @if ($project->image_url)
                                    <div class="h-50 bg-gradient-to-br from-blue-900/40 via-indigo-900/20 to-slate-900 flex flex-col items-center justify-center border-b border-slate-800 group-hover:from-blue-900/50 transition-all relative overflow-hidden">
                                        <div class="absolute -top-10 -right-10 w-32 h-32 bg-blue-500/10 rounded-full blur-2xl pointer-events-none group-hover:scale-125 transition-transform duration-500">
                                        </div>
                                        <img src="{{ asset($project->image_url) }}"
                                            alt="{{ $project->title}}"
                                            class="w-full h-auto object-cover border-b border-slate-800 group-hover:opacity-90 transition-opacity">
                                    </div>
                                @else
                                    <!-- Visual Preview representation (since image is null) -->
                                    <div class="h-50 bg-gradient-to-br from-blue-900/40 via-indigo-900/20 to-slate-900 flex flex-col items-center justify-center p-6 border-b border-slate-800 group-hover:from-blue-900/50 transition-all relative overflow-hidden">
                                        <div class="absolute -top-10 -right-10 w-32 h-32 bg-blue-500/10 rounded-full blur-2xl pointer-events-none group-hover:scale-125 transition-transform duration-500"></div>
                                        <!-- Decorative dynamic graphic representing code/tags -->
                                        <span class="text-4xl filter drop-shadow-[0_0_15px_rgba(56,189,248,0.5)] mb-3">💻</span>
                                        <span class="text-sm font-mono text-blue-400 select-none">&lt;{{ Str::slug($project->title) }}/&gt;</span>
                                    </div>
                                @endif

                                <!-- Content -->
                                <div class="p-6 space-y-4">
                                    <h3 class="text-xl font-bold text-slate-900 group-hover:text-slate-800 transition-colors">
                                        {{ $project->title }}</h3>
                                    <p class="text-slate-800 text-sm leading-relaxed">{{ $project->description }}</p>
                                </div>
                            </div>

                            <div class="px-6 pb-6 pt-2 space-y-4">
                                <!-- Tech stack badges -->
                                <div class="flex flex-wrap gap-1.5">
                                    @foreach ($project->tech_stack as $tech)
                                        <span class="px-2 py-0.5 rounded bg-slate-800 border border-slate-800 text-[10px] text-white font-mono">{{ $tech }}</span>
                                    @endforeach
                                </div>

                                <!-- Actions links -->
                                <div class="flex items-center gap-4 pt-2 border-t border-slate-800/80">
                                    @if ($project->demo_url)
                                        <a href="{{ $project->demo_url }}" target="_blank"
                                            class="flex items-center gap-1.5 text-xs font-semibold text-blue-900 hover:text-blue-400 transition-colors">
                                            <svg class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24"
                                                stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                                            </svg>
                                            Live Demo
                                        </a>
                                    @endif
                                    @if ($project->github_url)
                                        <a href="{{ $project->github_url }}" target="_blank"
                                            class="flex items-center gap-1.5 text-xs font-semibold text-slate-800 hover:text-slate-600 transition-colors">
                                            <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24">
                                                <path fill-rule="evenodd"
                                                    d="M12 2C6.477 2 2 6.477 2 12c0 4.42 2.865 8.166 6.839 9.489.5.092.682-.217.682-.482 0-.237-.008-.866-.013-1.7-2.782.603-3.369-1.34-3.369-1.34-.454-1.156-1.11-1.462-1.11-1.462-.908-.62.069-.608.069-.608 1.003.07 1.531 1.03 1.531 1.03.892 1.529 2.341 1.087 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.11-4.555-4.943 0-1.091.39-1.984 1.029-2.683-.103-.253-.446-1.27.098-2.647 0 0 .84-.269 2.75 1.025A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.294 2.747-1.025 2.747-1.025.546 1.377.203 2.394.1 2.647.64.699 1.028 1.592 1.028 2.683 0 3.842-2.339 4.687-4.566 4.935.359.309.678.919.678 1.852 0 1.336-.012 2.415-.012 2.743 0 .267.18.577.688.479C19.138 20.162 22 16.418 22 12c0-5.523-4.477-10-10-10z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            Source Code
                                        </a>
                                    @endif
                                </div>
                            </div>

                        </div>
                    @empty
                        <div class="col-span-full py-12 text-center text-slate-500">
                            Belum ada project untuk ditampilkan.
                        </div>
                    @endforelse
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section id="contact" class="py-24 px-6 md:px-12 bg-slate-950/20 border-t border-slate-900"
            @intersect="activeSection = 'contact'">
            <div class="max-w-7xl mx-auto">
                <div class="text-center max-w-3xl mx-auto mb-16 space-y-4">
                    <h2 class="text-xs font-semibold text-blue-600 uppercase tracking-widest">Kontak</h2>
                    <p class="text-3xl sm:text-4xl font-extrabold tracking-tight text-slate-900">Hubungi Saya</p>
                    <div class="w-20 h-1 bg-gradient-to-r from-blue-500 to-cyan-500 mx-auto rounded-full"></div>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
                    <!-- Left Column: Contact info cards -->
                    <div class="lg:col-span-5 space-y-6">
                        <h3 class="text-2xl font-bold text-slate-900">Mari Berkolaborasi!</h3>
                        <p class="text-slate-700 leading-relaxed">
                            Apakah Anda memiliki ide project menarik, membutuhkan bantuan pengembangan front-end, atau
                            ingin menanyakan sesuatu? Silakan kirimkan pesan Anda melalui formulir di samping, saya akan
                            berusaha merespons secepat mungkin.
                        </p>

                        <div class="space-y-4 pt-4">
                            <!-- Email Info -->
                            <div class="flex items-center gap-4 p-4 bg-slate-900 border border-slate-800 rounded-xl">
                                <div
                                    class="w-10 h-10 rounded-lg bg-blue-500/10 border border-blue-500/20 flex items-center justify-center text-blue-400 shrink-0">
                                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                    </svg>
                                </div>
                                <div>
                                    <div class="text-[10px] text-slate-500 uppercase tracking-wider">Email Resmi</div>
                                    <div class="text-sm font-semibold text-white">dawwas.khaidirud@gmail.com</div>
                                </div>
                            </div>

                            <!-- Location Info -->
                            <div class="flex items-center gap-4 p-4 bg-slate-900 border border-slate-800 rounded-xl">
                                <div
                                    class="w-10 h-10 rounded-lg bg-blue-500/10 border border-blue-500/20 flex items-center justify-center text-blue-400 shrink-0">
                                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                </div>
                                <div>
                                    <div class="text-[10px] text-slate-500 uppercase tracking-wider">Domisili</div>
                                    <div class="text-sm font-semibold text-white">Indonesia (GMT+7)</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Right Column: AJAX Contact Form -->
                    <div class="lg:col-span-7">
                        <div class="bg-slate-900/60 border border-slate-800/80 rounded-2xl p-6 md:p-8 backdrop-blur-sm shadow-xl"
                            x-data="contactFormHandler()">

                            <form @submit.prevent="submitForm" class="space-y-6">
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                                    <!-- Name Input -->
                                    <div class="space-y-2">
                                        <label for="name"
                                            class="text-xs font-semibold text-slate-300 uppercase tracking-wider">Nama
                                            Lengkap</label>
                                        <input type="text" id="name" name="name" x-model="formData.name"
                                            required
                                            class="w-full px-4 py-3 rounded-xl bg-slate-950 border border-slate-800 text-white placeholder-slate-600 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500/30 transition-all font-sans text-sm">
                                        <span x-show="errors.name" x-text="errors.name"
                                            class="text-xs text-red-400 mt-1 block"></span>
                                    </div>

                                    <!-- Email Input -->
                                    <div class="space-y-2">
                                        <label for="email"
                                            class="text-xs font-semibold text-slate-300 uppercase tracking-wider">Alamat
                                            Email</label>
                                        <input type="email" id="email" name="email" x-model="formData.email"
                                            required
                                            class="w-full px-4 py-3 rounded-xl bg-slate-950 border border-slate-800 text-white placeholder-slate-600 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500/30 transition-all font-sans text-sm">
                                        <span x-show="errors.email" x-text="errors.email"
                                            class="text-xs text-red-400 mt-1 block"></span>
                                    </div>
                                </div>

                                <!-- Subject Input -->
                                <div class="space-y-2">
                                    <label for="subject"
                                        class="text-xs font-semibold text-slate-300 uppercase tracking-wider">Subjek
                                        Pesan (Opsional)</label>
                                    <input type="text" id="subject" name="subject" x-model="formData.subject"
                                        class="w-full px-4 py-3 rounded-xl bg-slate-950 border border-slate-800 text-white placeholder-slate-600 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500/30 transition-all font-sans text-sm">
                                    <span x-show="errors.subject" x-text="errors.subject"
                                        class="text-xs text-red-400 mt-1 block"></span>
                                </div>

                                <!-- Message Input -->
                                <div class="space-y-2">
                                    <label for="message"
                                        class="text-xs font-semibold text-slate-300 uppercase tracking-wider">Isi
                                        Pesan</label>
                                    <textarea id="message" name="message" x-model="formData.message" rows="5" required
                                        class="w-full px-4 py-3 rounded-xl bg-slate-950 border border-slate-800 text-white placeholder-slate-600 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500/30 transition-all font-sans text-sm resize-none"></textarea>
                                    <span x-show="errors.message" x-text="errors.message"
                                        class="text-xs text-red-400 mt-1 block"></span>
                                </div>

                                <!-- Submit Button -->
                                <button type="submit" :disabled="loading"
                                    class="w-full py-4 rounded-xl bg-gradient-to-r from-blue-600 to-cyan-500 text-white font-semibold flex items-center justify-center gap-2 hover:scale-[1.01] active:scale-[0.99] disabled:opacity-50 disabled:cursor-not-allowed disabled:transform-none transition-all shadow-lg shadow-blue-900/20">
                                    <svg x-show="loading" class="animate-spin h-5 w-5 text-white" fill="none"
                                        viewBox="0 0 24 24" style="display: none;">
                                        <circle class="opacity-25" cx="12" cy="12" r="10"
                                            stroke="currentColor" stroke-width="4"></circle>
                                        <path class="opacity-75" fill="currentColor"
                                            d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                                        </path>
                                    </svg>
                                    <span x-text="loading ? 'Mengirim...' : 'Kirim Pesan'">Kirim Pesan</span>
                                </button>

                                <!-- Toast/Response Notification Inside Form -->
                                <div x-show="statusMessage" x-transition:enter="transition ease-out duration-300"
                                    x-transition:enter-start="opacity-0 translate-y-2"
                                    x-transition:enter-end="opacity-100 translate-y-0"
                                    x-transition:leave="transition ease-in duration-200"
                                    x-transition:leave-start="opacity-100 translate-y-0"
                                    x-transition:leave-end="opacity-0 translate-y-2" class="p-4 rounded-xl text-sm"
                                    :class="isSuccess ? 'bg-green-500/10 border border-green-500/20 text-green-400' :
                                        'bg-red-500/10 border border-red-500/20 text-red-400'"
                                    style="display: none;">
                                    <div class="flex items-center gap-2">
                                        <span x-text="isSuccess ? '✅' : '❌'"></span>
                                        <span x-text="statusMessage"></span>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="bg-slate-950 py-12 px-6 text-center text-slate-500 text-sm">
        <div class="max-w-7xl mx-auto flex flex-col md:flex-row items-center justify-between gap-6">
            <div>
                &copy; {{ date('Y') }} Khaidirud Dawwas.
            </div>
            <div class="flex items-center gap-6">
                <a href="https://github.com/khaidirud" target="_blank"
                    class="hover:text-blue-400 transition-colors">GitHub</a>
                {{-- <a href="https://linkedin.com" target="_blank"
                    class="hover:text-blue-400 transition-colors">LinkedIn</a> --}}
                <a href="#home" class="hover:text-white transition-colors">Kembali ke Atas</a>
            </div>
        </div>
    </footer>

    <!-- Inline Form Handler logic -->
    <script>
        function contactFormHandler() {
            return {
                formData: {
                    name: '',
                    email: '',
                    subject: '',
                    message: ''
                },
                errors: {},
                loading: false,
                statusMessage: '',
                isSuccess: false,

                async submitForm() {
                    this.loading = true;
                    this.errors = {};
                    this.statusMessage = '';

                    try {
                        const response = await fetch('/api/contact', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'Accept': 'application/json',
                                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute(
                                    'content')
                            },
                            body: JSON.stringify(this.formData)
                        });

                        const data = await response.json();

                        if (response.ok) {
                            this.isSuccess = true;
                            this.statusMessage = data.message || 'Pesan terkirim dengan sukses!';
                            // Clear form data
                            this.formData = {
                                name: '',
                                email: '',
                                subject: '',
                                message: ''
                            };
                        } else if (response.status === 422) {
                            // Validation error
                            this.isSuccess = false;
                            this.statusMessage = 'Gagal mengirim pesan. Silakan periksa kolom input Anda.';
                            if (data.errors) {
                                for (const key in data.errors) {
                                    this.errors[key] = data.errors[key][0];
                                }
                            }
                        } else {
                            this.isSuccess = false;
                            this.statusMessage = data.message || 'Terjadi kesalahan sistem. Coba lagi nanti.';
                        }
                    } catch (error) {
                        this.isSuccess = false;
                        this.statusMessage = 'Tidak dapat terhubung ke server. Pastikan koneksi internet Anda aktif.';
                    } finally {
                        this.loading = false;
                    }
                }
            }
        }
    </script>
</body>

</html>
