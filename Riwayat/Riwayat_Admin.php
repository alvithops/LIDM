<!DOCTYPE html>

<html class="dark" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Sharia Lab Admin - Manajemen Riwayat &amp; Evaluasi</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&amp;family=Inter:wght@400;500;600;700&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }

        .glass-card {
            background: rgba(34, 34, 34, 0.6);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(142, 213, 185, 0.1);
        }

        .sharia-glow-primary {
            box-shadow: 0 0 20px rgba(142, 213, 185, 0.1);
        }

        .sharia-glow-secondary {
            box-shadow: 0 0 20px rgba(255, 183, 135, 0.1);
        }

        ::-webkit-scrollbar {
            width: 6px;
        }

        ::-webkit-scrollbar-track {
            background: #131313;
        }

        ::-webkit-scrollbar-thumb {
            background: #3f4944;
            border-radius: 10px;
        }
    </style>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "on-error": "#690005",
                        "surface-container-highest": "#353534",
                        "on-secondary-container": "#ffede3",
                        "on-tertiary": "#422d00",
                        "on-primary-fixed-variant": "#00513d",
                        "tertiary-container": "#674d1a",
                        "on-secondary": "#512400",
                        "on-surface": "#e5e2e1",
                        "on-tertiary-fixed": "#271900",
                        "primary-fixed-dim": "#8ed5b9",
                        "on-secondary-fixed-variant": "#733600",
                        "secondary-fixed-dim": "#ffb787",
                        "surface-container-lowest": "#0e0e0e",
                        "secondary-container": "#ad5401",
                        "outline-variant": "#3f4944",
                        "primary": "#8ed5b9",
                        "inverse-on-surface": "#313030",
                        "sharia-green-deep": "#083B2D",
                        "tertiary-fixed": "#ffdea8",
                        "surface": "#131313",
                        "on-background": "#e5e2e1",
                        "background": "#131313",
                        "on-secondary-fixed": "#311300",
                        "on-primary": "#003829",
                        "on-tertiary-fixed-variant": "#5b4311",
                        "inverse-primary": "#226a53",
                        "surface-container-high": "#2a2a2a",
                        "surface-variant": "#353534",
                        "primary-fixed": "#aaf1d4",
                        "on-primary-fixed": "#002117",
                        "error-container": "#93000a",
                        "on-primary-container": "#8cd2b6",
                        "tertiary-fixed-dim": "#e6c183",
                        "error": "#ffb4ab",
                        "inverse-surface": "#e5e2e1",
                        "surface-tint": "#8ed5b9",
                        "surface-dim": "#131313",
                        "on-error-container": "#ffdad6",
                        "charcoal-surface": "#1A1A1A",
                        "warning-amber": "#FFBF00",
                        "ivory-text": "#F5F5F0",
                        "primary-container": "#0d5c46",
                        "surface-container": "#201f1f",
                        "bronze-accent": "#AD844A",
                        "surface-container-low": "#1c1b1b",
                        "surface-bright": "#393939",
                        "tertiary": "#e6c183",
                        "secondary-fixed": "#ffdcc7",
                        "on-surface-variant": "#bfc9c2",
                        "on-tertiary-container": "#e3bf81",
                        "outline": "#89938d",
                        "secondary": "#ffb787"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    "spacing": {
                        "unit-sm": "8px",
                        "unit-xs": "4px",
                        "margin-mobile": "16px",
                        "unit-xl": "48px",
                        "unit-md": "16px",
                        "unit-lg": "24px",
                        "margin-desktop": "32px",
                        "gutter": "24px",
                        "container-max": "1440px"
                    },
                    "fontFamily": {
                        "headline-lg-mobile": ["Plus Jakarta Sans"],
                        "body-lg": ["Plus Jakarta Sans"],
                        "label-caps": ["Inter"],
                        "body-md": ["Plus Jakarta Sans"],
                        "headline-md": ["Plus Jakarta Sans"],
                        "headline-lg": ["Plus Jakarta Sans"],
                        "data-mono": ["Inter"]
                    },
                    "fontSize": {
                        "headline-lg-mobile": ["28px", { "lineHeight": "1.2", "fontWeight": "700" }],
                        "body-lg": ["18px", { "lineHeight": "1.6", "fontWeight": "400" }],
                        "label-caps": ["12px", { "lineHeight": "1", "letterSpacing": "0.05em", "fontWeight": "600" }],
                        "body-md": ["16px", { "lineHeight": "1.5", "fontWeight": "400" }],
                        "headline-md": ["24px", { "lineHeight": "1.3", "fontWeight": "600" }],
                        "headline-lg": ["40px", { "lineHeight": "1.2", "letterSpacing": "-0.02em", "fontWeight": "700" }],
                        "data-mono": ["14px", { "lineHeight": "1.4", "fontWeight": "500" }]
                    }
                },
            },
        }
    </script>
