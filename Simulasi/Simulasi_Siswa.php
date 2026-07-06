<!DOCTYPE html>

<html lang="id">
<script>document.documentElement.className=localStorage.getItem('appTheme')==='light'?'light':'dark'</script>

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title data-i18n="simulasi.page_title">SmartBank Syariah AI - Virtual Lab Simulation</title>
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
                        "headline-lg": ["Plus Jakarta Sans"],
                        "body-md": ["Plus Jakarta Sans"],
                        "label-caps": ["Inter"],
                        "data-mono": ["Inter"],
                        "body-lg": ["Plus Jakarta Sans"],
                        "headline-md": ["Plus Jakarta Sans"]
                    }
                }
            }
        }
    </script>
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
            display: inline-block;
            line-height: 1;
            text-transform: none;
            letter-spacing: normal;
            word-wrap: normal;
            white-space: nowrap;
            direction: ltr;
        }

        .glass-panel {
            background: rgba(26, 26, 26, 0.7);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(142, 213, 185, 0.1);
        }

        .chat-bubble-ai {
            border-bottom-left-radius: 4px;
        }

        .chat-bubble-user {
            border-bottom-right-radius: 4px;
        }

        .custom-scrollbar::-webkit-scrollbar {
            width: 4px;
        }

        .custom-scrollbar::-webkit-scrollbar-track {
            background: transparent;
        }

        .custom-scrollbar::-webkit-scrollbar-thumb {
            background: #3f4944;
            border-radius: 10px;
        }

        @keyframes subtle-glow {

            0%,
            100% {
                box-shadow: 0 0 15px rgba(142, 213, 185, 0.1);
            }

            50% {
                box-shadow: 0 0 25px rgba(142, 213, 185, 0.2);
            }
        }

        .ai-pulse {
            animation: subtle-glow 3s infinite ease-in-out;
        }
    </style>
</head>

