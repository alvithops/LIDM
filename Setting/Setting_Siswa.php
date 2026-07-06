<!DOCTYPE html>

<html lang="id">
<script>document.documentElement.className=localStorage.getItem('appTheme')==='light'?'light':'dark'</script>

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title data-i18n="setting.page_title">Setelan - SmartBank Syariah AI</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&amp;family=Inter:wght@400;500;600&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <style>
        body {
            background-color: #131313;
            color: #e5e2e1;
            font-family: 'Plus Jakarta Sans', sans-serif;
            overflow-x: hidden;
        }

        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }

        .glass-card {
            background: rgba(34, 34, 34, 0.6);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(142, 213, 185, 0.1);
        }

        .toggle-checkbox:checked+.toggle-label {
            background-color: #8ed5b9;
        }

        .toggle-checkbox:checked+.toggle-label .toggle-dot {
            transform: translateX(100%);
        }

        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 6px;
        }

        ::-webkit-scrollbar-track {
            background: #1a1a1a;
        }

        ::-webkit-scrollbar-thumb {
            background: #353534;
            border-radius: 10px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #8ed5b9;
        }
    </style>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "on-tertiary-container": "#e3bf81",
                        "charcoal-surface": "#1A1A1A",
                        "on-primary": "#003829",
                        "on-primary-fixed-variant": "#00513d",
                        "surface-dim": "#131313",
                        "primary-container": "#0d5c46",
                        "inverse-on-surface": "#313030",
                        "surface-tint": "#8ed5b9",
                        "on-tertiary-fixed": "#271900",
                        "on-secondary-container": "#ffede3",
                        "bronze-accent": "#AD844A",
                        "sharia-green-deep": "#083B2D",
                        "outline-variant": "#3f4944",
                        "primary-fixed": "#aaf1d4",
                        "outline": "#89938d",
                        "secondary-container": "#ad5401",
                        "secondary-fixed": "#ffdcc7",
                        "on-error": "#690005",
                        "on-surface": "#e5e2e1",
                        "on-background": "#e5e2e1",
                        "on-secondary-fixed-variant": "#733600",
                        "ivory-text": "#F5F5F0",
                        "on-tertiary-fixed-variant": "#5b4311",
                        "on-primary-container": "#8cd2b6",
                        "secondary-fixed-dim": "#ffb787",
                        "primary-fixed-dim": "#8ed5b9",
                        "surface-container-low": "#1c1b1b",
                        "surface-variant": "#353534",
                        "surface-container-high": "#2a2a2a",
                        "tertiary-fixed-dim": "#e6c183",
                        "surface-bright": "#393939",
                        "on-tertiary": "#422d00",
                        "tertiary": "#e6c183",
                        "on-secondary-fixed": "#311300",
                        "background": "#131313",
                        "error-container": "#93000a",
                        "on-primary-fixed": "#002117",
                        "secondary": "#ffb787",
                        "primary": "#8ed5b9",
                        "on-surface-variant": "#bfc9c2",
                        "surface-container": "#201f1f",
                        "surface-container-highest": "#353534",
                        "inverse-surface": "#e5e2e1",
                        "inverse-primary": "#226a53",
                        "tertiary-fixed": "#ffdea8",
                        "error": "#ffb4ab",
                        "on-secondary": "#512400",
                        "warning-amber": "#FFBF00",
                        "surface": "#131313",
                        "on-error-container": "#ffdad6",
                        "surface-container-lowest": "#0e0e0e",
                        "tertiary-container": "#674d1a"
                    },
                    "fontFamily": {
                        "label-caps": ["Inter"],
                        "data-mono": ["Inter"],
                        "body-md": ["Plus Jakarta Sans"],
                        "headline-md": ["Plus Jakarta Sans"],
                        "headline-lg": ["Plus Jakarta Sans"]
                    },
                    "fontSize": {
                        "label-caps": ["12px", { "lineHeight": "1", "letterSpacing": "0.05em", "fontWeight": "600" }],
                        "data-mono": ["14px", { "lineHeight": "1.4", "fontWeight": "500" }],
                        "body-md": ["16px", { "lineHeight": "1.5", "fontWeight": "400" }],
                        "headline-md": ["24px", { "lineHeight": "1.3", "fontWeight": "600" }],
                        "headline-lg": ["40px", { "lineHeight": "1.2", "letterSpacing": "-0.02em", "fontWeight": "700" }]
                    }
                }
            }
        }
    </script>
</head>

