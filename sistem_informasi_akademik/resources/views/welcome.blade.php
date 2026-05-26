<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Akademik - Profil & Deskripsi</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brand: {
                            50: '#fff1f2',   /* Soft pink background */
                            100: '#ffe4e6',  /* Light pink */
                            200: '#fecdd3',  /* Border pink */
                            300: '#fda4af',  /* Medium pink accent */
                            500: '#f43f5e',  /* Primary pink */
                            600: '#e11d48',  /* Darker pink */
                            700: '#be123c',  /* Deep pink */
                            900: '#881337',  /* Crimson pink */
                        }
                    }
                }
            }
        }
    </script>
    <style>
        /* Custom scrollbar pink */
        ::-webkit-scrollbar {
            width: 8px;
        }
        ::-webkit-scrollbar-track {
            background: #fff1f2;
        }
        ::-webkit-scrollbar-thumb {
            background: #fecdd3;
            border-radius: 4px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #fda4af;
        }
    </style>
</head>
<body class="bg-rose-50/20 text-slate-800 font-sans antialiased min-h-screen flex flex-col">

    <!-- Header / Navigation -->
    <header class="sticky top-0 z-50 bg-white/95 backdrop-blur-md border-b border-brand-100 shadow-sm">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 h-16 flex items-center justify-between">
            <div class="flex items-center gap-2">
                <div class="p-2 bg-brand-500 rounded-lg text-white">
                    <!-- Logo Icon SVG -->
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                    </svg>
                </div>
                <span class="font-bold text-lg text-brand-900 tracking-tight">AKADEMIK <span class="text-brand-500"></span></span>
            </div>
            <nav class="flex gap-4 sm:gap-6">
                <a href="#profil" class="text-sm font-semibold text-slate-600 hover:text-brand-600 transition-colors">Profil</a>
                <a href="#deskripsi" class="text-sm font-semibold text-slate-600 hover:text-brand-600 transition-colors">Deskripsi</a>
                <a href="#fitur" class="text-sm font-semibold text-slate-600 hover:text-brand-600 transition-colors">Fitur & Manfaat</a>
            </nav>
        </div>
    </header>

    <main class="flex-grow max-w-6xl w-full mx-auto px-4 sm:px-6 lg:px-8 py-10 space-y-16">

        <!-- Hero Section -->
        <section class="text-center py-10 md:py-16 bg-gradient-to-r from-brand-900 via-brand-600 to-brand-500 rounded-3xl text-white shadow-xl px-6 relative overflow-hidden">
            <div class="absolute -right-10 -bottom-10 w-40 h-40 bg-white/10 rounded-full blur-2xl"></div>
            <div class="absolute -left-10 -top-10 w-40 h-40 bg-white/10 rounded-full blur-2xl"></div>
            
            <div class="relative z-10 max-w-2xl mx-auto space-y-4">
                <span class="px-3 py-1 bg-white/20 text-xs font-semibold uppercase tracking-wider rounded-full text-brand-50">Portal Akademik Terintegrasi</span>
                <h1 class="text-3xl md:text-5xl font-extrabold tracking-tight">Sistem Informasi Akademik</h1>
                <p class="text-brand-100 text-sm md:text-base font-light leading-relaxed">
                    Aplikasi manajemen data terpadu berbasis web yang dirancang untuk mempermudah administrasi kemahasiswaan, profil pengajar, serta integrasi hak akses user dalam satu sistem yang dinamis.
                </p>
                <div class="pt-4 flex justify-center gap-3 flex-wrap">
                    <a href="#profil" class="px-5 py-2.5 bg-white text-brand-900 font-bold rounded-lg shadow hover:bg-brand-50 transition-all text-sm">Lihat Profil</a>
                    <a href="#deskripsi" class="px-5 py-2.5 bg-brand-700 text-white font-bold rounded-lg border border-brand-500 hover:bg-brand-600 transition-all text-sm">Pelajari Aplikasi</a>
                </div>
            </div>
        </section>

        <!-- Section: Profil Diri -->
        <section id="profil" class="scroll-mt-20">
            <div class="text-center mb-8">
                <h2 class="text-2xl md:text-3xl font-bold text-slate-900">Profil Pembuat Aplikasi</h2>
                <div class="w-12 h-1 bg-brand-500 mx-auto mt-2 rounded-full"></div>
            </div>

            <div class="max-w-3xl mx-auto bg-white rounded-2xl shadow-md border border-brand-100 overflow-hidden md:flex">
                <!-- Avatar Pink Hijab -->
                <div class="md:w-1/3 bg-brand-50/50 p-8 flex flex-col items-center justify-center border-b md:border-b-0 md:border-r border-brand-100/50">
                    <div class="mb-4">
                        <!-- Custom SVG Cartoon Hijab Avatar -->
                        <svg class="w-28 h-28 rounded-full shadow-inner border-4 border-brand-200 bg-white" viewBox="0 0 128 128" xmlns="http://www.w3.org/2000/svg">
                            <!-- Background -->
                            <circle cx="64" cy="64" r="64" fill="#fff1f2"/>
                            
                            <!-- Hijab draping on chest / Bahu -->
                            <path d="M24 108 C 24 85, 40 76, 64 76 C 88 76, 104 85, 104 108 Z" fill="#f43f5e"/>
                            <!-- Hijab fold accent -->
                            <path d="M46 88 L 64 116 L 82 88 Z" fill="#be123c"/>
                            
                            <!-- Face / Wajah -->
                            <path d="M42 58 C 42 42, 50 34, 64 34 C 78 34, 86 42, 86 58 C 86 72, 78 78, 64 78 C 50 78, 42 72, 42 58 Z" fill="#ffedd5"/>
                            
                            <!-- Inner Hijab / Ciput -->
                            <path d="M47 43 C 54 36, 74 36, 81 43" fill="none" stroke="#be123c" stroke-width="5" stroke-linecap="round"/>
                            
                            <!-- Eyes / Mata -->
                            <circle cx="53" cy="54" r="2.5" fill="#1e293b"/>
                            <circle cx="75" cy="54" r="2.5" fill="#1e293b"/>
                            
                            <!-- Blush / Pipi Merah -->
                            <circle cx="49" cy="60" r="3" fill="#fecdd3" opacity="0.8"/>
                            <circle cx="79" cy="60" r="3" fill="#fecdd3" opacity="0.8"/>
                            
                            <!-- Smile / Senyum -->
                            <path d="M60 62 Q 64 66 68 62" stroke="#1e293b" stroke-width="2" fill="none" stroke-linecap="round"/>
                            
                            <!-- Hijab Frame / Kerudung Luar -->
                            <path d="M38 54 C 38 32, 48 24, 64 24 C 80 24, 90 32, 90 54 C 90 74, 80 84, 64 84 C 48 84, 38 74, 38 54 Z" fill="none" stroke="#f43f5e" stroke-width="5"/>
                            <path d="M41 72 C 49 83, 79 83, 87 72" fill="none" stroke="#e11d48" stroke-width="3"/>
                        </svg>
                    </div>
                    <h3 class="font-bold text-slate-800 text-lg text-center">Zalfa Zahira</h3>
                    <p class="text-brand-600 text-xs font-semibold bg-brand-100/50 px-2.5 py-0.5 rounded-full mt-1">Developer & Mahasiswa</p>
                </div>
                <!-- Details -->
                <div class="md:w-2/3 p-8 space-y-6">
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <div class="space-y-1">
                            <span class="text-xs text-slate-400 font-semibold uppercase tracking-wider">Nama Lengkap</span>
                            <p class="text-slate-800 font-medium">Zalfa Zahira</p>
                        </div>
                        <div class="space-y-1">
                            <span class="text-xs text-slate-400 font-semibold uppercase tracking-wider">Nomor Induk Mahasiswa (NIM)</span>
                            <p class="text-slate-800 font-medium font-mono">1324089</p>
                        </div>
                        <div class="space-y-1">
                            <span class="text-xs text-slate-400 font-semibold uppercase tracking-wider">Program Studi</span>
                            <p class="text-slate-800 font-medium">Sistem Informasi Industri Otomotif (SIIO)</p>
                        </div>
                        <div class="space-y-1">
                            <span class="text-xs text-slate-400 font-semibold uppercase tracking-wider">Status Keaktifan</span>
                            <p class="inline-flex items-center gap-1.5 text-xs font-semibold text-brand-700 bg-brand-50 px-2.5 py-0.5 rounded-full">
                                <span class="w-1.5 h-1.5 rounded-full bg-brand-500 animate-pulse"></span>
                                Mahasiswa Aktif
                            </p>
                        </div>
                    </div>
                    <hr class="border-slate-100">
                    <div class="flex items-center gap-4 text-slate-500 text-sm flex-wrap">
                        <span class="flex items-center gap-1">
                            <svg class="w-4 h-4 text-brand-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L22 8m-9 11h3m-3 .5V17m0 2.5a1.5 1.5 0 11-3 0V12H9l2-2 2 2h-2z"/></svg>
                            zalfa@example.com
                        </span>
                        <span class="flex items-center gap-1">
                            <svg class="w-4 h-4 text-brand-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                            Politeknik STMI Jakarta
                        </span>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section: Deskripsi Aplikasi -->
        <section id="deskripsi" class="scroll-mt-20">
            <div class="text-center mb-8">
                <h2 class="text-2xl md:text-3xl font-bold text-slate-900">Deskripsi Aplikasi</h2>
                <div class="w-12 h-1 bg-brand-500 mx-auto mt-2 rounded-full"></div>
            </div>

            <div class="bg-white rounded-2xl shadow-md border border-brand-100 p-6 md:p-10 space-y-8">
                <div class="flex flex-col md:flex-row gap-8 items-center">
                    <div class="md:w-1/2 space-y-4">
                        <div class="inline-flex items-center gap-2 px-3 py-1 bg-brand-50 text-brand-600 text-xs font-semibold rounded-full">
                            <span>Sistem Informasi Akademik v1.0</span>
                        </div>
                        <h3 class="text-2xl font-bold text-slate-800 leading-tight">Teknologi Laravel untuk Efisiensi Pendidikan</h3>
                        <p class="text-slate-600 leading-relaxed text-sm md:text-base">
                            Sistem Informasi Akademik merupakan aplikasi berbasis web yang dikembangkan menggunakan framework <strong>Laravel</strong>. Aplikasi ini difungsikan khusus sebagai pusat pengelolaan data mahasiswa dan dosen secara digital, terstruktur, serta memfasilitasi kebutuhan manajemen hak akses login pengguna sistem secara real-time.
                        </p>
                    </div>
                    <div class="md:w-1/2 w-full grid grid-cols-2 gap-4">
                        <!-- Stat Card 1 -->
                        <div class="p-5 bg-gradient-to-br from-brand-50 to-white border border-brand-100 rounded-xl space-y-2">
                            <span class="text-brand-600 font-bold text-3xl">CRUD</span>
                            <p class="font-semibold text-slate-800 text-sm">Kemudahan Kelola</p>
                            <p class="text-xs text-slate-500">Operasi tambah, edit, dan hapus data yang fleksibel.</p>
                        </div>
                        <!-- Stat Card 2 -->
                        <div class="p-5 bg-gradient-to-br from-rose-50 to-white border border-rose-100 rounded-xl space-y-2">
                            <span class="text-brand-500 font-bold text-3xl">Secure</span>
                            <p class="font-semibold text-slate-800 text-sm">Keamanan Akun</p>
                            <p class="text-xs text-slate-500">Enkripsi andal Laravel untuk melindungi data user.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section: Fitur, Manfaat, & Kegunaan -->
        <section id="fitur" class="scroll-mt-20">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Kolom Fitur -->
                <div class="bg-white rounded-2xl shadow-md border border-brand-100 p-6 space-y-6 flex flex-col justify-between">
                    <div>
                        <div class="w-10 h-10 bg-brand-100 rounded-xl text-brand-600 flex items-center justify-center mb-4">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"/></svg>
                        </div>
                        <h3 class="font-bold text-slate-800 text-lg mb-2">Fitur Utama</h3>
                        <p class="text-xs text-slate-500 mb-4">Fungsionalitas utama yang disematkan dalam aplikasi:</p>
                        <ul class="space-y-3">
                            <li class="flex items-start gap-2 text-slate-600 text-sm">
                                <span class="text-brand-500 mt-1">✔</span>
                                <span><strong>Kelola Mahasiswa:</strong> Integrasi pencatatan biodata, NIM, dan angkatan.</span>
                            </li>
                            <li class="flex items-start gap-2 text-slate-600 text-sm">
                                <span class="text-brand-500 mt-1">✔</span>
                                <span><strong>Kelola Dosen:</strong> Integrasi profil dosen pengampu, NIDN, dan mata kuliah.</span>
                            </li>
                            <li class="flex items-start gap-2 text-slate-600 text-sm">
                                <span class="text-brand-500 mt-1">✔</span>
                                <span><strong>Manajemen User:</strong> Mengatur username, hak akses (admin, mahasiswa, dosen), serta status login.</span>
                            </li>
                            <li class="flex items-start gap-2 text-slate-600 text-sm">
                                <span class="text-brand-500 mt-1">✔</span>
                                <span><strong>CRUD Dinamis:</strong> Memproses input data baru, mengubah detail, dan menghapus record secara aman.</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Kolom Manfaat -->
                <div class="bg-white rounded-2xl shadow-md border border-brand-100 p-6 space-y-6 flex flex-col justify-between">
                    <div>
                        <div class="w-10 h-10 bg-pink-100 rounded-xl text-brand-600 flex items-center justify-center mb-4">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/></svg>
                        </div>
                        <h3 class="font-bold text-slate-800 text-lg mb-2">Manfaat Sistem</h3>
                        <p class="text-xs text-slate-500 mb-4">Dampak positif implementasi sistem secara langsung:</p>
                        <ul class="space-y-3">
                            <li class="flex items-start gap-2 text-slate-600 text-sm">
                                <span class="text-brand-500 mt-1">✦</span>
                                <span><strong>Sentralisasi Informasi:</strong> Mencegah data terpisah-pisah dalam file fisik maupun spreadsheet offline.</span>
                            </li>
                            <li class="flex items-start gap-2 text-slate-600 text-sm">
                                <span class="text-brand-500 mt-1">✦</span>
                                <span><strong>Efisien Waktu:</strong> Mempercepat proses pencarian, penyaringan, dan pengkinian data.</span>
                            </li>
                            <li class="flex items-start gap-2 text-slate-600 text-sm">
                                <span class="text-brand-500 mt-1">✦</span>
                                <span><strong>Minim Human Error:</strong> Validasi ketat pada framework Laravel memitigasi risiko data duplikat atau salah ketik.</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Kolom Kegunaan -->
                <div class="bg-white rounded-2xl shadow-md border border-brand-100 p-6 space-y-6 flex flex-col justify-between">
                    <div>
                        <div class="w-10 h-10 bg-rose-100 rounded-xl text-brand-600 flex items-center justify-center mb-4">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                        </div>
                        <h3 class="font-bold text-slate-800 text-lg mb-2">Kegunaan Praktis</h3>
                        <p class="text-xs text-slate-500 mb-4">Tujuan penggunaan praktis sehari-hari:</p>
                        <ul class="space-y-3">
                            <li class="flex items-start gap-2 text-slate-600 text-sm">
                                <span class="text-brand-500 mt-1">●</span>
                                <span><strong>Bagi Administrator:</strong> Mempermudah rekapitulasi data akademik tiap semester.</span>
                            </li>
                            <li class="flex items-start gap-2 text-slate-600 text-sm">
                                <span class="text-brand-500 mt-1">●</span>
                                <span><strong>Bagi Civitas Academica:</strong> Portal transparan untuk mencocokkan kredensial login dengan hak akses di kampus.</span>
                            </li>
                            <li class="flex items-start gap-2 text-slate-600 text-sm">
                                <span class="text-brand-500 mt-1">●</span>
                                <span><strong>Pelaporan Instan:</strong> Menghasilkan data siap pakai untuk pelaporan status akreditasi atau administrasi internal.</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <!-- Footer -->
    <footer class="bg-rose-950 text-rose-200 py-8 border-t border-brand-900">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col md:flex-row items-center justify-between gap-4">
            <div class="text-center md:text-left">
                <p class="font-semibold text-white">Zalfa Zahira — NIM 1324089</p>
                <p class="text-xs mt-1">Sistem Informasi Industri Otomotif (SIIO)</p>
            </div>
            <div class="text-xs text-center md:text-right text-rose-300">
                &copy; 2026 Sistem Informasi Akademik. All rights reserved.
            </div>
        </div>
    </footer>

</body>
</html>