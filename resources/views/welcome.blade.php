<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nurlela Rofiqoh, S.Kom. | Portofolio Sistem Informasi</title>
    <meta name="description" content="Portofolio resmi Nurlela Rofiqoh, S.Kom. - Lulusan S1 Sistem Informasi UIN Syarif Hidayatullah Jakarta spesialis analisis proses bisnis, perancangan arsitektur sistem, dan pengembangan aplikasi web.">

    <!-- Google Fonts: Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'system-ui', '-apple-system', 'BlinkMacSystemFont', 'sans-serif'],
                    },
                    colors: {
                        brand: {
                            50: '#f0f6ff',
                            100: '#e0edff',
                            600: '#1d4ed8',
                            700: '#1e40af',
                            900: '#0f172a',
                        }
                    }
                }
            }
        }
    </script>
    <style>
        body {
            font-family: 'Inter', system-ui, -apple-system, sans-serif;
            background-color: #f8fafc;
            color: #0f172a;
            -webkit-font-smoothing: antialiased;
        }
        .header-glass {
            background: rgba(255, 255, 255, 0.94);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border-bottom: 1px solid #e2e8f0;
        }
        .card-clean {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            box-shadow: 0 1px 3px 0 rgba(15, 23, 42, 0.03);
            transition: all 0.2s ease;
        }
        .card-clean:hover {
            border-color: #cbd5e1;
            box-shadow: 0 4px 12px 0 rgba(15, 23, 42, 0.06);
        }
    </style>