</head>

<body class="bg-background text-on-background font-body-md selection:bg-primary/30">
    <!-- Sidebar Navigation -->
    <aside id="adminSidebar"
        class="hidden md:flex w-[280px] h-screen fixed left-0 top-0 bg-charcoal-surface dark:bg-surface-container-lowest border-r border-outline-variant flex-col py-unit-lg z-50 transition-transform duration-300">
        <div class="px-unit-lg mb-unit-xl">
            <h1 class="font-headline-md text-headline-md text-sharia-green-deep dark:text-primary font-bold">Sharia Bank
                Lab</h1>
            <p class="text-on-surface-variant font-label-caps text-label-caps mt-1">Management Portal</p>
        </div>
        <nav class="flex-grow space-y-1">
            <a class="flex items-center gap-unit-md px-unit-lg py-unit-sm text-on-surface-variant hover:bg-surface-variant/50 transition-colors duration-200"
                href="../Dashboard_Siswa/Dashboard_admin.php">
                <span class="material-symbols-outlined">dashboard</span>
                <span>Dashboard</span>
            </a>
            <a class="flex items-center gap-unit-md px-unit-lg py-unit-sm text-on-surface-variant hover:bg-surface-variant/50 transition-colors duration-200"
                href="../Simulasi/Simulasi_Admin.php">
                <span class="material-symbols-outlined">psychology</span>
                <span>Simulasi</span>
            </a>
            <a class="flex items-center gap-unit-md px-unit-lg py-unit-sm text-on-surface-variant hover:bg-surface-variant/50 transition-colors duration-200"
                href="../Pusat_Kompetensi/Pusat_Kompetensi_Admin.php">
                <span class="material-symbols-outlined">military_tech</span>
                <span>Kompetensi</span>
            </a>
            <a class="flex items-center gap-unit-md px-unit-lg py-unit-sm bg-primary-container/10 text-primary border-l-4 border-secondary font-bold"
                href="#">
                <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">history</span>
                <span>Riwayat</span>
            </a>
            <a class="flex items-center gap-unit-md px-unit-lg py-unit-sm text-on-surface-variant hover:bg-surface-variant/50 transition-colors duration-200"
                href="../Setting/Setting_Admin.php">
                <span class="material-symbols-outlined">settings</span>
                <span>Setelan</span>
            </a>
        </nav>
        <div class="mt-auto px-unit-lg space-y-1">

            <div class="pt-unit-lg flex items-center gap-3">
                <div class="w-10 h-10 rounded-full border border-primary/30 overflow-hidden">
                    <img alt="Admin Profile" class="w-full h-full object-cover"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuClZD8V_62W77e_QR5SngxwLArPEbgYMd5eWHiYFTA3RHB9Pe4wSMTJlFH5sWWBusru-flJ1Zc7oq7GH4q2opqbCeQLK8XKq2gwTYM1IKnqdVy5CKPk3aVPp3t2hNkAvgOqXcP4OROfY1Evjb_mk-oGWqAjwmYzHVfYQpMfrTv5BynPNRuq0-o-Lp0wp_qcNbyHl9JKR1svcTmdswhlVHiToIJji_YeRjt1JEGtUO6Xc5gALpaXTy9zG9-MpSjpw21KnJzHIKAJ131S" />
                </div>
                <div>
                    <p class="text-sm font-bold">Admin Utama</p>
                    <p class="text-[10px] text-on-surface-variant">System Administrator</p>
                </div>
            </div>
        </div>
    </aside>
    <!-- Top Bar -->
    <!-- Mobile Overlay -->
    <div id="mobileOverlay" class="fixed inset-0 bg-black/60 z-40 hidden md:hidden" onclick="toggleAdminSidebar()"></div>
    <header
        class="h-16 fixed top-0 right-0 w-full md:w-[calc(100%-280px)] bg-surface-container dark:bg-surface-container-low border-b border-outline-variant shadow-sm z-40 flex justify-between items-center px-4 md:px-margin-desktop">
        <div class="flex items-center gap-4 bg-surface-container-highest px-4 py-2 rounded-full hidden md:flex w-48 lg:w-72 xl:w-96">
            <button class="md:hidden material-symbols-outlined text-on-surface-variant hover:text-primary" onclick="toggleAdminSidebar()">menu</button>
            <span class="material-symbols-outlined text-on-surface-variant">search</span>
            <input class="bg-transparent border-none focus:ring-0 text-sm w-full placeholder:text-on-surface-variant"
                placeholder="Cari log siswa, skenario, atau status audit..." type="text" />
        </div>
        <div class="flex md:hidden items-center gap-2">
            <button class="material-symbols-outlined text-on-surface-variant" onclick="toggleAdminSidebar()">menu</button>
            <span class="font-bold text-sm text-on-surface">Riwayat</span>
        </div>
        <div class="flex items-center gap-6">
            <div
                class="flex items-center gap-2 px-3 py-1 bg-secondary/10 text-secondary rounded-lg font-bold text-xs uppercase tracking-wider">
                <span class="w-2 h-2 rounded-full bg-secondary animate-pulse"></span>
                Simulation Live
            </div>
            <button
                class="material-symbols-outlined text-on-surface-variant hover:text-primary transition-all">notifications</button>
            <div class="h-8 w-px bg-outline-variant"></div>
            <div class="flex items-center gap-2 text-primary font-bold font-label-caps text-label-caps cursor-pointer">
                <span class="material-symbols-outlined">help_outline</span>
                <span>Pusat Bantuan</span>
            </div>
        </div>
    </header>
    <!-- Main Content -->
    <main class="md:ml-[280px] pt-16 min-h-screen px-4 md:px-margin-desktop py-margin-desktop pb-20 md:pb-margin-desktop">
        <!-- Dashboard Header -->
        <div class="flex justify-between items-end mb-margin-desktop">
            <div>
                <nav class="flex items-center gap-2 text-on-surface-variant text-xs mb-2">
                    <span>Manajemen Riwayat</span>
                    <span class="material-symbols-outlined text-[14px]">chevron_right</span>
                    <span class="text-primary">Evaluasi &amp; Audit</span>
                </nav>
                <h2 class="font-headline-lg text-[28px] md:text-headline-lg">Manajemen Riwayat &amp; Evaluasi</h2>
                <p class="text-on-surface-variant max-w-2xl">Kelola data historis simulasi, edit metrik evaluasi yang
                    dilihat siswa (SCREEN_21), dan moderasi Tips Kepatuhan Global.</p>
            </div>
            <div class="flex gap-2 md:gap-3">
                <button
                    class="px-3 md:px-6 py-2.5 rounded-lg border border-outline-variant text-xs md:text-sm font-semibold hover:bg-surface-container-high transition-all flex items-center gap-1 md:gap-2">
                    <span class="material-symbols-outlined text-sm md:text-base">file_download</span>
                    <span class="hidden sm:inline">Ekspor Riwayat</span>
                </button>
                <button
                    class="px-3 md:px-6 py-2.5 rounded-lg bg-primary text-on-primary text-xs md:text-sm font-bold hover:shadow-[0_0_15px_rgba(142,213,185,0.4)] transition-all flex items-center gap-1 md:gap-2"
                    id="btn-add-tip">
                    <span class="material-symbols-outlined text-sm md:text-base">add_circle</span>
                    <span class="hidden sm:inline">Tambah Tips Baru</span>
                </button>
            </div>
        </div>
        <div class="grid grid-cols-12 gap-gutter">
            <!-- Global Sharia Tips Management (CRUD Ready) -->
            <section class="col-span-12 lg:col-span-4 flex flex-col gap-gutter">
                <div class="glass-card rounded-xl p-unit-lg sharia-glow-primary flex flex-col h-full">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="font-bold flex items-center gap-2">
                            <span class="material-symbols-outlined text-secondary">verified_user</span>
                            Library Tips Global
                        </h3>
                        <span
                            class="bg-secondary/20 text-secondary px-2 py-0.5 rounded text-[10px] font-bold uppercase">Admin
                            CRUD</span>
                    </div>
                    <div class="space-y-4 overflow-y-auto max-h-[400px] pr-2">
                        <!-- Tip Item 1 -->
                        <div
                            class="p-4 bg-surface-container-highest/40 border-l-2 border-primary rounded-r-lg group relative">
                            <div class="flex justify-between items-start mb-1">
                                <p class="text-sm font-bold text-primary">Prinsip Murabahah</p>
                                <div class="flex gap-1 opacity-0 group-hover:opacity-100 transition-opacity">
                                    <button class="p-1 hover:text-primary transition-colors"><span
                                            class="material-symbols-outlined text-sm">edit</span></button>
                                    <button class="p-1 hover:text-error transition-colors"><span
                                            class="material-symbols-outlined text-sm">delete</span></button>
                                </div>
                            </div>
                            <p class="text-xs text-on-surface-variant italic leading-relaxed">"Pastikan aset sudah
                                dimiliki bank secara sah sebelum melakukan akad jual beli kepada nasabah."</p>
                            <div class="mt-2 flex items-center gap-2">
                                <span
                                    class="text-[9px] font-bold text-on-tertiary-container bg-tertiary-container/30 px-1.5 rounded">MODUL:
                                    FINANCING</span>
                                <span class="text-[9px] text-on-surface-variant">Update: 12 Jan 2024</span>
                            </div>
                        </div>
                        <!-- Tip Item 2 -->
                        <div
                            class="p-4 bg-surface-container-highest/40 border-l-2 border-secondary rounded-r-lg group relative">
                            <div class="flex justify-between items-start mb-1">
                                <p class="text-sm font-bold text-secondary">Larangan Gharar</p>
                                <div class="flex gap-1 opacity-0 group-hover:opacity-100 transition-opacity">
                                    <button class="p-1 hover:text-primary transition-colors"><span
                                            class="material-symbols-outlined text-sm">edit</span></button>
                                    <button class="p-1 hover:text-error transition-colors"><span
                                            class="material-symbols-outlined text-sm">delete</span></button>
                                </div>
                            </div>
                            <p class="text-xs text-on-surface-variant italic leading-relaxed">"Hindari ketidakpastian
                                dalam objek akad. Spesifikasi barang harus jelas dan transparan."</p>
                            <div class="mt-2 flex items-center gap-2">
                                <span
                                    class="text-[9px] font-bold text-on-tertiary-container bg-tertiary-container/30 px-1.5 rounded">MODUL:
                                    UMUM</span>
                                <span class="text-[9px] text-on-surface-variant">Update: 05 Feb 2024</span>
                            </div>
                        </div>
                    </div>
                    <button
                        class="mt-6 w-full py-2.5 rounded-lg border border-outline-variant text-xs font-bold hover:bg-surface-variant/30 transition-all uppercase tracking-widest text-on-surface-variant">
                        Kelola Seluruh Library (42)
                    </button>
                </div>
                <!-- Dashboard Metadata Control -->
                <div class="glass-card rounded-xl p-unit-lg flex flex-col gap-4 border-l-4 border-warning-amber">
                    <div class="flex items-center justify-between">
                        <p class="text-xs font-bold text-on-surface-variant uppercase tracking-tighter">Status Panel
                            Evaluasi (Siswa)</p>
                        <div class="flex items-center gap-1">
                            <span class="w-2 h-2 rounded-full bg-primary"></span>
                            <span class="text-[10px] text-primary font-bold">LIVE</span>
                        </div>
                    </div>
                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm font-medium">Auto-Feedback AI</p>
                            <p class="text-[10px] text-on-surface-variant">Generasi otomatis saran perbaikan</p>
                        </div>
                        <button class="w-10 h-5 bg-primary/20 rounded-full relative">
                            <span class="absolute right-1 top-1 w-3 h-3 bg-primary rounded-full"></span>
                        </button>
                    </div>
                </div>
            </section>
            <!-- Main History & Audit Table -->
            <section class="col-span-12 lg:col-span-8">
                <div class="bg-charcoal-surface border border-outline-variant rounded-xl overflow-hidden shadow-2xl">
                    <div
                        class="p-unit-lg flex justify-between items-center bg-surface-container-low border-b border-outline-variant">
                        <h3 class="font-bold flex items-center gap-2">
                            <span class="material-symbols-outlined text-primary">analytics</span>
                            Daftar Log &amp; Penilaian Siswa
                        </h3>
                        <div class="flex gap-2">
                            <select
                                class="bg-surface-container-highest border-none text-xs rounded-lg px-3 py-1.5 focus:ring-1 focus:ring-primary">
                                <option>Semua Skenario</option>
                                <option>Murabahah</option>
                                <option>Mudharabah</option>
                            </select>
                            <select
                                class="bg-surface-container-highest border-none text-xs rounded-lg px-3 py-1.5 focus:ring-1 focus:ring-primary">
                                <option>Status: All</option>
                                <option>Pending Audit</option>
                                <option>Flagged</option>
                            </select>
                        </div>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full text-left border-collapse">
                            <thead>
                                <tr
                                    class="bg-surface-container-low/50 text-on-surface-variant text-xs font-label-caps border-b border-outline-variant">
                                    <th class="px-6 py-4">Siswa</th>
                                    <th class="px-6 py-4">Skenario</th>
                                    <th class="px-6 py-4">Metrik (AI)</th>
                                    <th class="px-6 py-4">Status Audit</th>
                                    <th class="px-6 py-4 text-right">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-outline-variant/30">
                                <!-- Entry 1 -->
                                <tr class="hover:bg-surface-variant/20 transition-colors cursor-pointer group"
                                    onclick="toggleDetails('detail-1')">
                                    <td class="px-6 py-4">
                                        <div class="flex items-center gap-3">
                                            <div
                                                class="w-8 h-8 rounded-full bg-primary-container text-primary flex items-center justify-center text-[10px] font-bold">
                                                AZ</div>
                                            <div>
                                                <span class="text-sm font-semibold block">Achmad Zaky</span>
                                                <span class="text-[10px] text-on-surface-variant">24 Oct, 14:32</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <span
                                            class="px-2 py-1 bg-surface-container-highest rounded text-[10px] border border-outline-variant">Murabahah
                                            Financing</span>
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="flex items-center gap-2">
                                            <span class="text-sm font-bold text-primary">88/100</span>
                                            <div
                                                class="w-12 h-1.5 bg-surface-container-highest rounded-full overflow-hidden">
                                                <div class="h-full bg-primary w-[88%]"></div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <span
                                            class="text-[10px] font-bold text-primary uppercase flex items-center gap-1">
                                            <span class="material-symbols-outlined text-xs">verified</span>
                                            Auto-Approved
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <button
                                            class="px-3 py-1 rounded text-xs bg-surface-container-high hover:bg-primary/20 hover:text-primary transition-all font-bold">Audit</button>
                                    </td>
                                </tr>
                                <!-- Entry 2 (Flagged) -->
                                <tr class="hover:bg-surface-variant/20 transition-colors cursor-pointer bg-error/5"
                                    onclick="toggleDetails('detail-2')">
                                    <td class="px-6 py-4">
                                        <div class="flex items-center gap-3">
                                            <div
                                                class="w-8 h-8 rounded-full bg-secondary-container text-secondary flex items-center justify-center text-[10px] font-bold">
                                                SN</div>
                                            <div>
                                                <span class="text-sm font-semibold block">Siti Nurhaliza</span>
                                                <span class="text-[10px] text-on-surface-variant">24 Oct, 13:15</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <span
                                            class="px-2 py-1 bg-surface-container-highest rounded text-[10px] border border-outline-variant">Ijarah
                                            Mutahia</span>
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="flex items-center gap-2">
                                            <span class="text-sm font-bold text-error">42/100</span>
                                            <div
                                                class="w-12 h-1.5 bg-surface-container-highest rounded-full overflow-hidden">
                                                <div class="h-full bg-error w-[42%]"></div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <span
                                            class="text-[10px] font-bold text-warning-amber uppercase flex items-center gap-1">
                                            <span class="material-symbols-outlined text-xs">flag</span> Need Human Audit
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <button
                                            class="px-3 py-1 rounded text-xs bg-warning-amber/20 text-warning-amber border border-warning-amber/50 font-bold animate-pulse">Audit
                                            Now</button>
                                    </td>
                                </tr>
                                <!-- Entry 3 -->
                                <tr class="hover:bg-surface-variant/20 transition-colors cursor-pointer"
                                    onclick="toggleDetails('detail-3')">
                                    <td class="px-6 py-4">
                                        <div class="flex items-center gap-3">
                                            <div
                                                class="w-8 h-8 rounded-full bg-tertiary-container text-tertiary flex items-center justify-center text-[10px] font-bold">
                                                BP</div>
                                            <div>
                                                <span class="text-sm font-semibold block">Bambang Pamungkas</span>
                                                <span class="text-[10px] text-on-surface-variant">24 Oct, 11:50</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <span
                                            class="px-2 py-1 bg-surface-container-highest rounded text-[10px] border border-outline-variant">Wadi'ah
                                            Contract</span>
                                    </td>
                                    <td class="px-6 py-4">
                                        <div class="flex items-center gap-2">
                                            <span class="text-sm font-bold text-tertiary">75/100</span>
                                            <div
                                                class="w-12 h-1.5 bg-surface-container-highest rounded-full overflow-hidden">
                                                <div class="h-full bg-tertiary w-[75%]"></div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">
                                        <span
                                            class="text-[10px] font-bold text-on-surface-variant uppercase flex items-center gap-1">
                                            <span class="material-symbols-outlined text-xs">hourglass_top</span> Pending
                                            Audit
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <button
                                            class="px-3 py-1 rounded text-xs bg-surface-container-high font-bold">Audit</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        </div>
        <!-- Detailed Audit & View Management (SCREEN_21 Manager) -->
        <section
            class="mt-margin-desktop grid grid-cols-12 gap-gutter opacity-0 translate-y-4 pointer-events-none transition-all duration-500"
            id="evaluation-panel">
            <div class="col-span-12">
                <div class="bg-charcoal-surface border-t-4 border-secondary rounded-xl p-unit-lg shadow-2xl relative">
                    <button class="absolute top-4 right-4 text-on-surface-variant hover:text-error transition-colors"
                        onclick="hideDetails()">
                        <span class="material-symbols-outlined">close</span>
                    </button>
                    <div class="flex flex-col xl:flex-row gap-margin-desktop">
                        <!-- Left: AI Logs & Data Integrity -->
                        <div
                            class="w-full xl:w-1/3 bg-surface-container-high/50 rounded-xl p-unit-md border border-outline-variant backdrop-blur-sm">
                            <div class="flex items-center gap-3 mb-6">
                                <div
                                    class="w-12 h-12 rounded-lg bg-sharia-green-deep flex items-center justify-center text-primary">
                                    <span class="material-symbols-outlined text-3xl">psychology</span>
                                </div>
                                <div>
                                    <p class="text-xs text-on-surface-variant">AI Core Log Analysis</p>
                                    <p class="font-bold text-ivory-text">Siti Nurhaliza - ID #1042</p>
                                </div>
                            </div>
                            <div class="space-y-4">
                                <div class="p-3 bg-error/10 border border-error/20 rounded-lg">
                                    <p class="text-[10px] font-bold text-error uppercase mb-1">Poin Pelanggaran Syariah
                                    </p>
                                    <p class="text-xs text-on-background leading-relaxed">"Siswa melewatkan tahap
                                        penjelasan risiko (Loss sharing) pada akad Ijarah. AI mendeteksi ketidaksesuaian
                                        dengan protokol transparansi."</p>
                                </div>
                                <div class="p-3 bg-surface-container rounded-lg">
                                    <p class="text-[10px] font-bold text-on-surface-variant uppercase mb-2">Transcript
                                        History</p>
                                    <div
                                        class="space-y-2 h-40 overflow-y-auto pr-2 custom-scrollbar text-[11px] font-data-mono">
                                        <p class="text-on-surface-variant"><span class="text-primary">[13:05]</span>
                                            Nasabah masuk ke counter.</p>
                                        <p class="text-on-surface-variant"><span class="text-primary">[13:08]</span>
                                            Verifikasi dokumen identitas.</p>
                                        <p class="text-error font-bold"><span class="text-error">[13:12]</span> Melewati
                                            modul PSAK-59.</p>
                                        <p class="text-on-surface-variant"><span class="text-primary">[13:14]</span>
                                            Akad Ijarah ditandatangani.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Right: Evaluation Metric Editor (Controls what student sees in SCREEN_21) -->
                        <div class="flex-grow">
                            <div class="flex items-center justify-between mb-6">
                                <div>
                                    <h4 class="text-xl font-bold">Evaluation Metric Management</h4>
                                    <p class="text-sm text-on-surface-variant">Edit nilai akhir dan feedback yang akan
                                        tampil di Dashboard Siswa.</p>
                                </div>
                                <div class="flex items-center gap-4">
                                    <div class="text-right">
                                        <p class="text-[10px] text-on-surface-variant uppercase">AI Original Score</p>
                                        <p class="text-2xl font-black text-error">42%</p>
                                    </div>
                                    <span class="material-symbols-outlined text-on-surface-variant">arrow_forward</span>
                                    <div class="text-right">
                                        <p class="text-[10px] text-primary uppercase font-bold">Override Score</p>
                                        <input
                                            class="w-16 bg-surface-container-highest border-primary/50 text-center text-xl font-black rounded-lg focus:ring-primary"
                                            type="number" value="42" />
                                    </div>
                                </div>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-unit-md mb-6">
                                <div class="p-4 bg-surface-container rounded-xl">
                                    <label
                                        class="block text-[10px] font-label-caps text-primary mb-2 uppercase">Komentar
                                        Evaluator (Public to Student)</label>
                                    <textarea
                                        class="w-full bg-surface-container-low border-outline-variant rounded-lg p-3 text-sm h-32 placeholder:text-on-surface-variant"
                                        placeholder="Tulis feedback resmi untuk siswa...">Penilaian AI akurat. Mohon pelajari kembali bab pengungkapan risiko pada akad Ijarah sebelum mengambil ujian ulang.</textarea>
                                </div>
                                <div class="p-4 bg-surface-container rounded-xl">
                                    <label
                                        class="block text-[10px] font-label-caps text-on-surface-variant mb-2 uppercase">Catatan
                                        Audit Internal (Private)</label>
                                    <textarea
                                        class="w-full bg-surface-container-low border-outline-variant rounded-lg p-3 text-sm h-32 placeholder:text-on-surface-variant"
                                        placeholder="Catatan teknis untuk admin lainnya...">Verifikasi manual mengonfirmasi kegagalan prosedural. Tidak perlu override nilai.</textarea>
                                </div>
                            </div>
                            <div class="flex flex-wrap gap-3 pt-4 border-t border-outline-variant">
                                <button
                                    class="px-6 py-2 bg-primary text-on-primary rounded-lg font-bold text-sm flex items-center gap-2 hover:bg-primary-fixed transition-colors">
                                    <span class="material-symbols-outlined text-sm">save</span> Update &amp; Publish
                                    Evaluasi
                                </button>
                                <button
                                    class="px-6 py-2 bg-secondary text-on-secondary rounded-lg font-bold text-sm flex items-center gap-2 hover:bg-secondary-fixed transition-colors">
                                    <span class="material-symbols-outlined text-sm">refresh</span> Instruksi Remedial
                                </button>
                                <button
                                    class="px-6 py-2 border border-error/50 text-error rounded-lg font-bold text-sm flex items-center gap-2 hover:bg-error/10 transition-colors">
                                    <span class="material-symbols-outlined text-sm">delete_forever</span> Hapus Data
                                    Entry
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- Modal: CRUD Tips (Adding/Editing) -->
    <div class="fixed inset-0 bg-black/80 z-[100] hidden flex items-center justify-center p-margin-mobile"
        id="tip-modal">
        <div
            class="glass-card w-full max-w-md rounded-2xl p-margin-desktop border border-primary/20 shadow-[0_0_50px_rgba(142,213,185,0.1)]">
            <h3 class="text-xl font-bold mb-1">Kelola Tips Kepatuhan</h3>
            <p class="text-sm text-on-surface-variant mb-6">Update library global yang dapat diakses seluruh siswa
                selama simulasi.</p>
            <div class="space-y-4">
                <div>
                    <label
                        class="block text-[10px] font-label-caps mb-1.5 uppercase tracking-wider text-on-surface-variant">Judul
                        Prinsip / Akad</label>
                    <input
                        class="w-full bg-surface-container-high border-outline-variant rounded-lg p-3 text-sm focus:ring-primary focus:border-primary"
                        placeholder="e.g., Larangan Riba Fadl" type="text" />
                </div>
                <div>
                    <label
                        class="block text-[10px] font-label-caps mb-1.5 uppercase tracking-wider text-on-surface-variant">Kategori
                        Modul</label>
                    <select
                        class="w-full bg-surface-container-high border-outline-variant rounded-lg p-3 text-sm focus:ring-primary">
                        <option>Umum (General)</option>
                        <option>Financing (Pembiayaan)</option>
                        <option>Funding (Penghimpunan)</option>
                        <option>Operations (Operasional)</option>
                    </select>
                </div>
                <div>
                    <label
                        class="block text-[10px] font-label-caps mb-1.5 uppercase tracking-wider text-on-surface-variant">Konten
                        Edukasi</label>
                    <textarea
                        class="w-full bg-surface-container-high border-outline-variant rounded-lg p-3 text-sm h-32 focus:ring-primary"
                        placeholder="Deskripsikan panduan kepatuhan syariah dengan jelas..."></textarea>
                </div>
            </div>
            <div class="mt-8 flex gap-3">
                <button
                    class="flex-1 py-3 border border-outline-variant rounded-lg font-bold text-sm hover:bg-surface-container-high transition-colors"
                    onclick="closeModal()">Batal</button>
                <button
                    class="flex-1 py-3 bg-primary text-on-primary rounded-lg font-bold text-sm shadow-lg shadow-primary/20 hover:shadow-primary/40 transition-all"
                    onclick="closeModal()">Simpan Perubahan</button>
            </div>
        </div>
    </div>
    <script>
        function toggleDetails(id) {
            const panel = document.getElementById('evaluation-panel');
            panel.classList.remove('opacity-0', 'translate-y-4', 'pointer-events-none');
            panel.scrollIntoView({ behavior: 'smooth' });
        }

        function hideDetails() {
            const panel = document.getElementById('evaluation-panel');
            panel.classList.add('opacity-0', 'translate-y-4', 'pointer-events-none');
        }

        const btnAddTip = document.getElementById('btn-add-tip');
        const modal = document.getElementById('tip-modal');

        btnAddTip.addEventListener('click', () => {
            modal.classList.remove('hidden');
        });

        function closeModal() {
            modal.classList.add('hidden');
        }

        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') closeModal();
        });
    </script>
    <!-- Mobile Bottom Nav -->
    <nav class="md:hidden fixed bottom-0 left-0 w-full bg-charcoal-surface border-t border-outline-variant flex justify-around items-center h-16 px-2 z-50">
        <a class="flex flex-col items-center gap-1 text-on-surface-variant" href="../Dashboard_Siswa/Dashboard_admin.php">
            <span class="material-symbols-outlined text-xl">dashboard</span>
            <span class="text-[10px]">Dashboard</span>
        </a>
        <a class="flex flex-col items-center gap-1 text-on-surface-variant" href="../Simulasi/Simulasi_Admin.php">
            <span class="material-symbols-outlined text-xl">psychology</span>
            <span class="text-[10px]">Simulasi</span>
        </a>
        <a class="flex flex-col items-center gap-1 text-on-surface-variant" href="../Pusat_Kompetensi/Pusat_Kompetensi_Admin.php">
            <span class="material-symbols-outlined text-xl">military_tech</span>
            <span class="text-[10px]">Kompetensi</span>
        </a>
        <a class="flex flex-col items-center gap-1 text-primary" href="#">
            <span class="material-symbols-outlined text-xl" style="font-variation-settings:'FILL' 1;">history</span>
            <span class="text-[10px] font-bold">Riwayat</span>
        </a>
        <a class="flex flex-col items-center gap-1 text-on-surface-variant" href="../Setting/Setting_Admin.php">
            <span class="material-symbols-outlined text-xl">settings</span>
            <span class="text-[10px]">Setelan</span>
        </a>
    </nav>
    <script>
    function toggleAdminSidebar() {
        var sidebar = document.getElementById('adminSidebar');
        var overlay = document.getElementById('mobileOverlay');
        if (!sidebar) return;
        var isHidden = sidebar.classList.contains('-translate-x-full');
        if (isHidden) {
            sidebar.classList.remove('-translate-x-full');
            sidebar.classList.add('flex');
            if (overlay) overlay.classList.remove('hidden');
        } else {
            sidebar.classList.add('-translate-x-full');
            if (overlay) overlay.classList.add('hidden');
        }
    }
    document.addEventListener('DOMContentLoaded', function() {
        var sidebar = document.getElementById('adminSidebar');
        if (window.innerWidth < 768 && sidebar) {
            sidebar.classList.add('-translate-x-full');
        }
    });
    window.addEventListener('resize', function() {
        var sidebar = document.getElementById('adminSidebar');
        var overlay = document.getElementById('mobileOverlay');
        if (window.innerWidth >= 768 && sidebar) {
            sidebar.classList.remove('-translate-x-full');
            if (overlay) overlay.classList.add('hidden');
        }
        if (window.innerWidth < 768 && sidebar) {
            sidebar.classList.add('-translate-x-full');
        }
    });
    </script>
    <script src="../app.js"></script>
</body>

</html>