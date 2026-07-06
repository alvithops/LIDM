<!DOCTYPE html>

<html lang="id">
<script>document.documentElement.className=localStorage.getItem('appTheme')==='light'?'light':'dark'</script>

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title data-i18n="riwayat.page_title">Riwayat Simulasi | SmartBank Syariah AI</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&amp;family=Inter:wght@400;500;600;700&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
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

        .glass-panel {
            background: rgba(26, 26, 26, 0.6);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.05);
        }
    </style>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "on-tertiary-fixed": "#271900",
                        "outline": "#89938d",
                        "on-surface": "#e5e2e1",
                        "error-container": "#93000a",
                        "inverse-primary": "#226a53",
                        "outline-variant": "#3f4944",
                        "surface-tint": "#8ed5b9",
                        "surface": "#131313",
                        "on-primary-fixed": "#002117",
                        "surface-container-low": "#1c1b1b",
                        "on-primary-fixed-variant": "#00513d",
                        "primary-container": "#0d5c46",
                        "tertiary": "#e6c183",
                        "on-secondary": "#512400",
                        "on-background": "#e5e2e1",
                        "on-secondary-fixed": "#311300",
                        "charcoal-surface": "#1A1A1A",
                        "primary-fixed": "#aaf1d4",
                        "surface-container-high": "#2a2a2a",
                        "on-primary": "#003829",
                        "secondary-container": "#ad5401",
                        "surface-variant": "#353534",
                        "on-primary-container": "#8cd2b6",
                        "secondary-fixed-dim": "#ffb787",
                        "inverse-surface": "#e5e2e1",
                        "on-tertiary-container": "#e3bf81",
                        "on-tertiary": "#422d00",
                        "warning-amber": "#FFBF00",
                        "bronze-accent": "#AD844A",
                        "surface-dim": "#131313",
                        "error": "#ffb4ab",
                        "secondary-fixed": "#ffdcc7",
                        "primary": "#8ed5b9",
                        "tertiary-fixed-dim": "#e6c183",
                        "surface-container-lowest": "#0e0e0e",
                        "ivory-text": "#F5F5F0",
                        "background": "#131313",
                        "secondary": "#ffb787",
                        "on-error": "#690005",
                        "tertiary-container": "#674d1a",
                        "on-surface-variant": "#bfc9c2",
                        "on-secondary-container": "#ffede3",
                        "primary-fixed-dim": "#8ed5b9",
                        "surface-container-highest": "#353534",
                        "tertiary-fixed": "#ffdea8",
                        "on-tertiary-fixed-variant": "#5b4311",
                        "surface-container": "#201f1f",
                        "inverse-on-surface": "#313030",
                        "sharia-green-deep": "#083B2D",
                        "on-error-container": "#ffdad6",
                        "on-secondary-fixed-variant": "#733600",
                        "surface-bright": "#393939"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    "spacing": {
                        "unit-md": "16px",
                        "margin-desktop": "32px",
                        "unit-sm": "8px",
                        "gutter": "24px",
                        "unit-xl": "48px",
                        "unit-lg": "24px",
                        "container-max": "1440px",
                        "unit-xs": "4px",
                        "margin-mobile": "16px"
                    },
                    "fontFamily": {
                        "headline-lg-mobile": ["Plus Jakarta Sans"],
                        "headline-lg": ["Plus Jakarta Sans"],
                        "body-md": ["Plus Jakarta Sans"],
                        "label-caps": ["Inter"],
                        "data-mono": ["Inter"],
                        "body-lg": ["Plus Jakarta Sans"],
                        "headline-md": ["Plus Jakarta Sans"]
                    },
                    "fontSize": {
                        "headline-lg-mobile": ["28px", { "lineHeight": "1.2", "fontWeight": "700" }],
                        "headline-lg": ["40px", { "lineHeight": "1.2", "letterSpacing": "-0.02em", "fontWeight": "700" }],
                        "body-md": ["16px", { "lineHeight": "1.5", "fontWeight": "400" }],
                        "label-caps": ["12px", { "lineHeight": "1", "letterSpacing": "0.05em", "fontWeight": "600" }],
                        "data-mono": ["14px", { "lineHeight": "1.4", "fontWeight": "500" }],
                        "body-lg": ["18px", { "lineHeight": "1.6", "fontWeight": "400" }],
                        "headline-md": ["24px", { "lineHeight": "1.3", "fontWeight": "600" }]
                    }
                },
            },
        }
    </script>
</head>