</head>
<body class="bg-slate-50 text-slate-900 antialiased">

    <!-- NAVBAR (Sticky & Formal Header) -->
    <header class="sticky top-0 z-50 header-glass">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16 sm:h-20">
                <!-- Brand with Photo Avatar (Top-Left Profile Image replacing NR initials) -->
                <a href="#" class="flex items-center gap-3 group">
                    <img src="{{ $profileImg }}" 
                         onerror="this.onerror=null; this.src='{{ asset('images/profil_cv.jpg') }}';" 
                         alt="Nurlela Rofiqoh" 
                         class="w-9 h-9 sm:w-10 sm:h-10 rounded-full object-cover border-2 border-slate-300 group-hover:border-blue-600 transition-colors shrink-0">
                    <div class="flex flex-col">
                        <span class="font-bold text-slate-900 tracking-tight text-sm sm:text-base group-hover:text-blue-600 transition-colors">
                            Nurlela Rofiqoh, S.Kom.
                        </span>
                        <span class="text-[10px] sm:text-xs text-slate-500 font-medium tracking-wide uppercase">
                            Sistem Informasi
                        </span>
                    </div>
                </a>

                <!-- Desktop Nav Links -->
                <nav class="hidden md:flex items-center gap-6 lg:gap-8 text-sm font-medium text-slate-600">
                    <a href="#overview" class="hover:text-blue-600 transition-colors">Profil</a>
                    <a href="#projects" class="hover:text-blue-600 transition-colors">Proyek Sistem</a>
                    <a href="#competencies" class="hover:text-blue-600 transition-colors">Keahlian</a>
                    <a href="#education" class="hover:text-blue-600 transition-colors">Pendidikan</a>
                    <a href="#contact" class="hover:text-blue-600 transition-colors">Kontak</a>
                </nav>

                <!-- Actions: GitHub & Contact -->
                <div class="flex items-center gap-2 sm:gap-3">
                    <a href="https://github.com/Nurlelarofiwoh" target="_blank" rel="noopener noreferrer" 
                       class="p-2 sm:p-2.5 rounded-lg text-slate-600 hover:text-slate-900 hover:bg-slate-100 border border-slate-200 transition-all"
                       title="GitHub Profile">
                        <svg class="w-4 h-4 sm:w-5 sm:h-5 fill-current" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.53 1.032 1.53 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"/>
                        </svg>
                    </a>
                    <a href="#contact" 
                       class="inline-flex items-center gap-1.5 px-3 py-2 sm:px-4 sm:py-2.5 rounded-lg text-xs sm:text-sm font-medium text-white bg-slate-900 hover:bg-blue-600 transition-colors">
                        <span>Hubungi Saya</span>
                    </a>
                    <!-- Mobile Hamburger Button -->
                    <button type="button" id="mobile-menu-btn" onclick="toggleMobileMenu()" class="md:hidden p-2 rounded-lg text-slate-600 hover:bg-slate-100 border border-slate-200">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
                    </button>
                </div>
            </div>
            
            <!-- Mobile Menu Dropdown -->
            <div id="mobile-menu" class="hidden md:hidden pb-4 pt-2 space-y-2 border-t border-slate-200 text-sm font-medium text-slate-700">
                <a href="#overview" onclick="toggleMobileMenu()" class="block px-3 py-2 rounded-md hover:bg-slate-100">Profil</a>
                <a href="#projects" onclick="toggleMobileMenu()" class="block px-3 py-2 rounded-md hover:bg-slate-100">Proyek Sistem</a>
                <a href="#competencies" onclick="toggleMobileMenu()" class="block px-3 py-2 rounded-md hover:bg-slate-100">Keahlian</a>
                <a href="#education" onclick="toggleMobileMenu()" class="block px-3 py-2 rounded-md hover:bg-slate-100">Pendidikan</a>
                <a href="#contact" onclick="toggleMobileMenu()" class="block px-3 py-2 rounded-md hover:bg-slate-100">Kontak</a>
            </div>
        </div>
    </header>

    <main>
        <!-- LANDSCAPE HERO BANNER SECTION (Extended Ambient Background for Portrait Photo) -->
        <section class="bg-white border-b border-slate-200">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-4 sm:pt-8 pb-6 sm:pb-10">
                <!-- Landscape Outer Container (16:9 Aspect Ratio) -->
                <div class="relative w-full h-80 sm:h-96 md:h-[420px] lg:h-[460px] rounded-2xl overflow-hidden shadow-sm border border-slate-200 bg-slate-950 flex items-center justify-between">
                    
                    <!-- Layer 1: Expanded Ambient Blurred Background of Portrait Photo -->
                    <div class="absolute inset-0 z-0 overflow-hidden">
                        <img src="{{ $profileImg }}" 
                             onerror="this.onerror=null; this.src='{{ asset('images/profil_cv.jpg') }}';" 
                             alt="" 
                             class="w-full h-full object-cover scale-125 blur-2xl opacity-40 brightness-75">
                        <!-- Overlay Gradients for Corporate Contrast -->
                        <div class="absolute inset-0 bg-gradient-to-r from-slate-950 via-slate-950/85 to-slate-950/40"></div>
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-transparent to-slate-950/40"></div>
                    </div>

                    <!-- Layer 2: Main Landscape Content Grid -->
                    <div class="relative z-10 w-full h-full max-w-7xl mx-auto px-6 sm:px-10 lg:px-12 flex flex-col md:flex-row items-center justify-between gap-6 py-6">
                        
                        <!-- Left Side: Formal Overlay Header & Badge -->
                        <div class="w-full md:w-3/5 text-white space-y-3 sm:space-y-4">
                            <span class="inline-block px-3 py-1 rounded-md bg-blue-600/90 backdrop-blur-md text-[10px] sm:text-xs font-bold uppercase tracking-wider">
                                Sistem Informasi &bull; Business Process Analysis &amp; Web Development
                            </span>
                            <h1 class="text-2xl sm:text-4xl lg:text-5xl font-extrabold tracking-tight text-white leading-tight">
                                Nurlela Rofiqoh, S.Kom.
                            </h1>
                            <p class="text-xs sm:text-base text-slate-200 font-medium leading-relaxed max-w-xl">
                                Universitas Islam Negeri (UIN) Syarif Hidayatullah Jakarta &bull; Bogor, Indonesia
                            </p>
                            <div class="pt-2 flex items-center gap-3">
                                <a href="#overview" class="inline-flex items-center gap-2 px-4 py-2.5 rounded-lg text-xs sm:text-sm font-semibold text-white bg-blue-600 hover:bg-blue-700 transition-colors shadow-sm">
                                    <span>Lihat Profil Lengkap</span>
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                                </a>
                            </div>
                        </div>

                        <!-- Right Side: Uncropped Portrait Photo in Landscape Frame -->
                        <div class="w-full md:w-2/5 h-full flex items-center justify-center md:justify-end">
                            <div class="relative h-[85%] aspect-[3/4] max-h-[380px] rounded-xl overflow-hidden border-2 border-white/20 shadow-2xl bg-slate-900 shrink-0">
                                <img src="{{ $profileImg }}" 
                                     onerror="this.onerror=null; this.src='{{ asset('images/profil_cv.jpg') }}';" 
                                     alt="Nurlela Rofiqoh, S.Kom." 
                                     class="w-full h-full object-cover object-top">
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </section>

        <!-- PROFESSIONAL SUMMARY & BIODATA SECTION -->
        <section id="overview" class="py-12 sm:py-20 bg-white border-b border-slate-200">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-start">
                    
                    <!-- Left: Ringkasan Profesional Formal -->
                    <div class="lg:col-span-7 space-y-4 sm:space-y-6">
                        <div>
                            <span class="text-xs font-bold uppercase tracking-widest text-blue-600 block mb-1">Ringkasan Profesional</span>
                            <h2 class="text-xl sm:text-3xl font-bold text-slate-900 tracking-tight">
                                Integrasi Bisnis, Desain UI/UX, &amp; Teknologi Informasi
                            </h2>
                        </div>

                        <p class="text-sm sm:text-base text-slate-700 leading-relaxed font-normal">
                            Lulusan S1 Sistem Informasi dari Universitas Islam Negeri (UIN) Syarif Hidayatullah Jakarta yang berfokus pada analisis proses bisnis, manajemen produk, dan pengembangan solusi digital berbasis pemecahan masalah (<em>problem-solving</em>). Memiliki kemampuan kuat dalam mengidentifikasi inefisiensi operasional, merancang arsitektur sistem, serta memanfaatkan teknologi modern seperti kecerdasan buatan (AI) untuk membangun aplikasi web fungsional.
                        </p>

                        <div class="p-4 sm:p-5 rounded-xl bg-blue-50/70 border border-blue-200/80 text-blue-950 text-xs sm:text-sm leading-relaxed font-medium">
                            Sangat tertarik untuk menggabungkan aspek bisnis, desain UI/UX, dan teknologi di <strong>Apple Developer Academy</strong>.
                        </div>

                        <div class="pt-2 sm:pt-4 flex flex-wrap gap-3">
                            <a href="#projects" 
                               class="inline-flex items-center gap-2 px-5 py-3 rounded-lg text-xs sm:text-sm font-semibold text-white bg-blue-600 hover:bg-blue-700 transition-colors shadow-sm">
                                <span>Lihat Proyek Pengembangan Sistem</span>
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
                            </a>
                        </div>
                    </div>

                    <!-- Right: Biodata & Formal Contact Card -->
                    <div class="lg:col-span-5">
                        <div class="card-clean rounded-2xl p-5 sm:p-8 space-y-4 sm:space-y-5">
                            <h3 class="text-xs font-bold text-slate-900 border-b border-slate-100 pb-3 uppercase tracking-wider">
                                Informasi Biodata &amp; Kontak Resmi
                            </h3>

                            <div class="space-y-3.5 text-xs sm:text-sm">
                                <div>
                                    <span class="text-[11px] sm:text-xs text-slate-400 font-medium block">Nama Lengkap:</span>
                                    <span class="font-semibold text-slate-800">Nurlela Rofiqoh, S.Kom.</span>
                                </div>

                                <div>
                                    <span class="text-[11px] sm:text-xs text-slate-400 font-medium block">Pendidikan:</span>
                                    <span class="font-semibold text-slate-800">Sarjana Komputer (S.Kom.) dalam Sistem Informasi (2022&ndash;2026)</span>
                                </div>

                                <div>
                                    <span class="text-[11px] sm:text-xs text-slate-400 font-medium block">Alamat Domisili:</span>
                                    <span class="text-slate-700 leading-snug block">
                                        Jl. Perumahan Bumi Indah Pesona no 24 Kel. Kalisuren, Kec. Tajurhalang, Kab. Bogor 16320
                                    </span>
                                </div>

                                <div class="pt-2 border-t border-slate-100 space-y-2">
                                    <div>
                                        <span class="text-[11px] sm:text-xs text-slate-400 font-medium block">Nomor Telepon / WhatsApp:</span>
                                        <a href="https://wa.me/6285880526213" target="_blank" rel="noopener noreferrer" class="font-semibold text-blue-600 hover:underline">
                                            +62 858-8052-6213
                                        </a>
                                    </div>

                                    <div>
                                        <span class="text-[11px] sm:text-xs text-slate-400 font-medium block">Email Resmi:</span>
                                        <a href="mailto:nurlelarofiqohwdy@gmail.com" class="font-semibold text-blue-600 hover:underline">
                                            nurlelarofiqohwdy@gmail.com
                                        </a>
                                    </div>

                                    <div>
                                        <span class="text-[11px] sm:text-xs text-slate-400 font-medium block">GitHub Profile:</span>
                                        <a href="https://github.com/Nurlelarofiwoh" target="_blank" rel="noopener noreferrer" class="font-semibold text-blue-600 hover:underline">
                                            github.com/Nurlelarofiwoh
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- PROYEK PENGEMBANGAN SISTEM & PRODUK SECTION -->
        <section id="projects" class="py-12 sm:py-20 bg-slate-50 border-b border-slate-200">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                
                <div class="max-w-3xl mb-10 sm:mb-16">
                    <span class="text-xs font-bold uppercase tracking-widest text-blue-600 block mb-1">Proyek Pengembangan Sistem &amp; Produk</span>
                    <h2 class="text-xl sm:text-3xl font-bold text-slate-900 tracking-tight">
                        Portofolio Aplikasi Web Enterprise (Production Live)
                    </h2>
                    <p class="mt-2 text-slate-600 text-xs sm:text-sm">
                        Hasil perancangan arsitektur sistem dan aplikasi web berskala enterprise yang dideploy secara live pada infrastruktur cloud Render.
                    </p>
                </div>

                <div class="space-y-8 sm:space-y-12">
                    
                    <!-- PROYEK 1: B2B Partner Management -->
                    <div class="card-clean rounded-2xl p-5 sm:p-8">
                        <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 sm:gap-8 items-start">
                            
                            <!-- Left: Details -->
                            <div class="lg:col-span-7 space-y-4">
                                <div class="flex flex-wrap items-center justify-between gap-2">
                                    <span class="px-2.5 py-1 rounded bg-blue-50 border border-blue-200 text-blue-700 text-[11px] sm:text-xs font-semibold">
                                        Web Developer &bull; Juli 2026
                                    </span>
                                    <span class="text-[11px] sm:text-xs font-semibold text-emerald-600 flex items-center gap-1">
                                        <span class="w-2 h-2 rounded-full bg-emerald-500"></span> Live Demo
                                    </span>
                                </div>

                                <h3 class="text-lg sm:text-2xl font-bold text-slate-900">
                                    Platform Pengelolaan &amp; Rekomendasi Mitra B2B
                                </h3>

                                <p class="text-xs sm:text-sm text-slate-600 leading-relaxed italic">
                                    Dirancang sebagai solusi digital untuk mengatasi kebocoran cashflow dan inefisiensi waktu operasional pada perusahaan jasa mitra.
                                </p>

                                <ul class="space-y-2 text-xs sm:text-sm text-slate-700 pt-1">
                                    <li class="flex items-start gap-2">
                                        <span class="text-blue-600 font-bold mt-0.5">&bull;</span>
                                        <span>Melakukan analisis proses bisnis manual dan merancang arsitektur database untuk melacak status aktif serta jenis mitra secara terorganisir.</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <span class="text-blue-600 font-bold mt-0.5">&bull;</span>
                                        <span><strong>Auto-Recommendation System:</strong> Mengembangkan fitur rekomendasi menggunakan logika algoritma pencocokan untuk memangkas waktu pemilihan mitra yang sesuai dengan kebutuhan klien.</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <span class="text-blue-600 font-bold mt-0.5">&bull;</span>
                                        <span><strong>Automated Billing:</strong> Mengintegrasikan fitur penagihan otomatis untuk mengamankan retensi komisi perusahaan dan mengoptimalkan cashflow bisnis.</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <span class="text-blue-600 font-bold mt-0.5">&bull;</span>
                                        <span><strong>Auto-Send E-Survey:</strong> Merancang alur otomatisasi pasca-proyek melalui pengiriman e-survey otomatis ke klien guna mengumpulkan data evaluasi dan meningkatkan value layanan perusahaan.</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <span class="text-blue-600 font-bold mt-0.5">&bull;</span>
                                        <span>Memanfaatkan teknologi AI (Artificial Intelligence) untuk mempercepat efisiensi koding, melakukan debugging instruksi, dan merancang prototipe web operasional.</span>
                                    </li>
                                </ul>

                                <div class="pt-3">
                                    <a href="https://sistem-vendor-management.onrender.com" target="_blank" rel="noopener noreferrer" 
                                       class="inline-flex items-center gap-2 px-4 py-2.5 rounded-lg font-medium text-xs sm:text-sm text-white bg-blue-600 hover:bg-blue-700 transition-colors">
                                        <span>Kunjungi Live Demo Platform B2B</span>
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
                                    </a>
                                </div>
                            </div>

                            <!-- Right: Visual UI Mockup -->
                            <div class="lg:col-span-5">
                                <div class="rounded-xl border border-slate-300 bg-slate-900 text-white overflow-hidden shadow-md">
                                    <div class="px-3.5 py-2 bg-slate-800 border-b border-slate-700 flex items-center justify-between text-xs">
                                        <div class="flex items-center gap-1.5">
                                            <span class="w-2.5 h-2.5 rounded-full bg-rose-500"></span>
                                            <span class="w-2.5 h-2.5 rounded-full bg-amber-500"></span>
                                            <span class="w-2.5 h-2.5 rounded-full bg-emerald-500"></span>
                                        </div>
                                        <span class="text-slate-400 font-mono text-[10px] sm:text-[11px] truncate">sistem-vendor-management.onrender.com</span>
                                    </div>
                                    <div class="p-3.5 sm:p-4 space-y-3 text-xs">
                                        <div class="grid grid-cols-2 gap-2">
                                            <div class="p-2.5 rounded bg-slate-800 border border-slate-700">
                                                <div class="text-slate-400 text-[10px]">Total Mitra B2B</div>
                                                <div class="text-sm sm:text-base font-bold text-white mt-0.5">128 Mitra</div>
                                            </div>
                                            <div class="p-2.5 rounded bg-slate-800 border border-slate-700">
                                                <div class="text-slate-400 text-[10px]">Akurasi Matching</div>
                                                <div class="text-sm sm:text-base font-bold text-blue-400 mt-0.5">98.4% Match</div>
                                            </div>
                                        </div>

                                        <div class="p-3 rounded bg-slate-800/80 border border-slate-700 space-y-2">
                                            <div class="text-slate-300 font-semibold text-[11px]">Simulasi Auto-Recommendation:</div>
                                            <div class="p-2 rounded bg-slate-900 border border-slate-700/60 flex justify-between items-center text-[10px]">
                                                <span>PT Logistics Utama</span>
                                                <span class="text-emerald-400 font-bold">Skor 96%</span>
                                            </div>
                                            <div class="p-2 rounded bg-slate-900 border border-slate-700/60 flex justify-between items-center text-[10px]">
                                                <span>CV Solusi Transport</span>
                                                <span class="text-blue-400 font-bold">Skor 92%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- PROYEK 2: Financial & Invoice System -->
                    <div class="card-clean rounded-2xl p-5 sm:p-8">
                        <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 sm:gap-8 items-start">
                            
                            <!-- Left: Details -->
                            <div class="lg:col-span-7 space-y-4">
                                <div class="flex flex-wrap items-center justify-between gap-2">
                                    <span class="px-2.5 py-1 rounded bg-blue-50 border border-blue-200 text-blue-700 text-[11px] sm:text-xs font-semibold">
                                        Web Developer &bull; Maret 2026
                                    </span>
                                    <span class="text-[11px] sm:text-xs font-semibold text-emerald-600 flex items-center gap-1">
                                        <span class="w-2 h-2 rounded-full bg-emerald-500"></span> Live Demo
                                    </span>
                                </div>

                                <h3 class="text-lg sm:text-2xl font-bold text-slate-900">
                                    Sistem Manajemen Finansial &amp; Invoice Digital
                                </h3>

                                <ul class="space-y-2 text-xs sm:text-sm text-slate-700 pt-1">
                                    <li class="flex items-start gap-2">
                                        <span class="text-blue-600 font-bold mt-0.5">&bull;</span>
                                        <span>Membangun platform kalkulasi finansial digital untuk menggantikan pencatatan manual guna meminimalisir risiko human-error dalam perhitungan biaya dan perubahan harga.</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <span class="text-blue-600 font-bold mt-0.5">&bull;</span>
                                        <span>Merancang dasbor visualisasi data terintegrasi yang menghasilkan Grafik Profit secara real-time untuk memantau kesehatan bisnis dan mengamankan bukti transaksi.</span>
                                    </li>
                                    <li class="flex items-start gap-2">
                                        <span class="text-blue-600 font-bold mt-0.5">&bull;</span>
                                        <span>Menerapkan prinsip kolaborasi AI dalam menyusun alur logika aplikasi dan memastikan efisiensi kode program dari hulu ke hilir.</span>
                                    </li>
                                </ul>

                                <div class="pt-3">
                                    <a href="https://financial-invoice-system.onrender.com" target="_blank" rel="noopener noreferrer" 
                                       class="inline-flex items-center gap-2 px-4 py-2.5 rounded-lg font-medium text-xs sm:text-sm text-white bg-blue-600 hover:bg-blue-700 transition-colors">
                                        <span>Kunjungi Live Demo Sistem Finansial</span>
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
                                    </a>
                                </div>
                            </div>

                            <!-- Right: Visual UI Mockup -->
                            <div class="lg:col-span-5">
                                <div class="rounded-xl border border-slate-300 bg-slate-900 text-white overflow-hidden shadow-md">
                                    <div class="px-3.5 py-2 bg-slate-800 border-b border-slate-700 flex items-center justify-between text-xs">
                                        <div class="flex items-center gap-1.5">
                                            <span class="w-2.5 h-2.5 rounded-full bg-rose-500"></span>
                                            <span class="w-2.5 h-2.5 rounded-full bg-amber-500"></span>
                                            <span class="w-2.5 h-2.5 rounded-full bg-emerald-500"></span>
                                        </div>
                                        <span class="text-slate-400 font-mono text-[10px] sm:text-[11px] truncate">financial-invoice-system.onrender.com</span>
                                    </div>
                                    <div class="p-3.5 sm:p-4 space-y-3 text-xs">
                                        <div class="p-3 rounded bg-slate-800 border border-slate-700">
                                            <div class="flex justify-between items-center mb-2">
                                                <span class="text-slate-400 text-[10px]">Real-Time Profit Graph</span>
                                                <span class="text-emerald-400 text-[10px] font-bold">+28.5% Growth</span>
                                            </div>
                                            <div class="h-16 w-full flex items-end justify-between gap-1 pt-2">
                                                <div class="w-1/4 bg-blue-600/40 rounded-t h-[40%]"></div>
                                                <div class="w-1/4 bg-blue-600/60 rounded-t h-[60%]"></div>
                                                <div class="w-1/4 bg-blue-600/80 rounded-t h-[75%]"></div>
                                                <div class="w-1/4 bg-emerald-500 rounded-t h-[95%]"></div>
                                            </div>
                                        </div>

                                        <div class="p-2.5 rounded bg-slate-800 border border-slate-700 flex justify-between items-center text-[10px]">
                                            <span>Faktur Digital #INV-2026-089</span>
                                            <span class="text-emerald-400 font-bold">Lunas (PDF Issued)</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- KEAHLIAN & KOMPETENSI SECTION -->
        <section id="competencies" class="py-12 sm:py-20 bg-white border-b border-slate-200">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                
                <div class="max-w-3xl mb-10 sm:mb-16">
                    <span class="text-xs font-bold uppercase tracking-widest text-blue-600 block mb-1">Keahlian &amp; Kompetensi</span>
                    <h2 class="text-xl sm:text-3xl font-bold text-slate-900 tracking-tight">
                        Spesialisasi Bisnis &amp; Teknologi
                    </h2>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 sm:gap-8">
                    <!-- Business & Product -->
                    <div class="card-clean p-6 sm:p-8 rounded-2xl">
                        <h3 class="text-base sm:text-lg font-bold text-slate-900 border-b border-slate-200 pb-3 mb-4 flex items-center gap-2">
                            <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg>
                            <span>Business &amp; Product</span>
                        </h3>
                        <ul class="space-y-2.5 text-xs sm:text-sm text-slate-700 font-medium">
                            <li class="flex items-center justify-between p-3 rounded-lg bg-slate-50 border border-slate-200">
                                <span>Business Process Analysis</span>
                                <span class="text-xs font-semibold text-blue-600">Spesialisasi</span>
                            </li>
                            <li class="flex items-center justify-between p-3 rounded-lg bg-slate-50 border border-slate-200">
                                <span>Product Management</span>
                                <span class="text-xs font-semibold text-blue-600">Spesialisasi</span>
                            </li>
                            <li class="flex items-center justify-between p-3 rounded-lg bg-slate-50 border border-slate-200">
                                <span>Requirements Gathering</span>
                                <span class="text-xs font-semibold text-blue-600">Spesialisasi</span>
                            </li>
                            <li class="flex items-center justify-between p-3 rounded-lg bg-slate-50 border border-slate-200">
                                <span>UI/UX Wireframing</span>
                                <span class="text-xs font-semibold text-blue-600">Spesialisasi</span>
                            </li>
                            <li class="flex items-center justify-between p-3 rounded-lg bg-slate-50 border border-slate-200">
                                <span>Data Visualization</span>
                                <span class="text-xs font-semibold text-blue-600">Spesialisasi</span>
                            </li>
                        </ul>
                    </div>

                    <!-- Technology & Tools -->
                    <div class="card-clean p-6 sm:p-8 rounded-2xl">
                        <h3 class="text-base sm:text-lg font-bold text-slate-900 border-b border-slate-200 pb-3 mb-4 flex items-center gap-2">
                            <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/></svg>
                            <span>Technology &amp; Tools</span>
                        </h3>
                        <ul class="space-y-2.5 text-xs sm:text-sm text-slate-700 font-medium">
                            <li class="flex items-center justify-between p-3 rounded-lg bg-slate-50 border border-slate-200">
                                <span>AI-Assisted Development (Prompt Engineering)</span>
                                <span class="text-xs font-semibold text-emerald-600">Spesialis</span>
                            </li>
                            <li class="flex items-center justify-between p-3 rounded-lg bg-slate-50 border border-slate-200">
                                <span>Web Development Foundations</span>
                                <span class="text-xs font-semibold text-slate-600">Utama</span>
                            </li>
                            <li class="flex items-center justify-between p-3 rounded-lg bg-slate-50 border border-slate-200">
                                <span>Database Management Systems</span>
                                <span class="text-xs font-semibold text-slate-600">Utama</span>
                            </li>
                            <li class="flex items-center justify-between p-3 rounded-lg bg-slate-50 border border-slate-200">
                                <span>MS Office / Visio</span>
                                <span class="text-xs font-semibold text-slate-600">Mahir</span>
                            </li>
                            <li class="flex items-center justify-between p-3 rounded-lg bg-slate-50 border border-slate-200">
                                <span>Notion / Canva</span>
                                <span class="text-xs font-semibold text-slate-600">Mahir</span>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </section>

        <!-- PENDIDIKAN SECTION -->
        <section id="education" class="py-12 sm:py-20 bg-slate-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                
                <div class="max-w-3xl mb-8 sm:mb-12">
                    <span class="text-xs font-bold uppercase tracking-widest text-blue-600 block mb-1">Pendidikan Akademis</span>
                    <h2 class="text-xl sm:text-3xl font-bold text-slate-900 tracking-tight">
                        Riwayat Studi &amp; Perguruan Tinggi
                    </h2>
                </div>

                <div class="max-w-4xl card-clean rounded-2xl p-6 sm:p-8">
                    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-2 sm:gap-4 border-b border-slate-200 pb-4 mb-4">
                        <div>
                            <h3 class="text-base sm:text-xl font-bold text-slate-900">Universitas Islam Negeri (UIN) Syarif Hidayatullah Jakarta</h3>
                            <p class="text-xs sm:text-sm font-semibold text-blue-600 mt-0.5">S1 Sistem Informasi (Sarjana Komputer)</p>
                        </div>
                        <span class="px-3 py-1 rounded bg-slate-900 text-white text-xs font-semibold self-start sm:self-auto">
                            2022 &ndash; 2026
                        </span>
                    </div>
                    <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                        Fokus akademis pada analisis dan perancangan sistem informasi enterprise, metodologi manajemen produk digital, arsitektur database, serta efisiensi solusi perangkat lunak berbasis pemecahan masalah.
                    </p>
                </div>

            </div>
        </section>
    </main>

    <!-- FOOTER & KONTAK -->
    <footer id="contact" class="bg-slate-900 text-white py-12 sm:py-16 border-t border-slate-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-8 mb-12">
                
                <div class="lg:col-span-6 space-y-3">
                    <div class="flex items-center gap-3">
                        <img src="{{ $profileImg }}" 
                             onerror="this.onerror=null; this.src='{{ asset('images/profil_cv.jpg') }}';" 
                             alt="Nurlela Rofiqoh" 
                             class="w-9 h-9 rounded-full object-cover border border-slate-700">
                        <span class="font-bold text-base sm:text-lg text-white">Nurlela Rofiqoh, S.Kom.</span>
                    </div>
                    <p class="text-xs sm:text-sm text-slate-400 max-w-md leading-relaxed">
                        Jl. Perumahan Bumi Indah Pesona no 24 Kel. Kalisuren, Kec. Tajurhalang, Kab. Bogor 16320
                    </p>
                </div>

                <div class="lg:col-span-6 space-y-2 text-xs sm:text-sm text-slate-300 lg:text-right">
                    <div>
                        <span class="text-slate-400">Telepon / WA:</span> 
                        <a href="https://wa.me/6285880526213" target="_blank" rel="noopener noreferrer" class="hover:text-blue-400 font-semibold ml-1">+62 858-8052-6213</a>
                    </div>
                    <div>
                        <span class="text-slate-400">Email:</span> 
                        <a href="mailto:nurlelarofiqohwdy@gmail.com" class="hover:text-blue-400 font-semibold ml-1">nurlelarofiqohwdy@gmail.com</a>
                    </div>
                    <div>
                        <span class="text-slate-400">GitHub:</span> 
                        <a href="https://github.com/Nurlelarofiwoh" target="_blank" rel="noopener noreferrer" class="hover:text-blue-400 font-semibold ml-1">github.com/Nurlelarofiwoh</a>
                    </div>
                </div>

            </div>

            <div class="pt-8 border-t border-slate-800 text-center text-xs text-slate-500">
                &copy; {{ date('Y') }} Nurlela Rofiqoh, S.Kom. All rights reserved.
            </div>
        </div>
    </footer>

    <script>
        function toggleMobileMenu() {
            var menu = document.getElementById('mobile-menu');
            if (menu) {
                menu.classList.toggle('hidden');
            }
        }
    </script>
</body>
</html>
