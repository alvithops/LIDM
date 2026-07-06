<!DOCTYPE html>

<html lang="id">
<script>document.documentElement.className=localStorage.getItem('appTheme')==='light'?'light':'dark'</script>

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title data-i18n="kompetensi.page_title">Pusat Kompetensi | SmartBank Syariah AI</title>
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
    <!-- Tailwind Configuration -->
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
        body {
            background-color: #121212;
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
            border: 1px solid rgba(255, 255, 255, 0.05);
        }

        .skill-node-active {
            box-shadow: 0 0 15px rgba(142, 213, 185, 0.3);
        }

        .progress-ring {
            transition: stroke-dashoffset 0.35s;
            transform: rotate(-90deg);
            transform-origin: 50% 50%;
        }

        .bento-grid {
            display: grid;
            grid-template-columns: repeat(12, 1fr);
            gap: 24px;
        }
    </style>
</head>

<body class="dark bg-surface">
    <!-- Desktop Side Navigation -->
    <aside
        class="hidden md:flex flex-col h-screen fixed left-0 top-0 w-[280px] bg-charcoal-surface border-r border-outline-variant z-50">
        <div class="p-8">
            <h1 class="font-headline-md text-headline-md font-bold text-primary tracking-tight" data-i18n="kompetensi.sidebar.brand">SmartBank Syariah AI
            </h1>
            <p class="text-on-surface-variant font-label-caps text-[10px] uppercase tracking-widest mt-1" data-i18n="kompetensi.sidebar.subtitle">Virtual
                Laboratory</p>
        </div>
        <nav class="flex-1 px-4 space-y-2">
            <a class="flex items-center gap-4 text-on-surface-variant hover:text-ivory-text px-6 py-3 transition-colors duration-200"
                href="../Dashboard_Siswa/Dashboard_siswa.php">
                <span class="material-symbols-outlined" data-icon="dashboard">dashboard</span>
                <span class="font-body-md text-body-md" data-i18n="kompetensi.sidebar.dashboard">Dashboard</span>
            </a>
            <a class="flex items-center gap-4 text-on-surface-variant hover:text-ivory-text px-6 py-3 transition-colors duration-200"
                href="../Simulasi/Simulasi_Siswa.php">
                <span class="material-symbols-outlined" data-icon="psychology">psychology</span>
                <span class="font-body-md text-body-md" data-i18n="kompetensi.sidebar.simulasi">Simulasi</span>
            </a>
            <a class="flex items-center gap-4 bg-primary/10 text-primary border-l-4 border-secondary-fixed-dim px-6 py-3"
                href="Pusat_Kompetensi_Siswa.php">
                <span class="material-symbols-outlined" data-icon="military_tech">military_tech</span>
                <span class="font-body-md text-body-md font-semibold" data-i18n="kompetensi.sidebar.kompetensi">Kompetensi</span>
            </a>
            <a class="flex items-center gap-4 text-on-surface-variant hover:text-ivory-text px-6 py-3 transition-colors duration-200"
                href="../Riwayat/Riwayat_Siswa.php">
                <span class="material-symbols-outlined" data-icon="history">history</span>
                <span class="font-body-md text-body-md" data-i18n="kompetensi.sidebar.riwayat">Riwayat</span>
            </a>
            <a class="flex items-center gap-4 text-on-surface-variant hover:text-ivory-text px-6 py-3 transition-colors duration-200"
                href="../Setting/Setting_Siswa.php">
                <span class="material-symbols-outlined" data-icon="settings">settings</span>
                <span class="font-body-md text-body-md" data-i18n="kompetensi.sidebar.setelan">Setelan</span>
            </a>
        </nav>
        <div class="p-6 border-t border-outline-variant mt-auto">
            <button onclick="window.location.href='../Simulasi/Simulasi_Siswa.php'"
                class="w-full bg-primary text-on-primary py-3 rounded-lg font-bold hover:opacity-90 transition-all flex items-center justify-center gap-2 cursor-pointer">
                <span class="material-symbols-outlined text-[20px]" data-icon="play_circle">play_circle</span>
                <span data-i18n="kompetensi.sidebar.mulai">Mulai Simulasi</span>
            </button>
            <div class="mt-4 space-y-1">
                <a class="flex items-center gap-4 text-on-surface-variant hover:text-ivory-text px-2 py-2 text-sm transition-colors cursor-pointer" onclick="window.openHelp()">
                    <span class="material-symbols-outlined text-sm">help</span>
                    <span data-i18n="kompetensi.sidebar.bantuan">Bantuan</span>
                </a>
            </div>
            <div class="mt-4 flex items-center gap-3 px-2">
                <img id="kompetensiProfileImg" alt="Student Profile Picture" class="w-10 h-10 rounded-full border-2 border-primary/20"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuB506D8GoHze3xdMDObpZvT9ulGK-MhfX9cBksOzebVq72s4geYnLrbTrdObWasEuy3ceVImYVeY3HCW8AQL7AfZYNaPMoeRShQd4sX-k8JKN915c_DyUtLy42Ovymhf2bh0bU8wGkmYj61t3MskPQOWYWeZBzR_p9B6A2tn08FAyE5tKFBMciCFHdqmWJoa9nBoQGyiOdZ-xRTRX2RMOv_xf_hC1-oJwd05ueCKxroJz0406GjAigG-w" />
                <div>
                    <p class="text-sm font-bold text-ivory-text" id="sidebarProfileName">Ahmad Farhan</p>
                    <p class="text-[10px] text-on-surface-variant font-label-caps" data-i18n="kompetensi.sidebar.profile_role">PRO ANALYST</p>
                </div>
            </div>
        </div>
    </aside>
    <!-- Main Canvas -->
    <main class="md:ml-[280px] min-h-screen pb-24 md:pb-12">
        <!-- Top Navigation -->
        <header
            class="fixed top-0 right-0 w-full md:w-[calc(100%-280px)] h-16 z-40 bg-charcoal-surface/80 backdrop-blur-md flex items-center justify-between px-gutter border-b border-outline-variant/30">
            <div class="flex items-center gap-4">
                <span class="material-symbols-outlined text-primary md:hidden" data-icon="menu">menu</span>
                <h2 class="font-headline-md text-headline-md font-bold text-primary hidden md:block" data-i18n="kompetensi.topbar.title">Pusat Kompetensi
                </h2>
                <h2 class="font-headline-md text-headline-md font-bold text-primary md:hidden" data-i18n="kompetensi.topbar.title_mobile">Kompetensi</h2>
            </div>
            <div class="flex items-center gap-6">
                <div
                    class="hidden sm:flex items-center gap-2 bg-surface-container-high px-3 py-1.5 rounded-full border border-outline-variant/50">
                    <span class="material-symbols-outlined text-secondary text-sm" data-icon="stars"
                        style="font-variation-settings: 'FILL' 1;">stars</span>
                    <span class="font-label-caps text-label-caps text-secondary tracking-wider" data-i18n="kompetensi.topbar.xp">2,450 XP</span>
                </div>
                <div class="flex items-center gap-3">
                    <span
                        class="material-symbols-outlined text-on-surface-variant hover:text-primary cursor-pointer transition-colors"
                        data-icon="notifications">notifications</span>
                    <span
                        class="material-symbols-outlined text-on-surface-variant hover:text-primary cursor-pointer transition-colors"
                        data-icon="account_circle">account_circle</span>
                </div>
            </div>
        </header>
        <div class="pt-24 px-6 md:px-12 max-w-7xl mx-auto">
            <!-- Hero Stats Bento -->
            <section class="grid grid-cols-1 lg:grid-cols-12 gap-6 mb-12">
                <!-- Main Radar/Stat Card -->
                <div class="lg:col-span-8 glass-card rounded-2xl p-6 md:p-8 relative overflow-hidden group">
                    <div id="heroStatsContent" class="relative z-10">
                        <!-- rendered by JS from localStorage lidm_hero_stats -->
                    </div>
                </div>
                <!-- Badges / Certificates Mini Grid -->
                <div id="certBadgeContainer" class="lg:col-span-4 flex flex-col gap-6">
                    <!-- rendered by JS from localStorage('lidm_certificates') -->
                </div>
            </section>
            <!-- Skill Tree / Grid Section -->
            <section class="mb-12">
                <div class="flex items-center justify-between mb-8">
                    <div>
                        <h3 class="font-headline-md text-headline-md text-ivory-text" data-i18n="kompetensi.skill_tree.title">Pohon Kompetensi Syariah</h3>
                        <p class="text-on-surface-variant text-sm" data-i18n="kompetensi.skill_tree.desc">Visualisasi penguasaan konsep perbankan syariah Anda.
                        </p>
                    </div>
                    <div class="hidden sm:flex gap-2">
                        <button
                            class="bg-surface-container-high px-4 py-2 rounded-lg text-xs font-bold border border-outline-variant" data-i18n="kompetensi.skill_tree.filter_all">Filter:
                            Semua</button>
                        <button
                            class="bg-primary/10 text-primary px-4 py-2 rounded-lg text-xs font-bold border border-primary/30" data-i18n="kompetensi.skill_tree.level_intermediate">Level:
                            Intermediate</button>
                    </div>
                </div>
                <div id="skillTreeContent" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    <!-- rendered by JS from localStorage lidm_skill_tree -->
                </div>
            </section>
            <!-- Learning Path Detail Section -->
            <section class="mb-12">
                <div
                    class="glass-card rounded-2xl p-6 md:p-8 flex flex-col md:flex-row items-center gap-6 md:gap-10 border border-primary/20">
                    <div class="w-full md:w-1/3 text-center">
                        <div class="relative inline-block">
                            <div
                                class="w-36 h-36 md:w-48 md:h-48 rounded-full border-8 border-primary/20 flex items-center justify-center">
                                <div class="text-center">
                                    <span class="text-3xl md:text-5xl font-bold text-primary">12</span>
                                    <p class="text-xs text-on-surface-variant font-label-caps" data-i18n="kompetensi.learning_path.materi_selesai">Materi Selesai</p>
                                </div>
                            </div>
                            <div
                                class="absolute -top-2 -right-2 bg-secondary text-on-secondary px-3 py-1 rounded-full text-xs font-bold shadow-lg">
                                LEVEL 4
                            </div>
                        </div>
                    </div>
                    <div class="flex-1">
                        <h3 class="font-headline-md text-headline-md text-ivory-text mb-2" data-i18n="kompetensi.learning_path.title">Target Berikutnya: Mudharabah
                            Expert</h3>
                        <p class="text-on-surface-variant mb-6" data-i18n="kompetensi.learning_path.desc">Selesaikan 3 skenario pembiayaan modal usaha UMKM untuk
                            membuka sertifikasi level menengah.</p>
                        <div class="space-y-4">
                            <div class="flex items-center gap-4">
                                <div
                                    class="w-10 h-10 rounded bg-primary/20 flex items-center justify-center text-primary">
                                    <span class="material-symbols-outlined" data-icon="check_circle">check_circle</span>
                                </div>
                                <div class="flex-1">
                                    <div class="flex justify-between mb-1">
                                        <span class="text-sm font-bold" data-i18n="kompetensi.learning_path.item1">Teori Bagi Hasil</span>
                                        <span class="text-xs text-primary font-bold" data-i18n="kompetensi.learning_path.item1_status">LULUS</span>
                                    </div>
                                    <div class="h-1 bg-surface-container-highest rounded-full overflow-hidden">
                                        <div class="w-full h-full bg-primary"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-center gap-4">
                                <div
                                    class="w-10 h-10 rounded bg-secondary/20 flex items-center justify-center text-secondary">
                                    <span class="material-symbols-outlined" data-icon="pending">pending</span>
                                </div>
                                <div class="flex-1">
                                    <div class="flex justify-between mb-1">
                                        <span class="text-sm font-bold" data-i18n="kompetensi.learning_path.item2">Simulasi Modal Usaha (AI Nasabah UMKM)</span>
                                        <span class="text-xs text-secondary font-bold" data-i18n="kompetensi.learning_path.item2_status">2/3 Selesai</span>
                                    </div>
                                    <div class="h-1 bg-surface-container-highest rounded-full overflow-hidden">
                                        <div class="w-2/3 h-full bg-secondary"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button
                            class="mt-8 bg-primary text-on-primary px-8 py-3 rounded-lg font-bold flex items-center gap-2 transition-transform hover:scale-105 active:scale-95" data-i18n="kompetensi.learning_path.btn" data-i18n-attr="html">
                            Lanjutkan Belajar <span class="material-symbols-outlined"
                                data-icon="arrow_forward">arrow_forward</span>
                        </button>
                    </div>
                </div>
            </section>
            <!-- Level Progression Widget -->
            <section class="mb-12">
                <div class="glass-card rounded-2xl p-6 md:p-8 border border-primary/10">
                    <div class="flex items-center gap-3 mb-8">
                        <div class="w-10 h-10 rounded-xl bg-primary/10 flex items-center justify-center">
                            <span class="material-symbols-outlined text-primary">stadia_controller</span>
                        </div>
                        <div>
                            <h3 class="font-headline-md text-[20px] text-ivory-text">Level Progresi Kompetensi</h3>
                            <p class="text-xs text-on-surface-variant mt-0.5">5 Level pembelajaran syariah bertahap</p>
                        </div>
                    </div>
                    <div id="levelGrid" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4">
                    </div>
                    <div class="mt-6 flex justify-center hidden" id="continueBtnWrapper">
                        <button id="continueBtn" onclick="window.openLevelModal(5)"
                            class="bg-primary text-on-primary px-8 py-3 rounded-lg font-bold flex items-center gap-2 transition-transform hover:scale-105 active:scale-95 text-sm">
                            Lanjutkan Belajar <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
                        </button>
                    </div>
                </div>
            </section>
        </div>
    </main>
    <!-- Mobile Bottom Navigation -->
    <nav
        class="md:hidden fixed bottom-0 left-0 w-full bg-charcoal-surface border-t border-outline-variant z-50 flex justify-around items-center h-20 px-4">
        <a class="flex flex-col items-center gap-1 text-on-surface-variant" href="../Dashboard_Siswa/Dashboard_siswa.php">
            <span class="material-symbols-outlined" data-icon="dashboard">dashboard</span>
            <span class="text-[10px] font-label-caps" data-i18n="kompetensi.bottomnav.home">Home</span>
        </a>
        <a class="flex flex-col items-center gap-1 text-on-surface-variant" href="../Simulasi/Simulasi_Siswa.php">
            <span class="material-symbols-outlined" data-icon="psychology">psychology</span>
            <span class="text-[10px] font-label-caps" data-i18n="kompetensi.bottomnav.simulasi">Simulasi</span>
        </a>
        <a class="flex flex-col items-center gap-1 text-primary" href="Pusat_Kompetensi_Siswa.php">
            <span class="material-symbols-outlined" data-icon="military_tech"
                style="font-variation-settings: 'FILL' 1;">military_tech</span>
            <span class="text-[10px] font-label-caps" data-i18n="kompetensi.bottomnav.skill">Skill</span>
        </a>
        <a class="flex flex-col items-center gap-1 text-on-surface-variant" href="../Riwayat/Riwayat_Siswa.php">
            <span class="material-symbols-outlined" data-icon="history">history</span>
            <span class="text-[10px] font-label-caps" data-i18n="kompetensi.bottomnav.riwayat">Riwayat</span>
        </a>
        <a class="flex flex-col items-center gap-1 text-on-surface-variant" href="../Setting/Setting_Siswa.php">
            <span class="material-symbols-outlined" data-icon="settings">settings</span>
            <span class="text-[10px] font-label-caps" data-i18n="kompetensi.bottomnav.setelan">Setelan</span>
        </a>
    </nav>
    <!-- AI Supervisor Feedback (Floating Element) -->
    <div class="fixed bottom-24 right-6 md:bottom-8 md:right-8 z-50 max-w-xs transition-all transform translate-y-2 opacity-0"
        id="ai-feedback">
        <div class="glass-card p-6 rounded-2xl shadow-2xl border border-primary/40 relative overflow-hidden">
            <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-primary to-secondary"></div>
            <div class="flex items-start gap-4">
                <div
                    class="w-10 h-10 rounded-full bg-sharia-green-deep flex items-center justify-center shrink-0 border border-primary/50">
                    <span class="material-symbols-outlined text-primary text-xl" data-icon="robot_2">robot_2</span>
                </div>
                <div>
                    <p class="text-[10px] font-label-caps text-primary tracking-widest mb-1" data-i18n="kompetensi.ai_feedback.title">AI SUPERVISOR</p>
                    <p class="text-sm text-ivory-text leading-relaxed" data-i18n="kompetensi.ai_feedback.text" data-i18n-attr="html">
                        "Performa kepatuhan Syariah Anda meningkat 12% minggu ini. Fokuslah pada akad <span
                            class="text-secondary font-bold">Mudharabah</span> untuk mencapai level Analyst."
                    </p>
                </div>
            </div>
            <button class="absolute top-2 right-2 text-on-surface-variant hover:text-white"
                onclick="document.getElementById('ai-feedback').classList.add('hidden')">
                <span class="material-symbols-outlined text-sm" data-icon="close">close</span>
            </button>
        </div>
    </div>
    <script>
        // Micro-interaction for the AI Supervisor appearance
        window.addEventListener('DOMContentLoaded', () => {
            setTimeout(() => {
                const feedback = document.getElementById('ai-feedback');
                feedback.classList.remove('opacity-0', 'translate-y-2');
                feedback.classList.add('opacity-100', 'translate-y-0');
            }, 2000);
        });

        // Toggle mobile menu logic could go here
    </script>
    <script>
        (function () {
            const appRoutes = {
                login: '../Login/login.php',
                student: {
                    dashboard: '../Dashboard_Siswa/Dashboard_siswa.php',
                    simulasi: '../Simulasi/Simulasi_Siswa.php',
                    kompetensi: 'Pusat_Kompetensi_Siswa.php',
                    riwayat: '../Riwayat/Riwayat_Siswa.php',
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
                var userName = localStorage.getItem('currentUser');
                var nameEl = document.getElementById('sidebarProfileName');
                if (userName && nameEl) nameEl.textContent = userName;
                var savedPhoto = localStorage.getItem('profilePhoto');
                if (savedPhoto) {
                    var img = document.getElementById('kompetensiProfileImg');
                    if (img) img.src = savedPhoto;
                }
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
    <script>
    (function() {
        var SKILL_KEY = 'lidm_skill_tree';
        var HERO_KEY = 'lidm_hero_stats';

        var DEFAULT_SKILLS = [
            { id:'skill_1', title:'Murabahah', description:'Transaksi jual beli dengan margin keuntungan yang disepakati antara bank dan nasabah.', icon:'handshake', color:'primary', status:'Mahir', filledDots:3, locked:false },
            { id:'skill_2', title:'Musyarakah', description:'Kerja sama antara bank dan nasabah dengan modal bersama dan bagi hasil sesuai kesepakatan.', icon:'groups', color:'primary', status:'Mahir', filledDots:3, locked:false },
            { id:'skill_3', title:'Mudharabah', description:'Kerja sama usaha antara pemilik dana dan pengelola dana dengan bagi hasil.', icon:'trending_up', color:'secondary', status:'Berjalan', filledDots:2, locked:false },
            { id:'skill_4', title:'Wadiah', description:'Akad penitipan barang atau dana yang harus dijaga dan dikembalikan kapan saja.', icon:'account_balance_wallet', color:'primary', status:'Berjalan', filledDots:2, locked:false },
            { id:'skill_5', title:'Ijarah', description:'Akad pemindahan hak guna atas barang atau jasa dalam batasan waktu tertentu.', icon:'contract', color:'secondary', status:'Pemula', filledDots:1, locked:false },
            { id:'skill_6', title:'AML & Compliance', description:'Pencegahan pencucian uang dan kepatuhan terhadap regulasi perbankan syariah.', icon:'gavel', color:'warning-amber', status:'Mahir', filledDots:3, locked:false },
            { id:'skill_7', title:'Auditor Syariah', description:'Pemeriksaan kepatuhan syariah dalam operasional perbankan dan produk keuangan.', icon:'fact_check', color:'primary', status:'Berjalan', filledDots:2, locked:false },
            { id:'skill_8', title:'Financing Analyst', description:'Analisis kelayakan pembiayaan dan pengelolaan risiko kredit nasabah.', icon:'query_stats', color:'secondary', status:'Mahir', filledDots:4, locked:false }
        ];

        var DEFAULT_HERO = {
            complianceIndex: 88,
            skills: [
                { name:'Kepatuhan Syariah', score:90, color:'primary', description:'Kemampuan mengidentifikasi akad & larangan riba.' },
                { name:'Komunikasi', score:75, color:'secondary', description:'Efektivitas dalam melayani nasabah virtual.' },
                { name:'Ketelitian', score:85, color:'tertiary', description:'Akurasi data input dan deteksi fraud.' }
            ]
        };

        function loadData(key, fallback) {
            var stored = localStorage.getItem(key);
            if (stored) {
                try { return JSON.parse(stored); } catch(e) { return JSON.parse(JSON.stringify(fallback)); }
            }
            return JSON.parse(JSON.stringify(fallback));
        }

        function renderHeroStats() {
            var el = document.getElementById('heroStatsContent');
            if (!el) return;
            var data = loadData(HERO_KEY, DEFAULT_HERO);
            var ci = data.complianceIndex || 0;
            var skills = data.skills || [];
            var html = '<div class="flex justify-between items-start mb-8">' +
                '<div><p class="font-label-caps text-label-caps text-primary mb-1">PROFIL KEMAMPUAN</p><h3 class="font-headline-md text-headline-md text-ivory-text">Analisis Holistik</h3></div>' +
                '<div class="text-right"><span class="text-4xl font-bold text-primary">' + ci + '<span class="text-lg text-on-surface-variant">/100</span></span><p class="text-[10px] text-on-surface-variant font-label-caps mt-1">COMPLIANCE INDEX</p></div>' +
                '</div><div class="grid grid-cols-1 md:grid-cols-3 gap-8">';
            for (var i = 0; i < skills.length; i++) {
                var s = skills[i];
                var circumference = 282.7;
                var offset = circumference - (s.score / 100) * circumference;
                html += '<div class="flex flex-col items-center text-center">' +
                    '<div class="relative w-24 h-24 mb-4"><svg class="w-full h-full" viewbox="0 0 100 100">' +
                    '<circle cx="50" cy="50" fill="none" r="45" stroke="rgba(255,255,255,0.05)" stroke-width="8"></circle>' +
                    '<circle class="text-' + s.color + ' progress-ring" cx="50" cy="50" fill="none" r="45" stroke="currentColor" stroke-dasharray="' + circumference + '" stroke-dashoffset="' + offset + '" stroke-width="8"></circle></svg>' +
                    '<div class="absolute inset-0 flex items-center justify-center font-bold text-lg">' + s.score + '%</div></div>' +
                    '<h4 class="font-bold text-ivory-text mb-1">' + s.name + '</h4>' +
                    '<p class="text-xs text-on-surface-variant px-4">' + s.description + '</p></div>';
            }
            html += '</div>';
            el.innerHTML = html;
        }

        function renderSkillTree() {
            var el = document.getElementById('skillTreeContent');
            if (!el) return;
            var all = loadData(SKILL_KEY, DEFAULT_SKILLS);
            var colorMap = { primary:'primary', secondary:'secondary', tertiary:'tertiary', 'warning-amber':'warning-amber' };
            var html = '';
            for (var i = 0; i < all.length; i++) {
                var sk = all[i];
                var c = colorMap[sk.color] || 'primary';
                var dotHtml = '';
                var maxDots = 4;
                for (var d = 0; d < maxDots; d++) {
                    var fillClass = d < sk.filledDots ? 'bg-' + c : 'bg-on-surface-variant/30';
                    dotHtml += '<span class="w-2 h-2 rounded-full ' + fillClass + '"></span>';
                }
                var opacity = sk.locked ? 'opacity-60' : '';
                var borderClass = sk.locked ? 'border-on-surface-variant/20' : 'border-' + c;
                var statusBadge = sk.locked
                    ? '<span class="material-symbols-outlined text-sm" data-icon="lock">lock</span>'
                    : '<span class="font-label-caps text-[10px] text-' + c + ' bg-' + c + '/10 px-2 py-0.5 rounded">' + (sk.status || '').toUpperCase() + '</span>';
                var bgClass = sk.locked ? '' : 'border-b-2 ' + borderClass;
                var iconBg = sk.locked ? 'bg-surface-container-high text-on-surface-variant' : 'bg-' + c + '/10 text-' + c;

                html += '<div class="glass-card rounded-2xl p-6 ' + bgClass + ' skill-node-active transition-all hover:scale-[1.02] ' + opacity + '">' +
                    '<div class="w-12 h-12 rounded-xl ' + iconBg + ' flex items-center justify-center mb-4">' +
                    '<span class="material-symbols-outlined" data-icon="' + sk.icon + '">' + sk.icon + '</span></div>' +
                    '<h4 class="font-bold text-ivory-text text-lg">' + sk.title + '</h4>' +
                    '<p class="text-xs text-on-surface-variant mt-1 mb-4">' + sk.description + '</p>' +
                    '<div class="flex items-center justify-between"><div class="flex gap-1">' + dotHtml + '</div>' + statusBadge + '</div></div>';
            }
            el.innerHTML = html;
        }

        document.addEventListener('DOMContentLoaded', function() {
            renderHeroStats();
            renderSkillTree();
        });

        window.addEventListener('storage', function(e) {
            if (e.key === HERO_KEY) renderHeroStats();
            if (e.key === SKILL_KEY) renderSkillTree();
        });
    })();
    </script>
    <!-- Certificate Modal -->
    <style>
        .cert-border { background: linear-gradient(135deg, #8ed5b9, #e6c183, #8ed5b9); padding: 3px; border-radius: 16px; }
        .cert-inner { background: #0d0d0d; border-radius: 13px; position: relative; overflow: hidden; }
        .cert-inner::before { content: ''; position: absolute; inset: 0; background: repeating-conic-gradient(from 0deg, rgba(142,213,185,0.03) 0deg 90deg, transparent 90deg 180deg) 0 0 / 40px 40px; pointer-events: none; }
        .cert-corner { position: absolute; width: 60px; height: 60px; border-color: rgba(142,213,185,0.25); }
        .cert-corner-tl { top: 12px; left: 12px; border-top: 2px solid; border-left: 2px solid; border-radius: 4px 0 0 0; }
        .cert-corner-tr { top: 12px; right: 12px; border-top: 2px solid; border-right: 2px solid; border-radius: 0 4px 0 0; }
        .cert-corner-bl { bottom: 12px; left: 12px; border-bottom: 2px solid; border-left: 2px solid; border-radius: 0 0 0 4px; }
        .cert-corner-br { bottom: 12px; right: 12px; border-bottom: 2px solid; border-right: 2px solid; border-radius: 0 0 4px 0; }
        .cert-stamp { width: 90px; height: 90px; border-radius: 50%; border: 3px solid rgba(230,193,131,0.5); display: flex; align-items: center; justify-content: center; font-size: 9px; font-weight: 700; color: #e6c183; text-align: center; line-height: 1.2; transform: rotate(-15deg); position: relative; }
        .cert-stamp::after { content: ''; position: absolute; inset: -6px; border-radius: 50%; border: 1.5px dashed rgba(230,193,131,0.3); }
        .cert-glow { box-shadow: 0 0 40px rgba(142,213,185,0.1), 0 0 80px rgba(142,213,185,0.05); }
        .cert-divider { height: 1px; background: linear-gradient(to right, transparent, rgba(142,213,185,0.3), rgba(230,193,131,0.3), transparent); }
        
        @keyframes certFadeIn { from { opacity: 0; transform: scale(0.95); } to { opacity: 1; transform: scale(1); } }
        .cert-animate { animation: certFadeIn 0.4s ease forwards; }
    </style>
    <div id="certModalOverlay" class="fixed inset-0 z-[110] hidden items-center justify-center p-4" style="backdrop-filter:blur(12px);-webkit-backdrop-filter:blur(12px);background:rgba(0,0,0,0.75);">
        <div id="certModalContent" class="cert-animate w-full max-w-[560px]">
            <!-- rendered by JS -->
        </div>
    </div>

    <script>
    (function() {
        var CERTS_KEY = 'lidm_certificates';
        var container = document.getElementById('certBadgeContainer');
        var overlay = document.getElementById('certModalOverlay');
        var content = document.getElementById('certModalContent');

        var DEFAULT_CERTS = [
            { id: 'cert_1', title: 'Sertifikasi Akad Murabahah', description: 'Lulus simulasi pembiayaan motor & rumah dengan skor 95%.', icon: 'verified', color: 'primary', type: 'certificate', level: 'Ahli', status: 'Terverifikasi', score: 95, visible: true },
            { id: 'cert_2', title: 'Fraud Detective I', description: 'Mendeteksi 5 kasus identitas palsu berturut-turut.', icon: 'security', color: 'secondary', type: 'badge', level: 'Lanjutan', status: 'Lulus', score: 88, visible: true }
        ];

        function loadCerts() {
            var stored = localStorage.getItem(CERTS_KEY);
            if (stored) {
                try { return JSON.parse(stored); } catch (e) { return JSON.parse(JSON.stringify(DEFAULT_CERTS)); }
            }
            return JSON.parse(JSON.stringify(DEFAULT_CERTS));
        }

        function renderCertBadges() {
            if (!container) return;
            var all = loadCerts();
            var visible = all.filter(function(c) { return c.visible; });
            if (visible.length === 0) {
                container.innerHTML = '<div class="glass-card rounded-2xl p-6 text-center"><p class="text-xs text-on-surface-variant">Belum ada sertifikat tersedia.</p></div>';
                return;
            }
            var colorMap = { primary: { border: 'border-primary', text: 'text-primary', bg: 'bg-primary/20' }, secondary: { border: 'border-secondary', text: 'text-secondary', bg: 'bg-secondary/20' }, tertiary: { border: 'border-tertiary', text: 'text-tertiary', bg: 'bg-tertiary/20' } };
            container.innerHTML = visible.map(function(c) {
                var cl = colorMap[c.color] || colorMap.primary;
                return '<div class="glass-card rounded-2xl p-6 flex-1 border-l-4 ' + cl.border + '">' +
                    '<div class="flex items-center justify-between mb-4">' +
                        '<span class="material-symbols-outlined text-3xl ' + cl.text + '" style="font-variation-settings: \'FILL\' 1;">' + c.icon + '</span>' +
                        '<span class="' + cl.bg + ' ' + cl.text + ' text-[10px] px-2 py-0.5 rounded font-bold uppercase">' + c.status + '</span>' +
                    '</div>' +
                    '<h4 class="font-bold text-ivory-text">' + c.title + '</h4>' +
                    '<p class="text-xs text-on-surface-variant mt-1">' + c.description + '</p>' +
                    '<button onclick="window.viewCert(\'' + c.id + '\')" class="mt-4 ' + cl.text + ' text-xs font-bold flex items-center gap-1 hover:underline">' +
                        'Lihat Sertifikat <span class="material-symbols-outlined text-sm">open_in_new</span>' +
                    '</button>' +
                '</div>';
            }).join('');
        }

        window.viewCert = function(id) {
            var all = loadCerts();
            var c = all.find(function(x) { return x.id === id; });
            if (!c) return;
            var studentName = 'Mahasiswa';
            try {
                var students = JSON.parse(localStorage.getItem('lidm_students'));
                if (students && students[0] && students[0].nama) studentName = students[0].nama;
            } catch (e) {}
            var date = new Date().toLocaleDateString('id-ID', { year: 'numeric', month: 'long', day: 'numeric' });
            var certNum = 'CERT-' + c.id.replace('cert_', '') + '-' + date.replace(/ /g, '').replace(/\//g, '');
            var cl = c.color === 'secondary' ? 'rgba(255,183,135,0.5), rgba(142,213,185,0.3)' : 'rgba(142,213,185,0.5), rgba(230,193,131,0.3)';

            content.innerHTML = '<div class="cert-border" style="background:linear-gradient(135deg, ' + cl + ');">' +
                '<div class="cert-inner p-8 md:p-10 text-center cert-glow">' +
                    '<div class="cert-corner cert-corner-tl"></div><div class="cert-corner cert-corner-tr"></div>' +
                    '<div class="cert-corner cert-corner-bl"></div><div class="cert-corner cert-corner-br"></div>' +
                    '<div class="mb-4"><span class="material-symbols-outlined text-5xl" style="color:' + (c.color === 'secondary' ? '#ffb787' : '#8ed5b9') + ';font-variation-settings:\'FILL\' 1;">' + c.icon + '</span></div>' +
                    '<h2 class="text-2xl font-bold text-ivory-text mb-1">SERTIFIKAT</h2>' +
                    '<div class="cert-divider my-4"></div>' +
                    '<p class="text-sm text-on-surface-variant mb-2">Diberikan kepada</p>' +
                    '<p class="text-xl font-bold text-ivory-text mb-1">' + studentName + '</p>' +
                    '<div class="cert-divider my-4"></div>' +
                    '<p class="text-sm text-on-surface-variant mb-1">Telah menyelesaikan</p>' +
                    '<p class="text-lg font-bold" style="color:' + (c.color === 'secondary' ? '#ffb787' : '#8ed5b9') + ';">' + c.title + '</p>' +
                    '<p class="text-xs text-on-surface-variant mt-2">Level: ' + c.level + ' &middot; Skor: ' + c.score + '%</p>' +
                    '<div class="cert-divider my-4"></div>' +
                    '<div class="flex justify-between items-center text-[10px] text-on-surface-variant">' +
                        '<span>Tanggal: ' + date + '</span>' +
                        '<span>No: ' + certNum + '</span>' +
                    '</div>' +
                    '<div class="mt-6 flex justify-center">' +
                        '<div class="cert-stamp">VERIFIED</div>' +
                    '</div>' +
                '</div></div>' +
                '<button onclick="window.closeCertView()" class="mt-4 w-full py-2 bg-primary/10 text-primary text-xs font-bold rounded-lg hover:bg-primary/20 transition-all border border-primary/30">Tutup</button>';
            overlay.classList.remove('hidden');
            overlay.classList.add('flex');
        };

        window.closeCertView = function() {
            overlay.classList.add('hidden');
            overlay.classList.remove('flex');
        };

        document.addEventListener('DOMContentLoaded', function() {
            renderCertBadges();
            overlay.addEventListener('click', function(e) {
                if (e.target === e.currentTarget) closeCertView();
            });
        });
    })();
    </script>

    <!-- Level Modal -->
    <div id="levelModalOverlay" class="fixed inset-0 z-[100] hidden" style="backdrop-filter:blur(8px);-webkit-backdrop-filter:blur(8px);background:rgba(0,0,0,0.7);">
        <div class="min-h-full flex items-center justify-center p-4">
            <div class="glass-card rounded-2xl w-full max-w-2xl max-h-[90vh] overflow-y-auto p-6 md:p-8" id="levelModalContent">
            </div>
        </div>
    </div>

    <div id="langToggle" style="position:fixed;bottom:72px;right:16px;z-index:9999;display:flex;gap:4px;background:var(--surface-container,#1e1e2e);padding:4px;border-radius:8px;border:1px solid var(--outline-variant,#3e3e4e);box-shadow:0 4px 12px rgba(0,0,0,0.3);">
        <button onclick="if(window.appI18n){window.appI18n.setLanguage('id')}" id="langBtnId" style="padding:6px 12px;border-radius:6px;font-size:11px;font-weight:700;cursor:pointer;border:none;background:var(--primary,#bb86fc);color:#fff;">ID</button>
        <button onclick="if(window.appI18n){window.appI18n.setLanguage('en')}" id="langBtnEn" style="padding:6px 12px;border-radius:6px;font-size:11px;font-weight:700;cursor:pointer;border:none;background:transparent;color:var(--on-surface,#e0e0e0);">EN</button>
    </div>
    <script>(function(){var lang=localStorage.getItem('appLanguage')||'id';var bId=document.getElementById('langBtnId');var bEn=document.getElementById('langBtnEn');if(lang==='en'){bId.style.background='transparent';bId.style.color='var(--on-surface,#e0e0e0)';bEn.style.background='var(--primary,#bb86fc)';bEn.style.color='#fff';}else{bEn.style.background='transparent';bEn.style.color='var(--on-surface,#e0e0e0)';bId.style.background='var(--primary,#bb86fc)';bId.style.color='#fff';}})();</script>
    <script>
    (function(){
        var DEFAULT_LEVELS = [
            { id:1, title:'Akad Mudharabah', desc:'Bagi hasil & usaha bersama', color:'primary', score:95, status:'lulus', progress:100 },
            { id:2, title:'Akad Murabahah', desc:'Jual beli & margin', color:'secondary', score:88, status:'lulus', progress:100 },
            { id:3, title:'Akad Musyarakah', desc:'Kerja sama modal', color:'tertiary', score:78, status:'lulus', progress:80 },
            { id:4, title:'Akad Wadiah', desc:'Titipan & penitipan dana', color:'warning-amber', score:45, status:'proses', progress:50 },
            { id:5, title:'Kepatuhan Syariah', desc:'Regulasi & audit syariah', color:'', status:'terkunci', progress:0 }
        ];

        function loadLevelData() {
            var stored = localStorage.getItem('lidm_level_data');
            if (stored) { try { return JSON.parse(stored); } catch(e) { return JSON.parse(JSON.stringify(DEFAULT_LEVELS)); } }
            return JSON.parse(JSON.stringify(DEFAULT_LEVELS));
        }
        var levelData = loadLevelData();

        var levelContent = {
            1: {
                pembahasan: '<p class="mb-4"><strong>Akad Mudharabah</strong> adalah akad kerja sama usaha antara pemilik dana (shahibul mal) dan pengelola dana (mudharib). Keuntungan dibagi sesuai nisbah yang disepakati, sedangkan kerugian ditanggung pemilik dana jika bukan akibat kelalaian mudharib.</p><p class="mb-4">Dalam perbankan syariah, Mudharabah diterapkan pada produk tabungan dan investasi. Bank bertindak sebagai mudharib yang mengelola dana nasabah (shahibul mal) untuk kegiatan usaha yang halal dan produktif.</p><p class="mb-4">Rukun Mudharabah: 1) Pemilik dana, 2) Pengelola dana, 3) Modal, 4) Usaha, 5) Nisbah bagi hasil, 6) Sighat (ijab kabul).</p>',
                soal: [
                    { q:'Dalam akad Mudharabah, jika terjadi kerugian usaha dan bukan karena kelalaian mudharib, maka kerugian ditanggung oleh...', o:['Pemilik dana','Pengelola dana','Keduanya','Pihak ketiga'], a:0 },
                    { q:'Nisbah dalam Mudharabah berarti...', o:['Jumlah modal','Porsi bagi hasil','Jangka waktu','Nama akad'], a:1 },
                    { q:'Mudharib dalam akad Mudharabah adalah pihak yang...', o:['Menyediakan modal','Mengelola usaha','Menjadi penjamin','Mengawasi transaksi'], a:1 }
                ]
            },
            2: {
                pembahasan: '<p class="mb-4"><strong>Akad Murabahah</strong> adalah akad jual beli barang dengan harga perolehan ditambah margin keuntungan yang disepakati. Penjual harus mengungkapkan harga perolehan barang kepada pembeli.</p><p class="mb-4">Dalam perbankan syariah, Murabahah banyak digunakan untuk pembiayaan kepemilikan rumah (KPR Syariah), kendaraan, dan modal usaha. Bank membeli barang yang diinginkan nasabah, kemudian menjualnya kembali dengan harga pokok plus margin.</p><p class="mb-4">Ketentuan penting: 1) Barang harus jelas spesifikasinya, 2) Harga perolehan harus transparan, 3) Margin keuntungan disepakati di awal, 4) Pembayaran bisa tunai atau angsuran.</p>',
                soal: [
                    { q:'Ciri khas akad Murabahah adalah penjual harus...', o:['Merahasiakan harga pokok','Mengungkapkan harga perolehan','Menentukan harga sepihak','Memberi diskon besar'], a:1 },
                    { q:'Murabahah termasuk jenis akad...', o:['Titipan','Kerja sama','Jual beli','Sewa'], a:2 },
                    { q:'Dalam KPR Syariah, bank membeli rumah kemudian menjual ke nasabah dengan harga...', o:['Harga pasar','Harga pokok + margin','Harga lelang','Harga negotiable'], a:1 }
                ]
            },
            3: {
                pembahasan: '<p class="mb-4"><strong>Akad Musyarakah</strong> adalah akad kerja sama antara dua pihak atau lebih untuk suatu usaha tertentu, di mana masing-masing pihak memberikan kontribusi modal dengan ketentuan keuntungan dibagi sesuai kesepakatan dan kerugian sesuai porsi modal.</p><p class="mb-4">Berbeda dengan Mudharabah, dalam Musyarakah semua pihak aktif berkontribusi dalam pengelolaan usaha. Musyarakah sering digunakan untuk pembiayaan proyek besar dan usaha produktif.</p><p class="mb-4">Jenis Musyarakah: 1) Syirkah al-<em>inan</em> (proporsi modal berbeda), 2) Syirkah al-<em>mufawadhah</em> (modal dan bagi hasil sama), 3) Syirkah al-<em>wujuh</em> (tanpa modal, berdasarkan reputasi).</p>',
                soal: [
                    { q:'Dalam Musyarakah, pembagian kerugian dilakukan sesuai...', o:['Kesepakatan bersama','Porsi modal masing-masing','Proporsi keuntungan','Keputusan manager'], a:1 },
                    { q:'Perbedaan utama Mudharabah dan Musyarakah adalah...', o:['Jumlah modal','Pengelolaan usaha (1 pihak vs bersama)','Jangka waktu','Nisbah bagi hasil'], a:1 },
                    { q:'Syirkah al-inan adalah musyarakah di mana...', o:['Modal dan bagi hasil sama','Proporsi modal bisa berbeda','Tanpa modal','Hanya satu pihak aktif'], a:1 }
                ]
            },
            4: {
                pembahasan: '<p class="mb-4"><strong>Akad Wadiah</strong> adalah akad penitipan barang atau dana dari satu pihak kepada pihak lain untuk dijaga dan dikembalikan kapan saja. Dalam perbankan syariah, Wadiah diterapkan pada produk tabungan dan giro.</p><p class="mb-4">Wadiah terbagi dua: 1) Wadiah <em>yad al-amanah</em> (titipan murni, bank tidak bertanggung jawab atas kerusakan di luar kelalaian), 2) Wadiah <em>yad ad-dhamanah</em> (bank boleh menggunakan dana titipan dengan izin penitip dan bertanggung jawab penuh).</p><p class="mb-4">Bank syariah umumnya menggunakan Wadiah yad ad-dhamanah untuk produk tabungan. Bank boleh memberikan bonus (bukan bunga) secara sukarela kepada nasabah.</p>',
                soal: [
                    { q:'Wadiah yad ad-dhamanah berarti bank...', o:['Tidak boleh menggunakan dana','Boleh menggunakan dana dan bertanggung jawab','Hanya menjaga dana','Menginvestasikan dana tanpa izin'], a:1 },
                    { q:'Bonus dari bank kepada nasabah Wadiah bersifat...', o:['Wajib','Sukarela','Bunga','Denda'], a:1 },
                    { q:'Tabungan syariah umumnya menggunakan akad...', o:['Murabahah','Musyarakah','Wadiah','Ijarah'], a:2 }
                ]
            },
            5: {
                pembahasan: '<p class="mb-4"><strong>Kepatuhan Syariah (Sharia Compliance)</strong> adalah kepatuhan bank syariah terhadap prinsip-prinsip Islam dalam seluruh operasionalnya. Ini mencakup kepatuhan terhadap fatwa DSN-MUI, peraturan OJK, dan standar AAOIFI.</p><p class="mb-4">Aspek kepatuhan syariah meliputi: 1) Kepatuhan akad (tidak mengandung riba, gharar, maysir), 2) Kepatuhan operasional (SOP sesuai syariah), 3) Kepatuhan pelaporan (transparansi), 4) Pengawasan DPS (Dewan Pengawas Syariah).</p><p class="mb-4">Pelanggaran syariah dapat berupa: penyebutan bunga, akad fiktif, denda berlebihan, dan investasi tidak halal. Setiap bank syariah wajib memiliki DPS dan laporan kepatuhan syariah berkala.</p>',
                soal: [
                    { q:'DPS singkatan dari...', o:['Dana Pembiayaan Syariah','Dewan Pengawas Syariah','Dividen Produk Syariah','Daftar Produk Syariah'], a:1 },
                    { q:'Berikut yang termasuk pelanggaran syariah adalah...', o:['Bagi hasil sesuai nisbah','Menyebut margin sebagai bunga','Transparansi harga','Akad tertulis'], a:1 },
                    { q:'OJK mengatur kepatuhan syariah melalui...', o:['Fatwa MUI','POJK tentang Bank Syariah','Standar AAOIFI','Semua benar'], a:3 }
                ]
            }
        };

        var unlockedScores = JSON.parse(localStorage.getItem('unlockedScores') || '{"1":95,"2":88,"3":78,"4":45}');

        function saveScores() { localStorage.setItem('unlockedScores', JSON.stringify(unlockedScores)); }

        function renderLevels() {
            var grid = document.getElementById('levelGrid');
            var html = '';
            for (var i = 0; i < levelData.length; i++) {
                var lv = levelData[i];
                var data = unlockedScores[lv.id];

                var isUnlocked = false;
                if (lv.id <= 4) isUnlocked = true;
                if (lv.id === 5) isUnlocked = (unlockedScores['4'] || 0) >= 80;

                var showScore = (lv.id === 5 && isUnlocked) ? (unlockedScores['5'] || 0) : (data || 0);
                var statusText = '', statusIcon = '', borderColor = '', bgGrad = '', opacity = '', textColor = 'text-ivory-text';
                var labelColor = 'text-on-surface-variant', badgeBg = 'bg-surface-container/50', levelColor = 'text-on-surface-variant';

                if (lv.id === 5 && !isUnlocked) {
                    statusText = 'Terkunci'; statusIcon = 'lock';
                    opacity = 'opacity-70';
                    borderColor = 'border-outline-variant/30';
                    textColor = 'text-on-surface-variant';
                    labelColor = 'text-on-surface-variant';
                    lv.color = '';
                } else if (data && data >= 70) {
                    statusText = 'LULUS'; statusIcon = 'check_circle';
                    borderColor = 'border-' + (lv.color || 'primary') + '/20 hover:border-' + (lv.color || 'primary') + '/50';
                    bgGrad = 'bg-gradient-to-b from-' + (lv.color || 'primary') + '/10 to-surface-container-low';
                    levelColor = 'text-' + (lv.color || 'primary');
                    labelColor = 'text-' + (lv.color || 'primary');
                    badgeBg = 'bg-' + (lv.color || 'primary') + '/15';
                } else {
                    statusText = 'In Progress'; statusIcon = 'pending';
                    borderColor = 'border-' + (lv.color || 'warning-amber') + '/20 hover:border-' + (lv.color || 'warning-amber') + '/50';
                    bgGrad = 'bg-gradient-to-b from-' + (lv.color || 'warning-amber') + '/10 to-surface-container-low';
                    levelColor = 'text-' + (lv.color || 'warning-amber');
                    labelColor = 'text-' + (lv.color || 'warning-amber');
                    badgeBg = 'bg-' + (lv.color || 'warning-amber') + '/15';
                }

                var accentColor = lv.color || 'outline-variant';
                var barPct = showScore;
                if (barPct > 100) barPct = 100;
                if (lv.id === 5 && !isUnlocked) barPct = 0;
                if (lv.id === 5 && isUnlocked && !data) barPct = 0;

                html += '<div onclick="window.openLevelModal(' + lv.id + ')" class="relative ' + bgGrad + ' rounded-xl p-5 ' + borderColor + ' group hover:scale-[1.03] transition-all cursor-pointer ' + opacity + '">';
                html += '<div class="absolute top-0 right-0 w-16 h-16 bg-' + (lv.color || 'surface') + '/5 rounded-bl-3xl -z-0"></div>';
                html += '<div class="relative z-10">';
                html += '<div class="flex items-center justify-between mb-3">';
                html += '<span class="text-[10px] font-bold ' + labelColor + ' ' + badgeBg + ' px-2 py-0.5 rounded-full">LEVEL ' + lv.id + '</span>';
                html += '<span class="material-symbols-outlined text-[18px] ' + levelColor + '">' + statusIcon + '</span>';
                html += '</div>';
                html += '<p class="text-sm font-bold ' + textColor + ' mb-1">' + lv.title + '</p>';
                html += '<p class="text-[10px] text-on-surface-variant mb-3">' + lv.desc + '</p>';
                html += '<div class="h-1.5 bg-surface-container-highest rounded-full overflow-hidden mb-2"><div class="w-full h-full rounded-full bg-' + (lv.color || 'outline-variant') + '" style="width:' + barPct + '%"></div></div>';
                html += '<div class="flex justify-between items-center">';
                if (lv.id === 5 && !isUnlocked) {
                    html += '<span class="text-[11px] text-on-surface-variant">Syarat: L4 &ge; 80</span>';
                } else if (lv.id === 5 && !data) {
                    html += '<span class="text-[11px] text-on-surface-variant">&mdash;</span>';
                } else {
                    html += '<span class="text-[11px] font-bold ' + levelColor + '">Skor: ' + showScore + '</span>';
                }
                html += '<span class="text-[10px] text-on-surface-variant">/100</span>';
                html += '</div></div></div>';
            }
            grid.innerHTML = html;

            var btnWrap = document.getElementById('continueBtnWrapper');
            if (unlockedScores['4'] && unlockedScores['4'] >= 80 && !unlockedScores['5']) {
                btnWrap.classList.remove('hidden');
            } else {
                btnWrap.classList.add('hidden');
            }
        }

        window.openLevelModal = function(levelId) {
            var lv = null;
            for (var i = 0; i < levelData.length; i++) { if (levelData[i].id === levelId) { lv = levelData[i]; break; } }
            if (!lv) return;

            if (lv.id === 5) {
                var l4 = unlockedScores['4'] || 0;
                if (l4 < 80) { alert('Level 5 belum dapat diakses.\nSyarat: Skor Level 4 minimal 80.\nSkor Level 4 Anda saat ini: ' + l4); return; }
            }

            var content = levelContent[levelId];
            if (!content) return;

            var accentColor = lv.color || 'primary';

            var html = '';
            html += '<div class="flex items-center justify-between mb-6">';
            html += '<div class="flex items-center gap-3"><div class="w-10 h-10 rounded-xl bg-' + accentColor + '/10 flex items-center justify-center"><span class="material-symbols-outlined text-' + accentColor + '">menu_book</span></div><div><h3 class="font-headline-md text-[20px] text-ivory-text">Level ' + lv.id + ': ' + lv.title + '</h3><p class="text-xs text-on-surface-variant mt-0.5">' + lv.desc + '</p></div></div>';
            html += '<button onclick="window.closeLevelModal()" class="w-8 h-8 rounded-lg bg-surface-container-hover flex items-center justify-center text-on-surface-variant hover:text-ivory-text transition-colors"><span class="material-symbols-outlined text-[20px]">close</span></button>';
            html += '</div>';

            html += '<div class="mb-8 p-5 bg-surface-container-low rounded-xl border border-outline-variant/10">';
            html += '<h4 class="font-bold text-ivory-text mb-3 flex items-center gap-2"><span class="material-symbols-outlined text-[18px] text-' + accentColor + '">article</span> Pembahasan</h4>';
            html += '<div class="text-sm text-on-surface-variant leading-relaxed">' + content.pembahasan + '</div>';
            html += '</div>';

            html += '<div id="soalContainer">';
            html += '<h4 class="font-bold text-ivory-text mb-4 flex items-center gap-2"><span class="material-symbols-outlined text-[18px] text-' + accentColor + '">quiz</span> Pertanyaan</h4>';
            for (var s = 0; s < content.soal.length; s++) {
                var soal = content.soal[s];
                html += '<div class="mb-5 p-4 bg-surface-container-low rounded-lg border border-outline-variant/10" data-soal="' + s + '">';
                html += '<p class="text-sm text-ivory-text font-semibold mb-3">' + (s+1) + '. ' + soal.q + '</p>';
                html += '<div class="space-y-2">';
                for (var o = 0; o < soal.o.length; o++) {
                    html += '<label class="flex items-center gap-3 p-2.5 rounded-lg bg-surface-container border border-outline-variant/10 cursor-pointer hover:border-' + accentColor + '/30 transition-colors" data-opsi="' + o + '">';
                    html += '<input type="radio" name="soal_' + levelId + '_' + s + '" value="' + o + '" class="w-4 h-4 accent-' + accentColor + '">';
                    html += '<span class="text-sm text-on-surface-variant">' + soal.o[o] + '</span>';
                    html += '</label>';
                }
                html += '</div></div>';
            }
            html += '</div>';

            html += '<button onclick="window.submitLevel(' + levelId + ')" class="w-full mt-4 py-3 bg-' + accentColor + ' text-on-primary font-bold rounded-lg hover:brightness-110 transition-all flex items-center justify-center gap-2">';
            html += 'Submit Jawaban <span class="material-symbols-outlined text-[18px]">check_circle</span></button>';
            html += '<p id="resultMsg" class="text-center mt-3 text-sm hidden"></p>';

            document.getElementById('levelModalContent').innerHTML = html;
            document.getElementById('levelModalOverlay').classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        };

        window.closeLevelModal = function() {
            document.getElementById('levelModalOverlay').classList.add('hidden');
            document.body.style.overflow = '';
        };

        window.submitLevel = function(levelId) {
            var content = levelContent[levelId];
            if (!content) return;

            var correct = 0;
            var total = content.soal.length;

            for (var s = 0; s < total; s++) {
                var selected = document.querySelector('input[name="soal_' + levelId + '_' + s + '"]:checked');
                if (selected && parseInt(selected.value) === content.soal[s].a) {
                    correct++;
                }
            }

            var score = Math.round((correct / total) * 100);
            unlockedScores[levelId] = Math.max(unlockedScores[levelId] || 0, score);
            saveScores();
            renderLevels();

            var msg = document.getElementById('resultMsg');
            msg.classList.remove('hidden');
            var accent = levelData[levelId-1] ? (levelData[levelId-1].color || 'primary') : 'primary';

            if (score >= 70) {
                msg.innerHTML = '<span class="text-primary font-bold">LULUS! Skor: ' + score + '/100</span>';
            } else {
                msg.innerHTML = '<span class="text-warning-amber font-bold">Skor: ' + score + '/100. Minimal 70 untuk lulus.</span>';
            }

            if (levelId === 4 && score >= 80) {
                document.getElementById('continueBtnWrapper').classList.remove('hidden');
            }

            setTimeout(function() {
                window.closeLevelModal();
                renderLevels();
            }, 2000);
        };

        // Click outside modal to close
        document.getElementById('levelModalOverlay').addEventListener('click', function(e) {
            if (e.target === this) window.closeLevelModal();
        });

        window.addEventListener('storage', function(e) {
            if (e.key === 'lidm_level_data') { levelData = loadLevelData(); renderLevels(); }
        });

        document.addEventListener('DOMContentLoaded', renderLevels);
    })();

    </script>
    <script src="../assets/js/help-menu.js"></script>
</body>

</html>