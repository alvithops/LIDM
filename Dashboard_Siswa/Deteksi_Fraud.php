<!DOCTYPE html>
<html class="dark" lang="id">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Deteksi Fraud - SmartBank Syariah AI</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&amp;family=Inter:wght@400;500;600&amp;display=swap"
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
    </style>
</head>

<body class="bg-background text-on-surface font-body-md min-h-screen overflow-x-hidden">
    <aside
        class="hidden md:flex flex-col h-full border-r border-outline-variant bg-charcoal-surface w-[280px] fixed left-0 top-0 z-40">
        <div class="p-6">
            <h1 class="font-headline-md text-headline-md font-bold text-primary mb-1">SmartBank Syariah AI</h1>
            <p class="text-on-surface-variant text-sm opacity-70">Menu Deteksi Fraud</p>
        </div>
        <nav class="flex-1 px-3 space-y-1">
            <a class="flex items-center gap-4 text-on-surface-variant hover:text-ivory-text px-4 py-3 rounded-lg transition-colors duration-200"
                href="Dashboard_siswa.php">
                <span class="material-symbols-outlined">dashboard</span>
                <span class="font-medium">Dashboard</span>
            </a>
            <a class="flex items-center gap-4 text-on-surface-variant hover:text-ivory-text px-4 py-3 rounded-lg transition-colors duration-200"
                href="Nasabah_UMKM.php">
                <span class="material-symbols-outlined">inventory_2</span>
                <span class="font-medium">Nasabah UMKM</span>
            </a>
            <a class="flex items-center gap-4 text-on-surface-variant hover:text-ivory-text px-4 py-3 rounded-lg transition-colors duration-200"
                href="Nasabah_Haji.php">
                <span class="material-symbols-outlined">flight_takeoff</span>
                <span class="font-medium">Nasabah Haji</span>
            </a>
            <a class="flex items-center gap-4 text-on-surface-variant hover:text-ivory-text px-4 py-3 rounded-lg transition-colors duration-200"
                href="Nasabah_KPR.php">
                <span class="material-symbols-outlined">home_work</span>
                <span class="font-medium">Nasabah KPR</span>
            </a>
            <a class="flex items-center gap-4 bg-primary/10 text-primary border-l-4 border-secondary-fixed-dim px-4 py-3 rounded-r-lg transition-transform active:scale-[0.99]"
                href="Deteksi_Fraud.php">
                <span class="material-symbols-outlined">security</span>
                <span class="font-medium">Deteksi Fraud</span>
            </a>
        </nav>
    </aside>

    <header
        class="fixed top-0 right-0 w-full md:w-[calc(100%-280px)] h-16 z-30 bg-charcoal-surface/80 backdrop-blur-md shadow-sm flex justify-between items-center px-6">
        <div class="flex items-center gap-4">
            <div class="flex flex-col">
                <span class="font-label-caps text-label-caps text-primary uppercase">Halaman Program</span>
                <span class="font-semibold text-ivory-text">Deteksi Fraud</span>
            </div>
        </div>
        <div class="flex items-center gap-4">
            <a href="Dashboard_siswa.php"
                class="px-4 py-2 bg-primary text-on-primary rounded-full text-sm font-semibold hover:bg-primary/90 transition">Kembali ke Dashboard</a>
        </div>
    </header>

    <main class="pt-28 pb-16 px-6 md:pl-[calc(280px+24px)]">
        <div class="max-w-6xl mx-auto space-y-8">
            <section class="glass-card rounded-3xl p-8">
                <div class="flex flex-col gap-4">
                    <div class="flex items-center gap-4">
                        <div class="w-14 h-14 rounded-3xl bg-primary/10 text-primary flex items-center justify-center">
                            <span class="material-symbols-outlined text-3xl">security</span>
                        </div>
                        <div>
                            <h1 class="font-headline-md text-headline-md text-ivory-text">Deteksi Fraud</h1>
                            <p class="text-on-surface-variant">Halaman analitik untuk deteksi transaksi mencurigakan, pola risiko, dan audit kepatuhan syariah.</p>
                        </div>
                    </div>
                    <div class="grid gap-4 lg:grid-cols-3">
                        <div class="p-6 rounded-3xl bg-surface-container-high shadow-sm border border-outline-variant">
                            <h2 class="font-semibold text-ivory-text mb-2">Pola Risiko</h2>
                            <p class="text-sm text-on-surface-variant">Analisis pola transaksi, tanda-tanda penghindaran kepatuhan, dan anomali pelanggan.</p>
                        </div>
                        <div class="p-6 rounded-3xl bg-surface-container-high shadow-sm border border-outline-variant">
                            <h2 class="font-semibold text-ivory-text mb-2">Audit Transaksi</h2>
                            <p class="text-sm text-on-surface-variant">Cek riwayat transaksi dan kegiatan yang dapat mengindikasikan money laundering atau maysir.</p>
                        </div>
                        <div class="p-6 rounded-3xl bg-surface-container-high shadow-sm border border-outline-variant">
                            <h2 class="font-semibold text-ivory-text mb-2">Tindakan Pencegahan</h2>
                            <p class="text-sm text-on-surface-variant">Beri rekomendasi tindakan mitigasi dan laporkan kasus untuk tim kepatuhan.</p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="glass-card rounded-3xl p-8">
                <h2 class="font-headline-md text-headline-md text-ivory-text mb-4">Alur Deteksi Fraud</h2>
                <ul class="space-y-4 text-on-surface-variant list-disc list-inside">
                    <li>Monitoring transaksi reguler dan deteksi anomali real-time.</li>
                    <li>Pengecekan terhadap profil nasabah dan pola rekening.</li>
                    <li>Pembuatan laporan kecurigaan untuk tim kepatuhan internal.</li>
                    <li>Pengambilan tindakan keamanan berdasarkan hasil analisis.</li>
                </ul>
            </section>
        </div>
    </main>
</body>

</html>