<body class="bg-surface">
    <!-- Sidebar Navigation -->
    <aside
        class="w-[280px] h-screen fixed left-0 top-0 bg-charcoal-surface border-r border-outline-variant hidden md:flex flex-col z-50">
        <div class="p-unit-lg border-b border-outline-variant">
            <h1 class="font-headline-md text-headline-md font-bold text-primary" data-i18n="setting.sidebar.brand">SmartBank Syariah AI</h1>
            <p class="font-label-caps text-label-caps text-on-surface-variant mt-1" data-i18n="setting.sidebar.subtitle">Virtual Laboratory</p>
        </div>
        <nav class="flex-1 py-unit-md overflow-y-auto">
            <!-- Navigation Items Mapping -->
            <a class="flex items-center gap-4 text-on-surface-variant hover:text-ivory-text px-6 py-3 hover:bg-surface-variant/50 transition-colors duration-200"
                href="../Dashboard_Siswa/Dashboard_siswa.php">
                <span class="material-symbols-outlined">dashboard</span>
                <span class="font-body-md text-body-md" data-i18n="setting.sidebar.dashboard">Dashboard</span>
            </a>
            <a class="flex items-center gap-4 text-on-surface-variant hover:text-ivory-text px-6 py-3 hover:bg-surface-variant/50 transition-colors duration-200"
                href="../Simulasi/Simulasi_Siswa.php">
                <span class="material-symbols-outlined">psychology</span>
                <span class="font-body-md text-body-md" data-i18n="setting.sidebar.simulasi">Simulasi</span>
            </a>
            <a class="flex items-center gap-4 text-on-surface-variant hover:text-ivory-text px-6 py-3 hover:bg-surface-variant/50 transition-colors duration-200"
                href="../Pusat_Kompetensi/Pusat_Kompetensi_Siswa.php">
                <span class="material-symbols-outlined">military_tech</span>
                <span class="font-body-md text-body-md" data-i18n="setting.sidebar.kompetensi">Kompetensi</span>
            </a>
            <a class="flex items-center gap-4 text-on-surface-variant hover:text-ivory-text px-6 py-3 hover:bg-surface-variant/50 transition-colors duration-200"
                href="../Riwayat/Riwayat_Siswa.php">
                <span class="material-symbols-outlined">history</span>
                <span class="font-body-md text-body-md" data-i18n="setting.sidebar.riwayat">Riwayat</span>
            </a>
            <a class="flex items-center gap-4 bg-primary/10 text-primary border-l-4 border-secondary-fixed-dim px-6 py-3 active:scale-[0.99] transition-transform"
                href="Setting_Siswa.php">
                <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">settings</span>
                <span class="font-body-md text-body-md" data-i18n="setting.sidebar.setelan">Setelan</span>
            </a>
        </nav>
        <div class="p-unit-md border-t border-outline-variant flex flex-col gap-2">
            <a class="flex items-center gap-4 text-on-surface-variant hover:text-ivory-text px-6 py-3 hover:bg-surface-variant/50 transition-colors duration-200 cursor-pointer"
                onclick="window.openHelp()">
                <span class="material-symbols-outlined">help</span>
                <span class="font-body-md text-body-md" data-i18n="setting.sidebar.bantuan">Bantuan</span>
            </a>
            <a id="logoutLink" class="flex items-center gap-4 text-error px-6 py-3 hover:bg-error-container/20 transition-colors duration-200 rounded-lg"
                href="../Login/login.php">
                <span class="material-symbols-outlined">logout</span>
                <span class="font-body-md text-body-md" data-i18n="setting.sidebar.keluar">Keluar</span>
            </a>
        </div>
    </aside>
    <!-- Top Navigation Bar -->
    <header
        class="fixed top-0 right-0 w-full md:w-[calc(100%-280px)] h-16 z-40 bg-charcoal-surface/80 backdrop-blur-md flex justify-between items-center px-gutter border-b border-outline-variant/10 shadow-sm">
        <div class="flex items-center gap-4 md:hidden">
            <span class="material-symbols-outlined text-primary">menu</span>
            <span class="font-headline-md text-[18px] font-bold text-primary">SmartBank AI</span>
        </div>
        <div class="hidden md:flex items-center gap-4">
            <span class="font-label-caps text-label-caps text-primary border-b-2 border-primary pb-1" data-i18n="setting.topbar.title">Setelan
                Pengguna</span>
        </div>
        <div class="flex items-center gap-unit-md">
            <div
                class="flex items-center gap-2 px-3 py-1 bg-surface-container rounded-full border border-outline-variant/30">
                <span class="material-symbols-outlined text-secondary-fixed-dim text-sm"
                    style="font-variation-settings: 'FILL' 1;">bolt</span>
                <span class="font-label-caps text-label-caps text-ivory-text" data-i18n="setting.topbar.xp">2,450 XP</span>
            </div>
            <div
                class="hidden lg:flex items-center gap-2 px-3 py-1 bg-surface-container rounded-full border border-outline-variant/30">
                <span class="material-symbols-outlined text-primary text-sm">account_balance_wallet</span>
                <span class="font-label-caps text-label-caps text-on-surface" data-i18n="setting.topbar.balance">Rp 5.000.000</span>
            </div>
            <div class="flex items-center gap-3">
                <span
                    class="material-symbols-outlined text-on-surface-variant hover:text-primary transition-colors cursor-pointer">notifications</span>
                    <div
                        class="w-8 h-8 rounded-full bg-primary-container flex items-center justify-center overflow-hidden border border-primary/20">
                        <img id="settingAvatarSmall" alt="Student Avatar" class="w-full h-full object-cover"
                            data-alt="A stylized professional 3D avatar of a male student wearing business casual attire, with short dark hair and friendly facial features. The background is a clean, corporate gradient of deep greens and charcoals, matching a high-end financial dashboard aesthetic."
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuC_dkS36HQoR_6v8R6sWRAelVAA3ibna3WafGqvPUloxJsZE-N2JMtNPamEjCYMkmje2HCNSIWX7CplNHgS2HjVYdgJDuRaVMXq-ea0IwSJPyrz4CCa9mtFEcCehEnEsR-wjvoEHUFh0dDc--gq1-e2bdnsI0q7nFi6GlcU3VsoCNcIGpq_1DszGe4dfoxXS7mKzn3LTYGp02fbRPOp1-RNbCTBNevU6NqSk63O76AxFktVE9uisQi1Hw" />
                    </div>
            </div>
        </div>
    </header>
    <!-- Main Content Area -->
    <main class="pt-24 pb-24 px-6 md:px-10 md:ml-[280px] min-h-screen">
        <!-- Header -->
        <div class="mb-8">
            <h2 class="font-headline-lg text-[32px] md:text-headline-lg text-ivory-text mb-2" data-i18n="setting.page_title_main">Setelan Sistem</h2>
            <p class="font-body-md text-body-md text-on-surface-variant max-w-2xl" data-i18n="setting.page_desc">Konfigurasikan lingkungan simulasi
                dan profil akademik Anda untuk pengalaman belajar perbankan syariah yang optimal.</p>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-10 gap-6 items-stretch">
            <!-- Left Column: Settings Categories -->
            <div class="lg:col-span-6 flex flex-col gap-6">
                <!-- Section: Profile Settings -->
                <section class="glass-card rounded-xl p-6 md:p-8">
                    <div class="flex items-center gap-3 mb-6">
                        <span class="material-symbols-outlined text-primary">person_outline</span>
                        <h3 class="font-headline-md text-[20px] text-ivory-text" data-i18n="setting.profile.title">Profil Mahasiswa</h3>
                    </div>
                    <div class="flex flex-col md:flex-row gap-6 items-start">
                        <div class="relative group shrink-0">
                            <div
                                class="w-24 h-24 rounded-2xl overflow-hidden border-2 border-primary/30 group-hover:border-primary transition-colors cursor-pointer" id="profilePhotoWrap">
                                <img id="settingProfileImg" alt="Student Profile Picture" class="w-full h-full object-cover"
                                    data-alt="Close up of a stylized 3D avatar for a student profile, featuring a modern clean design with soft lighting. The character has a professional look suitable for an academic banking environment. The lighting is low-key with a subtle primary green rim light."
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuC4E2h5dOkswgLeCQblmgqPzsMz2Jnb0Vv-UpCoOfhVIEnqzKXhxb2oOdjfHrEd8k-Wtk9HEi1rJ6Hou1r82chwfFlJazB1M3Q_aJ83-qTL-xyG35DJy6C0t7eYkinye8JERD9LDCDNwlSfXOiYsvYLO46AaSyNwqDDb-z0IwdqpoFaWgpzzfOGjcSl7hDJX-oipEgsGKRYVzZKRhIkBi5IKdwIkv2EQJyuE8MT7z0QEz3iaXRBwgvGHA" />
                            </div>
                            <button id="btnEditPhoto"
                                class="absolute -bottom-2 -right-2 bg-primary text-on-primary w-8 h-8 rounded-full flex items-center justify-center shadow-lg hover:scale-105 transition-transform cursor-pointer">
                                <span class="material-symbols-outlined text-[18px]">edit</span>
                            </button>
                            <input id="fileProfilePhoto" type="file" accept="image/*" class="hidden" />
                        </div>
                        <div class="flex-1 grid grid-cols-1 md:grid-cols-2 gap-4 w-full">
                            <div class="flex flex-col gap-1.5">
                                <label class="font-label-caps text-label-caps text-on-surface-variant" data-i18n="setting.profile.nama_label">Nama
                                    Lengkap</label>
                                <input id="studentNameInput"
                                    class="bg-surface-container border border-outline-variant rounded-lg px-4 py-3 text-on-surface focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-all"
                                    type="text" value="Siswa" />
                            </div>
                            <div class="flex flex-col gap-1.5">
                                <label class="font-label-caps text-label-caps text-on-surface-variant" data-i18n="setting.profile.institusi_label">Institusi</label>
                                <input
                                    class="bg-surface-container border border-outline-variant rounded-lg px-4 py-3 text-on-surface focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-all"
                                    type="text" value="Universitas Ekonomi Syariah Mandiri" />
                            </div>
                            <div class="flex flex-col gap-1.5 md:col-span-2">
                                <label class="font-label-caps text-label-caps text-on-surface-variant" data-i18n="setting.profile.peran_label">Peran Default
                                    Simulasi</label>
                                <div class="relative">
                                    <select
                                        class="w-full bg-surface-container border border-outline-variant rounded-lg px-4 py-3 text-on-surface appearance-none focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary">
                                        <option>Customer Service Officer</option>
                                        <option selected="">Financial Sharia Analyst</option>
                                        <option>Credit Risk Manager</option>
                                        <option>Compliance Officer</option>
                                    </select>
                                    <span
                                        class="material-symbols-outlined absolute right-4 top-1/2 -translate-y-1/2 pointer-events-none text-on-surface-variant">expand_more</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Section: AI Supervisor Preferences -->
                <section class="glass-card rounded-xl p-6 md:p-8">
                    <div class="flex items-center gap-3 mb-2">
                        <span class="material-symbols-outlined text-primary">robot_2</span>
                        <h3 class="font-headline-md text-[20px] text-ivory-text" data-i18n="setting.ai_preferences.title">Preferensi AI Supervisor</h3>
                    </div>
                    <p class="font-body-md text-sm text-on-surface-variant mb-6" data-i18n="setting.ai_preferences.desc">Sesuaikan bagaimana asisten AI
                        memberikan bimbingan selama simulasi berlangsung.</p>
                    <div class="space-y-4">
                        <!-- Toggle 1 -->
                        <div
                            class="flex items-center justify-between p-4 bg-surface-container-low rounded-lg border border-outline-variant/20">
                            <div class="flex flex-col gap-1">
                                <span class="font-body-md text-on-surface font-semibold" data-i18n="setting.ai_preferences.toggle1_title">Umpan Balik Real-time</span>
                                <span class="text-xs text-on-surface-variant" data-i18n="setting.ai_preferences.toggle1_desc">Menerima saran instan saat melakukan input
                                    transaksi.</span>
                            </div>
                            <div
                                class="relative inline-block w-12 h-6 align-middle select-none transition duration-200 ease-in shrink-0">
                                <input checked=""
                                    class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-outline-variant border-4 appearance-none cursor-pointer z-10"
                                    id="toggle1" name="toggle1" type="checkbox" />
                                <label
                                    class="toggle-label block overflow-hidden h-6 rounded-full bg-surface-variant cursor-pointer transition-colors duration-200"
                                    for="toggle1">
                                    <span
                                        class="toggle-dot block w-6 h-6 rounded-full bg-ivory-text shadow transform transition-transform duration-200"></span>
                                </label>
                            </div>
                        </div>
                        <!-- Toggle 2 -->
                        <div
                            class="flex items-center justify-between p-4 bg-surface-container-low rounded-lg border border-outline-variant/20">
                            <div class="flex flex-col gap-1">
                                <div class="flex items-center gap-2">
                                    <span class="font-body-md text-on-surface font-semibold" data-i18n="setting.ai_preferences.toggle2_title">Peringatan Kepatuhan
                                        Syariah</span>
                                    <span
                                        class="px-2 py-0.5 bg-primary/10 text-[10px] text-primary rounded-full uppercase font-bold tracking-wider" data-i18n="setting.ai_preferences.toggle2_badge">Penting</span>
                                </div>
                                <span class="text-xs text-on-surface-variant" data-i18n="setting.ai_preferences.toggle2_desc">Notifikasi otomatis jika ada potensi
                                    pelanggaran akad atau prinsip syariah.</span>
                            </div>
                            <div
                                class="relative inline-block w-12 h-6 align-middle select-none transition duration-200 ease-in shrink-0">
                                <input checked=""
                                    class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-outline-variant border-4 appearance-none cursor-pointer z-10"
                                    id="toggle2" name="toggle2" type="checkbox" />
                                <label
                                    class="toggle-label block overflow-hidden h-6 rounded-full bg-surface-variant cursor-pointer transition-colors duration-200"
                                    for="toggle2">
                                    <span
                                        class="toggle-dot block w-6 h-6 rounded-full bg-ivory-text shadow transform transition-transform duration-200"></span>
                                </label>
                            </div>
                        </div>
                        <!-- Toggle 3 -->
                        <div
                            class="flex items-center justify-between p-4 bg-surface-container-low rounded-lg border border-outline-variant/20">
                            <div class="flex flex-col gap-1">
                                <span class="font-body-md text-on-surface font-semibold" data-i18n="setting.ai_preferences.toggle3_title">Mode Bimbingan Intensif</span>
                                <span class="text-xs text-on-surface-variant" data-i18n="setting.ai_preferences.toggle3_desc">Langkah-demi-langkah mendalam untuk
                                    skenario yang kompleks.</span>
                            </div>
                            <div
                                class="relative inline-block w-12 h-6 align-middle select-none transition duration-200 ease-in shrink-0">
                                <input
                                    class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-outline-variant border-4 appearance-none cursor-pointer z-10"
                                    id="toggle3" name="toggle3" type="checkbox" />
                                <label
                                    class="toggle-label block overflow-hidden h-6 rounded-full bg-surface-variant cursor-pointer transition-colors duration-200"
                                    for="toggle3">
                                    <span
                                        class="toggle-dot block w-6 h-6 rounded-full bg-ivory-text shadow transform transition-transform duration-200"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Section: Lab Configuration -->
                <section class="glass-card rounded-xl p-6 md:p-8">
                    <div class="flex items-center gap-3 mb-6">
                        <span class="material-symbols-outlined text-primary">tune</span>
                        <h3 class="font-headline-md text-[20px] text-ivory-text" data-i18n="setting.lab_config.title">Konfigurasi Laboratorium</h3>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="flex flex-col gap-1.5">
                            <label class="font-label-caps text-label-caps text-on-surface-variant" data-i18n="setting.lab_config.bahasa_label">Bahasa Sistem</label>
                            <div class="flex gap-2">
                                <button id="langIndonesia"
                                    class="flex-1 py-2.5 px-3 rounded-lg font-label-caps text-xs transition-colors" data-i18n="setting.lab_config.bahasa_id">BAHASA
                                    INDONESIA</button>
                                <button id="langEnglish"
                                    class="flex-1 py-2.5 px-3 rounded-lg font-label-caps text-xs transition-colors" data-i18n="setting.lab_config.bahasa_en">ENGLISH</button>
                            </div>
                        </div>
                        <div class="flex flex-col gap-1.5">
                            <label class="font-label-caps text-label-caps text-on-surface-variant" data-i18n="setting.lab_config.kesulitan_label">Tingkat
                                Kesulitan</label>
                            <div class="relative">
                                <select
                                    class="w-full bg-surface-container border border-outline-variant rounded-lg px-4 py-2.5 text-on-surface appearance-none focus:outline-none focus:border-primary">
                                    <option data-i18n="setting.lab_config.kesulitan_beginner">Beginner (Guided)</option>
                                    <option selected="" data-i18n="setting.lab_config.kesulitan_intermediate">Intermediate (Standard)</option>
                                    <option data-i18n="setting.lab_config.kesulitan_professional">Professional (Hardcore)</option>
                                </select>
                                <span
                                    class="material-symbols-outlined absolute right-4 top-1/2 -translate-y-1/2 pointer-events-none text-on-surface-variant">expand_more</span>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <!-- Right Column: Theme, Security, Status & Help -->
            <div class="lg:col-span-4 flex flex-col gap-6">
                <!-- Theme Toggle Card -->
                <div id="themeToggleCard"
                    class="glass-card rounded-xl p-6 transition-colors duration-300">
                    <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                        <div class="flex items-center gap-4">
                            <div
                                class="w-12 h-12 rounded-xl flex items-center justify-center bg-primary/10 transition-colors duration-300 shrink-0">
                                <span class="material-symbols-outlined text-primary"
                                    style="font-variation-settings: 'FILL' 1;">dark_mode</span>
                            </div>
                            <div class="min-w-0">
                                <p class="font-body-md font-semibold text-ivory-text" id="themeStatusText" data-i18n="setting.theme.dark_title">Tema Gelap (Aktif)</p>
                                <p class="text-xs text-on-surface-variant mt-0.5" id="themeDescriptionText" data-i18n="setting.theme.dark_desc">Mode malam dioptimalkan untuk fokus jangka
                                    panjang selama riset syariah.</p>
                            </div>
                        </div>
                        <button id="toggleLightMode"
                            class="shrink-0 w-full md:w-auto px-4 py-2.5 rounded-lg text-xs font-label-caps font-bold transition-colors duration-200 bg-primary/20 text-primary hover:bg-primary/30">UBAH
                            KE TERANG</button>
                    </div>
                </div>
                <!-- Section: Security -->
                <section class="glass-card rounded-xl p-6 relative overflow-hidden">
                    <div class="absolute top-0 left-0 w-1 h-full bg-secondary-fixed-dim"></div>
                    <div class="flex items-center gap-3 mb-6">
                        <span class="material-symbols-outlined text-secondary">security</span>
                        <h3 class="font-headline-md text-[20px] text-ivory-text" data-i18n="setting.security.title">Keamanan</h3>
                    </div>
                    <div class="space-y-3">
                        <button id="changePasswordBtn"
                            class="w-full flex items-center justify-between p-4 bg-surface-container hover:bg-surface-variant transition-all rounded-lg group border border-outline-variant/10">
                            <div class="flex items-center gap-3">
                                <span class="material-symbols-outlined text-on-surface-variant">lock</span>
                                <span class="font-body-md text-on-surface" data-i18n="setting.security.password_btn">Ubah Kata Sandi</span>
                            </div>
                            <span
                                class="material-symbols-outlined text-on-surface-variant group-hover:translate-x-1 transition-transform">chevron_right</span>
                        </button>
                        <button
                            class="w-full flex items-center justify-between p-4 bg-surface-container hover:bg-surface-variant transition-all rounded-lg group border border-outline-variant/10">
                            <div class="flex items-center gap-3">
                                <span class="material-symbols-outlined text-on-surface-variant">dialpad</span>
                                <span class="font-body-md text-on-surface" data-i18n="setting.security.pin_btn">PIN Simulasi Finansial</span>
                            </div>
                            <span
                                class="material-symbols-outlined text-on-surface-variant group-hover:translate-x-1 transition-transform">chevron_right</span>
                        </button>
                        <div class="p-4 bg-surface-container rounded-lg border border-outline-variant/10">
                            <div class="flex items-center justify-between mb-2">
                                <div class="flex items-center gap-3">
                                    <span class="material-symbols-outlined text-on-surface-variant">verified_user</span>
                                    <span class="font-body-md text-on-surface" data-i18n="setting.security.2fa">Otentikasi 2-Faktor</span>
                                </div>
                                <div class="w-10 h-5 bg-primary/20 rounded-full relative">
                                    <div class="w-5 h-5 bg-primary rounded-full shadow absolute right-0"></div>
                                </div>
                            </div>
                            <p class="text-[11px] text-on-surface-variant" data-i18n="setting.security.2fa_desc">Dilindungi menggunakan aplikasi Google
                                Authenticator atau Email.</p>
                        </div>
                    </div>
                </section>
                <!-- Status Card -->
                <section class="bg-gradient-to-br from-primary-container to-primary/30 rounded-xl p-6 text-on-primary">
                    <div class="flex items-center justify-between mb-5">
                        <h4
                            class="font-label-caps text-label-caps text-primary bg-white/20 inline-block px-3 py-1 rounded">
                            <span data-i18n="setting.system_status.title">STATUS SISTEM</span></h4>
                        <span class="flex items-center gap-1.5 text-[11px] text-primary/80">
                            <span class="w-1.5 h-1.5 bg-primary rounded-full animate-pulse"></span>
                            Live
                        </span>
                    </div>
                    <div class="space-y-3">
                        <div class="flex justify-between items-center text-sm border-b border-white/10 pb-2.5">
                            <span class="text-primary/80" data-i18n="setting.system_status.lab_version">Versi Lab</span>
                            <span class="font-bold">v2.4.1-stable</span>
                        </div>
                        <div class="flex justify-between items-center text-sm border-b border-white/10 pb-2.5">
                            <span class="text-primary/80" data-i18n="setting.system_status.ai_engine">Engine AI</span>
                            <span class="font-bold">Ifta-GPT 4.0</span>
                        </div>
                        <div class="flex justify-between items-center text-sm">
                            <span class="text-primary/80" data-i18n="setting.system_status.server_status">Status Server</span>
                            <span class="flex items-center gap-1.5 font-bold">
                                <span class="w-2 h-2 bg-primary rounded-full animate-pulse"></span>
                                <span data-i18n="setting.system_status.optimal">Optimal</span>
                            </span>
                        </div>
                    </div>
                    <button
                        class="w-full mt-5 py-2.5 bg-white text-primary font-bold rounded-lg hover:bg-white/90 transition-colors" data-i18n="setting.system_status.save_btn">
                        Simpan Semua Perubahan
                    </button>
                </section>
                <!-- Help Card -->
                <div class="glass-card rounded-xl p-6 flex flex-col items-center text-center gap-4">
                    <div class="w-14 h-14 rounded-full bg-primary/10 flex items-center justify-center">
                        <span class="material-symbols-outlined text-[32px] text-primary">contact_support</span>
                    </div>
                    <div>
                        <p class="font-body-md font-bold text-ivory-text mb-1" data-i18n="setting.help.title">Butuh Bantuan Teknis?</p>
                        <p class="text-xs text-on-surface-variant leading-relaxed" data-i18n="setting.help.desc">Hubungi tim administrator laboratorium melalui
                            portal dukungan.</p>
                    </div>
                    <a class="w-full py-2.5 bg-primary/20 text-primary font-bold rounded-lg hover:bg-primary/30 transition-colors text-sm" href="Setting_Siswa.php" data-i18n="setting.help.btn">Kunjungi Pusat Bantuan</a>
                </div>
            </div>
        </div>
    </main>
    <!-- Mobile Bottom Navigation -->
    <nav
        class="fixed bottom-0 left-0 w-full bg-charcoal-surface border-t border-outline-variant md:hidden flex justify-around items-center py-3 z-50">
        <a class="flex flex-col items-center gap-1 text-on-surface-variant" href="../Dashboard_Siswa/Dashboard_siswa.php">
            <span class="material-symbols-outlined text-[20px]">dashboard</span>
            <span class="text-[10px] font-label-caps" data-i18n="setting.bottomnav.home">Home</span>
        </a>
        <a class="flex flex-col items-center gap-1 text-on-surface-variant" href="../Simulasi/Simulasi_Siswa.php">
            <span class="material-symbols-outlined text-[20px]">psychology</span>
            <span class="text-[10px] font-label-caps" data-i18n="setting.bottomnav.lab">Lab</span>
        </a>
        <a class="flex flex-col items-center gap-1 text-primary" href="Setting_Siswa.php">
            <span class="material-symbols-outlined text-[24px]"
                style="font-variation-settings: 'FILL' 1;">settings</span>
            <span class="text-[10px] font-label-caps" data-i18n="setting.sidebar.setelan">Setelan</span>
        </a>
        <a class="flex flex-col items-center gap-1 text-on-surface-variant" href="../Dashboard_Siswa/Dashboard_siswa.php">
            <span class="material-symbols-outlined text-[20px]">account_circle</span>
            <span class="text-[10px] font-label-caps" data-i18n="setting.bottomnav.profil">Profil</span>
        </a>
    </nav>
    <script>
        // Populate student name from localStorage
        document.addEventListener('DOMContentLoaded', () => {
            const studentNameInput = document.getElementById('studentNameInput');
            const currentUser = localStorage.getItem('currentUser') || 'Siswa';
            if (studentNameInput) {
                studentNameInput.value = currentUser;
            }

            // Language buttons
            const langIndonesia = document.getElementById('langIndonesia');
            const langEnglish = document.getElementById('langEnglish');
            
            function applyLanguageButtons() {
                const lang = localStorage.getItem('appLanguage') || 'id';
                if (lang === 'en') {
                    langIndonesia.className = 'flex-1 py-2 px-3 rounded-lg font-label-caps text-xs bg-surface-container border border-outline-variant text-on-surface-variant';
                    langEnglish.className = 'flex-1 py-2 px-3 rounded-lg font-label-caps text-xs bg-primary/20 text-primary border border-primary/50';
                } else {
                    langIndonesia.className = 'flex-1 py-2 px-3 rounded-lg font-label-caps text-xs bg-primary/20 text-primary border border-primary/50';
                    langEnglish.className = 'flex-1 py-2 px-3 rounded-lg font-label-caps text-xs bg-surface-container border border-outline-variant text-on-surface-variant';
                }
            }

            langIndonesia.addEventListener('click', () => {
                if (window.appI18n) {
                    window.appI18n.setLanguage('id');
                } else {
                    localStorage.setItem('appLanguage', 'id');
                }
                applyLanguageButtons();
            });

            langEnglish.addEventListener('click', () => {
                if (window.appI18n) {
                    window.appI18n.setLanguage('en');
                } else {
                    localStorage.setItem('appLanguage', 'en');
                }
                applyLanguageButtons();
            });

            // Theme toggle
            const toggleLightMode = document.getElementById('toggleLightMode');
            const themeToggleCard = document.getElementById('themeToggleCard');
            const themeStatusText = document.getElementById('themeStatusText');
            const themeDescriptionText = document.getElementById('themeDescriptionText');
            const themeIcon = themeToggleCard ? themeToggleCard.querySelector('.material-symbols-outlined') : null;

            function applyThemeUI() {
                const savedTheme = localStorage.getItem('appTheme') || 'dark';
                if (savedTheme === 'light') {
                    toggleLightMode.textContent = 'UBAH KE GELAP';
                    themeStatusText.textContent = 'Tema Terang (Aktif)';
                    themeDescriptionText.textContent = 'Mode terang untuk sesi laboratorium siang hari.';
                    themeToggleCard.className = 'glass-card rounded-xl p-6 transition-colors duration-300';
                    themeToggleCard.style.borderColor = 'rgba(255, 191, 0, 0.2)';
                    themeToggleCard.style.background = 'rgba(62, 55, 20, 0.5)';
                    themeIcon.textContent = 'light_mode';
                } else {
                    toggleLightMode.textContent = 'UBAH KE TERANG';
                    themeStatusText.textContent = 'Tema Gelap (Aktif)';
                    themeDescriptionText.textContent = 'Mode malam dioptimalkan untuk fokus jangka panjang selama riset syariah.';
                    themeToggleCard.className = 'glass-card rounded-xl p-6 transition-colors duration-300';
                    themeToggleCard.style.borderColor = '';
                    themeToggleCard.style.background = '';
                    themeIcon.textContent = 'dark_mode';
                }
                // Apply theme globally
                if (typeof window.appI18n !== 'undefined') {
                    window.appI18n.applyTheme();
                } else if (savedTheme === 'light') {
                    document.documentElement.classList.remove('dark');
                } else {
                    document.documentElement.classList.add('dark');
                }
            }

            toggleLightMode.addEventListener('click', () => {
                const current = localStorage.getItem('appTheme') || 'dark';
                const next = current === 'dark' ? 'light' : 'dark';
                if (typeof window.appI18n !== 'undefined') {
                    window.appI18n.setTheme(next);
                } else {
                    localStorage.setItem('appTheme', next);
                }
                applyThemeUI();
            });

            // Password change button
            const changePasswordBtn = document.getElementById('changePasswordBtn');
            changePasswordBtn.addEventListener('click', () => {
                localStorage.setItem('redirectToPasswordChange', 'true');
                window.location.href = '../Login/login.php';
            });

            // Profile photo upload
            function applyProfilePhoto(src) {
                var imgs = document.querySelectorAll('#settingProfileImg, #settingAvatarSmall');
                for (var i = 0; i < imgs.length; i++) {
                    if (imgs[i]) imgs[i].src = src;
                }
            }

            var savedPhoto = localStorage.getItem('profilePhoto');
            if (savedPhoto) applyProfilePhoto(savedPhoto);

            function handlePhotoUpload() {
                var input = document.getElementById('fileProfilePhoto');
                input.click();
                input.onchange = function() {
                    if (!input.files || !input.files[0]) return;
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        var base64 = e.target.result;
                        localStorage.setItem('profilePhoto', base64);
                        applyProfilePhoto(base64);
                    };
                    reader.readAsDataURL(input.files[0]);
                };
            }

            document.getElementById('btnEditPhoto').addEventListener('click', handlePhotoUpload);
            document.getElementById('profilePhotoWrap').addEventListener('click', handlePhotoUpload);

            // Load saved preferences
            applyLanguageButtons();
            applyThemeUI();
        });
    </script>
    <script>
        (function () {
            const appRoutes = {
                login: '../Login/login.php',
                student: {
                    dashboard: '../Dashboard_Siswa/Dashboard_siswa.php',
                    simulasi: '../Simulasi/Simulasi_Siswa.php',
                    kompetensi: '../Pusat_Kompetensi/Pusat_Kompetensi_Siswa.php',
                    riwayat: '../Riwayat/Riwayat_Siswa.php',
                    setting: 'Setting_Siswa.php'
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
            });
        })();

        // Cross-tab sync for theme
        window.addEventListener('storage', (e) => {
            if (e.key === 'appTheme') {
                applyThemeUI();
            } else if (e.key === 'appLanguage' && window.appI18n) {
                window.appI18n.applyTranslation();
            }
        });
    </script>
    <script src="../assets/js/i18n.js"></script>
    <script src="../assets/js/help-menu.js"></script>
</body>

</html>