<!DOCTYPE html>

<html class="dark" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Manajemen Setelan Sistem | Sharia Bank Lab</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&amp;family=Inter:wght@400;500;600&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <!-- Tailwind Config Verbatim -->
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
        body {
            background-color: #121212;
            color: #e5e2e1;
            font-family: 'Plus Jakarta Sans', sans-serif;
            overflow-x: hidden;
        }

        .glass-panel {
            background: rgba(34, 34, 34, 0.7);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(142, 213, 185, 0.1);
        }

        .custom-scrollbar::-webkit-scrollbar {
            width: 4px;
        }

        .custom-scrollbar::-webkit-scrollbar-track {
            background: #131313;
        }

        .custom-scrollbar::-webkit-scrollbar-thumb {
            background: #3f4944;
            border-radius: 10px;
        }

        .active-tab-glow {
            box-shadow: 0 0 15px rgba(142, 213, 185, 0.15);
        }

        .sharia-slider {
            -webkit-appearance: none;
            appearance: none;
            width: 100%;
            height: 6px;
            background: #353534;
            outline: none;
            border-radius: 3px;
        }

        .sharia-slider::-webkit-slider-thumb {
            -webkit-appearance: none;
            appearance: none;
            width: 18px;
            height: 18px;
            background: #8ed5b9;
            cursor: pointer;
            border-radius: 50%;
            box-shadow: 0 0 10px rgba(142, 213, 185, 0.5);
        }
    </style>
</head>

