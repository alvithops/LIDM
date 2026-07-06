<!DOCTYPE html>

<html lang="id">
<script>document.documentElement.className=localStorage.getItem('appTheme')==='light'?'light':'dark'</script>

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title data-i18n="dashboard.page_title">Dashboard Siswa - SmartBank Syariah AI</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&amp;family=Inter:wght@400;500;600&amp;display=swap"
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
                        "headline-md": ["Plus Jakarta Sans"],
                        "body-lg": ["Plus Jakarta Sans"],
                        "body-md": ["Plus Jakarta Sans"],
                        "label-caps": ["Inter"],
                        "data-mono": ["Inter"]
                    }
                },
            },
        }
    </script>
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }

        .glass-card {
            background: rgba(26, 26, 26, 0.6);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(63, 73, 68, 0.5);
        }

        .active-nav-glow {
            box-shadow: 0 0 15px rgba(142, 213, 185, 0.15);
        }

        .scrolling-hide::-webkit-scrollbar {
            display: none;
        }

        .scrolling-hide {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
    </style>
</head>

<body class="bg-background text-on-surface font-body-md overflow-x-hidden">
    <!-- TopNavBar (Shared Component) -->
    <nav
        class="fixed top-0 right-0 w-full md:w-[calc(100%-280px)] h-16 z-50 bg-charcoal-surface/80 backdrop-blur-md flex justify-between items-center px-gutter shadow-sm border-b border-outline-variant/30">
        <div class="flex items-center gap-4">
            <span class="md:hidden material-symbols-outlined text-primary cursor-pointer">menu</span>
            <div class="hidden md:flex flex-col">
                <span class="font-headline-md text-headline-md font-bold text-primary leading-none" data-i18n="dashboard.topbar.title">SmartBank Syariah
                    AI</span>
                <span class="font-label-caps text-[10px] text-on-surface-variant tracking-widest uppercase" data-i18n="dashboard.topbar.subtitle">Virtual
                    Laboratory Environment</span>
            </div>
        </div>
        <div class="flex items-center gap-6">
            <div
                class="hidden lg:flex items-center gap-3 bg-surface-container rounded-full px-4 py-1.5 border border-outline-variant/50">
                <span class="material-symbols-outlined text-tertiary text-sm">database</span>
                <span class="font-label-caps text-label-caps text-tertiary" id="topbarBalance" data-i18n="dashboard.topbar.balance_label">Balance: Rp 5.000.000</span>
            </div>
            <div
                class="flex items-center gap-2 bg-primary/10 text-primary px-3 py-1 rounded-full border border-primary/20">
                <span class="material-symbols-outlined text-sm"
                    style="font-variation-settings: 'FILL' 1;">workspace_premium</span>
                <span class="font-label-caps text-label-caps" id="topbarXp" data-i18n="dashboard.topbar.xp_label">2,450 XP</span>
            </div>
            <div class="flex items-center gap-3">
                <button id="dashboardBellButton"
                    class="relative inline-flex items-center justify-center p-2 rounded-full border border-outline text-on-surface-variant transition-all duration-200 hover:text-primary hover:border-primary"
                    type="button" aria-label="Toggle notifikasi">
                    <span class="material-symbols-outlined">notifications</span>
                    <span id="bellBadge"
                        class="absolute -top-1 -right-1 hidden h-2.5 w-2.5 rounded-full bg-secondary shadow-lg shadow-secondary/30"></span>
                </button>
                <div class="relative group">
                    <div class="h-8 w-8 rounded-full overflow-hidden border border-outline cursor-pointer">
                        <img id="dashAvatarSmall" alt="Student Avatar" class="w-full h-full object-cover"
                            data-alt="A professional close-up portrait of a Southeast Asian male student in a neat academic setting, wearing a modern shirt, with a soft-focus background of a clean digital workspace. The lighting is bright and crisp, emphasizing a scholarly and ambitious atmosphere within a high-tech corporate learning environment."
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuDA-5TWWmXeGAVMqZrpKpF_XVjfswKLBB0mPESOtYrhe6q8ztfrPSUivmC8TudHeK41KVcCG5bqqBHNOJFdaNuDso5tTpfeYAwnqfzyr_t2LUonAiqyzzZ75MUmykLhOLHgUDH7Q_ha95v2sp2e5nI2O82_rbIXqJ4vz4V-n-QgggFGev7tOVlHu4MUrAUTEctt2-GCsY8JxZvIb42adldJRenlkku3oyFP3IVR_tWhVgRDHMgFIE49Sg" />
                    </div>
                    <div
                        class="pointer-events-none absolute right-0 top-full mt-3 hidden w-64 rounded-3xl border border-outline-variant/30 bg-charcoal-surface/95 p-4 shadow-xl shadow-black/30 backdrop-blur-xl group-hover:block">
                        <div class="flex flex-col gap-3">
                            <div class="bg-surface-container-high px-3 py-3 rounded-2xl border border-outline-variant/40">
                                <p class="text-[10px] uppercase text-on-surface-variant mb-1" data-i18n="dashboard.tooltip.username_label">Username</p>
                                <p class="font-semibold text-ivory-text" id="tooltipUsername">Siswa</p>
                            </div>
                            <div class="bg-surface-container-high px-3 py-3 rounded-2xl border border-outline-variant/40">
                                <p class="text-[10px] uppercase text-on-surface-variant mb-1" data-i18n="dashboard.tooltip.role_label">Akses</p>
                                <p class="font-semibold text-ivory-text" id="tooltipRole">Mahasiswa</p>
                            </div>
                            <div class="bg-surface-container-high px-3 py-3 rounded-2xl border border-outline-variant/40">
                                <p class="text-[10px] uppercase text-on-surface-variant mb-1" data-i18n="dashboard.tooltip.status_label">Status</p>
                                <p class="font-semibold text-ivory-text" id="tooltipStatus">Aktif</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- SideNavBar (Shared Component) -->
    <aside
        class="hidden md:flex flex-col w-[280px] h-screen fixed left-0 top-0 bg-charcoal-surface border-r border-outline-variant z-50">
        <div class="p-8">
            <div class="flex flex-col items-center text-center mb-8">
                <div
                    class="w-20 h-20 rounded-2xl bg-gradient-to-br from-primary to-sharia-green-deep flex items-center justify-center mb-4 shadow-lg shadow-primary/10">
                    <span class="material-symbols-outlined text-4xl text-on-primary">account_balance</span>
                </div>
                <h2 class="font-headline-md text-headline-md font-bold text-primary" data-i18n="dashboard.sidebar.brand">SmartBank AI</h2>
                <p class="font-body-md text-on-surface-variant text-sm mt-1" data-i18n="dashboard.sidebar.subtitle">Virtual Laboratory</p>
            </div>
            <nav class="space-y-1">
                <!-- Dashboard Active -->
                <a class="flex items-center gap-4 bg-primary/10 text-primary border-l-4 border-secondary-fixed-dim px-6 py-3 transition-transform active:scale-[0.99] active-nav-glow"
                    href="Dashboard_siswa.php">
                    <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">dashboard</span>
                    <span class="font-body-md" data-i18n="dashboard.sidebar.dashboard">Dashboard</span>
                </a>
                <a class="flex items-center gap-4 text-on-surface-variant hover:text-ivory-text hover:bg-surface-variant/50 px-6 py-3 transition-colors duration-200"
                    href="../Simulasi/Simulasi_Siswa.php">
                    <span class="material-symbols-outlined">psychology</span>
                    <span class="font-body-md" data-i18n="dashboard.sidebar.simulasi">Simulasi</span>
                </a>
                <a class="flex items-center gap-4 text-on-surface-variant hover:text-ivory-text hover:bg-surface-variant/50 px-6 py-3 transition-colors duration-200"
                    href="../Pusat_Kompetensi/Pusat_Kompetensi_Siswa.php">
                    <span class="material-symbols-outlined">military_tech</span>
                    <span class="font-body-md" data-i18n="dashboard.sidebar.kompetensi">Kompetensi</span>
                </a>
                <a class="flex items-center gap-4 text-on-surface-variant hover:text-ivory-text hover:bg-surface-variant/50 px-6 py-3 transition-colors duration-200"
                    href="../Riwayat/Riwayat_Siswa.php">
                    <span class="material-symbols-outlined">history</span>
                    <span class="font-body-md" data-i18n="dashboard.sidebar.riwayat">Riwayat</span>
                </a>
                <a class="flex items-center gap-4 text-on-surface-variant hover:text-ivory-text hover:bg-surface-variant/50 px-6 py-3 transition-colors duration-200"
                    href="../Setting/Setting_Siswa.php">
                    <span class="material-symbols-outlined">settings</span>
                    <span class="font-body-md" data-i18n="dashboard.sidebar.setelan">Setelan</span>
                </a>
            </nav>
            <div class="mt-8 px-6">
                <a href="../Simulasi/Simulasi_Siswa.php"
                    class="w-full inline-flex bg-primary text-on-primary py-3 rounded-xl font-bold hover:opacity-90 transition-opacity flex items-center justify-center gap-2 text-center">
                    <span class="material-symbols-outlined text-sm">play_arrow</span>
                    <span data-i18n="dashboard.sidebar.mulai_simulasi">Mulai Simulasi</span>
                </a>
            </div>
        </div>
        <div class="mt-auto border-t border-outline-variant p-4">
            <a class="flex items-center gap-4 text-on-surface-variant hover:text-ivory-text px-6 py-3 cursor-pointer" onclick="window.openHelp()">
                <span class="material-symbols-outlined">help</span>
                <span class="font-body-md" data-i18n="dashboard.sidebar.bantuan">Bantuan</span>
            </a>
            <a id="logoutLink" class="flex items-center gap-4 text-error/80 hover:text-error px-6 py-3" href="../Login/login.php">
                <span class="material-symbols-outlined">logout</span>
                <span class="font-body-md" data-i18n="dashboard.sidebar.keluar">Keluar</span>
            </a>
        </div>
    </aside>
    <!-- Main Content Canvas -->
    <main
        class="md:ml-[280px] pt-20 pb-24 md:pb-12 px-margin-mobile md:px-margin-desktop min-h-screen relative overflow-hidden">
        <!-- Decorative Background Elements -->
        <div class="absolute top-0 right-0 w-96 h-96 bg-primary/5 rounded-full blur-[120px] pointer-events-none"></div>
        <div class="absolute bottom-0 left-0 w-64 h-64 bg-secondary/5 rounded-full blur-[100px] pointer-events-none">
        </div>
        <!-- Header Section (Bento Row 1) -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-gutter mb-gutter">
            <!-- Profile Info & Current Role -->
            <div
                class="lg:col-span-2 glass-card rounded-3xl p-8 relative overflow-hidden flex flex-col md:flex-row items-center md:items-start gap-8">
                <div class="relative">
                    <div class="w-24 h-24 md:w-32 md:h-32 rounded-3xl overflow-hidden border-2 border-primary/30 p-1">
                        <img id="dashProfileImg" alt="Student Profile" class="w-full h-full object-cover rounded-2xl"
                            data-alt="A detailed, cinematic close-up of a high-achieving student in a professional bank training uniform. The aesthetic is modern and corporate with a dark background and soft primary green lighting. The student's expression is focused and capable, conveying mastery of complex financial simulations in a futuristic Sharia banking lab."
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuA3Mk0iRioMzF_EaLIxhP4GokDvVKhW3pV15xIUk_ueSUfSwTlOFyvN6vKAVOCCIGaaSXblxuKZ6ViXtgxzya_2U7hS4LjmbE4iZ3MCJORvKUgrNemPRdIc01LQzpdwh49S3wz_YYWep0XtDtyoao2U0d8wkLVImM_29PBbjpHvsU3VHllebe4VSewe3CxpS1zxKrTYicsImFJ-Z5Jp4wANxViVmVsTLR_6U_wBsuf8eTaeeVbgKQef5g" />
                    </div>
                    <div
                        class="absolute -bottom-2 -right-2 bg-warning-amber text-on-tertiary px-3 py-1 rounded-full text-xs font-bold shadow-lg">
                        <span Lvl 12</span></div>
                </div>
                <div class="flex-1 text-center md:text-left">
                    <div class="flex flex-col md:flex-row md:items-center gap-2 mb-2">
                        <h1 class="font-headline-lg text-[28px] md:text-headline-lg text-ivory-text" id="usernameGreeting">Selamat Datang, Siswa!</h1>
                        <span
                            class="bg-secondary/20 text-secondary border border-secondary/30 px-3 py-1 rounded-full font-label-caps text-[10px] w-fit mx-auto md:mx-0" data-i18n="dashboard.badge_stt">STT:
                            TERVERIFIKASI</span>
                    </div>
                    <p class="text-on-surface-variant max-w-xl mb-6" data-i18n="dashboard.profile.desc" data-i18n-attr="html">Siap untuk sesi laboratorium hari ini? Kamu sedang
                        berada di jalur kompetensi <b>Analis Pembiayaan</b> dengan progres 78% menuju sertifikasi
                        virtual.</p>
                    <div class="flex flex-wrap justify-center md:justify-start gap-4">
                        <div
                            class="flex flex-col bg-surface-container-high px-6 py-3 rounded-2xl border border-outline-variant/30">
                            <span class="font-label-caps text-label-caps text-on-surface-variant uppercase mb-1" data-i18n="dashboard.profile.role_label">Peran
                                Saat Ini</span>
                            <span class="font-headline-md text-headline-md text-primary" data-i18n="dashboard.profile.role_value">Customer Service</span>
                        </div>
                        <div
                            class="flex flex-col bg-surface-container-high px-6 py-3 rounded-2xl border border-outline-variant/30">
                            <span class="font-label-caps text-label-caps text-on-surface-variant uppercase mb-1" data-i18n="dashboard.profile.points_label">Total
                                Poin</span>
                            <span class="font-headline-md text-[20px] md:text-headline-md text-tertiary">14.280 XP</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- AI Supervisor Status -->
            <div class="glass-card rounded-3xl p-6 flex flex-col justify-between border-l-4 border-warning-amber">
                <div>
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-10 h-10 rounded-full bg-warning-amber/10 flex items-center justify-center">
                            <span class="material-symbols-outlined text-warning-amber">smart_toy</span>
                        </div>
                        <span class="font-headline-md text-headline-md text-ivory-text" data-i18n="dashboard.ai_supervisor.title">AI Supervisor</span>
                    </div>
                    <p class="text-sm text-on-surface-variant leading-relaxed mb-4" data-i18n="dashboard.ai_supervisor.desc" data-i18n-attr="html"><span id="aiSupervisorName">Siswa</span>, tinjauan terakhir
                        menunjukkan kamu perlu memperdalam pemahaman pada akad <b>Mudharabah</b>. Nasabah UMKM sering
                        menanyakan bagi hasil.</p>
                </div>
                <button id="openFeedbackDetailBtn"
                    class="w-full py-3 bg-surface-container-highest text-primary rounded-xl font-bold text-sm border border-primary/20 hover:bg-primary/5 transition-colors" data-i18n="dashboard.ai_supervisor.feedback_btn">
                    Lihat Feedback Detail
                </button>
                <div id="feedbackDetailContainer"
                    class="mt-6 hidden rounded-3xl border border-primary/15 bg-surface-container-highest p-6 shadow-lg shadow-primary/10">
                    <div class="flex flex-col sm:flex-row sm:items-start sm:justify-between gap-4 mb-6">
                        <div>
                            <h3 class="font-headline-md text-headline-md text-ivory-text" data-i18n="dashboard.feedback_detail.title">Detail Feedback Laboratorium</h3>
                            <p class="text-sm text-on-surface-variant mt-2" data-i18n="dashboard.feedback_detail.desc">Ringkasan rekomendasi dan langkah prioritas dari AI Supervisor.</p>
                        </div>
                        <button id="closeFeedbackDetailBtn"
                            class="self-start rounded-full border border-outline px-4 py-2 text-xs font-semibold uppercase tracking-[0.15em] text-on-surface-variant hover:border-primary hover:text-primary transition-all" data-i18n="dashboard.feedback_detail.close">Tutup</button>
                    </div>
                    <div class="grid gap-4 lg:grid-cols-2">
                        <div class="rounded-3xl border border-outline-variant/40 bg-charcoal-surface p-5">
                            <p class="text-[10px] uppercase text-on-surface-variant mb-2" data-i18n="dashboard.feedback_detail.observasi">Observasi Utama</p>
                            <p class="text-sm text-on-surface-variant" data-i18n="dashboard.feedback_detail.observasi_text">Kredibilitas pengajuan nasabah UMKM perlu dilengkapi data pemasukan dan proyeksi kas yang lebih detail.</p>
                        </div>
                        <div class="rounded-3xl border border-outline-variant/40 bg-charcoal-surface p-5">
                            <p class="text-[10px] uppercase text-on-surface-variant mb-2" data-i18n="dashboard.feedback_detail.rekomendasi">Rekomendasi</p>
                            <p class="text-sm text-on-surface-variant" data-i18n="dashboard.feedback_detail.rekomendasi_text">Fokus pada akad Mudharabah dan pembagian hasil, lalu pastikan ada dokumen rencana usaha lengkap.</p>
                        </div>
                        <div class="rounded-3xl border border-outline-variant/40 bg-charcoal-surface p-5">
                            <p class="text-[10px] uppercase text-on-surface-variant mb-2" data-i18n="dashboard.feedback_detail.catatan">Catatan</p>
                            <p class="text-sm text-on-surface-variant" data-i18n="dashboard.feedback_detail.catatan_text">Perkuat pertanyaan terkait rencana penggunaan modal dan jadwal pelaporan usaha secara berkala.</p>
                        </div>
                        <div class="rounded-3xl border border-outline-variant/40 bg-charcoal-surface p-5">
                            <p class="text-[10px] uppercase text-on-surface-variant mb-2" data-i18n="dashboard.feedback_detail.target">Target Selanjutnya</p>
                            <p class="text-sm text-on-surface-variant" data-i18n="dashboard.feedback_detail.target_text">Berlatih simulasi Nasabah Haji atau KPR untuk meningkatkan pemahaman produk syariah lain.</p>
                        </div>
                    </div>
                    <div id="adminUpdateSection"
                        class="mt-6 rounded-3xl border border-secondary/10 bg-background p-5 text-on-surface-variant">
                        <div class="flex items-center justify-between mb-4">
                            <div>
                                <p class="text-xs uppercase text-on-surface-variant tracking-[0.2em] mb-1" data-i18n="dashboard.feedback_detail.admin_update">Update Admin</p>
                                <h4 class="font-semibold text-ivory-text" data-i18n="dashboard.feedback_detail.sync_status">Status Sinkronisasi</h4>
                            </div>
                            <span id="bellStateLabel" class="text-xs font-semibold text-secondary" data-i18n="dashboard.bell_label_off">Bell nonaktif</span>
                        </div>
                        <div id="adminUpdateList" class="space-y-3 text-sm">
                            <p data-i18n="dashboard.feedback_detail.no_updates">Tidak ada update terbaru. Aktifkan lonceng untuk menerima informasi admin.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Quick Actions & Competency Chart (Bento Row 2) -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-gutter mb-gutter">
            <!-- Quick Actions -->
            <div class="lg:col-span-4 flex flex-col gap-4">
                <h3 class="font-label-caps text-label-caps text-on-surface-variant uppercase tracking-[0.2em] px-2" data-i18n="dashboard.quick_actions.title">
                    Akses Cepat</h3>
                <div class="grid grid-cols-1 gap-3">
                    <a href="Nasabah_UMKM.php" data-qa-id="umkm"
                        class="flex items-center justify-between p-5 bg-charcoal-surface border border-outline-variant hover:border-primary transition-all rounded-2xl group">
                        <div class="flex items-center gap-4">
                            <div id="qaIcon-umkm"
                                class="w-12 h-12 rounded-xl bg-primary/10 flex items-center justify-center group-hover:bg-primary/20 transition-colors">
                                <span class="material-symbols-outlined text-primary">inventory_2</span>
                            </div>
                            <div class="text-left">
                                <p class="font-bold text-ivory-text" id="qaTitle-umkm" data-i18n="dashboard.scenario.umkm">Nasabah UMKM</p>
                                <p class="text-xs text-on-surface-variant" id="qaDesc-umkm" data-i18n="dashboard.scenario.umkm_desc">Analisis usaha dan pembukaan rekening UMKM.</p>
                            </div>
                        </div>
                        <span
                            class="material-symbols-outlined text-on-surface-variant group-hover:translate-x-1 transition-transform">chevron_right</span>
                    </a>
                    <a href="Nasabah_Haji.php" data-qa-id="haji"
                        class="flex items-center justify-between p-5 bg-charcoal-surface border border-outline-variant hover:border-primary transition-all rounded-2xl group">
                        <div class="flex items-center gap-4">
                            <div id="qaIcon-haji"
                                class="w-12 h-12 rounded-xl bg-tertiary/10 flex items-center justify-center group-hover:bg-tertiary/20 transition-colors">
                                <span class="material-symbols-outlined text-tertiary">flight_takeoff</span>
                            </div>
                            <div class="text-left">
                                <p class="font-bold text-ivory-text" id="qaTitle-haji" data-i18n="dashboard.scenario.haji">Nasabah Haji</p>
                                <p class="text-xs text-on-surface-variant" id="qaDesc-haji" data-i18n="dashboard.scenario.haji_desc">Pendaftaran dan verifikasi dana Haji.</p>
                            </div>
                        </div>
                        <span
                            class="material-symbols-outlined text-on-surface-variant group-hover:translate-x-1 transition-transform">chevron_right</span>
                    </a>
                    <a href="Nasabah_KPR.php" data-qa-id="kpr"
                        class="flex items-center justify-between p-5 bg-charcoal-surface border border-outline-variant hover:border-primary transition-all rounded-2xl group">
                        <div class="flex items-center gap-4">
                            <div id="qaIcon-kpr"
                                class="w-12 h-12 rounded-xl bg-secondary/10 flex items-center justify-center group-hover:bg-secondary/20 transition-colors">
                                <span class="material-symbols-outlined text-secondary">home_work</span>
                            </div>
                            <div class="text-left">
                                <p class="font-bold text-ivory-text" id="qaTitle-kpr" data-i18n="dashboard.scenario.kpr">Nasabah KPR</p>
                                <p class="text-xs text-on-surface-variant" id="qaDesc-kpr" data-i18n="dashboard.scenario.kpr_desc">Simulasi pembiayaan KPR syariah.</p>
                            </div>
                        </div>
                        <span
                            class="material-symbols-outlined text-on-surface-variant group-hover:translate-x-1 transition-transform">chevron_right</span>
                    </a>
                    <a href="Deteksi_Fraud.php" data-qa-id="fraud"
                        class="flex items-center justify-between p-5 bg-charcoal-surface border border-outline-variant hover:border-primary transition-all rounded-2xl group">
                        <div class="flex items-center gap-4">
                            <div id="qaIcon-fraud"
                                class="w-12 h-12 rounded-xl bg-error/10 flex items-center justify-center group-hover:bg-error/20 transition-colors">
                                <span class="material-symbols-outlined text-error">security</span>
                            </div>
                            <div class="text-left">
                                <p class="font-bold text-ivory-text" id="qaTitle-fraud" data-i18n="dashboard.scenario.fraud">Deteksi Fraud</p>
                                <p class="text-xs text-on-surface-variant" id="qaDesc-fraud" data-i18n="dashboard.scenario.fraud_desc">Pantau anomali dan risiko transaksi.</p>
                            </div>
                        </div>
                        <span
                            class="material-symbols-outlined text-on-surface-variant group-hover:translate-x-1 transition-transform">chevron_right</span>
                    </a>
                </div>
            </div>
            <!-- Competency Radar/Chart -->
            <div class="lg:col-span-8 glass-card rounded-3xl p-8">
                <div class="flex items-center justify-between mb-8">
                    <div>
                        <h3 class="font-headline-md text-headline-md text-ivory-text" data-i18n="dashboard.radar.title">Radar Kompetensi</h3>
                        <p class="text-sm text-on-surface-variant" data-i18n="dashboard.radar.desc">Analisis penguasaan akad syariah</p>
                    </div>
                    <div class="flex gap-2">
                        <span
                            class="px-3 py-1 bg-primary/10 text-primary text-xs rounded-full border border-primary/20" data-i18n="dashboard.radar.tag_teori">Teori</span>
                        <span
                            class="px-3 py-1 bg-secondary/10 text-secondary text-xs rounded-full border border-secondary/20" data-i18n="dashboard.radar.tag_praktik">Praktik</span>
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                    <div class="relative w-full aspect-square max-w-[280px] mx-auto flex items-center justify-center">
                        <!-- Custom SVG Radar Chart Simulation -->
                        <svg class="w-full h-full transform -rotate-18" viewbox="0 0 200 200">
                            <circle class="text-outline-variant/30" cx="100" cy="100" fill="none" r="80"
                                stroke="currentColor" stroke-width="1"></circle>
                            <circle class="text-outline-variant/30" cx="100" cy="100" fill="none" r="60"
                                stroke="currentColor" stroke-width="1"></circle>
                            <circle class="text-outline-variant/30" cx="100" cy="100" fill="none" r="40"
                                stroke="currentColor" stroke-width="1"></circle>
                            <path class="text-outline-variant/30"
                                d="M100 20 L100 180 M20 100 L180 100 M43 43 L157 157 M157 43 L43 157"
                                stroke="currentColor" stroke-width="0.5"></path>
                            <!-- Data Shape -->
                            <path d="M100 40 L160 100 L140 140 L100 160 L60 140 L40 100 Z"
                                fill="rgba(142, 213, 185, 0.4)" stroke="#8ed5b9" stroke-width="2"></path>
                        </svg>
                        <div class="absolute inset-0 flex items-center justify-center">
                            <span class="text-[10px] font-bold text-primary tracking-tighter text-center" data-i18n="dashboard.radar.skor_global">SKOR
                                GLOBAL<br /><span class="text-lg">88%</span></span>
                        </div>
                    </div>
                    <div class="space-y-4">
                        <div>
                            <div class="flex justify-between text-xs mb-1">
                                <span class="text-on-surface-variant uppercase" data-i18n="dashboard.radar.akad_murabahah">Akad Murabahah</span>
                                <span class="text-primary font-bold">92%</span>
                            </div>
                            <div class="h-1.5 w-full bg-surface-container rounded-full overflow-hidden">
                                <div class="h-full bg-primary w-[92%]"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between text-xs mb-1">
                                <span class="text-on-surface-variant uppercase" data-i18n="dashboard.radar.akad_mudharabah">Akad Mudharabah</span>
                                <span class="text-secondary font-bold">65%</span>
                            </div>
                            <div class="h-1.5 w-full bg-surface-container rounded-full overflow-hidden">
                                <div class="h-full bg-secondary w-[65%]"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between text-xs mb-1">
                                <span class="text-on-surface-variant uppercase" data-i18n="dashboard.radar.akad_musyarakah">Akad Musyarakah</span>
                                <span class="text-tertiary font-bold">78%</span>
                            </div>
                            <div class="h-1.5 w-full bg-surface-container rounded-full overflow-hidden">
                                <div class="h-full bg-tertiary w-[78%]"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between text-xs mb-1">
                                <span class="text-on-surface-variant uppercase" data-i18n="dashboard.radar.kepatuhan">Kepatuhan Syariah</span>
                                <span class="text-primary font-bold">85%</span>
                            </div>
                            <div class="h-1.5 w-full bg-surface-container rounded-full overflow-hidden">
                                <div class="h-full bg-primary w-[85%]"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Available Scenarios (Section) -->
        <div class="mb-gutter">
            <div class="flex items-center justify-between mb-6">
                <h3 class="font-headline-md text-headline-md text-ivory-text" data-i18n="dashboard.scenarios.title">Skenario Lab Tersedia</h3>
                <a class="text-primary text-sm font-bold flex items-center gap-1 hover:underline" href="../Simulasi/Simulasi_Siswa.php"><span data-i18n="dashboard.scenarios.view_all">Lihat Semua</span>
                    <span class="material-symbols-outlined text-xs">arrow_forward</span></a>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-gutter">
                <!-- Scenario Card 1 -->
                <div
                    class="bg-charcoal-surface border border-outline-variant rounded-2xl overflow-hidden group hover:border-primary transition-all flex flex-col">
                    <div class="h-40 relative">
                        <img alt="Scenario UMKM"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                            data-alt="A high-quality digital photograph of a vibrant small business setting in Indonesia, showing a local coffee shop or craft workshop. The lighting is warm and natural, suggesting a successful UMKM. The scene is presented as a holographic simulation element for a banking lab UI, with a subtle tech overlay in primary green and bronze."
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuAs6YP8XzFWouvqzUVfSGzsZS5PlLGToN-NYZuKCOsQH-L2aHt4KUJKoWYolY643Wfh0KQELtzW9xEkmtkAXtfJsEFT1J2jHwd_2ekT_yurZyEUFKo1lYJewHlAi0Ejl9vYJQ8K-ZzAjhfkV4bsR29Kg8MCotjfUTWlq7CRX3MRB_mXHmf7FecmcM_yoPNmkWbXtg6xVfdmxIFkh9MZeC7AThhRHKxAvtxrt0pxeCEEE2FdHBCdtiX38g" />
                        <div
                            class="absolute top-3 left-3 bg-primary/90 text-on-primary px-2 py-1 rounded-md text-[10px] font-bold uppercase" data-i18n="dashboard.scenario_card.badge_beginner">
                            Beginner</div>
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-charcoal-surface via-transparent to-transparent">
                        </div>
                    </div>
                    <div class="p-5 flex-1 flex flex-col">
                        <h4 class="font-bold text-ivory-text mb-2" data-i18n="dashboard.scenario_card.umkm_title">Nasabah UMKM</h4>
                        <p class="text-xs text-on-surface-variant mb-6 line-clamp-2" data-i18n="dashboard.scenario_card.umkm_desc">Pak Budi ingin mencari modal usaha
                            untuk bengkel barunya melalui Akad Mudharabah.</p>
                        <div class="mt-auto flex items-center justify-between">
                                <span class="text-[10px] text-tertiary flex items-center gap-1 font-label-caps"><span
                                        class="material-symbols-outlined text-xs">stars</span> <span data-i18n="dashboard.scenario_card.umkm_xp">+150 XP</span></span>
                                <a href="../Simulasi/Simulasi_Siswa.php"
                                    class="px-4 py-2 bg-surface-container-high rounded-lg text-xs font-bold text-primary group-hover:bg-primary group-hover:text-on-primary transition-colors inline-flex items-center justify-center" data-i18n="dashboard.scenario_card.umkm_btn">MULAI</a>
                        </div>
                    </div>
                </div>
                <!-- Scenario Card 2 -->
                <div
                    class="bg-charcoal-surface border border-outline-variant rounded-2xl overflow-hidden group hover:border-primary transition-all flex flex-col">
                    <div class="h-40 relative">
                        <img alt="Scenario Haji"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                            data-alt="A spiritual and clean visual representation of a modern pilgrims' travel agency or a symbolic Islamic architectural detail. The color palette is composed of soft whites, deep greens, and golden bronze. The image is styled as a professional simulation scenario for a Sharia banking platform, focusing on trust and religious fulfillment."
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuAs7hVH8Dpo9kVS4_hAIvMgs2d5VUy4JXZIZh_qKz-PNkE8HtoKY-yBsIAp9hDlbJlCKpZ7ZYW-OyvXnEtvt6o_W6JbE6jR_jGHbklLlxevoZrvQvFJDY5i-W6WyvclH4bJvaPWHsDgYsuovzu_WJRpZb64Uh4TBr_LVJugq-quXn0RxFp6WptVGBpmh5TbD4NHShuuI8kpKNapSFLDfbYBqnXTsllxIUpNtxGzoIM60qi22GQy0ZoQWA" />
                        <div
                            class="absolute top-3 left-3 bg-secondary/90 text-on-secondary px-2 py-1 rounded-md text-[10px] font-bold uppercase" data-i18n="dashboard.scenario_card.badge_intermediate">
                            Intermediate</div>
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-charcoal-surface via-transparent to-transparent">
                        </div>
                    </div>
                    <div class="p-5 flex-1 flex flex-col">
                        <h4 class="font-bold text-ivory-text mb-2" data-i18n="dashboard.scenario_card.haji_title">Nasabah Haji</h4>
                        <p class="text-xs text-on-surface-variant mb-6 line-clamp-2" data-i18n="dashboard.scenario_card.haji_desc">Ibu Siti ingin membuka tabungan
                            haji dengan setoran awal Rp 25.000.000.</p>
                        <div class="mt-auto flex items-center justify-between">
                                <span class="text-[10px] text-tertiary flex items-center gap-1 font-label-caps"><span
                                        class="material-symbols-outlined text-xs">stars</span> <span data-i18n="dashboard.scenario_card.haji_xp">+250 XP</span></span>
                                <a href="../Simulasi/Simulasi_Siswa.php"
                                    class="px-4 py-2 bg-surface-container-high rounded-lg text-xs font-bold text-primary group-hover:bg-primary group-hover:text-on-primary transition-colors inline-flex items-center justify-center" data-i18n="dashboard.scenario_card.umkm_btn">MULAI</a>
                        </div>
                    </div>
                </div>
                <!-- Scenario Card 3 -->
                <div
                    class="bg-charcoal-surface border border-outline-variant rounded-2xl overflow-hidden group hover:border-primary transition-all flex flex-col">
                    <div class="h-40 relative">
                        <img alt="Scenario KPR"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                            data-alt="A minimalist architectural visualization of a modern family home, focusing on clean lines and a sense of security and stability. The lighting is early morning, soft and hopeful. The aesthetic is tailored for a financial simulation about KPR Syariah, featuring high-contrast details and a premium dark-mode interface integration."
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuBeZxVSdsC_BJLGSuqJwTdx28PodJbncgxPKmkG9InvFRmR0fuNI7hh4wihcSTJT1PuPXWELdYLYytLhnVc3nsjXc0hg0dsIJeSKinVZr9u94-gShmSg8UT-bo1uvZYAR7SGhWluk7pOyyPQerytgxveS_W2dFkVP_t7joF_cZ9QkxHWX7ytiK1s0nKCPCLBasWjiY_S-ZQgsYsaSjudIzCa8NFLXfdWWmJSBReBs4lM5dL7P-sxQtmzw" />
                        <div
                            class="absolute top-3 left-3 bg-secondary/90 text-on-secondary px-2 py-1 rounded-md text-[10px] font-bold uppercase" data-i18n="dashboard.scenario_card.badge_intermediate">
                            Intermediate</div>
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-charcoal-surface via-transparent to-transparent">
                        </div>
                    </div>
                    <div class="p-5 flex-1 flex flex-col">
                        <h4 class="font-bold text-ivory-text mb-2" data-i18n="dashboard.scenario_card.kpr_title">Nasabah KPR Syariah</h4>
                        <p class="text-xs text-on-surface-variant mb-6 line-clamp-2" data-i18n="dashboard.scenario_card.kpr_desc">Simulasi pengajuan pembiayaan rumah
                            tanpa riba menggunakan Akad Murabahah.</p>
                        <div class="mt-auto flex items-center justify-between">
                                <span class="text-[10px] text-tertiary flex items-center gap-1 font-label-caps"><span
                                        class="material-symbols-outlined text-xs">stars</span> <span data-i18n="dashboard.scenario_card.kpr_xp">+300 XP</span></span>
                                <a href="../Simulasi/Simulasi_Siswa.php"
                                    class="px-4 py-2 bg-surface-container-high rounded-lg text-xs font-bold text-primary group-hover:bg-primary group-hover:text-on-primary transition-colors inline-flex items-center justify-center" data-i18n="dashboard.scenario_card.umkm_btn">MULAI</a>
                        </div>
                    </div>
                </div>
                <!-- Scenario Card 4 -->
                <div
                    class="bg-charcoal-surface border border-outline-variant rounded-2xl overflow-hidden group hover:border-error transition-all flex flex-col">
                    <div class="h-40 relative">
                        <img alt="Scenario Fraud"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                            data-alt="A dark, cinematic visualization of digital data streams and suspicious activity patterns. The lighting is moody with sharp red and amber accents, symbolizing risk and fraud detection. The image represents a high-stakes simulation for detecting financial irregularities in a Sharia bank environment, styled with technological sophistication."
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuCebB6BjATIY2Xrh1DbSve4qT0ID-CDqMXm83ZXjG1ya0G5h1nzDAE0XhBE1UQ1GZxoTANng1Y3fbwz9axXZv1lFU4vxZNcgCzanOQljOfmOTUs1hLzN48y6DM7oBt0JgwxDFxgypWPcpDTXK1S6dgi-d9zfPgKRBrxeH_XkgFdz0WxO3YyMJSi2K8ro7n_wDr47I5yzzRbkNOpfUA1kr_rIGX4j1wxnKi1v4nrxkFc9WwGt-5S-blQZg" />
                        <div
                            class="absolute top-3 left-3 bg-error/90 text-white px-2 py-1 rounded-md text-[10px] font-bold uppercase" data-i18n="dashboard.scenario_card.badge_advanced">
                            Advanced</div>
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-charcoal-surface via-transparent to-transparent">
                        </div>
                    </div>
                    <div class="p-5 flex-1 flex flex-col">
                        <h4 class="font-bold text-ivory-text mb-2" data-i18n="dashboard.scenario_card.fraud_title">Deteksi Fraud Gaji</h4>
                        <p class="text-xs text-on-surface-variant mb-6 line-clamp-2" data-i18n="dashboard.scenario_card.fraud_desc">Hati-hati! Calon nasabah memberikan
                            slip gaji yang mencurigakan. Analisis data sekarang.</p>
                        <div class="mt-auto flex items-center justify-between">
                                <span class="text-[10px] text-tertiary flex items-center gap-1 font-label-caps"><span
                                        class="material-symbols-outlined text-xs">stars</span> <span data-i18n="dashboard.scenario_card.fraud_xp">+500 XP</span></span>
                                <a href="../Simulasi/Simulasi_Siswa.php"
                                    class="px-4 py-2 bg-surface-container-high rounded-lg text-xs font-bold text-error group-hover:bg-error group-hover:text-white transition-colors inline-flex items-center justify-center" data-i18n="dashboard.scenario_card.fraud_btn">ANALISIS</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- BottomNavBar (Mobile Only) -->
    <nav
        class="md:hidden fixed bottom-0 left-0 w-full bg-charcoal-surface/95 backdrop-blur-lg border-t border-outline-variant z-50 flex justify-around items-center h-16 px-4">
        <a class="flex flex-col items-center gap-1 text-primary" href="Dashboard_siswa.php">
            <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">dashboard</span>
            <span class="text-[10px] font-bold" data-i18n="dashboard.bottomnav.home">Utama</span>
        </a>
        <a class="flex flex-col items-center gap-1 text-on-surface-variant" href="../Simulasi/Simulasi_Siswa.php">
            <span class="material-symbols-outlined">psychology</span>
            <span class="text-[10px]" data-i18n="dashboard.bottomnav.simulasi">Simulasi</span>
        </a>
        <div class="relative -top-6">
            <a href="../Simulasi/Simulasi_Siswa.php"
                class="w-14 h-14 bg-primary text-on-primary rounded-full shadow-lg shadow-primary/30 flex items-center justify-center inline-flex">
                <span class="material-symbols-outlined text-3xl">play_arrow</span>
            </a>
        </div>
        <a class="flex flex-col items-center gap-1 text-on-surface-variant" href="../Pusat_Kompetensi/Pusat_Kompetensi_Siswa.php">
            <span class="material-symbols-outlined">military_tech</span>
            <span class="text-[10px]" data-i18n="dashboard.bottomnav.level">Level</span>
        </a>
        <a class="flex flex-col items-center gap-1 text-on-surface-variant" href="../Setting/Setting_Siswa.php">
            <span class="material-symbols-outlined">account_circle</span>
            <span class="text-[10px]" data-i18n="dashboard.bottomnav.profil">Profil</span>
        </a>
    </nav>
    <script>
        // Micro-interactions and effects
        document.addEventListener('DOMContentLoaded', () => {
            const cards = document.querySelectorAll('.glass-card, .group');
            cards.forEach(card => {
                card.addEventListener('mousedown', () => {
                    card.style.transform = 'scale(0.985)';
                });
                card.addEventListener('mouseup', () => {
                    card.style.transform = 'scale(1)';
                });
                card.addEventListener('mouseleave', () => {
                    card.style.transform = 'scale(1)';
                });
            });

            // Smooth appear animation for bento items
            const observerOptions = {
                threshold: 0.1
            };

            const observer = new IntersectionObserver((entries) => {
                entries.forEach((entry, index) => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                    }
                });
            }, observerOptions);

            const animItems = document.querySelectorAll('.glass-card, .grid > div');
            animItems.forEach((item, index) => {
                item.style.opacity = '0';
                item.style.transform = 'translateY(20px)';
                item.style.transition = `all 0.6s cubic-bezier(0.16, 1, 0.3, 1) ${index * 0.05}s`;
                observer.observe(item);
            });

            const bellButton = document.getElementById('dashboardBellButton');
            const bellBadge = document.getElementById('bellBadge');
            const bellStateLabel = document.getElementById('bellStateLabel');
            const feedbackDetailBtn = document.getElementById('openFeedbackDetailBtn');
            const closeFeedbackDetailBtn = document.getElementById('closeFeedbackDetailBtn');
            const feedbackDetailContainer = document.getElementById('feedbackDetailContainer');
            const adminUpdateList = document.getElementById('adminUpdateList');

            function getAdminUpdates() {
                try {
                    return JSON.parse(localStorage.getItem('adminDashboardUpdates') || '[]');
                } catch (error) {
                    return [];
                }
            }

            function isBellActive() {
                return localStorage.getItem('dashboardBellActive') === 'true';
            }

            function setBellActive(active) {
                localStorage.setItem('dashboardBellActive', active ? 'true' : 'false');
                renderBellState();
                renderAdminUpdateSection();
            }

            function renderBellState() {
                const active = isBellActive();
                if (!bellButton || !bellBadge || !bellStateLabel) return;
                if (active) {
                    bellButton.classList.add('border-primary', 'text-primary', 'bg-primary/10');
                    bellBadge.classList.remove('hidden');
                    bellStateLabel.textContent = 'Bell aktif';
                } else {
                    bellButton.classList.remove('border-primary', 'text-primary', 'bg-primary/10');
                    bellBadge.classList.add('hidden');
                    bellStateLabel.textContent = 'Bell nonaktif';
                }
            }

            function renderAdminUpdateSection() {
                if (!adminUpdateList) return;
                const active = isBellActive();
                const updates = getAdminUpdates();
                if (!active) {
                    adminUpdateList.innerHTML = '<p class="text-sm text-on-surface-variant">Lonceng dalam keadaan redup. Aktifkan untuk menerima update dari dashboard admin.</p>';
                    return;
                }
                if (!updates.length) {
                    adminUpdateList.innerHTML = '<p class="text-sm text-on-surface-variant">Tidak ada update terbaru dari admin untuk saat ini.</p>';
                    return;
                }
                adminUpdateList.innerHTML = updates.map((update) => {
                    return `
                        <div class="rounded-3xl border border-outline-variant/40 bg-charcoal-surface p-4">
                            <div class="flex items-center justify-between gap-4 mb-2">
                                <p class="font-semibold text-ivory-text">${update.title}</p>
                                <span class="text-[10px] uppercase text-on-surface-variant">${update.time || ''}</span>
                            </div>
                            <p class="text-sm text-on-surface-variant">${update.message}</p>
                        </div>`;
                }).join('');
            }

            if (bellButton) {
                bellButton.addEventListener('click', () => {
                    setBellActive(!isBellActive());
                });
            }

            if (feedbackDetailBtn && feedbackDetailContainer) {
                feedbackDetailBtn.addEventListener('click', () => {
                    feedbackDetailContainer.classList.toggle('hidden');
                    if (!feedbackDetailContainer.classList.contains('hidden')) {
                        renderAdminUpdateSection();
                    }
                });
            }

            if (closeFeedbackDetailBtn && feedbackDetailContainer) {
                closeFeedbackDetailBtn.addEventListener('click', () => {
                    feedbackDetailContainer.classList.add('hidden');
                });
            }

            renderBellState();
            renderAdminUpdateSection();
        });
    </script>
    <script>
    (function () {
    const appRoutes = {
        login: '../Login/login.php',
        adminLogin: '../Login/login_admin.php',
        student: {
            dashboard: '../Dashboard_Siswa/Dashboard_siswa.php',
            simulasi: '../Simulasi/Simulasi_Siswa.php',
            kompetensi: '../Pusat_Kompetensi/Pusat_Kompetensi_Siswa.php',
            riwayat: '../Riwayat/Riwayat_Siswa.php',
            setting: '../Setting/Setting_Siswa.php'
        },
        admin: {
            dashboard: '../Dashboard_Siswa/Dashboard_admin.php',
            simulasi: '../Simulasi/Simulasi_Admin.php',
            kompetensi: '../Pusat_Kompetensi/Pusat_Kompetensi_Admin.php',
            riwayat: '../Riwayat/Riwayat_Admin.php',
            setting: '../Setting/Setting_Admin.php'
        }
    };

    const STORAGE_KEY = 'lidm_students';

    function normalizeText(text) {
        return text
            .replace(/\s+/g, ' ')
            .trim()
            .toLowerCase();
    }

    function currentPage() {
        const path = window.location.pathname.toLowerCase();
        if (path.includes('/login_admin.php')) return 'adminLogin';
        if (path.includes('/login.php')) return 'login';
        if (path.includes('/dashboard_siswa.php')) return 'studentDashboard';
        if (path.includes('/dashboard_admin.php')) return 'adminDashboard';
        if (path.includes('/simulasi_siswa.php')) return 'studentSimulasi';
        if (path.includes('/simulasi_admin.php')) return 'adminSimulasi';
        if (path.includes('/pusat_kompetensi_siswa.php')) return 'studentKompetensi';
        if (path.includes('/pusat_kompetensi_admin.php')) return 'adminKompetensi';
        if (path.includes('/riwayat_siswa.php')) return 'studentRiwayat';
        if (path.includes('/riwayat_admin.php')) return 'adminRiwayat';
        if (path.includes('/setting_siswa.php')) return 'studentSetting';
        if (path.includes('/setting_admin.php')) return 'adminSetting';
        return 'unknown';
    }

    function isLoggedIn() {
        return localStorage.getItem('isLoggedIn') === 'true';
    }

    function currentRole() {
        return localStorage.getItem('userRole') || null;
    }

    function roleForCurrentPage() {
        const page = currentPage();
        return page.startsWith('admin') ? 'admin' : page.startsWith('student') ? 'student' : null;
    }

    function getRouteFor(role, pageName) {
        if (role === 'admin') {
            return appRoutes.admin[pageName] || appRoutes.admin.dashboard;
        }
        return appRoutes.student[pageName] || appRoutes.student.dashboard;
    }

    function getDestinationByAnchorText(text) {
        const normalized = normalizeText(text);
        if (normalized.includes('dashboard')) return 'dashboard';
        if (normalized.includes('simulasi') || normalized.includes('simulation')) return 'simulasi';
        if (normalized.includes('kompetensi') || normalized.includes('competency')) return 'kompetensi';
        if (normalized.includes('riwayat') || normalized.includes('history')) return 'riwayat';
        if (normalized.includes('setelan') || normalized.includes('setting') || normalized.includes('pengaturan')) return 'setting';
        return null;
    }

    function applyNavigationLinks() {
        const role = currentRole() || roleForCurrentPage() || 'student';
        document.querySelectorAll('nav a[href="#"]').forEach((anchor) => {
            const destination = getDestinationByAnchorText(anchor.textContent || anchor.innerText || '');
            if (!destination) return;
            const target = getRouteFor(role, destination);
            if (target) anchor.href = target;
        });

        document.querySelectorAll('a[href="#"]').forEach((anchor) => {
            const destination = getDestinationByAnchorText(anchor.textContent || anchor.innerText || '');
            if (!destination) return;
            const target = getRouteFor(role, destination);
            if (target) anchor.href = target;
        });
    }

    function redirectToLogin() {
        window.location.href = appRoutes.login;
    }

    function redirectToDashboard() {
        const role = currentRole();
        window.location.href = role === 'admin' ? appRoutes.admin.dashboard : appRoutes.student.dashboard;
    }

    function applyRouteGuards() {
        const page = currentPage();
        if (page === 'login' || page === 'adminLogin') {
            // do not auto-redirect from login pages; only block if already authenticated
            return;
        }

        if (!isLoggedIn()) {
            redirectToLogin();
            return;
        }

        const role = currentRole();
        if (page.startsWith('admin') && role !== 'admin') {
            redirectToDashboard();
            return;
        }
        if (page.startsWith('student') && role !== 'student') {
            redirectToDashboard();
            return;
        }
    }

    function normalizeStudents(students) {
        return students.map((student) => ({
            id: student.id || `${Date.now()}-${Math.random().toString(16).slice(2)}`,
            name: student.name || 'Siswa Baru',
            email: student.email || 'user@example.com',
            status: student.status || 'aktif',
            kelas: student.kelas || 'X',
            ...student
        }));
    }

    function getStudentRecords() {
        try {
            const raw = localStorage.getItem(STORAGE_KEY);
            if (!raw) return [];
            return normalizeStudents(JSON.parse(raw));
        } catch (error) {
            console.warn('Gagal membaca data siswa dari localStorage', error);
            return [];
        }
    }

    function saveStudentRecords(students) {
        localStorage.setItem(STORAGE_KEY, JSON.stringify(normalizeStudents(students)));
        renderStudentAdminPanel();
    }

    function initialStudentData() {
        const defaultStudents = [
            { id: 's1', name: 'Alya Saputra', email: 'alya.saputra@example.com', kelas: 'XI', status: 'aktif' },
            { id: 's2', name: 'Bayu Pratama', email: 'bayu.pratama@example.com', kelas: 'XI', status: 'aktif' },
            { id: 's3', name: 'Citra Lestari', email: 'citra.lestari@example.com', kelas: 'XII', status: 'tidak aktif' }
        ];
        if (!localStorage.getItem(STORAGE_KEY)) {
            localStorage.setItem(STORAGE_KEY, JSON.stringify(defaultStudents));
        }
    }

    function createAdminPanelUI() {
        if (document.getElementById('app-admin-panel')) return;

        const style = document.createElement('style');
        style.textContent = `
            #app-admin-panel { position: fixed; z-index: 9999; right: 24px; bottom: 24px; font-family: 'Plus Jakarta Sans', sans-serif; }
            #app-admin-panel button { width: 52px; height: 52px; border-radius: 999px; border: none; cursor: pointer; background: #8ed5b9; color: #131313; box-shadow: 0 20px 40px rgba(0, 0, 0, 0.16); display: grid; place-items: center; font-size: 1.25rem; }
            #app-admin-panel .app-admin-modal { position: fixed; inset: 0; background: rgba(0, 0, 0, 0.6); backdrop-filter: blur(6px); display: flex; align-items: center; justify-content: center; padding: 20px; }
            #app-admin-panel .app-admin-modal.hidden { display: none; }
            #app-admin-panel .app-admin-sheet { width: min(100%, 900px); max-height: min(100%, 740px); background: rgba(18, 18, 18, 0.96); border: 1px solid rgba(142, 213, 185, 0.16); border-radius: 24px; padding: 24px; overflow: hidden; display: flex; flex-direction: column; }
            #app-admin-panel .app-admin-header { display: flex; justify-content: space-between; gap: 16px; align-items: center; margin-bottom: 18px; }
            #app-admin-panel .app-admin-header h2 { margin: 0; font-size: 1.1rem; color: #f5f5f5; }
            #app-admin-panel .app-admin-actions button { background: #0d5c46; color: #f5f5f5; border: none; border-radius: 12px; padding: 10px 16px; cursor: pointer; font-weight: 600; }
            #app-admin-panel .app-admin-list { overflow-y: auto; flex: 1; min-height: 220px; max-height: 520px; border-radius: 18px; border: 1px solid rgba(142, 213, 185, 0.12); background: rgba(24, 24, 24, 0.92); padding: 16px; }
            #app-admin-panel .app-admin-item { display: grid; grid-template-columns: 1fr auto; gap: 12px; align-items: center; padding: 14px 12px; border-radius: 14px; background: rgba(31, 31, 31, 0.9); margin-bottom: 12px; }
            #app-admin-panel .app-admin-item:last-child { margin-bottom: 0; }
            #app-admin-panel .app-admin-item .item-meta { display: grid; gap: 4px; }
            #app-admin-panel .app-admin-item .item-meta span { color: #d9d9d9; font-size: 0.92rem; }
            #app-admin-panel .app-admin-item .item-meta .item-label { color: #8ed5b9; font-weight: 700; }
            #app-admin-panel .app-admin-item .item-controls { display: flex; flex-wrap: wrap; gap: 8px; justify-content: flex-end; }
            #app-admin-panel .app-admin-item button { border: none; border-radius: 10px; padding: 8px 12px; cursor: pointer; font-size: 0.85rem; font-weight: 700; }
            #app-admin-panel .app-admin-item button.edit { background: rgba(142, 213, 185, 0.16); color: #f5f5f5; }
            #app-admin-panel .app-admin-item button.delete { background: rgba(255, 120, 120, 0.18); color: #fff; }
            #app-admin-panel .app-admin-status { display: inline-flex; gap: 6px; align-items: center; color: #bfc9c2; font-size: 0.82rem; }
            #app-admin-panel .app-admin-status span.status-dot { display: inline-block; width: 8px; height: 8px; border-radius: 999px; background: #8ed5b9; }
            #app-admin-panel .app-admin-status span.status-dot.inactive { background: #ff8f8f; }
        `;
        document.head.appendChild(style);

        const wrapper = document.createElement('div');
        wrapper.id = 'app-admin-panel';
        wrapper.innerHTML = `
            <button type="button" id="appAdminToggle" title="Buka Panel Siswa">ðŸ‘¥</button>
            <div id="appAdminModal" class="app-admin-modal hidden">
                <div class="app-admin-sheet">
                    <div class="app-admin-header">
                        <div>
                            <h2>Admin: Kelola Data Siswa</h2>
                            <p style="margin:0;color:#bfc9c2;font-size:0.92rem;">Gunakan tombol berikut untuk membuat, mengubah, dan menghapus data siswa.</p>
                        </div>
                        <div class="app-admin-actions">
                            <button type="button" id="appAdminCreate">Tambah Siswa</button>
                            <button type="button" id="appAdminClose">Tutup</button>
                        </div>
                    </div>
                    <div class="app-admin-list" id="appAdminList"></div>
                </div>
            </div>
        `;
        document.body.appendChild(wrapper);

        document.getElementById('appAdminToggle').addEventListener('click', toggleAdminModal);
        document.getElementById('appAdminClose').addEventListener('click', toggleAdminModal);
        document.getElementById('appAdminCreate').addEventListener('click', openCreateStudentForm);
        document.getElementById('appAdminModal').addEventListener('click', (event) => {
            if (event.target === event.currentTarget) toggleAdminModal();
        });
    }

    function toggleAdminModal() {
        const modal = document.getElementById('appAdminModal');
        if (!modal) return;
        modal.classList.toggle('hidden');
        if (!modal.classList.contains('hidden')) {
            renderStudentAdminPanel();
        }
    }

    function renderStudentAdminPanel() {
        const listElement = document.getElementById('appAdminList');
        if (!listElement) return;
        const students = getStudentRecords();
        if (!students.length) {
            listElement.innerHTML = '<p style="color:#d9d9d9;">Belum ada data siswa. Tambahkan siswa baru dengan tombol di atas.</p>';
            return;
        }
        listElement.innerHTML = students.map((student) => {
            const statusClass = student.status.toLowerCase().includes('aktif') ? '' : 'inactive';
            return `
                <div class="app-admin-item">
                    <div class="item-meta">
                        <span class="item-label">${student.name}</span>
                        <span>Email: ${student.email}</span>
                        <span>Kelas: ${student.kelas}</span>
                        <span class="app-admin-status">
                            <span class="status-dot ${statusClass}"></span>
                            ${student.status}
                        </span>
                    </div>
                    <div class="item-controls">
                        <button type="button" class="edit" data-action="edit" data-id="${student.id}">Edit</button>
                        <button type="button" class="delete" data-action="delete" data-id="${student.id}">Hapus</button>
                    </div>
                </div>
            `;
        }).join('');

        listElement.querySelectorAll('button[data-action="edit"]').forEach((button) => {
            button.addEventListener('click', () => {
                const id = button.dataset.id;
                openEditStudentForm(id);
            });
        });

        listElement.querySelectorAll('button[data-action="delete"]').forEach((button) => {
            button.addEventListener('click', () => {
                const id = button.dataset.id;
                deleteStudentRecord(id);
            });
        });
    }

    function openEditStudentForm(studentId) {
        const students = getStudentRecords();
        const student = students.find((item) => item.id === studentId);
        if (!student) return;
        const name = prompt('Nama siswa:', student.name);
        if (name === null) return;
        const email = prompt('Email siswa:', student.email);
        if (email === null) return;
        const kelas = prompt('Kelas siswa:', student.kelas);
        if (kelas === null) return;
        const status = prompt('Status siswa (aktif / tidak aktif):', student.status) || student.status;
        const updated = students.map((item) => item.id === studentId ? { ...item, name: name.trim() || item.name, email: email.trim() || item.email, kelas: kelas.trim() || item.kelas, status: status.trim() || item.status } : item);
        saveStudentRecords(updated);
    }

    function openCreateStudentForm() {
        const name = prompt('Nama siswa baru:');
        if (!name) return;
        const email = prompt('Email siswa baru:');
        if (!email) return;
        const kelas = prompt('Kelas siswa baru (misal: X, XI, XII):', 'X');
        if (!kelas) return;
        const status = prompt('Status siswa (aktif / tidak aktif):', 'aktif');
        const students = getStudentRecords();
        const newStudent = {
            id: `s-${Date.now()}`,
            name: name.trim(),
            email: email.trim(),
            kelas: kelas.trim(),
            status: status.trim() || 'aktif'
        };
        students.push(newStudent);
        saveStudentRecords(students);
    }

    function deleteStudentRecord(studentId) {
        const students = getStudentRecords();
        const student = students.find((item) => item.id === studentId);
        if (!student) return;
        const confirmed = confirm(`Hapus siswa ${student.name}?`);
        if (!confirmed) return;
        const updated = students.filter((item) => item.id !== studentId);
        saveStudentRecords(updated);
    }

    function setupLogoutButton() {
        const logoutLink = document.getElementById('logoutLink');
        if (!logoutLink) return;

        logoutLink.addEventListener('click', (event) => {
            event.preventDefault();
            localStorage.setItem('isLoggedIn', 'false');
            localStorage.removeItem('userRole');
            redirectToLogin();
        });
    }

    function startApp() {
        window.appRoutes = appRoutes;
        initialStudentData();
        applyNavigationLinks();
        applyRouteGuards();
        setupLogoutButton();
        if (currentRole() === 'admin' && currentPage().startsWith('admin')) {
            createAdminPanelUI();
        }
            applyUserProfileInfo();
            applyAdminContent();
        }

    function applyUserProfileInfo() {
        var currentUser = localStorage.getItem('currentUser') || 'Siswa';
        var displayName = currentUser.trim() || 'Siswa';
        var greeting = document.getElementById('usernameGreeting');
        var supervisorName = document.getElementById('aiSupervisorName');
        var tooltipUsername = document.getElementById('tooltipUsername');
        var tooltipRole = document.getElementById('tooltipRole');
        var tooltipStatus = document.getElementById('tooltipStatus');

        if (greeting) {
            if (window.appI18n) {
                var raw = window.appI18n.t('dashboard.greeting', 'Selamat Datang, {name}!');
                greeting.textContent = window.appI18n.formatString(raw, { name: displayName });
            } else {
                greeting.textContent = 'Selamat Datang, ' + displayName + '!';
            }
        }
        if (supervisorName) supervisorName.textContent = displayName;
        if (tooltipUsername) tooltipUsername.textContent = displayName;
        if (tooltipRole) tooltipRole.textContent = currentRole() === 'admin' ? 'Administrator' : 'Mahasiswa';
        if (tooltipStatus) tooltipStatus.textContent = 'Aktif';

        // Apply saved profile photo
        var savedPhoto = localStorage.getItem('profilePhoto');
        if (savedPhoto) {
            var dashImgs = document.querySelectorAll('#dashProfileImg, #dashAvatarSmall');
            for (var i = 0; i < dashImgs.length; i++) {
                if (dashImgs[i]) dashImgs[i].src = savedPhoto;
            }
        }
    }

    document.addEventListener('DOMContentLoaded', startApp);
})();

    // ===== Apply Admin Content Config (CRUD dari Dashboard_admin.php) =====
    function applyAdminContent() {
        try {
            var raw = localStorage.getItem('adminContentConfig');
            if (!raw) return;
            var cfg = JSON.parse(raw);

            // Supervisor feedback
            if (cfg.supervisor && cfg.supervisor.text) {
                var feedbackEl = document.querySelector('[data-i18n="dashboard.ai_supervisor.desc"]');
                if (feedbackEl) {
                    var name = localStorage.getItem('currentUser') || 'Siswa';
                    feedbackEl.innerHTML = name + ', ' + cfg.supervisor.text.replace(/^"(.*)"$/, '$1');
                }
                var optext = document.querySelector('[data-i18n="dashboard.feedback_detail.observasi_text"]');
                var rectext = document.querySelector('[data-i18n="dashboard.feedback_detail.rekomendasi_text"]');
                var cattext = document.querySelector('[data-i18n="dashboard.feedback_detail.catatan_text"]');
                var tartext = document.querySelector('[data-i18n="dashboard.feedback_detail.target_text"]');
                if (optext) optext.textContent = cfg.supervisor.observasi || optext.textContent;
                if (rectext) rectext.textContent = cfg.supervisor.rekomendasi || rectext.textContent;
                if (cattext) cattext.textContent = cfg.supervisor.catatan || cattext.textContent;
                if (tartext) tartext.textContent = cfg.supervisor.target || tartext.textContent;
            }

            // Profile info
            if (cfg.profile) {
                var roleEl = document.querySelector('[data-i18n="dashboard.profile.role_value"]');
                var pointsEl = document.querySelector('[data-i18n="dashboard.profile.points_label"]');
                if (roleEl) roleEl.textContent = cfg.profile.role || roleEl.textContent;
                if (pointsEl) {
                    var parent = pointsEl.closest('.flex.flex-col');
                    if (parent) {
                        var val = parent.querySelector('.font-headline-md.text-tertiary');
                        if (val) val.textContent = cfg.profile.points || val.textContent;
                    }
                }
            }

            // Radar chart percentages
            if (cfg.radar) {
                var bars = document.querySelectorAll('.h-1\\.5.w-full.bg-surface-container');
                if (bars.length >= 4) {
                    var vals = [cfg.radar.murabahah, cfg.radar.mudharabah, cfg.radar.musyarakah, cfg.radar.kepatuhan];
                    var labels = document.querySelectorAll('.space-y-4 .flex.justify-between .font-bold');
                    bars.forEach(function(bar, i) {
                        if (i < vals.length && vals[i] !== undefined) {
                            var fill = bar.querySelector('div:first-child');
                            if (fill) fill.style.width = vals[i] + '%';
                            if (labels && labels[i]) labels[i].textContent = vals[i] + '%';
                        }
                    });
                    var globalEl = document.querySelector('.text-lg');
                    if (globalEl && cfg.radar.global) globalEl.textContent = cfg.radar.global + '%';
                }
            }

            // Topbar balance & XP
            if (cfg.topbar) {
                var balEl = document.getElementById('topbarBalance');
                var xpEl = document.getElementById('topbarXp');
                if (balEl && cfg.topbar.balance) balEl.textContent = 'Balance: ' + cfg.topbar.balance;
                if (xpEl && cfg.topbar.xp) xpEl.textContent = cfg.topbar.xp;
            }

            // Quick Actions
            if (cfg.quickActions && cfg.quickActions.length) {
                cfg.quickActions.forEach(function(qa) {
                    var titleEl = document.getElementById('qaTitle-' + qa.id);
                    var descEl = document.getElementById('qaDesc-' + qa.id);
                    var iconEl = document.getElementById('qaIcon-' + qa.id);
                    var linkEl = document.querySelector('[data-qa-id="' + qa.id + '"]');
                    if (titleEl && qa.title) titleEl.textContent = qa.title;
                    if (descEl && qa.desc) descEl.textContent = qa.desc;
                    if (linkEl && qa.link) linkEl.href = qa.link;
                    if (iconEl && qa.icon) {
                        var span = iconEl.querySelector('.material-symbols-outlined');
                        if (span) span.textContent = qa.icon;
                        if (qa.color) {
                            iconEl.className = 'w-12 h-12 rounded-xl flex items-center justify-center group-hover:bg-opacity-20 transition-colors';
                            var isError = qa.color === 'error';
                            var isTertiary = qa.color === 'tertiary';
                            var isSecondary = qa.color === 'secondary';
                            if (isError) {
                                iconEl.classList.add('bg-error/10');
                                if (span) span.className = 'material-symbols-outlined text-error';
                            } else if (isTertiary) {
                                iconEl.classList.add('bg-tertiary/10');
                                if (span) span.className = 'material-symbols-outlined text-tertiary';
                            } else if (isSecondary) {
                                iconEl.classList.add('bg-secondary/10');
                                if (span) span.className = 'material-symbols-outlined text-secondary';
                            } else {
                                iconEl.classList.add('bg-primary/10');
                                if (span) span.className = 'material-symbols-outlined text-primary';
                            }
                        }
                    }
                });
            }

            // Scenario cards
            if (cfg.scenarios && cfg.scenarios.length) {
                var cards = document.querySelectorAll('.grid-cols-1\\.sm\\:grid-cols-2\\.xl\\:grid-cols-4 > div');
                if (cards.length) {
                    cfg.scenarios.forEach(function(sc, i) {
                        if (i >= cards.length) return;
                        var card = cards[i];
                        if (!card) return;
                        // Title
                        var titleEl = card.querySelector('h4');
                        if (titleEl && sc.title) titleEl.textContent = sc.title;
                        // Description
                        var descEl = card.querySelector('.line-clamp-2');
                        if (descEl && sc.desc) descEl.textContent = sc.desc;
                        // Badge
                        var badgeEl = card.querySelector('.text-\\[10px\\].font-bold.uppercase');
                        if (badgeEl && sc.badge) {
                            badgeEl.textContent = sc.badge;
                            var parentDiv = badgeEl.closest('.h-40');
                            if (parentDiv) {
                                var grandParent = parentDiv.parentElement;
                                if (grandParent) {
                                    // Reset badge color based on level
                                    var isAdvanced = sc.badge.toLowerCase() === 'advanced';
                                    badgeEl.className = 'absolute top-3 left-3 px-2 py-1 rounded-md text-[10px] font-bold uppercase';
                                    if (isAdvanced) {
                                        badgeEl.classList.add('bg-error/90', 'text-white');
                                    } else if (sc.badge.toLowerCase() === 'intermediate') {
                                        badgeEl.classList.add('bg-secondary/90', 'text-on-secondary');
                                    } else {
                                        badgeEl.classList.add('bg-primary/90', 'text-on-primary');
                                    }
                                }
                            }
                        }
                        // XP
                        var xpEl = card.querySelector('.text-\\[10px\\].text-tertiary .material-symbols-outlined + span, .text-\\[10px\\].text-tertiary.font-label-caps .material-symbols-outlined + span');
                        if (!xpEl) {
                            var allSpans = card.querySelectorAll('.font-label-caps span');
                            allSpans.forEach(function(s) {
                                if (s.textContent.includes('XP')) xpEl = s;
                            });
                        }
                        if (xpEl && sc.xp) xpEl.textContent = '+' + sc.xp + ' XP';
                    });
                }
            }
        } catch(e) { console.warn('applyAdminContent error:', e); }
    }

    // Cross-tab sync for admin config changes
    window.addEventListener('storage', (e) => {
        if (e.key === 'appTheme' && window.appI18n) {
            window.appI18n.applyTheme();
        } else if (e.key === 'appLanguage' && window.appI18n) {
            window.appI18n.applyTranslation();
        } else if (e.key === 'adminContentConfig') {
            applyAdminContent();
        }
    });

    // Re-apply username after language switch (i18n overwrites the greeting)
    window.addEventListener('languagechange', function() {
        var currentUser = localStorage.getItem('currentUser') || 'Siswa';
        var displayName = currentUser.trim() || 'Siswa';
        var greeting = document.getElementById('usernameGreeting');
        if (greeting && window.appI18n) {
            var raw = window.appI18n.t('dashboard.greeting', 'Selamat Datang, {name}!');
            greeting.textContent = window.appI18n.formatString(raw, { name: displayName });
        }
    });
    </script>
    <script src="../assets/js/i18n.js"></script>
    <div id="langToggle" style="position:fixed;bottom:72px;right:16px;z-index:9999;display:flex;gap:4px;background:var(--surface-container,#1e1e2e);padding:4px;border-radius:8px;border:1px solid var(--outline-variant,#3e3e4e);box-shadow:0 4px 12px rgba(0,0,0,0.3);">
        <button onclick="if(window.appI18n){window.appI18n.setLanguage('id')}" id="langBtnId" style="padding:6px 12px;border-radius:6px;font-size:11px;font-weight:700;cursor:pointer;border:none;background:var(--primary,#bb86fc);color:#fff;">ID</button>
        <button onclick="if(window.appI18n){window.appI18n.setLanguage('en')}" id="langBtnEn" style="padding:6px 12px;border-radius:6px;font-size:11px;font-weight:700;cursor:pointer;border:none;background:transparent;color:var(--on-surface,#e0e0e0);">EN</button>
    </div>
    <script>(function(){var lang=localStorage.getItem('appLanguage')||'id';var bId=document.getElementById('langBtnId');var bEn=document.getElementById('langBtnEn');if(lang==='en'){bId.style.background='transparent';bId.style.color='var(--on-surface,#e0e0e0)';bEn.style.background='var(--primary,#bb86fc)';bEn.style.color='#fff';}else{bEn.style.background='transparent';bEn.style.color='var(--on-surface,#e0e0e0)';bId.style.background='var(--primary,#bb86fc)';bId.style.color='#fff';}})();</script>
    <script src="../assets/js/help-menu.js"></script>
</body>

</html>