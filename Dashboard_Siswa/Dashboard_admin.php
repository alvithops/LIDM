<!DOCTYPE html>

<html class="dark" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Manajemen Dashboard Siswa | Sharia Lab Admin</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&amp;family=Inter:wght@400;500;600;700&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }

        .glass-panel {
            background: rgba(26, 26, 26, 0.6);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.05);
        }

        .sharia-glow {
            box-shadow: 0 0 15px rgba(142, 213, 185, 0.1);
        }

        .sharia-glow-hover:hover {
            box-shadow: 0 0 20px rgba(142, 213, 185, 0.2);
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

<body class="bg-background text-on-background font-body-md overflow-x-hidden md:overflow-hidden">
    <!-- Sidebar Shell -->
    <aside id="adminSidebar"
        class="hidden md:flex w-[280px] h-screen fixed left-0 top-0 bg-charcoal-surface dark:bg-surface-container-lowest border-r border-outline-variant flex-col py-unit-lg z-50 transition-transform duration-300">
        <div class="px-unit-lg mb-unit-xl">
            <h1 class="font-headline-md text-headline-md text-sharia-green-deep dark:text-primary font-bold">Sharia Bank
                Lab</h1>
            <p class="text-on-surface-variant font-label-caps text-[10px] tracking-widest mt-1">MANAGEMENT PORTAL</p>
        </div>
        <nav class="flex-1 space-y-1">
            <a class="flex items-center gap-unit-md px-unit-lg py-unit-sm bg-primary-container/10 text-primary border-l-4 border-secondary font-bold transition-colors duration-200"
                href="#">
                <span class="material-symbols-outlined">dashboard</span>
                <span class="font-body-md">Dashboard</span>
            </a>
            <a class="flex items-center gap-unit-md px-unit-lg py-unit-sm text-on-surface-variant hover:text-on-surface hover:bg-surface-variant/50 transition-colors duration-200"
                href="../Simulasi/Simulasi_Admin.php">
                <span class="material-symbols-outlined">psychology</span>
                <span class="font-body-md">Simulasi</span>
            </a>
            <a class="flex items-center gap-unit-md px-unit-lg py-unit-sm text-on-surface-variant hover:text-on-surface hover:bg-surface-variant/50 transition-colors duration-200"
                href="../Pusat_Kompetensi/Pusat_Kompetensi_Admin.php">
                <span class="material-symbols-outlined">military_tech</span>
                <span class="font-body-md">Kompetensi</span>
            </a>
            <a class="flex items-center gap-unit-md px-unit-lg py-unit-sm text-on-surface-variant hover:text-on-surface hover:bg-surface-variant/50 transition-colors duration-200"
                href="../Riwayat/Riwayat_Admin.php">
                <span class="material-symbols-outlined">history</span>
                <span class="font-body-md">Riwayat</span>
            </a>
            <a class="flex items-center gap-unit-md px-unit-lg py-unit-sm text-on-surface-variant hover:text-on-surface hover:bg-surface-variant/50 transition-colors duration-200"
                href="../Setting/Setting_Admin.php">
                <span class="material-symbols-outlined">settings</span>
                <span class="font-body-md">Setelan</span>
            </a>
        </nav>
        <div class="mt-auto pt-unit-lg border-t border-outline-variant/30"></div>
    </aside>
    <!-- Mobile Overlay -->
    <div id="mobileOverlay" class="fixed inset-0 bg-black/60 z-40 hidden md:hidden" onclick="toggleAdminSidebar()"></div>
    <!-- Main Content Area -->
    <main class="md:ml-[280px] h-screen flex flex-col">
        <!-- Top Nav Shell -->
        <header
            class="h-16 sticky top-0 bg-surface-container dark:bg-surface-container-low border-b border-outline-variant shadow-sm flex justify-between items-center px-4 md:px-margin-desktop z-40">
            <div class="flex items-center gap-unit-lg">
                <button class="md:hidden material-symbols-outlined text-on-surface-variant hover:text-primary transition-colors" onclick="toggleAdminSidebar()">menu</button>
                <h2 class="font-headline-sm text-headline-sm font-bold text-on-surface">Sharia Lab Admin</h2>
                <div class="relative hidden md:block w-48 lg:w-72 xl:w-96">
                    <span
                        class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-on-surface-variant">search</span>
                    <input
                        class="w-full bg-surface-container-high border-none rounded-full py-2 pl-10 pr-4 text-sm focus:ring-1 focus:ring-primary placeholder-on-surface-variant/50"
                        placeholder="Search components, students..." type="text" />
                </div>
            </div>
            <div class="flex items-center gap-unit-md">
                <button
                    class="material-symbols-outlined p-2 text-on-surface-variant hover:text-primary transition-all cursor-pointer">notifications</button>
                <div
                    class="flex items-center gap-2 px-3 py-1.5 rounded-full hover:bg-surface-variant transition-colors cursor-pointer border border-outline-variant">
                    <div class="w-7 h-7 rounded-full bg-primary-container flex items-center justify-center">
                        <span class="material-symbols-outlined text-[18px] text-primary">person</span>
                    </div>
                    <span id="adminNameDisplay" class="text-label-caps font-label-caps">ADMIN-01</span>
                </div>
            </div>
        </header>
        <!-- Content Canvas -->
        <div class="flex-1 overflow-y-auto px-4 md:px-margin-desktop py-margin-desktop">
            <!-- Breadcrumbs -->
            <nav class="flex items-center gap-2 mb-unit-lg text-on-surface-variant">
                <span class="text-label-caps font-label-caps">Management</span>
                <span class="material-symbols-outlined text-sm">chevron_right</span>
                <span class="text-label-caps font-label-caps text-primary">Manajemen Dashboard Siswa</span>
            </nav>
            <header class="mb-unit-xl flex justify-between items-end">
                <div>
                    <h3 class="font-headline-lg text-[28px] md:text-headline-lg text-ivory-text mb-2">Student Interface Controller</h3>
                    <p class="text-on-surface-variant max-w-2xl">Modify the layout, highlights, and banners presented to
                        students in the <a class="text-primary hover:underline font-bold" href="#">Virtual Student
                            Dashboard (SCREEN_12)</a>. Ensure simulation integrity through structured widget deployment.
                    </p>
                </div>
                <button
                    class="bg-primary hover:bg-primary-container text-on-primary font-bold px-6 py-3 rounded-lg flex items-center gap-2 transition-all active:scale-95 shadow-lg">
                    <span class="material-symbols-outlined">publish</span>
                    <span>Publish Changes</span>
                </button>
            </header>
            <!-- Grid Layout -->
            <div class="grid grid-cols-12 gap-gutter">
                <!-- Hero Banners Section -->
                <section
                    class="col-span-12 glass-panel p-unit-lg rounded-xl overflow-hidden relative border-t-4 border-secondary">
                    <div class="flex justify-between items-center mb-unit-lg">
                        <div class="flex items-center gap-3">
                            <span class="material-symbols-outlined text-secondary">view_carousel</span>
                            <h4 class="font-headline-md text-headline-md">Hero Banner CRUD Manager</h4>
                        </div>
                        <button
                            class="bg-secondary/10 text-secondary hover:bg-secondary/20 px-4 py-2 rounded-lg text-sm font-bold flex items-center gap-2 border border-secondary/30 transition-all">
                            <span class="material-symbols-outlined text-sm">add_photo_alternate</span>
                            <span>Add New Banner</span>
                        </button>
                    </div>
                    <div class="flex gap-gutter overflow-x-auto pb-4 px-2">
                        <!-- Banner Card 1 -->
                        <div
                            class="min-w-[280px] sm:min-w-[360px] lg:min-w-[400px] bg-surface-container-high rounded-xl border border-outline-variant overflow-hidden group relative">
                            <div class="h-44 relative">
                                <div class="w-full h-full bg-cover bg-center"
                                    style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuB67ww4omoSg6s0y8UOvarr7eWmB1GYmxKVasjK2PbF60_ElDxvlQm91hwlzshsvd3SjCbyQHlLTmlJOPszoKdbuK9uU44EXTKhQDnf9Hm4UURih2jrzoSCxVgwp1AHYRVEjlfWWrzGz3sGF_dWd7R33bEJ7UQL6psxcZ643YxJPI28eWHAtztiNHNYqycWq-_Vwu25vpyQUzbd6ehPzJOcnjcxR2k0iG1JRXM8zCWg_zSp5c7nbUhYlVMGTYEMpcCV9c3mD2TFlMyi')">
                                </div>
                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-surface-container-high via-surface-container-high/40 to-transparent">
                                </div>
                                <!-- Hover Actions -->
                                <div
                                    class="absolute inset-0 bg-background/60 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center gap-4 backdrop-blur-sm">
                                    <button
                                        class="flex flex-col items-center gap-1 text-ivory-text hover:text-primary transition-colors">
                                        <div class="p-3 bg-primary/20 rounded-full"><span
                                                class="material-symbols-outlined">edit</span></div>
                                        <span class="text-[10px] font-bold uppercase">Edit Content</span>
                                    </button>
                                    <button
                                        class="flex flex-col items-center gap-1 text-ivory-text hover:text-error transition-colors">
                                        <div class="p-3 bg-error/20 rounded-full"><span
                                                class="material-symbols-outlined">delete_forever</span></div>
                                        <span class="text-[10px] font-bold uppercase">Delete</span>
                                    </button>
                                </div>
                            </div>
                            <div class="p-4">
                                <div class="flex justify-between items-start mb-2">
                                    <h5 class="font-bold text-ivory-text">Welcome to Virtual Sharia Hub</h5>
                                    <span
                                        class="px-2 py-1 bg-primary/20 text-primary text-[10px] font-label-caps rounded-full">ACTIVE</span>
                                </div>
                                <p class="text-on-surface-variant text-sm mb-4">Linked to: <span
                                        class="text-primary font-medium">Dashboard Welcome Screen</span></p>
                                <div class="flex items-center gap-4 text-[11px] text-on-surface-variant font-data-mono">
                                    <span class="flex items-center gap-1"><span
                                            class="material-symbols-outlined text-sm">timer</span> 24 Dec 2023</span>
                                    <span class="flex items-center gap-1"><span
                                            class="material-symbols-outlined text-sm">visibility</span> 12.4k
                                        Views</span>
                                </div>
                            </div>
                        </div>
                        <!-- Banner Card 2 -->
                        <div
                            class="min-w-[280px] sm:min-w-[360px] lg:min-w-[400px] bg-surface-container-high rounded-xl border border-outline-variant overflow-hidden group relative">
                            <div class="h-44 relative">
                                <div class="w-full h-full bg-cover bg-center"
                                    style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuD-5meUq4c-yM5mwQXc1NG_a-2quRRGmfrDZhlgdxraLs0_x4lwwgHPxeqD8hvg_iGeM0qHPryvnluL3Dhg-8Hh-iD6eZ34tlxLblytHJcu3MdlK5kgw8_zOLr9ih9wPCoZnr6t073tAlBHUOKshFbHOg5Z5mCqfMU9luo0hPFuv2JFjx_MH614LtIs5ndPupujsUvoRw_SURFe87v-HLevftVmc7vBhojengSzrt9KaXrVMZO5GbpTNO5PpBQ9F2ANt4d7GtWDdffh')">
                                </div>
                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-surface-container-high via-surface-container-high/40 to-transparent">
                                </div>
                                <!-- Hover Actions -->
                                <div
                                    class="absolute inset-0 bg-background/60 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center gap-4 backdrop-blur-sm">
                                    <button
                                        class="flex flex-col items-center gap-1 text-ivory-text hover:text-primary transition-colors">
                                        <div class="p-3 bg-primary/20 rounded-full"><span
                                                class="material-symbols-outlined">edit</span></div>
                                        <span class="text-[10px] font-bold uppercase">Edit Content</span>
                                    </button>
                                    <button
                                        class="flex flex-col items-center gap-1 text-ivory-text hover:text-error transition-colors">
                                        <div class="p-3 bg-error/20 rounded-full"><span
                                                class="material-symbols-outlined">delete_forever</span></div>
                                        <span class="text-[10px] font-bold uppercase">Delete</span>
                                    </button>
                                </div>
                            </div>
                            <div class="p-4">
                                <div class="flex justify-between items-start mb-2">
                                    <h5 class="font-bold text-ivory-text">Mudharabah Investment Lab</h5>
                                    <span
                                        class="px-2 py-1 bg-surface-variant text-on-surface-variant text-[10px] font-label-caps rounded-full">SCHEDULED</span>
                                </div>
                                <p class="text-on-surface-variant text-sm mb-4">Linked to: <span
                                        class="text-primary font-medium">Investment Module v2</span></p>
                                <div class="flex items-center gap-4 text-[11px] text-on-surface-variant font-data-mono">
                                    <span class="flex items-center gap-1"><span
                                            class="material-symbols-outlined text-sm">event</span> 01 Jan 2024</span>
                                    <span class="flex items-center gap-1"><span
                                            class="material-symbols-outlined text-sm">link</span> 1 Redirect</span>
                                </div>
                            </div>
                        </div>
                        <!-- Add Button Slot -->
                        <button
                            class="min-w-[200px] border-2 border-dashed border-outline-variant rounded-xl flex flex-col items-center justify-center gap-3 text-on-surface-variant hover:border-primary hover:text-primary hover:bg-primary/5 transition-all group">
                            <span
                                class="material-symbols-outlined text-4xl group-hover:scale-110 transition-transform">add_circle</span>
                            <div class="text-center">
                                <p class="font-bold text-sm uppercase">Create New</p>
                                <p class="text-[10px] opacity-60">Hero Placement</p>
                            </div>
                        </button>
                    </div>
                </section>
                <!-- Dashboard Widgets Controller -->
                <section
                    class="col-span-12 lg:col-span-8 glass-panel rounded-xl flex flex-col overflow-hidden border-t-4 border-primary">
                    <div class="p-unit-lg border-b border-outline-variant flex justify-between items-center">
                        <div class="flex items-center gap-3">
                            <span class="material-symbols-outlined text-primary">widgets</span>
                            <h4 class="font-headline-md text-headline-md">Interactive Widget CRUD</h4>
                        </div>
                        <div class="flex items-center gap-3">
                            <select
                                class="bg-surface-container border-outline-variant text-xs rounded-lg text-on-surface-variant focus:ring-primary">
                                <option>All Categories</option>
                                <option>Financial</option>
                                <option>Profile</option>
                                <option>Academic</option>
                            </select>
                            <button
                                class="bg-primary text-on-primary px-4 py-2 rounded-lg text-xs font-bold flex items-center gap-2 hover:bg-primary-container transition-colors">
                                <span class="material-symbols-outlined text-sm">add_box</span>
                                <span>Add Widget</span>
                            </button>
                        </div>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="w-full text-left border-collapse">
                            <thead>
                                <tr class="bg-surface-container-high/50">
                                    <th class="px-6 py-4 font-label-caps text-xs text-on-surface-variant">WIDGET NAME
                                    </th>
                                    <th class="px-6 py-4 font-label-caps text-xs text-on-surface-variant">MODULE LINK
                                    </th>
                                    <th class="px-6 py-4 font-label-caps text-xs text-on-surface-variant">STATUS</th>
                                    <th class="px-6 py-4 font-label-caps text-xs text-on-surface-variant">PRIORITY</th>
                                    <th class="px-6 py-4 font-label-caps text-xs text-on-surface-variant text-right">
                                        MANAGE</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-outline-variant/30">
                                <tr class="hover:bg-surface-variant/20 transition-colors group">
                                    <td class="px-6 py-4">
                                        <div class="flex items-center gap-3">
                                            <div class="p-2 bg-primary-container/20 rounded-lg text-primary"><span
                                                    class="material-symbols-outlined">account_balance_wallet</span>
                                            </div>
                                            <div>
                                                <div class="font-bold text-ivory-text">Buka Rekening</div>
                                                <div
                                                    class="text-[10px] text-on-surface-variant uppercase tracking-wider">
                                                    Quick Access</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-sm text-on-surface-variant font-medium">Onboarding</td>
                                    <td class="px-6 py-4">
                                        <span
                                            class="inline-flex items-center gap-1.5 py-1 px-2.5 rounded-full text-xs font-medium bg-green-500/10 text-primary">
                                            <span class="w-1.5 h-1.5 rounded-full bg-primary animate-pulse"></span>
                                            Visible
                                        </span>
                                    </td>
                                    <td class="px-6 py-4"><span
                                            class="px-2 py-0.5 bg-secondary-container text-on-secondary-container text-[10px] font-bold rounded">HIGH</span>
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <div class="flex justify-end gap-2">
                                            <button
                                                class="p-1.5 rounded bg-surface-variant/50 text-on-surface-variant hover:text-primary transition-colors"><span
                                                    class="material-symbols-outlined text-sm">edit</span></button>
                                            <button
                                                class="p-1.5 rounded bg-surface-variant/50 text-on-surface-variant hover:text-error transition-colors"><span
                                                    class="material-symbols-outlined text-sm">delete</span></button>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="hover:bg-surface-variant/20 transition-colors group">
                                    <td class="px-6 py-4">
                                        <div class="flex items-center gap-3">
                                            <div class="p-2 bg-tertiary-container/20 rounded-lg text-tertiary"><span
                                                    class="material-symbols-outlined">payments</span></div>
                                            <div>
                                                <div class="font-bold text-ivory-text">Setoran Tunai</div>
                                                <div
                                                    class="text-[10px] text-on-surface-variant uppercase tracking-wider">
                                                    Transaction</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-sm text-on-surface-variant font-medium">Cashiering</td>
                                    <td class="px-6 py-4">
                                        <span
                                            class="inline-flex items-center gap-1.5 py-1 px-2.5 rounded-full text-xs font-medium bg-green-500/10 text-primary">
                                            <span class="w-1.5 h-1.5 rounded-full bg-primary animate-pulse"></span>
                                            Visible
                                        </span>
                                    </td>
                                    <td class="px-6 py-4"><span
                                            class="px-2 py-0.5 bg-surface-variant text-on-surface-variant text-[10px] font-bold rounded">MEDIUM</span>
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <div class="flex justify-end gap-2">
                                            <button
                                                class="p-1.5 rounded bg-surface-variant/50 text-on-surface-variant hover:text-primary transition-colors"><span
                                                    class="material-symbols-outlined text-sm">edit</span></button>
                                            <button
                                                class="p-1.5 rounded bg-surface-variant/50 text-on-surface-variant hover:text-error transition-colors"><span
                                                    class="material-symbols-outlined text-sm">delete</span></button>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="hover:bg-surface-variant/20 transition-colors group">
                                    <td class="px-6 py-4">
                                        <div class="flex items-center gap-3">
                                            <div class="p-2 bg-secondary-container/20 rounded-lg text-secondary"><span
                                                    class="material-symbols-outlined">history_edu</span></div>
                                            <div>
                                                <div class="font-bold text-ivory-text">Riwayat Transaksi</div>
                                                <div
                                                    class="text-[10px] text-on-surface-variant uppercase tracking-wider">
                                                    Archive</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-sm text-on-surface-variant font-medium">Core Banking</td>
                                    <td class="px-6 py-4">
                                        <span
                                            class="inline-flex items-center gap-1.5 py-1 px-2.5 rounded-full text-xs font-medium bg-surface-variant/50 text-on-surface-variant">
                                            <span class="w-1.5 h-1.5 rounded-full bg-on-surface-variant"></span> Hidden
                                        </span>
                                    </td>
                                    <td class="px-6 py-4"><span
                                            class="px-2 py-0.5 bg-surface-variant text-on-surface-variant text-[10px] font-bold rounded">LOW</span>
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <div class="flex justify-end gap-2">
                                            <button
                                                class="p-1.5 rounded bg-surface-variant/50 text-on-surface-variant hover:text-primary transition-colors"><span
                                                    class="material-symbols-outlined text-sm">edit</span></button>
                                            <button
                                                class="p-1.5 rounded bg-surface-variant/50 text-on-surface-variant hover:text-error transition-colors"><span
                                                    class="material-symbols-outlined text-sm">delete</span></button>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="hover:bg-surface-variant/20 transition-colors group">
                                    <td class="px-6 py-4">
                                        <div class="flex items-center gap-3">
                                            <div class="p-2 bg-error-container/20 rounded-lg text-error"><span
                                                    class="material-symbols-outlined">warning</span></div>
                                            <div>
                                                <div class="font-bold text-ivory-text">Lapor Fraud</div>
                                                <div
                                                    class="text-[10px] text-on-surface-variant uppercase tracking-wider">
                                                    Compliance</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-sm text-on-surface-variant font-medium">Audit Simulation
                                    </td>
                                    <td class="px-6 py-4">
                                        <span
                                            class="inline-flex items-center gap-1.5 py-1 px-2.5 rounded-full text-xs font-medium bg-green-500/10 text-primary">
                                            <span class="w-1.5 h-1.5 rounded-full bg-primary animate-pulse"></span>
                                            Visible
                                        </span>
                                    </td>
                                    <td class="px-6 py-4"><span
                                            class="px-2 py-0.5 bg-error-container text-on-error-container text-[10px] font-bold rounded">CRITICAL</span>
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        <div class="flex justify-end gap-2">
                                            <button
                                                class="p-1.5 rounded bg-surface-variant/50 text-on-surface-variant hover:text-primary transition-colors"><span
                                                    class="material-symbols-outlined text-sm">edit</span></button>
                                            <button
                                                class="p-1.5 rounded bg-surface-variant/50 text-on-surface-variant hover:text-error transition-colors"><span
                                                    class="material-symbols-outlined text-sm">delete</span></button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-auto p-4 flex justify-between items-center border-t border-outline-variant/30">
                        <span class="text-[11px] text-on-surface-variant">Viewing 4 of 24 active student widgets</span>
                        <button
                            class="text-sm font-label-caps text-on-surface-variant hover:text-primary transition-all">View
                            All Widgets Library</button>
                    </div>
                </section>
                <!-- Sidebar Controls -->
                <aside class="col-span-12 lg:col-span-4 space-y-gutter">
                    <!-- AI Supervisor Suggestion -->
                    <div
                        class="glass-panel p-unit-lg rounded-xl relative overflow-hidden sharia-glow border border-primary/20">
                        <div class="absolute top-0 right-0 p-4 opacity-10">
                            <span class="material-symbols-outlined text-6xl text-primary">auto_awesome</span>
                        </div>
                        <div class="relative z-10">
                            <div class="flex items-center gap-2 mb-4">
                                <span class="px-2 py-0.5 bg-primary/20 text-primary text-[10px] font-bold rounded">AI
                                    ADVISOR</span>
                                <span class="text-xs text-on-surface-variant">Optimization Suggestion</span>
                            </div>
                            <h5 class="font-bold text-ivory-text mb-2">Increase Engagement</h5>
                            <p class="text-sm text-on-surface-variant mb-6 italic leading-relaxed">"Based on student
                                interaction logs, the 'Mudharabah Investment' widget should be promoted to High Priority
                                for this academic cycle to align with current curriculum goals."</p>
                            <button
                                class="w-full py-3 bg-sharia-green-deep border border-primary/30 text-primary rounded-lg font-bold text-sm hover:bg-primary/10 transition-all flex items-center justify-center gap-2">
                                <span>Apply Optimization</span>
                            </button>
                        </div>
                    </div>
                    <!-- Visibility Summary -->
                    <div class="glass-panel p-unit-lg rounded-xl">
                        <div class="flex justify-between items-center mb-4">
                            <h5 class="font-bold text-ivory-text">Student Dashboard Sync</h5>
                            <span class="text-[10px] text-on-surface-variant font-data-mono">ID: SCR-12-CFG</span>
                        </div>
                        <div class="space-y-4">
                            <div class="flex justify-between items-center text-sm">
                                <span class="text-on-surface-variant">Visible Widgets</span>
                                <span class="font-data-mono text-primary" id="syncWidgetCount">12/15</span>
                            </div>
                            <div class="w-full bg-surface-container-high h-1.5 rounded-full overflow-hidden">
                                <div class="bg-primary h-full w-[80%]" id="syncWidgetBar"></div>
                            </div>
                            <div class="flex justify-between items-center text-sm pt-2">
                                <span class="text-on-surface-variant">Hero Rotation</span>
                                <span class="font-data-mono text-secondary" id="syncBannerCount">3 Banners</span>
                            </div>
                            <div class="w-full bg-surface-container-high h-1.5 rounded-full overflow-hidden">
                                <div class="bg-secondary h-full w-[40%]" id="syncBannerBar"></div>
                            </div>
                            <div class="flex justify-between items-center text-sm pt-2">
                                <span class="text-on-surface-variant">Live Students Impacted</span>
                                <span class="font-data-mono text-tertiary" id="syncStudentCount">1,240 Users</span>
                            </div>
                        </div>
                    </div>
                    <!-- Layout Presets -->
                    <div class="glass-panel p-unit-lg rounded-xl">
                        <h5 class="font-bold text-ivory-text mb-4">Display Layouts (Student View)</h5>
                        <div class="grid grid-cols-2 gap-3">
                            <button
                                class="p-3 bg-surface-container-high border-2 border-primary rounded-lg text-left transition-all">
                                <div
                                    class="w-full aspect-video bg-background mb-2 rounded border border-outline-variant p-1 flex flex-col gap-1">
                                    <div class="h-1/3 bg-primary/20 w-full rounded"></div>
                                    <div class="flex-1 flex gap-1">
                                        <div class="w-1/2 bg-surface-variant rounded"></div>
                                        <div class="w-1/2 bg-surface-variant rounded"></div>
                                    </div>
                                </div>
                                <span class="text-xs font-bold text-primary">Focused View</span>
                            </button>
                            <button
                                class="p-3 bg-surface-container-high border-2 border-transparent hover:border-outline-variant rounded-lg text-left transition-all">
                                <div
                                    class="w-full aspect-video bg-background mb-2 rounded border border-outline-variant p-1 grid grid-cols-2 grid-rows-2 gap-1">
                                    <div class="bg-surface-variant rounded"></div>
                                    <div class="bg-surface-variant rounded"></div>
                                    <div class="bg-surface-variant rounded"></div>
                                    <div class="bg-surface-variant rounded"></div>
                                </div>
                                <span class="text-xs font-bold text-on-surface-variant">Grid Mosaic</span>
                            </button>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </main>
    <!-- Mobile Bottom Nav -->
    <nav class="md:hidden fixed bottom-0 left-0 w-full bg-charcoal-surface border-t border-outline-variant flex justify-around items-center h-16 px-2 z-50">
        <a class="flex flex-col items-center gap-1 text-primary" href="#">
            <span class="material-symbols-outlined text-xl" style="font-variation-settings:'FILL' 1;">dashboard</span>
            <span class="text-[10px] font-bold">Dashboard</span>
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
        <a class="flex flex-col items-center gap-1 text-on-surface-variant" href="../Setting/Setting_Admin.php">
            <span class="material-symbols-outlined text-xl">settings</span>
            <span class="text-[10px]">Setelan</span>
        </a>
    </nav>
    <!-- Overlay Micro-interactions -->
    <div class="fixed bottom-8 right-8 bg-surface-container-highest border border-primary p-4 rounded-xl shadow-2xl translate-y-24 opacity-0 transition-all duration-300 flex items-center gap-3 z-[100]"
        id="saveToast">
        <div class="bg-primary/20 p-2 rounded-lg text-primary">
            <span class="material-symbols-outlined">check_circle</span>
        </div>
        <div>
            <p class="font-bold text-sm text-ivory-text">Changes Queued</p>
            <p class="text-[11px] text-on-surface-variant">Ready to be published to Student Dashboard (SCREEN_12).</p>
        </div>
    </div>
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
        // On mobile, start with sidebar off-screen
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
        // Simple micro-interaction for the "Publish" button
        const publishBtn = document.querySelector('button.bg-primary');
        const toast = document.getElementById('saveToast');

        function getAdminUpdates() {
            try {
                return JSON.parse(localStorage.getItem('adminDashboardUpdates') || '[]');
            } catch (error) {
                return [];
            }
        }

        function saveAdminUpdates(updates) {
            localStorage.setItem('adminDashboardUpdates', JSON.stringify(updates));
        }

        function addAdminUpdate(title, message) {
            const updates = getAdminUpdates();
            updates.unshift({
                id: `update-${Date.now()}`,
                title,
                message,
                time: new Date().toLocaleTimeString('id-ID', { hour: '2-digit', minute: '2-digit' })
            });
            saveAdminUpdates(updates.slice(0, 10));
        }

        // ===== ADMIN CONTENT CONFIG (CRUD) =====
        const CONFIG_KEY = 'adminContentConfig';

        function getDefaultConfig() {
            return {
                supervisor: {
                    text: '"Jangan lupa untuk menjelaskan perbedaan antara akad <strong>Wadiah</strong> dan <strong>Mudharabah</strong>. Ibu Aminah menyebutkan ingin \'ketenangan\', tekankan pada aspek transparansi dan bagi hasil."',
                    observasi: 'Kredibilitas pengajuan nasabah UMKM perlu dilengkapi data pemasukan dan proyeksi kas yang lebih detail.',
                    rekomendasi: 'Fokus pada akad Mudharabah dan pembagian hasil, lalu pastikan ada dokumen rencana usaha lengkap.',
                    catatan: 'Perkuat pertanyaan terkait rencana penggunaan modal dan jadwal pelaporan usaha secara berkala.',
                    target: 'Berlatih simulasi Nasabah Haji atau KPR untuk meningkatkan pemahaman produk syariah lain.'
                },
                radar: {
                    murabahah: 92,
                    mudharabah: 65,
                    musyarakah: 78,
                    kepatuhan: 85,
                    global: 88
                },
                profile: {
                    role: 'Customer Service',
                    points: '14.280 XP',
                    greeting: 'Selamat Datang, {name}!'
                },
                banners: [
                    { id: 'b1', title: 'Welcome to Virtual Sharia Hub', desc: 'Dashboard Welcome Screen', active: true, date: '24 Dec 2023', views: '12.4k', img: 'https://lh3.googleusercontent.com/aida-public/AB6AXuB67ww4omoSg6s0y8UOvarr7eWmB1GYmxKVasjK2PbF60_ElDxvlQm91hwlzshsvd3SjCbyQHlLTmlJOPszoKdbuK9uU44EXTKhQDnf9Hm4UURih2jrzoSCxVgwp1AHYRVEjlfWWrzGz3sGF_dWd7R33bEJ7UQL6psxcZ643YxJPI28eWHAtztiNHNYqycWq-_Vwu25vpyQUzbd6ehPzJOcnjcxR2k0iG1JRXM8zCWg_zSp5c7nbUhYlVMGTYEMpcCV9c3mD2TFlMyi' },
                    { id: 'b2', title: 'Mudharabah Investment Lab', desc: 'Investment Module v2', active: false, date: '01 Jan 2024', views: '1 Redirect', img: 'https://lh3.googleusercontent.com/aida-public/AB6AXuD-5meUq4c-yM5mwQXc1NG_a-2quRRGmfrDZhlgdxraLs0_x4lwwgHPxeqD8hvg_iGeM0qHPryvnluL3Dhg-8Hh-iD6eZ34tlxLblytHJcu3MdlK5kgw8_zOLr9ih9wPCoZnr6t073tAlBHUOKshFbHOg5Z5mCqfMU9luo0hPFuv2JFjx_MH614LtIs5ndPupujsUvoRw_SURFe87v-HLevftVmc7vBhojengSzrt9KaXrVMZO5GbpTNO5PpBQ9F2ANt4d7GtWDdffh' }
                ],
                widgets: [
                    { id: 'w1', name: 'Buka Rekening', icon: 'account_balance_wallet', module: 'Onboarding', priority: 'HIGH', visible: true },
                    { id: 'w2', name: 'Setoran Tunai', icon: 'payments', module: 'Cashiering', priority: 'MEDIUM', visible: true },
                    { id: 'w3', name: 'Riwayat Transaksi', icon: 'history_edu', module: 'Core Banking', priority: 'LOW', visible: false },
                    { id: 'w4', name: 'Lapor Fraud', icon: 'warning', module: 'Audit Simulation', priority: 'CRITICAL', visible: true }
                ],
                scenarios: [
                    { id: 's1', title: 'Nasabah UMKM', badge: 'Beginner', desc: 'Pak Budi ingin mencari modal usaha untuk bengkel barunya melalui Akad Mudharabah.', xp: 150, link: '../Simulasi/Simulasi_Siswa.php', active: true },
                    { id: 's2', title: 'Nasabah Haji', badge: 'Intermediate', desc: 'Ibu Siti ingin membuka tabungan haji dengan setoran awal Rp 25.000.000.', xp: 250, link: '../Simulasi/Simulasi_Siswa.php', active: true },
                    { id: 's3', title: 'Nasabah KPR Syariah', badge: 'Intermediate', desc: 'Simulasi pengajuan pembiayaan rumah tanpa riba menggunakan Akad Murabahah.', xp: 300, link: '../Simulasi/Simulasi_Siswa.php', active: true },
                    { id: 's4', title: 'Deteksi Fraud Gaji', badge: 'Advanced', desc: 'Hati-hati! Calon nasabah memberikan slip gaji yang mencurigakan.', xp: 500, link: '../Simulasi/Simulasi_Siswa.php', active: true }
                ],
                topbar: {
                    balance: 'Rp 5.000.000',
                    xp: '2,450 XP'
                },
                quickActions: [
                    { id: 'umkm', title: 'Nasabah UMKM', desc: 'Analisis usaha dan pembukaan rekening UMKM.', icon: 'inventory_2', link: 'Nasabah_UMKM.php', color: 'primary' },
                    { id: 'haji', title: 'Nasabah Haji', desc: 'Pendaftaran dan verifikasi dana Haji.', icon: 'flight_takeoff', link: 'Nasabah_Haji.php', color: 'tertiary' },
                    { id: 'kpr', title: 'Nasabah KPR', desc: 'Simulasi pembiayaan KPR syariah.', icon: 'home_work', link: 'Nasabah_KPR.php', color: 'secondary' },
                    { id: 'fraud', title: 'Deteksi Fraud', desc: 'Pantau anomali dan risiko transaksi.', icon: 'security', link: 'Deteksi_Fraud.php', color: 'error' }
                ]
            };
        }

        function getConfig() {
            try {
                var raw = localStorage.getItem(CONFIG_KEY);
                if (!raw) { var def = getDefaultConfig(); localStorage.setItem(CONFIG_KEY, JSON.stringify(def)); return def; }
                var parsed = JSON.parse(raw);
                // Merge with defaults for any missing keys
                var def = getDefaultConfig();
                for (var k in def) { if (!(k in parsed)) parsed[k] = def[k]; }
                return parsed;
            } catch(e) { return getDefaultConfig(); }
        }

        function saveConfig(cfg) {
            localStorage.setItem(CONFIG_KEY, JSON.stringify(cfg));
            // Auto-refresh preview panels
            renderConfigPreview();
            renderSyncSummary();
        }

        // ---- Render functions ----
        function renderBanners() {
            var cfg = getConfig();
            var container = document.querySelector('.flex.gap-gutter.overflow-x-auto');
            if (!container) return;
            var html = '';
            cfg.banners.forEach(function(b) {
                var statusClass = b.active ? 'bg-primary/20 text-primary' : 'bg-surface-variant text-on-surface-variant';
                var statusText = b.active ? 'ACTIVE' : 'SCHEDULED';
                html += '<div class="min-w-[280px] sm:min-w-[360px] lg:min-w-[400px] bg-surface-container-high rounded-xl border border-outline-variant overflow-hidden group relative">';
                html += '<div class="h-44 relative">';
                html += '<div class="w-full h-full bg-cover bg-center" style="background-image:url(' + b.img + ')"></div>';
                html += '<div class="absolute inset-0 bg-gradient-to-t from-surface-container-high via-surface-container-high/40 to-transparent"></div>';
                html += '<div class="absolute inset-0 bg-background/60 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center gap-4 backdrop-blur-sm">';
                html += '<button onclick="editBanner(\'' + b.id + '\')" class="flex flex-col items-center gap-1 text-ivory-text hover:text-primary transition-colors"><div class="p-3 bg-primary/20 rounded-full"><span class="material-symbols-outlined">edit</span></div><span class="text-[10px] font-bold uppercase">Edit Content</span></button>';
                html += '<button onclick="deleteBanner(\'' + b.id + '\')" class="flex flex-col items-center gap-1 text-ivory-text hover:text-error transition-colors"><div class="p-3 bg-error/20 rounded-full"><span class="material-symbols-outlined">delete_forever</span></div><span class="text-[10px] font-bold uppercase">Delete</span></button>';
                html += '</div></div>';
                html += '<div class="p-4"><div class="flex justify-between items-start mb-2"><h5 class="font-bold text-ivory-text">' + b.title + '</h5><span class="px-2 py-1 ' + statusClass + ' text-[10px] font-label-caps rounded-full">' + statusText + '</span></div>';
                html += '<p class="text-on-surface-variant text-sm mb-4">Linked to: <span class="text-primary font-medium">' + b.desc + '</span></p>';
                html += '<div class="flex items-center gap-4 text-[11px] text-on-surface-variant font-data-mono"><span class="flex items-center gap-1"><span class="material-symbols-outlined text-sm">timer</span> ' + b.date + '</span><span class="flex items-center gap-1"><span class="material-symbols-outlined text-sm">visibility</span> ' + b.views + '</span></div></div></div>';
            });
            html += '<button onclick="addBanner()" class="min-w-[200px] border-2 border-dashed border-outline-variant rounded-xl flex flex-col items-center justify-center gap-3 text-on-surface-variant hover:border-primary hover:text-primary hover:bg-primary/5 transition-all group"><span class="material-symbols-outlined text-4xl group-hover:scale-110 transition-transform">add_circle</span><div class="text-center"><p class="font-bold text-sm uppercase">Create New</p><p class="text-[10px] opacity-60">Hero Placement</p></div></button>';
            container.innerHTML = html;
        }

        function renderWidgets() {
            var cfg = getConfig();
            var tbody = document.querySelector('tbody');
            if (!tbody) return;
            var html = '';
            cfg.widgets.forEach(function(w) {
                var statusHtml = w.visible
                    ? '<span class="inline-flex items-center gap-1.5 py-1 px-2.5 rounded-full text-xs font-medium bg-green-500/10 text-primary"><span class="w-1.5 h-1.5 rounded-full bg-primary animate-pulse"></span> Visible</span>'
                    : '<span class="inline-flex items-center gap-1.5 py-1 px-2.5 rounded-full text-xs font-medium bg-surface-variant/50 text-on-surface-variant"><span class="w-1.5 h-1.5 rounded-full bg-on-surface-variant"></span> Hidden</span>';
                var priorityColor = w.priority === 'HIGH' ? 'bg-secondary-container text-on-secondary-container' : w.priority === 'CRITICAL' ? 'bg-error-container text-on-error-container' : 'bg-surface-variant text-on-surface-variant';
                html += '<tr class="hover:bg-surface-variant/20 transition-colors group">';
                html += '<td class="px-6 py-4"><div class="flex items-center gap-3"><div class="p-2 bg-primary-container/20 rounded-lg text-primary"><span class="material-symbols-outlined">' + w.icon + '</span></div><div><div class="font-bold text-ivory-text">' + w.name + '</div><div class="text-[10px] text-on-surface-variant uppercase tracking-wider">Quick Access</div></div></div></td>';
                html += '<td class="px-6 py-4 text-sm text-on-surface-variant font-medium">' + w.module + '</td>';
                html += '<td class="px-6 py-4">' + statusHtml + '</td>';
                html += '<td class="px-6 py-4"><span class="px-2 py-0.5 ' + priorityColor + ' text-[10px] font-bold rounded">' + w.priority + '</span></td>';
                html += '<td class="px-6 py-4 text-right"><div class="flex justify-end gap-2">';
                html += '<button onclick="editWidget(\'' + w.id + '\')" class="p-1.5 rounded bg-surface-variant/50 text-on-surface-variant hover:text-primary transition-colors"><span class="material-symbols-outlined text-sm">edit</span></button>';
                html += '<button onclick="deleteWidget(\'' + w.id + '\')" class="p-1.5 rounded bg-surface-variant/50 text-on-surface-variant hover:text-error transition-colors"><span class="material-symbols-outlined text-sm">delete</span></button>';
                html += '<button onclick="toggleWidget(\'' + w.id + '\')" class="p-1.5 rounded bg-surface-variant/50 text-on-surface-variant hover:text-primary transition-colors"><span class="material-symbols-outlined text-sm">' + (w.visible ? 'visibility_off' : 'visibility') + '</span></button>';
                html += '</div></td></tr>';
            });
            html += '<tr class="hover:bg-surface-variant/20 transition-colors group"><td class="px-6 py-4"><button onclick="addWidget()" class="flex items-center gap-2 text-primary hover:text-primary-fixed transition-colors"><span class="material-symbols-outlined">add_box</span><span class="font-bold text-sm">Add Widget</span></button></td><td></td><td></td><td></td><td></td></tr>';
            tbody.innerHTML = html;
            // Update counter
            var visibleCount = cfg.widgets.filter(function(w) { return w.visible; }).length;
            var counter = document.querySelector('.mt-auto .text-on-surface-variant');
            if (counter) counter.textContent = 'Viewing ' + visibleCount + ' of ' + cfg.widgets.length + ' active student widgets';
        }

        // ---- CRUD: Banners ----
        window.addBanner = function() {
            var cfg = getConfig();
            var title = prompt('Banner title:');
            if (!title) return;
            var desc = prompt('Description / linked module:') || 'Custom Module';
            var newB = { id: 'b' + Date.now(), title: title, desc: desc, active: true, date: new Date().toLocaleDateString('id-ID', { day:'numeric', month:'short', year:'numeric' }), views: '0', img: 'https://via.placeholder.com/400x200/1a1a1a/8ed5b9?text=' + encodeURIComponent(title) };
            cfg.banners.push(newB);
            saveConfig(cfg);
            renderBanners();
            showToast('Banner "' + title + '" ditambahkan');
        };

        window.editBanner = function(id) {
            var cfg = getConfig();
            var b = cfg.banners.find(function(x) { return x.id === id; });
            if (!b) return;
            var title = prompt('Title:', b.title);
            if (!title) return;
            b.title = title;
            b.desc = prompt('Description:', b.desc) || b.desc;
            b.active = prompt('Active? (true/false):', b.active.toString()) === 'true';
            b.img = prompt('Image URL:', b.img) || b.img;
            saveConfig(cfg);
            renderBanners();
            showToast('Banner "' + title + '" diperbarui');
        };

        window.deleteBanner = function(id) {
            var cfg = getConfig();
            var b = cfg.banners.find(function(x) { return x.id === id; });
            if (!b || !confirm('Hapus banner "' + b.title + '"?')) return;
            cfg.banners = cfg.banners.filter(function(x) { return x.id !== id; });
            saveConfig(cfg);
            renderBanners();
            showToast('Banner dihapus');
        };

        // ---- CRUD: Widgets ----
        window.addWidget = function() {
            var cfg = getConfig();
            var name = prompt('Widget name:');
            if (!name) return;
            var module = prompt('Module name:') || 'General';
            var priority = prompt('Priority (LOW/MEDIUM/HIGH/CRITICAL):', 'MEDIUM');
            var icons = ['widgets', 'account_balance_wallet', 'payments', 'history_edu', 'warning', 'credit_card', 'receipt', 'savings'];
            var icon = icons[Math.floor(Math.random() * icons.length)];
            cfg.widgets.push({ id: 'w' + Date.now(), name: name, icon: icon, module: module, priority: priority, visible: true });
            saveConfig(cfg);
            renderWidgets();
            showToast('Widget "' + name + '" ditambahkan');
        };

        window.editWidget = function(id) {
            var cfg = getConfig();
            var w = cfg.widgets.find(function(x) { return x.id === id; });
            if (!w) return;
            w.name = prompt('Widget name:', w.name) || w.name;
            w.module = prompt('Module:', w.module) || w.module;
            w.priority = prompt('Priority (LOW/MEDIUM/HIGH/CRITICAL):', w.priority);
            saveConfig(cfg);
            renderWidgets();
            showToast('Widget "' + w.name + '" diperbarui');
        };

        window.deleteWidget = function(id) {
            var cfg = getConfig();
            var w = cfg.widgets.find(function(x) { return x.id === id; });
            if (!w || !confirm('Hapus widget "' + w.name + '"?')) return;
            cfg.widgets = cfg.widgets.filter(function(x) { return x.id !== id; });
            saveConfig(cfg);
            renderWidgets();
            showToast('Widget dihapus');
        };

        window.toggleWidget = function(id) {
            var cfg = getConfig();
            var w = cfg.widgets.find(function(x) { return x.id === id; });
            if (!w) return;
            w.visible = !w.visible;
            saveConfig(cfg);
            renderWidgets();
            showToast('Widget "' + w.name + '" visibility: ' + (w.visible ? 'visible' : 'hidden'));
        };

        // ---- Toast helper ----
        function showToast(msg) {
            var t = document.getElementById('saveToast');
            if (!t) return;
            t.querySelector('p:first-child').textContent = msg;
            t.classList.remove('translate-y-24', 'opacity-0');
            setTimeout(function() { t.classList.add('translate-y-24', 'opacity-0'); }, 3000);
        }

        // ---- Publish with config sync ----
        publishBtn.addEventListener('click', function() {
            publishBtn.innerHTML = '<span class="material-symbols-outlined animate-spin">sync</span><span>Syncing with Live View...</span>';
            setTimeout(function() {
                publishBtn.innerHTML = '<span class="material-symbols-outlined">publish</span><span>Publish Changes</span>';
                showToast('Perubahan berhasil dipublikasikan ke dashboard siswa.');
                addAdminUpdate('Dashboard Diperbarui', 'Admin telah memperbarui konten dashboard. Periksa pembaruan untuk melihat perubahan.');
                localStorage.setItem('adminLastPublish', new Date().toISOString());
            }, 1200);
        });

        // ---- Edit Supervisor ----
        window.editSupervisor = function() {
            var cfg = getConfig();
            var s = cfg.supervisor;
            s.text = prompt('AI Supervisor feedback:', s.text);
            if (s.text === null) return;
            s.observasi = prompt('Observasi utama:', s.observasi) || s.observasi;
            s.rekomendasi = prompt('Rekomendasi:', s.rekomendasi) || s.rekomendasi;
            s.catatan = prompt('Catatan:', s.catatan) || s.catatan;
            s.target = prompt('Target selanjutnya:', s.target) || s.target;
            saveConfig(cfg);
            showToast('Supervisor feedback diperbarui');
        };

        // ---- Edit Radar ----
        window.editRadar = function() {
            var cfg = getConfig();
            var r = cfg.radar;
            r.murabahah = parseInt(prompt('Murabahah (%)', r.murabahah), 10) || r.murabahah;
            r.mudharabah = parseInt(prompt('Mudharabah (%)', r.mudharabah), 10) || r.mudharabah;
            r.musyarakah = parseInt(prompt('Musyarakah (%)', r.musyarakah), 10) || r.musyarakah;
            r.kepatuhan = parseInt(prompt('Kepatuhan Syariah (%)', r.kepatuhan), 10) || r.kepatuhan;
            r.global = parseInt(prompt('Skor Global (%)', r.global), 10) || r.global;
            saveConfig(cfg);
            showToast('Radar kompetensi diperbarui');
        };

        // ---- Edit Profile ----
        window.editProfile = function() {
            var cfg = getConfig();
            var p = cfg.profile;
            p.role = prompt('Peran saat ini:', p.role) || p.role;
            p.points = prompt('Total poin:', p.points) || p.points;
            p.greeting = prompt('Greeting template (gunakan {name}):', p.greeting) || p.greeting;
            saveConfig(cfg);
            showToast('Profil siswa diperbarui');
        };

        // ---- Edit Topbar ----
        window.editTopbar = function() {
            var cfg = getConfig();
            var t = cfg.topbar;
            t.balance = prompt('Balance display:', t.balance) || t.balance;
            t.xp = prompt('XP display:', t.xp) || t.xp;
            saveConfig(cfg);
            showToast('Topbar diperbarui');
        };

        // ---- Edit Quick Actions ----
        window.editQuickActions = function() {
            var cfg = getConfig();
            var qa = cfg.quickActions;
            for (var i = 0; i < qa.length; i++) {
                qa[i].title = prompt('Quick Action ' + (i+1) + ' title:', qa[i].title) || qa[i].title;
                qa[i].desc = prompt('Quick Action ' + (i+1) + ' description:', qa[i].desc) || qa[i].desc;
                qa[i].icon = prompt('Quick Action ' + (i+1) + ' icon name:', qa[i].icon) || qa[i].icon;
                qa[i].link = prompt('Quick Action ' + (i+1) + ' link URL:', qa[i].link) || qa[i].link;
                qa[i].color = prompt('Quick Action ' + (i+1) + ' color (primary/secondary/tertiary/error):', qa[i].color) || qa[i].color;
            }
            saveConfig(cfg);
            showToast('Quick actions diperbarui');
        };

        // ---- Edit Scenarios ----
        window.editScenarios = function() {
            var cfg = getConfig();
            var s = cfg.scenarios;
            for (var i = 0; i < s.length; i++) {
                s[i].title = prompt('Scenario ' + (i+1) + ' title:', s[i].title) || s[i].title;
                s[i].desc = prompt('Scenario ' + (i+1) + ' description:', s[i].desc) || s[i].desc;
                s[i].badge = prompt('Scenario ' + (i+1) + ' badge:', s[i].badge) || s[i].badge;
                s[i].xp = parseInt(prompt('Scenario ' + (i+1) + ' XP:', s[i].xp), 10) || s[i].xp;
            }
            saveConfig(cfg);
            showToast('Skenario diperbarui (perubahan akan terlihat setelah publish)');
        };

        // ---- Initialize on load ----
        document.addEventListener('DOMContentLoaded', function() {
            var adminName = localStorage.getItem('currentUser');
            var nameEl = document.getElementById('adminNameDisplay');
            if (adminName && nameEl) nameEl.textContent = adminName.toUpperCase();

            getConfig();
            renderBanners();
            renderWidgets();
            renderSyncSummary();

            // Add edit buttons to sections
            var sections = document.querySelectorAll('section.glass-panel, div.glass-panel');
            sections.forEach(function(sec) {
                var header = sec.querySelector('.flex.items-center.gap-3');
                if (!header) return;
                var title = header.textContent || '';
                var btn = document.createElement('button');
                btn.className = 'ml-auto text-on-surface-variant hover:text-primary transition-colors';
                btn.innerHTML = '<span class="material-symbols-outlined text-sm">edit</span>';
                if (title.includes('Supervisor') || title.includes('Advisor')) {
                    btn.onclick = editSupervisor;
                    header.parentElement.appendChild(btn);
                }
            });

            // Inject edit buttons into layout sections
            var sidebarSections = document.querySelectorAll('aside .glass-panel, aside div[class*="rounded-xl"]');
            sidebarSections.forEach(function(sec) {
                var h5 = sec.querySelector('h5');
                if (!h5) return;
                var title = h5.textContent || '';
                var flexContainer = h5.parentElement;
                if (!flexContainer) return;
                var btn = document.createElement('button');
                btn.className = 'text-on-surface-variant hover:text-primary transition-colors';
                btn.innerHTML = '<span class="material-symbols-outlined text-sm">edit</span>';
                if (title.includes('Dashboard Sync')) {
                    btn.onclick = function() { showToast('Gunakan form di atas untuk mengedit widget.'); };
                    flexContainer.appendChild(btn);
                }
            });

            // Add floating quick-edit button in sidebar
            var sidebarCol = document.querySelector('aside.col-span-12');
            if (sidebarCol) {
                var quickEditDiv = document.createElement('div');
                quickEditDiv.className = 'glass-panel p-unit-lg rounded-xl';
                quickEditDiv.innerHTML = '<h5 class="font-bold text-ivory-text mb-4">Quick Edit Content</h5>'
                    + '<div class="grid grid-cols-2 gap-3">'
                    + '<button onclick="editSupervisor()" class="p-3 bg-surface-container-high hover:border-primary border border-outline-variant rounded-lg text-left transition-all"><span class="material-symbols-outlined text-sm text-primary">smart_toy</span><span class="block text-xs text-ivory-text font-bold mt-1">Supervisor</span></button>'
                    + '<button onclick="editRadar()" class="p-3 bg-surface-container-high hover:border-primary border border-outline-variant rounded-lg text-left transition-all"><span class="material-symbols-outlined text-sm text-secondary">radar</span><span class="block text-xs text-ivory-text font-bold mt-1">Radar</span></button>'
                    + '<button onclick="editProfile()" class="p-3 bg-surface-container-high hover:border-primary border border-outline-variant rounded-lg text-left transition-all"><span class="material-symbols-outlined text-sm text-tertiary">person</span><span class="block text-xs text-ivory-text font-bold mt-1">Profile</span></button>'
                    + '<button onclick="editScenarios()" class="p-3 bg-surface-container-high hover:border-primary border border-outline-variant rounded-lg text-left transition-all"><span class="material-symbols-outlined text-sm text-bronze-accent">inventory_2</span><span class="block text-xs text-ivory-text font-bold mt-1">Skenario</span></button>'
                    + '<button onclick="editTopbar()" class="p-3 bg-surface-container-high hover:border-primary border border-outline-variant rounded-lg text-left transition-all"><span class="material-symbols-outlined text-sm text-primary">bar_chart</span><span class="block text-xs text-ivory-text font-bold mt-1">Topbar</span></button>'
                    + '<button onclick="editQuickActions()" class="p-3 bg-surface-container-high hover:border-primary border border-outline-variant rounded-lg text-left transition-all"><span class="material-symbols-outlined text-sm text-secondary">bolt</span><span class="block text-xs text-ivory-text font-bold mt-1">Quick Akses</span></button>'
                    + '</div>';
                sidebarCol.insertBefore(quickEditDiv, sidebarCol.querySelector('.glass-panel:last-child').nextSibling);
            }

            // Add config preview section
            var asideCol = document.querySelector('aside.col-span-12');
            if (asideCol) {
                var previewDiv = document.createElement('div');
                previewDiv.className = 'glass-panel p-unit-lg rounded-xl';
                previewDiv.id = 'configPreviewPanel';
                previewDiv.innerHTML = '<h5 class="font-bold text-ivory-text mb-3">Data Terkini Dashboard Siswa</h5>'
                    + '<div id="configPreviewContent" class="space-y-2 text-xs text-on-surface-variant">Memuat...</div>';
                asideCol.appendChild(previewDiv);
                renderConfigPreview();
            }
        });

        function renderConfigPreview() {
            var el = document.getElementById('configPreviewContent');
            if (!el) return;
            var cfg = getConfig();
            el.innerHTML = ''
                + '<div class="flex justify-between"><span>Supervisor:</span><span class="text-primary font-bold">' + (cfg.supervisor.text ? 'Terisi' : 'Kosong') + '</span></div>'
                + '<div class="flex justify-between"><span>Radar:</span><span class="text-primary font-bold">' + cfg.radar.murabahah + '% / ' + cfg.radar.mudharabah + '% / ' + cfg.radar.musyarakah + '% / ' + cfg.radar.kepatuhan + '%</span></div>'
                + '<div class="flex justify-between"><span>Profile Role:</span><span class="text-primary font-bold">' + cfg.profile.role + '</span></div>'
                + '<div class="flex justify-between"><span>Profile Points:</span><span class="text-primary font-bold">' + cfg.profile.points + '</span></div>'
                + '<div class="flex justify-between"><span>Topbar Balance:</span><span class="text-primary font-bold">' + cfg.topbar.balance + '</span></div>'
                + '<div class="flex justify-between"><span>Topbar XP:</span><span class="text-primary font-bold">' + cfg.topbar.xp + '</span></div>'
                + '<div class="flex justify-between"><span>Skenario Aktif:</span><span class="text-primary font-bold">' + cfg.scenarios.filter(function(s){return s.active}).length + '/' + cfg.scenarios.length + '</span></div>'
                + '<div class="flex justify-between"><span>Banner Aktif:</span><span class="text-primary font-bold">' + cfg.banners.filter(function(b){return b.active}).length + '/' + cfg.banners.length + '</span></div>'
                + '<div class="flex justify-between"><span>Widget Tampil:</span><span class="text-primary font-bold">' + cfg.widgets.filter(function(w){return w.visible}).length + '/' + cfg.widgets.length + '</span></div>'
                + '<div class="flex justify-between"><span>Quick Actions:</span><span class="text-primary font-bold">' + cfg.quickActions.length + ' item</span></div>';
            renderSyncSummary();
        }

        function renderSyncSummary() {
            var cfg = getConfig();
            var visW = cfg.widgets.filter(function(w){return w.visible}).length;
            var totW = cfg.widgets.length;
            var actB = cfg.banners.filter(function(b){return b.active}).length;
            var totB = cfg.banners.length;
            var wc = document.getElementById('syncWidgetCount');
            var wb = document.getElementById('syncWidgetBar');
            var bc = document.getElementById('syncBannerCount');
            var bb = document.getElementById('syncBannerBar');
            var sc = document.getElementById('syncStudentCount');
            if (wc) wc.textContent = visW + '/' + totW;
            if (wb) wb.style.width = totW ? (visW / totW * 80 + 10) + '%' : '10%';
            if (bc) bc.textContent = actB + ' Banners';
            if (bb) bb.style.width = totB ? (actB / totB * 80 + 10) + '%' : '10%';
            if (sc) {
                var students = 0;
                try { var raw = localStorage.getItem('lidm_students'); if (raw) students = JSON.parse(raw).length; } catch(e) {}
                sc.textContent = (students || 1240).toLocaleString() + ' Users';
            }
        }
    </script>
    <script src="../app.js"></script>
</body>

</html>