<body class="bg-surface text-on-surface">
    <!-- Sidebar Navigation -->
    <aside id="adminSidebar"
        class="hidden md:flex w-[280px] h-screen fixed left-0 top-0 bg-charcoal-surface border-r border-outline-variant flex-col py-unit-lg z-50 transition-transform duration-300">
        <div class="px-unit-lg mb-unit-xl">
            <h1 class="font-headline-md text-headline-md text-sharia-green-deep dark:text-primary font-bold">Sharia Bank
                Lab</h1>
            <p class="font-body-md text-body-md text-on-surface-variant">Management Portal</p>
        </div>
        <nav class="flex-1 flex flex-col gap-1">
            <a class="flex items-center gap-unit-md px-unit-lg py-unit-sm text-on-surface-variant hover:text-on-surface hover:bg-surface-variant/50 transition-colors duration-200 active:scale-95"
                href="../Dashboard_Siswa/Dashboard_admin.php">
                <span class="material-symbols-outlined">dashboard</span>
                <span class="font-body-md text-body-md">Dashboard</span>
            </a>
            <a class="flex items-center gap-unit-md px-unit-lg py-unit-sm text-on-surface-variant hover:text-on-surface hover:bg-surface-variant/50 transition-colors duration-200 active:scale-95"
                href="../Simulasi/Simulasi_Admin.php">
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
            <!-- Settings Active -->
            <a class="flex items-center gap-unit-md px-unit-lg py-unit-sm bg-primary-container/10 text-primary border-l-4 border-secondary font-bold active-tab-glow"
                href="#">
                <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">settings</span>
                <span class="font-body-md text-body-md">Setelan</span>
            </a>
        </nav>
        <div class="mt-auto flex flex-col gap-1 border-t border-outline-variant pt-unit-md">
            <a id="adminHelpLink" class="flex items-center gap-unit-md px-unit-lg py-unit-sm text-on-surface-variant hover:text-on-surface hover:bg-surface-variant/50 transition-colors duration-200 cursor-pointer"
                onclick="window.openAdminHelp()">
                <span id="adminHelpIcon" class="material-symbols-outlined">help</span>
                <span id="adminHelpText" class="font-body-md text-body-md">Bantuan</span>
            </a>
        </div>
    </aside>
    <!-- Header -->
    <!-- Mobile Overlay -->
    <div id="mobileOverlay" class="fixed inset-0 bg-black/60 z-40 hidden md:hidden" onclick="toggleAdminSidebar()"></div>
    <header
        class="h-16 fixed top-0 right-0 w-full md:w-[calc(100%-280px)] bg-surface-container border-b border-outline-variant shadow-sm flex justify-between items-center px-4 md:px-margin-desktop z-40">
        <div class="flex items-center gap-unit-md">
            <button class="md:hidden material-symbols-outlined text-on-surface-variant hover:text-primary transition-colors" onclick="toggleAdminSidebar()">menu</button>
            <span class="material-symbols-outlined text-primary hidden sm:inline">admin_panel_settings</span>
            <span class="font-headline-sm text-headline-sm font-bold text-on-surface">Manajemen Setelan Sistem</span>
        </div>
        <div class="flex items-center gap-6">
            <div class="flex items-center gap-2 px-3 py-1.5 rounded-full bg-secondary-container/20 text-secondary border border-secondary/30 cursor-pointer hover:bg-secondary-container/30 transition-all"
                onclick="togglePreview()">
                <span class="material-symbols-outlined text-sm">visibility</span>
                <span class="font-label-caps text-label-caps hidden sm:inline">Pratinjau Pengaturan Siswa</span>
            </div>
            <div class="flex items-center gap-unit-md">
                <span
                    class="material-symbols-outlined text-on-surface-variant cursor-pointer hover:text-primary transition-all">notifications</span>
                <div class="flex items-center gap-3">
                    <span id="adminNameHeader" class="font-label-caps text-label-caps text-on-surface-variant">Admin</span>
                    <div class="relative group shrink-0">
                        <div class="w-8 h-8 rounded-full border border-outline overflow-hidden cursor-pointer" id="adminPhotoWrap">
                            <img id="adminProfileImg" class="w-full h-full object-cover"
                                src="https://lh3.googleusercontent.com/aida-public/AB6AXuBKgrgnbmJjs2lf74Hp29Gq8TjAgm_EsIDQaS0t7BlDF7nH91oG7bbsok03MHbrbASvDt_gmv5O1nhmHHVQUDbfMYs4Li81NVINPM-F2vRvTYIXx4ELK4CqIYEmZ_c2vRtmPK1aXH26Y19zR1yOV1H1FC54L2s4GIkJqeGqJc0V0DLMmxsPhp7XqNLmiYnfB_Y5OCQmD8D-8emK-KemAIgNfZ_b3AgvGwjTFzXHR3gLLzVCQSpvm4hnpRwFKt4sS0xkaMxP68SgcPQc" />
                        </div>
                        <button id="btnAdminEditPhoto" class="absolute -bottom-1 -right-1 bg-primary text-on-primary w-4 h-4 rounded-full flex items-center justify-center shadow-lg opacity-0 group-hover:opacity-100 transition-opacity cursor-pointer" style="display:none;">
                            <span class="material-symbols-outlined" style="font-size:12px;">edit</span>
                        </button>
                        <input id="fileAdminProfilePhoto" type="file" accept="image/*" class="hidden" />
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Main Content Area -->
    <main class="md:ml-[280px] pt-16 min-h-screen bg-background px-4 md:px-margin-desktop py-margin-desktop pb-20 md:pb-margin-desktop">
        <div class="grid grid-cols-12 gap-gutter max-w-container-max mx-auto">
            <!-- Left Column: CRUD Sections -->
            <section class="col-span-12 lg:col-span-8 flex flex-col gap-6">
                <!-- Tab Navigation -->
                <div class="flex gap-2 border-b border-outline-variant pb-2">
                    <button class="tab-btn-admin active px-4 py-2 text-sm font-bold rounded-t-lg bg-primary/10 text-primary border-b-2 border-primary" data-tab="students">Data Siswa</button>
                    <button class="tab-btn-admin px-4 py-2 text-sm font-bold rounded-t-lg text-on-surface-variant hover:text-on-surface" data-tab="preferences">Preferensi AI</button>
                    <button class="tab-btn-admin px-4 py-2 text-sm font-bold rounded-t-lg text-on-surface-variant hover:text-on-surface" data-tab="labconfig">Konfigurasi Lab</button>
                </div>

                <!-- Tab: Data Siswa (CRUD) -->
                <div class="tab-content-admin" data-tab="students">
                    <div class="glass-panel p-unit-lg rounded-xl">
                        <div class="flex justify-between items-start mb-6">
                            <div>
                                <h2 class="font-headline-md text-headline-md text-primary mb-1">Data Profil Siswa</h2>
                                <p class="text-on-surface-variant font-body-md">Kelola data profil siswa (nama, institusi, peran simulasi).</p>
                            </div>
                            <button onclick="window._adminAddStudent()" class="bg-primary-container/20 text-primary border border-primary/30 px-4 py-2 rounded-lg font-label-caps flex items-center gap-2 hover:bg-primary-container/30 transition-all">
                                <span class="material-symbols-outlined text-sm">add</span>Tambah Siswa
                            </button>
                        </div>
                        <div id="studentList" class="space-y-3">
                            <!-- rendered by JS -->
                        </div>
                    </div>
                </div>

                <!-- Tab: Preferensi AI (CRUD) -->
                <div class="tab-content-admin hidden" data-tab="preferences">
                    <div class="glass-panel p-unit-lg rounded-xl">
                        <div class="flex justify-between items-start mb-6">
                            <div>
                                <h2 class="font-headline-md text-headline-md text-primary mb-1">Preferensi AI Supervisor</h2>
                                <p class="text-on-surface-variant font-body-md">Atur default toggle preferensi AI untuk siswa.</p>
                            </div>
                        </div>
                        <div id="aiPrefList" class="space-y-4">
                            <!-- rendered by JS -->
                        </div>
                        <button onclick="window._adminSaveAIPrefs()" class="mt-6 w-full py-2.5 bg-primary text-on-primary font-bold rounded-lg hover:brightness-110 active:scale-95 transition-all">Simpan Preferensi AI</button>
                    </div>
                </div>

                <!-- Tab: Konfigurasi Lab (CRUD) -->
                <div class="tab-content-admin hidden" data-tab="labconfig">
                    <div class="glass-panel p-unit-lg rounded-xl">
                        <div class="flex justify-between items-start mb-6">
                            <div>
                                <h2 class="font-headline-md text-headline-md text-primary mb-1">Konfigurasi Laboratorium</h2>
                                <p class="text-on-surface-variant font-body-md">Atur bahasa dan tingkat kesulitan default.</p>
                            </div>
                        </div>
                        <div id="labConfigList" class="space-y-4">
                            <!-- rendered by JS -->
                        </div>
                        <button onclick="window._adminSaveLabConfig()" class="mt-6 w-full py-2.5 bg-primary text-on-primary font-bold rounded-lg hover:brightness-110 active:scale-95 transition-all">Simpan Konfigurasi</button>
                    </div>
                </div>
            </section>
            <!-- Right Column: System Info & Actions -->
            <section class="col-span-12 lg:col-span-4 flex flex-col gap-6">
                <div class="bg-surface-container-high rounded-xl p-6 border border-outline-variant">
                    <h3 class="font-label-caps text-label-caps text-on-surface-variant mb-4">Status Data Siswa</h3>
                    <div class="space-y-3">
                        <div class="flex justify-between text-xs"><span class="text-on-surface-variant">Total Siswa</span><span id="statTotalSiswa" class="text-primary font-bold">0</span></div>
                        <div class="flex justify-between text-xs"><span class="text-on-surface-variant">Toggle AI Aktif</span><span id="statToggleAktif" class="text-secondary font-bold">0</span></div>
                        <div class="flex justify-between text-xs"><span class="text-on-surface-variant">Bahasa Default</span><span id="statBahasa" class="text-on-surface">Indonesia</span></div>
                        <div class="flex justify-between text-xs"><span class="text-on-surface-variant">Kesulitan</span><span id="statKesulitan" class="text-on-surface">Intermediate</span></div>
                    </div>
                </div>
                <div class="glass-panel rounded-xl p-unit-lg border-l-4 border-l-warning-amber">
                    <h3 class="font-headline-md text-headline-md text-ivory-text !text-[18px] mb-2 flex items-center gap-2"><span class="material-symbols-outlined text-warning-amber">warning</span>Tindakan</h3>
                    <p class="text-xs text-on-surface-variant mb-4">Tindakan sistem global untuk data pengaturan.</p>
                    <div class="space-y-3">
                        <button onclick="window._adminResetDefaults()" class="w-full py-2 bg-surface-container-lowest border border-outline-variant text-on-surface-variant hover:text-on-surface rounded font-label-caps text-[11px] transition-all">RESET KE DEFAULT</button>
                    </div>
                </div>
            </section>
        </div>
    </main>

    <!-- Modal Tambah/Edit Siswa -->
    <div id="studentModalOverlay" class="fixed inset-0 z-[100] hidden" style="backdrop-filter:blur(8px);-webkit-backdrop-filter:blur(8px);background:rgba(0,0,0,0.7);">
        <div class="min-h-full flex items-center justify-center p-4">
            <div class="glass-panel rounded-2xl w-full max-w-md p-6 md:p-8">
                <div class="flex justify-between items-center mb-6">
                    <h3 id="studentModalTitle" class="font-headline-md text-headline-md text-ivory-text">Tambah Siswa</h3>
                    <button onclick="window._adminCloseStudentModal()" class="w-8 h-8 rounded-lg bg-surface-container-hover flex items-center justify-center text-on-surface-variant hover:text-ivory-text transition-colors"><span class="material-symbols-outlined text-[20px]">close</span></button>
                </div>
                <div class="space-y-4">
                    <div><label class="text-xs font-bold text-on-surface-variant mb-1 block">Nama Lengkap</label><input id="sName" class="w-full bg-surface-container-high border border-outline-variant rounded-lg px-4 py-2.5 text-sm text-ivory-text focus:ring-1 focus:ring-primary" placeholder="Nama siswa" /></div>
                    <div><label class="text-xs font-bold text-on-surface-variant mb-1 block">Institusi</label><input id="sInstitution" class="w-full bg-surface-container-high border border-outline-variant rounded-lg px-4 py-2.5 text-sm text-ivory-text focus:ring-1 focus:ring-primary" placeholder="Universitas" /></div>
                    <div><label class="text-xs font-bold text-on-surface-variant mb-1 block">Peran Simulasi</label>
                        <select id="sRole" class="w-full bg-surface-container-high border border-outline-variant rounded-lg px-4 py-2.5 text-sm text-ivory-text focus:ring-1 focus:ring-primary">
                            <option>Customer Service Officer</option>
                            <option>Financial Sharia Analyst</option>
                            <option>Credit Risk Manager</option>
                            <option>Compliance Officer</option>
                        </select>
                    </div>
                    <input id="sEditId" type="hidden" />
                    <button id="sSaveBtn" onclick="window._adminSaveStudent()" class="w-full py-2.5 bg-primary text-on-primary font-bold rounded-lg hover:brightness-110 active:scale-95 transition-all">Simpan</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        function togglePreview() {
            const overlay = document.getElementById('preview-overlay');
            if (overlay.classList.contains('opacity-0')) {
                overlay.classList.remove('opacity-0', 'pointer-events-none');
                overlay.classList.add('opacity-100', 'pointer-events-auto');
            } else {
                overlay.classList.add('opacity-0', 'pointer-events-none');
                overlay.classList.remove('opacity-100', 'pointer-events-auto');
            }
        }

        document.querySelectorAll('.glass-panel').forEach(panel => {
            panel.addEventListener('mouseenter', () => {
                panel.style.boxShadow = '0 8px 30px rgba(0,0,0,0.5), 0 0 10px rgba(142,213,185,0.05)';
            });
            panel.addEventListener('mouseleave', () => {
                panel.style.boxShadow = 'none';
            });
        });
    </script>
    <script>
    (function() {
        var PHOTO_KEY = 'adminProfilePhoto';

        function applyAdminPhoto(src) {
            var img = document.getElementById('adminProfileImg');
            if (img) img.src = src;
        }

        var savedPhoto = localStorage.getItem(PHOTO_KEY);
        if (savedPhoto) applyAdminPhoto(savedPhoto);

        function handlePhotoUpload() {
            var input = document.getElementById('fileAdminProfilePhoto');
            input.click();
            input.onchange = function() {
                if (!input.files || !input.files[0]) return;
                var reader = new FileReader();
                reader.onload = function(e) {
                    var base64 = e.target.result;
                    localStorage.setItem(PHOTO_KEY, base64);
                    applyAdminPhoto(base64);
                };
                reader.readAsDataURL(input.files[0]);
            };
        }

        var wrap = document.getElementById('adminPhotoWrap');
        if (wrap) wrap.addEventListener('click', handlePhotoUpload);

        var adminName = localStorage.getItem('currentUser');
        var nameEl = document.getElementById('adminNameHeader');
        if (adminName && nameEl) nameEl.textContent = adminName;

        window.addEventListener('storage', function(e) {
            if (e.key === PHOTO_KEY) {
                if (e.newValue) applyAdminPhoto(e.newValue);
            }
            if (e.key === 'currentUser') {
                var el = document.getElementById('adminNameHeader');
                if (el && e.newValue) el.textContent = e.newValue;
            }
        });
    })();

    // ---- CRUD Admin: Student Profiles, AI Prefs, Lab Config ----
    (function() {
        var STUDENTS_KEY = 'lidm_students';
        var AI_PREFS_KEY = 'lidm_ai_prefs';
        var LAB_CONFIG_KEY = 'lidm_lab_config';

        var DEFAULT_STUDENTS = [
            { id:'s1', nama:'Ahmad Farhan', institusi:'Universitas Ekonomi Syariah Mandiri', role:'Financial Sharia Analyst' },
            { id:'s2', nama:'Siti Nurhaliza', institusi:'Universitas Islam Negeri', role:'Customer Service Officer' }
        ];
        var DEFAULT_AI_PREFS = [
            { id:'ai1', label:'Umpan Balik Real-time', desc:'Menerima saran instan saat melakukan input transaksi.', key:'toggle1', enabled:true },
            { id:'ai2', label:'Peringatan Kepatuhan Syariah', desc:'Notifikasi otomatis jika ada potensi pelanggaran akad.', key:'toggle2', enabled:true },
            { id:'ai3', label:'Mode Bimbingan Intensif', desc:'Langkah-demi-langkah mendalam untuk skenario kompleks.', key:'toggle3', enabled:false }
        ];
        var DEFAULT_LAB_CONFIG = {
            language: 'id',
            difficulty: 'intermediate'
        };

        function loadData(key, fallback) {
            var stored = localStorage.getItem(key);
            if (stored) { try { return JSON.parse(stored); } catch(e) {} }
            return JSON.parse(JSON.stringify(fallback));
        }
        function saveData(key, data) {
            localStorage.setItem(key, JSON.stringify(data));
        }

        // ---- Tab Switching ----
        document.querySelectorAll('.tab-btn-admin').forEach(function(btn) {
            btn.addEventListener('click', function() {
                document.querySelectorAll('.tab-btn-admin').forEach(function(b) {
                    b.classList.remove('bg-primary/10', 'text-primary', 'border-b-2', 'border-primary');
                    b.classList.add('text-on-surface-variant');
                });
                this.classList.add('bg-primary/10', 'text-primary', 'border-b-2', 'border-primary');
                this.classList.remove('text-on-surface-variant');
                var tab = this.getAttribute('data-tab');
                document.querySelectorAll('.tab-content-admin').forEach(function(c) {
                    c.classList.add('hidden');
                });
                var el = document.querySelector('.tab-content-admin[data-tab="' + tab + '"]');
                if (el) el.classList.remove('hidden');
                if (tab === 'students') renderStudents();
                if (tab === 'preferences') renderAIPrefs();
                if (tab === 'labconfig') renderLabConfig();
            });
        });

        // ---- Students CRUD ----
        function getStudents() { return loadData(STUDENTS_KEY, DEFAULT_STUDENTS); }
        function saveStudents(arr) { saveData(STUDENTS_KEY, arr); updateStats(); }

        window.renderStudents = function() {
            var list = document.getElementById('studentList');
            var data = getStudents();
            if (data.length === 0) {
                list.innerHTML = '<div class="text-center py-8 text-on-surface-variant text-sm">Belum ada data siswa.</div>';
                return;
            }
            var html = '';
            for (var i = 0; i < data.length; i++) {
                var s = data[i];
                var initial = s.nama ? s.nama.charAt(0).toUpperCase() : '?';
                html += '<div class="flex items-center justify-between p-4 rounded-lg bg-surface-container-high border border-outline-variant">';
                html += '<div class="flex items-center gap-4">';
                html += '<div class="w-10 h-10 rounded-full bg-primary/20 flex items-center justify-center font-bold text-primary text-sm">' + initial + '</div>';
                html += '<div><p class="font-bold text-ivory-text text-sm">' + (s.nama || '-') + '</p><p class="text-[11px] text-on-surface-variant">' + (s.institusi || '-') + ' &middot; ' + (s.role || '-') + '</p></div>';
                html += '</div>';
                html += '<div class="flex gap-2">';
                html += '<button onclick="window._adminEditStudent(\'' + s.id + '\')" class="p-2 rounded-lg bg-surface-variant/50 text-on-surface-variant hover:text-primary transition-colors"><span class="material-symbols-outlined text-sm">edit</span></button>';
                html += '<button onclick="window._adminDeleteStudent(\'' + s.id + '\')" class="p-2 rounded-lg bg-surface-variant/50 text-on-surface-variant hover:text-error transition-colors"><span class="material-symbols-outlined text-sm">delete</span></button>';
                html += '</div></div>';
            }
            list.innerHTML = html;
        };

        window._adminAddStudent = function() {
            document.getElementById('studentModalTitle').textContent = 'Tambah Siswa';
            document.getElementById('sName').value = '';
            document.getElementById('sInstitution').value = '';
            document.getElementById('sRole').value = 'Financial Sharia Analyst';
            document.getElementById('sEditId').value = '';
            document.getElementById('studentModalOverlay').classList.remove('hidden');
        };

        window._adminEditStudent = function(id) {
            var data = getStudents();
            var s = null;
            for (var i = 0; i < data.length; i++) { if (data[i].id === id) { s = data[i]; break; } }
            if (!s) return;
            document.getElementById('studentModalTitle').textContent = 'Edit Siswa';
            document.getElementById('sName').value = s.nama || '';
            document.getElementById('sInstitution').value = s.institusi || '';
            document.getElementById('sRole').value = s.role || 'Financial Sharia Analyst';
            document.getElementById('sEditId').value = id;
            document.getElementById('studentModalOverlay').classList.remove('hidden');
        };

        window._adminDeleteStudent = function(id) {
            if (!confirm('Hapus data siswa ini?')) return;
            var data = getStudents();
            for (var i = 0; i < data.length; i++) {
                if (data[i].id === id) { data.splice(i, 1); break; }
            }
            saveStudents(data);
            renderStudents();
        };

        window._adminSaveStudent = function() {
            var name = document.getElementById('sName').value.trim();
            var inst = document.getElementById('sInstitution').value.trim();
            var role = document.getElementById('sRole').value;
            var editId = document.getElementById('sEditId').value;
            if (!name) { alert('Nama siswa wajib diisi.'); return; }
            var data = getStudents();
            if (editId) {
                for (var i = 0; i < data.length; i++) { if (data[i].id === editId) { data[i].nama = name; data[i].institusi = inst; data[i].role = role; break; } }
            } else {
                var newId = 's' + Date.now();
                data.push({ id: newId, nama: name, institusi: inst, role: role });
            }
            saveStudents(data);
            window._adminCloseStudentModal();
            renderStudents();
        };

        window._adminCloseStudentModal = function() {
            document.getElementById('studentModalOverlay').classList.add('hidden');
        };
        document.getElementById('studentModalOverlay').addEventListener('click', function(e) {
            if (e.target === this) window._adminCloseStudentModal();
        });

        // ---- AI Preferences CRUD ----
        function getAIPrefs() { return loadData(AI_PREFS_KEY, DEFAULT_AI_PREFS); }
        function saveAIPrefs(arr) { saveData(AI_PREFS_KEY, arr); updateStats(); }

        window.renderAIPrefs = function() {
            var list = document.getElementById('aiPrefList');
            var data = getAIPrefs();
            var html = '';
            for (var i = 0; i < data.length; i++) {
                var p = data[i];
                html += '<div class="p-4 rounded-lg bg-surface-container-high border border-outline-variant">';
                html += '<div class="flex items-center justify-between">';
                html += '<div><p class="font-bold text-ivory-text text-sm">' + p.label + '</p><p class="text-[11px] text-on-surface-variant mt-1">' + p.desc + '</p></div>';
                html += '<label class="relative inline-flex items-center cursor-pointer"><input type="checkbox" class="sr-only peer" data-pref-id="' + p.id + '" ' + (p.enabled ? 'checked' : '') + ' onchange="window._adminTogglePref(\'' + p.id + '\')"><div class="w-11 h-6 bg-surface-variant rounded-full peer peer-checked:bg-primary after:content-[\'\'] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:after:translate-x-full"></div></label>';
                html += '</div></div>';
            }
            list.innerHTML = html;
        };

        window._adminTogglePref = function(id) {
            var data = getAIPrefs();
            for (var i = 0; i < data.length; i++) {
                if (data[i].id === id) { data[i].enabled = !data[i].enabled; break; }
            }
            saveAIPrefs(data);
        };

        window._adminSaveAIPrefs = function() {
            var data = getAIPrefs();
            for (var i = 0; i < data.length; i++) {
                var cb = document.querySelector('input[data-pref-id="' + data[i].id + '"]');
                if (cb) data[i].enabled = cb.checked;
            }
            saveAIPrefs(data);
            alert('Preferensi AI berhasil disimpan.');
        };

        // ---- Lab Config CRUD ----
        function getLabConfig() { return loadData(LAB_CONFIG_KEY, DEFAULT_LAB_CONFIG); }
        function saveLabConfig(cfg) { saveData(LAB_CONFIG_KEY, cfg); updateStats(); }

        window.renderLabConfig = function() {
            var list = document.getElementById('labConfigList');
            var cfg = getLabConfig();
            var html = '';
            html += '<div class="p-4 rounded-lg bg-surface-container-high border border-outline-variant">';
            html += '<label class="text-xs font-bold text-on-surface-variant mb-2 block">Bahasa Default</label>';
            html += '<select id="cfgLanguage" class="w-full bg-surface-container-lowest border border-outline-variant rounded-lg px-4 py-2.5 text-sm text-ivory-text focus:ring-1 focus:ring-primary">';
            html += '<option value="id"' + (cfg.language === 'id' ? ' selected' : '') + '>Bahasa Indonesia</option>';
            html += '<option value="en"' + (cfg.language === 'en' ? ' selected' : '') + '>English</option>';
            html += '</select></div>';
            html += '<div class="p-4 rounded-lg bg-surface-container-high border border-outline-variant">';
            html += '<label class="text-xs font-bold text-on-surface-variant mb-2 block">Tingkat Kesulitan Default</label>';
            html += '<select id="cfgDifficulty" class="w-full bg-surface-container-lowest border border-outline-variant rounded-lg px-4 py-2.5 text-sm text-ivory-text focus:ring-1 focus:ring-primary">';
            html += '<option value="beginner"' + (cfg.difficulty === 'beginner' ? ' selected' : '') + '>Beginner (Guided)</option>';
            html += '<option value="intermediate"' + (cfg.difficulty === 'intermediate' ? ' selected' : '') + '>Intermediate (Standard)</option>';
            html += '<option value="professional"' + (cfg.difficulty === 'professional' ? ' selected' : '') + '>Professional (Hardcore)</option>';
            html += '</select></div>';
            list.innerHTML = html;
        };

        window._adminSaveLabConfig = function() {
            var lang = document.getElementById('cfgLanguage').value;
            var diff = document.getElementById('cfgDifficulty').value;
            saveLabConfig({ language: lang, difficulty: diff });
            alert('Konfigurasi laboratorium berhasil disimpan.');
        };

        // ---- Reset ----
        window._adminResetDefaults = function() {
            if (!confirm('Reset semua data pengaturan ke default?')) return;
            localStorage.removeItem(STUDENTS_KEY);
            localStorage.removeItem(AI_PREFS_KEY);
            localStorage.removeItem(LAB_CONFIG_KEY);
            renderStudents();
            renderAIPrefs();
            renderLabConfig();
            updateStats();
            alert('Data telah direset ke default.');
        };

        // ---- Stats ----
        function updateStats() {
            var students = getStudents();
            var prefs = getAIPrefs();
            var cfg = getLabConfig();
            var sEl = document.getElementById('statTotalSiswa');
            var tEl = document.getElementById('statToggleAktif');
            var bEl = document.getElementById('statBahasa');
            var dEl = document.getElementById('statKesulitan');
            if (sEl) sEl.textContent = students.length;
            var aktif = 0;
            for (var i = 0; i < prefs.length; i++) { if (prefs[i].enabled) aktif++; }
            if (tEl) tEl.textContent = aktif + '/' + prefs.length;
            if (bEl) bEl.textContent = cfg.language === 'id' ? 'Indonesia' : 'English';
            if (dEl) dEl.textContent = cfg.difficulty.charAt(0).toUpperCase() + cfg.difficulty.slice(1);
        }

        // ---- Init ----
        document.addEventListener('DOMContentLoaded', function() {
            renderStudents();
            renderAIPrefs();
            renderLabConfig();
            updateStats();
        });

        window.addEventListener('storage', function(e) {
            if (e.key === STUDENTS_KEY || e.key === AI_PREFS_KEY || e.key === LAB_CONFIG_KEY) {
                var active = document.querySelector('.tab-content-admin:not(.hidden)');
                if (active) {
                    var tab = active.getAttribute('data-tab');
                    if (tab === 'students') renderStudents();
                    if (tab === 'preferences') renderAIPrefs();
                    if (tab === 'labconfig') renderLabConfig();
                }
                updateStats();
            }
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
        <a class="flex flex-col items-center gap-1 text-on-surface-variant" href="../Pusat_Kompetensi/Pusat_Kompetensi_Admin.php">
            <span class="material-symbols-outlined text-xl">military_tech</span>
            <span class="text-[10px]">Kompetensi</span>
        </a>
        <a class="flex flex-col items-center gap-1 text-on-surface-variant" href="../Riwayat/Riwayat_Admin.php">
            <span class="material-symbols-outlined text-xl">history</span>
            <span class="text-[10px]">Riwayat</span>
        </a>
        <a class="flex flex-col items-center gap-1 text-primary" href="#">
            <span class="material-symbols-outlined text-xl" style="font-variation-settings:'FILL' 1;">settings</span>
            <span class="text-[10px] font-bold">Setelan</span>
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
    <script src="../assets/js/help-admin.js"></script>
</body>

</html>