<!DOCTYPE html>

<html lang="id">
<script>document.documentElement.className=localStorage.getItem('appTheme')==='light'?'light':'dark'</script>

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title data-i18n="login.page_title">Login | SmartBank Syariah AI Virtual Laboratory</title>
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
                        "error-container": "#93000a",
                        "ivory-text": "#F5F5F0",
                        "secondary-container": "#ad5401",
                        "on-secondary-container": "#ffede3",
                        "tertiary": "#e6c183",
                        "surface-bright": "#393939",
                        "inverse-on-surface": "#313030",
                        "surface-container-lowest": "#0e0e0e",
                        "on-surface": "#e5e2e1",
                        "surface-variant": "#353534",
                        "surface-container-highest": "#353534",
                        "charcoal-surface": "#1A1A1A",
                        "surface-dim": "#131313",
                        "sharia-green-deep": "#083B2D",
                        "on-error": "#690005",
                        "on-secondary": "#512400",
                        "error": "#ffb4ab",
                        "on-primary-fixed-variant": "#00513d",
                        "bronze-accent": "#AD844A",
                        "secondary-fixed": "#ffdcc7",
                        "background": "#131313",
                        "surface-container-high": "#2a2a2a",
                        "warning-amber": "#FFBF00",
                        "on-tertiary-fixed-variant": "#5b4311",
                        "on-tertiary-fixed": "#271900",
                        "on-background": "#e5e2e1",
                        "on-primary-fixed": "#002117",
                        "on-tertiary": "#422d00",
                        "primary-fixed-dim": "#8ed5b9",
                        "on-primary-container": "#8cd2b6",
                        "secondary": "#ffb787",
                        "outline-variant": "#3f4944",
                        "surface-container-low": "#1c1b1b",
                        "primary-container": "#0d5c46",
                        "on-secondary-fixed-variant": "#733600",
                        "primary-fixed": "#aaf1d4",
                        "on-surface-variant": "#bfc9c2",
                        "tertiary-fixed-dim": "#e6c183",
                        "surface-tint": "#8ed5b9",
                        "tertiary-fixed": "#ffdea8",
                        "on-error-container": "#ffdad6",
                        "surface-container": "#201f1f",
                        "inverse-primary": "#226a53",
                        "inverse-surface": "#e5e2e1",
                        "secondary-fixed-dim": "#ffb787",
                        "surface": "#131313",
                        "on-secondary-fixed": "#311300",
                        "on-primary": "#003829",
                        "primary": "#8ed5b9",
                        "on-tertiary-container": "#e3bf81",
                        "outline": "#89938d",
                        "tertiary-container": "#674d1a"
                    },
                    "fontFamily": {
                        "headline-lg-mobile": ["Plus Jakarta Sans"],
                        "label-caps": ["Inter"],
                        "body-lg": ["Plus Jakarta Sans"],
                        "headline-md": ["Plus Jakarta Sans"],
                        "data-mono": ["Inter"],
                        "body-md": ["Plus Jakarta Sans"],
                        "headline-lg": ["Plus Jakarta Sans"]
                    },
                    "fontSize": {
                        "headline-lg-mobile": ["28px", { "lineHeight": "1.2", "fontWeight": "700" }],
                        "label-caps": ["12px", { "lineHeight": "1", "letterSpacing": "0.05em", "fontWeight": "600" }],
                        "body-lg": ["18px", { "lineHeight": "1.6", "fontWeight": "400" }],
                        "headline-md": ["24px", { "lineHeight": "1.3", "fontWeight": "600" }],
                        "data-mono": ["14px", { "lineHeight": "1.4", "fontWeight": "500" }],
                        "body-md": ["16px", { "lineHeight": "1.5", "fontWeight": "400" }],
                        "headline-lg": ["40px", { "lineHeight": "1.2", "letterSpacing": "-0.02em", "fontWeight": "700" }]
                    }
                }
            }
        }
    </script>
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }

        .glass-panel {
            background: rgba(26, 26, 26, 0.7);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(142, 213, 185, 0.1);
        }

        .input-focus-glow:focus-within {
            box-shadow: 0 0 15px rgba(142, 213, 185, 0.2);
            border-color: #8ed5b9;
        }

        .sharia-gradient {
            background: linear-gradient(135deg, #083B2D 0%, #1A1A1A 100%);
        }

        @keyframes subtle-float {
            0% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-10px);
            }

            100% {
                transform: translateY(0px);
            }
        }

        .animate-float {
            animation: subtle-float 6s ease-in-out infinite;
        }
    </style>
    <style>
        /* Registration modal styling - futuristic, consistent with theme */
        #registerModal { display: none; }
        #registerModal.flex { display: flex; }
        #registerModal .modal-sheet { width: 100%; max-width: 420px; border-radius: 16px; padding: 22px; box-shadow: 0 20px 50px rgba(2,6,23,0.6); background: linear-gradient(180deg, rgba(20,20,20,0.9), rgba(14,14,14,0.85)); border: 1px solid rgba(142,213,185,0.06); backdrop-filter: blur(6px); }
        #registerModal h3 { margin: 0 0 8px 0; color: var(--tw-color-ivory-text, #F5F5F0); font-weight: 700; }
        #registerModal .modal-sub { color: rgba(191,201,194,0.9); font-size: 0.95rem; margin-bottom: 14px; }
        #registerModal input { width: 100%; padding: 12px 14px; border-radius: 10px; border: 1px solid rgba(143,148,144,0.12); background: rgba(20,20,20,0.6); color: #e5e2e1; outline: none; }
        #registerModal input:focus { box-shadow: 0 8px 30px rgba(142,213,185,0.06); border-color: rgba(142,213,185,0.32); }
        #registerModal .modal-actions { display:flex; gap:10px; justify-content:flex-end; margin-top:6px; }
        #registerModal .btn-primary { background: linear-gradient(90deg,#0d5c46,#2a7a63); color: #ffffff; padding:10px 14px; border-radius:10px; border:none; font-weight:700; }
        #registerModal .btn-ghost { background:transparent; border:1px solid rgba(143,148,144,0.12); color: rgba(191,201,194,0.9); padding:10px 14px; border-radius:10px; }
        #registerBackdrop { transition: opacity .25s ease; }
        #registerModal.show #registerBackdrop { opacity:1; }
        /* small responsive tweaks */
        @media (max-width: 640px){ #registerModal .modal-sheet{ padding:18px; border-radius:12px;} }
    </style>
</head>

<body class="bg-background text-on-background font-body-md selection:bg-primary selection:text-on-primary">
    <main class="min-h-screen flex flex-col md:flex-row overflow-hidden">
        <!-- Left Side: Visual/Branding (Hidden on Mobile) -->
        <div class="hidden md:flex md:w-1/2 lg:w-3/5 relative overflow-hidden bg-sharia-green-deep">
            <!-- Background Image with Overlay -->
            <div class="absolute inset-0 z-0 scale-105"
                style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBHDhvM6mQibPzh2TtPV3m8B-l5ZTI98Eagg9pR59QbgLwyF5LZFrSxWUSqDBy6EYVNXn8dWcoOkN9STbJP-UbF0-Cc_kdaKYGcoeK-16fVZCCZrvNqHSjWv5klHTyxw-3ZZccWAql2nvIQM5su5zasJ7iFfCDjMhmBahUM4JekkrBKQ5pOpbP7IqIhK4aRflmnwkxEUeEookanYnk0YA-PtpBAP_Ub3U3J8u4XBaucW10VW5c4C1HeG9H7mVF_YvgijpwclkVAwqL-'); background-size: cover; background-position: center;">
                <div
                    class="absolute inset-0 bg-gradient-to-tr from-sharia-green-deep via-sharia-green-deep/80 to-transparent">
                </div>
            </div>
            <!-- Content Overlay -->
            <div class="relative z-10 w-full h-full flex flex-col justify-between p-12 lg:p-20">
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 bg-primary rounded-lg flex items-center justify-center">
                        <span class="material-symbols-outlined text-sharia-green-deep font-bold">account_balance</span>
                    </div>
                    <div>
                        <h1 class="font-headline-md text-headline-md text-primary tracking-tight" data-i18n="login.brand.title">SmartBank Syariah AI
                        </h1>
                        <p class="font-label-caps text-label-caps text-on-primary-fixed-variant" data-i18n="login.brand.subtitle">VIRTUAL LABORATORY</p>
                    </div>
                </div>
                <div class="max-w-xl">
                    <h2 class="font-headline-lg text-headline-lg mb-6 leading-tight text-ivory-text" data-i18n="login.hero.heading" data-i18n-attr="html">
                        Membangun Masa Depan <span class="text-primary">Perbankan Syariah</span> dengan Kecerdasan
                        Buatan.
                    </h2>
                    <p class="text-body-lg font-body-lg text-on-surface-variant mb-8" data-i18n="login.hero.desc">
                        Platform simulasi tingkat lanjut untuk mengasah kompetensi operasional dan kepatuhan Sharia
                        dalam ekosistem perbankan digital modern.
                    </p>
                    <!-- Decorative Element -->
                    <div class="flex gap-4 items-center">
                        <div class="flex -space-x-4">
                            <div
                                class="w-10 h-10 rounded-full border-2 border-sharia-green-deep bg-surface-container-high flex items-center justify-center">
                                <span class="material-symbols-outlined text-primary text-sm">school</span>
                            </div>
                            <div
                                class="w-10 h-10 rounded-full border-2 border-sharia-green-deep bg-surface-container-high flex items-center justify-center">
                                <span class="material-symbols-outlined text-secondary text-sm">bolt</span>
                            </div>
                            <div
                                class="w-10 h-10 rounded-full border-2 border-sharia-green-deep bg-surface-container-high flex items-center justify-center">
                                <span class="material-symbols-outlined text-tertiary text-sm">verified_user</span>
                            </div>
                        </div>
                        <span class="text-label-caps font-label-caps text-on-surface-variant" data-i18n="login.hero.trusted">Terpercaya oleh 50+
                            Institusi Pendidikan</span>
                    </div>
                </div>
                <div class="text-sm text-on-surface-variant/60 flex gap-6">
                    <span data-i18n="login.footer.copyright">© 2024 SmartBank Syariah AI</span>
                    <a class="hover:text-primary transition-colors" href="#" data-i18n="login.footer.privacy">Kebijakan Privasi</a>
                    <a class="hover:text-primary transition-colors" href="#" data-i18n="login.footer.help">Bantuan</a>
                </div>
            </div>
            <!-- Floating Image Detail -->
            <div class="absolute right-[-5%] bottom-[10%] w-[250px] animate-float opacity-80 pointer-events-none">
                <img class="rounded-2xl shadow-2xl border border-outline-variant/30"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuDJaN4N8t09Cr-Z4aBESvlE1I-Pog9bshG4o7fvGdupcZQDy-L4Rf8FuSScFdJOugli1vtNU1z5xQJH2ngQiW0zWB0Ug48_hik67Zbu8fRltveYHtJHLoyZf22AELIsqOGzxQ6h0G_9LdCWTrysKMYwkDY4-fQGlGvFewrCoWgNYrLgplDEHF0M4B39IkcETgm2QAwbolUcwKwTxUq0lonwTNgmB3YBuz1b6m4Pa3G0EhiwhjbYGFICuCmaPtu6OSYtNwm7K-Eumki8" />
            </div>
        </div>
        <!-- Right Side: Login Form -->
        <div class="w-full md:w-1/2 lg:w-2/5 flex items-center justify-center p-6 md:p-12 lg:p-16 bg-background">
            <div class="w-full max-w-md">
                <!-- Mobile Branding (Visible only on mobile) -->
                <div class="md:hidden flex flex-col items-center mb-10">
                    <div class="w-16 h-16 bg-primary rounded-xl flex items-center justify-center mb-4">
                        <span
                            class="material-symbols-outlined text-sharia-green-deep text-3xl font-bold">account_balance</span>
                    </div>
                    <h1 class="font-headline-md text-headline-md text-primary text-center" data-i18n="login.mobile.brand.title">SmartBank Syariah AI</h1>
                    <p class="font-label-caps text-label-caps text-on-surface-variant">VIRTUAL LABORATORY</p>
                </div>
                <div class="mb-10 text-center md:text-left">
                    <h2 class="font-headline-md text-headline-md text-ivory-text mb-2" data-i18n="login.welcome.title">Selamat Datang</h2>
                    <p class="text-on-surface-variant font-body-md" data-i18n="login.welcome.desc">Silakan masuk untuk melanjutkan simulasi anda.</p>
                </div>
                <!-- Form -->
                <form class="space-y-6" id="loginForm" onsubmit="handleLogin(event)">
                    <div class="space-y-2">
                        <label
                            class="font-label-caps text-label-caps text-on-surface-variant block uppercase tracking-wider"
                            for="username" data-i18n="login.label.username">Identitas Pengguna</label>
                        <div
                            class="relative flex items-center group input-focus-glow transition-all duration-200 border border-outline-variant rounded-lg bg-surface-container-low">
                            <span
                                class="material-symbols-outlined absolute left-4 text-on-surface-variant group-focus-within:text-primary transition-colors">person</span>
                            <input
                                class="w-full bg-transparent border-none py-4 pl-12 pr-4 text-ivory-text placeholder:text-outline focus:ring-0 rounded-lg font-body-md"
                                id="username" name="username" placeholder="Username atau Email" required=""
                                type="text" data-i18n="login.placeholder.username" data-i18n-attr="placeholder" />
                        </div>
                    </div>
                    <div class="space-y-2">
                        <div class="flex justify-between items-center">
                            <label
                                class="font-label-caps text-label-caps text-on-surface-variant block uppercase tracking-wider"
                                for="password" data-i18n="login.label.password">Kata Sandi</label>
                            <a class="text-[12px] text-bronze-accent hover:text-secondary transition-colors font-semibold"
                                href="#" data-i18n="login.forgot_password">Lupa Password?</a>
                        </div>
                        <div
                            class="relative flex items-center group input-focus-glow transition-all duration-200 border border-outline-variant rounded-lg bg-surface-container-low">
                            <span
                                class="material-symbols-outlined absolute left-4 text-on-surface-variant group-focus-within:text-primary transition-colors">lock</span>
                            <input
                                class="w-full bg-transparent border-none py-4 pl-12 pr-12 text-ivory-text placeholder:text-outline focus:ring-0 rounded-lg font-body-md"
                                id="password" name="password" placeholder="••••••••" required="" type="password" data-i18n="login.placeholder.password" data-i18n-attr="placeholder" />
                            <button
                                class="absolute right-4 text-on-surface-variant hover:text-primary transition-colors"
                                type="button">
                                <span class="material-symbols-outlined text-[20px]">visibility</span>
                            </button>
                        </div>
                    </div>
                    <!-- Role Detection Badge (Simulated) -->
                    <div class="hidden animate-in fade-in slide-in-from-top-2 duration-300" id="roleBadge">
                        <div class="bg-primary/10 border border-primary/20 rounded-lg p-3 flex items-center gap-3">
                            <span class="material-symbols-outlined text-primary">verified</span>
                            <span class="text-sm text-primary font-medium" data-i18n="login.role_badge.student">Terdeteksi: Akun Mahasiswa Reguler</span>
                        </div>
                    </div>
                    <div class="flex items-center gap-2">
                        <input
                            class="w-4 h-4 rounded border-outline-variant bg-surface-container-low text-primary focus:ring-primary focus:ring-offset-background"
                            id="remember" type="checkbox" />
                        <label class="text-sm text-on-surface-variant select-none" for="remember" data-i18n="login.remember_me">Ingat saya di
                            perangkat ini</label>
                    </div>
                    <button
                        class="w-full bg-primary hover:bg-primary-fixed-dim text-on-primary font-bold py-4 rounded-lg transition-all duration-300 transform active:scale-[0.98] shadow-lg shadow-primary/20 flex items-center justify-center gap-2"
                        id="submitBtn" type="submit">
                        <span id="btnText" data-i18n="login.submit_btn">Masuk ke Laboratorium</span>
                        <span class="hidden" id="btnLoader">
                            <svg class="animate-spin h-5 w-5 text-on-primary" fill="none" viewbox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor"
                                    stroke-width="4"></circle>
                                <path class="opacity-75"
                                    d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"
                                    fill="currentColor"></path>
                            </svg>
                        </span>
                    </button>
                    <!-- No third-party login options (SIAKAD removed) -->
                </form>
                    <div class="mt-10 text-center">
                    <p class="text-on-surface-variant text-sm">
                        <span data-i18n="login.register_link_prefix">Belum memiliki akses?</span>
                        <a id="openRegisterModal" class="text-primary font-bold hover:underline" href="#" data-i18n="login.register_link">Daftar Akun Baru</a>
                    </p>
                </div>
            </div>
        </div>
    </main>
    <!-- Error/Notification Modal (Hidden by default) -->
    <div class="fixed bottom-8 left-1/2 -translate-x-1/2 z-[100] transition-all duration-300 translate-y-20 opacity-0"
        id="notification">
        <div class="bg-error-container text-on-error-container px-6 py-4 rounded-xl shadow-2xl flex items-center gap-4">
            <span class="material-symbols-outlined">error</span>
            <p class="font-medium" id="notificationText"></p>
        </div>
    </div>
    <!-- Register Modal -->
    <div id="registerModal" class="fixed inset-0 z-50 hidden items-center justify-center">
        <div id="registerBackdrop" class="absolute inset-0 bg-black/60 backdrop-blur-sm"></div>
        <div class="modal-sheet relative z-10 w-full max-w-md p-6 bg-surface-container rounded-2xl border border-outline-variant">
            <div style="display:flex;align-items:center;gap:12px;margin-bottom:12px">
                <div style="width:52px;height:52px;border-radius:12px;background:linear-gradient(135deg,#0d5c46,#2a7a63);display:grid;place-items:center;color:#fff;font-weight:700">SB</div>
                <div>
                    <h3 class="text-lg font-semibold text-ivory-text" data-i18n="login.register_modal.title">Buat Akun Siswa</h3>
                    <div class="modal-sub" data-i18n="login.register_modal.desc">Isi username dan kata sandi. Setelah pendaftaran, Anda akan masuk otomatis.</div>
                </div>
            </div>
            <form id="registerForm" class="space-y-4">
                <div>
                    <label class="block text-sm text-on-surface-variant mb-1" data-i18n="login.register_modal.username_label">Username</label>
                    <input id="reg_username" class="w-full rounded-lg p-3 bg-surface text-ivory-text border border-outline-variant" placeholder="email@domain atau nama" required data-i18n="login.register_modal.username_placeholder" data-i18n-attr="placeholder" />
                </div>
                <div>
                    <label class="block text-sm text-on-surface-variant mb-1" data-i18n="login.register_modal.password_label">Kata Sandi</label>
                    <input id="reg_password" type="password" class="w-full rounded-lg p-3 bg-surface text-ivory-text border border-outline-variant" placeholder="Minimal 6 karakter" required minlength="6" data-i18n="login.register_modal.password_placeholder" data-i18n-attr="placeholder" />
                </div>
                <div class="modal-actions">
                    <button type="button" id="regCancel" class="btn-ghost" data-i18n="login.register_modal.cancel">Batal</button>
                    <button type="submit" id="regSubmit" class="btn-primary" data-i18n="login.register_modal.submit">Daftar Sekarang</button>
                </div>
            </form>
        </div>
    </div>
    <!-- Password Change Modal -->
    <div id="passwordChangeModal" class="fixed inset-0 z-50 hidden items-center justify-center">
        <div id="pwdChangeBackdrop" class="absolute inset-0 bg-black/60 backdrop-blur-sm"></div>
        <div class="modal-sheet relative z-10 w-full max-w-md p-6 bg-surface-container rounded-2xl border border-outline-variant">
            <div style="display:flex;align-items:center;gap:12px;margin-bottom:12px">
                <div style="width:52px;height:52px;border-radius:12px;background:linear-gradient(135deg,#0d5c46,#2a7a63);display:grid;place-items:center;color:#fff;font-weight:700">🔐</div>
                <div>
                    <h3 class="text-lg font-semibold text-ivory-text" data-i18n="login.password_modal.title">Ubah Kata Sandi</h3>
                    <div class="modal-sub" data-i18n="login.password_modal.desc">Masukkan username dan kata sandi baru Anda.</div>
                </div>
            </div>
            <form id="passwordChangeForm" class="space-y-4">
                <div>
                    <label class="block text-sm text-on-surface-variant mb-1" data-i18n="login.password_modal.username_label">Username</label>
                    <input id="pwd_username" class="w-full rounded-lg p-3 bg-surface text-ivory-text border border-outline-variant" placeholder="Username Anda" required data-i18n="login.password_modal.username_placeholder" data-i18n-attr="placeholder" />
                </div>
                <div>
                    <label class="block text-sm text-on-surface-variant mb-1" data-i18n="login.password_modal.new_password_label">Kata Sandi Baru</label>
                    <input id="pwd_new" type="password" class="w-full rounded-lg p-3 bg-surface text-ivory-text border border-outline-variant" placeholder="Minimal 6 karakter" required minlength="6" data-i18n="login.password_modal.new_password_placeholder" data-i18n-attr="placeholder" />
                </div>
                <div class="modal-actions">
                    <button type="button" id="pwdCancel" class="btn-ghost" data-i18n="login.password_modal.cancel">Batal</button>
                    <button type="submit" id="pwdSubmit" class="btn-primary" data-i18n="login.password_modal.submit">Ubah Sandi</button>
                </div>
            </form>
        </div>
    </div>
    <script>
        (function(){
            const STUDENT_DASH = '../Dashboard_Siswa/Dashboard_siswa.php';
            const ADMIN_LOGIN = '../Login/login_admin.php';

            function notify(msg){
                const notification = document.getElementById('notification');
                const text = document.getElementById('notificationText');
                text.textContent = msg;
                notification.classList.replace('translate-y-20', 'translate-y-0');
                notification.classList.replace('opacity-0', 'opacity-100');
                setTimeout(()=>{ notification.classList.replace('translate-y-0', 'translate-y-20'); notification.classList.replace('opacity-100','opacity-0'); }, 3500);
            }

            function ensureUsers(){
                try{
                    const u = localStorage.getItem('lidm_users');
                    if(!u){
                        const defaults = [{username:'admin', password:'admin123', role:'admin'},{username:'student', password:'student123', role:'student'}];
                        localStorage.setItem('lidm_users', JSON.stringify(defaults));
                    }
                }catch(e){ console.warn(e); }
            }

            function getUsers(){ try{ return JSON.parse(localStorage.getItem('lidm_users')||'[]'); }catch(e){ return []; } }
            function saveUsers(arr){ localStorage.setItem('lidm_users', JSON.stringify(arr)); }

            document.addEventListener('DOMContentLoaded', ()=>{
                ensureUsers();

                const usernameInput = document.getElementById('username');
                const roleBadge = document.getElementById('roleBadge');

                usernameInput.addEventListener('input', (e)=>{
                    const v = (e.target.value||'').toLowerCase();
                    if(v.includes('admin')){
                        roleBadge.classList.remove('hidden');
                        roleBadge.querySelector('span:last-child').textContent = 'Terdeteksi: Akun Administrator (gunakan halaman admin)';
                        roleBadge.querySelector('.material-symbols-outlined').textContent = 'admin_panel_settings';
                    } else if(v.length>2){
                        roleBadge.classList.remove('hidden');
                        roleBadge.querySelector('span:last-child').textContent = 'Terdeteksi: Akun Mahasiswa Reguler';
                        roleBadge.querySelector('.material-symbols-outlined').textContent = 'verified';
                    } else {
                        roleBadge.classList.add('hidden');
                    }
                });

                // Register modal handlers
                const regOpenBtn = document.getElementById('openRegisterModal');
                const regModal = document.getElementById('registerModal');
                const regForm = document.getElementById('registerForm');
                const regCancel = document.getElementById('regCancel');

                function openRegisterModal(){
                    if(!regModal) return;
                    regModal.classList.remove('hidden');
                    regModal.classList.add('flex');
                    const inEl = document.getElementById('reg_username'); if(inEl) inEl.focus();
                }
                function closeRegisterModal(){
                    if(!regModal) return;
                    regModal.classList.add('hidden');
                    regModal.classList.remove('flex');
                    if(regForm) regForm.reset();
                }

                if(regOpenBtn){ regOpenBtn.addEventListener('click', (ev)=>{ ev.preventDefault(); openRegisterModal(); }); }
                if(regCancel){ regCancel.addEventListener('click', (ev)=>{ ev.preventDefault(); closeRegisterModal(); }); }

                if(regForm){
                    regForm.addEventListener('submit', (ev)=>{
                        ev.preventDefault();
                        const username = (document.getElementById('reg_username').value||'').trim();
                        const password = (document.getElementById('reg_password').value||'');
                        if(!username){ alert('Masukkan username'); return; }
                        if(!password || password.length < 6){ alert('Password minimal 6 karakter'); return; }
                        if(username.toLowerCase() === 'admin'){ alert('Username ini tidak diperbolehkan.'); return; }
                        const users = getUsers();
                        if(users.find(u=>u.username === username)){ alert('Username sudah terdaftar'); return; }

                        // Simpan ke localStorage
                        users.push({ username: username, password: password, role: 'student' });
                        users.push({ username: username, password: password, role: 'student' });
                        saveUsers(users);
                        closeRegisterModal();
                        // prefill login form
                        const loginUser = document.getElementById('username');
                        const loginPass = document.getElementById('password');
                        if(loginUser) loginUser.value = username;
                        if(loginPass) loginPass.value = password;
                        notify('Pendaftaran berhasil. Masuk otomatis...');
                        // auto-login after registration
                        setTimeout(()=>{
                            localStorage.setItem('isLoggedIn','true');
                            localStorage.setItem('userRole','student');
                            localStorage.setItem('currentUser', username);
                            window.location.href = STUDENT_DASH;
                        },700);
                    });
                }

                // Google sign-in removed per request; no external Google logic here.
            });

            window.handleLogin = async function(event){
                event.preventDefault();
                const submitBtn = document.getElementById('submitBtn');
                const btnText = document.getElementById('btnText');
                const btnLoader = document.getElementById('btnLoader');
                const username = (document.getElementById('username').value||'').trim();
                const password = (document.getElementById('password').value||'').trim();

                submitBtn.disabled = true; btnText.textContent = 'Memverifikasi...'; btnLoader.classList.remove('hidden');
                await new Promise(r=>setTimeout(r,800));

                const users = getUsers();
                const user = users.find(u => u.username === username || (u.email && u.email===username));
                if(!user){ notify('Pengguna tidak ditemukan. Coba daftar terlebih dahulu.'); submitBtn.disabled=false; btnText.textContent='Masuk ke Laboratorium'; btnLoader.classList.add('hidden'); return; }
                if(user.password !== password){ notify('Kata sandi salah.'); submitBtn.disabled=false; btnText.textContent='Masuk ke Laboratorium'; btnLoader.classList.add('hidden'); return; }

                if(user.role === 'admin'){
                    notify('Akun admin harus masuk melalui halaman admin.'); submitBtn.disabled=false; btnText.textContent='Masuk ke Laboratorium'; btnLoader.classList.add('hidden'); return;
                }

                // success student
                localStorage.setItem('isLoggedIn','true');
                localStorage.setItem('userRole','student');
                localStorage.setItem('currentUser', username);
                btnText.textContent = 'Akses Diberikan'; btnLoader.innerHTML = '<span class="material-symbols-outlined">check_circle</span>';

                setTimeout(()=>{ window.location.href = STUDENT_DASH; },700);
            };

            // Password change logic
            function openPasswordChangeModal(){
                const modal = document.getElementById('passwordChangeModal');
                if(modal) modal.classList.remove('hidden'), modal.classList.add('flex');
            }

            function closePasswordChangeModal(){
                const modal = document.getElementById('passwordChangeModal');
                if(modal) modal.classList.add('hidden'), modal.classList.remove('flex');
                localStorage.removeItem('redirectToPasswordChange');
            }

            const pwdCancel = document.getElementById('pwdCancel');
            if(pwdCancel){
                pwdCancel.addEventListener('click', (e)=>{
                    e.preventDefault();
                    closePasswordChangeModal();
                });
            }

            const passwordChangeForm = document.getElementById('passwordChangeForm');
            if(passwordChangeForm){
                passwordChangeForm.addEventListener('submit', (e)=>{
                    e.preventDefault();
                    const username = document.getElementById('pwd_username').value;
                    const newPassword = document.getElementById('pwd_new').value;

                    const users = getUsers();
                    const user = users.find(u => u.username === username);

                    if(!user){
                        notify('Username tidak ditemukan');
                        return;
                    }

                    user.password = newPassword;
                    saveUsers(users);
                    notify('Kata sandi berhasil diubah!');
                    closePasswordChangeModal();
                    passwordChangeForm.reset();
                    document.getElementById('username').value = username;
                    document.getElementById('password').value = newPassword;
                });
            }

            // Check if redirected from settings for password change
            if(localStorage.getItem('redirectToPasswordChange') === 'true'){
                setTimeout(()=>{ openPasswordChangeModal(); }, 500);
            }
        })();
    </script>
    <script src="../assets/js/i18n.js"></script>
</body>

</html>