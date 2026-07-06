<!DOCTYPE html>

<html class="dark" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Sharia Lab Admin - Pusat Kompetensi Management</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&amp;family=Inter:wght@400;500;600&amp;family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }

        .glass-effect {
            background: rgba(34, 34, 34, 0.7);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.05);
        }

        .competency-node-hover:hover {
            box-shadow: 0 0 20px rgba(142, 213, 185, 0.15);
            border-color: rgba(142, 213, 185, 0.3);
        }

        ::-webkit-scrollbar {
            width: 6px;
        }

        ::-webkit-scrollbar-track {
            background: #131313;
        }

        ::-webkit-scrollbar-thumb {
            background: #353534;
            border-radius: 10px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #89938d;
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

<body class="bg-background text-on-background font-body-md selection:bg-primary/30 selection:text-primary">
    <!-- Sidebar Navigation -->
    <aside id="adminSidebar"
        class="hidden md:flex w-[280px] h-screen fixed left-0 top-0 bg-charcoal-surface dark:bg-surface-container-lowest border-r border-outline-variant flex-col py-unit-lg z-50 transition-transform duration-300">
        <div class="px-unit-lg mb-unit-xl">
            <h1 class="font-headline-md text-headline-md text-sharia-green-deep dark:text-primary font-bold">Sharia Bank
                Lab</h1>
            <p class="font-label-caps text-label-caps text-on-surface-variant opacity-70">Management Portal</p>
        </div>
        <nav class="flex-1 space-y-unit-xs">
            <a class="flex items-center gap-unit-md px-unit-lg py-unit-sm text-on-surface-variant hover:text-on-surface hover:bg-surface-variant/50 transition-colors duration-200"
                href="../Dashboard_Siswa/Dashboard_admin.php">
                <span class="material-symbols-outlined">dashboard</span>
                <span>Dashboard</span>
            </a>
            <a class="flex items-center gap-unit-md px-unit-lg py-unit-sm text-on-surface-variant hover:text-on-surface hover:bg-surface-variant/50 transition-colors duration-200"
                href="../Simulasi/Simulasi_Admin.php">
                <span class="material-symbols-outlined">psychology</span>
                <span>Simulasi</span>
            </a>
            <a class="flex items-center gap-unit-md px-unit-lg py-unit-sm bg-primary-container/10 text-primary border-l-4 border-secondary font-bold"
                href="#">
                <span class="material-symbols-outlined">military_tech</span>
                <span>Kompetensi</span>
            </a>
            <a class="flex items-center gap-unit-md px-unit-lg py-unit-sm text-on-surface-variant hover:text-on-surface hover:bg-surface-variant/50 transition-colors duration-200"
                href="../Riwayat/Riwayat_Admin.php">
                <span class="material-symbols-outlined">history</span>
                <span>Riwayat</span>
            </a>
            <a class="flex items-center gap-unit-md px-unit-lg py-unit-sm text-on-surface-variant hover:text-on-surface hover:bg-surface-variant/50 transition-colors duration-200"
                href="../Setting/Setting_Admin.php">
                <span class="material-symbols-outlined">settings</span>
                <span>Setelan</span>
            </a>
        </nav>
        <div class="mt-auto pt-unit-lg border-t border-outline-variant/30"></div>
    </aside>
    <!-- Top Navigation Bar -->
    <!-- Mobile Overlay -->
    <div id="mobileOverlay" class="fixed inset-0 bg-black/60 z-40 hidden md:hidden" onclick="toggleAdminSidebar()"></div>
    <header
        class="h-16 fixed top-0 right-0 w-full md:w-[calc(100%-280px)] bg-surface-container dark:bg-surface-container-low border-b border-outline-variant shadow-sm flex justify-between items-center px-4 md:px-margin-desktop z-40">
        <div class="flex items-center gap-unit-md">
            <button class="md:hidden material-symbols-outlined text-on-surface-variant hover:text-primary transition-colors" onclick="toggleAdminSidebar()">menu</button>
            <div class="relative hidden md:block w-48 lg:w-72">
                <span
                    class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-on-surface-variant text-[20px]">search</span>
                <input
                    class="w-full bg-surface-container-high border-none rounded-lg pl-10 pr-4 py-2 text-sm focus:ring-1 focus:ring-primary placeholder:text-on-surface-variant/50"
                    placeholder="Search competency nodes..." type="text" />
            </div>
        </div>
        <div class="flex items-center gap-unit-lg">
            <div class="flex items-center gap-unit-md mr-unit-lg">
                <button class="relative text-on-surface-variant hover:text-primary transition-all">
                    <span class="material-symbols-outlined">notifications</span>
                    <span class="absolute top-0 right-0 w-2 h-2 bg-secondary rounded-full"></span>
                </button>
                <button class="text-on-surface-variant hover:text-primary transition-all flex items-center gap-1">
                    <span class="material-symbols-outlined">help_outline</span>
                    <span class="text-label-caps font-label-caps hidden xl:inline">Admin Help</span>
                </button>
            </div>
            <div class="flex items-center gap-unit-sm border-l border-outline-variant pl-unit-lg">
                <div class="text-right hidden sm:block">
                    <p class="text-sm font-bold text-on-surface">Dr. Ahmad Faisal</p>
                    <p class="text-xs text-on-surface-variant">System Admin</p>
                </div>
                <img alt="Dr. Ahmad Faisal"
                    class="w-10 h-10 rounded-full border-2 border-primary-container object-cover"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuAXTEzxWNWE4bxuq4LWpqc9i-RLsi98v7M2zouCS0Bykn3s9JUYDW10S-8t6rTsVsAKqIuAheH3hN092B055nFzYh4Yt98Ue7lcZ-6EGghw952cd4iBKk8ZTWOlV1ctoqQsJpongujhcx6X_xRt_bCDutOQwW7XzeL1EuDuCElzI3k3oguGESrMHDRAIZtsxAgTJI5YQHpOfSklRGp8DCGfY48qAJe4poAhkSweX39wqpqBy_qSv9OaCQ2mlVCgwLic2IHE4Z6rMimV" />
            </div>
        </div>
    </header>
    <!-- Main Content Canvas -->
    <main class="md:ml-[280px] pt-16 min-h-screen bg-background">
        <div class="px-4 md:px-margin-desktop py-margin-desktop space-y-gutter pb-20 md:pb-margin-desktop">
            <!-- Page Header -->
            <div class="flex justify-between items-end">
                <div>
                    <h2 class="font-headline-lg text-[28px] md:text-headline-lg text-on-surface">Manajemen Pusat Kompetensi</h2>
                    <p class="text-on-surface-variant max-w-2xl mt-unit-xs">Kelola sertifikat, profil kemampuan, pohon kompetensi & level progresi siswa.</p>
                </div>
            </div>
            <!-- Admin Tabs -->
            <div class="flex flex-wrap border-b border-outline-variant mb-6 overflow-x-auto">
                <button data-tab="certs" class="tab-btn px-3 md:px-6 py-3 text-primary border-b-2 border-primary font-label-caps text-label-caps transition-all whitespace-nowrap">Sertifikat</button>
                <button data-tab="hero" class="tab-btn px-3 md:px-6 py-3 text-on-surface-variant hover:text-on-surface font-label-caps text-label-caps transition-all whitespace-nowrap">Profil Kemampuan</button>
                <button data-tab="skills" class="tab-btn px-3 md:px-6 py-3 text-on-surface-variant hover:text-on-surface font-label-caps text-label-caps transition-all whitespace-nowrap">Pohon Kompetensi</button>
                <button data-tab="levels" class="tab-btn px-3 md:px-6 py-3 text-on-surface-variant hover:text-on-surface font-label-caps text-label-caps transition-all whitespace-nowrap">Level Progresi</button>
            </div>

            <!-- ===== TAB: SERTIFIKAT ===== -->
            <div id="tab-certs" class="tab-content">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="font-bold text-on-surface">Daftar Sertifikat & Badge</h3>
                    <button id="btnAddCertificate" class="flex items-center gap-2 px-4 py-2 bg-primary text-on-primary text-xs font-bold rounded-lg hover:brightness-110 transition-all">
                        <span class="material-symbols-outlined text-sm">add</span> Tambah Sertifikat
                    </button>
                </div>
                <div class="bg-surface-container border border-outline-variant/50 rounded-xl overflow-hidden">
                    <div class="p-unit-lg border-b border-outline-variant/30 flex justify-between items-center">
                        <span id="certCount" class="text-xs text-on-surface-variant">0 sertifikat</span>
                    </div>
                    <div id="certificateList" class="divide-y divide-outline-variant/10"></div>
                    <div id="emptyCertState" class="hidden text-center py-12 text-on-surface-variant">
                        <span class="material-symbols-outlined text-5xl mb-3">verified</span>
                        <p class="text-sm">Belum ada sertifikat. Klik "Tambah Sertifikat" untuk membuat.</p>
                    </div>
                </div>
                <div class="grid grid-cols-3 gap-4 mt-4">
                    <div class="bg-surface-container-low border border-outline-variant/30 rounded-xl p-4"><p class="text-xs text-on-surface-variant">Total</p><p id="statTotal" class="text-2xl font-bold text-primary mt-1">0</p></div>
                    <div class="bg-surface-container-low border border-outline-variant/30 rounded-xl p-4"><p class="text-xs text-on-surface-variant">Visible</p><p id="statVisible" class="text-2xl font-bold text-secondary mt-1">0</p></div>
                    <div class="bg-surface-container-low border border-outline-variant/30 rounded-xl p-4"><p class="text-xs text-on-surface-variant">Badge</p><p id="statBadge" class="text-2xl font-bold text-tertiary mt-1">0</p></div>
                </div>
            </div>

            <!-- ===== TAB: PROFIL KEMAMPUAN ===== -->
            <div id="tab-hero" class="tab-content hidden">
                <div class="bg-surface-container border border-outline-variant/50 rounded-xl p-6">
                    <h3 class="font-bold text-on-surface mb-4">Profil Kemampuan (Hero Stats)</h3>
                    <div class="space-y-4 max-w-lg">
                        <div class="space-y-1">
                            <label class="text-xs font-bold text-on-surface-variant uppercase">Compliance Index</label>
                            <input id="heroCompliance" type="number" class="w-full bg-surface-container-high border border-outline-variant rounded-lg p-3 text-sm" min="0" max="100" value="88" />
                        </div>
                    </div>
                    <div id="heroSkillList" class="space-y-3 mt-4">
                        <!-- rendered by JS -->
                    </div>
                    <div class="flex gap-3 mt-4">
                        <button id="btnSaveHero" class="px-6 py-2 bg-primary text-on-primary text-sm font-bold rounded-lg hover:brightness-110">Simpan Profil</button>
                        <button id="btnAddHeroSkill" class="px-6 py-2 border border-outline-variant text-on-surface-variant text-sm font-bold rounded-lg hover:bg-surface-variant">Tambah Skill</button>
                    </div>
                </div>
            </div>

            <!-- ===== TAB: POHON KOMPETENSI ===== -->
            <div id="tab-skills" class="tab-content hidden">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="font-bold text-on-surface">Pohon Kompetensi Syariah</h3>
                    <button id="btnAddSkill" class="flex items-center gap-2 px-4 py-2 bg-primary text-on-primary text-xs font-bold rounded-lg hover:brightness-110 transition-all">
                        <span class="material-symbols-outlined text-sm">add</span> Tambah Skill
                    </button>
                </div>
                <div id="skillTreeList" class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <!-- rendered by JS -->
                </div>
                <div id="emptySkillState" class="hidden text-center py-12 text-on-surface-variant">
                    <span class="material-symbols-outlined text-5xl mb-3">psychology</span>
                    <p class="text-sm">Belum ada skill. Klik "Tambah Skill" untuk membuat.</p>
                </div>
            </div>

            <!-- ===== TAB: LEVEL PROGRESI ===== -->
            <div id="tab-levels" class="tab-content hidden">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="font-bold text-on-surface">Level Progresi Kompetensi</h3>
                    <button id="btnAddLevel" class="flex items-center gap-2 px-4 py-2 bg-primary text-on-primary text-xs font-bold rounded-lg hover:brightness-110 transition-all">
                        <span class="material-symbols-outlined text-sm">add</span> Tambah Level
                    </button>
                </div>
                <div id="levelList" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                    <!-- rendered by JS -->
                </div>
                <div id="emptyLevelState" class="hidden text-center py-12 text-on-surface-variant">
                    <span class="material-symbols-outlined text-5xl mb-3">stadia_controller</span>
                    <p class="text-sm">Belum ada level. Klik "Tambah Level" untuk membuat.</p>
                </div>
            </div>
        </div>
    </main>

    <!-- ===== MODAL: Certificate ===== -->
    <div id="certModal" class="fixed inset-0 z-[110] hidden items-center justify-center bg-black/70 backdrop-blur-sm">
        <div class="bg-surface-container border border-outline-variant/50 rounded-xl w-full max-w-lg mx-4 max-h-[90vh] overflow-y-auto shadow-2xl">
            <div class="p-unit-lg border-b border-outline-variant/30 flex justify-between items-center">
                <h3 id="modalCertTitle" class="font-bold text-on-surface">Tambah Sertifikat</h3>
                <button id="btnCloseCertModal" class="text-on-surface-variant hover:text-on-surface"><span class="material-symbols-outlined">close</span></button>
            </div>
            <div class="p-unit-lg space-y-4">
                <div class="space-y-1.5">
                    <label class="text-xs font-bold text-on-surface-variant uppercase tracking-wider">Judul</label>
                    <input id="inputCertTitle" class="w-full bg-surface-container-high border border-outline-variant rounded-lg p-3 text-sm" placeholder="Sertifikasi Akad Murabahah" />
                </div>
                <div class="space-y-1.5">
                    <label class="text-xs font-bold text-on-surface-variant uppercase tracking-wider">Deskripsi</label>
                    <textarea id="inputCertDesc" class="w-full bg-surface-container-high border border-outline-variant rounded-lg p-3 text-sm h-20 resize-none" placeholder="Lulus simulasi pembiayaan motor & rumah dengan skor 95%."></textarea>
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div class="space-y-1.5"><label class="text-xs font-bold text-on-surface-variant uppercase">Icon</label>
                        <select id="inputCertIcon" class="w-full bg-surface-container-high border border-outline-variant rounded-lg p-3 text-sm">
                            <option value="verified">verified</option><option value="security">security</option><option value="stars">stars</option>
                            <option value="military_tech">military_tech</option><option value="handshake">handshake</option><option value="award_star">award_star</option>
                            <option value="check_circle">check_circle</option><option value="school">school</option>
                        </select>
                    </div>
                    <div class="space-y-1.5"><label class="text-xs font-bold text-on-surface-variant uppercase">Warna</label>
                        <select id="inputCertColor" class="w-full bg-surface-container-high border border-outline-variant rounded-lg p-3 text-sm">
                            <option value="primary">Hijau</option><option value="secondary">Oranye</option><option value="tertiary">Emas</option>
                        </select>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div class="space-y-1.5"><label class="text-xs font-bold text-on-surface-variant uppercase">Tipe</label>
                        <select id="inputCertType" class="w-full bg-surface-container-high border border-outline-variant rounded-lg p-3 text-sm">
                            <option value="certificate">Sertifikat</option><option value="badge">Badge</option>
                        </select>
                    </div>
                    <div class="space-y-1.5"><label class="text-xs font-bold text-on-surface-variant uppercase">Level</label>
                        <select id="inputCertLevel" class="w-full bg-surface-container-high border border-outline-variant rounded-lg p-3 text-sm">
                            <option value="Ahli">Ahli</option><option value="Lanjutan">Lanjutan</option><option value="Menengah">Menengah</option><option value="Dasar">Dasar</option>
                        </select>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div class="space-y-1.5"><label class="text-xs font-bold text-on-surface-variant uppercase">Skor</label>
                        <input id="inputCertScore" type="number" min="0" max="100" class="w-full bg-surface-container-high border border-outline-variant rounded-lg p-3 text-sm" value="95" />
                    </div>
                    <div class="space-y-1.5"><label class="text-xs font-bold text-on-surface-variant uppercase">Status</label>
                        <select id="inputCertStatus" class="w-full bg-surface-container-high border border-outline-variant rounded-lg p-3 text-sm">
                            <option value="Terverifikasi">Terverifikasi</option><option value="Lulus">Lulus</option><option value="Dalam Proses">Dalam Proses</option><option value="Terkunci">Terkunci</option>
                        </select>
                    </div>
                </div>
                <div class="flex items-center gap-3">
                    <input id="inputCertVisible" type="checkbox" checked class="rounded bg-surface-container-high border-outline text-primary focus:ring-primary" />
                    <label class="text-sm text-on-surface">Tampilkan ke siswa</label>
                </div>
            </div>
            <div class="p-unit-lg border-t border-outline-variant/30 flex justify-end gap-3">
                <button id="btnCancelCertModal" class="px-4 py-2 text-sm font-bold text-on-surface-variant border border-outline-variant rounded-lg hover:bg-surface-variant">Batal</button>
                <button id="btnSaveCert" class="px-4 py-2 text-sm font-bold bg-primary text-on-primary rounded-lg hover:brightness-110">Simpan</button>
            </div>
        </div>
    </div>

    <!-- ===== MODAL: Skill Tree ===== -->
    <div id="skillModal" class="fixed inset-0 z-[110] hidden items-center justify-center bg-black/70 backdrop-blur-sm">
        <div class="bg-surface-container border border-outline-variant/50 rounded-xl w-full max-w-lg mx-4 shadow-2xl">
            <div class="p-4 border-b border-outline-variant/30 flex justify-between items-center">
                <h3 id="modalSkillTitle" class="font-bold text-on-surface">Tambah Skill</h3>
                <button id="btnCloseSkillModal" class="text-on-surface-variant hover:text-on-surface"><span class="material-symbols-outlined">close</span></button>
            </div>
            <div class="p-4 space-y-3">
                <input id="inputSkillTitle" class="w-full bg-surface-container-high border border-outline-variant rounded-lg p-3 text-sm" placeholder="Murabahah" />
                <textarea id="inputSkillDesc" class="w-full bg-surface-container-high border border-outline-variant rounded-lg p-3 text-sm h-16 resize-none" placeholder="Jual beli barang dengan penegasan harga perolehan dan keuntungan."></textarea>
                <div class="grid grid-cols-2 gap-3">
                    <div class="space-y-1"><label class="text-[10px] font-bold text-on-surface-variant uppercase">Icon</label>
                        <select id="inputSkillIcon" class="w-full bg-surface-container-high border border-outline-variant rounded-lg p-3 text-sm">
                            <option value="handshake">handshake</option><option value="groups">groups</option><option value="trending_up">trending_up</option>
                            <option value="account_balance_wallet">wallet</option><option value="contract">contract</option><option value="gavel">gavel</option>
                            <option value="fact_check">fact_check</option><option value="query_stats">query_stats</option>
                        </select>
                    </div>
                    <div class="space-y-1"><label class="text-[10px] font-bold text-on-surface-variant uppercase">Warna</label>
                        <select id="inputSkillColor" class="w-full bg-surface-container-high border border-outline-variant rounded-lg p-3 text-sm">
                            <option value="primary">Hijau</option><option value="secondary">Oranye</option><option value="tertiary">Emas</option><option value="warning-amber">Kuning</option>
                        </select>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-3">
                    <div class="space-y-1"><label class="text-[10px] font-bold text-on-surface-variant uppercase">Status</label>
                        <select id="inputSkillStatus" class="w-full bg-surface-container-high border border-outline-variant rounded-lg p-3 text-sm">
                            <option value="MASTERED">MASTERED</option><option value="ADVANCED">ADVANCED</option><option value="LEARNING">LEARNING</option><option value="LOCKED">LOCKED</option>
                        </select>
                    </div>
                    <div class="space-y-1"><label class="text-[10px] font-bold text-on-surface-variant uppercase">Filled Dots</label>
                        <input id="inputSkillDots" type="number" min="0" max="3" class="w-full bg-surface-container-high border border-outline-variant rounded-lg p-3 text-sm" value="3" />
                    </div>
                </div>
                <div class="flex items-center gap-3">
                    <input id="inputSkillLocked" type="checkbox" class="rounded bg-surface-container-high border-outline text-primary focus:ring-primary" />
                    <label class="text-sm text-on-surface">Locked (opacity 60%)</label>
                </div>
            </div>
            <div class="p-4 border-t border-outline-variant/30 flex justify-end gap-3">
                <button id="btnCancelSkillModal" class="px-4 py-2 text-sm font-bold text-on-surface-variant border border-outline-variant rounded-lg hover:bg-surface-variant">Batal</button>
                <button id="btnSaveSkill" class="px-4 py-2 text-sm font-bold bg-primary text-on-primary rounded-lg hover:brightness-110">Simpan</button>
            </div>
        </div>
    </div>

    <!-- ===== MODAL: Level ===== -->
    <div id="levelModal" class="fixed inset-0 z-[110] hidden items-center justify-center bg-black/70 backdrop-blur-sm">
        <div class="bg-surface-container border border-outline-variant/50 rounded-xl w-full max-w-lg mx-4 shadow-2xl">
            <div class="p-4 border-b border-outline-variant/30 flex justify-between items-center">
                <h3 id="modalLevelTitle" class="font-bold text-on-surface">Tambah Level</h3>
                <button id="btnCloseLevelModal" class="text-on-surface-variant hover:text-on-surface"><span class="material-symbols-outlined">close</span></button>
            </div>
            <div class="p-4 space-y-3">
                <input id="inputLevelTitle" class="w-full bg-surface-container-high border border-outline-variant rounded-lg p-3 text-sm" placeholder="Akad Mudharabah" />
                <input id="inputLevelDesc" class="w-full bg-surface-container-high border border-outline-variant rounded-lg p-3 text-sm" placeholder="Bagi hasil & usaha bersama" />
                <div class="grid grid-cols-2 gap-3">
                    <div class="space-y-1"><label class="text-[10px] font-bold text-on-surface-variant uppercase">Warna</label>
                        <select id="inputLevelColor" class="w-full bg-surface-container-high border border-outline-variant rounded-lg p-3 text-sm">
                            <option value="primary">Hijau</option><option value="secondary">Oranye</option><option value="tertiary">Emas</option><option value="warning-amber">Kuning</option>
                        </select>
                    </div>
                    <div class="space-y-1"><label class="text-[10px] font-bold text-on-surface-variant uppercase">Status</label>
                        <select id="inputLevelStatus" class="w-full bg-surface-container-high border border-outline-variant rounded-lg p-3 text-sm">
                            <option value="lulus">Lulus</option><option value="proses">Dalam Proses</option><option value="terkunci">Terkunci</option>
                        </select>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-3">
                    <div class="space-y-1"><label class="text-[10px] font-bold text-on-surface-variant uppercase">Skor</label>
                        <input id="inputLevelScore" type="number" min="0" max="100" class="w-full bg-surface-container-high border border-outline-variant rounded-lg p-3 text-sm" value="95" />
                    </div>
                    <div class="space-y-1"><label class="text-[10px] font-bold text-on-surface-variant uppercase">Progress (%)</label>
                        <input id="inputLevelProgress" type="number" min="0" max="100" class="w-full bg-surface-container-high border border-outline-variant rounded-lg p-3 text-sm" value="100" />
                    </div>
                </div>
            </div>
            <div class="p-4 border-t border-outline-variant/30 flex justify-end gap-3">
                <button id="btnCancelLevelModal" class="px-4 py-2 text-sm font-bold text-on-surface-variant border border-outline-variant rounded-lg hover:bg-surface-variant">Batal</button>
                <button id="btnSaveLevel" class="px-4 py-2 text-sm font-bold bg-primary text-on-primary rounded-lg hover:brightness-110">Simpan</button>
            </div>
        </div>
    </div>

    <!-- ===== DELETE MODAL ===== -->
    <div id="deleteModal" class="fixed inset-0 z-[120] hidden items-center justify-center bg-black/70 backdrop-blur-sm">
        <div class="bg-surface-container border border-outline-variant/50 rounded-xl w-full max-w-sm mx-4 shadow-2xl">
            <div class="p-6 text-center">
                <span class="material-symbols-outlined text-5xl text-error mb-3">warning</span>
                <h3 class="font-bold text-on-surface text-lg mb-2">Hapus Data</h3>
                <p class="text-sm text-on-surface-variant mb-1">Yakin ingin menghapus</p>
                <p id="deleteItemName" class="text-sm font-bold text-on-surface mb-4"></p>
                <div class="flex gap-3 justify-center">
                    <button id="btnCancelDelete" class="px-4 py-2 text-sm font-bold text-on-surface-variant border border-outline-variant rounded-lg hover:bg-surface-variant">Batal</button>
                    <button id="btnConfirmDelete" class="px-4 py-2 text-sm font-bold bg-error text-on-error rounded-lg hover:brightness-110">Hapus</button>
                </div>
            </div>
        </div>
    </div>

    <!-- ===== JAVASCRIPT ===== -->
    <script>
        (function() {
            // ===== STORAGE KEYS =====
            var KEYS = {
                certs: 'lidm_certificates',
                hero: 'lidm_hero_stats',
                skills: 'lidm_skill_tree',
                levels: 'lidm_level_data'
            };

            // ===== DEFAULT DATA =====
            var DEFAULTS = {
                certs: [
                    { id:'cert_1', title:'Sertifikasi Akad Murabahah', description:'Lulus simulasi pembiayaan motor & rumah dengan skor 95%.', icon:'verified', color:'primary', type:'certificate', level:'Ahli', status:'Terverifikasi', score:95, visible:true },
                    { id:'cert_2', title:'Fraud Detective I', description:'Mendeteksi 5 kasus identitas palsu berturut-turut.', icon:'security', color:'secondary', type:'badge', level:'Lanjutan', status:'Lulus', score:88, visible:true }
                ],
                hero: { complianceIndex:88, skills:[
                    { id:'hs1', name:'Kepatuhan Syariah', score:90, color:'primary', description:'Kemampuan mengidentifikasi akad & larangan riba.' },
                    { id:'hs2', name:'Komunikasi', score:75, color:'secondary', description:'Efektivitas dalam melayani nasabah virtual.' },
                    { id:'hs3', name:'Ketelitian', score:85, color:'tertiary', description:'Akurasi data input dan deteksi fraud.' }
                ]},
                skills: [
                    { id:'st1', icon:'handshake', title:'Murabahah', description:'Jual beli barang dengan penegasan harga perolehan dan keuntungan.', color:'primary', filledDots:3, status:'MASTERED', locked:false },
                    { id:'st2', icon:'groups', title:'Musyarakah', description:'Kerja sama antara dua pihak atau lebih untuk suatu usaha tertentu.', color:'primary', filledDots:2, status:'ADVANCED', locked:false },
                    { id:'st3', icon:'trending_up', title:'Mudharabah', description:'Kerja sama usaha antara pemilik dana dan pengelola dengan bagi hasil.', color:'secondary', filledDots:1, status:'LOCKED', locked:false },
                    { id:'st4', icon:'account_balance_wallet', title:'Wadiah', description:'Titipan murni dari satu pihak ke pihak lain yang harus dijaga.', color:'primary', filledDots:3, status:'MASTERED', locked:false },
                    { id:'st5', icon:'contract', title:'Ijarah', description:'Akad sewa menyewa atas manfaat suatu barang atau jasa.', color:'', filledDots:0, status:'LOCKED', locked:true },
                    { id:'st6', icon:'gavel', title:'AML & Compliance', description:'Identifikasi transaksi mencurigakan dan pencucian uang.', color:'warning-amber', filledDots:1, status:'LEARNING', locked:false },
                    { id:'st7', icon:'fact_check', title:'Auditor Syariah', description:'Pengawasan kepatuhan operasional terhadap prinsip syariah.', color:'', filledDots:0, status:'LOCKED', locked:true },
                    { id:'st8', icon:'query_stats', title:'Financing Analyst', description:'Analisis kelayakan pembiayaan bagi UMKM dan perorangan.', color:'', filledDots:0, status:'LOCKED', locked:true }
                ],
                levels: [
                    { id:1, title:'Akad Mudharabah', desc:'Bagi hasil & usaha bersama', color:'primary', score:95, status:'lulus', progress:100 },
                    { id:2, title:'Akad Murabahah', desc:'Jual beli & margin', color:'secondary', score:88, status:'lulus', progress:100 },
                    { id:3, title:'Akad Musyarakah', desc:'Kerja sama modal', color:'tertiary', score:78, status:'lulus', progress:80 },
                    { id:4, title:'Akad Wadiah', desc:'Titipan & penitipan dana', color:'warning-amber', score:45, status:'proses', progress:50 },
                    { id:5, title:'Kepatuhan Syariah', desc:'Regulasi & audit syariah', color:'', score:0, status:'terkunci', progress:0 }
                ]
            };

            // ===== STATE =====
            var currentTab = 'certs';
            var certs = [], skills = [], levels = [], heroStats = null;
            var editingCertId = null, editingSkillId = null, editingLevelId = null;
            var deletingType = null, deletingId = null;

            // ===== LOAD / SAVE HELPERS =====
            function loadData(key, def) {
                var stored = localStorage.getItem(key);
                if (stored) { try { return JSON.parse(stored); } catch(e) {} }
                return JSON.parse(JSON.stringify(def));
            }
            function saveData(key, data) { localStorage.setItem(key, JSON.stringify(data)); }

            // ===== TAB SWITCHING =====
            document.querySelectorAll('.tab-btn').forEach(function(btn) {
                btn.addEventListener('click', function() {
                    var tab = this.getAttribute('data-tab');
                    document.querySelectorAll('.tab-btn').forEach(function(b) {
                        b.className = 'tab-btn px-6 py-3 text-on-surface-variant hover:text-on-surface font-label-caps text-label-caps transition-all';
                    });
                    this.className = 'tab-btn px-6 py-3 text-primary border-b-2 border-primary font-label-caps text-label-caps transition-all';
                    document.querySelectorAll('.tab-content').forEach(function(c) { c.classList.add('hidden'); });
                    document.getElementById('tab-' + tab).classList.remove('hidden');
                    currentTab = tab;
                    if (tab === 'certs') { loadAllCerts(); renderCerts(); }
                    if (tab === 'hero') { loadHero(); renderHero(); }
                    if (tab === 'skills') { loadAllSkills(); renderSkills(); }
                    if (tab === 'levels') { loadAllLevels(); renderLevels(); }
                });
            });

            // ======================================================================
            // SERTIFIKAT
            // ======================================================================
            function loadAllCerts() { certs = loadData(KEYS.certs, DEFAULTS.certs); }
            function saveCerts() { saveData(KEYS.certs, certs); renderCerts(); }

            function renderCerts() {
                var container = document.getElementById('certificateList');
                var empty = document.getElementById('emptyCertState');
                var count = document.getElementById('certCount');
                if (!container) return;
                if (certs.length === 0) { container.innerHTML = ''; empty.classList.remove('hidden'); count.textContent = '0 sertifikat'; updateCertStats(); return; }
                empty.classList.add('hidden');
                count.textContent = certs.length + ' sertifikat';
                var cm = { primary:'border-primary bg-primary/10 text-primary', secondary:'border-secondary bg-secondary/10 text-secondary', tertiary:'border-tertiary bg-tertiary/10 text-tertiary' };
                var sm = { 'Terverifikasi':'bg-primary/20 text-primary', 'Lulus':'bg-secondary/20 text-secondary', 'Dalam Proses':'bg-warning-amber/20 text-warning-amber', 'Terkunci':'bg-surface-variant text-on-surface-variant' };
                container.innerHTML = certs.map(function(c) {
                    var cc = cm[c.color] || cm.primary;
                    var sc = sm[c.status] || sm['Terverifikasi'];
                    return '<div class="flex items-center gap-4 p-4 hover:bg-surface-variant/30 transition-colors group">' +
                        '<div class="w-12 h-12 rounded-xl flex items-center justify-center ' + cc.split(' ').slice(1).join(' ') + '"><span class="material-symbols-outlined">' + c.icon + '</span></div>' +
                        '<div class="flex-1 min-w-0"><div class="flex items-center gap-2"><h4 class="font-bold text-on-surface truncate">' + c.title + '</h4><span class="px-1.5 py-0.5 rounded text-[9px] font-bold uppercase ' + sc + '">' + c.status + '</span>' + (c.visible?'':'<span class="px-1.5 py-0.5 rounded text-[9px] font-bold uppercase bg-surface-variant text-on-surface-variant">Hidden</span>') + '</div>' +
                        '<p class="text-xs text-on-surface-variant mt-0.5">' + c.description + '</p>' +
                        '<div class="flex gap-2 mt-1 text-[9px] text-on-surface-variant uppercase font-bold"><span>' + c.type + '</span><span>|</span><span>Level: ' + c.level + '</span><span>|</span><span>Skor: ' + c.score + '%</span></div></div>' +
                        '<div class="flex gap-1 opacity-0 group-hover:opacity-100 transition-all">' +
                            '<button onclick="window.editCert(\'' + c.id + '\')" class="p-2 hover:bg-surface-variant rounded-full text-on-surface-variant hover:text-secondary"><span class="material-symbols-outlined text-sm">edit</span></button>' +
                            '<button onclick="window.deleteCert(\'' + c.id + '\')" class="p-2 hover:bg-surface-variant rounded-full text-on-surface-variant hover:text-error"><span class="material-symbols-outlined text-sm">delete</span></button></div></div>';
                }).join('');
                updateCertStats();
            }
            function updateCertStats() {
                var t=document.getElementById('statTotal'),v=document.getElementById('statVisible'),b=document.getElementById('statBadge');
                if(t) t.textContent=certs.length; if(v) v.textContent=certs.filter(function(c){return c.visible;}).length; if(b) b.textContent=certs.filter(function(c){return c.type==='badge';}).length;
            }
            function openCertModal(c) {
                editingCertId = c ? c.id : null;
                document.getElementById('modalCertTitle').textContent = c ? 'Edit Sertifikat' : 'Tambah Sertifikat';
                document.getElementById('inputCertTitle').value = c ? c.title : '';
                document.getElementById('inputCertDesc').value = c ? c.description : '';
                document.getElementById('inputCertIcon').value = c ? c.icon : 'verified';
                document.getElementById('inputCertColor').value = c ? c.color : 'primary';
                document.getElementById('inputCertType').value = c ? c.type : 'certificate';
                document.getElementById('inputCertLevel').value = c ? c.level : 'Ahli';
                document.getElementById('inputCertScore').value = c ? c.score : 95;
                document.getElementById('inputCertStatus').value = c ? c.status : 'Terverifikasi';
                document.getElementById('inputCertVisible').checked = c ? c.visible : true;
                document.getElementById('certModal').classList.remove('hidden');
                document.getElementById('certModal').classList.add('flex');
            }
            function closeCertModal() { document.getElementById('certModal').classList.add('hidden'); document.getElementById('certModal').classList.remove('flex'); editingCertId = null; }
            function saveCert() {
                var title = document.getElementById('inputCertTitle').value.trim();
                if (!title) { alert('Judul harus diisi.'); return; }
                var data = { title:title, description:document.getElementById('inputCertDesc').value.trim(), icon:document.getElementById('inputCertIcon').value, color:document.getElementById('inputCertColor').value, type:document.getElementById('inputCertType').value, level:document.getElementById('inputCertLevel').value, score:parseInt(document.getElementById('inputCertScore').value)||0, status:document.getElementById('inputCertStatus').value, visible:document.getElementById('inputCertVisible').checked };
                if (editingCertId) { var idx=certs.findIndex(function(x){return x.id===editingCertId;}); if(idx!==-1){certs[idx]={id:editingCertId};Object.keys(data).forEach(function(k){certs[idx][k]=data[k];});} }
                else { data.id = 'cert_'+Date.now(); certs.push(data); }
                saveCerts(); closeCertModal();
            }
            window.editCert = function(id) { var c=certs.find(function(x){return x.id===id;});if(c)openCertModal(c); };
            window.deleteCert = function(id) { deletingType='cert';deletingId=id;var c=certs.find(function(x){return x.id===id;});if(!c)return;document.getElementById('deleteItemName').textContent='"'+c.title+'"';document.getElementById('deleteModal').classList.remove('hidden');document.getElementById('deleteModal').classList.add('flex'); };

            // ======================================================================
            // PROFIL KEMAMPUAN
            // ======================================================================
            function loadHero() { heroStats = loadData(KEYS.hero, DEFAULTS.hero); }
            function saveHero() { saveData(KEYS.hero, heroStats); }

            function renderHero() {
                var container = document.getElementById('heroSkillList');
                if (!container) return;
                document.getElementById('heroCompliance').value = heroStats.complianceIndex;
                var colorLabels = { primary:'Hijau', secondary:'Oranye', tertiary:'Emas' };
                container.innerHTML = heroStats.skills.map(function(s, i) {
                    return '<div class="flex items-center gap-3 p-3 rounded-lg bg-surface-container-low border border-outline-variant/30 group" data-idx="' + i + '">' +
                        '<div class="flex-1 grid grid-cols-5 gap-2 items-center">' +
                            '<input class="col-span-1 bg-surface-container-high border border-outline-variant rounded p-2 text-xs" value="' + s.name + '" placeholder="Nama" onchange="window.updateHeroSkill('+i+',\'name\',this.value)" />' +
                            '<input class="col-span-1 bg-surface-container-high border border-outline-variant rounded p-2 text-xs" type="number" min="0" max="100" value="' + s.score + '" onchange="window.updateHeroSkill('+i+',\'score\',parseInt(this.value)||0)" />' +
                            '<select class="col-span-1 bg-surface-container-high border border-outline-variant rounded p-2 text-xs" onchange="window.updateHeroSkill('+i+',\'color\',this.value)">' +
                                '<option value="primary"'+(s.color==='primary'?' selected':'')+'>Hijau</option>' +
                                '<option value="secondary"'+(s.color==='secondary'?' selected':'')+'>Oranye</option>' +
                                '<option value="tertiary"'+(s.color==='tertiary'?' selected':'')+'>Emas</option>' +
                            '</select>' +
                            '<input class="col-span-2 bg-surface-container-high border border-outline-variant rounded p-2 text-xs" value="' + s.description + '" placeholder="Deskripsi" onchange="window.updateHeroSkill('+i+',\'description\',this.value)" />' +
                        '</div>' +
                        '<button onclick="window.deleteHeroSkill('+i+')" class="text-on-surface-variant hover:text-error opacity-0 group-hover:opacity-100 transition-all"><span class="material-symbols-outlined text-sm">delete</span></button>' +
                    '</div>';
                }).join('');
            }

            window.updateHeroSkill = function(idx, field, val) {
                if (heroStats && heroStats.skills[idx]) { heroStats.skills[idx][field] = val; saveHero(); }
            };
            window.deleteHeroSkill = function(idx) {
                if (!heroStats) return;
                heroStats.skills.splice(idx, 1);
                saveHero(); renderHero();
            };

            function saveHeroForm() {
                heroStats.complianceIndex = parseInt(document.getElementById('heroCompliance').value) || 0;
                saveHero();
                alert('Profil kemampuan tersimpan.');
            }

            function addHeroSkill() {
                if (!heroStats) return;
                heroStats.skills.push({ id:'hs'+Date.now(), name:'Skill Baru', score:70, color:'primary', description:'Deskripsi skill.' });
                saveHero(); renderHero();
            }

            // ======================================================================
            // POHON KOMPETENSI
            // ======================================================================
            function loadAllSkills() { skills = loadData(KEYS.skills, DEFAULTS.skills); }
            function saveSkills() { saveData(KEYS.skills, skills); renderSkills(); }

            function renderSkills() {
                var container = document.getElementById('skillTreeList');
                var empty = document.getElementById('emptySkillState');
                if (!container) return;
                if (skills.length === 0) { container.innerHTML = ''; empty.classList.remove('hidden'); return; }
                empty.classList.add('hidden');
                var cm = { primary:'border-primary bg-primary/10 text-primary', secondary:'border-secondary bg-secondary/10 text-secondary', tertiary:'border-tertiary bg-tertiary/10 text-tertiary', 'warning-amber':'border-warning-amber bg-warning-amber/10 text-warning-amber' };
                container.innerHTML = skills.map(function(s) {
                    var cc = cm[s.color] || cm.primary;
                    var dots = '';
                    for (var d=0; d<3; d++) { dots += '<span class="w-2 h-2 rounded-full ' + (d < s.filledDots ? (s.color ? 'bg-'+s.color : 'bg-primary') : 'bg-on-surface-variant/30') + '"></span>'; }
                    var cls = s.locked ? 'opacity-60' : 'hover:scale-[1.02]';
                    var bdr = s.color ? 'border-b-2 border-' + s.color : 'border-b-2 border-on-surface-variant/20';
                    var statusCls = s.status==='MASTERED'||s.status==='ADVANCED' ? (s.color?'bg-'+s.color+'/10 text-'+s.color:'bg-primary/10 text-primary') : s.status==='LEARNING' ? 'bg-warning-amber/10 text-warning-amber' : 'text-on-surface-variant';
                    return '<div class="glass-card rounded-2xl p-5 ' + bdr + ' ' + cls + ' transition-all bg-surface-container-low border border-outline-variant/30 group">' +
                        '<div class="flex justify-between items-start">' +
                            '<div class="w-12 h-12 rounded-xl flex items-center justify-center ' + (s.color ? cc.split(' ').slice(1).join(' ') : 'bg-surface-container-high text-on-surface-variant') + '"><span class="material-symbols-outlined">' + s.icon + '</span></div>' +
                            '<div class="flex gap-1 opacity-0 group-hover:opacity-100 transition-all">' +
                                '<button onclick="window.editSkill(\'' + s.id + '\')" class="p-1.5 hover:bg-surface-variant rounded text-on-surface-variant hover:text-secondary"><span class="material-symbols-outlined text-sm">edit</span></button>' +
                                '<button onclick="window.deleteSkill(\'' + s.id + '\')" class="p-1.5 hover:bg-surface-variant rounded text-on-surface-variant hover:text-error"><span class="material-symbols-outlined text-sm">delete</span></button></div></div>' +
                        '<h4 class="font-bold text-on-surface text-base mt-3">' + s.title + '</h4>' +
                        '<p class="text-xs text-on-surface-variant mt-1 mb-3">' + s.description + '</p>' +
                        '<div class="flex items-center justify-between"><div class="flex gap-1">' + dots + '</div>' +
                        '<span class="text-[10px] font-bold px-2 py-0.5 rounded ' + statusCls + '">' + (s.locked?'LOCKED':s.status) + '</span></div></div>';
                }).join('');
            }

            function openSkillModal(s) {
                editingSkillId = s ? s.id : null;
                document.getElementById('modalSkillTitle').textContent = s ? 'Edit Skill' : 'Tambah Skill';
                document.getElementById('inputSkillTitle').value = s ? s.title : '';
                document.getElementById('inputSkillDesc').value = s ? s.description : '';
                document.getElementById('inputSkillIcon').value = s ? s.icon : 'handshake';
                document.getElementById('inputSkillColor').value = s ? s.color : 'primary';
                document.getElementById('inputSkillStatus').value = s ? s.status : 'MASTERED';
                document.getElementById('inputSkillDots').value = s ? s.filledDots : 3;
                document.getElementById('inputSkillLocked').checked = s ? s.locked : false;
                document.getElementById('skillModal').classList.remove('hidden');
                document.getElementById('skillModal').classList.add('flex');
            }
            function closeSkillModal() { document.getElementById('skillModal').classList.add('hidden'); document.getElementById('skillModal').classList.remove('flex'); editingSkillId = null; }
            function saveSkill() {
                var title = document.getElementById('inputSkillTitle').value.trim();
                if (!title) { alert('Judul harus diisi.'); return; }
                var data = { title:title, description:document.getElementById('inputSkillDesc').value.trim(), icon:document.getElementById('inputSkillIcon').value, color:document.getElementById('inputSkillColor').value, status:document.getElementById('inputSkillStatus').value, filledDots:parseInt(document.getElementById('inputSkillDots').value)||0, locked:document.getElementById('inputSkillLocked').checked };
                if (editingSkillId) { var idx=skills.findIndex(function(x){return x.id===editingSkillId;}); if(idx!==-1){skills[idx]={id:editingSkillId};Object.keys(data).forEach(function(k){skills[idx][k]=data[k];});} }
                else { data.id='st_'+Date.now(); skills.push(data); }
                saveSkills(); closeSkillModal();
            }
            window.editSkill = function(id) { var s=skills.find(function(x){return x.id===id;});if(s)openSkillModal(s); };
            window.deleteSkill = function(id) { deletingType='skill';deletingId=id;var s=skills.find(function(x){return x.id===id;});if(!s)return;document.getElementById('deleteItemName').textContent='"'+s.title+'"';document.getElementById('deleteModal').classList.remove('hidden');document.getElementById('deleteModal').classList.add('flex'); };

            // ======================================================================
            // LEVEL PROGRESI
            // ======================================================================
            function loadAllLevels() { levels = loadData(KEYS.levels, DEFAULTS.levels); }
            function saveLevels() { saveData(KEYS.levels, levels); renderLevels(); }

            function renderLevels() {
                var container = document.getElementById('levelList');
                var empty = document.getElementById('emptyLevelState');
                if (!container) return;
                if (levels.length === 0) { container.innerHTML = ''; empty.classList.remove('hidden'); return; }
                empty.classList.add('hidden');
                var colorMap = { primary:'border-primary/20 bg-primary/10 text-primary', secondary:'border-secondary/20 bg-secondary/10 text-secondary', tertiary:'border-tertiary/20 bg-tertiary/10 text-tertiary', 'warning-amber':'border-warning-amber/20 bg-warning-amber/10 text-warning-amber' };
                container.innerHTML = levels.map(function(l) {
                    var cm = colorMap[l.color] || 'border-outline-variant/20 bg-surface-container-high text-on-surface-variant';
                    var parts = cm.split(' ');
                    var textC = parts[parts.length-1];
                    var statusLabel = l.status==='lulus'?'Lulus':l.status==='proses'?'Proses':'Terkunci';
                    var statusCls = l.status==='lulus'?'bg-primary/20 text-primary':l.status==='proses'?'bg-warning-amber/20 text-warning-amber':'bg-surface-variant text-on-surface-variant';
                    return '<div class="bg-surface-container-low border border-outline-variant/30 rounded-xl p-5 group hover:border-'+ (l.color||'outline-variant') +'/50 transition-all">' +
                        '<div class="flex justify-between items-start mb-3">' +
                            '<span class="text-[10px] font-bold px-2 py-0.5 rounded ' + cm.split(' ').slice(1).join(' ') + '">LEVEL ' + l.id + '</span>' +
                            '<div class="flex gap-1 opacity-0 group-hover:opacity-100 transition-all">' +
                                '<button onclick="window.editLevel('+l.id+')" class="p-1 hover:bg-surface-variant rounded text-on-surface-variant hover:text-secondary"><span class="material-symbols-outlined text-sm">edit</span></button>' +
                                '<button onclick="window.deleteLevel('+l.id+')" class="p-1 hover:bg-surface-variant rounded text-on-surface-variant hover:text-error"><span class="material-symbols-outlined text-sm">delete</span></button></div></div>' +
                        '<h4 class="font-bold text-on-surface">' + l.title + '</h4>' +
                        '<p class="text-xs text-on-surface-variant mt-1 mb-3">' + l.desc + '</p>' +
                        '<div class="h-1.5 bg-surface-container-highest rounded-full overflow-hidden mb-3"><div class="h-full rounded-full bg-' + (l.color||'outline-variant') + '" style="width:' + l.progress + '%"></div></div>' +
                        '<div class="flex justify-between items-center"><span class="text-xs font-bold ' + textC + '">Skor: ' + l.score + '</span><span class="px-1.5 py-0.5 rounded text-[9px] font-bold uppercase ' + statusCls + '">' + statusLabel + '</span></div></div>';
                }).join('');
            }

            function openLevelModal(l) {
                editingLevelId = l ? l.id : null;
                document.getElementById('modalLevelTitle').textContent = l ? 'Edit Level' : 'Tambah Level';
                document.getElementById('inputLevelTitle').value = l ? l.title : '';
                document.getElementById('inputLevelDesc').value = l ? l.desc : '';
                document.getElementById('inputLevelColor').value = l ? l.color : 'primary';
                document.getElementById('inputLevelStatus').value = l ? l.status : 'lulus';
                document.getElementById('inputLevelScore').value = l ? l.score : 95;
                document.getElementById('inputLevelProgress').value = l ? l.progress : 100;
                document.getElementById('levelModal').classList.remove('hidden');
                document.getElementById('levelModal').classList.add('flex');
            }
            function closeLevelModal() { document.getElementById('levelModal').classList.add('hidden'); document.getElementById('levelModal').classList.remove('flex'); editingLevelId = null; }
            function saveLevel() {
                var title = document.getElementById('inputLevelTitle').value.trim();
                if (!title) { alert('Judul harus diisi.'); return; }
                var data = { title:title, desc:document.getElementById('inputLevelDesc').value.trim(), color:document.getElementById('inputLevelColor').value, status:document.getElementById('inputLevelStatus').value, score:parseInt(document.getElementById('inputLevelScore').value)||0, progress:parseInt(document.getElementById('inputLevelProgress').value)||0 };
                if (editingLevelId) { var idx=levels.findIndex(function(x){return x.id===editingLevelId;}); if(idx!==-1){levels[idx]={id:editingLevelId};Object.keys(data).forEach(function(k){levels[idx][k]=data[k];});} }
                else { var maxId=0; levels.forEach(function(l){if(l.id>maxId)maxId=l.id;}); data.id=maxId+1; levels.push(data); }
                saveLevels(); closeLevelModal();
            }
            window.editLevel = function(id) { var l=levels.find(function(x){return x.id===id;});if(l)openLevelModal(l); };
            window.deleteLevel = function(id) { deletingType='level';deletingId=id;var l=levels.find(function(x){return x.id===id;});if(!l)return;document.getElementById('deleteItemName').textContent='"'+l.title+'"';document.getElementById('deleteModal').classList.remove('hidden');document.getElementById('deleteModal').classList.add('flex'); };

            // ======================================================================
            // DELETE CONFIRM
            // ======================================================================
            function confirmDelete() {
                if (!deletingId) return;
                if (deletingType === 'cert') { certs=certs.filter(function(c){return c.id!==deletingId;}); saveCerts(); }
                else if (deletingType === 'skill') { skills=skills.filter(function(s){return s.id!==deletingId;}); saveSkills(); }
                else if (deletingType === 'level') { levels=levels.filter(function(l){return l.id!==deletingId;}); saveLevels(); }
                deletingId=null; deletingType=null;
                document.getElementById('deleteModal').classList.add('hidden');
                document.getElementById('deleteModal').classList.remove('flex');
            }
            function closeDeleteModal() { deletingId=null; deletingType=null; document.getElementById('deleteModal').classList.add('hidden'); document.getElementById('deleteModal').classList.remove('flex'); }

            // ======================================================================
            // DOMContentLoaded
            // ======================================================================
            document.addEventListener('DOMContentLoaded', function() {
                loadAllCerts(); renderCerts();
                loadHero(); 
                loadAllSkills();
                loadAllLevels();

                // Cert buttons
                document.getElementById('btnAddCertificate').addEventListener('click', function() { openCertModal(null); });
                document.getElementById('btnCloseCertModal').addEventListener('click', closeCertModal);
                document.getElementById('btnCancelCertModal').addEventListener('click', closeCertModal);
                document.getElementById('certModal').addEventListener('click', function(e) { if (e.target === e.currentTarget) closeCertModal(); });
                document.getElementById('btnSaveCert').addEventListener('click', saveCert);

                // Hero buttons
                document.getElementById('btnSaveHero').addEventListener('click', saveHeroForm);
                document.getElementById('btnAddHeroSkill').addEventListener('click', addHeroSkill);

                // Skill buttons
                document.getElementById('btnAddSkill').addEventListener('click', function() { openSkillModal(null); });
                document.getElementById('btnCloseSkillModal').addEventListener('click', closeSkillModal);
                document.getElementById('btnCancelSkillModal').addEventListener('click', closeSkillModal);
                document.getElementById('skillModal').addEventListener('click', function(e) { if (e.target === e.currentTarget) closeSkillModal(); });
                document.getElementById('btnSaveSkill').addEventListener('click', saveSkill);

                // Level buttons
                document.getElementById('btnAddLevel').addEventListener('click', function() { openLevelModal(null); });
                document.getElementById('btnCloseLevelModal').addEventListener('click', closeLevelModal);
                document.getElementById('btnCancelLevelModal').addEventListener('click', closeLevelModal);
                document.getElementById('levelModal').addEventListener('click', function(e) { if (e.target === e.currentTarget) closeLevelModal(); });
                document.getElementById('btnSaveLevel').addEventListener('click', saveLevel);

                // Delete modal
                document.getElementById('btnConfirmDelete').addEventListener('click', confirmDelete);
                document.getElementById('btnCancelDelete').addEventListener('click', closeDeleteModal);
                document.getElementById('deleteModal').addEventListener('click', function(e) { if (e.target === e.currentTarget) closeDeleteModal(); });
            });
        })();
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
        <a class="flex flex-col items-center gap-1 text-primary" href="#">
            <span class="material-symbols-outlined text-xl" style="font-variation-settings:'FILL' 1;">military_tech</span>
            <span class="text-[10px] font-bold">Kompetensi</span>
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