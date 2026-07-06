<!DOCTYPE html>

<html class="dark" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Competency Center | Sharia Lab Admin</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&amp;family=Inter:wght@400;500;600;700&amp;display=swap"
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
    <style>
        .glass-panel {
            background: rgba(34, 34, 34, 0.6);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(137, 147, 141, 0.2);
        }

        .sharia-glow:hover {
            box-shadow: 0 0 20px rgba(142, 213, 185, 0.15);
        }

        .custom-scrollbar::-webkit-scrollbar {
            width: 6px;
        }

        .custom-scrollbar::-webkit-scrollbar-track {
            background: #131313;
        }

        .custom-scrollbar::-webkit-scrollbar-thumb {
            background: #3f4944;
            border-radius: 10px;
        }

        .node-branch::before {
            content: '';
            position: absolute;
            left: -20px;
            top: 50%;
            width: 20px;
            height: 1px;
            background: #3f4944;
        }

        .node-tree-line::after {
            content: '';
            position: absolute;
            left: -21px;
            top: 0;
            width: 1px;
            height: 100%;
            background: #3f4944;
        }
    </style>
</head>

<body class="bg-background text-on-background custom-scrollbar overflow-x-hidden">
    <!-- Side Navigation -->
    <aside id="adminSidebar"
        class="hidden md:flex w-[280px] h-screen fixed left-0 top-0 bg-charcoal-surface dark:bg-surface-container-lowest border-r border-outline-variant flex-col py-unit-lg z-50 transition-transform duration-300">
        <div class="px-unit-lg mb-unit-xl">
            <h1 class="font-headline-md text-headline-md text-sharia-green-deep dark:text-primary font-bold">Sharia Bank
                Lab</h1>
            <p class="font-body-md text-body-md text-on-surface-variant opacity-70">Management Portal</p>
        </div>
        <nav class="flex-1 space-y-unit-xs">
            <a class="flex items-center gap-unit-md px-unit-lg py-unit-sm text-on-surface-variant hover:text-on-surface hover:bg-surface-variant/50 transition-colors duration-200 active:scale-95"
                href="../Dashboard_Siswa/Dashboard_admin.php">
                <span class="material-symbols-outlined">dashboard</span>
                <span class="font-body-md text-body-md">Dashboard</span>
            </a>
            <!-- Active Tab: Simulasi -->
            <a class="flex items-center gap-unit-md px-unit-lg py-unit-sm bg-primary-container/10 text-primary border-l-4 border-secondary font-bold hover:bg-surface-variant/50 transition-colors duration-200 active:scale-95"
                href="#">
                <span class="material-symbols-outlined">psychology</span>
                <span class="font-body-md text-body-md">Simulasi</span>
            </a>
            <a class="flex items-center gap-unit-md px-unit-lg py-unit-sm text-on-surface-variant hover:text-on-surface hover:bg-surface-variant/50 transition-colors duration-200 active:scale-95"
                href="../Pusat_Kompetensi/Pusat_Kompetensi_Admin.php">
                <span class="material-symbols-outlined">military_tech</span>
                <span class="font-body-md text-body-md">Kompetensi</span>
            </a>
            <a class="flex items-center gap-unit-md px-unit-lg py-unit-sm text-on-surface-variant hover:text-on-surface hover:bg-surface-variant/50 transition-colors duration-200 active:scale-95"
                href="../Riwayat/Riwayat_Admin.php">
                <span class="material-symbols-outlined">history</span>
                <span class="font-body-md text-body-md">Riwayat</span>
            </a>
            <a class="flex items-center gap-unit-md px-unit-lg py-unit-sm text-on-surface-variant hover:text-on-surface hover:bg-surface-variant/50 transition-colors duration-200 active:scale-95"
                href="../Setting/Setting_Admin.php">
                <span class="material-symbols-outlined">settings</span>
                <span class="font-body-md text-body-md">Setelan</span>
            </a>
        </nav>
        <div class="px-unit-lg pt-unit-lg border-t border-outline-variant space-y-unit-xs">

            <div class="flex items-center gap-unit-md mt-unit-lg">
                <div class="w-10 h-10 rounded-full bg-surface-container-highest overflow-hidden">
                    <img class="w-full h-full object-cover" data-alt="A professional-looking administrator"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuC151_hTwwCnUk3BNZs0Bc_M8LPKReW4I0DNV9xmmvxwku5aGKwdv2wJWbM5mYvGsd6rcjK1szlgt3XjaBmyCVN3_WJJzHiJISIi7Jr1uVh52xlI3rUDvOQzmUWrM8o1fbFpeNcQ2qAZyDMyqTnItt-xlIb4p-Mngry4ruKN_r9zPqT6kBSe3NQn0o135BHHKG1Ak6yB0pteOP6JikanmfY-OSXJlG94yqfX1nM6PBN-rChTlHTNZXtHhx64Q__XKbhlJi3Y96kj9UG" />
                </div>
                <div>
                    <p class="font-label-caps text-label-caps text-on-surface">Zaid Ahmed</p>
                    <p class="text-[10px] text-on-surface-variant">Lead Registrar</p>
                </div>
            </div>
        </div>
    </aside>
    <!-- Top Navigation -->
    <!-- Mobile Overlay -->
    <div id="mobileOverlay" class="fixed inset-0 bg-black/60 z-40 hidden md:hidden" onclick="toggleAdminSidebar()"></div>
    <header
        class="h-16 fixed top-0 right-0 w-full md:w-[calc(100%-280px)] bg-surface-container dark:bg-surface-container-low border-b border-outline-variant flex justify-between items-center px-4 md:px-margin-desktop z-40">
        <div class="flex items-center gap-unit-lg">
            <button class="md:hidden material-symbols-outlined text-on-surface-variant hover:text-primary transition-colors" onclick="toggleAdminSidebar()">menu</button>
            <h2 class="font-headline-sm text-headline-sm font-bold text-on-surface hidden sm:block">Manajemen Pusat Kompetensi</h2>
            <div class="relative hidden md:block w-48 lg:w-80">
                <span
                    class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-on-surface-variant text-sm">search</span>
                <input
                    class="w-full bg-surface-dim border border-outline-variant rounded-lg pl-10 pr-4 py-2 text-body-md focus:ring-1 focus:ring-primary focus:border-primary outline-none transition-all"
                    placeholder="Cari kompetensi simulasi..." type="text" />
            </div>
        </div>
        <div class="flex items-center gap-unit-lg">
            <div
                class="flex items-center gap-unit-md px-4 py-1.5 rounded-full bg-surface-container-high border border-outline-variant cursor-pointer hover:bg-surface-variant transition-all">
                <span class="material-symbols-outlined text-secondary text-sm">help_outline</span>
                <span class="font-label-caps text-label-caps text-on-surface">Bantuan</span>
            </div>
            <button class="relative text-on-surface-variant hover:text-primary transition-all">
                <span class="material-symbols-outlined">notifications</span>
                <span
                    class="absolute top-0 right-0 w-2 h-2 bg-secondary rounded-full border-2 border-surface-container"></span>
            </button>
        </div>
    </header>
    <!-- Main Canvas -->
    <main class="md:ml-[280px] pt-16 min-h-screen">
        <div class="px-4 md:px-margin-desktop py-margin-desktop max-w-[1600px] mx-auto pb-20 md:pb-margin-desktop">
            <!-- Header Actions -->
            <div class="flex justify-between items-end mb-unit-xl">
                <div>
                    <h3 class="font-headline-md text-[20px] md:text-headline-md text-on-surface mb-1">Taksonomi Pengetahuan &amp;
                        Simulasi</h3>
                    <p class="font-body-md text-body-md text-on-surface-variant max-w-xl">
                        Atur struktur hierarki keahlian perbankan syariah dan kelola konten live simulasi yang dihadapi
                        mahasiswa secara langsung.
                    </p>
                </div>
                <div class="flex gap-unit-md">
                    <button
                        class="px-unit-lg py-2 rounded-lg border border-outline-variant font-label-caps text-label-caps text-on-surface hover:bg-surface-container-highest transition-all flex items-center gap-2">
                        <span class="material-symbols-outlined text-sm">filter_list</span> Filter
                    </button>
                    <button
                        class="px-unit-lg py-2 rounded-lg bg-primary text-on-primary font-label-caps text-label-caps hover:brightness-110 transition-all flex items-center gap-2 shadow-lg shadow-primary/10">
                        <span class="material-symbols-outlined text-sm">add</span> Tambah Kompetensi/Simulasi
                    </button>
                </div>
            </div>
            <!-- Content Grid -->
            <div class="grid grid-cols-12 gap-gutter">
                <!-- Taxonomy Tree View -->
                <div class="col-span-12 lg:col-span-4 space-y-gutter">
                    <div class="glass-panel p-unit-lg rounded-xl flex flex-col h-[800px]">
                        <div class="flex justify-between items-center mb-unit-lg">
                            <span class="font-label-caps text-label-caps text-primary tracking-widest">TAXONOMY
                                TREE</span>
                            <div class="flex gap-2">
                                <button class="p-1 hover:bg-surface-variant rounded transition-all"><span
                                        class="material-symbols-outlined text-sm">unfold_more</span></button>
                                <button class="p-1 hover:bg-surface-variant rounded transition-all"><span
                                        class="material-symbols-outlined text-sm">sync</span></button>
                            </div>
                        </div>
                        <div class="flex-1 overflow-y-auto custom-scrollbar pr-2">
                            <div class="space-y-4">
                                <!-- Root Level 1 -->
                                <div>
                                    <div
                                        class="flex items-center gap-3 p-3 rounded-lg bg-primary-container/20 border border-primary/20 cursor-pointer">
                                        <span class="material-symbols-outlined text-primary">keyboard_arrow_down</span>
                                        <span class="material-symbols-outlined text-primary"
                                            style="font-variation-settings: 'FILL' 1;">account_balance</span>
                                        <span class="font-body-md text-body-md font-semibold text-on-surface">Islamic
                                            Commercial Law</span>
                                    </div>
                                    <div class="ml-10 mt-2 space-y-2 relative node-tree-line">
                                        <div class="relative node-branch">
                                            <div
                                                class="flex items-center justify-between group p-2.5 rounded-lg border border-transparent hover:border-outline-variant hover:bg-surface-variant/30 cursor-pointer transition-all">
                                                <div class="flex items-center gap-3">
                                                    <span
                                                        class="material-symbols-outlined text-on-surface-variant">folder_open</span>
                                                    <span class="font-body-md text-body-md text-on-surface">Contract Law
                                                        (Uqud)</span>
                                                </div>
                                            </div>
                                            <div class="ml-8 mt-2 space-y-2 relative node-tree-line">
                                                <div class="relative node-branch">
                                                    <div
                                                        class="flex items-center justify-between group p-2.5 rounded-lg border border-primary/30 bg-primary/5 cursor-pointer transition-all">
                                                        <div class="flex items-center gap-3">
                                                            <span
                                                                class="material-symbols-outlined text-secondary text-base">verified_user</span>
                                                            <span
                                                                class="font-body-md text-body-md text-primary font-medium">Murabahah
                                                                Mastery</span>
                                                        </div>
                                                        <span
                                                            class="material-symbols-outlined text-sm text-secondary">videogame_asset</span>
                                                    </div>
                                                </div>
                                                <div class="relative node-branch">
                                                    <div
                                                        class="flex items-center justify-between group p-2.5 rounded-lg border border-transparent hover:border-outline-variant hover:bg-surface-variant/30 cursor-pointer transition-all">
                                                        <div class="flex items-center gap-3">
                                                            <span
                                                                class="material-symbols-outlined text-on-surface-variant text-base">description</span>
                                                            <span
                                                                class="font-body-md text-body-md text-on-surface">Mudharabah
                                                                Principles</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="opacity-50">
                                    <div
                                        class="flex items-center gap-3 p-3 rounded-lg hover:bg-surface-variant/30 border border-transparent cursor-pointer transition-all">
                                        <span
                                            class="material-symbols-outlined text-on-surface-variant">keyboard_arrow_right</span>
                                        <span class="material-symbols-outlined text-on-surface-variant">payments</span>
                                        <span class="font-body-md text-body-md font-semibold text-on-surface">Sharia
                                            Risk Management</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Simulation Editor (Main View) -->
                <div class="col-span-12 lg:col-span-8 space-y-gutter">
                    <!-- Top Actions & Basic Info -->
                    <div class="glass-panel p-unit-lg rounded-xl relative">
                        <div class="flex justify-between items-start mb-unit-lg">
                            <div class="flex items-center gap-4">
                                <div
                                    class="w-14 h-14 rounded-xl bg-primary/10 border border-primary/30 flex items-center justify-center">
                                    <span class="material-symbols-outlined text-primary text-3xl"
                                        style="font-variation-settings: 'FILL' 1;">verified_user</span>
                                </div>
                                <div>
                                    <span class="font-label-caps text-label-caps text-secondary">SIMULATION NODE:
                                        MUR-01</span>
                                    <h4 class="font-headline-sm text-headline-sm text-on-surface">Murabahah Financing
                                        Simulation</h4>
                                </div>
                            </div>
                            <div class="flex gap-3">
                                <button id="btnPreviewLive"
                                    class="px-unit-lg py-2 rounded-lg bg-surface-container-highest border border-outline-variant font-label-caps text-label-caps text-on-surface hover:bg-surface-variant hover:text-primary transition-all flex items-center gap-2">Preview
                                    Live <span class="material-symbols-outlined text-sm">open_in_new</span></button>
                                <button
                                    class="px-unit-lg py-2 rounded-lg bg-primary text-on-primary font-label-caps text-label-caps hover:shadow-lg transition-all">Simpan
                                    Perubahan</button>
                            </div>
                        </div>
                        <!-- Editor Tabs -->
                        <div class="flex border-b border-outline-variant mb-6">
                            <button data-tab="dialogues"
                                class="tab-btn px-6 py-3 text-primary border-b-2 border-primary font-label-caps text-label-caps transition-all">Dialogues
                                &amp; Flows</button>
                            <button data-tab="personas"
                                class="tab-btn px-6 py-3 text-on-surface-variant hover:text-on-surface font-label-caps text-label-caps transition-all">AI
                                Personas</button>
                            <button data-tab="compliance"
                                class="tab-btn px-6 py-3 text-on-surface-variant hover:text-on-surface font-label-caps text-label-caps transition-all">Compliance
                                Rules</button>
                        </div>

                        <!-- Tab Content: Dialogues -->
                        <div id="tab-dialogues" class="tab-content">
                            <div class="space-y-6">
                                <div class="flex justify-between items-center">
                                    <h5 class="font-body-md text-body-md font-bold text-on-surface">Simulation Dialogue Nodes</h5>
                                    <button id="btnAddDialogue"
                                        class="text-primary flex items-center gap-1 font-label-caps text-label-caps hover:underline">
                                        <span class="material-symbols-outlined text-sm">add_circle</span> Tambah Dialog Baru
                                    </button>
                                </div>
                                <div id="dialogueList" class="space-y-3"></div>
                                <div id="emptyDialogueState" class="hidden text-center py-6 text-on-surface-variant">
                                    <span class="material-symbols-outlined text-3xl mb-2">chat</span>
                                    <p class="text-sm">Belum ada dialogue. Klik "Tambah Dialog Baru" untuk membuat.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Tab Content: Personas -->
                        <div id="tab-personas" class="tab-content hidden">
                            <div class="glass-panel p-unit-lg rounded-xl">
                                <div class="flex justify-between items-center mb-unit-lg">
                                    <div>
                                        <h5 class="font-body-md text-body-md font-bold text-on-surface">AI Customer Personas</h5>
                                        <p class="text-[11px] text-on-surface-variant mt-1">Kelola & atur karakter nasabah AI simulasi</p>
                                    </div>
                                    <button id="btnAddCustomer"
                                        class="px-3 py-1.5 bg-primary text-on-primary rounded-lg text-xs font-bold flex items-center gap-1.5 hover:brightness-110 transition-all">
                                        <span class="material-symbols-outlined text-sm">add</span> Tambah
                                    </button>
                                </div>
                                <div id="customerList" class="space-y-3"></div>
                                <div id="emptyCustomerState" class="hidden text-center py-8 text-on-surface-variant">
                                    <span class="material-symbols-outlined text-4xl mb-2">person_off</span>
                                    <p class="text-sm">Belum ada AI Customer. Klik "Tambah" untuk membuat baru.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Tab Content: Compliance -->
                        <div id="tab-compliance" class="tab-content hidden">
                            <div class="glass-panel p-unit-lg rounded-xl">
                                <div class="flex justify-between items-center mb-unit-lg">
                                    <div>
                                        <h5 class="font-body-md text-body-md font-bold text-on-surface">Sharia Compliance Logic</h5>
                                        <p class="text-[10px] text-on-surface-variant mt-0.5">Deteksi real-time dari pesan siswa via BroadcastChannel</p>
                                    </div>
                                    <span id="complianceStatusBadge"
                                        class="px-2 py-0.5 bg-surface-variant text-on-surface-variant text-[9px] font-bold rounded uppercase">Menunggu</span>
                                </div>
                                <div id="complianceRules" class="space-y-2"></div>
                                <div id="complianceLastMsg" class="mt-3 pt-3 border-t border-outline-variant/30 hidden">
                                    <p class="text-[10px] text-on-surface-variant font-bold uppercase mb-1">Pesan Terakhir</p>
                                    <p id="complianceMsgText" class="text-[11px] text-on-surface italic leading-relaxed line-clamp-2"></p>
                                </div>
                                <div class="mt-4 p-3 rounded-lg bg-primary/5 border border-primary/10">
                                    <p class="text-[10px] text-on-surface-variant font-bold uppercase mb-1">Cara Kerja</p>
                                    <p class="text-[10px] text-on-surface-variant leading-relaxed">Panel ini menganalisis setiap pesan yang dikirim siswa dari halaman <strong>Simulasi_Siswa.php</strong> secara real-time. Buka halaman siswa di tab terpisah, kirim pesan, dan lihat hasil deteksi di sini.</p>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </main>
    <style>
        .chat-bubble-ai {
            border-radius: 4px 20px 20px 20px;
        }
        .chat-bubble-user {
            border-radius: 20px 4px 20px 20px;
        }
        .animate-fade-in {
            animation: fadeInUp 0.3s ease forwards;
        }
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(12px); }
            to { opacity: 1; transform: translateY(0); }
        }
        #chatPreviewContainer::-webkit-scrollbar { width: 4px; }
        #chatPreviewContainer::-webkit-scrollbar-track { background: transparent; }
        #chatPreviewContainer::-webkit-scrollbar-thumb { background: #3f4944; border-radius: 10px; }
    </style>

    <!-- AI Customer Modal -->
    <div id="customerModal" class="fixed inset-0 z-[100] hidden items-center justify-center bg-black/60 backdrop-blur-sm">
        <div class="bg-surface-container border border-outline-variant rounded-xl w-full max-w-lg mx-4 max-h-[90vh] overflow-y-auto shadow-2xl">
            <div class="flex justify-between items-center p-unit-lg border-b border-outline-variant">
                <h3 id="modalTitle" class="font-headline-md text-headline-md text-on-surface">Tambah AI Customer</h3>
                <button id="btnCloseModal" class="text-on-surface-variant hover:text-on-surface transition-all">
                    <span class="material-symbols-outlined">close</span>
                </button>
            </div>
            <div class="p-unit-lg space-y-4">
                <div>
                    <label class="text-xs font-bold text-on-surface-variant uppercase tracking-wider mb-1.5 block">Nama Nasabah</label>
                    <input id="inputName" class="w-full bg-surface-dim border border-outline-variant rounded-lg px-4 py-2.5 text-sm focus:ring-1 focus:ring-primary focus:border-primary outline-none transition-all" placeholder="Contoh: Ibu Siti" />
                </div>
                <div>
                    <label class="text-xs font-bold text-on-surface-variant uppercase tracking-wider mb-1.5 block">Role / Pekerjaan</label>
                    <input id="inputRole" class="w-full bg-surface-dim border border-outline-variant rounded-lg px-4 py-2.5 text-sm focus:ring-1 focus:ring-primary focus:border-primary outline-none transition-all" placeholder="Contoh: SME Owner" />
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="text-xs font-bold text-on-surface-variant uppercase tracking-wider mb-1.5 block">Status</label>
                        <select id="inputStatus" class="w-full bg-surface-dim border border-outline-variant rounded-lg px-4 py-2.5 text-sm focus:ring-1 focus:ring-primary focus:border-primary outline-none transition-all">
                            <option value="Sabar">Sabar</option>
                            <option value="Kritis">Kritis</option>
                            <option value="Teliti">Teliti</option>
                            <option value="Cepat">Cepat</option>
                            <option value="Ragu">Ragu</option>
                            <option value="Antusias">Antusias</option>
                        </select>
                    </div>
                    <div>
                        <label class="text-xs font-bold text-on-surface-variant uppercase tracking-wider mb-1.5 block">Tone</label>
                        <select id="inputTone" class="w-full bg-surface-dim border border-outline-variant rounded-lg px-4 py-2.5 text-sm focus:ring-1 focus:ring-primary focus:border-primary outline-none transition-all">
                            <option value="Formal">Formal</option>
                            <option value="Professional, Strict">Professional, Strict</option>
                            <option value="Inquisitive, Friendly">Inquisitive, Friendly</option>
                            <option value="Santai">Santai</option>
                            <option value="Tegas">Tegas</option>
                            <option value="Ramah">Ramah</option>
                        </select>
                    </div>
                </div>
                <div>
                    <label class="text-xs font-bold text-on-surface-variant uppercase tracking-wider mb-1.5 block">Avatar URL</label>
                    <input id="inputAvatar" class="w-full bg-surface-dim border border-outline-variant rounded-lg px-4 py-2.5 text-sm focus:ring-1 focus:ring-primary focus:border-primary outline-none transition-all" placeholder="https://..." />
                </div>
                <div>
                    <label class="text-xs font-bold text-on-surface-variant uppercase tracking-wider mb-1.5 block">Deskripsi Gender (alt text avatar)</label>
                    <input id="inputGender" class="w-full bg-surface-dim border border-outline-variant rounded-lg px-4 py-2.5 text-sm focus:ring-1 focus:ring-primary focus:border-primary outline-none transition-all" placeholder="Contoh: Female AI Persona" />
                </div>
                <div>
                    <label class="text-xs font-bold text-on-surface-variant uppercase tracking-wider mb-1.5 block">Pesan Awal (Scenario Goal)</label>
                    <textarea id="inputMessage" rows="3" class="w-full bg-surface-dim border border-outline-variant rounded-lg px-4 py-2.5 text-sm focus:ring-1 focus:ring-primary focus:border-primary outline-none transition-all resize-none" placeholder="Assalamu'alaikum, saya ingin..."></textarea>
                </div>
            </div>
            <div class="flex justify-end gap-3 p-unit-lg border-t border-outline-variant">
                <button id="btnCancelModal" class="px-5 py-2 rounded-lg border border-outline-variant text-sm text-on-surface-variant hover:bg-surface-variant transition-all">Batal</button>
                <button id="btnSaveCustomer" class="px-5 py-2 rounded-lg bg-primary text-on-primary text-sm font-bold hover:brightness-110 transition-all">Simpan</button>
            </div>
        </div>
    </div>

    <!-- Dialogue Modal -->
    <div id="dialogueModal" class="fixed inset-0 z-[105] hidden items-center justify-center bg-black/60 backdrop-blur-sm">
        <div class="bg-surface-container border border-outline-variant rounded-xl w-full max-w-xl mx-4 max-h-[90vh] overflow-y-auto shadow-2xl">
            <div class="flex justify-between items-center p-unit-lg border-b border-outline-variant">
                <h3 id="dialogueModalTitle" class="font-headline-md text-headline-md text-on-surface">Tambah Dialog</h3>
                <button id="btnCloseDialogueModal" class="text-on-surface-variant hover:text-on-surface transition-all">
                    <span class="material-symbols-outlined">close</span>
                </button>
            </div>
            <div class="p-unit-lg space-y-4">
                <div>
                    <label class="text-xs font-bold text-on-surface-variant uppercase tracking-wider mb-1.5 block">Kategori / Label</label>
                    <input id="inputDialogueLabel" class="w-full bg-surface-dim border border-outline-variant rounded-lg px-4 py-2.5 text-sm focus:ring-1 focus:ring-primary focus:border-primary outline-none transition-all" placeholder="Contoh: Customer Intro" />
                </div>
                <div>
                    <label class="text-xs font-bold text-on-surface-variant uppercase tracking-wider mb-1.5 block">Pesan Dialog</label>
                    <textarea id="inputDialogueText" rows="4" class="w-full bg-surface-dim border border-outline-variant rounded-lg px-4 py-2.5 text-sm focus:ring-1 focus:ring-primary focus:border-primary outline-none transition-all resize-none" placeholder="Tulis pesan yang akan dikirim ke siswa..."></textarea>
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="text-xs font-bold text-on-surface-variant uppercase tracking-wider mb-1.5 block">Warna Badge</label>
                        <select id="inputDialogueColor" class="w-full bg-surface-dim border border-outline-variant rounded-lg px-4 py-2.5 text-sm focus:ring-1 focus:ring-primary focus:border-primary outline-none transition-all">
                            <option value="secondary">Secondary (Orange)</option>
                            <option value="primary">Primary (Green)</option>
                            <option value="warning">Warning (Amber)</option>
                            <option value="error">Error (Red)</option>
                            <option value="tertiary">Tertiary (Gold)</option>
                        </select>
                    </div>
                    <div>
                        <label class="text-xs font-bold text-on-surface-variant uppercase tracking-wider mb-1.5 block">Jumlah Respon</label>
                        <input id="inputDialogueResponses" type="number" min="0" max="10" value="2" class="w-full bg-surface-dim border border-outline-variant rounded-lg px-4 py-2.5 text-sm focus:ring-1 focus:ring-primary focus:border-primary outline-none transition-all" />
                    </div>
                </div>
            </div>
            <div class="flex justify-end gap-3 p-unit-lg border-t border-outline-variant">
                <button id="btnCancelDialogueModal" class="px-5 py-2 rounded-lg border border-outline-variant text-sm text-on-surface-variant hover:bg-surface-variant transition-all">Batal</button>
                <button id="btnSaveDialogue" class="px-5 py-2 rounded-lg bg-primary text-on-primary text-sm font-bold hover:brightness-110 transition-all">Simpan</button>
            </div>
        </div>
    </div>

    <!-- Chat Preview Modal -->
    <div id="chatPreviewModal" class="fixed inset-0 z-[110] hidden items-center justify-center bg-black/70 backdrop-blur-sm">
        <div class="bg-surface-container border border-outline-variant rounded-xl w-full max-w-2xl mx-4 h-[85vh] flex flex-col shadow-2xl overflow-hidden">
            <!-- Preview Header -->
            <div class="flex items-center justify-between px-6 py-4 border-b border-outline-variant bg-surface-container-low">
                <div class="flex items-center gap-3">
                    <span class="w-2.5 h-2.5 rounded-full bg-green-500 animate-pulse"></span>
                    <span class="font-bold text-on-surface text-sm">Live Preview — Chat Simulasi</span>
                    <span class="px-2 py-0.5 bg-secondary/10 text-secondary text-[9px] font-bold rounded uppercase">Admin View</span>
                </div>
                <div class="flex items-center gap-2">
                    <button id="btnClearChat"
                        class="px-3 py-1.5 rounded-lg border border-outline-variant text-xs text-on-surface-variant hover:text-error hover:border-error/50 transition-all flex items-center gap-1.5">
                        <span class="material-symbols-outlined text-sm">delete_sweep</span> Hapus History
                    </button>
                    <button id="btnClosePreview"
                        class="p-2 rounded-lg hover:bg-surface-variant text-on-surface-variant hover:text-on-surface transition-all">
                        <span class="material-symbols-outlined">close</span>
                    </button>
                </div>
            </div>
            <!-- Customer Identity -->
            <div id="previewCustomerInfo" class="px-6 py-3 border-b border-outline-variant bg-surface-container-low/30 flex items-center justify-between">
                <div class="flex items-center gap-3">
                    <div class="relative">
                        <img id="previewAvatar" class="w-10 h-10 rounded-full border-2 border-primary object-cover"
                            src="https://ui-avatars.com/api/?name=MBG&background=0d5c46&color=8ed5b9&bold=true" />
                        <div class="absolute bottom-0 right-0 w-2.5 h-2.5 bg-green-500 rounded-full border-2 border-surface-container"></div>
                    </div>
                    <div>
                        <h3 id="previewName" class="font-bold text-on-surface text-sm leading-tight">MBG</h3>
                        <span id="previewRole" class="text-[11px] text-on-surface-variant">Partner Hidup Gweh</span>
                    </div>
                </div>
                <div class="flex gap-2">
                    <span id="previewStatus" class="px-2 py-0.5 rounded bg-secondary-container/20 text-secondary text-[9px] font-bold uppercase">Status: Sabar</span>
                    <span id="previewTone" class="px-2 py-0.5 rounded bg-primary-container/20 text-primary text-[9px] font-bold uppercase">Tone: Formal</span>
                </div>
            </div>
            <!-- Chat Messages -->
            <div id="chatPreviewContainer" class="flex-1 overflow-y-auto p-6 space-y-4 custom-scrollbar bg-surface/50">
                <div id="previewEmptyState" class="flex flex-col items-center justify-center h-full text-on-surface-variant">
                    <span class="material-symbols-outlined text-5xl mb-3">forum</span>
                    <p class="text-sm font-medium">Belum ada percakapan</p>
                    <p class="text-xs mt-1">Mulai kirim pesan untuk terhubung dengan siswa.</p>
                </div>
            </div>
            <!-- Chat Input -->
            <div class="px-6 py-4 bg-surface-container border-t border-outline-variant">
                <div class="flex gap-3 items-center">
                    <input id="previewChatInput"
                        class="flex-1 bg-surface-dim border border-outline-variant rounded-full px-5 py-3 focus:ring-1 focus:ring-primary focus:border-primary outline-none text-sm placeholder:text-on-surface-variant/50"
                        placeholder="Ketik pesan sebagai admin..." />
                    <button id="btnSendPreview"
                        class="w-11 h-11 bg-primary text-on-primary rounded-full flex items-center justify-center shadow-lg hover:scale-105 active:scale-95 transition-transform">
                        <span class="material-symbols-outlined">send</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Micro-interaction Scripts -->
    <script>
        const AI_CUSTOMERS_KEY = 'lidm_ai_customers';
        const ACTIVE_CUSTOMER_KEY = 'lidm_active_customer';

        const DEFAULT_CUSTOMERS = [
            {
                id: 'c1',
                name: 'MBG',
                role: 'Partner Hidup Gweh',
                status: 'Sabar',
                tone: 'Formal',
                gender: 'Female AI Persona',
                message: "Assalamu'alaikum, selamat siang. Saya MBG. Saya berencana ingin memindahkan tabungan saya ke bank syariah agar lebih tenang. Bisakah Anda jelaskan apa saja pilihan produk tabungan di sini yang bebas riba?",
                avatar: 'https://lh3.googleusercontent.com/aida-public/AB6AXuD_GuxPxYezEE2tH5FP0FV3xG0j4vQkKBXu7ZlaJHr4fW2PXlJ2Yc0PXDFsNMHxxBm9s_h5_D_oO3pK8nQ2zw7GYxIfo2YcTkBrZi9bTHVWmZt95UzUfgHSVLE8f7S4BgX_wH7nCOQKEV9llwqfLeiyvojw0plU9vXm63AnozQc2dDgxfrrBKPNbsO6hSBM-DIFicMMA5BTeTDOnkM2kJ00JEN3FDjvc7L7AmpE9jTK1tL3zSRTjZoh9g',
                active: true
            },
            {
                id: 'c2',
                name: 'Ibu Siti',
                role: 'SME Owner',
                status: 'Teliti',
                tone: 'Professional, Strict',
                gender: 'Female AI Persona',
                message: "Assalamu'alaikum, saya Ibu Siti. Saya pemilik usaha kecil menengah dan ingin mengajukan pembiayaan Murabahah untuk pembelian aset alat medis klinik saya. Apa saja persyaratannya?",
                avatar: 'https://lh3.googleusercontent.com/aida-public/AB6AXuB_NKRgqQd8-8JTY7tZw0p6YekO5Y3ByWt94YcBiB-hbqIpTc1kfo0nCjLfiYCfO5zsMZz7_ApoTGquzzCcrXyGM12LJrOrxwg_4Kv70fjhOiT1XkfjT2JT2e4jZF_21l5fzyX7e8tPZlYVtYIy0E366SIU_FSxei7wxOLbCiIXIshYQ1QFblYB70dPWWwa11qphgMOlKxQhAug5Nqqn2gdxtBkIRNpXPJZ2mcg2pX-zZtVpHi1JFvliIl6x-VfG2AYNjNeNnWNKW1o',
                active: false
            },
            {
                id: 'c3',
                name: 'Bpk. Ahmad',
                role: 'Entrepreneur',
                status: 'Antusias',
                tone: 'Inquisitive, Friendly',
                gender: 'Male AI Persona',
                message: "Assalamu'alaikum, selamat pagi. Saya Ahmad, seorang pengusaha muda. Saya tertarik dengan produk-produk bank syariah. Bisa dijelaskan perbedaan tabungan Wadiah dan Mudharabah?",
                avatar: 'https://lh3.googleusercontent.com/aida-public/AB6AXuC27TVAYsf5kv9Vya8dR64ben5a_aXvHCHH_6_7TdexzP2sD5hjGfsUOoESJIL08m75T8L7MwMXM40Wx4Y29kP03O8Zctn-5cUrmyJT8MVzIWSExTX-8_m0ZmigMDuk9GsRznwlNQ-WFf9uodUQg6EyZ5c7umYnMA_hFoodQPabr4RsByLUe4A4tkMdYWBASl8o17FeSh2RjDoGa2p2v79Rjbm7JZgnppwFJJuQSGQY_tZPlkwhoinJ8oqi9hXsfLsbxyr4YkhUjLPz',
                active: false
            }
        ];

        let customers = [];
        let editingId = null;

        function loadCustomers() {
            const stored = localStorage.getItem(AI_CUSTOMERS_KEY);
            if (stored) {
                try {
                    customers = JSON.parse(stored);
                } catch (e) {
                    customers = JSON.parse(JSON.stringify(DEFAULT_CUSTOMERS));
                }
            } else {
                customers = JSON.parse(JSON.stringify(DEFAULT_CUSTOMERS));
            }
            if (!customers.find(c => c.active)) {
                customers[0].active = true;
            }
            saveCustomers();
        }

        function saveCustomers() {
            localStorage.setItem(AI_CUSTOMERS_KEY, JSON.stringify(customers));
            const active = customers.find(c => c.active);
            if (active) {
                localStorage.setItem(ACTIVE_CUSTOMER_KEY, JSON.stringify(active));
                // Broadcast active customer to student page
                if (typeof chatChannel !== 'undefined' && chatChannel) {
                    chatChannel.postMessage({
                        type: 'customer_change',
                        customer: active
                    });
                }
            }
            renderCustomers();
        }

        function renderCustomers() {
            const container = document.getElementById('customerList');
            const emptyState = document.getElementById('emptyCustomerState');
            if (!container) return;

            if (customers.length === 0) {
                container.innerHTML = '';
                emptyState.classList.remove('hidden');
                return;
            }
            emptyState.classList.add('hidden');
            container.innerHTML = customers.map(c => `
                <div class="flex items-center gap-3 p-3 rounded-lg bg-surface-container-low border ${c.active ? 'border-primary/40 bg-primary/5' : 'border-outline-variant/30'} transition-all group">
                    <div class="w-11 h-11 rounded-full bg-surface-container-high overflow-hidden flex-shrink-0 border-2 ${c.active ? 'border-primary' : 'border-transparent'}">
                        <img class="w-full h-full object-cover" data-alt="${c.gender || ''}" src="${c.avatar}" onerror="this.src='https://ui-avatars.com/api/?name=${encodeURIComponent(c.name)}&background=0d5c46&color=8ed5b9&bold=true'" />
                    </div>
                    <div class="flex-1 min-w-0">
                        <div class="flex items-center gap-2">
                            <p class="text-body-md font-medium text-on-surface truncate">${c.name}</p>
                            ${c.active ? '<span class="px-1.5 py-0.5 bg-primary/20 text-primary text-[9px] font-bold rounded uppercase">Active</span>' : ''}
                        </div>
                        <p class="text-[11px] text-on-surface-variant">${c.role} &middot; ${c.tone}</p>
                    </div>
                    <div class="flex gap-1 opacity-0 group-hover:opacity-100 transition-all">
                        <button onclick="setActiveCustomer('${c.id}')" class="p-1.5 rounded hover:bg-surface-variant text-on-surface-variant hover:text-primary transition-all" title="Set Active">
                            <span class="material-symbols-outlined text-sm">radio_button_${c.active ? 'checked' : 'unchecked'}</span>
                        </button>
                        <button onclick="editCustomer('${c.id}')" class="p-1.5 rounded hover:bg-surface-variant text-on-surface-variant hover:text-secondary transition-all" title="Edit">
                            <span class="material-symbols-outlined text-sm">edit</span>
                        </button>
                        <button onclick="deleteCustomer('${c.id}')" class="p-1.5 rounded hover:bg-surface-variant text-on-surface-variant hover:text-error transition-all" title="Hapus">
                            <span class="material-symbols-outlined text-sm">delete</span>
                        </button>
                    </div>
                </div>
            `).join('');
        }

        function openModal(customer) {
            editingId = customer ? customer.id : null;
            document.getElementById('modalTitle').textContent = customer ? 'Edit AI Customer' : 'Tambah AI Customer';
            document.getElementById('inputName').value = customer ? customer.name : '';
            document.getElementById('inputRole').value = customer ? customer.role : '';
            document.getElementById('inputStatus').value = customer ? customer.status : 'Sabar';
            document.getElementById('inputTone').value = customer ? customer.tone : 'Formal';
            document.getElementById('inputAvatar').value = customer ? customer.avatar : '';
            document.getElementById('inputGender').value = customer ? (customer.gender || '') : '';
            document.getElementById('inputMessage').value = customer ? customer.message : '';
            document.getElementById('customerModal').classList.remove('hidden');
            document.getElementById('customerModal').classList.add('flex');
        }

        function closeModal() {
            document.getElementById('customerModal').classList.add('hidden');
            document.getElementById('customerModal').classList.remove('flex');
            editingId = null;
        }

        function saveCustomerFromForm() {
            const name = document.getElementById('inputName').value.trim();
            const role = document.getElementById('inputRole').value.trim();
            const status = document.getElementById('inputStatus').value;
            const tone = document.getElementById('inputTone').value;
            const avatar = document.getElementById('inputAvatar').value.trim();
            const gender = document.getElementById('inputGender').value.trim();
            const message = document.getElementById('inputMessage').value.trim();

            if (!name) {
                alert('Nama nasabah harus diisi.');
                return;
            }

            if (editingId) {
                const idx = customers.findIndex(c => c.id === editingId);
                if (idx !== -1) {
                    customers[idx] = { ...customers[idx], name, role, status, tone, avatar, gender, message };
                }
            } else {
                customers.push({
                    id: 'c' + Date.now(),
                    name,
                    role,
                    status,
                    tone,
                    avatar: avatar || 'https://ui-avatars.com/api/?name=' + encodeURIComponent(name) + '&background=0d5c46&color=8ed5b9&bold=true',
                    gender,
                    message,
                    active: customers.length === 0
                });
            }
            saveCustomers();
            closeModal();
        }

        function editCustomer(id) {
            const c = customers.find(c => c.id === id);
            if (c) openModal(c);
        }

        function deleteCustomer(id) {
            const c = customers.find(c => c.id === id);
            if (!c) return;
            if (!confirm(`Hapus AI Customer "${c.name}"?`)) return;
            const wasActive = c.active;
            customers = customers.filter(c => c.id !== id);
            if (wasActive && customers.length > 0) {
                customers[0].active = true;
            }
            saveCustomers();
        }

        function setActiveCustomer(id) {
            customers.forEach(c => c.active = c.id === id);
            saveCustomers();
            // Broadcast active customer to student page
            const active = getActiveCustomer();
            if (active && chatChannel) {
                chatChannel.postMessage({
                    type: 'customer_change',
                    customer: active
                });
            }
        }

        // ======== DIALOGUE CRUD ========
        const DIALOGUES_KEY = 'lidm_simulasi_dialogues';
        let dialogues = [];
        let editingDialogueId = null;

        const DEFAULT_DIALOGUES = [
            { id: 'd1', label: 'Customer Intro', text: 'Assalamualaikum, saya ingin mengajukan pembiayaan Murabahah untuk pembelian aset alat medis klinik saya. Apa saja persyaratannya?', color: 'secondary', responses: 2 },
            { id: 'd2', label: 'Pricing Negotiation', text: 'Apakah margin keuntungan yang ditawarkan bisa lebih rendah lagi? Saya melihat bank sebelah memberikan margin lebih kompetitif.', color: 'warning', responses: 1 },
            { id: 'd3', label: 'Product Inquiry', text: 'Selamat siang, saya ingin tahu lebih lanjut tentang produk tabungan syariah. Apa perbedaan tabungan Wadiah dan Mudharabah? Mana yang lebih menguntungkan?', color: 'primary', responses: 2 },
            { id: 'd4', label: 'Document Request', text: 'Baik, saya tertarik untuk membuka rekening. Dokumen apa saja yang perlu saya siapkan? Apakah ada persyaratan khusus untuk nasabah perempuan?', color: 'tertiary', responses: 3 },
            { id: 'd5', label: 'Complaint Handling', text: 'Maaf, saya kecewa. Kemarin saya datang tapi pegawai bank kurang ramah dan tidak bisa menjelaskan produk dengan jelas. Saya harap hari ini pelayanannya lebih baik.', color: 'error', responses: 3 },
            { id: 'd6', label: 'Akad Confirmation', text: 'Sebelum saya tanda tangan akad, saya ingin memastikan: apakah benar dalam Murabahah ini bank sudah memiliki asetnya secara sah? Saya tidak ingin ada masalah di kemudian hari.', color: 'primary', responses: 2 },
            { id: 'd7', label: 'Sharia Compliance', text: 'Saya dengar bank syariah tidak boleh menerapkan denda keterlambatan. Tapi bagaimana jika saya telat bayar? Apakah ada sanksi? Tolong jelaskan sesuai syariah.', color: 'warning', responses: 2 }
        ];

        function loadDialogues() {
            const stored = localStorage.getItem(DIALOGUES_KEY);
            if (stored) {
                try { dialogues = JSON.parse(stored); } catch (e) { dialogues = JSON.parse(JSON.stringify(DEFAULT_DIALOGUES)); }
            } else {
                dialogues = JSON.parse(JSON.stringify(DEFAULT_DIALOGUES));
            }
            renderDialogues();
        }

        function saveDialogues() {
            localStorage.setItem(DIALOGUES_KEY, JSON.stringify(dialogues));
            renderDialogues();
        }

        function renderDialogues() {
            const container = document.getElementById('dialogueList');
            const emptyState = document.getElementById('emptyDialogueState');
            if (!container) return;

            if (dialogues.length === 0) {
                container.innerHTML = '';
                emptyState.classList.remove('hidden');
                return;
            }
            emptyState.classList.add('hidden');

            const colorMap = {
                secondary: { badge: 'bg-secondary/10 text-secondary border-secondary/20', bg: 'bg-secondary-container/20' },
                primary: { badge: 'bg-primary/10 text-primary border-primary/20', bg: 'bg-primary-container/20' },
                warning: { badge: 'bg-warning-amber/10 text-warning-amber border-warning-amber/20', bg: 'bg-warning-amber/10' },
                error: { badge: 'bg-error/10 text-error border-error/20', bg: 'bg-error/10' },
                tertiary: { badge: 'bg-tertiary/10 text-tertiary border-tertiary/20', bg: 'bg-tertiary-container/20' }
            };

            container.innerHTML = dialogues.map((d, idx) => {
                const c = colorMap[d.color] || colorMap.secondary;
                const respLetters = ['A', 'B', 'C', 'D', 'E', 'F'];
                const respBubbles = Array.from({ length: Math.min(d.responses || 2, 6) }, (_, i) => respLetters[i]);
                return `
                    <div class="p-4 rounded-lg bg-surface-container border border-outline-variant hover:border-primary/50 transition-all group dialogue-item" data-id="${d.id}">
                        <div class="flex justify-between mb-2">
                            <div class="flex items-center gap-2">
                                <span class="px-2 py-0.5 ${c.badge} rounded text-[10px] font-bold uppercase">${d.label}</span>
                                <span class="text-on-surface-variant text-xs">ID: ${d.id}</span>
                            </div>
                            <div class="flex gap-1 opacity-0 group-hover:opacity-100 transition-all">
                                <span onclick="editDialogue('${d.id}')" class="material-symbols-outlined text-on-surface-variant hover:text-primary cursor-pointer text-base">edit</span>
                                <span onclick="deleteDialogue('${d.id}')" class="material-symbols-outlined text-on-surface-variant hover:text-error cursor-pointer text-base">delete</span>
                            </div>
                        </div>
                        <p class="text-body-md text-on-surface">"${d.text}"</p>
                        <div class="mt-3 flex items-center justify-between">
                            <div class="flex items-center gap-4">
                                <div class="flex -space-x-2">
                                    ${respBubbles.map((letter, i) => `
                                        <div class="w-6 h-6 rounded-full border border-background ${i % 2 === 0 ? 'bg-primary-container' : 'bg-secondary-container'} flex items-center justify-center text-[10px] ${i % 2 === 0 ? 'text-primary' : 'text-secondary'}">${letter}</div>
                                    `).join('')}
                                </div>
                                <span class="text-[11px] text-on-surface-variant italic">${d.responses || 2} Cabang Respon</span>
                            </div>
                            <button onclick="sendDialogue('${d.id}')" class="px-3 py-1.5 rounded-lg bg-primary/10 text-primary hover:bg-primary/20 transition-all flex items-center gap-1.5 text-xs font-bold" title="Kirim ke siswa">
                                <span class="material-symbols-outlined text-sm">send</span> Kirim
                            </button>
                        </div>
                    </div>
                `;
            }).join('');
        }

        function sendDialogue(id) {
            const d = dialogues.find(d => d.id === id);
            if (!d) return;

            // Broadcast to student as AI customer message
            chatChannel.postMessage({
                type: 'dialogue',
                text: d.text,
                label: d.label
            });

            // Also add to chat history as admin-sent AI message
            const msgTime = new Date().toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' });
            chatMessages.push({
                id: 'msg_' + Date.now(),
                from: 'admin',
                text: d.text,
                time: msgTime,
                date: new Date().toISOString(),
                isDialogue: true
            });
            saveChatHistory();
            renderChatMessages();

            // Show toast feedback
            showToast('Dialog terkirim ke siswa: ' + d.label);
        }

        function openDialogueModal(dialogue) {
            editingDialogueId = dialogue ? dialogue.id : null;
            document.getElementById('dialogueModalTitle').textContent = dialogue ? 'Edit Dialog' : 'Tambah Dialog Baru';
            document.getElementById('inputDialogueLabel').value = dialogue ? dialogue.label : '';
            document.getElementById('inputDialogueText').value = dialogue ? dialogue.text : '';
            document.getElementById('inputDialogueColor').value = dialogue ? (dialogue.color || 'secondary') : 'secondary';
            document.getElementById('inputDialogueResponses').value = dialogue ? (dialogue.responses || 2) : 2;
            document.getElementById('dialogueModal').classList.remove('hidden');
            document.getElementById('dialogueModal').classList.add('flex');
        }

        function closeDialogueModal() {
            document.getElementById('dialogueModal').classList.add('hidden');
            document.getElementById('dialogueModal').classList.remove('flex');
            editingDialogueId = null;
        }

        function saveDialogueFromForm() {
            const label = document.getElementById('inputDialogueLabel').value.trim();
            const text = document.getElementById('inputDialogueText').value.trim();
            const color = document.getElementById('inputDialogueColor').value;
            const responses = parseInt(document.getElementById('inputDialogueResponses').value) || 2;

            if (!label || !text) {
                alert('Label dan pesan dialog harus diisi.');
                return;
            }

            if (editingDialogueId) {
                const idx = dialogues.findIndex(d => d.id === editingDialogueId);
                if (idx !== -1) {
                    dialogues[idx] = { ...dialogues[idx], label, text, color, responses };
                }
            } else {
                dialogues.push({
                    id: 'd' + Date.now(),
                    label,
                    text,
                    color,
                    responses
                });
            }
            saveDialogues();
            closeDialogueModal();
        }

        function editDialogue(id) {
            const d = dialogues.find(d => d.id === id);
            if (d) openDialogueModal(d);
        }

        function deleteDialogue(id) {
            const d = dialogues.find(d => d.id === id);
            if (!d) return;
            if (!confirm('Hapus dialog "' + d.label + '"?')) return;
            dialogues = dialogues.filter(d => d.id !== id);
            saveDialogues();
        }

        function showToast(msg) {
            var t = document.getElementById('saveToast');
            if (!t) {
                t = document.createElement('div');
                t.id = 'saveToast';
                t.className = 'fixed bottom-8 right-8 bg-surface-container-highest border border-primary p-4 rounded-xl shadow-2xl translate-y-24 opacity-0 transition-all duration-300 flex items-center gap-3 z-[120]';
                t.innerHTML = '<div class="bg-primary/20 p-2 rounded-lg text-primary"><span class="material-symbols-outlined">check</span></div><span class="text-sm font-bold text-ivory-text" id="toastMsg"></span>';
                document.body.appendChild(t);
            }
            document.getElementById('toastMsg').textContent = msg;
            t.classList.remove('translate-y-24', 'opacity-0');
            t.classList.add('translate-y-0', 'opacity-100');
            setTimeout(function() {
                t.classList.add('translate-y-24', 'opacity-0');
                t.classList.remove('translate-y-0', 'opacity-100');
            }, 2000);
        }

        // ======== CHAT PREVIEW (Cross-Tab) ========
        const CHAT_HISTORY_KEY = 'lidm_chat_history';
        const chatChannel = new BroadcastChannel('simulasi_chat');
        let chatMessages = [];

        function loadChatHistory() {
            const stored = localStorage.getItem(CHAT_HISTORY_KEY);
            if (stored) {
                try { chatMessages = JSON.parse(stored); } catch (e) { chatMessages = []; }
            } else {
                chatMessages = [];
            }
        }

        function saveChatHistory() {
            localStorage.setItem(CHAT_HISTORY_KEY, JSON.stringify(chatMessages));
        }

        function getActiveCustomer() {
            if (customers.length === 0) return null;
            return customers.find(c => c.active) || customers[0];
        }

        function updatePreviewCustomerInfo() {
            const c = getActiveCustomer();
            if (!c) return;
            document.getElementById('previewAvatar').src = c.avatar || 'https://ui-avatars.com/api/?name=' + encodeURIComponent(c.name) + '&background=0d5c46&color=8ed5b9&bold=true';
            document.getElementById('previewName').textContent = c.name;
            document.getElementById('previewRole').textContent = c.role || '';
            document.getElementById('previewStatus').textContent = 'Status: ' + (c.status || 'Sabar');
            document.getElementById('previewTone').textContent = 'Tone: ' + (c.tone || 'Formal');
        }

        function addChatMessage(text, from) {
            const msg = {
                id: 'msg_' + Date.now(),
                from: from, // 'admin' | 'student'
                text: text,
                time: new Date().toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' }),
                date: new Date().toISOString()
            };
            chatMessages.push(msg);
            saveChatHistory();
            renderChatMessages();
        }

        function renderChatMessages() {
            const container = document.getElementById('chatPreviewContainer');
            const emptyState = document.getElementById('previewEmptyState');
            if (!container) return;

            if (chatMessages.length === 0) {
                emptyState.style.display = 'flex';
                container.querySelectorAll('.chat-msg').forEach(el => el.remove());
                return;
            }
            emptyState.style.display = 'none';

            // Remove old messages (keep empty state)
            container.querySelectorAll('.chat-msg').forEach(el => el.remove());

            const fragment = document.createDocumentFragment();
            chatMessages.forEach(msg => {
                const isAdmin = msg.from === 'admin';
                const div = document.createElement('div');
                div.className = 'chat-msg flex gap-3 ' + (isAdmin ? 'justify-end' : '');
                div.innerHTML = `
                    <div class="flex gap-3 max-w-[80%] ${isAdmin ? 'flex-row-reverse text-right' : ''}">
                        <div class="w-8 h-8 rounded-full ${isAdmin ? 'bg-secondary' : 'bg-primary'} flex-shrink-0 flex items-center justify-center">
                            <span class="material-symbols-outlined text-on-primary text-sm">${isAdmin ? 'shield_person' : 'person'}</span>
                        </div>
                        <div class="p-3.5 rounded-2xl ${isAdmin ? 'chat-bubble-user bg-secondary-container/20 text-secondary' : 'chat-bubble-ai bg-surface-container-high text-ivory-text'} border border-outline-variant/30 shadow-sm">
                            <p class="text-sm leading-relaxed">${msg.text}</p>
                            <span class="text-[10px] text-on-surface-variant mt-1.5 block">${msg.time} ${isAdmin ? '· Admin' : '· Siswa'}</span>
                        </div>
                    </div>
                `;
                fragment.appendChild(div);
            });
            container.appendChild(fragment);
            container.scrollTop = container.scrollHeight;
        }

        function clearChatHistory() {
            if (chatMessages.length === 0) return;
            if (!confirm('Hapus seluruh history percakapan?')) return;
            chatMessages = [];
            saveChatHistory();
            renderChatMessages();
            // Broadcast clear event to student
            chatChannel.postMessage({ type: 'clear' });
        }

        function openPreview() {
            loadChatHistory();
            updatePreviewCustomerInfo();
            renderChatMessages();
            document.getElementById('chatPreviewModal').classList.remove('hidden');
            document.getElementById('chatPreviewModal').classList.add('flex');
        }

        function closePreview() {
            document.getElementById('chatPreviewModal').classList.add('hidden');
            document.getElementById('chatPreviewModal').classList.remove('flex');
        }

        function sendAdminMessage() {
            const input = document.getElementById('previewChatInput');
            const text = input.value.trim();
            if (!text) return;
            input.value = '';

            // Add admin message locally
            addChatMessage(text, 'admin');

            // Broadcast to student tab
            chatChannel.postMessage({
                type: 'message',
                from: 'admin',
                text: text,
                time: new Date().toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' })
            });
        }

        // ======== COMPLIANCE DETECTION ========
        function wordBoundary(w) { return new RegExp('\\b' + w + '\\b', 'i'); }

        const COMPLIANCE_RULES = [
            { id: 'riba', label: 'Riba Prevention', icon: 'gavel', desc: 'Tidak menawarkan/menyebut bunga (riba) sebagai imbalan', check: function(t) {
                var lower = t.toLowerCase();
                var violasi = wordBoundary('bunga').test(lower) && !wordBoundary('tanpa bunga').test(lower) && !wordBoundary('bebas bunga').test(lower) && !/bukan bunga/i.test(lower);
                var positif = wordBoundary('riba').test(lower) || wordBoundary('bagi hasil').test(lower) || wordBoundary('nisbah').test(lower) || wordBoundary('syariah').test(lower);
                if (violasi && !positif) return { status: 'fail', msg: 'Menyebut bunga sebagai imbalan' };
                if (wordBoundary('bunga').test(lower) && (wordBoundary('tidak ada bunga').test(lower) || wordBoundary('bebas bunga').test(lower) || /syariah tanpa bunga/i.test(lower))) return { status: 'pass', msg: 'Menjelaskan bahwa syariah bebas bunga' };
                if (wordBoundary('riba').test(lower)) return { status: 'pass', msg: 'Menyadari riba adalah haram' };
                return { status: 'pass', msg: 'Tidak terdeteksi pelanggaran riba' };
            }},
            { id: 'asset', label: 'Asset Ownership', icon: 'account_balance_wallet', desc: 'Verifikasi bank memiliki aset sebelum akad jual-beli', check: function(t) {
                var lower = t.toLowerCase();
                var hasMurabahah = wordBoundary('murabahah').test(lower) || /jual.?beli/i.test(lower) || wordBoundary('pembiayaan').test(lower);
                if (!hasMurabahah) return { status: 'skip', msg: 'Tidak relevan (non-jual-beli)' };
                var mentionsOwnership = /(milik|punya|kuasai|beli|dapatkan|perolehan|harga perolehan|aset)/i.test(lower) && /(bank|kami)/i.test(lower);
                return mentionsOwnership ? { status: 'pass', msg: 'Menyebut kepemilikan bank atas aset' } : { status: 'warn', msg: 'Tidak menyebut kepemilikan bank' };
            }},
            { id: 'disclosure', label: 'Contract Disclosure', icon: 'description', desc: 'Menyebut harga/margin secara transparan', check: function(t) {
                var lower = t.toLowerCase();
                var mentionsPrice = wordBoundary('harga').test(lower) || wordBoundary('margin').test(lower) || wordBoundary('biaya').test(lower) || wordBoundary('keuntungan').test(lower) || wordBoundary('nisbah').test(lower) || wordBoundary('bagi hasil').test(lower);
                return mentionsPrice ? { status: 'pass', msg: 'Transparansi harga disebutkan' } : { status: 'info', msg: 'Transparansi harga tidak disebut' };
            }},
            { id: 'greeting', label: 'Syariah Greeting', icon: 'waving_hand', desc: 'Menyapa dengan salam Islam', check: function(t) {
                var lower = t.toLowerCase();
                var hasGreeting = /\bassalam|\bassalamu|\bwaalaikumsalam|\bassalamualaikum/i.test(lower);
                return hasGreeting ? { status: 'pass', msg: 'Menggunakan salam Islam' } : { status: 'info', msg: 'Tidak menggunakan salam Islam' };
            }},
            { id: 'akad', label: 'Akad Clarity', icon: 'gavel', desc: 'Menyebut jenis akad dengan jelas', check: function(t) {
                var lower = t.toLowerCase();
                var akads = ['murabahah','mudharabah','musyarakah','wadiah','ijarah','qardh'];
                var found = akads.filter(function(a) { return wordBoundary(a).test(lower); });
                return found.length > 0 ? { status: 'pass', msg: 'Menyebut akad: ' + found.join(', ') } : { status: 'info', msg: 'Tidak menyebut jenis akad spesifik' };
            }},
            { id: 'gharar', label: 'Gharar Avoidance', icon: 'help_outline', desc: 'Menghindari ketidakpastian dalam penjelasan', check: function(t) {
                var lower = t.toLowerCase();
                var ghararWords = wordBoundary('mungkin').test(lower) || /kira.?kira/i.test(lower) || /kurang lebih/i.test(lower) || wordBoundary('sekitar').test(lower) || wordBoundary('ntar').test(lower) || wordBoundary('nanti').test(lower);
                if (ghararWords) return { status: 'warn', msg: 'Menggunakan kata bermakna ambigu' };
                return { status: 'pass', msg: 'Penjelasan jelas dan pasti' };
            }}
        ];

        function runComplianceCheck(text) {
            var results = [];
            COMPLIANCE_RULES.forEach(function(rule) {
                results.push({ rule: rule, result: rule.check(text) });
            });
            return results;
        }

        function renderCompliance(results, text) {
            var container = document.getElementById('complianceRules');
            var badge = document.getElementById('complianceStatusBadge');
            var msgSection = document.getElementById('complianceLastMsg');
            var msgText = document.getElementById('complianceMsgText');
            if (!container) return;

            var total = results.length;
            var passed = results.filter(function(r) { return r.result.status === 'pass'; }).length;
            var failed = results.filter(function(r) { return r.result.status === 'fail'; }).length;
            var warned = results.filter(function(r) { return r.result.status === 'warn'; }).length;

            // Update badge
            if (failed > 0) {
                badge.className = 'px-2 py-0.5 bg-error/20 text-error text-[9px] font-bold rounded uppercase';
                badge.textContent = failed + ' Pelanggaran';
            } else if (warned > 0) {
                badge.className = 'px-2 py-0.5 bg-warning-amber/20 text-warning-amber text-[9px] font-bold rounded uppercase';
                badge.textContent = warned + ' Peringatan';
            } else if (passed === total) {
                badge.className = 'px-2 py-0.5 bg-green-500/20 text-primary text-[9px] font-bold rounded uppercase';
                badge.textContent = 'Compliant ✓';
            } else {
                badge.className = 'px-2 py-0.5 bg-surface-variant text-on-surface-variant text-[9px] font-bold rounded uppercase';
                badge.textContent = 'Terverifikasi';
            }

            // Show last message
            if (text) {
                msgSection.classList.remove('hidden');
                msgText.textContent = '"' + text + '"';
            }

            // Render rules
            var bgMap = { pass: 'bg-primary/10 border-primary/20', fail: 'bg-error/10 border-error/20', warn: 'bg-warning-amber/10 border-warning-amber/20', info: 'bg-surface-container border-outline-variant/30', skip: 'bg-surface-container border-outline-variant/20 opacity-50' };
            var iconMap = { pass: 'check_circle', fail: 'gavel', warn: 'warning', info: 'info', skip: 'remove_circle' };
            var colorMap = { pass: 'text-primary', fail: 'text-error', warn: 'text-warning-amber', info: 'text-on-surface-variant', skip: 'text-on-surface-variant' };
            var labelMap = { pass: 'Lulus', fail: 'Gagal', warn: 'Peringatan', info: 'Info', skip: 'Skip' };

            container.innerHTML = results.map(function(r) {
                var s = r.result.status;
                return '<div class="flex items-center gap-2 p-2 rounded-lg border ' + bgMap[s] + ' transition-all">' +
                    '<span class="material-symbols-outlined text-sm ' + colorMap[s] + '">' + iconMap[s] + '</span>' +
                    '<div class="flex-1 min-w-0">' +
                        '<div class="flex items-center gap-2">' +
                            '<p class="text-[11px] font-bold text-on-surface truncate">' + r.rule.label + '</p>' +
                            '<span class="px-1.5 py-0.5 rounded text-[8px] font-bold uppercase ' + (s === 'fail' ? 'bg-error/20 text-error' : s === 'warn' ? 'bg-warning-amber/20 text-warning-amber' : s === 'pass' ? 'bg-primary/20 text-primary' : 'bg-surface-variant text-on-surface-variant') + '">' + labelMap[s] + '</span>' +
                        '</div>' +
                        '<p class="text-[9px] text-on-surface-variant mt-0.5">' + r.result.msg + '</p>' +
                    '</div>' +
                '</div>';
            }).join('');
        }

        // Listen for messages from student tab
        chatChannel.addEventListener('message', (e) => {
            const data = e.data;
            if (data.type === 'message' && data.from === 'student') {
                loadChatHistory();
                addChatMessage(data.text, 'student');
                // Run compliance check on student message
                var results = runComplianceCheck(data.text);
                renderCompliance(results, data.text);
            }
            if (data.type === 'clear') {
                chatMessages = [];
                saveChatHistory();
                renderChatMessages();
            }
        });

        document.addEventListener('DOMContentLoaded', () => {
            loadCustomers();

            document.getElementById('btnAddCustomer').addEventListener('click', () => openModal(null));
            document.getElementById('btnCloseModal').addEventListener('click', closeModal);
            document.getElementById('btnCancelModal').addEventListener('click', closeModal);
            document.getElementById('btnSaveCustomer').addEventListener('click', saveCustomerFromForm);
            document.getElementById('customerModal').addEventListener('click', (e) => {
                if (e.target === e.currentTarget) closeModal();
            });

            // Tab switching
            var tabBtns = document.querySelectorAll('.tab-btn');
            var tabContents = document.querySelectorAll('.tab-content');
            tabBtns.forEach(function(btn) {
                btn.addEventListener('click', function() {
                    var tab = this.getAttribute('data-tab');
                    tabBtns.forEach(function(b) {
                        b.className = 'tab-btn px-6 py-3 text-on-surface-variant hover:text-on-surface font-label-caps text-label-caps transition-all';
                    });
                    this.className = 'tab-btn px-6 py-3 text-primary border-b-2 border-primary font-label-caps text-label-caps transition-all';
                    tabContents.forEach(function(c) { c.classList.add('hidden'); });
                    var target = document.getElementById('tab-' + tab);
                    if (target) target.classList.remove('hidden');
                });
            });

            // Dialogue buttons
            loadDialogues();
            document.getElementById('btnAddDialogue').addEventListener('click', () => openDialogueModal(null));
            document.getElementById('btnCloseDialogueModal').addEventListener('click', closeDialogueModal);
            document.getElementById('btnCancelDialogueModal').addEventListener('click', closeDialogueModal);
            document.getElementById('btnSaveDialogue').addEventListener('click', saveDialogueFromForm);
            document.getElementById('dialogueModal').addEventListener('click', (e) => {
                if (e.target === e.currentTarget) closeDialogueModal();
            });

            // Initialize compliance panel
            renderCompliance(COMPLIANCE_RULES.map(function(r) { return { rule: r, result: { status: 'info', msg: 'Menunggu pesan dari siswa...' } }; }), null);

            // Chat Preview buttons
            document.getElementById('btnPreviewLive').addEventListener('click', openPreview);
            document.getElementById('btnClosePreview').addEventListener('click', closePreview);
            document.getElementById('btnSendPreview').addEventListener('click', sendAdminMessage);
            document.getElementById('btnClearChat').addEventListener('click', clearChatHistory);
            document.getElementById('previewChatInput').addEventListener('keypress', (e) => {
                if (e.key === 'Enter') sendAdminMessage();
            });
            document.getElementById('chatPreviewModal').addEventListener('click', (e) => {
                if (e.target === e.currentTarget) closePreview();
            });

            const treeNodes = document.querySelectorAll('.node-branch div');
            treeNodes.forEach(node => {
                node.addEventListener('click', () => {
                    treeNodes.forEach(n => n.classList.remove('bg-primary/10', 'border-primary/40'));
                    node.classList.add('bg-primary/10', 'border-primary/40');
                });
            });
        });
    </script>
    <!-- Mobile Bottom Nav -->
    <nav class="md:hidden fixed bottom-0 left-0 w-full bg-charcoal-surface border-t border-outline-variant flex justify-around items-center h-16 px-2 z-50">
        <a class="flex flex-col items-center gap-1 text-on-surface-variant" href="../Dashboard_Siswa/Dashboard_admin.php">
            <span class="material-symbols-outlined text-xl">dashboard</span>
            <span class="text-[10px]">Dashboard</span>
        </a>
        <a class="flex flex-col items-center gap-1 text-primary" href="#">
            <span class="material-symbols-outlined text-xl" style="font-variation-settings:'FILL' 1;">psychology</span>
            <span class="text-[10px] font-bold">Simulasi</span>
        </a>
        <a class="flex flex-col items-center gap-1 text-on-surface-variant" href="../Pusat_Kompetensi/Pusat_Kompetensi_Admin.php">
            <span class="material-symbols-outlined text-xl">military_tech</span>
            <span class="text-[10px]">Kompetensi</span>
        </a>
        <a class="flex flex-col items-center gap-1 text-on-surface-variant" href="../Riwayat/Riwayat_Admin.php">
            <span class="material-symbols-outlined text-xl">history</span>
            <span class="text-[10px]">Riwayat</span>
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