<body class="bg-background text-on-surface font-body-md min-h-screen overflow-x-hidden">
    <!-- Sidebar Navigation (SideNavBar JSON implementation) -->
    <aside
        class="hidden md:flex flex-col h-full border-r border-outline-variant bg-charcoal-surface w-[280px] fixed left-0 top-0 z-40">
        <div class="p-6">
            <h1 class="font-headline-md text-headline-md font-bold text-primary mb-1" data-i18n="simulasi.sidebar.brand">SmartBank Syariah AI</h1>
            <p class="text-on-surface-variant text-sm opacity-70" data-i18n="simulasi.sidebar.subtitle">Virtual Laboratory</p>
        </div>
        <nav class="flex-1 px-3 space-y-1">
            <!-- Active: Simulasi -->
            <a class="flex items-center gap-4 text-on-surface-variant hover:text-ivory-text px-4 py-3 rounded-lg transition-colors duration-200"
                href="../Dashboard_Siswa/Dashboard_siswa.php">
                <span class="material-symbols-outlined">dashboard</span>
                <span class="font-medium" data-i18n="simulasi.sidebar.dashboard">Dashboard</span>
            </a>
            <a class="flex items-center gap-4 bg-primary/10 text-primary border-l-4 border-secondary-fixed-dim px-4 py-3 rounded-r-lg transition-transform active:scale-[0.99]"
                href="Simulasi_Siswa.php">
                <span class="material-symbols-outlined">psychology</span>
                <span class="font-medium" data-i18n="simulasi.sidebar.simulasi">Simulasi</span>
            </a>
            <a class="flex items-center gap-4 text-on-surface-variant hover:text-ivory-text px-4 py-3 rounded-lg transition-colors duration-200"
                href="../Pusat_Kompetensi/Pusat_Kompetensi_Siswa.php">
                <span class="material-symbols-outlined">military_tech</span>
                <span class="font-medium" data-i18n="simulasi.sidebar.kompetensi">Kompetensi</span>
            </a>
            <a class="flex items-center gap-4 text-on-surface-variant hover:text-ivory-text px-4 py-3 rounded-lg transition-colors duration-200"
                href="../Riwayat/Riwayat_Siswa.php">
                <span class="material-symbols-outlined">history</span>
                <span class="font-medium" data-i18n="simulasi.sidebar.riwayat">Riwayat</span>
            </a>
            <a class="flex items-center gap-4 text-on-surface-variant hover:text-ivory-text px-4 py-3 rounded-lg transition-colors duration-200"
                href="../Setting/Setting_Siswa.php">
                <span class="material-symbols-outlined">settings</span>
                <span class="font-medium" data-i18n="simulasi.sidebar.setelan">Setelan</span>
            </a>
        </nav>
        <div class="p-4 border-t border-outline-variant">
            <button onclick="window.location.href='Simulasi_Siswa.php'"
                class="w-full py-3 bg-primary text-on-primary font-bold rounded-lg mb-4 hover:brightness-110 transition-all cursor-pointer" data-i18n="simulasi.sidebar.mulai">
                Mulai Simulasi
            </button>
            <div class="space-y-1">
                <a class="flex items-center gap-4 text-on-surface-variant hover:text-ivory-text px-4 py-2 text-sm transition-colors cursor-pointer"
                    onclick="window.openHelp()">
                    <span class="material-symbols-outlined text-sm">help</span>
                    <span data-i18n="simulasi.sidebar.bantuan">Bantuan</span>
                </a>
                <a id="logoutLink" class="flex items-center gap-4 text-on-surface-variant hover:text-ivory-text px-4 py-2 text-sm transition-colors"
                    href="../Login/login.php">
                    <span class="material-symbols-outlined text-sm">logout</span>
                    <span data-i18n="simulasi.sidebar.keluar">Keluar</span>
                </a>
            </div>
        </div>
    </aside>
    <!-- Top Navigation (TopNavBar JSON implementation) -->
    <header
        class="fixed top-0 right-0 w-full md:w-[calc(100%-280px)] h-16 z-30 bg-charcoal-surface/80 backdrop-blur-md shadow-sm flex justify-between items-center px-6">
        <div class="flex items-center gap-4">
            <button class="md:hidden text-primary">
                <span class="material-symbols-outlined">menu</span>
            </button>
            <div class="flex flex-col">
                <span class="font-label-caps text-label-caps text-primary uppercase" data-i18n="simulasi.topbar.scenario_label">Scenario Active</span>
                <span class="font-semibold text-ivory-text" data-i18n="simulasi.topbar.scenario_value">Pembukaan Rekening Tabungan</span>
            </div>
        </div>
        <div class="flex items-center gap-6">
            <div class="hidden lg:flex items-center gap-4">
                <div class="px-3 py-1 bg-surface-container-high rounded-full flex items-center gap-2">
                    <span class="material-symbols-outlined text-warning-amber text-sm"
                        style="font-variation-settings: 'FILL' 1;">star</span>
                    <span class="text-sm font-bold text-on-surface" data-i18n="simulasi.topbar.xp">2,450 XP</span>
                </div>
                <div
                    class="px-3 py-1 bg-surface-container-high rounded-full flex items-center gap-2 border border-outline-variant">
                    <span class="text-sm font-medium text-on-surface-variant" data-i18n="simulasi.topbar.balance">Balance: Rp 5.000.000</span>
                </div>
            </div>
            <div class="flex items-center gap-3">
                <button
                    class="w-10 h-10 rounded-full flex items-center justify-center hover:bg-surface-variant transition-colors">
                    <span class="material-symbols-outlined text-on-surface-variant">notifications</span>
                </button>
                <div
                    class="w-10 h-10 rounded-full bg-primary-container flex items-center justify-center border border-primary/20">
                    <img alt="Student Profile Picture" class="w-full h-full rounded-full object-cover"
                        data-alt="A professional headshot of a young student wearing a neat university blazer, smiling confidently against a minimalist blurred office background with cool corporate lighting. The style is modern, sharp, and high-quality photography."
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuBIyIER9JTKhiFtjZF1Ed1bR0Z20yUt05dp2ZjSObqPowpitC_IAz6dD64YOA05IXi_d0_cQxPpQwzl5swZljfI6mzfwg4cS8_cAkbjeoKtiypkZIB_Npd4KyJpadSfRZDNC7pYPQXtprIW4zUWCybFpB8NaUZOPCmk_1zT1Y0XkZ_Tobx3nJMavvIecB2HUG5s7AJ2yfwlschkSOpQuqzwgs1FVMwbjb-qL15Yx4oVp_G2NcC3bKO4GQ" />
                </div>
            </div>
        </div>
    </header>
    <!-- Main Content Area -->
    <main class="md:ml-[280px] pt-16 min-h-screen">
        <div class="p-4 md:p-6 lg:p-8 grid grid-cols-1 lg:grid-cols-12 gap-6 max-w-container-max mx-auto">
            <!-- Left Panel: Simulation Interface (7 Columns) -->
            <div class="lg:col-span-7 flex flex-col gap-6">
                <!-- Main AI Chat Area -->
                <div class="glass-panel rounded-xl flex flex-col min-h-[400px] h-[calc(100vh-380px)] lg:h-[600px] shadow-lg relative overflow-hidden ai-pulse">
                    <!-- Virtual Customer Identity -->
                    <div
                        class="p-4 border-b border-outline-variant flex items-center justify-between bg-surface-container-low/50">
                        <div class="flex items-center gap-3">
                            <div class="relative">
                                <img id="studentCustomerAvatar" alt="AI Nasabah"
                                    class="w-12 h-12 rounded-full border-2 border-primary object-cover"
                                    data-alt="A realistic digital portrait of a professional-looking Indonesian woman in her late 30s, wearing a modest and elegant hijab and a business casual outfit. She has a friendly yet slightly inquisitive expression, set in a brightly lit, high-end modern bank interior. Professional lighting with soft shadows."
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuD_GuxPxYezEE2tH5FP0FV3xG0j4vQkKBXu7ZlaJHr4fW2PXlJ2Yc0PXDFsNMHxxBm9s_h5_D_oO3pK8nQ2zw7GYxIfo2YcTkBrZi9bTHVWmZt95UzUfgHSVLE8f7S4BgX_wH7nCOQKEV9llwqfLeiyvojw0plU9vXm63AnozQc2dDgxfrrBKPNbsO6hSBM-DIFicMMA5BTeTDOnkM2kJ00JEN3FDjvc7L7AmpE9jTK1tL3zSRTjZoh9g" />
                                <div
                                    class="absolute bottom-0 right-0 w-3 h-3 bg-green-500 rounded-full border-2 border-surface">
                                </div>
                            </div>
                            <div>
                                <h3 class="font-bold text-ivory-text leading-tight" data-i18n="simulasi.chat.nama_nasabah">
                                    <span id="studentCustomerName">Paydev</span>
                                </h3>
                                <span class="text-xs text-on-surface-variant" data-i18n="simulasi.chat.role_nasabah">
                                    <span id="studentCustomerRole">Partner Hidup Gweh</span>
                                </span>
                            </div>
                        </div>
                        <div class="flex gap-2 items-center">
                            <span id="studentCustomerStatus"
                                class="px-2 py-1 rounded bg-secondary-container/20 text-secondary text-[10px] font-bold uppercase tracking-wider" data-i18n="simulasi.chat.status_sabar">Status:
                                Sabar</span>
                            <span id="studentCustomerTone"
                                class="px-2 py-1 rounded bg-primary-container/20 text-primary text-[10px] font-bold uppercase tracking-wider" data-i18n="simulasi.chat.tone_formal">Tone:
                                Formal</span>
                            <div class="w-px h-6 bg-outline-variant mx-1"></div>
                            <span class="flex items-center gap-1 px-2 py-1 rounded bg-warning-amber/10 text-warning-amber text-[9px] font-bold uppercase tracking-wider">
                                <span class="w-1.5 h-1.5 rounded-full bg-warning-amber animate-pulse"></span>
                Admin Live
                            </span>
                            <button id="btnClearStudentChat" class="p-1 rounded hover:bg-surface-variant text-on-surface-variant hover:text-error transition-all" title="Hapus History Percakapan">
                                <span class="material-symbols-outlined text-sm">delete_sweep</span>
                            </button>
                        </div>
                    </div>
                    <!-- Chat Container -->
                    <div class="flex-1 overflow-y-auto p-6 space-y-6 custom-scrollbar" id="chat-container">
                        <!-- AI Message -->
                        <div class="flex gap-4 max-w-[85%]">
                            <div class="w-8 h-8 rounded-full bg-primary flex-shrink-0 flex items-center justify-center">
                                <span class="material-symbols-outlined text-on-primary text-sm">person</span>
                            </div>
                            <div
                                class="bg-surface-container-high p-4 rounded-2xl chat-bubble-ai border border-outline-variant/30">
                                <p class="text-sm leading-relaxed" data-i18n="simulasi.chat.ai_message" data-i18n-attr="html">Assalamu'alaikum, selamat siang. Saya Paydev. Saya
                                    berencana ingin memindahkan tabungan saya ke bank syariah agar lebih tenang. Bisakah
                                    Anda jelaskan apa saja pilihan produk tabungan di sini yang bebas riba?</p>
                                <span id="initialChatTime" class="text-[10px] text-on-surface-variant mt-2 block"></span>
                            </div>
                        </div>
                        <!-- Instruction Alert -->
                        <div class="flex justify-center">
                            <div
                                class="bg-primary/5 border border-primary/20 px-4 py-2 rounded-full flex items-center gap-2">
                                <span class="material-symbols-outlined text-primary text-sm">info</span>
                                <span class="text-xs text-primary font-medium" data-i18n="simulasi.chat.instruction" data-i18n-attr="html">Sambut nasabah dengan salam dan tawarkan
                                    bantuan profesional.</span>
                            </div>
                        </div>
                    </div>
                    <!-- Chat Interaction -->
                    <div class="p-4 bg-surface-container border-t border-outline-variant">
                        <div class="flex gap-4 items-center">
                            <input
                                class="flex-1 bg-surface-container-lowest border border-outline-variant rounded-full px-5 py-3 focus:ring-1 focus:ring-primary focus:border-primary outline-none text-sm"
                                placeholder="Ketik jawaban Anda di sini..." type="text" data-i18n="simulasi.chat.placeholder" data-i18n-attr="placeholder" />
                            <button
                                class="w-12 h-12 bg-primary text-on-primary rounded-full flex items-center justify-center shadow-lg hover:scale-105 active:scale-95 transition-transform">
                                <span class="material-symbols-outlined">send</span>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Simulation Action Buttons -->
                <div class="grid grid-cols-3 gap-4">
                    <button id="btnSambut"
                        class="flex flex-col items-center justify-center gap-2 p-4 glass-panel rounded-xl hover:bg-primary/10 border-b-4 border-primary transition-all group">
                        <span
                            class="material-symbols-outlined text-primary group-hover:scale-110 transition-transform">waving_hand</span>
                        <span class="text-xs font-bold uppercase tracking-tight" data-i18n="simulasi.actions.sambut">Sambut Nasabah</span>
                    </button>
                    <button id="btnVerifikasi"
                        class="flex flex-col items-center justify-center gap-2 p-4 glass-panel rounded-xl hover:bg-secondary/10 border-b-4 border-secondary transition-all group">
                        <span
                            class="material-symbols-outlined text-secondary group-hover:scale-110 transition-transform">verified_user</span>
                        <span class="text-xs font-bold uppercase tracking-tight" data-i18n="simulasi.actions.verifikasi">Verifikasi Dokumen</span>
                    </button>
                    <button id="btnPilihAkad"
                        class="flex flex-col items-center justify-center gap-2 p-4 glass-panel rounded-xl hover:bg-tertiary/10 border-b-4 border-tertiary transition-all group">
                        <span
                            class="material-symbols-outlined text-tertiary group-hover:scale-110 transition-transform">gavel</span>
                        <span class="text-xs font-bold uppercase tracking-tight" data-i18n="simulasi.actions.pilih_akad">Pilih Akad</span>
                    </button>
                </div>
            </div>
            <!-- Right Panel: Tools & Feedback (5 Columns) -->
            <div class="lg:col-span-5 flex flex-col gap-6">
                <!-- AI Supervisor Feedback -->
                <div
                    class="relative rounded-xl overflow-hidden min-h-[180px] bg-sharia-green-deep border border-primary/20 shadow-xl group">

                    <div class="relative z-10 p-6 flex flex-col h-full">
                        <div class="flex items-center gap-3 mb-4">
                            <div class="w-10 h-10 rounded-lg bg-primary/20 flex items-center justify-center">
                                <span class="material-symbols-outlined text-primary"
                                    style="font-variation-settings: 'FILL' 1;">auto_awesome</span>
                            </div>
                            <div>
                                <h4 class="font-bold text-primary text-lg" data-i18n="simulasi.supervisor.title">AI Supervisor</h4>
                                <span class="text-[10px] text-primary/60 font-bold uppercase tracking-widest" data-i18n="simulasi.supervisor.subtitle">Compliance
                                    Engine Active</span>
                            </div>
                        </div>
                        <div class="bg-surface/60 backdrop-blur-md rounded-lg p-4 border-l-4 border-warning-amber">
                            <p class="text-sm text-ivory-text italic" data-i18n="simulasi.supervisor.feedback" data-i18n-attr="html">"Jangan lupa untuk menjelaskan perbedaan antara
                                akad <strong>Wadiah</strong> dan <strong>Mudharabah</strong>. Paydev menyebutkan
                                ingin 'ketenangan', tekankan pada aspek transparansi dan bagi hasil."</p>
                        </div>
                        <div
                            class="mt-4 flex items-center justify-between text-[10px] text-primary-fixed uppercase font-bold tracking-tighter">
                            <span data-i18n="simulasi.supervisor.kepatuhan">Kepatuhan: 100%</span>
                            <span data-i18n="simulasi.supervisor.etika">Etika Komunikasi: 95%</span>
                        </div>
                    </div>
                </div>
                <!-- Data Input Panel -->
                <div class="glass-panel rounded-xl flex-1 flex flex-col shadow-lg overflow-hidden">
                    <div class="p-4 border-b border-outline-variant bg-surface-container-high/30">
                        <h4 class="font-bold text-ivory-text flex items-center gap-2" data-i18n="simulasi.data_input.title">
                            <span class="material-symbols-outlined text-sm">edit_note</span>
                            Data Input Nasabah
                        </h4>
                    </div>
                    <div class="p-6 space-y-5 flex-1 overflow-y-auto custom-scrollbar">
                        <div class="space-y-1.5">
                            <label class="font-label-caps text-label-caps text-on-surface-variant" data-i18n="simulasi.data_input.nama_label">NAMA LENGKAP (SESUAI
                                KTP)</label>
                            <input id="inputNama"
                                class="w-full bg-surface-container-lowest border border-outline-variant rounded-lg p-3 text-sm focus:border-primary outline-none"
                                placeholder="Masukkan nama nasabah" type="text" data-i18n="simulasi.data_input.nama_placeholder" data-i18n-attr="placeholder" />
                        </div>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div class="space-y-1.5">
                                <label class="font-label-caps text-label-caps text-on-surface-variant" data-i18n="simulasi.data_input.nik_label">NIK</label>
                                <input id="inputNik"
                                    class="w-full bg-surface-container-lowest border border-outline-variant rounded-lg p-3 text-sm outline-none"
                                    placeholder="16 digit" type="text" data-i18n="simulasi.data_input.nik_placeholder" data-i18n-attr="placeholder" />
                            </div>
                            <div class="space-y-1.5">
                                <label class="font-label-caps text-label-caps text-on-surface-variant" data-i18n="simulasi.data_input.tgl_label">TGL LAHIR</label>
                                <input id="inputTglLahir"
                                    class="w-full bg-surface-container-lowest border border-outline-variant rounded-lg p-3 text-sm outline-none"
                                    type="date" />
                            </div>
                        </div>
                        <div class="space-y-3 pt-2">
                            <label class="font-label-caps text-label-caps text-on-surface-variant" data-i18n="simulasi.data_input.dokumen_label">DOKUMEN
                                PENDUKUNG</label>
                            <div class="grid grid-cols-2 gap-2">
                                <div id="ktpUpload"
                                    class="relative group cursor-pointer aspect-[4/3] rounded-lg border-2 border-dashed border-outline-variant flex items-center justify-center bg-surface-container-low hover:border-primary transition-colors overflow-hidden">
                                    <span id="ktpIcon"
                                        class="material-symbols-outlined text-outline group-hover:text-primary transition-colors">add_photo_alternate</span>
                                    <span id="ktpLabel"
                                        class="absolute bottom-2 text-[8px] text-on-surface-variant font-bold uppercase" data-i18n="simulasi.data_input.dokumen_ktp">Foto
                                        KTP</span>
                                    <img id="ktpPreview" class="absolute inset-0 w-full h-full object-cover hidden" />
                                </div>
                                <div id="npwpUpload"
                                    class="relative group cursor-pointer aspect-[4/3] rounded-lg border-2 border-dashed border-outline-variant flex items-center justify-center bg-surface-container-low hover:border-primary transition-colors overflow-hidden">
                                    <span id="npwpIcon"
                                        class="material-symbols-outlined text-outline group-hover:text-primary transition-colors">add_photo_alternate</span>
                                    <span id="npwpLabel"
                                        class="absolute bottom-2 text-[8px] text-on-surface-variant font-bold uppercase" data-i18n="simulasi.data_input.dokumen_npwp">Foto
                                        NPWP</span>
                                    <img id="npwpPreview" class="absolute inset-0 w-full h-full object-cover hidden" />
                                </div>
                            </div>
                            <input id="fileKtp" type="file" accept="image/*" class="hidden" />
                            <input id="fileNpwp" type="file" accept="image/*" class="hidden" />
                        </div>
                        <div class="space-y-3 pt-2">
                            <label class="font-label-caps text-label-caps text-on-surface-variant" data-i18n="simulasi.data_input.produk_label">PRODUK YANG
                                DITAWARKAN</label>
                            <div class="space-y-2">
                                <label
                                    class="flex items-center gap-3 p-3 rounded-lg border border-outline-variant hover:border-primary cursor-pointer transition-colors bg-surface-container-low">
                                    <input id="produkWadiah" class="text-primary focus:ring-0" name="product" type="radio" value="Tabungan Wadiah" />
                                    <div class="flex-1">
                                        <div class="text-xs font-bold text-ivory-text uppercase" data-i18n="simulasi.data_input.produk_wadiah">Tabungan Wadiah</div>
                                        <div class="text-[10px] text-on-surface-variant" data-i18n="simulasi.data_input.produk_wadiah_desc">Titipan murni, tanpa bagi hasil
                                            (bonus sukarela).</div>
                                    </div>
                                </label>
                                <label
                                    class="flex items-center gap-3 p-3 rounded-lg border border-outline-variant hover:border-primary cursor-pointer transition-colors bg-surface-container-low">
                                    <input id="produkMudharabah" class="text-primary focus:ring-0" name="product" type="radio" value="Tabungan Mudharabah" />
                                    <div class="flex-1">
                                        <div class="text-xs font-bold text-ivory-text uppercase" data-i18n="simulasi.data_input.produk_mudharabah">Tabungan Mudharabah
                                        </div>
                                        <div class="text-[10px] text-on-surface-variant" data-i18n="simulasi.data_input.produk_mudharabah_desc">Investasi bagi hasil sesuai
                                            porsi yang disepakati.</div>
                                    </div>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="p-4 bg-surface-container border-t border-outline-variant flex justify-end gap-2">
                        <button id="btnCetak" onclick="window.cetakData()"
                            class="px-6 py-2 bg-secondary/20 text-secondary rounded-full text-xs font-bold uppercase hover:bg-secondary/30 transition-colors hidden">
                            Cetak Data
                        </button>
                        <button id="btnSimpan" onclick="window.simpanData()"
                            class="px-6 py-2 bg-primary text-on-primary rounded-full text-xs font-bold uppercase hover:brightness-110 transition-all">
                            Simpan Data
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- Mobile Navigation (BottomNavBar implementation logic) -->
    <nav
        class="md:hidden fixed bottom-0 left-0 w-full h-16 bg-charcoal-surface border-t border-outline-variant flex items-center justify-around px-4 z-50">
        <button onclick="window.location.href='../Dashboard_Siswa/Dashboard_siswa.php'" class="flex flex-col items-center justify-center gap-1 text-on-surface-variant cursor-pointer">
            <span class="material-symbols-outlined text-[24px]">dashboard</span>
            <span class="text-[10px] font-medium" data-i18n="simulasi.bottomnav.home">Home</span>
        </button>
        <button class="flex flex-col items-center justify-center gap-1 text-primary">
            <span class="material-symbols-outlined text-[24px]">psychology</span>
            <span class="text-[10px] font-bold" data-i18n="simulasi.bottomnav.simulasi">Simulasi</span>
        </button>
        <button onclick="window.location.href='../Pusat_Kompetensi/Pusat_Kompetensi_Siswa.php'" class="flex flex-col items-center justify-center gap-1 text-on-surface-variant cursor-pointer">
            <span class="material-symbols-outlined text-[24px]">military_tech</span>
            <span class="text-[10px] font-medium" data-i18n="simulasi.bottomnav.rank">Rank</span>
        </button>
        <button onclick="window.location.href='../Riwayat/Riwayat_Siswa.php'" class="flex flex-col items-center justify-center gap-1 text-on-surface-variant cursor-pointer">
            <span class="material-symbols-outlined text-[24px]">history</span>
            <span class="text-[10px] font-medium" data-i18n="simulasi.bottomnav.history">History</span>
        </button>
        <button onclick="window.location.href='../Setting/Setting_Siswa.php'" class="flex flex-col items-center justify-center gap-1 text-on-surface-variant cursor-pointer">
            <span class="material-symbols-outlined text-[24px]">settings</span>
            <span class="text-[10px] font-medium" data-i18n="simulasi.bottomnav.settings">Settings</span>
        </button>
    </nav>
    <!-- Decorative Gradient Mesh -->
    <div class="fixed top-0 right-0 -z-10 w-1/2 h-1/2 opacity-20 pointer-events-none">
        <div class="absolute inset-0 bg-gradient-to-br from-primary via-transparent to-transparent blur-[120px]"></div>
    </div>
    <div class="fixed bottom-0 left-0 -z-10 w-1/2 h-1/2 opacity-10 pointer-events-none">
        <div class="absolute inset-0 bg-gradient-to-tr from-secondary via-transparent to-transparent blur-[120px]">
        </div>
    </div>
    <script>
        // Simple Interaction logic
        const chatContainer = document.getElementById('chat-container');
        const input = document.querySelector('input[type="text"]');
        const sendBtn = input.nextElementSibling;

        // ======== Cross-Tab Chat ========
        const CHAT_HISTORY_KEY = 'lidm_chat_history';
        const studentChannel = new BroadcastChannel('simulasi_chat');
        let chatHistory = [];

        function loadChatHistory() {
            const stored = localStorage.getItem(CHAT_HISTORY_KEY);
            if (stored) {
                try { chatHistory = JSON.parse(stored); } catch (e) { chatHistory = []; }
            } else {
                chatHistory = [];
            }
        }

        function saveChatHistory() {
            localStorage.setItem(CHAT_HISTORY_KEY, JSON.stringify(chatHistory));
        }

        function renderChatHistory() {
            chatHistory.forEach(msg => {
                if (msg.from === 'admin') {
                    addAdminMessage(msg.text, msg.time);
                }
                // Student messages are displayed as user messages automatically
            });
        }

        function addAdminMessage(text, time) {
            const msg = document.createElement('div');
            msg.className = 'flex gap-4 animate-fade-in admin-msg';
            msg.innerHTML = `
                <div class="flex gap-4 max-w-[85%]">
                    <div class="w-8 h-8 rounded-full bg-warning-amber/20 flex-shrink-0 flex items-center justify-center border border-warning-amber/30">
                        <span class="material-symbols-outlined text-warning-amber text-sm">shield_person</span>
                    </div>
                    <div class="p-4 rounded-2xl bg-warning-amber/5 border border-warning-amber/20 chat-bubble-ai shadow-sm">
                        <p class="text-sm leading-relaxed text-ivory-text">${text}</p>
                        <span class="text-[10px] text-on-surface-variant mt-2 block">${time || new Date().toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' })} · Admin</span>
                    </div>
                </div>
            `;
            chatContainer.appendChild(msg);
            chatContainer.scrollTop = chatContainer.scrollHeight;
        }

        // Listen for messages from admin
        studentChannel.addEventListener('message', (e) => {
            const data = e.data;
            if (data.type === 'message' && data.from === 'admin') {
                loadChatHistory();
                // Add to chat history if not already there
                const exists = chatHistory.some(m => m.text === data.text && m.from === 'admin' && m.time === data.time);
                if (!exists) {
                    chatHistory.push({
                        id: 'msg_' + Date.now(),
                        from: 'admin',
                        text: data.text,
                        time: data.time,
                        date: new Date().toISOString()
                    });
                    saveChatHistory();
                }
                addAdminMessage(data.text, data.time);
            }
            if (data.type === 'dialogue') {
                // Admin sent a dialogue - display as AI customer message
                const time = new Date().toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' });
                addMessage(data.text, false);
                // Also save to chat history
                loadChatHistory();
                chatHistory.push({
                    id: 'msg_' + Date.now(),
                    from: 'admin',
                    text: data.text,
                    time: time,
                    date: new Date().toISOString(),
                    isDialogue: true
                });
                saveChatHistory();
            }
            if (data.type === 'clear') {
                chatHistory = [];
                saveChatHistory();
                // Remove admin messages from DOM
                document.querySelectorAll('.admin-msg').forEach(el => el.remove());
            }
            if (data.type === 'customer_change' && data.customer) {
                applyCustomerToUI(data.customer);
                // Save to localStorage so it persists on reload
                localStorage.setItem('lidm_active_customer', JSON.stringify(data.customer));
            }
        });

        function clearStudentChat() {
            if (chatHistory.length === 0) return;
            if (!confirm('Hapus seluruh history percakapan dengan admin?')) return;
            chatHistory = [];
            saveChatHistory();
            // Remove admin messages from DOM
            document.querySelectorAll('.admin-msg').forEach(el => el.remove());
            // Broadcast clear to admin
            studentChannel.postMessage({ type: 'clear' });
        }

        // ======== CUSTOMER PERSONA SYNC ========
        function applyCustomerToUI(c) {
            if (!c) return;
            var nameEl = document.getElementById('studentCustomerName');
            var roleEl = document.getElementById('studentCustomerRole');
            var avatarEl = document.getElementById('studentCustomerAvatar');
            var statusEl = document.getElementById('studentCustomerStatus');
            var toneEl = document.getElementById('studentCustomerTone');
            if (nameEl) nameEl.textContent = c.name;
            if (roleEl) roleEl.textContent = c.role || '';
            if (avatarEl) {
                avatarEl.src = c.avatar || 'https://ui-avatars.com/api/?name=' + encodeURIComponent(c.name) + '&background=0d5c46&color=8ed5b9&bold=true';
            }
            if (statusEl) statusEl.textContent = 'Status: ' + (c.status || 'Sabar');
            if (toneEl) toneEl.textContent = 'Tone: ' + (c.tone || 'Formal');
        }

        function loadActiveCustomer() {
            var stored = localStorage.getItem('lidm_active_customer');
            if (stored) {
                try {
                    var c = JSON.parse(stored);
                    applyCustomerToUI(c);
                } catch (e) {}
            } else {
                // Try to get from lidm_ai_customers
                var all = localStorage.getItem('lidm_ai_customers');
                if (all) {
                    try {
                        var arr = JSON.parse(all);
                        var active = arr.find(function(x) { return x.active; }) || arr[0];
                        if (active) applyCustomerToUI(active);
                    } catch (e) {}
                }
            }
        }

        // ======== ACTION BUTTONS ========
        const AKAD_LIST = [
            { key: 'wadiah', label: 'Wadiah (Titipan)' },
            { key: 'mudharabah', label: 'Mudharabah (Bagi Hasil)' },
            { key: 'murabahah', label: 'Murabahah (Jual-Beli)' },
            { key: 'musyarakah', label: 'Musyarakah (Kerja Sama)' },
            { key: 'ijarah', label: 'Ijarah (Sewa)' },
            { key: 'qardh', label: 'Qardh (Pinjaman)' }
        ];

        function handleSambut() {
            const greetings = ["Assalamu'alaikum!", "Selamat siang!", "Selamat pagi!", "Halo!"];
            const msg = greetings[Math.floor(Math.random() * greetings.length)];
            addMessage(msg);
            input.value = '';
            setTimeout(() => {
                addMessage("Waalaikumsalam. Ada yang bisa saya bantu hari ini?", false);
            }, 600);
        }

        function handleVerifikasi() {
            const text = "Baik, saya akan menyiapkan dokumen yang diperlukan. Dokumen apa saja yang perlu saya serahkan untuk pengajuan pembiayaan ini?";
            addMessage(text);
            input.value = '';
            setTimeout(() => {
                const msg = "Untuk pengajuan pembiayaan, dokumen yang diperlukan: 1) Fotokopi KTP, 2) NPWP, 3) Slip gaji 3 bulan terakhir / Laporan keuangan usaha, 4) Surat keterangan kerja, 5) Dokumen jaminan (SHM/BPKB). Apakah Bapak/Ibu sudah menyiapkan dokumen-dokumen tersebut?";
                addMessage(msg, false);
            }, 700);
        }

        function handlePilihAkad() {
            const msg = document.createElement('div');
            msg.className = 'flex gap-4 animate-fade-in akad-selection';
            msg.innerHTML = `
                <div class="flex gap-4 max-w-[90%]">
                    <div class="w-8 h-8 rounded-full bg-primary flex-shrink-0 flex items-center justify-center">
                        <span class="material-symbols-outlined text-on-primary text-sm">person</span>
                    </div>
                    <div class="p-4 rounded-2xl bg-surface-container-high chat-bubble-ai border border-outline-variant/30 shadow-sm">
                        <p class="text-sm leading-relaxed text-ivory-text mb-3">Silakan pilih jenis akad yang ingin Anda ketahui lebih lanjut:</p>
                        <div class="flex flex-wrap gap-2">
                            ${AKAD_LIST.map(a => `
                                <button onclick="selectAkad('${a.key}')" class="px-3.5 py-2 bg-primary/10 hover:bg-primary/20 text-primary text-xs font-bold rounded-lg border border-primary/30 transition-all hover:scale-105 active:scale-95">${a.label}</button>
                            `).join('')}
                        </div>
                        <p class="text-[10px] text-on-surface-variant mt-3 italic">Klik salah satu akad untuk mempelajarinya</p>
                    </div>
                </div>
            `;
            chatContainer.appendChild(msg);
            chatContainer.scrollTop = chatContainer.scrollHeight;
        }

        function selectAkad(key) {
            const akad = AKAD_LIST.find(a => a.key === key);
            if (!akad) return;
            // Add user selection message
            addMessage('Saya ingin mempelajari akad ' + akad.label);
            // Generate AI response
            setTimeout(() => {
                const response = processUserQuery(key);
                addMessage(response, false);
            }, 600);
        }

        // Set initial chat timestamp on page load
        document.addEventListener('DOMContentLoaded', function() {
            var el = document.getElementById('initialChatTime');
            if (el) el.textContent = new Date().toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' });
            // Load active customer persona
            loadActiveCustomer();
            // Load and render chat history from admin
            loadChatHistory();
            renderChatHistory();

            var clearBtn = document.getElementById('btnClearStudentChat');
            if (clearBtn) clearBtn.addEventListener('click', clearStudentChat);

            // Action buttons
            document.getElementById('btnSambut').addEventListener('click', handleSambut);
            document.getElementById('btnVerifikasi').addEventListener('click', handleVerifikasi);
            document.getElementById('btnPilihAkad').addEventListener('click', handlePilihAkad);
        });

        function addMessage(text, isUser = true) {
            const time = new Date().toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' });
            const msg = document.createElement('div');
            msg.className = `flex gap-4 ${isUser ? 'justify-end' : ''} animate-fade-in`;

            const content = `
                <div class="flex gap-4 max-w-[85%] ${isUser ? 'flex-row-reverse text-right' : ''}">
                    <div class="w-8 h-8 rounded-full ${isUser ? 'bg-secondary' : 'bg-primary'} flex-shrink-0 flex items-center justify-center">
                        <span class="material-symbols-outlined text-on-primary text-sm">person</span>
                    </div>
                    <div class="p-4 rounded-2xl ${isUser ? 'bg-secondary-container/20 chat-bubble-user text-secondary' : 'bg-surface-container-high chat-bubble-ai text-ivory-text'} border border-outline-variant/30 shadow-sm">
                        <p class="text-sm leading-relaxed">${text}</p>
                        <span class="text-[10px] text-on-surface-variant mt-2 block">${time}</span>
                    </div>
                </div>
            `;

            msg.innerHTML = content;
            chatContainer.appendChild(msg);
            chatContainer.scrollTop = chatContainer.scrollHeight;
        }

        sendBtn.addEventListener('click', () => {
            const text = input.value.trim();
            if (!text) return;
            addMessage(text);
            input.value = '';

            // Save student message to chat history and broadcast to admin
            const msgTime = new Date().toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' });
            chatHistory.push({
                id: 'msg_' + Date.now(),
                from: 'student',
                text: text,
                time: msgTime,
                date: new Date().toISOString()
            });
            saveChatHistory();
            studentChannel.postMessage({
                type: 'message',
                from: 'student',
                text: text,
                time: msgTime
            });

            // Process user query and generate contextual AI response
            setTimeout(() => {
                const response = processUserQuery(text);
                addMessage(response, false);
            }, 700);
        });

        input.addEventListener('keypress', (e) => {
            if (e.key === 'Enter') sendBtn.click();
        });

        // --- AI query processing ---
        const RESPONSES = {
            // BANK SYARIAH - DEFINISI & PRINSIP
            'bank_syariah': "Bank syariah adalah lembaga keuangan yang beroperasi berdasarkan prinsip syariah Islam. Tidak menggunakan bunga (riba), melainkan akad berbasis bagi hasil, jual-beli, dan sewa. Semua produk dan aktivitasnya diawasi oleh Dewan Pengawas Syariah.",
            'apa itu bank syariah': "Bank syariah adalah bank yang menjalankan kegiatan usahanya berdasarkan prinsip syariah. Prinsip utamanya: larangan riba, larangan gharar (ketidakpastian), larangan maysir (spekulasi), dan mewajibkan akad yang transparan.",
            'pengertian bank syariah': "Bank syariah adalah lembaga intermediasi keuangan yang operasionalnya mengacu pada Al-Qur'an, Hadits, dan fatwa DSN-MUI. Bank ini menggunakan sistem bagi hasil, jual-beli, dan sewa, bukan bunga.",
            'sejarah bank syariah': "Bank syariah modern pertama di dunia adalah Mit Ghamr Bank di Mesir tahun 1963. Di Indonesia, Bank Muamalat Indonesia berdiri tahun 1991 sebagai bank syariah pertama. Kini hampir semua bank konvensional memiliki unit usaha syariah.",
            'definisi syariah': "Syariah berarti hukum Islam yang bersumber dari Al-Qur'an, Hadits, Ijma (konsensus), dan Qiyas (analogi). Dalam perbankan, syariah mengatur akad, transaksi, etika bisnis, dan larangan riba.",
            'prinsip syariah': "Prinsip syariah dalam perbankan meliputi: 1) Keadilan (keuntungan dibagi adil), 2) Transparansi (akad jelas), 3) Maslahah (bermanfaat), 4) Larangan riba, gharar, maysir, 5) Kehalalan objek transaksi.",
            'tujuan bank syariah': "Tujuan bank syariah: 1) Menerapkan ekonomi Islam, 2) Menghindari riba, 3) Mendorong sektor riil, 4) Distribusi kekayaan merata melalui bagi hasil, 5) Memberikan layanan keuangan halal.",
            'ciri ciri bank syariah': "Ciri-ciri bank syariah: 1) Bebas bunga (riba), 2) Menggunakan akad syariah, 3) Ada DPS (Dewan Pengawas Syariah), 4) Bagi hasil bukan bunga, 5) Transaksi berbasis aset riil, 6) Zakat, 7) Tidak spekulatif.",
            'keunggulan bank syariah': "Keunggulan bank syariah: 1) Sistem bagi hasil lebih adil, 2) Transaksi transparan, 3) Berbasis ekonomi riil, 4) Bebas riba, 5) Ada pengawasan DPS, 6) Program zakat dan sedekah.",
            'perbedaan bank syariah dan konvensional': "Perbedaan utama: Bank syariah menggunakan bagi hasil (nisbah), bank konvensional menggunakan bunga. Bank syariah diawasi DPS, transaksi berbasis aset riil, menghindari gharar dan spekulasi.",
            'bank syariah vs konvensional': "Bank syariah vs konvensional: 1) Akad: syariah pakai mudharabah/murabahah, konvensional pakai bunga. 2) Risiko: syariah bagi hasil, konvensional bunga tetap. 3) Pengawasan: syariah ada DPS.",
            'perbedaan syariah dan konvensional': "Bank syariah berlandaskan hukum Islam dan fatwa DSN-MUI, sedangkan bank konvensional menggunakan sistem bunga. Syariah melarang riba, gharar, dan maysir; konvensional menerima praktik tersebut.",
            'sistem bagi hasil': "Sistem bagi hasil (profit sharing) adalah inti perbankan syariah. Keuntungan dan kerugian dibagi sesuai nisbah (rasio) yang disepakati di awal akad. Ini lebih adil daripada bunga tetap.",
            'bagi hasil': "Bagi hasil artinya keuntungan usaha dibagi antara bank dan nasabah berdasarkan nisbah yang disepakati. Jika rugi, ditanggung sesuai porsi modal masing-masing.",
            'nisbah': "Nisbah adalah rasio atau porsi bagi hasil yang disepakati di awal akad, misalnya 60:40. Nisbah berbeda dengan bunga — nilainya fluktuatif tergantung keuntungan riil usaha.",
            'apa itu nisbah': "Nisbah adalah persentase pembagian keuntungan antara dua pihak dalam akad bagi hasil. Contoh: nisbah 70:30 berarti 70% untuk pemilik dana, 30% untuk pengelola.",
            'halal': "Halal berarti diizinkan dalam Islam. Bank syariah memastikan semua produk, akad, dan investasi halal serta tidak bertentangan dengan syariah.",
            'haram': "Haram adalah sesuatu yang dilarang dalam Islam. Dalam perbankan syariah, aktivitas haram meliputi riba (bunga), gharar (tipuan), maysir (judi), dan investasi di sektor tidak halal seperti alkohol atau babi.",
            'ekonomi syariah': "Ekonomi syariah adalah sistem ekonomi berdasarkan nilai-nilai Islam: keadilan, keseimbangan, kemaslahatan, dan larangan riba. Perbankan syariah adalah salah satu pilar implementasinya.",
            'muamalah': "Muamalah adalah aturan Islam tentang hubungan antarmanusia, termasuk transaksi ekonomi, jual-beli, utang-piutang, dan kerja sama usaha. Semua akad perbankan syariah termasuk muamalah.",

            // RIBA, GHARAR, MAYSIR
            'riba': "Riba adalah tambahan yang disyaratkan dalam transaksi utang-piutang tanpa adanya imbalan yang setara. Riba diharamkan dalam Al-Qur'an (QS Al-Baqarah 275-279). Bank syariah menghindari riba dengan menggunakan akad jual-beli dan bagi hasil.",
            'apa itu riba': "Riba secara bahasa berarti 'tambahan'. Secara syariah, riba adalah kelebihan pembayaran tanpa imbalan yang disepakati dalam transaksi utang. Bunga bank konvensional termasuk riba dan diharamkan.",
            'jenis riba': "Jenis riba: 1) Riba Fadhl (tukar barang sejenis tidak sama takar), 2) Riba Nasi'ah (penundaan pembayaran dengan bunga), 3) Riba Qardh (tambahan dalam utang), 4) Riba Jahiliyyah (pelipatgandaan tunggakan).",
            'riba dalam islam': "Riba sangat dilarang dalam Islam. Allah berfirman: 'Allah menghalalkan jual-beli dan mengharamkan riba' (QS Al-Baqarah: 275). Pelaku riba diancam dengan azab yang pedih.",
            'gharar': "Gharar adalah ketidakpastian atau tipuan dalam transaksi. Contoh: menjual ikan yang masih di laut. Dalam perbankan syariah, semua akad harus jelas objek, harga, dan waktunya.",
            'maysir': "Maysir adalah perjudian atau spekulasi. Dalam konteks perbankan, transaksi yang bersifat untung-untungan (seperti derivatif spekulatif) termasuk maysir dan dilarang.",
            'spekulasi': "Spekulasi (maysir) dilarang dalam perbankan syariah. Transaksi harus didasarkan pada aktivitas ekonomi riil, bukan pada untung-untungan. Semua akad harus transparan dan jelas kepastiannya.",
            'denda syariah': "Dalam perbankan syariah, denda keterlambatan (ta'widh) diperbolehkan sebesar biaya riil, bukan sebagai penalti berlipat. Denda tidak boleh menjadi sumber pendapatan bank.",
            'ta widh': "Ta'widh adalah denda atau ganti rugi atas keterlambatan pembayaran dalam transaksi syariah. Besarnya sesuai kerugian riil yang dialami bank, bukan dijadikan sumber pendapatan.",

            // AKAD-AKAD DETAIL
            'akad': "Akad adalah perjanjian atau kontrak antara dua pihak yang mengikat secara syariah. Rukun akad: ijab (penawaran), qabul (penerimaan), dua pihak yang berakad, dan objek akad. Dalam perbankan syariah ada banyak jenis akad seperti Wadiah, Mudharabah, Murabahah, Musyarakah, Ijarah, dan lainnya.",
            'akad syariah': "Akad syariah adalah perjanjian yang sesuai prinsip Islam. Syarat sah akad: 1) Pihak cakap hukum, 2) Objek jelas dan halal, 3) Ijab qabul, 4) Tidak mengandung riba/gharar. Setiap produk bank syariah pasti menggunakan akad tertentu.",
            'jenis akad': "Jenis akad perbankan syariah: 1) Akad Titipan (Wadiah), 2) Akad Bagi Hasil (Mudharabah, Musyarakah), 3) Akad Jual-Beli (Murabahah, Salam, Istishna), 4) Akad Sewa (Ijarah), 5) Akad Pelengkap (Qardh, Rahn, Kafalah, Wakalah, Sharf).",
            'rukun akad': "Rukun akad: 1) Aqidain (dua pihak yang berakad), 2) Mahal al-aqd (objek akad), 3) Shighat (ijab dan qabul). Akad tidak sah jika salah satu rukun tidak terpenuhi.",
            'akad dalam islam': "Akad dalam Islam adalah ikatan antara dua pihak yang menimbulkan hak dan kewajiban. Al-Qur'an memerintahkan: 'Hai orang beriman, penuhilah akad-akad itu' (QS Al-Maidah: 1).",

            // WADIAH
            'wadiah': "Wadiah adalah akad titipan murni. Nasabah menitipkan dana ke bank, bank bertanggung jawab menjaga dan boleh menggunakan dana (Wadiah Yad Dhamanah) dengan izin penitip. Bank boleh memberikan bonus sukarela, bukan kewajiban.",
            'apa itu wadiah': "Wadiah adalah titipan. Dalam perbankan syariah ada dua jenis: Wadiah Yad Amanah (titipan murni, bank tidak boleh pakai) dan Wadiah Yad Dhamanah (bank boleh pakai dengan izin). Produk tabungan dan giro biasanya pakai Wadiah.",
            'tabungan wadiah': "Tabungan Wadiah adalah produk simpanan dengan akad titipan. Setoran dan penarikan bisa kapan saja. Bank boleh memberi bonus (bukan bunga) secara sukarela. Dana nasabah dijamin 100% oleh bank.",
            'giro wadiah': "Giro Wadiah adalah rekening giro dengan akad titipan. Cocok untuk transaksi bisnis sehari-hari. Bank boleh memberikan bonus sukarela. Penarikan menggunakan cek atau bilyet giro.",
            'bonus wadiah': "Bonus Wadiah adalah pemberian sukarela dari bank kepada nasabah penabung Wadiah. Bonus tidak boleh diperjanjikan di awal (berbeda dengan bunga). Besarnya tergantung kebijakan bank.",
            'wadiah yad dhamanah': "Wadiah Yad Dhamanah adalah titipan di mana bank boleh menggunakan dana titipan untuk kegiatan produktif dengan izin penitip. Bank bertanggung jawab penuh atas keamanan dana dan boleh memberikan bonus.",
            'wadiah yad amanah': "Wadiah Yad Amanah adalah titipan murni di mana bank tidak boleh menggunakan dana. Bank hanya menjaga titipan. Praktiknya sangat jarang digunakan perbankan modern.",

            // MUDHARABAH
            'mudharabah': "Mudharabah adalah akad bagi hasil antara pemilik dana (shahibul mal) dan pengelola dana (mudharib). Keuntungan dibagi sesuai nisbah. Jika rugi karena faktor bisnis, kerugian ditanggung pemilik modal; jika kelalaian mudharib, ditanggung mudharib.",
            'akad mudharabah': "Mudharabah adalah kerja sama usaha di mana satu pihak menyediakan modal penuh, pihak lain mengelola. Keuntungan bagi hasil sesuai nisbah. Bank syariah menggunakan Mudharabah untuk produk tabungan dan pembiayaan.",
            'apa itu mudharabah': "Mudharabah adalah akad bagi hasil antara investor (shahibul mal) dan pengelola (mudharib). Semua modal dari investor, keahlian dari pengelola. Contoh: tabungan Mudharabah dan deposito Mudharabah.",
            'tabungan mudharabah': "Tabungan Mudharabah adalah produk simpanan dengan akad bagi hasil. Nasabah sebagai shahibul mal, bank sebagai mudharib. Keuntungan dibagi sesuai nisbah yang disepakati. Setoran bisa fleksibel atau terjadwal.",
            'deposito mudharabah': "Deposito Mudharabah adalah investasi berjangka dengan akad bagi hasil. Dana nasabah dikelola bank untuk pembiayaan produktif. Keuntungan dibagi sesuai nisbah. Jangka waktu: 1, 3, 6, atau 12 bulan.",
            'shahibul mal': "Shahibul mal adalah pemilik dana dalam akad Mudharabah. Dalam konteks tabungan, nasabah adalah shahibul mal. Dalam konteks pembiayaan, bank bisa bertindak sebagai shahibul mal.",
            'mudharib': "Mudharib adalah pengelola dana dalam akad Mudharabah. Bank berperan sebagai mudharib dalam produk simpanan. Sebaliknya, nasabah bisa menjadi mudharib dalam produk pembiayaan Mudharabah.",
            'contoh mudharabah': "Contoh Mudharabah: Nasabah menyimpan Rp10 juta di deposito Mudharabah dengan nisbah 60:40 (nasabah 60%). Bank mengelola dana untuk pembiayaan UMKM. Keuntungan dibagi sesuai nisbah.",
            'bagi hasil mudharabah': "Dalam Mudharabah, bagi hasil dihitung dari pendapatan riil bank. Nisbah disepakati di awal. Semakin besar keuntungan bank, semakin besar bagi hasil nasabah. Tidak seperti bunga yang tetap.",

            // MURABAHAH
            'murabahah': "Murabahah adalah akad jual-beli di mana bank menyebut harga perolehan barang dan margin keuntungan yang disepakati. Bank membeli barang yang dibutuhkan nasabah, lalu menjualnya ke nasabah dengan harga pokok plus margin.",
            'akad murabahah': "Murabahah adalah jual-beli dengan transparansi harga. Bank harus memberitahu harga perolehan dan margin. Pembayaran bisa tunai atau angsuran. Murabahah banyak digunakan untuk KPR, kendaraan, dan modal kerja.",
            'apa itu murabahah': "Murabahah adalah akad jual-beli barang dengan harga pokok ditambah margin yang diketahui dan disepakati kedua pihak. Ciri khasnya: harga perolehan diungkapkan ke pembeli.",
            'margin murabahah': "Margin adalah keuntungan bank dalam akad Murabahah. Besarnya disepakati di awal dan tidak berubah selama masa akad. Berbeda dengan bunga, margin adalah keuntungan dari jual-beli, bukan bunga utang.",
            'kpr murabahah': "KPR Murabahah adalah pembiayaan rumah dengan akad jual-beli. Bank membeli rumah yang diinginkan nasabah, kemudian menjualnya ke nasabah dengan margin keuntungan. Nasabah membayar secara angsuran.",
            'pembiayaan murabahah': "Pembiayaan Murabahah digunakan untuk: 1) Pembelian rumah, 2) Pembelian kendaraan, 3) Modal kerja, 4) Pembelian bahan baku. Syarat: barang jelas spesifikasinya, harga transparan, pembayaran jelas.",
            'contoh murabahah': "Contoh Murabahah: Nasabah ingin beli mobil Rp200 juta. Bank beli mobil seharga Rp200 juta, jual ke nasabah Rp230 juta (margin Rp30 juta), dibayar angsuran 3 tahun. Harga perolehan dan margin diungkapkan.",
            'salam': "Salam adalah akad jual-beli barang dengan sistem pesanan dan pembayaran di muka. Barang diserahkan kemudian. Syarat: spesifikasi barang harus jelas, pembayaran lunas di muka, waktu penyerahan ditentukan. Digunakan untuk pembiayaan pertanian.",
            'akad salam': "Salam adalah jual-beli pesanan dengan pembayaran tunai di awal dan barang diserahkan di masa depan. Bank syariah menggunakan Salam untuk pembiayaan sektor pertanian dan peternakan.",
            'istishna': "Istishna adalah akad jual-beli pesanan untuk barang yang akan diproduksi. Berbeda dengan Salam, pembayaran bisa bertahap sesuai progres pengerjaan. Digunakan untuk pembiayaan konstruksi dan manufaktur.",
            'akad istishna': "Istishna mirip Salam tapi untuk barang yang membutuhkan proses produksi. Pembayaran bisa dicicil sesuai progres. Contoh: pembiayaan pembangunan rumah atau pabrik.",

            // MUSYARAKAH
            'musyarakah': "Musyarakah adalah akad kerja sama antara dua pihak atau lebih untuk suatu usaha. Masing-masing pihak memberikan kontribusi modal dan berbagi keuntungan serta kerugian sesuai porsi modal. Berbeda dengan Mudharabah, semua pihak aktif mengelola.",
            'akad musyarakah': "Musyarakah adalah kemitraan di mana semua pihak menyetor modal dan berpartisipasi dalam pengelolaan. Keuntungan dibagi sesuai kesepakatan, kerugian sesuai porsi modal. Cocok untuk pembiayaan proyek besar.",
            'apa itu musyarakah': "Musyarakah adalah partnership dalam Islam. Semua partner menyumbang modal dan tenaga. Keuntungan dibagi sesuai nisbah, kerugian ditanggung proporsional. Digunakan bank syariah untuk pembiayaan sindikasi dan proyek.",
            'jenis musyarakah': "Jenis Musyarakah: 1) Syirkah Inan (modal berbeda), 2) Syirkah Mufawadhah (modal sama), 3) Syirkah Wujuh (berdasarkan reputasi), 4) Syirkah Abdan (berdasarkan keahlian), 5) Syirkah Mudharabah (gabungan).",
            'musyarakah mutanaqishah': "Musyarakah Mutanaqishah adalah bentuk khusus Musyarakah di mana porsi modal salah satu pihak berkurang secara bertahap hingga beralih penuh. Banyak dipakai untuk KPR syariah: bank dan nasabah patungan beli rumah, nasabah beli porsi bank bertahap.",
            'syirkah': "Syirkah berarti kerja sama atau kemitraan dalam Islam. Dasarnya adalah hadits Qudsi: 'Aku (Allah) menjadi pihak ketiga selama dua pihak berserikat tidak saling mengkhianati.' Semua bentuk Musyarakah adalah syirkah.",
            'contoh musyarakah': "Contoh Musyarakah: Bank dan nasabah kerja sama bangun properti senilai Rp1 M. Bank kontribusi 70%, nasabah 30%. Keuntungan dibagi sesuai nisbah yang disepakati. Jika rugi, ditanggung proporsional.",

            // IJARAH
            'ijarah': "Ijarah adalah akad sewa-menyewa barang atau jasa dengan imbalan (ujrah). Dalam perbankan syariah, Ijarah digunakan untuk pembiayaan multiguna, sewa rumah, kendaraan, dan peralatan. Bank sebagai pemilik barang menyewakan ke nasabah.",
            'akad ijarah': "Ijarah adalah pemindahan hak guna atas barang/jasa dengan pembayaran sewa. Bank membeli barang lalu menyewakan ke nasabah. Di akhir masa sewa, barang bisa dihibahkan (Ijarah Muntahiya Bittamlik).",
            'sewa': "Sewa dalam Islam disebut Ijarah. Prinsipnya: barang yang disewakan harus jelas, masa sewa ditentukan, harga sewa (ujrah) disepakati. Bank syariah menggunakan Ijarah untuk pembiayaan multiguna.",
            'ujrah': "Ujrah adalah upah atau imbalan jasa dalam akad Ijarah. Besarnya disepakati di awal. Ujrah halal karena merupakan kompensasi atas jasa yang diberikan, bukan bunga.",
            'ijarah muntahiya bittamlik': "IMBT adalah Ijarah yang diakhiri dengan pemindahan kepemilikan barang dari bank ke nasabah. Biasanya melalui hibah atau jual-beli terpisah di akhir masa sewa. Digunakan untuk pembiayaan rumah dan kendaraan.",

            // QARDH, RAHN, KAFALAH, WAKALAH, SHARF
            'qardh': "Qardh adalah pinjaman kebajikan tanpa imbalan. Nasabah wajib mengembalikan pokok pinjaman saja. Bank syariah menyediakan Qardh untuk dana talangan haji, pinjaman sosial, dan produk kartu kredit syariah.",
            'qardhul hasan': "Qardhul Hasan adalah pinjaman kebajikan tanpa bunga dan tanpa bagi hasil. Peminjam hanya mengembalikan pokok. Ini bentuk pinjaman yang paling mulia dalam Islam. Bank syariah menyalurkannya untuk program sosial.",
            'rahn': "Rahn adalah akad gadai syariah. Nasabah menggadaikan barang berharga sebagai jaminan utang. Bank menyimpan barang dan boleh mengenakan biaya penyimpanan (ujrah). Jika utang lunas, barang dikembalikan.",
            'gadai syariah': "Gadai syariah (Rahn) berbeda dengan gadai konvensional. Bank hanya mengenakan biaya penitipan dan pemeliharaan barang, bukan bunga. Nasabah tidak dikenakan bunga meskipun telat membayar.",
            'kafalah': "Kafalah adalah akad penjaminan. Bank bertindak sebagai penjamin (kafil) atas kewajiban nasabah kepada pihak ketiga. Contoh: bank garansi untuk proyek pemerintah.",
            'wakalah': "Wakalah adalah akad perwakilan. Bank mendapat kuasa dari nasabah untuk melakukan tindakan tertentu, misalnya transfer, inkaso, atau pembayaran tagihan. Bank boleh menerima fee (ujrah).",
            'sharf': "Sharf adalah akad jual-beli mata uang asing. Dalam perbankan syariah, transaksi valas harus tunai (spot) dan tidak boleh spekulatif. Tujuan Sharf adalah memenuhi kebutuhan transaksi riil.",
            'hiwalah': "Hiwalah adalah akad pengalihan utang-piutang. Nasabah yang memiliki piutang bisa mengalihkannya ke bank. Bank syariah menggunakan hiwalah untuk layanan anjak piutang syariah.",

            // PRODUK PERBANKAN SYARIAH
            'produk bank syariah': "Produk bank syariah terdiri dari: 1) Penghimpunan dana (tabungan, giro, deposito), 2) Penyaluran dana (pembiayaan murabahah, musyarakah, mudharabah, ijarah), 3) Jasa (transfer, kliring, bank garansi, L/C syariah).",
            'produk syariah': "Produk syariah meliputi: Tabungan Wadiah & Mudharabah, Giro Wadiah, Deposito Mudharabah, Pembiayaan Murabahah, Pembiayaan Musyarakah, Pembiayaan Ijarah, Gadai Rahn, Kartu Kredit Syariah.",
            'jenis produk bank syariah': "Jenis produk: 1) Funding: Tabungan, Giro, Deposito. 2) Financing: Murabahah, Musyarakah, Mudharabah, Ijarah, Qardh. 3) Services: Transfer, SKBDN, Bank Garansi, Sharf, Wakalah.",
            'produk tabungan': "Produk tabungan syariah: Tabungan Wadiah (titipan, bonus sukarela) dan Tabungan Mudharabah (bagi hasil). Pilih sesuai preferensi: Wadiah untuk transaksi harian, Mudharabah untuk investasi.",
            'tabungan haji': "Tabungan Haji adalah produk untuk persiapan biaya ibadah haji. Menggunakan akad Wadiah atau Mudharabah. Setoran rutin hingga memenuhi syarat pendaftaran haji di Kemenag.",
            'tabungan umrah': "Tabungan Umrah mirip tabungan haji untuk persiapan biaya umrah. Lebih fleksibel dalam jangka waktu dan setoran. Bisa menggunakan akad Wadiah atau Mudharabah.",
            'tabungan pendidikan': "Tabungan Pendidikan adalah produk simpanan untuk persiapan biaya pendidikan anak. Menggunakan akad Mudharabah. Setoran rutin bulanan, dapat diambil saat anak masuk jenjang pendidikan tertentu.",
            'tabungan berjangka': "Tabungan Berjangka (Deposito) Syariah menggunakan akad Mudharabah. Dana disimpan untuk jangka waktu tertentu (1-12 bulan), bagi hasil lebih kompetitif daripada tabungan biasa.",
            'giro': "Giro syariah menggunakan akad Wadiah Yad Dhamanah. Nasabah bisa menarik dana kapan saja menggunakan cek atau bilyet giro. Bank boleh memberikan bonus sukarela. Cocok untuk transaksi bisnis.",
            'deposito syariah': "Deposito syariah adalah investasi berjangka dengan akad Mudharabah. Jangka waktu 1-12 bulan. Bagi hasil diberikan setiap bulan sesuai nisbah. Dijamin oleh Lembaga Penjamin Simpanan (LPS).",
            'kartu kredit syariah': "Kartu kredit syariah menggunakan akad Kafalah (penjaminan) dan Qardh (pinjaman). Tidak ada bunga, hanya biaya keanggotaan dan biaya transaksi yang transparan. Terhindar dari riba.",
            'kpr syariah': "KPR syariah adalah pembiayaan kepemilikan rumah tanpa riba. Akad yang digunakan: Murabahah (jual-beli), Musyarakah Mutanaqishah (kemitraan menurun), atau Ijarah Muntahiya Bittamlik (sewa-beli).",
            'kpr': "KPR syariah berbeda dengan KPR konvensional. Tidak ada bunga, yang ada margin (Murabahah) atau bagi hasil (Musyarakah). Cicilan tetap selama tenor karena margin sudah disepakati di awal.",
            'pembiayaan syariah': "Pembiayaan syariah adalah penyaluran dana bank ke nasabah menggunakan akad sesuai syariah. Jenis: 1) Modal kerja (Mudharabah, Musyarakah), 2) Investasi (Murabahah, Ijarah), 3) Konsumtif (Murabahah, Ijarah).",
            'pembiayaan umkm': "Pembiayaan UMKM syariah menggunakan akad Mudharabah (bagi hasil) atau Murabahah (jual-beli). Bank dan nasabah berbagi keuntungan dari usaha UMKM. Sangat mendorong sektor riil.",
            'pembiayaan mikro': "Pembiayaan mikro syariah untuk usaha kecil dan mikro. Akad yang sering digunakan: Qardhul Hasan (pinjaman sosial) untuk modal awal, kemudian Mudharabah atau Murabahah untuk pengembangan.",
            'modal kerja syariah': "Pembiayaan modal kerja syariah menggunakan akad Murabahah (pengadaan barang) atau Musyarakah (kerjasama bisnis). Bank membiayai kebutuhan operasional usaha nasabah.",

            // REGULASI & LEMBAGA
            'dsn mui': "DSN-MUI (Dewan Syariah Nasional Majelis Ulama Indonesia) adalah lembaga yang menetapkan fatwa tentang produk dan operasional bank syariah. Semua bank syariah wajib mengikuti fatwa DSN-MUI.",
            'fatwa': "Fatwa adalah pendapat hukum Islam yang dikeluarkan oleh ulama berwenang. DSN-MUI menerbitkan fatwa tentang berbagai akad dan produk bank syariah. Fatwa menjadi pedoman operasional perbankan syariah.",
            'ojk': "OJK (Otoritas Jasa Keuangan) mengawasi dan mengatur industri perbankan syariah di Indonesia. OJK menerbitkan peraturan tentang kelembagaan, produk, dan kepatuhan bank syariah.",
            'dps': "DPS (Dewan Pengawas Syariah) adalah dewan yang bertugas mengawasi operasional bank syariah agar sesuai fatwa DSN-MUI. DPS ditempatkan di setiap bank syariah dan unit usaha syariah.",
            'dewan pengawas syariah': "DPS adalah organ pengawas internal yang memastikan produk, akad, dan operasional bank syariah mematuhi prinsip syariah. Anggota DPS adalah ulama yang ahli di bidang fikih muamalah.",
            'regulasi bank syariah': "Regulasi bank syariah di Indonesia: 1) UU No. 21/2008 tentang Perbankan Syariah, 2) Fatwa DSN-MUI, 3) POJK (Peraturan OJK), 4) PBI (Peraturan Bank Indonesia).",
            'uu perbankan syariah': "UU No. 21 Tahun 2008 mengatur tentang Perbankan Syariah. Undang-undang ini menjadi landasan hukum operasional bank syariah di Indonesia, mencakup kelembagaan, kegiatan usaha, dan pengawasan.",
            'aaoifi': "AAOIFI (Accounting and Auditing Organization for Islamic Financial Institutions) adalah organisasi internasional yang menetapkan standar akuntansi, audit, dan tata kelola untuk lembaga keuangan syariah.",
            'ifsb': "IFSB (Islamic Financial Services Board) adalah badan internasional yang menetapkan standar prudent dan pengawasan untuk industri jasa keuangan syariah global.",
            'lps syariah': "LPS (Lembaga Penjamin Simpanan) menjamin simpanan nasabah bank syariah hingga Rp2 miliar per nasabah per bank. Simpanan syariah dijamin sesuai prinsip syariah.",

            // FRAUD & KEPATUHAN
            'fraud': "Deteksi fraud memantau transaksi mencurigakan seperti mutasi tidak wajar, penggelembungan omzet, atau dokumen palsu. Sistem AI akan menandai anomali dan merekomendasikan investigasi lebih lanjut.",
            'deteksi fraud': "Fitur deteksi fraud menganalisis data transaksi secara real-time. Indikator fraud: 1) Ketidakkonsistenan data, 2) Pola transaksi tidak wajar, 3) Dokumen mencurigakan, 4) Lonjakan omzet drastis. Temuan akan dilaporkan ke tim kepatuhan.",
            'fraud gaji': "Deteksi Fraud Gaji menganalisis slip gaji: validasi QR code, konsistensi sumber pendapatan, dan perbandingan dengan rekening koran. Jika ditemukan keanehan, sistem akan memberi peringatan.",
            'indikasi fraud': "Indikasi fraud dalam perbankan: 1) Dokumen pemalsuan, 2) Proyeksi keuangan tidak realistis, 3) Agunan bermasalah, 4) Karakter nasabah meragukan, 5) Transaksi tidak wajar. Bank syariah wajib melakukan due diligence.",
            'pencegahan fraud': "Pencegahan fraud perbankan syariah: 1) Verifikasi dokumen ketat, 2) Cross-check data, 3) Analisis keuangan mendalam, 4) Prinsip kehati-hatian, 5) Pengawasan DPS, 6) Sistem deteksi dini berbasis AI.",
            'kepatuhan': "Kepatuhan syariah memastikan produk dan proses memenuhi prinsip-prinsip syariah, termasuk larangan riba dan praktik maysir/gharar. Setiap transaksi diperiksa oleh tim kepatuhan dan DPS.",
            'kepatuhan syariah': "Tim kepatuhan syariah bertugas: 1) Review akad sebelum ditandatangani, 2) Memeriksa dokumentasi nasabah, 3) Memastikan sumber dana halal, 4) Mengawasi pelaksanaan akad, 5) Melaporkan ke DPS secara berkala.",
            'compliance': "Compliance atau kepatuhan adalah fungsi pengawasan di bank syariah yang memastikan semua aktivitas sesuai peraturan OJK, fatwa DSN-MUI, dan standar operasional prosedur (SOP).",
            'money laundering': "Pencucian uang (money laundering) dilarang dalam Islam dan peraturan perbankan. Bank syariah wajib menerapkan APU-PPT (Anti Pencucian Uang dan Pencegahan Pendanaan Terorisme).",
            'apu ppt': "APU-PPT adalah program Anti Pencucian Uang dan Pencegahan Pendanaan Terorisme yang wajib diterapkan bank syariah. Meliputi identifikasi nasabah, monitoring transaksi, dan pelaporan ke PPATK.",

            // SIMULASI - SKENARIO
            'simulasi': "Simulasi di platform ini mencakup skenario: 1) Nasabah UMKM (pembukaan rekening, analisis usaha), 2) Nasabah Haji (pendaftaran, verifikasi dana), 3) Nasabah KPR (simulasi pembiayaan), 4) Deteksi Fraud (analisis kecurangan). Setiap skenario punya tingkat kesulitan berbeda.",
            'skenario': "Skenario simulasi adalah studi kasus perbankan syariah. Anda akan berperan sebagai Customer Service, Teller, atau Analis Pembiayaan. Tujuan: menyelesaikan transaksi sesuai prinsip syariah dengan benar.",
            'cara menggunakan simulasi': "Cara menggunakan simulasi: 1) Pilih skenario di halaman Simulasi, 2) Baca briefing kasus, 3) Interaksi dengan nasabah melalui chat, 4) Isi data nasabah di panel, 5) Submit untuk dinilai oleh AI Supervisor.",
            'mulai simulasi': "Untuk memulai simulasi, klik tombol 'Mulai Simulasi' di sidebar atau halaman Dashboard. Pilih skenario yang tersedia, lalu ikuti instruksi dari AI Supervisor.",
            'modul simulasi': "Modul simulasi terdiri dari: 1) Onboarding (pengenalan sistem), 2) Nasabah UMKM (level Beginner), 3) Nasabah Haji (level Intermediate), 4) Nasabah KPR (level Intermediate), 5) Deteksi Fraud (level Advanced).",
            'nasabah umkm': "Modul Nasabah UMKM: Anda membantu nasabah UMKM membuka rekening dan mengajukan pembiayaan. Belajar menganalisis kelayakan usaha, verifikasi dokumen, dan merekomendasikan produk syariah yang tepat.",
            'umkm': "UMKM adalah Usaha Mikro, Kecil, dan Menengah. Dalam simulasi ini, Anda menangani nasabah UMKM yang ingin mengembangkan usaha melalui pembiayaan syariah. Pelajari karakteristik dan kebutuhan pembiayaan UMKM.",
            'nasabah haji': "Modul Nasabah Haji: Anda melayani calon jamaah haji yang ingin membuka tabungan haji, verifikasi dana, dan persiapan administrasi keberangkatan. Pahami produk tabungan haji syariah.",
            'haji': "Haji adalah ibadah tahunan ke Mekah. Bank syariah menyediakan layanan Tabungan Haji dengan akad Wadiah atau Mudharabah. Setoran rutin hingga mencapai BPIH (Biaya Perjalanan Ibadah Haji).",
            'nasabah kpr': "Modul KPR Syariah: Anda menganalisis kelayakan pembiayaan rumah nasabah. Belajar menghitung margin Murabahah, mengatur tenor, dan memastikan kepatuhan syariah dalam akad pembiayaan.",
            'kpr': "KPR (Kredit Pemilikan Rumah) syariah adalah pembiayaan rumah tanpa riba. Menggunakan akad Murabahah (jual-beli dengan margin) atau Musyarakah Mutanaqishah (kemitraan menurun).",
            'kpr syariah': "Simulasi KPR syariah melibatkan: 1) Analisis kelayakan nasabah, 2) Perhitungan margin/ bagi hasil, 3) Penentuan tenor, 4) Pembuatan akad, 5) Verifikasi dokumen properti. Pastikan semua sesuai prinsip syariah.",
            'deteksi fraud': "Modul Deteksi Fraud: Anda menganalisis data mencurigakan untuk menemukan indikasi kecurangan. Belajar membaca pola transaksi, memvalidasi dokumen, dan mengambil keputusan berdasarkan prinsip kehati-hatian.",
            'fraud gaji': "Deteksi Fraud Gaji khusus menganalisis slip gaji dan konsistensi sumber pendapatan; indikasi ketidaksesuaian akan ditandai untuk investigasi. Cek QR code, nominal, dan konsistensi data.",
            'beginner': "Level Beginner: skenario Nasabah UMKM. Cocok untuk pemula yang baru belajar perbankan syariah. Tugas: pembukaan rekening, pengisian data nasabah, dan rekomendasi produk.",
            'intermediate': "Level Intermediate: skenario Nasabah Haji dan Nasabah KPR. Anda harus memahami akad-akad dasar dan mampu menganalisis kelayakan pembiayaan secara mandiri.",
            'advanced': "Level Advanced: skenario Deteksi Fraud. Anda harus mampu mengidentifikasi indikasi kecurangan, menganalisis dokumen, dan membuat keputusan berdasarkan bukti dan prinsip syariah.",
            'skor simulasi': "Setiap simulasi dinilai oleh AI Supervisor berdasarkan: 1) Kepatuhan syariah, 2) Ketepatan prosedur, 3) Kecepatan respons, 4) Komunikasi dengan nasabah. Skor 70+ dinyatakan lulus.",
            'penilaian simulasi': "Penilaian simulasi dilakukan oleh AI Supervisor secara real-time. Faktor penilaian: kepatuhan terhadap SOP, pemahaman akad, etika komunikasi, dan kemampuan analisis. Feedback diberikan setelah simulasi selesai.",
            'tips simulasi': "Tips sukses simulasi: 1) Baca briefing dengan teliti, 2) Ikuti panduan AI Supervisor, 3) Gunakan istilah syariah yang benar, 4) Verifikasi dokumen nasabah, 5) Catat setiap transaksi dengan rapi.",

            // ONBOARDING & CARA PAKAI
            'cara pakai': "Cara menggunakan platform: 1. Login dengan akun student. 2. Pilih modul simulasi. 3. Ikuti instruksi chat dengan nasabah. 4. Isi data di panel input. 5. Dapatkan feedback dari AI Supervisor. 6. Lihat riwayat dan skor di halaman Riwayat.",
            'onboarding': "Onboarding adalah proses pengenalan awal platform. Anda akan mempelajari navigasi dasar, cara memulai simulasi, dan fitur-fitur utama seperti panel chat, data input, dan AI Supervisor.",
            'panduan': "Panduan penggunaan platform tersedia di menu Bantuan (sidebar). Untuk pertanyaan spesifik tentang materi, gunakan fitur chat dengan AI Assistant pada halaman Simulasi.",
            'bantuan': "Untuk bantuan, gunakan menu Bantuan di sidebar atau hubungi administrator melalui fitur chat. Anda juga bisa bertanya ke AI Assistant tentang materi perbankan syariah.",
            'kontak': "Untuk bantuan lebih lanjut, gunakan modul 'Setting' -> 'Bantuan' atau hubungi administrator platform jika tersedia. Kami siap membantu!",
            'feedback': "Feedback dari AI Supervisor diberikan setelah Anda menyelesaikan simulasi. Analisis mencakup: kepatuhan syariah, kesesuaian akad, dan saran perbaikan untuk simulasi selanjutnya.",
            'nilai': "Nilai simulasi dihitung dari: kepatuhan (40%), prosedur (30%), komunikasi (20%), dan kecepatan (10%). Skor di atas 70 dianggap lulus. Riwayat nilai bisa dilihat di halaman Riwayat.",
            'rapor': "Rapor kompetensi mencatat perkembangan Anda dari waktu ke waktu. Buka halaman Riwayat dan klik 'Lihat Rapor Detail' untuk melihat analisis bulanan dan rekomendasi AI.",
            'riwayat': "Riwayat menyimpan semua aktivitas simulasi Anda. Anda bisa melihat skor, feedback AI, dan analisis perkembangan kompetensi perbankan syariah dari waktu ke waktu.",
            'certificate': "Sertifikat kompetensi diberikan setelah menyelesaikan semua level di Pusat Kompetensi. Setiap level mensyaratkan skor minimal 70 untuk lulus.",

            // TEKNIS & ISTILAH
            'margin': "Margin adalah keuntungan yang diambil bank dalam akad jual-beli (Murabahah). Berbeda dengan bunga, margin adalah keuntungan dari transaksi jual-beli riil, bukan bunga pinjaman.",
            'tenor': "Tenor adalah jangka waktu pembiayaan, misalnya 12 bulan, 3 tahun, atau 5 tahun. Tenor mempengaruhi besar cicilan: semakin panjang tenor, semakin kecil cicilan per bulan.",
            'angsuran': "Angsuran dalam pembiayaan syariah bersifat tetap jika menggunakan akad Murabahah (karena margin sudah disepakati). Untuk akad Musyarakah, bagi hasil bisa berfluktuasi.",
            'cicilan': "Cicilan syariah tetap selama masa akad untuk Murabahah. Untuk Musyarakah Mutanaqishah, cicilan bisa menurun karena porsi kepemilikan nasabah bertambah.",
            'dp': "DP (Down Payment) atau uang muka diperbolehkan dalam pembiayaan syariah. Besarnya DP mempengaruhi jumlah pembiayaan yang dibutuhkan dari bank.",
            'agunan': "Agunan (jaminan) diperbolehkan dalam perbankan syariah sebagai bentuk jaminan. Bank tidak boleh mengambil keuntungan dari agunan. Akad rahn digunakan untuk gadai.",
            'provisi': "Biaya provisi dalam bank syariah adalah biaya administrasi untuk pemrosesan pembiayaan. Besarnya sesuai biaya riil, bukan persentase dari plafon.",
            'administrasi': "Biaya administrasi adalah biaya yang dikenakan bank untuk layanan administrasi. Harus transparan dan sesuai biaya riil, tidak berlebihan.",
            'denda': "Denda (ta'widh) dalam bank syariah hanya sebesar biaya riil yang dikeluarkan bank akibat keterlambatan. Denda tidak boleh memberatkan dan tidak menjadi sumber pendapatan.",
            'grace period': "Grace period (masa tenggang) dalam pembiayaan syariah adalah periode di mana nasabah belum diwajibkan membayar cicilan. Bank syariah tetap memperhitungkan bagi hasil selama grace period jika disepakati.",
            'restrukturisasi': "Restrukturisasi pembiayaan adalah penyesuaian tenor/angsuran untuk nasabah yang mengalami kesulitan. Bank syariah wajib membantu nasabah sesuai prinsip ta'awun (tolong-menolong).",
            'refinancing': "Refinancing syariah adalah penggantian pembiayaan eksisting dengan pembiayaan baru dari bank syariah. Bertujuan meringankan beban nasabah dengan akad yang sesuai syariah.",
            'take over': "Take over adalah pengalihan pembiayaan dari bank konvensional ke bank syariah. Prosesnya menggunakan akad Qardh untuk pelunasan, kemudian akad baru sesuai syariah.",
            'referensi bank': "Bank syariah besar di Indonesia: Bank Muamalat, Bank Syariah Indonesia (BSI), Bank Mega Syariah, BCA Syariah, BTN Syariah, CIMB Niaga Syariah, Bank Jabar Banten Syariah, dan lainnya.",
            'bsi': "Bank Syariah Indonesia (BSI) adalah bank syariah terbesar di Indonesia, hasil merger tiga bank syariah BUMN (BNI Syariah, BRI Syariah, Mandiri Syariah) pada tahun 2021.",
            'bank muamalat': "Bank Muamalat Indonesia adalah bank syariah pertama di Indonesia, berdiri tahun 1991. Menjadi pionir perbankan syariah dan terus berkontribusi dalam pengembangan ekonomi Islam di Indonesia.",
            'asmr': "ASMR (Analisis, Simulasi, Monitoring, Reporting) adalah kerangka kerja laboratorium virtual ini. Anda menganalisis kasus, melakukan simulasi, dimonitoring AI, dan mendapat laporan evaluasi.",

            // ISTILAH LAIN
            'zakat': "Zakat adalah kewajiban mengeluarkan sebagian harta untuk mustahik (penerima). Bank syariah memfasilitasi pembayaran zakat nasabah melalui layanan zakat. Ini membedakan bank syariah dari bank konvensional.",
            'infak': "Infak adalah sumbangan sukarela di luar zakat. Bank syariah biasanya menyediakan kotak infak atau layanan penyaluran infak untuk nasabah yang ingin bersedekah.",
            'sedekah': "Sedekah adalah pemberian sukarela kepada sesama. Dalam perbankan syariah, sedekah bisa dalam bentuk Qardhul Hasan (pinjaman kebajikan) atau program CSR bank.",
            'csr': "CSR (Corporate Social Responsibility) bank syariah disebut juga Zakat, Infak, Sedekah, dan Wakaf (ZISWAF). Bank syariah memiliki program pemberdayaan masyarakat dan pengembangan ekonomi umat.",
            'wakaf': "Wakaf adalah menahan harta dan memanfaatkan hasilnya untuk kepentingan umum. Bank syariah mulai mengembangkan layanan wakaf uang dan pengelolaan aset wakaf produktif.",
            'takaful': "Takaful adalah asuransi syariah. Berbeda dengan asuransi konvensional, takaful menggunakan prinsip tolong-menolong (ta'awun) dan bagi hasil, bukan transfer risiko dengan premi.",
            'asuransi syariah': "Asuransi syariah (takaful) menggunakan akad Mudharabah atau Wakalah. Dana peserta diinvestasikan secara syariah. Klaim dibayar dari dana tabarru' (dana kebajikan) peserta.",
            'pasar modal syariah': "Pasar modal syariah adalah pasar modal yang menerapkan prinsip syariah. Instrumennya: saham syariah, sukuk (obligasi syariah), reksadana syariah, dan EBA (Efek Beragun Aset) syariah.",
            'sukuk': "Sukuk adalah obligasi syariah. Berbeda dengan obligasi konvensional yang berbunga, sukuk menggunakan akad Ijarah, Mudharabah, atau Musyarakah. Pemegang sukuk mendapat bagi hasil.",
            'saham syariah': "Saham syariah adalah saham perusahaan yang bergerak di sektor halal dan memiliki rasio keuangan yang sesuai syariah (misalnya utang berbunga tidak lebih dari 45%). Didaftarkan di Daftar Efek Syariah (DES).",
            'reksadana syariah': "Reksadana syariah adalah wadah investasi yang dikelola secara syariah. Portofolionya hanya berisi efek syariah. Manajer investasi wajib memastikan kepatuhan syariah dalam pengelolaan dana.",

            // PERTANYAAN UMUM SISWA
            'apa itu laboratorium': "SmartBank Syariah AI Virtual Laboratory adalah platform simulasi interaktif untuk belajar perbankan syariah. Anda bisa mempraktikkan langsung pelayanan nasabah, analisis pembiayaan, dan deteksi fraud dalam lingkungan virtual yang aman.",
            'tujuan laboratorium': "Tujuan laboratorium: 1) Meningkatkan pemahaman perbankan syariah, 2) Melatih keterampilan operasional, 3) Mengasah kemampuan analisis fraud, 4) Membiasakan etika komunikasi syariah, 5) Persiapan sertifikasi kompetensi.",
            'untuk siapa': "Platform ini ditujukan untuk mahasiswa perbankan syariah, ekonomi Islam, dan siapa pun yang ingin belajar praktik perbankan syariah secara interaktif.",
            'fitur utama': "Fitur utama: 1) Live Chat Simulation (interaksi dengan nasabah virtual), 2) AI Supervisor (penilaian real-time), 3) Data Input Panel (pengisian data nasabah), 4) Pusat Kompetensi (level pembelajaran), 5) Riwayat & Rapor (evaluasi).",
            'bagaimana cara memulai': "Cara memulai: 1) Login, 2) Buka halaman Dashboard, 3) Pilih skenario dari 'Skenario Lab Tersedia', 4) Mulai interaksi dengan nasabah, 5) Isi data di panel, 6) Dapatkan feedback AI.",
            'apa itu ai supervisor': "AI Supervisor adalah sistem kecerdasan buatan yang memonitor simulasi Anda secara real-time. Dia memberikan feedback tentang kepatuhan syariah, etika komunikasi, dan kebenaran prosedur.",
            'ai supervisor': "AI Supervisor menilai setiap langkah Anda dalam simulasi. Dia akan memberi peringatan jika ada kesalahan prosedur atau penggunaan istilah yang tidak sesuai syariah. Tujuannya membantu Anda belajar.",
            'apakah ada sertifikat': "Sertifikat kompetensi tersedia di Pusat Kompetensi. Selesaikan 5 level pembelajaran (Akad Mudharabah, Murabahah, Musyarakah, Wadiah, Kepatuhan Syariah) dengan skor minimal 70 untuk mendapatkannya.",
            'berapa level': "Pusat Kompetensi memiliki 5 level: 1) Akad Mudharabah, 2) Akad Murabahah, 3) Akad Musyarakah, 4) Akad Wadiah, 5) Kepatuhan Syariah. Level 5 terbuka jika nilai level 4 di atas 80.",
            'cara naik level': "Naik level dengan mengerjakan soal di setiap level pada Pusat Kompetensi. Baca pembahasan, jawab pertanyaan, dapatkan skor minimal 70 untuk lulus. Level berikutnya terbuka jika level sebelumnya lulus.",
            'skor minimal': "Skor minimal kelulusan adalah 70 dari 100. Jika belum mencapai 70, Anda bisa mengulang level tersebut. Skor terbaik yang akan disimpan.",
            'apakah bisa mengulang': "Ya, Anda bisa mengulang level mana pun di Pusat Kompetensi. Sistem akan menyimpan skor terbaik Anda. Gunakan fitur ini untuk meningkatkan pemahaman dan nilai.",
            'beda simulasi dan kompetensi': "Simulasi adalah praktik pelayanan nasabah secara interaktif (role-play). Kompetensi adalah ujian pemahaman teoretis tentang akad dan konsep perbankan syariah. Keduanya saling melengkapi.",
            'rekomendasi belajar': "Rekomendasi belajar: 1) Mulai dari level Beginner (Nasabah UMKM), 2) Pelajari akad dasar di Pusat Kompetensi, 3) Lanjut ke Intermediate (Haji & KPR), 4) Praktik simulasi berulang, 5) Tantang diri ke level Advanced.",
            'waktu belajar': "Tidak ada batasan waktu. Anda bisa belajar sesuai ritme sendiri. Setiap simulasi biasanya memakan waktu 15-30 menit. Disarankan latihan rutin 2-3 kali seminggu untuk hasil optimal.",
            'apakah gratis': "Platform laboratorium virtual ini disediakan untuk pembelajaran. Akses diberikan melalui pendaftaran akun student. Tidak ada biaya untuk menggunakan fitur-fitur pembelajaran yang tersedia.",
            'masalah teknis': "Jika mengalami masalah teknis: 1) Refresh halaman, 2) Periksa koneksi internet, 3) Hapus cache browser, 4) Coba browser lain, 5) Hubungi admin melalui menu Bantuan.",
            'browser': "Platform ini mendukung browser modern: Chrome, Firefox, Edge, dan Safari. Pastikan browser Anda diperbarui ke versi terbaru untuk pengalaman optimal.",
            'hp': "Platform dapat diakses melalui smartphone dengan tampilan responsif. Beberapa fitur mungkin lebih optimal di layar desktop/tablet untuk pengalaman belajar yang lebih baik.",
            'akun': "Akun Anda disimpan di browser (localStorage). Data termasuk progres belajar, skor, dan riwayat simulasi. Jangan hapus data browser jika ingin menyimpan progres.",
            'data hilang': "Jika data hilang, periksa apakah localStorage browser tidak sengaja terhapus. Kami sarankan untuk secara berkala mengekspor laporan dari halaman Riwayat sebagai cadangan.",
            'keamanan data': "Data Anda disimpan secara lokal di browser. Platform ini adalah simulasi pembelajaran, data tidak dikirim ke server eksternal. Gunakan perangkat pribadi untuk keamanan lebih baik.",
            'tentang platform': "SmartBank Syariah AI adalah platform edukasi perbankan syariah berbasis simulasi. Dikembangkan untuk menjembatani teori dan praktik perbankan syariah melalui teknologi AI dan interaktivitas.",
            'pengembang': "Platform ini dikembangkan oleh tim SmartBank Syariah AI sebagai alat bantu pembelajaran perbankan syariah. Untuk pertanyaan lebih lanjut, hubungi melalui menu Bantuan.",
            'saran': "Kami menerima saran dan masukan untuk pengembangan platform. Silakan sampaikan melalui menu Bantuan atau hubungi administrator. Masukan Anda sangat berharga!",
            'terima kasih': "Terima kasih telah menggunakan SmartBank Syariah AI Virtual Laboratory! Terus belajar dan tingkatkan kompetensi perbankan syariah Anda. Semoga sukses!",

            // ===== 1. KEPATUHAN SYARIAH (SYARIAH COMPLIANCE) =====
            'compliance syariah': "Kepatuhan syariah adalah fondasi bank syariah. Meliputi: 1) Deteksi & larangan riba dalam setiap transaksi, 2) Larangan gharar (ketidakjelasan akad), 3) Larangan maysir (spekulasi), 4) Ketepatan penggunaan akad sesuai transaksi. Sebagai CS, pastikan setiap produk yg Anda tawarkan bebas dari ketiga unsur ini. Jelaskan pada nasabah bahwa bank syariah menggunakan bagi hasil (nisbah), bukan bunga.",
            'larangan riba': "Riba dilarang keras. Dalam peran CS, deteksi riba: 1) Ada bunga tetap atas pinjaman, 2) Denda berlipat atas keterlambatan, 3) Keuntungan tanpa risiko. Pastikan semua produk menggunakan mekanisme bagi hasil, margin jual-beli, atau ujrah (sewa). Jika ditemukan indikasi riba, laporkan ke DPS. Jangan pernah menjanjikan keuntungan tetap kepada nasabah.",
            'larangan gharar': "Gharar adalah ketidakjelasan transaksi. Contoh: 1) Objek akad tidak spesifik, 2) Harga tidak disebut, 3) Waktu penyerahan tidak pasti. Sebagai CS, pastikan semua informasi produk disampaikan lengkap: spesifikasi, harga (pokok + margin), tenor, nisbah. Jangan sembunyikan informasi. Transparansi adalah prinsip utama akad syariah.",
            'larangan maysir': "Maysir (spekulasi/judi) dilarang. Indikasi: 1) Transaksi untung-untungan tanpa aset riil, 2) Perjanjian menggantung pada peristiwa tak pasti, 3) Spekulasi valas tanpa tujuan riil. Anda hanya boleh menawarkan produk berbasis ekonomi riil. Jangan tawarkan produk yang bersifat spekulatif atau menjanjikan untung tetap tanpa risiko.",
            'ketepatan akad': "Panduan memilih akad tepat: Tabungan/Giro -> Wadiah atau Mudharabah. Deposito -> Mudharabah. Pembiayaan barang -> Murabahah. Kerjasama usaha -> Musyarakah. Sewa barang -> Ijarah. Pinjaman sosial -> Qardh. Gadai -> Rahn. Pesanan -> Salam/Istishna. Jangan gunakan Murabahah utk simpanan atau Wadiah utk pembiayaan. Kesalahan akad = transaksi tidak syariah!",
            'pilih akad': "Memilih akad tepat itu penting: nasabah ingin menabung -> Wadiah/Mudharabah. Beli rumah -> Murabahah atau Musyarakah Mutanaqishah. Sewa barang -> Ijarah. Pinjaman sosial -> Qardh. Kerjasama usaha -> Musyarakah. Tanyakan dulu tujuan nasabah, baru tentukan akad. Jelaskan konsekuensi setiap akad agar nasabah paham dan setuju.",
            'akad simpanan': "Produk simpanan syariah: 1) Tabungan Wadiah — titipan murni, bank boleh beri bonus sukarela (tidak dijanjikan). 2) Tabungan Mudharabah — investasi bagi hasil, untung dibagi sesuai nisbah. 3) Giro Wadiah — untuk transaksi bisnis. 4) Deposito Mudharabah — investasi berjangka dengan bagi hasil lebih kompetitif.",
            'akad pembiayaan': "Produk pembiayaan syariah: 1) Murabahah — jual-beli barang (rumah, mobil, modal kerja). 2) Musyarakah — kemitraan usaha. 3) Mudharabah — bagi hasil pengelolaan dana. 4) Ijarah — sewa barang/multiguna. 5) Qardh — pinjaman sosial. 6) Rahn — gadai. Tanyakan kebutuhan nasabah, lalu pilihkan akad paling sesuai.",
            'perbedaan wadiah mudharabah': "Wadiah: titipan, bank tidak wajib bagi hasil, bonus sukarela, fleksibel tarik kapan saja. Mudharabah: investasi, bank wajib bagi hasil sesuai nisbah, cocok utk tujuan menabung jangka panjang dgn imbal hasil. Jika nasabah ingin transaksi harian -> Wadiah. Jika ingin dana berkembang -> Mudharabah.",
            'perbedaan murabahah musyarakah': "Murabahah: jual-beli dgn margin tetap, bank beli barang lalu jual ke nasabah, cicilan tetap. Musyarakah: kemitraan, bank & nasabah patungan modal, untung bagi hasil sesuai nisbah, rugi proporsional. Murabahah utk kebutuhan barang pasti, Musyarakah utk proyek/kemitraan.",
            'kepatuhan produk': "Pastikan produk yg ditawarkan memenuhi kepatuhan syariah: 1) Akad sesuai jenis transaksi, 2) Bebas riba/gharar/maysir, 3) Objek halal & jelas, 4) Nisbah/margin transparan, 5) Ada persecujuan DPS. Sebagai CS, Anda bertanggung jawab memastikan kepatuhan ini sebelum menawarkan ke nasabah.",

            // ===== 2. OPERASIONAL & SOP BANK =====
            'sop cs': "SOP CS bank syariah: 1) Sambut nasabah dgn salam, 2) Tanyakan keperluan, 3) Verifikasi identitas (KTP asli), 4) Input data ke sistem, 5) Konfirmasi produk & nominal, 6) Jelaskan akad & nisbah/margin, 7) Minta persetujuan nasabah, 8) Proses transaksi, 9) Beri bukti transaksi, 10) Akhiri dgn salam. Jangan lewatkan verifikasi & konfirmasi!",
            'prosedur cs': "Prosedur CS: mulai dgn 3S (Senyum, Salam, Sapa). Lalu tanyakan kebutuhan, verifikasi KTP, input data, konfirmasi nominal, jelaskan akad, proses transaksi, beri bukti, akhiri dgn salam. Pastikan setiap langkah terdokumentasi. Jika ada keluhan, tangani dgn sabar dan profesional.",
            'langkah cs': "Langkah pelayanan CS: 1. Sambut dgn salam Islami, 2. Persilakan duduk, 3. Tanyakan identitas & keperluan, 4. Verifikasi KTP asli, 5. Input data sesuai dokumen, 6. Tawarkan produk sesuai kebutuhan, 7. Jelaskan akad detail, 8. Konfirmasi nominal, 9. Proses di sistem, 10. Cetak bukti transaksi, 11. Serahkan dokumen, 12. Ucapkan terima kasih & salam. Jaga ketelitian di setiap langkah!",
            'tahapan cs': "Tahapan transaksi: 1) Welcome (salam, tanya keperluan), 2) Identifikasi (verifikasi KTP, cek data), 3) Informasi (jelaskan produk & akad), 4) Transaksi (proses sesuai SOP), 5) Konfirmasi (tunjukkan nominal & biaya), 6) Dokumentasi (tanda tangan, cetak bukti), 7) Penutupan (serahkan dokumen, salam). Di setiap tahap, jaga etika & kepatuhan syariah.",
            'sambut nasabah': "Menyambut nasabah: 1) Senyum tulus, 2) Ucapkan 'Assalamualaikum', 3) Perkenalkan diri, 4) Tanyakan dgn sopan 'Ada yg bisa saya bantu, Bu/Pak?', 5) Persilakan duduk. Jangan langsung tanya tanpa salam. Sambutan baik = kesan profesional & ramah.",
            'verifikasi identitas': "Verifikasi identitas langkah kritis. Periksa: 1) Keaslian fisik KTP (hologram, watermark), 2) Foto sesuai wajah, 3) NIK 16 digit valid, 4) Masa berlaku belum habis, 5) Alamat & data lain cocok. Jangan lewatkan! KTP palsu = indikasi fraud. Jika ragu, minta dokumen pendukung lain.",
            'input data cs': "Input data nasabah: 1) Baca dari KTP asli, 2) Input ke sistem teliti, 3) Konfirmasi ulang ke nasabah 'Bapak/Ibu, data sdh sesuai?', 4) Simpan. Satu digit salah NIK bisa berakibat fatal: rekening salah, blokir, masalah hukum. Teliti adalah kunci!",
            'konfirmasi nominal': "Konfirmasi nominal wajib! Sebut jelas: 'Bapak/Ibu, setoran awal Rp500.000, benar?' Tampilkan rincian: setoran pokok, biaya admin, saldo minimal. Jangan anggap remeh — ini mencegah sengketa. Biarkan nasabah mengecek sendiri nominalnya sebelum tanda tangan.",
            'bukti transaksi': "Bukti transaksi: dokumen sah setelah transaksi. Harus mencakup: 1) Tanggal & jam, 2) Nama nasabah, 3) Jenis transaksi, 4) Nominal (huruf & angka), 5) Akad, 6) Setempel bank. Serahkan ke nasabah, minta diperiksa sblm meninggalkan meja. Simpan salinan utk arsip bank.",
            'buka rekening': "Prosedur buka rekening syariah: 1) Sambut salam, 2) Tanya jenis rekening, 3) Minta KTP asli & NPWP, 4) Verifikasi dokumen, 5) Input data, 6) Tawarkan produk sesuai profil, 7) Jelaskan akad (Wadiah/Mudharabah), 8) Setoran awal, 9) Konfirmasi & tanda tangan akad, 10) Cetak buku tabungan/kartu ATM, 11) Serahkan bukti, 12) Salam.",
            'setor tunai': "Prosedur setor tunai: 1) Sambut salam, 2) Terima uang & buku tabungan, 3) Hitung uang di depan nasabah, 4) Konfirmasi nominal 'Bapak setor Rp2.000.000, benar?', 5) Input transaksi, 6) Cetak bukti setoran, 7) Kembalikan buku & bukti, 8) Ucapkan terima kasih. Hitung ulang sebelum input!",
            'tarik tunai': "Prosedur tarik tunai: 1) Verifikasi identitas & saldo, 2) Tanya nominal, 3) Konfirmasi nominal, 4) Proses sistem, 5) Hitung uang di depan nasabah, 6) Cetak bukti penarikan, 7) Serahkan uang & bukti, 8) Salam. Pastikan saldo cukup sebelum proses!",
            'cek dokumen cs': "Cek dokumen nasabah: 1) KTP asli (foto cocok, NIK valid, tdk kadaluarsa), 2) NPWP (utk transaksi > Rp50jt), 3) Dokumen pendukung (akta nikah, KK, surat kerja). Semua dokumen asli. Foto/pindai utk arsip. Jangan terima fotokopi tanpa melihat asli!",

            // ===== 3. MANAJEMEN RISIKO & ANTI FRAUD =====
            'manajemen risiko': "Manajemen risiko bank syariah: 1) Risiko Pembiayaan (gagal bayar), 2) Risiko Pasar (fluktuasi), 3) Risiko Likuiditas (kewajiban), 4) Risiko Operasional (kesalahan prosedur), 5) Risiko Kepatuhan (pelanggaran syariah), 6) Risiko Fraud (kecurangan). CS adalah garda terdepan. Dokumentasi baik = mitigasi risiko.",
            'anti fraud': "Anti fraud dgn prinsip 5P: 1) Prevent (cegah dgn SOP ketat), 2) Detect (deteksi dgn monitoring), 3) Investigate (investigasi temuan), 4) Remediate (perbaiki kelemahan), 5) Sanction (sanksi). Anda garda terdepan! Waspada & teliti dlm setiap transaksi. Jika ada yg mencurigakan, jangan diproses dulu.",
            'ktp palsu': "Ciri KTP palsu: 1) Hologram tidak ada/tidak berkilau, 2) Font tidak konsisten, 3) Foto buram/ditempel, 4) NIK tidak valid (16 digit, cek kode wilayah), 5) Tanda tangan tidak cocok, 6) Bahan berbeda (kertas vs plastik). Jika ragu, tanya detail alamat/RT/RW, minta SKCK/KK. Jangan proses jika mencurigakan! Laporkan ke atasan.",
            'dokumen palsu': "Indikasi dokumen palsu: 1) Tanda tangan berbeda, 2) Stempel tidak rapi, 3) Nomor dokumen tidak valid, 4) Masa berlaku habis/aneh, 5) Ada coretan, 6) Kualitas cetak mencurigakan. Jika ditemukan: tahan dokumen, catat identitas, laporkan atasan/DPS. Jangan kembalikan ke nasabah!",
            'slip gaji fiktif': "Indikasi slip gaji fiktif: 1) Format beda dari template perusahaan, 2) No pegawai tidak konsisten, 3) Perusahaan tidak dikenal, 4) Gaji tdk wajar dgn jabatan, 5) Tidak ada potongan pajak/BPJS, 6) Tanda tangan tidak jelas. Verifikasi dgn HRD perusahaan. Slip fiktif = modus pembiayaan fiktif.",
            'pencucian uang': "Pencucian uang menyamarkan dana haram jadi sah. 3 tahap: 1) Placement (masukkan ke sistem), 2) Layering (transaksi berlapis), 3) Integration (dana kembali bersih). Tanda: transaksi besar mendadak, rekening dormant aktif, sumber dana tidak jelas. Wajib lapor ke APU-PPT! Jangan beri tahu nasabah (tipping off).",
            'social engineering': "Social engineering = manipulasi psikologis. Modus: 1) Mengaku dari bank minta OTP/password, 2) Pura-pura nasabah lupa data, 3) Minta ganti kartu darurat, 4) Phishing. Edukasi nasabah: jangan beri PIN/OTP ke siapa pun! Jika ada yg mengaku dari bank dan minta data, laporkan ke tim keamanan.",
            'manipulasi data': "Manipulasi data nasabah = fraud internal. Pencegahan: 1) Setiap perubahan data wajib verifikasi dokumen asli, 2) Persetujuan supervisor, 3) Tercatat dgn timestamp, 4) Dual control (2 orang). Jangan pernah ubah data atas telepon/chat tanpa verifikasi!",
            'indikasi kecurangan': "Indikasi kecurangan: 1) Nasabah terburu-buru & gelisah, 2) Dokumen tdk lengkap/mencurigakan, 3) Data inkonsisten, 4) Alamat tidak jelas, 5) Pekerjaan tidak sesuai profil, 6) Transaksi frekuensi tinggi nominal ganjil, 7) Membawa banyak KTP berbeda. Jika ragu, verifikasi tambahan. Jangan takut menolak jika mencurigakan!",
            'due diligence': "Due diligence: pemeriksaan calon nasabah. Langkah: 1) Verifikasi identitas, 2) Cek profil risiko, 3) Analisis sumber dana, 4) Cek reputasi, 5) Konfirmasi pekerjaan/usaha. Prinsip KYC (Know Your Customer). Jangan lewatkan meski nasabah terkesan terpercaya. Due diligence = benteng pertama anti fraud.",
            'risk assessment': "Risk assessment nasabah: kategori rendah/sedang/tinggi. Faktor: 1) Profil pekerjaan (PNS rendah, wiraswasta sedang, tdk tetap tinggi), 2) Sumber dana (jelas/tidak), 3) Frekuensi transaksi, 4) Negara asal (high risk country). Nasabah risiko tinggi butuh EDD (Enhanced Due Diligence).",
            'early warning': "Early warning system (EWS): 1) Mutasi rekening tiba-tiba besar, 2) Pembayaran angsuran bermasalah, 3) Sering ganti data, 4) Alamat/telepon tdk bisa dihubungi, 5) Agunan bermasalah. Jika menemukan, laporkan ke unit risiko. Deteksi dini cegah kerugian besar.",
            'whistleblowing': "Whistleblowing: laporkan pelanggaran/fraud yg Anda lihat via saluran resmi bank. Bank wajib sediakan saluran aman & rahasia. Pelapor dilindungi. Jangan tutup mata! Jika melihat rekan manipulasi data atau terima gratifikasi, laporkan. Integritas adalah harga mati.",

            // ===== 4. KUALITAS KOMUNIKASI (SOFT SKILL) =====
            'soft skill cs': "Soft skill penting CS bank syariah: 1) Komunikasi efektif (jelas, sopan, mudah dipahami), 2) Empati (pahami kebutuhan nasabah), 3) Ketelitian (verifikasi data cermat), 4) Sabar (hadapi nasabah tenang), 5) Problem solving (cari solusi terbaik), 6) Integritas (jujur & transparan). Anda juga harus kuasai istilah syariah & jelaskan dgn bahasa sederhana.",
            'komunikasi efektif': "Komunikasi efektif: 1) Bahasa Indonesia baik, hindari istilah sulit, 2) Bicara jelas intonasi ramah, 3) Tatap mata (jangan main HP), 4) Bahasa tubuh positif (angguk, senyum), 5) Tanya apakah nasabah paham, 6) Konfirmasi ulang poin penting. Komunikasi baik = kepercayaan nasabah.",
            'keramahan': "Keramahan kunci sukses CS: 1) Senyum tulus, 2) Salam hangat, 3) Panggil Bapak/Ibu, 4) Bantu dgn antusias, 5) Dengarkan penuh perhatian tanpa menyela, 6) Gunakan 'mohon maaf' & 'terima kasih'. Nasabah yg dilayani ramah = merasa dihargai & nyaman.",
            'kejelasan produk': "Jelaskan produk syariah dgn jelas: 1) Gunakan analogi sehari-hari, 2) Hindari istilah Arab tanpa penjelasan, 3) Beri contoh perhitungan bagi hasil/margin, 4) Tunjukkan brosur/simulasi, 5) Bandingkan dgn konvensional agar mudah dipahami, 6) Tanya apakah ada yg belum jelas. Nasabah harus paham sebelum tanda tangan akad!",
            'ketelitian verifikasi': "Ketelitian verifikasi: 1) Cocokkan foto KTP dgn wajah asli, 2) Baca NIK digit per digit, 3) Verifikasi alamat & kode pos, 4) Cek tanggal lahir & usia, 5) Periksa tanda tangan, 6) Validasi no telepon (minta dihubungi saat itu). Satu digit NIK salah = masalah serius!",
            'etika komunikasi': "Etika komunikasi CS syariah: 1) Salam Islami, 2) Bahasa sopan (Bapak/Ibu, mohon, silakan, terima kasih), 3) Jangan potong pembicaraan, 4) Jaga kerahasiaan data, 5) Tidak diskriminatif, 6) Akhiri dgn salam & terima kasih. Etika = akhlak Islam & citra bank.",
            'sabar melayani': "Tips sabar: 1) Tarik napas jika mulai kesal, 2) Ingat nasabah mungkin tidak paham, 3) Jelaskan ulang dgn sabar, 4) Jangan meninggikan suara, 5) Jika nasabah marah, dengarkan dulu lalu tawarkan solusi, 6) Minta bantuan supervisor jika perlu. Sabar = ihsan dlm bekerja.",
            'penampilan cs': "Penampilan CS bank syariah: 1) Seragam rapi bersih, 2) Pakaian sopan sesuai syariah (menutup aurat), 3) Name tag terlihat, 4) Rambut rapi, 5) Wewangian tidak menyengat, 6) Senyum & kontak mata. Penampilan profesional = kepercayaan nasabah sejak pertama lihat.",
            'penanganan keluhan': "Cara tangani keluhan: 1) Dengarkan tanpa menyela, 2) Minta maaf atas ketidaknyamanan, 3) Catat detail keluhan, 4) Tawarkan solusi sesuai syariah, 5) Jika di luar kewenangan, eskala ke atasan, 6) Follow up hasil penanganan. Tangani cepat & tuntas! Keluhan terkelola baik = loyalitas.",
            'komunikasi nasabah': "Tips komunikasi per tipe nasabah: 1) Lansia: bicara pelan, jelas, sabar. 2) Sibuk: efisien & to the point. 3) Ragu: beri detail & contoh. 4) Marah: dengarkan dulu, jangan membela diri. 5) Bingung: pandu langkah demi langkah. Setiap nasabah unik, sesuaikan gaya komunikasi!",
            'integritas cs': "Integritas CS: 1) Jujur jelaskan produk (jangan sembunyikan biaya), 2) Tidak terima gratifikasi dari nasabah, 3) Tidak manipulasi data utk kepentingan pribadi, 4) Laporkan pelanggaran yg dilihat, 5) Tolak transaksi mencurigakan. Integritas = nilai utama perbankan syariah. Jaga amanah!"
        };

        function normalizeText(t) {
            return t.toLowerCase().replace(/[.,!?\\/\\-]/g, ' ');
        }

        function findKeywords(text) {
            const normalized = normalizeText(text);
            const found = [];
            for (const key in RESPONSES) {
                const pattern = new RegExp('\\b' + key.replace(/\\s+/g, '\\\\s+') + '\\b', 'i');
                if (pattern.test(normalized)) found.push(key);
            }
            return found;
        }

        const GREETINGS = [
            "assalamu'alaikum",
            'assalamualaikum',
            'assalam',
            'assalamualaikum',
            'halo',
            'hai',
            'hi',
            'hello',
            'selamat pagi',
            'selamat siang',
            'selamat sore',
            'selamat malam'
        ];

        function isGreeting(text) {
            const normalized = normalizeText(text);
            for (const g of GREETINGS) {
                const pattern = new RegExp('\\b' + g.replace(/\\s+/g, '\\\\s+') + '\\b', 'i');
                if (pattern.test(normalized)) return g;
            }
            return null;
        }

        function capitalizeFirst(s) {
            return s.charAt(0).toUpperCase() + s.slice(1);
        }

        function processUserQuery(text) {
            // If user greets, reply with a greeting only
            const greeting = isGreeting(text);
            if (greeting) {
                // Prefer proper Islamic greeting reply
                if (greeting.includes('assalam')) {
                    return "Waalaikumsalam. Ada yang bisa saya bantu?";
                }
                // Time-based generic reply for selamat and others
                if (greeting.startsWith('selamat')) {
                    return capitalizeFirst(greeting) + ", ada yang bisa saya bantu?";
                }
                return capitalizeFirst(greeting) + ", ada yang bisa saya bantu?";
            }

            const keywords = findKeywords(text);
            if (!keywords.length) {
                return 'Pertanyaan anda diluar konteks. Saya tidak bisa menjawab';
            }

            // Prefer the most specific/first matched keyword
            const primary = keywords[0];
            const answer = RESPONSES[primary];
            // Return only the answer (no keyword label)
            return answer;
        }
    </script>
    <script>
        (function () {
            const appRoutes = {
                login: '../Login/login.php'
            };

            function redirectToLogin() {
                window.location.href = appRoutes.login;
            }

            function isLoggedIn() {
                return localStorage.getItem('isLoggedIn') === 'true';
            }

            function currentRole() {
                return localStorage.getItem('userRole') || null;
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

        // Cross-tab sync for theme & language
        window.addEventListener('storage', (e) => {
            if (e.key === 'appTheme' && window.appI18n) {
                window.appI18n.applyTheme();
            } else if (e.key === 'appLanguage' && window.appI18n) {
                window.appI18n.applyTranslation();
            }
        });
    </script>
    <script src="../assets/js/i18n.js"></script>
    <!-- Notification Toast -->
    <div id="simpanNotif" class="fixed bottom-24 md:bottom-8 left-1/2 -translate-x-1/2 z-[110] transition-all duration-400 translate-y-20 opacity-0 pointer-events-none">
        <div class="bg-primary-container text-on-primary-container px-6 py-3 rounded-xl shadow-2xl flex items-center gap-3 border border-primary/30 backdrop-blur-md">
            <span class="material-symbols-outlined text-[20px]">check_circle</span>
            <span class="font-semibold text-sm" id="notifText">Data berhasil disimpan!</span>
        </div>
    </div>
    <div id="langToggle" style="position:fixed;bottom:72px;right:16px;z-index:9999;display:flex;gap:4px;background:var(--surface-container,#1e1e2e);padding:4px;border-radius:8px;border:1px solid var(--outline-variant,#3e3e4e);box-shadow:0 4px 12px rgba(0,0,0,0.3);">
        <button onclick="if(window.appI18n){window.appI18n.setLanguage('id')}" id="langBtnId" style="padding:6px 12px;border-radius:6px;font-size:11px;font-weight:700;cursor:pointer;border:none;background:var(--primary,#bb86fc);color:#fff;">ID</button>
        <button onclick="if(window.appI18n){window.appI18n.setLanguage('en')}" id="langBtnEn" style="padding:6px 12px;border-radius:6px;font-size:11px;font-weight:700;cursor:pointer;border:none;background:transparent;color:var(--on-surface,#e0e0e0);">EN</button>
    </div>
    <script>(function(){var lang=localStorage.getItem('appLanguage')||'id';var bId=document.getElementById('langBtnId');var bEn=document.getElementById('langBtnEn');if(lang==='en'){bId.style.background='transparent';bId.style.color='var(--on-surface,#e0e0e0)';bEn.style.background='var(--primary,#bb86fc)';bEn.style.color='#fff';}else{bEn.style.background='transparent';bEn.style.color='var(--on-surface,#e0e0e0)';bId.style.background='var(--primary,#bb86fc)';bId.style.color='#fff';}})();</script>
    <script>
    (function(){
        var notifTimeout = null;

        function showNotif(msg) {
            var el = document.getElementById('simpanNotif');
            var txt = document.getElementById('notifText');
            if (!el) return;
            if (notifTimeout) clearTimeout(notifTimeout);
            txt.textContent = msg;
            el.classList.remove('translate-y-20', 'opacity-0');
            el.classList.add('translate-y-0', 'opacity-100');
            notifTimeout = setTimeout(function() {
                el.classList.remove('translate-y-0', 'opacity-100');
                el.classList.add('translate-y-20', 'opacity-0');
            }, 3000);
        }

        function readFileAsBase64(file, cb) {
            var reader = new FileReader();
            reader.onload = function(e) { cb(e.target.result); };
            reader.readAsDataURL(file);
        }

        function handleUpload(inputId, previewId, iconId, labelId, storageKey) {
            var input = document.getElementById(inputId);
            var preview = document.getElementById(previewId);
            var icon = document.getElementById(iconId);
            var label = document.getElementById(labelId);
            input.click();
            input.onchange = function() {
                if (!input.files || !input.files[0]) return;
                var file = input.files[0];
                readFileAsBase64(file, function(base64) {
                    preview.src = base64;
                    preview.classList.remove('hidden');
                    icon.classList.add('hidden');
                    label.textContent = file.name;
                    localStorage.setItem(storageKey, base64);
                    // Also store in data nasabah for printing
                    var raw = localStorage.getItem('simulasiDataNasabah');
                    if (raw) {
                        try {
                            var d = JSON.parse(raw);
                            d[storageKey === 'fotoKtp' ? 'fotoKtp' : 'fotoNpwp'] = base64;
                            localStorage.setItem('simulasiDataNasabah', JSON.stringify(d));
                        } catch(e) {}
                    }
                });
            };
        }

        window.simpanData = function() {
            var nama = document.getElementById('inputNama').value.trim();
            var nik = document.getElementById('inputNik').value.trim();
            var tgl = document.getElementById('inputTglLahir').value;
            var produk = '';
            var produkRadios = document.getElementsByName('product');
            for (var i = 0; i < produkRadios.length; i++) {
                if (produkRadios[i].checked) { produk = produkRadios[i].value; break; }
            }

            if (!nama) { showNotif('Nama lengkap harus diisi!'); return; }
            if (!nik || nik.length < 16) { showNotif('NIK harus 16 digit!'); return; }
            if (!tgl) { showNotif('Tanggal lahir harus diisi!'); return; }
            if (!produk) { showNotif('Pilih produk yang ditawarkan!'); return; }

            var data = {
                nama: nama,
                nik: nik,
                tglLahir: tgl,
                produk: produk,
                tersimpan: new Date().toISOString(),
                fotoKtp: localStorage.getItem('fotoKtp') || '',
                fotoNpwp: localStorage.getItem('fotoNpwp') || ''
            };
            localStorage.setItem('simulasiDataNasabah', JSON.stringify(data));

            document.getElementById('btnCetak').classList.remove('hidden');
            showNotif('Data nasabah berhasil disimpan!');
        };

        window.cetakData = function() {
            var raw = localStorage.getItem('simulasiDataNasabah');
            if (!raw) { showNotif('Belum ada data untuk dicetak.'); return; }
            var data;
            try { data = JSON.parse(raw); } catch(e) { showNotif('Data rusak.'); return; }

            var now = new Date();
            var dateStr = now.toLocaleDateString('id-ID', { day:'numeric', month:'long', year:'numeric' });
            var produkPilihan = data.produk === 'Tabungan Wadiah' ? 'Tabungan Wadiah (Titipan Murni)' : 'Tabungan Mudharabah (Bagi Hasil)';

            var doc = '<!DOCTYPE html><html><head><meta charset="utf-8"><title>Data Nasabah - SmartBank Syariah AI</title>';
            doc += '<style>';
            doc += '*{margin:0;padding:0;box-sizing:border-box}';
            doc += 'body{font-family:"Segoe UI",Arial,sans-serif;background:#f5f5f0;color:#1a1a1a;padding:40px;max-width:700px;margin:auto}';
            doc += '.header{text-align:center;margin-bottom:28px;padding-bottom:20px;border-bottom:3px solid #226a53}';
            doc += '.header h1{font-size:22px;color:#226a53;margin-bottom:4px}';
            doc += '.header p{color:#666;font-size:13px}';
            doc += '.card{background:#fff;border-radius:12px;padding:28px;box-shadow:0 2px 12px rgba(0,0,0,0.06)}';
            doc += 'table{width:100%;border-collapse:collapse}';
            doc += 'td{padding:10px 0;border-bottom:1px solid #e8e8e0;font-size:14px}';
            doc += 'td.label{color:#888;width:160px;font-weight:600;text-transform:uppercase;font-size:11px;letter-spacing:0.05em}';
            doc += 'td.value{color:#1a1a1a;font-weight:500}';
            doc += '.badge{display:inline-block;background:#dff0e8;color:#226a53;padding:4px 14px;border-radius:12px;font-size:12px;font-weight:600}';
            doc += '.footer{text-align:center;margin-top:28px;padding-top:16px;border-top:1px solid #ddd;font-size:11px;color:#999}';
            doc += 'hr{margin:24px 0;border:0;border-top:1px solid #eee}';
            doc += 'table tr:last-child td{border:0}';
            doc += '@media print{body{padding:20px} .no-print{display:none}}';
            doc += '</style></head><body>';

            doc += '<div class="header"><h1>Data Nasabah</h1><p>SmartBank Syariah AI &mdash; Formulir Pendaftaran</p></div>';
            doc += '<div class="card">';
            doc += '<table>';
            doc += '<tr><td class="label">Nama Lengkap</td><td class="value">' + data.nama + '</td></tr>';
            doc += '<tr><td class="label">NIK</td><td class="value">' + data.nik + '</td></tr>';
            var tglFormatted = data.tglLahir.split('-').reverse().join('/');
            doc += '<tr><td class="label">Tanggal Lahir</td><td class="value">' + tglFormatted + '</td></tr>';
            doc += '<tr><td class="label">Produk</td><td class="value"><span class="badge">' + produkPilihan + '</span></td></tr>';
            doc += '<tr><td class="label">Tersimpan</td><td class="value">' + dateStr + '</td></tr>';
            doc += '</table>';
            doc += '<hr><div style="display:flex;gap:20px;margin-top:16px">';
            if (data.fotoKtp) {
                doc += '<div style="flex:1"><p style="font-size:11px;color:#888;margin-bottom:6px;text-transform:uppercase;letter-spacing:0.05em">Foto KTP</p><img src="' + data.fotoKtp + '" style="width:100%;border-radius:8px;border:1px solid #ddd" /></div>';
            }
            if (data.fotoNpwp) {
                doc += '<div style="flex:1"><p style="font-size:11px;color:#888;margin-bottom:6px;text-transform:uppercase;letter-spacing:0.05em">Foto NPWP</p><img src="' + data.fotoNpwp + '" style="width:100%;border-radius:8px;border:1px solid #ddd" /></div>';
            }
            doc += '</div><hr>';
            doc += '<p style="font-size:13px;color:#666;line-height:1.6">Dokumen ini merupakan bukti pendaftaran nasabah pada sistem SmartBank Syariah AI. Data telah tercatat dalam sistem simulasi laboratorium virtual.</p>';
            doc += '</div>';
            doc += '<div class="footer"><p>Dicetak pada ' + dateStr + ' &mdash; &copy; SmartBank Syariah AI Virtual Laboratory</p></div>';
            doc += '</body></html>';

            var win = window.open('', '_blank');
            win.document.write(doc);
            win.document.close();
            win.focus();
        };

        // Load existing data on page load
        document.addEventListener('DOMContentLoaded', function() {
            // Wire upload areas
            document.getElementById('ktpUpload').addEventListener('click', function(e) {
                e.preventDefault();
                handleUpload('fileKtp', 'ktpPreview', 'ktpIcon', 'ktpLabel', 'fotoKtp');
            });
            document.getElementById('npwpUpload').addEventListener('click', function(e) {
                e.preventDefault();
                handleUpload('fileNpwp', 'npwpPreview', 'npwpIcon', 'npwpLabel', 'fotoNpwp');
            });

            // Restore previously stored images
            var ktpImg = localStorage.getItem('fotoKtp');
            if (ktpImg) {
                document.getElementById('ktpPreview').src = ktpImg;
                document.getElementById('ktpPreview').classList.remove('hidden');
                document.getElementById('ktpIcon').classList.add('hidden');
                document.getElementById('ktpLabel').textContent = 'KTP terupload';
            }
            var npwpImg = localStorage.getItem('fotoNpwp');
            if (npwpImg) {
                document.getElementById('npwpPreview').src = npwpImg;
                document.getElementById('npwpPreview').classList.remove('hidden');
                document.getElementById('npwpIcon').classList.add('hidden');
                document.getElementById('npwpLabel').textContent = 'NPWP terupload';
            }

            // Show cetak button if data exists
            var raw = localStorage.getItem('simulasiDataNasabah');
            if (raw) {
                try {
                    var data = JSON.parse(raw);
                    if (data.nama) {
                        document.getElementById('btnCetak').classList.remove('hidden');
                    }
                } catch(e) {}
            }
        });
    })();
    </script>
    <script src="../assets/js/help-menu.js"></script>
</body>

</html>