<body class="bg-surface text-on-surface font-body-md selection:bg-primary/30 overflow-x-hidden">
    <!-- Navigation Sidebar (Desktop) -->
    <aside
        class="hidden md:flex flex-col fixed left-0 top-0 w-[280px] h-screen bg-charcoal-surface border-r border-outline-variant z-50">
        <div class="p-8">
            <h1 class="font-headline-md text-headline-md font-bold text-primary tracking-tight" data-i18n="riwayat.sidebar.brand">SmartBank Syariah AI
            </h1>
            <p class="text-on-surface-variant text-sm mt-1" data-i18n="riwayat.sidebar.subtitle">Virtual Laboratory</p>
        </div>
        <nav class="flex-1 px-2 space-y-1">
            <a class="flex items-center gap-4 text-on-surface-variant hover:text-ivory-text px-6 py-3 hover:bg-surface-variant/50 transition-colors duration-200"
                href="../Dashboard_Siswa/Dashboard_siswa.php">
                <span class="material-symbols-outlined">dashboard</span>
                <span data-i18n="riwayat.sidebar.dashboard">Dashboard</span>
            </a>
            <a class="flex items-center gap-4 text-on-surface-variant hover:text-ivory-text px-6 py-3 hover:bg-surface-variant/50 transition-colors duration-200"
                href="../Simulasi/Simulasi_Siswa.php">
                <span class="material-symbols-outlined">psychology</span>
                <span data-i18n="riwayat.sidebar.simulasi">Simulasi</span>
            </a>
            <a class="flex items-center gap-4 text-on-surface-variant hover:text-ivory-text px-6 py-3 hover:bg-surface-variant/50 transition-colors duration-200"
                href="../Pusat_Kompetensi/Pusat_Kompetensi_Siswa.php">
                <span class="material-symbols-outlined">military_tech</span>
                <span data-i18n="riwayat.sidebar.kompetensi">Kompetensi</span>
            </a>
            <a class="flex items-center gap-4 bg-primary/10 text-primary border-l-4 border-secondary-fixed-dim px-6 py-3"
                href="Riwayat_Siswa.php">
                <span class="material-symbols-outlined">history</span>
                <span data-i18n="riwayat.sidebar.riwayat">Riwayat</span>
            </a>
            <a class="flex items-center gap-4 text-on-surface-variant hover:text-ivory-text px-6 py-3 hover:bg-surface-variant/50 transition-colors duration-200"
                href="../Setting/Setting_Siswa.php">
                <span class="material-symbols-outlined">settings</span>
                <span data-i18n="riwayat.sidebar.setelan">Setelan</span>
            </a>
        </nav>
        <div class="mt-auto border-t border-outline-variant p-4 space-y-1">
            <a class="flex items-center gap-4 text-on-surface-variant hover:text-ivory-text px-6 py-3 hover:bg-surface-variant/50 transition-colors duration-200 cursor-pointer"
                onclick="window.openHelp()">
                <span class="material-symbols-outlined">help</span>
                <span data-i18n="riwayat.sidebar.bantuan">Bantuan</span>
            </a>
            <a id="logoutLink" class="flex items-center gap-4 text-on-surface-variant hover:text-ivory-text px-6 py-3 hover:bg-surface-variant/50 transition-colors duration-200"
                href="../Login/login.php">
                <span class="material-symbols-outlined">logout</span>
                <span data-i18n="riwayat.sidebar.keluar">Keluar</span>
            </a>
        </div>
    </aside>
    <!-- Top AppBar -->
    <header
        class="fixed top-0 right-0 w-full md:w-[calc(100%-280px)] h-16 bg-charcoal-surface/80 backdrop-blur-md z-40 flex items-center justify-between px-gutter border-b border-outline-variant md:border-none shadow-sm">
        <div class="flex items-center gap-4 md:hidden">
            <button class="text-on-surface"><span class="material-symbols-outlined">menu</span></button>
            <span class="font-headline-md text-headline-md font-bold text-primary" data-i18n="riwayat.topbar.title">SmartBank AI</span>
        </div>
        <div
            class="hidden md:flex items-center bg-surface-container rounded-full px-4 py-1.5 border border-outline-variant">
            <span class="material-symbols-outlined text-outline text-sm">search</span>
            <input
                class="bg-transparent border-none focus:ring-0 text-sm text-on-surface w-64 placeholder:text-outline-variant"
                placeholder="Cari simulasi..." type="text" data-i18n="riwayat.topbar.search_placeholder" />
        </div>
        <div class="flex items-center gap-6">
            <div class="hidden sm:flex flex-col items-end">
                <span class="text-label-caps font-label-caps text-primary" data-i18n="riwayat.topbar.xp">2,450 XP</span>
                <span class="text-[10px] text-on-surface-variant" data-i18n="riwayat.topbar.level">Level 12 â€¢ Pro Auditor</span>
            </div>
            <div class="h-8 w-px bg-outline-variant hidden sm:block"></div>
            <div class="flex items-center gap-3">
                <div class="relative">
                    <span
                        class="material-symbols-outlined text-on-surface-variant hover:text-primary cursor-pointer transition-colors">notifications</span>
                    <span
                        class="absolute top-0 right-0 w-2 h-2 bg-secondary rounded-full ring-2 ring-charcoal-surface"></span>
                </div>
                <div class="w-10 h-10 rounded-full border-2 border-primary-container overflow-hidden">
                    <img id="riwayatAvatar" alt="Student Avatar" class="w-full h-full object-cover"
                        data-alt="A professional studio portrait of a young adult male with a friendly and intelligent expression, representing a dedicated banking student. The lighting is soft and corporate, set against a subtle, dark background that complements the Sharia banking laboratory theme. He wears a smart-casual outfit suitable for a modern educational environment."
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuDYG5sv8RJ05NuP9wdRT4P92hq5FjvsVTQuECK903BwRRMO6zQWgDe75FRTWDcr9T74IPYjw_ZqDpN3-_hbD1-vodQX2UXCwbxsKwr_HHnHADapwEjjhyWbmouQQABQHmpojXhxOmVtTAXMdIy5iqxrnEtYR3JpuCwuITa4XA4N02srhxA9mzAbRCo7D7rcsUTkiPJ1Z9nZdRbWfiWYzkAWjdeGT3Ij1BstsWfsiRrGp-ZTypj-M7BzVA" />
                </div>
            </div>
        </div>
    </header>
    <!-- Main Content Canvas -->
    <main class="pt-24 pb-20 md:pb-8 px-margin-mobile md:px-margin-desktop md:ml-[280px] min-h-screen">
        <!-- Header Section -->
        <div class="max-w-6xl mx-auto mb-8">
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-4">
                <div>
                    <h2 class="font-headline-lg text-[28px] md:text-headline-lg text-ivory-text" data-i18n="riwayat.page_title_main">Riwayat Simulasi</h2>
                    <p class="text-on-surface-variant mt-2 max-w-2xl" data-i18n="riwayat.page_desc" data-i18n-attr="html">
                        Tinjau performa simulasi Anda, analisis umpan balik AI Supervisor, dan tingkatkan kepatuhan
                        syariah dalam operasional bank virtual.
                    </p>
                </div>
                <div class="flex gap-2">
                    <button
                        class="bg-surface-container-high hover:bg-surface-variant text-on-surface px-4 py-2.5 rounded-lg flex items-center gap-2 transition-all">
                        <span class="material-symbols-outlined text-sm">filter_list</span>
                        <span data-i18n="riwayat.filter_btn">Filter</span>
                    </button>
                    <button onclick="window.downloadLaporan()"
                        class="bg-primary text-on-primary px-4 py-2.5 rounded-lg flex items-center gap-2 font-semibold shadow-lg shadow-primary/10 active:scale-95 transition-all">
                        <span class="material-symbols-outlined text-sm">download</span>
                        <span data-i18n="riwayat.unduh_btn">Unduh Laporan</span>
                    </button>
                </div>
            </div>
        </div>
        <!-- Dashboard Stats Row -->
        <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
            <div
                class="bg-surface-container border border-outline-variant p-5 rounded-xl relative overflow-hidden group">
                <div class="flex justify-between items-start mb-4">
                    <span class="p-2 bg-primary/10 text-primary rounded-lg">
                        <span class="material-symbols-outlined">check_circle</span>
                    </span>
                    <span class="text-data-mono font-data-mono text-primary">+12%</span>
                </div>
                <p class="text-on-surface-variant text-sm font-label-caps tracking-wider" data-i18n="riwayat.stat.skor_label">SKOR RATA-RATA</p>
                <h3 class="text-3xl font-bold text-ivory-text mt-1">94.8</h3>
                <div
                    class="absolute bottom-0 left-0 w-full h-1 bg-primary transform scale-x-0 group-hover:scale-x-100 transition-transform origin-left">
                </div>
            </div>
            <div
                class="bg-surface-container border border-outline-variant p-5 rounded-xl relative overflow-hidden group">
                <div class="flex justify-between items-start mb-4">
                    <span class="p-2 bg-secondary/10 text-secondary rounded-lg">
                        <span class="material-symbols-outlined">warning</span>
                    </span>
                    <span class="text-data-mono font-data-mono text-secondary">-2</span>
                </div>
                <p class="text-on-surface-variant text-sm font-label-caps tracking-wider" data-i18n="riwayat.stat.peringatan_label">PERINGATAN SYARIAH</p>
                <h3 class="text-3xl font-bold text-ivory-text mt-1">03</h3>
                <div
                    class="absolute bottom-0 left-0 w-full h-1 bg-secondary transform scale-x-0 group-hover:scale-x-100 transition-transform origin-left">
                </div>
            </div>
            <div
                class="bg-surface-container border border-outline-variant p-5 rounded-xl relative overflow-hidden group">
                <div class="flex justify-between items-start mb-4">
                    <span class="p-2 bg-tertiary/10 text-tertiary rounded-lg">
                        <span class="material-symbols-outlined">shield</span>
                    </span>
                    <span class="text-data-mono font-data-mono text-tertiary">Locked</span>
                </div>
                <p class="text-on-surface-variant text-sm font-label-caps tracking-wider" data-i18n="riwayat.stat.fraud_label">FRAUD TERDETEKSI</p>
                <h3 class="text-3xl font-bold text-ivory-text mt-1">12</h3>
                <div
                    class="absolute bottom-0 left-0 w-full h-1 bg-tertiary transform scale-x-0 group-hover:scale-x-100 transition-transform origin-left">
                </div>
            </div>
        </div>
        <!-- History Content -->
        <div class="max-w-6xl mx-auto flex flex-col gap-6">
            <!-- List View -->
            <div class="bg-charcoal-surface border border-outline-variant rounded-2xl overflow-hidden">
                <div
                    class="px-6 py-4 border-b border-outline-variant bg-surface-container-low flex justify-between items-center">
                    <h3 class="font-headline-md text-sm font-bold uppercase tracking-widest text-on-surface-variant" data-i18n="riwayat.log.title">Log
                        Aktivitas Terbaru</h3>
                    <div class="flex items-center gap-4 text-xs">
                        <span class="flex items-center gap-1.5"><span class="w-2 h-2 rounded-full bg-primary"></span>
                            <span data-i18n="riwayat.log.legend_berhasil">Berhasil</span></span>
                        <span class="flex items-center gap-1.5"><span
                                class="w-2 h-2 rounded-full bg-warning-amber"></span> <span data-i18n="riwayat.log.legend_peringatan">Peringatan</span></span>
                        <span class="flex items-center gap-1.5"><span class="w-2 h-2 rounded-full bg-error"></span>
                            <span data-i18n="riwayat.log.legend_fraud">Fraud</span></span>
                    </div>
                </div>
                <div class="divide-y divide-outline-variant/30">
                    <!-- Item 1: Fraud Detected -->
                    <div class="p-6 hover:bg-surface-variant/20 transition-all cursor-pointer group"
                        onclick="toggleDetails('report-1')">
                        <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
                            <div class="flex items-start gap-4">
                                <div
                                    class="w-12 h-12 rounded-xl bg-error/10 flex items-center justify-center text-error">
                                    <span class="material-symbols-outlined">gpp_bad</span>
                                </div>
                                <div>
                                    <h4
                                        class="text-lg font-semibold text-ivory-text group-hover:text-primary transition-colors" data-i18n="riwayat.log.item1_title">
                                        Analisis Pembiayaan UMKM</h4>
                                    <div class="flex items-center gap-3 mt-1 text-sm text-on-surface-variant">
                                        <span class="flex items-center gap-1"><span
                                                class="material-symbols-outlined text-[14px]">calendar_today</span> 12
                                            Okt, 14:30</span>
                                        <span class="h-1 w-1 bg-outline rounded-full"></span>
                                        <span class="flex items-center gap-1"><span
                                                class="material-symbols-outlined text-[14px]">person</span> Nasabah: Pak
                                            Budi</span>
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-center gap-6">
                                <div class="text-right hidden sm:block">
                                    <div class="text-ivory-text font-data-mono">Rp 120.000.000</div>
                                    <div class="text-[10px] text-on-surface-variant uppercase tracking-tighter">Nominal
                                        Pengajuan</div>
                                </div>
                                <span
                                    class="px-3 py-1 rounded-full text-xs font-bold bg-error-container/20 text-error border border-error/30 uppercase tracking-wide" data-i18n="riwayat.log.item1_status">Fraud
                                    Terdeteksi</span>
                                <span
                                    class="material-symbols-outlined text-on-surface-variant group-hover:translate-x-1 transition-transform">chevron_right</span>
                            </div>
                        </div>
                        <!-- Hidden Detail: Supervisor Report -->
                        <div class="hidden mt-6 bg-surface-container-highest/30 rounded-xl p-5 border-l-4 border-error overflow-hidden"
                            id="report-1">
                            <div class="flex items-center gap-2 text-error mb-3">
                                <span class="material-symbols-outlined text-sm">assignment_late</span>
                                <span class="font-bold text-xs uppercase tracking-widest" data-i18n="riwayat.log.supervisor_report">Laporan AI Supervisor
                                    Syariah</span>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 text-sm">
                                <div class="space-y-3">
                                    <p class="text-on-surface-variant italic" data-i18n="riwayat.log.item1_desc" data-i18n-attr="html">"Siswa gagal mengidentifikasi
                                        ketidakkonsistenan data pada slip gaji nasabah yang ternyata fiktif."</p>
                                    <ul class="space-y-2">
                                        <li class="flex items-start gap-2">
                                            <span class="material-symbols-outlined text-error text-sm">cancel</span>
                                            <span data-i18n="riwayat.log.item1_error1">Dokumen Slip Gaji tidak memiliki QR Code valid.</span>
                                        </li>
                                        <li class="flex items-start gap-2">
                                            <span class="material-symbols-outlined text-error text-sm">cancel</span>
                                            <span data-i18n="riwayat.log.item1_error2">Omzet fiktif terdeteksi pada rekening koran (Gharar).</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="bg-surface/40 p-4 rounded-lg border border-outline-variant/30">
                                    <span class="text-[10px] text-on-surface-variant font-bold uppercase" data-i18n="riwayat.log.saran_perbaikan">Saran
                                        Perbaikan</span>
                                    <p class="mt-2 text-primary-fixed" data-i18n="riwayat.log.item1_saran" data-i18n-attr="html">Selalu lakukan verifikasi silang (cross-check)
                                        antara rekening koran 3 bulan terakhir dengan surat keterangan penghasilan.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Item 2: Success -->
                    <div class="p-6 hover:bg-surface-variant/20 transition-all cursor-pointer group"
                        onclick="toggleDetails('report-2')">
                        <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
                            <div class="flex items-start gap-4">
                                <div
                                    class="w-12 h-12 rounded-xl bg-primary/10 flex items-center justify-center text-primary">
                                    <span class="material-symbols-outlined">payments</span>
                                </div>
                                <div>
                                    <h4
                                        class="text-lg font-semibold text-ivory-text group-hover:text-primary transition-colors" data-i18n="riwayat.log.item2_title">
                                        Setoran Tunai Nasabah</h4>
                                    <div class="flex items-center gap-3 mt-1 text-sm text-on-surface-variant">
                                        <span class="flex items-center gap-1"><span
                                                class="material-symbols-outlined text-[14px]">calendar_today</span> 12
                                            Okt, 10:15</span>
                                        <span class="h-1 w-1 bg-outline rounded-full"></span>
                                        <span class="flex items-center gap-1"><span
                                                class="material-symbols-outlined text-[14px]">person</span> Teller:
                                            Siswa AI</span>
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-center gap-6">
                                <div class="text-right hidden sm:block">
                                    <div class="text-ivory-text font-data-mono">Rp 5.000.000</div>
                                    <div class="text-[10px] text-on-surface-variant uppercase tracking-tighter">Setoran
                                        Masuk</div>
                                </div>
                                <span
                                    class="px-3 py-1 rounded-full text-xs font-bold bg-primary-container/20 text-primary border border-primary/30 uppercase tracking-wide" data-i18n="riwayat.log.item2_status">Berhasil</span>
                                <span
                                    class="material-symbols-outlined text-on-surface-variant group-hover:translate-x-1 transition-transform">chevron_right</span>
                            </div>
                        </div>
                        <div class="hidden mt-6 bg-surface-container-highest/30 rounded-xl p-5 border-l-4 border-primary overflow-hidden"
                            id="report-2">
                            <div class="flex items-center gap-2 text-primary mb-3">
                                <span class="material-symbols-outlined text-sm">verified_user</span>
                                <span class="font-bold text-xs uppercase tracking-widest" data-i18n="riwayat.log.supervisor_report">Laporan AI Supervisor
                                    Syariah</span>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 text-sm">
                                <div class="space-y-3">
                                    <p class="text-on-surface-variant italic" data-i18n="riwayat.log.item2_desc" data-i18n-attr="html">"Prosedur teller dilakukan dengan
                                        sempurna. Transparansi nominal sangat jelas."</p>
                                    <ul class="space-y-2">
                                        <li class="flex items-start gap-2">
                                            <span
                                                class="material-symbols-outlined text-primary text-sm">check_circle</span>
                                            <span data-i18n="riwayat.log.item2_success1">Validasi uang tunai sesuai nominal.</span>
                                        </li>
                                        <li class="flex items-start gap-2">
                                            <span
                                                class="material-symbols-outlined text-primary text-sm">check_circle</span>
                                            <span data-i18n="riwayat.log.item2_success2">Konfirmasi kepemilikan rekening dilakukan.</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="bg-primary/5 p-4 rounded-lg border border-primary/20">
                                    <div class="flex justify-between items-center">
                                        <span class="text-[10px] text-primary font-bold uppercase" data-i18n="riwayat.log.skor_kompetensi">Skor
                                            Kompetensi</span>
                                        <span class="text-xl font-bold text-primary">100/100</span>
                                    </div>
                                    <div class="mt-2 w-full bg-outline-variant h-1 rounded-full overflow-hidden">
                                        <div class="bg-primary h-full w-full"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Item 3: Sharia Warning -->
                    <div class="p-6 hover:bg-surface-variant/20 transition-all cursor-pointer group"
                        onclick="toggleDetails('report-3')">
                        <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
                            <div class="flex items-start gap-4">
                                <div
                                    class="w-12 h-12 rounded-xl bg-warning-amber/10 flex items-center justify-center text-warning-amber">
                                    <span class="material-symbols-outlined">rule_folder</span>
                                </div>
                                <div>
                                    <h4
                                        class="text-lg font-semibold text-ivory-text group-hover:text-primary transition-colors" data-i18n="riwayat.log.item3_title">
                                        Akad Murabahah Kendaraan</h4>
                                    <div class="flex items-center gap-3 mt-1 text-sm text-on-surface-variant">
                                        <span class="flex items-center gap-1"><span
                                                class="material-symbols-outlined text-[14px]">calendar_today</span> 11
                                            Okt, 16:45</span>
                                        <span class="h-1 w-1 bg-outline rounded-full"></span>
                                        <span class="flex items-center gap-1"><span
                                                class="material-symbols-outlined text-[14px]">person</span> AO: Ahmad
                                            Fauzi</span>
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-center gap-6">
                                <div class="text-right hidden sm:block">
                                    <div class="text-ivory-text font-data-mono">Rp 35.000.000</div>
                                    <div class="text-[10px] text-on-surface-variant uppercase tracking-tighter">Nilai
                                        Akad</div>
                                </div>
                                <span
                                    class="px-3 py-1 rounded-full text-xs font-bold bg-tertiary-container/20 text-tertiary border border-tertiary/30 uppercase tracking-wide" data-i18n="riwayat.log.item3_status">Peringatan
                                    Syariah</span>
                                <span
                                    class="material-symbols-outlined text-on-surface-variant group-hover:translate-x-1 transition-transform">chevron_right</span>
                            </div>
                        </div>
                        <div class="hidden mt-6 bg-surface-container-highest/30 rounded-xl p-5 border-l-4 border-warning-amber overflow-hidden"
                            id="report-3">
                            <div class="flex items-center gap-2 text-warning-amber mb-3">
                                <span class="material-symbols-outlined text-sm">priority_high</span>
                                <span class="font-bold text-xs uppercase tracking-widest" data-i18n="riwayat.log.supervisor_report">Laporan AI Supervisor
                                    Syariah</span>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 text-sm">
                                <div class="space-y-3">
                                    <p class="text-on-surface-variant italic" data-i18n="riwayat.log.item3_desc" data-i18n-attr="html">"Terdeteksi penggunaan terminologi 'Bunga'
                                        yang tidak diperbolehkan dalam akad Murabahah."</p>
                                    <ul class="space-y-2">
                                        <li class="flex items-start gap-2">
                                            <span
                                                class="material-symbols-outlined text-warning-amber text-sm">warning</span>
                                            <span data-i18n="riwayat.log.item3_warning1">Penyebutan margin sebagai bunga tetap (Riba).</span>
                                        </li>
                                        <li class="flex items-start gap-2">
                                            <span
                                                class="material-symbols-outlined text-primary text-sm">check_circle</span>
                                            <span data-i18n="riwayat.log.item3_success1">Struktur angsuran sudah sesuai perhitungan.</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="bg-surface/40 p-4 rounded-lg border border-outline-variant/30">
                                    <span class="text-[10px] text-on-surface-variant font-bold uppercase" data-i18n="riwayat.log.kepatuhan_syariah">Kepatuhan
                                        Syariah</span>
                                    <p class="mt-2 text-warning-amber" data-i18n="riwayat.log.item3_saran" data-i18n-attr="html">Gunakan istilah 'Margin Keuntungan' atau 'Bagi
                                        Hasil'. Hindari penggunaan istilah bank konvensional yang merujuk pada Riba.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Item 4: Success -->
                    <div class="p-6 hover:bg-surface-variant/20 transition-all cursor-pointer group"
                        onclick="toggleDetails('report-4')">
                        <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
                            <div class="flex items-start gap-4">
                                <div
                                    class="w-12 h-12 rounded-xl bg-primary/10 flex items-center justify-center text-primary">
                                    <span class="material-symbols-outlined">account_balance</span>
                                </div>
                                <div>
                                    <h4
                                        class="text-lg font-semibold text-ivory-text group-hover:text-primary transition-colors" data-i18n="riwayat.log.item4_title">
                                        Buka Tabungan Haji (Wadiah)</h4>
                                    <div class="flex items-center gap-3 mt-1 text-sm text-on-surface-variant">
                                        <span class="flex items-center gap-1"><span
                                                class="material-symbols-outlined text-[14px]">calendar_today</span> 11
                                            Okt, 09:00</span>
                                        <span class="h-1 w-1 bg-outline rounded-full"></span>
                                        <span class="flex items-center gap-1"><span
                                                class="material-symbols-outlined text-[14px]">person</span> CS: Siswa
                                            AI</span>
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-center gap-6">
                                <div class="text-right hidden sm:block">
                                    <div class="text-ivory-text font-data-mono">Setoran Awal: Rp 500k</div>
                                    <div class="text-[10px] text-on-surface-variant uppercase tracking-tighter">Produk
                                        Haji</div>
                                </div>
                                <span
                                    class="px-3 py-1 rounded-full text-xs font-bold bg-primary-container/20 text-primary border border-primary/30 uppercase tracking-wide" data-i18n="riwayat.log.item4_status">Berhasil</span>
                                <span
                                    class="material-symbols-outlined text-on-surface-variant group-hover:translate-x-1 transition-transform">chevron_right</span>
                            </div>
                        </div>
                        <div class="hidden mt-6 bg-surface-container-highest/30 rounded-xl p-5 border-l-4 border-primary overflow-hidden"
                            id="report-4">
                            <div class="flex items-center gap-2 text-primary mb-3">
                                <span class="material-symbols-outlined text-sm">verified_user</span>
                                <span class="font-bold text-xs uppercase tracking-widest" data-i18n="riwayat.log.supervisor_report">Laporan AI Supervisor
                                    Syariah</span>
                            </div>
                            <div class="text-sm">
                                <p class="text-on-surface-variant mb-4" data-i18n="riwayat.log.item4_desc" data-i18n-attr="html">"Pembukaan rekening sesuai SOP. Penjelasan
                                    mengenai akad Wadiah sangat transparan dan mudah dipahami nasabah."</p>
                                <div class="grid grid-cols-3 gap-4">
                                    <div class="text-center p-2 rounded bg-surface/40">
                                        <div class="text-primary font-bold">100%</div>
                                        <div class="text-[9px] text-on-surface-variant uppercase" data-i18n="riwayat.log.item4_kepatuhan_label">Syariah</div>
                                    </div>
                                    <div class="text-center p-2 rounded bg-surface/40">
                                        <div class="text-primary font-bold">95%</div>
                                        <div class="text-[9px] text-on-surface-variant uppercase" data-i18n="riwayat.log.item4_sop_label">SOP</div>
                                    </div>
                                    <div class="text-center p-2 rounded bg-surface/40">
                                        <div class="text-primary font-bold">88%</div>
                                        <div class="text-[9px] text-on-surface-variant uppercase" data-i18n="riwayat.log.item4_kecepatan_label">Kecepatan</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Footer List -->
                <div class="p-4 bg-surface-container-lowest text-center">
                    <button class="text-primary text-sm font-semibold hover:underline flex items-center gap-2 mx-auto" data-i18n="riwayat.log.muat_lebih">
                        Muat Lebih Banyak Riwayat
                        <span class="material-symbols-outlined text-sm">expand_more</span>
                    </button>
                </div>
            </div>
            <!-- Knowledge Base CTA / Supervisor Tips (Bento Style) -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div
                    class="bg-gradient-to-br from-sharia-green-deep to-surface-container p-6 rounded-2xl border border-primary/20 relative overflow-hidden group">
                    <div class="relative z-10">
                        <span class="material-symbols-outlined text-primary mb-4 block">lightbulb</span>
                        <h4 class="text-xl font-bold text-ivory-text mb-2" data-i18n="riwayat.tips.title">Tips Kepatuhan Syariah</h4>
                        <p class="text-sm text-on-surface-variant leading-relaxed mb-4" data-i18n="riwayat.tips.desc" data-i18n-attr="html">
                            Ingatlah bahwa dalam akad Murabahah, bank harus benar-benar memiliki barang sebelum dijual
                            kepada nasabah. Ketidaktelitian pada poin ini sering memicu peringatan syariah.
                        </p>
                        <a class="text-primary text-sm font-bold flex items-center gap-1 group-hover:gap-2 transition-all"
                            href="../Setting/Setting_Siswa.php" data-i18n="riwayat.tips.btn">
                            Buka Modul Akad Murabahah <span
                                class="material-symbols-outlined text-sm">arrow_forward</span>
                        </a>
                    </div>
                    <div
                        class="absolute -right-8 -bottom-8 opacity-10 group-hover:scale-110 transition-transform duration-700">
                        <span class="material-symbols-outlined text-[180px]">auto_stories</span>
                    </div>
                </div>
                <div
                    class="bg-surface-container border border-outline-variant p-6 rounded-2xl flex flex-col justify-between">
                    <div>
                        <h4 class="text-xl font-bold text-ivory-text mb-2" data-i18n="riwayat.evaluasi.title">Evaluasi Keseluruhan</h4>
                        <p class="text-sm text-on-surface-variant mb-6" data-i18n="riwayat.evaluasi.desc" data-i18n-attr="html">Analisis AI terhadap perkembangan kompetensi
                            perbankan syariah Anda bulan ini.</p>
                        <div class="space-y-4">
                            <div>
                                <div
                                    class="flex justify-between text-xs mb-1 uppercase tracking-wider text-on-surface-variant">
                                    <span data-i18n="riwayat.evaluasi.komunikasi">Komunikasi Nasabah</span>
                                    <span>85%</span>
                                </div>
                                <div class="w-full bg-outline-variant/30 h-1.5 rounded-full overflow-hidden">
                                    <div class="bg-primary h-full rounded-full" style="width: 85%"></div>
                                </div>
                            </div>
                            <div>
                                <div
                                    class="flex justify-between text-xs mb-1 uppercase tracking-wider text-on-surface-variant">
                                    <span data-i18n="riwayat.evaluasi.fraud">Analisis Risiko Fraud</span>
                                    <span>62%</span>
                                </div>
                                <div class="w-full bg-outline-variant/30 h-1.5 rounded-full overflow-hidden">
                                    <div class="bg-secondary h-full rounded-full" style="width: 62%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button onclick="window.openRapor()"
                        class="mt-8 w-full bg-surface-container-highest hover:bg-surface-variant py-3 rounded-lg text-sm font-bold transition-colors" data-i18n="riwayat.evaluasi.btn">
                        Lihat Rapor Detail
                    </button>
                </div>
            </div>
        </div>
    </main>
    <!-- Mobile Bottom NavBar -->
    <nav
        class="md:hidden fixed bottom-0 left-0 w-full bg-charcoal-surface border-t border-outline-variant grid grid-cols-5 h-16 items-center px-2 z-50">
        <a class="flex flex-col items-center gap-1 text-on-surface-variant" href="../Dashboard_Siswa/Dashboard_siswa.php">
            <span class="material-symbols-outlined text-xl">dashboard</span>
            <span class="text-[10px] font-medium" data-i18n="riwayat.sidebar.dashboard">Dash</span>
        </a>
        <a class="flex flex-col items-center gap-1 text-on-surface-variant" href="../Simulasi/Simulasi_Siswa.php">
            <span class="material-symbols-outlined text-xl">psychology</span>
            <span class="text-[10px] font-medium" data-i18n="riwayat.sidebar.simulasi">Simulasi</span>
        </a>
        <a class="flex flex-col items-center gap-1 text-on-surface-variant" href="../Pusat_Kompetensi/Pusat_Kompetensi_Siswa.php">
            <span class="material-symbols-outlined text-xl">military_tech</span>
            <span class="text-[10px] font-medium" data-i18n="riwayat.sidebar.kompetensi">Skill</span>
        </a>
        <a class="flex flex-col items-center gap-1 text-primary" href="Riwayat_Siswa.php">
            <span class="material-symbols-outlined text-xl" style="font-variation-settings: 'FILL' 1;">history</span>
            <span class="text-[10px] font-bold" data-i18n="riwayat.sidebar.riwayat">Riwayat</span>
        </a>
        <a class="flex flex-col items-center gap-1 text-on-surface-variant" href="../Setting/Setting_Siswa.php">
            <span class="material-symbols-outlined text-xl">settings</span>
            <span class="text-[10px] font-medium" data-i18n="riwayat.sidebar.setelan">Setelan</span>
        </a>
    </nav>
    <script>
        function toggleDetails(id) {
            const el = document.getElementById(id);
            const isHidden = el.classList.contains('hidden');

            // Close all first for clean accordion effect (optional)
            document.querySelectorAll('[id^="report-"]').forEach(item => {
                if (item.id !== id) item.classList.add('hidden');
            });

            if (isHidden) {
                el.classList.remove('hidden');
                el.classList.add('animate-in', 'fade-in', 'slide-in-from-top-2', 'duration-300');
            } else {
                el.classList.add('hidden');
            }
        }
    </script>
    <script>
        (function () {
            const appRoutes = {
                login: '../Login/login.php',
                student: {
                    dashboard: '../Dashboard_Siswa/Dashboard_siswa.php',
                    simulasi: '../Simulasi/Simulasi_Siswa.php',
                    kompetensi: '../Pusat_Kompetensi/Pusat_Kompetensi_Siswa.php',
                    riwayat: 'Riwayat_Siswa.php',
                    setting: '../Setting/Setting_Siswa.php'
                }
            };

            function isLoggedIn() {
                return localStorage.getItem('isLoggedIn') === 'true';
            }

            function currentRole() {
                return localStorage.getItem('userRole') || null;
            }

            function redirectToLogin() {
                window.location.href = appRoutes.login;
            }

            function applyRouteGuards() {
                if (!isLoggedIn() || currentRole() !== 'student') {
                    redirectToLogin();
                }
            }

            function setupLogoutButton() {
                const logoutLink = document.getElementById('logoutLink');
                if (!logoutLink) return;
                logoutLink.addEventListener('click', function (event) {
                    event.preventDefault();
                    localStorage.setItem('isLoggedIn', 'false');
                    localStorage.removeItem('userRole');
                    redirectToLogin();
                });
            }

            document.addEventListener('DOMContentLoaded', function () {
                applyRouteGuards();
                setupLogoutButton();
                var savedPhoto = localStorage.getItem('profilePhoto');
                if (savedPhoto) {
                    var avatar = document.getElementById('riwayatAvatar');
                    if (avatar) avatar.src = savedPhoto;
                }
            });
        })();

        // Cross-tab sync for theme & language
        window.addEventListener('storage', (e) => {
            if (e.key === 'appTheme' && window.appI18n) {
                window.appI18n.applyTheme();
            } else if (e.key === 'appLanguage' && window.appI18n) {
                window.appI18n.applyTranslation();
            } else if (e.key === 'profilePhoto') {
                var avatar = document.getElementById('riwayatAvatar');
                if (avatar) avatar.src = e.newValue || avatar.src;
            }
        });
    </script>
    <script src="../assets/js/i18n.js"></script>
    <!-- Rapor Modal Overlay -->
    <div id="raporOverlay" class="fixed inset-0 z-[100] hidden" style="backdrop-filter:blur(10px);-webkit-backdrop-filter:blur(10px);background:rgba(0,0,0,0.75);">
        <div class="min-h-full flex items-center justify-center p-3 md:p-6">
            <div class="glass-panel rounded-2xl w-full max-w-4xl max-h-[92vh] overflow-y-auto" id="raporContent" style="scrollbar-width:thin;">
            </div>
        </div>
    </div>
    <style>
        #raporContent::-webkit-scrollbar { width:4px; }
        #raporContent::-webkit-scrollbar-track { background:transparent; }
        #raporContent::-webkit-scrollbar-thumb { background:#3f4944; border-radius:10px; }
        .rapor-month-card { transition:all 0.2s ease; }
        .rapor-month-card:hover { transform:translateY(-2px); }
    </style>
    <div id="langToggle" style="position:fixed;bottom:72px;right:16px;z-index:9999;display:flex;gap:4px;background:var(--surface-container,#1e1e2e);padding:4px;border-radius:8px;border:1px solid var(--outline-variant,#3e3e4e);box-shadow:0 4px 12px rgba(0,0,0,0.3);">
        <button onclick="if(window.appI18n){window.appI18n.setLanguage('id')}" id="langBtnId" style="padding:6px 12px;border-radius:6px;font-size:11px;font-weight:700;cursor:pointer;border:none;background:var(--primary,#bb86fc);color:#fff;">ID</button>
        <button onclick="if(window.appI18n){window.appI18n.setLanguage('en')}" id="langBtnEn" style="padding:6px 12px;border-radius:6px;font-size:11px;font-weight:700;cursor:pointer;border:none;background:transparent;color:var(--on-surface,#e0e0e0);">EN</button>
    </div>
    <script>(function(){var lang=localStorage.getItem('appLanguage')||'id';var bId=document.getElementById('langBtnId');var bEn=document.getElementById('langBtnEn');if(lang==='en'){bId.style.background='transparent';bId.style.color='var(--on-surface,#e0e0e0)';bEn.style.background='var(--primary,#bb86fc)';bEn.style.color='#fff';}else{bEn.style.background='transparent';bEn.style.color='var(--on-surface,#e0e0e0)';bId.style.background='var(--primary,#bb86fc)';bId.style.color='#fff';}})();</script>
    <script>
    (function(){
        var bulanIndo = ['Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember'];

        var aiInsights = [
            'Kemampuan akad meningkat signifikan. Fokus pada penguasaan akad Musyarakah dan Wadiah.',
            'Mulai menunjukkan pemahaman yang baik tentang kepatuhan syariah. Perkuat analisis risiko fraud.',
            'Kompetensi semakin merata di seluruh akad. Kepatuhan syariah terus terjaga dengan baik.',
            'Perlu penguatan pada akad Mudharabah dan pemahaman nisbah bagi hasil.',
            'Progres stabil. Disarankan memperbanyak simulasi akad Murabahah untuk meningkatkan ketelitian.',
            'Penguasaan konsep Wadiah sangat baik. Terus tingkatkan kecepatan respons dalam simulasi.',
            'Skor kepatuhan syariah naik 12% dari bulan lalu. Pertahankan konsistensi ini.',
            'Identifikasi gharar dan fraud semakin tajam. Tantangan selanjutnya adalah akad Musyarakah kompleks.',
            'Kinerja cukup baik namun masih terdapat kesalahan teknis pada pencatatan akad.'
        ];

        function initEvaluationHistory() {
            var raw = localStorage.getItem('evaluationHistory');
            if (raw) {
                try { return JSON.parse(raw); } catch(e) {}
            }
            // Generate 3 months demo data
            var now = new Date();
            var data = [];
            for (var m = 2; m >= 0; m--) {
                var d = new Date(now.getFullYear(), now.getMonth() - m, 1);
                var base = 60 + Math.floor(Math.random() * 25);
                var l1 = Math.min(100, base + Math.floor(Math.random() * 20));
                var l2 = Math.min(100, Math.max(40, base - 5 + Math.floor(Math.random() * 20)));
                var l3 = Math.min(100, Math.max(30, base - 10 + Math.floor(Math.random() * 20)));
                var l4 = Math.min(100, Math.max(20, base - 20 + Math.floor(Math.random() * 25)));
                var overall = Math.round((l1 + l2 + l3 + l4) / 4);
                data.push({
                    month: d.getMonth(),
                    year: d.getFullYear(),
                    levels: { '1': l1, '2': l2, '3': l3, '4': l4, '5': 0 },
                    overall: overall,
                    aiIndex: Math.floor(Math.random() * aiInsights.length)
                });
            }
            localStorage.setItem('evaluationHistory', JSON.stringify(data));
            return data;
        }

        function syncWithCurrentScores(history) {
            var raw = localStorage.getItem('unlockedScores');
            if (!raw) return history;
            var current;
            try { current = JSON.parse(raw); } catch(e) { return history; }
            if (history.length === 0) return history;
            var latest = history[history.length - 1];
            var changed = false;
            for (var k in current) {
                if (current[k] && (!latest.levels[k] || current[k] > latest.levels[k])) {
                    latest.levels[k] = current[k];
                    changed = true;
                }
            }
            // Recalculate overall
            var vals = [];
            for (var k2 in latest.levels) {
                if (latest.levels[k2] > 0) vals.push(latest.levels[k2]);
            }
            if (vals.length > 0) {
                var sum = 0;
                for (var i = 0; i < vals.length; i++) sum += vals[i];
                var newOverall = Math.round(sum / vals.length);
                if (newOverall !== latest.overall) {
                    latest.overall = newOverall;
                    changed = true;
                }
            }
            // Add current month if it's a new month
            var now = new Date();
            var last = history[history.length - 1];
            if (last.month !== now.getMonth() || last.year !== now.getFullYear()) {
                var newEntry = {
                    month: now.getMonth(),
                    year: now.getFullYear(),
                    levels: JSON.parse(JSON.stringify(last.levels)),
                    overall: last.overall,
                    aiIndex: Math.floor(Math.random() * aiInsights.length)
                };
                history.push(newEntry);
                changed = true;
            }
            if (changed) {
                localStorage.setItem('evaluationHistory', JSON.stringify(history));
            }
            return history;
        }

        function renderRapor(history) {
            var levels = [];
            if (history.length > 0) {
                levels = history[history.length - 1].levels;
            }
            var latest = history[history.length - 1] || null;
            var overall = latest ? latest.overall : 0;

            // Calculate trend
            var trend = 0;
            if (history.length >= 2) {
                var prev = history[history.length - 2].overall;
                trend = overall - prev;
            }

            // Calculate levels completed
            var completed = 0;
            for (var k in levels) {
                if (levels[k] >= 70) completed++;
            }
            var totalLevels = Object.keys(levels).length;

            var html = '';

            // Header
            html += '<div class="sticky top-0 z-10 bg-charcoal-surface/90 backdrop-blur-md border-b border-outline-variant/30 rounded-t-2xl p-5 md:p-6 flex items-center justify-between">';
            html += '<div class="flex items-center gap-3"><div class="w-10 h-10 rounded-xl bg-primary/10 flex items-center justify-center"><span class="material-symbols-outlined text-primary">assignment</span></div><div><h2 class="font-headline-md text-[20px] text-ivory-text font-bold">Rapor Kompetensi</h2><p class="text-xs text-on-surface-variant mt-0.5">Perbankan Syariah &mdash; Evaluasi Keseluruhan</p></div></div>';
            html += '<button onclick="window.closeRapor()" class="w-8 h-8 rounded-lg bg-surface-container-hover flex items-center justify-center text-on-surface-variant hover:text-ivory-text transition-colors"><span class="material-symbols-outlined text-[20px]">close</span></button>';
            html += '</div>';

            html += '<div class="p-5 md:p-6 space-y-6">';

            // Score Overview Card
            html += '<div class="bg-gradient-to-br from-sharia-green-deep/60 to-surface-container-low rounded-xl p-5 md:p-6 border border-primary/10">';
            html += '<div class="flex flex-col md:flex-row md:items-center gap-6">';
            html += '<div class="flex-shrink-0 w-24 h-24 rounded-full border-4 border-primary/30 flex items-center justify-center bg-surface-container-low">';
            html += '<span class="text-3xl font-bold text-primary">' + overall + '</span>';
            html += '</div>';
            html += '<div class="flex-1">';
            html += '<div class="flex items-center gap-3 mb-2">';
            html += '<span class="text-lg font-bold text-ivory-text">Skor Kompetensi Keseluruhan</span>';
            if (trend > 0) {
                html += '<span class="text-xs bg-primary/20 text-primary px-2 py-0.5 rounded-full flex items-center gap-1">&uarr; +' + trend + '</span>';
            } else if (trend < 0) {
                html += '<span class="text-xs bg-error/20 text-error px-2 py-0.5 rounded-full flex items-center gap-1">&darr; ' + trend + '</span>';
            }
            html += '</div>';
            html += '<div class="flex flex-wrap gap-4 text-sm">';
            html += '<div><span class="text-on-surface-variant">Level Terselesaikan: </span><span class="text-ivory-text font-bold">' + completed + '/' + totalLevels + '</span></div>';
            html += '<div><span class="text-on-surface-variant">Total Evaluasi: </span><span class="text-ivory-text font-bold">' + history.length + ' bulan</span></div>';
            html += '</div>';
            // Progress bar
            html += '<div class="mt-3 w-full bg-outline-variant/30 h-2 rounded-full overflow-hidden"><div class="h-full rounded-full bg-primary" style="width:' + overall + '%"></div></div>';
            html += '</div></div></div>';

            // Monthly Timeline
            html += '<div>';
            html += '<h3 class="font-bold text-ivory-text mb-4 flex items-center gap-2"><span class="material-symbols-outlined text-[18px] text-primary">timeline</span> Analisis Perkembangan Bulanan</h3>';
            html += '<div class="space-y-4">';
            for (var i = 0; i < history.length; i++) {
                var h = history[i];
                var monthName = bulanIndo[h.month];
                var isLatest = (i === history.length - 1);
                var scoreColor = h.overall >= 80 ? 'text-primary' : (h.overall >= 60 ? 'text-warning-amber' : 'text-error');

                html += '<div class="rapor-month-card bg-surface-container-low rounded-xl p-4 md:p-5 border border-outline-variant/10 ' + (isLatest ? 'ring-1 ring-primary/30' : '') + '">';
                html += '<div class="flex flex-col md:flex-row md:items-center justify-between gap-3 mb-3">';
                html += '<div class="flex items-center gap-3">';
                html += '<div class="w-9 h-9 rounded-lg bg-primary/10 flex items-center justify-center flex-shrink-0"><span class="material-symbols-outlined text-[18px] text-primary">calendar_month</span></div>';
                html += '<div><span class="text-sm font-bold text-ivory-text">' + monthName + ' ' + h.year + '</span>';
                if (isLatest) html += '<span class="ml-2 text-[10px] bg-primary/20 text-primary px-1.5 py-0.5 rounded-full font-bold">Terbaru</span>';
                html += '</div></div>';
                html += '<span class="text-xl font-bold ' + scoreColor + '">' + h.overall + '<span class="text-xs text-on-surface-variant font-normal">/100</span></span>';
                html += '</div>';
                // Per-level scores
                html += '<div class="grid grid-cols-2 md:grid-cols-5 gap-2 mb-3">';
                var levelNames = { '1':'Mudharabah','2':'Murabahah','3':'Musyarakah','4':'Wadiah','5':'Kepatuhan Syariah' };
                for (var lid = 1; lid <= 5; lid++) {
                    var ls = h.levels[lid] || 0;
                    var lColor = ls >= 70 ? 'text-primary' : (ls >= 40 ? 'text-warning-amber' : 'text-on-surface-variant');
                    html += '<div class="bg-surface-container/60 rounded-lg p-2 text-center"><div class="text-[10px] text-on-surface-variant">' + levelNames[lid] + '</div><div class="text-sm font-bold ' + lColor + '">' + (ls > 0 ? ls : '-') + '</div></div>';
                }
                html += '</div>';
                // AI analysis
                var insight = aiInsights[h.aiIndex] || aiInsights[0];
                html += '<div class="bg-surface/40 rounded-lg p-3 border-l-2 border-primary">';
                html += '<div class="flex items-center gap-1.5 mb-1"><span class="material-symbols-outlined text-[14px] text-primary">auto_awesome</span><span class="text-[10px] text-primary font-bold uppercase tracking-wider">Analisis AI</span></div>';
                html += '<p class="text-xs text-on-surface-variant leading-relaxed">"' + insight + '"</p>';
                html += '</div>';
                html += '</div>';
            }
            html += '</div></div>';

            // Competency Breakdown Section
            html += '<div class="bg-surface-container-low rounded-xl p-4 md:p-5 border border-outline-variant/10">';
            html += '<h3 class="font-bold text-ivory-text mb-4 flex items-center gap-2"><span class="material-symbols-outlined text-[18px] text-secondary">donut_small</span> Rincian Kompetensi per Akad</h3>';
            var currentLevels = latest ? latest.levels : {};
            var levelNames2 = { '1':'Akad Mudharabah','2':'Akad Murabahah','3':'Akad Musyarakah','4':'Akad Wadiah','5':'Kepatuhan Syariah' };
            var levelIcons = { '1':'handshake','2':'shopping_cart','3':'groups','4':'savings','5':'verified' };
            var levelColors = { '1':'primary','2':'secondary','3':'tertiary','4':'warning-amber','5':'primary' };
            for (var lid2 = 1; lid2 <= 5; lid2++) {
                var sc = currentLevels[lid2] || 0;
                var col = levelColors[lid2];
                var icons = levelIcons[lid2];
                var pct = sc;
                if (pct > 100) pct = 100;
                var badge = sc >= 70 ? 'LULUS' : (sc > 0 ? 'Dalam Proses' : 'Belum');
                var badgeColor = sc >= 70 ? 'bg-' + col + '/20 text-' + col : 'bg-on-surface-variant/10 text-on-surface-variant';
                html += '<div class="flex items-center gap-3 py-3 border-b border-outline-variant/10 last:border-0">';
                html += '<div class="w-9 h-9 rounded-lg bg-' + col + '/10 flex items-center justify-center flex-shrink-0"><span class="material-symbols-outlined text-[18px] text-' + col + '">' + icons + '</span></div>';
                html += '<div class="flex-1 min-w-0"><div class="flex items-center justify-between mb-1"><span class="text-sm text-ivory-text font-medium truncate">' + levelNames2[lid2] + '</span><span class="text-xs font-bold text-' + col + '">' + (sc > 0 ? sc : '-') + '</span></div>';
                html += '<div class="w-full bg-outline-variant/30 h-1.5 rounded-full overflow-hidden"><div class="h-full rounded-full bg-' + col + '" style="width:' + pct + '%"></div></div></div>';
                html += '<span class="text-[10px] font-bold px-2 py-0.5 rounded-full flex-shrink-0 ' + badgeColor + '">' + badge + '</span>';
                html += '</div>';
            }
            html += '</div>';

            // AI Recommendation
            var latestInsight = latest ? aiInsights[latest.aiIndex] : aiInsights[0];
            html += '<div class="bg-gradient-to-br from-primary/5 to-surface-container-low rounded-xl p-4 md:p-5 border border-primary/10">';
            html += '<h3 class="font-bold text-ivory-text mb-2 flex items-center gap-2"><span class="material-symbols-outlined text-[18px] text-primary">tips_and_updates</span> Rekomendasi AI</h3>';
            html += '<p class="text-sm text-on-surface-variant leading-relaxed">"' + latestInsight + '"</p>';
            html += '<div class="mt-3 flex items-center gap-2 text-[11px] text-on-surface-variant"><span class="material-symbols-outlined text-[14px]">schedule</span> Terakhir diperbarui: ' + (latest ? bulanIndo[latest.month] + ' ' + latest.year : '-') + '</div>';
            html += '</div>';

            html += '</div>'; // close p-5 wrapper

            document.getElementById('raporContent').innerHTML = html;
        }

        window.openRapor = function() {
            var history = initEvaluationHistory();
            history = syncWithCurrentScores(history);
            renderRapor(history);
            document.getElementById('raporOverlay').classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        };

        window.closeRapor = function() {
            document.getElementById('raporOverlay').classList.add('hidden');
            document.body.style.overflow = '';
        };

        window.downloadLaporan = function() {
            var history = initEvaluationHistory();
            history = syncWithCurrentScores(history);
            var latest = history[history.length - 1] || null;
            var allMonths = bulanIndo;

            // Compute overall stats
            var levelsCompleted = 0;
            var totalLevels = 5;
            if (latest) {
                for (var k in latest.levels) { if (latest.levels[k] >= 70) levelsCompleted++; }
            }
            var overall = latest ? latest.overall : 0;
            var trend = 0;
            if (history.length >= 2) trend = overall - history[history.length - 2].overall;

            var levelNames = { '1':'Akad Mudharabah','2':'Akad Murabahah','3':'Akad Musyarakah','4':'Akad Wadiah','5':'Kepatuhan Syariah' };
            var levelIcons = { '1':'handshake','2':'shopping_cart','3':'groups','4':'savings','5':'verified' };

            var now = new Date();
            var dateStr = now.getDate() + ' ' + allMonths[now.getMonth()] + ' ' + now.getFullYear();

            var doc = '<!DOCTYPE html><html><head><meta charset="utf-8"><title>Laporan Kompetensi - SmartBank Syariah AI</title>';
            doc += '<style>';
            doc += '*{margin:0;padding:0;box-sizing:border-box}';
            doc += 'body{font-family:"Segoe UI",Arial,sans-serif;background:#f5f5f0;color:#1a1a1a;padding:40px;max-width:900px;margin:auto}';
            doc += '.header{text-align:center;margin-bottom:32px;padding-bottom:24px;border-bottom:3px solid #226a53}';
            doc += '.header h1{font-size:24px;color:#226a53;margin-bottom:4px}';
            doc += '.header p{color:#666;font-size:13px}';
            doc += '.overview{background:#fff;border-radius:12px;padding:24px;margin-bottom:24px;box-shadow:0 2px 8px rgba(0,0,0,0.06);display:flex;align-items:center;gap:24px}';
            doc += '.overview .circle{width:80px;height:80px;border-radius:50%;border:4px solid #226a53;display:flex;align-items:center;justify-content:center;font-size:28px;font-weight:700;color:#226a53;flex-shrink:0}';
            doc += '.overview .info h2{font-size:18px;margin-bottom:4px}';
            doc += '.overview .info .meta{color:#666;font-size:13px}';
            doc += '.overview .info .trend{font-size:12px;color:#226a53;margin-top:4px}';
            doc += 'table{width:100%;border-collapse:collapse;margin-bottom:24px}';
            doc += 'th,td{padding:10px 14px;text-align:left;font-size:13px;border-bottom:1px solid #e0e0d8}';
            doc += 'th{background:#f0f0eb;color:#333;font-weight:600;font-size:11px;text-transform:uppercase;letter-spacing:0.05em}';
            doc += 'tr:hover{background:#fafaf5}';
            doc += '.badge{display:inline-block;padding:2px 10px;border-radius:10px;font-size:11px;font-weight:600}';
            doc += '.badge-green{background:#dff0e8;color:#226a53}';
            doc += '.badge-amber{background:#fff3d6;color:#b8860b}';
            doc += '.badge-gray{background:#e8e8e4;color:#888}';
            doc += '.bar{height:8px;background:#e0e0d8;border-radius:4px;overflow:hidden;margin-top:4px}';
            doc += '.bar-fill{height:100%;border-radius:4px}';
            doc += '.section-title{font-size:16px;color:#226a53;margin-bottom:12px;margin-top:24px;padding-bottom:8px;border-bottom:2px solid #e0e0d8}';
            doc += '.ai-box{background:#f7faf8;border-left:4px solid #226a53;padding:14px 18px;border-radius:8px;margin-bottom:16px;font-size:13px;color:#444}';
            doc += '.ai-box .label{font-size:10px;text-transform:uppercase;letter-spacing:0.08em;color:#226a53;font-weight:600;margin-bottom:4px}';
            doc += '.breakdown-item{display:flex;align-items:center;gap:12px;padding:10px 0;border-bottom:1px solid #ecece5}';
            doc += '.breakdown-item:last-child{border:0}';
            doc += '.breakdown-item .name{flex:1;font-size:13px}';
            doc += '.breakdown-item .score{font-size:14px;font-weight:600;width:40px;text-align:right}';
            doc += '.breakdown-item .bar-wrap{flex:2}';
            doc += '.footer{text-align:center;margin-top:32px;padding-top:16px;border-top:1px solid #e0e0d8;font-size:11px;color:#999}';
            doc += '@media print{body{padding:20px}.overview{break-inside:avoid}}';
            doc += '</style></head><body>';

            // Header
            doc += '<div class="header"><h1>Laporan Kompetensi Perbankan Syariah</h1><p>SmartBank Syariah AI &mdash; Virtual Laboratory</p><p style="margin-top:4px;font-size:12px;color:#999">Diterbitkan: ' + dateStr + '</p></div>';

            // Overview
            doc += '<div class="overview"><div class="circle">' + overall + '</div>';
            doc += '<div class="info"><h2>Skor Kompetensi Keseluruhan</h2>';
            doc += '<div class="meta">Level Terselesaikan: ' + levelsCompleted + '/' + totalLevels + ' &bull; Total Periode: ' + history.length + ' bulan</div>';
            if (trend > 0) doc += '<div class="trend">&#9650; Naik ' + trend + ' poin dari bulan sebelumnya</div>';
            else if (trend < 0) doc += '<div class="trend" style="color:#c0392b">&#9660; Turun ' + Math.abs(trend) + ' poin dari bulan sebelumnya</div>';
            else doc += '<div class="trend">Stabil dari bulan sebelumnya</div>';
            doc += '</div></div>';

            // Monthly breakdown table
            doc += '<h3 class="section-title">Riwayat Evaluasi Bulanan</h3>';
            doc += '<table><thead><tr><th>Periode</th><th>Mudharabah</th><th>Murabahah</th><th>Musyarakah</th><th>Wadiah</th><th>Kepatuhan</th><th>Rata-rata</th></tr></thead><tbody>';
            for (var i = 0; i < history.length; i++) {
                var h = history[i];
                var mn = allMonths[h.month];
                doc += '<tr><td><strong>' + mn + ' ' + h.year + '</strong></td>';
                for (var lid = 1; lid <= 5; lid++) {
                    var s = h.levels[lid] || 0;
                    doc += '<td>' + (s > 0 ? s : '-') + '</td>';
                }
                doc += '<td><strong>' + h.overall + '</strong></td></tr>';
            }
            doc += '</tbody></table>';

            // Per-month AI Analysis
            doc += '<h3 class="section-title">Analisis AI per Bulan</h3>';
            for (var i2 = 0; i2 < history.length; i2++) {
                var h2 = history[i2];
                var mn2 = allMonths[h2.month];
                var insight = aiInsights[h2.aiIndex] || aiInsights[0];
                doc += '<div class="ai-box"><div class="label">' + mn2 + ' ' + h2.year + '</div><p>"' + insight + '"</p></div>';
            }

            // Competency breakdown
            doc += '<h3 class="section-title">Rincian Kompetensi per Akad</h3>';
            var curLevels = latest ? latest.levels : {};
            for (var lid2 = 1; lid2 <= 5; lid2++) {
                var sc = curLevels[lid2] || 0;
                var pct = Math.min(100, sc);
                var color = sc >= 70 ? '#226a53' : (sc >= 40 ? '#b8860b' : '#999');
                var badge = sc >= 70 ? '<span class="badge badge-green">LULUS</span>' : (sc > 0 ? '<span class="badge badge-amber">Dalam Proses</span>' : '<span class="badge badge-gray">Belum</span>');
                doc += '<div class="breakdown-item"><div class="name">' + levelNames[lid2] + '</div>';
                doc += '<div class="bar-wrap"><div class="bar"><div class="bar-fill" style="width:' + pct + '%;background:' + color + '"></div></div></div>';
                doc += '<div class="score" style="color:' + color + '">' + (sc > 0 ? sc : '-') + '</div>';
                doc += '<div>' + badge + '</div></div>';
            }

            // Latest recommendation
            if (latest) {
                var rec = aiInsights[latest.aiIndex] || aiInsights[0];
                doc += '<h3 class="section-title">Rekomendasi AI</h3>';
                doc += '<div class="ai-box"><p>"' + rec + '"</p></div>';
            }

            doc += '<div class="footer">Laporan ini digenerate otomatis oleh SmartBank Syariah AI &mdash; Data diperbarui setiap bulan</div>';
            doc += '</body></html>';

            var blob = new Blob([doc], { type: 'text/html' });
            var url = URL.createObjectURL(blob);
            var a = document.createElement('a');
            a.href = url;
            a.download = 'Laporan_Kompetensi_' + now.getFullYear() + '_' + (now.getMonth()+1) + '.html';
            document.body.appendChild(a);
            a.click();
            document.body.removeChild(a);
            URL.revokeObjectURL(url);
        };

        // Click outside modal to close
        document.getElementById('raporOverlay').addEventListener('click', function(e) {
            if (e.target === this) window.closeRapor();
        });

        // Auto-sync when page loads
        document.addEventListener('DOMContentLoaded', function() {
            var history = initEvaluationHistory();
            syncWithCurrentScores(history);
        });
    })();
    </script>
    <script src="../assets/js/help-menu.js"></script>
</body>

</html>